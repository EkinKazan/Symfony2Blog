<?php

/* base.html.twig */
class __TwigTemplate_d8003ebcb28a3e4a2fc93c3edaf38d0e01f50e8cb08e1cbe1a30cb5b3b7eddea extends Twig_Template
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
        $__internal_46bee50dd923e3f9c984b2e443d6667d258d2d1024a5b7d0f2bf668b74438123 = $this->env->getExtension("native_profiler");
        $__internal_46bee50dd923e3f9c984b2e443d6667d258d2d1024a5b7d0f2bf668b74438123->enter($__internal_46bee50dd923e3f9c984b2e443d6667d258d2d1024a5b7d0f2bf668b74438123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"container\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Ekin'in Blogu</a>
                </div>
                <div id=\"navbar\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Anasayfa</a></li>
                        <li><a href=\"#about1\">Kategori1</a></li>
                        <li><a href=\"#contact2\">Kategori2</a></li>
                        <li><a href=\"#contact3\">Kategori3</a></li>
                        <li><a href=\"#contact4\">Kategori4</a></li>
                        <li><a href=\"#contact5\">Kategori5</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <h1></h1>
    </div>
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_46bee50dd923e3f9c984b2e443d6667d258d2d1024a5b7d0f2bf668b74438123->leave($__internal_46bee50dd923e3f9c984b2e443d6667d258d2d1024a5b7d0f2bf668b74438123_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab0be0b6a8ee8f950dcf8794e5fc6db13864568332aa8fc8eea68696ebfe5349 = $this->env->getExtension("native_profiler");
        $__internal_ab0be0b6a8ee8f950dcf8794e5fc6db13864568332aa8fc8eea68696ebfe5349->enter($__internal_ab0be0b6a8ee8f950dcf8794e5fc6db13864568332aa8fc8eea68696ebfe5349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ekin'in Bloguna Hoşgeldiniz!";
        
        $__internal_ab0be0b6a8ee8f950dcf8794e5fc6db13864568332aa8fc8eea68696ebfe5349->leave($__internal_ab0be0b6a8ee8f950dcf8794e5fc6db13864568332aa8fc8eea68696ebfe5349_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af7199a595772e096bfd36f82addf7a9ee457da477cc47be39514c698c1232d1 = $this->env->getExtension("native_profiler");
        $__internal_af7199a595772e096bfd36f82addf7a9ee457da477cc47be39514c698c1232d1->enter($__internal_af7199a595772e096bfd36f82addf7a9ee457da477cc47be39514c698c1232d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af7199a595772e096bfd36f82addf7a9ee457da477cc47be39514c698c1232d1->leave($__internal_af7199a595772e096bfd36f82addf7a9ee457da477cc47be39514c698c1232d1_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_19dc60f9dc867de4c53ccec518190718c5896d4ca3be764062181375c86cda58 = $this->env->getExtension("native_profiler");
        $__internal_19dc60f9dc867de4c53ccec518190718c5896d4ca3be764062181375c86cda58->enter($__internal_19dc60f9dc867de4c53ccec518190718c5896d4ca3be764062181375c86cda58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19dc60f9dc867de4c53ccec518190718c5896d4ca3be764062181375c86cda58->leave($__internal_19dc60f9dc867de4c53ccec518190718c5896d4ca3be764062181375c86cda58_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0aca59ab2f22b1b531f2014ca62d0020c66ccfe8e111f8c04b2639b4745e40e3 = $this->env->getExtension("native_profiler");
        $__internal_0aca59ab2f22b1b531f2014ca62d0020c66ccfe8e111f8c04b2639b4745e40e3->enter($__internal_0aca59ab2f22b1b531f2014ca62d0020c66ccfe8e111f8c04b2639b4745e40e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0aca59ab2f22b1b531f2014ca62d0020c66ccfe8e111f8c04b2639b4745e40e3->leave($__internal_0aca59ab2f22b1b531f2014ca62d0020c66ccfe8e111f8c04b2639b4745e40e3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  116 => 37,  105 => 6,  93 => 5,  84 => 39,  81 => 38,  79 => 37,  64 => 25,  57 => 21,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Ekin'in Bloguna Hoşgeldiniz!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <div class="container">*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('homepage') }}">Ekin'in Blogu</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="collapse navbar-collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="{{ path('homepage') }}">Anasayfa</a></li>*/
/*                         <li><a href="#about1">Kategori1</a></li>*/
/*                         <li><a href="#contact2">Kategori2</a></li>*/
/*                         <li><a href="#contact3">Kategori3</a></li>*/
/*                         <li><a href="#contact4">Kategori4</a></li>*/
/*                         <li><a href="#contact5">Kategori5</a></li>*/
/*                     </ul>*/
/*                 </div><!--/.nav-collapse -->*/
/*             </div>*/
/*         </nav>*/
/*         <h1></h1>*/
/*     </div>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
