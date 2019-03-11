<?php

/* /home/ubuntu/workspace/themes/master/partials/widgets/faqs.htm */
class __TwigTemplate_96525ff6dd9afd12e75dd9fc4be69675d62d67a01469a376f6efbcc2ea10f14e extends Twig_Template
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
        echo "<!-- FAQ Area Start -->
        <div id=\"faq\">
            <div class=\"container\">
                <!-- Section Title Start -->
                <div class=\"section--title\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h2>Preguntas <span>Frecuentes</span></h2>
                        </div>
                        <div class=\"col-md-6\">
                        
                                
                            <p><i class=\"fas fa-hands-helping text-center\"></i> Respuestas simples y positivas a todas tus dudas. </p>
                            
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->
                <!-- FAQ Content Start -->
                <div class=\"faq--content\">
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"faqTab\">
                            <div class=\"panel-group accordion\" id=\"faqAccordion\" role=\"tablist\">                                      
                            
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 26
            echo "                                <!-- FAQ Item Start -->
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\">
                                        <a href=\"#faqTabQ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", []), "html", null, true);
            echo "\" class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#faqAccordion\">
                                            <h4 class=\"panel-title\" style=\"font-weight: 400; font-size: 16px; text-transform: none\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "question", []), "html", null, true);
            echo " <i class=\"fa fa-minus\"></i></h4>
                                        </a>
                                    </div>
                                    <div id=\"faqTabQ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", []), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                                        <div class=\"panel-body\">
                                            <p>";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["c"], "answer", []);
            echo "</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ Content End -->
            </div>
        </div>
        <!-- FAQ Area End -->";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/widgets/faqs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  73 => 35,  68 => 33,  62 => 30,  58 => 29,  53 => 26,  49 => 25,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- FAQ Area Start -->
        <div id=\"faq\">
            <div class=\"container\">
                <!-- Section Title Start -->
                <div class=\"section--title\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h2>Preguntas <span>Frecuentes</span></h2>
                        </div>
                        <div class=\"col-md-6\">
                        
                                
                            <p><i class=\"fas fa-hands-helping text-center\"></i> Respuestas simples y positivas a todas tus dudas. </p>
                            
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->
                <!-- FAQ Content Start -->
                <div class=\"faq--content\">
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"faqTab\">
                            <div class=\"panel-group accordion\" id=\"faqAccordion\" role=\"tablist\">                                      
                            
                                {% for c in faqs %}
                                <!-- FAQ Item Start -->
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\">
                                        <a href=\"#faqTabQ{{c.id}}\" class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#faqAccordion\">
                                            <h4 class=\"panel-title\" style=\"font-weight: 400; font-size: 16px; text-transform: none\">{{c.question}} <i class=\"fa fa-minus\"></i></h4>
                                        </a>
                                    </div>
                                    <div id=\"faqTabQ{{c.id}}\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                                        <div class=\"panel-body\">
                                            <p>{{c.answer | raw}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                                {% endfor %}
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ Content End -->
            </div>
        </div>
        <!-- FAQ Area End -->", "/home/ubuntu/workspace/themes/master/partials/widgets/faqs.htm", "");
    }
}
