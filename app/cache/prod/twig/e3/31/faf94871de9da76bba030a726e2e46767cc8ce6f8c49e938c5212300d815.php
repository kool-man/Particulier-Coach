<?php

/* ApplicationSonataUserBundle:Security:login.html.twig */
class __TwigTemplate_e331faf94871de9da76bba030a726e2e46767cc8ce6f8c49e938c5212300d815 extends Twig_Template
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

        <ol class=\"breadcrumb\">
            <li class=\"active\">login</li>
        </ol>
        

        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"col-md-12 alert alert-warning\">
            ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
            ";
        } else {
            // line 16
            echo "            Pour bénéficier de nos services en ligne. vous devez posséder un compte particulier-coach.com
            ";
        }
        // line 18
        echo "            </div>
        </div>
        <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("coach_user_security_check");
        echo "\" method=\"post\">    
        <div class=\"col-md-6 col-md-offset-3 connexion\">
            <h3 class=\"center\">Connexion</h3>
            <div class=\"wells col-md-12\">
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" >
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-lock\"></i></span>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" >
                    </label>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>    
                </div>
                <input type=\"hidden\" name=\"type\" value=\"1\" /> 
                <div class=\"form-group\">
                    <input class=\"btn btn-success pull-right\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"> 
                </div>
                <div class=\"links\">
                   
                <a href=\"#\">Mot de passe oublier ?</a>
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("coach_user_registration_register");
        echo "\">Inscription</a>
                </div>
            </div>
           
        </div>
        </form>
    </div>
</div>

<br>
<br>
<br>
";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  103 => 42,  96 => 38,  88 => 33,  77 => 27,  67 => 20,  63 => 18,  59 => 16,  53 => 14,  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}
