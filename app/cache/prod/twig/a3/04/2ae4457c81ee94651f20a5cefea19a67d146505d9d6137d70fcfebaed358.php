<?php

/* CoachEstimationBundle:Estimation:cheque.html.twig */
class __TwigTemplate_a3042ae4457c81ee94651f20a5cefea19a67d146505d9d6137d70fcfebaed358 extends Twig_Template
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
        echo "        <div class=\"row\">
            <div class=\"wells col-md-12 nmrg\">
                   <p>Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                   </p>\t\t\t
                   <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("coach_reservation_inscription", array("pack" => 3));
        echo "\" class=\"btn btn-success wow fadeInRight pull-right\">Accélérer ma vente maintenant</a>
            </div>
\t</div>     
\t<div class=\"row\">
            <div class=\"col-md-12\">
                <form id=\"vo_frm_vehicule\" name=\"vo_frm_vehicule\" method=\"post\" action=\"#\">                
                <div  class=\"margin-bottom-20\">
                    <h3 class=\"title-page\">Bonjour M. ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["estimation"]) ? $context["estimation"] : $this->getContext($context, "estimation")), "client", array()), "nom", array()), "html", null, true);
        echo ". Voici une estimation de votre immobilier</h3>                   
                </div>                                
                <div class=\"cheque\">
                    <div class=\"peugeot\">Equipe Particulier & Coach</div>
                    <div class=\"montant_lettres\">M. ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["estimation"]) ? $context["estimation"] : $this->getContext($context, "estimation")), "client", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["estimation"]) ? $context["estimation"] : $this->getContext($context, "estimation")), "client", array()), "prenom", array()), "html", null, true);
        echo "</div>
                    <div class=\"encart_montant\"><span class=\"montant_chiffres\">";
        // line 19
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["estimation"]) ? $context["estimation"] : $this->getContext($context, "estimation")), "total", array()), 2, ".", ","), "html", null, true);
        echo " €</span> TTC</div>
                    <div class=\"ordre\"> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["bien"]) ? $context["bien"] : $this->getContext($context, "bien")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estimation"]) ? $context["estimation"] : $this->getContext($context, "estimation")), "surface", array()), "html", null, true);
        echo " m²</div>
                    <div class=\"ref_client\">Année de construction : ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "html", null, true);
        echo "</div>
                </div>                                
                
                
                <div class=\"clear\"></div>
                
                    <div>
                        <input type=\"hidden\" name=\"slide\" id=\"slide\" value=\"22\">
                        <input type=\"hidden\" name=\"sid\" id=\"sid\" value=\"ic1q3fcem549nmu2gie1fcemk6\">                        
                        <input type=\"hidden\" name=\"select_vo_rfid\" id=\"select_vo_rfid\" value=\"5862104\">
                        <input type=\"hidden\" name=\"select_vo_update\" id=\"select_vo_update\" value=\"\">
                        <input type=\"hidden\" name=\"select_vo_reseau\" id=\"select_vo_reseau\" value=\"\">
                        <input type=\"hidden\" name=\"select_vo_horaire_code\" id=\"select_vo_horaire_code\" value=\"\">
                        <input type=\"hidden\" name=\"select_vo_horaire_name\" id=\"select_vo_horaire_name\" value=\"\">
                        <input type=\"hidden\" name=\"select_vo_tel\" id=\"select_vo_tel\" value=\"\">
                    </div>
                
                </form>
            </div>
\t</div>    
";
    }

    // line 42
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 43
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<!--js-elastislide-->
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/css/elastislide.css"), "html", null, true);
        echo "\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/css/custom.css"), "html", null, true);
        echo "\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachestimation/css/cheque.css"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "CoachEstimationBundle:Estimation:cheque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  116 => 46,  112 => 45,  107 => 43,  104 => 42,  79 => 21,  73 => 20,  69 => 19,  63 => 18,  56 => 14,  46 => 7,  40 => 3,  37 => 2,  11 => 1,);
    }
}
