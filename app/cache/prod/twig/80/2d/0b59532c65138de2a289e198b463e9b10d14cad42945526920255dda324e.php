<?php

/* CoachPanneauBundle:Panneau:form-1.html.twig */
class __TwigTemplate_802d0b59532c65138de2a289e198b463e9b10d14cad42945526920255dda324e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\" id=\"form-1\">
        <div class=\"col-md-12 step-create\">
            <form class=\"form panneau-edit \" id=\"form-panneau-1\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("coach_panneau_homepage");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'enctype');
        echo " method=\"POST\">
\t\t\t\t\t<div class=\"row\">
                        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'errors');
        echo "
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<span class=\"input-tr-addon\"><i class=\"fa fa-flag\"></i></span>
                                            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "titre", array()), 'widget', array("attr" => array("placeholder" => "Titre de l'annonce", "class" => "form-control annonce-titre-panneau")));
        echo "
\t\t\t\t\t\t\t\t\t\t<small>Exemple: Appartement 3 pièces</small>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   <div class=\"col-md-6\">
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<span class=\"input-tr-addon\"><i class=\"fa fa-mobile\"></i></span>
                                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "telephone", array()), 'widget', array("attr" => array("placeholder" => "Numéro de téléphone", "class" => "form-control annonce-num-panneau")));
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "taille", array()), 'widget', array("attr" => array("class" => "form-control size")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t   ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "oreillets", array()), 'widget', array("attr" => array("class" => "form-control oreillets")));
        echo "
\t\t\t\t\t\t   </div>
\t\t\t\t\t   </div>
\t\t\t\t\t</div>\t\t\t\t\t 
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t    <div class=\"form-group\">
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "quantite", array()), 'widget', array("attr" => array("placeholder" => "Saisir la quantité", "class" => "form-control quantity")));
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t   </div>
\t\t\t\t\t    <div class=\"col-md-6\">
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<span class=\"input-tr-addon\"><i class=\"fa fa-envelope\"></i></span>
                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "email", array()), 'widget', array("attr" => array("placeholder" => "Mon mail", "class" => "form-control mon-mail")));
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                    <div class=\"display infos\" data-quantity=\"1\"  data-or=\"0\" data-quality=\"5\" data-size=\"40\"></div>
                    <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"somme\">
\t\t\t\t\t\t\t\t<span class=\"number\">1</span>
\t\t\t\t\t\t\t\t<span>Panneau(x),</span>
\t\t\t\t\t\t\t\t<span class=\"price pull-right\"><span>0</span> Euro</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
\t\t\t\t\t<button class=\"btn btn-success btn-block\" type=\"submit\">Créer mon panneau</button>
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'rest');
        echo "                        
            </form>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "CoachPanneauBundle:Panneau:form-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 60,  87 => 44,  77 => 37,  67 => 30,  60 => 26,  50 => 19,  38 => 10,  30 => 5,  23 => 3,  19 => 1,);
    }
}
