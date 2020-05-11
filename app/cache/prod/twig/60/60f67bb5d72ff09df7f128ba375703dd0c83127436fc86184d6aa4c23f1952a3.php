<?php

/* :frontend/user/profile:2.html.twig */
class __TwigTemplate_cf549d2d2d1008b323388a637b7d643d45fc169cc69d85a52a354276e28e293c extends Twig_Template
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
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 2
            echo "    <div class=\"errors\">
        <div class=\"ui orange message\">
            <div class=\"content\">
                <div class=\"header\">
                    יש להשלים את השדות הבאים
                </div>
                <p>
                    ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), 'errors');
            echo "
                </p>
            </div>
        </div>
    </div>
";
        }
        // line 15
        echo "
<div class=\"hmaformsec two\">

    <div class=\"field\">
        <div class=\"label\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'widget');
        echo "</div>
    </div>

    <script>

        \$(document).ready(function(){
            \$('#profileTwo_city option[value=\"1229\"]').insertAfter(\$('#profileTwo_city option').eq(0));
            \$('#profileTwo_city option[value=\"509\"]').insertAfter(\$('#profileTwo_city option').eq(1));
            \$('#profileTwo_city option[value=\"421\"]').insertAfter(\$('#profileTwo_city option').eq(2));
            \$('#profileTwo_city option[value=\"130\"]').insertAfter(\$('#profileTwo_city option').eq(3));
            \$('#profileTwo_city option[value=\"61\"]').insertAfter(\$('#profileTwo_city option').eq(4));
        });

    </script>

    <div class=\"field\">
        <div class=\"label\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field ";
        // line 65
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
        <div class=\"label\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), 'label');
        echo "</div>
    </div>

    <div class=\"field\">

        <div class=\"checkboxes\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["purpose"]) {
            // line 73
            echo "                <div class=\"ui checkbox chkbox\">
                    ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purpose"], 'widget');
            echo "
                    ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purpose"], 'label');
            echo "
                </div>
                ";
            // line 77
            if (($this->getAttribute($context["loop"], "index", array()) == 4)) {
                // line 78
                echo "                    <div class=\"clr\"></div>
                ";
            }
            // line 80
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purpose'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return ":frontend/user/profile:2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 82,  183 => 80,  179 => 78,  177 => 77,  172 => 75,  168 => 74,  165 => 73,  148 => 72,  139 => 66,  133 => 65,  127 => 62,  123 => 61,  116 => 57,  112 => 56,  105 => 52,  101 => 51,  94 => 47,  90 => 46,  83 => 42,  79 => 41,  60 => 25,  56 => 24,  49 => 20,  45 => 19,  39 => 15,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% if errors %}*/
/*     <div class="errors">*/
/*         <div class="ui orange message">*/
/*             <div class="content">*/
/*                 <div class="header">*/
/*                     יש להשלים את השדות הבאים*/
/*                 </div>*/
/*                 <p>*/
/*                     {{ form_errors(form.purposes) }}*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* */
/* <div class="hmaformsec two">*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.region) }}</div>*/
/*         <div class="select">{{ form_widget(form.region) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.city) }}</div>*/
/*         <div class="select">{{ form_widget(form.city) }}</div>*/
/*     </div>*/
/* */
/*     <script>*/
/* */
/*         $(document).ready(function(){*/
/*             $('#profileTwo_city option[value="1229"]').insertAfter($('#profileTwo_city option').eq(0));*/
/*             $('#profileTwo_city option[value="509"]').insertAfter($('#profileTwo_city option').eq(1));*/
/*             $('#profileTwo_city option[value="421"]').insertAfter($('#profileTwo_city option').eq(2));*/
/*             $('#profileTwo_city option[value="130"]').insertAfter($('#profileTwo_city option').eq(3));*/
/*             $('#profileTwo_city option[value="61"]').insertAfter($('#profileTwo_city option').eq(4));*/
/*         });*/
/* */
/*     </script>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.relationshipStatus) }}</div>*/
/*         <div class="select">{{ form_widget(form.relationshipStatus) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.occupation) }}</div>*/
/*         <div class="select">{{ form_widget(form.occupation) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.education) }}</div>*/
/*         <div class="select">{{ form_widget(form.education) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.religion) }}</div>*/
/*         <div class="select">{{ form_widget(form.religion) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.sexOrientation) }}</div>*/
/*         <div class="select">{{ form_widget(form.sexOrientation) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field {% if form.purposes.vars.errors|length %}error{% endif %}">*/
/*         <div class="label">{{ form_label(form.purposes) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/* */
/*         <div class="checkboxes">*/
/*             {% for purpose in form.purposes %}*/
/*                 <div class="ui checkbox chkbox">*/
/*                     {{ form_widget(purpose) }}*/
/*                     {{ form_label(purpose) }}*/
/*                 </div>*/
/*                 {% if loop.index == 4 %}*/
/*                     <div class="clr"></div>*/
/*                 {% endif %}*/
/* */
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
