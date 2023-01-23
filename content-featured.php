<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('box-featured-wrap'); ?>>

	<div class="box-featured">
		<a href="<?php the_permalink(); ?>" rel="bookmark" class="<?php if ( has_post_thumbnail() ) echo 'box-featured-thumbnail-enabled'; ?>">
			
			<?php if ( has_post_thumbnail() ): ?>
				<div class="box-featured-thumbnail">
					<?php the_post_thumbnail('microtype-small'); ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-star"></i></span>'; ?>
				</div>
			<?php endif; ?>
			
			<h2 class="box-featured-title"><?php the_title(); ?></h2>
			<span class="box-featured-date"><?php the_time( get_option('date_format') ); ?></span>
			
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
				<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
					<div class="box-featured-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></div>
				<?php } ?>
			<?php endif; ?>
			
		</a>
	</div>
	
</article>