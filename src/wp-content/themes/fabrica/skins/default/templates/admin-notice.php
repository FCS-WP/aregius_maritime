<?php
/**
 * The template to display Admin notices
 *
 * @package FABRICA
 * @since FABRICA 1.0.1
 */

$fabrica_theme_slug = get_option( 'template' );
$fabrica_theme_obj  = wp_get_theme( $fabrica_theme_slug );
?>
<div class="fabrica_admin_notice fabrica_welcome_notice notice notice-info is-dismissible" data-notice="admin">
	<?php
	// Theme image
	$fabrica_theme_img = fabrica_get_file_url( 'screenshot.jpg' );
	if ( '' != $fabrica_theme_img ) {
		?>
		<div class="fabrica_notice_image"><img src="<?php echo esc_url( $fabrica_theme_img ); ?>" alt="<?php esc_attr_e( 'Theme screenshot', 'fabrica' ); ?>"></div>
		<?php
	}

	// Title
	?>
	<h3 class="fabrica_notice_title">
		<?php
		echo esc_html(
			sprintf(
				// Translators: Add theme name and version to the 'Welcome' message
				__( 'Welcome to %1$s v.%2$s', 'fabrica' ),
				$fabrica_theme_obj->get( 'Name' ) . ( FABRICA_THEME_FREE ? ' ' . __( 'Free', 'fabrica' ) : '' ),
				$fabrica_theme_obj->get( 'Version' )
			)
		);
		?>
	</h3>
	<?php

	// Description
	?>
	<div class="fabrica_notice_text">
		<p class="fabrica_notice_text_description">
			<?php
			echo str_replace( '. ', '.<br>', wp_kses_data( $fabrica_theme_obj->description ) );
			?>
		</p>
		<p class="fabrica_notice_text_info">
			<?php
			echo wp_kses_data( __( 'Attention! Plugin "ThemeREX Addons" is required! Please, install and activate it!', 'fabrica' ) );
			?>
		</p>
	</div>
	<?php

	// Buttons
	?>
	<div class="fabrica_notice_buttons">
		<?php
		// Link to the page 'About Theme'
		?>
		<a href="<?php echo esc_url( admin_url() . 'themes.php?page=fabrica_about' ); ?>" class="button button-primary"><i class="dashicons dashicons-nametag"></i> 
			<?php
			echo esc_html__( 'Install plugin "ThemeREX Addons"', 'fabrica' );
			?>
		</a>
	</div>
</div>
