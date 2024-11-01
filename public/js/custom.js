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
  
  // Función para redirigir mediante AJAX
  function redirectToUrl(url) {
    fetch(url, {
      method: 'GET', // o 'POST' dependiendo de tu necesidad
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => {
      // Puedes manejar la respuesta aquí si es necesario
      if (response.ok) {
        window.location.href = url; // Redirigir a la nueva URL
      } else {
        console.error('Error en la redirección');
      }
    })
    .catch(error => console.error('Error:', error));
  }
  
  // Agregar evento al botón o enlace que disparará la redirección
  document.querySelector('.redirect-button').addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir el comportamiento por defecto
    redirectToUrl('https://wikpis.com/'); // Llama a la función de redirección
  });
   
