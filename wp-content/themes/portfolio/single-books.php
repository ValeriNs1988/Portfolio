<?php

$authorName = get_field('author');
$bookTitle = get_field('book_title');
$bookDescription = get_field('book_description');
$bookImage = wp_get_attachment_image_src(get_field('book_images'), 'full');
$authorLink = get_field('author_link');

get_header();
?>
    <main class="site-main">
        <section>
            <div class="container">
                <div class="site-grid">
                    <article>
                        <div class="single-book-wrapper">
                            <div>
                                <img class=" d-flex w-100 img d-s-none" src="<?= $bookImage[0] ?>" alt="<?= $bookTitle ?>" width="<?= $bookImage[1] ?>" height="<?= $bookImage[2] ?>">
                            </div>
                            <div class="description-wrapper">
                                    <div>
                                        <div class="price">
                                            <h5>Best Price: $19.99</h5>
                                        </div>
                                        <h2><?= $bookTitle ?></h2>
                                        <h3>
                                            <a href="<?=  $authorLink?>"><?= $authorName ?></a>
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
                                    </div>
                                </div>
                        </div>
                        <div class="resume-wrapper">
                            <div class="separate-block">
                                <h4> About <?= $bookTitle ?></h4>
                                <p><?=  $bookDescription?></p>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
