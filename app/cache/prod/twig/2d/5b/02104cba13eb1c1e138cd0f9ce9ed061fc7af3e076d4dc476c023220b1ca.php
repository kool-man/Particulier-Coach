<?php

/* CoachEstimationBundle:Estimation:message_automatique.html.twig */
class __TwigTemplate_2d5b02104cba13eb1c1e138cd0f9ce9ed061fc7af3e076d4dc476c023220b1ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
        <!--ligne-1-->
\t<div class=\"row\">
            <div class=\"wells col-md-12 nmrg\">
                   <p>Nous avons bien envoyé un email à ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " dans le quel vous trouverez le prix d'estimation.

Bonne journée,

L’équipe Particulier & Coach
                   </p>\t\t\t
                   <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("coach_estimation_form");
        echo "\" class=\"btn btn-success wow fadeInRight pull-right\">Calculez le prix de votre bien en quelques clics</a>
            </div>
\t</div>
    </div><!--col-md-4-->
</div>
<br>
<br>
";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/js/modernizr.custom.17475.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/js/jquerypp.custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/js/jquery.elastislide.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

    \$('#carousel').elastislide({
        orientation : 'vertical'
    });
    \$('#carousel li').removeAttr('style');
    \$('.elastislide-wrapper.elastislide-vertical').removeAttr('style');
</script>
";
    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 38
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<!--js-elastislide-->
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/css/elastislide.css"), "html", null, true);
        echo "\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/css/custom.css"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "CoachEstimationBundle:Estimation:message_automatique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  106 => 40,  101 => 38,  98 => 37,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  69 => 23,  57 => 14,  48 => 8,  41 => 3,  38 => 2,  11 => 1,);
    }
}
