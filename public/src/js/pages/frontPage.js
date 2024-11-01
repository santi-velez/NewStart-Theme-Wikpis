// Función de búsqueda
document.querySelector('.search-container form').addEventListener('submit', function(event) {
  event.preventDefault(); // Evitar que el formulario se envíe
  const query = this.querySelector('input[name="s"]').value.toLowerCase(); // Obtener la consulta de búsqueda
  document.querySelectorAll(".post").forEach(post => {
    const title = post.querySelector(".post-title").innerText.toLowerCase();
    post.style.display = title.includes(query) ? "" : "none"; // Mostrar u ocultar el post según la búsqueda
  });
});

// Función de filtrado por categoría
document.querySelectorAll(".categories button").forEach(button => {
  button.addEventListener("click", function() {
    const category = this.getAttribute("data-category");
    document.querySelectorAll(".post").forEach(post => {
      post.style.display = category === "all" || post.classList.contains(category) ? "" : "none"; // Mostrar u ocultar según la categoría
    });
  });
});
