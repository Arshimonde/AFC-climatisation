<?php
    /* 
    * Template Name: afc-en-brief
    */
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
    get_header();
    if(have_posts()):
?>
<div class="container">
    <h1 class="page-heading"><?php wp_title('');?></h1>
    <section class="afc-enbrief">
        <?php while(have_posts()):the_post();?>
        <img src="<?php the_field("image_brief");?>" class="img-responsive" alt="">
        <p class="quotes"><?php the_field("extrait");?></p>
        <p class="p"><?php the_content(); ?></p>
        <div class="row historique">
            <div class="col-md-6">
                <h2>Chiffres-clés</h2>
                <ul class="list-unstyled">
                    <?php 
                        if(have_rows("chiffres_cles")):
                            while(have_rows("chiffres_cles")):the_row();
                    ?>
                    <li>
                        <span class="nbr"><?php the_sub_field("chiffre");?></span>
                        <span class="word"><?php the_sub_field("label");?></span>
                    </li>
                    <?php endwhile;endif;?>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Histoire</h2>
                <ul class="list-unstyled">
                    <?php 
                        if(have_rows("historique")):
                            while(have_rows("historique")):the_row();
                    ?>
                    <li>
                        <span class="nbr"><?php the_sub_field("annee");?></span>
                        <span class="word"><?php the_sub_field("realisation");?></span>
                    </li>
                    <?php endwhile;endif;?>
                </ul>
            </div>
        </div>
    <?php endwhile;?>
    </section>
    <?php
        endif;
        get_sidebar();
    ?>
</div>
<?php
get_footer();