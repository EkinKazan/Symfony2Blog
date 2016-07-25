<?php

/* default/index.html.twig */
class __TwigTemplate_1dcf0760c46d27dd9a5a6987345d07cd88c07861f4934831d82afac7183759b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_7de25dc3cd442b9df5e8d00dc49e6bc4624b0663a3d57ca0671e04377d33a7d1 = $this->env->getExtension("native_profiler");
        $__internal_7de25dc3cd442b9df5e8d00dc49e6bc4624b0663a3d57ca0671e04377d33a7d1->enter($__internal_7de25dc3cd442b9df5e8d00dc49e6bc4624b0663a3d57ca0671e04377d33a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de25dc3cd442b9df5e8d00dc49e6bc4624b0663a3d57ca0671e04377d33a7d1->leave($__internal_7de25dc3cd442b9df5e8d00dc49e6bc4624b0663a3d57ca0671e04377d33a7d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bea3be754c14917fa9988e94d9ddd4bfd52984e46d981ba75e8955e2398f8cf9 = $this->env->getExtension("native_profiler");
        $__internal_bea3be754c14917fa9988e94d9ddd4bfd52984e46d981ba75e8955e2398f8cf9->enter($__internal_bea3be754c14917fa9988e94d9ddd4bfd52984e46d981ba75e8955e2398f8cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <br><br><br>
  <div class=\"container\">

    <div class=\"blog-header\">
      <h1 class=\"blog-title\">Ekin'in Blog</h1>
      <p class=\"lead blog-description\">Anasayfa.</p>
    </div>

    <div class=\"row\">

      <div class=\"col-sm-8 blog-main\">

        <div class=\"blog-post\">
          <h2 class=\"blog-post-title\">Another blog post</h2>
          <p class=\"blog-post-meta\">December 23, 2013 by <a href=\"#\">Jacob</a></p>

          <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
          <blockquote>
            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </blockquote>
          <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

    </div><!-- /.row -->

  </div><!-- /.container -->
";
        
        $__internal_bea3be754c14917fa9988e94d9ddd4bfd52984e46d981ba75e8955e2398f8cf9->leave($__internal_bea3be754c14917fa9988e94d9ddd4bfd52984e46d981ba75e8955e2398f8cf9_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <br><br><br>*/
/*   <div class="container">*/
/* */
/*     <div class="blog-header">*/
/*       <h1 class="blog-title">Ekin'in Blog</h1>*/
/*       <p class="lead blog-description">Anasayfa.</p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/* */
/*       <div class="col-sm-8 blog-main">*/
/* */
/*         <div class="blog-post">*/
/*           <h2 class="blog-post-title">Another blog post</h2>*/
/*           <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>*/
/* */
/*           <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>*/
/*           <blockquote>*/
/*             <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*           </blockquote>*/
/*           <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>*/
/*           <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>*/
/*         </div><!-- /.blog-post -->*/
/* */
/*       </div><!-- /.blog-main -->*/
/* */
/*     </div><!-- /.row -->*/
/* */
/*   </div><!-- /.container -->*/
/* {% endblock %}*/
/* */
