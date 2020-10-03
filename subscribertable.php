<?php
if(!class_exists('WP_List_Table')){
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class TT_Example_List_Table extends WP_List_Table {
    
	
    var $example_data = array();


    function __construct(){
        global $status, $page, $wpdb;
                
        parent::__construct( array(
            'singular'  => 'id',     //singular name of the listed records
            'plural'    => 'id',    //plural name of the listed records
            'ajax'      => false        //does this table support ajax?
        ) );
		
		$getuser = $wpdb->get_results("SELECT * FROM wp0m_subscriber order by id DESC", ARRAY_A);
        $this->example_data = $getuser;
    }

    
	function column_default($item, $column_name){
        switch($column_name){
            case $column_name:
                return $item[$column_name];
            default:
                return print_r($item,true); //Show the whole array for troubleshooting purposes
        }
    }


    function column_title($item){
        
        //Build row actions
        $actions = array(
            'edit'      => sprintf('<a href="?page=%s&action=%s&id=%s">Edit</a>',$_REQUEST['page'],'edit',$item['id']),
            'delete'    => sprintf('<a href="?page=%s&action=%s&id=%s">Delete</a>',$_REQUEST['page'],'delete',$item['id']),
        );
        
        //Return the title contents
        return sprintf('%1$s <span style="color:silver">(id:%2$s)</span>%3$s',
            /*$1%s*/ $item['email'],
            /*$1%s*/ $item['date_added'],
            /*$3%s*/ $this->row_actions($actions)
        );
    }


    function column_cb($item){
        return sprintf(
            '<input type="checkbox" name="%1$s[]" value="%2$s" />',
            /*$1%s*/ $this->_args['singular'],  //Let's simply repurpose the table's singular label ("movie")
            /*$2%s*/ $item['id']                //The value of the checkbox should be the record's id
        );
    }

    function get_columns(){
        $columns = array(
            'cb'        => '<input type="checkbox" />', //Render a checkbox instead of text
            'email'     => 'Email',
            'date_added'=> 'Date'
        );
        return $columns;
    }

    function get_sortable_columns() {
        $sortable_columns = array();
        return $sortable_columns;
    }

    function get_bulk_actions() {
        $actions = array(
            'delete'    => 'Delete'
        );
        return $actions;
    }

    function process_bulk_action() {
		
		global $wpdb;
        if( 'delete'===$this->current_action() ) {
			$ids = isset($_REQUEST['id']) ? $_REQUEST['id'] : array();
			if (is_array($ids)) $ids = implode(',', $ids);
			if (!empty($ids)) {
				$wpdb->query("DELETE FROM `wp0m_subscriber` WHERE id IN($ids)");
			}
            $url = esc_url(admin_url('admin.php')).'?page=tt_list_test';
			wp_redirect($url);
        }
        
    }

    function prepare_items() {
        global $wpdb; 

        $per_page = 5;
        
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        
        $this->_column_headers = array($columns, $hidden, $sortable);
        
        $this->process_bulk_action();
        
        $data = $this->example_data;
        
        /* function usort_reorder($a,$b){
            $orderby = (!empty($_REQUEST['orderby'])) ? $_REQUEST['orderby'] : 'id'; //If no sort, default to title
            $order = (!empty($_REQUEST['order'])) ? $_REQUEST['order'] : 'DESC'; //If no order, default to asc
            $result = strcmp($a[$orderby], $b[$orderby]); //Determine sort order
            return ($order==='DESC') ? $result : -$result; //Send final sort direction to usort
        }
        usort($data, 'usort_reorder'); */
        
        $current_page = $this->get_pagenum();
        
        $total_items = count($data);
        
        $data = array_slice($data,(($current_page-1)*$per_page),$per_page);
        
        $this->items = $data;
        
        $this->set_pagination_args( array(
            'total_items' => $total_items,                  //WE have to calculate the total number of items
            'per_page'    => $per_page,                     //WE have to determine how many items to show on a page
            'total_pages' => ceil($total_items/$per_page)   //WE have to calculate the total number of pages
        ) );
    }

}

function tt_add_menu_items(){
    add_menu_page('Subscriber Manager', 'Subscriber Manager', '', 'my-menu2', 'tt_list_test','','4');
	//add_submenu_page('my-menu2','Subscriber List', 'Subscriber List', 'activate_plugins', 'tt_list_test', 'tt_render_list_page');
} 

add_action('admin_menu', 'tt_add_menu_items');

function tt_render_list_page(){
    $testListTable = new TT_Example_List_Table();
    $testListTable->prepare_items();
    
if(isset($_GET['type']) && $_GET['type'] == 'add'){
?>
	<div class="wrap">
		<div id="icon-users" class="icon32"><br/></div>
		<h2>Add Eligible Customers</h2>
		<form id="movies-filter" action="<?=esc_url(admin_url('admin-post.php')).'?action=submitEligibleCustomer'?>" method="POST" enctype="multipart/form-data">
			<input type="file" name="customerlist" >
			<input type="submit" name="submit" value="Submit">
		</form>
	</div><hr>
<?php } ?>
    <div class="wrap">
        
        <div id="icon-users" class="icon32"><br/></div>
        <h2>Subscriber List</h2>
        <form id="movies-filter" method="get">
            <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
            <?php $testListTable->display() ?>
        </form>
        
    </div>
    <?php
}

?>

