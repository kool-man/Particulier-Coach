<?php

/* CoachPageBundle:Page:owl-slider-biens.html.twig */
class __TwigTemplate_85fbd03f23bc9f64b5b27baa984d54b26c4bc96fbf6bf6395ecd64f88f65d451 extends Twig_Template
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
        echo "<div class=\"clearfix\"></div>
        <div class=\"owl-row\">
            <div id=\"owl-biens\" class=\"owl-carousel owl-theme\">
                ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 5
            echo "                <div class=\"item\">
                    <div class=\"item-content\">
                        <div class=\"item-img-wrapper\">
                            <figure>
                                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["annonce"], "id", array()), "titre" => strtr($this->getAttribute($context["annonce"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "\">
                                    ";
            // line 10
            $context["s"] = 0;
            // line 11
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["annonce"], "mesImages", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 12
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
                echo "\" class=\"img-responsive\">
                                        ";
                // line 13
                $context["s"] = ((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) + 1);
                // line 14
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "       
                                    ";
            // line 15
            if (((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) == 0)) {
                // line 16
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/rectorpage/images/no.image.png"), "html", null, true);
                echo "\" alt=\"No image\" class=\"img-responsive\">
                                    ";
            }
            // line 17
            echo "    
                                </a>
                            </figure>
                            <div class=\"item-price-container\"><p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo " € </p></div>
                            <span class=\"discount-rect nvl\">Nouvelle</span>
                        </div>
                        <div class=\"item-meta-container\">
                            <p><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["annonce"], "id", array()), "titre" => strtr($this->getAttribute($context["annonce"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array(0 => 50), "method"), "html", null, true);
            echo "...</a> </p>
                            <div class=\"ratings-container\">
                                <span class=\"ratings-amount\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbvue", array()), "html", null, true);
            echo " vue</span>
                            </div>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["annonce"], "id", array()), "titre" => strtr($this->getAttribute($context["annonce"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\" class=\"btn btn-black pull-right\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "\">Voir l'annonce</a>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Page:owl-slider-biens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  98 => 28,  93 => 26,  84 => 24,  77 => 20,  72 => 17,  66 => 16,  64 => 15,  56 => 14,  54 => 13,  47 => 12,  42 => 11,  40 => 10,  34 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
