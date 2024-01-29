<?php

/**
 *  Template Name: Home
 */

get_header();
?>
   <main class="site-main">
       <section>
           <div class="container">
               <div class="site-grid">
                   <?php
                   $args = array(
                       'post_type' => 'books',
                       'posts_per_page' => -1,
                       'orderby'        => 'post_date',
                       'order'          => 'DESC',
                       'post_status'    => 'publish'
                   );
                   $the_query = new WP_Query( $args );

                   if ( $the_query->have_posts() ) :
                       while ( $the_query->have_posts() ) : $the_query->the_post();
                           $authorName = get_field('author');
                           $bookDescription = get_field('book_description');
                           $AuthorLink = get_field('author_link');
                           ?>
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
                                       <div class="price-static">
                                           <h5>Best Price: $19.99</h5>
                                       </div>
                                       <h3 class="sub-title">
                                           <a href="<?= get_permalink() ?>"> <?= the_title() ?></a>

                                       </h3>
                                       <h4 class="sub-title author-name">
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

