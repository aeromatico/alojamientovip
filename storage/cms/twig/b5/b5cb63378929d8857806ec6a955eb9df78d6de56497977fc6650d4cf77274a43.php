<?php

/* /home/ubuntu/workspace/themes/master/layouts/master.htm */
class __TwigTemplate_156471106c2f2ff643544b35c96fc76e950c2333cf1f55a9b1b7e7be71c4e613 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    
    <title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo " • Alojamiento VIP - Simple, potente y económico </title>
    
    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
    
    <meta name=\"title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_title", []), "html", null, true);
        echo "\">
    
    <meta name=\"author\" content=\"^A^ero\">

    <!-- ====Favicons==== -->
    <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\" type=\"image/x-icon\">
    
    
    <!-- ====Google Font Stylesheet==== -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,900' rel='stylesheet' type='text/css'>

    <!-- ====Font Awesome Stylesheet==== -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">

    <!-- ====Bootstrap Stylesheet==== -->
    <link href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    
    <!-- ====bxSlider Plugin==== -->
    <link href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.bxslider.min.css");
        echo "\" rel=\"stylesheet\">
    
    <!-- ====Main Stylesheet==== -->
    <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css?v=1");
        echo "\" rel=\"stylesheet\">
    
    <!-- ====Responsive Stylesheet==== -->
    <link href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive-style.css?v=1");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/aero.css?v=9");
        echo "\" rel=\"stylesheet\">
    
    <!-- ====Theme Color Stylesheet==== -->
    <link href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/colors/theme-color-1.css");
        echo "\" rel=\"stylesheet\" id=\"changeColorScheme\">

    <!-- HTML5 Shim and Respond.js' | theme }} IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' | theme }}\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js' | theme }}/1.4.2/respond.min.js' | theme }}\"></script>
    <![endif]-->
    
    ";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 50
        echo "    
    ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("code/analytics"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "    
</head>
<body>
    <!-- Preloader Start -->
    <div id=\"preloader\">
        <div class=\"preloader loading\">
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class=\"wrapper\">

        ";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "        
        ";
        // line 73
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 74
        echo "        
        ";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "        
    </div>
    <!-- Wrapper End -->

    <!-- ====jQuery Library==== -->
    <script src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.1.0.min.js");
        echo "\"></script>

    <!-- ====Bootstrap Core Script==== -->
    <script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>

    <!-- ====bxSlider Plugin==== -->
    <script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.bxslider.min.js");
        echo "\"></script>

    <!-- ====jQuery Validate Plugin==== -->
    <script src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.validate.min.js");
        echo "\"></script>

    <!-- ====RetinaJS Plugin==== -->
    <script src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/retina.min.js");
        echo "\"></script>

    <!-- ====Main Script==== -->
    <script src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    
    <script id=\"mcjs\">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,\"script\",\"https://chimpstatic.com/mcjs-connected/js/users/d1b3449cedbb183c24cad61ce/76c223288ef00160b93d47742.js\");</script>
    
    ";
        // line 100
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 101
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo "    

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 101,  197 => 100,  190 => 96,  184 => 93,  178 => 90,  172 => 87,  166 => 84,  160 => 81,  153 => 76,  149 => 75,  146 => 74,  144 => 73,  141 => 72,  137 => 71,  116 => 52,  112 => 51,  109 => 50,  106 => 49,  95 => 41,  89 => 38,  85 => 37,  79 => 34,  73 => 31,  67 => 28,  54 => 18,  50 => 17,  42 => 12,  37 => 10,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    
    <title>{{ this.page.title }} • Alojamiento VIP - Simple, potente y económico </title>
    
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    
    <meta name=\"author\" content=\"^A^ero\">

    <!-- ====Favicons==== -->
    <link rel=\"shortcut icon\" href=\"{{'assets/img/favicon.ico' | theme }}\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{'assets/img/favicon.ico' | theme }}\" type=\"image/x-icon\">
    
    
    <!-- ====Google Font Stylesheet==== -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,900' rel='stylesheet' type='text/css'>

    <!-- ====Font Awesome Stylesheet==== -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">

    <!-- ====Bootstrap Stylesheet==== -->
    <link href=\"{{'assets/css/bootstrap.min.css' | theme }}\" rel=\"stylesheet\">
    
    <!-- ====bxSlider Plugin==== -->
    <link href=\"{{'assets/css/jquery.bxslider.min.css' | theme }}\" rel=\"stylesheet\">
    
    <!-- ====Main Stylesheet==== -->
    <link href=\"{{'assets/css/style.css?v=1' | theme }}\" rel=\"stylesheet\">
    
    <!-- ====Responsive Stylesheet==== -->
    <link href=\"{{'assets/css/responsive-style.css?v=1' | theme }}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/aero.css?v=9' | theme }}\" rel=\"stylesheet\">
    
    <!-- ====Theme Color Stylesheet==== -->
    <link href=\"{{'assets/css/colors/theme-color-1.css' | theme }}\" rel=\"stylesheet\" id=\"changeColorScheme\">

    <!-- HTML5 Shim and Respond.js' | theme }} IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' | theme }}\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js' | theme }}/1.4.2/respond.min.js' | theme }}\"></script>
    <![endif]-->
    
    {% styles %}
    
    {% partial 'code/analytics' %}
    
</head>
<body>
    <!-- Preloader Start -->
    <div id=\"preloader\">
        <div class=\"preloader loading\">
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
            <span class=\"slice\"></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class=\"wrapper\">

        {% partial 'header' %}
        
        {% page %}
        
        {% partial 'footer' %}
        
    </div>
    <!-- Wrapper End -->

    <!-- ====jQuery Library==== -->
    <script src=\"{{'assets/js/jquery-3.1.0.min.js' | theme }}\"></script>

    <!-- ====Bootstrap Core Script==== -->
    <script src=\"{{'assets/js/bootstrap.min.js' | theme }}\"></script>

    <!-- ====bxSlider Plugin==== -->
    <script src=\"{{'assets/js/jquery.bxslider.min.js' | theme }}\"></script>

    <!-- ====jQuery Validate Plugin==== -->
    <script src=\"{{'assets/js/jquery.validate.min.js' | theme }}\"></script>

    <!-- ====RetinaJS Plugin==== -->
    <script src=\"{{'assets/js/retina.min.js' | theme }}\"></script>

    <!-- ====Main Script==== -->
    <script src=\"{{'assets/js/main.js' | theme }}\"></script>
    
    <script id=\"mcjs\">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,\"script\",\"https://chimpstatic.com/mcjs-connected/js/users/d1b3449cedbb183c24cad61ce/76c223288ef00160b93d47742.js\");</script>
    
    {% framework extras %}
    {% scripts %}    

</body>
</html>", "/home/ubuntu/workspace/themes/master/layouts/master.htm", "");
    }
}
