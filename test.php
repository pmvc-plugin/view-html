<?php
PMVC\Load::plug();
PMVC\setPlugInFolder('../');
class HtmlViewTest extends PHPUnit_Framework_TestCase
{
    function testHtmlView()
    {
        $html = PMVC\plug('view_html');
        $html->folder='test/fake_theme';
        $html->path='fake';
        $html->set('text','hello world');
        ob_start();
        $html->process();
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertEquals('hello fake',trim($output));
    }
}
