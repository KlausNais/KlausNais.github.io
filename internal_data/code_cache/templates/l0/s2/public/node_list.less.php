<?php
// FROM HASH: 7b5aad5f80b8301be1254a28282eee1c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@_nodeList-statsCellBreakpoint: 1000px;

.block.block--category
{
	.block-container
	{
		background: none;
		border: none;
	}
}

.node
{
	& + .node
	{
		margin-top: @xf-paddingLarge;
	}
}

.node-body
{
	display: table;
	table-layout: fixed;
	width: 100%;
	background: @xf-contentBg;
	border-radius: @xf-blockBorderRadius;
}

.node-icon
{
	display: table-cell;
	vertical-align: middle;
	text-align: center;
	width: 77px;
	padding: @xf-paddingLargest 0 @xf-paddingLargest @xf-paddingLargest;

	i
	{
		display: block;
		width: 62px;
		height: 62px;
		line-height: 62px;
		background: @xf-nodeIconReadColor;
		color: @xf-textColorEmphasized;
		font-size: 26px;
		border-radius: 15px;
		
		.node--unread &
		{
			background: @xf-nodeIconUnreadColor;
		}

		&:before
		{
			.m-faBase();
		}

		.node--category &:before
		{
			.m-faContent(@fa-var-comments);
		}
		
		&.fa-comments
		{
			.node--forum &:before
			{
				.m-faContent(@fa-var-' . $__templater->func('property', array('dt_node_icon', ), true) . ');
			}
		}

		.node--search &::before
		{
			.m-faContent(@fa-var-' . $__templater->func('property', array('dt_search_node_icon', ), true) . ');
		}

		.node--page &:before
		{
			.m-faContent(@fa-var-' . $__templater->func('property', array('dt_page_node_icon', ), true) . ');
		}

		.node--link &:before
		{
			.m-faContent(@fa-var-' . $__templater->func('property', array('dt_link_node_icon', ), true) . ');
		}
	}
}

.node-img
{
	display: table-cell;
	vertical-align: middle;
	width: 77px;
	padding: @xf-paddingLargest 0 @xf-paddingLargest @xf-paddingLargest;
	
	i
	{
		display: block;
		width: 62px;
		height: 62px;
		background: @xf-nodeIconReadColor;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		border-radius: 15px;
	}
}

.node-main
{
	display: table-cell;
	vertical-align: middle;
	padding: @xf-paddingLargest;
}

.node-stats
{
	display: table-cell;
	width: 120px;
	vertical-align: middle;
	color: @xf-textColorDimmed;
	text-align: center;
	padding: @xf-paddingLargest 0;

	> dl.pairs.pairs--rows
	{
		display: flex;
		align-items: center;
		width: 50%;
		float: left;
		margin: 0;
		padding: 0 @xf-paddingMedium/2;

		&:first-child
		{
			padding-left: 0;
		}

		&:last-child
		{
			padding-right: 0;
		}
		
		> dt
		{
			color: @xf-textColorDimmed;
			
			i
			{
				font-size: @xf-fontSizeNormal;
				padding-right: @xf-paddingMedium;
			}
		}
		
		> dd
		{
			font-weight: 500;
		}
	}

	&.node-stats--single
	{
		width: 100px;

		> dl.pairs.pairs--rows
		{
			width: 100%;
			float: none;
		}
	}

	&.node-stats--triple
	{
		width: 240px;

		> dl.pairs.pairs--rows
		{
			width: 33.333%;
		}
	}

	@media (max-width: @_nodeList-statsCellBreakpoint)
	{
		display: none;
	}
}

@_nodeExtra-avatarSize: 36px;

.node-extra
{
	display: table-cell;
	vertical-align: middle;
	width: 280px;
	padding: @xf-paddingLargest @xf-paddingLarge;

	font-size: @xf-fontSizeSmall;
}

.node-extra-row
{
	.m-overflowEllipsis();
	color: @xf-textColorMuted;
}

.node-extra-icon
{
	padding-right: @xf-paddingLarge;
	float: left;

	.avatar
	{
		.m-avatarSize(@_nodeExtra-avatarSize);
	}
}

