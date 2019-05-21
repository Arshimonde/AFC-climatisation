<div class="row post">
    <?php if(is_page("nos-metier")):?>
        <p class="quotes"><?php the_field("citation");?></p>
    <?php endif;?>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 thumb">
        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-responsive center-block" alt="">
    </div>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <?php 
            if(is_page("nos-metier")):
        ?>
        <h2 class="metier-heading"><?php the_field("nom");?></h2>
        
            <?php else:?>
            <h2><?php the_title();?></h2>
            <?php endif;?>
        <?php 
            if(is_page("actualite")):
        ?>
            <span class="date"><?php echo get_the_date('d F Y');?></span>
        <?php endif;?>
        <p class="extrait"><?php the_excerpt(); ?></p>
    </div>
    <?php 
        if(is_page("actualite")):
    ?>
        <a href="<?php the_permalink(); ?>" class="voir">&gt;&gt;lire la suite</a>
    <?php endif;?>
    
</div>
<div class="post-border"></div>