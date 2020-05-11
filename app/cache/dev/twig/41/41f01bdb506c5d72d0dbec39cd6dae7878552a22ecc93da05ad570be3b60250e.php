<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ed583cf56afd9ce0c04f334465db1b830f69a3d63dfbe0dc3bb6bc7b762c7a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09ae93a9f795c43164d0fe9bc60ee55bc6952449e48c3f76946ff4d18cdc517c = $this->env->getExtension("native_profiler");
        $__internal_09ae93a9f795c43164d0fe9bc60ee55bc6952449e48c3f76946ff4d18cdc517c->enter($__internal_09ae93a9f795c43164d0fe9bc60ee55bc6952449e48c3f76946ff4d18cdc517c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ae93a9f795c43164d0fe9bc60ee55bc6952449e48c3f76946ff4d18cdc517c->leave($__internal_09ae93a9f795c43164d0fe9bc60ee55bc6952449e48c3f76946ff4d18cdc517c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfe5c530eeac09bc849b015e43be7e2443ccc14344d6cafeced8c929d25ca8e8 = $this->env->getExtension("native_profiler");
        $__internal_bfe5c530eeac09bc849b015e43be7e2443ccc14344d6cafeced8c929d25ca8e8->enter($__internal_bfe5c530eeac09bc849b015e43be7e2443ccc14344d6cafeced8c929d25ca8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bfe5c530eeac09bc849b015e43be7e2443ccc14344d6cafeced8c929d25ca8e8->leave($__internal_bfe5c530eeac09bc849b015e43be7e2443ccc14344d6cafeced8c929d25ca8e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a7f1cbb66b4c0fdf185f6d1949c05f1227361732d7c8f50dc5ca64a25165f59 = $this->env->getExtension("native_profiler");
        $__internal_4a7f1cbb66b4c0fdf185f6d1949c05f1227361732d7c8f50dc5ca64a25165f59->enter($__internal_4a7f1cbb66b4c0fdf185f6d1949c05f1227361732d7c8f50dc5ca64a25165f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a7f1cbb66b4c0fdf185f6d1949c05f1227361732d7c8f50dc5ca64a25165f59->leave($__internal_4a7f1cbb66b4c0fdf185f6d1949c05f1227361732d7c8f50dc5ca64a25165f59_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_210fcf95369ca9a0386fb81ebbd590029645626f8052509845b9fe8b172803a8 = $this->env->getExtension("native_profiler");
        $__internal_210fcf95369ca9a0386fb81ebbd590029645626f8052509845b9fe8b172803a8->enter($__internal_210fcf95369ca9a0386fb81ebbd590029645626f8052509845b9fe8b172803a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_210fcf95369ca9a0386fb81ebbd590029645626f8052509845b9fe8b172803a8->leave($__internal_210fcf95369ca9a0386fb81ebbd590029645626f8052509845b9fe8b172803a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
