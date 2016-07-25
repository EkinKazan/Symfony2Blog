<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e18bbe24affba84ab2eff9c74062a5e1d2e45eb13c7fc262007e85d98541432b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31fa8be7ee3d63088b1cb990786af492b876f7c54be347ba7997358c66cde80c = $this->env->getExtension("native_profiler");
        $__internal_31fa8be7ee3d63088b1cb990786af492b876f7c54be347ba7997358c66cde80c->enter($__internal_31fa8be7ee3d63088b1cb990786af492b876f7c54be347ba7997358c66cde80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31fa8be7ee3d63088b1cb990786af492b876f7c54be347ba7997358c66cde80c->leave($__internal_31fa8be7ee3d63088b1cb990786af492b876f7c54be347ba7997358c66cde80c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62a5f4db45e0596451de61f96719c71748c1721c08c131be21565bd70844714c = $this->env->getExtension("native_profiler");
        $__internal_62a5f4db45e0596451de61f96719c71748c1721c08c131be21565bd70844714c->enter($__internal_62a5f4db45e0596451de61f96719c71748c1721c08c131be21565bd70844714c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <div class=\"container\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-8\">
            <br><br><br>
            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"form-horizontal\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-3 control-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-7\">
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"password\" class=\"col-sm-3 control-label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-7\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-sm-offset-3 col-sm-7\">
                        <div class=\"checkbox\">
                            <label for=\"remember_me\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-sm-offset-3 col-sm-7\">
                        <input type=\"submit\" class=\"btn btn-default\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                </div>
            </form>
        </div>
        <div class=\"col-sm-2\"></div>
    </div>


";
        
        $__internal_62a5f4db45e0596451de61f96719c71748c1721c08c131be21565bd70844714c->leave($__internal_62a5f4db45e0596451de61f96719c71748c1721c08c131be21565bd70844714c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 43,  92 => 35,  79 => 25,  71 => 20,  66 => 18,  60 => 15,  56 => 14,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div class="container">*/
/*         <div class="col-sm-2"></div>*/
/*         <div class="col-sm-8">*/
/*             <br><br><br>*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post"  class="form-horizontal">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="username" class="col-sm-3 control-label">{{ 'security.login.username'|trans }}</label>*/
/*                     <div class="col-sm-7">*/
/*                         <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="password" class="col-sm-3 control-label">{{ 'security.login.password'|trans }}</label>*/
/*                     <div class="col-sm-7">*/
/*                         <input type="password" class="form-control" id="password" name="_password" required="required" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="col-sm-offset-3 col-sm-7">*/
/*                         <div class="checkbox">*/
/*                             <label for="remember_me">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> {{ 'security.login.remember_me'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="col-sm-offset-3 col-sm-7">*/
/*                         <input type="submit" class="btn btn-default" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <div class="col-sm-2"></div>*/
/*     </div>*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
