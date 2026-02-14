<?php get_header(); ?>

<!-- Announcement Bar -->
<div class="announcement-bar">
    <?php echo get_field('announcement_text'); ?>
</div>


<!-- Hero Section -->
<section class="hero">

    <div class="hero-left">

        <h1>
            <?php echo get_field('hero_heading'); ?>
        </h1>

        <p>
            <?php echo get_field('hero_subheading'); ?>
        </p>

        <a href="<?php echo get_field('hero_button_link'); ?>" class="btn">
            <?php echo get_field('hero_button_text'); ?>
        </a>

    </div>


    <div class="hero-right">

        <img src="<?php echo get_field('hero_image'); ?>" alt="Hero Image">

    </div>

</section>



<!-- Brand Logos -->
<section class="brands">

    <img src="<?php echo get_field('brand_logo_1'); ?>">
    <img src="<?php echo get_field('brand_logo_2'); ?>">
    <img src="<?php echo get_field('brand_logo_3'); ?>">
    <img src="<?php echo get_field('brand_logo_4'); ?>">
    <img src="<?php echo get_field('brand_logo_5'); ?>">
    <img src="<?php echo get_field('brand_logo_6'); ?>">

</section>



<!-- New Arrivals -->
<section class="new-arrivals">

    <h2 class="section-title">NEW ARRIVALS</h2>

    <div class="products-grid">

        <?php

        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 4,
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => 'new-arrivals',
                ),
            ),
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();

        global $product;
        ?>

        <div class="product-card">

            <div class="product-image">
                <?php the_post_thumbnail('medium'); ?>
            </div>

            <div class="product-info">

                <h3 class="product-title">
                    <?php the_title(); ?>
                </h3>

                <div class="product-rating">
                    ★★★★★
                </div>

                <div class="product-price">
                    $<?php echo $product->get_price(); ?>
                </div>

            </div>

        </div>

        <?php endwhile; wp_reset_postdata(); ?>

    </div>

</section>


<?php get_footer(); ?>
