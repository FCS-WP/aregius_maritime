<?php
/**
 * The "Style 1" template to display the post header of the single post or attachment:
 * featured image and title placed in the post header
 *
 * @package FABRICA
 * @since FABRICA 1.75.0
 */

if ( apply_filters( 'fabrica_filter_single_post_header', is_singular( 'post' ) || is_singular( 'attachment' ) ) ) {
	$fabrica_post_format = str_replace( 'post-format-', '', get_post_format() );
    $post_meta = in_array( $fabrica_post_format, array( 'video' ) ) ? get_post_meta( get_the_ID(), 'trx_addons_options', true ) : false;
    $video_autoplay = ! empty( $post_meta['video_autoplay'] )
        && ! empty( $post_meta['video_list'] )
        && is_array( $post_meta['video_list'] )
        && count( $post_meta['video_list'] ) == 1
        && ( ! empty( $post_meta['video_list'][0]['video_url'] ) || ! empty( $post_meta['video_list'][0]['video_embed'] ) );

    // Featured image
	ob_start();
	fabrica_show_post_featured_image( array(
		'thumb_bg'  => true,
		'popup'     => true,
        'class_avg' => in_array( $fabrica_post_format, array( 'video' ) )
            ? ( ! $video_autoplay
                ? 'content_wrap'
                : 'with_thumb post_featured_bg with_video with_video_autoplay'
            )
            : '',
        'autoplay'  => $video_autoplay,
        'post_meta' => $post_meta
	) );
	$fabrica_post_header = ob_get_contents();
	ob_end_clean();
	$fabrica_with_featured_image = fabrica_is_with_featured_image( $fabrica_post_header );

	// Post title and meta
	ob_start();
	fabrica_show_post_title_and_meta( array(
										'content_wrap'  => true,
										'share_type'    => 'list',
										'show_labels'   => true,
										'author_avatar' => $fabrica_with_featured_image,
										'add_spaces'    => true,
										)
									);
	$fabrica_post_header .= ob_get_contents();
	ob_end_clean();

	if ( strpos( $fabrica_post_header, 'post_featured' ) !== false
		|| strpos( $fabrica_post_header, 'post_title' ) !== false
		|| strpos( $fabrica_post_header, 'post_meta' ) !== false
	) {
        do_action( 'fabrica_action_before_post_header' );

        ?>
		<div class="post_header_wrap post_header_wrap_in_header post_header_wrap_style_<?php
			echo esc_attr( fabrica_get_theme_option( 'single_style' ) );
			if ( $fabrica_with_featured_image ) {
				echo ' with_featured_image';
			}
		?>">
			<?php
			fabrica_show_layout( $fabrica_post_header );
			?>
		</div>
		<?php
        do_action( 'fabrica_action_after_post_header' );

    }
}
