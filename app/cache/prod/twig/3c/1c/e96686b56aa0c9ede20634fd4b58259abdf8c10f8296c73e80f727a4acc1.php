<?php

/* CoachAnnonceBundle:Mailing:mail_acces.html.twig */
class __TwigTemplate_3c1ce96686b56aa0c9ede20634fd4b58259abdf8c10f8296c73e80f727a4acc1 extends Twig_Template
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
                <h2 style=\"margin-bottom: 20px;line-height: 1.25;font-size: 28px;\">Vos accées - compte Particulier & Coach</h2>
\t    </td>
\t</tr>
        <tr>
            <td style=\"background: white;padding: 30px 35px;\">
                <h2>Vous avez bénéficié d'un nouveau compte \"Particulier & Coach\" pour suivre vos annonces</h2><br>
                <h2>Adresse E-mail : ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</h2>
                <h2>Mot de passe : ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "</h2>
            </td>
\t</tr>
\t<tr>
                    <td align=\"center\" style=\"background: white;padding: 30px 35px;text-align: center;\">
                        <table style=\"width: 100% !important;border-collapse: collapse;\">
                            <tr>
                                <td align=\"center\" style=\"background: white;padding: 30px 35px;text-align: center;\">
                                    <p style=\"font-size: 16px;font-weight: normal;margin-bottom: 20px;\">
                                        <a style=\"color: #71bc37;text-decoration: none;display: inline-block;color: white;background: #71bc37;border: solid #71bc37;border-width: 10px 20px 8px;font-weight: bold;border-radius: 4px;text-align: center;\" href=\"http://www.particulier-coach.com/valider_compte/";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "\" target=\"_blank\">Consulter votre compte</a>
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
        return "CoachAnnonceBundle:Mailing:mail_acces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 31,  45 => 22,  41 => 21,  19 => 1,);
    }
}
