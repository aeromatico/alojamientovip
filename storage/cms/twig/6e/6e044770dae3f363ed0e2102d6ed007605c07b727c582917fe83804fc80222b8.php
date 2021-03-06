<?php

/* /home/ubuntu/workspace/themes/master/pages/streaming.htm */
class __TwigTemplate_3b62871d6519b194b8a2c04db692f9cf4691ff71485f8827532de7b81e8fdd4d extends Twig_Template
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

                <h2>Audio</h2>
                <h3>Streaming</h3>

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

<div class=\"container\">
    <div class=\"row aeroPadding50\">
        <div class=\"col-md-12 text-center\">

            <div class=\"row\">

                <div class=\"col-md-8 text-center\">

                    <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/banner-audio-streaming.png");
        echo "\" style=\"max-width: 90%; height: auto\">

                </div>

                <div class=\"col-md-4 aeroPadding20\">
                    <style>
                        audio::-webkit-media-controls-timeline {
                            display: none;
                        }
                    </style>
                    <audio autoplay controls=\"controls\" src=\"http://stm1.srvstm.net:7018/;\"></audio>

                    <br> Reproductor html5

                    <br>
                    <br>

                    <script>
                        function abrir_player_popup() {
                            window.open(\"http://alojamiento-aeromatico.c9users.io/radio-live\", \"\", \"width=500,height=290,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,resizable=NO\");
                        }
                    </script>
                    <a href=\"javascript:abrir_player_popup();\"><img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/play-radio.svg");
        echo "\" width=\"60px\" height=\"auto\" title=\"Probar radio en vivo\" /></a>

                    <br> Popup responsivo

                    <br>
                    <br>

                    <a href=\"http://player.srvstm.net/player/12264/winamp.pls\"><img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icono-winamp.svg");
        echo "\" width=\"48px\" height=\"auto\" title=\"Probar en Winamp\" /></a>
                    <a href=\"http://player.srvstm.net/player/12264/vlc.m3u\"><img src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icono-vlc.svg");
        echo "\" width=\"48px\" height=\"auto\" title=\"Probar en VLC\" style=\"margin-right: 5px\" /></a>
                    <a href=\"http://player.srvstm.net/player/12264/quicktime.qtl\"><img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icono-quicktime.svg");
        echo "\" width=\"48px\" height=\"auto\" title=\"Probar en Quicktime\" /></a>

                    <br> Reproductor nativos

                    <br>
                    <br>

                    <a href='https://play.google.com/store/apps/details?id=com.shoutcast.stm.llajwavirtualradio&rdid=com.shoutcast.stm.llajwavirtualradio&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target='_blank'><img alt='Disponible en Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/es_badge_web_generic.png' style=\"width: 200px; height: auto\" /></a>

                </div>

            </div>
        </div>
    </div>
</div>

