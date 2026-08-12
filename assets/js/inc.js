async function loadComponent(id, file) {
  const response = await fetch(file);
  document.getElementById(id).innerHTML = await response.text();
}

loadComponent("header", 'inc/header.html');
loadComponent("footer", "inc/footer.html");
