<?php

/* CoachCoachingBundle:Coaching:index.html.twig */
class __TwigTemplate_549d80cbd7150dd117234666312d9c3d811010895f42a9a9ce14182a9e213dfd extends Twig_Template
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
        echo "    <div class=\"row\">
    <div class=\"col-md-12\">
        <";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"title-page\">";
        if ($this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "titre", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "titre", array()), "html", null, true);
        }
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "balise", array()), "html", null, true);
        echo ">
    </div>
    <div class=\"col-md-8\">
\t<div class=\"row\">
            <div class=\"wells col-md-12 nmrg\">
                   <p>";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 2, array(), "array"), "titre", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 2, array(), "array"), "titre", array()), "html", null, true);
        }
        // line 11
        echo "                   </p>\t\t\t
                   <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("coach_reservation_paiement", array("pack" => 3));
        echo "\" class=\"btn btn-success wow fadeInRight pull-right\" title=\"coaching en ligne\">Accélérer ma vente maintenant</a>
            </div>
\t</div>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "coaching", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            echo "    
        <div class=\"row mrg-t-20\">
            <div class=\"col-md-3 col-xs-3\">
                <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/autres/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "icone", array()), "html", null, true);
            echo "\" alt=\"coaching immobilière\" class=\"img-responsive mrg-t-10\">
            </div>
            <div class=\"col-md-8 col-xs-9\">
                <h2><strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "titre", array()), "html", null, true);
            echo "</strong></h2>
                    <ul>
                            ";
            // line 23
            if ($this->getAttribute($context["coach"], "point1", array())) {
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point1", array()), "html", null, true);
                echo "</li>";
            }
            // line 24
            echo "                            ";
            if ($this->getAttribute($context["coach"], "point2", array())) {
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point2", array()), "html", null, true);
                echo "</li>";
            }
            // line 25
            echo "                            ";
            if ($this->getAttribute($context["coach"], "point3", array())) {
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point3", array()), "html", null, true);
                echo "</li>";
            }
            // line 26
            echo "                            ";
            if ($this->getAttribute($context["coach"], "point4", array())) {
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point4", array()), "html", null, true);
                echo "</li>";
            }
            // line 27
            echo "                            ";
            if ($this->getAttribute($context["coach"], "point5", array())) {
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point5", array()), "html", null, true);
                echo "</li>";
            }
            // line 28
            echo "                            ";
            if ($this->getAttribute($context["coach"], "point6", array())) {
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point6", array()), "html", null, true);
                echo "</li>";
            }
            // line 29
            echo "                            ";
            if ($this->getAttribute($context["coach"], "point7", array())) {
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point7", array()), "html", null, true);
                echo "</li>";
            }
            // line 30
            echo "                            ";
            if ($this->getAttribute($context["coach"], "point8", array())) {
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point8", array()), "html", null, true);
                echo "</li>";
            }
            // line 31
            echo "                    </ul>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    <div class=\"row mrg-t-30\">
\t\t\t<div class=\"col-md-3 col-xs-3\"></div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("coach_reservation_paiement", array("pack" => 3));
        echo "\" class=\"btn btn-success wow fadeInRight mrg-tb-20\" title=\"coaching en ligne\">Accélérer ma vente maintenant</a>
\t\t\t</div>
        </div>        
    </div>
    <div class=\"col-md-4\">
        <div class=\"title-bar nmrg\">
            <h3>Témoignges clients satisfaits</h3>
        </div>
        <div class=\"wells col-md-12 nmrg feedback js-carousel\">
            <ul id=\"carousel\" >
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-1.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Jonathan Abilit</h3>
                            <p>J'ai pu vendre ma maison en une semaine sans commission</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-3.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>J'ai pu vendre ma villa en 10 jours grace à coaching immobilier</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-4.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>J'ai pu vendre ma villa en 10 jours grace à coaching immobilier</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-5.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>J'ai pu vendre ma villa en 10 jours grace à coaching immobilier</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-6.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>J'ai pu vendre ma villa en 10 jours grace à coaching immobilier</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-1.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Jonathan Abilit</h3>
                            <p>J'ai pu vendre ma maison en une semaine sans commission</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-3.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>J'ai pu vendre ma villa en 10 jours grace à coaching immobilier</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-4.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>J'ai pu vendre ma villa en 10 jours grace à coaching immobilier</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-5.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>J'ai pu vendre ma villa en 10 jours grace à coaching immobilier</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-7.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>J'ai pu vendre ma villa en 10 jours grace à coaching immobilier</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a class=\"media-left\" href=\"http://www.particulier-coach.com\" title=\"coaching immobilière\">
                            <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/clients/client-2.jpg"), "html", null, true);
        echo "\" alt=\"coaching immobilière\">
                        </a>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\" style=\"font-size:14px;\">Albert comby</h3>
                            <p>Quand jai publié ma villa sur le site coaching immobilier, beaucoup de gens m'ont contacté, et jai trouvé toutes les procédures qu'il faut faire dans le site</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<br>
<br>
";
    }

    // line 176
    public function block_javascripts($context, array $blocks = array())
    {
        // line 177
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/js/modernizr.custom.17475.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/js/jquerypp.custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/js/jquery.elastislide.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$('#carousel').elastislide({
        orientation : 'vertical'
    });
    \$('#carousel li').removeAttr('style');
    \$('.elastislide-wrapper.elastislide-vertical').removeAttr('style');
</script>
";
    }

    // line 189
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 190
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/css/elastislide.css"), "html", null, true);
        echo "\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-elastislide/css/custom.css"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "CoachCoachingBundle:Coaching:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 192,  371 => 191,  367 => 190,  364 => 189,  351 => 180,  347 => 179,  343 => 178,  339 => 177,  336 => 176,  317 => 161,  303 => 150,  289 => 139,  275 => 128,  261 => 117,  247 => 106,  233 => 95,  219 => 84,  205 => 73,  191 => 62,  177 => 51,  161 => 38,  156 => 35,  147 => 31,  140 => 30,  133 => 29,  126 => 28,  119 => 27,  112 => 26,  105 => 25,  98 => 24,  92 => 23,  87 => 21,  80 => 18,  72 => 15,  66 => 12,  63 => 11,  59 => 10,  45 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
