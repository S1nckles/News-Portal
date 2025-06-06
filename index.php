<?php get_header(); ?>

<main>
  <div class="container">
    <section class="main__article">
      <h2 class="main__title">Hot Topics</h2>
      <div class="main__content">
        <article class="main__article-review">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/News-1.jpg" alt="Swimming competition">
          <div class="main__article-content">
            <h3 class="main__article-title">Massa tortor nibh nulla condimentum imperdiet scelerisque...</h3>
            <p class="main__article-date"><time datetime="2025-06-03T13:00">2 Hours Ago</time>CNN Indonesia</p>
          </div>
        </article>
        <aside class="main__about-article">
          <p><span>Nisi,</span> sagittis aliquet sit rutrum. Nunc, id vestibulum quam ornare adipiscing. Pellentesque sed turpis nunc gravida pharetra, sit nec vivamus pharetra. Velit, dui, egestas nisi, elementum mattis mauris, magnis. Massa tortor nibh nulla condimentum imperdiet scelerisque...<a href="#"> read more</a></p>
        </aside>
      </div>
    </section>

    <section aria-labelledby="latest-news">
      <h2 id="latest-news">Latest News</h2>
      <div class="news-grid">
        <article>
          <img src="news1.jpg" alt="">
          <h3>News Title Lorem Ipsum Dolor Sit Amet</h3>
          <p><time datetime="2025-06-03T14:00">1 Hour Ago</time>CNN Indonesia</p>
        </article>
      </div>
    </section>
  </div>
</main>

<footer>
  <p>&copy; 2021 News Portal</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>