<?php

/* frontend/user/user_data.html.twig */
class __TwigTemplate_6fdb3a29b188d3d50836d07a472c633c951f60a7131797365eb541728a6c4ab7 extends Twig_Template
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
        $__internal_231975055021e00f457ab57692a143618b1a270dbf8874ce74077df0956a04dd = $this->env->getExtension("native_profiler");
        $__internal_231975055021e00f457ab57692a143618b1a270dbf8874ce74077df0956a04dd->enter($__internal_231975055021e00f457ab57692a143618b1a270dbf8874ce74077df0956a04dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/user/user_data.html.twig"));

        // line 1
        echo "<div class=\"popright\">
    <div class=\"popbox clearfix\">
        ";
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 4
            echo "            <textarea id=\"instant_message\" cols=\"2\" rows=\"2\" placeholder=\"שליחת הודעה מהירה\"></textarea>
            <input type=\"submit\" value=\"שלח/י\" class=\"btn\" onclick=\"sendInstantMessage(";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo ", \$('#instant_message'))\">
        ";
        }
        // line 7
        echo "    </div>
    <!-- end -->

    <div class=\"popbox clearfix\">
        <h3 class=\"ttl tog_click\">אני בקצרה</h3>
\t\t<div>
\t        <ul class=\"infobox bdr\">
\t            <li><span class=\"spnttl\">מצב משפחתי:</span> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "relationshipStatus", array()), "name", array()), "html", null, true);
        echo "</li>
\t            <li><span class=\"spnttl\">מזל:</span> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getZodiacFunction(twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthday", array()), "U")), "html", null, true);
        echo "</li>
\t            <li><span class=\"spnttl\">הרגלי עישון:</span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "smoking", array()), "name", array()), "html", null, true);
        echo "</li>
\t            <li>
\t                <span class=\"spnttl right\">כאן למטרת:</span>
\t                <span class=\"det right\">
\t                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "purposes", array()));
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
            // line 21
            echo "\t                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["purpose"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 22
            echo "\t                ";
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
        // line 23
        echo "\t                </span>
\t
\t            </li>
\t            <li><span class=\"spnttl\">העדפה:</span> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexOrientation", array()), "name", array()), "html", null, true);
        echo "</li>
\t        </ul>
\t
\t        <ul class=\"infobox\">
\t            <li><span class=\"spnttl\">ילדים:</span> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "children", array()), "name", array()), "html", null, true);
        echo "</li>
\t            <li><span class=\"spnttl right\">תחום עיסוק:</span><span class=\"det right\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "occupation", array()), "name", array()), "html", null, true);
        echo "</span></li>
\t            <li><span class=\"spnttl\">דת:</span> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "religion", array()), "name", array()), "html", null, true);
        echo "</li>
\t            <li><span class=\"spnttl\">השכלה:</span> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "education", array()), "name", array()), "html", null, true);
        echo "</li>
\t        </ul>
\t\t</div>
        <div class=\"clr\"></div>

        <h3 class=\"ttl tog_click\">אני בהרחבה</h3>
        
\t\t<div>
\t        <ul class=\"infobox bdr\">
\t            <li><span class=\"spnttl\">אני:</span> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "relationshipStatus", array()), "name", array()), "html", null, true);
        echo "</li>
\t            <li><span class=\"spnttl\">תזונה:</span> ";
        // line 43
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nutrition", array()) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nutrition", array()), "name", array()), "html", null, true);
        }
        echo "</li>
\t            <li>
\t                <span class=\"spnttl right\">אני צמחוני/טבעוני כי:</span>
\t                <span class=\"det right\">
\t                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "veggieReasons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
            // line 48
            echo "\t                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reason"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 49
            echo "\t                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t                </span>
\t            </li>
\t            <li><span class=\"spnttl\">הרגלי שתיה:</span> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "drinking", array()), "name", array()), "html", null, true);
        echo "</li>
\t            <li><span class=\"spnttl\">הרגלי ספורט</span> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sport", array()), "name", array()), "html", null, true);
        echo "</li>
\t        </ul>
\t
\t        <ul class=\"infobox\">
\t            <li>
\t                <span class=\"spnttl right\">כמה ירוק אני:</span>
\t                <span class=\"det right\">
\t                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "green", array()), "name", array()), "html", null, true);
        echo "
\t                </span>
\t            </li>
\t            <li><span class=\"spnttl\">בע״ח:</span> ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "animals", array()), "name", array()), "html", null, true);
        echo "</li>
\t            <li>
\t                <span class=\"spnttl right\">תחומי עניין:</span>
\t                <span class=\"det right\">
\t                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "interests", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 68
            echo "\t                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["interest"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 69
            echo "\t                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t                </span>
