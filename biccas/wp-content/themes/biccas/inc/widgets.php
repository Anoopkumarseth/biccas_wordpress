<?php
function biccas_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<p class="widget-title subheading heading-size-3">',
		'after_title'   => '</p>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer col 1', 'Biccas' ),
				'id'          => 'footer_1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'Biccas' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer col 2', 'Biccas' ),
				'id'          => 'footer_2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'Biccas' ),
			)
		)
	);
	// Footer #3.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer col 3', 'Biccas' ),
				'id'          => 'footer_3',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'Biccas' ),
			)
		)
	);
	// Footer #4.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer col 4', 'Biccas' ),
				'id'          => 'footer_4',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'Biccas' ),
			)
		)
	);
	// Footer Bottom End.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer Bottom End', 'Biccas' ),
				'id'          => 'footer_bottom_end',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'Biccas' ),
			)
		)
	);

}

add_action( 'widgets_init', 'biccas_sidebar_registration' );

