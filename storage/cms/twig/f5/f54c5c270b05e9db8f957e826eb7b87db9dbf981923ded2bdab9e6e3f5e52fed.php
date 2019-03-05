<?php

/* /home/ubuntu/workspace/themes/master/partials/widgets/mailchimp.htm */
class __TwigTemplate_a79729ba6f2a8d3442da151498bae82b46c7f7bb1d686fa1d8a2a25c09db3338 extends Twig_Template
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
        echo "<!-- Subscribe Area Start -->
        <div id=\"subscribe\">
            <div class=\"subscribe--sticky\">
                <div class=\"container\">
                    <!-- Subscribe Content Start -->
                    <div class=\"subscribe--content\" data-bg-img=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-newsletter.png");
        echo "\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <!-- Section Title Start -->
                                <div class=\"section--title block\">
                                    <h2>Promociones<span>exclusivas</span></h2>
                                </div>
                                <!-- Section Title End -->
                            </div>
                            <div class=\"col-md-8\">
                                <!-- Subscribe Form Start -->
                                <div class=\"subscribe--form\">
                                    <form action=\"https://5megas.us14.list-manage.com/subscribe/post?u=d1b3449cedbb183c24cad61ce&amp;id=1a76236498\" method=\"post\" name=\"mc-embedded-subscribe-form\" target=\"_blank\" novalidate=\"novalidate\">
                                        <div class=\"input--text\">
                                            <input type=\"text\" value=\"\" name=\"EMAIL\" placeholder=\"Ingresa tu correo electrónico\">
                                            <span class=\"highlight\"></span>
                                        </div>
                                        <button type=\"submit\" class=\"btn--primary btn--ripple\">Subscribir</button>
                                    </form>
                                </div>
                                <!-- Subscribe Form End -->
                            </div>
                        </div>
                    </div>
                    <!-- Subscribe Content End -->
                </div>
            </div>
        </div>
        <!-- Subscribe Area End -->";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/widgets/mailchimp.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Subscribe Area Start -->
        <div id=\"subscribe\">
            <div class=\"subscribe--sticky\">
                <div class=\"container\">
                    <!-- Subscribe Content Start -->
                    <div class=\"subscribe--content\" data-bg-img=\"{{'assets/img/bg-newsletter.png' | theme }}\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <!-- Section Title Start -->
                                <div class=\"section--title block\">
                                    <h2>Promociones<span>exclusivas</span></h2>
                                </div>
                                <!-- Section Title End -->
                            </div>
                            <div class=\"col-md-8\">
                                <!-- Subscribe Form Start -->
                                <div class=\"subscribe--form\">
                                    <form action=\"https://5megas.us14.list-manage.com/subscribe/post?u=d1b3449cedbb183c24cad61ce&amp;id=1a76236498\" method=\"post\" name=\"mc-embedded-subscribe-form\" target=\"_blank\" novalidate=\"novalidate\">
                                        <div class=\"input--text\">
                                            <input type=\"text\" value=\"\" name=\"EMAIL\" placeholder=\"Ingresa tu correo electrónico\">
                                            <span class=\"highlight\"></span>
                                        </div>
                                        <button type=\"submit\" class=\"btn--primary btn--ripple\">Subscribir</button>
                                    </form>
                                </div>
                                <!-- Subscribe Form End -->
                            </div>
                        </div>
                    </div>
                    <!-- Subscribe Content End -->
                </div>
            </div>
        </div>
        <!-- Subscribe Area End -->", "/home/ubuntu/workspace/themes/master/partials/widgets/mailchimp.htm", "");
    }
}
