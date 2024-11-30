<?php
/**
 * Template part for displaying author Meta
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NewsMunch
 */
$newsmunch_author_data 		= wp_kses_post(get_the_author_meta( 'description' ));
$newsmunch_active_author_id  = absint(get_the_author_meta( 'ID' ));
$newsmunch_active_user_id    = is_user_logged_in() ? wp_get_current_user()->ID : false;
?>
<div class="about-author padding-30 rounded">
	<div class="thumb">
		<?php echo get_avatar( $newsmunch_active_author_id, 200); ?>
	</div>
	<div class="details">
		<h4 class="name"><a href="<?php echo esc_url(get_author_posts_url(absint(get_the_author_meta('ID')))); ?>"><?php echo esc_html(get_the_author()); ?></a></h4>
		<?php 
			if ( '' === $newsmunch_author_data ) {
				if ( $newsmunch_active_user_id && $newsmunch_active_author_id === $newsmunch_active_user_id ) {

					// Translators: %1$s: <a> tag. %2$s: </a>.
					printf( wp_kses_post( __( 'You haven&rsquo;t entered your Biographical Information yet. %1$sEdit your Profile%2$s now.', 'newsmunch' ) ), '<a href="' . esc_url( get_edit_user_link( $newsmunch_active_user_id ) ) . '">', '</a>' );
				}
			}else{
				echo wp_kses_post( $newsmunch_author_data ); 
			}
		?>
	</div>
</div>