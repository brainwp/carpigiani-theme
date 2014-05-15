<?php

    /*
    * Template Name: Post Categories
    */

?>

<section class="body-category-produtos">
    <div class="wrap">
        <div class="content-posts wrap list_carousel responsive">
            <ul id="foo2">
                
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'th-cat-post' );
                        }
                        else {
                            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/th-prod-default.png" />';
                        }
                    ?>
                    <h1><a href="#"><?php the_title(); ?></a></h1>
                </div>

            </ul><!-- .content-posts wrap list_carousel responsive -->
        </div><!-- .wrap -->
    </div><!-- .body-category-produtos -->
</section><!-- .body-category-produtos -->