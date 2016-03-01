<?php

/* CoachConseilsBundle:Conseil:index.html.twig */
class __TwigTemplate_cf56141b2c9da23c1606c1a6e428762c5731593a210c69e54afb5426a87ba85c extends Twig_Template
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
        echo "<div class=\"row conseil-immo\">
    <div class=\"col-md-12\">
        <h1 class=\"title-page\">Conseil Immobilier</h1>
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) ? $context["conseils"] : $this->getContext($context, "conseils")));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 8
            echo "    <div class=\"col-md-6\">
        <i class=\"fa ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["conseil"], "icone", array()), "html", null, true);
            echo "\"></i>
        <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["conseil"], "titre", array()), "html", null, true);
            echo "</h2>
        <p>
            ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["conseil"], "description", array()), "html", null, true);
            echo "
        </p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
<div class=\"clearfix\"></div>
<br>
<br>
<br> 
";
    }

    public function getTemplateName()
    {
        return "CoachConseilsBundle:Conseil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  61 => 12,  56 => 10,  52 => 9,  49 => 8,  45 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
