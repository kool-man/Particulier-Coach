<?php

/* CoachPageBundle:Page:index.html.twig */
class __TwigTemplate_333806cdf1d8ec3e3ebdc89c8f832be55b9599ce2951dc9e4e0143dc99de8a23 extends Twig_Template
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
            'pub' => array($this, 'block_pub'),
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
        echo "            <div class=\"col-md-12 presentation video-from\">
            <div class=\"row\">
            <div class=\"col-md-6\">
                <iframe src=\"http://www.youtube.com/embed/UemA5HPkjs8?rel=0\" style=\"min-height: 310px;\" width=\"100%\"></iframe>
            </div>
            <div class=\"col-md-6\">
                        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "sent"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "                            <div class=\"alert alert-info col-md-12\" role=\"alert\">
                                ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "             
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                        <div class=\"form-offer\">
                            <h1 class=\"center\"><a href=\"http://www.particulier-coach.com\" title=\"particulier & coach\">Particulier & Coach</a></h1>
                            <p>Recevez notre guide GRATUIT <strong>\"Vente sans agence immobili&egrave;re\"</strong> d&eacute;s l'ouverture du site!</p>
                            <div class=\"clearfix\"></div>
                            <form class=\"mrg-t-10\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("coach_annonce_homepage");
        echo "\" method=\"post\">
                                <div class=\"form-group\">
                                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom et prénom")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrer email")));
        echo "
                                </div>

                                <div>
                                    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 28
            echo "                                        <label class=\"btn btn-default\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
                                        ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
                                        </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                    <button type=\"submit\" class=\"btn btn-success pull-right\">Envoyer</button>
                                </div>
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"center\" style=\"font-size:28px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "titre", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 1, array(), "array"), "balise", array()), "html", null, true);
        echo ">
                    <div class=\"customNavigation pull-right\">
                        <a class=\"btn prev\"><i class=\"fa fa-chevron-left\"></i></a>
                        <a class=\"btn next\"><i class=\"fa fa-chevron-right\"></i></a>
                    </div>
                    ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoachPageBundle:Page:blockBiens"));
        echo "
                    </div>
            </div>
            <div class=\"col-md-12 wells buy-and-sell\">
                <";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 2, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"center\" style=\"font-size:28px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 2, array(), "array"), "titre", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 2, array(), "array"), "balise", array()), "html", null, true);
        echo ">
                ";
        // line 52
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoachPageBundle:Page:blockText"));
        echo "
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"green-bar\">
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("coach_pack");
        echo "\" title=\"d&eacute;poser votre annonce\">D&eacute;posez votre annonce</a>
            </div>
            ";
        // line 58
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoachPageBundle:Page:blockMiddle"));
        echo "
            <div class=\"wells mrg-tb-20\">
                <";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 3, array(), "array"), "balise", array()), "html", null, true);
        echo " class=\"center\" style=\"font-size:28px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 3, array(), "array"), "titre", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["titres"]) ? $context["titres"] : $this->getContext($context, "titres")), 3, array(), "array"), "balise", array()), "html", null, true);
        echo ">
                <div class=\"customNavigation\">
                    <a class=\"btn prev\"><i class=\"fa fa-chevron-left\"></i></a>
                    <a class=\"btn next\"><i class=\"fa fa-chevron-right\"></i></a>
                </div>
                ";
        // line 65
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoachPageBundle:Page:blockAnnonces"));
        echo "
            </div>    
";
    }

    // line 68
    public function block_pub($context, array $blocks = array())
    {
        // line 69
        echo "<div class=\"pub-stephan wow bounceInRight\"><a href=\"http://urlz.fr/1o8x\" target=\"_blank\" title=\"valoriser votre logement\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/stephane.jpg"), "html", null, true);
        echo "\" alt=\"valoriser votre logement\"></a></div>
";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 69,  184 => 68,  177 => 65,  165 => 60,  160 => 58,  155 => 56,  148 => 52,  140 => 51,  133 => 47,  121 => 42,  110 => 34,  106 => 32,  97 => 29,  92 => 28,  88 => 27,  81 => 23,  75 => 20,  70 => 18,  64 => 14,  55 => 11,  52 => 10,  48 => 9,  40 => 3,  37 => 2,  11 => 1,);
    }
}
