<?php

/* CoachPanneauBundle:Panneau:pub-animated.html.twig */
class __TwigTemplate_f29cd0fb1381c4f9aee9cdeab12c4438af4fe787c94592bbc22feec4351560ca extends Twig_Template
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
        echo "<div class=\"pub-img panneau\">
    <p class=\"center\">Je commande mon panneau<br>immobilier personnalisable</p>
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("coach_panneau_homepage");
        echo "\" title=\"commander un panneau immobilière\">
    \t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre.jpg"), "html", null, true);
        echo "\" alt=\"immobilier personnalisable\"></a>
    \t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("coach_panneau_homepage");
        echo "\" title=\"commander un panneau immobilière\">
\t    \t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"immobilier personnalisable\" class=\"btn-img wow bounceIn\" style=\"left:25px; bottom: 68px;\">
\t    \t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"immobilier personnalisable\" class=\"btn-img wow bounceIn\" data-wow-delay=\"0.5s\" style=\"left:95px; bottom: 98px;\">
\t    \t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"immobilier à vendre\" class=\"btn-img wow bounceIn\" data-wow-delay=\"1s\" style=\"left:145px; bottom: 80px;\">
    \t</a>
    <p class=\"button-gray\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("coach_panneau_homepage");
        echo "\" class=\"btn btn-success\" title=\"commander un panneau immobilière\">je commande</a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "CoachPanneauBundle:Panneau:pub-animated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
