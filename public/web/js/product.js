var filterPrice = $("#filter-price");
var filterBrand = $("#filter-brand");
var filterType = $("#filter-type");
var filterSize = $("#filter-size");
var filterColor = $("#filter-color");

function showMenu(id) {
  switch (id) {
    case "filterPrice":
      filterPrice.toggle(function () {
        filterPrice.addClass("active-menu");
      });
      break;
    case "filterBrand":
      filterBrand.toggle(function () {
        filterBrand.addClass("active-menu");
      });
      break;
    case "filterType":
      filterType.toggle(function () {
        filterType.addClass("active-menu");
      });
      break;
    case "filterSize":
      filterSize.toggle(function () {
        filterSize.addClass("active-menu");
      });
      break;
    case "filterColor":
      filterColor.toggle(function () {
        filterColor.addClass("active-menu");
      });
      break;

    default:
      break;
  }
}
//Menu
var menu = $(".menu-responsive-button");
var menuContent = $(".menu-responsive-content");
var overlay = $("#overlay");
function showMenuRes() {
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
