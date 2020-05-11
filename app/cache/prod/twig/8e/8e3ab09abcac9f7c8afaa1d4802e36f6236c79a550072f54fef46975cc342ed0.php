<?php

/* :backend/content:faq_section.html.twig */
class __TwigTemplate_301978016048a1509420a9066cc0d769d84b82070eecfb70de3055e7f65c9eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2 class=\"ui header right\">
    <i class=\"help icon\"></i>
    <div class=\"content\">
        שאלות ותשובות
    </div>
</h2>

<div class=\"clear\"></div>

<div class=\"ui menu\">
    <a class=\"item ";
        // line 11
        if (((isset($context["active_tab"]) ? $context["active_tab"] : null) == 1)) {
            echo "active";
        }
        echo "\" data-tab=\"1\">
        קטגוריות
    </a>
    <a class=\"item ";
        // line 14
        if (((isset($context["active_tab"]) ? $context["active_tab"] : null) == 2)) {
            echo "active";
        }
        echo "\" data-tab=\"2\">
        שאלות
    </a>
    <a class=\"item\" data-tab=\"3\">
        SEO
    </a>

</div>



<div class=\"ui tab ";
        // line 25
        if (((isset($context["active_tab"]) ? $context["active_tab"] : null) == 1)) {
            echo "active";
        }
        echo "\" data-tab=\"1\">


    <br>
    <div class=\"ui one column centered grid\">
        <button class=\"ui labeled icon orange approve button left add_faq_cat\">
            <i class=\"add square icon\"></i>
            הוסף
        </button>
    </div>
    <br>


    <table class=\"ui basic celled table faq_categories\">
        <thead>
        <tr>
            <th>כותרת</th>
            <th>פעיל</th>
            <th>להסיר</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqCategories"]) ? $context["faqCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 48
            echo "            <tr>
                <td class=\"alignRight\">
                    <a class=\"edit_faq_cat category_name\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                    <input type=\"hidden\" class=\"category_id\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
                </td>

                <td>
                    <div class=\"ui checkbox toggle small\">
                        <input type=\"checkbox\" ";
            // line 56
            if ($this->getAttribute($context["category"], "isActive", array())) {
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
    </table>


</div>


<div class=\"ui tab ";
        // line 73
        if (((isset($context["active_tab"]) ? $context["active_tab"] : null) == 2)) {
            echo "active";
        }
        echo "\" data-tab=\"2\">


    <br>
    <div class=\"ui one column centered grid\">
        <button class=\"ui labeled icon orange approve button left add_faq\">
            <i class=\"add square icon\"></i>
            הוסף
        </button>
    </div>
    <br>


    <div class=\"ui accordion\">

        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqCategories"]) ? $context["faqCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 89
            echo "            <div class=\"title faq_cat_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" style=\"font-size: 1.1em;\">
                <i class=\"dropdown icon\"></i>
                ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
            </div>

            <div class=\"content faq_cat_";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" style=\"padding-right: 25px;\">


                <table class=\"ui very basic table faq\">
                    <tbody>
                    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "faq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 100
                echo "                        <tr>
                            <td class=\"alignRight\">
                                <a class=\"edit_faq faq_name\">";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "name", array()), "html", null, true);
                echo "</a>
                                <input type=\"hidden\" class=\"faq_id\" value=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
                echo "\">
                            </td>
                            <td>
                                <i class=\"trash outline large link black left icon circular delete\"></i>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </tbody>
                </table>




                ";
            // line 124
            echo "
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "



    </div>



</div>


<div class=\"ui tab\" data-tab=\"3\">

    <form class=\"ui form\" id=\"faq_page_seo\">
        <div class=\"ui label\">Title</div>
        <div class=\"field\">
            <input type=\"text\" name=\"title\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faqPageSeo"]) ? $context["faqPageSeo"] : null), "title", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"ui label\">Meta Description</div>
        <div class=\"field\">
            <textarea name=\"description\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faqPageSeo"]) ? $context["faqPageSeo"] : null), "description", array()), "html", null, true);
        echo "</textarea>
        </div>

        <input type=\"hidden\" name=\"page\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faqPageSeo"]) ? $context["faqPageSeo"] : null), "page", array()), "html", null, true);
        echo "\">

    </form>

    <br><br>
    <div class=\"ui one column centered grid\">
        <button class=\"ui labeled icon orange approve button right\" onclick=\"updatePageSeo(\$('#faq_page_seo'));\">
            <i class=\"save icon\"></i>
            לשמור
        </button>
    </div>
    <br><br>




