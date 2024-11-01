<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays the front page of your WordPress site.
 * You can use this template to customize the layout and content of your front page.
 */

get_header(); ?>

<main class="front-page">
  <!-- Banner -->
  <section class="banner" style="width: 1442px; height: 500px; gap: 0px; opacity: 1; background-image: url('<?php echo get_template_directory_uri(); ?>/images/banner.jpg'); margin: 0 auto;">
    <div class="banner-content">
      <h1>BLOG</h1>
    </div>
  </section>

  <!-- Introducción del Blog -->
  <section class="blog-intro" style="background-color: #f0f0f0; margin: 0 auto; padding: 20px; text-align: center;">
    <h2 style="text-align: center;">NUESTRO BLOG</h2>
    <p style="text-align: center; max-width: 600px; margin: 0 auto; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    </p>
    
    <!-- Formulario de búsqueda -->
    <div class="search-container" style="text-align: center; margin: 20px 0;">
      <form action="<?php echo esc_url(home_url('/')); ?>" method="get" style="display: flex; justify-content: center;">
        <input type="text" name="s" placeholder="Buscar..." style="width: 600px; height: 60px; padding: 0 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; margin-right: 10px;">
        <button type="submit" class="search-button" style="height: 60px; display: flex; align-items: center; justify-content: center; background-color: white; border: none; border-radius: 5px; cursor: pointer;">
          <i class="fa-solid fa-magnifying-glass" style="color: #2E3C80; font-size: 20px;"></i> <!-- Icono de la lupa -->
        </button>
      </form>
    </div>

    <div class="categories" style="text-align: center;">
      <button data-category="all" onclick="filterPosts('all')">Todos</button>
      <button data-category="category1" onclick="filterPosts('category1')">Categoría 1</button>
      <button data-category="category2" onclick="filterPosts('category2')">Categoría 2</button>
      <button data-category="category3" onclick="filterPosts('category3')">Categoría 3</button>
      <button data-category="category4" onclick="filterPosts('category4')">Categoría 4</button>
    </div>
  </section>

  <!-- Sección de Artículos -->
  <section class="posts" style="width: 1249px; height: auto; margin: 20px auto; display: flex; flex-wrap: wrap; justify-content: space-between;">
    
    <article class="post category1" style="width: 590px; height: auto; margin: 10px; display: flex; flex-direction: column; justify-content: space-between; border: none;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/art1.jpg" alt="Título del artículo 1" class="post-image" style="width: 580px; height: 370px;">
      <div class="post-info" style="text-align: left; padding: 10px;">
        <p class="post-date" style="color: #727171; margin: 5px 0; text-align: left;">FEBRUARY 24 - CATEGORÍA 1</p>
        <h2 class="post-title" style="color: #2E3C80; font-size: 1.4em; margin: 5px 0; text-align: left;">TÍTULO DEL ARTÍCULO 1</h2>
      </div>
      <p style="padding: 0 10px;">Descripción breve del post... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
      <button class="read-more" style="align-self: flex-start; margin: 10px;" onclick="redirectToUrl('https://example.com/articulo1')">Leer más...</button>
    </article>
    
    <article class="post category2" style="width: 590px; height: auto; margin: 10px; display: flex; flex-direction: column; justify-content: space-between; border: none;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/art2.jpg" alt="Título del artículo 2" class="post-image" style="width: 580px; height: 370px;">
      <div class="post-info" style="text-align: left; padding: 10px;">
        <p class="post-date" style="color: #727171; margin: 5px 0; text-align: left;">FEBRUARY 24 - CATEGORÍA 2</p>
        <h2 class="post-title" style="color: #2E3C80; font-size: 1.4em; margin: 5px 0; text-align: left;">TÍTULO DEL ARTÍCULO 2</h2>
      </div>
      <p style="padding: 0 10px;">Descripción breve del post... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
      <button class="read-more" style="align-self: flex-start; margin: 10px;" onclick="redirectToUrl('https://example.com/articulo2')">Leer más...</button>
    </article>
    
    <article class="post category3" style="width: 590px; height: auto; margin: 10px; display: flex; flex-direction: column; justify-content: space-between; border: none;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/art3.jpg" alt="Título del artículo 3" class="post-image" style="width: 580px; height: 370px;">
      <div class="post-info" style="text-align: left; padding: 10px;">
        <p class="post-date" style="color: #727171; margin: 5px 0; text-align: left;">FEBRUARY 24 - CATEGORÍA 3</p>
        <h2 class="post-title" style="color: #2E3C80; font-size: 1.4em; margin: 5px 0; text-align: left;">TÍTULO DEL ARTÍCULO 3</h2>
      </div>
      <p style="padding: 0 10px;">Descripción breve del post... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
      <button class="read-more" style="align-self: flex-start; margin: 10px;" onclick="redirectToUrl('https://example.com/articulo3')">Leer más...</button>
    </article>
    
    <article class="post category4" style="width: 590px; height: auto; margin: 10px; display: flex; flex-direction: column; justify-content: space-between; border: none;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/art4.jpg" alt="Título del artículo 4" class="post-image" style="width: 580px; height: 370px;">
      <div class="post-info" style="text-align: left; padding: 10px;">
        <p class="post-date" style="color: #727171; margin: 5px 0; text-align: left;">FEBRUARY 24 - CATEGORÍA 4</p>
        <h2 class="post-title" style="color: #2E3C80; font-size: 1.4em; margin: 5px 0; text-align: left;">TÍTULO DEL ARTÍCULO 4</h2>
      </div>
      <p style="padding: 0 10px;">Descripción breve del post... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
      <button class="read-more" style="align-self: flex-start; margin: 10px;" onclick="redirectToUrl('https://example.com/articulo4')">Leer más...</button>
    </article>
    
  </section>
</main>

<script>
// Filtrar publicaciones
function filterPosts(category) {
  const posts = document.querySelectorAll('.post');
  posts.forEach(post => {
    post.style.display = (category === 'all' || post.classList.contains(category)) ? 'block' : 'none';
  });
}

// Redireccionar al hacer clic en "Leer más"
function redirectToUrl(url) {
  window.location.href = url;
}
</script>

<?php get_footer(); ?>
