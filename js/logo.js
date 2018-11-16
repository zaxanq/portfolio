"use strict";

let header = $("header");
let hexagon = $(".hexagon");
let logo = $(".header-logo");
let logoScrollHeight; // amount of pixels at which the logo will stop scrolling with user
let headerScrollHeight;

$(window).on("scroll", function() {
  if (window.outerWidth >= 1430) logoScrollHeight = 448;
  else if (window.outerWidth >= 1350) logoScrollHeight = 408;
  else if (window.outerWidth >= 1270) logoScrollHeight = 356;
  else logoScrollHeight = 332;

  if (this.scrollY > logoScrollHeight) logo.addClass("header-logo__absolute");
  else if (this.scrollY < logoScrollHeight)
    logo.removeClass("header-logo__absolute");
});

$(document).ready(function() {
  if (window.outerWidth > 1270) headerScrollHeight = 512;
  else headerScrollHeight = 408;

  header
    .animate({ height: 1 }, -1)
    .animate({ height: headerScrollHeight }, 500); // header scrolls down
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

setTimeout(function() {
  header.css("transition", ".5s");
}, 1501);
