<?php get_header(); ?>

<div class="container" style="padding: 80px 20px;">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header text-center mb-8">
                <h1 class="entry-title" style="color: hsl(var(--primary)); font-size: 48px; font-weight: 700;">
                    <?php the_title(); ?>
                </h1>
            </header>

            <div class="entry-content" style="max-width: 800px; margin: 0 auto; font-size: 18px; line-height: 1.8;">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>