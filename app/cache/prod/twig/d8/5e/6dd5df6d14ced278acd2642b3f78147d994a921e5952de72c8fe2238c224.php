<?php

/* footer.html.twig */
class __TwigTemplate_d85e6dd5df6d14ced278acd2642b3f78147d994a921e5952de72c8fe2238c224 extends Twig_Template
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
        echo "<footer>
    <div class=\"col-md-12 up-footer\">
        <div class=\"col-md-3 col-sm-6\">
            <h3 style=\"font-size:18px;\">PARTICULIER & COACH</h3>
            <p>Ce site englobe tous les solutions et techniques de communication et de marketing immobili&egrave;res</p>
        </div>
        ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoachPageBundle:Page:navigation"));
        echo "
        <div class=\"col-md-3 col-sm-6\">
            <h3 style=\"font-size:18px;\">LIENS PRATIQUE</h3>
            <ul>
                <li><a href=\"#\">Recommander le site</a></li>
                <li><a href=\"#\">Foire aux questions (FAQ)</a></li>
                <li><a href=\"#\">Commentaires</a></li>
                <li><a href=\"#\">Partenaires</a></li>
                <li><a href=\"#\">Plan du site</a></li>
            </ul>
        </div>
        <div class=\"col-md-3 col-sm-6\">
        <h3 style=\"font-size:18px;\">RESEAUX SOCIAUX</h3>
            ";
        // line 20
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoachPageBundle:Page:social"));
        echo "
        </div>    
        <div class=\"col-md-3 col-sm-6\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/paiement/Logo_Klik&Pay_2couleurs_220x350_mp.jpg"), "html", null, true);
        echo "\" alt=\"paiement en ligne klik and pay\">
        </div>    
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"col-md-12 down-footer\">
        <p>Particulier-coach est un site annonce immobili&egrave;re en ligne &agrave; Paris et dans toute la France.<br>
            Copyright &copy; 2013 <a href=\"\">particulier-coach</a> | www.particulier-coach.com |<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("coach_condition_general_utilisation");
        echo "\">Conditions g&eacute;n&eacute;rales d'utilisation</a> | <a href=\"";
        echo $this->env->getExtension('routing')->getPath("coach_mentions_legales");
        echo "\">Mentions l&eacute;gales</a><br>
            Attention : toutes les donn&eacute;es et informations pr&eacute;sentes ou accessibles par le site Particulier-coach.com ne peuvent en aucun cas &ecirc;tre reprises &agrave; d'autres fins que la consultation priv&eacute;e par l'utilisateur .Nos serons particuli&egrave;rement vigilant, et engagera toutes actions appropri&eacute;es contre toute reprise quelconque effectu&eacute;e en violation des droits de propri&eacute;t&eacute; intellectuelle et/ou de la loi et /ou des conditions g&eacute;n&eacute;rales du site. Si vous souhaitez utiliser dans un autre cadre, et/ou diffuser des donn&eacute;es, informations et/ou des services du Site,<br><a href=\"\">contactez-nous</a>.
        </p>
        <div class=\"row\">
            <div class=\"devider-footer\"></div>
            <div class=\"col-sm-6\">
                <p> &copy; 2015 Tous droit r&eacute;serv&eacute;s<a target=\"_blank\" href=\"#\" title=\"Tout droit r&eacute;serv&eacute;s 2015\"></a></p>
            </div>
            <div class=\"col-sm-6\">
                <ul>
                    <li><a href=\"http://www.particulier-coach.com\" title=\"Particulier & Coach\">Accueil</a></li>
                    <li><a href=\"#\">A propos</a></li>
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("coach_user_contact");
        echo "\" title=\"Contactez nous\">Contact</a></li>
                </ul>
            </div>
        </div>
    </div> 
</footer>";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 41,  58 => 29,  49 => 23,  43 => 20,  27 => 7,  19 => 1,);
    }
}
