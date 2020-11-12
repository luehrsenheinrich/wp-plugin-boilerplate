/**
 * WordPress dependencies
 */
const { getCategories, setCategories } = wp.blocks;

/**
 * Internal dependencies
 */
import icons from './icons';

/**
 * Internal dependencies
 */

setCategories( [
	// Add a lhpbp block category
	{
		slug: 'jslhpbp',
		title: 'jslhpbp',
		icon: icons.lhpbp,
	},
	...getCategories().filter( ( { slug } ) => slug !== 'jslhpbp' ),
] );
