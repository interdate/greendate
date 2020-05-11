<?php

/* frontend/main_layout.html.twig */
class __TwigTemplate_1a0ddaaf0d577cab25d1a0f352952402a380c79862bcc43e9dc0fe9337cc40f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/main_layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'meta_description' => array($this, 'block_meta_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        // line 7
        echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<meta name=\"SKYPE_TOOLBAR\" content =\"SKYPE_TOOLBAR_PARSER_COMPATIBLE\"/>
\t<meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta property=\"og:image\" content=\"http://res.cloudinary.com/greendate/image/upload/ihdpgvcuunlrxe6agaf3.jpg\" />
    <meta name=\"google-site-verification\" content=\"KuD_z3KJ6GJ2PTKjfUoXfhERiuxdiL5UCy690DS2WTc\" />
";
    }

    public function block_meta_description($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/semantic/dist/semantic.rtl.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick/slick.css"), "html", null, true);
        echo "\" />

    ";
        // line 19
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 20
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery.qtip/jquery.qtip.min.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery-ui/css/cupertino/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/emoticons/support/skype/emoticons.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/lobibox/dist/css/animate.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/lobibox/dist/css/lobibox.css"), "html", null, true);
            echo "\">
        ";
            // line 27
            echo "

    ";
        }
        // line 30
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\">

