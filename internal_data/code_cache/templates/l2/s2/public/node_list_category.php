<?php
// FROM HASH: 448f16d95fe06baf292ea8d904618eb2
return array(
'macros' => array('depth1' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'node' => '!',
		'extras' => '!',
		'children' => '!',
		'childExtras' => '!',
		'depth' => '1',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="block block--category block--category' . $__templater->escape($__vars['node']['node_id']) . '">
		<span class="u-anchorTarget" id="' . $__templater->escape($__templater->method($__vars['node']['Data'], 'getCategoryAnchor', array())) . '"></span>
		<div class="block-container ' . ($__templater->func('is_toggled', array('_node-' . $__vars['node']['node_id'], ), false) ? ' is-active' : '') . ' ' . ($__templater->func('property', array('dt_collapsible_categories', ), false) ? ' is-active' : '') . '">
			<h2 class="block-header">
				
				';
	if (($__templater->func('property', array('dt_cat_description', ), false) == 'option3') AND $__vars['node']['description']) {
		$__finalCompiled .= '
					<a href="' . $__templater->func('link', array('categories', $__vars['node'], ), true) . '" data-xf-init="tooltip" title="' . $__templater->filter($__vars['node']['description'], array(array('raw', array()),), true) . '">' . $__templater->escape($__vars['node']['title']) . '</a>
				';
	} else {
		$__finalCompiled .= '
					<a href="' . $__templater->func('link', array('categories', $__vars['node'], ), true) . '">' . $__templater->escape($__vars['node']['title']) . '</a>
				';
	}
	$__finalCompiled .= '
				
				';
	if (($__templater->func('property', array('dt_cat_description', ), false) != 'option3') AND $__vars['node']['description']) {
		$__finalCompiled .= '<span class="block-desc">' . $__templater->filter($__vars['node']['description'], array(array('raw', array()),), true) . '</span>';
	}
	$__finalCompiled .= '
				
				';
	if ($__templater->func('property', array('dt_collapsible_categories', ), false)) {
		$__finalCompiled .= '
					<span id="collapse-' . $__templater->escape($__vars['node']['node_id']) . '" class="collapseTrigger collapseTrigger--block ' . ((!$__templater->func('is_toggled', array('_node-' . $__vars['node']['node_id'], ), false)) ? ' is-active' : '') . '" title="Toggle Visibilty" data-xf-click="toggle" data-xf-init="toggle-storage" data-storage-type="cookie" data-target=".block--category' . $__templater->escape($__vars['node']['node_id']) . ' .block-body, .block--category' . $__templater->escape($__vars['node']['node_id']) . ' .block-container" data-storage-key="_node-' . $__templater->escape($__vars['node']['node_id']) . '"></span>
				';
	}
	$__finalCompiled .= '
			</h2>
			
			';
	if ($__templater->func('property', array('dt_catstrips_minorheader', ), false)) {
		$__finalCompiled .= '
				<div class="block-subheader">
					<span class="block-subheader--main">' . 'Форум' . '</span>
					<span class="block-subheader--stats">' . 'Темы' . '</span>
					<span class="block-subheader--stats">' . 'Сообщения' . '</span>
					<span class="block-subheader--last">Last Post</span>
				</div>
			';
	}
	$__finalCompiled .= '
	
			<div class="block-body block-body--collapsible ' . (((!$__templater->func('is_toggled', array('_node-' . $__vars['node']['node_id'], ), false))) ? ' is-active' : '') . ' ' . (((!$__templater->func('property', array('dt_collapsible_categories', ), false))) ? ' is-active' : '') . '">
				' . $__templater->callMacro('forum_list', 'node_list', array(
		'children' => $__vars['children'],
		'extras' => $__vars['childExtras'],
		'depth' => ($__vars['depth'] + 1),
	), $__vars) . '
			</div>
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'depth2' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'node' => '!',
		'extras' => '!',
		'children' => '!',
		'childExtras' => '!',
		'depth' => '1',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="node node--id' . $__templater->escape($__vars['node']['node_id']) . ' node--depth' . $__templater->escape($__vars['depth']) . ' node--category ' . ($__vars['extras']['hasNew'] ? 'node--unread' : 'node--read') . '">
		<div class="node-body">
			';
	if ($__templater->func('property', array('dt_node_background', ), false) AND $__vars['node']['node_background']) {
		$__finalCompiled .= '
				<span class="node-img" aria-hidden="true"><i style="background-image: url(\'' . $__templater->escape($__vars['node']['node_background']) . '\')"></i></span>
			';
	} else {
		$__finalCompiled .= '
				<span class="node-icon" aria-hidden="true"><i></i></span>
			';
	}
	$__finalCompiled .= '
			<div class="node-main js-nodeMain">
				';
	$__vars['descriptionDisplay'] = $__templater->func('property', array('nodeListDescriptionDisplay', ), false);
	$__finalCompiled .= '
				<h3 class="node-title">
					<a href="' . $__templater->func('link', array('categories', $__vars['node'], ), true) . '" data-xf-init="' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'element-tooltip' : '') . '" data-shortcut="node-description">' . $__templater->escape($__vars['node']['title']) . '</a>
				</h3>
				';
	if (($__vars['descriptionDisplay'] != 'none') AND $__vars['node']['description']) {
		$__finalCompiled .= '
					<div class="node-description ' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'node-description--tooltip js-nodeDescTooltip' : '') . '">' . $__templater->filter($__vars['node']['description'], array(array('raw', array()),), true) . '</div>
				';
	}
	$__finalCompiled .= '

				<div class="node-meta">
					';
	if (!$__vars['extras']['privateInfo']) {
		$__finalCompiled .= '
						<div class="node-statsMeta">
							<dl class="pairs pairs--inline">
								<dt>' . 'Темы' . '</dt>
								<dd>' . $__templater->filter($__vars['extras']['discussion_count'], array(array('number_short', array(1, )),), true) . '</dd>
							</dl>
							<dl class="pairs pairs--inline">
								<dt>' . 'Сообщения' . '</dt>
								<dd>' . $__templater->filter($__vars['extras']['message_count'], array(array('number_short', array(1, )),), true) . '</dd>
							</dl>
						</div>
					';
	}
	$__finalCompiled .= '

					';
	if (($__vars['depth'] == 2) AND ($__templater->func('property', array('nodeListSubDisplay', ), false) == 'menu')) {
		$__finalCompiled .= '
						' . $__templater->callMacro('forum_list', 'sub_nodes_menu', array(
			'children' => $__vars['children'],
			'childExtras' => $__vars['childExtras'],
			'depth' => ($__vars['depth'] + 1),
		), $__vars) . '
					';
	}
	$__finalCompiled .= '
				</div>

				';
	if (($__vars['depth'] == 2) AND ($__templater->func('property', array('nodeListSubDisplay', ), false) == 'flat')) {
		$__finalCompiled .= '
					' . $__templater->callMacro('forum_list', 'sub_nodes_flat', array(
			'children' => $__vars['children'],
			'childExtras' => $__vars['childExtras'],
			'depth' => ($__vars['depth'] + 1),
		), $__vars) . '
				';
	}
	$__finalCompiled .= '
			</div>

			';
	if (!$__vars['extras']['privateInfo']) {
		$__finalCompiled .= '
				<div class="node-stats">
					';
		if ($__templater->func('property', array('dt_nodestat_simple', ), false) AND (!$__templater->func('property', array('dt_catstrips_minorheader', ), false))) {
			$__finalCompiled .= '
						<dl class="pairs pairs--rows">
							<dt><i class="fad fa-comment"></i></dt>
							<dd>' . $__templater->filter($__vars['extras']['discussion_count'], array(array('number_short', array(1, )),), true) . '</dd>
						</dl>
					';
		} else {
			$__finalCompiled .= '
						<dl class="pairs pairs--rows">
							<dt><i class="fad fa-comment"></i></dt>
							<dd>' . $__templater->filter($__vars['extras']['discussion_count'], array(array('number_short', array(1, )),), true) . '</dd>
						</dl>
						<dl class="pairs pairs--rows">
							<dt><i class="fad fa-comments"></i></dt>
							<dd>' . $__templater->filter($__vars['extras']['message_count'], array(array('number_short', array(1, )),), true) . '</dd>
						</dl>
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '

			<div class="node-extra">
				';
	if ($__vars['extras']['privateInfo']) {
		$__finalCompiled .= '
					<span class="node-extra-placeholder">' . 'Приватный' . '</span>
				';
	} else if ($__vars['extras']['LastThread']) {
		$__finalCompiled .= '
					<div class="node-extra-icon">
						';
		if ($__templater->method($__vars['xf']['visitor'], 'isIgnoring', array($__vars['extras']['last_post_user_id'], ))) {
			$__finalCompiled .= '
							' . $__templater->func('avatar', array(null, 'xs', false, array(
			))) . '
						';
		} else {
			$__finalCompiled .= '
							' . $__templater->func('avatar', array($__vars['extras']['LastPostUser'], 'xs', false, array(
				'defaultname' => $__vars['extras']['last_post_username'],
			))) . '
						';
		}
		$__finalCompiled .= '
					</div>
					<div class="node-extra-row">
						';
		if ($__templater->method($__vars['extras']['LastThread'], 'isUnread', array())) {
			$__finalCompiled .= '
							<a href="' . $__templater->func('link', array('threads/unread', $__vars['extras']['LastThread'], ), true) . '" class="node-extra-title" title="' . $__templater->escape($__vars['extras']['LastThread']['title']) . '">' . $__templater->func('prefix', array('thread', $__vars['extras']['LastThread'], ), true) . $__templater->escape($__vars['extras']['LastThread']['title']) . '</a>
						';
		} else {
			$__finalCompiled .= '
							<a href="' . $__templater->func('link', array('threads/post', $__vars['extras']['LastThread'], array('post_id' => $__vars['extras']['last_post_id'], ), ), true) . '" class="node-extra-title" title="' . $__templater->escape($__vars['extras']['LastThread']['title']) . '">' . $__templater->func('prefix', array('thread', $__vars['extras']['LastThread'], ), true) . $__templater->escape($__vars['extras']['LastThread']['title']) . '</a>
						';
		}
		$__finalCompiled .= '
					</div>
					<div class="node-extra-row">
						<ul class="listInline listInline--bullet">
							<li class="node-extra-date">' . $__templater->func('date_dynamic', array($__vars['extras']['last_post_date'], array(
		))) . '</li>
							';
		if ($__templater->method($__vars['xf']['visitor'], 'isIgnoring', array($__vars['extras']['last_post_user_id'], ))) {
			$__finalCompiled .= '
								<li class="node-extra-user">' . 'Игнорируемый пользователь' . '</li>
							';
		} else {
			$__finalCompiled .= '
								<li class="node-extra-user">' . $__templater->func('username_link', array($__vars['extras']['LastPostUser'], false, array(
				'defaultname' => $__vars['extras']['last_post_username'],
			))) . '</li>
							';
		}
		$__finalCompiled .= '
						</ul>
					</div>
				';
	} else {
		$__finalCompiled .= '
					<span class="node-extra-placeholder">' . 'Нет' . '</span>
				';
	}
	$__finalCompiled .= '
			</div>
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'depthN' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'node' => '!',
		'extras' => '!',
		'children' => '!',
		'childExtras' => '!',
		'depth' => '1',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<li>
		<a href="' . $__templater->func('link', array('categories', $__vars['node'], ), true) . '" class="subNodeLink subNodeLink--category ' . ($__vars['extras']['hasNew'] ? 'subNodeLink--unread' : '') . '">' . $__templater->escape($__vars['node']['title']) . '</a>
		' . $__templater->callMacro('forum_list', 'sub_node_list', array(
		'children' => $__vars['children'],
		'childExtras' => $__vars['childExtras'],
		'depth' => ($__vars['depth'] + 1),
	), $__vars) . '
	</li>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '

';
	return $__finalCompiled;
}
);