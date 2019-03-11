<?php

/* /home/ubuntu/workspace/themes/master/partials/menus/footer.htm */
class __TwigTemplate_0c9fc8d256458d9fa42ca2d3e71d7f4cfab75bb8e3374310c0ecbd4103f23b0f extends Twig_Template
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
        echo "<h2>Servicios</h2>
                            <ul>
                                <li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=menu-inferior\"><i class=\"fa fm fa-angle-double-right\"></i>Portada</a></li>
                                <li><a href=\"https://dashboard.alojamiento.vip/clientarea.php\"><i class=\"fa fm fa-angle-double-right\"></i>Área de Clientes</a></li>
                                <li><a href=\"https://dashboard.alojamiento.vip/submitticket.php\"><i class=\"fa fm fa-angle-double-right\"></i>Soporte</a></li>
                                <li><a href=\"https://dashboard.alojamiento.vip/contact.php\"><i class=\"fa fm fa-angle-double-right\"></i>Contacto</a></li>
                            </ul>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/menus/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Servicios</h2>
                            <ul>
                                <li><a href=\"{{app}}/?ref=menu-inferior\"><i class=\"fa fm fa-angle-double-right\"></i>Portada</a></li>
                                <li><a href=\"https://dashboard.alojamiento.vip/clientarea.php\"><i class=\"fa fm fa-angle-double-right\"></i>Área de Clientes</a></li>
                                <li><a href=\"https://dashboard.alojamiento.vip/submitticket.php\"><i class=\"fa fm fa-angle-double-right\"></i>Soporte</a></li>
                                <li><a href=\"https://dashboard.alojamiento.vip/contact.php\"><i class=\"fa fm fa-angle-double-right\"></i>Contacto</a></li>
                            </ul>", "/home/ubuntu/workspace/themes/master/partials/menus/footer.htm", "");
    }
}
