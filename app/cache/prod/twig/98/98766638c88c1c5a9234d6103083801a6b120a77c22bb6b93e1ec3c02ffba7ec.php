<?php

/* :backend/users:profile.html.twig */
class __TwigTemplate_29b89802aa2109f1eef75626da21abec7535ec52d90cbddb87b72b63b37c1962 extends Twig_Template
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
        echo "
<h1 class=\"ui header right\">
    <i class=\"user icon\"></i>
    <div class=\"content\">
        <span class=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</span>
        <div class=\"sub header\">פרופיל משמתמש</div>
    </div>
</h1>


<div class=\"left close\">
    <i class=\"icon remove circle olive big \" onclick=\"\$.kfModal.close();\"></i>
</div>

<div class=\"clear\"></div>

<div class=\"ui divider\"></div>

<div class=\"ui secondary menu\">
    <a class=\"item active\" data-tab=\"1\">
        ";
        // line 22
        echo "        פרטים
    </a>
    <a class=\"item\" data-tab=\"2\">
        ";
        // line 26
        echo "        פרופיל
    </a>
    <a class=\"item\" data-tab=\"3\">
        ";
        // line 30
        echo "        קצת עליי
    </a>
    <a class=\"item\" data-tab=\"4\">
        ";
        // line 34
        echo "        אדמין
    </a>
</div>
<div class=\"ui tab segment active\" data-tab=\"1\">

    <div class=\"ui large ribbon label\">שם משתמש</div>
    <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">אימייל</div>
    <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">טלפון</div>
    <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">אני</div>
    <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "gender", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    ";
        // line 57
        echo "
    <div class=\"ui large ribbon label\">תאריך לידה</div>
    <p>";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "birthday", array()), "d/m/Y"), "html", null, true);
        echo "</p>

</div>

<div class=\"ui tab segment\" data-tab=\"2\">

    <div class=\"ui large ribbon label\">אזור מגורים</div>
    <p>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "region", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">עיר</div>
    <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">מצב משפחתי</div>
    <p>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "relationshipStatus", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">תחום עיסוק</div>
    <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "occupation", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">השכלה</div>
    <p>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "education", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">דת</div>
    <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "religion", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">העדפה</div>
    <p>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sexOrientation", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>


    <div class=\"ui large ribbon label\">כאן למטרת</div>
    <p>
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "purposes", array()));
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
            // line 95
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["purpose"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 96
            echo "        ";
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
        // line 97
        echo "    </p>


</div>
<div class=\"ui tab segment\" data-tab=\"3\">

    <div class=\"ui large ribbon label\">קצת עלי</div>
    <p>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">מה אני מחפש/ת</div>
    <p>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "looking", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">אני</div>
    <p>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "type", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">תזונה</div>
    <p>";
        // line 113
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nutrition", array()) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nutrition", array()), "name", array()), "html", null, true);
        }
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">אני צמחוני /טבעוני כי</div>
    <p>
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "veggieReasons", array()));
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
            // line 118
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reason"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 119
            echo "        ";
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
        // line 120
        echo "    </p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">הרגלי עישון</div>
    <p>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smoking", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">הרגלי שתיה</div>
    <p>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "drinking", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">הרגלי ספורט</div>
    <p>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sport", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">כמה ירוק אני</div>
    <p>";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "green", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">ילדים</div>
    <p>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "children", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">בעלי חיים</div>
    <p>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "animals", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">תחומי עניין</div>
    <p>
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "interests", array()));
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
            // line 143
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["interest"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 144
            echo "        ";
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
        // line 145
        echo "    </p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">השקפה פוליטית</div>
    <p>";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "politicalAffiliation", array()), "name", array()), "html", null, true);
        echo "</p>



    <h3 class=\"ui horizontal divider header\">
        <i class=\"unhide circular icon\"></i>
        מראה חיצוני
    </h3>

    <div class=\"ui large ribbon label\">גובה</div>
    <p>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "height", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">מבנה גוף</div>
    <p>";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "body", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">צבע עיניים</div>
    <p>";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "eyes", array()), "name", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">צבע שיער</div>
    <p>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hair", array()), "name", array()), "html", null, true);
        echo "</p>

    <h3 class=\"ui horizontal divider header\">
        <i class=\"heart circular icon\"></i>
        עוד קצת עליי
    </h3>

    <div class=\"ui large ribbon label\">הדייט המושלם עבורי הוא...</div>
    <p>";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfectDate", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">מנה צמחונית אהובה...</div>
    <p>";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "favoriteDish", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">מסעדה ידידותית לצמחונים שאני אוהב/ת...</div>
    <p>";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "favoriteRestaurant", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">איזה אישיות הייתי מזמין לארוחת ערב?</div>
    <p>";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "dinnerWith", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">הספרים האהובים עליי...</div>
    <p>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "favoriteBooks", array()), "html", null, true);
        echo "</p><div class=\"ui divider\"></div>

    <div class=\"ui large ribbon label\">המוזיקה שאני שומע...</div>
    <p>";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "music", array()), "html", null, true);
        echo "</p>

