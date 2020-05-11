<?php

/* :backend/users:edited_profile.html.twig */
class __TwigTemplate_19abdd28b5ee924e7015062e5c72cc33fa414a4cf85a58d4a3f12351e21af680 extends Twig_Template
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
        echo "<script>


    \$(document).ready(
        function () {



        }
    );


</script>



<h1 class=\"ui grey header right\">
    <i class=\"edit icon\"></i>
    <div class=\"content\">
        <span class=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</span>
        <div class=\"sub header\">עריכת פרופיל</div>
    </div>
</h1>


<div class=\"left close\">
    <i class=\"icon remove circle olive big \" onclick=\"\$.kfModal.close();\"></i>
</div>

<div class=\"clear\"></div>

<div class=\"ui divider\"></div>

<div class=\"ui secondary menu\">
    <a class=\"item ";
        // line 35
        if (((isset($context["tab"]) ? $context["tab"] : null) == 1)) {
            echo "active";
        }
        echo "\" data-tab=\"1\">
        ";
        // line 37
        echo "        פרטים
    </a>
    <a class=\"item ";
        // line 39
        if (((isset($context["tab"]) ? $context["tab"] : null) == 2)) {
            echo "active";
        }
        echo "\" data-tab=\"2\">
        ";
        // line 41
        echo "        פרופיל
    </a>
    <a class=\"item ";
        // line 43
        if (((isset($context["tab"]) ? $context["tab"] : null) == 3)) {
            echo "active";
        }
        echo "\" data-tab=\"3\">
        ";
        // line 45
        echo "        קצת עליי
    </a>
    <a class=\"item ";
        // line 47
        if (((isset($context["tab"]) ? $context["tab"] : null) == 4)) {
            echo "active";
        }
        echo "\" data-tab=\"4\">
        ";
        // line 49
        echo "        אדמין
    </a>
</div>
<div class=\"ui tab segment ";
        // line 52
        if (((isset($context["tab"]) ? $context["tab"] : null) == 1)) {
            echo "active";
        }
        echo "\" data-tab=\"1\">

    ";
        // line 54
        $context["form"] = (((((isset($context["edited_form"]) ? $context["edited_form"] : null) != null) && ((isset($context["tab"]) ? $context["tab"] : null) == 1))) ? ((isset($context["edited_form"]) ? $context["edited_form"] : null)) : ((isset($context["form_1"]) ? $context["form_1"] : null)));
        // line 55
        echo "
    ";
        // line 56
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), "vars", array()), "errors", array())) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), "vars", array()), "errors", array())))) {
            // line 57
            echo "        <div class=\"errors\">
            <div class=\"ui red message\">
                <div class=\"content\">
                    <div class=\"header\">
                        יש להשלים את השדות הבאים
                    </div>
                    <p>

                        ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
            echo "
                        ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), 'errors');
            echo "


                        ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "

                    </p>
                </div>
            </div>
        </div>
    ";
        }
        // line 76
        echo "

    <form id=\"form_1\" onsubmit=\"return false;\">

        <div class=\"ui form\">

            <div class=\"ui large horizontal label ";
        // line 82
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), "vars", array()), "errors", array()))) {
            echo "red";
        } else {
            echo "grey";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label');
        echo "</div>
            <div class=\"field ";
        // line 83
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "
            </div>

            <div class=\"ui large horizontal label ";
        // line 87
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), "vars", array()), "errors", array()))) {
            echo "red";
        } else {
            echo "grey";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), 'label');
        echo "</div>
            <div class=\"field ";
        // line 88
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "second", array()), 'label');
        echo "</div>
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "second", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'label');
        echo "</div>
                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'label');
        echo "</div>
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'widget');
        echo "
            </div>

            ";
        // line 113
        echo "
            <div class=\"field birthday\">
                <div class=\"ui grey large horizontal label\">";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'label');
        echo "</div>
                <div class=\"clear\"></div>
                <div class=\"right\">";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), "year", array()), 'widget');
        echo "</div>
                <div class=\"right\">";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), "month", array()), 'widget');
        echo "</div>
                <div class=\"right\">";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), "day", array()), 'widget');
        echo "</div>
            </div>

            <div class=\"clear\"></div>

            <button class=\"ui labeled icon green large button left\" onclick=\"saveProfile(";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo ", \$('#form_1'), 1);\">
                <i class=\"save icon\"></i>
                לשמור
            </button>

            <div class=\"clear\"></div>

            ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "


        </div>



    </form>