\t            </li>
\t            <li><span class=\"spnttl\">השקפה פוליטית:</span> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "politicalAffiliation", array()), "name", array()), "html", null, true);
        echo "</li>
\t        </ul>
\t\t</div>
\t\t
        <div class=\"clr\"></div>

        <h3 class=\"ttl tog_click\">איך אני נראה/ית</h3>
\t\t
\t\t<div>
\t        <ul class=\"infobox bdr\">
\t            <li><span class=\"spnttl\">גובה:</span> ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "height", array()), "html", null, true);
        echo "</li>
\t            <li><span class=\"spnttl\">מבנה גוף:</span> ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "body", array()), "name", array()), "html", null, true);
        echo "</li>
\t        </ul>
\t
\t        <ul class=\"infobox\">
\t            <li><span class=\"spnttl\">צבע עיניים:</span> ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "eyes", array()), "name", array()), "html", null, true);
        echo "</li>
\t            <li><span class=\"spnttl\">צבע שיער:</span> ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hair", array()), "name", array()), "html", null, true);
        echo "</li>
\t        </ul>
\t\t</div>
\t\t
        <div class=\"clr\"></div>

    </div>
    <!-- end -->
</div>
<!-- popright -->

<div class=\"clr\"></div>

<div class=\"popright\">
    <div class=\"popbox clearfix\">
        <h3 class=\"ttl tog_click\">אני בכמה מילים</h3>
        <div class=\"descption\">";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "about", array()), "html", null, true);
        echo "</div>

        <h3 class=\"ttl tog_click\">עוד קצת עליי</h3>
\t\t
\t\t<div>
\t        <div class=\"descption\">
\t            הדייט המושלם עבורי הוא...:
\t            <br>
\t            ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfectDate", array()), "html", null, true);
        echo "
\t        </div>
\t
\t        <div class=\"descption\">
\t            מנה צמחונית אהובה:
\t            <br>
\t            ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "favoriteDish", array()), "html", null, true);
        echo "
\t        </div>
\t
\t        <div class=\"descption\">
\t            מסעדה ידידותית לצמחונים שאני אוהב/ת...
\t            <br>
\t            ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "favoriteRestaurant", array()), "html", null, true);
        echo "
\t        </div>
\t
\t        <div class=\"descption\">
\t            איזו אישיות הייתי מזמין לארוחת ערב?
\t            <br>
\t            ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dinnerWith", array()), "html", null, true);
        echo "
\t        </div>
\t        
\t        <div class=\"descption\">
\t            הספרים האהובים עליי:
\t            <br>
\t            ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "favoriteBooks", array()), "html", null, true);
        echo "
\t        </div>
\t
\t        <div class=\"descption\">
\t            המוזיקה שאני שומע...
\t            <br>
\t            ";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "music", array()), "html", null, true);
        echo "
\t        </div>
\t\t</div>
\t\t        
    </div>
    <!-- end -->
</div>
<!-- popright -->

<div class=\"popleft\">
    <div class=\"popbox clearfix\">
        <h3 class=\"ttl tog_click\">מה אני מחפש/ת?</h3>
        <div class=\"descption\">";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "looking", array()), "html", null, true);
        echo "</div>

        ";
        // line 170
        echo "
        
    </div>
    <!-- end -->

    ";
        // line 175
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())))) {
            // line 176
            echo "        <div class=\"popbox clearfix\">
            <h3 class=\"ttl tog_click\">הערות שלי</h3>
            <div>
\t            ";
            // line 179
            $context["note"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getNotesAboutMe", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method");
            // line 180
            echo "\t            <textarea cols=\"2\" rows=\"2\" class=\"txtarea2\" maxlength=\"255\">";
            if ((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "text", array()), "html", null, true);
            }
            echo "</textarea>
\t            <div class=\"textlimit\">נותרו לך 255 תווים</div>
\t            <input type=\"submit\" value=\"שמור  הערות\" class=\"btn red\" id=\"save_note\" />
\t            <input type=\"hidden\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\" class=\"memberId\">
            </div>
        </div>
        <!-- Comment box -->
    ";
        }
        // line 188
        echo "</div>
