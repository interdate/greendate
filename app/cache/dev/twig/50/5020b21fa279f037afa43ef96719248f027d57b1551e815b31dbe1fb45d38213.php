<?php

/* frontend/layout.html.twig */
class __TwigTemplate_b5c2f9d8e922adb59417c0d19c461a5b47aced2ae30084ce6ff7aa81064e84d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/main_layout.html.twig", "frontend/layout.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend/main_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d933831f3e69bee01d54256aeb9bdfb04a11e8e95e4faa907e24ebe79aec722 = $this->env->getExtension("native_profiler");
        $__internal_3d933831f3e69bee01d54256aeb9bdfb04a11e8e95e4faa907e24ebe79aec722->enter($__internal_3d933831f3e69bee01d54256aeb9bdfb04a11e8e95e4faa907e24ebe79aec722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d933831f3e69bee01d54256aeb9bdfb04a11e8e95e4faa907e24ebe79aec722->leave($__internal_3d933831f3e69bee01d54256aeb9bdfb04a11e8e95e4faa907e24ebe79aec722_prof);

    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        $__internal_da1c10ca2676058b0c63af6603f45a6f965963e42a973e7e35310a75e9e2c9e1 = $this->env->getExtension("native_profiler");
        $__internal_da1c10ca2676058b0c63af6603f45a6f965963e42a973e7e35310a75e9e2c9e1->enter($__internal_da1c10ca2676058b0c63af6603f45a6f965963e42a973e7e35310a75e9e2c9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 5
        echo "
    ";
        // line 6
        $context["routeName"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 7
        echo "    ";
        $context["routeArr"] = twig_split_filter($this->env, (isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")), "_");
        // line 8
        echo "    ";
        $context["parentPageName"] = $this->getAttribute((isset($context["routeArr"]) ? $context["routeArr"] : $this->getContext($context, "routeArr")), 0, array(), "array");
        // line 9
        echo "

    ";
        // line 11
        if ((((isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")) == "user_users_online") ||  !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 12
            echo "        ";
            $context["sidebarHeader"] = "חברים חדשים";
            // line 13
            echo "        ";
            $context["sidebarHeaderLink"] = $this->env->getExtension('routing')->getPath("user_homepage");
            // line 14
            echo "        ";
            $context["sidebarUsers"] = $this->env->getExtension('app_extension')->getNewUsersFunction();
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["sidebarHeader"] = "Online";
            // line 17
            echo "        ";
            $context["sidebarHeaderLink"] = $this->env->getExtension('routing')->getPath("user_users_online");
            // line 18
            echo "        ";
            $context["sidebarUsers"] = $this->env->getExtension('app_extension')->getUsersOnlineFunction();
            // line 19
            echo "        ";
            $context["sidebarStat"] = true;
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 23
            echo "
        ";
            // line 24
            $context["statistics"] = $this->env->getExtension('app_extension')->getStatisticsFunction();
            // line 25
            echo "        ";
            $context["sidebarStat"] = false;
            // line 26
            echo "
        <div class=\"bottom_menu\">

            <div class=\"item chat first ";
            // line 29
            if (((isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")) == "messenger")) {
                echo "active";
            }
            echo "\" onclick=\"window.location.href = '";
            echo $this->env->getExtension('routing')->getPath("messenger");
            echo "'\">
                <div class=\"lnk\">
                    <span>הודעות</span>
                </div>
                <div class=\"number ";
            // line 33
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "newMessagesNumber", array()) == 0)) {
                echo "hidden";
            }
            echo "\">
                    <div>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "newMessagesNumber", array()), "html", null, true);
            echo "</div>
                </div>
            </div>
            <div class=\"item notifications\" onclick=\"window.location.href = '/'\">
                <div class=\"lnk\">
                    <span>התראות</span>
                </div>
                ";
            // line 44
            echo "            </div>
            <div class=\"item arena\" onclick=\"window.location.href = '/'\">
                <div class=\"lnk\">
                    <span>הזירה</span>
                </div>
            </div>

            <div class=\"item online last ";
            // line 51
            if (((isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")) == "user_users_online")) {
                echo "active";
            }
            echo "\" onclick=\"window.location.href = '";
            echo $this->env->getExtension('routing')->getPath("user_users_online");
            echo "'\">
                <div class=\"lnk\">
                    <span>אונליין</span>
                </div>
            </div>


        </div>


    ";
        }
        // line 62
        echo "





<div class=\"main-container\">

    <div class=\"headerinn\">
        <div class=\"topbar\">
            ";
        // line 72
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 73
            echo "                <ul class=\"wrap clearfix\">
                    <li>
                        <a href=\"#popup1\" class=\"view_my_profile\">
                            <span class=\"uimg\">
                                <img src=\"\" alt=\"\"></span> <span class=\"uname\">היי ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                <input id=\"top_thumb\" type=\"hidden\" value=\"";
            // line 78
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getMainPhoto", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getMainPhoto", array()), "name", array()), "html", null, true);
            }
            echo "\">
                            </span>
                            <input type=\"hidden\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "\" id=\"my_user_id\">
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"logout\">(התנתקות)</a>
                    </li>
                </ul>
            ";
        } else {
            // line 88
            echo "            \t<div class=\"form wrap clearfix\">
                    <form action=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\" id=\"login_form\">
                     \t<input type=\"text\" placeholder=\"שם משתמש או דוא״ל\" class=\"txtbox\" name=\"_username\" value=\"\" />
                      \t<input type=\"password\" placeholder=\"סיסמה\" class=\"txtbox\" name=\"_password\" />
                     \t<input type=\"button\" value=\"כניסה\" class=\"btn\" onclick=\"\$('#login_form').submit();\" />
                       \t<a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("password_recovery");
            echo "\" class=\"forgot-pwd\">שכחת את הסיסמה?</a>
                       \t<input type=\"hidden\" name=\"_target_path\" value=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">
                       \t<div class=\"clearfix\"></div>
                  \t</form>
            \t</div>
            ";
        }
        // line 99
        echo "        </div>

        <div class=\"logo-menu\">
            <div class=\"wrap clearfix\">
                <div class=\"innlogo\"><a href=\"/\"><img src=\"/images/logo.png\" alt=\"\"></a></div>

                <div class=\"menu\">
                    <a href=\"#\" class=\"tglmenu\"></a>
                    <div id=\"menu\">
                        <ul>
                            <li><a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("user_homepage");
        echo "\"";
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : $this->getContext($context, "parentPageName")) == "user")) {
            echo " class=\"active\"";
        }
        echo ">עמוד הבית</a></li>
                            ";
        // line 110
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 111
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("messenger");
            echo "\"";
            if (((isset($context["parentPageName"]) ? $context["parentPageName"] : $this->getContext($context, "parentPageName")) == "messenger")) {
                echo " class=\"active\"";
            }
            echo ">הודעות</a></li>
                            ";
        }
        // line 113
        echo "                            <li class=\"desktop\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("magazine");
        echo "\"";
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : $this->getContext($context, "parentPageName")) == "magazine")) {
            echo " class=\"active\"";
        }
        echo ">מגזין</a></li>
                            ";
        // line 115
        echo "                            ";
        // line 116
        echo "
                            ";
        // line 118
        echo "                            
                            ";
        // line 119
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 120
            echo "                            \t<li class=\"mobileli\">
