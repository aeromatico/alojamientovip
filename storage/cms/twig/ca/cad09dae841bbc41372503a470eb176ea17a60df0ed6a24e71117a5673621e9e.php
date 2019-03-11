<?php

/* /home/ubuntu/workspace/themes/master/pages/radio-live.htm */
class __TwigTemplate_2c7f0f6b39645a46a4de1177b89f5a2607d9d8fe9550f91c5565ab412a2e802e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<style>
.parent{
    position: absolute; 
    top: 0px; 
    left: 0px;
    right: 0px; 
    bottom: 0px;
}

iframe{
    position:absolute; 
    width: 100%;
    height: 100%;
    border: 0px;
}
</style>

<div class=\"parent\">
    <iframe src=\"http://player.srvstm.net/player-popup-responsivo/7018/1\"> </iframe>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/radio-live.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
.parent{
    position: absolute; 
    top: 0px; 
    left: 0px;
    right: 0px; 
    bottom: 0px;
}

iframe{
    position:absolute; 
    width: 100%;
    height: 100%;
    border: 0px;
}
</style>

<div class=\"parent\">
    <iframe src=\"http://player.srvstm.net/player-popup-responsivo/7018/1\"> </iframe>
</div>", "/home/ubuntu/workspace/themes/master/pages/radio-live.htm", "");
    }
}
