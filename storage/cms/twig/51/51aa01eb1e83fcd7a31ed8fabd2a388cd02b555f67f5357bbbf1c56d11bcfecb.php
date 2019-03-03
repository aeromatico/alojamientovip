<?php

/* /home/ubuntu/workspace/themes/master/pages/portada.htm */
class __TwigTemplate_f6031ed8a9745d4000594a0f28c5fe808ab02d0b5688225b84113e262ea8c13c extends Twig_Template
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
        $context["e"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["editor"] ?? null), "records", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null);
        // line 2
        echo "
        <!-- Promo Area Start -->
        <div id=\"banner\">
            <div class=\"banner--bg-animate\" data-bg-img=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/banner-slider-img/rocket.png");
        echo "\"></div>
            <div class=\"vc-parent\">
                <div class=\"vc-child\">
                    <!-- Promo Slider Start -->
                    <div class=\"banner--slider BannerSlider\">
                    
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "landing_promos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 12
            echo "                        <!-- Promo Item Start -->
                        <div class=\"banner--item\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <!-- Promo Content Start -->
                                        <div class=\"banner--content\">
                                            <h3>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "epigraph", array()), "html", null, true);
            echo "</h3>
                                            <h2>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", array()), "html", null, true);
            echo "</h2>
            
                                            <p>
                                                ";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["c"], "content", array());
            echo "
                                            </p>
            
                                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "button_link", array()), "html", null, true);
            echo "\" class=\"btn--primary btn--ripple\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "button_text", array()), "html", null, true);
            echo "</a>
                                        </div>
                                        <!-- Promo Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Promo Item End -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "         
                    </div>
                    <!-- Promo Slider End -->
                </div>
            </div>
        </div>
        <!-- Promo Area End -->
        
        ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "        
        ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/domains"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        
        ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("packs/single"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "      
        ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("packs/multi"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "        
        ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/addons"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "        
        ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/faqs-warranty"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/portada.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  127 => 51,  123 => 50,  120 => 49,  116 => 48,  113 => 47,  109 => 46,  106 => 45,  102 => 44,  99 => 43,  95 => 42,  85 => 34,  68 => 26,  62 => 23,  56 => 20,  52 => 19,  43 => 12,  39 => 11,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set e = editor.records[0] %}

        <!-- Promo Area Start -->
        <div id=\"banner\">
            <div class=\"banner--bg-animate\" data-bg-img=\"{{'assets/img/banner-slider-img/rocket.png' | theme }}\"></div>
            <div class=\"vc-parent\">
                <div class=\"vc-child\">
                    <!-- Promo Slider Start -->
                    <div class=\"banner--slider BannerSlider\">
                    
                        {% for c in e.landing_promos %}
                        <!-- Promo Item Start -->
                        <div class=\"banner--item\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <!-- Promo Content Start -->
                                        <div class=\"banner--content\">
                                            <h3>{{ c.epigraph }}</h3>
                                            <h2>{{ c.title }}</h2>
            
                                            <p>
                                                {{ c.content | raw }}
                                            </p>
            
                                            <a href=\"{{ c.button_link }}\" class=\"btn--primary btn--ripple\">{{ c.button_text }}</a>
                                        </div>
                                        <!-- Promo Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Promo Item End -->
                        {% endfor %}         
                    </div>
                    <!-- Promo Slider End -->
                </div>
            </div>
        </div>
        <!-- Promo Area End -->
        
        {% partial 'widgets/features' %}
        
        {% partial 'widgets/domains' %}
        
        {% partial 'packs/single' %}
      
        {% partial 'packs/multi' %}
        
        {% partial 'widgets/addons' %}
        
        {% partial 'widgets/faqs-warranty' %}", "/home/ubuntu/workspace/themes/master/pages/portada.htm", "");
    }
}
