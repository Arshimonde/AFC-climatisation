<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AFC
 */

?>

<aside id="secondary" class="widget-area">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php
	//LES LIENS DE NAVIGATIONS
   $parent_id = $wp_query->post->post_parent;
   $parent_object = get_post($parent_id);
	$args = array(
		'depth'        => 0,
		'show_date'    => '',
		'date_format'  => get_option('date_format'),
		'child_of'     => $parent_id,
		'exclude'      => '',
		'include'      => '',
		'title_li'     => __("<h2>".$parent_object->post_title."</h2>"),
		'echo'         => 1,
		'authors'      => '',
		'sort_column'  => 'menu_order',
		'link_before'  => '<span>',
		'link_after'   => '</span><img src="'.get_template_directory_uri().'/images/purple-arrow.png" />',
		'walker'       => '',
		'post_type'    => 'page',
		'post_status'  => 'publish' 
	); 
	
	if(!is_single() && !is_page(array(343,365,381,410,425))):
	wp_list_pages( $args );
	endif;
	//LA DERNIER ACTUALITE
	$the_query = new WP_Query(array(
		"post_type"=>"actualite",
		"post_per_type"=>1,
		"orderby"=>"date",
		"order"=>"DESC"
	));
	if($the_query->have_posts() && !is_page(207)):$the_query->the_post();
?>
	<div class="sidebar-actualite">
		<h2><?php the_title();?></h2>
		<p><?php the_excerpt();?></p>
		<a href="<?php the_permalink();?>" class="afc-btn-purple">>>lire la suite</a>
	</div>
<?php endif;?>
	<!--Marque slider start-->
	<?php if(in_array($parent_id,array(343,365,381,410))): ?>
		<h4 class="">Nos marques de <?php echo $parent_object->post_title; ?></h4>
		<div id="" class="marque-slider-container">
			<div id="" class="marque-slider">
			<?php 
				$category = "";
				switch($parent_id){
					case 343: $category = "conseil-expertise-climatisation";
							  break;
					case 365:$category = "conseil-expertise-chauffage";
							  break;
					case 381:$category = "conseil-expertise-ventilation";
							  break;
					case 410:$category = "conseil-expertise-froid-commercial";
							  break;
					default:$category="conseil-expertise-climatisation";
							  break;
				}
				$my_query = new WP_Query(array(
					"post_type"=>"marque",
					"category_name"=>$category
				)); 
				if($my_query->have_posts()):
				while($my_query->have_posts()):$my_query->the_post();
			?>
					<div>
						<img src="<?php the_field("image_catalogue");?>" class="img-responsive center-block">
					</div>
				<?php endwhile;endif?>
				</div>
				<div class="arrows"></div>
		</div>
	<?php endif;?>
	<!--Marque slider end-->
</aside><!-- #secondary -->
