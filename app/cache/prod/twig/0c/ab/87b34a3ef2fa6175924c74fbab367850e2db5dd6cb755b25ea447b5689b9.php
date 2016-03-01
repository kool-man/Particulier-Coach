<?php

/* CoachAnnonceBundle:Annonce:search.html.twig */
class __TwigTemplate_0cab87b34a3ef2fa6175924c74fbab367850e2db5dd6cb755b25ea447b5689b9 extends Twig_Template
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
    <div class=\"col-md-12\">
        <h3 class=\"title-page\">Chercher une annonce</h3>
    </div>
<div class=\" col-md-8\">
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"wells search-form\">
                <div class=\"row\">
                    <div class=\"col-sm-3\">
                        <p><span>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label" => "Ville(s)"));
        echo "</span></p>
                    </div>
                    <div class=\"col-sm-9\">
                        <div class=\"form-group\">
                            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control select-2", "data-placeholder" => "Selectionner Plusiers villes")));
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <!--colone-1-->
                        <div class=\"col-sm-3\">
                            <p><span>Prix</span> entre</p>
                        </div>
                        <div class=\"col-sm-4 col-xs-6\">
                            <div class=\"form-group\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-xs-1\">
                                <p>et</p>
                            </div>
                            <div class=\"col-md-4 col-xs-6\">
                                <div class=\"form-group\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <p><span>Surface</span> entre</p>
                                </div>
                                <div class=\"col-sm-4 col-xs-6\">
                                    <div class=\"form-group\">
                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surfaceMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    </div>
                                    <div class=\"col-xs-1\">
                                    <p>et</p>
                                    </div>
                                    <!--colone-2-->
                                    <div class=\"col-md-4 col-xs-6\">
                                    <div class=\"form-group\">
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surfaceMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-3\">
                                            <p><span>Pièces</span> entre</p>
                                        </div>
                                        <div class=\"col-sm-4 col-xs-6\">
                                            <div class=\"form-group\">
                                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPiecesMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                            </div>
                                            <div class=\"col-xs-1\">
                                                <p>et</p>
                                            </div>
                                            <div class=\"col-md-4 col-xs-6\">
                                                <div class=\"form-group\">
                                                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPiecesMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                    </div>
                                            </div>
                                            </div>
                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 78
            echo "                                    <div class=\"col-md-3\">
                                    <div class=\"field-block\"><strong>";
            // line 79
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</strong>
                                    ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["value"], array(), "array"), 'widget', array("attr" => array("hidden" => "hidden", "style" => "visibility: hidden")));
            echo "
                                    <p class=\"field switch\">
                                     <label id=\"form_";
            // line 82
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" onclick=\"selectTypeAnnonce(this.id,this.htmlFor) ;\" for=\"radio1\" class=\"cb-enable selected\"><span>Oui</span></label>
                                     <label id=\"form_";
            // line 83
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" onclick=\"selectTypeAnnonce(this.id,this.htmlFor) ;\" for=\"radio2\" class=\"cb-disable\"><span>Non</span></label>
                                    </p>
                                    </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                        </div>
                        <div class=\"row\">
                        <div class=\"col-md-4 col-md-offset-8 mrg-t-10\">
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget', array("attr" => array("value" => "Recherche", "class" => "btn btn-success btn-block")));
        echo "
                        </div>
                        </div>
                        </div>
                        ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <div class=\"col-md-4\">
                        <div class=\"col-md-12 newsletter\">
                            <p class=\"center\">Créer votre alerte mail pour recevoir les annonces</p>
                                <div class=\"absolute wow fadeInUp\">
                                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/newsletter.png"), "html", null, true);
        echo "\" alt=\"Créer votre alerte mail pour recevoir les annonces\" class=\"img-responsive\">
                                </div>
                                <form class=\"form-inline wow fadeInDown\">
                                    <div class=\"form-group\">
                                        <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
                                            <input type=\"email\" class=\"form-control\" id=\"mail\" placeholder=\"Enter email\">
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-success\">envoyer</button>
                                </form>
                                </div>
                                <div class=\"col-md-12 calculette\">
                                    <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\">
                                        <p>Calculette de crédit et frais de notaire</p>
                                    </a>
                                </div>
                                </div>
                                <div class=\"a-la-une col-md-12\">
                                    <div class=\"container-a-la-une\">
                                                        <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\" class=\"img\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/biens/alaune.png"), "html", null, true);
        echo "\" alt=\"Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain\" class=\"wow fadeIn\" data-wow-duration=\"2s\"></a>
                                                        <h4 class=\"wow fadeInLeft\" data-wow-delay=\"0.2s\"><a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\"><i class=\"fa fa-tags\"></i>A LA UNE</a></h4>
                                                        <h5 class=\"wow fadeInLeft\" data-wow-delay=\"0.5s\"><a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\">Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</a></h5>
                                                        <h6 class=\"wow fadeInLeft\" data-wow-delay=\"0.7s\"><a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\">Prix : 200.000</a> </h6>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-9\">
                                                    <div class=\"results\">
                                                        <div class=\"results-bar col-md-12\">
                                                            <div class=\"col-md-7\">
                                                                <p> Resultat de la recherche</p>
                                                            </div>
                                                            <div class=\"col-md-2\">
                                                                <p> Filtrer par</p>
                                                            </div>
                                                            <div class=\"col-md-3\">

                                                                <div class=\"form-group\">
                                                                    <select id=\"filtre\" class=\"form-control\">
                                                                        <option value=\"prix\" selected=\"selected\">Prix</option>
                                                                        <option value=\"nbPieces\">Nombre de pièces</option>
                                                                        <option value=\"surface\">Surface</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                         </div>               
                                                        <div id=\"results\" class=\"row\">
                                                            <div class=\"col-md-12\">
                                                             ";
        // line 147
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta")), "currentPageResults", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 148
            echo "                                                                    <div class=\"media\">
                                                                        <a class=\"media-left\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["e"], "id", array()), "titre" => strtr($this->getAttribute($context["e"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titre", array()), "html", null, true);
            echo "\">
                                                                          ";
            // line 150
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["e"], "mesImages", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titre", array()), "html", null, true);
                echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                                                        </a>
                                                                        <div class=\"media-body\">
                                                                            <h4 class=\"media-heading\"><a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["e"], "id", array()), "titre" => strtr($this->getAttribute($context["e"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titre", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titre", array()), "html", null, true);
            echo "</a></h4>
                                                                            <p>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", array()), "html", null, true);
            echo ".</p>
                                                                            <div class=\"divider\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-md-4\">
                                                                                        <strong>Espace :</strong>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "surface", array()), "html", null, true);
            echo " m²
                                                                                    </div>
                                                                                    <div class=\"col-md-4\">
                                                                                        <strong>Pièces :</strong> S + ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nbChambre", array()), "html", null, true);
            echo "
                                                                                    </div>
                                                                                    <div class=\"col-md-4\">
                                                                                        <strong> Prix :</strong> ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prix", array()), "html", null, true);
            echo " Euro
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                                            </div>
                                                            </div>
                                                            <div class=\"pagerfanta\">";
        // line 175
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta")), "twitter_bootstrap3");
        echo "</div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-12\">
                                                                <div class=\"title-bar\">
                                                                    <h3> Actualités Immobilières</h3>
                                                                </div>
                                                                <div id=\"actualite-slide\" class=\"carousel slide\" data-ride=\"carousel\">
                                                                   <div class=\"carousel-inner\" role=\"listbox\">
                                                                        <div class=\"item active\">
                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>

                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>

                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>

                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>

                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>
                                                                        </div> 
                                                                        <div class=\"item\">
                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>

                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>

                                                                            <div class=\"actualite\">
                                                                                <h4>Titre de l'actualité</h4>
                                                                                <p>Villa 1200 m² à Paris, 6 chambres, 2 Salles de bain</p>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <ol class=\"carousel-indicators\">
                                                                        <li data-target=\"#actualite-slide\" data-slide-to=\"0\" class=\"active\"></li>
                                                                        <li data-target=\"#actualite-slide\" data-slide-to=\"1\"></li>
                                                                        <li data-target=\"#actualite-slide\" data-slide-to=\"2\"></li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div><!--row for carroussl-->
                                                        <div class=\"right-pub\">
                                                            <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/pub-banner-optimum.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                                            <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/tuni-architecte.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
