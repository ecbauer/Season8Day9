<?php get_header(); ?>

        
    <div id="main">

        <section id="articles">
            <?php
                while(have_posts()):
                    the_post();
                    // Display content from the post here
            ?>

            <article>
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <span class="article_meta">Written on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <?php the_author_posts_link() ?></span>
                    <span class="article_categories">Categories: <?php the_category(', '); ?></span>
                </header>

                <?php the_content(); ?>
        
                <hr />

                <?php comments_template(); ?>

            </article>

            <?php
                endwhile;
            ?>

        </section> <!-- articles -->

        <?php get_sidebar(); ?>

    </div>

<?php get_footer(); ?>