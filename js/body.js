$("#work-gallery")
  .children()
  .hover(function() {
    if (this.children[0].style["display"] == "initial")
      this.children[0].style["display"] = "none";
    else this.children[0].style["display"] = "initial";
  });

// $workGalleryItems.on("mouseenter", function() {
//   $workGalleryItems.children().css("display", "initial");
// });

// $workGalleryItems.on("mouseleave", function() {
//   $workGalleryItems.children().css("display", "none");
// });
