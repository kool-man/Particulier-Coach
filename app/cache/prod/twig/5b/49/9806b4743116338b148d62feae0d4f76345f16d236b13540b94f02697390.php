<?php

/* CoachPackBundle:Pack:pack.html.twig */
class __TwigTemplate_5b499806b4743116338b148d62feae0d4f76345f16d236b13540b94f02697390 extends Twig_Template
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
    <div class=\"col-md-4\">
\t\t<div id=\"carousel-package\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<span class=\"vendue\">Vendue</span>
\t\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t<div class=\"item active\">
\t\t\t  <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\" title=\"vente immobilière\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/biens/annonce-ville-piscine.png"), "html", null, true);
        echo "\" alt=\"annonces immobilières\"></a>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t  <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/biens/maison-salon.png"), "html", null, true);
        echo "\" alt=\"particulier à particulier\">
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t  <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("coach_annonce_search");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/coach.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\" class=\"img-responsive\"></a>
\t\t\t</div>
\t\t</div>
\t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "html", null, true);
        echo "</p>
\t</div>
    </div>
    <div class=\"col-md-8\">
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "coaching", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 23
            echo "        <h1 style=\"font-size:28px;\" class=\"nmg-t\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "titre", array()), "html", null, true);
            echo "</h1>
        ";
            // line 24
            if ($this->getAttribute($context["coach"], "point1", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point1", array()), "html", null, true);
                echo "</p>";
            }
            // line 25
            echo "        ";
            if ($this->getAttribute($context["coach"], "point2", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point2", array()), "html", null, true);
                echo "</p>";
            }
            // line 26
            echo "        ";
            if ($this->getAttribute($context["coach"], "point3", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point3", array()), "html", null, true);
                echo "</p>";
            }
            // line 27
            echo "        ";
            if ($this->getAttribute($context["coach"], "point4", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point4", array()), "html", null, true);
                echo "</p>";
            }
            // line 28
            echo "        ";
            if ($this->getAttribute($context["coach"], "point5", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point5", array()), "html", null, true);
                echo "</p>";
            }
            // line 29
            echo "        ";
            if ($this->getAttribute($context["coach"], "point6", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point6", array()), "html", null, true);
                echo "</p>";
            }
            // line 30
            echo "        ";
            if ($this->getAttribute($context["coach"], "point7", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point7", array()), "html", null, true);
                echo "</p>";
            }
            // line 31
            echo "        ";
            if ($this->getAttribute($context["coach"], "point8", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point8", array()), "html", null, true);
                echo "</p>";
            }
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
    <div class=\"col-md-12\">
        <div class=\"table-responsive mrg-tb-30\">
            <table class=\"table\" id=\"pack-table\">
                <thead>
                    <tr>
                        <th></th>
                        ";
        // line 40
        $context["nbPack"] = 0;
        // line 41
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packTitle"]) ? $context["packTitle"] : $this->getContext($context, "packTitle")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 42
            echo "                            ";
            if (($this->getAttribute($context["p"], "ordre", array()) > 2)) {
                // line 43
                echo "                            <th><a href=\"";
                echo $this->env->getExtension('routing')->getPath("coach_reservation_paiement", array("pack" => "3"));
                echo "\" title=\"coaching en ligne\"><div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                echo "</div></a></th>
                            ";
            } else {
                // line 45
                echo "                            <th><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_deposez", array("ordre" => $this->getAttribute($context["p"], "ordre", array()))), "html", null, true);
                echo "\" title=\"pack gratuit - pack star - pack gold\"><div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                echo "</div></a></th>
                            ";
            }
            // line 47
            echo "                        ";
            $context["nbPack"] = ((isset($context["nbPack"]) ? $context["nbPack"] : $this->getContext($context, "nbPack")) + 1);
            // line 48
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) ? $context["packs"] : $this->getContext($context, "packs")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo " 
                    <tr>
                        <td><div>";
            // line 54
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</div></td>
                        ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 56
                echo "                        ";
                if (($context["l"] == "1")) {
                    // line 57
                    echo "                        <td><div class=\"valign\"><i class=\"fa fa-check-circle\"></i></div></td>
                        ";
                } elseif ((                // line 58
$context["l"] == "0")) {
                    // line 59
                    echo "                        <td><div class=\"valign\"><i class=\"fa fa-times\"></i></div></td>
                        ";
                } elseif ((                // line 60
$context["l"] == "-1")) {
                    // line 61
                    echo "                        <td><div class=\"valign\"><i class=\"fa fa-smile-o\"></i></div></td>
                        ";
                } else {
                    // line 63
                    echo "                        <td><div class=\"valign\">";
                    echo twig_escape_filter($this->env, $context["l"], "html", null, true);
                    echo "</div></td>
                        ";
                }
                // line 64
                echo "  
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    
                </tbody>
                <tfoot>
                    <tr>
                        <td><div>* Tarif mensuel TTC</div></td>
                        ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packTitle"]) ? $context["packTitle"] : $this->getContext($context, "packTitle")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 73
            echo "                        ";
            if (($this->getAttribute($context["p"], "price", array()) == 0)) {
                // line 74
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_deposez", array("ordre" => $this->getAttribute($context["p"], "ordre", array()))), "html", null, true);
                echo "\" title=\"pack gratuit\"><div>Gratuit</div></a></td>
                        ";
            } elseif ((($this->getAttribute(            // line 75
$context["p"], "price", array()) < 30) && ($this->getAttribute($context["p"], "price", array()) > 0))) {
                // line 76
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_deposez", array("ordre" => $this->getAttribute($context["p"], "ordre", array()))), "html", null, true);
                echo "\" title=\"pack star - pack gold\"><div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "price", array()), "html", null, true);
                echo " Euro *</div></a></td>
                        ";
            } else {
                // line 78
                echo "                            <td><a href=\"";
                echo $this->env->getExtension('routing')->getPath("coach_reservation_paiement", array("pack" => "3"));
                echo "\" title=\"coaching en ligne\"><div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "price", array()), "html", null, true);
                echo " Euro</div></a></td>
                        ";
            }
            // line 80
            echo "                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<ul id=\"tooltip-text\" style=\"display:none\">
\t<li>Déposez votre annonce immobilière et présenter votre bien immobilier à vendre / à louer (descriptif, localisation, ville, atouts, potentiel, photos, prix, charges de copropriétés, taxe foncière, diagnostics, DPE, diagnostic énergétique, loi carrez</li>\t\t
\t<li>Déposez plus de photos en choisissant une des 3 formules proposées</li>\t\t
\t<li>Remontrez votre annonce immobilière en première position des listes de recherches immobilières</li>\t\t
\t<li>Votre annonce sera diffusée à grande échelle pour un maximum de clients</li>\t\t
\t<li>Imprimez votre dossier de présentation à remettre aux clients lors des visites.</li>\t\t
\t<li>Le site immobilier de votre annonce immobilière permet de donner plus de visibilité par des acquéreur.</li>\t\t
\t<li>Annonce immobilière vidéo - Youtube/Dailymotion donnes plus de visibilité sur google de votre annonce immobilière.</li>\t\t
\t<li>Téléchargez le guide de vente immobilière (conseilles sur la gestion de votre vente)</li>\t\t
\t<li>Le compte client est votre tableau de bord, permettant la gestion et suivi de votre activité</li>\t\t
\t<li>Indique la durée de validité de votre annonce immobiliè</li>\t\t
\t<li>Sans commission - Sans intermédiaire (aucune commission ou supplément sera demandée en cas de vente</li>\t\t\t
</ul>                    
<br>
<br>  
";
    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        // line 104
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    \$('.carousel').carousel();
    \$('#pack-table tr td:first-child div button').attr({
            \"data-container\":\"body\",
            \"data-toggle\":\"popover\",
            \"data-placement\":\"right\",
            \"data-trigger\":\"focus\"
    });
    for(var i=0; i<12; i++){
            var text= \$('#tooltip-text li').eq(i).text();
            \$('#pack-table tr').eq(i+1).children('td').eq(0).children('div').children('button').attr('data-content', text);
    }
    \$('#pack-table div button').popover('hide');
    
    \$('#pack-table td:nth-child(2)').on('click', function(){
\t\twindow.location.assign(\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("coach_annonce_deposez", array("ordre" => 0));
        echo "\");
    });
    \$('#pack-table td:nth-child(3)').on('click', function(){
                  window.location.assign(\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("coach_annonce_deposez", array("ordre" => 1));
        echo "\");
    });
    \$('#pack-table td:nth-child(4)').on('click', function(){
                  window.location.assign(\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("coach_annonce_deposez", array("ordre" => 2));
        echo "\");
    }); 
    \$('#pack-table td:nth-child(5)').on('click', function(){
                  window.location.assign(\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("coach_reservation_paiement", array("pack" => 3));
        echo "\");
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "CoachPackBundle:Pack:pack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 129,  350 => 126,  344 => 123,  338 => 120,  319 => 104,  316 => 103,  291 => 81,  285 => 80,  277 => 78,  269 => 76,  267 => 75,  262 => 74,  259 => 73,  255 => 72,  248 => 67,  241 => 66,  234 => 64,  228 => 63,  224 => 61,  222 => 60,  219 => 59,  217 => 58,  214 => 57,  211 => 56,  207 => 55,  203 => 54,  196 => 52,  191 => 49,  185 => 48,  182 => 47,  174 => 45,  166 => 43,  163 => 42,  158 => 41,  156 => 40,  147 => 33,  141 => 32,  134 => 31,  127 => 30,  120 => 29,  113 => 28,  106 => 27,  99 => 26,  92 => 25,  86 => 24,  81 => 23,  77 => 22,  70 => 18,  62 => 15,  56 => 12,  48 => 9,  40 => 3,  37 => 2,  11 => 1,);
    }
}
