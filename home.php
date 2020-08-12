<?php get_header() ?>

<main class='newsPage'>
    <header class='pageHeader'>
        <h2 class='pageTitle'>News</h2>
    </header>
    <section id='newsPosts' class='pageBanner'>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <a href=<?=the_permalink()?> class='pagePreview'>
                <div class='pageThumbnailContainer'>
                    <?=the_post_thumbnail('medium')?>
                </div>
                <summary class='newsInfo'>
                    <h3><?=the_title()?></h2>
                    <span><?=the_date()?></span>
                    <?=the_excerpt()?>
                </summary>
            </a>
            <?php
        }
    }
    ?>
    </section>
    <div id="backgroundImageDiv">
        <?=get_the_post_thumbnail(27, 'full')?>
    </div>
</main>

<?php get_footer() ?>