</div>
";
    }

    public function getTemplateName()
    {
        return ":backend/content:faq_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 152,  241 => 149,  233 => 144,  215 => 128,  206 => 124,  198 => 110,  185 => 103,  181 => 102,  177 => 100,  173 => 99,  165 => 94,  159 => 91,  153 => 89,  149 => 88,  129 => 73,  120 => 66,  102 => 56,  94 => 51,  90 => 50,  86 => 48,  82 => 47,  55 => 25,  39 => 14,  31 => 11,  19 => 1,);
    }
}
/* <h2 class="ui header right">*/
/*     <i class="help icon"></i>*/
/*     <div class="content">*/
/*         שאלות ותשובות*/
/*     </div>*/
/* </h2>*/
/* */
/* <div class="clear"></div>*/
/* */
/* <div class="ui menu">*/
/*     <a class="item {% if active_tab == 1 %}active{% endif %}" data-tab="1">*/
/*         קטגוריות*/
/*     </a>*/
/*     <a class="item {% if active_tab == 2 %}active{% endif %}" data-tab="2">*/
/*         שאלות*/
/*     </a>*/
/*     <a class="item" data-tab="3">*/
/*         SEO*/
/*     </a>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* <div class="ui tab {% if active_tab == 1 %}active{% endif %}" data-tab="1">*/
/* */
/* */
/*     <br>*/
/*     <div class="ui one column centered grid">*/
/*         <button class="ui labeled icon orange approve button left add_faq_cat">*/
/*             <i class="add square icon"></i>*/
/*             הוסף*/
/*         </button>*/
/*     </div>*/
/*     <br>*/
/* */
/* */
/*     <table class="ui basic celled table faq_categories">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>כותרת</th>*/
/*             <th>פעיל</th>*/
/*             <th>להסיר</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for category in faqCategories %}*/
/*             <tr>*/
/*                 <td class="alignRight">*/
/*                     <a class="edit_faq_cat category_name">{{ category.name }}</a>*/
/*                     <input type="hidden" class="category_id" value="{{ category.id }}">*/
/*                 </td>*/
/* */
/*                 <td>*/
/*                     <div class="ui checkbox toggle small">*/
/*                         <input type="checkbox" {% if category.isActive %}checked="checked"{% endif %}>*/
/*                         <label></label>*/
/*                     </div>*/
/*                 </td>*/
/* */
/*                 <td>*/
/*                     <i class="trash outline big link black icon circular delete"></i>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* </div>*/
/* */
/* */
/* <div class="ui tab {% if active_tab == 2 %}active{% endif %}" data-tab="2">*/
/* */
/* */
/*     <br>*/
/*     <div class="ui one column centered grid">*/
/*         <button class="ui labeled icon orange approve button left add_faq">*/
/*             <i class="add square icon"></i>*/
/*             הוסף*/
/*         </button>*/
/*     </div>*/
/*     <br>*/
/* */
/* */
/*     <div class="ui accordion">*/
/* */
/*         {% for category in faqCategories %}*/
/*             <div class="title faq_cat_{{ category.id }}" style="font-size: 1.1em;">*/
/*                 <i class="dropdown icon"></i>*/
/*                 {{ category.name }}*/
/*             </div>*/
/* */
/*             <div class="content faq_cat_{{ category.id }}" style="padding-right: 25px;">*/
/* */
/* */
/*                 <table class="ui very basic table faq">*/
/*                     <tbody>*/
/*                     {% for faq in category.faq %}*/
/*                         <tr>*/
/*                             <td class="alignRight">*/
/*                                 <a class="edit_faq faq_name">{{ faq.name }}</a>*/
/*                                 <input type="hidden" class="faq_id" value="{{ faq.id }}">*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="trash outline large link black left icon circular delete"></i>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/* */
/* */
/* */
/*                 {#*/
/*                 <div class="ui ordered relaxed divided list faq" style="margin-right: 25px;">*/
/*                     {% for faq in category.faq %}*/
/*                         <a class="item edit_faq" id="faq_{{ faq.id }}">{{ faq.name }}</a>*/
/*                         <div class="ui item left"><i class="ui icon trash"></i></div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 #}*/
/* */
/*             </div>*/
/* */
/*         {% endfor %}*/
/* */
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* </div>*/
/* */
/* */
/* <div class="ui tab" data-tab="3">*/
/* */
/*     <form class="ui form" id="faq_page_seo">*/
/*         <div class="ui label">Title</div>*/
/*         <div class="field">*/
/*             <input type="text" name="title" value="{{ faqPageSeo.title }}">*/
/*         </div>*/
/* */
/*         <div class="ui label">Meta Description</div>*/
/*         <div class="field">*/
/*             <textarea name="description">{{ faqPageSeo.description }}</textarea>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="page" value="{{ faqPageSeo.page }}">*/
/* */
/*     </form>*/
/* */
/*     <br><br>*/
/*     <div class="ui one column centered grid">*/
/*         <button class="ui labeled icon orange approve button right" onclick="updatePageSeo($('#faq_page_seo'));">*/
/*             <i class="save icon"></i>*/
/*             לשמור*/
/*         </button>*/
/*     </div>*/
/*     <br><br>*/
/* */
/* */
/* */
/* */
/* </div>*/
/* */
