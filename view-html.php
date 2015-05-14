<?php
namespace PMVC\PlugIn\View;
${_INIT_CONFIG}[_CLASS] = 'PMVC\PlugIn\View\Html';

\PMVC\initPlugIn(array(
    'view'=>null
));

class Html extends VIEW
{

    function process()
    {
        $t = $this->initTemplateHelper($this->folder);
        $file = $this->getTplFile($this->path);
        include($file);
    }

}

?>
