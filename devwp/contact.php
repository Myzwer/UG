<?php
/**
 * Template Name: Contact Template
 *
 * The Contact Page of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background" style = "background: url(http://unfantasticgamers.local/wp-content/uploads/2020/11/Matt-and-Josh.jpg);  background-position: center center;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" ></h1>
                </div>
            </div>
        </div>
    </div>

        <div class="gradient-bg-r-p full-width">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="small-12 medium-6 add-margin add-padding cell gradient-bg-p-p rounded box-shadow">
                        <h2>Big Form Guy?</h2>
                        <h4 class = "small-font">(Mostly Just Matt tho he's the PR guy)</h4>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>

                    <div class="small-12 medium-6 add-margin add-padding cell gradient-bg-p-p rounded box-shadow">
                        <h2>Big Email Guy?</h2>
                        <p class = "no-spacing">For business inquiries, you can email us at admin@unfantasticgamers.com.</p>

                    </div>
                </div>
            </div>
        </div>



<?php get_footer();
