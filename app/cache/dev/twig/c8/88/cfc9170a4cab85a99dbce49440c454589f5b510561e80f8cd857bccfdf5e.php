<?php

/* CoachEstimationBundle:Estimation:prix_estimation.html.twig */
class __TwigTemplate_c888cfc9170a4cab85a99dbce49440c454589f5b510561e80f8cd857bccfdf5e extends Twig_Template
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
    <!--carte france-->
    <div class=\"col-md-3\">
        <div class=\"wells nmrg price-bar\">
            <h1 style=\"font-size:18px;\">Prix du m2 en France</h1>
            <h5>Prix de vente - ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["depart"]) ? $context["depart"] : $this->getContext($context, "depart")), "name", array()), "html", null, true);
        echo "</h5>
            <table>
                <tbody>
                    <tr>
                        <td>Maison</td>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["depart"]) ? $context["depart"] : $this->getContext($context, "depart")), "venteMaison", array()), "html", null, true);
        echo " &#128;</td>
                    </tr>
                    <tr>
                        <td>Appartement</td>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["depart"]) ? $context["depart"] : $this->getContext($context, "depart")), "venteAppartement", array()), "html", null, true);
        echo " &#128;</td>
                    </tr>
                </tbody>
            </table>

            <h5>Prix de La location</h5>
            <table>
                <tbody>
                    <tr>
                        <td>Maison</td>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["depart"]) ? $context["depart"] : $this->getContext($context, "depart")), "locationMaison", array()), "html", null, true);
        echo " &#128;</td>
                    </tr>
                    <tr>
                        <td>Appartement</td>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["depart"]) ? $context["depart"] : $this->getContext($context, "depart")), "locationAppartement", array()), "html", null, true);
        echo " &#128;</td>
                    </tr>
                </tbody>
            </table>
            <p>Calculez le prix de votre bien en quelques clics. R&eacute;sultat personnalis&eacute;</p>
            <p class=\"button\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("coach_estimation_form");
        echo "\" class=\"btn btn-success\">Je calcule maintenant</a></p>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div id=\"francemap\" class=\"carte-france\"></div>
    </div>
    <div class=\"col-md-3 ville-list\">
        <div class=\"title-bar\">
            <h3>Villes de France</h3>
        </div>
        <div class=\"wells scrollbar-inner nmrg\">

            <ul class=\"villes permanent\">
\t\t";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departements"]) ? $context["departements"] : $this->getContext($context, "departements")));
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            // line 50
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_estimation_departement", array("id" => $this->getAttribute($context["departement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t 
            </ul>                
        </div>
    </div>
    <div class=\"col-md-12\"><div class=\"devider\"></div></div>
    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"pub-img\">
                    <a href=\"\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/annonces.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <p class=\"button\">
                        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("coach_pack");
        echo "\" class=\"btn btn-success\">je despose mon annonce</a>
                    </p>
                </div>
                
                <div class=\"pub-img panneau\">
                    <p class=\"center\">Je commande mon panneau<br>immobilier personnalisable</p>
                    <a href=\"\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" style=\"left:25px; bottom: 68px;\">
                    <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" data-wow-delay=\"0.5s\" style=\"left:95px; bottom: 98px;\">
                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" data-wow-delay=\"1s\" style=\"left:145px; bottom: 80px;\">
                    <p class=\"button-gray\">
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("coach_panneau_homepage");
        echo "\" class=\"btn btn-success\">je commande</a>
                    </p>
                </div>
            </div>
            ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "coaching", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            echo "        
            <div class=\"col-md-8\">
                <h3 class=\"title\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "titre", array()), "html", null, true);
            echo "</h3>
                <h4>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point1", array()), "html", null, true);
            echo "</h4>
                <br>
                ";
            // line 82
            if ($this->getAttribute($context["coach"], "point2", array())) {
                echo "<p class=\"list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point2", array()), "html", null, true);
                echo "</p>";
            }
            // line 83
            echo "                ";
            if ($this->getAttribute($context["coach"], "point3", array())) {
                echo "<p class=\"list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point3", array()), "html", null, true);
                echo "</p>";
            }
            // line 84
            echo "                ";
            if ($this->getAttribute($context["coach"], "point4", array())) {
                echo "<p class=\"list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point4", array()), "html", null, true);
                echo "</p>";
            }
            // line 85
            echo "                ";
            if ($this->getAttribute($context["coach"], "point5", array())) {
                echo "<p class=\"list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point5", array()), "html", null, true);
                echo "</p>";
            }
            // line 86
            echo "                ";
            if ($this->getAttribute($context["coach"], "point6", array())) {
                echo "<p class=\"list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point6", array()), "html", null, true);
                echo "</p>";
            }
            // line 87
            echo "                ";
            if ($this->getAttribute($context["coach"], "point7", array())) {
                echo "<p class=\"list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point7", array()), "html", null, true);
                echo "</p>";
            }
            // line 88
            echo "                ";
            if ($this->getAttribute($context["coach"], "point8", array())) {
                echo "<p class=\"list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point8", array()), "html", null, true);
                echo "</p>";
            }
            // line 89
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    
        </div>



    </div>
</div>
<br>
<br>
";
    }

    // line 100
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 101
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <!--FETCH CSS for this page -->
        
         <!--Scrollbar plugin-->
         <link href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-scrollbar/jquery.scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--End Scrollbar plugin-->
        
        <!--GMAP CSS-->
        <link href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-map/styles/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        // line 112
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<!--Scrollbar plugin-->
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        echo "\"></script>
        <!--End Scrollbar plugin-->
        
        <script>
            \$('.scrollbar-inner').scrollbar();
        </script>
        <!--France MAP-->
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-map/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-map/jquery.vmap.france.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#francemap').vectorMap({
                    map: 'france_fr',
                    hoverOpacity: 0,
                    hoverColor: \"#88c462\",
                    backgroundColor: \"#ffffff\",
                    color: \"#9fa1a0\",
                    borderColor: \"#fff\",
\t\t\t\t\tborderOpacity: 1,
\t\t\t\t\tborderWidth: 3,
                    selectedColor: \"#88c462\",
                    enableZoom: false,
\t\t\t\t\tshowTooltip: true,
                    onRegionClick: function(element, code, region)
                    {
                        var message = 'Région : \"'
                        + region 
                        + '\" || Id : \"'
                        + code
                        + '\"';

                        //alert(message);
                    }
                });
            });
        </script>
";
    }

    public function getTemplateName()
    {
        return "CoachEstimationBundle:Estimation:prix_estimation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 122,  296 => 121,  286 => 114,  281 => 112,  278 => 111,  272 => 109,  265 => 105,  258 => 101,  255 => 100,  242 => 90,  235 => 89,  228 => 88,  221 => 87,  214 => 86,  207 => 85,  200 => 84,  193 => 83,  187 => 82,  182 => 80,  178 => 79,  171 => 77,  164 => 73,  159 => 71,  155 => 70,  151 => 69,  147 => 68,  138 => 62,  133 => 60,  122 => 51,  111 => 50,  107 => 49,  91 => 36,  83 => 31,  76 => 27,  63 => 17,  56 => 13,  48 => 8,  41 => 3,  38 => 2,  11 => 1,);
    }
}
