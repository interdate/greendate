<?php

/* :frontend/pages:contact.html.twig */
class __TwigTemplate_27d90750c74ea028330303e7b124e43517d544b22cded58f70740b3af1c57776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/pages:contact.html.twig", 1);
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
        echo "צור קשר";
    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"midsec magazine\">
        <h2>צור קשר</h2>
        <div class=\"magcont\">
            <div class=\"box dtl\">
                <div class=\"harsama-midsec\">

                    ";
        // line 13
        if ((isset($context["sent"]) ? $context["sent"] : null)) {
            // line 14
            echo "                        <br><div class=\"contact-success\">תודה! הודעה נשלחה בהצלחה.</div>
                    ";
        }
        // line 16
        echo "
                    <form method=\"post\" novalidate>

                        <div class=\"errors hidden empty_fields\">
                            <div class=\"ui orange message\">
                                <div class=\"content\">
                                    <div class=\"header\">
                                        יש להשלים את השדות המסומנים
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class=\"hmaformsec three\">
                            <div class=\"field_2\">
                                <div class=\"label\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "</div>
                                <div class=\"inputdiv\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "</div>
                                <div class=\"clear\"></div>
                            </div>
                            <br>

                            <div class=\"field_2\">
                                <div class=\"label\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'label');
        echo "</div>
                                <div class=\"inputdiv\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'widget');
        echo "</div>
                                <div class=\"clear\"></div>
                            </div>
                            <br>

                            <div class=\"field_2\">
                                <div class=\"label\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text", array()), 'label');
        echo "</div>
                                <div class=\"textarea\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text", array()), 'widget');
        echo "</div>
                                <div class=\"clear\"></div>
                            </div>
                        </div>
                        <input type=\"submit\" class=\"hidden\" id=\"send\">

                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

                    </form>

                </div>

                <br>

                <div class=\"clearfix\">
                    <input type=\"button\" value=\"שלח/י\" class=\"free contact_submit\">
                </div>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":frontend/pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  106 => 47,  102 => 46,  93 => 40,  89 => 39,  80 => 33,  76 => 32,  58 => 16,  54 => 14,  52 => 13,  44 => 7,  41 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block title %}צור קשר{% endblock %}*/
/* {% block meta_description %}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="midsec magazine">*/
/*         <h2>צור קשר</h2>*/
/*         <div class="magcont">*/
/*             <div class="box dtl">*/
/*                 <div class="harsama-midsec">*/
/* */
/*                     {% if sent %}*/
/*                         <br><div class="contact-success">תודה! הודעה נשלחה בהצלחה.</div>*/
/*                     {% endif %}*/
/* */
/*                     <form method="post" novalidate>*/
/* */
/*                         <div class="errors hidden empty_fields">*/
/*                             <div class="ui orange message">*/
/*                                 <div class="content">*/
/*                                     <div class="header">*/
/*                                         יש להשלים את השדות המסומנים*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                         <div class="hmaformsec three">*/
/*                             <div class="field_2">*/
/*                                 <div class="label">{{ form_label(form.email) }}</div>*/
/*                                 <div class="inputdiv">{{ form_widget(form.email) }}</div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <br>*/
/* */
/*                             <div class="field_2">*/
/*                                 <div class="label">{{ form_label(form.subject) }}</div>*/
/*                                 <div class="inputdiv">{{ form_widget(form.subject) }}</div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <br>*/
/* */
/*                             <div class="field_2">*/
/*                                 <div class="label">{{ form_label(form.text) }}</div>*/
/*                                 <div class="textarea">{{ form_widget(form.text) }}</div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <input type="submit" class="hidden" id="send">*/
/* */
/*                         {{ form_rest(form) }}*/
/* */
/*                     </form>*/
/* */
/*                 </div>*/
/* */
/*                 <br>*/
/* */
/*                 <div class="clearfix">*/
/*                     <input type="button" value="שלח/י" class="free contact_submit">*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
