<?php

/* frontend/layout.html.twig */
class __TwigTemplate_d8f2590efadbc5f3a118bfea8c7be125398197db91a015d6a24ac436974a2d82 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context["routeName"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method");
        // line 7
        echo "    ";
        $context["routeArr"] = twig_split_filter($this->env, (isset($context["routeName"]) ? $context["routeName"] : null), "_");
        // line 8
        echo "    ";
        $context["parentPageName"] = $this->getAttribute((isset($context["routeArr"]) ? $context["routeArr"] : null), 0, array(), "array");
        // line 9
        echo "

    ";
        // line 11
        if ((((isset($context["routeName"]) ? $context["routeName"] : null) == "user_users_online") ||  !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
            if (((isset($context["routeName"]) ? $context["routeName"] : null) == "messenger")) {
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
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "newMessagesNumber", array()) == 0)) {
                echo "hidden";
            }
            echo "\">
                    <div>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "newMessagesNumber", array()), "html", null, true);
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
            if (((isset($context["routeName"]) ? $context["routeName"] : null) == "user_users_online")) {
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 73
            echo "                <ul class=\"wrap clearfix\">
                    <li>
                        <a href=\"#popup1\" class=\"view_my_profile\">
                            <span class=\"uimg\">
                                <img src=\"\" alt=\"\"></span> <span class=\"uname\">היי ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "
                                <input id=\"top_thumb\" type=\"hidden\" value=\"";
            // line 78
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getMainPhoto", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getMainPhoto", array()), "name", array()), "html", null, true);
            }
            echo "\">
                            </span>
                            <input type=\"hidden\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
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
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "user")) {
            echo " class=\"active\"";
        }
        echo ">עמוד הבית</a></li>
                            ";
        // line 110
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 111
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("messenger");
            echo "\"";
            if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "messenger")) {
                echo " class=\"active\"";
            }
            echo ">הודעות</a></li>
                            ";
        }
        // line 113
        echo "                            <li class=\"desktop\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("magazine");
        echo "\"";
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "magazine")) {
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 120
            echo "                            \t<li class=\"mobileli\">
\t\t                        \t<a href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("mobile_user_lists");
            echo "\"";
            if (((isset($context["routeName"]) ? $context["routeName"] : null) == "mobile_user_lists")) {
                echo " class=\"active\"";
            }
            echo ">רשימות</a>
\t\t                    \t</li>
\t\t                    \t<li class=\"mobileli\">
\t\t                        \t<a href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("mobile_user_account");
            echo "\"";
            if (((isset($context["routeName"]) ? $context["routeName"] : null) == "mobile_user_account")) {
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
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "faq")) {
            echo " class=\"active\"";
        }
        echo ">שאלות ותשובות</a></li>
            \t\t\t\t<li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"";
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "contact")) {
            echo " class=\"active\"";
        }
        echo ">צור קשר</a></li>
            \t\t\t\t";
        // line 129
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "users_public_list_user")) {
            // line 147
            echo "
                <div class=\"asideL desktop\">
                    <div class=\"greybox\">
                        ";
            // line 150
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                // line 151
                echo "                            <h3 class=\"clearfix\">";
                if ((isset($context["sidebarStat"]) ? $context["sidebarStat"] : null)) {
                    echo "<span>(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "users_online", array()), "html", null, true);
                    echo ")</span>";
                }
                echo " <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["sidebarHeaderLink"]) ? $context["sidebarHeaderLink"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["sidebarHeader"]) ? $context["sidebarHeader"] : null), "html", null, true);
                echo "</a></h3>
                        ";
            } else {
                // line 153
                echo "                            <h3 class=\"clearfix\">";
                echo twig_escape_filter($this->env, (isset($context["sidebarHeader"]) ? $context["sidebarHeader"] : null), "html", null, true);
                echo "</h3>
                        ";
            }
            // line 155
            echo "
                        <div class=\"greyboxmid clearfix\">

                            ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sidebarUsers"]) ? $context["sidebarUsers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 159
                echo "                                ";
                // line 160
                echo "
                                ";
                // line 161
                $context["linkAttribs"] = (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) ? ("") : (("href=" . $this->env->getExtension('routing')->getPath("sign_up"))));
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
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "newMessagesNumber", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "users_online", array()), "html", null, true);
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
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "viewedMe", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "viewedMe", array()), "html", null, true);
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
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "viewed", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "viewed", array()), "html", null, true);
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
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "connected", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "connected", array()), "html", null, true);
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
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "connectedMe", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "connectedMe", array()), "html", null, true);
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
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "favorited", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "favorited", array()), "html", null, true);
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
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "favoritedMe", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "favoritedMe", array()), "html", null, true);
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
            if (($this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "blacklisted", array()) > 0)) {
                echo "<span>(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "blacklisted", array()), "html", null, true);
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "ageFrom", array()), 'label');
            echo "</label>
                                <div class=\"field2\">
                                    <div class=\"select\">
                                        ";
            // line 316
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "ageTo", array()), 'widget');
            echo "
                                    </div>
                                    <span>";
            // line 318
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "ageTo", array()), 'label');
            echo "</span>
                                    <div class=\"select\">
                                        ";
            // line 320
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "ageFrom", array()), 'widget');
            echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"field\">
                                <label>";
            // line 326
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "region", array()), 'label');
            echo "</label>
                                <div class=\"field2 sidebarCheckboxes\">
                                    <div class=\"half\">
                                        ";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "region", array()));
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "type", array()), 'label');
            echo "</label>
                                <div class=\"field2 cb sidebarCheckboxes\">
                                    ";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "type", array()));
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "username", array()), 'label');
            echo "</label>
                                <div class=\"field2\">
                                    ";
            // line 363
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "username", array()), 'widget');
            echo "
                                    <input type=\"submit\" value=\"חפש\" class=\"btn\" />
                                </div>
                            </div>

                            ";
            // line 368
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), 'rest');
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 396
            echo "                    <div class=\"greybox2 ad\">
                        <a href=\"#\"><img src=\"/images/ad.jpg\" alt=\"\" /></a>
                    </div>
                ";
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 419
            echo "
    <input type=\"hidden\" id=\"current_user_gender\" value=\"";
            // line 420
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "gender", array()), "id", array()), "html", null, true);
            echo "\">
    <input type=\"hidden\" id=\"search_filter_by_default\" value=\"lastActivity\">
    <input type=\"hidden\" id=\"search_url_when_switching_filter\" value=\"";
            // line 422
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array()), "html", null, true);
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
    }

    // line 185
    public function block_content($context, array $blocks = array())
    {
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
        return array (  877 => 185,  871 => 427,  865 => 425,  859 => 422,  854 => 420,  851 => 419,  849 => 418,  833 => 404,  827 => 401,  824 => 400,  818 => 396,  816 => 395,  813 => 394,  804 => 388,  800 => 387,  795 => 386,  791 => 384,  787 => 383,  783 => 382,  779 => 381,  763 => 368,  755 => 363,  750 => 361,  744 => 357,  735 => 354,  731 => 353,  728 => 352,  724 => 351,  719 => 349,  709 => 341,  691 => 337,  687 => 336,  683 => 334,  678 => 331,  675 => 330,  658 => 329,  652 => 326,  643 => 320,  638 => 318,  633 => 316,  627 => 313,  621 => 310,  616 => 307,  614 => 306,  605 => 299,  599 => 298,  594 => 296,  589 => 293,  583 => 292,  578 => 290,  573 => 287,  567 => 286,  562 => 284,  557 => 281,  551 => 280,  546 => 278,  541 => 275,  535 => 274,  530 => 272,  525 => 269,  519 => 268,  514 => 266,  509 => 263,  503 => 262,  498 => 260,  481 => 246,  475 => 243,  465 => 236,  459 => 233,  454 => 230,  451 => 228,  447 => 223,  445 => 222,  441 => 220,  437 => 186,  435 => 185,  431 => 183,  422 => 176,  410 => 172,  400 => 170,  396 => 169,  392 => 168,  385 => 166,  381 => 165,  376 => 162,  374 => 161,  371 => 160,  369 => 159,  365 => 158,  360 => 155,  354 => 153,  340 => 151,  338 => 150,  333 => 147,  331 => 146,  317 => 134,  311 => 131,  308 => 130,  306 => 129,  298 => 128,  289 => 127,  279 => 124,  269 => 121,  266 => 120,  264 => 119,  261 => 118,  258 => 116,  256 => 115,  247 => 113,  237 => 111,  235 => 110,  227 => 109,  215 => 99,  207 => 94,  203 => 93,  196 => 89,  193 => 88,  186 => 84,  179 => 80,  172 => 78,  168 => 77,  162 => 73,  160 => 72,  148 => 62,  130 => 51,  121 => 44,  111 => 34,  105 => 33,  94 => 29,  89 => 26,  86 => 25,  84 => 24,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  47 => 11,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
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
/*                     <div class="greybox2 ad">*/
/*                         <a href="#"><img src="/images/ad.jpg" alt="" /></a>*/
/*                     </div>*/
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
