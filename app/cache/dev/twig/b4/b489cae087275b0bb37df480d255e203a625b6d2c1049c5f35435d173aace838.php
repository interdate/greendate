<?php

/* :frontend/security/sign_up:3.html.twig */
class __TwigTemplate_cfbfa7127ee0840d7938044b46b651acdebb4cef2f24db581cfbae8128d4abc0 extends Twig_Template
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), 'errors');
            echo "
                    ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), 'errors');
            echo "
                    ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), 'errors');
            echo "
                    ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), 'errors');
            echo "
                </p>
            </div>
        </div>
    </div>
";
        }
        // line 18
        echo "<div class=\"hmaformsec three\">

    <h3>יצירת פרופיל</h3>

    <div class=\"field ";
        // line 22
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
        <div class=\"label\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), 'label');
        echo "
            <div class=\"instr\">
            (מינימום 10 תווים)
            </div>
        </div>
        <div class=\"textarea\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field ";
        // line 32
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
        <div class=\"label\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), 'label');
        echo "
            <div class=\"instr\">
                (מינימום 10 תווים)
            </div>
        </div>
        <div class=\"textarea\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nutrition", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nutrition", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label ";
        // line 53
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\" style=\"margin-top: -3px\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), 'label');
        echo "</div>

        <div class=\"chkright\">
            <div class=\"checkboxes clearfix\">
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["veggieReason"]) {
            // line 58
            echo "                    <div class=\"ui checkbox chkbox\">
                        ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["veggieReason"], 'widget');
            echo "
                        ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["veggieReason"], 'label');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['veggieReason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </div>
        </div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sport", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sport", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "green", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "green", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "animals", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "animals", array()), 'widget');
        echo "</div>
    </div>


    <div class=\"field\">
        <div class=\"label ";
        // line 99
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\" style=\"margin-top: -3px\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), 'label');
        echo "</div>

        <div class=\"chkright\">
            <div class=\"checkboxes clearfix\">
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 104
            echo "                    <div class=\"ui checkbox chkbox\">
                        ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["interest"], 'widget');
            echo "
                        ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["interest"], 'label');
            echo "
                        ";
            // line 108
            echo "                    </div>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            </div>
        </div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "politicalAffiliation", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "politicalAffiliation", array()), 'widget');
        echo "</div>
    </div>




    <h3>מראה חיצוני</h3>


    <div class=\"field\">
        <div class=\"label\">";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eyes", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eyes", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hair", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hair", array()), 'widget');
        echo "</div>
    </div>

    <h3>עוד קצת עליי</h3>

    <div class=\"field\">
        <div class=\"label\">";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfectDate", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfectDate", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteDish", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteDish", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteRestaurant", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteRestaurant", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dinnerWith", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dinnerWith", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteBooks", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteBooks", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "music", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "music", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"clr padd\"></div>

    <div class=\"field padd\">
        <input type=\"button\"  class=\"nextstage\" value=\"לשלב הבא\" >
        <input type=\"button\"  class=\"return\" value=\"חזרה\" onclick=\"\$('#prev_stage').click();\">
        <input type=\"submit\" id=\"next_stage\" class=\"hidden\">
        <input type=\"submit\" id=\"prev_stage\" class=\"hidden\" name=\"flow_signUp_transition\" value=\"back\" formnovalidate=\"formnovalidate\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":frontend/security/sign_up:3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 176,  387 => 175,  380 => 171,  376 => 170,  369 => 166,  365 => 165,  358 => 161,  354 => 160,  347 => 156,  343 => 155,  336 => 151,  332 => 150,  323 => 144,  319 => 143,  312 => 139,  308 => 138,  301 => 134,  297 => 133,  290 => 129,  286 => 128,  273 => 118,  269 => 117,  262 => 112,  253 => 108,  249 => 106,  245 => 105,  242 => 104,  238 => 103,  227 => 99,  219 => 94,  215 => 93,  208 => 89,  204 => 88,  197 => 84,  193 => 83,  186 => 79,  182 => 78,  175 => 74,  171 => 73,  164 => 69,  160 => 68,  153 => 63,  144 => 60,  140 => 59,  137 => 58,  133 => 57,  122 => 53,  115 => 49,  111 => 48,  104 => 44,  100 => 43,  93 => 39,  85 => 34,  78 => 32,  72 => 29,  64 => 24,  57 => 22,  51 => 18,  42 => 12,  38 => 11,  34 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/*                     {{ form_errors(form.about) }}*/
