        <?php get_header() ?>

        <?php if (have_posts()): while(have_posts()): the_post(); ?>
                    <h1><?php the_title()?></h1>
            <?php if( get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true ) === '1') ?>
                <div class="alert alert-info">
                    Cet article est sponsorisé
                </div>

            <?php the_content();?>

            <h2>Articles relatifs</h2>
            <div class="row">
            <?php
                $sports = array_map(function ($term){
                    return$term->term_id;
                }, get_the_terms(get_post(), 'sport'));
                $query = new WP_Query([
                    'post_not_in'=> [get_the_ID()],
                    'post_type'=> 'post',
                    'posts_per_page'=> 3,
                    'orderby'=> 'rand',
                    'tax_query'=> [
                     [
                        'taxonomy'=> 'sport',
                        'terms'=> $sports,
                     ]
                     ],
                     'meta_query'=> [
                     [
                        'key'=> SponsoMetaBox::META_KEY,
                         'compare'=> 'EXISTS'
                     ]
                    ]
                ]);
                while ($query->have_posts()): $query->the_post();
            ?>
                    <div class="col-sm-4">
                        <?php require('parts/post.php'); ?>
                    </div>
        <?php endwhile; wp_reset_postdata(); ?>
            </div>

        <?php endwhile; endif; ?>

        <?php get_footer() ?>

