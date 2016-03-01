<?php

/* CoachPanneauBundle:Panneau:paiement.html.twig */
class __TwigTemplate_96180f60b4b4ffa1bd11ae453f4ee8fbb114fe1ff77c34327b12dcc669fc07ff extends Twig_Template
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
            <div class=\"row bs-wizard\" style=\"border-bottom:0;\">
                <div class=\"col-xs-4 bs-wizard-step complete\">
                    <div class=\"text-center bs-wizard-stepnum\">Création Panneau</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
                <div class=\"col-xs-4 bs-wizard-step disabled\">
                    <div class=\"text-center bs-wizard-stepnum\">Paiement</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
                <div class=\"col-xs-4 bs-wizard-step disabled\">
                    <div class=\"text-center bs-wizard-stepnum\">Validation</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
            </div>
        </div> 
        <div class=\"col-md-12\">
                <form method=\"POST\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_panneau_paiement", array("id" => $this->getAttribute((isset($context["panneau"]) ? $context["panneau"] : $this->getContext($context, "panneau")), "id", array()))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "> 
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                                ";
        // line 35
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
        // line 43
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
        // line 51
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
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Ville", "data-id" => "ville", "data-url" => $this->env->getExtension('routing')->getPath("coach_estimation_json_villes"))));
        // line 66
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("maxlength" => "5", "data-id" => "codePostal", "class" => " form-control", "placeholder" => "Code postal", "data-url" => $this->env->getExtension('routing')->getPath("coach_estimation_json_codesPostaux"))));
        // line 82
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                                ";
        // line 90
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
        // line 99
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
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
                </form>    
                </div>
<br><br><br><br><br>
";
    }

    // line 113
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-upload-master/css/fileinput.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  type=\"text/css\">
";
    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        // line 120
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-upload-master/js/fileinput.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://code.jquery.com/ui/1.11.3/jquery-ui.js\"></script>  
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachestimation/js/autocomplete.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css\">
";
    }

    public function getTemplateName()
    {
        return "CoachPanneauBundle:Panneau:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 124,  207 => 122,  203 => 121,  198 => 120,  195 => 119,  189 => 117,  185 => 116,  181 => 115,  176 => 114,  173 => 113,  164 => 108,  152 => 99,  140 => 90,  130 => 82,  128 => 74,  118 => 66,  116 => 59,  105 => 51,  94 => 43,  83 => 35,  75 => 30,  69 => 29,  41 => 3,  38 => 2,  11 => 1,);
    }
}