</div>
<div class=\"ui tab segment ";
        // line 141
        if (((isset($context["tab"]) ? $context["tab"] : null) == 2)) {
            echo "active";
        }
        echo "\" data-tab=\"2\">

    ";
        // line 143
        $context["form"] = (((((isset($context["edited_form"]) ? $context["edited_form"] : null) != null) && ((isset($context["tab"]) ? $context["tab"] : null) == 2))) ? ((isset($context["edited_form"]) ? $context["edited_form"] : null)) : ((isset($context["form_2"]) ? $context["form_2"] : null)));
        // line 144
        echo "
    ";
        // line 145
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), "vars", array()), "errors", array()))) {
            // line 146
            echo "        <div class=\"errors\">
            <div class=\"ui red message\">
                <div class=\"content\">
                    <div class=\"header\">
                        יש להשלים את השדות הבאים
                    </div>
                    <p>
                        ";
            // line 153
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), 'errors');
            echo "
                    </p>
                </div>
            </div>
        </div>
    ";
        }
        // line 159
        echo "

    <form id=\"form_2\" onsubmit=\"return false;\">

        <div class=\"ui form\">

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'label');
        echo "</div>
                ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'label');
        echo "</div>
                ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()), 'label');
        echo "</div>
                ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()), 'label');
        echo "</div>
                ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()), 'label');
        echo "</div>
                ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()), 'label');
        echo "</div>
                ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()), 'label');
        echo "</div>
                ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui large horizontal label ";
        // line 201
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), "vars", array()), "errors", array()))) {
            echo "red";
        } else {
            echo "grey";
        }
        echo "\">
                    ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), 'label');
        echo "
                </div>
            </div>

            <div class=\"block\">

                ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["purpose"]) {
            // line 209
            echo "
                    <div class=\"ui checkbox four\">
                        ";
            // line 211
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purpose"], 'widget');
            echo "
                        ";
            // line 212
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purpose"], 'label');
            echo "
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purpose'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "
            </div>

            <div class=\"ui divider\"></div>

            <button class=\"ui labeled icon green large button left\" onclick=\"saveProfile(";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo ", \$('#form_2'), 2);\">
                <i class=\"save icon\"></i>
                לשמור
            </button>

            <div class=\"clear\"></div>

            ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        </div>

    </form>





</div>
<div class=\"ui tab segment ";
        // line 239
        if (((isset($context["tab"]) ? $context["tab"] : null) == 3)) {
            echo "active";
        }
        echo "\" data-tab=\"3\">

    ";
        // line 241
        $context["form"] = (((((isset($context["edited_form"]) ? $context["edited_form"] : null) != null) && ((isset($context["tab"]) ? $context["tab"] : null) == 3))) ? ((isset($context["edited_form"]) ? $context["edited_form"] : null)) : ((isset($context["form_3"]) ? $context["form_3"] : null)));
        // line 242
        echo "

    <form id=\"form_3\" onsubmit=\"return false;\">

        ";
        // line 246
        if ((((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), "vars", array()), "errors", array())) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(        // line 247
(isset($context["form"]) ? $context["form"] : null), "looking", array()), "vars", array()), "errors", array()))) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(        // line 248
(isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), "vars", array()), "errors", array()))) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(        // line 249
(isset($context["form"]) ? $context["form"] : null), "interests", array()), "vars", array()), "errors", array())))) {
            // line 251
            echo "            <div class=\"errors\">
                <div class=\"ui red message\">
                    <div class=\"content\">
                        <div class=\"header\">
                            יש להשלים את השדות הבאים
                        </div>
                        <p>
                            ";
            // line 258
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), 'errors');
            echo "
                            ";
            // line 259
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), 'errors');
            echo "
                            ";
            // line 260
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), 'errors');
            echo "
                            ";
            // line 261
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), 'errors');
            echo "
                        </p>
                    </div>
                </div>
            </div>
        ";
        }
        // line 267
        echo "

        <div class=\"ui form\">

            <div class=\"ui large horizontal label ";
        // line 271
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), "vars", array()), "errors", array()))) {
            echo "red";
        } else {
            echo "grey";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), 'label');
        echo "</div>
            <div class=\"field ";
        // line 272
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
                ";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "about", array()), 'widget');
        echo "
            </div>

            <div class=\"ui large horizontal label ";
        // line 276
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), "vars", array()), "errors", array()))) {
            echo "red";
        } else {
            echo "grey";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), 'label');
        echo "</div>
            <div class=\"field ";
        // line 277
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), "vars", array()), "errors", array()))) {
            echo "error";
        }
        echo "\">
                ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "looking", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label');
        echo "</div>
                ";
        // line 283
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nutrition", array()), 'label');
        echo "</div>
                ";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nutrition", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui large horizontal label ";
        // line 292
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), "vars", array()), "errors", array()))) {
            echo "red";
        } else {
            echo "grey";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), 'label');
        echo "</div>
                <div class=\"clear\"></div>
                <div class=\"block\">
                    ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["veggieReason"]) {
            // line 296
            echo "                        <div class=\"ui checkbox three\">
                            ";
            // line 297
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["veggieReason"], 'widget');
            echo "
                            ";
            // line 298
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["veggieReason"], 'label');
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['veggieReason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "                </div>
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()), 'label');
        echo "</div>
                ";
        // line 306
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()), 'label');
        echo "</div>
                ";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sport", array()), 'label');
        echo "</div>
                ";
        // line 316
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sport", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 320
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "green", array()), 'label');
        echo "</div>
                ";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "green", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 325
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), 'label');
        echo "</div>
                ";
        // line 326
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 330
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "animals", array()), 'label');
        echo "</div>
                ";
        // line 331
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "animals", array()), 'widget');
        echo "
            </div>


            <div class=\"field\">
                <div class=\"ui large horizontal label ";
        // line 336
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), "vars", array()), "errors", array()))) {
            echo "red";
        } else {
            echo "grey";
        }
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), 'label');
        echo "</div>
                <div class=\"clear\"></div>
                ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 339
            echo "                    <div class=\"ui checkbox four\">
                        ";
            // line 340
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["interest"], 'widget');
            echo "
                        ";
            // line 341
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["interest"], 'label');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 347
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "politicalAffiliation", array()), 'label');
        echo "</div>
                ";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "politicalAffiliation", array()), 'widget');
        echo "
            </div>

            <h3 class=\"ui horizontal divider header\">
                <i class=\"unhide circular icon\"></i>
                מראה חיצוני
            </h3>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 357
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'label');
        echo "</div>
                ";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 362
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'label');
        echo "</div>
                ";
        // line 363
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 367
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eyes", array()), 'label');
        echo "</div>
                ";
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eyes", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hair", array()), 'label');
        echo "</div>
                ";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hair", array()), 'widget');
        echo "
            </div>


            <h3 class=\"ui horizontal divider header\">
                <i class=\"heart circular icon\"></i>
                עוד קצת עליי
            </h3>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 383
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfectDate", array()), 'label');
        echo "</div>
                ";
        // line 384
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfectDate", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 388
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteDish", array()), 'label');
        echo "</div>
                ";
        // line 389
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteDish", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 393
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteRestaurant", array()), 'label');
        echo "</div>
                ";
        // line 394
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteRestaurant", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 398
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dinnerWith", array()), 'label');
        echo "</div>
                ";
        // line 399
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dinnerWith", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 403
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteBooks", array()), 'label');
        echo "</div>
                ";
        // line 404
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "favoriteBooks", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 408
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "music", array()), 'label');
        echo "</div>
                ";
        // line 409
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "music", array()), 'widget');
        echo "
            </div>

            <button class=\"ui labeled icon green large button left\" onclick=\"saveProfile(";
        // line 412
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo ", \$('#form_3'), 3);\">
                <i class=\"save icon\"></i>
                לשמור
            </button>

            <div class=\"clear\"></div>

            ";
        // line 419
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        </div>


    </form>



