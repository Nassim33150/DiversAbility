window.addEventListener("scroll", function () {
  var menu = document.querySelector(".menu-fixed");
  var scrollPosition = window.scrollY;

  if (scrollPosition > 0) {
    menu.classList.add("fixed");
  } else {
    menu.classList.remove("fixed");
  }
});
