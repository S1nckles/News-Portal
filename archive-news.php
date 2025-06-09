<?php get_header(); ?>

<div class="container">    
    <main class="main__news">
        <h1 class="news__title">All News</h1>

        <?php if (have_posts()) : ?>
            <div class="news__list archive__list">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="news__item archive__item">

                        <?php if (has_post_thumbnail()) : ?>
                            <a class="news__item-img" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="news__post-meta archive__post-meta">
                            <span>
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

                        <h2><a class="news__item-title archive__item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <div class="news__excerpt"><?php the_excerpt(); ?></div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <p>No news found.</p>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>
