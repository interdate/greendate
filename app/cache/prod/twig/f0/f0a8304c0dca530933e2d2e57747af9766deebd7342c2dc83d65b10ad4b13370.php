<?php

/* :frontend/magazine:index.html.twig */
class __TwigTemplate_7ded0ad3693b7a29e0121c7be902bb61caf7ae0d5fd96461fe7bce2980f0c4f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/magazine:index.html.twig", 1);
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
        if (array_key_exists("article", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array()), "html", null, true);
        }
    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
        if (array_key_exists("article", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "description", array()), "html", null, true);
        }
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "


    <div class=\"midsec magazine\">

            ";
        // line 12
        if (array_key_exists("article", $context)) {
            // line 13
            echo "                <";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "headerType", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array()), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "headerType", array()), "html", null, true);
            echo ">
            ";
        } else {
            // line 15
            echo "                <h1>";
            echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "</h1>
            ";
        }
        // line 17
        echo "
        <div class=\"magcont\">

            ";
        // line 20
        if (array_key_exists("article", $context)) {
            // line 21
            echo "
                <div class=\"box dtl\">
                    <div class=\"ttlspace\">
                        ";
            // line 25
            echo "                        <div class=\"datecal\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date", array()), "d/m/Y"), "html", null, true);
            echo "</div>
                    </div>

                    <div class=\"imgbox2\">
                        <img src=\"\" alt=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "imageAlt", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "imageName", array()), "html", null, true);
            echo "\" class=\"imageName\">
                    </div>

                    ";
            // line 33
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array());
            echo "

                    <br><br>
                    <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("magazine");
            echo "\">חזרה למגזין</a>
                </div>

            ";
        } else {
            // line 40
            echo "
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 42
                echo "
                    <div class=\"box clearfix\">
                        <div class=\"imgbox\">
                            <img src=\"\" alt=\"\" ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "imageAlt", array()), "html", null, true);
                echo ">
                            <input type=\"hidden\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "imageName", array()), "html", null, true);
                echo "\" class=\"previewImageName\">
                        </div>
                        <div class=\"desc\">
                            <h3><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_article", array("uri" => $this->getAttribute($context["article"], "uri", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
                echo "</a></h3>
                            <div class=\"datecal\">";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</div>
                            <p>
                                ";
                // line 52
                if ((twig_length_filter($this->env, $this->getAttribute($context["article"], "brief", array())) > 250)) {
                    // line 53
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "brief", array()), 0, 249), "html", null, true);
                    echo "...
                                ";
                } else {
                    // line 55
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "brief", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 57
                echo "                            </p>
                            <div class=\"readmore\"><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_article", array("uri" => $this->getAttribute($context["article"], "uri", array()))), "html", null, true);
                echo "\">להמשך</a></div>
                        </div>
                    </div>
                    <!-- end -->
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
                <div class=\"pages\">
                    ";
            // line 65
            echo $this->env->getExtension('knp_pagination')->render((isset($context["articles"]) ? $context["articles"] : null));
            echo "
                </div>

            ";
        }
        // line 69
        echo "        </div>




    </div><!-- midsec end -->

";
    }

    public function getTemplateName()
    {
        return ":frontend/magazine:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 69,  186 => 65,  182 => 63,  171 => 58,  168 => 57,  162 => 55,  156 => 53,  154 => 52,  149 => 50,  143 => 49,  137 => 46,  133 => 45,  128 => 42,  124 => 41,  121 => 40,  114 => 36,  108 => 33,  102 => 30,  98 => 29,  90 => 25,  85 => 21,  83 => 20,  78 => 17,  72 => 15,  62 => 13,  60 => 12,  53 => 7,  50 => 6,  40 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block title %}{% if article is defined %}{{ article.title }}{% else %}{{ seo.title }}{% endif %}{% endblock %}*/
/* {% block meta_description %}{% if article is defined %}{{ article.description }}{% else %}{{ seo.description }}{% endif %}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/*     <div class="midsec magazine">*/
/* */
/*             {% if article is defined %}*/
/*                 <{{ article.headerType  }}>{{ article.name }}</{{ article.headerType }}>*/
/*             {% else %}*/
/*                 <h1>{{ header }}</h1>*/
/*             {% endif %}*/
/* */
/*         <div class="magcont">*/
/* */
/*             {% if article is defined %}*/
/* */
/*                 <div class="box dtl">*/
/*                     <div class="ttlspace">*/
/*                         {#<h3><a href="{{ path('magazine_article', {'uri': article.uri}) }}">{{ article.name }}</a></h3>#}*/
/*                         <div class="datecal">{{ article.date|date('d/m/Y') }}</div>*/
/*                     </div>*/
/* */
/*                     <div class="imgbox2">*/
/*                         <img src="" alt="{{ article.imageAlt }}">*/
/*                         <input type="hidden" value="{{ article.imageName }}" class="imageName">*/
/*                     </div>*/
/* */
/*                     {{ article.content|raw }}*/
/* */
/*                     <br><br>*/
/*                     <a href="{{ path('magazine') }}">חזרה למגזין</a>*/
/*                 </div>*/
/* */
/*             {% else %}*/
/* */
/*                 {% for article in articles %}*/
/* */
/*                     <div class="box clearfix">*/
/*                         <div class="imgbox">*/
/*                             <img src="" alt="" {{ article.imageAlt }}>*/
/*                             <input type="hidden" value="{{ article.imageName }}" class="previewImageName">*/
/*                         </div>*/
/*                         <div class="desc">*/
/*                             <h3><a href="{{ path('magazine_article', {'uri': article.uri}) }}">{{ article.name }}</a></h3>*/
/*                             <div class="datecal">{{ article.date|date('d/m/Y') }}</div>*/
/*                             <p>*/
/*                                 {% if article.brief|length > 250 %}*/
/*                                     {{ article.brief|slice(0,249) }}...*/
/*                                 {% else %}*/
/*                                     {{ article.brief }}*/
/*                                 {% endif %}*/
/*                             </p>*/
/*                             <div class="readmore"><a href="{{ path('magazine_article', {'uri': article.uri}) }}">להמשך</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/*                 {% endfor %}*/
/* */
/*                 <div class="pages">*/
/*                     {{ knp_pagination_render(articles) }}*/
/*                 </div>*/
/* */
/*             {% endif %}*/
/*         </div>*/
/* */
/* */
/* */
/* */
/*     </div><!-- midsec end -->*/
/* */
/* {% endblock %}*/
