<?php

/* CoachPanneauBundle:Panneau:panneau.html.twig */
class __TwigTemplate_a61d91fea75d9eca22232f0907fbe484e2a49af4ff1d409ba00196119d2086bd extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"title-page\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "titre", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "balise", array()), "html", null, true);
        echo ">
    </div>
    <div class=\"col-md-3\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("coach_pack");
        echo "\" title=\"Publier vos annonces immobilières\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/coach.jpg"), "html", null, true);
        echo "\" alt=\"panneaux immobilières\" class=\"img-responsive\"></a>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("coach_pack");
        echo "\" title=\"Publier vos annonces immobilières\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/annonces.jpg"), "html", null, true);
        echo "\" alt=\"panneaux immobilières\" class=\"img-responsive mrg-tb-20\"></a>
        ";
        // line 10
        $this->env->loadTemplate("CoachPanneauBundle:Panneau:pub-animated.html.twig")->display($context);
        // line 11
        echo "    </div>
    <div class=\"col-md-9\" id=\"panneau\">
        <";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 2, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"nmg-t border\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 2, array(), "array"), "titre", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 2, array(), "array"), "balise", array()), "html", null, true);
        echo ">
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "coaching", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 15
            echo "            ";
            if ($this->getAttribute($context["coach"], "point1", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point1", array()), "html", null, true);
                echo "</p>";
            }
            // line 16
            echo "            ";
            if ($this->getAttribute($context["coach"], "point2", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point2", array()), "html", null, true);
                echo "</p>";
            }
            // line 17
            echo "            ";
            if ($this->getAttribute($context["coach"], "point3", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point3", array()), "html", null, true);
                echo "</p>";
            }
            // line 18
            echo "            ";
            if ($this->getAttribute($context["coach"], "point4", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point4", array()), "html", null, true);
                echo "</p>";
            }
            // line 19
            echo "            ";
            if ($this->getAttribute($context["coach"], "point5", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point5", array()), "html", null, true);
                echo "</p>";
            }
            // line 20
            echo "            ";
            if ($this->getAttribute($context["coach"], "point6", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point6", array()), "html", null, true);
                echo "</p>";
            }
            // line 21
            echo "            ";
            if ($this->getAttribute($context["coach"], "point7", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point7", array()), "html", null, true);
                echo "</p>";
            }
            // line 22
            echo "            ";
            if ($this->getAttribute($context["coach"], "point8", array())) {
                echo "<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coach"], "point8", array()), "html", null, true);
                echo "</p>";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 3, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"mrg-t-30 border\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 3, array(), "array"), "titre", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 3, array(), "array"), "balise", array()), "html", null, true);
        echo ">
        <div class=\"row\">
            <div class=\"col-md-5\">
                ";
        // line 27
        $this->env->loadTemplate("CoachPanneauBundle:Panneau:panneau-1.html.twig")->display($context);
        // line 28
        echo "            </div>
            <div class=\"col-md-7\">
                ";
        // line 30
        echo twig_include($this->env, $context, "CoachPanneauBundle:Panneau:form-1.html.twig", array("form1" => (isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1"))));
        echo "
            </div>
        </div>
        <";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 4, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"mrg-t-30 border\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 4, array(), "array"), "titre", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 4, array(), "array"), "balise", array()), "html", null, true);
        echo ">
        <div class=\"row\">
            <div class=\"col-md-5\">
                ";
        // line 36
        $this->env->loadTemplate("CoachPanneauBundle:Panneau:panneau-2.html.twig")->display($context);
        // line 37
        echo "            </div>
            <div class=\"col-md-7\">
                ";
        // line 39
        echo twig_include($this->env, $context, "CoachPanneauBundle:Panneau:form-2.html.twig", array("form2" => (isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2"))));
        echo "
            </div>
        </div>
        <";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 5, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"mrg-t-30 border\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 5, array(), "array"), "titre", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 5, array(), "array"), "balise", array()), "html", null, true);
        echo ">
        <div class=\"row\">
            <div class=\"col-md-5\">
                ";
        // line 45
        $this->env->loadTemplate("CoachPanneauBundle:Panneau:panneau-3.html.twig")->display($context);
        // line 46
        echo "            </div>
            <div class=\"col-md-7\">
                ";
        // line 48
        echo twig_include($this->env, $context, "CoachPanneauBundle:Panneau:form-3.html.twig", array("form3" => (isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3"))));
        echo "
            </div>
        </div>
    </div>
</div>
<br><br><br>
";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
\t\t\$('.steps').on('click', function(e){
\t\t\te.preventDefault();
\t\t\tid= \$(this).attr('data-form-id');
\t\t\tconsole.log(id);
\t\t\t\$(id +' .step-create,.modal-footer .steps').hide();
\t\t\t\$(id +' .step-pay,.modal-footer .btn-success.display').show();
\t\t});
\t\t\$('.retour').on('click', function(e){
\t\t\te.preventDefault();
\t\t\tid= \$(this).attr('data-form-id');
\t\t\t\$(id +' .step-create,.modal-footer .steps').show();
\t\t\t\$(id +' .step-pay,.modal-footer .btn-success.display').hide();
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "CoachPanneauBundle:Panneau:panneau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 56,  218 => 55,  207 => 48,  203 => 46,  201 => 45,  191 => 42,  185 => 39,  181 => 37,  179 => 36,  169 => 33,  163 => 30,  159 => 28,  157 => 27,  146 => 24,  140 => 23,  133 => 22,  126 => 21,  119 => 20,  112 => 19,  105 => 18,  98 => 17,  91 => 16,  84 => 15,  80 => 14,  72 => 13,  68 => 11,  66 => 10,  60 => 9,  54 => 8,  44 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
