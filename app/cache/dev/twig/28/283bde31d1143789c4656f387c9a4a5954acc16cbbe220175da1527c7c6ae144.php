<?php

/* frontend/user/users_list.html.twig */
class __TwigTemplate_844e9cb4ba80972eda6dde60472616f4b985960d9cc50d4a5e8b22d6481e8b4a extends Twig_Template
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
        $__internal_ce606d4104c80dabfc696c193438612f386ca3729160a0aa854ea2a51c0ac455 = $this->env->getExtension("native_profiler");
        $__internal_ce606d4104c80dabfc696c193438612f386ca3729160a0aa854ea2a51c0ac455->enter($__internal_ce606d4104c80dabfc696c193438612f386ca3729160a0aa854ea2a51c0ac455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/user/users_list.html.twig"));

        // line 1
        $context["settings"] = $this->env->getExtension('app_extension')->getSettingsFunction();
        // line 2
        $context["minutesNumberConsideredAsOnline"] = $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "userConsideredAsOnlineAfterLastActivityMinutesNumber", array());
        // line 3
        $context["daysNumberConsideredAsNew"] = $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getUserConsideredAsNewAfterDaysNumber", array());
        // line 4
        echo "

";
        // line 6
        $context["add_to_fav"] = true;
        // line 7
        $context["delete_from_fav"] = false;
        // line 8
        $context["add_to_black_list"] = true;
        // line 9
        $context["delete_from_black_list"] = false;
        // line 10
        echo "


