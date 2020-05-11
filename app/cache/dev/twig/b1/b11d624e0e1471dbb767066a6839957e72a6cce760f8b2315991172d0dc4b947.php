<?php

/* base.html.twig */
class __TwigTemplate_94ceedd97c1ae838cd4b0b4d846ca795408ea595710a827e1b3775b102e70994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_032e548dbb55c0fcaa340c703ade6efe85f9e5b636826ab9de49d656c938bac5 = $this->env->getExtension("native_profiler");
        $__internal_032e548dbb55c0fcaa340c703ade6efe85f9e5b636826ab9de49d656c938bac5->enter($__internal_032e548dbb55c0fcaa340c703ade6efe85f9e5b636826ab9de49d656c938bac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 6
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_032e548dbb55c0fcaa340c703ade6efe85f9e5b636826ab9de49d656c938bac5->leave($__internal_032e548dbb55c0fcaa340c703ade6efe85f9e5b636826ab9de49d656c938bac5_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_3d081386019a97fc4c7fbe5394cf6c34bc943dc20da7024076a15950fa6ce0b2 = $this->env->getExtension("native_profiler");
        $__internal_3d081386019a97fc4c7fbe5394cf6c34bc943dc20da7024076a15950fa6ce0b2->enter($__internal_3d081386019a97fc4c7fbe5394cf6c34bc943dc20da7024076a15950fa6ce0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_3d081386019a97fc4c7fbe5394cf6c34bc943dc20da7024076a15950fa6ce0b2->leave($__internal_3d081386019a97fc4c7fbe5394cf6c34bc943dc20da7024076a15950fa6ce0b2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8e864ccd15823373eec152a9712735d977bc7a383bce415b4bedf70110d4f7d = $this->env->getExtension("native_profiler");
        $__internal_d8e864ccd15823373eec152a9712735d977bc7a383bce415b4bedf70110d4f7d->enter($__internal_d8e864ccd15823373eec152a9712735d977bc7a383bce415b4bedf70110d4f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d8e864ccd15823373eec152a9712735d977bc7a383bce415b4bedf70110d4f7d->leave($__internal_d8e864ccd15823373eec152a9712735d977bc7a383bce415b4bedf70110d4f7d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1482e1d025a6d92634f482419ab9475bf943723a5af6cb82a2f7bf03763aa420 = $this->env->getExtension("native_profiler");
        $__internal_1482e1d025a6d92634f482419ab9475bf943723a5af6cb82a2f7bf03763aa420->enter($__internal_1482e1d025a6d92634f482419ab9475bf943723a5af6cb82a2f7bf03763aa420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1482e1d025a6d92634f482419ab9475bf943723a5af6cb82a2f7bf03763aa420->leave($__internal_1482e1d025a6d92634f482419ab9475bf943723a5af6cb82a2f7bf03763aa420_prof);

    }

    // line 8
    public function block_js($context, array $blocks = array())
    {
        $__internal_8caf33425ab4a06d3ef4b834f6dab6ad75b0532c4db41bfb06c3ef7ece11f98a = $this->env->getExtension("native_profiler");
        $__internal_8caf33425ab4a06d3ef4b834f6dab6ad75b0532c4db41bfb06c3ef7ece11f98a->enter($__internal_8caf33425ab4a06d3ef4b834f6dab6ad75b0532c4db41bfb06c3ef7ece11f98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_8caf33425ab4a06d3ef4b834f6dab6ad75b0532c4db41bfb06c3ef7ece11f98a->leave($__internal_8caf33425ab4a06d3ef4b834f6dab6ad75b0532c4db41bfb06c3ef7ece11f98a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8529623ea900bf9172da921873c413fbd50cfe132e93a3c60338cddea0b94368 = $this->env->getExtension("native_profiler");
        $__internal_8529623ea900bf9172da921873c413fbd50cfe132e93a3c60338cddea0b94368->enter($__internal_8529623ea900bf9172da921873c413fbd50cfe132e93a3c60338cddea0b94368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8529623ea900bf9172da921873c413fbd50cfe132e93a3c60338cddea0b94368->leave($__internal_8529623ea900bf9172da921873c413fbd50cfe132e93a3c60338cddea0b94368_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de78a7df5ccc397d550b182f4df3dd01bea5d68f85cffb398679585dc0a80c27 = $this->env->getExtension("native_profiler");
        $__internal_de78a7df5ccc397d550b182f4df3dd01bea5d68f85cffb398679585dc0a80c27->enter($__internal_de78a7df5ccc397d550b182f4df3dd01bea5d68f85cffb398679585dc0a80c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de78a7df5ccc397d550b182f4df3dd01bea5d68f85cffb398679585dc0a80c27->leave($__internal_de78a7df5ccc397d550b182f4df3dd01bea5d68f85cffb398679585dc0a80c27_prof);

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
        return array (  122 => 13,  111 => 12,  100 => 8,  89 => 7,  78 => 6,  67 => 5,  58 => 14,  55 => 13,  53 => 12,  46 => 9,  43 => 8,  41 => 7,  36 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         {% block meta %}{% endblock %}*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         {% block js %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
