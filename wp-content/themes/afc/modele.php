<?php
/** 
 * Template Name: modele
*/
    get_header();
    $post_type="realisation";
    $category_name ="";
    if(is_page("modele-de-climatiseurs")){
        $post_type="produit";
        $category_name="conseil-expertise-climatisation";
    }else if(is_page("modele-de-chauffage")){
        $post_type="produit";
        $category_name="conseil-expertise-chauffage";
    }else if(is_page("modele-de-ventilation")){
        $post_type="produit";
        $category_name="conseil-expertise-ventilation";
    }else if(is_page("modeles-installation-frigorifique")){
        $post_type="produit";
        $category_name="conseil-expertise-froid-commercial";
    }
    //WP QUERY
    $the_query = new WP_Query(array(
        "post_type"=>$post_type,
        "category_name"=>$category_name
    ));
?>
    
    <section class="reference">
        <div class="container">
            <h1 class="page-heading"><?php  wp_title(''); ?></h1>
            <!--REALISATION START-->
            <div class="row realisation">
                <?php if($the_query->have_posts()):?>
                <?php while($the_query->have_posts()):$the_query->the_post();?>
                <div class="ref-card col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <img src="<?php the_field("image_catalogue");?>" alt="" class="img-circle img-responsive center-block">
                    <span><?php the_field("nom");?></span>
                    <p><?php the_field("description_catalogue");?></p>
                    <a href="<?php the_permalink();?>" class="afc-btn-black">en savoir plus</a>
                </div>
                <?php endwhile;  ?>
                <?php endif;  ?>
            </div>
            <!--REALISATION END-->
            <!--Reference START-->
            <?php 
                if(is_page("nos-references")):
                the_post();
            ?>
            <h2>Quelques unes de nos références</h2>
            <div class="row les_references">
                <?php
                    $images = get_field("les_references");
                    if($images):
                        foreach($images as $image):
                ?>
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
                    <img src="<?php echo $image['url'];?>" alt="" class="img-responsive">
                </div>
                <?php 
                        endforeach;
                    endif;
                ?>
            </div>
            <?php endif;?>
            <!--Reference END-->
        </div>  
    </section>
<?php
get_footer();