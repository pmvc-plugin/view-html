<?php
namespace PMVC\PlugIn\view;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\view_html';

class view_html extends ViewEngine 
{

    function process()
    {
        $t = $this->initTemplateHelper();
        $file = $this->getTplFile($this['themePath']);
        include($file);
    }

}

?>