</div>



<div class=\"ui tab segment ";
        // line 432
        if (((isset($context["tab"]) ? $context["tab"] : null) == 4)) {
            echo "active";
        }
        echo "\" data-tab=\"4\">

    ";
        // line 434
        $context["form"] = (((((isset($context["edited_form"]) ? $context["edited_form"] : null) != null) && ((isset($context["tab"]) ? $context["tab"] : null) == 4))) ? ((isset($context["edited_form"]) ? $context["edited_form"] : null)) : ((isset($context["form_4"]) ? $context["form_4"] : null)));
        // line 435
        echo "

    <form id=\"form_4\" onsubmit=\"return false;\">

        <div class=\"ui form\">

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">
                    ";
        // line 443
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isOnHomepage", array()), 'label');
        echo "
                </div>
                <div class=\"ui compact segment\">
                    <div class=\"ui slider fitted checkbox\">
                        ";
        // line 447
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isOnHomepage", array()), 'widget');
        echo "
                        <label></label>
                    </div>
                </div>
            </div>

            <h4 class=\"ui horizontal divider header\">
                <i class=\"setting grey icon\"></i>
            </h4>

            <br>


            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 461
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adminComments", array()), 'label');
        echo "</div>
                ";
        // line 462
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adminComments", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 466
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banReason", array()), 'label');
        echo "</div>
                ";
        // line 467
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "banReason", array()), 'widget');
        echo "
            </div>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">";
        // line 471
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "freezeReason", array()), 'label');
        echo "</div>
                ";
        // line 472
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "freezeReason", array()), 'widget');
        echo "
            </div>


            <button class=\"ui labeled icon green large button left\" onclick=\"saveProfile(";
        // line 476
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo ", \$('#form_4'), 4);\">
                <i class=\"save icon\"></i>
                לשמור
            </button>

            <div class=\"clear\"></div>

            ";
        // line 483
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        </div>


    </form>

