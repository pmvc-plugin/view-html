<?php
PMVC\Load::plug();
PMVC\addPlugInFolders(['../']);
class HtmlViewTest extends PHPUnit_Framework_TestCase
{
    function testHtmlView()
    {
        $html = PMVC\plug('view_html');
        $html->setThemeFolder('test/fake_theme');
        $html->setThemePath('fake');
        $hello = 'hello world';
        $html->set('text',$hello);
        ob_start();
        $html->process();
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertEquals($hello,trim($output));
    }
}
