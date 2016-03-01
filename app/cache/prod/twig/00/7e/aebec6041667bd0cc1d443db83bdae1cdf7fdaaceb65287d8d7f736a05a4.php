<?php

/* CoachEstimationBundle:Estimation:form_estimation.html.twig */
class __TwigTemplate_007eaebec6041667bd0cc1d443db83bdae1cdf7fdaaceb65287d8d7f736a05a4 extends Twig_Template
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

        <h3 class=\"title-page nmrg\">Estimation immobilière gratuite en ligne pour particulier</h3>

        <div class=\"row\">
        <div class=\"col-md-8\">
        <form  action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("coach_estimation_form");
        echo "\"   method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            
            <div class=\"wells col-md-12\">
                <p><strong>Caractéristique du bien (*)</strong></p>
                <div class=\"row\">
                    <!--colone-1-->
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeAnnonce", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPieces", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "

                        </div>
                        
                    </div>
                    <!--End colone-1-->

                    <!--colone-2-->
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etatBien", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>                       

                        <div class=\"form-group\">
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbChambre", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                    </div>
                    <!--End colone-2-->

                    <!--colone-3-->
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeConstruction", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>                        

                        <div class=\"form-group\">
\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Surface (m²)")));
        echo "
                        </div>
                    </div>
                    <!--End colone-3-->
                </div>
            </div>
            <!--End ligne-->

            <!--ligne-->
            <div class=\"wells col-md-12\" id=\"transport-check\">
                <p><strong>Proximité de transport (*)</strong></p>

               ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proximites"]) ? $context["proximites"] : $this->getContext($context, "proximites")));
        foreach ($context['_seq'] as $context["_key"] => $context["proximite"]) {
            // line 61
            echo "\t\t<a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proximite"], "id", array()), "html", null, true);
            echo "\" class=\"icheck\" onclick=\"ajouterProximite(this.id) ;\"><i class=\"fa fa-circle-o\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proximite"], "name", array()), "html", null, true);
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proximite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "               
\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proximite", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "hidden" => "hidden", "style" => "visibility: hidden")));
        echo "
                <!--ATTENTION cest realisé au main js avec le titre //ICHECK data-->
                
                <div class=\"clearfix\"></div>
            </div>
            <!--End ligne-->
            
            <!--ligne-->
            <div class=\"wells col-md-12\" id=\"options-check\">
                <p><strong>Avez-vous ? (*)</strong></p>

               ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loisirAnnonces"]) ? $context["loisirAnnonces"] : $this->getContext($context, "loisirAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["loisirAnnonce"]) {
            // line 76
            echo "\t\t\t<a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loisirAnnonce"], "id", array()), "html", null, true);
            echo "\" class=\"icheck\" onclick=\"ajouterLoisirAnnonce(this.id) ;\"><i class=\"fa fa-circle-o\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loisirAnnonce"], "name", array()), "html", null, true);
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisirAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "               \t\t\t   
\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loisirAnnonce", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "hidden" => "hidden", "style" => "visibility: hidden")));
        echo "

                <!--ATTENTION cest realisé au main js avec le titre //ICHECK data-->
                
                <div class=\"clearfix\"></div>
            </div>
            <!--End ligne-->

            <!--ligne-->
            <div class=\"wells col-md-12\">
                <p><strong>Localisation & déscription (*)</strong></p>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Ville", "data-id" => "ville", "data-url" => $this->env->getExtension('routing')->getPath("coach_estimation_json_villes"))));
        // line 102
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("maxlength" => "5", "data-id" => "codePostal", "class" => " form-control", "placeholder" => "Code postal", "data-url" => $this->env->getExtension('routing')->getPath("coach_estimation_json_codesPostaux"))));
        // line 118
        echo "
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Adresse complète")));
        echo "
                            </label>
                        </div>
                    </div>                    
                </div>          
            </div>

            <!--End ligne-->

            <!--ligne-->
            <div class=\"wells col-md-12\">
                <p><strong>Coordonnées (*)</strong></p>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "profession", array()), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                            </label>
                        </div>
                    </div>
                </div>            
                <div class=\"row\">            
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "nom", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Nom")));
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "prenom", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Prénom")));
        echo "
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "email", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Email")));
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "telephone", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Tel.")));
        echo "
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!--End ligne-->

            <div class=\"row\">            
                <div class=\"col-md-12\">            
                    <div class=\"col-md-12 mrg-t-20\">
                        <button type=\"submit\" value=\"Estimer Votre Bien\" class=\"btn btn-success btn-block btn-lg\">Estimer Votre Bien </button>
                        <!-- <input class=\"btn btn-success btn-block btn-lg pull-right\" type=\"submit\" value=\"Estimer Votre Bien\"> -->
                    </div>
                </div>
            </div>    
            ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>
    
    <div class=\"col-md-4\">
    \t<div class=\"pub-img\">
            <a href=\"\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/annonces.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
            <p class=\"button\">
                <a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("coach_pack");
        echo "\" class=\"btn btn-success\">je despose mon annonce</a>
            </p>
        </div>
        
        <div class=\"pub-img panneau\">
            <p class=\"center\">Je commande mon panneau<br>immobilier personnalisable</p>
            <a href=\"\"><img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
            <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" style=\"left:25px; bottom: 68px;\">
            <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" data-wow-delay=\"0.5s\" style=\"left:95px; bottom: 98px;\">
            <img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" data-wow-delay=\"1s\" style=\"left:145px; bottom: 80px;\">
            <p class=\"button-gray\">
                <a href=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("coach_panneau_homepage");
        echo "\" class=\"btn btn-success\">je commande</a>
            </p>
        </div>

    </div>
    
