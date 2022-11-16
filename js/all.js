window.onload = function () {
  const header_nav = document.querySelector("header nav");
  const logo = document.querySelector("img.logo");

  document.documentElement.scrollTop > 150
    ? change_nav(true)
    : change_nav(false);

  window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    scroll > 150 ? change_nav(true) : change_nav(false);
  });

  function change_nav(val) {
    if (val) {
      header_nav.classList.add("nav_fixed");
      logo.style.height = "40px";
    } else {
      header_nav.classList.remove("nav_fixed");
      logo.style.height = "60px";
    }
  }
};
