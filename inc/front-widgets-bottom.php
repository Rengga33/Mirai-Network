<?php if ( is_home() && !is_paged() && get_theme_mod('frontpage-widgets-bottom') == 'on' ): ?>
	<div class="front-widgets front-widgets-bottom group">

		<div class="front-widget-inner">
			<?php dynamic_sidebar( 'frontpage-bottom' ); ?>
		</div>

	</div>
<?php endif; ?>