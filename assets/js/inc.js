async function loadComponent(id, file) {
  const response = await fetch(file);
  document.getElementById(id).innerHTML = await response.text();
  const currentUrl = window.location.pathname.split('/').pop();
  const currentMenu = document.querySelector(`a[href="${currentUrl}"]`) ?? document.querySelector(`a[href="index.html"]`);
  currentMenu.classList.add("active");
}

loadComponent("header", 'inc/header.html');
loadComponent("footer", "inc/footer.html");