</div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
";
    }

    // line 232
    public function block_javascripts($context, array $blocks = array())
    {
        // line 233
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"http://code.jquery.com/ui/1.11.3/jquery-ui.js\"></script>  
        <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachestimation/js/autocomplete.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css\">
         <!--init plugin-->
        <script>
\t\tfunction ajouterProximite(id){
\t\tvar select_prox = \$(\"#coach_estimationbundle_estimation_proximite  option[value=\"+id+\"]\").prop(\"selected\");
\t\t\tif(select_prox == true){
\t\t\t \$(\"#coach_estimationbundle_estimation_proximite  option[value=\"+id+\"]\").attr(\"selected\", false);
\t\t\t}else{
\t\t\t \$(\"#coach_estimationbundle_estimation_proximite  option[value=\"+id+\"]\").attr(\"selected\", true);
\t\t\t}
\t\t\t
\t\t};
\t\t
\t\tfunction ajouterLoisirAnnonce(id){
\t\tvar select_prox = \$(\"#coach_estimationbundle_estimation_loisirAnnonce  option[value=\"+id+\"]\").prop(\"selected\");
\t\t\tif(select_prox == true){
\t\t\t \$(\"#coach_estimationbundle_estimation_loisirAnnonce  option[value=\"+id+\"]\").attr(\"selected\", false);
\t\t\t}else{
\t\t\t \$(\"#coach_estimationbundle_estimation_loisirAnnonce  option[value=\"+id+\"]\").attr(\"selected\", true);
\t\t\t}\t\t
\t\t};
        </script>
";
    }

    public function getTemplateName()
    {
        return "CoachEstimationBundle:Estimation:form_estimation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 235,  370 => 233,  367 => 232,  347 => 216,  342 => 214,  338 => 213,  334 => 212,  330 => 211,  321 => 205,  316 => 203,  307 => 197,  288 => 181,  277 => 173,  264 => 163,  253 => 155,  240 => 145,  220 => 128,  208 => 118,  206 => 110,  196 => 102,  194 => 95,  175 => 79,  172 => 78,  161 => 76,  157 => 75,  143 => 64,  140 => 63,  129 => 61,  125 => 60,  110 => 48,  103 => 44,  92 => 36,  85 => 32,  72 => 22,  66 => 19,  55 => 11,  49 => 10,  40 => 3,  37 => 2,  11 => 1,);
    }
}
