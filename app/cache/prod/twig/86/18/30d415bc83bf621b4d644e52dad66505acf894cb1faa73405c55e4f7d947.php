<?php

/* ApplicationSonataUserBundle:Profile:profile.html.twig */
class __TwigTemplate_861830d415bc83bf621b4d644e52dad66505acf894cb1faa73405c55e4f7d947 extends Twig_Template
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
        echo "    <div class=\"row\">
    <div class=\"col-md-12\">
        <h3 class=\"title-page\">Mon compte</h3>
    </div>
    <!-- RESULTAT DUNE RECHERCHE-->
    <div class=\"col-md-12\">
        <div role=\"tabpanel\">

            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t  
                <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-bullhorn\"></i>&nbsp;&nbsp;Mes annonces</a></li>
                <li role=\"presentation\"><a href=\"#likes\" ";
        // line 15
        if (array_key_exists("tabmsg", $context)) {
            echo " class=\"active\" ";
        }
        echo " aria-controls=\"likes\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-thumbs-o-up\"></i>&nbsp;&nbsp;Messages Envoyées</a></li>
                <li role=\"presentation\"><a href=\"#recus\" ";
        // line 16
        if (array_key_exists("tabmsg", $context)) {
            echo " class=\"active\" ";
        }
        echo " aria-controls=\"likes\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-thumbs-o-up\"></i>&nbsp;&nbsp;Messages Reçus</a></li>
                <li role=\"presentation\"><a href=\"#messages\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Informations</a></li>
                <li role=\"presentation\"><a href=\"#panneaux\" aria-controls=\"panneaux\" role=\"tab\" data-toggle=\"tab\">Mes panneaux</a></li>
                
            </ul>

            <!-- Tab panes -->
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
          
\t\t\t  <div class=\"col-md-12\">
\t\t\t\t<div class=\"results\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 31
            echo "\t\t\t\t\t\t   
                                             
                                             
                    <div class=\"table-responsive mrg-t-20\">
                        <table class=\"table table-hover\">
                           
                            <tbody>
                                <tr class=\"media\">
                                    
                                       
                                           <td>
\t\t\t\t\t\t\t\t\t<a class=\"media-left\" href=\"#\">
                                                                             ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["annonce"], "mesImages", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/coachannonce/") . $this->getAttribute($context["image"], "getWebPath", array(), "method")), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" alt=\"\"> 
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                                                        </a>
                                                                        
\t\t\t\t\t\t\t\t\t<div class=\"media-body\" >
\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_details", array("id" => $this->getAttribute($context["annonce"], "id", array()), "titre" => strtr($this->getAttribute($context["annonce"], "titre", array()), array(" " => "-")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"col-md-12\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Espace : </strong>";
            // line 54
            echo twig_escape_filter($this->env, ($this->getAttribute($context["annonce"], "surface", array()) . " m² "), "html", null, true);
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Pièces :</strong> ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbPieces", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong> Prix :</strong> ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                                                <div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong> Date de publication :</strong> ";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                                                        
                                              </td>                           
                            
                                        
                                        
                                   
                                    <td>
                                        
                                       <div class=\"row media_right\">
                                            <div class=\"col-md-10\" style=\"left:9%; bottom: -22%;\">
                                                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_editer", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success pull-right\" style=\"width: 75% ;\" title=\"Editer\"> Editer </a>
                                            </div>
                                            <div class=\"col-md-8\"></div>
                                            <div class=\"col-md-8\"></div>
                                            <div class=\"col-md-8\"></div>
                                            <div class=\"col-md-8\"></div>
                                            <div class=\"col-md-10\" style=\"left:9%; bottom: -22%;\">
                                                    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_photos", array("annonce" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success pull-right\" style=\"width: 75% ;\" title=\"Ajouter photos\"> Ajouter des photos </a>
                                            </div>
                                            <div class=\"col-md-8\"></div>
                                            <div class=\"col-md-8\"></div>
                                            <div class=\"col-md-8\"></div>
                                            <div class=\"col-md-8\"></div>
                                            ";
            // line 91
            if (($this->getAttribute($context["annonce"], "vendu", array()) == false)) {
                echo "        
                                            <div class=\"col-md-10\"  style=\"left:9%; bottom: -40% !important;\"> 
                                                    <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_annonce_delete", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success pull-right\" style=\"width: 75% ;\" title=\"Vendu\">Vendu</a>
                                            </div>
                                            ";
            } else {
                // line 96
                echo "                                            <div class=\"col-md-10\"  style=\"left:9%; bottom: -40% !important;\"> 
                                                <a href=\"#\" class=\"btn pull-right\" style=\"width: 75% ;background-color:#FF0000\" title=\"Vendu\">Vendu</a>
                                            </div>
                                            ";
            }
            // line 100
            echo "                                                                        
                                                                        
                                        </div> 
                                        
                                    </td>
                                     
                                    
                                </tr>\t\t   
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t   
                            </tbody>
                        </table>
                                             
                    </div>                    
                                             
                                             
                                             
                                             
                                             
                                                                
