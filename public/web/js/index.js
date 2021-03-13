//Menu
var menu = $(".menu-responsive-button");
var menuContent = $(".menu-responsive-content");
var overlay = $("#overlay");
function showMenu() {
  overlay.show();
  menuContent.show(400);
}
function off() {
  overlay.hide();
  menuContent.hide();
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
