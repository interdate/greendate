<?php

/* :frontend/user/messenger:dialog.html.twig */
class __TwigTemplate_eb4531846088d67ffb7f81bc631ff8cfcf7c4fe595236134165bc0e62e6e5c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/user/messenger:dialog.html.twig", 1);
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



    <style>




        @media only screen and (max-width:1020px) {





        }



    </style>

    <div class=\"send_message_area\">

        <div class=\"message_area\">
            <textarea></textarea>
        </div>
        <div class=\"send_button_area\">
            <div class=\"send\" onclick=\"dialog.sendMessage(\$('.message_area textarea'));\">
                <div>
                שלח/י
                </div>
            </div>
        </div>



    </div>



    <script>





        /*
        \$(document).one('focus.textarea', '.auto_expand', function(){
            var savedValue = this.value;
            this.value = '';
            this.baseScrollHeight = this.scrollHeight;
            this.value = savedValue;
        }).on('input.textarea', '.auto_expand', function(){
            var minRows = this.getAttribute('data-min-rows')|0, rows;
            this.rows = minRows;
            console.log(this.scrollHeight , this.baseScrollHeight);
            rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
            this.rows = minRows + rows;
        });
        */


    </script>


    <div class=\"midsec\">
       ";
        // line 71
        echo "
        <div class=\"hotitle clearfix\">
            <a href=\"#popup1\" class=\"f1 clearfix\">
                ";
        // line 74
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "getMainPhoto", array()) != null)) {
            // line 75
            echo "                    <div class=\"thumb\">
                        <img alt=\"\">
                        <input type=\"hidden\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "getMainPhoto", array()), "name", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        // line 80
        echo "                <h3>
                    שיחה עם
                    ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "username", array()), "html", null, true);
        echo "
                </h3>
            </a>
            <input type=\"hidden\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "id", array()), "html", null, true);
        echo "\">
        </div>
        <!-- end -->


        <div class=\"hotcont\">
            <div id=\"dialog\">
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            echo "                    ";
            $context["class"] = ((($this->getAttribute($context["message"], "from", array()) == $this->getAttribute($this->getAttribute((isset($context["dialog"]) ? $context["dialog"] : null), "user", array()), "id", array()))) ? ("user") : ("contact"));
            // line 94
            echo "                    ";
            // line 95
            $context["status"] = ((($this->getAttribute($context["message"], "from", array()) == $this->getAttribute($this->getAttribute((isset($context["dialog"]) ? $context["dialog"] : null), "user", array()), "id", array()))) ? ((($this->getAttribute(            // line 96
$context["message"], "isRead", array())) ? ("read") : ("unread"))) : (""));
            // line 101
            echo "
                    ";
            // line 103
            $context["unreadMessage"] = ((($this->getAttribute($context["message"], "from", array()) == $this->getAttribute($this->getAttribute((isset($context["dialog"]) ? $context["dialog"] : null), "user", array()), "id", array()))) ? ((($this->getAttribute(            // line 104
$context["message"], "isRead", array())) ? ("") : ((("<input type=\"hidden\" class=\"unreadMessage\" value=\"" . $this->getAttribute(            // line 106
$context["message"], "id", array())) . "\">")))) : (""));
            // line 108
            echo "
                    <div class=\"chatbox ";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
            echo " message messageSection\" id=\"dialogMessageSection_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
                        <h4>";
            // line 110
            echo twig_replace_filter($this->getAttribute($context["message"], "text", array()), array("%PAYMENT_LINK%" => $this->env->getExtension('routing')->getPath("user_homepage")));
            echo "</h4>
                        <div class=\"timerdiv dateTime\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "dateTime", array()), "html", null, true);
            echo "</div>
                    </div>
                    ";
            // line 113
            echo (isset($context["unreadMessage"]) ? $context["unreadMessage"] : null);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            </div>

            <div class=\"hotbtm clearfix dialogInput\">
                <div class=\"smileyicon\" id=\"show_emoticons\"><a><img src=\"/images/smiley.png\" alt=\"\"></a></div>
                <textarea cols=\"5\" rows=\"5\" id=\"dialog_textarea\" placeholder=\"תגובה\"></textarea>
                <div class=\"clearfix\"><input type=\"button\" value=\"שלח\" class=\"btn\" onclick=\"dialog.sendMessage(\$('.dialogInput textarea'));\"></div>
            </div>

            <input type=\"hidden\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dialog"]) ? $context["dialog"] : null), "contact", array()), "id", array()), "html", null, true);
        echo "\" id=\"contactId\" />
            <input type=\"hidden\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dialog"]) ? $context["dialog"] : null), "contact", array()), "nickName", array()), "html", null, true);
        echo "\" id=\"contactNickname\" />
            <input type=\"hidden\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dialog"]) ? $context["dialog"] : null), "user", array()), "nickName", array()), "html", null, true);
        echo "\" id=\"userNickname\" />
        </div>
            <!-- hotcont end -->
    </div>
