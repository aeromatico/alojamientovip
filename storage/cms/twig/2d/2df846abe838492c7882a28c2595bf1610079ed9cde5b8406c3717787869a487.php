<?php

/* /home/ubuntu/workspace/themes/master/pages/hosting.htm */
class __TwigTemplate_49955ede4f174e7765683541290fad65d61b4bdcb7e95ad10e4f86bba9dcdc88 extends Twig_Template
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
        echo "<!-- Banner Area Start -->
        <div id=\"banner\">

            <div class=\"vc-parent\">
                <div class=\"vc-child\">
                        <div class=\"banner--content--page text-center\">
                            
                            <h2>Shared</h2>
                            <h3>Hosting</h3>
                                
                        </div>
             <span class=\"scroll-btn\">
                 <a href=\"#\">
                     <span class=\"mouse\">
                     <span>
                     </span>
                     </span>
                 </a>
             </span>                           
                </div>
            </div>
         
        </div>
        <!-- Banner Area End -->
        ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("packs/single"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "
        ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("packs/compare-single"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "        
        ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/addons"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "        
        ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("packs/multi"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
        
        ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("packs/compare-multi"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "        
        ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/faqs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "        
        
        ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/warranty"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/hosting.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  84 => 35,  81 => 34,  77 => 33,  70 => 31,  67 => 30,  63 => 29,  60 => 28,  56 => 27,  53 => 26,  49 => 25,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Banner Area Start -->
        <div id=\"banner\">

            <div class=\"vc-parent\">
                <div class=\"vc-child\">
                        <div class=\"banner--content--page text-center\">
                            
                            <h2>Shared</h2>
                            <h3>Hosting</h3>
                                
                        </div>
             <span class=\"scroll-btn\">
                 <a href=\"#\">
                     <span class=\"mouse\">
                     <span>
                     </span>
                     </span>
                 </a>
             </span>                           
                </div>
            </div>
         
        </div>
        <!-- Banner Area End -->
        {% partial 'packs/single' %}

        {% partial 'packs/compare-single' %}
        
        {% partial 'widgets/addons' %}
        
        {% partial 'packs/multi' %}  
        
        {% partial 'packs/compare-multi' %}
        
        {% partial 'widgets/faqs' %}        
        
        {% partial 'widgets/warranty' %}", "/home/ubuntu/workspace/themes/master/pages/hosting.htm", "");
    }
}
