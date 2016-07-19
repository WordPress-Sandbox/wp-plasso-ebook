<?php $plasso = get_theme_mod('plasso'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="description" content="<?php echo get_bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"/>
		<?php wp_head(); ?>
	</head>

    <body class="index">
        <?php

        // Welcome: If nothing has been customized, fet the welcome template.
    	if(
            $plasso['header_toggle'] == false &&
            $plasso['intro_toggle'] == false &&
            $plasso['features_toggle'] == false &&
            $plasso['testimonials_toggle'] == false &&
            $plasso['author_toggle'] == false &&
            $plasso['newsletter_toggle'] == false &&
            $plasso['footer_toggle'] == false
        ) {
            get_template_part('content-welcome');
        }

        // If 404: Get the 404 message if there’s an error.
        if(is_404()) {
            get_template_part('content-404');
        }

        ?>

    	<div class="wrapper">
            <?php

            // Header: Get the header if it’s toggled (all pages).
            if($plasso['header_toggle'] == true) {

            ?>
            <header class="header animated fadeInDown">
        		<div class="content">
                    <?php if(!empty($plasso['header_logo'])) { ?>
        			<a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo $plasso['header_logo']; ?>"></a>
                    <?php } else { ?>
					<div class="logo"><a href="<?php echo site_url(); ?>"><?php echo $plasso['header_text']; ?></a></div>
            		<?php } ?>

        			<ul class="nav">
                    <?php if (!empty($plasso['header_menu'])) {
        			    foreach($plasso['header_menu'] as $menu) { ?>
                            <li><a href="<?php echo get_page_link($menu['page']); ?>"><?php echo $menu['title']; ?></a></li>
        				<?php }
        			} ?>
					</ul>
        		</div>
        	</header>
			<?php } ?>

            <?php

            // If Home: Get the home page content if we’re home.
            if(is_home()) {
                get_template_part('content-home');
            }

            // If Page: Get the page content if we’re on a page.
            if(is_page()) {
                get_template_part('content-page');
            }

            ?>

            <?php

            // Newsletter: Get the newsletter form if it’s toggled (all pages).
            if($plasso['newsletter_toggle'] == true) {

            ?>
            <div class="newsletter">
                <div class="content">
                    <?php if(!empty($plasso['newsletter_text'])) { ?>
                    <h5><?php echo $plasso['newsletter_text']; ?></h5>
                    <?php } ?>

                    <form action="" method="post">
                        <input id="mc-email" name="mc-email" type="email" placeholder="Enter your email address" required />
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <?php } ?>

            <?php

            // Footer: Get the footer if it’s toggled (all pages).
            if($plasso['footer_toggle'] == true) {

            ?>
            <footer>
                <div class="content">
                    <?php if(!empty($plasso['footer_text'])) { ?>
                    <p><?php echo $plasso['footer_text']; ?></p>
                    <?php } ?>

                    <ul class="social-links">
                        <?php if(!empty($plasso['footer_twitter'])) { ?>
                        <li><a href="https://twitter.com/<?php echo $plasso['footer_twitter']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.svg"></a></li>
                        <?php } ?>

                        <?php if(!empty($plasso['footer_facebook'])) { ?>
                        <li><a href="https://facebook.com/<?php echo $plasso['footer_facebook']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.svg"></a></li>
                        <?php } ?>

                        <?php if(!empty($plasso['footer_instagram'])) { ?>
                        <li><a href="https://instagram.com/<?php echo $plasso['footer_instagram']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.svg"></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </footer>
            <?php } ?>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>
