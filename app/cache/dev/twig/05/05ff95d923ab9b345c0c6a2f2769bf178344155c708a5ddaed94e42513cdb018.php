<?php

/* :backend/content:index.html.twig */
class __TwigTemplate_da00adf0ff38be36370e93cfd5f0d872b368a3294a4a87fd7b2c206888d2a9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/content:index.html.twig", 1);
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
        echo twig_include($this->env, $context, "backend/header.html.twig", array("header" => "תוכן", "icon" => "text file"));
        echo "



    <div class=\"page_content\">

        <div class=\"ui two column grid\">

            <div class=\"column\">
                <div class=\"ui segment\">
                    <h2 class=\"ui header\">
                        <i class=\"home icon\"></i>
                        <div class=\"content\">
                            עמוד כניסה
                        </div>
                    </h2>

                    <div class=\"clear\"></div>


                    <h3 class=\"ui horizontal divider header\">
                        <i class=\"line chart olive icon\"></i>
                        SEO
                    </h3>

                    <br>


                    <form class=\"ui form\" id=\"home_page_seo\">
                        <div class=\"ui label\">Title</div>
                        <div class=\"field\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["homePageSeo"]) ? $context["homePageSeo"] : null), "title", array()), "html", null, true);
        echo "\">
                        </div>

                        <div class=\"ui label\">Meta Description</div>
                        <div class=\"field\">
                            <textarea name=\"description\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["homePageSeo"]) ? $context["homePageSeo"] : null), "description", array()), "html", null, true);
        echo "</textarea>
                        </div>

                        <input type=\"hidden\" name=\"page\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["homePageSeo"]) ? $context["homePageSeo"] : null), "page", array()), "html", null, true);
        echo "\">

                    </form>


                    <br><br>
                    <div class=\"ui one column centered grid\">
                        <button class=\"ui labeled icon orange approve button right\" onclick=\"updatePageSeo(\$('#home_page_seo'));\">
                            <i class=\"save icon\"></i>
                            לשמור
                        </button>
                    </div>
                    <br>




                    <h3 class=\"ui horizontal divider header\">
                        <i class=\"photo olive icon\"></i>
                        תמונות מתחלפות
                    </h3>

                    <div class=\"ui special cards slides\">
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 68
            echo "                            <div class=\"card olive\">
                                <div class=\"blurring dimmable image\">
                                    <div class=\"ui dimmer\">
                                        <div class=\"content\">
                                            <div class=\"center\">
                                                <div class=\"ui inverted button edit_slide\">לערוך</div>
                                                <input type=\"hidden\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "id", array()), "html", null, true);
            echo "\">
                                            </div>
                                        </div>
                                    </div>
                                    <img src=\"\" width=\"100%\" class=\"slide\" id=\"slide_";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "id", array()), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "imageName", array()), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"content\">
                                    <a class=\"header edit_slide\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    </div>

                    <br>

                    <h3 class=\"ui horizontal divider header\">
                        <i class=\"attach olive icon\"></i>
                        כותרות וטקסטים
                    </h3>

                    <br>

                    <div class=\"ui basic accordion\">

                        <div class=\"title\">
                            <h4 class=\"ui horizontal header\">
                                <i class=\"users olive icon\"></i>
                                ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 0, array(), "array"), "name", array()), "html", null, true);
        echo "
                            </h4>
                            <div class=\"ui divider\"></div>

                        </div>
                        <div class=\"content\">
                            <form class=\"ui form\" id=\"home_page_block_1\">
                                <div class=\"field\">
                                    <div class=\"ui small buttons headers\">
                                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 112
            echo "                                            <div class=\"ui button";
            if (($this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 0, array(), "array"), "headerType", array()) == ("h" . $context["i"]))) {
                echo " olive";
            }
            echo "\">h";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</div>
                                            ";
            // line 113
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<div class=\"or\"></div>";
            }
            // line 114
            echo "                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                        <input type=\"hidden\" name=\"headerType\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 0, array(), "array"), "headerType", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>

                                <div class=\"field\">
                                    <input type=\"text\" name=\"name\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 0, array(), "array"), "name", array()), "html", null, true);
        echo "\">
                                </div>

                                <div class=\"field\">
                                    <textarea name=\"block1\">";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 0, array(), "array"), "block1", array()), "html", null, true);
        echo "</textarea>
                                </div>

                                <div class=\"field\">
                                    <textarea name=\"block2\">";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 0, array(), "array"), "block2", array()), "html", null, true);
        echo "</textarea>
                                </div>

                                <div class=\"field\">
                                    <textarea name=\"block3\">";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 0, array(), "array"), "block3", array()), "html", null, true);
        echo "</textarea>
                                </div>

                                <div class=\"field\">
                                    <textarea name=\"block4\">";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 0, array(), "array"), "block4", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </form>

                            <br><br>

                            <div class=\"ui one column centered grid\">
                                <button class=\"ui labeled icon orange approve button right\" onclick=\"updateHomePageBlock(\$('#home_page_block_1'), 1)\">
                                    <i class=\"save icon\"></i>
                                    לשמור
                                </button>
                            </div>

                        </div>

                        <div class=\"mar_top\"></div>

                        <div class=\"title\">
                            <h4 class=\"ui horizontal header\">
                                <i class=\"search olive icon\"></i>
                                ";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 1, array(), "array"), "name", array()), "html", null, true);
        echo "
                            </h4>
                            <div class=\"ui divider\"></div>
                        </div>
                        <div class=\"content\">
                            <form class=\"ui form\" id=\"home_page_block_2\">
                                <div class=\"field\">
                                    <div class=\"ui small buttons headers\">
                                        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 165
            echo "                                            <div class=\"ui button";
            if (($this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 1, array(), "array"), "headerType", array()) == ("h" . $context["i"]))) {
                echo " olive";
            }
            echo "\">h";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</div>
                                            ";
            // line 166
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<div class=\"or\"></div>";
            }
            // line 167
            echo "                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                        <input type=\"hidden\" name=\"headerType\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 1, array(), "array"), "headerType", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <input type=\"text\" name=\"name\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 1, array(), "array"), "name", array()), "html", null, true);
        echo "\">
                                </div>
                            </form>
                            <br><br>
                            <div class=\"ui one column centered grid\">
                                <button class=\"ui labeled icon orange approve button right\" onclick=\"updateHomePageBlock(\$('#home_page_block_2'), 2)\">
                                    <i class=\"save icon\"></i>
                                    לשמור
                                </button>
                            </div>
                        </div>

                        <div class=\"mar_top\"></div>

                        <div class=\"title\">
                            <h4 class=\"ui horizontal header\">
                                <i class=\"align right olive icon\"></i>
                                ";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 2, array(), "array"), "name", array()), "html", null, true);
        echo "
                            </h4>
                            <div class=\"ui divider\"></div>
                        </div>

                        <div class=\"content\">
                            <form class=\"ui form\" id=\"home_page_block_3\">
                                <div class=\"field\">
                                    <textarea name=\"block1\">";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 2, array(), "array"), "block1", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </form>
                            <br><br>
                            <div class=\"ui one column centered grid\">
                                <button class=\"ui labeled icon orange approve button right\" onclick=\"updateHomePageBlock(\$('#home_page_block_3'), 3)\">
                                    <i class=\"save icon\"></i>
                                    לשמור
                                </button>
                            </div>
                        </div>

                        <div class=\"mar_top\"></div>

                        <div class=\"title\">
                            <h4 class=\"ui horizontal header\">
                                <i class=\"newspaper olive icon\"></i>
                                ";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 3, array(), "array"), "name", array()), "html", null, true);
        echo "
                            </h4>
                            <div class=\"ui divider\"></div>
                        </div>
                        <div class=\"content\">
                            <form class=\"ui form\" id=\"home_page_block_4\">
                                <div class=\"field\">
                                    <div class=\"ui small buttons headers\">
                                        ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 223
            echo "                                            <div class=\"ui button";
            if (($this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 3, array(), "array"), "headerType", array()) == ("h" . $context["i"]))) {
                echo " olive";
            }
            echo "\">h";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</div>
                                            ";
            // line 224
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<div class=\"or\"></div>";
            }
            // line 225
            echo "                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                                        <input type=\"hidden\" name=\"headerType\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 3, array(), "array"), "headerType", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <input type=\"text\" name=\"name\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 3, array(), "array"), "name", array()), "html", null, true);
        echo "\">
                                </div>
                            </form>
                            <br><br>
                            <div class=\"ui one column centered grid\">
                                <button class=\"ui labeled icon orange approve button right\" onclick=\"updateHomePageBlock(\$('#home_page_block_4'), 4)\">
                                    <i class=\"save icon\"></i>
                                    לשמור
                                </button>
                            </div>
                        </div>

                        <div class=\"mar_top\"></div>

                        <div class=\"title\">
                            <h4 class=\"ui horizontal header\">
                                <i class=\"add user olive icon\"></i>
                                ";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 4, array(), "array"), "name", array()), "html", null, true);
        echo "
                            </h4>
                            <div class=\"ui divider\"></div>
                        </div>
                        <div class=\"content\">
                            <form class=\"ui form\" id=\"home_page_block_5\">
                                <div class=\"field\">
                                    <div class=\"ui small buttons headers\">
                                        ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 256
            echo "                                            <div class=\"ui button";
            if (($this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 4, array(), "array"), "headerType", array()) == ("h" . $context["i"]))) {
                echo " olive";
            }
            echo "\">h";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</div>
                                            ";
            // line 257
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<div class=\"or\"></div>";
            }
            // line 258
            echo "                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "                                        <input type=\"hidden\" name=\"headerType\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 4, array(), "array"), "headerType", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <input type=\"text\" name=\"name\" value=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 4, array(), "array"), "name", array()), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"field\">
                                    <textarea name=\"block1\">";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 4, array(), "array"), "block1", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </form>
                            <br><br>
                            <div class=\"ui one column centered grid\">
                                <button class=\"ui labeled icon orange approve button right\" onclick=\"updateHomePageBlock(\$('#home_page_block_5'), 5)\">
                                    <i class=\"save icon\"></i>
                                    לשמור
                                </button>
                            </div>

                        </div>

                        <div class=\"mar_top\"></div>

                        <div class=\"title\">
                            <h4 class=\"ui horizontal header\">
                                <i class=\"mobile olive icon\"></i>
                                ";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 5, array(), "array"), "name", array()), "html", null, true);
        echo "
                            </h4>
                            <div class=\"ui divider\"></div>
                        </div>
                        <div class=\"content\">
                            <form class=\"ui form\" id=\"home_page_block_6\">
                                <div class=\"field\">
                                    <div class=\"ui small buttons headers\">
                                        ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 293
            echo "                                            <div class=\"ui button";
            if (($this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 5, array(), "array"), "headerType", array()) == ("h" . $context["i"]))) {
                echo " olive";
            }
            echo "\">h";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</div>
                                            ";
            // line 294
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<div class=\"or\"></div>";
            }
            // line 295
            echo "                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                                        <input type=\"hidden\" name=\"headerType\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 5, array(), "array"), "headerType", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <input type=\"text\" name=\"name\" value=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 5, array(), "array"), "name", array()), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"field\">
                                    <textarea name=\"block1\">";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePageBlocks"]) ? $context["homePageBlocks"] : null), 5, array(), "array"), "block1", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </form>
                            <br><br>
                            <div class=\"ui one column centered grid\">
                                <button class=\"ui labeled icon orange approve button right\" onclick=\"updateHomePageBlock(\$('#home_page_block_6'), 6)\">
                                    <i class=\"save icon\"></i>
                                    לשמור
                                </button>
                            </div>
                        </div>

                        <div class=\"mar_top\"></div>


                    </div>


                    <br>

                    <br>






                </div>

            </div>

            <div class=\"column\">
                <div class=\"ui segment\">
                    <h2 class=\"ui header right\">
                        <i class=\"file outline icon\"></i>
                        <div class=\"content\">
                            עמודים
                        </div>
                    </h2>

                    <div class=\"left\">
                        <a href=\"";
        // line 344
        echo $this->env->getExtension('routing')->getPath("admin_content_page");
        echo "\">
                            <button class=\"ui labeled icon orange approve large button right\">
                                <i class=\"add square icon\"></i>
                                הוסף
                            </button>
                        </a>
                    </div>

                    <div class=\"clear\"></div>


                    <table class=\"ui basic celled table pages\">
                        <thead>
                        <tr>
                            <th>כותרת</th>
                            <th>פעיל</th>
                            <th>להסיר</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 364
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 365
            echo "                            <tr>
                                <td class=\"alignRight\">
                                    <a href=\"";
            // line 367
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\" class=\"page_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</a>
                                    <input type=\"hidden\" class=\"page_id\" value=\"";
            // line 368
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\">
                                </td>

                                <td>
                                    <div class=\"ui checkbox toggle small\">
                                        <input type=\"checkbox\" ";
            // line 373
            if ($this->getAttribute($context["page"], "isActive", array())) {
                echo "checked=\"checked\"";
            }
            echo ">
                                        <label></label>
                                    </div>
                                </td>

                                <td>
                                    <i class=\"trash outline big link black icon circular delete\"></i>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "                        </tbody>
                    </table>

                </div>


                <div class=\"ui segment faq\">

                    ";
        // line 391
        echo twig_include($this->env, $context, "backend/content/faq_section.html.twig", array("faqCategories" => (isset($context["faqCategories"]) ? $context["faqCategories"] : null), "active_tab" => 1));
        echo "

                </div>


                <div class=\"ui segment\">

                    <h2 class=\"ui header right\" style=\"margin-top: 5px;\">
                        <i class=\"sort content descending icon\"></i>
                        כותרות בפוטר
                    </h2>

                    <div class=\"clear\"></div>

                    <div class=\"ui form footerHeaders\">
                        <div class=\"field\">
                            <div class=\"ui icon input\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["footerHeaders"]) ? $context["footerHeaders"] : null), 0, array(), "array"), "name", array()), "html", null, true);
        echo "\">
                                <input type=\"hidden\" value=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["footerHeaders"]) ? $context["footerHeaders"] : null), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\">
                                <i class=\"inverted orange circular save link icon\"></i>
                            </div>
                        </div>

                        <div class=\"field\">
                            <div class=\"ui icon input\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["footerHeaders"]) ? $context["footerHeaders"] : null), 1, array(), "array"), "name", array()), "html", null, true);
        echo "\">
                                <input type=\"hidden\" value=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["footerHeaders"]) ? $context["footerHeaders"] : null), 1, array(), "array"), "id", array()), "html", null, true);
        echo "\">
                                <i class=\"inverted orange circular save link icon\"></i>
                            </div>
                        </div>

                        <div class=\"field\">
                            <div class=\"ui icon input\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["footerHeaders"]) ? $context["footerHeaders"] : null), 2, array(), "array"), "name", array()), "html", null, true);
        echo "\">
                                <input type=\"hidden\" value=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["footerHeaders"]) ? $context["footerHeaders"] : null), 2, array(), "array"), "id", array()), "html", null, true);
        echo "\">
                                <i class=\"inverted orange circular save link icon\"></i>
                            </div>
                        </div>
                    </div>

                </div>


            </div>







        </div>




    </div>


