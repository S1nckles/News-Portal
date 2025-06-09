<?php get_header(); ?>

<div class="container">
    <main class="main__news single__news">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="single__news-item">
            <h1 class="news__title single__news-title"><?php the_title(); ?></h1>

                <div class="single__news-meta">
                    <span class="single__news-date"><?php echo get_time_ago(get_the_date('c')); ?></span> 
                    |
                    <p class="single__news-category"><?php the_category(', '); ?></p>
                </div>

            <?php if (has_post_thumbnail()) : ?>
                <div class="single__news-img">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="single__news-content">
                <?php
                if (get_the_content()) :
                    the_content();
                else :
                    the_excerpt();
                endif;
                ?>
            </div>
        </article>

        <?php
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

    <?php endwhile; endif; ?>
    </main>
</div>

<?php get_footer(); ?>
