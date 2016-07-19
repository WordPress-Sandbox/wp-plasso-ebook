<?php $plasso = get_theme_mod('plasso'); ?>

<div class="site-content">
	<div class="content">
    	<div class="entry-content animated fadeInUp delayed_05s">
            <?php while(have_posts()) : the_post(); ?>
            <div class="page">
    			<h1 class="title"><?php the_title(); ?></h1>
    			<?php the_content(); ?>
			</div>
    		<?php endwhile; ?>
    	</div>

    	<div class="sidebar animated fadeInUp delayed_075s">
			<?php if(!empty($plasso['intro_title'])) { ?>
			<h2 class="widget-heading"><?php echo $plasso['intro_title']; ?></h2>
			<?php } ?>

			<?php if(!empty($plasso['intro_tagline'])) { ?>
			<p><?php echo $plasso['intro_tagline']; ?></p>
			<?php } ?>

			<?php if(!empty($plasso['space_id'])) { ?>
			<a class="btn plo-button" href="https://plasso.co/s/<?php echo $plasso['space_id']; ?>">Buy Now<?php if(!empty($plasso['product_price'])) { ?> - <?php echo $plasso['product_price']; ?><?php } ?></a>
			<?php } else { ?>
			<a class="btn" href="<?php echo site_url(); ?>/wp-admin/customize.php">Configure Your Product</a>
			<?php } ?>
		</div>
	</div>
</div>
