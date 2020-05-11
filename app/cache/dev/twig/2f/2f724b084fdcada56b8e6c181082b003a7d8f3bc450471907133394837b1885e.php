<?php

/* :frontend/user/profile:3.html.twig */
class __TwigTemplate_e5d4c273b80494a8e4b07de72db04edf70fe3464a2543574af2386b69e2b0fd0 extends Twig_Template
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
        echo "
<div class=\"hmaformsec three\">
    <div class=\"field ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
        <div class=\"label\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field ";
        // line 25
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
        <div class=\"label\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nutrition", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nutrition", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label ";
        // line 41
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), 'label');
        echo "</div>

        <div class=\"field padd\">
            <div class=\"checkboxes clearfix\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["veggieReason"]) {
            // line 46
            echo "                    <div class=\"ui checkbox chkbox chkbox2\">
                        ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["veggieReason"], 'widget');
            echo "
                        ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["veggieReason"], 'label');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['veggieReason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>
        </div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sport", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sport", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "green", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "green", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "animals", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "animals", array()), 'widget');
        echo "</div>
    </div>


    <div class=\"field\">
        <div class=\"label ";
        // line 87
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), 'label');
        echo "</div>

        <div class=\"chkright\">
            <div class=\"checkboxes clearfix\">
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 92
            echo "                    <div class=\"ui checkbox chkbox\">
                        ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["interest"], 'widget');
            echo "
                        ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["interest"], 'label');
            echo "
                        ";
            // line 96
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </div>
        </div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "politicalAffiliation", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "politicalAffiliation", array()), 'widget');
        echo "</div>
    </div>


    <div class=\"clr padd\"></div>

    <h3>מראה חיצוני</h3>


    <div class=\"field\">
        <div class=\"label\">";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eyes", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eyes", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hair", array()), 'label');
        echo "</div>
        <div class=\"select\">";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hair", array()), 'widget');
        echo "</div>
    </div>

    <h3>עוד קצת עליי</h3>

    <div class=\"field\">
        <div class=\"label\">";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfectDate", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfectDate", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteDish", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteDish", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteRestaurant", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteRestaurant", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dinnerWith", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dinnerWith", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteBooks", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteBooks", array()), 'widget');
        echo "</div>
    </div>

    <div class=\"field\">
        <div class=\"label\">";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "music", array()), 'label');
        echo "</div>
        <div class=\"textarea\">";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "music", array()), 'widget');
        echo "</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return ":frontend/user/profile:3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 162,  373 => 161,  366 => 157,  362 => 156,  355 => 152,  351 => 151,  344 => 147,  340 => 146,  333 => 142,  329 => 141,  322 => 137,  318 => 136,  309 => 130,  305 => 129,  298 => 125,  294 => 124,  287 => 120,  283 => 119,  276 => 115,  272 => 114,  259 => 104,  255 => 103,  248 => 98,  241 => 96,  237 => 94,  233 => 93,  230 => 92,  226 => 91,  215 => 87,  207 => 82,  203 => 81,  196 => 77,  192 => 76,  185 => 72,  181 => 71,  174 => 67,  170 => 66,  163 => 62,  159 => 61,  152 => 57,  148 => 56,  141 => 51,  132 => 48,  128 => 47,  125 => 46,  121 => 45,  110 => 41,  103 => 37,  99 => 36,  92 => 32,  88 => 31,  81 => 27,  77 => 26,  71 => 25,  65 => 22,  61 => 21,  55 => 20,  51 => 18,  42 => 12,  38 => 11,  34 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* */
/* <div class="hmaformsec three">*/
/*     <div class="field {% if form.about.vars.errors|length %}error{% endif %}">*/
/*         <div class="label">{{ form_label(form.about) }}</div>*/
/*         <div class="textarea">{{ form_widget(form.about) }}</div>*/
/*     </div>*/
/* */
/*     <div class="field {% if form.looking.vars.errors|length %}error{% endif %}">*/
/*         <div class="label">{{ form_label(form.looking) }}</div>*/
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
/*         <div class="label {% if form.veggieReasons.vars.errors|length %}error{% endif %}">{{ form_label(form.veggieReasons) }}</div>*/
/* */
/*         <div class="field padd">*/
/*             <div class="checkboxes clearfix">*/
/*                 {% for veggieReason in form.veggieReasons %}*/
/*                     <div class="ui checkbox chkbox chkbox2">*/
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
/*         <div class="label {% if form.interests.vars.errors|length %}error{% endif %}">{{ form_label(form.interests) }}</div>*/
/* */
/*         <div class="chkright">*/
/*             <div class="checkboxes clearfix">*/
/*                 {% for interest in form.interests %}*/
/*                     <div class="ui checkbox chkbox">*/
/*                         {{ form_widget(interest) }}*/
/*                         {{ form_label(interest) }}*/
/*                         {#{ form_label(interest, null, {'label_attr': {'class': 'css-label'}}) }#}*/
/*                     </div>*/
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
/*     <div class="clr padd"></div>*/
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
/* </div>*/
/* */
