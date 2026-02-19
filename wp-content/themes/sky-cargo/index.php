<?php get_header(); ?>

<main class="main-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (!is_front_page()) : ?>
                    <h1><?php the_title(); ?></h1>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p>Контент не найден.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>