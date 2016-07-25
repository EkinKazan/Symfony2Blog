<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fdb476a9823d276e71c774719b57bff676d7c8a9c6f8531c3d0e91d5c04e52e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fdece681de34be0bc85c036dbe9cd0a2a2b56d3c21dd5fae9c1a9ed05babcf0 = $this->env->getExtension("native_profiler");
        $__internal_7fdece681de34be0bc85c036dbe9cd0a2a2b56d3c21dd5fae9c1a9ed05babcf0->enter($__internal_7fdece681de34be0bc85c036dbe9cd0a2a2b56d3c21dd5fae9c1a9ed05babcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fdece681de34be0bc85c036dbe9cd0a2a2b56d3c21dd5fae9c1a9ed05babcf0->leave($__internal_7fdece681de34be0bc85c036dbe9cd0a2a2b56d3c21dd5fae9c1a9ed05babcf0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b912a40a15bbedfe1c2f03cdfd90b342c5aa357543b769049d1601dc9fa3499 = $this->env->getExtension("native_profiler");
        $__internal_2b912a40a15bbedfe1c2f03cdfd90b342c5aa357543b769049d1601dc9fa3499->enter($__internal_2b912a40a15bbedfe1c2f03cdfd90b342c5aa357543b769049d1601dc9fa3499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b912a40a15bbedfe1c2f03cdfd90b342c5aa357543b769049d1601dc9fa3499->leave($__internal_2b912a40a15bbedfe1c2f03cdfd90b342c5aa357543b769049d1601dc9fa3499_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a4884983980b2267a6bece79ffa8642047a831e8cb9fee692fab4426fe991e7 = $this->env->getExtension("native_profiler");
        $__internal_7a4884983980b2267a6bece79ffa8642047a831e8cb9fee692fab4426fe991e7->enter($__internal_7a4884983980b2267a6bece79ffa8642047a831e8cb9fee692fab4426fe991e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a4884983980b2267a6bece79ffa8642047a831e8cb9fee692fab4426fe991e7->leave($__internal_7a4884983980b2267a6bece79ffa8642047a831e8cb9fee692fab4426fe991e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_91e976b8cff23c2f87355de758633d4d743d2b91de7dd9acb9e4e3fc7751f2a1 = $this->env->getExtension("native_profiler");
        $__internal_91e976b8cff23c2f87355de758633d4d743d2b91de7dd9acb9e4e3fc7751f2a1->enter($__internal_91e976b8cff23c2f87355de758633d4d743d2b91de7dd9acb9e4e3fc7751f2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_91e976b8cff23c2f87355de758633d4d743d2b91de7dd9acb9e4e3fc7751f2a1->leave($__internal_91e976b8cff23c2f87355de758633d4d743d2b91de7dd9acb9e4e3fc7751f2a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
