<?php

/* :backend/content:faq.html.twig */
class __TwigTemplate_e1af03b5c5ccf56ef013e2fa4dc0492167fb69a0fa0fb15e9a7c24e2f10bc274 extends Twig_Template
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
        $context["header"] = ((($this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()) > 0)) ? ("עריכת שאלה") : ("הוספת שאלה"));
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

        <form class=\"ui form\" id=\"faq_form\" method=\"post\">

            <input type=\"hidden\" value=\"2\" name=\"active_tab\">

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", array()), 'widget');
        echo "
                </div>
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                </div>
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget');
        echo "
                </div>
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'label');
        echo "
                </div>
                <div class=\"ui compact segment\">
                    <div class=\"ui slider fitted checkbox\">
                        ";
        // line 50
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
                <button type=\"button\" class=\"ui labeled icon green approve large button right\" onclick=\"saveFaq(";
        // line 62
        if (($this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()), "html", null, true);
        }
        echo ");\">
                    <i class=\"save icon\"></i>
                    לשמור
                </button>
            </div>

            ";
        // line 68
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
        return ":backend/content:faq.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 68,  120 => 62,  105 => 50,  98 => 46,  89 => 40,  84 => 38,  76 => 33,  71 => 31,  63 => 26,  58 => 24,  39 => 8,  34 => 5,  32 => 4,  29 => 3,  23 => 2,  20 => 1,);
    }
}
/* */
/* {% block content %}*/
/* */
/*     {% set header = faq.id > 0 ? 'עריכת שאלה' : 'הוספת שאלה' %}*/
/* */
/*     <h1 class="ui grey header right">*/
/*         <i class="help icon"></i>*/
/*         <div class="content">{{ header }}</div>*/
/*     </h1>*/
/* */
/*     <div class="left close">*/
/*         <i class="icon remove circle olive big" onclick="$.kfModal.close();"></i>*/
/*     </div>*/
/* */
/*     <div class="clear"></div>*/
/* */
/*     <div class="ui segment">*/
/* */
/*         <form class="ui form" id="faq_form" method="post">*/
/* */
/*             <input type="hidden" value="2" name="active_tab">*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.category) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.category) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.name) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.name) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.content) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.content) }}*/
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
/*             <div class="ui divider"></div>*/
/* */
/*             <br>*/
/*             <br>*/
/* */
/*             <div class="ui one column centered grid">*/
/*                 <button type="button" class="ui labeled icon green approve large button right" onclick="saveFaq({% if faq.id > 0 %}{{  faq.id }}{% endif %});">*/
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
