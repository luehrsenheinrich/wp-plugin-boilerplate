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
	// Add a _lhpbp block category
	{
		slug: 'bblhpbp',
		title: 'bblhpbp',
		icon: icons._lhpbp,
	},
	...getCategories().filter( ( { slug } ) => slug !== 'bblhpbp' ),
] );
