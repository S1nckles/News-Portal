<?php get_header(); ?>


<?php
$current_category = get_queried_object();

$args = [
    'post_type' => ['news'],
    'cat' => $current_category->term_id
];

$custom_query = new WP_Query($args);
?>

<div class="container">
    <div class="search__form">
        <?php if ($custom_query->have_posts()) : ?>
            <div class="news__list search__list">
                <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <div class="search__item">
                        <a class="search__item" href="<?php the_permalink(); ?>">
                            <div class="news__item-img search__img-wrapper "><?php the_post_thumbnail(); ?></div>
                            <div class="search__item-content">
                                <h2 class="search__item-title"><?php the_title(); ?></h2>
                                <p class="search__item-excerpt"><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        
            <?php the_posts_pagination(); ?>
        
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>Немає записів у цій категорії.</p>
        <?php endif; ?>
    </div>
</div>





<?php get_footer(); ?>
