<?php

/* /home/ubuntu/workspace/themes/master/partials/footer.htm */
class __TwigTemplate_fd49e5beed823d5b7a066d48bfecd3519338a8882cf0335c884dde4419c05adf extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/mailchimp"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "      
        <!-- Footer Area Start -->
        <footer id=\"footer\">
            <div class=\"container\">
                <!-- Footer Background Image Start -->
                <div class=\"footer--bg\" data-bg-img=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icono-llajwa-footer.png");
        echo "\"></div>
                <!-- Footer Background Image End -->
                <div class=\"row\">
                    <!-- Footer Widget Start -->
                    <div class=\"col-md-4 col-md-offset-2 footer--widget\">
                        <!-- Footer About Widget Start -->
                        <div class=\"footer--about\">
                            <h2>Nosotros</h2>
                            <p style=\"font-weight: lighter text-center\">
                                Somos un grupo de ingenieros, programadores, diseñadores, redactores y publicistas digitales de larga experiencia; desarrollamos tecnología a todos los días, por eso que creamos Alojamiento VIP, 
                                para compartir servicios básicos de tecnología que desplegamos, como los sistemas y plataformas que construimos.
                            </p>
                            <!--<a href=\"#\"><i class=\"fa fm fa-angle-double-right\"></i>lee más</a>-->
                        </div>
                        <!-- Footer About Widget End -->
                    </div>
                    <!-- Footer Widget End -->
                    <!-- Footer Widget Start -->
                    <div class=\"col-md-3 footer--widget\">
                        <!-- Footer Links Widget Start -->
                        <div class=\"footer--links\">
                            ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menus/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "                        </div>
                        <!-- Footer Links Widget End -->
                    </div>
                    <!-- Footer Widget End -->
                    <!-- Footer Widget Start -->
                    <div class=\"col-md-3 footer--widget\">
                        <!-- Footer Contact Widget Start -->
                        <div class=\"footer--contact\">
                            <h2>En contacto</h2>
                            <a href=\"https://m.me/alojamiento.vip\" target=\"_blank\" class=\"btn-block btn--primary btn--ripple\"><i class=\"fa fm fa-comment\"></i> Live chat</a>
                            <a href=\"https://api.whatsapp.com/send?phone=19783016646&text=Solicitud+de+Soporte+para+Alojamiento+VIP\"  target=\"_blank\" class=\"btn-block btn--primary btn--ripple\"><i class=\"fab fa-whatsapp\"></i> +1 (978) 301-6646</a>
                            <a href=\"mailto:soporte@alojamiento.vip\"  target=\"_blank\" class=\"btn-block btn--primary btn--ripple\"><i class=\"fa fm fa-envelope\"></i> soporte@alojamiento.vip</a>

                            <div class=\"footer--contact-social\">
                                <ul class=\"nav navbar-nav\">
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Contact Widget End -->
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
            <!-- Footer Copyright Start -->
            <div class=\"footer--copyright text-center\">
                <div class=\"container\">
                    <p>Hecho con <i class=\"fas fa-heart\"></i> por <a href=\"https://www.llajwa.club/?ref=Powered-by-Alojamiento.vip\" target=\"_blank\">Llajwa Team</a></p>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Area End -->
        <!-- Back To Top Button Start -->
        <div id=\"backToTop\">
            <a href=\"#top\" class=\"btn--primary btn--ripple\"><i class=\"fas fa-angle-up\"></i></a>
        </div>
        <!-- Back To Top Button Start -->";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 28,  57 => 27,  33 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'widgets/mailchimp' %}      
        <!-- Footer Area Start -->
        <footer id=\"footer\">
            <div class=\"container\">
                <!-- Footer Background Image Start -->
                <div class=\"footer--bg\" data-bg-img=\"{{'assets/img/icono-llajwa-footer.png' | theme }}\"></div>
                <!-- Footer Background Image End -->
                <div class=\"row\">
                    <!-- Footer Widget Start -->
                    <div class=\"col-md-4 col-md-offset-2 footer--widget\">
                        <!-- Footer About Widget Start -->
                        <div class=\"footer--about\">
                            <h2>Nosotros</h2>
                            <p style=\"font-weight: lighter text-center\">
                                Somos un grupo de ingenieros, programadores, diseñadores, redactores y publicistas digitales de larga experiencia; desarrollamos tecnología a todos los días, por eso que creamos Alojamiento VIP, 
                                para compartir servicios básicos de tecnología que desplegamos, como los sistemas y plataformas que construimos.
                            </p>
                            <!--<a href=\"#\"><i class=\"fa fm fa-angle-double-right\"></i>lee más</a>-->
                        </div>
                        <!-- Footer About Widget End -->
                    </div>
                    <!-- Footer Widget End -->
                    <!-- Footer Widget Start -->
                    <div class=\"col-md-3 footer--widget\">
                        <!-- Footer Links Widget Start -->
                        <div class=\"footer--links\">
                            {% partial 'menus/footer' %}
                        </div>
                        <!-- Footer Links Widget End -->
                    </div>
                    <!-- Footer Widget End -->
                    <!-- Footer Widget Start -->
                    <div class=\"col-md-3 footer--widget\">
                        <!-- Footer Contact Widget Start -->
                        <div class=\"footer--contact\">
                            <h2>En contacto</h2>
                            <a href=\"https://m.me/alojamiento.vip\" target=\"_blank\" class=\"btn-block btn--primary btn--ripple\"><i class=\"fa fm fa-comment\"></i> Live chat</a>
                            <a href=\"https://api.whatsapp.com/send?phone=19783016646&text=Solicitud+de+Soporte+para+Alojamiento+VIP\"  target=\"_blank\" class=\"btn-block btn--primary btn--ripple\"><i class=\"fab fa-whatsapp\"></i> +1 (978) 301-6646</a>
                            <a href=\"mailto:soporte@alojamiento.vip\"  target=\"_blank\" class=\"btn-block btn--primary btn--ripple\"><i class=\"fa fm fa-envelope\"></i> soporte@alojamiento.vip</a>

                            <div class=\"footer--contact-social\">
                                <ul class=\"nav navbar-nav\">
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Contact Widget End -->
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
            <!-- Footer Copyright Start -->
            <div class=\"footer--copyright text-center\">
                <div class=\"container\">
                    <p>Hecho con <i class=\"fas fa-heart\"></i> por <a href=\"https://www.llajwa.club/?ref=Powered-by-Alojamiento.vip\" target=\"_blank\">Llajwa Team</a></p>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Area End -->
        <!-- Back To Top Button Start -->
        <div id=\"backToTop\">
            <a href=\"#top\" class=\"btn--primary btn--ripple\"><i class=\"fas fa-angle-up\"></i></a>
        </div>
        <!-- Back To Top Button Start -->", "/home/ubuntu/workspace/themes/master/partials/footer.htm", "");
    }
}
