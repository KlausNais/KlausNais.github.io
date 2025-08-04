<?php
// FROM HASH: 3b6ad8c677bd605f97eff5a328868403
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped($__templater->escape($__vars['option']['title']));
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Вам нужно будет перейти к <a href="https://console.developers.google.com/" target="_blank">консоли разработчика Google</a> и настроить новый проект с учётными данными OAuth 2.0 для веб-приложения. Если Вы используете G Suite, рекомендуется создать приложение с внутренним типом пользователя, чтобы избежать длительного процесса проверки. В любом из случаев Вам необходимо убедиться, что учётные данные поддерживают перенаправление на следующий URL-адрес' . $__vars['xf']['language']['label_separator'] . '
				<div><code>' . $__templater->escape($__vars['redirectUri']) . '</code></div>
			', array(
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'client_id',
		'value' => $__vars['option']['option_value']['oauth']['client_id'],
		'required' => 'required',
	), array(
		'label' => 'ID клиента (Client ID)',
		'explain' => 'Вы можете получить свой client ID в <a href="https://console.developers.google.com/" target="_blank">консоли разработчика Google</a>',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'client_secret',
		'required' => 'required',
	), array(
		'label' => 'Секретная фраза клиента (Client secret)',
		'explain' => 'Secret, который соответствует Вашему ID клиента Google выше.',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'type',
		'value' => ($__vars['option']['option_value']['type'] ?: 'pop3'),
	), array(array(
		'value' => 'pop3',
		'label' => 'POP3',
		'_type' => 'option',
	),
	array(
		'value' => 'imap',
		'label' => 'IMAP',
		'_type' => 'option',
	)), array(
		'label' => 'Тип соединения',
	)) . '

			' . $__templater->formInfoRow('
				' . 'Для продолжения Вы будете перенаправлены на сайт Google, чтобы подтвердить аккаунт, к которому Вы хотите подключиться.' . '
			', array(
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'submit' => 'Продолжить',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('options/email-handler-oauth', $__vars['option'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);