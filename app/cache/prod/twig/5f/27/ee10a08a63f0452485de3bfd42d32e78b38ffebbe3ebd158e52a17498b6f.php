<?php

/* CoachAnnonceBundle:Annonce:edit_annonce.html.twig */
class __TwigTemplate_5f27ee10a08a63f0452485de3bfd42d32e78b38ffebbe3ebd158e52a17498b6f extends Twig_Template
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
        <h3 class=\"title-page\">Déposer une annonce</h3>
        <div class=\"col-md-12 alert alert-success\">
            <i class=\"fa fa-home\"></i>&nbsp;&nbsp;<strong>Vendre en quelques minutes votre immobilier</strong>
         </div>
         <div class=\"col-md-12\">
            <div class=\"row bs-wizard\" style=\"border-bottom:0;\">
                <div class=\"col-xs-4 bs-wizard-step disabled\">
                    <div class=\"text-center bs-wizard-stepnum\">Informations</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
                <div class=\"col-xs-4 bs-wizard-step disabled\"><!-- complete -->
                    <div class=\"text-center bs-wizard-stepnum\">Package</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
                <div class=\"col-xs-4 bs-wizard-step disabled\"><!-- active -->
                    <div class=\"text-center bs-wizard-stepnum\">Publication</div>
                    <div class=\"progress\"><div class=\"progress-bar\"></div></div>
                    <a href=\"#\" class=\"bs-wizard-dot\"></a>
                </div>
            </div>
        </div>
        <form name=\"myform\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_deposez_modifier", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\"   method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image0"]) ? $context["image0"] : $this->getContext($context, "image0")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image1"]) ? $context["image1"] : $this->getContext($context, "image1")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image2"]) ? $context["image2"] : $this->getContext($context, "image2")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image3"]) ? $context["image3"] : $this->getContext($context, "image3")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image4"]) ? $context["image4"] : $this->getContext($context, "image4")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image5"]) ? $context["image5"] : $this->getContext($context, "image5")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image6"]) ? $context["image6"] : $this->getContext($context, "image6")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image7"]) ? $context["image7"] : $this->getContext($context, "image7")), 'enctype');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["image8"]) ? $context["image8"] : $this->getContext($context, "image8")), 'enctype');
        echo ">
\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div id=\"step-1-form\">
            <div class=\"wells col-md-12\">
                <p><strong>Caractéristique du bien (*)</strong></p>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeAnnonce", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classAnnonce", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-4\">                        
                        <div class=\"form-group\">
            \t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPieces", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "optionAnnonce", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>                       
                    </div>
                    <div class=\"col-md-4\"> 
                        <div class=\"form-group\">
\t\t\t             ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbChambre", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"wells col-md-12\" id=\"transport-check\">
                <p><strong>Proximité de transport </strong></p>
\t\t          ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proximites"]) ? $context["proximites"] : $this->getContext($context, "proximites")));
        foreach ($context['_seq'] as $context["_key"] => $context["proximite"]) {
            // line 60
            echo "\t\t\t<a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proximite"], "id", array()), "html", null, true);
            echo "\" class=\"icheck";
            if (twig_in_filter($this->getAttribute($context["proximite"], "id", array()), (isset($context["array_proximites_selected"]) ? $context["array_proximites_selected"] : $this->getContext($context, "array_proximites_selected")))) {
                echo " active";
            }
            echo "\" onclick=\"ajouterProximite(this.id) ;\"><i class=\"fa fa-circle-o\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proximite"], "name", array()), "html", null, true);
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proximite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "               
\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proximite", array(), "array"), 'widget', array("attr" => array("hidden" => "hidden", "style" => "visibility: hidden")));
        echo "
                <div class=\"clearfix\"></div>
            </div>            
