/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {useBlockProps} from '@wordpress/block-editor';
import {TextControl} from '@wordpress/components';

import {__} from '@wordpress/i18n';
import {useEntityProp} from '@wordpress/core-data';

/**
 * Event Meta block component:
 * Displays the link to the event
 *
 * @param props BlockEditProps < { metaKey: string } >	The block props
 * @param props.isSelected
 * @param props.context
 * @return {JSX.Element}								The link block
 */
export default function Edit({attributes, isSelected, context}) {
	// get the meta value
	const [meta, setMeta] = useEntityProp(
		'postType',
		context.postType,
		'meta'
	);

	function updateMetaValue(newValue) {
		setMeta({
			...meta,
			'barcode': newValue
		});
	}

	return (
		<div {...useBlockProps()}>
				<TextControl
					label={__('Ean-code')}
					value={meta.barcode}
					onChange={updateMetaValue}
				/>
		</div>
	);
}
