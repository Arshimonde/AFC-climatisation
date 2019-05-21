<?php


get_header();
?>
	<div class="container">
	<h1 class="page-heading"><?php wp_title('');?></h1>
		<div class="row single-actualite">
			<div class="col-sm-8 col-md-8 main-content">
				<!-- PRODUIT ET MARQUE TEMPLATE START -->
				<?php if(is_singular("produit") || is_singular("marque")):?>
				<div class="arrows"></div>
				<div id="produit-slider" class="">
					<?php 
						if(have_posts()):the_post();
						$images = get_field("images_carousel");
						foreach($images as $image):
					?>
							<div>
								<img src="<?php echo $image["url"];?>" class="img-responsive">
							</div>
					<?php endforeach;endif?>
				</div>
				<div class="content">
					<?php the_field('contenu');?>
				</div>
				<?php endif;?>
				<!-- PRODUIT ET MARQUE TEMPLATE END -->
				<!--REFERENCE ET REALISATION TEMPLATE START-->
				<?php if(is_singular("realisation")):?>
					<?php if(have_posts()):the_post();?>
				<div class="row realisation-slider-container">
					<div class="col-sm-5 col-md-5 reference-description">
						<?php the_field('presentation_carousel');?>
					</div>
					<div class="col-sm-7 col-md-7 realisation-slider">
						<?php 
							$images = get_field("images_carousel");
							foreach($images as $image):
						?>
							<div class="slide" style="background-image:url('<?php echo $image["url"];?>')">
							</div>
						<?php endforeach;?>
					</div>
				</div>
					<?php endif?>
					<div class="content">
						<?php the_field('contenu');?>
					</div>
				<?php endif;?>
				<!--REFERENCE ET REALISATION TEMPLATE END-->
			</div>
			<div class="col-sm-4 col-md-4 ">
				<?php
				get_sidebar();
				?>
			</div>
		</div> <!--END  ROW -->
	</div>
<?php

get_footer();
