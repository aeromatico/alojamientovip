<?php

/* /home/ubuntu/workspace/themes/master/partials/widgets/domains.htm */
class __TwigTemplate_5e061b3ff8d717e61696dfe0d4fa1160f5c419267c2fa024d2726d30e0fc077a extends Twig_Template
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
        echo "<!-- Domain Search Area Start -->
        <div id=\"domainSearch\" class=\"bg--whitesmoke\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <!-- Section Title Start -->
                        <div class=\"section--title block\">
                            <h2>Busca tu <span>dominio</span></h2>
                        </div>
                        <!-- Section Title End -->
                        <!-- Domain Search Form Start -->
                        <div class=\"domain-search--form\">
                            <form action=\"https://dashboard.alojamiento.vip/domainchecker.php?systpl=HostWHMCS\" method=\"post\">
                                <div class=\"input--text\">
                                    <input type=\"text\" name=\"domain\" placeholder=\"Ingresa una idea\" class=\"form-control\">
                                    <span class=\"highlight\"></span>
                                </div>
                                
                                <div class=\"input--radio\">
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".com\" checked=\"checked\">
                                        <span>.com</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".net\">
                                        <span>.net</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".org\">
                                        <span>.org</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".info\">
                                        <span>.info</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".biz\">
                                        <span>.biz</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".us\">
                                        <span>.us</span>
                                    </label>
                                </div>
                                
                                <button type=\"submit\" class=\"btn--primary btn--ripple\">¡Verificar disponibilidad!</button>
                            </form>
                        </div>
                        <!-- Domain Search Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Domain Search Area End -->";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/widgets/domains.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Domain Search Area Start -->
        <div id=\"domainSearch\" class=\"bg--whitesmoke\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <!-- Section Title Start -->
                        <div class=\"section--title block\">
                            <h2>Busca tu <span>dominio</span></h2>
                        </div>
                        <!-- Section Title End -->
                        <!-- Domain Search Form Start -->
                        <div class=\"domain-search--form\">
                            <form action=\"https://dashboard.alojamiento.vip/domainchecker.php?systpl=HostWHMCS\" method=\"post\">
                                <div class=\"input--text\">
                                    <input type=\"text\" name=\"domain\" placeholder=\"Ingresa una idea\" class=\"form-control\">
                                    <span class=\"highlight\"></span>
                                </div>
                                
                                <div class=\"input--radio\">
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".com\" checked=\"checked\">
                                        <span>.com</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".net\">
                                        <span>.net</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".org\">
                                        <span>.org</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".info\">
                                        <span>.info</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".biz\">
                                        <span>.biz</span>
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"ext\" value=\".us\">
                                        <span>.us</span>
                                    </label>
                                </div>
                                
                                <button type=\"submit\" class=\"btn--primary btn--ripple\">¡Verificar disponibilidad!</button>
                            </form>
                        </div>
                        <!-- Domain Search Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Domain Search Area End -->", "/home/ubuntu/workspace/themes/master/partials/widgets/domains.htm", "");
    }
}
