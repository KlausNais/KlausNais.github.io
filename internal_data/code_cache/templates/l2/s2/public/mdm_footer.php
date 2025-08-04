<?php
// FROM HASH: a0d613a85ce275e8a24264503426d6d1
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="mdm-footer-item">
    <!-- Left Block -->
    <div class="mdm-footer-item-leftblock">
        ' . $__templater->func('property', array('mdm_footer_social', ), true) . '
        ';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
                    <p class="mdm-footer-item-copyright-info">
                    </p>
                    ';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
                <div class="mdm-footer-item-copyright">
                    ' . $__compilerTemp1 . '
                    ';
		if ($__templater->func('property', array('mdm_footer_email_enable', ), false)) {
			$__finalCompiled .= '
                    <p class="mdm-footer-item-copyright-email">
                        E-Mail: 
                        <a href="mailto:support@monser.ru">' . $__templater->func('property', array('mdm_footer_email_content', ), true) . '</a>
                    </p>
                    ';
		}
		$__finalCompiled .= '
                </div>
            ';
	}
	$__finalCompiled .= '
    </div>
    <!-- End Left Block -->
    
    <!-- Block Logo -->
    <div class="mdm-footer-item-logo">
        <a href="' . ((($__vars['xf']['options']['logoLink'] AND $__vars['xf']['homePageUrl'])) ? $__templater->escape($__vars['xf']['homePageUrl']) : $__templater->func('link', array('index', ), true)) . '">
            <img src="' . $__templater->func('property', array('mdm_footer_logo', ), true) . '">
        </a>
        <div class="mdm-footer-item-selectors">
            ';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeStyle', array())) {
		$__finalCompiled .= '
                <li><a href="' . $__templater->func('link', array('misc/style', ), true) . '" data-xf-click="overlay"
                    data-xf-init="tooltip" title="' . $__templater->filter('Выбор стиля', array(array('for_attr', array()),), true) . '" rel="nofollow">
                    ' . $__templater->fontAwesome('fa-paint-brush', array(
		)) . ' ' . $__templater->escape($__vars['xf']['style']['title']) . '
                </a></li>
            ';
	}
	$__finalCompiled .= '
        </div>
    </div>
    <!-- End Block Logo -->

    <!-- Right Block -->
    <div class="mdm-footer-item-rightblock">
        <div class="mdm-footer-item-payment">
			<a>&copy; 2025 SlideWorld. Все права защищены.</a>
        </div>
        ' . $__templater->func('property', array('mdm_footer_other_links', ), true) . '
    </div>
    <!-- End Right Block -->
</div>';
	return $__finalCompiled;
}
);