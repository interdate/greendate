<?php

/* :frontend/user/messenger:index.html.twig */
class __TwigTemplate_e8fa40ca1ceb6877cfff72f8f52308a57471c967a3789059c4e6bbb9130a92d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/user/messenger:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend/layout.html.twig";
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


    <div class=\"midsec\">
        <h1><a href=\"#\">הודעות</a></h1>
        <div class=\"cont\">
            <div class=\"hotdesc\">

               ";
        // line 19
        echo "            </div>
            <!-- hotdesc end -->

            <div id=\"dialogs\">

                <div class=\"hotlist\">

                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dialogs"]) ? $context["dialogs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dialog"]) {
            // line 27
            echo "
                        ";
            // line 28
            $context["url"] = $this->env->getExtension('routing')->getPath("messenger_dialog_open", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "contactId" => $this->getAttribute($context["dialog"], "id", array())));
            // line 29
            echo "
                        <div class=\"boxrpt clearfix\">
                            <div class=\"userimg\">
                                ";
            // line 32
            if (($this->getAttribute($context["dialog"], "photoName", array()) != "")) {
                // line 33
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "\"><img alt=\"\"></a>
                                    <input type=\"hidden\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["dialog"], "photoName", array()), "html", null, true);
                echo "\">
                                ";
            } else {
                // line 36
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dialog"], "noPhoto", array()), "html", null, true);
                echo "\"></a>
                                ";
            }
            // line 38
            echo "                            </div>
                            <div class=\"descbox\">
                                <div class=\"titlesec clearfix\">
                                    <h3><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dialog"], "username", array()), "html", null, true);
            echo "</a></h3>
                                    <div class=\"datediv\">";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dialog"], "date", array()), "d/m/Y H:i"), "html", null, true);
            echo "</div>
                                </div>
                                <div class=\"desctext\">
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
                                        ";
            // line 46
            if ((twig_length_filter($this->env, $this->getAttribute($context["dialog"], "message", array())) > 60)) {
                // line 47
                echo "                                            ";
                echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["dialog"], "message", array()), 0, 59) . "..."), "html", null, true);
                echo "
                                        ";
            } else {
                // line 49
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dialog"], "message", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 51
            echo "                                    </a>
                                </div>
                                ";
            // line 53
            if (($this->getAttribute($context["dialog"], "newMessagesNumber", array()) > 0)) {
                // line 54
                echo "                                    <div class=\"newMessages\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dialog"], "newMessagesNumber", array()), "html", null, true);
                echo "+</div>
                                ";
            }
            // line 56
            echo "                            </div>
                        </div>
                        <!-- end -->

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dialog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                </div>
                <!-- hotlist -->

            </div>
        </div>
    </div>
    <!-- midsec end -->


";
    }

    public function getTemplateName()
    {
        return ":frontend/user/messenger:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 61,  131 => 56,  125 => 54,  123 => 53,  119 => 51,  113 => 49,  107 => 47,  105 => 46,  101 => 45,  95 => 42,  89 => 41,  84 => 38,  76 => 36,  71 => 34,  66 => 33,  64 => 32,  59 => 29,  57 => 28,  54 => 27,  50 => 26,  41 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/*     <div class="midsec">*/
/*         <h1><a href="#">הודעות</a></h1>*/
/*         <div class="cont">*/
/*             <div class="hotdesc">*/
/* */
/*                {#*/
/*                 <p>*/
/*                     הינך יכול/ה לקרוא הודעות בשלושת המצבים הבאים<br/>*/
/*                     1. יש לך מנוי<br/>*/
/*                     2. לחבר/ה ששלח/ה לך את ההודעה יש מנוי<br/>*/
/*                     3. נשארו לך נקודות לקריאת הודעה*/
/*                 </p>#}*/
/*             </div>*/
/*             <!-- hotdesc end -->*/
/* */
/*             <div id="dialogs">*/
/* */
/*                 <div class="hotlist">*/
/* */
/*                     {% for dialog in dialogs %}*/
/* */
/*                         {% set url = path('messenger_dialog_open',{'userId': app.user.id, 'contactId': dialog.id}) %}*/
/* */
/*                         <div class="boxrpt clearfix">*/
/*                             <div class="userimg">*/
/*                                 {% if dialog.photoName != '' %}*/
/*                                     <a href="{{ url }}"><img alt=""></a>*/
/*                                     <input type="hidden" value="{{ dialog.photoName }}">*/
/*                                 {% else %}*/
/*                                     <a href="{{ url }}"><img src="{{ dialog.noPhoto }}"></a>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="descbox">*/
/*                                 <div class="titlesec clearfix">*/
/*                                     <h3><a href="{{ url }}">{{ dialog.username }}</a></h3>*/
/*                                     <div class="datediv">{{ dialog.date|date("d/m/Y H:i") }}</div>*/
/*                                 </div>*/
/*                                 <div class="desctext">*/
/*                                     <a href="{{ url }}">*/
/*                                         {% if dialog.message|length > 60 %}*/
/*                                             {{ dialog.message|slice(0,59) ~ '...' }}*/
/*                                         {% else %}*/
/*                                             {{ dialog.message }}*/
/*                                         {% endif %}*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 {% if dialog.newMessagesNumber > 0 %}*/
/*                                     <div class="newMessages" >{{ dialog.newMessagesNumber }}+</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- end -->*/
/* */
/*                     {% endfor %}*/
/* */
/*                 </div>*/
/*                 <!-- hotlist -->*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- midsec end -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
