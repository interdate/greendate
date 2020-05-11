<?php

/* backend/pagination.html.twig */
class __TwigTemplate_45034b3a3604102087c30cae162a75a96b10f5f36e5c003acdb12b0b02a2983a extends Twig_Template
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
        $__internal_3292c276f48e55b04a7065aae3720028957ea29f625e4a2fb5d153b8401cc754 = $this->env->getExtension("native_profiler");
        $__internal_3292c276f48e55b04a7065aae3720028957ea29f625e4a2fb5d153b8401cc754->enter($__internal_3292c276f48e55b04a7065aae3720028957ea29f625e4a2fb5d153b8401cc754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "    <div class=\"ui borderless menu paging\">
        ";
            // line 3
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 16
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 17
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\" class=\"icon item\">
                <i class=\"long arrow right icon\"></i>
            </a>
        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 32
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\" class=\"icon item\">
                <i class=\"step backward icon\"></i>
            </a>
        ";
            }
            // line 36
            echo "    </div>
";
        }
        
        $__internal_3292c276f48e55b04a7065aae3720028957ea29f625e4a2fb5d153b8401cc754->leave($__internal_3292c276f48e55b04a7065aae3720028957ea29f625e4a2fb5d153b8401cc754_prof);

    }

    public function getTemplateName()
    {
        return "backend/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  100 => 32,  98 => 31,  95 => 30,  87 => 26,  85 => 25,  82 => 24,  75 => 22,  69 => 20,  60 => 17,  57 => 16,  53 => 15,  50 => 14,  42 => 10,  40 => 9,  37 => 8,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
