<?php
include_once('vendor/autoload.php');
\PMVC\Load::plug();
$html = PMVC\plug('view_html');
$html->setThemeFolder('vendor/pmvc-theme/hello_html');
$html->setThemePath('hello');
$html->set('text','hello world, and all');
echo $html->process();

