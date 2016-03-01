<?php

/* CoachReservationBundle:Reservation:paiement.html.twig */
class __TwigTemplate_aa97ffe2a5accbae4c619af75f2117940a5360868dadbb97962697530b461955 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
    <div class=\"col-md-12\">

        <h3 class=\"title-page\">Accélérer ma vente maintenant</h3>

        <div class=\"col-md-12 alert alert-success\">
            <i class=\"fa fa-home\"></i>&nbsp;&nbsp;<strong>Accélérer la vente de votre immobilier</strong>
         </div>
         <div class=\"col-md-12\">
            <!--bs-wizard-->
            <div class=\"row bs-wizard\" style=\"border-bottom:0;\">
                                
                <div class=\"col-xs-4 bs-wizard-step complete\"><!-- complete -->
                    <div class=\"text-center bs-wizard-stepnum\">Paiement</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
                
                <div class=\"col-xs-4 bs-wizard-step disabled\"><!-- active -->
                    <div class=\"text-center bs-wizard-stepnum\">Réservation</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
                
                <div class=\"col-xs-4 bs-wizard-step disabled\"><!-- active -->
                    <div class=\"text-center bs-wizard-stepnum\">Validation</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
            </div>
            
        </div> 
<!--step-2-->
                <div class=\"col-md-12\">
                <form method=\"POST\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("coach_reservation_paiement", array("pack" => "3"));
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "> 
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Nom")));
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Prénom")));
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "E-mail")));
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Ville", "data-id" => "ville", "data-url" => $this->env->getExtension('routing')->getPath("coach_estimation_json_villes"))));
        // line 74
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("maxlength" => "5", "data-id" => "codePostal", "class" => " form-control", "placeholder" => "Code postal", "data-url" => $this->env->getExtension('routing')->getPath("coach_estimation_json_codesPostaux"))));
        // line 90
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Tel")));
        echo "
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-lock\"></i></span>
                                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Adresse")));
        echo "
                            </label>
                        </div>
                    </div>        
                    <div class=\"col-md-4 col-md-offset-8\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn-success btn pull-right\">Etape Suivante &nbsp;<i class=\"fa fa-chevron-right\"></i></button>
                        </div>
                    </div>
                    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
                </form>    
                </div>
                <!--step-2-->

<br>
<br>
<br>
<br>
<br>
";
    }

    // line 127
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 128
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-upload-master/css/fileinput.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  type=\"text/css\">
";
    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <!--fetech JS - JS  special for this page only-->
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-upload-master/js/fileinput.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://code.jquery.com/ui/1.11.3/jquery-ui.js\"></script>  
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachestimation/js/autocomplete.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css\">
";
    }

    public function getTemplateName()
    {
        return "CoachReservationBundle:Reservation:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 139,  222 => 137,  218 => 136,  212 => 134,  209 => 133,  203 => 131,  199 => 130,  195 => 129,  190 => 128,  187 => 127,  172 => 116,  160 => 107,  148 => 98,  138 => 90,  136 => 82,  126 => 74,  124 => 67,  113 => 59,  102 => 51,  91 => 43,  83 => 38,  77 => 37,  41 => 3,  38 => 2,  11 => 1,);
    }
}
