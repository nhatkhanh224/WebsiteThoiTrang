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
//Validation
$("form[name='formLogin']").validate({
  rules: {
    email: {
      required: true,
      // Specify that email should be validated
      // by the built-in "email" rule
      email: true,
    },
    password: {
      required: true,
      minlength: 5,
    },
  },
  messages: {
    password: {
      required: "Please provide a password",
      minlength: "Your password must be at least 5 characters long",
    },
    email: "Please enter a valid email address",
  },
});
$("form[name='formRegis']").validate({
  rules: {
    email: {
      required: true,
      // Specify that email should be validated
      // by the built-in "email" rule
      email: true,
    },
    password: {
      required: true,
      minlength: 5,
    },
    name:{
      required:true,
      minlength: 30,

    },
    surname:{
      required:true,
      
      
    },
    phoneNumber:{
      required:true,
      minlength: 10,
      
    }
  },
  messages: {
    password: {
      required: "Please provide a password",
      minlength: "Your password must be at least 5 characters long",
    },
    email: "Please enter a valid email address",
  },
});