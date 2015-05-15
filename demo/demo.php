<?php
include_once('vendor/pmvc/pmvc/include_plug.php');
PMVC\setPlugInFolder('vendor/pmvc-plugin/');
$html = PMVC\plug('view-html');
$html->folder='vendor/pmvc-theme/hello-theme';
$html->path='hello';
$html->set('text','hello world');
echo $html->process();

