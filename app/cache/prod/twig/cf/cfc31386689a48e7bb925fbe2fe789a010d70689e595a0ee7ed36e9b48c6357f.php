<?php

/* :frontend/user/profile:index.html.twig */
class __TwigTemplate_f8e2ed972f92bf4e65b115608fb4bc2e8de43683d052f11b6384e9f9efe2e6b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/user/profile:index.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

    <div class=\"midsec\">
        <h1>עריכת פרופיל</h1>
        <div class=\"harsama-midsec\">

            <ul class=\"stepssec clearfix\">
                <li ";
        // line 11
        if (((isset($context["tab"]) ? $context["tab"] : null) == 1)) {
            echo "class=\"completed\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_profile", array("tab" => 1));
        echo "\"><span class=\"nos\">1</span><span class=\"label\">פרטים</span></a></li>
                <li ";
        // line 12
        if (((isset($context["tab"]) ? $context["tab"] : null) == 2)) {
            echo "class=\"completed\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_profile", array("tab" => 2));
        echo "\"><span class=\"nos\">2</span><span class=\"label\">פרופיל</span></a></li>
                <li ";
        // line 13
        if (((isset($context["tab"]) ? $context["tab"] : null) == 3)) {
            echo "class=\"completed\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_profile", array("tab" => 3));
        echo "\"><span class=\"nos\">3</span><span class=\"label\">קצת עליי</span></a></li>
                <li ";
        // line 14
        if (((isset($context["tab"]) ? $context["tab"] : null) == 4)) {
            echo "class=\"completed\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_profile", array("tab" => 4));
        echo "\"><span class=\"nos\">4</span><span class=\"label\">תמונות</span></a></li>
            </ul>

            <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("tab" => (isset($context["tab"]) ? $context["tab"] : null))), "html", null, true);
        echo "\" method=\"post\" id=\"profile_form\">

                ";
        // line 19
        if (array_key_exists("form", $context)) {
            // line 20
            echo "                    ";
            echo twig_include($this->env, $context, (("frontend/user/profile/" . (isset($context["tab"]) ? $context["tab"] : null)) . ".html.twig"), array("form" => (isset($context["form"]) ? $context["form"] : null)));
            echo "
                    ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
                ";
        } else {
            // line 23
            echo "                    ";
            echo twig_include($this->env, $context, (("frontend/user/profile/" . (isset($context["tab"]) ? $context["tab"] : null)) . ".html.twig"), array("renderedCloudForm" => (isset($context["renderedCloudForm"]) ? $context["renderedCloudForm"] : null)));
            echo "
                ";
        }
        // line 25
        echo "
                <input type=\"submit\" id=\"save_data\" class=\"hidden\">
            </form>

        </div>



        ";
        // line 33
        if (((isset($context["tab"]) ? $context["tab"] : null) != 4)) {
            // line 34
            echo "            <br>
            <div class=\"clearfix\"><input type=\"button\" value=\"שמירה\" class=\"free\" onclick=\"\$('#save_data').click();\"></div>
        ";
        }
        // line 37
        echo "    </div>
    <!-- midsec end -->




    ";
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return ":frontend/user/profile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  114 => 37,  109 => 34,  107 => 33,  97 => 25,  91 => 23,  86 => 21,  81 => 20,  79 => 19,  74 => 17,  64 => 14,  56 => 13,  48 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* */
/*     <div class="midsec">*/
/*         <h1>עריכת פרופיל</h1>*/
/*         <div class="harsama-midsec">*/
/* */
/*             <ul class="stepssec clearfix">*/
/*                 <li {% if tab == 1 %}class="completed"{% endif %}><a href="{{ path('user_profile', {'tab': 1}) }}"><span class="nos">1</span><span class="label">פרטים</span></a></li>*/
/*                 <li {% if tab == 2 %}class="completed"{% endif %}><a href="{{ path('user_profile', {'tab': 2}) }}"><span class="nos">2</span><span class="label">פרופיל</span></a></li>*/
/*                 <li {% if tab == 3 %}class="completed"{% endif %}><a href="{{ path('user_profile', {'tab': 3}) }}"><span class="nos">3</span><span class="label">קצת עליי</span></a></li>*/
/*                 <li {% if tab == 4 %}class="completed"{% endif %}><a href="{{ path('user_profile', {'tab': 4}) }}"><span class="nos">4</span><span class="label">תמונות</span></a></li>*/
/*             </ul>*/
/* */
/*             <form action="{{ path('user_profile', {'tab': tab}) }}" method="post" id="profile_form">*/
/* */
/*                 {% if form is defined %}*/
/*                     {{ include ('frontend/user/profile/' ~ tab ~ '.html.twig', {'form': form}) }}*/
/*                     {{ form_rest(form) }}*/
/*                 {% else %}*/
/*                     {{ include ('frontend/user/profile/' ~ tab ~ '.html.twig', {'renderedCloudForm': renderedCloudForm}) }}*/
/*                 {% endif %}*/
/* */
/*                 <input type="submit" id="save_data" class="hidden">*/
/*             </form>*/
/* */
/*         </div>*/
/* */
/* */
/* */
/*         {% if tab != 4 %}*/
/*             <br>*/
/*             <div class="clearfix"><input type="button" value="שמירה" class="free" onclick="$('#save_data').click();"></div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <!-- midsec end -->*/
/* */
/* */
/* */
/* */
/*     {# sercformsec #}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
