<?php

/* CoachPageBundle:Mailing:mail.html.twig */
class __TwigTemplate_815150dac6d3f38bf244c2725bb20226830c17b7371ee055b5e199b8b10ef575 extends Twig_Template
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
\t<tr>
            <td style=\"background: white;padding: 30px 35px;\">
\t\t\t   <img style=\"max-width: 100%;margin: 0 auto;display: block;\" src=\"http://www.particulier-coach.com/mailer/images/logo.png\">
\t\t    </td>
\t</tr>
\t<tr>
            <td align=\"center\" style=\"padding: 20px 0;background: #71bc37;color: white;\">

                <h2 style=\"margin-bottom: 20px;line-height: 1.25;font-size: 28px;\">Demande d'obtention du guide \"Vente sans agence immobilière\"</h2>
\t\t    </td>
\t</tr>
        <tr>
                    <td style=\"background: white;padding: 30px 35px;\">

                        <h2>Nom : ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "</h2>
                        <h2>Adresse E-mail :";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</h2>
                        <h2>Profession : ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["profession"]) ? $context["profession"] : $this->getContext($context, "profession")), "html", null, true);
        echo "</h2>
\t\t    </td>
\t</tr>
\t<tr>
                    <td align=\"center\" style=\"background: white;padding: 30px 35px;text-align: center;\">
                        <table style=\"width: 100% !important;border-collapse: collapse;\">
                            <tr>
                                <td align=\"center\" style=\"background: white;padding: 30px 35px;text-align: center;\">
                                    <p style=\"font-size: 16px;font-weight: normal;margin-bottom: 20px;\">
                                        <a style=\"color: #71bc37;text-decoration: none;display: inline-block;color: white;background: #71bc37;border: solid #71bc37;border-width: 10px 20px 8px;font-weight: bold;border-radius: 4px;text-align: center;\" href=\"http://www.particulier-coach.com/admin/dashboard\" target=\"_blank\">Consulter le back office</a>
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
</body>";
    }

    public function getTemplateName()
    {
        return "CoachPageBundle:Mailing:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  46 => 23,  42 => 22,  19 => 1,);
    }
}