<!-- midsec end -->




";
    }

    public function getTemplateName()
    {
        return ":frontend/user/messenger:dialog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 125,  197 => 124,  193 => 123,  183 => 115,  175 => 113,  170 => 111,  166 => 110,  158 => 109,  155 => 108,  153 => 106,  152 => 104,  151 => 103,  148 => 101,  146 => 96,  145 => 95,  143 => 94,  140 => 93,  136 => 92,  126 => 85,  120 => 82,  116 => 80,  110 => 77,  106 => 75,  104 => 74,  99 => 71,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/* */
/*     <style>*/
/* */
/* */
/* */
/* */
/*         @media only screen and (max-width:1020px) {*/
/* */
/* */
/* */
/* */
/* */
/*         }*/
/* */
/* */
/* */
/*     </style>*/
/* */
/*     <div class="send_message_area">*/
/* */
/*         <div class="message_area">*/
/*             <textarea></textarea>*/
/*         </div>*/
/*         <div class="send_button_area">*/
/*             <div class="send" onclick="dialog.sendMessage($('.message_area textarea'));">*/
/*                 <div>*/
/*                 שלח/י*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/*     <script>*/
/* */
/* */
/* */
/* */
/* */
/*         /**/
/*         $(document).one('focus.textarea', '.auto_expand', function(){*/
/*             var savedValue = this.value;*/
/*             this.value = '';*/
/*             this.baseScrollHeight = this.scrollHeight;*/
/*             this.value = savedValue;*/
/*         }).on('input.textarea', '.auto_expand', function(){*/
/*             var minRows = this.getAttribute('data-min-rows')|0, rows;*/
/*             this.rows = minRows;*/
/*             console.log(this.scrollHeight , this.baseScrollHeight);*/
/*             rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);*/
/*             this.rows = minRows + rows;*/
/*         });*/
/*         *//* */
/* */
/* */
/*     </script>*/
/* */
/* */
/*     <div class="midsec">*/
/*        {# <h1><a href="#">הודעות</a></h1>#}*/
/* */
/*         <div class="hotitle clearfix">*/
/*             <a href="#popup1" class="f1 clearfix">*/
/*                 {% if contact.getMainPhoto != null  %}*/
/*                     <div class="thumb">*/
/*                         <img alt="">*/
/*                         <input type="hidden" value="{{ contact.getMainPhoto.name }}">*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <h3>*/
/*                     שיחה עם*/
/*                     {{ contact.username }}*/
/*                 </h3>*/
/*             </a>*/
/*             <input type="hidden" value="{{ contact.id }}">*/
/*         </div>*/
/*         <!-- end -->*/
/* */
/* */
/*         <div class="hotcont">*/
/*             <div id="dialog">*/
/*                 {% for message in history %}*/
/*                     {% set class =  message.from == dialog.user.id ? 'user' : 'contact' %}*/
/*                     {%*/
/*                         set status = message.from == dialog.user.id*/
/*                             ? message.isRead*/
/*                                 ? 'read'*/
/*                                 : 'unread'*/
/*                             : ''*/
/*                     %}*/
/* */
/*                     {%*/
/*                         set unreadMessage  = message.from == dialog.user.id*/
/*                             ? message.isRead*/
/*                                 ? ''*/
/*                                 : '<input type="hidden" class="unreadMessage" value="' ~ message.id ~ '">'*/
/*                     %}*/
/* */
/*                     <div class="chatbox {{ class }} {{ status }} message messageSection" id="dialogMessageSection_{{ message.id }}">*/
/*                         <h4>{{ message.text|replace({ '%PAYMENT_LINK%': path('user_homepage') })|raw }}</h4>*/
/*                         <div class="timerdiv dateTime">{{ message.dateTime }}</div>*/
/*                     </div>*/
/*                     {{ unreadMessage|raw }}*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/*             <div class="hotbtm clearfix dialogInput">*/
/*                 <div class="smileyicon" id="show_emoticons"><a><img src="/images/smiley.png" alt=""></a></div>*/
/*                 <textarea cols="5" rows="5" id="dialog_textarea" placeholder="תגובה"></textarea>*/
/*                 <div class="clearfix"><input type="button" value="שלח" class="btn" onclick="dialog.sendMessage($('.dialogInput textarea'));"></div>*/
/*             </div>*/
/* */
/*             <input type="hidden" value="{{ dialog.contact.id }}" id="contactId" />*/
/*             <input type="hidden" value="{{ dialog.contact.nickName }}" id="contactNickname" />*/
/*             <input type="hidden" value="{{ dialog.user.nickName }}" id="userNickname" />*/
/*         </div>*/
/*             <!-- hotcont end -->*/
/*     </div>*/
/* <!-- midsec end -->*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
