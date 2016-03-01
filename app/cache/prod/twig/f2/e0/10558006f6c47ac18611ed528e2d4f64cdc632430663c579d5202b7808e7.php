<?php

/* ApplicationSonataUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f2e010558006f6c47ac18611ed528e2d4f64cdc632430663c579d5202b7808e7 extends Twig_Template
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
        echo "    
        <form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("coach_user_security_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
             
            <div class=\"col-md-6 col-md-offset-3 connexion\">
            <div class=\"wells col-md-12\">                
                    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "                        
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                       ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "Username", "class" => "form-control")));
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
        echo "
                        
                    </label>
                </div>
\t\t\t\t<div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("placeholder" => "Password", "class" => "form-control")));
        echo "
                        
                    </label>
                </div>
\t\t\t\t
               
                <div class=\"form-group\">
                    <input class=\"btn btn-success pull-right\" value=\"Update\" type=\"submit\"> 
                </div>
                
            </div>
           
        </div>
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>        
 
";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 36,  57 => 23,  47 => 16,  38 => 10,  31 => 6,  22 => 2,  19 => 1,);
    }
}
