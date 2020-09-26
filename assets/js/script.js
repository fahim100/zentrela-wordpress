// $(document).ready(function () {
jQuery(document).ready(function($){
	"use strict";

	$(".nav").headroom();
	AOS.init();
	// Smooth Scroll to Section
	$("a.page-scroll").on("click", function (event) {
		var $anchor = $(this);
		$("html, body")
			.stop()
			.animate(
				{
					scrollTop: $($anchor.attr("href")).offset().top - 180,
				},
				700
			);
		event.preventDefault();
	});

	$('.offcanvas-toggle').on('click', function () {
		$('.offcanvas').addClass('open');
		$('.offcanvas-overlay').addClass('on');
	});
	$('.offcanvas-close, .offcanvas-overlay').on('click', function () {
		$('.offcanvas').removeClass('open');
		$('.offcanvas-overlay').removeClass('on');
	});

	// Megnet
	var magnets = document.querySelectorAll(".magnetic");
	var strength = 50;

	magnets.forEach((magnet) => {
		magnet.addEventListener("mousemove", moveMagnet);
		magnet.addEventListener("mouseout", function (event) {
			TweenMax.to(event.currentTarget, 1.5, {
				x: 0,
				y: 0,
				ease: Power4.easeOut,
			});
		});
	});
	function moveMagnet(event) {
		var magnetButton = event.currentTarget;
		var bounding = magnetButton.getBoundingClientRect();
		TweenMax.to(magnetButton, 0.5, {
			x:
				((event.clientX - bounding.left) / magnetButton.offsetWidth - 0.5) *
				strength,
			y:
				((event.clientY - bounding.top) / magnetButton.offsetHeight - 0.5) *
				strength,
			ease: Power4.easeOut,
		});
	}

	// $(document).on("mousemove mouseenter", function (e) {
	// 	const pointer = $(".pointer");
	// 	TweenMax.to(pointer, 0.5, {
	// 		left: e.clientX,
	// 		top: e.clientY,
	// 		ease: Expo.easeOut,
	// 	});
	// });
	if ($("#particles-white").length) {
		particlesJS("particles-white", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#ffffff",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#ffffff",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray").length) {
		particlesJS("particles-gray", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray-1").length) {
		particlesJS("particles-gray-1", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray-2").length) {
		particlesJS("particles-gray-2", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray-3").length) {
		particlesJS("particles-gray-3", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray-4").length) {
		particlesJS("particles-gray-4", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray-5").length) {
		particlesJS("particles-gray-5", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-white-1").length) {
		particlesJS("particles-white-1", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#ffffff",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#ffffff",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray-6").length) {
		particlesJS("particles-gray-6", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray-7").length) {
		particlesJS("particles-gray-7", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-white-2").length) {
		particlesJS("particles-white-2", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#ffffff",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#ffffff",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
	if ($("#particles-gray-8").length) {
		particlesJS("particles-gray-8", {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 1200,
					},
				},
				color: {
					value: "#595959",
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#000000",
					},
					polygon: {
						nb_sides: 5,
					},
					image: {
						src: "img/github.svg",
						width: 100,
						height: 100,
					},
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false,
					},
				},
				size: {
					value: 0,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false,
					},
				},
				line_linked: {
					enable: true,
					distance: 300,
					color: "#595959",
					opacity: 1,
					width: 1,
				},
				move: {
					enable: true,
					speed: 6,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200,
					},
				},
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: false,
						mode: "repulse",
					},
					onclick: {
						enable: false,
						mode: "push",
					},
					resize: true,
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1,
						},
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3,
					},
					repulse: {
						distance: 200,
						duration: 0.4,
					},
					push: {
						particles_nb: 4,
					},
					remove: {
						particles_nb: 2,
					},
				},
			},
			retina_detect: true,
		});
	}
// });

	// Objective Slider
	$slick = $(".objective-slider");
	$slick.slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		centerPadding: "532px",
		arrows: true,
		speed: 1500,
		prevArrow:
			'<div class="objective-slider-prev"><svg xmlns="http://www.w3.org/2000/svg" width="7.828" height="12.828" viewBox="0 0 7.828 12.828"><path d="M6.414 1.414l-5 5 5 5" fill="none" stroke="#1e334c" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"/></svg></div>',
		nextArrow:
			'<div class="objective-slider-next"><svg xmlns="http://www.w3.org/2000/svg" width="7.828" height="12.828" viewBox="0 0 7.828 12.828"><path d="M6.414 1.414l-5 5 5 5" fill="none" stroke="#1e334c" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"/></svg></div>',
		responsive: [
			{
				breakpoint: 1600,
				settings: {
					centerPadding: "300px",
				}
			},
			{
				breakpoint: 1201,
				settings: {
					centerPadding: "100px",
				}
			},
			{
				breakpoint: 992,
				settings: {
					centerPadding: "50px",
				}
			},
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					arrows: false,
					centerPadding: "0px",
				}
			}
		]
	});

	var time = 3;
	var $bar, $slick, isPause, tick, percentTime;

	$bar = $(".objective-slider-progress .progress");
	function startProgressbar() {
		resetProgressbar();
		percentTime = 0;
		isPause = false;
		tick = setInterval(interval, 10);
	}

	function interval() {
		if (isPause === false) {
			percentTime += 1 / (time + 0.1);
			$bar.css({
				width: percentTime + "%",
			});
			if (percentTime >= 100) {
				$slick.slick("slickNext");
				startProgressbar();
			}
		}
	}

	function resetProgressbar() {
		$bar.css({
			width: 0 + "%",
		});
		clearTimeout(tick);
	}

	startProgressbar();

	$(".objective-slider-prev, .objective-slider-next").on("click", function () {
	startProgressbar();
});

});