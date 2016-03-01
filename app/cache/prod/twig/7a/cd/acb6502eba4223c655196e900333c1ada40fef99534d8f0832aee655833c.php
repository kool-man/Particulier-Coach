<?php

/* CoachAnnonceBundle:Mailing:mail.html.twig */
class __TwigTemplate_7acdacb6502eba4223c655196e900333c1ada40fef99534d8f0832aee655833c extends Twig_Template
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

                <h2 style=\"margin-bottom: 20px;line-height: 1.25;font-size: 28px;\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h2>
\t\t    </td>
\t</tr>
        <tr>
                    <td style=\"background: white;padding: 30px 35px;\">

                        <h2>Salut M. ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo ",</h2>

                        <p>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "</p>
\t\t    </td>
\t</tr>
\t<tr>
                    <td align=\"center\" style=\"background: white;padding: 30px 35px;text-align: center;\">
                        <table style=\"width: 100% !important;border-collapse: collapse;\">
                            <tr>
                                <td align=\"center\" style=\"background: white;padding: 30px 35px;text-align: center;\">
                                    <p style=\"font-size: 16px;font-weight: normal;margin-bottom: 20px;\">
                                        <a style=\"color: #71bc37;text-decoration: none;display: inline-block;color: white;background: #71bc37;border: solid #71bc37;border-width: 10px 20px 8px;font-weight: bold;border-radius: 4px;text-align: center;\" href=\"http://www.particulier-coach.com/annonce/confirmation/";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
        echo "\" target=\"_blank\">Confirmer la publication de votre annonce</a>
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
        return "CoachAnnonceBundle:Mailing:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 33,  50 => 24,  45 => 22,  36 => 16,  19 => 1,);
    }
}
