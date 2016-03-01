<?php

/* CoachPageBundle:Page:acheter-et-vendre.html.twig */
class __TwigTemplate_7dfb6047446963a75d45b62e6bbd3e12370db9255589573da0e7b0bf9d8286cd extends Twig_Template
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
        echo "    <div class=\"row\">
        ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 3
            echo "        <div class=\"col-md-6\">
            <div class=\"col-md-12\">
                <h3 class=\"center\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
            echo "</h3>
                <p>
                    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "description", array()), "html", null, true);
            echo "
                </p>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Page:acheter-et-vendre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  35 => 7,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
