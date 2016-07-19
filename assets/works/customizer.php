<?php

/* Customizer Everything
---------------------------------------------------------------------------------------------------- */

function plasso_customizer() {

	global $wp_customize;

	$wp_customize->remove_section('static_front_page');

    /* Yes Kirki? Cool, let’s do this.
    ------------------------------------------------------------------------------------------------ */

	if(class_exists('Kirki')) {

        // Theme configuration for Kirki.
		Kirki::add_config('plasso_theme', array(
			'capability' => 'edit_theme_options',
			'option_type' => 'theme_mod',
		));

		/* The Product Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('product_section', array(
			'title' => __('Product Settings', 'plasso_textdomain'),
			'description' => __('Settings for the product you’re selling.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Product: For the Plasso product ID.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[space_id]',
			'label' => __('Space ID', 'plasso_textdomain'),
            'description' => __('You’ll find your space ID at the end of your space URL when viewing your space on Plasso.co. For instance, if your space URL is <strong>https://plasso.co/s/zZ2NwPCfyU</strong>, your space ID would be <strong>zZ2NwPCfyU</strong>.'),
			'section' => 'product_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Price: Adding a price to the buy now button.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[product_price]',
			'label' => __('Price', 'plasso_textdomain'),
            'description' => __('Add a price to your “Buy Now” button (e.g. “$49”).'),
			'section' => 'product_section',
			'type' => 'text',
			'priority' => 10,
		));

        /* The Header Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('header_section', array(
			'title' => __('Header', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the header.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Header Toggle: Toggle the header section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[header_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the header section on or off.'),
			'section' => 'header_section',
			'type' => 'toggle',
			'priority' => 10,
		));

        // Text: The header text.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[header_text]',
			'label' => __('Text', 'plasso_textdomain'),
            'description' => __('Add some header text.'),
			'section' => 'header_section',
			'type' => 'text',
			'priority' => 10,
		));

        // Logo Image: The header logo image.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[header_logo]',
			'label' => __('Logo', 'plasso_textdomain'),
            'description' => __('Add a logo image (replaces the default text-based logo.)'),
			'section' => 'header_section',
			'type' => 'image',
			'priority' => 10,
		));

		// Menu Repeater: Building the header menu.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[header_menu]',
			'label' => __('Menu', 'plasso_textdomain'),
            'description' => __('Add, remove and/or organize links to pages.'),
            'row_label' => array(
                 'value' => 'menu item'
            ),
			'section' => 'header_section',
			'type' => 'repeater',
			'priority' => 10,
			'fields' => array (
				'title' => array(
					'label' => __('Title', 'plasso_textdomain'),
					'type' => 'text',
				),
                'page' => array(
					'label' => __('Page', 'plasso_textdomain'),
					'type' => 'dropdown-pages',
				),
			),
		));

        /* The Book Intro Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('intro_section', array(
			'title' => __('Book Intro', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the book intro.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Intro Toggle: Toggle the intro section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the intro section on or off.'),
			'section' => 'intro_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Book Image: The intro book image.

        Kirki::add_field( 'plasso_theme', array(
			'settings' => 'plasso[intro_image]',
			'label' => __('Book Image', 'plasso_textdomain'),
            'description' => __('The book image for your intro.'),
			'section' => 'intro_section',
			'type' => 'image',
			'priority' => 10,
		));

		// Intro Title: Just a textarea for the intro tagline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_title]',
			'label' => __('Intro Title', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text for your intro title.'),
			'section' => 'intro_section',
			'type' => 'text',
			'priority' => 10,
		));

        // Intro Tagline: Just a textarea for the intro tagline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_tagline]',
			'label' => __('Intro Tagline', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text for your intro tagline.'),
			'section' => 'intro_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        /* The Features Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('features_section', array(
			'title' => __('Features', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for your product features section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Features Toggle: Toggle the features section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the features section on or off.'),
			'section' => 'features_section',
			'type' => 'toggle',
			'priority' => 10,
		));

        // Features Intro Headline: Just a textarea for the features intro headline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_intro_headline]',
			'label' => __('Features Headline', 'plasso_textdomain'),
            'description' => __('For your features intro headline.'),
			'section' => 'features_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // Features Intro Text: Just a textarea for the features intro text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_intro_text]',
			'label' => __('Features Tagline', 'plasso_textdomain'),
            'description' => __('For your features intro text.'),
			'section' => 'features_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // Features Repeater: Here’s the features repeater for the actual book features.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_feature]',
			'label' => __('Product Features', 'plasso_textdomain'),
            'description' => __('Add, remove and/or organize features.'),
            'row_label' => array(
                 'value' => 'feature'
            ),
			'section' => 'features_section',
			'type' => 'repeater',
			'priority' => 10,
			'fields' => array (
				'icon' => array(
					'label' => __('Icon', 'plasso_textdomain'),
					'type' => 'image',
				),
				'title' => array(
					'label' => __('Title', 'plasso_textdomain'),
					'type' => 'text',
				),
				'text' => array(
					'label' => __('Text', 'plasso_textdomain'),
					'type' => 'textarea',
				),
			),
		));

		/* The Testimonials Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('testimonials_section', array(
			'title' => __('Testimonials', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for your product testimonials section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Testimonials Toggle: Toggle the testimonials section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[testimonials_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the testimonials section on or off.'),
			'section' => 'testimonials_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Testimonials Intro Headline: Just a textarea for the features intro headline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[testimonials_intro_headline]',
			'label' => __('Testimonials Headline', 'plasso_textdomain'),
            'description' => __('For your testimonials intro headline.'),
			'section' => 'testimonials_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // Testimonials Intro Text: Just a textarea for the features intro text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[testimonials_intro_text]',
			'label' => __('Testimonials Tagline', 'plasso_textdomain'),
            'description' => __('For your testimonials intro text.'),
			'section' => 'testimonials_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // Testimonails Repeater: Here’s the testimonials repeater.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[testimonials_testimonial]',
			'label' => __('Testimonails', 'plasso_textdomain'),
            'description' => __('Add, remove and/or organize testimonials.'),
            'row_label' => array(
                 'value' => 'testimonial'
            ),
			'section' => 'testimonials_section',
			'type' => 'repeater',
			'priority' => 10,
			'fields' => array (
				'profile' => array(
					'label' => __('Profile Image', 'plasso_textdomain'),
					'type' => 'image',
				),
				'name' => array(
					'label' => __('Name', 'plasso_textdomain'),
					'type' => 'text',
				),
				'quote' => array(
					'label' => __('Quote', 'plasso_textdomain'),
					'type' => 'textarea',
				),
			),
		));

		/* The Book Author Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('author_section', array(
			'title' => __('Book Author', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the book author.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Author Toggle: Toggle the author section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[author_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the author section on or off.'),
			'section' => 'author_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Author Image: The author image.

        Kirki::add_field( 'plasso_theme', array(
			'settings' => 'plasso[author_image]',
			'label' => __('Author Image', 'plasso_textdomain'),
            'description' => __('The author image.'),
			'section' => 'author_section',
			'type' => 'image',
			'priority' => 10,
		));

		// Author Title: Just a textarea for the author section.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[author_title]',
			'label' => __('Author Title', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text for your author title.'),
			'section' => 'author_section',
			'type' => 'text',
			'priority' => 10,
		));

        // Author Text: Just a textarea for the author section.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[author_text]',
			'label' => __('Author Text', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text about the author.'),
			'section' => 'author_section',
			'type' => 'textarea',
			'priority' => 10,
		));

		// Author Signature: The author signature.

        Kirki::add_field( 'plasso_theme', array(
			'settings' => 'plasso[author_signature]',
			'label' => __('Signature', 'plasso_textdomain'),
            'description' => __('Add a signature image if you have one.'),
			'section' => 'author_section',
			'type' => 'image',
			'priority' => 10,
		));

        /* Newsletter
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('newsletter_section', array(
			'title' => __('Newsletter', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for your MailChimp newsletter', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Newsletter Toggle: Toggle the newsletter section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[newsletter_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the newsletter section on or off.'),
			'section' => 'newsletter_section',
			'type' => 'toggle',
			'priority' => 10,
		));

        // Newsletter Text: The text displayed above the newsletter form.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[newsletter_text]',
			'label' => __('Text', 'plasso_textdomain'),
            'description' => __('Some call to action text (e.g. “Subscribe to our newsletter to stay updated.”).'),
			'section' => 'newsletter_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // MailChimp API: For the MailChimp API key.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[newsletter_api]',
			'label' => __('MailChimp API Key', 'plasso_textdomain'),
            'description' => __('Add your <a href="http://kb.mailchimp.com/integrations/api/about-api-keys" target="_blank">MailChimp API Key</a> here.'),
			'section' => 'newsletter_section',
			'type' => 'text',
			'priority' => 10,
		));

        // MailChimp List: For the MailChimp list ID.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[newsletter_list]',
			'label' => __('MailChimp List ID', 'plasso_textdomain'),
            'description' => __('Add your <a href="http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id" target="_blank">MailChimp List ID</a> here.'),
			'section' => 'newsletter_section',
			'type' => 'text',
			'priority' => 10,
		));

		/* The Footer Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('footer_section', array(
			'title' => __('Footer', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the footer.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Footer Toggle: Toggle the footer section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the footer section on or off.'),
			'section' => 'footer_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Text: The footer text.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_text]',
			'label' => __('Text', 'plasso_textdomain'),
            'description' => __('Add some footer text (e.g. “Copyright Bla Bla Bla”).'),
			'section' => 'footer_section',
			'type' => 'textarea',
			'priority' => 10,
		));

		// Twitter: The Twitter link.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_twitter]',
			'label' => __('Twitter', 'plasso_textdomain'),
            'description' => __('Enter your Twitter ID to add a Twitter link.'),
			'section' => 'footer_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Facebook: The Facebook link.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_facebook]',
			'label' => __('Facebook', 'plasso_textdomain'),
            'description' => __('Enter your Facebook ID to add a Facebook link.'),
			'section' => 'footer_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Instagram: The Instagram link.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_instagram]',
			'label' => __('Instagram', 'plasso_textdomain'),
            'description' => __('Enter your Instagram ID to add a Instagram link.'),
			'section' => 'footer_section',
			'type' => 'text',
			'priority' => 10,
		));

    /* No Kirki? Install it please.
    ------------------------------------------------------------------------------------------------ */

	} else {

		class Kirki_Warning extends WP_Customize_Control {
			public $type = 'kirki_warning';

			public function render_content() {
				?>
					<label>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
						<p><?php _e('This theme requires the Kirki plugin in order to edit your site from within the customizer.', 'plasso_textdomain'); ?></p>
						<a href="<?php echo get_admin_URL(); ?>themes.php?page=tgmpa-install-plugins" class="button"><?php _e('Install Kirki', 'plasso_textdomain'); ?></a></p>
					</label>
				<?php
			}
		}

		$wp_customize->add_section(
			'theme_settings',
			array(
				'title' => 'Theme Settings',
				'description' => '',
				'priority' => 200,
			)
		);

		$wp_customize->add_setting('kirki_warning', array('sanitize_callback' => '__return_false'));
		$wp_customize->add_control(
			new Kirki_Warning(
				$wp_customize,
				'kirki_warning',
				array(
					'label' => __('Please note:', 'plasso_textdomain'),
					'section' => 'theme_settings',
					'settings' => 'kirki_warning'
				)
			)
		);
	}
}
add_action('customize_register', 'plasso_customizer');
