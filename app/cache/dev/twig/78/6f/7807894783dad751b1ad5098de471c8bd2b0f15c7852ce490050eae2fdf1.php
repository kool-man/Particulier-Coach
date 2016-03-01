<?php

/* ::layout.html.twig */
class __TwigTemplate_786f7807894783dad751b1ad5098de471c8bd2b0f15c7852ce490050eae2fdf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_top' => array($this, 'block_header_top'),
            'header_nav' => array($this, 'block_header_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'pub' => array($this, 'block_pub'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html ";
        // line 2
        echo $this->env->getExtension('sonata_seo')->getHtmlAttributes();
        echo ">
    <head ";
        // line 3
        echo $this->env->getExtension('sonata_seo')->getHeadAttributes();
        echo ">
        ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "        ";
        echo $this->env->getExtension('sonata_seo')->getMetadatas();
        echo "
        ";
        // line 6
        echo $this->env->getExtension('sonata_seo')->getLinkCanonical();
        echo "
        ";
        // line 7
        echo $this->env->getExtension('sonata_seo')->getLangAlternates();
        echo "
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"alternate\" hreflang=\"fr\" href=\"http://www.particulier-coach.com\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('header_top', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('header_nav', $context, $blocks);
        // line 28
        echo "        <div class=\"container\">           
             ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        echo "            
            <!-- FOOTER -->
            ";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "            <!-- FOOTER -->
        </div>
        <!-- End content -->
        ";
        // line 37
        $this->displayBlock('pub', $context, $blocks);
        echo "         
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('sonata_seo')->getTitle();
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-animation/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 22
    public function block_header_top($context, array $blocks = array())
    {
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "header-top.html.twig");
        echo "
        ";
    }

    // line 25
    public function block_header_nav($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "header-nav.html.twig");
        echo "
        ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
            ";
    }

    // line 37
    public function block_pub($context, array $blocks = array())
    {
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "        <!-- JQUERY PLUGINS AND MAIN JS -->
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/main.js"), "html", null, true);
        echo "\"></script>
         <!--Animation plugin-->
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-animation/wow.min.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-typed/typed.js"), "html", null, true);
        echo "\" ></script>
        <!-- OWL carroussel-->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/init.js"), "html", null, true);
        echo "\" ></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/ie/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
        <script>
\t\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

\t\t\tga('create', 'UA-63175708-1', 'auto');
\t\t\tga('send', 'pageview');
        </script>
        <!--<script type=\"text/javascript\">
            window._pt_lt = new Date().getTime();
            window._pt_sp_2 = [];
            _pt_sp_2.push('setAccount,48bbbb74');
            var _protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");
            (function() {
                    var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
                    atag.src = _protocol + 'js.ptengine.com/pta.js';
                    var stag = document.createElement('script'); stag.type = 'text/javascript'; stag.async = true;
                    stag.src = _protocol + 'js.ptengine.com/pts.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(atag, s);s.parentNode.insertBefore(stag, s);
            })();
        </script>-->
        <!--<script>
        document.write('<script src=\"//sharebutton.net/plugin/sharebutton.php?type=vertical&u=' + encodeURIComponent(document.location.href) + '\"></scr' + 'ipt>');
        </script>-->
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 50,  209 => 48,  205 => 47,  200 => 45,  196 => 44,  191 => 42,  187 => 41,  183 => 40,  180 => 39,  177 => 38,  172 => 37,  165 => 32,  162 => 31,  157 => 29,  150 => 26,  147 => 25,  140 => 23,  137 => 22,  131 => 18,  127 => 17,  123 => 16,  119 => 15,  115 => 14,  111 => 13,  106 => 12,  103 => 11,  97 => 4,  91 => 78,  89 => 38,  85 => 37,  80 => 34,  78 => 31,  73 => 29,  70 => 28,  67 => 25,  65 => 22,  61 => 20,  59 => 11,  54 => 9,  49 => 7,  45 => 6,  40 => 5,  38 => 4,  34 => 3,  30 => 2,  27 => 1,);
    }
}
