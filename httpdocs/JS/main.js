// Mobile nav toggle
(function () {
	var toggle = document.getElementById("nav-toggle");
	var nav = document.getElementById("site-nav");
	if (!toggle || !nav) return;

	toggle.addEventListener("click", function () {
		var isOpen = nav.classList.toggle("is-open");
		toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
	});

	// Teams dropdown on touch/mobile: toggle instead of hover
	document.querySelectorAll(".nav-dropdown > button").forEach(function (btn) {
		btn.addEventListener("click", function () {
			btn.closest(".nav-dropdown").classList.toggle("is-open");
		});
	});
})();

// Slideshow
(function () {
	var viewport = document.querySelector(".slideshow__viewport");
	if (!viewport) return;

	var slides = Array.from(viewport.querySelectorAll(".slide"));
	var dots = Array.from(document.querySelectorAll(".slideshow__dots button"));
	var prevBtn = document.querySelector(".slideshow__nav--prev");
	var nextBtn = document.querySelector(".slideshow__nav--next");
	var index = 0;
	var timer;

	function show(n) {
		index = (n + slides.length) % slides.length;
		slides.forEach(function (s, i) {
			s.classList.toggle("is-active", i === index);
		});
		dots.forEach(function (d, i) {
			d.classList.toggle("is-active", i === index);
		});
	}

	function restartAutoplay() {
		clearInterval(timer);
		timer = setInterval(function () {
			show(index + 1);
		}, 6000);
	}

	prevBtn.addEventListener("click", function () {
		show(index - 1);
		restartAutoplay();
	});
	nextBtn.addEventListener("click", function () {
		show(index + 1);
		restartAutoplay();
	});
	dots.forEach(function (dot, i) {
		dot.addEventListener("click", function () {
			show(i);
			restartAutoplay();
		});
	});

	show(0);
	restartAutoplay();
})();
