<?php

/* :backend/messenger:pagination.html.twig */
class __TwigTemplate_3bf23fd4d23d7375c570e7b57654c4ff0cf786a5ffb1c0fb1cbb80fe44f05c45 extends Twig_Template
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
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()) > 1)) {
            // line 2
            echo "
    <div class=\"ui borderless menu paging\">
        ";
            // line 4
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) > 1)) {
                // line 5
                echo "            <a class=\"icon item first\" href=\"";
                if (array_key_exists("userId", $context)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("userId" => (isset($context["userId"]) ? $context["userId"] : null), "page" => 1)), "html", null, true);
                } else {
                    echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("page" => 1));
                }
                echo "\">
                <i class=\"step forward icon\"></i>
            </a>

            <a class=\"icon item previous\" href=\"";
                // line 9
                if (array_key_exists("userId", $context)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("userId" => (isset($context["userId"]) ? $context["userId"] : null), "page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 1))), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 1))), "html", null, true);
                }
                echo "\">
                <i class=\"long arrow left icon\"></i>
            </a>
        ";
            }
            // line 13
            echo "
        ";
            // line 15
            echo "
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 5), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 5), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 17
                echo "            <a class=\"";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()))) {
                    echo " active current ";
                }
                echo " item page\" href=\"";
                if (array_key_exists("userId", $context)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("userId" => (isset($context["userId"]) ? $context["userId"] : null), "page" => $context["p"])), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("page" => $context["p"])), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
        ";
            // line 20
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()))) {
                // line 21
                echo "            <a class=\"icon item next\" href=\"";
                if (array_key_exists("userId", $context)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("userId" => (isset($context["userId"]) ? $context["userId"] : null), "page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 1))), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 1))), "html", null, true);
                }
                echo "\">
                <i class=\"long arrow right icon\"></i>
            </a>

            <a class=\"icon item last\" href=\"";
                // line 25
                if (array_key_exists("userId", $context)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("userId" => (isset($context["userId"]) ? $context["userId"] : null), "page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()))), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()))), "html", null, true);
                }
                echo "\">
                <i class=\"step backward icon\"></i>
            </a>
        ";
            }
            // line 29
            echo "    </div>

";
        }
        // line 32
        echo "

";
    }

    public function getTemplateName()
    {
        return ":backend/messenger:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  107 => 29,  96 => 25,  84 => 21,  82 => 20,  79 => 19,  60 => 17,  56 => 16,  53 => 15,  50 => 13,  39 => 9,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if pagination.pages_count > 1 %}*/
/* */
/*     <div class="ui borderless menu paging">*/
/*         {% if pagination.page > 1 %}*/
/*             <a class="icon item first" href="{% if userId is defined %}{{ path(pagination.route, {'userId': userId, 'page': 1}) }}{% else %}{{ path(pagination.route, {'page': 1}) }}{% endif %}">*/
/*                 <i class="step forward icon"></i>*/
/*             </a>*/
/* */
/*             <a class="icon item previous" href="{% if userId is defined %}{{ path(pagination.route, {'userId': userId, 'page': pagination.page-1}) }}{% else %}{{ path(pagination.route, {'page': pagination.page-1}) }}{% endif %}">*/
/*                 <i class="long arrow left icon"></i>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {# display p numbers only from p-4 to p+4 but don't go < 1 or > pages_count #}*/
/* */
/*         {% for p in range(max(pagination.page - 5, 1), min(pagination.page + 5, pagination.pages_count)) %}*/
/*             <a class="{% if p == pagination.page %} active current {% endif %} item page" href="{% if userId is defined %}{{ path(pagination.route, {'userId': userId, 'page': p}) }}{% else %}{{ path(pagination.route, {'page': p}) }}{% endif %}">{{ p }}</a>*/
/*         {% endfor %}*/
/* */
/*         {% if pagination.page < pagination.pages_count %}*/
/*             <a class="icon item next" href="{% if userId is defined %}{{ path(pagination.route, {'userId': userId, 'page': pagination.page+1}) }}{% else %}{{ path(pagination.route, {'page': pagination.page+1}) }}{% endif %}">*/
/*                 <i class="long arrow right icon"></i>*/
/*             </a>*/
/* */
/*             <a class="icon item last" href="{% if userId is defined %}{{ path(pagination.route, {'userId': userId, 'page': pagination.pages_count}) }}{% else %}{{ path(pagination.route, {'page': pagination.pages_count}) }}{% endif %}">*/
/*                 <i class="step backward icon"></i>*/
/*             </a>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endif %}*/
/* */
/* */
/* */
