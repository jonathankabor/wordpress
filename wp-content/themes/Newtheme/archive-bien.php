<?php get_header() ?>

<h1>Voir tous nos Biens</h1>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while(have_posts()): the_post(); ?>
            <div class="col-sm-4">
                <?php require('parts/post.php'); ?>
            </div>
        <?php endwhile ?>
    </div>
    <?php newtheme_pagination() ?>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>

