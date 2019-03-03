<?php

/* /home/ubuntu/workspace/themes/master/partials/menus/footer.htm */
class __TwigTemplate_fe0b34b07b4d20cda897ba4a8b56300a546a9c6627a0d076584173fd8d2a1cab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Servicios</h2>
                            <ul>
                                <li><a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&domain=register\"><i class=\"fa fm fa-angle-double-right\"></i>Dominios</a></li>
                                <li><a href=\"#\"><i class=\"fa fm fa-angle-double-right\"></i>Hosting</a></li>
                                <li><a href=\"#\"><i class=\"fa fm fa-angle-double-right\"></i>Streaming</a></li>
                                <li><a href=\"#\"><i class=\"fa fm fa-angle-double-right\"></i>Desarrollo</a></li>
                            </ul>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/menus/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Servicios</h2>
                            <ul>
                                <li><a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&domain=register\"><i class=\"fa fm fa-angle-double-right\"></i>Dominios</a></li>
                                <li><a href=\"#\"><i class=\"fa fm fa-angle-double-right\"></i>Hosting</a></li>
                                <li><a href=\"#\"><i class=\"fa fm fa-angle-double-right\"></i>Streaming</a></li>
                                <li><a href=\"#\"><i class=\"fa fm fa-angle-double-right\"></i>Desarrollo</a></li>
                            </ul>", "/home/ubuntu/workspace/themes/master/partials/menus/footer.htm", "");
    }
}
