"use strict";

let logo = $(".header-logo");
let scrollLogoTo;
let scrollHeaderTo;
let isLandscape = () => $(window).width() >= $(window).height();

$(window).scroll(function() {
  if (isLandscape()) {
    // pc (logo is not scrolling on mobile)
    if ($(window).width() >= 1440) scrollLogoTo = 468;
    else if ($(window).width() >= 1360) scrollLogoTo = 448;
    else scrollLogoTo = 420;
  }

  if (this.scrollY > scrollLogoTo) logo.addClass("header-logo__absolute");
  else logo.removeClass("header-logo__absolute");
});

$(document).ready(function() {
  if (isLandscape()) {
    if ($(window).width() >= 1280) scrollHeaderTo = 512;
    else scrollHeaderTo = 408;
    $(".hexagon")
      .animate({ top: 2000 }, -1)
      .animate({ top: 0 }, 800);
  } else {
    scrollHeaderTo = "100%";
    $(".hexagon")
      .animate({ top: 2000 }, -1)
      .animate({ top: 480 }, 800);
  }

  $("header")
    .animate({ height: 0 }, -1)
    .animate({ height: scrollHeaderTo }, 500); // header scrolls down
  logo
    .animate({ opacity: 0 }, -1)
    .animate({ opacity: 0 }, 600)
    .animate({ opacity: 1 }, 900); // delayed logo becomes visible
  // the hexagon scrolls up the last
});

setTimeout(function() {
  logo.removeAttr("style");
  // $("header").removeAttr("style");
  $(".hexagon").removeAttr("style");
}, 2000);

setTimeout(function() {
  $("header").css("transition", ".5s");
}, 2010);
