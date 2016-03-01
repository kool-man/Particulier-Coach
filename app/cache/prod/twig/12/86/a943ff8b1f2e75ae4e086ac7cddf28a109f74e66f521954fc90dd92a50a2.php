<?php

/* CoachPageBundle:Page:mentions.html.twig */
class __TwigTemplate_1286a943ff8b1f2e75ae4e086ac7cddf28a109f74e66f521954fc90dd92a50a2 extends Twig_Template
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
        <h1 class=\"title-page\">Mentions légales</h1>
    </div>  \t
    <div class=\"col-md-12\">       
        <div class=\"col-md-12 wells\">
           <div class=\"col-md-12 mrg-t-10\"></div>
            <div class=\"row\">
                <!--step-4-->
                <div class=\"col-md-10 col-md-offset-1 display\" id=\"step-4-form\" style=\"display: block;\">
                    Particulier & Coach est un site de marketing immobilier, offrant des solutions et des outils de promotion immobilière aux particuliers qui veulent vendre ou louer des biens immobiliers (maison, appartement, locaux commerciaux, fonds de commerce, parking).
                    <br>Particulier & Coach est géré par R. MIMOUNI, immatriculée au registre du tribunal de commerce de Bobigny : Numéro de SIREN : 534 493 614
                    <br>E-mail : particulier.coach@gmail.com
                    <br>Site web: www.particulier-coach.com 
                    <br>Hebergement : 
                    <br>1&1 Internet SARL
                    <br>7, Place de la Gare
                    <br>BP70109
                    <br>57201 Sarreguemines Cedex
                    <br>SIRET : 431 303 775 000 16
                </div>                
            </div>
        </div>
    </div>
</div>
<br>
<br>
";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Page:mentions.html.twig";
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
