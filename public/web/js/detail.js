var image = $(".product-image img").attr("src");
function changeImage(id) {
  var img_small = $("#" + id).attr("src");
  $(".product-image img").attr("src", img_small);
}
//Multi Slide
$("#basicSlider").multislider({
  continuous: true,
  duration: 2000,
});
$("#mixedSlider").multislider({
  duration: 750,
  interval: 3000,
});
var _gaq = _gaq || [];
_gaq.push(["_setAccount", "UA-36251023-1"]);
_gaq.push(["_setDomainName", "jqueryscript.net"]);
_gaq.push(["_trackPageview"]);

(function () {
  var ga = document.createElement("script");
  ga.type = "text/javascript";
  ga.async = true;
  ga.src =
    ("https:" == document.location.protocol ? "https://ssl" : "http://www") +
    ".google-analytics.com/ga.js";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(ga, s);
})();
//Menu
var menu = $(".menu-responsive-button");
var menuContent = $(".menu-responsive-content");
var overlay = $("#overlay");
var modal=$('.modal-dialog');

function showMenuRes() {
  overlay.show();
  menuContent.show(400);
}
function off() {
  overlay.hide();
  menuContent.hide();
  modal.hide();
}
function showPanel() {
  overlay.show();
  modal.show();
}
function closeModal() {
  modal.hide();
  overlay.hide();
}
//Contact
var contactTitle = $(".contact-recommend-title");
var contactContent = $(".contact-recommend-content");
var addressTitle = $(".address-title");
var addressContent = $(".address-content");
var socialTitle = $(".social-title");
var socialContent = $(".social-content");
function showContent(value) {
  switch (value) {
    case "contactContent":
      contactContent.fadeToggle();
      break;
    case "addressContent":
      addressContent.fadeToggle();
      break;
    case "socialContent":
      socialContent.fadeToggle();
      break;

    default:
      break;
  }
}
