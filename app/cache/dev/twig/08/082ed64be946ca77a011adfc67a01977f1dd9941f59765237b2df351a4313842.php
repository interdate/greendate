<?php

/* CraueFormFlowBundle:FormFlow:stepList_customization.html.twig */
class __TwigTemplate_a65d503c4ea5a1d87951f02efd646194e3a40aa689c6c9d245f973c6a0a104d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CraueFormFlowBundle:FormFlow:stepList_content.html.twig", "CraueFormFlowBundle:FormFlow:stepList_customization.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CraueFormFlowBundle:FormFlow:stepList_content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepList_customization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'CraueFormFlowBundle:FormFlow:stepList_content.html.twig' %}*/
/* */