";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_manage_list_favorited")) {
            // line 14
            echo "    ";
            $context["add_to_fav"] = false;
            // line 15
            echo "    ";
            $context["delete_from_fav"] = true;
        } else {
            // line 17
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_list_favorited")) {
                // line 18
                echo "        ";
                $context["add_to_fav"] = false;
                // line 19
                echo "    ";
            } else {
                // line 20
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_manage_list_black_listed")) {
                    // line 21
                    echo "            ";
                    $context["delete_from_black_list"] = true;
                    // line 22
                    echo "            ";
                    $context["add_to_black_list"] = false;
                    // line 23
                    echo "        ";
                } else {
                    // line 24
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_list_black_listed")) {
                        // line 25
                        echo "                ";
                        $context["add_to_black_list"] = false;
                        // line 26
                        echo "            ";
                    }
                    // line 27
                    echo "        ";
                }
                // line 28
                echo "
    ";
            }
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "    <div class=\"boxcont\">
        <input type=\"hidden\" class=\"userId\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
        <input type=\"hidden\" class=\"userGenderId\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "gender", array()), "id", array()), "html", null, true);
            echo "\">
        <div class=\"greyboxcont clearfix\">
            <div class=\"userimg\">
                <a class=\"f1\" href=\"#popup1\">
                    <img src=\"\" alt=\"\" class=\"resultsPhoto\">
                    <input type=\"hidden\" value=\"";
            // line 40
            if ( !(null === $this->getAttribute($context["user"], "getMainPhoto", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "getMainPhoto", array()), "name", array()), "html", null, true);
            }
            echo "\">
                </a>
                ";
            // line 42
            if ($this->getAttribute($context["user"], "isPaying", array())) {
                echo "<div class=\"queen-icon\"></div>";
            }
            // line 43
            echo "            </div>

            <div class=\"lftcontbox clearfix\">
                <div class=\"onlinediv clearfix\">
                    ";
            // line 47
            if ($this->getAttribute($context["user"], "isOnline", array(0 => (isset($context["minutesNumberConsideredAsOnline"]) ? $context["minutesNumberConsideredAsOnline"] : $this->getContext($context, "minutesNumberConsideredAsOnline"))), "method")) {
                // line 48
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messenger_dialog_open", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "contactId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                            <div class=\"imgbox\"><img src=\"/images/main-pg-online-icon.png\" alt=\"\"></div>
                            <div class=\"statustitle\">On<span>line</span></div>
                        </a>
                    ";
            }
            // line 53
            echo "                </div>
                <div class=\"subtitle clearfix\">
                    <div class=\"subtitletext\"><a class=\"f1\" href=\"#popup1\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"imgicon\">";
            // line 56
            if ($this->getAttribute($context["user"], "isNew", array(0 => (isset($context["daysNumberConsideredAsNew"]) ? $context["daysNumberConsideredAsNew"] : $this->getContext($context, "daysNumberConsideredAsNew"))), "method")) {
                echo "<img src=\"/images/main-pg-subtitle-icon.png\" alt=\"\">";
            }
            echo "</div>
                </div>

                <div class=\"midcontdes\">
                    ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "age", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "city", array()), "name", array()), "html", null, true);
            echo "
                    <br>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "relationshipStatus", array()), "name", array()), "html", null, true);
            echo "
                    <br>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "type", array()), "name", array()), "html", null, true);
            echo "
                </div>
                <div class=\"midcontdes\">
                    <strong>קצת עליי</strong>
                    ";
            // line 66
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["user"], "about", array())) > 50)) ? ((twig_slice($this->env, $this->getAttribute($context["user"], "about", array()), 0, 50) . "...")) : ($this->getAttribute($context["user"], "about", array()))), "html", null, true);
            echo "
                </div>
            </div>
        </div>

        <div class=\"lightgrey clearfix\">
            <ul class=\"smlinks clearfix\">
                ";
            // line 73
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute($context["user"], "id", array()))) {
                // line 74
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messenger_dialog_open", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "contactId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"><span>שלח הודעה</span></a></li>
                    <li><a class=\"f1\" href=\"#popup1\">לפרופיל המלא</a></li>

                    ";
                // line 77
                if ((isset($context["add_to_fav"]) ? $context["add_to_fav"] : $this->getContext($context, "add_to_fav"))) {
                    // line 78
                    echo "                        <li><a class=\"add_to_fav\" href=\"#\">הוסף למועדפים</a></li>
                    ";
                }
                // line 80
                echo "
                    ";
                // line 81
                if ((isset($context["delete_from_fav"]) ? $context["delete_from_fav"] : $this->getContext($context, "delete_from_fav"))) {
                    // line 82
                    echo "                        <li><a class=\"delete_from_fav\" href=\"#\">הסרה מרשימת המועדפים</a></li>
                    ";
                }
                // line 84
                echo "
                    ";
                // line 85
                if ((isset($context["add_to_black_list"]) ? $context["add_to_black_list"] : $this->getContext($context, "add_to_black_list"))) {
                    // line 86
                    echo "                        <li><a class=\"add_to_back_list\" href=\"#\">חסימה</a></li>
                    ";
                }
                // line 88
                echo "
                    ";
                // line 89
                if ((isset($context["delete_from_black_list"]) ? $context["delete_from_black_list"] : $this->getContext($context, "delete_from_black_list"))) {
                    // line 90
                    echo "                        <li><a class=\"delete_from_black_list\" href=\"#\">הסרה מרשימת החסומים</a></li>
                    ";
                }
                // line 92
                echo "
                ";
            }
            // line 94
            echo "            </ul>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "

