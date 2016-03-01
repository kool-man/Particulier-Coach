<?php

/* CoachPageBundle:Page:categories.html.twig */
class __TwigTemplate_6b1272483f8b686d7661cef96f27a74f5175cce4d8164d9baa5a8938a2c93cc6 extends Twig_Template
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
        echo "<div class=\"col-md-12 wells catogories\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 3
            echo "    <div class=\"col-md-3 col-sm-6\">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "\">
            <i class=\"fa ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "type", array()), "html", null, true);
            echo "\"></i>
        </a>
        <h4><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "</a></h4>
        <p>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "description", array()), "html", null, true);
            echo "
        </p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
 <div class=\"clearfix\"></div>";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Page:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  49 => 9,  40 => 7,  35 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
