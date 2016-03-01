<?php

/* CoachPageBundle:Page:conditions.html.twig */
class __TwigTemplate_9d51dd44e8de7e500ae51c7e3d727e54eaa92719a125f29f66a2ea99e80d2367 extends Twig_Template
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
        <h1 class=\"title-page\">conditions générales CGU d’utilisation et de vente CGV</h1>
    </div>  \t
    <div class=\"col-md-12\">
        <div class=\"col-md-12 wells\">
           <div class=\"col-md-12 mrg-t-10\"></div>
            <div class=\"row\">
                <!--step-4-->
                <div class=\"col-md-10 col-md-offset-1 display\" id=\"step-4-form\" style=\"display: block;\">
                    <b>Conditions générales d’utilisation</b> 
                    <br>Ce site est destiné exclusivement de particulier à particulier, qui ont fais appel à nos services autorisés. Tout démarchage commercial est interdit. 
                    <br><br>
                    <b>Propriété intellectuelle</b> 
                    <br>Tout éléments ou représentation constituant le site : particulier-coach.com et particulier-coach.fr (texte, graphisme, photos, images, vidéos, sons, plans, nom, logo, marque, outils, base de données clients et de prix de l’immobilier, et œuvres protégeable diverses, déposés ou non, et ainsi le site relèvent des législations françaises et internationales des droit d’auteur et de la protection intellectuelle. 
                    <br><br>Il est interdit d’utiliser et / ou  reproduction et / ou représenter et / ou modifier et  / ou adapter et / ou traduction et / ou copier et / ou distribuer, l’un de quelconque des éléments du site ou site lui-même de façon intégrale ou partielle, sur quelque support que ce soit (électronique, papier ou tout support) sans l’autorisation expresse et préalable.
                    <br><br>
                    <b>Droit «  bases de données » </b>
                    <br>Nos bases de données sont protégées conforme à l’art. L.341-1 du code de la propriété intellectuelle.  Il est interdit l’extraction et / ou l’utilisation totale ou partielle du contenu de base de données.
                    <br><br>
                    <b>Responsabilités</b>
                    <br>Tout dommages de nature, directs ou indirects résultant du contenu et /  ou de l’accès et / ou de l’utilisation du site, notamment non limitative à toute perte d’exploitation, financière ou commerciale.
                    <br>En cas d’utilisation non conforme ou d’exploitation illicite de ce site l’utilisateur est seul responsable de tout dommage causé à autrui. 
                    Nous n’accepterons aucune annonce qui ne répond pas aux règles de la bonne conduite
                    <br><br>
                    <b>Conditions générales de vente</b>
                    <br>
                    <b>Article 1 - Commande </b>
                    <br><br>
                    <b>Coaching immobilier</b>
                    <br>
                    Le service de consultation en ligne par un coach en immobilier est payable une fois. La consultation se fait par tous outils de communication incluant l’appel téléphonique, Skype, Viber. Un rendez-vous est fixé au préalable avec un coach immobilier.
                    <br><br>
                    <b>Estimation immobilière</b>
                    <br>
                    Estimation immobilière en ligne et la consultation des prix immobilier du mètre carré M² est libre et gratuite.
                    <br><br>
                    <b>Déposer une annonce</b>
                    <br>
                    La publication des annonces immobilières, est gratuite et payante par abonnement mensuel pour les packs indiqués dans le site particulier-coach.com.
                    <br><br>
                    <b>Panneaux immobiliers</b>
                    <br>
                    Achat de panneau immobilier A vendre et A louer personnalisable « titre et numéro de téléphone », livré directement par le fabricant.
                    <br><br>
                    <b>Articule 2 – Prix</b>
                    <br>
                    Les tarifs sont valables au moment de la souscription à un service ou / et produit à l’instant de la validation d’acte d’achat. Les prix sont exprimés en euros et la tva en vigueur en France. 
                    <br>Les frais de livraisons sont définis par la société de transport.
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
        return "CoachPageBundle:Page:conditions.html.twig";
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
