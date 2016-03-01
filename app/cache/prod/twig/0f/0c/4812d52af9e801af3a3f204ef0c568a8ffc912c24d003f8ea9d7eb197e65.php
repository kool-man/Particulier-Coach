<?php

/* CoachAnnonceBundle:Annonce:details.html.twig */
class __TwigTemplate_0f0c4812d52af9e801af3a3f204ef0c568a8ffc912c24d003f8ea9d7eb197e65 extends Twig_Template
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
                <li><a title=\"envoyer par e-mail\" data-toggle=\"modal\" data-target=\"#message-modal\"><i class=\"fa fa-envelope\"></i>Envoyer Par E-Mail</a></li>
                <li><a tabindex=\"0\" class=\"number\" role=\"button\"  data-trigger=\"focus\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "tel1", array()), "html", null, true);
        echo "\" title=\"téléphone annonce\"><i class=\"fa fa-phone\"></i>Afficher le numéro</a></li>
                <li><a title=\"créer une alerte\" data-toggle=\"modal\" data-target=\"#alert-modal\"><i class=\"fa fa-info-circle\"></i>Créer une alerte</a></li>
                <li><a title=\"Imprimer annonce\" class=\"print-page\"><i class=\"fa fa-print\"></i>Imprimer</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\" title=\"publier vos annonces immobilières\"><i class=\"fa fa-arrow-circle-left\"></i>Retour aux Annonces</a></li>
            </ul>
        </div>
    </div>
    <div class=\"col-md-9\">
        <div id=\"owl-galerie\" class=\"owl-carousel owl-theme\">
\t\t\t ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "mesImages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            echo "\t\t\t\t<div class=\"item\"><img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" > </div>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
    <div class=\"col-md-12\">
        <h4 class=\"br-title\">Description</h4>
        <div class=\"row\">
            <div class=\"col-md-2\">
\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "mesImages", array()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 30
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\" alt=\"\"> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
            <div class=\"col-md-10\">
                <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo ". </p>
            </div>
        </div>
    </div>
    <div class=\"col-md-12 mrg-t-20\">
        <h4 class=\"br-title\">Caractéristiques</h4>
        <table class=\"table table-hover table-bordered caract\">
            <tbody>
                <tr>
                    <td>Date</td>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "createdAt", array()), "full", "none"), "html", null, true);
        echo "</td>
                    <td>Ville</td>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "ville", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Prix</td>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo " Euro</td>                
                    <td>Nature</td>
                    <td>                           
                    ";
        // line 53
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeAnnonce", array()) == "1")) {
            // line 54
            echo "                        Maison
                    ";
        } elseif (($this->getAttribute(        // line 55
(isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeAnnonce", array()) == "2")) {
            // line 56
            echo "                        Appartement
                    ";
        } elseif (($this->getAttribute(        // line 57
(isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeAnnonce", array()) == "3")) {
            // line 58
            echo "                        Bureau
                    ";
        } elseif (($this->getAttribute(        // line 59
(isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeAnnonce", array()) == "4")) {
            // line 60
            echo "                        Commerce
                    ";
        }
        // line 62
        echo "                    
                    </td>
                </tr>
                 <tr>
                    <td>Pieces</td>
                    <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nbPieces", array()), "html", null, true);
        echo " pieces - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nbChambre", array()), "html", null, true);
        echo " chambres</td>
                
                    <td>Surface</td>
                    <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "surface", array()), "html", null, true);
        echo " m2</td>
                </tr>
                 <tr>
                    <td>Options</td>
                    <td>
                        ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "loisirAnnonce", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["loisir"]) {
            // line 76
            echo "                            ";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loisir"], "name", array()) . " "), "html", null, true);
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </td>
               
                       <td>Les services a proximité</td>
                    <td>
                        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "proximite", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["proximite"]) {
            // line 83
            echo "                            ";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["proximite"], "name", array()) . " "), "html", null, true);
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proximite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t\t\t
                    </td>
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/wenergie.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    ";
        // line 99
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "1")) {
            // line 100
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-A", "A - moins de 50");
            // line 101
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "2")) {
            // line 102
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-B", "B - de 51 à 90");
            // line 103
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "3")) {
            // line 104
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-C", "C - de 91 à 150");
            // line 105
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "4")) {
            // line 106
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-D", "D - de 151 à 230");
            // line 107
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "5")) {
            // line 108
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-E", "E - de 231 à 330");
            // line 109
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "classAnnonce", array()) == "6")) {
            // line 110
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-F", "F - de 331 à 450");
            echo "    
                    ";
        } else {
            // line 112
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-G", "G - 451 et plus");
            // line 113
            echo "                    ";
        }
        // line 114
        echo "                    <div class=\"wow fadeInRight class-energie ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 115
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
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/genergie.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    ";
        // line 125
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "1")) {
            // line 126
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-A", "A - moins de 5");
            // line 127
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "2")) {
            // line 128
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-B", "B - de 6 à 10");
            // line 129
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "3")) {
            // line 130
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-C", "C - de 11 à 20");
            // line 131
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "4")) {
            // line 132
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-D", "D - de 21 à 35");
            // line 133
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "5")) {
            // line 134
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-E", "E - de 36 à 55");
            // line 135
            echo "                    ";
        } elseif (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "optionAnnonce", array()) == "6")) {
            // line 136
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-F", "F - de 56 à 80");
            echo "    
                    ";
        } else {
            // line 138
            echo "                        ";
            list($context["class"], $context["valeur"]) =             array("class-G", "G - plus de 80");
            // line 139
            echo "                    ";
        }
        // line 140
        echo "                    <div class=\"wow fadeInRight class-energie ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 141
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
            <!--<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41989.2988051699!2d2.337355947168431!3d48.87096291946296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2stn!4v1421071048618\" frameborder=\"0\" style=\"border:0\"></iframe>-->

            ";
        // line 154
        if ((($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "villeid", array()), "longitudedeg", array()) >= 0) && ($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "villeid", array()), "latitudedeg", array()) >= 0))) {
            // line 155
            echo "            <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25545.665561922993!2d";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "villeid", array()), "longitudedeg", array()), "html", null, true);
            echo "!3d";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "villeid", array()), "latitudedeg", array()), "html", null, true);
            echo "!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2stn!4v1453840136096\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            ";
        } else {
            // line 157
            echo "            <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25545.665561922993!2d2.337355947168431!3d48.87096291946296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2stn!4v1453840136096\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            ";
        }
        // line 159
        echo "        </div>
    </div>
