<?php
/**
 * Test file.
 *
 * @package lhpbp
 */

namespace WpMunich\lhpbp;

add_action(
	'admin_footer',
	function() {
		$arguments = array(
			'attributes' => array(
				'fill'  => '#26b8ff',
				'class' => 'slashes-svg',
				'id'    => 'slashes',
			),
		);

		echo wp_lhpbp()->get_svg( 'img/icons/slashes.svg', $arguments );
	}
);
