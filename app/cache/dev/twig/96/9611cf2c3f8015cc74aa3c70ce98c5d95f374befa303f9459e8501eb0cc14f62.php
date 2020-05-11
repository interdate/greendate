<?php

/* backend/users/index.html.twig */
class __TwigTemplate_3bb9f0d2dcd93fbdb2afac469b503f452be772953ffe74bd44725c24a1ee5a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/users/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_936fff3db107730d0deadd818f90f26adb71aa1d6a19edb64f607f109c25172a = $this->env->getExtension("native_profiler");
        $__internal_936fff3db107730d0deadd818f90f26adb71aa1d6a19edb64f607f109c25172a->enter($__internal_936fff3db107730d0deadd818f90f26adb71aa1d6a19edb64f607f109c25172a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/users/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_936fff3db107730d0deadd818f90f26adb71aa1d6a19edb64f607f109c25172a->leave($__internal_936fff3db107730d0deadd818f90f26adb71aa1d6a19edb64f607f109c25172a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a43983d0bb5b8e46ea52d6f2cc365161cc13377e0f4c9bb9d587e14ae712847 = $this->env->getExtension("native_profiler");
        $__internal_7a43983d0bb5b8e46ea52d6f2cc365161cc13377e0f4c9bb9d587e14ae712847->enter($__internal_7a43983d0bb5b8e46ea52d6f2cc365161cc13377e0f4c9bb9d587e14ae712847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "backend/header.html.twig", array("header" => "ניהול משתמשים", "sub_header" => $this->getAttribute((isset($context["current_filter_data"]) ? $context["current_filter_data"] : $this->getContext($context, "current_filter_data")), "title", array()), "icon" => "users"));
        echo "

    <div class=\"internal_sidebar right\">

        <div class=\"scroll\">

            <div class=\"headerIcon\"><i class=\"big ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_filter_data"]) ? $context["current_filter_data"] : $this->getContext($context, "current_filter_data")), "icon", array()), "html", null, true);
        echo " icon circular\"></i></div>

            <div class=\"ui left vertical large menu active black inverted\">

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        foreach ($context['_seq'] as $context["filter_name"] => $context["value"]) {
            // line 16
            echo "
                    ";
            // line 17
            if (($context["filter_name"] != "search")) {
                // line 18
                echo "
                        ";
                // line 19
                if (($context["filter_name"] == $this->getAttribute((isset($context["current_filter_data"]) ? $context["current_filter_data"] : $this->getContext($context, "current_filter_data")), "name", array()))) {
                    // line 20
                    echo "                            ";
                    $context["active"] = "active";
                    // line 21
                    echo "                            ";
                    $context["sel"] = "red";
                    // line 22
                    echo "                        ";
                } else {
                    // line 23
                    echo "                            ";
                    $context["active"] = "";
                    // line 24
                    echo "                            ";
                    $context["sel"] = "";
                    // line 25
                    echo "                        ";
                }
                // line 26
                echo "
                        <a class=\"item ";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_users", array("filter" => $context["filter_name"])), "html", null, true);
                echo "\">
                            <div class=\"ui label ";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["sel"]) ? $context["sel"] : $this->getContext($context, "sel")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), $context["filter_name"], array(), "array"), "total_number", array()), "html", null, true);
                echo "</div>
                            <i class=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), $context["filter_name"], array(), "array"), "icon", array()), "html", null, true);
                echo " inverted icon\"></i>
                            ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), $context["filter_name"], array(), "array"), "title", array()), "html", null, true);
                echo "
                        </a>

                    ";
            }
            // line 34
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filter_name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
            </div>

            <div class=\"clear\"></div>
            <br>

            ";
        // line 42
        if (($this->getAttribute((isset($context["stat"]) ? $context["stat"] : $this->getContext($context, "stat")), "waiting_photos", array()) > 0)) {
            // line 43
            echo "                <div class=\"ui horizontal divider sb_divider\">
                    <i class=\"wait icon\"></i>
                    אישור תמונות

                </div>


                <div style=\"text-align: center;\">

                    <div class=\"ui one statistics\" onclick=\"window.location.href='";
            // line 52
            echo $this->env->getExtension('routing')->getPath("admin_users_photos_waiting");
            echo "'\">
                        <div class=\"statistic green\" id=\"waiting_for_approval\">
                            <div class=\"value\">
                                <i class=\"photo icon\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stat"]) ? $context["stat"] : $this->getContext($context, "stat")), "waiting_photos", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"clear\"></div>
                <br>

            ";
        }
        // line 66
        echo "
            <div class=\"ui horizontal divider sb_divider\">
                <i class=\"bar chart big icon\"></i>
                דוחות
            </div>

            <div class=\"ui left vertical large menu active black inverted flagged_reports\">

                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 75
            echo "                    <a class=\"item ";
            if (((null != (isset($context["current_report"]) ? $context["current_report"] : $this->getContext($context, "current_report"))) && ($this->getAttribute($context["report"], "id", array()) == $this->getAttribute((isset($context["current_report"]) ? $context["current_report"] : $this->getContext($context, "current_report")), "id", array())))) {
                echo "active";
            }
            echo "\">
                        <div class=\"ui label hidden\"></div>
                        <i class=\"angle right inverted right icon\"></i>
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "name", array()), "html", null, true);
            echo "
                        <form action=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("admin_users", array("filter" => "report"));
            echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"reportId\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "\">
                        </form>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
                <a class=\"item\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("admin_users_reports");
        echo "\">
                    <div class=\"ui label hidden\"></div>
                    <i class=\"angle right inverted right icon\"></i>
                    לרשימת כל הדוחות
                </a>



            </div>

        </div>

    </div>


    <div class=\"page_content users_content\">

        <table class=\"ui single line table pink users\">
            <thead>
            <tr class=\"actions\">
                <th colspan=\"9\">
                    <div class=\"right act_text\">

                        <h4 class=\"ui header\">
                            <i class=\"checkmark box icon\"></i>
                            <div class=\"content\">
                                פעולות
                                <div class=\"sub header\">עם מסומנים</div>
                            </div>
                        </h4>

                    </div>

                    <div class=\"divider right\"></div>

                    <div class=\"right\">
                        <button class=\"ui green icon button activate\" data-position=\"top center\" data-content=\"להפעיל\">
                            <i class=\"checkmark icon\"></i>
                        </button>

                        <button class=\"ui red icon button deactivate\" data-position=\"top center\" data-content=\"לחסום\">
                            <i class=\"ban icon\"></i>
                        </button>
                    </div>

                    <div class=\"divider right\"></div>

                    <div class=\"right\">

                        <button class=\"ui purple icon button freeze\" data-position=\"top center\" data-content=\"להקפיא\">
                            <i class=\"asterisk icon\"></i>
                        </button>

                        <button class=\"ui orange icon button unfreeze\" data-position=\"top center\" data-content=\"לבטל הקפאה\">
                            <i class=\"sun icon\"></i>
                        </button>

                    </div>

                    <div class=\"divider right\"></div>


                    <div class=\"right\">

                        <button class=\"ui olive icon button flag\" data-position=\"top center\" data-content=\"לסמן\">
                            <i class=\"flag icon\"></i>
                        </button>

                        <button class=\"ui blue icon button unflag\" data-position=\"top center\" data-content=\"לבטל סימון\">
                            <i class=\"outline flag icon\"></i>
                        </button>

                    </div>

                    <div class=\"divider right\"></div>


                    <div class=\"right\">
                        <button class=\"ui black icon button delete\" data-position=\"top center\" data-content=\"להסיר\">
                            <i class=\"trash icon\"></i>
                        </button>
                    </div>

                    <div class=\"divider right\"></div>

                    <div class=\"right act_text\">

                        <h4 class=\"ui header\">
                            <i class=\"settings icon\"></i>
                            <div class=\"content\">
                                פעולות
                                <div class=\"sub header\">פלובליות</div>
                            </div>
                        </h4>

                    </div>

                    <div class=\"divider right\"></div>

                    <div class=\"right\">

                        ";
        // line 186
        if (($this->getAttribute((isset($context["current_filter_data"]) ? $context["current_filter_data"] : $this->getContext($context, "current_filter_data")), "name", array()) == "search")) {
            // line 187
            echo "                            <button class=\"ui icon pink button report\" data-position=\"top center\" data-content=\"לצור דוח\">
                                <i class=\"bar chart icon\"></i>
                            </button>
                        ";
        }
        // line 191
        echo "
                        <button class=\"ui icon green button export\" data-position=\"top center\" data-content=\"לייצא ל-CSV\">
                            <i class=\"table icon\"></i>
                        </button>

                        <button class=\"ui icon orange button point\" data-position=\"top center\" data-content=\"לתת נקודה\">
                            <i class=\"selected radio icon\"></i>
                        </button>
                    </div>

                </th>
            </tr>
            <tr>
                <th class=\"slim_3\">

                    <div class=\"ui checkbox small\" id=\"sel_all\">
                        <input type=\"checkbox\" value=\"\">
                        <label></label>
                    </div>

                </th>
                <th class=\"slim_2\">תמונות</th>
                <th class=\"slim\">מספר</th>
                <th>שם משתמש</th>
                <th class=\"slim\">גיל</th>
                <th>דוא\"ל</th>
                <th>מאפיינים</th>
                <th>ניהול</th>
                <th class=\"slim_2\">פעיל</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 225
            echo "                <tr>

                    <td class=\"sel_item\">
                        ";
            // line 228
            if (($this->getAttribute($context["user"], "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 229
                echo "                            <div class=\"ui checkbox small\">
                                <input type=\"checkbox\" value=\"\">
                                <label></label>
                            </div>
                        ";
            }
            // line 234
            echo "                    </td>

                    <td class=\"user_photo\">
                        ";
            // line 237
            $context["mainPhoto"] = $this->getAttribute($context["user"], "getMainPhoto", array());
            // line 238
            echo "                        <img src=\"\" data-position=\"top center\" data-content=\"עריכת תמונות\">
                        <input type=\"hidden\" value=\"";
            // line 239
            if ( !(null === (isset($context["mainPhoto"]) ? $context["mainPhoto"] : $this->getContext($context, "mainPhoto")))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mainPhoto"]) ? $context["mainPhoto"] : $this->getContext($context, "mainPhoto")), "name", array()), "html", null, true);
            }
            echo "\">
                    </td>
                    <td>";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                    <td class=\"username\"><a class=\"ui label\">";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "age", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td class=\"user_props\">
                    
                    \t";
            // line 247
            if (($this->getAttribute($context["user"], "loginFrom", array()) != null)) {
                // line 248
                echo "
\t                        ";
                // line 249
                if (($this->getAttribute($this->getAttribute($context["user"], "loginFrom", array()), "id", array()) == 1)) {
                    // line 250
                    echo "\t
\t                            ";
                    // line 251
                    echo twig_include($this->env, $context, "backend/users/login_from.html.twig", array("icon" => "desktop violet", "loginFrom" => $this->getAttribute($this->getAttribute(                    // line 254
$context["user"], "loginFrom", array()), "name", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute(                    // line 255
$context["user"], "lastLoginAt", array()), "d/m/Y"), "time" => twig_date_format_filter($this->env, $this->getAttribute(                    // line 256
$context["user"], "lastLoginAt", array()), "H:i")));
                    // line 258
                    echo "
\t
\t                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 260
$context["user"], "loginFrom", array()), "id", array()) == 5)) {
                    // line 261
                    echo "\t
\t                            ";
                    // line 262
                    echo twig_include($this->env, $context, "backend/users/login_from.html.twig", array("icon" => "apple grey", "loginFrom" => $this->getAttribute($this->getAttribute(                    // line 265
$context["user"], "loginFrom", array()), "name", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute(                    // line 266
$context["user"], "lastLoginAt", array()), "d/m/Y"), "time" => twig_date_format_filter($this->env, $this->getAttribute(                    // line 267
$context["user"], "lastLoginAt", array()), "H:i")));
                    // line 269
                    echo "
\t
\t                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 271
$context["user"], "loginFrom", array()), "id", array()) == 6)) {
                    // line 272
                    echo "\t
\t                            ";
                    // line 273
                    echo twig_include($this->env, $context, "backend/users/login_from.html.twig", array("icon" => "android olive", "loginFrom" => $this->getAttribute($this->getAttribute(                    // line 276
$context["user"], "loginFrom", array()), "name", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute(                    // line 277
$context["user"], "lastLoginAt", array()), "d/m/Y"), "time" => twig_date_format_filter($this->env, $this->getAttribute(                    // line 278
$context["user"], "lastLoginAt", array()), "H:i")));
                    // line 280
                    echo "
\t
\t                        ";
                } else {
                    // line 283
                    echo "\t
\t                            ";
                    // line 284
                    echo twig_include($this->env, $context, "backend/users/login_from.html.twig", array("icon" => "mobile violet", "loginFrom" => $this->getAttribute($this->getAttribute(                    // line 287
$context["user"], "loginFrom", array()), "name", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute(                    // line 288
$context["user"], "lastLoginAt", array()), "d/m/Y"), "time" => twig_date_format_filter($this->env, $this->getAttribute(                    // line 289
$context["user"], "lastLoginAt", array()), "H:i")));
                    // line 291
                    echo "
\t
\t                        ";
                }
                // line 294
                echo "                        
                        ";
            }
            // line 296
            echo "                        

                        ";
            // line 298
            if (($this->getAttribute($this->getAttribute($context["user"], "gender", array()), "id", array()) == 1)) {
                // line 299
                echo "                            <div class=\"right\"><i class=\"male pink icon\" data-position=\"top center\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "gender", array()), "name", array()), "html", null, true);
                echo "\"></i></div>
                        ";
            }
            // line 301
            echo "
                        ";
            // line 302
            if (($this->getAttribute($this->getAttribute($context["user"], "gender", array()), "id", array()) == 2)) {
                // line 303
                echo "                            <div class=\"right\"><i class=\"female pink icon\" data-position=\"top center\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "gender", array()), "name", array()), "html", null, true);
                echo "\"></i></div>
                        ";
            }
            // line 305
            echo "
                        ";
            // line 306
            if ($this->getAttribute($context["user"], "isPaying", array())) {
                // line 307
                echo "                            <div class=\"right\"><i class=\"star green icon\" data-position=\"top center\" data-content=\"מנוי\"></i></div>
                        ";
            }
            // line 309
            echo "
                        <div class=\"right\"><i class=\"asterisk purple icon ";
            // line 310
            if ( !$this->getAttribute($context["user"], "isFrozen", array())) {
                echo "hidden";
            }
            echo "\" data-position=\"top center\" data-content=\"מוקפא\"></i></div>
                        <div class=\"right\"><i class=\"flag olive icon ";
            // line 311
            if ( !$this->getAttribute($context["user"], "isFlagged", array())) {
                echo "hidden";
            }
            echo "\" data-position=\"top center\" data-content=\"מסומן\"></i></div>


                    </td>
                    <td class=\"manage_user\">
                        <i class=\"edit icon blue link\" data-position=\"top center\" data-content=\"עריכת פרופיל\"></i>
                        <a href=\"";
            // line 317
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_messenger_user", array("userId" => $this->getAttribute($context["user"], "id", array()), "page" => 1)), "html", null, true);
            echo "\" target=\"_blank\">
                            <i class=\"chat icon blue link\" data-position=\"top center\" data-content=\"הודעות (נפתח בטאב חדש)\"></i>
                        </a>
                        <i class=\"diamond icon blue link\" data-position=\"top center\" data-content=\"ניהול פרטי מנוי\"></i>
                        <i class=\"sign in icon blue link\" data-position=\"top center\" data-content=\"כניסה לאתר בתור המשתמש\"></i>

                    </td>

                    <td>
                        <div class=\"ui toggle checkbox small is_active\">
                            <input type=\"checkbox\" name=\"isActive\"
                                   ";
            // line 328
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "checked=\"checked\"";
            }
            // line 329
            echo "                                    ";
            if (($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                            <label></label>
                        </div>
                        <input type=\"hidden\" class=\"userId\" value=\"";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
                    </td>

                </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "
            </tbody>
            <tfoot>
            <tr>
                <th colspan=\"9\">

                    ";
        // line 343
        echo $this->env->getExtension('knp_pagination')->render((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "

                </th>
            </tr>
            </tfoot>
        </table>



    </div>


    <form method=\"post\" id=\"search_filter_form\">

        ";
        // line 357
        if (array_key_exists("data", $context)) {
            // line 358
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 359
                echo "                ";
                if (twig_test_iterable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["key"], array(), "array"))) {
                    // line 360
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["key"], array(), "array"));
                    foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                        // line 361
                        echo "                        <input type=\"hidden\" name=\"advancedSearch[";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "\">
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 363
                    echo "                ";
                } else {
                    // line 364
                    echo "                    <input type=\"hidden\" name=\"advancedSearch[";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" id=\"advancedSearch_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                ";
                }
                // line 366
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 367
            echo "        ";
        }
        // line 368
        echo "

        ";
        // line 370
        if ((null != (isset($context["current_report"]) ? $context["current_report"] : $this->getContext($context, "current_report")))) {
            // line 371
            echo "            <input type=\"hidden\" name=\"reportId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_report"]) ? $context["current_report"] : $this->getContext($context, "current_report")), "id", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 373
        echo "
        <input type=\"hidden\" name=\"fileName\" value=\"\">

        <input type=\"submit\" class=\"hidden\">

    </form>





