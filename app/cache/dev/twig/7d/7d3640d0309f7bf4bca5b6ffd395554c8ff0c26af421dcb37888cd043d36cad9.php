<?php

/* CraueFormFlowBundle:FormFlow:buttons.html.twig */
class __TwigTemplate_8579e2371abd0d7d3c97a4b37f31a5f6d6bc7ed95c89df1594b622452aab2da5 extends Twig_Template
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
        $context["renderBackButton"] = (($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getFirstStepNumber", array(), "method") < $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getLastStepNumber", array(), "method")) && twig_in_filter($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getCurrentStepNumber", array(), "method"), range(($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getFirstStepNumber", array(), "method") + 1), $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getLastStepNumber", array(), "method"))));
        // line 2
        echo "<div class=\"craue_formflow_buttons craue_formflow_button_count_";
        if ((isset($context["renderBackButton"]) ? $context["renderBackButton"] : null)) {
            echo "3";
        } else {
            echo "2";
        }
        echo "\">
\t";
        // line 9
        $context["isLastStep"] = ($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getCurrentStepNumber", array(), "method") == $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getLastStepNumber", array(), "method"));
        // line 10
        $context["craue_formflow_button_class_last"] = ((array_key_exists("craue_formflow_button_class_last", $context)) ? (_twig_default_filter((isset($context["craue_formflow_button_class_last"]) ? $context["craue_formflow_button_class_last"] : null), "craue_formflow_button_last")) : ("craue_formflow_button_last"));
        // line 11
        $context["craue_formflow_button_class_last"] = (((isset($context["isLastStep"]) ? $context["isLastStep"] : null)) ? (((        // line 12
array_key_exists("craue_formflow_button_class_finish", $context)) ? (_twig_default_filter((isset($context["craue_formflow_button_class_finish"]) ? $context["craue_formflow_button_class_finish"] : null), (isset($context["craue_formflow_button_class_last"]) ? $context["craue_formflow_button_class_last"] : null))) : ((isset($context["craue_formflow_button_class_last"]) ? $context["craue_formflow_button_class_last"] : null)))) : (((        // line 13
array_key_exists("craue_formflow_button_class_next", $context)) ? (_twig_default_filter((isset($context["craue_formflow_button_class_next"]) ? $context["craue_formflow_button_class_next"] : null), (isset($context["craue_formflow_button_class_last"]) ? $context["craue_formflow_button_class_last"] : null))) : ((isset($context["craue_formflow_button_class_last"]) ? $context["craue_formflow_button_class_last"] : null)))));
        // line 15
        echo "<button type=\"submit\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["craue_formflow_button_class_last"]) ? $context["craue_formflow_button_class_last"] : null), "html", null, true);
        echo "\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((isset($context["isLastStep"]) ? $context["isLastStep"] : null)) ? ("button.finish") : ("button.next")), array(), "CraueFormFlowBundle"), "html", null, true);
        // line 17
        echo "</button>

\t";
        // line 19
        if ((isset($context["renderBackButton"]) ? $context["renderBackButton"] : null)) {
            // line 20
            echo "\t\t<button type=\"submit\" class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("craue_formflow_button_class_back", $context)) ? (_twig_default_filter((isset($context["craue_formflow_button_class_back"]) ? $context["craue_formflow_button_class_back"] : null), "")) : ("")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getFormTransitionKey", array(), "method"), "html", null, true);
            echo "\" value=\"back\" formnovalidate=\"formnovalidate\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.back", array(), "CraueFormFlowBundle"), "html", null, true);
            // line 22
            echo "</button>
\t";
        }
        // line 24
        echo "
\t<button type=\"submit\" class=\"";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("craue_formflow_button_class_reset", $context)) ? (_twig_default_filter((isset($context["craue_formflow_button_class_reset"]) ? $context["craue_formflow_button_class_reset"] : null), "craue_formflow_button_first")) : ("craue_formflow_button_first")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"reset\" formnovalidate=\"formnovalidate\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.reset", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 27
        echo "</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  70 => 26,  65 => 25,  62 => 24,  58 => 22,  56 => 21,  50 => 20,  48 => 19,  44 => 17,  42 => 16,  38 => 15,  36 => 13,  35 => 12,  34 => 11,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% set renderBackButton = flow.getFirstStepNumber() < flow.getLastStepNumber() and flow.getCurrentStepNumber() in (flow.getFirstStepNumber() + 1) .. flow.getLastStepNumber() %}*/
/* <div class="craue_formflow_buttons craue_formflow_button_count_{% if renderBackButton %}3{% else %}2{% endif %}">*/
/* 	{#*/
/* 		Default button (the one trigged by pressing the enter/return key) must be defined first.*/
/* 		Thus, all buttons are defined in reverse order and will be reversed again via CSS.*/
/* 		See http://stackoverflow.com/questions/1963245/multiple-submit-buttons-specifying-default-button*/
/* 	#}*/
/* */
/* 	{%- set isLastStep = flow.getCurrentStepNumber() == flow.getLastStepNumber() -%}*/
/* 	{%- set craue_formflow_button_class_last = craue_formflow_button_class_last | default('craue_formflow_button_last') -%}*/
/* 	{%- set craue_formflow_button_class_last = isLastStep*/
/* 			? craue_formflow_button_class_finish | default(craue_formflow_button_class_last)*/
/* 			: craue_formflow_button_class_next | default(craue_formflow_button_class_last)*/
/* 		-%}*/
/* 	<button type="submit" class="{{ craue_formflow_button_class_last }}">*/
/* 		{{- (isLastStep ? 'button.finish' : 'button.next') | trans({}, 'CraueFormFlowBundle') -}}*/
/* 	</button>*/
/* */
/* 	{% if renderBackButton %}*/
/* 		<button type="submit" class="{{ craue_formflow_button_class_back | default('') }}" name="{{ flow.getFormTransitionKey() }}" value="back" formnovalidate="formnovalidate">*/
/* 			{{- 'button.back' | trans({}, 'CraueFormFlowBundle') -}}*/
/* 		</button>*/
/* 	{% endif %}*/
/* */
/* 	<button type="submit" class="{{ craue_formflow_button_class_reset | default('craue_formflow_button_first') }}" name="{{ flow.getFormTransitionKey() }}" value="reset" formnovalidate="formnovalidate">*/
/* 		{{- 'button.reset' | trans({}, 'CraueFormFlowBundle') -}}*/
/* 	</button>*/
/* </div>*/
/* */