</div>

<div class=\"ui tab segment\" data-tab=\"4\">

    <div class=\"ui large ribbon label\">המשתמש מופיע בעמוד הכניסה</div>
    <p>";
        // line 197
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isOnHomepage", array())) {
            echo "כן";
        } else {
            echo "לא";
        }
        echo "</p>
    <div class=\"ui divider\"></div>

    ";
        // line 200
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "adminComments", array()))) {
            // line 201
            echo "        <div class=\"ui large ribbon label\">הערות</div>
        <p>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "adminComments", array()), "html", null, true);
            echo "</p>
        <div class=\"ui divider\"></div>
    ";
        }
        // line 205
        echo "
    ";
        // line 206
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "banReason", array()))) {
            // line 207
            echo "        <div class=\"ui large ribbon label\">סיבת החסימה</div>
        <p>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "banReason", array()), "html", null, true);
            echo "</p>
        <div class=\"ui divider\"></div>
    ";
        }
        // line 211
        echo "
    ";
        // line 212
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "freezeReason", array()))) {
            // line 213
            echo "        <div class=\"ui large ribbon label\">סיבת ההקפאה</div>
        <p>";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "freezeReason", array()), "html", null, true);
            echo "</p>
    ";
        }
        // line 216
        echo "
</div>

<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return ":backend/users:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 216,  476 => 214,  473 => 213,  471 => 212,  468 => 211,  462 => 208,  459 => 207,  457 => 206,  454 => 205,  448 => 202,  445 => 201,  443 => 200,  433 => 197,  423 => 190,  417 => 187,  411 => 184,  405 => 181,  399 => 178,  393 => 175,  382 => 167,  376 => 164,  370 => 161,  364 => 158,  351 => 148,  346 => 145,  332 => 144,  326 => 143,  309 => 142,  302 => 138,  296 => 135,  290 => 132,  284 => 129,  278 => 126,  272 => 123,  267 => 120,  253 => 119,  247 => 118,  230 => 117,  221 => 113,  215 => 110,  209 => 107,  203 => 104,  194 => 97,  180 => 96,  174 => 95,  157 => 94,  149 => 89,  142 => 85,  135 => 81,  128 => 77,  121 => 73,  114 => 69,  108 => 66,  98 => 59,  94 => 57,  88 => 52,  81 => 48,  74 => 44,  67 => 40,  59 => 34,  54 => 30,  49 => 26,  44 => 22,  25 => 5,  19 => 1,);
    }
}
/* */
/* <h1 class="ui header right">*/
/*     <i class="user icon"></i>*/
/*     <div class="content">*/
/*         <span class="username">{{ user.username }}</span>*/
/*         <div class="sub header">פרופיל משמתמש</div>*/
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
/*     <a class="item active" data-tab="1">*/
/*         {#<i class="sign in icon circular"></i>#}*/
/*         פרטים*/
/*     </a>*/
/*     <a class="item" data-tab="2">*/
/*         {#<i class="user icon circular"></i>#}*/
/*         פרופיל*/
/*     </a>*/
/*     <a class="item" data-tab="3">*/
/*         {#<i class="info icon circular"></i>#}*/
/*         קצת עליי*/
/*     </a>*/
/*     <a class="item" data-tab="4">*/
/*         {#<i class="info icon circular"></i>#}*/
/*         אדמין*/
/*     </a>*/
/* </div>*/
/* <div class="ui tab segment active" data-tab="1">*/
/* */
/*     <div class="ui large ribbon label">שם משתמש</div>*/
/*     <p>{{ user.username }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">אימייל</div>*/
/*     <p>{{ user.email }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">טלפון</div>*/
/*     <p>{{ user.phone }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">אני</div>*/
/*     <p>{{ user.gender.name }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     {#<div class="ui large ribbon label">מחפש/ת</div>*/
/*     <p>{{ user.lookingGender.name }}</p><div class="ui divider"></div>#}*/
/* */
/*     <div class="ui large ribbon label">תאריך לידה</div>*/
/*     <p>{{ user.birthday|date('d/m/Y') }}</p>*/
/* */
/* </div>*/
/* */
/* <div class="ui tab segment" data-tab="2">*/
/* */
/*     <div class="ui large ribbon label">אזור מגורים</div>*/
/*     <p>{{ user.region.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">עיר</div>*/
/*     <p>{{ user.city.name }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">מצב משפחתי</div>*/
/*     <p>{{ user.relationshipStatus.name }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">תחום עיסוק</div>*/
/*     <p>{{ user.occupation.name }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">השכלה</div>*/
/*     <p>{{ user.education.name }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">דת</div>*/
/*     <p>{{ user.religion.name }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">העדפה</div>*/
/*     <p>{{ user.sexOrientation.name }}</p><div class="ui divider"></div>*/
/* */
/* */
/*     <div class="ui large ribbon label">כאן למטרת</div>*/
/*     <p>*/
/*         {% for purpose in user.purposes %}*/
/*             {{ purpose.name }}{% if not loop.last %},{% endif %}*/
/*         {% endfor %}*/
/*     </p>*/
/* */
/* */
/* </div>*/
/* <div class="ui tab segment" data-tab="3">*/
/* */
/*     <div class="ui large ribbon label">קצת עלי</div>*/
/*     <p>{{ user.about }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">מה אני מחפש/ת</div>*/
/*     <p>{{ user.looking }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">אני</div>*/
/*     <p>{{ user.type.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">תזונה</div>*/
/*     <p>{% if user.nutrition != null %}{{ user.nutrition.name }}{% endif %}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">אני צמחוני /טבעוני כי</div>*/
/*     <p>*/
/*         {% for reason in user.veggieReasons %}*/
/*             {{ reason.name }}{% if not loop.last %},{% endif %}*/
/*         {% endfor %}*/
/*     </p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">הרגלי עישון</div>*/
/*     <p>{{ user.smoking.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">הרגלי שתיה</div>*/
/*     <p>{{ user.drinking.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">הרגלי ספורט</div>*/
/*     <p>{{ user.sport.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">כמה ירוק אני</div>*/
/*     <p>{{ user.green.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">ילדים</div>*/
/*     <p>{{ user.children.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">בעלי חיים</div>*/
/*     <p>{{ user.animals.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">תחומי עניין</div>*/
/*     <p>*/
/*         {% for interest in user.interests %}*/
/*             {{ interest.name }}{% if not loop.last %},{% endif %}*/
/*         {% endfor %}*/
/*     </p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">השקפה פוליטית</div>*/
/*     <p>{{ user.politicalAffiliation.name }}</p>*/
/* */
/* */
/* */
/*     <h3 class="ui horizontal divider header">*/
/*         <i class="unhide circular icon"></i>*/
/*         מראה חיצוני*/
/*     </h3>*/
/* */
/*     <div class="ui large ribbon label">גובה</div>*/
/*     <p>{{ user.height }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">מבנה גוף</div>*/
/*     <p>{{ user.body.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">צבע עיניים</div>*/
/*     <p>{{ user.eyes.name }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">צבע שיער</div>*/
/*     <p>{{ user.hair.name }}</p>*/
/* */
/*     <h3 class="ui horizontal divider header">*/
/*         <i class="heart circular icon"></i>*/
/*         עוד קצת עליי*/
/*     </h3>*/
/* */
/*     <div class="ui large ribbon label">הדייט המושלם עבורי הוא...</div>*/
/*     <p>{{ user.perfectDate }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">מנה צמחונית אהובה...</div>*/
/*     <p>{{ user.favoriteDish }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">מסעדה ידידותית לצמחונים שאני אוהב/ת...</div>*/
/*     <p>{{ user.favoriteRestaurant }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">איזה אישיות הייתי מזמין לארוחת ערב?</div>*/
/*     <p>{{ user.dinnerWith }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">הספרים האהובים עליי...</div>*/
/*     <p>{{ user.favoriteBooks }}</p><div class="ui divider"></div>*/
/* */
/*     <div class="ui large ribbon label">המוזיקה שאני שומע...</div>*/
/*     <p>{{ user.music }}</p>*/
/* */
/* </div>*/
/* */
/* <div class="ui tab segment" data-tab="4">*/
/* */
/*     <div class="ui large ribbon label">המשתמש מופיע בעמוד הכניסה</div>*/
/*     <p>{% if user.isOnHomepage %}כן{% else %}לא{% endif %}</p>*/
/*     <div class="ui divider"></div>*/
/* */
/*     {% if user.adminComments|length %}*/
/*         <div class="ui large ribbon label">הערות</div>*/
/*         <p>{{ user.adminComments }}</p>*/
/*         <div class="ui divider"></div>*/
/*     {% endif %}*/
/* */
/*     {% if user.banReason|length %}*/
/*         <div class="ui large ribbon label">סיבת החסימה</div>*/
/*         <p>{{ user.banReason }}</p>*/
/*         <div class="ui divider"></div>*/
/*     {% endif %}*/
/* */
/*     {% if user.freezeReason|length %}*/
/*         <div class="ui large ribbon label">סיבת ההקפאה</div>*/
/*         <p>{{ user.freezeReason }}</p>*/
/*     {% endif %}*/
/* */
/* </div>*/
/* */
/* <div class="clear"></div>*/
