<?php

/* /home/ubuntu/workspace/themes/master/layouts/master.htm */
class __TwigTemplate_8b9130bf2d9bbe1e9327d422a107dc91af957153e3fe3e881c556555504618a4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    <title>Alojamiento VIP • Simple, potente y económico</title>

    <!-- ====Favicons==== -->
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\" type=\"image/x-icon\">
    
    
    <!-- ====Google Font Stylesheet==== -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,900' rel='stylesheet' type='text/css'>

    <!-- ====Font Awesome Stylesheet==== -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">

    <!-- ====Bootstrap Stylesheet==== -->
    <link href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    
    <!-- ====bxSlider Plugin==== -->
    <link href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.bxslider.min.css");
        echo "\" rel=\"stylesheet\">
    
    <!-- ====Main Stylesheet==== -->
    <link href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css?v=1");
        echo "\" rel=\"stylesheet\">
    
    <!-- ====Responsive Stylesheet==== -->
    <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive-style.css?v=1");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/aero.css?v=9");
        echo "\" rel=\"stylesheet\">
    
    <!-- ====Theme Color Stylesheet==== -->
    <link href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/colors/theme-color-1.css");
        echo "\" rel=\"stylesheet\" id=\"changeColorScheme\">

    <!-- HTML5 Shim and Respond.js' | theme }} IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' | theme }}\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js' | theme }}/1.4.2/respond.min.js' | theme }}\"></script>
    <![endif]-->
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
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "        
        ";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 66
        echo "        
        ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "        
    </div>
    <!-- Wrapper End -->

    <!-- ====jQuery Library==== -->
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.1.0.min.js");
        echo "\"></script>

    <!-- ====Bootstrap Core Script==== -->
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>

    <!-- ====bxSlider Plugin==== -->
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.bxslider.min.js");
        echo "\"></script>

    <!-- ====jQuery Validate Plugin==== -->
    <script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.validate.min.js");
        echo "\"></script>

    <!-- ====RetinaJS Plugin==== -->
    <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/retina.min.js");
        echo "\"></script>

    <!-- ====Main Script==== -->
    <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    
    <script id=\"mcjs\">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,\"script\",\"https://chimpstatic.com/mcjs-connected/js/users/d1b3449cedbb183c24cad61ce/76c223288ef00160b93d47742.js\");</script>

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
        return array (  164 => 88,  158 => 85,  152 => 82,  146 => 79,  140 => 76,  134 => 73,  127 => 68,  123 => 67,  120 => 66,  118 => 65,  115 => 64,  111 => 63,  83 => 38,  77 => 35,  73 => 34,  67 => 31,  61 => 28,  55 => 25,  42 => 15,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    <title>Alojamiento VIP • Simple, potente y económico</title>

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

</body>
</html>", "/home/ubuntu/workspace/themes/master/layouts/master.htm", "");
    }
}