.node-title
{
	margin: 0;
	padding: 0;
	font-size: 18px;
	font-weight: @xf-fontWeightNormal;

	.node--unread &
	{
		font-weight: @xf-fontWeightHeavy;
	}
}

.node-description
{
	font-size: @xf-fontSizeSmall;
	color: @xf-textColorDimmed;

	&.node-description--tooltip
	{
		.has-js:not(.has-touchevents) &
		{
			display: none;
		}
	}
}

.node-meta
{
	font-size: @xf-fontSizeSmall;
}

.node-statsMeta
{
	display: none;

	@media (max-width: @_nodeList-statsCellBreakpoint)
	{
		display: inline;
	}
}

.node-bonus
{
	font-size: @xf-fontSizeSmall;
	color: @xf-textColorMuted;
	text-align: right;
}

.node-subNodesFlat
{
	font-size: @xf-fontSizeSmall;
	margin-top: .3em;

	.node-subNodesLabel
	{
		display: none;
	}
}

.node-subNodeMenu
{
	display: inline;

	.menuTrigger
	{
		color: @xf-textColorMuted;
	}
}

@media (max-width: @xf-responsiveMedium)
{
	.node-main
	{
		display: block;
		width: auto;

		.node--link &,
		.node--page &
		{
			// #168882: we only display the title for these types
			// so keep these as table-cells for vertical alignment
			display: table-cell;
		}
	}

	.node-extra
	{
		display: block;
		width: auto;
		// this gives an equivalent of medium padding between main and extra, with main still having large
		margin-top: (@xf-paddingMedium - @xf-paddingLarge);
		padding-top: 0;
	}

	.node-extra-row
	{
		display: inline-block;
		vertical-align: top;
		max-width: 100%;
	}

	.node-extra-icon
	{
		display: none;
	}

	.node-description,
	.node-stats,
	.node-subNodesFlat
	{
		display: none;
	}
}

@media (max-width: @xf-responsiveNarrow)
{
	.node-subNodeMenu
	{
		display: none;
	}
}

.subNodeLink
{
	&:before,
	.subNodeLink-icon
	{
		display: inline-block;
		width: 1.28571429em;
		margin-right: .3em;
		text-decoration: none;
		text-align: center;

		color: @xf-nodeIconReadColor;
	}

	&:before
	{
		.m-faBase();
	}

	&:hover:before
	{
		&:before,
		.subNodeLink-icon
		{
			text-decoration: none;
		}
	}

	&.subNodeLink--unread
	{
		font-weight: @xf-fontWeightHeavy;

		&:before,
		.subNodeLink-icon
		{
			color: @xf-nodeIconUnreadColor;
		}
	}

	&.subNodeLink--category:before
	{
		.m-faContent(@fa-var-comments);
	}

	&.subNodeLink--page:before
	{
		.m-faContent(@fa-var-file-alt);
	}

	&.subNodeLink--link:before
	{
		.m-faContent(@fa-var-link);
	}

	&.subNodeLink--search::before
	{
		.m-faContent(@fa-var-search);
	}
}

.node-subNodeFlatList
{
	.m-listPlain();
	.m-clearFix();

	> li
	{
		display: inline-block;
		margin-right: 1em;

		&:last-child
		{
			margin-right: 0;
		}
	}

	ol,
	ul,
	.node-subNodes
	{
		display: none;
	}
}

.subNodeMenu
{
	.m-listPlain();

	ol,
	ul
	{
		.m-listPlain();
	}

	.subNodeLink
	{
		display: block;
		padding: @xf-blockPaddingV @xf-blockPaddingH;
		color: @xf-menuLinkRow--color;
		text-decoration: none;
		cursor: pointer;

		&:hover
		{
			.xf-menuLinkRowSelected();
		}
	}

	li li .subNodeLink { padding-left: 1.5em; }
	li li li .subNodeLink { padding-left: 3em; }
	li li li li .subNodeLink { padding-left: 4.5em; }
	li li li li li .subNodeLink { padding-left: 6em; }
	li li li li li li .subNodeLink { padding-left: 7.5em; }
}';
	return $__finalCompiled;
}
);