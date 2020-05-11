<?php

/* :backend/magazine:index.html.twig */
class __TwigTemplate_9cd92fdf2766c858344af1d753113c1577bf360a32bde4c7dd2f6aac4cb54f5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/magazine:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "backend/header.html.twig", array("header" => "מגזין", "icon" => "newspaper"));
        echo "

    <div class=\"page_content magazine_content\">

        <div class=\"ui segment\">

            <h2 class=\"ui header right\">
                <i class=\"line chart icon\"></i>
                <div class=\"content\">
                    SEO
                </div>
            </h2>

            <div class=\"clear\"></div>
            <br>

            <form class=\"ui form\" id=\"magazine_page_seo\">
                <div class=\"ui label\">Title</div>
                <div class=\"field\">
                    <input type=\"text\" name=\"title\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array()), "html", null, true);
        echo "\">
                </div>

                <div class=\"ui label\">Meta Description</div>
                <div class=\"field\">
                    <textarea name=\"description\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "description", array()), "html", null, true);
        echo "</textarea>
                </div>

                <input type=\"hidden\" name=\"page\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "page", array()), "html", null, true);
        echo "\">

            </form>

            <br><br>
            <div class=\"ui one column centered grid\">
                <button class=\"ui labeled icon pink big approve button right\" onclick=\"updatePageSeo(\$('#magazine_page_seo'));\">
                    <i class=\"save icon\"></i>
                    לשמור
                </button>
            </div>
            <br><br>




        </div>


        <div class=\"ui segment\">



            <h2 class=\"ui header right\">
                <i class=\"list icon\"></i>
                <div class=\"content\">
                    רשימת המאמרים
                </div>
            </h2>


            <div class=\"left\">

                <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("admin_magazine_article");
        echo "\">
                    <button class=\"ui labeled icon pink approve large button right\">
                        <i class=\"write icon\"></i>
                        הוסף מאמר
                    </button>
                </a>



            </div>

            <div class=\"clear\"></div>


            <table class=\"ui basic celled table articles\">
                <thead>
                    <tr>
                        <th>כותרת</th>
                        <th>מופיע בעמוד הראשי</th>
                        <th>פעיל</th>
                        <th>להסיר</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 90
            echo "                        <tr>
                            <td class=\"alignRight\">
                                <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_magazine_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"article_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</a>
                                <input type=\"hidden\" class=\"article_id\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
                            </td>

                            <td>
                                <div class=\"ui checkbox toggle small homepage\">
                                    <input type=\"checkbox\" ";
            // line 98
            if ($this->getAttribute($context["article"], "isOnHomePage", array())) {
                echo "checked=\"checked\"";
            }
            echo ">
                                    <label></label>
                                </div>
                            </td>

                            <td>
                                <div class=\"ui checkbox toggle small\">
                                    <input type=\"checkbox\" ";
            // line 105
            if ($this->getAttribute($context["article"], "isActive", array())) {
                echo "checked=\"checked\"";
            }
            echo ">
                                    <label></label>
                                </div>
                            </td>

                            <td>
                                <i class=\"trash outline big link black icon circular delete\"></i>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </tbody>
            </table>



        </div>






    </div>


";
    }

    public function getTemplateName()
    {
        return ":backend/magazine:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 115,  167 => 105,  155 => 98,  147 => 93,  141 => 92,  137 => 90,  133 => 89,  106 => 65,  70 => 32,  64 => 29,  56 => 24,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'מגזין', 'icon': 'newspaper' }) }}*/
/* */
/*     <div class="page_content magazine_content">*/
/* */
/*         <div class="ui segment">*/
/* */
/*             <h2 class="ui header right">*/
/*                 <i class="line chart icon"></i>*/
/*                 <div class="content">*/
/*                     SEO*/
/*                 </div>*/
/*             </h2>*/
/* */
/*             <div class="clear"></div>*/
/*             <br>*/
/* */
/*             <form class="ui form" id="magazine_page_seo">*/
/*                 <div class="ui label">Title</div>*/
/*                 <div class="field">*/
/*                     <input type="text" name="title" value="{{ seo.title }}">*/
/*                 </div>*/
/* */
/*                 <div class="ui label">Meta Description</div>*/
/*                 <div class="field">*/
/*                     <textarea name="description">{{ seo.description }}</textarea>*/
/*                 </div>*/
/* */
/*                 <input type="hidden" name="page" value="{{ seo.page }}">*/
/* */
/*             </form>*/
/* */
/*             <br><br>*/
/*             <div class="ui one column centered grid">*/
/*                 <button class="ui labeled icon pink big approve button right" onclick="updatePageSeo($('#magazine_page_seo'));">*/
/*                     <i class="save icon"></i>*/
/*                     לשמור*/
/*                 </button>*/
/*             </div>*/
/*             <br><br>*/
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/* */
/*         <div class="ui segment">*/
/* */
/* */
/* */
/*             <h2 class="ui header right">*/
/*                 <i class="list icon"></i>*/
/*                 <div class="content">*/
/*                     רשימת המאמרים*/
/*                 </div>*/
/*             </h2>*/
/* */
/* */
/*             <div class="left">*/
/* */
/*                 <a href="{{ path('admin_magazine_article') }}">*/
/*                     <button class="ui labeled icon pink approve large button right">*/
/*                         <i class="write icon"></i>*/
/*                         הוסף מאמר*/
/*                     </button>*/
/*                 </a>*/
/* */
/* */
/* */
/*             </div>*/
/* */
/*             <div class="clear"></div>*/
/* */
/* */
/*             <table class="ui basic celled table articles">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>כותרת</th>*/
/*                         <th>מופיע בעמוד הראשי</th>*/
/*                         <th>פעיל</th>*/
/*                         <th>להסיר</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for article in articles %}*/
/*                         <tr>*/
/*                             <td class="alignRight">*/
/*                                 <a href="{{ path('admin_magazine_article_edit', {'id': article.id}) }}" class="article_name">{{ article.name }}</a>*/
/*                                 <input type="hidden" class="article_id" value="{{ article.id }}">*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <div class="ui checkbox toggle small homepage">*/
/*                                     <input type="checkbox" {% if article.isOnHomePage %}checked="checked"{% endif %}>*/
/*                                     <label></label>*/
/*                                 </div>*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <div class="ui checkbox toggle small">*/
/*                                     <input type="checkbox" {% if article.isActive %}checked="checked"{% endif %}>*/
/*                                     <label></label>*/
/*                                 </div>*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <i class="trash outline big link black icon circular delete"></i>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
