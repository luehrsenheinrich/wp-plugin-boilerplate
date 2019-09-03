/**
 * WordPress dependencies
 */
const {
	__,
} = wp.i18n;

/**
 * Internal dependencies
 */
import edit from './edit';
import icons from '../../blocks-helper/icons';
import metadata from './block.json';
import save from './save';

const { name } = metadata;

export { metadata, name };

export const settings = {
	title: __( 'Hello _lhpbp', '_lhpbp' ),
	description: __( 'Sample block of the wp-plugin-boilerplate by Luehrsen // Heinrich.', '_lhpbp' ),
	icon: icons.hello,
	keywords: [
		__( 'hello', '_lhpbp' ),
		__( '_lhpbp', '_lhpbp' ),
	],
	supports: {
		align: true,
		alignWide: false,
	},
	edit,
	save,
};