\t\t                        \t<a href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("mobile_user_lists");
            echo "\"";
            if (((isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")) == "mobile_user_lists")) {
                echo " class=\"active\"";
            }
            echo ">רשימות</a>
\t\t                    \t</li>
\t\t                    \t<li class=\"mobileli\">
\t\t                        \t<a href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("mobile_user_account");
            echo "\"";
            if (((isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")) == "mobile_user_account")) {
                echo " class=\"active\"";
            }
            echo ">ניהול חשבון</a>
\t\t                    \t</li>
            \t\t\t\t";
        }
        // line 127
        echo "            \t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("faq");
        echo "\"";
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : $this->getContext($context, "parentPageName")) == "faq")) {
            echo " class=\"active\"";
        }
        echo ">שאלות ותשובות</a></li>
            \t\t\t\t<li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"";
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : $this->getContext($context, "parentPageName")) == "contact")) {
            echo " class=\"active\"";
        }
        echo ">צור קשר</a></li>
            \t\t\t\t";
        // line 129
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 130
            echo "            \t\t\t\t\t<li class=\"mobileli\">
\t\t                        \t<a href=\"";
            // line 131
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"logout\">התנתקות</a>
\t\t                    \t</li>
\t\t                    ";
        }
        // line 134
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- headerinn end -->


    <div class=\"innercont\">
        <div class=\"wrap clearfix\">
            
            ";
        // line 146
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "users_public_list_user")) {
            // line 147
            echo "
                <div class=\"asideL desktop\">
                    <div class=\"greybox\">
                        ";
            // line 150
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 151
                echo "                            <h3 class=\"clearfix\">";
                if ((isset($context["sidebarStat"]) ? $context["sidebarStat"] : $this->getContext($context, "sidebarStat"))) {
                    echo "<span>(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "users_online", array()), "html", null, true);
                    echo ")</span>";
                }
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["sidebarHeaderLink"]) ? $context["sidebarHeaderLink"] : $this->getContext($context, "sidebarHeaderLink")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["sidebarHeader"]) ? $context["sidebarHeader"] : $this->getContext($context, "sidebarHeader")), "html", null, true);
                echo "</a></h3>
                        ";
            } else {
                // line 153
                echo "                            <h3 class=\"clearfix\">";
                echo twig_escape_filter($this->env, (isset($context["sidebarHeader"]) ? $context["sidebarHeader"] : $this->getContext($context, "sidebarHeader")), "html", null, true);
                echo "</h3>
                        ";
            }
            // line 155
            echo "
                        <div class=\"greyboxmid clearfix\">

                            ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sidebarUsers"]) ? $context["sidebarUsers"] : $this->getContext($context, "sidebarUsers")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 159
                echo "                                ";
                // line 160
                echo "
                                ";
                // line 161
                $context["linkAttribs"] = (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ("") : (("href=" . $this->env->getExtension('routing')->getPath("sign_up"))));
                // line 162
                echo "
                                <div class=\"rptimgbox boxcont\"
                                 data-position=\"top right\"
                                 data-title=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\"
                                 data-content=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "age", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "region", array()), "name", array()), "html", null, true);
                echo "\">

                                    <input type=\"hidden\" class=\"userId\" value=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                    <input type=\"hidden\" class=\"userGenderId\" value=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "gender", array()), "id", array()), "html", null, true);
                echo "\">
                                    <a ";
                // line 170
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    echo "class=\"f1\" href=\"#popup1\"";
                } else {
                    echo "href=\"";
                    echo $this->env->getExtension('routing')->getPath("sign_up");
                }
                echo "\">
                                        <img src=\"\" alt=\"\" class=\"sidebarPhoto\">
                                        <input type=\"hidden\" value=\"";
                // line 172
                if ( !(null === $this->getAttribute($context["user"], "getMainPhoto", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "getMainPhoto", array()), "name", array()), "html", null, true);
                }
                echo "\">
                                    </a>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "
                        </div>
                    </div>
                </div>
                <!-- asideL end -->

            ";
        }
        // line 183
        echo "

            ";
        // line 185
        $this->displayBlock('content', $context, $blocks);
        // line 186
        echo "

