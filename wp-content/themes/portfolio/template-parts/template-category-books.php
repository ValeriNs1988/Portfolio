<?php

/**
 *  Template Name: Category Books
 */

$current_category = get_queried_object();

get_header();
?>
    <main class="site-main">
        <section class="category-banner-wrapper container">
            <?php if ($current_category->post_name == 'crime'): ?>
                <div class="category-banner">
                    <img src="http://localhost/portfolio/wp-content/uploads/2024/01/crime-banner.png">
                </div>
                <div class="banner-text">
                    <h2>Top Must-Read Crime</h2>
                    <h3>Recommended by us
                    </h3>
                </div>
            <?php endif; ?>
            <?php if ($current_category->post_name == 'fantasy'): ?>
                <div>
                    <img src="http://localhost/portfolio/wp-content/uploads/2024/01/fantacy-banner.png">
                </div>
                <div class="banner-text">
                    <h2>Top Must-Read Fantasy</h2>
                    <h3>Recommended by us
                    </h3>                </div>
            <?php endif; ?>
            <?php if ($current_category->post_name == 'romance'): ?>
                <div>
                    <img src="http://localhost/portfolio/wp-content/uploads/2024/01/Romances-banner.png">
                </div>
                <div class="banner-text">
                    <h2>Top Must-Read Romances</h2>
                    <h3>Recommended by us</h3>
                </div>
            <?php endif; ?>

        </section>
        <section>
            <div></div>
            <div class="container">

                <div class="site-grid">
                    <?php
                    $args = array(
                        'post_type' => 'books',
                        'category_name' => $current_category->post_title,
                        'posts_per_page' => -1,
                        'orderby'        => 'post_date',
                        'order'          => 'DESC',
                        'post_status'    => 'publish',
                    );
                    $the_query = new WP_Query( $args );

                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                            $authorName = get_field('author');
                            $bookDescription = get_field('book_description');
                            $AuthorLink = get_field('author_link');
                            ?>
                           <?php if (!empty($authorName || $bookDescription)): ?>
                            <article class="books-holder">
                                <div class="books-wrapper">
                                    <div class="price">
                                        <p>Best Price: $19.99</p>
                                    </div>
                                    <?php if ( has_post_thumbnail() ) :?>
                                        <div class="featured-image">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="description-wrapper">
                                        <h3 class="sub-title">
                                            <a href="<?= get_permalink() ?>"> <?= the_title() ?></a>

                                        </h3>

                                        <h4 class="sub-title">
                                            <a href="<?= $AuthorLink ?>">by <?= $authorName ?></a>
                                        </h4>
                                        <?php
                                        $post_id = get_the_ID();
                                        $category_ids = wp_get_post_categories( $post_id );
                                        if (!empty($category_ids)):
                                            foreach ( $category_ids as $cat_id ) :
                                                $category = get_category( $cat_id );
                                                ?>
                                                <div class="category-type">
                                                    <h5>Category: <?=$category->name?></h5>
                                                </div>
                                            <?php endforeach;
                                        endif;
                                        ?>
                                        <p class="book-description"><?=cutText($bookDescription, 350)  ?></p>
                                    </div>
                                </div>
                            </article>
                            <?php endif;?>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();


