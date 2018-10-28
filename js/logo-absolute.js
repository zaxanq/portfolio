var header = $("header");
var hexagon = $(".hexagon");
var logo = $(".header-logo");
var height = 512;
$(window).on("scroll", function(e) {
  if (this.scrollY > height) {
    logo.addClass("header-logo__absolute");
  } else if (this.scrollY < height) {
    logo.removeClass("header-logo__absolute");
  }
});

$(document).ready(function(e) {
  header.animate({ height: 1 }, -1).animate({ height: 512 }, 500);
  hexagon.animate({ top: 2000 }, -1).animate({ top: 0 }, 800);
  logo.animate({ top: -512 }, -1).animate({ top: 0 }, 700);
});