\t\t\t";
        // line 220
        echo "
            <div class=\"asideR\">
                ";
        // line 222
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 223
            echo "
                    <div class=\"greybox2 desktop\">
                        ";
            // line 228
            echo "                        <ul>
                            ";
            // line 230
            echo "

                            <li>
                                <a href=\"";
            // line 233
            echo $this->env->getExtension('routing')->getPath("messenger");
            echo "\"><i><img src=\"/images/icon2.png\" alt=\"\" /></i>
                                    <span class=\"oline\">
                                         הודעות חדשות
                                        (";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "newMessagesNumber", array()), "html", null, true);
            echo ")
                                    </span>

                                </a>
                            </li>

                            <li>
                                <a href=\"";
            // line 243
            echo $this->env->getExtension('routing')->getPath("user_users_online");
            echo " \"><i><img src=\"/images/icon3.png\" alt=\"\" /></i>
                                    <span>
                                        חברים אונליין
                                        (";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "users_online", array()), "html", null, true);
            echo ")
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end -->

                    <div class=\"greybox desktop\">
                        <a href=\"#\" class=\"tgl\">רשימות</a>
                        <h3>רשימות</h3>
                        <div class=\"greyboxmid\">
                            <ul>
                                <li>
                                    <a href=\"";
            // line 260
            echo $this->env->getExtension('routing')->getPath("user_list_viewed_me");
            echo "\">
                                        <i><img src=\"/images/right-menu-2.png\" alt=\"\" /></i> צפו בי
                                        ";
            // line 262
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "viewedMe", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "viewedMe", array()), "html", null, true);
                echo ")</span>";
            }
            // line 263
            echo "                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 266
            echo $this->env->getExtension('routing')->getPath("user_list_viewed");
            echo "\">
                                        <i><img src=\"/images/right-menu-3.png\" alt=\"\" /></i> צפיתי בהם
                                        ";
            // line 268
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "viewed", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "viewed", array()), "html", null, true);
                echo ")</span>";
            }
            // line 269
            echo "                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 272
            echo $this->env->getExtension('routing')->getPath("user_list_connected");
            echo "\">
                                        <i><img src=\"/images/right-menu-4.png\" alt=\"\" /></i> פניתי אליהם
                                        ";
            // line 274
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "connected", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "connected", array()), "html", null, true);
                echo ")</span>";
            }
            // line 275
            echo "                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 278
            echo $this->env->getExtension('routing')->getPath("user_list_connected_me");
            echo "\">
                                        <i><img src=\"/images/right-menu-5.png\" alt=\"\" /></i> פנו אלי
                                        ";
            // line 280
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "connectedMe", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "connectedMe", array()), "html", null, true);
                echo ")</span>";
            }
            // line 281
            echo "                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 284
            echo $this->env->getExtension('routing')->getPath("user_list_favorited");
            echo "\">
                                        <i><img src=\"/images/right-menu-6.png\" alt=\"\" /></i> צרפתי למועדפים
                                        ";
            // line 286
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "favorited", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "favorited", array()), "html", null, true);
                echo ")</span>";
            }
            // line 287
            echo "                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 290
            echo $this->env->getExtension('routing')->getPath("user_list_favorited_me");
            echo "\">
                                        <i><img src=\"/images/right-menu-7.png\" alt=\"\" /></i> צרפו אותי למועדפים
                                        ";
            // line 292
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "favoritedMe", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "favoritedMe", array()), "html", null, true);
                echo ")</span>";
            }
            // line 293
            echo "                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 296
            echo $this->env->getExtension('routing')->getPath("user_list_black_listed");
            echo "\">
                                        <i><img src=\"/images/right-menu-8.png\" alt=\"\" /></i> חסומים
                                        ";
            // line 298
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "blacklisted", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "blacklisted", array()), "html", null, true);
                echo ")</span>";
            }
            // line 299
            echo "                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end -->

                    ";
            // line 306
            $context["sidebarForm"] = $this->env->getExtension('app_extension')->getQuickSearchSidebarFormFunction();
            // line 307
            echo "
                    <div class=\"greybox3 desktop\">
                        <h3 class=\"tgl_qs\">חיפוש מהיר</h3>
                        <form action=\"";
            // line 310
            echo $this->env->getExtension('routing')->getPath("user_search_results");
            echo "\" method=\"post\" id=\"quick_search_sidebar_form\">

                            <div class=\"field\">
                                <label>";
            // line 313
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "ageFrom", array()), 'label');
            echo "</label>
                                <div class=\"field2\">
                                    <div class=\"select\">
                                        ";
            // line 316
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "ageTo", array()), 'widget');
            echo "
                                    </div>
                                    <span>";
            // line 318
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "ageTo", array()), 'label');
            echo "</span>
                                    <div class=\"select\">
                                        ";
            // line 320
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "ageFrom", array()), 'widget');
            echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"field\">
                                <label>";
            // line 326
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "region", array()), 'label');
            echo "</label>
                                <div class=\"field2 sidebarCheckboxes\">
                                    <div class=\"half\">
                                        ";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "region", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 330
                echo "                                        ";
                if (($this->getAttribute($context["loop"], "index", array()) == 6)) {
                    // line 331
                    echo "                                    </div>
                                    <div class=\"half\">
                                        ";
                }
                // line 334
                echo "                                        <span class=\"chkbox\">
                                            <div class=\"ui checkbox region\">
                                                ";
                // line 336
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'widget');
                echo "
                                                ";
                // line 337
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'label');
                echo "
                                            </div>
                                        </span>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "                                    </div>
                                    <div class=\"half\">

                                    </div>
                                </div>
                            </div>

                            <div class=\"field\">
                                <label>";
            // line 349
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "type", array()), 'label');
            echo "</label>
                                <div class=\"field2 cb sidebarCheckboxes\">
                                    ";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "type", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 352
                echo "                                        <div class=\"ui checkbox type\">
                                            ";
                // line 353
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'widget');
                echo "
                                            ";
                // line 354
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'label');
                echo "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            echo "                                </div>
                            </div>

                            <div class=\"field\">
                                <label>";
            // line 361
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "username", array()), 'label');
            echo "</label>
                                <div class=\"field2\">
                                    ";
            // line 363
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), "username", array()), 'widget');
            echo "
                                    <input type=\"submit\" value=\"חפש\" class=\"btn\" />
                                </div>
                            </div>

                            ";
            // line 368
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["sidebarForm"]) ? $context["sidebarForm"] : $this->getContext($context, "sidebarForm")), 'rest');
            echo "



                        </form>
                    </div>
                    <!-- end -->

                    <div class=\"greybox desktop\">
                        <a href=\"#\" class=\"tgl\">ניהול חשבון</a>
                        <h3>ניהול חשבון</h3>
                        <div class=\"greyboxmid\">
                            <ul>
                                <li><a href=\"";
            // line 381
            echo $this->env->getExtension('routing')->getPath("user_profile");
            echo "\"><i><img src=\"/images/right-menu-9.png\" alt=\"\" /></i> עריכת פרופיל</a></li>
                                <li><a href=\"";
            // line 382
            echo $this->env->getExtension('routing')->getPath("user_profile", array("tab" => 4));
            echo "\"><i><img src=\"/images/right-menu-10.png\" alt=\"\" /></i> עריכת תמונות</a></li>
                                <li><a href=\"";
            // line 383
            echo $this->env->getExtension('routing')->getPath("user_manage_list_favorited");
            echo "\"><i><img src=\"/images/right-menu-11.png\" alt=\"\" /></i> ניהול רשימת מועדפים</a></li>
                                <li><a href=\"";
            // line 384
            echo $this->env->getExtension('routing')->getPath("user_change_password");
            echo "\"><i><img src=\"/images/right-menu-12.png\" alt=\"\" /></i> עדכון סיסמה</a></li>
                                ";
            // line 386
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_manage_list_black_listed");
            echo "\"><i><img src=\"/images/right-menu-14.png\" alt=\"\" /></i> ניהול רשימת חסומים</a></li>
                                <li><a href=\"";
            // line 387
            echo $this->env->getExtension('routing')->getPath("user_freeze_account");
            echo "\"><i><img src=\"/images/right-menu-15.png\" alt=\"\" /></i> הקפאת חשבון</a></li>
                                <li><a href=\"";
            // line 388
            echo $this->env->getExtension('routing')->getPath("user_search_advanced");
            echo "\"><i><img src=\"/images/right-menu-16.png\" alt=\"\" /></i> חיפוש מתקדם</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end -->
                ";
        }
        // line 394
        echo "
                ";
        // line 395
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 396
            echo "                    ";
            // line 399
            echo "                ";
        } else {
            // line 400
            echo "                    <div class=\"greybox2 ad\">
                        <a href=\"";
            // line 401
            echo $this->env->getExtension('routing')->getPath("sign_up");
            echo "\"><img src=\"/images/free_reg_banner.png\" alt=\"\" /></a>
                    </div>
                ";
        }
        // line 404
        echo "                <!-- end -->
            </div>

            <!-- asideR end -->
        </div>
    </div>
    <!-- innercont end -->


