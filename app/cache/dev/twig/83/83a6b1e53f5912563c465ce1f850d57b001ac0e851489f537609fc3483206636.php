<?php

/* :frontend/emails:password_recovery.html.twig */
class __TwigTemplate_a5ec48014c8319b82177a1f1d78e261df428e3245f17413372e157f5beccb462 extends Twig_Template
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
        echo "שלום ";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo ",

סיסמה: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo "

בכל שאלה או בעיה נשמח לעמוד לרשותך בכתובת: admin@greendate.co.il


שלכם,
צוות גרינדייט
www.greendate.co.il
";
    }

    public function getTemplateName()
    {
        return ":frontend/emails:password_recovery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
/* שלום {{ username }},*/
/* */
/* סיסמה: {{ password }}*/
/* */
/* בכל שאלה או בעיה נשמח לעמוד לרשותך בכתובת: admin@greendate.co.il*/
/* */
/* */
/* שלכם,*/
/* צוות גרינדייט*/
/* www.greendate.co.il*/
/* */
