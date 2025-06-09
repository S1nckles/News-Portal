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


    <section class="main__news" aria-labelledby="latest-news">
      <h2 class="news__title">Latest News</h2>
      <div class="news__list">

        <?php
        $news_query = new WP_Query([
            'post_type' => 'news',
            'posts_per_page' => 8
        ]);

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <article class="news__item">
                <a class="news__item-img" href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('medium'); ?></a>
                <a class="news__item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <p class="news__post-meta"><time datetime="2025-06-03T14:00"><?php echo get_time_ago(get_the_date('c'));?></time>
                  <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                    }
                  ?>
                </p>
              </article>
            <?php endwhile;
            wp_reset_postdata();
        endif;?>        
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>