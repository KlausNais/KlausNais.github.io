<?php
// FROM HASH: 6e9c65ec3b05480a81001c4828afdacf
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.m-transitionCubic(@speed: @xf-animationSpeed)
{
	display: none;
	opacity: 0;
	transform: translateY(20px) rotate3d(1,1,0,10deg);

	.m-transition(all, -xf-opacity; @speed);

	&.is-active
	{
		display: block;
		opacity: 1;
		transform: translateY(0);
		transform-origin: 0 0;
	}

	&.is-transitioning
	{
		display: block;
	}
}

a:link
{
	-webkit-tap-highlight-color: fade(@xf-paletteColor1, 30%);
}

::selection { background-color: fade(@xf-paletteColor1, 80%);color: #fff; }
::-moz-selection { background-color: fade(@xf-paletteColor1, 80%);color: #fff; }

.fr-popup .fr-color-set > span:hover
{
	transform: scale(1.2,1.2);
}

.link.link--external
{
	color: @xf-bbCodeBlockTitle--color;
	
	&:hover
	{
		color: @xf-paletteColor1;
	}
}

.editorSmilies .smilie
{
	opacity: 0.5;
	.m-transition(all, 0.2s);
	
	&:hover
	{
		opacity: 1.0;
		transform: scale(1.3);
	}
}

.p-breadcrumbs > li:last-child::after
{
	display: none;
}

.js-bookmarksMenuBody .contentRow-title
{
	font-size: @xf-fontSizeNormal;
}

.p-pageWrapper .p-breadcrumbs
{
	background: rgba(0, 0, 0, 0.1);
	padding: @xf-paddingLarge;
	border-radius: @xf-blockBorderRadius;
}

.p-breadcrumbs--container
{
	margin-bottom: @xf-elementSpacer;
	
	.p-breadcrumbs
	{
		flex-grow: 1;
		margin-bottom: 0;
	}
	
	&.p-breadcrumbs--container--side
	{
		@media (min-width: @xf-responsiveWide)
		{
			.p-breadcrumbs
			{
				margin-right: @xf-paddingMedium;
			}
		}
	}
}

.block.block--treeEntryChooser
{
	.block-container
	{
		margin: @xf-paddingLarge @xf-paddingLargest;
	}
}

.block.block--category
{
	.block-header
	{
		.xf-dt_category_header();
	}
}

.p-body-sidebar
{
	.xf-dt_sidebar_styling();
	
	.block-container
	{
		.xf-dt_widget_wrapper();
	}
	.block-minorHeader
	{
		.xf-dt_widget_header();
	}
}

.message-userBanner.userBanner
{
	border-radius: @xf-blockBorderRadius;
}

.p-footer-copyright
{
	.fa-heart
	{
		color: red;
	}
}

.select2-results__options li
{
	.xf-menuLinkRow();
}

.select2-container .select2-results__option.select2-results__option--highlighted
{
	.xf-menuLinkRow();
}

.block-container .alert.is-unread
{
	.xf-contentAltBase();
}

// ################ Templates Enhancemnts ################

.badge,
.badgeContainer:after
{
	min-width: 12px;
	height: 16px;
	line-height: 14px;
	text-align: center;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0 2px;
	margin: -2px 0;
}

@keyframes fa-bell-ring {
 0% {
  transform:rotate(-15deg)
 }
 2% {
  transform:rotate(15deg)
 }
 4% {
  transform:rotate(-18deg)
 }
 6% {
  transform:rotate(18deg)
 }
 8% {
  transform:rotate(-22deg)
 }
 10% {
  transform:rotate(22deg)
 }
 12% {
  transform:rotate(-18deg)
 }
 14% {
  transform:rotate(18deg)
 }
 16% {
  transform:rotate(-12deg)
 }
 18% {
  transform:rotate(12deg)
 }
 20%,
 100% {
  transform:rotate(0deg)
 }
}

.p-navgroup-link--alerts.badgeContainer--highlighted i::after
{
	animation: fa-bell-ring 5s ease 10s 6;
	transform-origin: 50% 0;
}

.blockLink
{
	&:hover
	{
		.xf-contentAltBase();
	}
}

.filterBar-menuTrigger
{
	color: inherit;
	
	&:hover
	{
		color: inherit;
	}
}

.label
{
	padding-left: 7px;
	padding-right: 7px;
	border-radius: 16px;

	&.label--primary
	{
		.m-labelVariation(@xf-paletteColor1, @xf-contentBg, @xf-paletteColor1);
	}
	
	&.label--accent
	{
		.m-labelVariation(@xf-paletteAccent1, @xf-contentBg, @xf-paletteAccent1);
	}
}

.tooltip-content
{
	.tooltip--preview &
	{
		.m-dropShadow(0, 0, 30px, 0, .12);
	}
	
	.tooltip--bookmark &,
	.tooltip--member &,
	.tooltip--share &
	{
		.m-dropShadow(0, 0, 30px, 0, .12);
	}
}

.tabs--standalone
{
	border: none;
	border-bottom: @xf-borderSize solid @xf-borderColor;
	
	.tabs-tab
	{
		padding: max(0px, @xf-blockPaddingV + @xf-borderSizeFeature) @xf-blockPaddingH;
	}
}

.block
{
	&.block--treeEntryChooser
	{
		.block-desc
		{
			color: fade(@xf-majorHeadingTextColor, 60%);
		}
	}
}

.block.block--category .block-header
{
	.block-desc
	{
		';
	if ($__templater->func('property', array('dt_category_header', ), false)) {
		$__finalCompiled .= '
			color: fade(@xf-dt_category_header--color, 70);
		';
	} else {
		$__finalCompiled .= '
			color: fade(@xf-majorHeadingTextColor, 60%);
		';
	}
	$__finalCompiled .= '
	}
}

.block-tabHeader
{
	.tabs-tab
	{
		background-color: rgba(50,138,241,.1);
		color: @xf-textColorEmphasized;
		padding: 8px @xf-blockPaddingH;
		border-bottom: none;
		border-radius: @xf-blockBorderRadius;
		margin: 0 @xf-paddingMedium;
		
		&:not(.is-readonly):hover
		{
			background-color: rgba(50,138,241,.15);
			color: @xf-paletteColor1;
		}
	}
}

.block-row
{
	&.block-row--clickable:hover
	{
		.xf-contentAltBase();
	}
}

.inputGroup
{
	&.inputGroup--joined
	{
		.input
		{
			&:first-child
			{
				border-top-left-radius: @xf-input--border-radius;
				border-bottom-left-radius: @xf-input--border-radius;
			}
			
			&:last-child
			{
				border-top-right-radius: @xf-input--border-radius;
				border-bottom-right-radius: @xf-input--border-radius;
			}
		}
		
		.inputGroup-text
		{
			&:first-child
			{
				border-top-left-radius: @xf-input--border-radius;
				border-bottom-left-radius: @xf-input--border-radius;
			}
			
			&:last-child
			{
				border-top-right-radius: @xf-input--border-radius;
				border-bottom-right-radius: @xf-input--border-radius;
			}
		}
	}
}

.inputNumber-button
{
	.inputGroup.inputGroup--joined &
	{
		&:hover,
		&:active,
		&:focus
		{
			.xf-contentHighlightBase();
		}
	}
}

.notices .notice
{
	&.notice--primary
	{
		background: rgb(28, 72, 104);
		background: linear-gradient(30deg, rgb(18, 114, 150), rgb(28, 72, 104));
		border: none;
		
		a
		{
			color: mix(@xf-textColorAttention, @xf-linkColor);
			
			&:hover
			{
				color: @xf-linkHoverColor;
			}
		}
	}
	
	&.notice--accent
	{
		border-color: @xf-borderColorAccentContent;
	}
	
	.notice-content
	{
		font-size: 14px;
		font-weight: 500;
		padding: @xf-paddingLargest;
	}
}

.bbWrapper .bbCodeBlock--unfurl
{
	.xf-contentAltBase();
}

.overlay-container
{
	transform: translateY(-10px);
	transition: cubic-bezier(0.4, 0, 0.2, 1) 0.26s transform, cubic-bezier(0.4, 0, 0.2, 1) 0.26s opacity;
	
	&.is-active
	{
		transform: translateY(0);
	}
}

.overlay
{
	border: none;
	.m-dropShadow(0, 5px, 15px, 0, .2);
}

.overlay-titleCloser
{
	color: @xf-overlayHeader--color;
	
	&:hover
	{
		color: inherit;
	}
}

.structItemContainer
{
	.structItem-cell
	{
		padding-top: @xf-paddingLargest;
		padding-bottom: @xf-paddingLargest;
		
		.structItem-title
		{
			font-size: @xf-fontSizeNormal;
		}
	}
	
	.structItem
	{
		background: @xf-contentBg;
		border-top: none;
		border-radius: @xf-blockBorderRadius;
		margin: @xf-paddingLarge 0;
	}
	
	.structItem.structItem--note
	{
		background: @xf-contentAltBg;
	}
}

.fr-box.bbWrapper.fr-basic
{
	border-color: @xf-borderColor;
	
	&.is-focused,
	&.is-preview,
	&.is-preview .fr-toolbar .fr-btn-grp.rte-tab--preview
	{
		border-color: @xf-paletteAccent1;
	}
}

.menu-tabHeader
{
	.tabs-tab
	{
		background-color: rgba(50,138,241,.1);
		color: @xf-textColorEmphasized;
		padding: @xf-blockPaddingV @_menu-paddingH;
		border-bottom: none;
		border-radius: @xf-blockBorderRadius;
		margin-left: @xf-paddingMedium;

		&:hover
		{
			background-color: rgba(50,138,241,.15);
			color: @xf-paletteColor1;
		}
	}
}

.menu .alert.is-unread
{
	.xf-contentAltBase();
}

.message-content .messageNotice
{
	&::before
	{
		color: fade(@xf-contentHighlightBase--color, 65%);
	}
	
	&.messageNotice--highlighted
	{
		a,
		&::before
		{
			color: fade(@xf-contentHighlightBase--color, 65%);
		}

	}
}

.p-body .pollResult.pollResult--showVoters:hover
{
	.xf-contentAltBase();
}

.m-pageNavElCore()
{
	background: @xf-contentBg;
	color: @xf-textColorEmphasized;
	font-weight: 500;
	border: none;
	border-radius: @xf-blockBorderRadius;
	
	&:hover,
	&:active
	{
		box-shadow: inset 0 0 0 1px @xf-paletteColor1;
	}
}

.pageNav-page
{
	&.pageNav-page--current
	{
		background: @xf-pageBg;
		box-shadow: inset 0 0 0 1px @xf-paletteColor1;
		border: none;
		
		&:hover,
		&:active
		{
			background: @xf-contentAltBg;
		}
	}
}

// ################ Theme Enhancements ################

h1, h2, h3, h4, h5, h6
{
	font-family: \'Mija\', sans-serif;
}

.button.button--link:hover, a.button.button--link:hover
{
	background: @xf-contentAltBg;
}

.avatar.avatar--s
{
	border-radius: 12px;
}

.avatar.avatar--xs
{
	border-radius: 10px;
}

.avatar.avatar--xxs
{
	border-radius: 8px;
}

.p-navSticky.is-sticky
{
	.p-nav
	{
		background: @xf-contentBg;
	}
}

.p-nav-list .p-navEl.is-selected .p-navEl-link,
.p-nav-list .p-navEl:not(.is-selected):not(.is-menuOpen):hover,
.p-nav-list .p-navEl:not(.is-selected):not(.is-menuOpen) .p-navEl-link:hover
{
	position: relative;
	
	&::before
	{
		content: \'\';
		position: absolute;
		top: 40px;
		left: 0;
		right: 0;
		width: calc(~\'100% - @{xf-publicNavPaddingH} * 2\');
		height: 4px;
		background: @xf-paletteColor1;
		border-radius: @xf-blockBorderRadius;
		margin: 0 auto;
	}
}

.p-sectionLinks-list .p-navEl
{
	border-radius: @xf-blockBorderRadius;
}

.menu-linkRow
{
	position: relative;
	
	&::after
	{
		background: linear-gradient(180deg,fade(@xf-contentAltBg, 50%) 45%,transparent 0,55%,fade(@xf-contentAltBg, 50%) 55%);
		border-radius: 4px;
		content: "";
		display: block;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		width: 3px;
	}
	
	&:hover
	{
		&::after
		{
			background: linear-gradient(180deg,@xf-menuLinkRowSelected--color 45%,transparent 0,55%,@xf-menuLinkRowSelected--color 55%);
		}
	}
}

.p-body-latest
{
	.block-container
	{
		background-color: rgba(50,138,241,.03);
		transition-duration: .3s;
		transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,-webkit-text-decoration-color;
		transition-timing-function: cubic-bezier(.4,0,.2,1);
		padding: @xf-paddingMedium @xf-paddingMedium @xf-paddingLarge;
		border: none;
		
		&:hover
		{
			background-color: rgba(50,138,241,.07);
		}
	}
	
	.block-minorHeader
	{
		font-weight: 700;
		text-align: left;
	}
	
	.block-body
	{
		display: flex;
		flex-wrap: wrap;
		align-items: stretch;
	}
	
	.block-row
	{
		flex: 0 0 33.333%;
		max-width: 33.333%;
		
		@media (max-width: @xf-responsiveMedium)
		{
			flex: 0 0 50%;
			max-width: 50%;
		}
		
		@media (max-width: @xf-responsiveNarrow)
		{
			flex: 0 0 100%;
			max-width: 100%;
		}
	}
	
	.contentRow
	{
		background-color: rgba(50,138,241,.03);
		padding: @xf-paddingLarge;
		border-radius: @xf-blockBorderRadius;
		transition-duration: .3s;
		transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,-webkit-text-decoration-color;
		transition-timing-function: cubic-bezier(.4,0,.2,1);
		
		&:hover
		{
			background-color: rgba(50,138,241,.07);
		}
	}
}

.p-body-latest
{
	';
	if ($__templater->func('property', array('dt_latest_posts_index', ), false)) {
		$__finalCompiled .= '
	display: none;
	
	.template-forum_list & {
		display: block;
	}
	';
	}
	$__finalCompiled .= '
}

.p-body-sidebar
{
	.block-row
	{
		background-color: rgba(50,138,241,.03);
		padding: @xf-paddingLarge @xf-paddingLargest;
		border-radius: @xf-blockBorderRadius;
		transition-duration: .3s;
		transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,-webkit-text-decoration-color;
		transition-timing-function: cubic-bezier(.4,0,.2,1);
		margin: @xf-paddingMedium 0;
		
		&:hover
		{
			background-color: rgba(50,138,241,.07);
		}
	}
	
	.block-footer
	{
		background-color: rgba(50,138,241,.1);
		border: none;
		border-radius: @xf-blockBorderRadius;
	}
}

.block-container--nodes
{
	background: none;
	border: none;
	
	.block-filterBar
	{
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		background: none;
		
		.block-outer-opposite
		{
			margin-right: auto;
		}
	}
	
	.filterBar-menuTrigger
	{
		background: @xf-contentBg;
		padding: @xf-paddingLarge;
		border-radius: 20rem;
		
		i
		{
			font-size: 85%;
			margin-right: @xf-paddingMedium;
		}
	}
}

.template-thread_view .p-body-header,
.template-thread_view_type_question .p-body-header
{
	position: relative;
	transition-duration: .3s;
	transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,-webkit-text-decoration-color;
	transition-timing-function: cubic-bezier(.4,0,.2,1);
	margin-left: 60px;
	
	@media (max-width: @xf-messageSingleColumnWidth)
	{
		margin-left: 0;
	}
	
	&:before
	{
		content: "";
		display: block;
		height: 60px;
		left: -36px;
		position: absolute;
		top: 50%;
		width: 25px;
		border-color: rgba(50,138,241,.15);
		border-style: solid;
		border-width: 3px;
		border-bottom: none;
		border-right: none;
		
		@media (max-width: @xf-messageSingleColumnWidth)
		{
			display: none;
		}
	}
	
	&:hover
	{
		background: @xf-contentAltBg;
	}
}

.message-avatar .message-avatar-wrapper
{
	.message-avatar-online
	{
		bottom: initial;
		top: -4px;
		left: 0;
		margin-left: 0;

		&:before
		{
			font-size: 9px;
			color: #80d3ab;
			border-color: @xf-contentBg;
			border-width: 3px;
		}
	}
}

.actionBar-action
{
	background: rgba(50, 138, 241, 0.1);
	color: rgb(186, 217, 252);
	font-weight: 500;
	padding: 5px 12px;
	border-radius: 12px;
	transition-duration: .15s;
	transition-property: all;
	transition-timing-function: cubic-bezier(.4,0,.2,1);
	
	&:hover
	{
		background-color: rgba(50,138,241,.15);
		text-decoration: none;
	}
}

.block.js-quickReply
{
	.block-container
	{
		border-style: dashed;
		border-color: rgba(50, 138, 241, 0.4);
		transition-duration: .15s;
		transition-property: all;
		transition-timing-function: cubic-bezier(.4,0,.2,1);
		
		&:hover
		{
			background: @xf-contentAltBg;
			border-color: rgba(50, 138, 241, 1);
		}
	}
}

.fr-box.bbWrapper.fr-basic
{
	border-radius: @xf-blockBorderRadius;
}

.fr-box.bbWrapper.fr-basic.is-focused,
.fr-box.bbWrapper.fr-basic.is-preview,
.fr-box.bbWrapper.fr-basic.is-preview .fr-toolbar .fr-btn-grp.rte-tab--preview
{
	border-color: @xf-borderColorHeavy;
}

.fr-basic.is-focused .fr-toolbar .fr-btn-grp
{
	border-color: @xf-borderColorHeavy;
	border-style: dashed;
}

.p-body-content .fr-box.fr-basic .fr-toolbar.fr-top
{
	background: mix(@xf-contentBg, @xf-contentAltBg);
	padding: @xf-paddingMedium;
	border-bottom: @xf-borderSize solid @xf-borderColor;
	border-top-left-radius: @xf-blockBorderRadius;
	border-top-right-radius: @xf-blockBorderRadius;
	
	.fr-btn-grp
	{
		background: @xf-contentBg;
		padding: 2px @xf-paddingMedium;
		border: @xf-borderSize solid @xf-borderColor;
		border-radius: @xf-blockBorderRadius;
		margin-right: @xf-paddingSmall;
	}
}

.p-footer
{
	.p-footer-copyright
	{
		text-align: right;
		margin-top: @xf-paddingLarge;
	}
}

.offCanvasMenu-content
{
	background: @xf-contentBg;
}';
	return $__finalCompiled;
}
);