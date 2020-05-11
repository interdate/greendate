<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_dcc0a6de4af4a13f0be1bb7aa909d1832160407c5d6c312c53d2ab3ebf976dfe extends Twig_Template
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
        $__internal_f636ad6fb73127bc45bb6777ef85dc756ee4275f198fd5f43c5a4ffad1141a26 = $this->env->getExtension("native_profiler");
        $__internal_f636ad6fb73127bc45bb6777ef85dc756ee4275f198fd5f43c5a4ffad1141a26->enter($__internal_f636ad6fb73127bc45bb6777ef85dc756ee4275f198fd5f43c5a4ffad1141a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f636ad6fb73127bc45bb6777ef85dc756ee4275f198fd5f43c5a4ffad1141a26->leave($__internal_f636ad6fb73127bc45bb6777ef85dc756ee4275f198fd5f43c5a4ffad1141a26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
