<?php

/* /home/ubuntu/workspace/themes/master/partials/header.htm */
class __TwigTemplate_d2a6810dd4df4951bc66d44f9ccafaf961372b374035264c7b6cd7e45dd60db1 extends Twig_Template
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
        echo "<!-- Header Area Start -->
        <header id=\"header\">
            <!-- Header Navbar Start -->
            <nav class=\"header--navbar navbar navbar-fixed-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <!-- Navbar Toggle Button Start -->
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#headerNav\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <!-- Navbar Toggle Button End -->
                        <!-- Logo Start -->
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?rel=logo\" class=\"header--logo navbar-brand\">
                            <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" >
                        </a>
                        <!-- Logo End -->
                    </div>
                    <!-- Header Nav Start -->
                    <div id=\"headerNav\" class=\"navbar-collapse collapse\">
                        ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menus/main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "                    </div>
                    <!-- Header Nav End -->
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Area End -->";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 24,  53 => 23,  44 => 17,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header Area Start -->
        <header id=\"header\">
            <!-- Header Navbar Start -->
            <nav class=\"header--navbar navbar navbar-fixed-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <!-- Navbar Toggle Button Start -->
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#headerNav\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <!-- Navbar Toggle Button End -->
                        <!-- Logo Start -->
                        <a href=\"{{app}}/?rel=logo\" class=\"header--logo navbar-brand\">
                            <img src=\"{{'assets/img/logo.png' | theme }}\" >
                        </a>
                        <!-- Logo End -->
                    </div>
                    <!-- Header Nav Start -->
                    <div id=\"headerNav\" class=\"navbar-collapse collapse\">
                        {% partial 'menus/main' %}
                    </div>
                    <!-- Header Nav End -->
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Area End -->", "/home/ubuntu/workspace/themes/master/partials/header.htm", "");
    }
}
