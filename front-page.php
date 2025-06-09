<?php get_header(); ?>

<main>
  <div class="container">
    <section class="main__article">
      <h2 class="main__title">Hot Topics</h2>
        <?php
        $hot_news = new WP_Query([
          'post_type' => 'news',
          'posts_per_page' => 1,
          'orderby' => 'date',
          'order' => 'DESC',
        ]);
        ?>
      <?php if ($hot_news->have_posts()) : while ($hot_news->have_posts()) : $hot_news->the_post(); 
        $exclude_id = get_the_ID(); 
      ?>
      <div class="main__content">
        <article class="main__article-review">
          <?php the_post_thumbnail('large'); ?>
          <div class="main__article-content">
            <a href="<?php the_permalink(); ?>"> <h3 class="main__article-title">Massa tortor nibh nulla condimentum imperdiet scelerisque...</h3></a>
            
            <div class="news__post-meta">
              <span class="main__article-date">
                  <?php echo get_time_ago(get_the_date('c')); ?> 
              </span>
              |
              <span class="news__item-category">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                    echo esc_html($categories[0]->name);
                }
                ?>
              </span>
            </div>
          </div>
        </article>
        <aside class="main__about-article">
          <p>
            <?php echo wp_trim_words(get_the_content(), 60); ?> <a href="<?php the_permalink(); ?>">read more</a>        
          </p>
        </aside>
      </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </section>


    <section class="main__news" aria-labelledby="latest-news">
      <h2 class="news__title">Latest News</h2>
      <div class="news__list">

        <?php
        $news_query = new WP_Query([
            'post_type' => 'news',
            'posts_per_page' => 8,
            'post__not_in' => [$exclude_id],
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