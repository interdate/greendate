<?php

/* :frontend/user:public_user.html.twig */
class __TwigTemplate_ff9af62cda75321eb7ab1aee22ded160c524885d2a58927686bfadf9b078c3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/user:public_user.html.twig", 1);
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"popup-midsec clearfix\">

    ";
        // line 10
        echo twig_include($this->env, $context, "frontend/user/user_data.html.twig");
        echo "

</div>
<!-- end -->


";
    }

    public function getTemplateName()
    {
        return ":frontend/user:public_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* */
/* */
/* */
/* {% block content %}*/
/* */
/* <div class="popup-midsec clearfix">*/
/* */
/*     {{ include ('frontend/user/user_data.html.twig') }}*/
/* */
/* </div>*/
/* <!-- end -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
