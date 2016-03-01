<?php

/* CoachAnnonceBundle:Annonce:deposer.html.twig */
class __TwigTemplate_287f06aa8078b8705334651bf10737728d078c2278e985b8a82cda43e56beb40 extends Twig_Template
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
        <h1 class=\"title-page\">D&eacute;poser une annonce</h1>
        <div class=\"col-md-12 alert alert-success\">
            <i class=\"fa fa-home\"></i>&nbsp;&nbsp;<strong>Vendre en quelques minutes votre immobilier</strong>
         </div>
         <div class=\"col-md-12\">
            <!--bs-wizard-->
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("coach_annonce_deposez_ajouter");
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
\t   ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div id=\"step-1-form\">
            <div class=\"wells col-md-12\">
                <p><strong>Caract&eacute;ristique du bien (*)</strong></p>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeAnnonce", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classAnnonce", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-4\">                        
                        <div class=\"form-group\">
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPieces", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "optionAnnonce", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>                       
                    </div>
                    <div class=\"col-md-4\"> 
                        <div class=\"form-group\">
\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbChambre", array(), "array"), 'widget', array("attr" => array("class" => " form-control")));
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"wells col-md-12\" id=\"transport-check\">
                <p><strong>Proximit&eacute; de transport </strong></p>
\t\t\t\t";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proximites"]) ? $context["proximites"] : $this->getContext($context, "proximites")));
        foreach ($context['_seq'] as $context["_key"] => $context["proximite"]) {
            // line 61
            echo "\t\t\t\t<a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proximite"], "id", array()), "html", null, true);
            echo "\" class=\"icheck\" onclick=\"ajouterProximite(this.id) ;\"><i class=\"fa fa-circle-o\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proximite"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proximite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "               
\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proximite", array(), "array"), 'widget', array("attr" => array("hidden" => "hidden", "style" => "visibility: hidden")));
        echo "
                <div class=\"clearfix\"></div>
            </div>            
\t\t \t<div class=\"wells col-md-12\" id=\"options-check\">
\t\t\t\t\t<p><strong>Avez-vous ?</strong></p>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loisirAnnonces"]) ? $context["loisirAnnonces"] : $this->getContext($context, "loisirAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["loisirAnnonce"]) {
            // line 71
            echo "\t\t\t\t\t<a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loisirAnnonce"], "id", array()), "html", null, true);
            echo "\" class=\"icheck\" onclick=\"ajouterLoisirAnnonce(this.id) ;\"><i class=\"fa fa-circle-o\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loisirAnnonce"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisirAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "               \t\t\t   
\t\t\t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loisirAnnonce", array(), "array"), 'widget', array("attr" => array("hidden" => "hidden", "style" => "visibility: hidden")));
        echo "
\t\t\t</div>
\t\t\t</div><div class=\"clearfix\"></div>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Adresse compl&egrave;te")));
        echo "
                            </label>
                        </div>
                    </div>                    
                </div>          
            </div>
\t\t</div>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "type" => "number", "value" => "", "placeholder" => "Prix (*)")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "type" => "number", "value" => "", "placeholder" => "Surface (*)")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel1", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "type" => "tel", "maxlength" => "10", "placeholder" => "Tel 1 (*)")));
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
\t\t\t\t                ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array(), "array"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "\t
\t\t\t\t\t\t\t</label>
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
        // line 181
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
        // line 189
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
        // line 197
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
        // line 205
        if (((isset($context["ordre"]) ? $context["ordre"] : $this->getContext($context, "ordre")) > 0)) {
            // line 206
            echo "                    <div class=\"row\">
                        <div class=\"col-md-4\">
                                ";
            // line 208
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
            // line 216
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
            // line 224
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
        // line 233
        echo "                    ";
        if (((isset($context["ordre"]) ? $context["ordre"] : $this->getContext($context, "ordre")) > 1)) {
            // line 234
            echo "                    <div class=\"row\">
                        <div class=\"col-md-4\">
                                ";
            // line 236
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
            // line 244
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
            // line 252
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
        echo "            </div>        
            <div class=\"wells col-md-12\">
                <p><strong>Coordonn&eacute;es (*)</strong></p>
                <div class=\"row\">            
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                                ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annonceur", array()), "email", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Email")));
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                         <div class=\"form-group\">
                            <label>
                                <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                                ";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annonceur", array()), "password_clear", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Mot de passe")));
        echo "
                            </label>
                        </div>
                    </div>
                           
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 mrg-t-20\">
                         <button class=\"btn btn-success pull-right\" onclick=\"submitform();\" type=\"submit\" >Valider  <i class=\"fa fa-chevron-right\"></i></button>
                    </div>
                </div>            
                <div class=\"row\">                    
                    <input type=\"hidden\" id=\"coach_annoncebundle_annonce_pack\" name=\"coach_annoncebundle_annonce[pack]\" value=\"";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["ordre"]) ? $context["ordre"] : $this->getContext($context, "ordre")), "html", null, true);
        echo "\">        
                </div>
            </div>                    
            
            </div>         
        </form>
<br><br><br><br><br>
";
    }

    // line 297
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 298
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/rectorpage/css/rectorpage.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />    
<link href=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-upload-master/css/fileinput.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  type=\"text/css\">
";
    }

    // line 304
    public function block_javascripts($context, array $blocks = array())
    {
        // line 305
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <!--fetech JS - JS  special for this page only-->
        <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://code.jquery.com/ui/1.11.3/jquery-ui.js\"></script>  
        <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachestimation/js/autocomplete.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css\">
        <script type=\"text/javascript\" src=\"";
        // line 311
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
\t\t\t
\t\t};\t\t
\t\tfunction ajouterLoisirAnnonce(id){
\t\tvar select_prox = \$(\"#coach_annoncebundle_annonce_loisirAnnonce  option[value=\"+id+\"]\").prop(\"selected\");
\t\t\tif(select_prox == true){
\t\t\t \$(\"#coach_annoncebundle_annonce_loisirAnnonce  option[value=\"+id+\"]\").attr(\"selected\", false);
\t\t\t}else{
\t\t\t \$(\"#coach_annoncebundle_annonce_loisirAnnonce  option[value=\"+id+\"]\").attr(\"selected\", true);
\t\t\t}\t\t
\t\t};
\t\t\$('input[type=file]').simpleFilePreview();              
        </script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/form_annonce.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CoachAnnonceBundle:Annonce:deposer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 333,  516 => 311,  511 => 309,  506 => 307,  500 => 305,  497 => 304,  491 => 302,  487 => 301,  483 => 300,  479 => 299,  474 => 298,  471 => 297,  459 => 289,  444 => 277,  433 => 269,  423 => 261,  411 => 252,  400 => 244,  389 => 236,  385 => 234,  382 => 233,  370 => 224,  359 => 216,  348 => 208,  344 => 206,  342 => 205,  331 => 197,  320 => 189,  309 => 181,  295 => 170,  280 => 158,  267 => 148,  256 => 140,  245 => 132,  227 => 117,  215 => 107,  213 => 100,  203 => 92,  201 => 84,  187 => 73,  184 => 72,  173 => 71,  169 => 70,  159 => 63,  156 => 62,  145 => 61,  141 => 60,  131 => 53,  123 => 48,  117 => 45,  109 => 40,  103 => 37,  93 => 30,  69 => 29,  41 => 3,  38 => 2,  11 => 1,);
    }
}
