<?php
namespace PMVC\PlugIn\view;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\view_html';

class view_html extends ViewEngine 
{

    private function _load($__f)
    {
        include($__f);
        $this->flush();
    }

    public function process()
    {
        $t = $this->initTemplateHelper();
        $file = $this->getTplFile($this['themePath']);
        $this->_load($file);
    }

}

?>
