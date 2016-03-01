<?php

/* CoachPageBundle:Menu:menu.html.twig */
class __TwigTemplate_adc81c15f4be1c35788bdc03d2ba1455c6091cb55d8d266bf9bd695d34f9494e extends Twig_Template
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
        echo "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
    <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("coach_annonce_homepage");
        echo "\" title=\"annonces immobilières\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "coach_annonce_homepage")) {
            echo " class=\"active\" ";
        }
        echo "><i class=\"fa fa-home\"></i></a></li>
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "lien", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "titre", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["menu"], "titre", array()) == "Blog")) {
                echo "target=\"_blank\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "titre", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  35 => 5,  31 => 4,  23 => 3,  19 => 1,);
    }
}
