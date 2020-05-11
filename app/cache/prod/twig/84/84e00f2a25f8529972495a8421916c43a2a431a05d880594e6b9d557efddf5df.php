<?php

/* :frontend/pages:faq.html.twig */
class __TwigTemplate_aa4c0de229ac87c840d8a0a6f6ce8d398091c5f0de6c8f04e45783c7f27b9853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/pages:faq.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array()), "html", null, true);
    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "description", array()), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"midsec\">
        <h1>שאלות ותשובות</h1>
        <div class=\"allforum\">
            <div class=\"forumbox\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "                    <div class=\"titlesec\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</div>
                    <div class=\"shelot cont\">
                        <ul>
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "faq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 16
                echo "                                ";
                if ($this->getAttribute($context["faq"], "isActive", array())) {
                    // line 17
                    echo "                                    <li>
                                        <a href=\"#\" class=\"faqtitle\"><span><strong>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "name", array()), "html", null, true);
                    echo "</strong></span></a>
                                        <div class=\"fcont\"><span>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "content", array()), "html", null, true);
                    echo "</span></div>
                                    </li>
                                ";
                }
                // line 22
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                        </ul>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":frontend/pages:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  88 => 23,  82 => 22,  76 => 19,  72 => 18,  69 => 17,  66 => 16,  62 => 15,  55 => 12,  51 => 11,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block title %}{{ seo.title }}{% endblock %}*/
/* {% block meta_description %}{{ seo.description }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="midsec">*/
/*         <h1>שאלות ותשובות</h1>*/
/*         <div class="allforum">*/
/*             <div class="forumbox">*/
/*                 {% for category in categories %}*/
/*                     <div class="titlesec">{{ category.name }}</div>*/
/*                     <div class="shelot cont">*/
/*                         <ul>*/
/*                             {% for faq in category.faq %}*/
/*                                 {% if faq.isActive %}*/
/*                                     <li>*/
/*                                         <a href="#" class="faqtitle"><span><strong>{{ faq.name }}</strong></span></a>*/
/*                                         <div class="fcont"><span>{{ faq.content }}</span></div>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
