"use strict";

let header = $("header");
let hexagon = $(".hexagon");
let logo = $(".header-logo");
let height = 448; // amount of pixels at which the logo will stop scrolling with user

$(window).on("scroll", function() {
  if (this.scrollY > height) logo.addClass("header-logo__absolute");
  else if (this.scrollY < height) logo.removeClass("header-logo__absolute");
});

$(document).ready(function() {
  header.animate({ height: 1 }, -1).animate({ height: 512 }, 500); // header scrolls down
  logo
    .animate({ opacity: 0 }, -1)
    .animate({ opacity: 0 }, 600)
    .animate({ opacity: 1 }, 900); // delayed logo becomes visible
  hexagon.animate({ top: 2000 }, -1).animate({ top: 0 }, 800); // the hexagon scrolls up the last
});

setTimeout(function() {
  logo.removeAttr("style");
  header.removeAttr("style");
  hexagon.removeAttr("style");
}, 1500);
