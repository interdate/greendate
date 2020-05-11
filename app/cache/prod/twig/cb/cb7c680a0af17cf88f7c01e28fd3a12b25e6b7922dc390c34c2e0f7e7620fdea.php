<?php

/* :frontend/user:users_public_list.html.twig */
class __TwigTemplate_1ac909449b17c845f270aae326a582aa2faaa2c04b1191dd45344c9a9bf927e5 extends Twig_Template
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
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 3
            echo "
    ";
            // line 4
            $context["url"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "users_public_list")) ? ($this->env->getExtension('routing')->getPath("users_public_list_user", array("id" => $this->getAttribute($context["user"], "id", array())))) : ($this->env->getExtension('routing')->getPath("sign_up")));
            // line 5
            echo "
    <div class=\"boxcont\">
        <input type=\"hidden\" class=\"userId\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
        <input type=\"hidden\" class=\"userGenderId\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "gender", array()), "id", array()), "html", null, true);
            echo "\">
        <div class=\"greyboxcont clearfix\">
            <div class=\"userimg\">
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
                    <img src=\"\" alt=\"\" class=\"resultsPhoto\">
                    <input type=\"hidden\" value=\"";
            // line 13
            if ( !(null === $this->getAttribute($context["user"], "getMainPhoto", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "getMainPhoto", array()), "name", array()), "html", null, true);
            }
            echo "\">
                </a>
                ";
            // line 15
            if ($this->getAttribute($context["user"], "isPaying", array())) {
                echo "<div class=\"queen-icon\"></div>";
            }
            // line 16
            echo "            </div>

            <div class=\"lftcontbox clearfix\">
                <div class=\"onlinediv clearfix\">
                    ";
            // line 20
            if ($this->getAttribute($context["user"], "isOnline", array())) {
                // line 21
                echo "                        <a href=\"#\">
                            <div class=\"imgbox\"><img src=\"/images/main-pg-online-icon.png\" alt=\"\"></div>
                            <div class=\"statustitle\">On<span>line</span></div>
                        </a>
                    ";
            }
            // line 26
            echo "                </div>
                <div class=\"subtitle clearfix\">
                    <div class=\"subtitletext\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"imgicon\">";
            // line 29
            if ($this->getAttribute($context["user"], "isNew", array())) {
                echo "<img src=\"/images/main-pg-subtitle-icon.png\" alt=\"\">";
            }
            echo "</div>
                </div>

                <div class=\"midcontdes\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "age", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "city", array()), "name", array()), "html", null, true);
            echo "
                    <br>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "relationshipStatus", array()), "name", array()), "html", null, true);
            echo "
                    <br>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "type", array()), "name", array()), "html", null, true);
            echo "
                </div>
                <div class=\"midcontdes\">
                    <strong>קצת עליי</strong>
                    ";
            // line 39
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["user"], "about", array())) > 50)) ? ((twig_slice($this->env, $this->getAttribute($context["user"], "about", array()), 0, 50) . "...")) : ($this->getAttribute($context["user"], "about", array()))), "html", null, true);
            echo "
                </div>
            </div>
        </div>

        <div class=\"lightgrey clearfix\">
            <ul class=\"smlinks clearfix\">

            </ul>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "


";
    }

    public function getTemplateName()
    {
        return ":frontend/user:users_public_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  112 => 39,  105 => 35,  101 => 34,  95 => 33,  86 => 29,  80 => 28,  76 => 26,  69 => 21,  67 => 20,  61 => 16,  57 => 15,  50 => 13,  45 => 11,  39 => 8,  35 => 7,  31 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% for user in users %}*/
/* */
/*     {% set url = app.request.attributes.get('_route') == 'users_public_list' ? path('users_public_list_user', {'id': user.id}) : path('sign_up') %}*/
/* */
/*     <div class="boxcont">*/
/*         <input type="hidden" class="userId" value="{{ user.id }}">*/
/*         <input type="hidden" class="userGenderId" value="{{ user.gender.id }}">*/
/*         <div class="greyboxcont clearfix">*/
/*             <div class="userimg">*/
/*                 <a href="{{ url }}">*/
/*                     <img src="" alt="" class="resultsPhoto">*/
/*                     <input type="hidden" value="{% if user.getMainPhoto is not null %}{{ user.getMainPhoto.name }}{% endif %}">*/
/*                 </a>*/
/*                 {% if user.isPaying %}<div class="queen-icon"></div>{% endif %}*/
/*             </div>*/
/* */
/*             <div class="lftcontbox clearfix">*/
/*                 <div class="onlinediv clearfix">*/
/*                     {% if user.isOnline %}*/
/*                         <a href="#">*/
/*                             <div class="imgbox"><img src="/images/main-pg-online-icon.png" alt=""></div>*/
/*                             <div class="statustitle">On<span>line</span></div>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="subtitle clearfix">*/
/*                     <div class="subtitletext"><a href="{{ url }}">{{ user.username }}</a></div>*/
/*                     <div class="imgicon">{% if user.isNew %}<img src="/images/main-pg-subtitle-icon.png" alt="">{% endif %}</div>*/
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
/* */
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* */
/* */
/* */
