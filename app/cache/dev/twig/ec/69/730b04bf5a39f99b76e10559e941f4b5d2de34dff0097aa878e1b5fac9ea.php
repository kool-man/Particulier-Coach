<?php

/* CoachPageBundle:Page:navigation.html.twig */
class __TwigTemplate_ec69730b04bf5a39f99b76e10559e941f4b5d2de34dff0097aa878e1b5fac9ea extends Twig_Template
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
        echo "<div class=\"col-md-3 col-sm-6\">
            <h3 style=\"font-size:18px;\">NAVIGATION</h3>
            <ul>
                ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")));
        foreach ($context['_seq'] as $context["_key"] => $context["navigation"]) {
            // line 5
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "lien", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "titre", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["navigation"], "titre", array()) == "Blog")) {
                echo "target=\"_blank\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "titre", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "            </ul>    
</div>
";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Page:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
