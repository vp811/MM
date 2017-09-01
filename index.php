<?php get_header(); ?>

<!-- Begin Section Container -->
</div>
<section class="row" id="home-slider">
    <div class="twelve columns">
        <?php dynamic_sidebar('Slider Widget'); ?>
    </div>
</section>

<div class="container">
    <section class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('Large Logo Widget'); ?>
        </div>
    </section>

    <section class="modern-mural-section">
        <div class="modern-mural-text">
            <?php dynamic_sidebar('Modern Mural Image Left'); ?>
        </div>
        <div class="modern-mural-image">
            <?php dynamic_sidebar('Modern Mural Text Right'); ?>
        </div>
    </section>

</div>
    <section class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('Categories'); ?>
        </div>
    </section>

<div class="container">
    <section class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('Categories Images'); ?>
        </div>
    </section>

    <section class="row" id="simple-stencil">
        <div class="three columns">
            <?php dynamic_sidebar('Simple Stencil Image left'); ?>
        </div>

        <div class="nine columns">
            <?php dynamic_sidebar('Simple Stencil Text Right'); ?>
        </div>
    </section>

</div>

    <section>
        <div class="peeling-image" id="hide-mobile">
            <?php dynamic_sidebar('Easy Install Image Right Desktop'); ?>
        </div>
    </section>

<div class="container">
    <section>
        <div class="easy-install-text">
            <?php dynamic_sidebar('Easy Install Text Left'); ?>
        </div>

    </section>

    <section>
        <div class="easy-install-image-desktop" id="hide-desktop">
            <?php dynamic_sidebar('Easy Install Image Right'); ?>
        </div>
    </section>

<div class="clear">
    <section class="row" id="green-section">
        <div class="six columns">
            <?php dynamic_sidebar('Green Image left'); ?>
        </div>

        <div class="six columns">
            <?php dynamic_sidebar('Green Text Right'); ?>
        </div>
    </section>
</div>
</div>
    <section class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('Popular Murals'); ?>
        </div>
    </section>

<div class="container">
    <section class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('Popular Murals Images'); ?>
        </div>
    </section>

    <section class="row" id="design-mural">
        <div class="eight columns">
            <?php dynamic_sidebar('Design Your Own Text Left'); ?>
        </div>

        <div class="four columns">
            <?php dynamic_sidebar('Design Your Own Image Right'); ?>
        </div>
    </section>

<?php get_footer(); ?>