";
    }

    public function getTemplateName()
    {
        return ":backend/content:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 425,  802 => 424,  792 => 417,  788 => 416,  778 => 409,  774 => 408,  754 => 391,  744 => 383,  726 => 373,  718 => 368,  712 => 367,  708 => 365,  704 => 364,  681 => 344,  637 => 303,  631 => 300,  623 => 296,  609 => 295,  605 => 294,  596 => 293,  579 => 292,  568 => 284,  547 => 266,  541 => 263,  533 => 259,  519 => 258,  515 => 257,  506 => 256,  489 => 255,  478 => 247,  458 => 230,  450 => 226,  436 => 225,  432 => 224,  423 => 223,  406 => 222,  395 => 214,  375 => 197,  364 => 189,  344 => 172,  336 => 168,  322 => 167,  318 => 166,  309 => 165,  292 => 164,  281 => 156,  258 => 136,  251 => 132,  244 => 128,  237 => 124,  230 => 120,  221 => 115,  207 => 114,  203 => 113,  194 => 112,  177 => 111,  165 => 102,  147 => 86,  137 => 82,  131 => 79,  127 => 78,  120 => 74,  112 => 68,  108 => 67,  82 => 44,  76 => 41,  68 => 36,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'תוכן', 'icon': 'text file' }) }}*/
/* */
/* */
/* */
/*     <div class="page_content">*/
/* */
/*         <div class="ui two column grid">*/
/* */
/*             <div class="column">*/
/*                 <div class="ui segment">*/
/*                     <h2 class="ui header">*/
/*                         <i class="home icon"></i>*/
/*                         <div class="content">*/
/*                             עמוד כניסה*/
/*                         </div>*/
/*                     </h2>*/
/* */
/*                     <div class="clear"></div>*/
/* */
/* */
/*                     <h3 class="ui horizontal divider header">*/
/*                         <i class="line chart olive icon"></i>*/
/*                         SEO*/
/*                     </h3>*/
/* */
/*                     <br>*/
/* */
/* */
/*                     <form class="ui form" id="home_page_seo">*/
/*                         <div class="ui label">Title</div>*/
/*                         <div class="field">*/
/*                             <input type="text" name="title" value="{{ homePageSeo.title }}">*/
/*                         </div>*/
/* */
/*                         <div class="ui label">Meta Description</div>*/
/*                         <div class="field">*/
/*                             <textarea name="description">{{ homePageSeo.description }}</textarea>*/
/*                         </div>*/
/* */
/*                         <input type="hidden" name="page" value="{{ homePageSeo.page }}">*/
/* */
/*                     </form>*/
/* */
/* */
/*                     <br><br>*/
/*                     <div class="ui one column centered grid">*/
/*                         <button class="ui labeled icon orange approve button right" onclick="updatePageSeo($('#home_page_seo'));">*/
/*                             <i class="save icon"></i>*/
/*                             לשמור*/
/*                         </button>*/
/*                     </div>*/
/*                     <br>*/
/* */
/* */
/* */
/* */
/*                     <h3 class="ui horizontal divider header">*/
/*                         <i class="photo olive icon"></i>*/
/*                         תמונות מתחלפות*/
/*                     </h3>*/
/* */
/*                     <div class="ui special cards slides">*/
/*                         {% for slide in slides %}*/
/*                             <div class="card olive">*/
/*                                 <div class="blurring dimmable image">*/
/*                                     <div class="ui dimmer">*/
/*                                         <div class="content">*/
/*                                             <div class="center">*/
/*                                                 <div class="ui inverted button edit_slide">לערוך</div>*/
/*                                                 <input type="hidden" value="{{ slide.id }}">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <img src="" width="100%" class="slide" id="slide_{{ slide.id }}">*/
/*                                     <input type="hidden" value="{{ slide.imageName }}">*/
/*                                 </div>*/
/*                                 <div class="content">*/
/*                                     <a class="header edit_slide">{{ slide.name }}</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <br>*/
/* */
/*                     <h3 class="ui horizontal divider header">*/
/*                         <i class="attach olive icon"></i>*/
/*                         כותרות וטקסטים*/
/*                     </h3>*/
/* */
/*                     <br>*/
/* */
/*                     <div class="ui basic accordion">*/
/* */
/*                         <div class="title">*/
/*                             <h4 class="ui horizontal header">*/
/*                                 <i class="users olive icon"></i>*/
/*                                 {{ homePageBlocks[0].name }}*/
/*                             </h4>*/
/*                             <div class="ui divider"></div>*/
/* */
/*                         </div>*/
/*                         <div class="content">*/
/*                             <form class="ui form" id="home_page_block_1">*/
/*                                 <div class="field">*/
/*                                     <div class="ui small buttons headers">*/
/*                                         {% for i in 1..5 %}*/
/*                                             <div class="ui button{% if homePageBlocks[0].headerType == 'h' ~ i %} olive{% endif %}">h{{ i }}</div>*/
/*                                             {% if not loop.last %}<div class="or"></div>{% endif %}*/
/*                                         {% endfor %}*/
/*                                         <input type="hidden" name="headerType" value="{{ homePageBlocks[0].headerType }}">*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="field">*/
/*                                     <input type="text" name="name" value="{{ homePageBlocks[0].name }}">*/
/*                                 </div>*/
/* */
/*                                 <div class="field">*/
/*                                     <textarea name="block1">{{ homePageBlocks[0].block1 }}</textarea>*/
/*                                 </div>*/
/* */
/*                                 <div class="field">*/
/*                                     <textarea name="block2">{{ homePageBlocks[0].block2 }}</textarea>*/
/*                                 </div>*/
/* */
/*                                 <div class="field">*/
/*                                     <textarea name="block3">{{ homePageBlocks[0].block3 }}</textarea>*/
/*                                 </div>*/
/* */
/*                                 <div class="field">*/
/*                                     <textarea name="block4">{{ homePageBlocks[0].block4 }}</textarea>*/
/*                                 </div>*/
/*                             </form>*/
/* */
/*                             <br><br>*/
/* */
/*                             <div class="ui one column centered grid">*/
/*                                 <button class="ui labeled icon orange approve button right" onclick="updateHomePageBlock($('#home_page_block_1'), 1)">*/
/*                                     <i class="save icon"></i>*/
/*                                     לשמור*/
/*                                 </button>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="mar_top"></div>*/
/* */
/*                         <div class="title">*/
/*                             <h4 class="ui horizontal header">*/
/*                                 <i class="search olive icon"></i>*/
/*                                 {{ homePageBlocks[1].name }}*/
/*                             </h4>*/
/*                             <div class="ui divider"></div>*/
/*                         </div>*/
/*                         <div class="content">*/
/*                             <form class="ui form" id="home_page_block_2">*/
/*                                 <div class="field">*/
/*                                     <div class="ui small buttons headers">*/
/*                                         {% for i in 1..5 %}*/
/*                                             <div class="ui button{% if homePageBlocks[1].headerType == 'h' ~ i %} olive{% endif %}">h{{ i }}</div>*/
/*                                             {% if not loop.last %}<div class="or"></div>{% endif %}*/
/*                                         {% endfor %}*/
/*                                         <input type="hidden" name="headerType" value="{{ homePageBlocks[1].headerType }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="field">*/
/*                                     <input type="text" name="name" value="{{ homePageBlocks[1].name }}">*/
/*                                 </div>*/
/*                             </form>*/
/*                             <br><br>*/
/*                             <div class="ui one column centered grid">*/
/*                                 <button class="ui labeled icon orange approve button right" onclick="updateHomePageBlock($('#home_page_block_2'), 2)">*/
/*                                     <i class="save icon"></i>*/
/*                                     לשמור*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="mar_top"></div>*/
/* */
/*                         <div class="title">*/
/*                             <h4 class="ui horizontal header">*/
/*                                 <i class="align right olive icon"></i>*/
/*                                 {{ homePageBlocks[2].name }}*/
/*                             </h4>*/
/*                             <div class="ui divider"></div>*/
/*                         </div>*/
/* */
/*                         <div class="content">*/
/*                             <form class="ui form" id="home_page_block_3">*/
/*                                 <div class="field">*/
/*                                     <textarea name="block1">{{ homePageBlocks[2].block1 }}</textarea>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <br><br>*/
/*                             <div class="ui one column centered grid">*/
/*                                 <button class="ui labeled icon orange approve button right" onclick="updateHomePageBlock($('#home_page_block_3'), 3)">*/
/*                                     <i class="save icon"></i>*/
/*                                     לשמור*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="mar_top"></div>*/
/* */
/*                         <div class="title">*/
/*                             <h4 class="ui horizontal header">*/
/*                                 <i class="newspaper olive icon"></i>*/
/*                                 {{ homePageBlocks[3].name }}*/
/*                             </h4>*/
/*                             <div class="ui divider"></div>*/
/*                         </div>*/
/*                         <div class="content">*/
/*                             <form class="ui form" id="home_page_block_4">*/
/*                                 <div class="field">*/
/*                                     <div class="ui small buttons headers">*/
/*                                         {% for i in 1..5 %}*/
/*                                             <div class="ui button{% if homePageBlocks[3].headerType == 'h' ~ i %} olive{% endif %}">h{{ i }}</div>*/
/*                                             {% if not loop.last %}<div class="or"></div>{% endif %}*/
/*                                         {% endfor %}*/
/*                                         <input type="hidden" name="headerType" value="{{ homePageBlocks[3].headerType }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="field">*/
/*                                     <input type="text" name="name" value="{{ homePageBlocks[3].name }}">*/
/*                                 </div>*/
/*                             </form>*/
/*                             <br><br>*/
/*                             <div class="ui one column centered grid">*/
/*                                 <button class="ui labeled icon orange approve button right" onclick="updateHomePageBlock($('#home_page_block_4'), 4)">*/
/*                                     <i class="save icon"></i>*/
/*                                     לשמור*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="mar_top"></div>*/
/* */
/*                         <div class="title">*/
/*                             <h4 class="ui horizontal header">*/
/*                                 <i class="add user olive icon"></i>*/
/*                                 {{ homePageBlocks[4].name }}*/
/*                             </h4>*/
/*                             <div class="ui divider"></div>*/
/*                         </div>*/
/*                         <div class="content">*/
/*                             <form class="ui form" id="home_page_block_5">*/
/*                                 <div class="field">*/
/*                                     <div class="ui small buttons headers">*/
/*                                         {% for i in 1..5 %}*/
/*                                             <div class="ui button{% if homePageBlocks[4].headerType == 'h' ~ i %} olive{% endif %}">h{{ i }}</div>*/
/*                                             {% if not loop.last %}<div class="or"></div>{% endif %}*/
/*                                         {% endfor %}*/
/*                                         <input type="hidden" name="headerType" value="{{ homePageBlocks[4].headerType }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="field">*/
/*                                     <input type="text" name="name" value="{{ homePageBlocks[4].name }}">*/
/*                                 </div>*/
/*                                 <div class="field">*/
/*                                     <textarea name="block1">{{ homePageBlocks[4].block1 }}</textarea>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <br><br>*/
/*                             <div class="ui one column centered grid">*/
/*                                 <button class="ui labeled icon orange approve button right" onclick="updateHomePageBlock($('#home_page_block_5'), 5)">*/
/*                                     <i class="save icon"></i>*/
/*                                     לשמור*/
/*                                 </button>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="mar_top"></div>*/
/* */
/*                         <div class="title">*/
/*                             <h4 class="ui horizontal header">*/
/*                                 <i class="mobile olive icon"></i>*/
/*                                 {{ homePageBlocks[5].name }}*/
/*                             </h4>*/
/*                             <div class="ui divider"></div>*/
/*                         </div>*/
/*                         <div class="content">*/
/*                             <form class="ui form" id="home_page_block_6">*/
/*                                 <div class="field">*/
/*                                     <div class="ui small buttons headers">*/
/*                                         {% for i in 1..5 %}*/
/*                                             <div class="ui button{% if homePageBlocks[5].headerType == 'h' ~ i %} olive{% endif %}">h{{ i }}</div>*/
/*                                             {% if not loop.last %}<div class="or"></div>{% endif %}*/
/*                                         {% endfor %}*/
/*                                         <input type="hidden" name="headerType" value="{{ homePageBlocks[5].headerType }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="field">*/
/*                                     <input type="text" name="name" value="{{ homePageBlocks[5].name }}">*/
/*                                 </div>*/
/*                                 <div class="field">*/
/*                                     <textarea name="block1">{{ homePageBlocks[5].block1 }}</textarea>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <br><br>*/
/*                             <div class="ui one column centered grid">*/
/*                                 <button class="ui labeled icon orange approve button right" onclick="updateHomePageBlock($('#home_page_block_6'), 6)">*/
/*                                     <i class="save icon"></i>*/
/*                                     לשמור*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="mar_top"></div>*/
/* */
/* */
/*                     </div>*/
/* */
/* */
/*                     <br>*/
/* */
/*                     <br>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="column">*/
/*                 <div class="ui segment">*/
/*                     <h2 class="ui header right">*/
/*                         <i class="file outline icon"></i>*/
/*                         <div class="content">*/
/*                             עמודים*/
/*                         </div>*/
/*                     </h2>*/
/* */
/*                     <div class="left">*/
/*                         <a href="{{ path('admin_content_page') }}">*/
/*                             <button class="ui labeled icon orange approve large button right">*/
/*                                 <i class="add square icon"></i>*/
/*                                 הוסף*/
/*                             </button>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div class="clear"></div>*/
/* */
/* */
/*                     <table class="ui basic celled table pages">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>כותרת</th>*/
/*                             <th>פעיל</th>*/
/*                             <th>להסיר</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for page in pages %}*/
/*                             <tr>*/
/*                                 <td class="alignRight">*/
/*                                     <a href="{{ path('admin_content_page_edit', {'id': page.id}) }}" class="page_name">{{ page.name }}</a>*/
/*                                     <input type="hidden" class="page_id" value="{{ page.id }}">*/
/*                                 </td>*/
/* */
/*                                 <td>*/
/*                                     <div class="ui checkbox toggle small">*/
/*                                         <input type="checkbox" {% if page.isActive %}checked="checked"{% endif %}>*/
/*                                         <label></label>*/
/*                                     </div>*/
/*                                 </td>*/
/* */
/*                                 <td>*/
/*                                     <i class="trash outline big link black icon circular delete"></i>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="ui segment faq">*/
/* */
/*                     {{ include('backend/content/faq_section.html.twig', { 'faqCategories': faqCategories, 'active_tab': 1 }) }}*/
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="ui segment">*/
/* */
/*                     <h2 class="ui header right" style="margin-top: 5px;">*/
/*                         <i class="sort content descending icon"></i>*/
/*                         כותרות בפוטר*/
/*                     </h2>*/
/* */
/*                     <div class="clear"></div>*/
/* */
/*                     <div class="ui form footerHeaders">*/
/*                         <div class="field">*/
/*                             <div class="ui icon input">*/
/*                                 <input type="text" name="name" value="{{ footerHeaders[0].name }}">*/
/*                                 <input type="hidden" value="{{ footerHeaders[0].id }}">*/
/*                                 <i class="inverted orange circular save link icon"></i>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <div class="ui icon input">*/
/*                                 <input type="text" name="name" value="{{ footerHeaders[1].name }}">*/
/*                                 <input type="hidden" value="{{ footerHeaders[1].id }}">*/
/*                                 <i class="inverted orange circular save link icon"></i>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <div class="ui icon input">*/
/*                                 <input type="text" name="name" value="{{ footerHeaders[2].name }}">*/
/*                                 <input type="hidden" value="{{ footerHeaders[2].id }}">*/
/*                                 <i class="inverted orange circular save link icon"></i>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/* */
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