/*                     {{ form_errors(form.looking) }}*/
/*                     {{ form_errors(form.veggieReasons) }}*/
/*                     {{ form_errors(form.interests) }}*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* <div class="hmaformsec three">*/
/* */
/*     <h3>יצירת פרופיל</h3>*/
/* */
/*     <div class="field {% if form.about.vars.errors|length %}error{% endif %}">*/
/*         <div class="label">*/
/*             {{ form_label(form.about) }}*/
/*             <div class="instr">*/
/*             (מינימום 10 תווים)*/
/*             </div>*/
/*         </div>*/
/*         <div class="textarea">{{ form_widget(form.about) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field {% if form.looking.vars.errors|length %}error{% endif %}">*/
/*         <div class="label">*/
/*             {{ form_label(form.looking) }}*/
/*             <div class="instr">*/
/*                 (מינימום 10 תווים)*/
/*             </div>*/
/*         </div>*/
/*         <div class="textarea">{{ form_widget(form.looking) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.type) }}</div>*/
/*         <div class="select">{{ form_widget(form.type) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.nutrition) }}</div>*/
/*         <div class="select">{{ form_widget(form.nutrition) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label {% if form.veggieReasons.vars.errors|length %}error{% endif %}" style="margin-top: -3px">{{ form_label(form.veggieReasons) }}</div>*/
/* */
/*         <div class="chkright">*/
/*             <div class="checkboxes clearfix">*/
/*                 {% for veggieReason in form.veggieReasons %}*/
/*                     <div class="ui checkbox chkbox">*/
/*                         {{ form_widget(veggieReason) }}*/
/*                         {{ form_label(veggieReason) }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.smoking) }}</div>*/
/*         <div class="select">{{ form_widget(form.smoking) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.drinking) }}</div>*/
/*         <div class="select">{{ form_widget(form.drinking) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.sport) }}</div>*/
/*         <div class="select">{{ form_widget(form.sport) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.green) }}</div>*/
/*         <div class="select">{{ form_widget(form.green) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.children) }}</div>*/
/*         <div class="select">{{ form_widget(form.children) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.animals) }}</div>*/
/*         <div class="select">{{ form_widget(form.animals) }}</div>*/
/*     </div>*/
/* */
/* */
/*     <div class="field">*/
/*         <div class="label {% if form.interests.vars.errors|length %}error{% endif %}" style="margin-top: -3px">{{ form_label(form.interests) }}</div>*/
/* */
/*         <div class="chkright">*/
/*             <div class="checkboxes clearfix">*/
/*                 {% for interest in form.interests %}*/
/*                     <div class="ui checkbox chkbox">*/
/*                         {{ form_widget(interest) }}*/
/*                         {{ form_label(interest) }}*/
/*                         {#{ form_label(interest, null, {'label_attr': {'class': 'css-label'}}) }#}*/
/*                     </div>*/
/* */
/* */
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.politicalAffiliation) }}</div>*/
/*         <div class="select">{{ form_widget(form.politicalAffiliation) }}</div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/*     <h3>מראה חיצוני</h3>*/
/* */
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.height) }}</div>*/
/*         <div class="select">{{ form_widget(form.height) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.body) }}</div>*/
/*         <div class="select">{{ form_widget(form.body) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.eyes) }}</div>*/
/*         <div class="select">{{ form_widget(form.eyes) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.hair) }}</div>*/
/*         <div class="select">{{ form_widget(form.hair) }}</div>*/
/*     </div>*/
/* */
/*     <h3>עוד קצת עליי</h3>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.perfectDate) }}</div>*/
/*         <div class="textarea">{{ form_widget(form.perfectDate) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.favoriteDish) }}</div>*/
/*         <div class="textarea">{{ form_widget(form.favoriteDish) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.favoriteRestaurant) }}</div>*/
/*         <div class="textarea">{{ form_widget(form.favoriteRestaurant) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.dinnerWith) }}</div>*/
/*         <div class="textarea">{{ form_widget(form.dinnerWith) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.favoriteBooks) }}</div>*/
/*         <div class="textarea">{{ form_widget(form.favoriteBooks) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field">*/
/*         <div class="label">{{ form_label(form.music) }}</div>*/
/*         <div class="textarea">{{ form_widget(form.music) }}</div>*/
/*     </div>*/
/* */
/*     <div class="clr padd"></div>*/
/* */
/*     <div class="field padd">*/
/*         <input type="button"  class="nextstage" value="לשלב הבא" >*/
/*         <input type="button"  class="return" value="חזרה" onclick="$('#prev_stage').click();">*/
/*         <input type="submit" id="next_stage" class="hidden">*/
/*         <input type="submit" id="prev_stage" class="hidden" name="flow_signUp_transition" value="back" formnovalidate="formnovalidate">*/
/*     </div>*/
/* </div>*/