\t\t<div class=\"wells col-md-12\" id=\"options-check\">
                <p><strong>Avez-vous ?</strong></p>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loisirAnnonces"]) ? $context["loisirAnnonces"] : $this->getContext($context, "loisirAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["loisirAnnonce"]) {
            // line 70
            echo "\t\t     <a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loisirAnnonce"], "id", array()), "html", null, true);
            echo "\" class=\"icheck";
            if (twig_in_filter($this->getAttribute($context["loisirAnnonce"], "id", array()), (isset($context["array_loisirs_selected"]) ? $context["array_loisirs_selected"] : $this->getContext($context, "array_loisirs_selected")))) {
                echo " active";
            }
            echo "\" onclick=\"ajouterLoisirAnnonce(this.id) ;\"><i class=\"fa fa-circle-o\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loisirAnnonce"], "name", array()), "html", null, true);
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisirAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loisirAnnonce", array(), "array"), 'widget', array("attr" => array("hidden" => "hidden", "style" => "visibility: hidden")));
        echo "
        </div>
        </div>
        <div class=\"clearfix\"></div>
        </div>
        <div class=\"wells col-md-12\">
                <p><strong>Localisation (*)</strong></p>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("maxlength" => "5", "data-id" => "codePostal", "class" => " form-control", "placeholder" => "Code postal", "data-url" => $this->env->getExtension('routing')->getPath("coach_estimation_json_codesPostaux"))));
        // line 92
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-map-marker\"></i></span>
                                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Ville", "data-id" => "ville", "data-url" => $this->env->getExtension('routing')->getPath("coach_estimation_json_villes"))));
        // line 107
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
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Adresse complète")));
        echo "
                            </label>
                        </div>
                    </div>                    
                </div>          
            </div>
    </div>
    </div>
    <div class=\"wells col-md-12\">
        <p><strong>Description (*)</strong></p>
            <div class=\"row\">
                <div class=\"col-md-5\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-flag\"></i></span>
                                ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titre de l'annonce")));
        echo "
                            </label>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>
                                        <span class=\"input-tr-addon\"><i class=\"fa fa-eur\"></i></span>
                                        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "type" => "number", "placeholder" => "Prix (*)")));
        echo "
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>
                                        <span class=\"input-tr-addon\"><i class=\"fa fa-home\"></i></span>
                                      ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "type" => "number", "placeholder" => "Surface (*)")));
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>
                                        <span class=\"input-tr-addon\"><i class=\"fa fa-phone\"></i></span>
                                        ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel1", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "type" => "tel", "maxlength" => "10", "placeholder" => "Tél 1 (*)")));
        echo "
                                    </label>
                                    <span id=\"coach_annoncebundle_annonce_tel1_message\" class=\"\">
                                    </span>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class=\"col-md-7\">
                        <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-pencil-square-o\"></i></span>
\t\t\t\t";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "\t
\t\t\t\t\t\t\t   
                            </label>
                        </div>
