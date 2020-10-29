/**
 * Wordpress Imports
 */
const { registerBlockType } = wp.blocks;

registerBlockType(
	'example/hello-world',
	{
		title: 'Hello World',
		category: 'common',
		icon: 'smiley',
		edit: ( props ) => {

			const {
				className
			} = props;
			return (
				<div className={className}>
					<h1>Hello Editor!</h1>
				</div>
			);
		},
		save: () => null
	}
);
