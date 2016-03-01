<?php

/* CoachAnnonceBundle:Annonce:details_preview.html.twig */
class __TwigTemplate_bec96c397578d837f240c371d70446e6b857187e8c4ccdd84ed6430a999ca253 extends Twig_Template
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
            'pub' => array($this, 'block_pub'),
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
        <div class=\"title-details\"><span>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "</span><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo " Euro</span></div>
    </div>
    <div class=\"col-md-3\">
        <div class=\" wells list-options nmrg\">
            <ul>
                <li><a type=\"submit\" name=\"Publier\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_activer", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\" title=\"publier votre annonce\" class=\"btn btn-success\">Publier mon annonce</a></li>
                <li><a class=\"btn btn-warning\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_editer", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\" title=\"modifier votre annonce\">Modifier</a></li>
            </ul>
        </div>
    </div>    
    <div class=\"col-md-9\">
        <div id=\"owl-galerie\" class=\"owl-carousel owl-theme\">
\t\t\t ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "mesImages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 18
            echo "\t\t\t\t<div class=\"item\"><img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" > </div>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>
    <div class=\"col-md-12\">
        <h4 class=\"br-title\">Description</h4>
        <div class=\"row\">
            <div class=\"col-md-2\">
\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "mesImages", array()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 27
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\" alt=\"\"> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
            <div class=\"col-md-10\">
                <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo ". </p>
            </div>
        </div>
    </div>
\t<div class=\"col-md-12 mrg-t-20\">
        <h4 class=\"br-title\">Caractéristiques</h4>
        <table class=\"table table-hover table-bordered caract\">
            <tbody>
                <tr>
                    <td>Date</td>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "createdAt", array()), "full", "none"), "html", null, true);
        echo "</td>
                    <td>Ville</td>
                    <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "ville", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Prix</td>
                    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo " Euro</td>                
                    <td>Nature</td>
                    <td>                           
                    ";
        // line 50
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeAnnonce", array()) == "1")) {
            // line 51
            echo "                        Maison
                    ";
        } elseif (($this->getAttribute(        // line 52
(isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeAnnonce", array()) == "2")) {
            // line 53
            echo "                        Appartement
                    ";
        } elseif (($this->getAttribute(        // line 54
(isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeAnnonce", array()) == "3")) {
            // line 55
            echo "                        Bureau
                    ";
        } elseif (($this->getAttribute(        // line 56
(isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeAnnonce", array()) == "4")) {
            // line 57
            echo "                        Commerce
                    ";
        }
        // line 59
        echo "                    </td>
                </tr>
                 <tr>
                    <td>Pieces</td>
                    <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nbPieces", array()), "html", null, true);
        echo " pieces - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nbChambre", array()), "html", null, true);
        echo " chambres</td>
                    <td>Surface</td>
                    <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "surface", array()), "html", null, true);
        echo " m2</td>
                </tr>
                 <tr>
                    <td>Options</td>
                    <td>
                        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "loisirAnnonce", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["loisir"]) {
            // line 71
            echo "                            ";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loisir"], "name", array()) . " "), "html", null, true);
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </td>
                       <td>Les services a proximité</td>
                    <td>
                        ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "proximite", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["proximite"]) {
            // line 77
            echo "                            ";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["proximite"], "name", array()) . " "), "html", null, true);
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proximite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class=\"col-md-12 mrg-t-20\">
        <h4 class=\"br-title\">Consommation d'energie</h4>
        <div class=\"row energie\">
            <div class=\"col-md-6\">
                <div class=\"energie-content\">
                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/wenergie.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    ";
        // line 90
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "1")) {
            // line 91
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-A", "A - moins de 50");
            // line 92
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "2")) {
            // line 93
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-B", "B - de 51 à 90");
            // line 94
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "3")) {
            // line 95
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-C", "C - de 91 à 150");
            // line 96
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "4")) {
            // line 97
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-D", "D - de 151 à 230");
            // line 98
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "5")) {
            // line 99
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-E", "E - de 231 à 330");
            // line 100
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "6")) {
            // line 101
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-F", "F - de 331 à 450");
            echo "    
                    ";
        } else {
            // line 103
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-G", "G - 451 et plus");
            // line 104
            echo "                    ";
        }
        // line 105
        echo "                    <div class=\"wow fadeInRight class-energie ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["valeur"]) ? $context["valeur"] : $this->getContext($context, "valeur")), "html", null, true);
        echo "
                    </div>
                </div>
                <br>
                <p><strong>Indice de mesure: kWhEp/m2.an</strong></p>
                <p>Conommations énergitiques (en énergie primaire) pour le chauffage, la production d'eau chaude sanitaire et le refroidissement</p>
            </div>
            <div class=\"col-md-6\">
                 <div class=\"energie-content\">
                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/genergie.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    ";
        // line 116
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "1")) {
            // line 117
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-A", "A - moins de 5");
            // line 118
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "2")) {
            // line 119
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-B", "B - de 6 à 10");
            // line 120
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "3")) {
            // line 121
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-C", "C - de 11 à 20");
            // line 122
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "4")) {
            // line 123
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-D", "D - de 21 à 35");
            // line 124
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "5")) {
            // line 125
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-E", "E - de 36 à 55");
            // line 126
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "6")) {
            // line 127
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-F", "F - de 56 à 80");
            echo "    
                    ";
        } else {
            // line 129
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-G", "G - plus de 80");
            // line 130
            echo "                    ";
        }
        // line 131
        echo "                    <div class=\"wow fadeInRight class-energie ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["valeur"]) ? $context["valeur"] : $this->getContext($context, "valeur")), "html", null, true);
        echo "
                    </div>
                </div>
                <br>
                <p><strong>Indice de mesure: kgeqCO2/m2.an</strong></p>
                <p>Emissions de gaz a effet de serre (GES) pour le chauffage, la production d'eau chaude sanitaire et le refroidissement</p>
            </div>
        </div>
        <div class=\"col-md-12 mrg-t-20 map\">
            <h4 class=\"br-title\">Google Map</h4>
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41989.2988051699!2d2.337355947168431!3d48.87096291946296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2stn!4v1421071048618\" frameborder=\"0\" style=\"border:0\"></iframe>
        </div>
    </div>      
