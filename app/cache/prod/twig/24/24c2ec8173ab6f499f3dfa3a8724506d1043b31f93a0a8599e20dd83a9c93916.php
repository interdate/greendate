<?php

/* :frontend/security:password.html.twig */
class __TwigTemplate_6a75dda2e73b59f5440b81ac71c60e1ef5bc1f86342d932af646a666de8aff6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/security:password.html.twig", 1);
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
        <h2>איפוס סיסמה</h2>
        <div class=\"magcont\">
            <div class=\"box dtl\">

                <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array()), "html", null, true);
        echo "\" method=\"post\">
                    <div class=\"harsama-midsec\">
                        <div class=\"freeze_cont\">

                            <br><br>

                            לקבלת סיסמה חדשה יש להזין את האימייל עמו נרשמת לאתר.

                            <br><br>

                            ";
        // line 22
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "vars", array()), "errors", array()))) {
            // line 23
            echo "                                <div class=\"errors\">
                                    <div class=\"ui orange message\">
                                        <div class=\"content\">
                                            <div class=\"header\">
                                                ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                            ";
        }
        // line 34
        echo "
                            ";
        // line 35
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 36
            echo "                                <div class=\"ui olive message\">
                                    <div class=\"content\">
                                        <div class=\"header\">
                                            סיסמה חדשה נשלחה לכתובת האימייל שהזנת.
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 44
        echo "

                            <div class=\"label\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "</div>
                            <div class=\"inputdiv\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                            </div>

                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "


                        </div>
                    </div>

                    <div class=\"clearfix\">
                        <input type=\"button\" value=\"שלחו\" class=\"free\" onclick=\"\$('#save_data').click();\">
                        <input type=\"submit\" id=\"save_data\" class=\"hidden\">
                    </div>
                </form>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":frontend/security:password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 51,  105 => 48,  100 => 46,  96 => 44,  86 => 36,  84 => 35,  81 => 34,  71 => 27,  65 => 23,  63 => 22,  50 => 12,  43 => 7,  40 => 6,  35 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block title %}{% endblock %}*/
/* {% block meta_description %}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="midsec magazine">*/
/*         <h2>איפוס סיסמה</h2>*/
/*         <div class="magcont">*/
/*             <div class="box dtl">*/
/* */
/*                 <form action="{{ app.request.requesturi }}" method="post">*/
/*                     <div class="harsama-midsec">*/
/*                         <div class="freeze_cont">*/
/* */
/*                             <br><br>*/
/* */
/*                             לקבלת סיסמה חדשה יש להזין את האימייל עמו נרשמת לאתר.*/
/* */
/*                             <br><br>*/
/* */
/*                             {% if form.email.vars.errors|length %}*/
/*                                 <div class="errors">*/
/*                                     <div class="ui orange message">*/
/*                                         <div class="content">*/
/*                                             <div class="header">*/
/*                                                 {{ form_errors(form.email) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br><br>*/
/*                             {% endif %}*/
/* */
/*                             {% if success %}*/
/*                                 <div class="ui olive message">*/
/*                                     <div class="content">*/
/*                                         <div class="header">*/
/*                                             סיסמה חדשה נשלחה לכתובת האימייל שהזנת.*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/* */
/* */
/*                             <div class="label">{{ form_label(form.email) }}</div>*/
/*                             <div class="inputdiv">*/
/*                                 {{ form_widget(form.email) }}*/
/*                             </div>*/
/* */
/*                             {{ form_rest(form) }}*/
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="clearfix">*/
/*                         <input type="button" value="שלחו" class="free" onclick="$('#save_data').click();">*/
/*                         <input type="submit" id="save_data" class="hidden">*/
/*                     </div>*/
/*                 </form>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
