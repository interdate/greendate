<?php

/* :backend/content:faq_category.html.twig */
class __TwigTemplate_2758990a49ed28a8eddb30383c06aac1eb3af1591ad2a7240681e76d0232db5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
        // line 4
        $context["header"] = ((($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()) > 0)) ? ("עריכת קטגוריה") : ("הוספת קטגוריה"));
        // line 5
        echo "
    <h1 class=\"ui grey header right\">
        <i class=\"help icon\"></i>
        <div class=\"content\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "</div>
    </h1>


    <div class=\"left close\">
        <i class=\"icon remove circle olive big\" onclick=\"\$.kfModal.close();\"></i>
    </div>

    <div class=\"clear\"></div>

    <div class=\"ui segment\">



        <form class=\"ui form\" id=\"faq_cat_form\" method=\"post\">

            <input type=\"hidden\" value=\"1\" name=\"active_tab\">

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                </div>
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'label');
        echo "
                </div>
                <div class=\"ui compact segment\">
                    <div class=\"ui slider fitted checkbox\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'widget');
        echo "
                        <label></label>
                    </div>
                </div>
            </div>


            <div class=\"ui divider\"></div>
            <br>
            <br>

            <div class=\"ui one column centered grid\">
                <button type=\"button\" class=\"ui labeled icon green approve large button right\" onclick=\"saveFaqCategory(";
        // line 51
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
        }
        echo ");\">
                    <i class=\"save icon\"></i>
                    לשמור
                </button>
            </div>

            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        </form>

        <br>
        <br>


        <div class=\"clear\"></div>


    </div>



";
    }

    public function getTemplateName()
    {
        return ":backend/content:faq_category.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 57,  97 => 51,  82 => 39,  75 => 35,  66 => 29,  61 => 27,  39 => 8,  34 => 5,  32 => 4,  29 => 3,  23 => 2,  20 => 1,);
    }
}
/* */
/* {% block content %}*/
/* */
/*     {% set header = category.id > 0 ? 'עריכת קטגוריה'  : 'הוספת קטגוריה' %}*/
/* */
/*     <h1 class="ui grey header right">*/
/*         <i class="help icon"></i>*/
/*         <div class="content">{{ header }}</div>*/
/*     </h1>*/
/* */
/* */
/*     <div class="left close">*/
/*         <i class="icon remove circle olive big" onclick="$.kfModal.close();"></i>*/
/*     </div>*/
/* */
/*     <div class="clear"></div>*/
/* */
/*     <div class="ui segment">*/
/* */
/* */
/* */
/*         <form class="ui form" id="faq_cat_form" method="post">*/
/* */
/*             <input type="hidden" value="1" name="active_tab">*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.name) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.name) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">*/
/*                     {{ form_label(form.isActive) }}*/
/*                 </div>*/
/*                 <div class="ui compact segment">*/
/*                     <div class="ui slider fitted checkbox">*/
/*                         {{ form_widget(form.isActive) }}*/
/*                         <label></label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="ui divider"></div>*/
/*             <br>*/
/*             <br>*/
/* */
/*             <div class="ui one column centered grid">*/
/*                 <button type="button" class="ui labeled icon green approve large button right" onclick="saveFaqCategory({% if category.id > 0 %}{{  category.id }}{% endif %});">*/
/*                     <i class="save icon"></i>*/
/*                     לשמור*/
/*                 </button>*/
/*             </div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*         </form>*/
/* */
/*         <br>*/
/*         <br>*/
/* */
/* */
/*         <div class="clear"></div>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