</div><!-- Main Container -->

<input type=\"hidden\" id=\"no_photo_url_1\" value=\"/images/no_photo_1.jpg\">
<input type=\"hidden\" id=\"no_photo_url_2\" value=\"/images/no_photo_2.jpg\">

";
        // line 418
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 419
            echo "
    <input type=\"hidden\" id=\"current_user_gender\" value=\"";
            // line 420
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array()), "id", array()), "html", null, true);
            echo "\">
    <input type=\"hidden\" id=\"search_filter_by_default\" value=\"lastActivity\">
    <input type=\"hidden\" id=\"search_url_when_switching_filter\" value=\"";
            // line 422
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requesturi", array()), "html", null, true);
            echo "\">

";
        } else {
            // line 425
            echo "    <input type=\"hidden\" id=\"search_url_when_switching_filter\" value=\"";
            echo $this->env->getExtension('routing')->getPath("users_public_list", array("page" => 1));
            echo "\">
";
        }
        // line 427
        echo "

";
        
        $__internal_da1c10ca2676058b0c63af6603f45a6f965963e42a973e7e35310a75e9e2c9e1->leave($__internal_da1c10ca2676058b0c63af6603f45a6f965963e42a973e7e35310a75e9e2c9e1_prof);

    }

    // line 185
    public function block_content($context, array $blocks = array())
    {
        $__internal_6cdf895dff6ae897e65c98eaa55d19c71da071b3e1890df3b1d9fd56fa3ed170 = $this->env->getExtension("native_profiler");
        $__internal_6cdf895dff6ae897e65c98eaa55d19c71da071b3e1890df3b1d9fd56fa3ed170->enter($__internal_6cdf895dff6ae897e65c98eaa55d19c71da071b3e1890df3b1d9fd56fa3ed170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6cdf895dff6ae897e65c98eaa55d19c71da071b3e1890df3b1d9fd56fa3ed170->leave($__internal_6cdf895dff6ae897e65c98eaa55d19c71da071b3e1890df3b1d9fd56fa3ed170_prof);

    }

    public function getTemplateName()
    {
        return "frontend/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  888 => 185,  879 => 427,  873 => 425,  867 => 422,  862 => 420,  859 => 419,  857 => 418,  841 => 404,  835 => 401,  832 => 400,  829 => 399,  827 => 396,  825 => 395,  822 => 394,  813 => 388,  809 => 387,  804 => 386,  800 => 384,  796 => 383,  792 => 382,  788 => 381,  772 => 368,  764 => 363,  759 => 361,  753 => 357,  744 => 354,  740 => 353,  737 => 352,  733 => 351,  728 => 349,  718 => 341,  700 => 337,  696 => 336,  692 => 334,  687 => 331,  684 => 330,  667 => 329,  661 => 326,  652 => 320,  647 => 318,  642 => 316,  636 => 313,  630 => 310,  625 => 307,  623 => 306,  614 => 299,  608 => 298,  603 => 296,  598 => 293,  592 => 292,  587 => 290,  582 => 287,  576 => 286,  571 => 284,  566 => 281,  560 => 280,  555 => 278,  550 => 275,  544 => 274,  539 => 272,  534 => 269,  528 => 268,  523 => 266,  518 => 263,  512 => 262,  507 => 260,  490 => 246,  484 => 243,  474 => 236,  468 => 233,  463 => 230,  460 => 228,  456 => 223,  454 => 222,  450 => 220,  446 => 186,  444 => 185,  440 => 183,  431 => 176,  419 => 172,  409 => 170,  405 => 169,  401 => 168,  394 => 166,  390 => 165,  385 => 162,  383 => 161,  380 => 160,  378 => 159,  374 => 158,  369 => 155,  363 => 153,  349 => 151,  347 => 150,  342 => 147,  340 => 146,  326 => 134,  320 => 131,  317 => 130,  315 => 129,  307 => 128,  298 => 127,  288 => 124,  278 => 121,  275 => 120,  273 => 119,  270 => 118,  267 => 116,  265 => 115,  256 => 113,  246 => 111,  244 => 110,  236 => 109,  224 => 99,  216 => 94,  212 => 93,  205 => 89,  202 => 88,  195 => 84,  188 => 80,  181 => 78,  177 => 77,  171 => 73,  169 => 72,  157 => 62,  139 => 51,  130 => 44,  120 => 34,  114 => 33,  103 => 29,  98 => 26,  95 => 25,  93 => 24,  90 => 23,  88 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  61 => 13,  58 => 12,  56 => 11,  52 => 9,  49 => 8,  46 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'frontend/main_layout.html.twig' %}*/
/* */
/* */
/* {% block container %}*/
/* */
/*     {% set routeName = app.request.get('_route') %}*/
/*     {% set routeArr = routeName|split('_') %}*/
/*     {% set parentPageName = routeArr[0] %}*/
/* */
/* */
/*     {% if routeName == 'user_users_online' or not app.user %}*/
/*         {% set sidebarHeader = 'חברים חדשים' %}*/
/*         {% set sidebarHeaderLink = path('user_homepage') %}*/
/*         {% set sidebarUsers = getNewUsers() %}*/
/*     {% else %}*/
/*         {% set sidebarHeader = 'Online' %}*/
/*         {% set sidebarHeaderLink = path('user_users_online') %}*/
/*         {% set sidebarUsers = getUsersOnline() %}*/
/*         {% set sidebarStat = true %}*/
/*     {% endif %}*/
/* */
/*     {% if app.user %}*/
/* */
/*         {% set statistics = getStatistics() %}*/
/*         {% set sidebarStat = false %}*/
/* */
/*         <div class="bottom_menu">*/
/* */
/*             <div class="item chat first {% if routeName == 'messenger' %}active{% endif %}" onclick="window.location.href = '{{ path('messenger') }}'">*/
/*                 <div class="lnk">*/
/*                     <span>הודעות</span>*/
/*                 </div>*/
/*                 <div class="number {% if statistics.newMessagesNumber == 0  %}hidden{% endif %}">*/
/*                     <div>{{ statistics.newMessagesNumber }}</div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="item notifications" onclick="window.location.href = '/'">*/
/*                 <div class="lnk">*/
/*                     <span>התראות</span>*/
/*                 </div>*/
/*                 {#<div class="number">*/
/*                     <div>4</div>*/
/*                 </div>#}*/
/*             </div>*/
/*             <div class="item arena" onclick="window.location.href = '/'">*/
/*                 <div class="lnk">*/
/*                     <span>הזירה</span>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="item online last {% if routeName == 'user_users_online' %}active{% endif %}" onclick="window.location.href = '{{ path('user_users_online') }}'">*/
/*                 <div class="lnk">*/
/*                     <span>אונליין</span>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/* */
/*     {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* <div class="main-container">*/
/* */
/*     <div class="headerinn">*/
/*         <div class="topbar">*/
/*             {% if app.user %}*/
/*                 <ul class="wrap clearfix">*/
/*                     <li>*/
/*                         <a href="#popup1" class="view_my_profile">*/
/*                             <span class="uimg">*/
/*                                 <img src="" alt=""></span> <span class="uname">היי {{ app.user.username }}*/
/*                                 <input id="top_thumb" type="hidden" value="{% if app.user.getMainPhoto is not null %}{{ app.user.getMainPhoto.name }}{% endif %}">*/
/*                             </span>*/
/*                             <input type="hidden" value="{{ app.user.id }}" id="my_user_id">*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('logout') }}" class="logout">(התנתקות)</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             {% else %}*/
/*             	<div class="form wrap clearfix">*/
/*                     <form action="{{ path('login_check') }}" method="post" id="login_form">*/
/*                      	<input type="text" placeholder="שם משתמש או דוא״ל" class="txtbox" name="_username" value="" />*/
/*                       	<input type="password" placeholder="סיסמה" class="txtbox" name="_password" />*/
/*                      	<input type="button" value="כניסה" class="btn" onclick="$('#login_form').submit();" />*/
/*                        	<a href="{{ path('password_recovery') }}" class="forgot-pwd">שכחת את הסיסמה?</a>*/
/*                        	<input type="hidden" name="_target_path" value="{{ path('homepage') }}">*/
/*                        	<div class="clearfix"></div>*/
/*                   	</form>*/
/*             	</div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="logo-menu">*/
/*             <div class="wrap clearfix">*/
/*                 <div class="innlogo"><a href="/"><img src="/images/logo.png" alt=""></a></div>*/
/* */
/*                 <div class="menu">*/
/*                     <a href="#" class="tglmenu"></a>*/
/*                     <div id="menu">*/
/*                         <ul>*/
/*                             <li><a href="{{ path('user_homepage') }}"{% if parentPageName == 'user' %} class="active"{% endif %}>עמוד הבית</a></li>*/
/*                             {% if app.user %}*/
/*                                 <li><a href="{{ path('messenger') }}"{% if parentPageName == 'messenger' %} class="active"{% endif %}>הודעות</a></li>*/
/*                             {% endif %}*/
/*                             <li class="desktop"><a href="{{ path('magazine') }}"{% if parentPageName == 'magazine' %} class="active"{% endif %}>מגזין</a></li>*/
/*                             {#<li><a href="#">בלוגים</a></li>#}*/
/*                             {#<li><a href="#">פורומים</a></li>#}*/
/* */
/*                             {#<li><a href="#">לרכישת מנוי</a></li>#}*/
/*                             */
/*                             {% if app.user %}*/
/*                             	<li class="mobileli">*/
/* 		                        	<a href="{{ path('mobile_user_lists') }}"{% if routeName == 'mobile_user_lists' %} class="active"{% endif %}>רשימות</a>*/
/* 		                    	</li>*/
/* 		                    	<li class="mobileli">*/
/* 		                        	<a href="{{ path('mobile_user_account') }}"{% if routeName == 'mobile_user_account' %} class="active"{% endif %}>ניהול חשבון</a>*/
/* 		                    	</li>*/
/*             				{% endif %}*/
/*             				<li><a href="{{ path('faq') }}"{% if parentPageName == 'faq' %} class="active"{% endif %}>שאלות ותשובות</a></li>*/
/*             				<li><a href="{{ path('contact') }}"{% if parentPageName == 'contact' %} class="active"{% endif %}>צור קשר</a></li>*/
/*             				{% if app.user %}*/
/*             					<li class="mobileli">*/
/* 		                        	<a href="{{ path('logout') }}" class="logout">התנתקות</a>*/
/* 		                    	</li>*/
/* 		                    {% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- headerinn end -->*/
/* */
/* */
/*     <div class="innercont">*/
/*         <div class="wrap clearfix">*/
/*             */
/*             {% if app.request.attributes.get('_route') != 'users_public_list_user' %}*/
/* */
/*                 <div class="asideL desktop">*/
/*                     <div class="greybox">*/
/*                         {% if app.user %}*/
/*                             <h3 class="clearfix">{% if sidebarStat %}<span>({{ statistics.users_online }})</span>{% endif %} <a href="{{ sidebarHeaderLink }}">{{ sidebarHeader }}</a></h3>*/
/*                         {% else %}*/
/*                             <h3 class="clearfix">{{ sidebarHeader }}</h3>*/
/*                         {% endif %}*/
/* */
/*                         <div class="greyboxmid clearfix">*/
/* */
/*                             {% for user in sidebarUsers %}*/
/*                                 {#{% set dataPos = loop.index % 2 == 0 ? 'right center' : 'left center' %}#}*/
/* */
/*                                 {% set linkAttribs = app.user ? '' : 'href=' ~ path('sign_up') %}*/
/* */
/*                                 <div class="rptimgbox boxcont"*/
/*                                  data-position="top right"*/
/*                                  data-title="{{ user.username }}"*/
/*                                  data-content="{{ user.age }}, {{ user.region.name }}">*/
/* */
/*                                     <input type="hidden" class="userId" value="{{ user.id }}">*/
/*                                     <input type="hidden" class="userGenderId" value="{{ user.gender.id }}">*/
/*                                     <a {% if app.user %}class="f1" href="#popup1"{% else %}href="{{ path('sign_up') }}{% endif %}">*/
/*                                         <img src="" alt="" class="sidebarPhoto">*/
/*                                         <input type="hidden" value="{% if user.getMainPhoto is not null %}{{ user.getMainPhoto.name }}{% endif %}">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- asideL end -->*/
/* */
/*             {% endif %}*/
/* */
/* */
/*             {% block content %}{% endblock %}*/
/* */
/* */
/* 			{#*/
/*             {% if app.request.attributes.get('_route') != 'users_public_list_user' %}*/
/*                 <div class="asideL mobile">*/
/*                     <div class="greybox">*/
/*                         {% if app.user %}*/
/*                             <h3 class="clearfix">{% if sidebarStat %}<span>({{ statistics.users_online }})</span>{% endif %} <a href="{{ sidebarHeaderLink }}">{{ sidebarHeader }}</a></h3>*/
/*                         {% else %}*/
/*                             <h3 class="clearfix">{{ sidebarHeader }}</h3>*/
/*                         {% endif %}*/
/* */
/*                         <div class="greyboxmid clearfix">*/
/*                             {% for user in sidebarUsers %}*/
/*                                 <div class="rptimgbox boxcont"*/
/*                                      data-position="top right"*/
/*                                      data-title="{{ user.username }}"*/
/*                                      data-content="{{ user.age }}, {{ user.region.name }}">*/
/* */
/*                                     <input type="hidden" class="userId" value="{{ user.id }}">*/
/*                                     <input type="hidden" class="userGenderId" value="{{ user.gender.id }}">*/
/* */
/*                                     <a {% if app.user %}class="f1" href="#popup1"{% else %}href="{{ path('sign_up') }}{% endif %}">*/
/*                                         <img src="" alt="" class="sidebarPhoto">*/
/*                                         <input type="hidden" value="{% if user.getMainPhoto is not null %}{{ user.getMainPhoto.name }}{% endif %}">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- asideL end -->*/
/*             {% endif %}*/
/* 			#}*/
/* */
/*             <div class="asideR">*/
/*                 {% if app.user %}*/
/* */
/*                     <div class="greybox2 desktop">*/
/*                         {#*/
/*                         <h3><span><a href="#" class="next"></a> <i><a href="#"><img src="/images/icon1.png" alt="" /></a></i> <a href="#" class="prev"></a></span> <a href="#" class="g2h">לזירה</a></h3>*/
/*                         #}*/
/*                         <ul>*/
/*                             {#<li><a href="#"><i><img src="/images/icon1.png" alt="" /></i> <span class="oline">13 התראות מהזירה שלי</span></a></li>#}*/
/* */
/* */
/*                             <li>*/
/*                                 <a href="{{ path('messenger') }}"><i><img src="/images/icon2.png" alt="" /></i>*/
/*                                     <span class="oline">*/
/*                                          הודעות חדשות*/
/*                                         ({{ statistics.newMessagesNumber }})*/
/*                                     </span>*/
/* */
/*                                 </a>*/
/*                             </li>*/
/* */
/*                             <li>*/
/*                                 <a href="{{ path('user_users_online') }} "><i><img src="/images/icon3.png" alt="" /></i>*/
/*                                     <span>*/
/*                                         חברים אונליין*/
/*                                         ({{ statistics.users_online }})*/
/*                                     </span>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="greybox desktop">*/
/*                         <a href="#" class="tgl">רשימות</a>*/
/*                         <h3>רשימות</h3>*/
/*                         <div class="greyboxmid">*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_list_viewed_me') }}">*/
/*                                         <i><img src="/images/right-menu-2.png" alt="" /></i> צפו בי*/
/*                                         {% if statistics.viewedMe > 0 %}<span>({{ statistics.viewedMe }})</span>{% endif %}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_list_viewed') }}">*/
/*                                         <i><img src="/images/right-menu-3.png" alt="" /></i> צפיתי בהם*/
/*                                         {% if statistics.viewed > 0 %}<span>({{ statistics.viewed }})</span>{% endif %}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_list_connected') }}">*/
/*                                         <i><img src="/images/right-menu-4.png" alt="" /></i> פניתי אליהם*/
/*                                         {% if statistics.connected > 0 %}<span>({{ statistics.connected }})</span>{% endif %}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_list_connected_me') }}">*/
/*                                         <i><img src="/images/right-menu-5.png" alt="" /></i> פנו אלי*/
/*                                         {% if statistics.connectedMe > 0 %}<span>({{ statistics.connectedMe }})</span>{% endif %}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_list_favorited') }}">*/
/*                                         <i><img src="/images/right-menu-6.png" alt="" /></i> צרפתי למועדפים*/
/*                                         {% if statistics.favorited > 0 %}<span>({{ statistics.favorited }})</span>{% endif %}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_list_favorited_me') }}">*/
/*                                         <i><img src="/images/right-menu-7.png" alt="" /></i> צרפו אותי למועדפים*/
/*                                         {% if statistics.favoritedMe > 0 %}<span>({{ statistics.favoritedMe }})</span>{% endif %}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_list_black_listed') }}">*/
/*                                         <i><img src="/images/right-menu-8.png" alt="" /></i> חסומים*/
/*                                         {% if statistics.blacklisted > 0 %}<span>({{ statistics.blacklisted }})</span>{% endif %}*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     {% set sidebarForm = getQuickSearchSidebarForm() %}*/
/* */
/*                     <div class="greybox3 desktop">*/
/*                         <h3 class="tgl_qs">חיפוש מהיר</h3>*/
/*                         <form action="{{ path('user_search_results') }}" method="post" id="quick_search_sidebar_form">*/
/* */
/*                             <div class="field">*/
/*                                 <label>{{ form_label(sidebarForm.ageFrom) }}</label>*/
/*                                 <div class="field2">*/
/*                                     <div class="select">*/
/*                                         {{ form_widget(sidebarForm.ageTo) }}*/
/*                                     </div>*/
/*                                     <span>{{ form_label(sidebarForm.ageTo) }}</span>*/
/*                                     <div class="select">*/
/*                                         {{ form_widget(sidebarForm.ageFrom) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <label>{{ form_label(sidebarForm.region) }}</label>*/
/*                                 <div class="field2 sidebarCheckboxes">*/
/*                                     <div class="half">*/
/*                                         {% for region in sidebarForm.region %}*/
/*                                         {% if loop.index == 6 %}*/
/*                                     </div>*/
/*                                     <div class="half">*/
/*                                         {% endif %}*/
/*                                         <span class="chkbox">*/
/*                                             <div class="ui checkbox region">*/
/*                                                 {{ form_widget(region) }}*/
/*                                                 {{ form_label(region) }}*/
/*                                             </div>*/
/*                                         </span>*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                     <div class="half">*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <label>{{ form_label(sidebarForm.type) }}</label>*/
/*                                 <div class="field2 cb sidebarCheckboxes">*/
/*                                     {% for type in sidebarForm.type %}*/
/*                                         <div class="ui checkbox type">*/
/*                                             {{ form_widget(type) }}*/
/*                                             {{ form_label(type) }}*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <label>{{ form_label(sidebarForm.username) }}</label>*/
/*                                 <div class="field2">*/
/*                                     {{ form_widget(sidebarForm.username) }}*/
/*                                     <input type="submit" value="חפש" class="btn" />*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             {{ form_rest(sidebarForm) }}*/
/* */
/* */
/* */
/*                         </form>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="greybox desktop">*/
/*                         <a href="#" class="tgl">ניהול חשבון</a>*/
/*                         <h3>ניהול חשבון</h3>*/
/*                         <div class="greyboxmid">*/
/*                             <ul>*/
/*                                 <li><a href="{{ path('user_profile') }}"><i><img src="/images/right-menu-9.png" alt="" /></i> עריכת פרופיל</a></li>*/
/*                                 <li><a href="{{ path('user_profile', {'tab': 4}) }}"><i><img src="/images/right-menu-10.png" alt="" /></i> עריכת תמונות</a></li>*/
/*                                 <li><a href="{{ path('user_manage_list_favorited') }}"><i><img src="/images/right-menu-11.png" alt="" /></i> ניהול רשימת מועדפים</a></li>*/
/*                                 <li><a href="{{ path('user_change_password') }}"><i><img src="/images/right-menu-12.png" alt="" /></i> עדכון סיסמה</a></li>*/
/*                                 {#<li><a href="#"><i><img src="/images/right-menu-13.png" alt="" /></i> הגדרת הודעות</a></li>#}*/
/*                                 <li><a href="{{ path('user_manage_list_black_listed') }}"><i><img src="/images/right-menu-14.png" alt="" /></i> ניהול רשימת חסומים</a></li>*/
/*                                 <li><a href="{{ path('user_freeze_account') }}"><i><img src="/images/right-menu-15.png" alt="" /></i> הקפאת חשבון</a></li>*/
/*                                 <li><a href="{{ path('user_search_advanced') }}"><i><img src="/images/right-menu-16.png" alt="" /></i> חיפוש מתקדם</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/*                 {% endif %}*/
/* */
/*                 {% if app.user %}*/
/*                     {#<div class="greybox2 ad">*/
/*                         <a href="#"><img src="/images/ad.jpg" alt="" /></a>*/
/*                     </div>#}*/
/*                 {% else %}*/
/*                     <div class="greybox2 ad">*/
/*                         <a href="{{ path('sign_up') }}"><img src="/images/free_reg_banner.png" alt="" /></a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <!-- end -->*/
/*             </div>*/
/* */
/*             <!-- asideR end -->*/
/*         </div>*/
/*     </div>*/
/*     <!-- innercont end -->*/
/* */
/* */
/* </div><!-- Main Container -->*/
/* */
/* <input type="hidden" id="no_photo_url_1" value="/images/no_photo_1.jpg">*/
/* <input type="hidden" id="no_photo_url_2" value="/images/no_photo_2.jpg">*/
/* */
/* {% if app.user %}*/
/* */
/*     <input type="hidden" id="current_user_gender" value="{{ app.user.gender.id }}">*/
/*     <input type="hidden" id="search_filter_by_default" value="lastActivity">*/
/*     <input type="hidden" id="search_url_when_switching_filter" value="{{ app.request.requesturi }}">*/
/* */
/* {% else %}*/
/*     <input type="hidden" id="search_url_when_switching_filter" value="{{ path('users_public_list', {'page': 1}) }}">*/
/* {% endif %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
