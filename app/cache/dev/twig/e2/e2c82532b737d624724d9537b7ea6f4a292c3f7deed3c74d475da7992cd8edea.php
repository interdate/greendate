<?php

/* frontend/index.html.twig */
class __TwigTemplate_b1f5afbfb193a8144eac1d6dc137edf4ebc5f7b2db63341fbdf85434e53f8f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", "frontend/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb8ae8d1c68307d1a8f2d5c337280839a339620615996f5b3ae1ec9fe7fe0f3a = $this->env->getExtension("native_profiler");
        $__internal_fb8ae8d1c68307d1a8f2d5c337280839a339620615996f5b3ae1ec9fe7fe0f3a->enter($__internal_fb8ae8d1c68307d1a8f2d5c337280839a339620615996f5b3ae1ec9fe7fe0f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8ae8d1c68307d1a8f2d5c337280839a339620615996f5b3ae1ec9fe7fe0f3a->leave($__internal_fb8ae8d1c68307d1a8f2d5c337280839a339620615996f5b3ae1ec9fe7fe0f3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62be8925905320fc5cc4968bb7f607c08e6dda60dd56f34a133e78216212a8d8 = $this->env->getExtension("native_profiler");
        $__internal_62be8925905320fc5cc4968bb7f607c08e6dda60dd56f34a133e78216212a8d8->enter($__internal_62be8925905320fc5cc4968bb7f607c08e6dda60dd56f34a133e78216212a8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : $this->getContext($context, "seo")), "title", array()), "html", null, true);
        
        $__internal_62be8925905320fc5cc4968bb7f607c08e6dda60dd56f34a133e78216212a8d8->leave($__internal_62be8925905320fc5cc4968bb7f607c08e6dda60dd56f34a133e78216212a8d8_prof);

    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_a0bfe107d6febe03e00d07978c3a0c4431aacd31cd98aa65b4a48dbea2bca66e = $this->env->getExtension("native_profiler");
        $__internal_a0bfe107d6febe03e00d07978c3a0c4431aacd31cd98aa65b4a48dbea2bca66e->enter($__internal_a0bfe107d6febe03e00d07978c3a0c4431aacd31cd98aa65b4a48dbea2bca66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : $this->getContext($context, "seo")), "description", array()), "html", null, true);
        
        $__internal_a0bfe107d6febe03e00d07978c3a0c4431aacd31cd98aa65b4a48dbea2bca66e->leave($__internal_a0bfe107d6febe03e00d07978c3a0c4431aacd31cd98aa65b4a48dbea2bca66e_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_0dd40dc068154da30b56142ba0a324e5b9f67c07e25a0ee2850df23675f7f324 = $this->env->getExtension("native_profiler");
        $__internal_0dd40dc068154da30b56142ba0a324e5b9f67c07e25a0ee2850df23675f7f324->enter($__internal_0dd40dc068154da30b56142ba0a324e5b9f67c07e25a0ee2850df23675f7f324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "



    <div class=\"main-container\">

        <header>

            <div class=\"toph1\">
                <h1>גרינדייט- הכרויות לצמחונים, הכרויות לטבעונים- הבית החם של קהילת הצמחונים והטבעונים למציאת זוגיות, ללא פשרות וללא ויתורים על ערכים!</h1>
            </div>

            <div class=\"wrap clearfix\">

                <div class=\"logo\"><a href=\"/\"><img src=\"images/logo.png\" alt=\"\"></a></div>
                <div class=\"right\">
                    <div class=\"topbtns\">
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sign_up");
        echo "\" class=\"frmbtn\">הירשמו חינם</a>
                        <a href=\"#\" class=\"logbtn\">כניסת חברים</a>
                    </div>

                    <div class=\"form\">
                        <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" id=\"login_form\">
                            <input type=\"text\" placeholder=\"שם משתמש או דוא״ל\" class=\"txtbox\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                            <input type=\"password\" placeholder=\"סיסמה\" class=\"txtbox\" name=\"_password\" />
                            <input type=\"button\" value=\"כניסה\" class=\"btn\" onclick=\"\$('#login_form').submit();\" />
                            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("password_recovery");
        echo "\" class=\"forgot-pwd\">שכחת את הסיסמה?</a>
                            <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                        </form>
                    </div>

                </div>

                ";
        // line 40
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 41
            echo "                    <div class=\"ui compact message red loginError\">
שם משתמש או סיסמה לא נכונים
                    </div>
                ";
        }
        // line 45
        echo "
            </div>
        </header>
        <!-- header end -->

        <div class=\"hmslider slides\">

            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 53
            echo "                <div class=\"slide\" style=\"height: 660px;\">
                    <div class=\"caption\">
                        <div class=\"capinn\">
                            <";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "headerType", array()), "html", null, true);
            echo ">";
            echo $this->getAttribute($context["slide"], "name", array());
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "headerType", array()), "html", null, true);
            echo ">
                            <p>";
            // line 57
            echo $this->getAttribute($context["slide"], "content", array());
            echo "</p>
                            <div class=\"joinbtn\"><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("sign_up");
            echo "\">הצטרפו עכשיו חינם!</a></div>
                            <div class=\"btmbtn\"><a href=\"#\" class=\"apple-icon\">&nbsp;</a> <a href=\"#\" class=\"andriod-icon\">&nbsp;</a></div>
                        </div>
                    </div>
                    <input type=\"hidden\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "imageName", array()), "html", null, true);
            echo "\" class=\"imageName\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
        </div>
        <!-- hmslider end -->

        <div class=\"whyjoin\">
            <div class=\"heading\"><";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 0, array(), "array"), "headerType", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 0, array(), "array"), "headerType", array()), "html", null, true);
        echo "></div>
            <ul class=\"clearfix\">
                <li>
                    <div class=\"icondiv\"><img src=\"images/why-join-icon4.png\" alt=\"\"></div>
                    <h4>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 0, array(), "array"), "block4", array()), "html", null, true);
        echo "</h4>
                </li>
                <li>
                    <div class=\"icondiv\"><img src=\"images/why-join-icon3.png\" alt=\"\"></div>
                    <h4>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 0, array(), "array"), "block3", array()), "html", null, true);
        echo "</h4>
                </li>
                <li>
                    <div class=\"icondiv\"><img src=\"images/why-join-icon2.png\" alt=\"\"></div>
                    <h4>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 0, array(), "array"), "block2", array()), "html", null, true);
        echo "</h4>
                </li>
                <li>
                    <div class=\"icondiv\"><img src=\"images/why-join-icon1.png\" alt=\"\"></div>
                    <h4>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 0, array(), "array"), "block1", array()), "html", null, true);
        echo "</h4>
                </li>
            </ul>
            <div class=\"freereg\"><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("sign_up");
        echo "\">להרשמה חינם</a></div>
        </div>
        <!-- whyjoin end -->



        <div class=\"qsearch\">










            <div class=\"wrap\" id=\"faces_container\">




                <div id=\"faces_init_data\" class=\"hidden\">
                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 113
            echo "                        <div class=\"item\">
                            <input type=\"hidden\" class=\"faceImageName\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "getMainPhoto", array()), "name", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" class=\"url\" value=\"\">
                            <input type=\"hidden\" class=\"username\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" class=\"age\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "age", array()), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                </div>

                <div class=\"face_wrapper first\"><img class=\"face\" alt=\"\"></div>
                <div class=\"face_wrapper second\"><img class=\"face\" alt=\"\"></div>
                <div class=\"face_wrapper third\"><img class=\"face\" alt=\"\"></div>
                <div class=\"face_wrapper fourth\"><img class=\"face\" alt=\"\"></div>
                <div class=\"face_wrapper fifth\"><img class=\"face\" alt=\"\"></div>

                <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/faces.js"), "html", null, true);
        echo "\"></script>
                <input type=\"hidden\" id=\"sign_up_path\" value=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("sign_up");
        echo "\">






                <div class=\"heading\"><";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 1, array(), "array"), "headerType", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 1, array(), "array"), "name", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 1, array(), "array"), "headerType", array()), "html", null, true);
        echo "></div>
                <div class=\"qform\">

                    <form action=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("public_search_results");
        echo "\" method=\"post\">


                        <div class=\"field\">
                            ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label');
        echo "
                            <div class=\"select\">
                                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "
                            </div>
                        </div>

                        ";
        // line 156
        echo "
                        <div class=\"field\">
                            ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()), 'label');
        echo "
                            <div class=\"select\">
                                ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()), 'widget');
        echo "
                            </div>
                        </div>

                        <div class=\"field\">
                            <label>בגיל: <span>מ-</span></label>
                            <div class=\"field2\">
                                <div class=\"select\">
                                   ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageFrom", array()), 'widget');
        echo "
                                </div>
                                <span>עד-</span>
                                <div class=\"select\">
                                        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageTo", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>

                        ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                        <div class=\"field\">
                            <div class=\"field2\">
                                <input type=\"button\" value=\"חפש\" class=\"btn\" onclick=\"\$(this).siblings('input[type=submit]').click()\">
                                <input type=\"submit\" class=\"hidden\">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- qsearch end -->

        <div class=\"parallax\">
            <div class=\"wrap\">
                <div class=\"contbox\">
                    <p>";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 2, array(), "array"), "block1", array()), "html", null, true);
        echo "</p>
                    <div class=\"freereg\"><a href=\"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("sign_up");
        echo "\">להרשמה חינם</a></div>
                </div>
            </div>
        </div>
        <!-- parallax end -->

        <div class=\"hp-articles\">
            <div class=\"wrap\">
                <div class=\"heading\"><a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("magazine");
        echo "\" id=\"mag\"><";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 3, array(), "array"), "headerType", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 3, array(), "array"), "name", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 3, array(), "array"), "headerType", array()), "html", null, true);
        echo "></a></div>
                <ul class=\"clearfix\">

                    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 209
            echo "                        <li>
                            <a href=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_article", array("uri" => $this->getAttribute($context["article"], "uri", array()))), "html", null, true);
            echo "\">
                                <div class=\"imagediv\">
                                    <img src=\"\" alt=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "imageAlt", array()), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "imageName", array()), "html", null, true);
            echo "\" class=\"homepageImageName\">
                                </div>
                            </a>
                            <a href=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_article", array("uri" => $this->getAttribute($context["article"], "uri", array()))), "html", null, true);
            echo "\" class=\"readmore\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</h3></a>
                            <p>
                                ";
            // line 218
            if ((twig_length_filter($this->env, $this->getAttribute($context["article"], "brief", array())) > 127)) {
                // line 219
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "brief", array()), 0, 126), "html", null, true);
                echo "...
                                ";
            } else {
                // line 221
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "brief", array()), "html", null, true);
                echo "
                                ";
            }
            // line 223
            echo "                            </p>
                            <a href=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_article", array("uri" => $this->getAttribute($context["article"], "uri", array()))), "html", null, true);
            echo "\" class=\"readmore\">להמשך קריאה</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                </ul>
            </div>
        </div>
        <!-- hp-articles end -->

        <div class=\"howjoin\">
            <div class=\"wrap\">
                <div class=\"heading\"><";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 4, array(), "array"), "headerType", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 4, array(), "array"), "name", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 4, array(), "array"), "headerType", array()), "html", null, true);
        echo "></div>
                <h3>";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 4, array(), "array"), "block1", array()), "html", null, true);
        echo "</h3>
                <div class=\"freereg\"><a href=\"";
        // line 236
        echo $this->env->getExtension('routing')->getPath("sign_up");
        echo "\">להרשמה חינם</a></div>
            </div>
        </div>
        <!-- howjoin -->

        <div class=\"connect\">
            <div class=\"wrap clearfix\">
                <div class=\"heading\"><";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 5, array(), "array"), "headerType", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 5, array(), "array"), "name", array()), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 5, array(), "array"), "headerType", array()), "html", null, true);
        echo "></div>
                <p>";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : $this->getContext($context, "homePageBlocks")), 5, array(), "array"), "block1", array()), "html", null, true);
        echo "</p>
                <div class=\"android-ios-img\"><a href=\"#\"><img src=\"images/hp-connect-ios.png\" alt=\"\"></a> <a href=\"#\"><img src=\"images/hp-connect-android.png\" alt=\"\"></a></div>
                <div class=\"mb-img\"><img src=\"images/hp-connect-mb-img.png\" alt=\"\"></div>
            </div>
        </div>
        <!-- connect end -->

    </div>
    <!-- Main Container -->