</div>
<br><br>
<div id=\"ohsnap\"></div>
";
    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        // line 150
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    \t<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-alert/ohsnap.js"), "html", null, true);
        echo "\"></script>
        <script>
\t\t\t\$('.print-page').click(function(e){
\t\t\t\te.preventDefault();
\t\t\t\t window.print();
\t\t\t});
\t\t\t\$('.list-options, header .row:first-child,.br-title, footer,.img-responsive, .owl-buttons, .row.energie').addClass('hidden-print');
\t\t\t\$('.list-options a.number').popover('hide');
\t\t\t
\t\t\t//add favorite
\t\t\t\$('.favorite').on('click', function(e){
\t\t\t\te.preventDefault();
\t\t\t\tohSnap('<i class=\"fa fa-check-circle fa-4\"></i>&nbsp;&nbsp;Ajout réussi a mes favoris', 'green');
\t\t\t});
                        function submitForm(){                            
                            var message = document.getElementById(\"application_sonata_userbundle_message_message\");
                            if(checkEmail()){
                                if(message.value){
                                    document.getElementById(\"myForm\").submit();
                                }else{
                                    alert('Merci de remplir le champ message ...');
                                }
                            } 
                        }
                        function checkEmail() {
                            var email = document.getElementById(\"application_sonata_userbundle_message_email\");
                            var filter = /^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;

                            if (!filter.test(email.value)) {
                                alert('Merci de saisir un email valide');
                                email.focus;
                                return false;
                            }
                            return true;
                        }
        </script>
";
    }

    // line 188
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 189
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
<link href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-alert/style-snap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 192
    public function block_pub($context, array $blocks = array())
    {
        // line 193
        echo "<div id=\"ohsnap\"></div>
";
    }

    public function getTemplateName()
    {
        return "CoachAnnonceBundle:Annonce:details_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 193,  424 => 192,  418 => 190,  414 => 189,  411 => 188,  370 => 151,  365 => 150,  362 => 149,  341 => 132,  336 => 131,  333 => 130,  330 => 129,  324 => 127,  321 => 126,  318 => 125,  315 => 124,  312 => 123,  309 => 122,  306 => 121,  303 => 120,  300 => 119,  297 => 118,  294 => 117,  292 => 116,  288 => 115,  276 => 106,  271 => 105,  268 => 104,  265 => 103,  259 => 101,  256 => 100,  253 => 99,  250 => 98,  247 => 97,  244 => 96,  241 => 95,  238 => 94,  235 => 93,  232 => 92,  229 => 91,  227 => 90,  223 => 89,  211 => 79,  202 => 77,  198 => 76,  193 => 73,  184 => 71,  180 => 70,  172 => 65,  165 => 63,  159 => 59,  155 => 57,  153 => 56,  150 => 55,  148 => 54,  145 => 53,  143 => 52,  140 => 51,  138 => 50,  132 => 47,  125 => 43,  120 => 41,  107 => 31,  103 => 29,  94 => 27,  90 => 26,  82 => 20,  73 => 18,  69 => 17,  60 => 11,  56 => 10,  46 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