";
    }

    // line 35
    public function block_js($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/semantic/dist/semantic.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick/slick.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 41
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "sign_up_photo")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "sign_up_photos"))) {
            // line 42
            echo "
        <script src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery.qtip/jquery.qtip.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/emoticons/lib/emoticons.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/lobibox/dist/js/notifications.min.js"), "html", null, true);
            echo "\"></script>

        <script src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tinyscrollbar.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/perfect-scrollbar-with-mousewheel.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/perfect-scrollbar.min.js"), "html", null, true);
            echo "\"></script>

        <script src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/messenger.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.ns-autogrow.min.js"), "html", null, true);
            echo "\"></script>

    ";
        }
        // line 56
        echo "

    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.cloudinary.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('container', $context, $blocks);
        // line 67
        echo "
    ";
        // line 68
        $context["footerBlocks"] = $this->env->getExtension('app_extension')->getFooterBlocksFunction();
        // line 69
        echo "
    <footer>
        <div class=\"wrap clearfix\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footerBlocks"]) ? $context["footerBlocks"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 73
            echo "                <div class=\"menudiv";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                    <h4>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "name", array()), "html", null, true);
            echo "</h4>
                    <ul>
                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 77
                echo "                            ";
                if ($this->getAttribute($context["page"], "isActive", array())) {
                    // line 78
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages_page", array("uri" => $this->getAttribute($context["page"], "uri", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 80
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 82
                echo "                            ";
                if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                    // line 83
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("users_public_list");
                    echo "\">חברים באתר</a></li>
                            ";
                }
                // line 85
                echo "                        ";
            }
            // line 86
            echo "                        ";
            if (($this->getAttribute($context["loop"], "index", array()) == 3)) {
                // line 87
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("faq");
                echo "\">שאלות ותשובות</a></li>
                        ";
            }
            // line 89
            echo "                    </ul>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "

            ";
        // line 112
        echo "
            <div class=\"leftsect\">
                <div class=\"topsec clearfix\">
                    <div class=\"social-icon clearfix\">
                        <h5>הצטרפו אלינו</h5>
                        <a href=\"https://www.facebook.com/greendate.co.il\" class=\"social-fb\" target=\"_blank\"><img src=\"/images/footer-fb.png\" alt=\"\"></a>
                        <a href=\"https://plus.google.com/u/0/107357564913513566633/about\" class=\"social-google\"  target=\"_blank\"><img src=\"/images/footer-google.png\" alt=\"\"></a>
                    </div>
                    <div class=\"email-icon\">
                        <h5>צרו קשר</h5>
                        <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"><img src=\"/images/footer-email.png\" alt=\"\"></a>
                    </div>
                </div>
                ";
        // line 126
        echo "            </div>
        </div>
        <div class=\"wrap2\"><a class=\"scroltop\" href=\"#\"></a></div>
    </footer>
    <!-- footer end -->


    <div id=\"popup1\" class=\"popupmainopen\">

        <div class=\"ui active disabled dimmer inverted\" id=\"profile_dimmer\">
            <div class=\"ui text large loader disabled\">טעינה</div>
        </div>

        <a class=\"close\" href=\"#\"></a>
        

        <div id=\"user_data\"></div>

    </div>
    <!-- popup1 -->

    <div class=\"overlay\"></div>

    <div class=\"ui active disabled dimmer\" id=\"global_dimmer\">
        <div class=\"ui text large loader disabled\">טעינה</div>
    </div>



    ";
        // line 155
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 156
            echo "
        <input type=\"hidden\" id=\"currentUserId\" value=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
            echo "\" />
        <input type=\"hidden\" id=\"currentUserImage\" value=\"\" />

        <input type=\"hidden\" value=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["messenger"]) ? $context["messenger"] : null), "config", array()), "payment", array()), "text", array()), "html", null, true);
            echo "\" id=\"paymentText\">
        <input type=\"hidden\" value=\"\" id=\"paymentLink\">
        <input type=\"hidden\" value=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["messenger"]) ? $context["messenger"] : null), "config", array()), "payment", array()), "linkText", array()), "html", null, true);
            echo "\" id=\"paymentLinkText\">
        <input type=\"hidden\" value=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["messenger"]) ? $context["messenger"] : null), "config", array()), "points", array()), "linkText", array()), "html", null, true);
            echo "\" id=\"pointsLinkText\">
        <input type=\"hidden\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "apiKey", array()), "html", null, true);
            echo "\" id=\"apiKey\">

        <div class=\"chatsArea\"></div>

        <div id=\"templates\">
            <div id=\"chatTemplate\">
                <div class=\"chatWindow rounded\" id=\"[CONTACT_ID]\">
                    <div class=\"header rounded\"></div>
                    <div class=\"contactName\"><a onclick=\"viewUserProfile([CONTACT_ID], \$(this).offset().top)\">[CONTACT_NAME]</a></div>
                    <div class=\"close rounded\"></div> <div class=\"minimize rounded\"></div>
                    <div class=\"body\">
                        <br>
                        <div class=\"scrollbar1\">
                            <div class=\"scrollbar\"><div class=\"track\"><div class=\"thumb\"></div></div></div>
                            <div class=\"viewport\">
                                <div class=\"overview\">

                                </div>
                            </div>
                        </div>
                    </div>
                    <textarea id=\"message\"></textarea>
                </div>
            </div>
            <div id=\"chatMessageSectionTemplate\">
                <div class=\"messageSection [DIRECTION]\" id=\"chatMessageSection_[MESSAGE_SECTION_ID]\">
                    <div class=\"imageWrap pos rounded\">
                        <a ";
            // line 191
            echo " onclick=\"viewUserProfile([PROFILE_ID], \$('.contactName').offset().top)\" target=\"_blank\"><img alt=\"\" class=\"userPicture\" src=\"USER_PICTURE\"></a>
                    </div>
                    <div class=\"messageWrap pos rounded\">
                        <div class=\"message\">
                            [MESSAGE]
                            <div class=\"clear\"></div>
                            <div class=\"status\">[STATUS]</div>
                            <div class=\"dateTime\">[DATE_TIME]</div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <div class=\"date\"></div>
                </div>
                <div class=\"\"></div>
            </div>

            <div id=\"dialogMessageSectionTemplate\">
                <div class=\"chatbox [DIRECTION] message [STATUS] messageSection\" id=\"dialogMessageSection_[MESSAGE_SECTION_ID]\">
                    <h4>[MESSAGE]</h4>
                    <div class=\"timerdiv dateTime\">[DATE_TIME]</div>
                </div>
            </div>

            <div id=\"emoticonsTemplate\" class=\"hidden\">
                <div class=\"emoticons_wrapper\"></div>
            </div>


