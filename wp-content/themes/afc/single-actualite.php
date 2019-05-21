<?php


get_header();
	if(have_posts()):
?>
	<div class="container">
	<h1 class="page-heading"><?php wp_title('');?></h1>
	<div class="row single-actualite">
	<?php
	the_post();
	?>
		<div class="col-sm-8 col-md-8 img-holder">
			<span class="date"><?php the_date('d F Y');?></span>
			<img src="<?php the_field("image");?>" alt="" class="img-responsive">
			<p>
				<?php the_content()?>
			</p>
			<div class="share-links">
				<span>Partager Sur</span>
				<ul class="list-unstyled list-inline">
					<li>
						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title();?>">
							<img src="<?php bloginfo("template_directory");?>/images/facebook-purple.png" alt="">
						</a>
					</li>
					<li>
						<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" 		  onclick="javascript:window.open(this.href,
  						'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
							<img src="<?php bloginfo("template_directory");?>/images/google-plus-purple.png" alt="">
						</a>
					</li>
					<li>
						<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>">
							<img src="<?php bloginfo("template_directory");?>/images/twitter-purple.png" alt="">
						</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo get_permalink(207);?>" class="afc-btn-black">retour à la liste des actualités</a>
		</div>
		
		
	<?php
	endif;//IF HAVE POSTS END;
	?>
	
		<div class="col-sm-4 col-md-4 ">
			<?php
			get_sidebar();
			?>
		</div>
	</div> <!--END  ROW -->
	</div>
<?php

get_footer();
