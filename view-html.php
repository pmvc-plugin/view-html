<?php
${_INIT_CONFIG}[_CLASS] = '_PMVC_View_Html';

PMVC\initPlugIn(array(
    'view'=>null
    ,'static'=>null
));

class _PMVC_View_Html extends _PMVC_BASE_VIEW
{

    function process()
    {
        $t = $this->initTemplateHelper($this->folder);
        $file = $this->getTplFile($this->path);
        include($file);
    }

}

?>
