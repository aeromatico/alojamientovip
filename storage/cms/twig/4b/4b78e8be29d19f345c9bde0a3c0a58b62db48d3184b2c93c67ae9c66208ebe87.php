<?php

/* /home/ubuntu/workspace/themes/master/partials/menus/main.htm */
class __TwigTemplate_dbf00537a34a0ae9330a75ad01ef671b547604caa9f8ccb6eeb6c03c06edcd1d extends Twig_Template
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
        echo "<div class=\"header--login-btn\">
                            <a href=\"https://dashboard.alojamiento.vip/clientarea.php\" class=\"btn--primary btn--ripple\">Clientes</a>
                        </div>
                        
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?rel=menu\"><i class=\"fas fa-home\"></i></a></li>
                            <li class=\"dropdown\">
                                <a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&domain=register\" data-toggle=\"dropdown\"> Dominios<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&domain=register\">Registrar</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&domain=transfer\">Transferir</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" style=\"cursor: pointer\">Hosting<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/hosting\">Shared Hosting</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/cart.php?gid=6\">Cloud Hosting</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/cart.php?gid=9\">VPS Hosting</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/audio-streaming\">Streaming</a></li>
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" style=\"cursor: pointer\"><i class=\"fas fa-headset\"></i> Soporte<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"https://m.me/378786882676005\" target=\"_blank\">Live Chat</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/submitticket.php\">Enviar ticket</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/contact.php\">Contacto</a></li>
                                </ul>
                            </li>
                        </ul>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/menus/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  44 => 17,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header--login-btn\">
                            <a href=\"https://dashboard.alojamiento.vip/clientarea.php\" class=\"btn--primary btn--ripple\">Clientes</a>
                        </div>
                        
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"{{app}}/?rel=menu\"><i class=\"fas fa-home\"></i></a></li>
                            <li class=\"dropdown\">
                                <a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&domain=register\" data-toggle=\"dropdown\"> Dominios<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&domain=register\">Registrar</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&domain=transfer\">Transferir</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" style=\"cursor: pointer\">Hosting<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{app}}/hosting\">Shared Hosting</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/cart.php?gid=6\">Cloud Hosting</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/cart.php?gid=9\">VPS Hosting</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{app}}/audio-streaming\">Streaming</a></li>
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" style=\"cursor: pointer\"><i class=\"fas fa-headset\"></i> Soporte<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"https://m.me/378786882676005\" target=\"_blank\">Live Chat</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/submitticket.php\">Enviar ticket</a></li>
                                    <li><a href=\"https://dashboard.alojamiento.vip/contact.php\">Contacto</a></li>
                                </ul>
                            </li>
                        </ul>", "/home/ubuntu/workspace/themes/master/partials/menus/main.htm", "");
    }
}
