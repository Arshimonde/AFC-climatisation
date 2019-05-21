<?php


get_header();
?>

<div class="container">
    <h1 class="page-heading"><?php wp_title('');?></h1>
    <section class="afc-enbrief">
        <?php
            if(have_posts):
                while(have_posts()):the_post()
        ?>
                <?php the_content()?>
        <?php endwhile;endif;?>
        <!-- LES LIENS -->
        <?php
            if(is_page('conseil-et-expertise')):
        ?>
    
        <h2>Notre intervention selon les secteurs d'activités</h2>
        <div class="secteurs-links">
            <a href="<?php echo get_post_permalink(346)?>" class="btn-sub-categorie-blue">
                <span>Conseils et expertise en climatisation</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(368)?>" class="btn-sub-categorie-orange">
                <span>Conseils et expertise en chauffage</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(384)?>" class="btn-sub-categorie-purple">
                <span>Conseils et expertise en ventilation</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(413)?>" class="btn-sub-categorie-grey">
                <span>Conseils et expertise en froid commercial</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(428)?>" class="btn-sub-categorie-darkGray">
                <span>Conseils et expertise en plomberie</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
        </div>
    <?php elseif(is_page('installation-et-mise-en-service')):?>
        <h2>Notre intervention selon les secteurs d'activités</h2>
        <div class="secteurs-links">
            <a href="<?php echo get_post_permalink(352)?>" class="btn-sub-categorie-blue">
                <span>installation en climatisation</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(375)?>" class="btn-sub-categorie-orange">
                <span>installation en chauffage</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(390)?>" class="btn-sub-categorie-purple">
                <span>installation en ventilation</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(419)?>" class="btn-sub-categorie-grey">
                <span>installation en froid commercial</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(430)?>" class="btn-sub-categorie-darkGray">
                <span>installation en plomberie</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
        </div>
    <?php elseif(is_page('maintenance')):?>
        <h2>Notre intervention selon les secteurs d'activités</h2>
        <div class="secteurs-links">
            <a href="<?php echo get_post_permalink(354)?>" class="btn-sub-categorie-blue">
                <span>maintenance en climatisation</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(377)?>" class="btn-sub-categorie-orange">
                <span>maintenance en chauffage</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(392)?>" class="btn-sub-categorie-purple">
                <span>maintenance en ventilation</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(421)?>" class="btn-sub-categorie-grey">
                <span>maintenance en froid commercial</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(432)?>" class="btn-sub-categorie-darkGray">
                <span>maintenance en plomberie</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
        </div>
        <?php elseif(is_page('depannage-et-reparation')):?>
        <h2>Notre intervention selon les secteurs d'activités</h2>
        <div class="secteurs-links">
            <a href="<?php echo get_post_permalink(356)?>" class="btn-sub-categorie-blue">
                <span>reparation en climatisation</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(379)?>" class="btn-sub-categorie-orange">
                <span>reparation en chauffage</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(394)?>" class="btn-sub-categorie-purple">
                <span>reparation en ventilation</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(423)?>" class="btn-sub-categorie-grey">
                <span>reparation en froid commercial</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
            <a href="<?php echo get_post_permalink(434)?>" class="btn-sub-categorie-darkGray">
                <span>reparation en plomberie</span>
                <img src="<?php echo get_template_directory_uri()?>/images/black-arrow.png" alt="">
            </a>
        </div>
    <?php endif;?>
    </section>
   
    <?php
        get_sidebar();
    ?>
</div>
<?php
get_footer();