</div>


";
    }

    public function getTemplateName()
    {
        return ":backend/users:edited_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  971 => 483,  961 => 476,  954 => 472,  950 => 471,  943 => 467,  939 => 466,  932 => 462,  928 => 461,  911 => 447,  904 => 443,  894 => 435,  892 => 434,  885 => 432,  869 => 419,  859 => 412,  853 => 409,  849 => 408,  842 => 404,  838 => 403,  831 => 399,  827 => 398,  820 => 394,  816 => 393,  809 => 389,  805 => 388,  798 => 384,  794 => 383,  781 => 373,  777 => 372,  770 => 368,  766 => 367,  759 => 363,  755 => 362,  748 => 358,  744 => 357,  732 => 348,  728 => 347,  723 => 344,  714 => 341,  710 => 340,  707 => 339,  703 => 338,  692 => 336,  684 => 331,  680 => 330,  673 => 326,  669 => 325,  662 => 321,  658 => 320,  651 => 316,  647 => 315,  640 => 311,  636 => 310,  629 => 306,  625 => 305,  619 => 301,  610 => 298,  606 => 297,  603 => 296,  599 => 295,  587 => 292,  580 => 288,  576 => 287,  569 => 283,  565 => 282,  558 => 278,  552 => 277,  542 => 276,  536 => 273,  530 => 272,  520 => 271,  514 => 267,  505 => 261,  501 => 260,  497 => 259,  493 => 258,  484 => 251,  482 => 249,  481 => 248,  480 => 247,  479 => 246,  473 => 242,  471 => 241,  464 => 239,  450 => 228,  440 => 221,  433 => 216,  423 => 212,  419 => 211,  415 => 209,  411 => 208,  402 => 202,  394 => 201,  387 => 197,  383 => 196,  376 => 192,  372 => 191,  365 => 187,  361 => 186,  354 => 182,  350 => 181,  343 => 177,  339 => 176,  332 => 172,  328 => 171,  321 => 167,  317 => 166,  308 => 159,  299 => 153,  290 => 146,  288 => 145,  285 => 144,  283 => 143,  276 => 141,  263 => 131,  253 => 124,  245 => 119,  241 => 118,  237 => 117,  232 => 115,  228 => 113,  222 => 104,  218 => 103,  211 => 99,  207 => 98,  200 => 94,  196 => 93,  189 => 89,  183 => 88,  173 => 87,  167 => 84,  161 => 83,  151 => 82,  143 => 76,  133 => 69,  127 => 66,  123 => 65,  113 => 57,  111 => 56,  108 => 55,  106 => 54,  99 => 52,  94 => 49,  88 => 47,  84 => 45,  78 => 43,  74 => 41,  68 => 39,  64 => 37,  58 => 35,  40 => 20,  19 => 1,);
    }
}
/* <script>*/
/* */
/* */
/*     $(document).ready(*/
/*         function () {*/
/* */
/* */
/* */
/*         }*/
/*     );*/
/* */
/* */
/* </script>*/
/* */
/* */
/* */
/* <h1 class="ui grey header right">*/
/*     <i class="edit icon"></i>*/
/*     <div class="content">*/
/*         <span class="username">{{ user.username }}</span>*/
/*         <div class="sub header">עריכת פרופיל</div>*/
/*     </div>*/
/* </h1>*/
/* */
/* */
/* <div class="left close">*/
/*     <i class="icon remove circle olive big " onclick="$.kfModal.close();"></i>*/
/* </div>*/
/* */
/* <div class="clear"></div>*/
/* */
/* <div class="ui divider"></div>*/
/* */
/* <div class="ui secondary menu">*/
/*     <a class="item {% if tab == 1 %}active{% endif %}" data-tab="1">*/
/*         {#<i class="sign in icon circular"></i>#}*/
/*         פרטים*/
/*     </a>*/
/*     <a class="item {% if tab == 2 %}active{% endif %}" data-tab="2">*/
/*         {#<i class="user icon circular"></i>#}*/
/*         פרופיל*/
/*     </a>*/
/*     <a class="item {% if tab == 3 %}active{% endif %}" data-tab="3">*/
/*         {#<i class="info icon circular"></i>#}*/
/*         קצת עליי*/
/*     </a>*/
/*     <a class="item {% if tab == 4 %}active{% endif %}" data-tab="4">*/
/*         {#<i class="info icon circular"></i>#}*/
/*         אדמין*/
/*     </a>*/
/* </div>*/
/* <div class="ui tab segment {% if tab == 1 %}active{% endif %}" data-tab="1">*/
/* */
/*     {% set form = (edited_form != null and tab == 1) ? edited_form : form_1 %}*/
/* */
/*     {% if form.username.vars.errors|length or form.email.first.vars.errors|length %}*/
/*         <div class="errors">*/
/*             <div class="ui red message">*/
/*                 <div class="content">*/
/*                     <div class="header">*/
/*                         יש להשלים את השדות הבאים*/
/*                     </div>*/
/*                     <p>*/
/* */
/*                         {{ form_errors(form.username) }}*/
/*                         {{ form_errors(form.email.first) }}*/
/* */
/* */
/*                         {{ form_errors(form) }}*/
/* */
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/*     <form id="form_1" onsubmit="return false;">*/
/* */
/*         <div class="ui form">*/
/* */
/*             <div class="ui large horizontal label {% if form.username.vars.errors|length %}red{% else %}grey{% endif %}">{{ form_label(form.username) }}</div>*/
/*             <div class="field {% if form.username.vars.errors|length %}error{% endif %}">*/
/*                 {{ form_widget(form.username) }}*/
/*             </div>*/
/* */
/*             <div class="ui large horizontal label {% if form.email.first.vars.errors|length %}red{% else %}grey{% endif %}">{{ form_label(form.email.first) }}</div>*/
/*             <div class="field {% if form.email.first.vars.errors|length %}error{% endif %}">*/
/*                 {{ form_widget(form.email.first) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.email.second) }}</div>*/
/*                 {{ form_widget(form.email.second) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.phone) }}</div>*/
/*                 {{ form_widget(form.phone) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.gender) }}</div>*/
/*                 {{ form_widget(form.gender) }}*/
/*             </div>*/
/* */
/*             {#*/
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.lookingGender) }}</div>*/
/*                 {{ form_widget(form.lookingGender) }}*/
/*             </div>*/
/*             #}*/
/* */
/*             <div class="field birthday">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.birthday) }}</div>*/
/*                 <div class="clear"></div>*/
/*                 <div class="right">{{ form_widget(form.birthday.year) }}</div>*/
/*                 <div class="right">{{ form_widget(form.birthday.month) }}</div>*/
/*                 <div class="right">{{ form_widget(form.birthday.day) }}</div>*/
/*             </div>*/
/* */
/*             <div class="clear"></div>*/
/* */
/*             <button class="ui labeled icon green large button left" onclick="saveProfile({{ user.id }}, $('#form_1'), 1);">*/
/*                 <i class="save icon"></i>*/
/*                 לשמור*/
/*             </button>*/
/* */
/*             <div class="clear"></div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/*     </form>*/
/* */
/* </div>*/
/* <div class="ui tab segment {% if tab == 2 %}active{% endif %}" data-tab="2">*/
/* */
/*     {% set form = (edited_form != null and tab == 2) ? edited_form : form_2 %}*/
/* */
/*     {% if form.purposes.vars.errors|length %}*/
/*         <div class="errors">*/
/*             <div class="ui red message">*/
/*                 <div class="content">*/
/*                     <div class="header">*/
/*                         יש להשלים את השדות הבאים*/
/*                     </div>*/
/*                     <p>*/
/*                         {{ form_errors(form.purposes) }}*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/*     <form id="form_2" onsubmit="return false;">*/
/* */
/*         <div class="ui form">*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.region) }}</div>*/
/*                 {{ form_widget(form.region) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.city) }}</div>*/
/*                 {{ form_widget(form.city) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.relationshipStatus) }}</div>*/
/*                 {{ form_widget(form.relationshipStatus) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.occupation) }}</div>*/
/*                 {{ form_widget(form.occupation) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.education) }}</div>*/
/*                 {{ form_widget(form.education) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.religion) }}</div>*/
/*                 {{ form_widget(form.religion) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.sexOrientation) }}</div>*/
/*                 {{ form_widget(form.sexOrientation) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui large horizontal label {% if form.purposes.vars.errors|length %}red{% else %}grey{% endif %}">*/
/*                     {{ form_label(form.purposes) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="block">*/
/* */
/*                 {% for purpose in form.purposes %}*/
/* */
/*                     <div class="ui checkbox four">*/
/*                         {{ form_widget(purpose) }}*/
/*                         {{ form_label(purpose) }}*/
/*                     </div>*/
/* */
/*                 {% endfor %}*/
/* */
/*             </div>*/
/* */
/*             <div class="ui divider"></div>*/
/* */
/*             <button class="ui labeled icon green large button left" onclick="saveProfile({{ user.id }}, $('#form_2'), 2);">*/
/*                 <i class="save icon"></i>*/
/*                 לשמור*/
/*             </button>*/
/* */
/*             <div class="clear"></div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*         </div>*/
/* */
/*     </form>*/
/* */
/* */
/* */
/* */
/* */
/* </div>*/
/* <div class="ui tab segment {% if tab == 3 %}active{% endif %}" data-tab="3">*/
/* */
/*     {% set form = (edited_form != null and tab == 3) ? edited_form : form_3 %}*/
/* */
/* */
/*     <form id="form_3" onsubmit="return false;">*/
/* */
/*         {% if form.about.vars.errors|length*/
/*             or form.looking.vars.errors|length*/
/*             or form.veggieReasons.vars.errors|length*/
/*             or form.interests.vars.errors|length*/
/*         %}*/
/*             <div class="errors">*/
/*                 <div class="ui red message">*/
/*                     <div class="content">*/
/*                         <div class="header">*/
/*                             יש להשלים את השדות הבאים*/
/*                         </div>*/
/*                         <p>*/
/*                             {{ form_errors(form.about) }}*/
/*                             {{ form_errors(form.looking) }}*/
/*                             {{ form_errors(form.veggieReasons) }}*/
/*                             {{ form_errors(form.interests) }}*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/* */
/*         <div class="ui form">*/
/* */
/*             <div class="ui large horizontal label {% if form.about.vars.errors|length %}red{% else %}grey{% endif %}">{{ form_label(form.about) }}</div>*/
/*             <div class="field {% if form.about.vars.errors|length %}error{% endif %}">*/
/*                 {{ form_widget(form.about) }}*/
/*             </div>*/
/* */
/*             <div class="ui large horizontal label {% if form.looking.vars.errors|length %}red{% else %}grey{% endif %}">{{ form_label(form.looking) }}</div>*/
/*             <div class="field {% if form.looking.vars.errors|length %}error{% endif %}">*/
/*                 {{ form_widget(form.looking) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.type) }}</div>*/
/*                 {{ form_widget(form.type) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.nutrition) }}</div>*/
/*                 {{ form_widget(form.nutrition) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui large horizontal label {% if form.veggieReasons.vars.errors|length %}red{% else %}grey{% endif %}">{{ form_label(form.veggieReasons) }}</div>*/
/*                 <div class="clear"></div>*/
/*                 <div class="block">*/
/*                     {% for veggieReason in form.veggieReasons %}*/
/*                         <div class="ui checkbox three">*/
/*                             {{ form_widget(veggieReason) }}*/
/*                             {{ form_label(veggieReason) }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.smoking) }}</div>*/
/*                 {{ form_widget(form.smoking) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.drinking) }}</div>*/
/*                 {{ form_widget(form.drinking) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.sport) }}</div>*/
/*                 {{ form_widget(form.sport) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.green) }}</div>*/
/*                 {{ form_widget(form.green) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.children) }}</div>*/
/*                 {{ form_widget(form.children) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.animals) }}</div>*/
/*                 {{ form_widget(form.animals) }}*/
/*             </div>*/
/* */
/* */
/*             <div class="field">*/
/*                 <div class="ui large horizontal label {% if form.interests.vars.errors|length %}red{% else %}grey{% endif %}">{{ form_label(form.interests) }}</div>*/
/*                 <div class="clear"></div>*/
/*                 {% for interest in form.interests %}*/
/*                     <div class="ui checkbox four">*/
/*                         {{ form_widget(interest) }}*/
/*                         {{ form_label(interest) }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.politicalAffiliation) }}</div>*/
/*                 {{ form_widget(form.politicalAffiliation) }}*/
/*             </div>*/
/* */
/*             <h3 class="ui horizontal divider header">*/
/*                 <i class="unhide circular icon"></i>*/
/*                 מראה חיצוני*/
/*             </h3>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.height) }}</div>*/
/*                 {{ form_widget(form.height) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.body) }}</div>*/
/*                 {{ form_widget(form.body) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.eyes) }}</div>*/
/*                 {{ form_widget(form.eyes) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.hair) }}</div>*/
/*                 {{ form_widget(form.hair) }}*/
/*             </div>*/
/* */
/* */
/*             <h3 class="ui horizontal divider header">*/
/*                 <i class="heart circular icon"></i>*/
/*                 עוד קצת עליי*/
/*             </h3>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.perfectDate) }}</div>*/
/*                 {{ form_widget(form.perfectDate) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.favoriteDish) }}</div>*/
/*                 {{ form_widget(form.favoriteDish) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.favoriteRestaurant) }}</div>*/
/*                 {{ form_widget(form.favoriteRestaurant) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.dinnerWith) }}</div>*/
/*                 {{ form_widget(form.dinnerWith) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.favoriteBooks) }}</div>*/
/*                 {{ form_widget(form.favoriteBooks) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.music) }}</div>*/
/*                 {{ form_widget(form.music) }}*/
/*             </div>*/
/* */
/*             <button class="ui labeled icon green large button left" onclick="saveProfile({{ user.id }}, $('#form_3'), 3);">*/
/*                 <i class="save icon"></i>*/
/*                 לשמור*/
/*             </button>*/
/* */
/*             <div class="clear"></div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*         </div>*/
/* */
/* */
/*     </form>*/
/* */
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* <div class="ui tab segment {% if tab == 4 %}active{% endif %}" data-tab="4">*/
/* */
/*     {% set form = (edited_form != null and tab == 4) ? edited_form : form_4 %}*/
/* */
/* */
/*     <form id="form_4" onsubmit="return false;">*/
/* */
/*         <div class="ui form">*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">*/
/*                     {{ form_label(form.isOnHomepage) }}*/
/*                 </div>*/
/*                 <div class="ui compact segment">*/
/*                     <div class="ui slider fitted checkbox">*/
/*                         {{ form_widget(form.isOnHomepage) }}*/
/*                         <label></label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <h4 class="ui horizontal divider header">*/
/*                 <i class="setting grey icon"></i>*/
/*             </h4>*/
/* */
/*             <br>*/
/* */
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.adminComments) }}</div>*/
/*                 {{ form_widget(form.adminComments) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.banReason) }}</div>*/
/*                 {{ form_widget(form.banReason) }}*/
/*             </div>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">{{ form_label(form.freezeReason) }}</div>*/
/*                 {{ form_widget(form.freezeReason) }}*/
/*             </div>*/
/* */
/* */
/*             <button class="ui labeled icon green large button left" onclick="saveProfile({{ user.id }}, $('#form_4'), 4);">*/
/*                 <i class="save icon"></i>*/
/*                 לשמור*/
/*             </button>*/
/* */
/*             <div class="clear"></div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*         </div>*/
/* */
/* */
/*     </form>*/
/* */
/* </div>*/
/* */
/* */
/* */
