<?php
    /* 
    * Template Name: actualite
    */
    get_header();
    
    $currentPage = get_query_var("paged");
    $the_query = new WP_Query(array(
        "order" => "ASC",
        "post_type"=>"metier",
        "posts_per_page"=>3,
        "paged"=>$currentPage
    ));
    $pages_count = $the_query->max_num_pages;
    if(have_posts()):
?>
<div class="container">

    <h1 class="page-heading"><?php wp_title('');?></h1>
    <section class="actualties">
    <?php while($the_query->have_posts()):$the_query->the_post();?>
        <?php get_template_part('template-parts/content','post'); ?>
    <?php endwhile;?>
    <div class="pagination">
        <?php echo paginate_links(array(
            total =>  $pages_count,
            'prev_text' => __('«'),
            'next_text' => __('»'),
            'before_page_number' => ' ',
            'after_page_number'  => ' '
        )); ?>
    </div>
    </section>
    <?php
        endif;
        get_sidebar();
    ?>
</div>
<?php
get_footer();