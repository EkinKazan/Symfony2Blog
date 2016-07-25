<?php

/* admin_base.html.twig */
class __TwigTemplate_f49dc3cfff9d09554874c8938d9d6a89fb296818fb7378111ead682bb5f81405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b1878c4c19ae07c60da8d354c8d42bbc24851bba8c9ff4531fd278e0e7fd497 = $this->env->getExtension("native_profiler");
        $__internal_1b1878c4c19ae07c60da8d354c8d42bbc24851bba8c9ff4531fd278e0e7fd497->enter($__internal_1b1878c4c19ae07c60da8d354c8d42bbc24851bba8c9ff4531fd278e0e7fd497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "</body>
</html>
";
        
        $__internal_1b1878c4c19ae07c60da8d354c8d42bbc24851bba8c9ff4531fd278e0e7fd497->leave($__internal_1b1878c4c19ae07c60da8d354c8d42bbc24851bba8c9ff4531fd278e0e7fd497_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f328eb3db22ed6e9d86280b2b4a6343e61150562d2207e198a196a3ed7c5c5b = $this->env->getExtension("native_profiler");
        $__internal_1f328eb3db22ed6e9d86280b2b4a6343e61150562d2207e198a196a3ed7c5c5b->enter($__internal_1f328eb3db22ed6e9d86280b2b4a6343e61150562d2207e198a196a3ed7c5c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ekin'in Bloguna Hoşgeldiniz!";
        
        $__internal_1f328eb3db22ed6e9d86280b2b4a6343e61150562d2207e198a196a3ed7c5c5b->leave($__internal_1f328eb3db22ed6e9d86280b2b4a6343e61150562d2207e198a196a3ed7c5c5b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3af49dfd8cb441077b048d6257c6464f3ad56dc7946e0c6763046cf7f48b2a7d = $this->env->getExtension("native_profiler");
        $__internal_3af49dfd8cb441077b048d6257c6464f3ad56dc7946e0c6763046cf7f48b2a7d->enter($__internal_3af49dfd8cb441077b048d6257c6464f3ad56dc7946e0c6763046cf7f48b2a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3af49dfd8cb441077b048d6257c6464f3ad56dc7946e0c6763046cf7f48b2a7d->leave($__internal_3af49dfd8cb441077b048d6257c6464f3ad56dc7946e0c6763046cf7f48b2a7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_55fac834b6b0538bc29f73926c56ded5a77d7479c5f534d8bf9a9b635d9703fd = $this->env->getExtension("native_profiler");
        $__internal_55fac834b6b0538bc29f73926c56ded5a77d7479c5f534d8bf9a9b635d9703fd->enter($__internal_55fac834b6b0538bc29f73926c56ded5a77d7479c5f534d8bf9a9b635d9703fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55fac834b6b0538bc29f73926c56ded5a77d7479c5f534d8bf9a9b635d9703fd->leave($__internal_55fac834b6b0538bc29f73926c56ded5a77d7479c5f534d8bf9a9b635d9703fd_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c16f57d3dd708e2a8b4ba9ca3e4030670bd585f2446540683710952d40f5835e = $this->env->getExtension("native_profiler");
        $__internal_c16f57d3dd708e2a8b4ba9ca3e4030670bd585f2446540683710952d40f5835e->enter($__internal_c16f57d3dd708e2a8b4ba9ca3e4030670bd585f2446540683710952d40f5835e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c16f57d3dd708e2a8b4ba9ca3e4030670bd585f2446540683710952d40f5835e->leave($__internal_c16f57d3dd708e2a8b4ba9ca3e4030670bd585f2446540683710952d40f5835e_prof);

    }

    public function getTemplateName()
    {
        return "admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  49 => 12,  47 => 11,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Ekin'in Bloguna Hoşgeldiniz!{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
