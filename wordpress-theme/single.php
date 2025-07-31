<?php get_header(); ?>

<div class="container" style="padding: 80px 20px;">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header text-center mb-8">
                <h1 class="entry-title" style="color: hsl(var(--primary)); font-size: 48px; font-weight: 700;">
                    <?php the_title(); ?>
                </h1>
                <div class="entry-meta" style="color: hsl(var(--muted-foreground)); margin-bottom: 32px;">
                    <?php echo get_the_date(); ?>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div class="entry-thumbnail text-center mb-8">
                    <?php the_post_thumbnail('large', array('style' => 'border-radius: 12px; max-width: 100%; height: auto;')); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content" style="max-width: 800px; margin: 0 auto; font-size: 18px; line-height: 1.8;">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>