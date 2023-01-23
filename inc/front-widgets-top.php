<?php if ( is_home() && !is_paged() && get_theme_mod('frontpage-widgets-top') == 'on' ): ?>
	<div class="front-widgets front-widgets-top group">

		<div class="front-widget-inner">
			<?php dynamic_sidebar( 'frontpage-top' ); ?>
		</div>

	</div>
<?php endif; ?>