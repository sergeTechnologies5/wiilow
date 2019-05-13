function(ev) {
  var class_name = $(this).data("id");
  dump(class_name);
  $(".goto-category").removeClass("active");
  $(this).addClass("active");
  scroll_class(class_name);
}