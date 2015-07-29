<?php
include_once('vendor/pmvc/pmvc/include_plug.php');
PMVC\setPlugInFolder('vendor/pmvc-plugin/');
$html = PMVC\plug('view-html');
$html->setThemeFolder('vendor/pmvc-theme/hello-theme');
$html->setThemePath('hello');
$html->set('text','hello world');
echo $html->process();

