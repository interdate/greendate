<?php

/* :frontend/security/sign_up:2.html.twig */
class __TwigTemplate_d2920492bf323d0586fd1c7de1c301f02f64118fcc64c4d5677aa3bf8614ee78 extends Twig_Template
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
        echo "<div class=\"hmaformsec two\">

    <h3>יצירת פרופיל</h3>

    <div class=\"field\">
        <div class=\"label\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'widget');
        echo "</div>
    </div>

    <script>

        \$(document).ready(function(){
            \$('#signUpTwo_city option[value=\"1229\"]').insertAfter(\$('#signUpTwo_city option').eq(0));
            \$('#signUpTwo_city option[value=\"509\"]').insertAfter(\$('#signUpTwo_city option').eq(1));
            \$('#signUpTwo_city option[value=\"421\"]').insertAfter(\$('#signUpTwo_city option').eq(2));
            \$('#signUpTwo_city option[value=\"130\"]').insertAfter(\$('#signUpTwo_city option').eq(3));
            \$('#signUpTwo_city option[value=\"61\"]').insertAfter(\$('#signUpTwo_city option').eq(4));
        });

    </script>

    <div class=\"field\">
        <div class=\"label\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
        <div class=\"label\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), 'label');
        echo "</div>
    </div>

    <div class=\"field padd for-label\">

        <div class=\"checkboxes\">
            ";
        // line 73
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
            // line 74
            echo "                <div class=\"ui checkbox chkbox\">
                    ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purpose"], 'widget');
            echo "
                    ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purpose"], 'label');
            echo "
                </div>
                ";
            // line 78
            if (($this->getAttribute($context["loop"], "index", array()) == 4)) {
                // line 79
                echo "                    <div class=\"clr\"></div>
                ";
            }
            // line 81
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
        // line 83
        echo "        </div>
    </div>


    <div class=\"field padd\">
        <input type=\"button\"  class=\"nextstage\" value=\"לשלב הבא\" >
        <input type=\"button\"  class=\"return\" value=\"חזרה\" onclick=\"\$('#prev_stage').click();\">
        <input type=\"submit\" id=\"next_stage\" class=\"hidden\">
        <input type=\"submit\" id=\"prev_stage\" class=\"hidden\" name=\"flow_signUp_transition\" value=\"back\" formnovalidate=\"formnovalidate\">
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return ":frontend/security/sign_up:2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 83,  184 => 81,  180 => 79,  178 => 78,  173 => 76,  169 => 75,  166 => 74,  149 => 73,  140 => 67,  134 => 66,  128 => 63,  124 => 62,  117 => 58,  113 => 57,  106 => 53,  102 => 52,  95 => 48,  91 => 47,  84 => 43,  80 => 42,  61 => 26,  57 => 25,  50 => 21,  46 => 20,  39 => 15,  30 => 9,  21 => 2,  19 => 1,);
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
/* <div class="hmaformsec two">*/
/* */
/*     <h3>יצירת פרופיל</h3>*/
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
/*             $('#signUpTwo_city option[value="1229"]').insertAfter($('#signUpTwo_city option').eq(0));*/
/*             $('#signUpTwo_city option[value="509"]').insertAfter($('#signUpTwo_city option').eq(1));*/
/*             $('#signUpTwo_city option[value="421"]').insertAfter($('#signUpTwo_city option').eq(2));*/
/*             $('#signUpTwo_city option[value="130"]').insertAfter($('#signUpTwo_city option').eq(3));*/
/*             $('#signUpTwo_city option[value="61"]').insertAfter($('#signUpTwo_city option').eq(4));*/
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
/*     <div class="field padd for-label">*/
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
/* */
/*     <div class="field padd">*/
/*         <input type="button"  class="nextstage" value="לשלב הבא" >*/
/*         <input type="button"  class="return" value="חזרה" onclick="$('#prev_stage').click();">*/
/*         <input type="submit" id="next_stage" class="hidden">*/
/*         <input type="submit" id="prev_stage" class="hidden" name="flow_signUp_transition" value="back" formnovalidate="formnovalidate">*/
/*     </div>*/
/* */
/* </div>*/
/* */
