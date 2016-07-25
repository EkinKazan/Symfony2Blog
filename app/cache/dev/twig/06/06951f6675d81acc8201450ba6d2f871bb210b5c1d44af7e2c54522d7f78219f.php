<?php

/* liste/tum_yazi.html.twig */
class __TwigTemplate_41bcd7dda9db61b095bd43fdf8f27994490bb3ab7135ecfcc0b28ce35bca2cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "liste/tum_yazi.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6afe7969e86aef0887651bfa9a5eb6fccdbaa26f61957a61d4dffe89ea0c5ed2 = $this->env->getExtension("native_profiler");
        $__internal_6afe7969e86aef0887651bfa9a5eb6fccdbaa26f61957a61d4dffe89ea0c5ed2->enter($__internal_6afe7969e86aef0887651bfa9a5eb6fccdbaa26f61957a61d4dffe89ea0c5ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "liste/tum_yazi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afe7969e86aef0887651bfa9a5eb6fccdbaa26f61957a61d4dffe89ea0c5ed2->leave($__internal_6afe7969e86aef0887651bfa9a5eb6fccdbaa26f61957a61d4dffe89ea0c5ed2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e06ebc296c6ece3ef91af3cae9ca942921c69ba38583ebd8ee2fb75978f702ae = $this->env->getExtension("native_profiler");
        $__internal_e06ebc296c6ece3ef91af3cae9ca942921c69ba38583ebd8ee2fb75978f702ae->enter($__internal_e06ebc296c6ece3ef91af3cae9ca942921c69ba38583ebd8ee2fb75978f702ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br><br><br>
    <div class=\"container\">

        <div class=\"blog-header\">
            <h1 class=\"blog-title\">Ekin'in Blog</h1>
            <p class=\"lead blog-description\">Yazının tamamı.</p>
        </div>

        <div class=\"row\">

            <div class=\"col-sm-8 blog-main\">
                <div class=\"blog-post\">
                    <h2 class=\"blog-post-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["yazi"]) ? $context["yazi"] : $this->getContext($context, "yazi")), "baslik", array()), "html", null, true);
        echo "</h2>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["yazi"]) ? $context["yazi"] : $this->getContext($context, "yazi")), "yazi", array()), "html", null, true);
        echo "
                </div><!-- /.blog-post -->
            </div>
        </div>
    </div>
";
        
        $__internal_e06ebc296c6ece3ef91af3cae9ca942921c69ba38583ebd8ee2fb75978f702ae->leave($__internal_e06ebc296c6ece3ef91af3cae9ca942921c69ba38583ebd8ee2fb75978f702ae_prof);

    }

    public function getTemplateName()
    {
        return "liste/tum_yazi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <br><br><br>*/
/*     <div class="container">*/
/* */
/*         <div class="blog-header">*/
/*             <h1 class="blog-title">Ekin'in Blog</h1>*/
/*             <p class="lead blog-description">Yazının tamamı.</p>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-sm-8 blog-main">*/
/*                 <div class="blog-post">*/
/*                     <h2 class="blog-post-title">{{ yazi.baslik }}</h2>*/
/*                     {{ yazi.yazi }}*/
/*                 </div><!-- /.blog-post -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
