<?php

/* CraueFormFlowBundle:FormFlow:stepList_content.html.twig */
class __TwigTemplate_bb4083122cac19d757a341311134fa3f87ade4bea13bacccc3264dd3da262a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig", "CraueFormFlowBundle:FormFlow:stepList_content.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ( !twig_test_empty($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getStepLabels", array(), "method"))) {
            // line 4
            echo "<ol class=\"craue_formflow_steplist\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getStepLabels", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stepLabel"]) {
                // line 6
                echo "\t\t\t<li";
                $this->displayBlock("craue_flow_stepList_class", $context, $blocks);
                echo ">";
                // line 7
                if ($this->env->getExtension('craue_formflow')->isStepLinkable((isset($context["flow"]) ? $context["flow"] : null), $this->getAttribute($context["loop"], "index", array()))) {
                    // line 8
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->env->getExtension('craue_formflow')->addDynamicStepNavigationParameters(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 9
(isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")),                     // line 10
(isset($context["flow"]) ? $context["flow"] : null), $this->getAttribute($context["loop"], "index", array()))), "html", null, true);
                    echo "\">";
                    // line 11
                    $this->displayBlock("craue_flow_stepLabel", $context, $blocks);
                    // line 12
                    echo "</a>";
                } else {
                    // line 14
                    $this->displayBlock("craue_flow_stepLabel", $context, $blocks);
                }
                // line 16
                echo "</li>
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</ol>";
        }
    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepList_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  73 => 16,  70 => 14,  67 => 12,  65 => 11,  62 => 10,  61 => 9,  59 => 8,  57 => 7,  53 => 6,  36 => 5,  33 => 4,  31 => 3,  14 => 1,);
    }
}
/* {% use 'CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig' %}*/
/* */
/* {%- if flow.getStepLabels() is not empty -%}*/
/* 	<ol class="craue_formflow_steplist">*/
/* 		{% for stepLabel in flow.getStepLabels() %}*/
/* 			<li{{ block('craue_flow_stepList_class') }}>*/
/* 				{%- if craue_isStepLinkable(flow, loop.index) -%}*/
/* 					<a href="{{ path(app.request.attributes.get('_route'), app.request.query.all*/
/* 							| merge(app.request.attributes.get('_route_params'))*/
/* 							| craue_addDynamicStepNavigationParameters(flow, loop.index)) }}">*/
/* 						{{- block('craue_flow_stepLabel') -}}*/
/* 					</a>*/
/* 				{%- else -%}*/
/* 					{{ block('craue_flow_stepLabel') }}*/
/* 				{%- endif -%}*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 	</ol>*/
/* {%- endif -%}*/
/* */
