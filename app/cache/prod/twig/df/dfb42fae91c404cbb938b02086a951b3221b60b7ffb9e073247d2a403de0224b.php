<?php

/* :backend:pagination.html.twig */
class __TwigTemplate_260919b4d9c321c8445944fc9d7e5a1c7b2de74fd25f266a855f800974300115 extends Twig_Template
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
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 2
            echo "    <div class=\"ui borderless menu paging\">
        ";
            // line 3
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["first"]) ? $context["first"] : null)))) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["first"]) ? $context["first"] : null)))), "html", null, true);
                echo "\" class=\"icon item\">
                <i class=\"step forward icon\"></i>
            </a>
        ";
            }
            // line 8
            echo "
        ";
            // line 9
            if (array_key_exists("previous", $context)) {
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\" class=\"icon item\">
                <i class=\"long arrow left icon\"></i>
            </a>
        ";
            }
            // line 14
            echo "
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 16
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 17
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => $context["page"]))), "html", null, true);
                    echo "\" class=\"item\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </span>
            ";
                } else {
                    // line 20
                    echo "                <a class=\"item active\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            ";
                }
                // line 22
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
        ";
            // line 25
            if (array_key_exists("next", $context)) {
                // line 26
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\" class=\"icon item\">
                <i class=\"long arrow right icon\"></i>
            </a>
        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["last"]) ? $context["last"] : null)))) {
                // line 32
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["last"]) ? $context["last"] : null)))), "html", null, true);
                echo "\" class=\"icon item\">
                <i class=\"step backward icon\"></i>
            </a>
        ";
            }
            // line 36
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return ":backend:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  97 => 32,  95 => 31,  92 => 30,  84 => 26,  82 => 25,  79 => 24,  72 => 22,  66 => 20,  57 => 17,  54 => 16,  50 => 15,  47 => 14,  39 => 10,  37 => 9,  34 => 8,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if pageCount > 1 %}*/
/*     <div class="ui borderless menu paging">*/
/*         {% if first is defined and current != first %}*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): first})) }}" class="icon item">*/
/*                 <i class="step forward icon"></i>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% if previous is defined %}*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): previous})) }}" class="icon item">*/
/*                 <i class="long arrow left icon"></i>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% for page in pagesInRange %}*/
/*             {% if page != current %}*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): page})) }}" class="item">{{ page }}</a>*/
/*             </span>*/
/*             {% else %}*/
/*                 <a class="item active">{{ page }}</a>*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*         {% if next is defined %}*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): next})) }}" class="icon item">*/
/*                 <i class="long arrow right icon"></i>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% if last is defined and current != last %}*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): last})) }}" class="icon item">*/
/*                 <i class="step backward icon"></i>*/
/*             </a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endif %}*/
/* */
