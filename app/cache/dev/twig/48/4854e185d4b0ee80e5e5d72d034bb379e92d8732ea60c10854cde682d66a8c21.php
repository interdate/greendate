<?php

/* backend/users/login_from.html.twig */
class __TwigTemplate_6d75ae64fc63c809b0d543261c64b0be5259bb5fff363abbc0ed53632db3c653 extends Twig_Template
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
        $__internal_8c4d60c79d72c088d92313e51f8404a056d6384df979fe44375472348618c50a = $this->env->getExtension("native_profiler");
        $__internal_8c4d60c79d72c088d92313e51f8404a056d6384df979fe44375472348618c50a->enter($__internal_8c4d60c79d72c088d92313e51f8404a056d6384df979fe44375472348618c50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/users/login_from.html.twig"));

        // line 1
        echo "<div class=\"right\">
<i class=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo " icon\" data-position=\"top center\" data-content=\"
                                    ביקור אחרון
מ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["loginFrom"]) ? $context["loginFrom"] : $this->getContext($context, "loginFrom")), "html", null, true);
        echo "
                                    בתאריך
";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "
                                    בשעה
";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "\"></i>
</div>
";
        
        $__internal_8c4d60c79d72c088d92313e51f8404a056d6384df979fe44375472348618c50a->leave($__internal_8c4d60c79d72c088d92313e51f8404a056d6384df979fe44375472348618c50a_prof);

    }

    public function getTemplateName()
    {
        return "backend/users/login_from.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  30 => 4,  25 => 2,  22 => 1,);
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