";
        
        $__internal_0dd40dc068154da30b56142ba0a324e5b9f67c07e25a0ee2850df23675f7f324->leave($__internal_0dd40dc068154da30b56142ba0a324e5b9f67c07e25a0ee2850df23675f7f324_prof);

    }

    public function getTemplateName()
    {
        return "frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 244,  489 => 243,  479 => 236,  475 => 235,  467 => 234,  458 => 227,  449 => 224,  446 => 223,  440 => 221,  434 => 219,  432 => 218,  425 => 216,  419 => 213,  415 => 212,  410 => 210,  407 => 209,  403 => 208,  391 => 205,  380 => 197,  376 => 196,  354 => 177,  346 => 172,  339 => 168,  328 => 160,  323 => 158,  319 => 156,  312 => 145,  307 => 143,  300 => 139,  290 => 136,  280 => 129,  276 => 128,  266 => 120,  257 => 117,  253 => 116,  248 => 114,  245 => 113,  241 => 112,  215 => 89,  209 => 86,  202 => 82,  195 => 78,  188 => 74,  177 => 70,  170 => 65,  161 => 62,  154 => 58,  150 => 57,  142 => 56,  137 => 53,  133 => 52,  124 => 45,  118 => 41,  116 => 40,  107 => 34,  103 => 33,  97 => 30,  93 => 29,  85 => 24,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'frontend/layout.html.twig' %}*/
/* */
/* {% block title %}{{ seo.title }}{% endblock %}*/
/* {% block meta_description %}{{ seo.description }}{% endblock %}*/
/* */
/* {% block container %}*/
/* */
/* */
/* */
/* */
/*     <div class="main-container">*/
/* */
/*         <header>*/
/* */
/*             <div class="toph1">*/
/*                 <h1>גרינדייט- הכרויות לצמחונים, הכרויות לטבעונים- הבית החם של קהילת הצמחונים והטבעונים למציאת זוגיות, ללא פשרות וללא ויתורים על ערכים!</h1>*/
/*             </div>*/
/* */
/*             <div class="wrap clearfix">*/
/* */
/*                 <div class="logo"><a href="/"><img src="images/logo.png" alt=""></a></div>*/
/*                 <div class="right">*/
/*                     <div class="topbtns">*/
/*                         <a href="{{ path('sign_up') }}" class="frmbtn">הירשמו חינם</a>*/
/*                         <a href="#" class="logbtn">כניסת חברים</a>*/
/*                     </div>*/
/* */
/*                     <div class="form">*/
/*                         <form action="{{ path('login_check') }}" method="post" id="login_form">*/
/*                             <input type="text" placeholder="שם משתמש או דוא״ל" class="txtbox" name="_username" value="{{ last_username }}" />*/
/*                             <input type="password" placeholder="סיסמה" class="txtbox" name="_password" />*/
/*                             <input type="button" value="כניסה" class="btn" onclick="$('#login_form').submit();" />*/
/*                             <a href="{{ path('password_recovery') }}" class="forgot-pwd">שכחת את הסיסמה?</a>*/
/*                             <input type="hidden" name="_target_path" value="{{ path('homepage') }}">*/
/*                         </form>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 {% if error %}*/
/*                     <div class="ui compact message red loginError">*/
/* שם משתמש או סיסמה לא נכונים*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/*         </header>*/
/*         <!-- header end -->*/
/* */
/*         <div class="hmslider slides">*/
/* */
/*             {% for slide in slides %}*/
/*                 <div class="slide" style="height: 660px;">*/
/*                     <div class="caption">*/
/*                         <div class="capinn">*/
/*                             <{{ slide.headerType }}>{{ slide.name|raw }}</{{ slide.headerType }}>*/
/*                             <p>{{ slide.content|raw }}</p>*/
/*                             <div class="joinbtn"><a href="{{ path('sign_up') }}">הצטרפו עכשיו חינם!</a></div>*/
/*                             <div class="btmbtn"><a href="#" class="apple-icon">&nbsp;</a> <a href="#" class="andriod-icon">&nbsp;</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <input type="hidden" value="{{ slide.imageName }}" class="imageName">*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*         </div>*/
/*         <!-- hmslider end -->*/
/* */
/*         <div class="whyjoin">*/
/*             <div class="heading"><{{ homePageBlocks[0].headerType }}>{{ homePageBlocks[0].name }}</{{ homePageBlocks[0].headerType }}></div>*/
/*             <ul class="clearfix">*/
/*                 <li>*/
/*                     <div class="icondiv"><img src="images/why-join-icon4.png" alt=""></div>*/
/*                     <h4>{{ homePageBlocks[0].block4 }}</h4>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="icondiv"><img src="images/why-join-icon3.png" alt=""></div>*/
/*                     <h4>{{ homePageBlocks[0].block3 }}</h4>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="icondiv"><img src="images/why-join-icon2.png" alt=""></div>*/
/*                     <h4>{{ homePageBlocks[0].block2 }}</h4>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="icondiv"><img src="images/why-join-icon1.png" alt=""></div>*/
/*                     <h4>{{ homePageBlocks[0].block1 }}</h4>*/
/*                 </li>*/
/*             </ul>*/
/*             <div class="freereg"><a href="{{ path('sign_up') }}">להרשמה חינם</a></div>*/
/*         </div>*/
/*         <!-- whyjoin end -->*/
/* */
/* */
/* */
/*         <div class="qsearch">*/
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
/*             <div class="wrap" id="faces_container">*/
/* */
/* */
/* */
/* */
/*                 <div id="faces_init_data" class="hidden">*/
/*                     {% for user in users %}*/
/*                         <div class="item">*/
/*                             <input type="hidden" class="faceImageName" value="{{ user.getMainPhoto.name }}">*/
/*                             <input type="hidden" class="url" value="">*/
/*                             <input type="hidden" class="username" value="{{ user.username }}">*/
/*                             <input type="hidden" class="age" value="{{ user.age }}">*/
/*                         </div>*/
/*                     {%endfor %}*/
/*                 </div>*/
/* */
/*                 <div class="face_wrapper first"><img class="face" alt=""></div>*/
/*                 <div class="face_wrapper second"><img class="face" alt=""></div>*/
/*                 <div class="face_wrapper third"><img class="face" alt=""></div>*/
/*                 <div class="face_wrapper fourth"><img class="face" alt=""></div>*/
/*                 <div class="face_wrapper fifth"><img class="face" alt=""></div>*/
/* */
/*                 <script src="{{ asset('js/faces.js') }}"></script>*/
/*                 <input type="hidden" id="sign_up_path" value="{{ path('sign_up') }}">*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                 <div class="heading"><{{ homePageBlocks[1].headerType }}>{{ homePageBlocks[1].name }}</{{ homePageBlocks[1].headerType }}></div>*/
/*                 <div class="qform">*/
/* */
/*                     <form action="{{ path('public_search_results') }}" method="post">*/
/* */
/* */
/*                         <div class="field">*/
/*                             {{ form_label(form.gender) }}*/
/*                             <div class="select">*/
/*                                 {{ form_widget(form.gender) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {#<div class="field">*/
/*                             {{ form_label(form.lookingGender) }}*/
/*                             <div class="select">*/
/*                                 {{ form_widget(form.lookingGender) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         #}*/
/* */
/*                         <div class="field">*/
/*                             {{ form_label(form.region) }}*/
/*                             <div class="select">*/
/*                                 {{ form_widget(form.region) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <label>בגיל: <span>מ-</span></label>*/
/*                             <div class="field2">*/
/*                                 <div class="select">*/
/*                                    {{ form_widget(form.ageFrom) }}*/
/*                                 </div>*/
/*                                 <span>עד-</span>*/
/*                                 <div class="select">*/
/*                                         {{ form_widget(form.ageTo) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {{ form_rest(form) }}*/
/* */
/*                         <div class="field">*/
/*                             <div class="field2">*/
/*                                 <input type="button" value="חפש" class="btn" onclick="$(this).siblings('input[type=submit]').click()">*/
/*                                 <input type="submit" class="hidden">*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </form>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- qsearch end -->*/
/* */
/*         <div class="parallax">*/
/*             <div class="wrap">*/
/*                 <div class="contbox">*/
/*                     <p>{{ homePageBlocks[2].block1 }}</p>*/
/*                     <div class="freereg"><a href="{{ path('sign_up') }}">להרשמה חינם</a></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- parallax end -->*/
/* */
/*         <div class="hp-articles">*/
/*             <div class="wrap">*/
/*                 <div class="heading"><a href="{{ path('magazine') }}" id="mag"><{{ homePageBlocks[3].headerType }}>{{ homePageBlocks[3].name }}</{{ homePageBlocks[3].headerType }}></a></div>*/
/*                 <ul class="clearfix">*/
/* */
/*                     {% for article in articles %}*/
/*                         <li>*/
/*                             <a href="{{ path('magazine_article', {'uri': article.uri }) }}">*/
/*                                 <div class="imagediv">*/
/*                                     <img src="" alt="{{ article.imageAlt }}">*/
/*                                     <input type="hidden" value="{{ article.imageName }}" class="homepageImageName">*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="{{ path('magazine_article', {'uri': article.uri }) }}" class="readmore"><h3>{{ article.name }}</h3></a>*/
/*                             <p>*/
/*                                 {% if article.brief|length > 127 %}*/
/*                                     {{ article.brief|slice(0,126) }}...*/
/*                                 {% else %}*/
/*                                     {{ article.brief }}*/
/*                                 {% endif %}*/
/*                             </p>*/
/*                             <a href="{{ path('magazine_article', {'uri': article.uri }) }}" class="readmore">להמשך קריאה</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <!-- hp-articles end -->*/
/* */
/*         <div class="howjoin">*/
/*             <div class="wrap">*/
/*                 <div class="heading"><{{ homePageBlocks[4].headerType }}>{{ homePageBlocks[4].name }}</{{ homePageBlocks[4].headerType }}></div>*/
/*                 <h3>{{ homePageBlocks[4].block1 }}</h3>*/
/*                 <div class="freereg"><a href="{{ path('sign_up') }}">להרשמה חינם</a></div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- howjoin -->*/
/* */
/*         <div class="connect">*/
/*             <div class="wrap clearfix">*/
/*                 <div class="heading"><{{ homePageBlocks[5].headerType }}>{{ homePageBlocks[5].name }}</{{ homePageBlocks[5].headerType }}></div>*/
/*                 <p>{{ homePageBlocks[5].block1 }}</p>*/
/*                 <div class="android-ios-img"><a href="#"><img src="images/hp-connect-ios.png" alt=""></a> <a href="#"><img src="images/hp-connect-android.png" alt=""></a></div>*/
/*                 <div class="mb-img"><img src="images/hp-connect-mb-img.png" alt=""></div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- connect end -->*/
/* */
/*     </div>*/
/*     <!-- Main Container -->*/
/* */
/* */
/* */
/* {% endblock %}*/
