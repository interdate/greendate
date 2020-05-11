<?php

/* :backend/users:index.html.twig */
class __TwigTemplate_8d40999b355b58b445cc7d83374adec6d411245f5f37cbf49bdf460b88678aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/users:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "backend/header.html.twig", array("header" => "ניהול משתמשים", "sub_header" => $this->getAttribute((isset($context["current_filter_data"]) ? $context["current_filter_data"] : null), "title", array()), "icon" => "users"));
        echo "

    <div class=\"internal_sidebar right\">

        <div class=\"scroll\">

            <div class=\"headerIcon\"><i class=\"big ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_filter_data"]) ? $context["current_filter_data"] : null), "icon", array()), "html", null, true);
        echo " icon circular\"></i></div>

            <div class=\"ui left vertical large menu active black inverted\">

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
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
                if (($context["filter_name"] == $this->getAttribute((isset($context["current_filter_data"]) ? $context["current_filter_data"] : null), "name", array()))) {
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
                echo twig_escape_filter($this->env, (isset($context["active"]) ? $context["active"] : null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_users", array("filter" => $context["filter_name"])), "html", null, true);
                echo "\">
                            <div class=\"ui label ";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["sel"]) ? $context["sel"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), $context["filter_name"], array(), "array"), "total_number", array()), "html", null, true);
                echo "</div>
                            <i class=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), $context["filter_name"], array(), "array"), "icon", array()), "html", null, true);
                echo " inverted icon\"></i>
                            ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), $context["filter_name"], array(), "array"), "title", array()), "html", null, true);
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
        if (($this->getAttribute((isset($context["stat"]) ? $context["stat"] : null), "waiting_photos", array()) > 0)) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stat"]) ? $context["stat"] : null), "waiting_photos", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 75
            echo "                    <a class=\"item ";
            if (((null != (isset($context["current_report"]) ? $context["current_report"] : null)) && ($this->getAttribute($context["report"], "id", array()) == $this->getAttribute((isset($context["current_report"]) ? $context["current_report"] : null), "id", array())))) {
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
        if (($this->getAttribute((isset($context["current_filter_data"]) ? $context["current_filter_data"] : null), "name", array()) == "search")) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
            if (($this->getAttribute($context["user"], "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
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
            if ( !(null === (isset($context["mainPhoto"]) ? $context["mainPhoto"] : null))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mainPhoto"]) ? $context["mainPhoto"] : null), "name", array()), "html", null, true);
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
            if (($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
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
        echo $this->env->getExtension('knp_pagination')->render((isset($context["users"]) ? $context["users"] : null));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 359
                echo "                ";
                if (twig_test_iterable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"))) {
                    // line 360
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"));
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
        if ((null != (isset($context["current_report"]) ? $context["current_report"] : null))) {
            // line 371
            echo "            <input type=\"hidden\" name=\"reportId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_report"]) ? $context["current_report"] : null), "id", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 373
        echo "
        <input type=\"hidden\" name=\"fileName\" value=\"\">

        <input type=\"submit\" class=\"hidden\">

    </form>





";
    }

    public function getTemplateName()
    {
        return ":backend/users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 373,  657 => 371,  655 => 370,  651 => 368,  648 => 367,  642 => 366,  632 => 364,  629 => 363,  616 => 361,  611 => 360,  608 => 359,  603 => 358,  601 => 357,  584 => 343,  576 => 337,  557 => 332,  548 => 329,  544 => 328,  530 => 317,  519 => 311,  513 => 310,  510 => 309,  506 => 307,  504 => 306,  501 => 305,  495 => 303,  493 => 302,  490 => 301,  484 => 299,  482 => 298,  478 => 296,  474 => 294,  469 => 291,  467 => 289,  466 => 288,  465 => 287,  464 => 284,  461 => 283,  456 => 280,  454 => 278,  453 => 277,  452 => 276,  451 => 273,  448 => 272,  446 => 271,  442 => 269,  440 => 267,  439 => 266,  438 => 265,  437 => 262,  434 => 261,  432 => 260,  428 => 258,  426 => 256,  425 => 255,  424 => 254,  423 => 251,  420 => 250,  418 => 249,  415 => 248,  413 => 247,  407 => 244,  403 => 243,  399 => 242,  395 => 241,  388 => 239,  385 => 238,  383 => 237,  378 => 234,  371 => 229,  369 => 228,  364 => 225,  347 => 224,  312 => 191,  306 => 187,  304 => 186,  200 => 85,  197 => 84,  187 => 80,  183 => 79,  179 => 78,  170 => 75,  166 => 74,  156 => 66,  142 => 55,  136 => 52,  125 => 43,  123 => 42,  115 => 36,  108 => 34,  101 => 30,  97 => 29,  91 => 28,  85 => 27,  82 => 26,  79 => 25,  76 => 24,  73 => 23,  70 => 22,  67 => 21,  64 => 20,  62 => 19,  59 => 18,  57 => 17,  54 => 16,  50 => 15,  43 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
