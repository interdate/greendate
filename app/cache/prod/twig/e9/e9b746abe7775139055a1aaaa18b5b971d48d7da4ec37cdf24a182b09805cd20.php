<?php

/* :backend/users:login_from.html.twig */
class __TwigTemplate_fda7eb77fe00c077a658c8c83a1a2e437d9ec24497a11184545b13fc58704255 extends Twig_Template
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
        echo "<div class=\"right\">
<i class=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo " icon\" data-position=\"top center\" data-content=\"
                                    ביקור אחרון
מ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["loginFrom"]) ? $context["loginFrom"] : null), "html", null, true);
        echo "
                                    בתאריך
";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
        echo "
                                    בשעה
";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
        echo "\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return ":backend/users:login_from.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="right">*/
/* <i class="{{ icon }} icon" data-position="top center" data-content="*/
/*                                     ביקור אחרון*/
/* מ{{ loginFrom }}*/
/*                                     בתאריך*/
/* {{ date }}*/
/*                                     בשעה*/
/* {{ time }}"></i>*/
/* </div>*/
/* */
