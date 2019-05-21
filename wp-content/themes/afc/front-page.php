<?php
/**
 * Template Name:front-page
 */

get_header();
    $args = array(
        "post_per_page"=>"5",
        "post_type"=>"diaporama"
    );
    $first=true;
    $count=1;
    $the_query = new WP_Query($args);
if($the_query->have_posts()):
?>

 <!--SLIDER START-->
<section class="carousel slide" id="myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php 
                while($the_query->have_posts()):
                    $the_query->the_post();
                    if($first):
                        $first=false;
            ?>
            <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            <?php  else:?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $count; $count++;?>"></li>
            <?php endif;endwhile;?>
        </ol><!--Indicators-->
    <!--carousel-inner START-->
    <div class="carousel-inner">
            <?php 
                $first=true;
                while($the_query->have_posts()):
                    $the_query->the_post();
                    if($first):
                        $first=false;
            ?>
            <div class="item active" style="background-image:url(<?php the_field("image");?>)">
                <?php get_template_part("template-parts/content","caption");?>
            </div>
            <?php  else:?>
            <div class="item" style="background-image:url(<?php the_field("image");?>)">
                <?php get_template_part("template-parts/content","caption");?>
            </div>
            <?php endif;endwhile;?>
    </div>
    <!--carousel-inner END-->
</section>
<!--SLIDER END-->
<?php endif;?>
<!-- TYPE D'activité START-->
<section class="activity-type">
    <div class="container">
        <div class="row">
            <?php
            if(have_posts()):
                while(have_posts()): the_post();
                if(have_rows("bloc_activite")):        
                    while(have_rows("bloc_activite")):the_row();
            ?>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 card activity">
                <div style="background-image: url('<?php the_sub_field("image_activite");?>')">
                    <h2><?php the_sub_field("titre_activite");?></h2>
                    <p><?php the_sub_field("description_activite");?></p>
                    <a href="<?php the_sub_field("lien_activite");?>" class="afc-btn-black">en savoir plus</a>
                </div>
            </div>
            <?php endwhile;endif;?>
        </div>
    </div><!--ROW 1-->
    <div class="container row-2">
        <div class="row">
            <?php 
                if(have_rows("bloc_bas")):
                    while(have_rows("bloc_bas")):the_row();
            ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="text row" style="background-image:url('<?php the_sub_field("image_bas");?>')">
                    <div class="col-sm-9 col-md-9" >
                        <h2><?php the_sub_field("titre_bas");?></h2>
                        <p><?php the_sub_field("description_bas");?></p>
                    </div>
                    <a href="<?php the_sub_field("lien_bas");?>" class="afc-btn-black  col-sm-3 col-md-3">en savoir plus</a>
                </div>
            </div>
            <?php endwhile;endif;?>
        </div><!--ROW 2-->
    </div>
</section>
<?php endwhile;endif;//IF(have_posts()) END;?>
<!-- TYPE D'activité END-->
<!-- ACTUALITE START-->
<section class="actualite-reference">
    <?php
        $the_query = new WP_Query(array(
            "post_type"=>"actualite",
            "post_per_page"=>1
        ));
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 actualite">
                <h2>notre actualité</h2>
                <?php if($the_query->have_posts()):?>
                <?php $the_query->the_post();?>
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink();?>" class="afc-btn-black"> lire la suite</a>
                <a href="<?php echo get_permalink(207); ?>" class="afc-btn-purple go">&gt;&gt; Voir toutes nous actualités</a>
                <?php endif;?>
            </div>
            <!-- REFERENCEs ET Réalisations -->
            <div class="col-xs-12 col-sm-6 referance">
                <h2>RÉFÉRENCES ET RÉALISATIONS</h2>
                <?php
                    $the_query = new WP_Query(array(
                        "post_type"=>"realisation",
                        "post_per_page"=>"2"
                    ));
                    if($the_query->have_posts()):
                        while($the_query->have_posts()):$the_query->the_post();
                ?>
                <div class="post">
                    <img src="<?php the_field("image_catalogue");?>" class="img-responsive img-circle" alt="">
                    <div class="post-content">
                        <h3><?php the_field("nom");?></h3>
                        <p><?php the_field("description_catalogue");?></p>
                        <a href="<?php the_permalink();?>" class="afc-btn-purple">&gt;&gt; lire la suite</a>
                    </div>
                </div>
                <?php endwhile;endif;?>
                <a href="<?php echo get_permalink(263);?>" class="afc-btn-purple go">&gt;&gt; Voir toutes nos reférences</a>
            </div>
        </div>
    </div>
</section>
<!-- ACTUALITE END-->
<!-- LOGOS START-->
<section class="logos">
    <div class="container">
        <div class="row">
        <?php
        if(have_posts()):
            while(have_posts()): the_post();
            if(have_rows("logos")):
                while(have_rows("logos")):the_row();
        ?>
        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
            <img src="<?php the_sub_field("image_logos");?>" class="img-responsive" alt="">
        </div>
        <?php endwhile;endif;endwhile;endif;?>
        </div>
    </div>
</section>
<!-- LOGOS END-->
<?php
get_footer();