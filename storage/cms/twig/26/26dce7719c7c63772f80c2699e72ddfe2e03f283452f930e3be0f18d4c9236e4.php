<?php

/* /home/ubuntu/workspace/themes/master/partials/code/afterbodytag.htm */
class __TwigTemplate_b737fa370638c458202796a8f3b5c150baebc2546e6b79678f3c704fd3ae222b extends Twig_Template
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
        echo "<!-- Load Facebook SDK for JavaScript -->
<div id=\"fb-root\"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class=\"fb-customerchat\"
  attribution=setup_tool
  page_id=\"378786882676005\"
  theme_color=\"#232C3B\">
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/code/afterbodytag.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Load Facebook SDK for JavaScript -->
<div id=\"fb-root\"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class=\"fb-customerchat\"
  attribution=setup_tool
  page_id=\"378786882676005\"
  theme_color=\"#232C3B\">
</div>", "/home/ubuntu/workspace/themes/master/partials/code/afterbodytag.htm", "");
    }
}