<!-- popleft -->";
        
        $__internal_231975055021e00f457ab57692a143618b1a270dbf8874ce74077df0956a04dd->leave($__internal_231975055021e00f457ab57692a143618b1a270dbf8874ce74077df0956a04dd_prof);

    }

    public function getTemplateName()
    {
        return "frontend/user/user_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 188,  403 => 183,  394 => 180,  392 => 179,  387 => 176,  385 => 175,  378 => 170,  373 => 154,  358 => 142,  349 => 136,  340 => 130,  331 => 124,  322 => 118,  313 => 112,  302 => 104,  283 => 88,  279 => 87,  272 => 83,  268 => 82,  255 => 72,  251 => 70,  237 => 69,  231 => 68,  214 => 67,  207 => 63,  201 => 60,  191 => 53,  187 => 52,  183 => 50,  169 => 49,  163 => 48,  146 => 47,  137 => 43,  133 => 42,  121 => 33,  117 => 32,  113 => 31,  109 => 30,  102 => 26,  97 => 23,  83 => 22,  77 => 21,  60 => 20,  53 => 16,  49 => 15,  45 => 14,  36 => 7,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="popright">*/
/*     <div class="popbox clearfix">*/
/*         {% if app.user %}*/
/*             <textarea id="instant_message" cols="2" rows="2" placeholder="שליחת הודעה מהירה"></textarea>*/
/*             <input type="submit" value="שלח/י" class="btn" onclick="sendInstantMessage({{ user.id }}, $('#instant_message'))">*/
/*         {% endif %}*/
/*     </div>*/
/*     <!-- end -->*/
/* */
/*     <div class="popbox clearfix">*/
/*         <h3 class="ttl tog_click">אני בקצרה</h3>*/
/* 		<div>*/
/* 	        <ul class="infobox bdr">*/
/* 	            <li><span class="spnttl">מצב משפחתי:</span> {{ user.relationshipStatus.name }}</li>*/
/* 	            <li><span class="spnttl">מזל:</span> {{ getZodiac(user.birthday|date('U')) }}</li>*/
/* 	            <li><span class="spnttl">הרגלי עישון:</span> {{ user.smoking.name }}</li>*/
/* 	            <li>*/
/* 	                <span class="spnttl right">כאן למטרת:</span>*/
/* 	                <span class="det right">*/
/* 	                {% for purpose in user.purposes %}*/
/* 	                    {{ purpose.name }}{% if not loop.last %},{% endif %}*/
/* 	                {% endfor %}*/
/* 	                </span>*/
/* 	*/
/* 	            </li>*/
/* 	            <li><span class="spnttl">העדפה:</span> {{ user.sexOrientation.name }}</li>*/
/* 	        </ul>*/
/* 	*/
/* 	        <ul class="infobox">*/
/* 	            <li><span class="spnttl">ילדים:</span> {{ user.children.name }}</li>*/
/* 	            <li><span class="spnttl right">תחום עיסוק:</span><span class="det right">{{ user.occupation.name }}</span></li>*/
/* 	            <li><span class="spnttl">דת:</span> {{ user.religion.name }}</li>*/
/* 	            <li><span class="spnttl">השכלה:</span> {{ user.education.name }}</li>*/
/* 	        </ul>*/
/* 		</div>*/
/*         <div class="clr"></div>*/
/* */
/*         <h3 class="ttl tog_click">אני בהרחבה</h3>*/
/*         */
/* 		<div>*/
/* 	        <ul class="infobox bdr">*/
/* 	            <li><span class="spnttl">אני:</span> {{ user.relationshipStatus.name }}</li>*/
/* 	            <li><span class="spnttl">תזונה:</span> {% if user.nutrition != null %}{{ user.nutrition.name }}{% endif %}</li>*/
/* 	            <li>*/
/* 	                <span class="spnttl right">אני צמחוני/טבעוני כי:</span>*/
/* 	                <span class="det right">*/
/* 	                {% for reason in user.veggieReasons %}*/
/* 	                    {{ reason.name }}{% if not loop.last %},{% endif %}*/
/* 	                {% endfor %}*/
/* 	                </span>*/
/* 	            </li>*/
/* 	            <li><span class="spnttl">הרגלי שתיה:</span> {{ user.drinking.name }}</li>*/
/* 	            <li><span class="spnttl">הרגלי ספורט</span> {{ user.sport.name }}</li>*/
/* 	        </ul>*/
/* 	*/
/* 	        <ul class="infobox">*/
/* 	            <li>*/
/* 	                <span class="spnttl right">כמה ירוק אני:</span>*/
/* 	                <span class="det right">*/
/* 	                    {{ user.green.name }}*/
/* 	                </span>*/
/* 	            </li>*/
/* 	            <li><span class="spnttl">בע״ח:</span> {{ user.animals.name }}</li>*/
/* 	            <li>*/
/* 	                <span class="spnttl right">תחומי עניין:</span>*/
/* 	                <span class="det right">*/
/* 	                {% for interest in user.interests %}*/
/* 	                    {{ interest.name }}{% if not loop.last %},{% endif %}*/
/* 	                {% endfor %}*/
/* 	                </span>*/
/* 	            </li>*/
/* 	            <li><span class="spnttl">השקפה פוליטית:</span> {{ user.politicalAffiliation.name }}</li>*/
/* 	        </ul>*/
/* 		</div>*/
/* 		*/
/*         <div class="clr"></div>*/
/* */
/*         <h3 class="ttl tog_click">איך אני נראה/ית</h3>*/
/* 		*/
/* 		<div>*/
/* 	        <ul class="infobox bdr">*/
/* 	            <li><span class="spnttl">גובה:</span> {{ user.height }}</li>*/
/* 	            <li><span class="spnttl">מבנה גוף:</span> {{ user.body.name }}</li>*/
/* 	        </ul>*/
/* 	*/
/* 	        <ul class="infobox">*/
/* 	            <li><span class="spnttl">צבע עיניים:</span> {{ user.eyes.name }}</li>*/
/* 	            <li><span class="spnttl">צבע שיער:</span> {{ user.hair.name }}</li>*/
/* 	        </ul>*/
/* 		</div>*/
/* 		*/
/*         <div class="clr"></div>*/
/* */
/*     </div>*/
/*     <!-- end -->*/
/* </div>*/
/* <!-- popright -->*/
/* */
/* <div class="clr"></div>*/
/* */
/* <div class="popright">*/
/*     <div class="popbox clearfix">*/
/*         <h3 class="ttl tog_click">אני בכמה מילים</h3>*/
/*         <div class="descption">{{ user.about }}</div>*/
/* */
/*         <h3 class="ttl tog_click">עוד קצת עליי</h3>*/
/* 		*/
/* 		<div>*/
/* 	        <div class="descption">*/
/* 	            הדייט המושלם עבורי הוא...:*/
/* 	            <br>*/
/* 	            {{ user.perfectDate }}*/
/* 	        </div>*/
/* 	*/
/* 	        <div class="descption">*/
/* 	            מנה צמחונית אהובה:*/
/* 	            <br>*/
/* 	            {{ user.favoriteDish }}*/
/* 	        </div>*/
/* 	*/
/* 	        <div class="descption">*/
/* 	            מסעדה ידידותית לצמחונים שאני אוהב/ת...*/
/* 	            <br>*/
/* 	            {{ user.favoriteRestaurant }}*/
/* 	        </div>*/
/* 	*/
/* 	        <div class="descption">*/
/* 	            איזו אישיות הייתי מזמין לארוחת ערב?*/
/* 	            <br>*/
/* 	            {{ user.dinnerWith }}*/
/* 	        </div>*/
/* 	        */
/* 	        <div class="descption">*/
/* 	            הספרים האהובים עליי:*/
/* 	            <br>*/
/* 	            {{ user.favoriteBooks }}*/
/* 	        </div>*/
/* 	*/
/* 	        <div class="descption">*/
/* 	            המוזיקה שאני שומע...*/
/* 	            <br>*/
/* 	            {{ user.music }}*/
/* 	        </div>*/
/* 		</div>*/
/* 		        */
/*     </div>*/
/*     <!-- end -->*/
/* </div>*/
/* <!-- popright -->*/
/* */
/* <div class="popleft">*/
/*     <div class="popbox clearfix">*/
/*         <h3 class="ttl tog_click">מה אני מחפש/ת?</h3>*/
/*         <div class="descption">{{ user.looking }}</div>*/
/* */
/*         {#<div class="spacer"></div>*/
/*         */
/*         <div class="descption">*/
/*             הספרים האהובים עליי:*/
/*             <br>*/
/*             {{ user.favoriteBooks }}*/
/*         </div>*/
/* */
/*         <div class="descption">*/
/*             המוזיקה שאני שומע...*/
/*             <br>*/
/*             {{ user.music }}*/
/*         </div>*/
/*         #}*/
/* */
/*         */
/*     </div>*/
/*     <!-- end -->*/
/* */
/*     {% if app.user and app.user.id != user.id %}*/
/*         <div class="popbox clearfix">*/
/*             <h3 class="ttl tog_click">הערות שלי</h3>*/
/*             <div>*/
/* 	            {% set note = user.getNotesAboutMe(app.user) %}*/
/* 	            <textarea cols="2" rows="2" class="txtarea2" maxlength="255">{% if note %}{{ note.text }}{% endif %}</textarea>*/
/* 	            <div class="textlimit">נותרו לך 255 תווים</div>*/
/* 	            <input type="submit" value="שמור  הערות" class="btn red" id="save_note" />*/
/* 	            <input type="hidden" value="{{ user.id }}" class="memberId">*/
/*             </div>*/
/*         </div>*/
/*         <!-- Comment box -->*/
/*     {% endif %}*/
/* </div>*/
/* <!-- popleft -->*/
