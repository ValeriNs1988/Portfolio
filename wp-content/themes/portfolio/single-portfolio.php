<?php

$authorImage = wp_get_attachment_image_src(get_field('author_image'), 'full');
$authorDescription = get_field('author_description');

get_header();
?>

<main class="site-main">
    <section>
        <div class="container">
            <div class="site-grid">
                <article class="author-holder">
                    <div class="author-wrapper">
                        <div class="description-wrapper">
                            <h3 class="sub-title">
                                <?= the_title() ?>
                            </h3>
                            <p><?= $authorDescription ?></p>
                        </div>
                        <div class="author-image">
                            <img src="<?= $authorImage[0] ?>" alt="<?= the_title() ?>" width="<?= $authorImage[1] ?>" height="<?= $authorImage[2] ?>">
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="separate-section">
        <div class="container">
            <h2>Books by <?= the_title() ?></h2>
        </div>
    </section>

    <section class="single-book-row">
        <div class="container">
            <div class="site-grid">
                <?php
                $portfolio_tags = wp_get_post_terms(get_the_ID(), 'post_tag', array("fields" => "slugs"));
                $args = array(
                    'post_type' => 'books',
                    'posts_per_page' => -1,
                    'tag' => $portfolio_tags,
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post();
                        $bookDescription = get_field('book_description'); ?>

                        <article class="books-holder">
                            <div class="books-wrapper">
                                <?php if ( has_post_thumbnail() ) :?>
                                    <div class="featured-image">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="description-wrapper">
                                    <h3 class="sub-title">
                                        <a href="<?= get_permalink() ?>"> <?= the_title() ?></a>

                                    </h3>
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
                                    <p class="book-description"><?=$bookDescription ?></p>

                                </div>
                            </div>
                        </article>

                    <?php
                    endwhile;
                    endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>
</main>


<?php
get_footer();
