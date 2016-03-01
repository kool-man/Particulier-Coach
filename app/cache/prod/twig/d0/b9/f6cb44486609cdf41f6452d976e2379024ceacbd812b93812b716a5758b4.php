<?php

/* CoachReservationBundle:Reservation:paiement_post.html.twig */
class __TwigTemplate_d0b9f6cb44486609cdf41f6452d976e2379024ceacbd812b93812b716a5758b4 extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
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
        <h3 class=\"title-page\">Accélérer ma vente maintenant</h3>
            <div class=\"col-md-12\">
                <form id=\"my_form\" method=\"POST\" action=\"https://www.klikandpay.com/paiement/check.pl\">    
                    <input type=\"hidden\" name=\"NOM\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "nom", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"PRENOM\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "prenom", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"ADRESSE\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "adresse", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CODEPOSTAL\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "cp", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"VILLE\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "ville", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"PAYS\" value=\"FR\">
                    <input type=\"hidden\" name=\"TEL\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "telephone", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"EMAIL\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "email", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"ID\" value=\"1426699681\">
                    <input type=\"hidden\" name=\"MONTANT\" value=\"59.00\">
                    <input type=\"hidden\" name=\"RETOURVOK\" value=\"/reservation/success?commande=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"RETOURVHS\" value=\"/reservation/failed?commande=";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()), "html", null, true);
        echo "\">
                    <div class=\"col-md-12 alert alert-success\">
                        <i class=\"fa fa-home\"></i>&nbsp;&nbsp;<strong>Si Vous n'êtes pas rediriger vers la page de paiement securisé en quelques secondes, Merci de cliquer sur le bouton en bas ... </strong>
                    </div>
                    <div class=\"col-md-4 col-md-offset-8\">
                        <div class=\"form-group\">
                            <button type=\"submit\" name=\"B1\" class=\"btn-success btn pull-right\">Passez à la page de paiement sécurisé<i class=\"fa fa-chevron-right\"></i></button>
                        </div>
                    </div>        
                </form>    
                </div>
<br>
<br>
<br>
<br>
<br>
";
    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-upload-master/css/fileinput.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  type=\"text/css\">
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <!--fetech JS - JS  special for this page only-->
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-upload-master/js/fileinput.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-select/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
        function submitForm() {
            document.getElementById('my_form').submit();
        }
        window.onload = submitForm;
</script>
";
    }

    public function getTemplateName()
    {
        return "CoachReservationBundle:Reservation:paiement_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  135 => 45,  129 => 43,  126 => 42,  120 => 40,  116 => 39,  112 => 38,  107 => 37,  104 => 36,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  41 => 3,  38 => 2,  11 => 1,);
    }
}
