<?php get_header(); ?>
<?php /* This sets the $curauth variable */
if( isset( $_GET['author_name'] ) ) :
	$curauth = get_userdatabylogin( $author_name );
else :
	$curauth = get_userdata( intval( $author ) );
endif;
?>
<div id="maintop"></div><!--end maintop-->
<div id="wrapper">
	<div id="content">
		<div id="main-blog">
			<div id="author" class="<?php if ( ( get_userdata( intval( $author ) )->ID ) == '1' ) echo 'administrator';
				elseif ( ( get_userdata( intval( $author ) )->ID ) == '2' ) echo 'jellybeen'; /* sample */
				/* add additional user_id following above example, echo the 'CSS element' you want to use for styling */
				?>">
				<h2><?php _e( 'About ', 'desk-mess-mirrored' ); echo $curauth->display_name; ?></h2>
				<ul>
					<li><?php _e( 'Website', 'desk-mess-mirrored' ); ?>: <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a> <?php _e( 'or', 'desk-mess-mirrored' ); ?> <a href="mailto:<?php echo $curauth->user_email; ?>"><?php _e( 'email', 'desk-mess-mirrored' ); ?></a></li>
					<li><?php _e( 'Biography', 'desk-mess-mirrored' ); ?>: <?php echo $curauth->user_description; ?></li>
				</ul>
			</div> <!-- #author -->
			<h2><?php _e( 'Posts by ', 'desk-mess-mirrored' ); echo $curauth->display_name; ?>:</h2>
			<!-- start the Loop -->
			<?php if ( have_posts() ) : ?>
				<?php $count = 0; ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php $count++; ?>
					<div class="clear">&nbsp;</div>
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<div class="post-comments">
							<?php if ( ! post_password_required() ) {
								comments_popup_link( __( '0', 'desk-mess-mirrored' ), __( '1', 'desk-mess-mirrored' ), __( '%', 'desk-mess-mirrored' ), '',__( '-', 'desk-mess-mirrored' ) );
							} ?>
						</div>
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'desk-mess-mirrored' ); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<div class="postdata">
								<?php if ( get_the_title() == "" ) { /* for posts without titles - creates a permalink using the post date referencing the post ID */ ?>
									<?php _e( 'On ', 'desk-mess-mirrored' ); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to post ', 'desk-mess-mirrored' ); the_id(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
								<?php } else {
									_e( 'On ', 'desk-mess-mirrored' ); the_time( get_option( 'date_format' ) );
								}
							_e( ' in ', 'desk-mess-mirrored' ); the_category( ', ' ); edit_post_link( __( 'Edit', 'desk-mess-mirrored' ), __( ' &#124; ', 'desk-mess-mirrored' ), __( '', 'desk-mess-mirrored' ) ); ?>
						</div><!-- .postdata -->
						<?php if ( $count == 1 ) : ?>
							<?php the_content( __( ' ... continue reading. ', 'desk-mess-mirrored' ) ); ?>
							<div class="clear"></div> <!-- For inserted media at the end of the post -->
							<?php wp_link_pages( array( 'before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number' ) ); ?>
							<p class="single-meta" style="float:right; margin-top:5px; margin-right:10px; font-size:11px; "> <?php the_tags(); ?></p>
						<?php else : ?>
							<?php the_excerpt(); ?>
						<?php endif; ?>
						<div class="clear"></div> <!-- For inserted media at the end of the post -->
					</div> <!-- .post #post-ID -->
				<?php endwhile; ?>
				<div id="nav-global" class="navigation">
					<div class="left">
						<?php next_posts_link( __( '&laquo; Previous entries', 'desk-mess-mirrored' ) ); ?>
					</div>
					<div class="right">
						<?php previous_posts_link( __( 'Next entries &raquo;', 'desk-mess-mirrored' ) ); ?>
					</div>
				</div> <!-- .navigation -->
			<?php else : ?>
				<h2><?php printf( __( 'Search Results for: %s' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h2>
				<p class="center"><?php _e( 'Sorry, there are no posts by this author.', 'desk-mess-mirrored' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
			<!-- end the Loop -->
		</div><!--end main blog-->
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div><!--end content-->
</div><!--end wrapper-->
<?php get_footer();?>
<?php /* Last Revision: Jan 23, 2011 v1.8.2 */ ?>