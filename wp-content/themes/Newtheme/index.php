<?php get_header() ?>

    <?php $sports = get_terms(['taxonomy' => 'sport']);?>
     <?php $modes = get_terms(['taxonomy' => 'mode']);?>

    <ul class="nav nav-pills my-4">
        <?php foreach ($sports as $sport): ?>
        <li class="nav-item">
            <a href="<?= get_term_link($sport)?>" class="nav-link
            <?= is_tax('sport', $sport->term_id) ? 'active' : ''?>">
                <?= $sport->name ?></a>
        </li>
        <?php endforeach; ?>
        <?php foreach ($modes as $mode): ?>
            <li class="nav-item">
                <a href="<?= get_term_link($mode)?>" class="nav-link
                <?= is_tax('mode', $mode->term_id) ? 'active' : ''?>">
                    <?= $mode->name ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

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