\t\t\t\t
                    </div>
                </div>
            </div>
            <div class=\"wells col-md-12\">
                <p><strong>Ajouter des photos</strong></p>                    
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                                ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image0"]) ? $context["image0"] : $this->getContext($context, "image0")), "file", array()), 'widget', array("id" => "uploadfileselection0", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 0 );", "style" => "width:300px;")));
        echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas0\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                        </div>  
                        <div class=\"col-md-4\">
                                ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image1"]) ? $context["image1"] : $this->getContext($context, "image1")), "file", array()), 'widget', array("id" => "uploadfileselection1", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 1 );", "style" => "width:300px;")));
        echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas1\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                        </div>
                        <div class=\"col-md-4\">
                                ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image2"]) ? $context["image2"] : $this->getContext($context, "image2")), "file", array()), 'widget', array("id" => "uploadfileselection2", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 2 );", "style" => "width:300px;")));
        echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas2\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                         </div>                     
                    </div>
                    ";
        // line 206
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "pack", array()) > 0)) {
            // line 207
            echo "                    <div class=\"row\">
                        <div class=\"col-md-4\">
                                ";
            // line 209
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image3"]) ? $context["image3"] : $this->getContext($context, "image3")), "file", array()), 'widget', array("id" => "uploadfileselection3", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 3 );", "style" => "width:300px;")));
            echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas3\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                        </div>  
                        <div class=\"col-md-4\">
                                ";
            // line 217
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image4"]) ? $context["image4"] : $this->getContext($context, "image4")), "file", array()), 'widget', array("id" => "uploadfileselection4", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 4 );", "style" => "width:300px;")));
            echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas4\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                        </div>
                        <div class=\"col-md-4\">
                                ";
            // line 225
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image5"]) ? $context["image5"] : $this->getContext($context, "image5")), "file", array()), 'widget', array("id" => "uploadfileselection5", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 5 );", "style" => "width:300px;")));
            echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas5\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                         </div>  
                    </div>
                    ";
        }
        // line 234
        echo "                    ";
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "pack", array()) > 1)) {
            // line 235
            echo "                    <div class=\"row\">
                        <div class=\"col-md-4\">
                                ";
            // line 237
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image6"]) ? $context["image6"] : $this->getContext($context, "image6")), "file", array()), 'widget', array("id" => "uploadfileselection6", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 6 );", "style" => "width:300px;")));
            echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas6\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                        </div>  
                        <div class=\"col-md-4\">
                                ";
            // line 245
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image7"]) ? $context["image7"] : $this->getContext($context, "image7")), "file", array()), 'widget', array("id" => "uploadfileselection7", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 7 );", "style" => "width:300px;")));
            echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas7\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                        </div>
                        <div class=\"col-md-4\">
                                ";
            // line 253
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["image8"]) ? $context["image8"] : $this->getContext($context, "image8")), "file", array()), 'widget', array("id" => "uploadfileselection8", "attr" => array("class" => "btn btn-success", "onchange" => "return ShowImagePreview( this, 8 );", "style" => "width:300px;")));
            echo "
                                <div class=\"clearfix\"></div>
                                <div class=\"previewcanvascontainer\" style=\"width: 300px;\">
                                        <canvas id=\"previewcanvas8\" class=\"previewcanvas\" style=\"width: 280px;\">
                                        </canvas>
                                </div> 
                         </div>  
                    </div>
                    ";
        }
        // line 261
        echo "            
            </div>        
            <div class=\"wells col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 mrg-t-20\">
                        <button class=\"btn btn-success pull-right\" onclick=\"submitform();\" type=\"submit\" >Modifier  <i class=\"fa fa-chevron-right\"></i></button>
                    </div>
                </div>            
                <div class=\"row\">                    
                    <input type=\"hidden\" id=\"coach_annoncebundle_annonce_pack\" name=\"coach_annoncebundle_annonce[pack]\" value=\"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["ordre"]) ? $context["ordre"] : $this->getContext($context, "ordre")), "html", null, true);
        echo "\">        
                </div>
            </div>                    
            
            </div>         
        </form>
