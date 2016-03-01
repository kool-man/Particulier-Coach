<?php

/* header-top.html.twig */
class __TwigTemplate_015befb9bc3a9d55ffd5e9e35821b1b807b7a0176cb99a4a30a93c71c93778eb extends Twig_Template
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
        echo "<header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 user\">
                ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("coach_user_security_profile");
            echo "\" style=\"color:#61af2a;\" title=\"créer un compte particulier & coach\"><i class=\"fa fa-user\"></i> Mon Compte P&amp;C ></a> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("coach_user_security_logout");
            echo "\" title=\"créer un compte particulier & compte\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 9
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("coach_user_security_profile");
            echo "\" style=\"color:#61af2a;\" title=\"créer un compte particulier & coach\"><i class=\"fa fa-user\"></i> Mon Compte P&amp;C ></a>
                ";
        }
        // line 11
        echo "            </div>
            <div class=\"col-md-6\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("coach_user_contact");
        echo "\" class=\"contact\" title=\"contactez nous\"><i class=\"fa fa-envelope-o\"></i><span>Contactez nous</span></a>
                ";
        // line 14
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoachPageBundle:Page:social"));
        echo "
            </div>
            <div class=\"col-md-12\"><div class=\"divider\"></div></div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-5 logo mrg-tb-20\">
                <a href=\"http://www.particulier-coach.com\" title=\"publier vos annonces immobilière chez particulier & coach\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/particulier-coach.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></a>
            </div>
            <div class=\"col-md-7\">
            \t<div class=\"banner-header-pub\">
                    <a href=\"http://www.particulier-coach.com\" title=\"publier vos annonces immobilière chez particulier & coach\"><div class=\"wow fadeInLeft title transition\"></div>
                    <div class=\"wow fadeInLeft slogan transition\"></div></a>
                    <a href=\"http://www.particulier-coach.com\" title=\"publier vos annonces immobilière chez particulier & coach\"><div class=\"handmoney fadeInLeft wow\" data-wow-delay=\"1s\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/hand-money.png"), "html", null, true);
        echo "\" alt=\"vente immobilière\" /></div>
                    <div class=\"handkey fadeInRight wow\" data-wow-delay=\"1.5s\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/hand-key.png"), "html", null, true);
        echo "\" alt=\"De particulier à particulier\" /></div>
                    <div class=\"house fadeInUp wow\" data-wow-delay=\"2s\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/house.png"), "html", null, true);
        echo "\" alt=\"annonce immobilière\"/></div></a>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "header-top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  77 => 27,  73 => 26,  64 => 20,  55 => 14,  51 => 13,  47 => 11,  41 => 9,  34 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