\t\t\t\t\t\t\t
\t\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>   
\t\t\t\t\t</div>
\t\t\t\t</div>   
\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"mrg-t-20 row\">
                        <div class=\"col-md-4 col-md-offset-8\">
                            <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("coach_pack");
        echo "\" class=\"btn btn-success pull-right\">Publier une nouvelle annonce</a>
                        </div>
                    </div>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"likes\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"table-responsive mrg-t-20\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <th width='40%'>Messages</th>
                                            <th width='20%'>Email</th>
                                            <th width='20%'>Date de reception</th>
\t\t\t\t\t    <th width='20%'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 148
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesmessages"]) ? $context["mesmessages"] : $this->getContext($context, "mesmessages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<tr>
                                            <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</td>
                                            <td><a href=\"\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "email", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
                                        <div class=\"dropdown\">
                                            <a id=\"dLabel\" data-target=\"#\" href=\"http://example.com\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">
                                                Actions
                                                <span class=\"caret\"></span>
                                            </a>

                                            <ul class=\"dropdown-menu icons\" role=\"menu\" aria-labelledby=\"dLabel\">
                                                <li><a href=\"\"><i class=\"fa fa-pencil\"></i>Répondre</a></li>
                                                <li><a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_message_delete", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                             </tr>
                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo " 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"recus\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"table-responsive mrg-t-40\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <th width='40%'>Messages</th>
                                            <th width='20%'>Email</th>
                                            <th width='20%'>Date de reception</th>
\t\t\t\t\t    <th width='20%'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages_recu"]) ? $context["messages_recu"] : $this->getContext($context, "messages_recu")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<tr>
                                            <td>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</td>
                                            <td><a href=\"\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "email", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 192
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
                                        <div class=\"dropdown\">
                                            <a id=\"dLabel\" data-target=\"#\" href=\"http://example.com\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">
                                                Actions
                                                <span class=\"caret\"></span>
                                            </a>

                                            <ul class=\"dropdown-menu icons\" role=\"menu\" aria-labelledby=\"dLabel\">
                                                <li><a href=\"\"><i class=\"fa fa-pencil\"></i>Répondre</a></li>
                                                <li><a href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coach_message_delete", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                             </tr>
                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo " 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                    
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
\t\t\t\t
\t\t";
        // line 216
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ApplicationSonataUserBundle:Profile:edit"));
        echo "\t\t\t\t
