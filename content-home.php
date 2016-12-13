<?php $plasso = get_theme_mod('plasso'); ?>

<?php

// Intro: Get the book intro if it’s toggled.
if($plasso['intro_toggle'] == true) {

?>
<div class="ebook-hero">
	<div class="grid grid-pad">
		<div class="col-1-2 animated fadeInUp delayed_05s">
      <?php if(!empty($plasso['intro_image'])) { ?>
      <img src="<?php echo $plasso['intro_image']; ?>">
      <?php } ?>
		</div>

		<div class="col-1-2 animated fadeInUp delayed_075s">
			<div class="text">
        <?php if(!empty($plasso['intro_title'])) { ?>
        <h2><?php echo $plasso['intro_title']; ?></h2>
        <?php } ?>

        <?php if(!empty($plasso['intro_tagline'])) { ?>
        <h5><?php echo $plasso['intro_tagline']; ?></h5>
        <?php } ?>

        <?php if(!empty($plasso['space_id'])) { ?>
      	<a class="btn plo-button" href="https://plasso.co/s/<?php echo $plasso['space_id']; ?>">Buy Now<?php if(!empty($plasso['product_price'])) { ?> - <?php echo $plasso['product_price']; ?><?php } ?></a>
        <?php } else { ?>
        <a class="btn" href="<?php echo site_url(); ?>/wp-admin/customize.php">Configure Your Product</a>
        <?php } ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<?php

// Features: Get book features/info if toggled.
if($plasso['features_toggle'] == true) {

?>
<div class="book-info">
	<div class="content">
    <?php if(!empty($plasso['features_intro_headline'])) { ?>
    <h2 class="section-title"><?php echo $plasso['features_intro_headline']; ?></h2>
    <?php } ?>

    <?php if(!empty($plasso['features_intro_text'])) { ?>
    <h5 class="section-desc"><?php echo $plasso['features_intro_text']; ?></h5>
    <?php } ?>

  	<hr class="section-divider">

		<div class="grid grid-pad">
    <?php if (!empty($plasso['features_feature'])) {
		  foreach($plasso['features_feature'] as $feature) { ?>
        <div class="col-1-3">
          <?php if(!empty($feature['icon'])) { ?>
      		<img src="<?php echo wp_get_attachment_url($feature['icon']); ?>">
          <?php } ?>

          <h4><?php echo $feature['title']; ?></h4>
      		<p><?php echo $feature['text']; ?></p>
      	</div>
			<?php }
		} ?>
		</div>
	</div>
</div>
<?php } ?>

<?php

// Testimonials: Get the testimonials if toggled.
if($plasso['testimonials_toggle'] == true) {

?>
<div class="testimonials">
	<div class="content">
    <?php if(!empty($plasso['testimonials_intro_headline'])) { ?>
    <h2 class="section-title"><?php echo $plasso['testimonials_intro_headline']; ?></h2>
    <?php } ?>

    <?php if(!empty($plasso['testimonials_intro_text'])) { ?>
    <h5 class="section-desc"><?php echo $plasso['testimonials_intro_text']; ?></h5>
    <?php } ?>

    <hr class="section-divider">

		<div class="grid grid-pad">
    <?php if (!empty($plasso['testimonials_testimonial'])) {
		  foreach($plasso['testimonials_testimonial'] as $testimonial) { ?>
        <div class="col-1-3">
          <div class="profile" style="background-image: url(<?php echo wp_get_attachment_url($testimonial['profile']); ?>);"></div>
        	<h4><?php echo $testimonial['name']; ?></h4>
    			<p><em>“<?php echo $testimonial['quote']; ?>”</em></p>
      	</div>
			<?php }
		} ?>
		</div>
	</div>
</div>
<?php } ?>

<?php

// Author: Get the book author section if toggled.
if($plasso['author_toggle'] == true) {

?>
<div class="author">
	<div class="content">
		<div class="grid grid-pad">
			<div class="col-1-2">
        <?php if(!empty($plasso['author_title'])) { ?>
        <h2><?php echo $plasso['author_title']; ?></h2>
        <?php } ?>

        <?php if(!empty($plasso['author_text'])) { ?>
        <p><?php echo $plasso['author_text']; ?></p>
        <?php } ?>

        <?php if(!empty($plasso['author_signature'])) { ?>
        <img src="<?php echo $plasso['author_signature']; ?>">
        <?php } ?>
			</div>

			<div class="col-1-2">
        <?php if(!empty($plasso['author_image'])) { ?>
        <img src="<?php echo $plasso['author_image']; ?>">
        <?php } ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>