</div>
<br>
<br>
<div id=\"ohsnap\"></div>
<div class=\"modal fade\" id=\"alert-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">Créer une alerte immobilier</h4>
      </div>
      <div class=\"modal-body\">
\t\t<div class=\"col-md-12\">
\t\t<p>Créez un compte pour suivre vos annonces coup de cour;</p>
\t\t<div class=\"alert alert-danger mrg-tb-20\" role=\"alert\">Oh snap! Change a few things up and try submitting again.</div>-->
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t\t<form class=\"form mrg-tb-20\">
\t\t\t<div class=\"col-md-4\">
                <label>Mail</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Mail\">
                    </label>
                </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
            <label>Mot de passe</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<span class=\"input-tr-addon\"><i class=\"fa fa-lock\"></i></span>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Mot de passe\">
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t<div class=\"clearfix\"></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"button\" class=\"btn btn-success\">Créer une alerte</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"message-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">Envoyer un message</h4>
      </div>
      <div class=\"modal-body\">
\t\t<div class=\"col-md-12\">
\t\t<p>Créez un compte pour suivre vos annonces coup de cour;</p>
\t\t\t<div class=\"alert alert-danger mrg-tb-20\" role=\"alert\">Oh snap! Change a few things up and try submitting again.</div>-->
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t\t<form class=\"form mrg-tb-20\" id=\"myForm\" action=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_send_message_annonce", array("ann" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<label>E-Mail</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                       ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Email")));
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<label>Message</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<span class=\"input-tr-addon\"><i class=\"fa fa-lock\"></i></span>
                        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("class" => " form-control", "placeholder" => "Message")));
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
            ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>
\t\t<div class=\"clearfix\"></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" onclick=\"submitForm()\" class=\"btn btn-success\">Envoyer</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"connexion-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">Merci de connecter pour activer cette option !</h4>
      </div>
      <div class=\"modal-body\">\t
\t\t<div class=\"col-md-12\">\t
                    <div class=\"col-md-2\">                        
                    </div>
                    <div class=\"col-md-8\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <button type=\"button\" class=\"btn btn-success\">Connectez maintenant !</button>
                    </div>
                    <div class=\"col-md-2\">                        
                    </div>
                </div>
                <div class=\"clearfix\"></div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
";
    }

    // line 283
    public function block_javascripts($context, array $blocks = array())
    {
        // line 284
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 285
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

    // line 322
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 323
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
<link href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-alert/style-snap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 326
    public function block_pub($context, array $blocks = array())
    {
        // line 327
        echo "<div id=\"ohsnap\"></div>
";
    }

    public function getTemplateName()
    {
        return "CoachAnnonceBundle:Annonce:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 327,  586 => 326,  580 => 324,  576 => 323,  573 => 322,  532 => 285,  527 => 284,  524 => 283,  485 => 248,  478 => 244,  464 => 233,  453 => 225,  447 => 224,  380 => 159,  376 => 157,  368 => 155,  366 => 154,  350 => 141,  345 => 140,  342 => 139,  339 => 138,  333 => 136,  330 => 135,  327 => 134,  324 => 133,  321 => 132,  318 => 131,  315 => 130,  312 => 129,  309 => 128,  306 => 127,  303 => 126,  301 => 125,  297 => 124,  285 => 115,  280 => 114,  277 => 113,  274 => 112,  268 => 110,  265 => 109,  262 => 108,  259 => 107,  256 => 106,  253 => 105,  250 => 104,  247 => 103,  244 => 102,  241 => 101,  238 => 100,  236 => 99,  232 => 98,  217 => 85,  208 => 83,  204 => 82,  198 => 78,  189 => 76,  185 => 75,  177 => 70,  169 => 67,  162 => 62,  158 => 60,  156 => 59,  153 => 58,  151 => 57,  148 => 56,  146 => 55,  143 => 54,  141 => 53,  135 => 50,  128 => 46,  123 => 44,  110 => 34,  106 => 32,  97 => 30,  93 => 29,  85 => 23,  76 => 21,  72 => 20,  63 => 14,  57 => 11,  46 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
