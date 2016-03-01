<?php

/* CoachPageBundle:Page:owl-slider-annonces.html.twig */
class __TwigTemplate_2880f28fdfaffa932d916f6b1b565e7698c552686b2ad2d3ecabc1991a333052 extends Twig_Template
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
        echo "    <div class=\"clearfix\"></div>
    <div id=\"owl-offres\" class=\"owl-carousel owl-theme\">        
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 4
            echo "        <div class=\"item\">
            <div class=\"item-content\">
                <div class=\"item-img-wrapper\">
                    <figure>
                        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["annonce"], "id", array()), "titre" => strtr($this->getAttribute($context["annonce"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "\">
                                ";
            // line 9
            $context["s"] = 0;
            // line 10
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["annonce"], "mesImages", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 11
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
                echo "\" class=\"img-responsive\">
                                    ";
                // line 12
                $context["s"] = ((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) + 1);
                // line 13
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "       
                                ";
            // line 14
            if (((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) == 0)) {
                // line 15
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/rectorpage/images/no.image.png"), "html", null, true);
                echo "\" alt=\"No image\" class=\"img-responsive\">
                                ";
            }
            // line 16
            echo "    
                        </a>
                    </figure>
                    <div class=\"item-price-container\"><p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo " € </p></div>
                    <span class=\"discount-rect nvl\">Nouvelle</span>
                </div>
                <div class=\"item-meta-container\">
                    <p><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["annonce"], "id", array()), "titre" => strtr($this->getAttribute($context["annonce"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array(0 => 50), "method"), "html", null, true);
            echo "...</a> </p>
                    <div class=\"ratings-container\">
                        <span class=\"ratings-amount\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbvue", array()), "html", null, true);
            echo " vue</span>
                    </div>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["annonce"], "id", array()), "titre" => strtr($this->getAttribute($context["annonce"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "\" class=\"btn btn-black pull-right\">Voir l'annonce</a>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        
    </div>";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Page:owl-slider-annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  97 => 27,  92 => 25,  83 => 23,  76 => 19,  71 => 16,  65 => 15,  63 => 14,  55 => 13,  53 => 12,  46 => 11,  41 => 10,  39 => 9,  33 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
