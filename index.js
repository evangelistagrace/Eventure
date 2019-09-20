window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar-menu");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

const alerts = Array.from(document.getElementsByClassName('alert'));
alerts.forEach(alert => setTimeout(alert, 3000));