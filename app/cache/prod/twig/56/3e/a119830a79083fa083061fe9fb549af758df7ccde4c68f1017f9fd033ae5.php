<?php

/* ApplicationSonataUserBundle:Registration:register.html.twig */
class __TwigTemplate_563ea119830a79083fa083061fe9fb549af758df7ccde4c68f1017f9fd033ae5 extends Twig_Template
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
            <li class=\"active\">Inscription</li>
        </ol>
        

        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"col-md-12 alert alert-warning\">
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "
                ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            
            </div>
        </div>
        <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("coach_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
            <div class=\"col-md-6 col-md-offset-3\">
                ";
        // line 23
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 24
            echo "                <div class=\"alert alert-danger col-md-12\" role=\"alert\">
                    ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
            echo "
                    ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
            echo "
                    ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
            echo "
                    ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse_postale", array()), 'errors');
            echo "
                    ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'errors');
            echo "
                    ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
            echo "
                    ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                    ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
            echo "
                    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
            echo "
                </div>
                ";
        }
        // line 36
        echo "            </div>    
            <div class=\"col-md-6 col-md-offset-3 connexion\">
            <h3 class=\"center\">Inscription</h3>
            <div class=\"wells col-md-12\">                
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "                        
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "Username", "class" => "form-control")));
        echo "
                    </label>
                </div>    
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-lock\"></i></span>
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-lock\"></i></span>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "Vérification", "class" => "form-control")));
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("placeholder" => "Nom", "class" => "form-control")));
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("placeholder" => "Prénom", "class" => "form-control")));
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("placeholder" => "Téléphone", "class" => "form-control")));
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse_postale", array()), 'widget', array("attr" => array("placeholder" => "Adresse", "class" => "form-control")));
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("placeholder" => "Code postale", "class" => "form-control")));
        echo "
                    </label>
                </div>    
                <div class=\"form-group\">
                    <input class=\"btn btn-success pull-right\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"submit\"> 
                </div>
                
            </div>
           
        </div>
        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
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
        return "ApplicationSonataUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 102,  214 => 96,  207 => 92,  198 => 86,  189 => 80,  180 => 74,  171 => 68,  162 => 62,  153 => 56,  144 => 50,  135 => 44,  128 => 40,  122 => 36,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  81 => 24,  79 => 23,  72 => 21,  67 => 18,  58 => 15,  55 => 14,  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}
