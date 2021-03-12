//Preloader

jQuery(window).load(function() {
	"use strict";
	jQuery(".preloaders-gif").fadeOut();
	jQuery(".preloaders").delay(1000).fadeOut("slow");
})