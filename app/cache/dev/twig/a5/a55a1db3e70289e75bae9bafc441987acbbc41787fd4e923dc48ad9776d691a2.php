<?php

/* admin/admin.html.twig */
class __TwigTemplate_08d0125bdc48078d90034b99b8330eaabccdf45a6ddf8445ffe385f732010993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de875d7b425785993a2b50d43257c8548f344f9bdea33f5c056acbc3e888cc0c = $this->env->getExtension("native_profiler");
        $__internal_de875d7b425785993a2b50d43257c8548f344f9bdea33f5c056acbc3e888cc0c->enter($__internal_de875d7b425785993a2b50d43257c8548f344f9bdea33f5c056acbc3e888cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de875d7b425785993a2b50d43257c8548f344f9bdea33f5c056acbc3e888cc0c->leave($__internal_de875d7b425785993a2b50d43257c8548f344f9bdea33f5c056acbc3e888cc0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b24f89063e6fe73a0b77409e740cdc87a032e70ee2af34b349817fbd6df88f1 = $this->env->getExtension("native_profiler");
        $__internal_3b24f89063e6fe73a0b77409e740cdc87a032e70ee2af34b349817fbd6df88f1->enter($__internal_3b24f89063e6fe73a0b77409e740cdc87a032e70ee2af34b349817fbd6df88f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br><br>
    <div class=\"container\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-8\">
        <div class=\"row\">
            <div class=\"col-sm-4\"></div>
            <div class=\"col-sm-8\">
                <h1 >Yönetici Paneli</h1>
            </div>
        </div>
        <br>
        <br>
        <br>
        <form class=\"form-horizontal\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("yazi-ekle");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"inputbaslik3\" class=\"col-sm-2 control-label\">Başlık</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"baslik\" class=\"form-control\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"inputon3\" class=\"col-sm-2 control-label\">Özet</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"ozet\" class=\"form-control\">
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <textarea name=\"yazi\" class=\"ckeditor\" cols=\"30\" rows=\"10\"></textarea>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                </div>
            </div>
            <div class=\"col-sm-2\"></div>
        </form>

    </div>
";
        
        $__internal_3b24f89063e6fe73a0b77409e740cdc87a032e70ee2af34b349817fbd6df88f1->leave($__internal_3b24f89063e6fe73a0b77409e740cdc87a032e70ee2af34b349817fbd6df88f1_prof);

    }

    // line 46
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ba5d19b1d5149c6bd9256c08ba3b690dd4eb0dc5ea067b4fe2c7f6fa1bdf03f = $this->env->getExtension("native_profiler");
        $__internal_6ba5d19b1d5149c6bd9256c08ba3b690dd4eb0dc5ea067b4fe2c7f6fa1bdf03f->enter($__internal_6ba5d19b1d5149c6bd9256c08ba3b690dd4eb0dc5ea067b4fe2c7f6fa1bdf03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 47
        echo "    <script src=\"//cdn.ckeditor.com/4.5.10/basic/ckeditor.js\"></script>
";
        
        $__internal_6ba5d19b1d5149c6bd9256c08ba3b690dd4eb0dc5ea067b4fe2c7f6fa1bdf03f->leave($__internal_6ba5d19b1d5149c6bd9256c08ba3b690dd4eb0dc5ea067b4fe2c7f6fa1bdf03f_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 47,  91 => 46,  56 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin_base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <br><br>*/
/*     <div class="container">*/
/*         <div class="col-sm-2"></div>*/
/*         <div class="col-sm-8">*/
/*         <div class="row">*/
/*             <div class="col-sm-4"></div>*/
/*             <div class="col-sm-8">*/
/*                 <h1 >Yönetici Paneli</h1>*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/*         <br>*/
/*         <br>*/
/*         <form class="form-horizontal" action="{{ path('yazi-ekle') }}" method="post">*/
/*             <div class="form-group">*/
/*                 <label for="inputbaslik3" class="col-sm-2 control-label">Başlık</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" name="baslik" class="form-control">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="inputon3" class="col-sm-2 control-label">Özet</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" name="ozet" class="form-control">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-sm-offset-2 col-sm-10">*/
/*                     <textarea name="yazi" class="ckeditor" cols="30" rows="10"></textarea>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-sm-offset-2 col-sm-10">*/
/*                     <button type="submit" class="btn btn-default">Sign in</button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-2"></div>*/
/*         </form>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <script src="//cdn.ckeditor.com/4.5.10/basic/ckeditor.js"></script>*/
/* {% endblock %}*/
