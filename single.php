<style>
    .container.sidebar-mobile-bottom{
        background-color: #ffffff!important;
    }
    .content-article.entry-content>p {
        font-size: 20px;
        line-height: 2;
    }
     .content-article.entry-content>h2 {
        font-size: 36px;
        line-height: 1.6;
        font-weight:400;
    }
    @media only screen and (max-width: 480px) {
        .content-article.entry-content>h2{
            line-height: 1.3;
        }
         h2.entry-title{
            font-size:39px!important;
            font-weight:900!important;
        }
    }
    h2.entry-title{
        font-size:42px;
        font-weight:900!important;
    }
   
</style>
<?php
/**
 * Template name: Single
 * @xstore-version 9.4.0
 */


defined( 'ABSPATH' ) || exit( 'Direct script access denied.' );

get_header();

global $post;
//$l = etheme_page_config();
$not_single_post = is_singular(array('staticblocks', 'etheme_slides', 'etheme_mega_menus', 'elementor_library'));
$sidebar = get_query_var( 'et_sidebar', 'left' );
if ( $not_single_post ) {
	$sidebar = 'without';
}
$post_template  = get_query_var('et_post-template', 'default');
$post_format 	= get_post_format();
$show_post_title = etheme_get_option( 'single_post_title', 1 );
$post_large = in_array( $post_template, array('large', 'large2') );

if ( $not_single_post ) :
    $is_slides = is_singular('etheme_slides');
	do_action( 'etheme_page_heading' );
    if ( $is_slides ) {
        etheme_slides_slide_wrapper($post, apply_filters('etheme_elementor_edit_mode', false));
    }
    else {
        the_content();
    }
else : ?>
	
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>
		
		<?php if ( $post_large ): ?>
            <div class="single-post-large-wrapper <?php if($post_template == 'large2') echo 'centered'; ?>">
                <div class="single-post-large">
                    <div class="post-heading">
                        <div class="container">
							<?php if($post_format == 'quote'): ?>
                                <div class="featured-quote">
                                    <div class="quote-content">
                                        <div class="quote-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
										<?php etheme_the_post_field( 'quote' ); ?>
                                    </div>
                                </div>
							<?php endif; ?>
							
							<?php etheme_primary_category(true); ?>
							
							<?php if ( $show_post_title ): ?>
                                <h1><?php the_title(); ?></h1>
								<?php etheme_byline(array('single'=>true)); ?>
							<?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
		<?php else: ?>
			<?php do_action( 'etheme_page_heading' ); ?>
		<?php endif ?>

        <div class="container sidebar-mobile-<?php echo esc_attr( get_query_var('et_sidebar-mobile', 'bottom') ); ?>">
        <div class="content-page sidebar-position-<?php echo esc_attr( $sidebar ); ?>">
            <div class="row hfeed">
				
				<?php
				$post_content 	= get_the_content();
				$gallery_filter = etheme_gallery_from_content( $post_content );
				$classes 		= array();
				$classes[] 		= 'blog-post';
				$classes[] 		= 'post-single';
				$classes[] 		= 'post-template-' . $post_template;
				?>
				
				<?php if ( $post_template != 'full-width'): ?>
                <div class="content col-md-9">
                    <article <?php post_class( $classes ); ?> id="post-<?php the_ID(); ?>" >
						<?php endif; ?>

                        <header class="post-header">
							<?php if ( etheme_get_option('blog_featured_image', 1) && !etheme_get_custom_field('post_featured')): ?>
								
								<?php etheme_post_thumb( array(
									'size' => 'full',
									'link' => false
								) ); ?>
								
								<?php if( $show_post_title && in_array($post_format, array('audio', 'video')) && in_array($post_template, array('large', 'large2')) ): ?>
                                    <div class="wp-picture">
										<?php the_post_thumbnail( 'full' ); ?>
                                    </div>
								<?php endif; ?>
							
							<?php endif ?>
							
							
							
							<?php if( $show_post_title && $post_format != 'quote' && !in_array($post_template, array('large', 'large2'))): ?>
                                <div class="post-heading">
                                    <h2 class="entry-title"><?php the_title(); ?></h2>
	                                <?php //etheme_byline(array('single'=>true)); ?>
                                </div>
							<?php endif; ?>
                        </header><!-- /header -->
						
						<?php if ( $post_template == 'full-width'): ?>
                        <div class="content col-md-12">
                            <article <?php post_class( $classes ); ?> id="post-<?php the_ID(); ?>" >
								<?php endif; ?>
								
								<?php if($post_format != 'gallery'): ?>
                                    <div class="content-article entry-content">
										<?php the_content(); ?>
                                    </div>
								<?php else: ?>
									<?php echo '<div class="content-article entry-content">' . $gallery_filter['filtered_content'] . '</div>'; ?>
								<?php endif; ?>

                                <div class="post-navigation"><?php wp_link_pages(); ?></div>
								
								<?php the_tags( '<div class="single-tags"><span>' . esc_html__( 'Tags: ', 'xstore' ) . '</span>', ', ', '</div>' ); ?>
								
								<?php if(etheme_get_option('post_share', 1) && class_exists('ETC\App\Controllers\Shortcodes\Share')): ?>
                                    <div class="share-post">
										<?php echo ETC\App\Controllers\Shortcodes\Share::share_shortcode( array( 'title' => esc_html__('Share Post', 'xstore') ) ) ; ?>
                                    </div>
								<?php endif; ?>

                                <div class="clear"></div>
								
								<?php if(etheme_get_option('posts_links', 1) && function_exists('etheme_project_links')): ?>
									<?php etheme_project_links(array()); ?>
								<?php endif; ?>
								
								<?php //Add author info here from parent theme's template ?>
								
								<?php if(etheme_get_option('post_related', 1)): ?>
                                    <div class="related-posts">
										<?php etheme_get_related_posts(); ?>
                                    </div>
								<?php endif; ?>

                            </article>
							
							<?php comments_template('', true); ?>

                        </div><!-- .content -->
						
						<?php get_sidebar(); ?>

                </div>
            </div>
        </div>
	
	<?php endwhile;
	else: ?>

        <div class="container sidebar-mobile-<?php echo esc_attr( get_query_var('et_sidebar-mobile', 'bottom') ); ?>">
            <div class="content-page sidebar-position-<?php echo esc_attr( $sidebar ); ?>">
                <div class="row hfeed">
                    <h2><?php esc_html_e('No posts were found!', 'xstore') ?></h2>
					<?php //get_sidebar(); ?>
                </div>
            </div>
        </div>
	
	<?php endif; ?>

<?php endif;

get_footer();