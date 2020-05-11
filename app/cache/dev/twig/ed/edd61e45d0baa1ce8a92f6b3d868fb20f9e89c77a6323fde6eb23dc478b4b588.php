<?php

/* :frontend/user:users.html.twig */
class __TwigTemplate_c9f37a1b6924070697690b1e16cb5d7fd427c4e7c6740af8d58eb678c234f7b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/user:users.html.twig", 1);
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
\t<div class=\"midsec\">

\t\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "</h1>

\t\t<div class=\"filterby clearfix\">

\t\t\t";
        // line 11
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 12
            echo "
\t\t\t\t";
            // line 13
            $context["filter"] = (( !array_key_exists("data", $context)) ? ("lastActivity") : ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filter", array())));
            // line 14
            echo "
\t\t\t\t<div class=\"flytitle\">סינון לפי</div>
\t\t\t\t<div class=\"select\">
\t\t\t\t\t<select id=\"searchFilter\">
\t\t\t\t\t\t<option value=\"new\"";
            // line 18
            if (((isset($context["filter"]) ? $context["filter"] : null) == "new")) {
                echo " selected=\"selected\"";
            }
            echo ">חברים חדשים</option>
\t\t\t\t\t\t";
            // line 19
            if (( !$this->getAttribute((isset($context["data"]) ? $context["data"] : null), "withPhoto", array(), "any", true, true) ||  !$this->getAttribute((isset($context["data"]) ? $context["data"] : null), "withPhoto", array()))) {
                // line 20
                echo "\t\t\t\t\t\t\t<option value=\"photo\" ";
                if (((isset($context["filter"]) ? $context["filter"] : null) == "photo")) {
                    echo " selected=\"selected\"";
                }
                echo ">בעלי תמונת פרופיל</option>
\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t<option value=\"lastActivity\"";
            if (((isset($context["filter"]) ? $context["filter"] : null) == "lastActivity")) {
                echo " selected=\"selected\"";
            }
            echo ">ביקור אחרון</option>
\t\t\t\t\t\t<option value=\"popularity\"";
            // line 23
            if (((isset($context["filter"]) ? $context["filter"] : null) == "popularity")) {
                echo " selected=\"selected\"";
            }
            echo ">פופולריות</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t";
        }
        // line 28
        echo "
\t\t\t";
        // line 30
        echo "
\t\t\t<form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array()), "html", null, true);
        echo "\" method=\"post\" id=\"search_filter_form\">

\t\t\t\t";
        // line 33
        if (array_key_exists("data", $context)) {
            // line 34
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 35
                echo "\t\t\t\t\t\t";
                if (twig_test_iterable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"));
                    foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                        // line 37
                        echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"advancedSearch[";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "\" />
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 40
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"advancedSearch[";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" id=\"advancedSearch_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" />
\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t<input type=\"hidden\" name=\"advancedSearch[filter]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : null), "html", null, true);
            echo "\" id=\"advancedSearch_filter\" />
\t\t\t\t";
        }
        // line 46
        echo "
\t\t\t\t<input type=\"submit\" class=\"hidden\">

\t\t\t</form>

\t\t</div>



\t\t";
        // line 55
        $context["template"] = (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) ? ("users_list") : ("users_public_list"));
        // line 56
        echo "
\t\t";
        // line 57
        echo twig_include($this->env, $context, (("frontend/user/" . (isset($context["template"]) ? $context["template"] : null)) . ".html.twig"));
        echo "

\t\t<div class=\"pages usersResults\">
\t\t\t";
        // line 60
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filter", array()) != "popularity")) {
            // line 61
            echo "\t\t\t\t";
            echo $this->env->getExtension('knp_pagination')->render((isset($context["users"]) ? $context["users"] : null));
            echo "
\t\t\t";
        }
        // line 63
        echo "\t\t</div>

\t</div><!-- midsec end -->

";
    }

    public function getTemplateName()
    {
        return ":frontend/user:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  180 => 61,  178 => 60,  172 => 57,  169 => 56,  167 => 55,  156 => 46,  150 => 44,  147 => 43,  141 => 42,  131 => 40,  128 => 39,  115 => 37,  110 => 36,  107 => 35,  102 => 34,  100 => 33,  95 => 31,  92 => 30,  89 => 28,  79 => 23,  72 => 22,  64 => 20,  62 => 19,  56 => 18,  50 => 14,  48 => 13,  45 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="midsec">*/
/* */
/* 		<h1>{{ header }}</h1>*/
/* */
/* 		<div class="filterby clearfix">*/
/* */
/* 			{% if app.user %}*/
/* */
/* 				{% set filter = data is not defined ? 'lastActivity' : data.filter %}*/
/* */
/* 				<div class="flytitle">סינון לפי</div>*/
/* 				<div class="select">*/
/* 					<select id="searchFilter">*/
/* 						<option value="new"{% if filter == 'new' %} selected="selected"{% endif %}>חברים חדשים</option>*/
/* 						{% if data.withPhoto is not defined or not data.withPhoto %}*/
/* 							<option value="photo" {% if filter == 'photo' %} selected="selected"{% endif %}>בעלי תמונת פרופיל</option>*/
/* 						{% endif %}*/
/* 						<option value="lastActivity"{% if filter == 'lastActivity' %} selected="selected"{% endif %}>ביקור אחרון</option>*/
/* 						<option value="popularity"{% if filter == 'popularity' %} selected="selected"{% endif %}>פופולריות</option>*/
/* 					</select>*/
/* 				</div>*/
/* */
/* 			{% endif %}*/
/* */
/* 			{#<input type="hidden" id="page" value="1"> #}*/
/* */
/* 			<form action="{{ app.request.requesturi }}" method="post" id="search_filter_form">*/
/* */
/* 				{% if data is defined %}*/
/* 					{% for key,value in data %}*/
/* 						{% if data[key] is iterable %}*/
/* 							{% for key2,value2 in data[key] %}*/
/* 								<input type="hidden" name="advancedSearch[{{ key }}][{{ key2 }}]" value="{{ value2 }}" />*/
/* 							{% endfor %}*/
/* 						{% else %}*/
/* 							<input type="hidden" name="advancedSearch[{{ key }}]" value="{{ value }}" id="advancedSearch_{{ key }}" />*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				{% else %}*/
/* 					<input type="hidden" name="advancedSearch[filter]" value="{{ filter }}" id="advancedSearch_filter" />*/
/* 				{% endif %}*/
/* */
/* 				<input type="submit" class="hidden">*/
/* */
/* 			</form>*/
/* */
/* 		</div>*/
/* */
/* */
/* */
/* 		{% set template = app.user ? 'users_list' : 'users_public_list'  %}*/
/* */
/* 		{{ include ('frontend/user/' ~ template ~ '.html.twig') }}*/
/* */
/* 		<div class="pages usersResults">*/
/* 			{% if data.filter != 'popularity' %}*/
/* 				{{ knp_pagination_render(users) }}*/
/* 			{% endif %}*/
/* 		</div>*/
/* */
/* 	</div><!-- midsec end -->*/
/* */
/* {% endblock %}*/
