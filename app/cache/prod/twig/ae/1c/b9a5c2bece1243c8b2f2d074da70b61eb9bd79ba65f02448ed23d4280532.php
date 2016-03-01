<?php

/* CoachAnnonceBundle:Annonce:results.html.twig */
class __TwigTemplate_ae1cb9a5c2bece1243c8b2f2d074da70b61eb9bd79ba65f02448ed23d4280532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div class=\"col-md-12\">
        ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta")), "currentPageResults", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 3
            echo "            <div class=\"media\">
                <a class=\"media-left\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["e"], "id", array()), "titre" => strtr($this->getAttribute($context["e"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titre", array()), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["e"], "mesImages", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 6
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" alt=\"\"> 
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "                </a>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["e"], "id", array()), "titre" => strtr($this->getAttribute($context["e"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titre", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titre", array()), "html", null, true);
            echo "</a></h4>
                    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", array()), "html", null, true);
            echo ".</p>
                    <div class=\"divider\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Espace :</strong>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "surface", array()), "html", null, true);
            echo " m²
                            </div>
                            <div class=\"col-md-4\">
                                <strong>Pièces :</strong> S + ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nbChambre", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"col-md-4\">
                                <strong> Prix :</strong> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prix", array()), "html", null, true);
            echo " Eruro
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
        // line 28
        echo "        </div>";
    }

    public function getTemplateName()
    {
        return "CoachAnnonceBundle:Annonce:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  79 => 21,  73 => 18,  67 => 15,  60 => 11,  52 => 10,  48 => 8,  39 => 6,  35 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