";
    }

    // line 254
    public function block_javascripts($context, array $blocks = array())
    {
        // line 255
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
                                                <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/select2.min.js"), "html", null, true);
        echo "\"></script>
                                                <script>
                                                    \$(\".select-2\").select2(); 
                                                    </script>
                                                    <script>
                                                        \$(document).ready(function() {
                                                            \$(\"#filtre\").change(function() {
                                                                var selected = \$(\"#filtre option:selected\").val();
                                                                var form = \$(\"form[name='form']\").serialize();
                                                                \$(\"#results\").fadeOut('fast');
                                                                \$.ajax({
                                                                    'method': 'POST',
                                                                    'url': \"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search_result");
        echo "-filter/\"+selected,
                                                                    'data': form,
                                                                    success: function(data) {
                                                                        \$(\"#results\").html(data).fadeIn(1000);
                                                                    }
                                                                });
                                                            });
                                                        });
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfunction selectTypeAnnonce(id,varFor){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t//var id = MyObject.id;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t//var varFor = MyObject.htmlFor ;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(varFor==\"radio1\"){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\" div[id=\"+id+\"] input[id=\"+id+\"_0]\").prop(\"checked\", true);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\" div[id=\"+id+\"] input[id=\"+id+\"_1]\").prop(\"checked\", false);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\" div[id=\"+id+\"] input[id=\"+id+\"_1]\").prop(\"checked\", true);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\" div[id=\"+id+\"] input[id=\"+id+\"_0]\").prop(\"checked\", false);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t};
                                                        </script>
";
    }

    // line 290
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 291
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
                                                        <link href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                                                        <link href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    public function getTemplateName()
    {
        return "CoachAnnonceBundle:Annonce:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 293,  484 => 292,  479 => 291,  476 => 290,  450 => 268,  435 => 256,  430 => 255,  427 => 254,  416 => 247,  412 => 246,  338 => 175,  334 => 173,  321 => 166,  315 => 163,  309 => 160,  302 => 156,  294 => 155,  290 => 153,  279 => 151,  275 => 150,  269 => 149,  266 => 148,  262 => 147,  234 => 122,  230 => 121,  226 => 120,  220 => 119,  210 => 112,  196 => 101,  187 => 95,  180 => 91,  175 => 88,  164 => 83,  160 => 82,  155 => 80,  151 => 79,  148 => 78,  144 => 77,  136 => 72,  125 => 64,  112 => 54,  100 => 45,  87 => 35,  76 => 27,  62 => 16,  55 => 12,  48 => 8,  41 => 3,  38 => 2,  11 => 1,);
    }
}
