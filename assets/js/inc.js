document.addEventListener("DOMContentLoaded", async function (e) {
  async function loadComponent(id, file) {
    const response = await fetch(file);
    document.getElementById(id).innerHTML = await response.text();
    const currentUrl = window.location.pathname.split("/").pop();
    const currentMenu =
      document.querySelector(`#mainNav a[href="${currentUrl}"]`) ??
      document.querySelector(`#mainNav a[href="index.html"]`);
    currentMenu.classList.add("active");
  }

  await loadComponent("header", "inc/header.html");
  await loadComponent("footer", "inc/footer.html");
  /* ---------- mobile nav toggle ---------- */
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.querySelector(".main-nav");
  console.log(toggle, nav);
  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      var isOpen = nav.classList.toggle("open");
      toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        nav.classList.remove("open");
      });
    });
  }

});
