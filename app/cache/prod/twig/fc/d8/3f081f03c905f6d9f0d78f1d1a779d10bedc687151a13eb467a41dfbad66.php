<?php

/* CoachAnnonceBundle:Annonce:verification.html.twig */
class __TwigTemplate_fcd83f081f03c905f6d9f0d78f1d1a779d10bedc687151a13eb467a41dfbad66 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <h1 class=\"title-page\" style=\"font-size:18px;\">Formulaire de réservation sécurisée</h1>
    </div>
    <div class=\"col-md-12\">
        <div class=\"col-md-12 wells\">
            <div class=\"col-md-12 mrg-t-10\"></div>
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 display\" id=\"step-4-form\" style=\"display: block;\">
                    <div class=\"alert alert-success center-block\" role=\"alert\">Mail de confiramtion a été envoyé vers votre email. Merci d'aller vers votre boite e-mail pour terminer les instructions.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
";
    }

    public function getTemplateName()
    {
        return "CoachAnnonceBundle:Annonce:verification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
