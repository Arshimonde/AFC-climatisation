<?php
/** 
 * Template Name: marque
*/
    get_header();
    $post_type="";
    $category_name ="";

    if(is_page("marques-de-climatiseurs") ){
        $category_name="conseil-expertise-climatisation";
    }else if(is_page("marques-de-chauffage")){
         $category_name="conseil-expertise-chauffage";
    }else if(is_page("marques-de-ventilation")){
         $category_name="conseil-expertise-ventilation";
    }else if(is_page("marques-de-froid-commercial")){
         $category_name="conseil-expertise-froid-commercial";
    }
    //WP QUERY
    $the_query = new WP_Query(array(
        "post_type"=>"marque",
        "category_name"=>$category_name
    ));
?>
    
    <section class="reference">
        <div class="container">
            <h1 class="page-heading"><?php  wp_title(''); ?></h1>
            <!--Marque START-->
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
            <!--Marque END-->
        </div>  
    </section>
<?php
get_footer();