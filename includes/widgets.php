<?php

/**
 * Register sidebars and widgets
 */
function maera_widgets_init() {

	$class        = apply_filters( 'maera/widgets/class', '' );
	$before_title = apply_filters( 'maera/widgets/title/before', '<h3 class="widget-title">' );
	$after_title  = apply_filters( 'maera/widgets/title/after', '</h3>' );

	// Sidebars
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'maera' ),
		'id'            => 'sidebar_primary',
		'before_widget' => apply_filters( 'maera/widgets/before', '<section id="%1$s" class="' . $class . ' widget %2$s">' ),
		'after_widget'  => apply_filters( 'maera/widgets/after', '</section>' ),
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	) );

}
add_action( 'widgets_init', 'maera_widgets_init' );
