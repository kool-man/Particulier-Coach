<?php

/* CoachPageBundle:Page:social.html.twig */
class __TwigTemplate_dd4c55138c58b93f28dbea6f21b04a21c990f1a57db2f47734ab87c0d4c1548e extends Twig_Template
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
        echo "<ul class=\"social-share\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socials"]) ? $context["socials"] : $this->getContext($context, "socials")));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 3
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "linkFacebook", array()), "html", null, true);
            echo "\" target=\"_blank\" title=\"Facebook - Particulier & Coach\"><i class=\"fa fa-facebook\"></i></a></li>
    <li><a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "linkTwitter", array()), "html", null, true);
            echo "\" target=\"_blank\" title=\"Twitter - Particulier & Coach\"><i class=\"fa fa-twitter\"></i></a></li>
    <li><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "linkGoogle", array()), "html", null, true);
            echo "\" target=\"_blank\" title=\"Google - Particulier & Coach\"><i class=\"fa fa-google-plus\"></i></a></li>
    <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "linkLinkedin", array()), "html", null, true);
            echo "\" target=\"_blank\" title=\"Linkedin - Particulier & Coach\"><i class=\"fa fa-linkedin\"></i></a></li>
    <li><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "linkYoutube", array()), "html", null, true);
            echo "\" target=\"_blank\" title=\"Youtube - Particulier & Coach\"><i class=\"fa fa-youtube\"></i></a></li>
    <li><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "linkRss", array()), "html", null, true);
            echo "\" target=\"_blank\" title=\"Rss - Particulier & Coach\"><i class=\"fa fa-rss\"></i></a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    
</ul>";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Page:social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
