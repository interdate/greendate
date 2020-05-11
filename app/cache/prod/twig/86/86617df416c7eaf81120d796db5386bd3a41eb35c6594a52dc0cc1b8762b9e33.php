<?php

/* CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig */
class __TwigTemplate_8760f9edb20d1acfba2de9d0c8022fa2f2b8ee47ffb37dfcf45485a62bcecfb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'craue_flow_stepList_class' => array($this, 'block_craue_flow_stepList_class'),
            'craue_flow_stepLabel' => array($this, 'block_craue_flow_stepLabel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('craue_flow_stepList_class', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('craue_flow_stepLabel', $context, $blocks);
    }

    // line 1
    public function block_craue_flow_stepList_class($context, array $blocks = array())
    {
        // line 2
        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()) == $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getCurrentStepNumber", array(), "method"))) {
            // line 3
            echo " class=\"craue_formflow_current_step\"";
        } elseif ($this->getAttribute(        // line 4
(isset($context["flow"]) ? $context["flow"] : null), "isStepSkipped", array(0 => $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array())), "method")) {
            // line 5
            echo " class=\"craue_formflow_skipped_step\"";
        } elseif ($this->getAttribute(        // line 6
(isset($context["flow"]) ? $context["flow"] : null), "isStepDone", array(0 => $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array())), "method")) {
            // line 7
            echo " class=\"craue_formflow_done_step\"";
        }
    }

    // line 11
    public function block_craue_flow_stepLabel($context, array $blocks = array())
    {
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["stepLabel"]) ? $context["stepLabel"] : null)), "html", null, true);
    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  48 => 11,  43 => 7,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 2,  30 => 1,  26 => 11,  23 => 10,  21 => 1,);
    }
}
/* {% block craue_flow_stepList_class %}*/
/* 	{%- if loop.index == flow.getCurrentStepNumber() -%}*/
/* 		{{ ' class="craue_formflow_current_step"' }}*/
/* 	{%- elseif flow.isStepSkipped(loop.index) -%}*/
/* 		{{ ' class="craue_formflow_skipped_step"' }}*/
/* 	{%- elseif flow.isStepDone(loop.index) -%}*/
/* 		{{ ' class="craue_formflow_done_step"' }}*/
/* 	{%- endif -%}*/
/* {% endblock %}*/
/* */
/* {% block craue_flow_stepLabel %}*/
/* 	{{- stepLabel | trans -}}*/
/* {% endblock %}*/
/* */