";
        
        $__internal_ce606d4104c80dabfc696c193438612f386ca3729160a0aa854ea2a51c0ac455->leave($__internal_ce606d4104c80dabfc696c193438612f386ca3729160a0aa854ea2a51c0ac455_prof);

    }

    public function getTemplateName()
    {
        return "frontend/user/users_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 98,  232 => 94,  228 => 92,  224 => 90,  222 => 89,  219 => 88,  215 => 86,  213 => 85,  210 => 84,  206 => 82,  204 => 81,  201 => 80,  197 => 78,  195 => 77,  188 => 74,  186 => 73,  176 => 66,  169 => 62,  165 => 61,  159 => 60,  150 => 56,  146 => 55,  142 => 53,  133 => 48,  131 => 47,  125 => 43,  121 => 42,  114 => 40,  106 => 35,  102 => 34,  99 => 33,  95 => 32,  92 => 31,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  75 => 24,  72 => 23,  69 => 22,  66 => 21,  63 => 20,  60 => 19,  57 => 18,  54 => 17,  50 => 15,  47 => 14,  45 => 13,  40 => 10,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set settings = getSettings() %}*/
/* {% set minutesNumberConsideredAsOnline = settings.userConsideredAsOnlineAfterLastActivityMinutesNumber %}*/
/* {% set daysNumberConsideredAsNew = settings.getUserConsideredAsNewAfterDaysNumber %}*/
/* */
/* */
/* {% set add_to_fav = true %}*/
/* {% set delete_from_fav = false %}*/
/* {% set add_to_black_list = true %}*/
/* {% set delete_from_black_list = false %}*/
/* */
/* */
/* */
/* {% if app.request.attributes.get('_route') == 'user_manage_list_favorited' %}*/
/*     {% set add_to_fav = false %}*/
/*     {% set delete_from_fav = true %}*/
/* {% else %}*/
/*     {% if app.request.attributes.get('_route') == 'user_list_favorited' %}*/
/*         {% set add_to_fav = false %}*/
/*     {% else %}*/
/*         {% if app.request.attributes.get('_route') == 'user_manage_list_black_listed' %}*/
/*             {% set delete_from_black_list = true %}*/
/*             {% set add_to_black_list = false %}*/
/*         {% else %}*/
/*             {% if app.request.attributes.get('_route') == 'user_list_black_listed' %}*/
/*                 {% set add_to_black_list = false %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*     {% endif %}*/
/* {% endif %}*/
/* */
/* {% for user in users %}*/
/*     <div class="boxcont">*/
/*         <input type="hidden" class="userId" value="{{ user.id }}">*/
/*         <input type="hidden" class="userGenderId" value="{{ user.gender.id }}">*/
/*         <div class="greyboxcont clearfix">*/
/*             <div class="userimg">*/
/*                 <a class="f1" href="#popup1">*/
/*                     <img src="" alt="" class="resultsPhoto">*/
/*                     <input type="hidden" value="{% if user.getMainPhoto is not null %}{{ user.getMainPhoto.name }}{% endif %}">*/
/*                 </a>*/
/*                 {% if user.isPaying %}<div class="queen-icon"></div>{% endif %}*/
/*             </div>*/
/* */
/*             <div class="lftcontbox clearfix">*/
/*                 <div class="onlinediv clearfix">*/
/*                     {% if user.isOnline(minutesNumberConsideredAsOnline) %}*/
/*                         <a href="{{ path('messenger_dialog_open',{'userId': app.user.id, 'contactId': user.id}) }}">*/
/*                             <div class="imgbox"><img src="/images/main-pg-online-icon.png" alt=""></div>*/
/*                             <div class="statustitle">On<span>line</span></div>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="subtitle clearfix">*/
/*                     <div class="subtitletext"><a class="f1" href="#popup1">{{ user.username }}</a></div>*/
/*                     <div class="imgicon">{% if user.isNew(daysNumberConsideredAsNew) %}<img src="/images/main-pg-subtitle-icon.png" alt="">{% endif %}</div>*/
/*                 </div>*/
/* */
/*                 <div class="midcontdes">*/
/*                     {{ user.age }}, {{ user.city.name }}*/
/*                     <br>{{ user.relationshipStatus.name }}*/
/*                     <br>{{ user.type.name }}*/
/*                 </div>*/
/*                 <div class="midcontdes">*/
/*                     <strong>קצת עליי</strong>*/
/*                     {{ user.about|length > 50 ? user.about|slice(0, 50) ~ '...' : user.about  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="lightgrey clearfix">*/
/*             <ul class="smlinks clearfix">*/
/*                 {% if app.user.id != user.id %}*/
/*                     <li><a href="{{ path('messenger_dialog_open',{'userId': app.user.id, 'contactId': user.id}) }}"><span>שלח הודעה</span></a></li>*/
/*                     <li><a class="f1" href="#popup1">לפרופיל המלא</a></li>*/
/* */
/*                     {% if add_to_fav %}*/
/*                         <li><a class="add_to_fav" href="#">הוסף למועדפים</a></li>*/
/*                     {% endif %}*/
/* */
/*                     {% if delete_from_fav %}*/
/*                         <li><a class="delete_from_fav" href="#">הסרה מרשימת המועדפים</a></li>*/
/*                     {% endif %}*/
/* */
/*                     {% if add_to_black_list %}*/
/*                         <li><a class="add_to_back_list" href="#">חסימה</a></li>*/
/*                     {% endif %}*/
/* */
/*                     {% if delete_from_black_list %}*/
/*                         <li><a class="delete_from_black_list" href="#">הסרה מרשימת החסומים</a></li>*/
/*                     {% endif %}*/
/* */
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* */
/* */
