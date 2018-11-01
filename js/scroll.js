"use strict";

let menuElements = $(".menu-element");
console.log(menuElements);
console.log(menuElements.toArray());
$(".menu-element")
  .toArray()
  .forEach(element => {
    $(element).click(function(event) {
      event.preventDefault();
      $([document.documentElement, document.body]).animate(
        {
          scrollTop: $(element.getAttribute("href")).offset().top - 32
        },
        1000
      );
    });
  });
