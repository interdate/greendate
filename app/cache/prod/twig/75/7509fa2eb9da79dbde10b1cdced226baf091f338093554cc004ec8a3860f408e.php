<?php

/* :frontend/emails:sign_up.html.twig */
class __TwigTemplate_f5cc34c13bacee2ee0a3b97798132f266b40fadfe440b5dd0b7cbf7df2679988 extends Twig_Template
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

תודה על הרשמתך לאתר גרינדייט, אתר ההכרויות לצמחונים וטבעונים.
להלן פרטי הכניסה שלך לאתר:
אימייל: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "
סיסמה: ";
        // line 6
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
        return ":frontend/emails:sign_up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  27 => 5,  19 => 1,);
    }
}
/* שלום {{ username }},*/
/* */
/* תודה על הרשמתך לאתר גרינדייט, אתר ההכרויות לצמחונים וטבעונים.*/
/* להלן פרטי הכניסה שלך לאתר:*/
/* אימייל: {{ email }}*/
/* סיסמה: {{ password }}*/
/* */
/* בכל שאלה או בעיה נשמח לעמוד לרשותך בכתובת: admin@greendate.co.il*/
/* */
/* */
/* שלכם,*/
/* צוות גרינדייט*/
/* www.greendate.co.il*/
/* */