\t\t\t\t
\t       </div>
               <div role=\"tabpanel\" class=\"tab-pane\" id=\"panneaux\">
                        <div class=\"row\">
                                <div class=\"col-md-4 small-panneau\">
                                        <div class=\"panneau-creation mrg-tb-20\">
                                                <div class=\"space-1\">
                                                        A VENDRE
                                                        <i class=\"fa fa-circle-o c-left animated bounceIn\"></i>
                                                        <i class=\"fa fa-circle-o c-right  animated bounceIn\"></i>
                                                </div>
                                                <div class=\"space-2\">
                                                        Villa avec piscine S+4 2 salles de bains
                                                </div>
                                                <div class=\"space-3\">
                                                        Tél : 0033 2514 2226 22
                                                </div>

                                                <div class=\"space-4\">
                                                        www.particulier-coach.com
                                                </div>

                                        </div>
                                </div>

                                <div class=\"col-md-4 small-panneau\">
                                        <div class=\"panneau-creation mrg-tb-20\">
                                                <div class=\"space-1\">
                                                        A VENDRE
                                                        <i class=\"fa fa-circle-o c-left animated bounceIn\"></i>
                                                        <i class=\"fa fa-circle-o c-right  animated bounceIn\"></i>
                                                </div>
                                                <div class=\"space-2\">
                                                        Villa avec piscine S+4 2 salles de bains
                                                </div>
                                                <div class=\"space-3\">
                                                        Tél : 0033 2514 2226 22
                                                </div>

                                                <div class=\"space-4\">
                                                        www.particulier-coach.com
                                                </div>

                                        </div>
                                </div>

                                <div class=\"col-md-4 small-panneau\">
                                        <div class=\"panneau-creation mrg-tb-20\">
                                                <div class=\"space-1\">
                                                        A VENDRE
                                                        <i class=\"fa fa-circle-o c-left animated bounceIn\"></i>
                                                        <i class=\"fa fa-circle-o c-right  animated bounceIn\"></i>
                                                </div>
                                                <div class=\"space-2\">
                                                        Villa avec piscine S+4 2 salles de bains
                                                </div>
                                                <div class=\"space-3\">
                                                        Tél : 0033 2514 2226 22
                                                </div>

                                                <div class=\"space-4\">
                                                        www.particulier-coach.com
                                                </div>

                                        </div>
                                </div>
                                <div class=\"clearfix\"></div>
                                <div class=\"col-md-offset-4 col-md-4\">
                                        <a href=\"panneau-creation.php\" class=\"btn btn-success btn-block mrg-tb-20\">Créer un autre panneau</a>
                                </div>


                        </div>
                </div> 
            </div>
            
        </div>
        <div class=\"mrg-tb-20\">
            <div class=\"col-md-12 \">
                <div class=\"row wells\">
                    <div class=\"col-md-6\">
                        <a href=\"\"><img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/annonces-banner.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"></a>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"pub-img panneau nmrg\">
                            <a href=\"\"><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-banner.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"></a>
                            <img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" style=\"left:25px; bottom: 28px;\">
                            <img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" data-wow-delay=\"0.5s\" style=\"left:95px; bottom: 48px;\">
                            <img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" data-wow-delay=\"1s\" style=\"left:145px; bottom: 30px;\">
                            <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/images/pub/avendre-btn.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-img wow bounceIn\" data-wow-delay=\"1.5s\" style=\"left:210px; bottom: 35px;\">
                            <p class=\"center banner wow fadeInLeft\" data-wow-delay=\"2s\" >Je commande mon panneau</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END RESULTAT DUNE RECHERCHE-->



</div>
<br>
<br>
<!--Animation plugin-->
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachfront/js/js-animation/wow.min.js"), "html", null, true);
        echo "\"></script>
<!--init plugin-->
<script>
new WOW().init();
</script>
";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 323,  479 => 306,  475 => 305,  471 => 304,  467 => 303,  463 => 302,  456 => 298,  371 => 216,  360 => 207,  348 => 202,  335 => 192,  331 => 191,  327 => 190,  320 => 188,  297 => 167,  285 => 162,  272 => 152,  268 => 151,  264 => 150,  257 => 148,  236 => 130,  226 => 122,  199 => 100,  193 => 96,  187 => 93,  182 => 91,  173 => 85,  163 => 78,  145 => 63,  139 => 60,  133 => 57,  127 => 54,  120 => 50,  114 => 49,  109 => 46,  100 => 44,  96 => 43,  82 => 31,  78 => 30,  59 => 16,  53 => 15,  39 => 3,  36 => 2,  11 => 1,);
    }
}