<div class=\"container aeroPadding50\">

    <h2 class=\"text-center\">STREAMING A LO GRANDE</h2>

    <hr class=\"hr\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/031-cloud.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Fácil, versátil y en la nube</h3>
                    <p>Realiza tu emisión programada en la nube sin depender de computadoras y equipos adicionales, puede funcionar 24/7 e incluso puedes programar tus spots y jingles.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/022-live.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Emisión en vivo</h3>
                    <p>¿Tienes una radioemisora o quieres emitir tu radio virtual en vivo? Nuestro servicio se emite a través de Shoutcast, usa una computadora o dispositivo móvil.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/018-duplicate.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Multidispositivo</h3>
                    <p>Logra que todos te escuchen a través de la web, la web móvil, tu propia aplicación en Google Play, TuneIn, reproductores móviles nativos y de escritorio.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/046-woofer.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Pocos datos, alta fidelidad</h3>
                    <p>Nestro codificador avanzado HE-AAC Plus v2 se encargará de comprimir la transferencia de datos para que sea ligera mientras viaja y se distribuye por el mundo.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/035-storage.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Transferencias simples</h3>
                    <p>Manten fresca tu estación virtual, lleva tus archivos a la nube a través de FTP, graba desde tu micrófono, importa desde SoundCloud y Youtube con pocos clics.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/004-edition.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Control total</h3>
                    <p>Gestiona todo desde un eficiente e intuitivo panel de control completamente equipado, ahora también puedes administrar desde dispositivos móviles. </p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row aeroPadding50\">

        <h2 class=\"text-center\">TU MEJOR OPCIÓN</h2>

        <hr class=\"hr\">
        <div class=\"col-md-6 aeroPadding20\">
            <h3>¿Qué incluye?</h3>

            <br>

            <b>Full stack</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> Más de 10 modernos reproductores para la web.
            <br>
            <i class=\"fas fa-check\"></i> Reproductores para navegadores móviles.
            <br>
            <i class=\"fas fa-check\"></i> Reproducción para reproductores móviles nativos.
            <br>
            <i class=\"fas fa-check\"></i> Moderno sitio web administrable.
            <br>
            <i class=\"fas fa-check\"></i> Generador aplicación Android/Google Play.
            <br>
            <i class=\"fas fa-check\"></i> Compatible con TuneIn.
            <br>
            <i class=\"fas fa-check\"></i> Archivos de reproducción para Winamp,
            <br>Windows Media Player, VLC media player, Quicktime, etc.
            <br>

            <br>

            <b>AutoDJ (Administra tu radio en la nube)</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> 2Gb de almacenamiento.
            <br>
            <i class=\"fas fa-check\"></i> Automatización de programación.
            <br>
            <i class=\"fas fa-check\"></i> Manejo de listas de reproducción.
            <br>
            <i class=\"fas fa-check\"></i> Programación de spots y jingles.
            <br>
            <i class=\"fas fa-check\"></i> Gestión de DJs.
            <br>
            <i class=\"fas fa-check\"></i> Y mucho más.
            <br>

            <br>

            <b>Live streaming (emisión en vivo)</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> Shoutcast.
            <br>
            <i class=\"fas fa-check\"></i> Relay desde otras radios en línea.
            <br>
            <i class=\"fas fa-check\"></i> Transmisiones multipunto.
            <br>
            <i class=\"fas fa-check\"></i> Soporte para Wowza/Rtmp.
            <br>
            <i class=\"fas fa-check\"></i> Hasta 1.000 oyentes en simultáneo.
            <br>

            <br>

            <b>Importación</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> Importación de MP3 desde otros sitios web.
            <br>
            <i class=\"fas fa-check\"></i> Integración con Soundcloud.
            <br>
            <i class=\"fas fa-check\"></i> Integración con Youtube.
            <br>
            <i class=\"fas fa-check\"></i> Grabadora de voz.
            <br>

            <br>

            <b>Otros</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> Estadísticas de emisión.
            <br>
            <i class=\"fas fa-check\"></i> Firewall.
            <br>
            <i class=\"fas fa-check\"></i> API Json/XML
            <br>

            <div class=\"pricing--footer\">
                <a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&pid=7\" class=\"btn--primary btn--ripple\">Comprar</a>
            </div>

        </div>
        <div class=\"col-md-6 aeroPadding20\">

            <h3>¿Necesitas una web profesional para tu radio?</h3>
            <br> Agregar tan solo US\$ 40/año y recibe:
            <br>
            <br>

            <b>Servicios incluidos:</b>
            <br>
            <br>

            <i class=\"fas fa-check\"></i> Registro de dominio (.com, .net, .org).
            <br>
            <i class=\"fas fa-check\"></i> Alojamiento web ilimitado.
            <br>
            <i class=\"fas fa-check\"></i> Integración del servicio de radio por Internet.
            <br>
            <i class=\"fas fa-check\"></i> Hermoso portal desarrollado sobre Laravel Framework.
            <br>
            <i class=\"fas fa-check\"></i> Panel de gestión de contenidos y personalización.
            <br>

            <br>

            <b>Páginas disponibles:</b>
            <br>
            <br>

            <i class=\"fas fa-check\"></i> Portada (tres versiones).
            <br>
            <i class=\"fas fa-check\"></i> Noticias/artículos ilimitadas.
            <br>
            <i class=\"fas fa-check\"></i> Nosotros.
            <br>
            <i class=\"fas fa-check\"></i> Staff.
            <br>
            <i class=\"fas fa-check\"></i> Programación (información dinámica en tiempo real).
            <br>
            <i class=\"fas fa-check\"></i> Área de contacto.
            <br>

            <div class=\"pricing--footer\">
                <a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&pid=7\" class=\"btn--primary btn--ripple\">Comprar</a>
            </div>
            <br>
            <i><small><i class=\"fas fa-shopping-bag\"></i> Oferta disponible si contratas el servicio de Audio Streaming.</small>
            </i>

        </div>
    </div>
</div>

";
        // line 284
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/faqs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 285
        echo "
";
        // line 286
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/warranty"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/streaming.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 286,  327 => 285,  323 => 284,  101 => 65,  97 => 64,  93 => 63,  83 => 56,  58 => 34,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Banner Area Start -->
<div id=\"banner\">

    <div class=\"vc-parent\">
        <div class=\"vc-child\">
            <div class=\"banner--content--page text-center\">

                <h2>Audio</h2>
                <h3>Streaming</h3>

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