";
        
        $__internal_7a43983d0bb5b8e46ea52d6f2cc365161cc13377e0f4c9bb9d587e14ae712847->leave($__internal_7a43983d0bb5b8e46ea52d6f2cc365161cc13377e0f4c9bb9d587e14ae712847_prof);

    }

    public function getTemplateName()
    {
        return "backend/users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 373,  666 => 371,  664 => 370,  660 => 368,  657 => 367,  651 => 366,  641 => 364,  638 => 363,  625 => 361,  620 => 360,  617 => 359,  612 => 358,  610 => 357,  593 => 343,  585 => 337,  566 => 332,  557 => 329,  553 => 328,  539 => 317,  528 => 311,  522 => 310,  519 => 309,  515 => 307,  513 => 306,  510 => 305,  504 => 303,  502 => 302,  499 => 301,  493 => 299,  491 => 298,  487 => 296,  483 => 294,  478 => 291,  476 => 289,  475 => 288,  474 => 287,  473 => 284,  470 => 283,  465 => 280,  463 => 278,  462 => 277,  461 => 276,  460 => 273,  457 => 272,  455 => 271,  451 => 269,  449 => 267,  448 => 266,  447 => 265,  446 => 262,  443 => 261,  441 => 260,  437 => 258,  435 => 256,  434 => 255,  433 => 254,  432 => 251,  429 => 250,  427 => 249,  424 => 248,  422 => 247,  416 => 244,  412 => 243,  408 => 242,  404 => 241,  397 => 239,  394 => 238,  392 => 237,  387 => 234,  380 => 229,  378 => 228,  373 => 225,  356 => 224,  321 => 191,  315 => 187,  313 => 186,  209 => 85,  206 => 84,  196 => 80,  192 => 79,  188 => 78,  179 => 75,  175 => 74,  165 => 66,  151 => 55,  145 => 52,  134 => 43,  132 => 42,  124 => 36,  117 => 34,  110 => 30,  106 => 29,  100 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  59 => 15,  52 => 11,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'ניהול משתמשים', 'sub_header': current_filter_data.title, 'icon': 'users' }) }}*/
/* */
/*     <div class="internal_sidebar right">*/
/* */
/*         <div class="scroll">*/
/* */
/*             <div class="headerIcon"><i class="big {{ current_filter_data.icon }} icon circular"></i></div>*/
/* */
/*             <div class="ui left vertical large menu active black inverted">*/
/* */
/*                 {% for filter_name, value in filters %}*/
/* */
/*                     {% if filter_name != 'search' %}*/
/* */
/*                         {% if filter_name == current_filter_data.name %}*/
/*                             {% set active = 'active' %}*/
/*                             {% set sel = 'red' %}*/
/*                         {% else %}*/
/*                             {% set active = '' %}*/
/*                             {% set sel = '' %}*/
/*                         {% endif %}*/
/* */
/*                         <a class="item {{ active }}" href="{{ path('admin_users', {'filter': filter_name}) }}">*/
/*                             <div class="ui label {{ sel }}">{{ filters[filter_name].total_number }}</div>*/
/*                             <i class="{{ filters[filter_name].icon }} inverted icon"></i>*/
/*                             {{ filters[filter_name].title }}*/
/*                         </a>*/
/* */
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/* */
/*             </div>*/
/* */
/*             <div class="clear"></div>*/
/*             <br>*/
/* */
/*             {% if stat.waiting_photos > 0 %}*/
/*                 <div class="ui horizontal divider sb_divider">*/
/*                     <i class="wait icon"></i>*/
/*                     אישור תמונות*/
/* */
/*                 </div>*/
/* */
/* */
/*                 <div style="text-align: center;">*/
/* */
/*                     <div class="ui one statistics" onclick="window.location.href='{{ path('admin_users_photos_waiting') }}'">*/
/*                         <div class="statistic green" id="waiting_for_approval">*/
/*                             <div class="value">*/
/*                                 <i class="photo icon"></i> {{ stat.waiting_photos }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="clear"></div>*/
/*                 <br>*/
/* */
/*             {% endif %}*/
/* */
/*             <div class="ui horizontal divider sb_divider">*/
/*                 <i class="bar chart big icon"></i>*/
/*                 דוחות*/
/*             </div>*/
/* */
/*             <div class="ui left vertical large menu active black inverted flagged_reports">*/
/* */
/*                 {% for report in reports %}*/
/*                     <a class="item {% if null != current_report and report.id == current_report.id %}active{% endif %}">*/
/*                         <div class="ui label hidden"></div>*/
/*                         <i class="angle right inverted right icon"></i>*/
/*                         {{ report.name }}*/
/*                         <form action="{{ path('admin_users', {'filter': 'report'}) }}" method="post">*/
/*                             <input type="hidden" name="reportId" value="{{ report.id }}">*/
/*                         </form>*/
/*                     </a>*/
/*                 {% endfor %}*/
/* */
/*                 <a class="item" href="{{ path('admin_users_reports') }}">*/
/*                     <div class="ui label hidden"></div>*/
/*                     <i class="angle right inverted right icon"></i>*/
/*                     לרשימת כל הדוחות*/
/*                 </a>*/
/* */
/* */
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class="page_content users_content">*/
/* */
/*         <table class="ui single line table pink users">*/
/*             <thead>*/
/*             <tr class="actions">*/
/*                 <th colspan="9">*/
/*                     <div class="right act_text">*/
/* */
/*                         <h4 class="ui header">*/
/*                             <i class="checkmark box icon"></i>*/
/*                             <div class="content">*/
/*                                 פעולות*/
/*                                 <div class="sub header">עם מסומנים</div>*/
/*                             </div>*/
/*                         </h4>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="divider right"></div>*/
/* */
/*                     <div class="right">*/
/*                         <button class="ui green icon button activate" data-position="top center" data-content="להפעיל">*/
/*                             <i class="checkmark icon"></i>*/
/*                         </button>*/
/* */
/*                         <button class="ui red icon button deactivate" data-position="top center" data-content="לחסום">*/
/*                             <i class="ban icon"></i>*/
/*                         </button>*/
/*                     </div>*/
/* */
/*                     <div class="divider right"></div>*/
/* */
/*                     <div class="right">*/
/* */
/*                         <button class="ui purple icon button freeze" data-position="top center" data-content="להקפיא">*/
/*                             <i class="asterisk icon"></i>*/
/*                         </button>*/
/* */
/*                         <button class="ui orange icon button unfreeze" data-position="top center" data-content="לבטל הקפאה">*/
/*                             <i class="sun icon"></i>*/
/*                         </button>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="divider right"></div>*/
/* */
/* */
/*                     <div class="right">*/
/* */
/*                         <button class="ui olive icon button flag" data-position="top center" data-content="לסמן">*/
/*                             <i class="flag icon"></i>*/
/*                         </button>*/
/* */
/*                         <button class="ui blue icon button unflag" data-position="top center" data-content="לבטל סימון">*/
/*                             <i class="outline flag icon"></i>*/
/*                         </button>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="divider right"></div>*/
/* */
/* */
/*                     <div class="right">*/
/*                         <button class="ui black icon button delete" data-position="top center" data-content="להסיר">*/
/*                             <i class="trash icon"></i>*/
/*                         </button>*/
/*                     </div>*/
/* */
/*                     <div class="divider right"></div>*/
/* */
/*                     <div class="right act_text">*/
/* */
/*                         <h4 class="ui header">*/
/*                             <i class="settings icon"></i>*/
/*                             <div class="content">*/
/*                                 פעולות*/
/*                                 <div class="sub header">פלובליות</div>*/
/*                             </div>*/
/*                         </h4>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="divider right"></div>*/
/* */
/*                     <div class="right">*/
/* */
/*                         {% if current_filter_data.name == 'search' %}*/
/*                             <button class="ui icon pink button report" data-position="top center" data-content="לצור דוח">*/
/*                                 <i class="bar chart icon"></i>*/
/*                             </button>*/
/*                         {% endif %}*/
/* */
/*                         <button class="ui icon green button export" data-position="top center" data-content="לייצא ל-CSV">*/
/*                             <i class="table icon"></i>*/
/*                         </button>*/
/* */
/*                         <button class="ui icon orange button point" data-position="top center" data-content="לתת נקודה">*/
/*                             <i class="selected radio icon"></i>*/
/*                         </button>*/
/*                     </div>*/
/* */
/*                 </th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="slim_3">*/
/* */
/*                     <div class="ui checkbox small" id="sel_all">*/
/*                         <input type="checkbox" value="">*/
/*                         <label></label>*/
/*                     </div>*/
/* */
/*                 </th>*/
/*                 <th class="slim_2">תמונות</th>*/
/*                 <th class="slim">מספר</th>*/
/*                 <th>שם משתמש</th>*/
/*                 <th class="slim">גיל</th>*/
/*                 <th>דוא"ל</th>*/
/*                 <th>מאפיינים</th>*/
/*                 <th>ניהול</th>*/
/*                 <th class="slim_2">פעיל</th>*/
/* */
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for user in users %}*/
/*                 <tr>*/
/* */
/*                     <td class="sel_item">*/
/*                         {% if user.id != app.user.id %}*/
/*                             <div class="ui checkbox small">*/
/*                                 <input type="checkbox" value="">*/
/*                                 <label></label>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </td>*/
/* */
/*                     <td class="user_photo">*/
/*                         {% set mainPhoto = user.getMainPhoto %}*/
/*                         <img src="" data-position="top center" data-content="עריכת תמונות">*/
/*                         <input type="hidden" value="{% if mainPhoto is not null %}{{ mainPhoto.name }}{% endif %}">*/
/*                     </td>*/
/*                     <td>{{ user.id }}</td>*/
/*                     <td class="username"><a class="ui label">{{ user.username }}</a></td>*/
/*                     <td>{{ user.age }}</td>*/
/*                     <td>{{ user.email }}</td>*/
/*                     <td class="user_props">*/
/*                     */
/*                     	{% if user.loginFrom != null %}*/
/* */
/* 	                        {% if user.loginFrom.id == 1 %}*/
/* 	*/
/* 	                            {{*/
/* 	                            include('backend/users/login_from.html.twig', {*/
/* 	                                'icon': 'desktop violet',*/
/* 	                                'loginFrom': user.loginFrom.name,*/
/* 	                                'date': user.lastLoginAt|date("d/m/Y"),*/
/* 	                                'time': user.lastLoginAt|date("H:i")*/
/* 	                            })*/
/* 	                            }}*/
/* 	*/
/* 	                        {% elseif user.loginFrom.id == 5 %}*/
/* 	*/
/* 	                            {{*/
/* 	                            include('backend/users/login_from.html.twig', {*/
/* 	                                'icon': 'apple grey',*/
/* 	                                'loginFrom': user.loginFrom.name,*/
/* 	                                'date': user.lastLoginAt|date("d/m/Y"),*/
/* 	                                'time': user.lastLoginAt|date("H:i")*/
/* 	                            })*/
/* 	                            }}*/
/* 	*/
/* 	                        {% elseif user.loginFrom.id == 6 %}*/
/* 	*/
/* 	                            {{*/
/* 	                            include('backend/users/login_from.html.twig', {*/
/* 	                                'icon': 'android olive',*/
/* 	                                'loginFrom': user.loginFrom.name,*/
/* 	                                'date': user.lastLoginAt|date("d/m/Y"),*/
/* 	                                'time': user.lastLoginAt|date("H:i")*/
/* 	                            })*/
/* 	                            }}*/
/* 	*/
/* 	                        {% else %}*/
/* 	*/
/* 	                            {{*/
/* 	                            include('backend/users/login_from.html.twig', {*/
/* 	                                'icon': 'mobile violet',*/
/* 	                                'loginFrom': user.loginFrom.name,*/
/* 	                                'date': user.lastLoginAt|date("d/m/Y"),*/
/* 	                                'time': user.lastLoginAt|date("H:i")*/
/* 	                            })*/
/* 	                            }}*/
/* 	*/
/* 	                        {% endif %}*/
/*                         */
/*                         {% endif %}*/
/*                         */
/* */
/*                         {% if user.gender.id == 1 %}*/
/*                             <div class="right"><i class="male pink icon" data-position="top center" data-content="{{ user.gender.name }}"></i></div>*/
/*                         {% endif %}*/
/* */
/*                         {% if user.gender.id == 2 %}*/
/*                             <div class="right"><i class="female pink icon" data-position="top center" data-content="{{ user.gender.name }}"></i></div>*/
/*                         {% endif %}*/
/* */
/*                         {% if user.isPaying %}*/
/*                             <div class="right"><i class="star green icon" data-position="top center" data-content="מנוי"></i></div>*/
/*                         {% endif %}*/
/* */
/*                         <div class="right"><i class="asterisk purple icon {% if not user.isFrozen %}hidden{% endif %}" data-position="top center" data-content="מוקפא"></i></div>*/
/*                         <div class="right"><i class="flag olive icon {% if not user.isFlagged %}hidden{% endif %}" data-position="top center" data-content="מסומן"></i></div>*/
/* */
/* */
/*                     </td>*/
/*                     <td class="manage_user">*/
/*                         <i class="edit icon blue link" data-position="top center" data-content="עריכת פרופיל"></i>*/
/*                         <a href="{{ path('admin_messenger_user', {'userId': user.id, 'page': 1 }) }}" target="_blank">*/
/*                             <i class="chat icon blue link" data-position="top center" data-content="הודעות (נפתח בטאב חדש)"></i>*/
/*                         </a>*/
/*                         <i class="diamond icon blue link" data-position="top center" data-content="ניהול פרטי מנוי"></i>*/
/*                         <i class="sign in icon blue link" data-position="top center" data-content="כניסה לאתר בתור המשתמש"></i>*/
/* */
/*                     </td>*/
/* */
/*                     <td>*/
/*                         <div class="ui toggle checkbox small is_active">*/
/*                             <input type="checkbox" name="isActive"*/
/*                                    {% if user.isActive %}checked="checked"{% endif %}*/
/*                                     {% if user.id == app.user.id %}disabled="disabled"{% endif %}>*/
/*                             <label></label>*/
/*                         </div>*/
/*                         <input type="hidden" class="userId" value="{{ user.id }}">*/
/*                     </td>*/
/* */
/*                 </tr>*/
/*             {% endfor %}*/
/* */
/*             </tbody>*/
/*             <tfoot>*/
/*             <tr>*/
/*                 <th colspan="9">*/
/* */
/*                     {{ knp_pagination_render(users) }}*/
/* */
/*                 </th>*/
/*             </tr>*/
/*             </tfoot>*/
/*         </table>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/*     <form method="post" id="search_filter_form">*/
/* */
/*         {% if data is defined %}*/
/*             {% for key,value in data %}*/
/*                 {% if data[key] is iterable %}*/
/*                     {% for key2,value2 in data[key] %}*/
/*                         <input type="hidden" name="advancedSearch[{{ key }}][{{ key2 }}]" value="{{ value2 }}">*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     <input type="hidden" name="advancedSearch[{{ key }}]" value="{{ value }}" id="advancedSearch_{{ key }}">*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/* */
/*         {% if null != current_report %}*/
/*             <input type="hidden" name="reportId" value="{{ current_report.id }}">*/
/*         {% endif %}*/
/* */
/*         <input type="hidden" name="fileName" value="">*/
/* */
/*         <input type="submit" class="hidden">*/
/* */
/*     </form>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
