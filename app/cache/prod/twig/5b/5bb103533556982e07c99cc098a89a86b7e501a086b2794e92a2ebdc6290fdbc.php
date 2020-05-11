<?php

/* CraueFormFlowBundle:FormFlow:stepList_customization.html.twig */
class __TwigTemplate_ad617f65768f9d83adbaeb2399033dbb21aa6586970e90ca834626e45b89daea extends Twig_Template
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
