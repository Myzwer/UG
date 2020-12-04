<?php
/**
 * Template Name: Blog
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background" style = "background: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                    ),url(https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2551&q=80);
                    background-position: center center;
                    background-size: cover;">
        <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" >Watch Our Nonsense</h1>
                </div>
            </div>
        </div>
    </div>


    <div class = "gradient-bg-r-y full-width">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y margin-top margin-bottom">
                <div class="small-12 center">
                    <h2 class = "add-padding">Latest Videos</h2>
                </div>

                <div class="small-12 medium-8">
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x grid-margin-y margin-top margin-bottom">

                            <!-- The Loop-->
                            <?php
                            if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                            echo "<div class='small-12 medium-6 cell video-card'>";
                            ?>

                            <div class = 'blog-card'>
                                <a href = "<?php the_permalink(); ?>">


                                    <?php
                                    echo "<div class = 'card-thumbnail'>";
                                    the_post_thumbnail();
                                    echo "</div>";

                                    echo '<h4><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';

                                    echo "<div class = 'card-details'>";
                                    echo '<div class = "category-title"> Series: ';
                                    the_category();
                                    echo '</div>';

                                    echo "</a>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    endwhile;
                                    else:
                                        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                                    endif;
                                    ?>
                        </div>
                    </div>
                </div>

                <div class="small-12 medium-4 center gradient-bg-r-p box-shadow rounded-corners category-outer">
                    <h3 class = "padding-top">Series</h3>
                    <section>
                        <input type="text" id="filter" placeholder="Type to filter"/>
                        <ul id="list" class="List">
                            <li>League of Trash</li>
                            <li>Standalone</li>
                            <li>Dead Space</li>
                            <li>Saints Row</li>
                            <li>Lamar Flynn</li>
                            <li>Jameson Davidson</li>
                            <li>Harper Lynn</li>
                            <li>Keith Woods</li>
                            <li>Cally Dominguez</li>
                            <li>Carter Gould</li>
                            <li>Brenna Sutton</li>
                            <li>Robert Vang</li>
                            <li>Clare Floyd</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>

















<?php get_footer();