";
            // line 231
            echo "
        </div>
    ";
        }
        // line 234
        echo "

    <script type=\"text/javascript\" src=\"/js/all.js\"></script>


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75937910-1', 'auto');
        ga('send', 'pageview');

    </script>










";
    }

    // line 66
    public function block_container($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "frontend/main_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 66,  450 => 234,  445 => 231,  414 => 191,  384 => 164,  380 => 163,  376 => 162,  371 => 160,  365 => 157,  362 => 156,  360 => 155,  329 => 126,  323 => 122,  311 => 112,  307 => 92,  291 => 89,  285 => 87,  282 => 86,  279 => 85,  273 => 83,  270 => 82,  267 => 81,  261 => 80,  253 => 78,  250 => 77,  246 => 76,  241 => 74,  236 => 73,  219 => 72,  214 => 69,  212 => 68,  209 => 67,  207 => 66,  204 => 65,  201 => 64,  195 => 61,  191 => 60,  187 => 59,  183 => 58,  179 => 56,  173 => 53,  169 => 52,  164 => 50,  160 => 49,  156 => 48,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  136 => 42,  134 => 41,  129 => 39,  125 => 38,  120 => 37,  118 => 36,  115 => 35,  108 => 31,  105 => 30,  100 => 27,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  77 => 20,  75 => 19,  70 => 17,  66 => 16,  61 => 15,  58 => 14,  46 => 9,  42 => 7,  39 => 6,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block meta %}*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* 	<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>*/
/* 	<meta name="description" content="{% block meta_description %}{% endblock %}">*/
/*     <meta property="og:image" content="http://res.cloudinary.com/greendate/image/upload/ihdpgvcuunlrxe6agaf3.jpg" />*/
/*     <meta name="google-site-verification" content="KuD_z3KJ6GJ2PTKjfUoXfhERiuxdiL5UCy690DS2WTc" />*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('libs/semantic/dist/semantic.rtl.min.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('js/slick/slick.css') }}" />*/
/* */
/*     {% if app.user %}*/
/* */
/*         <link rel="stylesheet" href="{{ asset('libs/jquery.qtip/jquery.qtip.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('libs/jquery-ui/css/cupertino/jquery-ui-1.10.4.custom.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('libs/emoticons/support/skype/emoticons.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('libs/lobibox/dist/css/animate.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('libs/lobibox/dist/css/lobibox.css') }}">*/
/*         {#<link rel="stylesheet" href="{{ asset('css/messenger.css') }}">#}*/
/* */
/* */
/*     {% endif %}*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.min.css') }}">*/
/* */
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     {# <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script> #}*/
/*     <script src="{{ asset('libs/jquery/jquery-2.1.4.min.js') }}"></script>*/
/*     <script src="{{ asset('libs/semantic/dist/semantic.min.js') }}"></script>*/
/*     <script src="{{ asset('js/slick/slick.js') }}"></script>*/
/* */
/*     {% if app.user and app.request.get('_route') != 'sign_up_photo' and app.request.get('_route') != 'sign_up_photos' %}*/
/* */
/*         <script src="{{ asset('libs/jquery-ui/js/jquery-ui-1.10.4.custom.min.js') }}"></script>*/
/*         <script src="{{ asset('libs/jquery.qtip/jquery.qtip.min.js') }}"></script>*/
/*         <script src="{{ asset('libs/emoticons/lib/emoticons.js') }}"></script>*/
/*         <script src="{{ asset('libs/lobibox/dist/js/notifications.min.js') }}"></script>*/
/* */
/*         <script src="{{ asset('js/tinyscrollbar.js') }}"></script>*/
/*         <script src="{{ asset('js/perfect-scrollbar-with-mousewheel.min.js') }}"></script>*/
/*         <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>*/
/* */
/*         <script src="{{ asset('js/messenger.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.ns-autogrow.min.js') }}"></script>*/
/* */
/*     {% endif %}*/
/* */
/* */
/*     <script src="{{ asset('libs/cloudinary/jquery.ui.widget.js') }}"></script>*/
/*     <script src="{{ asset('libs/cloudinary/jquery.iframe-transport.js') }}"></script>*/
/*     <script src="{{ asset('libs/cloudinary/jquery.fileupload.js') }}"></script>*/
/*     <script src="{{ asset('libs/cloudinary/jquery.cloudinary.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {% block container %}{% endblock %}*/
/* */
/*     {% set footerBlocks = getFooterBlocks() %}*/
/* */
/*     <footer>*/
/*         <div class="wrap clearfix">*/
/*             {% for block in footerBlocks %}*/
/*                 <div class="menudiv{{ loop.index }}">*/
/*                     <h4>{{ block.name }}</h4>*/
/*                     <ul>*/
/*                         {% for page in block.pages %}*/
/*                             {% if page.isActive %}*/
/*                                 <li><a href="{{ path('pages_page', {'uri': page.uri}) }}">{{ page.name }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         {% if loop.index == 1 %}*/
/*                             {% if not app.user %}*/
/*                                 <li><a href="{{ path('users_public_list') }}">חברים באתר</a></li>*/
/*                             {% endif  %}*/
/*                         {% endif %}*/
/*                         {% if loop.index == 3 %}*/
/*                             <li><a href="{{ path('faq') }}">שאלות ותשובות</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/* */
/*             {#*/
/*             <div class="menudiv2">*/
/*                 <h4>קישורים</h4>*/
/*                 <ul>*/
/*                     <li><a href="#">מפת האתר</a></li>*/
/*                     <li><a href="#">בלוגים</a></li>*/
/*                     <li><a href="#">פורומים</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="menudiv3">*/
/*                 <h4>צור קשר</h4>*/
/*                 <ul>*/
/*                     <li><a href="#">תנאי שימוש</a></li>*/
/*                     <li><a href="#">מדיניות פרטיות באתר</a></li>*/
/*                     <li><a href="#">אינדקס אתרים</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             #}*/
/* */
/*             <div class="leftsect">*/
/*                 <div class="topsec clearfix">*/
/*                     <div class="social-icon clearfix">*/
/*                         <h5>הצטרפו אלינו</h5>*/
/*                         <a href="https://www.facebook.com/greendate.co.il" class="social-fb" target="_blank"><img src="/images/footer-fb.png" alt=""></a>*/
/*                         <a href="https://plus.google.com/u/0/107357564913513566633/about" class="social-google"  target="_blank"><img src="/images/footer-google.png" alt=""></a>*/
/*                     </div>*/
/*                     <div class="email-icon">*/
/*                         <h5>צרו קשר</h5>*/
/*                         <a href="{{ path('contact') }}"><img src="/images/footer-email.png" alt=""></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 {#<div class="fb-regist"><a href="#"></a></div>#}*/
/*             </div>*/
/*         </div>*/
/*         <div class="wrap2"><a class="scroltop" href="#"></a></div>*/
/*     </footer>*/
/*     <!-- footer end -->*/
/* */
/* */
/*     <div id="popup1" class="popupmainopen">*/
/* */
/*         <div class="ui active disabled dimmer inverted" id="profile_dimmer">*/
/*             <div class="ui text large loader disabled">טעינה</div>*/
/*         </div>*/
/* */
/*         <a class="close" href="#"></a>*/
/*         */
/* */
/*         <div id="user_data"></div>*/
/* */
/*     </div>*/
/*     <!-- popup1 -->*/
/* */
/*     <div class="overlay"></div>*/
/* */
/*     <div class="ui active disabled dimmer" id="global_dimmer">*/
/*         <div class="ui text large loader disabled">טעינה</div>*/
/*     </div>*/
/* */
/* */
/* */
/*     {% if app.user %}*/
/* */
/*         <input type="hidden" id="currentUserId" value="{{ app.user.id }}" />*/
/*         <input type="hidden" id="currentUserImage" value="" />*/
/* */
/*         <input type="hidden" value="{{ messenger.config.payment.text }}" id="paymentText">*/
/*         <input type="hidden" value="" id="paymentLink">*/
/*         <input type="hidden" value="{{ messenger.config.payment.linkText }}" id="paymentLinkText">*/
/*         <input type="hidden" value="{{ messenger.config.points.linkText }}" id="pointsLinkText">*/
/*         <input type="hidden" value="{{ app.user.apiKey }}" id="apiKey">*/
/* */
/*         <div class="chatsArea"></div>*/
/* */
/*         <div id="templates">*/
/*             <div id="chatTemplate">*/
/*                 <div class="chatWindow rounded" id="[CONTACT_ID]">*/
/*                     <div class="header rounded"></div>*/
/*                     <div class="contactName"><a onclick="viewUserProfile([CONTACT_ID], $(this).offset().top)">[CONTACT_NAME]</a></div>*/
/*                     <div class="close rounded"></div> <div class="minimize rounded"></div>*/
/*                     <div class="body">*/
/*                         <br>*/
/*                         <div class="scrollbar1">*/
/*                             <div class="scrollbar"><div class="track"><div class="thumb"></div></div></div>*/
/*                             <div class="viewport">*/
/*                                 <div class="overview">*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <textarea id="message"></textarea>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="chatMessageSectionTemplate">*/
/*                 <div class="messageSection [DIRECTION]" id="chatMessageSection_[MESSAGE_SECTION_ID]">*/
/*                     <div class="imageWrap pos rounded">*/
/*                         <a {# href="[PROFILE_ID]" #} onclick="viewUserProfile([PROFILE_ID], $('.contactName').offset().top)" target="_blank"><img alt="" class="userPicture" src="USER_PICTURE"></a>*/
/*                     </div>*/
/*                     <div class="messageWrap pos rounded">*/
/*                         <div class="message">*/
/*                             [MESSAGE]*/
/*                             <div class="clear"></div>*/
/*                             <div class="status">[STATUS]</div>*/
/*                             <div class="dateTime">[DATE_TIME]</div>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                     <div class="date"></div>*/
/*                 </div>*/
/*                 <div class=""></div>*/
/*             </div>*/
/* */
/*             <div id="dialogMessageSectionTemplate">*/
/*                 <div class="chatbox [DIRECTION] message [STATUS] messageSection" id="dialogMessageSection_[MESSAGE_SECTION_ID]">*/
/*                     <h4>[MESSAGE]</h4>*/
/*                     <div class="timerdiv dateTime">[DATE_TIME]</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="emoticonsTemplate" class="hidden">*/
/*                 <div class="emoticons_wrapper"></div>*/
/*             </div>*/
/* */
/* */
/* {#            <div id="messageStatusSent">*/
/*                 <img src="/images/messenger/messageSent.jpg" alt="Sending...">*/
/*             </div>*/
/* */
/*             <div id="messageStatusSaved">*/
/*                 <img src="/images/messenger/messageSaved.jpg" alt="Sent">*/
/*             </div>*/
/* */
/*             <div id="messageStatusRead">*/
/*                 <img src="/images/messenger/messageRead.jpg" alt="Read">*/
/*             </div>#}*/
/* */
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/*     <script type="text/javascript" src="/js/all.js"></script>*/
/* */
/* */
/*     <script>*/
/*         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*                     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*                 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*         ga('create', 'UA-75937910-1', 'auto');*/
/*         ga('send', 'pageview');*/
/* */
/*     </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
