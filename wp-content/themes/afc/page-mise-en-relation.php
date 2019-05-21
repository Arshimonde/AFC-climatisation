<?php


get_header();
?>

<div class="container">
    <h1 class="page-heading"><?php wp_title('');?></h1>
    <section>
        <?php echo do_shortcode('[contact-form-7 id="297" title="mise en relation"]')?>
    </section>
</div>
<?php
get_footer();