<?php

/* CoachEstimationBundle:Estimation:message_client.html.twig */
class __TwigTemplate_0d4ba8dd05fb200dc1a676f2afe00714707105b3da1157e4c9b57045778b81a4 extends Twig_Template
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
        echo "<body style=\"margin: 0;padding: 0;font-size: 100%;font-family: 'Avenir Next', 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;  line-height: 1.65;\">
<table style=\"width: 100% !important;height: 100%;background: #efefef;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;\">
    <tr>
        <td style=\"display: block !important;clear: both !important;margin: 0 auto !important;max-width: 580px !important;\">

            <!-- Message start -->
        <table style=\"width: 100% !important;border-collapse: collapse;\">
\t\t<tr>
            <td style=\"background: white;padding: 30px 35px;\">
\t\t\t   <img style=\"max-width: 100%;margin: 0 auto;display: block;\" src=\"http://www.particulier-coach.com/mailer/images/logo.png\">
\t\t    </td>
\t\t</tr>
\t\t<tr>
            <td align=\"center\" style=\"padding: 20px 0;background: #71bc37;color: white;\">

                <h2 style=\"margin-bottom: 20px;line-height: 1.25;font-size: 28px;\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h2>
\t\t    </td>
\t\t</tr>
                <tr>
                    <td style=\"background: white;padding: 30px 35px;\">

                        <h2>Salut M. ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["nomClient"]) ? $context["nomClient"] : $this->getContext($context, "nomClient")), "html", null, true);
        echo ",</h2><br>
                        Type de bien : ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "<br>
                        Etat de bien : ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
        echo "<br>
                        Surface : ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["surface"]) ? $context["surface"] : $this->getContext($context, "surface")), "html", null, true);
        echo "<br>
                        Nombre de chambres : ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nbChambres"]) ? $context["nbChambres"] : $this->getContext($context, "nbChambres")), "html", null, true);
        echo "<br>
                        Nombre de pièces : ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["nbPieces"]) ? $context["nbPieces"] : $this->getContext($context, "nbPieces")), "html", null, true);
        echo "<br>
                        Année de construction : ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "html", null, true);
        echo "<br>
                        Parking : ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["parking"]) ? $context["parking"] : $this->getContext($context, "parking")), "html", null, true);
        echo "<br>
                        Piscine : ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["piscine"]) ? $context["piscine"] : $this->getContext($context, "piscine")), "html", null, true);
        echo "</p>
\t\t    </td>
\t\t</tr>
\t\t<tr>
                    <td align=\"center\" style=\"background: white;padding: 30px 35px;text-align: center;\">
                        <table style=\"width: 100% !important;border-collapse: collapse;\">
                            <tr>
                                <td align=\"center\" style=\"background: white;padding: 30px 35px;text-align: center;\">
                                    <p style=\"font-size: 16px;font-weight: normal;margin-bottom: 20px;\">
                                        <a style=\"color: #71bc37;text-decoration: none;display: inline-block;color: white;background: #71bc37;border: solid #71bc37;border-width: 10px 20px 8px;font-weight: bold;border-radius: 4px;text-align: center;\" href=\"http://www.particulier-coach.com";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_estimation_cheque", array("cheque" => (isset($context["cheque"]) ? $context["cheque"] : $this->getContext($context, "cheque")))), "html", null, true);
        echo "\" target=\"_blank\">Voir votre estimation</a>
                                    </p>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
        </table>

        </td>
    </tr>
    <tr>
        <td align=\"center\" style=\"text-align: center;display: block !important;clear: both !important;margin: 0 auto !important;max-width: 580px !important;\">

            <!-- Message start -->
            <table style=\"width: 100% !important;border-collapse: collapse;\">
                <tr>
                    <td style=\"background: none;text-align: center;\" align=\"center\">
                        <p style=\"font-size: 16px;font-weight: normal;margin-bottom: 20px;\">Sent by <a style=\"font-size: 14px;color: #888;text-decoration: none;font-weight: bold;\" href=\"mailto:particulier.coach@gmail.com\">Particulier & Coach</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
";
    }

    public function getTemplateName()
    {
        return "CoachEstimationBundle:Estimation:message_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  57 => 25,  53 => 24,  49 => 23,  45 => 22,  36 => 16,  19 => 1,);
    }
}
