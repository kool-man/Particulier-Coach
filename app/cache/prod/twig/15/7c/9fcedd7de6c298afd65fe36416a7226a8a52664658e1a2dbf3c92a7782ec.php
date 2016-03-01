<?php

/* ApplicationSonataUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_157c9fcedd7de6c298afd65fe36416a7226a8a52664658e1a2dbf3c92a7782ec extends Twig_Template
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
        echo "    <div class=\"row\">
    <div class=\"col-md-12\">

        <ol class=\"breadcrumb\">
            <li class=\"active\">Mon Compte</li>
        </ol>
        

    <div class=\"col-md-12\">
            <div class=\"col-md-12 alert alert-warning\">
            <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            
        </div>
    </div>
    <div class=\"col-md-12\">    
        <div class=\"row mrg-t-30\">
            <div class=\"col-md-2 col-xs-3\">
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/icon-1.jpg"), "html", null, true);
        echo "\" alt=\"Annonces\" class=\"img-responsive\"></a>
                <h3 style=\"text-align: center\">Annonces</h3>
            </div>
            <div class=\"col-md-2 col-xs-3\">
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("coach_coaching_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/icon-7.jpg"), "html", null, true);
        echo "\" alt=\"Coaching\" class=\"img-responsive\"></a>
                <h3 style=\"text-align: center\">Coaching</h3>
            </div>
            <div class=\"col-md-2 col-xs-3\">
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("coach_estimation_form");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/icon-4.jpg"), "html", null, true);
        echo "\" alt=\"Estimation\" class=\"img-responsive\"></a>
                <h3 style=\"text-align: center\">Estimation</h3>
            </div>
            <div class=\"col-md-2 col-xs-3\">
                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("coach_pack");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/icon-3.jpg"), "html", null, true);
        echo "\" alt=\"Déposez\" class=\"img-responsive\"></a>
                <h3 style=\"text-align: center\">Déposez</h3>
            </div>
            <div class=\"col-md-2 col-xs-3\">
                <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("coach_user_security_profile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/icon-5.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"img-responsive\"></a>
                <h3 style=\"text-align: center\">Profile</h3>
            </div>
            <div class=\"col-md-2 col-xs-3\">
                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("coach_panneau_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/icon-6.jpg"), "html", null, true);
        echo "\" alt=\"Panneaux\" class=\"img-responsive\"></a>
                <h3 style=\"text-align: center\">Panneaux</h3>
            </div>    
        </div>
        
    </div>        
<br>
<br>
<br>
";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  97 => 36,  88 => 32,  79 => 28,  70 => 24,  61 => 20,  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}
