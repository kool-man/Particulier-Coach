<?php

/* CoachReservationBundle:Reservation:inscription.html.twig */
class __TwigTemplate_3e2d0e039285ca05a9c517b4ea8b1316b7aeca49cd681acb57f58af4c9391534 extends Twig_Template
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



        <h3 class=\"title-page\">Formulaire de réservation sécurisée</h3>

    </div>
  \t
    <div class=\"col-md-12\">
       
        <div class=\"col-md-12 wells\">

            <!--bs-wizard-->
            <div class=\"row bs-wizard\" style=\"border-bottom:0;\">

                <div class=\"col-xs-3 bs-wizard-step disabled\"><!-- complete -->
                    <div class=\"text-center bs-wizard-stepnum\">Paiement</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
                
                <div class=\"col-xs-3 bs-wizard-step disabled\"><!-- active -->
                    <div class=\"text-center bs-wizard-stepnum\">Réservation</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
                
                <div class=\"col-xs-3 bs-wizard-step disabled\"><!-- active -->
                    <div class=\"text-center bs-wizard-stepnum\">Validation</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
            </div>
            <!--bs-wizard-->

            <div class=\"col-md-12 mrg-t-10\"></div>
            <div class=\"row\">
                <!--step-1-->
                <div class=\"col-md-12\" id=\"step-1-form\" style=\"display: block;\">
                    <form action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("coach_reservation_inscription", array("pack" => 1));
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                    
                        ";
        // line 45
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 46
            echo "                        <div class=\"alert alert-danger col-md-12\" role=\"alert\">
                            ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
            echo "
                            ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
            echo "
                            ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                             ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
            echo "
                            ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
            echo "
                            ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'errors');
            echo "
                           
                        </div>
                        ";
        }
        // line 56
        echo "                   
                    <div class=\"col-md-4\">
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom*", "class" => "form-control")));
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("placeholder" => "Prénom*", "class" => "form-control")));
        echo "
                            </label>
                        </div>
                    </div>
\t\t    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email*", "class" => "form-control")));
        echo "
                            </label>
                        </div>
                    </div>\t\t
\t\t    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("placeholder" => "Tél.", "class" => "form-control")));
        echo "
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("placeholder" => "Adresse", "class" => "form-control")));
        echo "
                            </label>
                        </div>

                    </div>
\t\t\t\t\t
\t\t    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("placeholder" => "Code Postal", "class" => "form-control")));
        echo "
                            </label>
                        </div>
                    </div>\t\t\t\t
\t\t\t\t\t
                     
                     <div class=\"col-md-4 col-md-offset-8\">
                        <div class=\"form-group\">
                            <button class=\"btn-success btn pull-right\">Etape Suivante &nbsp;<i class=\"fa fa-chevron-right\"></i></button>
                        </div>
                    </div>
                    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "        
                    </form>        
                </div>
                <!--step-1-->
            </div>
        </div>
    </div>

</div>
<br>
<br>
";
    }

    // line 128
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 129
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!--datetimepicker-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-datetimepicker/jquery.datetimepicker.css"), "html", null, true);
        echo "\" />
";
    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        // line 134
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-datetimepicker/jquery.datetimepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
\t\tjQuery('#time').datetimepicker({
\t\t\t  datepicker:false,
\t\t\t  format:'H:i'
\t\t\t});
        jQuery('#date').datetimepicker({
\t\t  startDate:'+1971/05/01',//or 1986/12/08
\t\t   timepicker:false,
\t\t\tformat:'d.m.Y'
\t\t  
\t\t});
        </script>
";
    }

    public function getTemplateName()
    {
        return "CoachReservationBundle:Reservation:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 135,  238 => 134,  235 => 133,  229 => 131,  224 => 129,  221 => 128,  205 => 116,  191 => 105,  178 => 95,  166 => 86,  155 => 78,  144 => 70,  133 => 62,  126 => 58,  122 => 56,  115 => 52,  111 => 51,  107 => 50,  103 => 49,  99 => 48,  95 => 47,  92 => 46,  90 => 45,  83 => 43,  41 => 3,  38 => 2,  11 => 1,);
    }
}
