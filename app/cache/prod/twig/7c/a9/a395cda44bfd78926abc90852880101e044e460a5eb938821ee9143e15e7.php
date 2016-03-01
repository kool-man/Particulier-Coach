<?php

/* ApplicationSonataUserBundle:Contact:contact.html.twig */
class __TwigTemplate_7ca9a395cda44bfd78926abc90852880101e044e460a5eb938821ee9143e15e7 extends Twig_Template
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

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Contact</a></li>
        </ol>
        <div class=\"col-md-6 col-md-offset-3\">
          
\t    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "sent"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "
                <div class=\"alert alert-info col-md-12\" role=\"alert\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "             
\t\t</div>
\t\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            
        </div>
        <div class=\"col-md-6 col-md-offset-3 connexion\">
           <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("coach_user_contact_send");
        echo "\" method=\"post\">
\t\t\t<h3 class=\"center\">Contacter nous</h3>
            <div class=\"wells col-md-12\">
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-user\"></i></span>
                        
                         ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "nom", "placeholder" => "Nom et prénom")));
        echo "   
\t\t    </label>
                </div>
                
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-envelope-o\"></i></span>
                       
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mail")));
        echo "   
                    </label>
                </div>

                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-pencil-square-o\"></i></span>
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtMail", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Texte ici")));
        echo "
\t\t    </label>
\t\t    
                </div>
                <div class=\"form-group\">
                    <label>
                        <span class=\"input-tr-addon\"><i class=\"fa fa-pencil-square-o\"></i></span>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "captcha", array()), 'widget');
        echo "
\t\t    </label>
\t\t    
                </div>    
                    
                <div class=\"form-group\">
                    <input class=\"btn btn-success pull-right\" value=\"envoyer\" type=\"submit\" name=\"envoyer\"> 
                </div>
                
            </div>
\t\t\t ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          </form>
        </div>
    </div>
</div>

<br>
<br>
<br>
";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  113 => 50,  103 => 43,  93 => 36,  82 => 28,  72 => 21,  67 => 18,  57 => 14,  53 => 12,  49 => 11,  39 => 3,  36 => 2,  11 => 1,);
    }
}
