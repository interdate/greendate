<?php

/* :frontend/pages:index.html.twig */
class __TwigTemplate_b05a1f8e6e7072c1229b12f56e03bc23b8df56ac4ffb3f6b691d64872e0a67c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/pages:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array()), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"midsec magazine\">
        <";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "headerType", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "headerType", array()), "html", null, true);
        echo ">
        <div class=\"magcont\">
            <div class=\"box dtl\">
               ";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":frontend/pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  48 => 8,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block title %}{{ page.title }}{% endblock %}*/
/* {% block meta_description %}{{ page.description }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="midsec magazine">*/
/*         <{{ page.headerType  }}>{{ page.name }}</{{ page.headerType }}>*/
/*         <div class="magcont">*/
/*             <div class="box dtl">*/
/*                {{ page.content|raw }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