<br><br><br><br><br>
";
    }

    // line 278
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 279
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/rectorpage/css/rectorpage.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />    
<link href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-upload-master/css/fileinput.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  type=\"text/css\">
";
    }

    // line 285
    public function block_javascripts($context, array $blocks = array())
    {
        // line 286
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://code.jquery.com/ui/1.11.3/jquery-ui.js\"></script>  
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachestimation/js/autocomplete.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css\">
        <script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/rectorpage/js/rectorpage.js"), "html", null, true);
        echo "\"></script>
        <!--init plugin-->
        <script>
        function ajouterProximite(id){
\t\tvar select_prox = \$(\"#coach_annoncebundle_annonce_proximite  option[value=\"+id+\"]\").prop(\"selected\");
\t\t\tif(select_prox == true){
\t\t\t \$(\"#coach_annoncebundle_annonce_proximite  option[value=\"+id+\"]\").attr(\"selected\", false);
\t\t\t}else{
\t\t\t \$(\"#coach_annoncebundle_annonce_proximite  option[value=\"+id+\"]\").attr(\"selected\", true);
\t\t\t}
\t\t};
\t\tfunction ajouterLoisirAnnonce(id){
\t\tvar select_prox = \$(\"#coach_annoncebundle_annonce_loisirAnnonce  option[value=\"+id+\"]\").prop(\"selected\");
\t\t\tif(select_prox == true){
\t\t\t \$(\"#coach_annoncebundle_annonce_loisirAnnonce  option[value=\"+id+\"]\").attr(\"selected\", false);
\t\t\t}else{
\t\t\t \$(\"#coach_annoncebundle_annonce_loisirAnnonce  option[value=\"+id+\"]\").attr(\"selected\", true);
\t\t\t}\t\t
\t\t};
\t\t\$('input[type=file]').simpleFilePreview();
                
                function submitform()
                {
                    var typeAnnonce   = document.myform.coach_annoncebundle_annonce_typeAnnonce.value;
                    var nbPieces      = document.myform.coach_annoncebundle_annonce_nbPieces.value;
                    var nbChambre     = document.myform.coach_annoncebundle_annonce_nbChambre.value;
                    var classAnnonce  = document.myform.coach_annoncebundle_annonce_classAnnonce.value;
                    var optionAnnonce = document.myform.coach_annoncebundle_annonce_optionAnnonce.value;
                    var cp            = document.myform.coach_annoncebundle_annonce_cp.value;
                    var ville         = document.myform.coach_annoncebundle_annonce_ville.value;
                    var adresse       = document.myform.coach_annoncebundle_annonce_adresse.value;
                    var titre         = document.myform.coach_annoncebundle_annonce_titre.value;
                    var prix          = document.myform.coach_annoncebundle_annonce_prix.value;
                    var surface       = document.myform.coach_annoncebundle_annonce_surface.value;
                    var tel1          = document.myform.coach_annoncebundle_annonce_tel1.value;
                    var description   = document.myform.coach_annoncebundle_annonce_description.value;
                    var email         = document.myform.coach_annoncebundle_annonce_annonceur_email.value;
                    var password_clear= document.myform.coach_annoncebundle_annonce_annonceur_password_clear.value;
                    if(!typeAnnonce){
                        \$('html,body').animate({scrollTop: 300 }, 'slow');
                    }
                    else if(!nbPieces){          
                        \$('html,body').animate({scrollTop: 300}, 'slow');
                    }
                    else if(!nbChambre){
                        \$('html,body').animate({scrollTop: 300}, 'slow');
                    }
                    else if(!classAnnonce){
                        \$('html,body').animate({scrollTop: 300}, 'slow');
                    }
                    else if(!optionAnnonce){
                        \$('html,body').animate({scrollTop: 300}, 'slow');
                    }
                    else if(!cp){
                        \$('html,body').animate({scrollTop: 700}, 'slow');
                    }
                    else if(!ville){
                        \$('html,body').animate({scrollTop: 700}, 'slow');
                    }
                    else if(!adresse){
                        \$('html,body').animate({scrollTop: 700}, 'slow');
                    }
                    else if(!titre){
                        \$('html,body').animate({scrollTop: 900}, 'slow');
                    }
                    else if(!prix){
                        \$('html,body').animate({scrollTop: 900}, 'slow');
                    }
                    else if(!surface){
                        \$('html,body').animate({scrollTop: 900}, 'slow');
                    }
                    else if(!tel1){
                        \$('html,body').animate({scrollTop: 900}, 'slow');
                    }
                    else if(!description){
                        \$('html,body').animate({scrollTop: 900}, 'slow');
                    }
                    else if(!email){
                    }
                    else if(!password_clear){
                    }
                    else{
                        document.myform.submit();
                    }
                  
                }
        </script>
";
    }

    public function getTemplateName()
    {
        return "CoachAnnonceBundle:Annonce:edit_annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 291,  492 => 289,  487 => 287,  482 => 286,  479 => 285,  473 => 283,  469 => 282,  465 => 281,  461 => 280,  456 => 279,  453 => 278,  441 => 270,  430 => 261,  418 => 253,  407 => 245,  396 => 237,  392 => 235,  389 => 234,  377 => 225,  366 => 217,  355 => 209,  351 => 207,  349 => 206,  338 => 198,  327 => 190,  316 => 182,  301 => 170,  286 => 158,  273 => 148,  262 => 140,  251 => 132,  233 => 117,  221 => 107,  219 => 100,  209 => 92,  207 => 84,  191 => 72,  176 => 70,  172 => 69,  162 => 62,  159 => 61,  144 => 60,  140 => 59,  130 => 52,  122 => 47,  116 => 44,  108 => 39,  102 => 36,  92 => 29,  68 => 28,  41 => 3,  38 => 2,  11 => 1,);
    }
}
