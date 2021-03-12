function menuNav() {
  var aside = document.getElementById("aside");
  var nav = document.getElementById("nav");
  var topnav = document.getElementById("top-nav");
  var burgerButton = document.getElementById("menuBurger");
  var croixMenu2 = document.getElementById("croixMenu2");
  var croixMenu = document.getElementById("croixMenu");
  var menu = document.getElementById("menu");

  if (burgerButton.classList.contains("showMenu")) {
    burgerButton.classList.remove("showMenu");
    nav.classList.remove("navMenu");
    aside.classList.remove("asideMenu");
    topnav.classList.remove("topnavMenu");
    menu.classList.remove("showMenuaffichable");
    croixMenu2.style.display = "none";
    croixMenu.style.display = "inherit";
  } else {
    burgerButton.classList.add("showMenu");
    nav.classList.add("navMenu");
    aside.classList.add("asideMenu");
    topnav.classList.add("topnavMenu");
    menu.classList.add("showMenuaffichable");
    croixMenu2.style.display = "inherit";
    croixMenu.style.display = "none";
  }
}
window.addEventListener("scroll", function (e) {
  var aside = document.getElementById("aside");
  var nav = document.getElementById("nav");
  var topnav = document.getElementById("top-nav");
  var burgerButton = document.getElementById("menuBurger");

  burgerButton.classList.remove("showMenu");
  nav.classList.remove("navMenu");
  aside.classList.remove("asideMenu");
  topnav.classList.remove("topnavMenu");
  document.getElementById("menu").style.display = "none";
  menu.classList.remove("showMenuaffichable");
  croixMenu2.style.display = "none";
  croixMenu.style.display = "inherit";
});

// Animation des projets


// Les pi
function reductionImagePi() {
  var img = document.getElementById("img-pi")
  img.style.width="30%"
}
function resetImagePi() {
  var img = document.getElementById("img-pi")
  img.style.width="100%"
}

// Montauban
function reductionImageMontauban() {
  var img = document.getElementById("img-montauban")
  img.style.width="30%"
}
function resetImageMontauban() {
  var img = document.getElementById("img-montauban")
  img.style.width="100%"
}

// Formulaire
document
  .querySelector("#contact-form")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    e.target.elements.name.value = "";
    e.target.elements.email.value = "";
    e.target.elements.message.value = "";
  });
