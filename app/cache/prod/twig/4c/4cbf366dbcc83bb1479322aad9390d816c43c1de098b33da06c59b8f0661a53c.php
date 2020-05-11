<?php

/* :frontend/emails:password_recovery.html.twig */
class __TwigTemplate_0719ffa2cf00c6542bcbb54ae2adc35e9bb71b430c63199494293a71762c2895 extends Twig_Template
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
