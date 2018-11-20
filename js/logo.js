"use strict";

let logo = $(".header-logo");
let scrollLogoTo;
let scrollHeaderTo;
let isLandscape = () => $(window).width() >= $(window).height();

$(window).scroll(function () {
  if (isLandscape()) { // pc
    if ($(window).width() >= 1440) scrollLogoTo = 468;
    else if ($(window).width() >= 1360) scrollLogoTo = 408;
    else if ($(window).width() >= 1280) scrollLogoTo = 356;
    else scrollLogoTo = 332;
  }
  else { // mobile
    if ($(window).width() == 1080) scrollLogoTo = 300;
  }

  if (this.scrollY > scrollLogoTo) {
    logo.addClass("header-logo__absolute");
    console.log('logo jest teraz abs.');
  }
  else {
    logo.removeClass("header-logo__absolute");
    console.log('logo jest teraz plynne.');
  }
}
);
