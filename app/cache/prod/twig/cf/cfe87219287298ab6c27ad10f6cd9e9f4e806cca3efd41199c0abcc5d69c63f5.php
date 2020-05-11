<?php

/* :backend/settings:index.html.twig */
class __TwigTemplate_67f39f031c5084bb2023f4eebe8d10b5081698544b7805ec8a4c72b9d3309e39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/settings:index.html.twig", 1);
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
        echo twig_include($this->env, $context, "backend/header.html.twig", array("header" => "הגדרות", "icon" => "settings"));
        echo "

    <div class=\"page_content settings_content\">

        <div class=\"ui segment settings\">


            <form class=\"ui form\" method=\"post\">

                <h4 class=\"ui center aligned icon header\">
                    <i class=\"circular mail red icon\"></i>
                    דואלים
                </h4>



                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reportEmail", array()), 'label');
        echo "</div>
                    <br><br>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reportEmail", array()), 'widget');
        echo "
                </div>
                <br>

                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactEmail", array()), 'label');
        echo "</div>
                    <br><br>
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactEmail", array()), 'widget');
        echo "
                </div>
                <br>



                <h4 class=\"ui center aligned icon header\">
                    <i class=\"circular chat red icon\"></i>
                    הודעות
                </h4>



                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "deleteMessagesAfterDaysNumber", array()), 'label');
        echo "</div>
                    <br><br>
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "deleteMessagesAfterDaysNumber", array()), 'widget');
        echo "
                </div>
                <br>


                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sendMessageUsersNumber", array()), 'label');
        echo "</div>
                    <br><br>
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sendMessageUsersNumber", array()), 'widget');
        echo "
                </div>
                <br>




                <h4 class=\"ui center aligned icon header\">
                    <i class=\"circular users red icon\"></i>
                    חיפוש חברים
                </h4>



                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usersPerPage", array()), 'label');
        echo "</div>
                    <br><br>
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usersPerPage", array()), 'widget');
        echo "
                </div>
                <br>






                <h4 class=\"ui center aligned icon header\">
                    <i class=\"circular checkmark red icon\"></i>
                    כללי
                </h4>

                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isCharge", array()), 'label');
        echo "</div>
                    <br><br>
                    <div class=\"ui compact segment\">
                        <div class=\"ui slider fitted checkbox\">
                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isCharge", array()), 'widget');
        echo "
                            <label></label>
                        </div>
                    </div>
                </div>
                <br>

                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messagePopularityDaysNumber", array()), 'label');
        echo "</div>
                    <br><br>
                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messagePopularityDaysNumber", array()), 'widget');
        echo "
                </div>
                <br>

                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "userConsideredAsOnlineAfterLastActivityMinutesNumber", array()), 'label');
        echo "</div>
                    <br><br>
                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "userConsideredAsOnlineAfterLastActivityMinutesNumber", array()), 'widget');
        echo "
                </div>
                <br>

                <div class=\"field\">
                    <div class=\"ui big ribbon label\">";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "userConsideredAsNewAfterDaysNumber", array()), 'label');
        echo "</div>
                    <br><br>
                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "userConsideredAsNewAfterDaysNumber", array()), 'widget');
        echo "
                </div>
                <br>

                ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "



                <div class=\"clear\"></div>
                <br><br><br>


                <div class=\"ui one column centered grid\">
                    <button class=\"ui labeled icon red approve big button right\">
                        <i class=\"save icon\"></i>
                        לשמור
                    </button>
                </div>

                <br><br><br>


            </form>



        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return ":backend/settings:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 119,  198 => 115,  193 => 113,  185 => 108,  180 => 106,  172 => 101,  167 => 99,  156 => 91,  149 => 87,  131 => 72,  126 => 70,  108 => 55,  103 => 53,  94 => 47,  89 => 45,  72 => 31,  67 => 29,  59 => 24,  54 => 22,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'הגדרות', 'icon': 'settings' }) }}*/
/* */
/*     <div class="page_content settings_content">*/
/* */
/*         <div class="ui segment settings">*/
/* */
/* */
/*             <form class="ui form" method="post">*/
/* */
/*                 <h4 class="ui center aligned icon header">*/
/*                     <i class="circular mail red icon"></i>*/
/*                     דואלים*/
/*                 </h4>*/
/* */
/* */
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.reportEmail) }}</div>*/
/*                     <br><br>*/
/*                     {{ form_widget(form.reportEmail) }}*/
/*                 </div>*/
/*                 <br>*/
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.contactEmail) }}</div>*/
/*                     <br><br>*/
/*                     {{ form_widget(form.contactEmail) }}*/
/*                 </div>*/
/*                 <br>*/
/* */
/* */
/* */
/*                 <h4 class="ui center aligned icon header">*/
/*                     <i class="circular chat red icon"></i>*/
/*                     הודעות*/
/*                 </h4>*/
/* */
/* */
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.deleteMessagesAfterDaysNumber) }}</div>*/
/*                     <br><br>*/
/*                     {{ form_widget(form.deleteMessagesAfterDaysNumber) }}*/
/*                 </div>*/
/*                 <br>*/
/* */
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.sendMessageUsersNumber) }}</div>*/
/*                     <br><br>*/
/*                     {{ form_widget(form.sendMessageUsersNumber) }}*/
/*                 </div>*/
/*                 <br>*/
/* */
/* */
/* */
/* */
/*                 <h4 class="ui center aligned icon header">*/
/*                     <i class="circular users red icon"></i>*/
/*                     חיפוש חברים*/
/*                 </h4>*/
/* */
/* */
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.usersPerPage) }}</div>*/
/*                     <br><br>*/
/*                     {{ form_widget(form.usersPerPage) }}*/
/*                 </div>*/
/*                 <br>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                 <h4 class="ui center aligned icon header">*/
/*                     <i class="circular checkmark red icon"></i>*/
/*                     כללי*/
/*                 </h4>*/
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.isCharge) }}</div>*/
/*                     <br><br>*/
/*                     <div class="ui compact segment">*/
/*                         <div class="ui slider fitted checkbox">*/
/*                             {{ form_widget(form.isCharge) }}*/
/*                             <label></label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br>*/
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.messagePopularityDaysNumber) }}</div>*/
/*                     <br><br>*/
/*                     {{ form_widget(form.messagePopularityDaysNumber) }}*/
/*                 </div>*/
/*                 <br>*/
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.userConsideredAsOnlineAfterLastActivityMinutesNumber) }}</div>*/
/*                     <br><br>*/
/*                     {{ form_widget(form.userConsideredAsOnlineAfterLastActivityMinutesNumber) }}*/
/*                 </div>*/
/*                 <br>*/
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">{{ form_label(form.userConsideredAsNewAfterDaysNumber) }}</div>*/
/*                     <br><br>*/
/*                     {{ form_widget(form.userConsideredAsNewAfterDaysNumber) }}*/
/*                 </div>*/
/*                 <br>*/
/* */
/*                 {{ form_rest(form) }}*/
/* */
/* */
/* */
/*                 <div class="clear"></div>*/
/*                 <br><br><br>*/
/* */
/* */
/*                 <div class="ui one column centered grid">*/
/*                     <button class="ui labeled icon red approve big button right">*/
/*                         <i class="save icon"></i>*/
/*                         לשמור*/
/*                     </button>*/
/*                 </div>*/
/* */
/*                 <br><br><br>*/
/* */
/* */
/*             </form>*/
/* */
/* */
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
