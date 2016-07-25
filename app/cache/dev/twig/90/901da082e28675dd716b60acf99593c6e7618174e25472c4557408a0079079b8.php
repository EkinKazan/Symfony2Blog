<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_594c1714b040ed05d82913c07fe374a5bf6689ae10a243502c329e834333a5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de99647c4f5847a2d5a1e977d8f3fe80d01becf1987f6e38a5e1f1e919e2966e = $this->env->getExtension("native_profiler");
        $__internal_de99647c4f5847a2d5a1e977d8f3fe80d01becf1987f6e38a5e1f1e919e2966e->enter($__internal_de99647c4f5847a2d5a1e977d8f3fe80d01becf1987f6e38a5e1f1e919e2966e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de99647c4f5847a2d5a1e977d8f3fe80d01becf1987f6e38a5e1f1e919e2966e->leave($__internal_de99647c4f5847a2d5a1e977d8f3fe80d01becf1987f6e38a5e1f1e919e2966e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0fa5554cc79eeb5359f18f748dc6f7d1a518ae412af92b1e288229ddc5bad72 = $this->env->getExtension("native_profiler");
        $__internal_c0fa5554cc79eeb5359f18f748dc6f7d1a518ae412af92b1e288229ddc5bad72->enter($__internal_c0fa5554cc79eeb5359f18f748dc6f7d1a518ae412af92b1e288229ddc5bad72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c0fa5554cc79eeb5359f18f748dc6f7d1a518ae412af92b1e288229ddc5bad72->leave($__internal_c0fa5554cc79eeb5359f18f748dc6f7d1a518ae412af92b1e288229ddc5bad72_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f946377fcc2bc7b3388d2f6d1318bc73d8f05a4f53288c8e3dd07d6f28a2aefe = $this->env->getExtension("native_profiler");
        $__internal_f946377fcc2bc7b3388d2f6d1318bc73d8f05a4f53288c8e3dd07d6f28a2aefe->enter($__internal_f946377fcc2bc7b3388d2f6d1318bc73d8f05a4f53288c8e3dd07d6f28a2aefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f946377fcc2bc7b3388d2f6d1318bc73d8f05a4f53288c8e3dd07d6f28a2aefe->leave($__internal_f946377fcc2bc7b3388d2f6d1318bc73d8f05a4f53288c8e3dd07d6f28a2aefe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c912f6e5e8253bb4d9dd9922d6ac256388e0925ac78c4705cf55fea4b34fe3d2 = $this->env->getExtension("native_profiler");
        $__internal_c912f6e5e8253bb4d9dd9922d6ac256388e0925ac78c4705cf55fea4b34fe3d2->enter($__internal_c912f6e5e8253bb4d9dd9922d6ac256388e0925ac78c4705cf55fea4b34fe3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c912f6e5e8253bb4d9dd9922d6ac256388e0925ac78c4705cf55fea4b34fe3d2->leave($__internal_c912f6e5e8253bb4d9dd9922d6ac256388e0925ac78c4705cf55fea4b34fe3d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