<div class=\"container\">
    <div class=\"row aeroPadding50\">
        <div class=\"col-md-12 text-center\">

            <div class=\"row\">

                <div class=\"col-md-8 text-center\">

                    <img src=\"{{'assets/img/banner-audio-streaming.png' | theme }}\" style=\"max-width: 90%; height: auto\">

                </div>

                <div class=\"col-md-4 aeroPadding20\">
                    <style>
                        audio::-webkit-media-controls-timeline {
                            display: none;
                        }
                    </style>
                    <audio autoplay controls=\"controls\" src=\"http://stm1.srvstm.net:7018/;\"></audio>

                    <br> Reproductor html5

                    <br>
                    <br>

                    <script>
                        function abrir_player_popup() {
                            window.open(\"http://alojamiento-aeromatico.c9users.io/radio-live\", \"\", \"width=500,height=290,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,resizable=NO\");
                        }
                    </script>
                    <a href=\"javascript:abrir_player_popup();\"><img src=\"{{'assets/img/play-radio.svg' | theme }}\" width=\"60px\" height=\"auto\" title=\"Probar radio en vivo\" /></a>

                    <br> Popup responsivo

                    <br>
                    <br>

                    <a href=\"http://player.srvstm.net/player/12264/winamp.pls\"><img src=\"{{'assets/img/icono-winamp.svg' | theme }}\" width=\"48px\" height=\"auto\" title=\"Probar en Winamp\" /></a>
                    <a href=\"http://player.srvstm.net/player/12264/vlc.m3u\"><img src=\"{{'assets/img/icono-vlc.svg' | theme }}\" width=\"48px\" height=\"auto\" title=\"Probar en VLC\" style=\"margin-right: 5px\" /></a>
                    <a href=\"http://player.srvstm.net/player/12264/quicktime.qtl\"><img src=\"{{'assets/img/icono-quicktime.svg' | theme }}\" width=\"48px\" height=\"auto\" title=\"Probar en Quicktime\" /></a>

                    <br> Reproductor nativos

                    <br>
                    <br>

                    <a href='https://play.google.com/store/apps/details?id=com.shoutcast.stm.llajwavirtualradio&rdid=com.shoutcast.stm.llajwavirtualradio&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target='_blank'><img alt='Disponible en Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/es_badge_web_generic.png' style=\"width: 200px; height: auto\" /></a>

                </div>

            </div>
        </div>
    </div>
</div>

<div class=\"container aeroPadding50\">

    <h2 class=\"text-center\">STREAMING A LO GRANDE</h2>

    <hr class=\"hr\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/031-cloud.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Fácil, versátil y en la nube</h3>
                    <p>Realiza tu emisión programada en la nube sin depender de computadoras y equipos adicionales, puede funcionar 24/7 e incluso puedes programar tus spots y jingles.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/022-live.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Emisión en vivo</h3>
                    <p>¿Tienes una radioemisora o quieres emitir tu radio virtual en vivo? Nuestro servicio se emite a través de Shoutcast, usa una computadora o dispositivo móvil.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/018-duplicate.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Multidispositivo</h3>
                    <p>Logra que todos te escuchen a través de la web, la web móvil, tu propia aplicación en Google Play, TuneIn, reproductores móviles nativos y de escritorio.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/046-woofer.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Pocos datos, alta fidelidad</h3>
                    <p>Nestro codificador avanzado HE-AAC Plus v2 se encargará de comprimir la transferencia de datos para que sea ligera mientras viaja y se distribuye por el mundo.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/035-storage.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Transferencias simples</h3>
                    <p>Manten fresca tu estación virtual, lleva tus archivos a la nube a través de FTP, graba desde tu micrófono, importa desde SoundCloud y Youtube con pocos clics.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 aeroPadding20\">
                <div class=\"box text-center\"><img src=\"http://marketplace.llajwa.club/storage/app/media/iconos/coleccion-6/004-edition.png\" style=\"width: 150px; height; auto\"></i>
                    <h3>Control total</h3>
                    <p>Gestiona todo desde un eficiente e intuitivo panel de control completamente equipado, ahora también puedes administrar desde dispositivos móviles. </p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row aeroPadding50\">

        <h2 class=\"text-center\">TU MEJOR OPCIÓN</h2>

        <hr class=\"hr\">
        <div class=\"col-md-6 aeroPadding20\">
            <h3>¿Qué incluye?</h3>

            <br>

            <b>Full stack</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> Más de 10 modernos reproductores para la web.
            <br>
            <i class=\"fas fa-check\"></i> Reproductores para navegadores móviles.
            <br>
            <i class=\"fas fa-check\"></i> Reproducción para reproductores móviles nativos.
            <br>
            <i class=\"fas fa-check\"></i> Moderno sitio web administrable.
            <br>
            <i class=\"fas fa-check\"></i> Generador aplicación Android/Google Play.
            <br>
            <i class=\"fas fa-check\"></i> Compatible con TuneIn.
            <br>
            <i class=\"fas fa-check\"></i> Archivos de reproducción para Winamp,
            <br>Windows Media Player, VLC media player, Quicktime, etc.
            <br>

            <br>

            <b>AutoDJ (Administra tu radio en la nube)</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> 2Gb de almacenamiento.
            <br>
            <i class=\"fas fa-check\"></i> Automatización de programación.
            <br>
            <i class=\"fas fa-check\"></i> Manejo de listas de reproducción.
            <br>
            <i class=\"fas fa-check\"></i> Programación de spots y jingles.
            <br>
            <i class=\"fas fa-check\"></i> Gestión de DJs.
            <br>
            <i class=\"fas fa-check\"></i> Y mucho más.
            <br>

            <br>

            <b>Live streaming (emisión en vivo)</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> Shoutcast.
            <br>
            <i class=\"fas fa-check\"></i> Relay desde otras radios en línea.
            <br>
            <i class=\"fas fa-check\"></i> Transmisiones multipunto.
            <br>
            <i class=\"fas fa-check\"></i> Soporte para Wowza/Rtmp.
            <br>
            <i class=\"fas fa-check\"></i> Hasta 1.000 oyentes en simultáneo.
            <br>

            <br>

            <b>Importación</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> Importación de MP3 desde otros sitios web.
            <br>
            <i class=\"fas fa-check\"></i> Integración con Soundcloud.
            <br>
            <i class=\"fas fa-check\"></i> Integración con Youtube.
            <br>
            <i class=\"fas fa-check\"></i> Grabadora de voz.
            <br>

            <br>

            <b>Otros</b>

            <br>
            <br>

            <i class=\"fas fa-check\"></i> Estadísticas de emisión.
            <br>
            <i class=\"fas fa-check\"></i> Firewall.
            <br>
            <i class=\"fas fa-check\"></i> API Json/XML
            <br>

            <div class=\"pricing--footer\">
                <a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&pid=7\" class=\"btn--primary btn--ripple\">Comprar</a>
            </div>

        </div>
        <div class=\"col-md-6 aeroPadding20\">

            <h3>¿Necesitas una web profesional para tu radio?</h3>
            <br> Agregar tan solo US\$ 40/año y recibe:
            <br>
            <br>

            <b>Servicios incluidos:</b>
            <br>
            <br>

            <i class=\"fas fa-check\"></i> Registro de dominio (.com, .net, .org).
            <br>
            <i class=\"fas fa-check\"></i> Alojamiento web ilimitado.
            <br>
            <i class=\"fas fa-check\"></i> Integración del servicio de radio por Internet.
            <br>
            <i class=\"fas fa-check\"></i> Hermoso portal desarrollado sobre Laravel Framework.
            <br>
            <i class=\"fas fa-check\"></i> Panel de gestión de contenidos y personalización.
            <br>

            <br>

            <b>Páginas disponibles:</b>
            <br>
            <br>

            <i class=\"fas fa-check\"></i> Portada (tres versiones).
            <br>
            <i class=\"fas fa-check\"></i> Noticias/artículos ilimitadas.
            <br>
            <i class=\"fas fa-check\"></i> Nosotros.
            <br>
            <i class=\"fas fa-check\"></i> Staff.
            <br>
            <i class=\"fas fa-check\"></i> Programación (información dinámica en tiempo real).
            <br>
            <i class=\"fas fa-check\"></i> Área de contacto.
            <br>

            <div class=\"pricing--footer\">
                <a href=\"https://dashboard.alojamiento.vip/cart.php?a=add&pid=7\" class=\"btn--primary btn--ripple\">Comprar</a>
            </div>
            <br>
            <i><small><i class=\"fas fa-shopping-bag\"></i> Oferta disponible si contratas el servicio de Audio Streaming.</small>
            </i>

        </div>
    </div>
</div>

{% partial 'widgets/faqs' %}

{% partial 'widgets/warranty' %}", "/home/ubuntu/workspace/themes/master/pages/streaming.htm", "");
    }
}
