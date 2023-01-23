<article id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
	<a href="<?php the_permalink(); ?>" rel="bookmark" class="<?php if ( has_post_thumbnail() ) echo 'box-thumbnail-enabled'; ?>">
		
		<?php if ( has_post_thumbnail() ): ?>
		<div class="box-thumbnail">
			<?php the_post_thumbnail('microtype-small'); ?>
			<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-play"></i></span>'; ?>
			<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-volume-up"></i></span>'; ?>
			<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-star"></i></span>'; ?>
		</div>
		<?php endif; ?>
		
		<h2 class="box-title"><?php the_title(); ?></h2>
		<span class="box-date"><?php the_time( get_option('date_format') ); ?></span>
		
		<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
			<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
				<div class="box-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></div>
			<?php } ?>
		<?php endif; ?>
		
	</a>
	
	<?php if (get_theme_mod('excerpt-length','0') != '0'): ?>
		<div class="box-excerpt">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

</article>