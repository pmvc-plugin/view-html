<?php
namespace PMVC\PlugIn\view;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\view_html';

class view_html extends ViewEngine 
{

    function process()
    {
        $t = $this->initTemplateHelper($this['themeDir']);
        $file = $this->getTplFile($this->get('themePath'));
        include($file);
    }

}

?>
