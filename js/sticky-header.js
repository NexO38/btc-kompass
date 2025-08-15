//HEADER MIT STICKY-EIGENSCHAFT BEIM HOCHSCROLLEN WIEDER ERSCHEINEN LASSEN
var prevScrollPos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollPos > currentScrollPos) {
    document.querySelector(".sticky-top").style.top = "0";
  } else {
    document.querySelector(".sticky-top").style.top = "-200px";
  }
  prevScrollPos = currentScrollPos;
}