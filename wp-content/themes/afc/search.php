<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AFC
 */
	get_header();
	$the_query = new WP_Query(array(
		'post_type'=>array(
			'post',
			'page',
			'produit',
			'marque',
			'realisation',
			'actualite',
			'metier',
			'qualification'
		)
	));
	$count=1;
?>

	<section id="search">
		<div class="container">
		<h1>resultats de recherche </h1>
		<?php if (have_posts() ) :?>
			<?php while(have_posts()):the_post();
			?>
			<div class="searched-post">
				<h2>
					<span><?php echo $count;$count++; ?></span>
					<a href="<?php the_permalink();?>" class="search-link"><?php the_title(); ?></a>
				</h2>
				<p><?php the_excerpt();?></p>
			</div>
		<?php
				endwhile;
				
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
		?>	
		</div>
	</section>
<?php
get_footer();
