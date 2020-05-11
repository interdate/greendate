<?php

/* :frontend/user:advanced_search.html.twig */
class __TwigTemplate_e8bc25151282e9796378545ca185e5567dd352e81ab5d24fa4d30c54a2c73a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/user:advanced_search.html.twig", 1);
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
    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("user_search_results");
        echo "\" method=\"post\">
        <div class=\"midsec\">
            <h1>חיפוש מתקדם</h1>
            <div class=\"searches\">
                <div class=\"sercformsec\">
                    <!-- Row 1 -->
                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'label');
        echo "</div>

                        <div class=\"leftcont clearfix\">
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 16
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox region\">
                                        ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'widget');
            echo "
                                        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'label');
            echo "
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        </div>
                    </div>
                    <!-- Row 1 -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">גיל</div>
                        <div class=\"leftcont clearfix\">
                            <div class=\"smallabelbox\">מ-</div>
                            <div class=\"select\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageFrom", array()), 'widget');
        echo "</div>
                            <div class=\"smallabelbox\">עד-</div>
                            <div class=\"select\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageTo", array()), 'widget');
        echo "</div>
                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">גובה</div>
                        <div class=\"leftcont clearfix\">
                            <div class=\"smallabelbox\">מ-</div>
                            <div class=\"select\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "heightFrom", array()), 'widget');
        echo "</div>
                            <div class=\"smallabelbox\">עד-</div>
                            <div class=\"select\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "heightTo", array()), 'widget');
        echo "</div>
                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'label');
        echo "</div>
                        <div class=\"leftcont\">
                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["body"]) {
            // line 53
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["body"], 'widget');
            echo "
                                        ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["body"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 59
            if (($this->getAttribute($context["loop"], "index", array()) == 4)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 60
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["relationshipStatus"]) {
            // line 69
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["relationshipStatus"], 'widget');
            echo "
                                        ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["relationshipStatus"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 75
            if (($this->getAttribute($context["loop"], "index", array()) == 4)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 76
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relationshipStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 85
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'widget');
            echo "
                                        ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'label');
            echo "
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            <div class=\"half\">
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["occupation"]) {
            // line 101
            echo "                                ";
            if (($this->getAttribute($context["loop"], "index", array()) == 17)) {
                // line 102
                echo "                            </div>
                            <div class=\"half\">
                                ";
            }
            // line 105
            echo "                                    <div class=\"chkbox\">
                                        <div class=\"ui checkbox\">
                                            ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["occupation"], 'widget');
            echo "
                                            ";
            // line 108
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["occupation"], 'label');
            echo "
                                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occupation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                            </div>
                            <!-- end -->
                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
            // line 122
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["education"], 'widget');
            echo "
                                        ";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["education"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 128
            if (($this->getAttribute($context["loop"], "index", array()) == 3)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 129
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["religion"]) {
            // line 138
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 140
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["religion"], 'widget');
            echo "
                                        ";
            // line 141
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["religion"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 144
            if (($this->getAttribute($context["loop"], "index", array()) == 4)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 145
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['religion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["sexOrientation"]) {
            // line 154
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 156
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sexOrientation"], 'widget');
            echo "
                                        ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sexOrientation"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 160
            if (($this->getAttribute($context["loop"], "index", array()) == 3)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 161
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sexOrientation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["purposes"]) {
            // line 170
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 172
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purposes"], 'widget');
            echo "
                                        ";
            // line 173
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purposes"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 176
            if (($this->getAttribute($context["loop"], "index", array()) == 4)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 177
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purposes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["smoking"]) {
            // line 186
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 188
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["smoking"], 'widget');
            echo "
                                        ";
            // line 189
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["smoking"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 192
            if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 193
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smoking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["drinking"]) {
            // line 202
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 204
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["drinking"], 'widget');
            echo "
                                        ";
            // line 205
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["drinking"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 208
            if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 209
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drinking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"rptbox\">
                        <div class=\"labelbox\">";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), 'label');
        echo "</div>
                        <div class=\"leftcont clearfix\">
                            ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
            // line 218
            echo "                                <div class=\"chkbox\">
                                    <div class=\"ui checkbox\">
                                        ";
            // line 220
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["children"], 'widget');
            echo "
                                        ";
            // line 221
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["children"], 'label');
            echo "
                                    </div>
                                </div>
                                ";
            // line 224
            if (($this->getAttribute($context["loop"], "index", array()) == 3)) {
                echo "<div class=\"clr\"></div>";
            }
            // line 225
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                        </div>
                    </div>
                    <!-- end -->

                    <div class=\"field padd\">
                        <div class=\"ui checkbox\">
                            ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "withPhoto", array()), 'widget');
        echo "
                            ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "withPhoto", array()), 'label');
        echo "
                        </div>
                    </div>

                    <div class=\"clearfix\">
                        ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filter", array()), 'widget');
        echo "
                        <input type=\"button\" value=\"חפשו\" class=\"free\" onclick=\"\$(this).siblings('input[type=submit]').click();\">
                        <input type=\"submit\" class=\"hidden\">
                    </div>
                </div>
            </div>
        </div>
        <!-- midsec end -->
    </form>


";
    }

    public function getTemplateName()
    {
        return ":frontend/user:advanced_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 238,  767 => 233,  763 => 232,  755 => 226,  741 => 225,  737 => 224,  731 => 221,  727 => 220,  723 => 218,  706 => 217,  701 => 215,  694 => 210,  680 => 209,  676 => 208,  670 => 205,  666 => 204,  662 => 202,  645 => 201,  640 => 199,  633 => 194,  619 => 193,  615 => 192,  609 => 189,  605 => 188,  601 => 186,  584 => 185,  579 => 183,  572 => 178,  558 => 177,  554 => 176,  548 => 173,  544 => 172,  540 => 170,  523 => 169,  518 => 167,  511 => 162,  497 => 161,  493 => 160,  487 => 157,  483 => 156,  479 => 154,  462 => 153,  457 => 151,  450 => 146,  436 => 145,  432 => 144,  426 => 141,  422 => 140,  418 => 138,  401 => 137,  396 => 135,  389 => 130,  375 => 129,  371 => 128,  365 => 125,  361 => 124,  357 => 122,  340 => 121,  335 => 119,  326 => 112,  308 => 108,  304 => 107,  300 => 105,  295 => 102,  292 => 101,  275 => 100,  269 => 97,  262 => 92,  252 => 88,  248 => 87,  244 => 85,  240 => 84,  235 => 82,  228 => 77,  214 => 76,  210 => 75,  204 => 72,  200 => 71,  196 => 69,  179 => 68,  174 => 66,  167 => 61,  153 => 60,  149 => 59,  143 => 56,  139 => 55,  135 => 53,  118 => 52,  113 => 50,  104 => 44,  99 => 42,  87 => 33,  82 => 31,  72 => 23,  62 => 19,  58 => 18,  54 => 16,  50 => 15,  44 => 12,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <form action="{{ path('user_search_results') }}" method="post">*/
/*         <div class="midsec">*/
/*             <h1>חיפוש מתקדם</h1>*/
/*             <div class="searches">*/
/*                 <div class="sercformsec">*/
/*                     <!-- Row 1 -->*/
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.region) }}</div>*/
/* */
/*                         <div class="leftcont clearfix">*/
/*                             {% for region in form.region %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox region">*/
/*                                         {{ form_widget(region) }}*/
/*                                         {{ form_label(region) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Row 1 -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">גיל</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             <div class="smallabelbox">מ-</div>*/
/*                             <div class="select">{{ form_widget(form.ageFrom) }}</div>*/
/*                             <div class="smallabelbox">עד-</div>*/
/*                             <div class="select">{{ form_widget(form.ageTo) }}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">גובה</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             <div class="smallabelbox">מ-</div>*/
/*                             <div class="select">{{ form_widget(form.heightFrom) }}</div>*/
/*                             <div class="smallabelbox">עד-</div>*/
/*                             <div class="select">{{ form_widget(form.heightTo) }}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.body) }}</div>*/
/*                         <div class="leftcont">*/
/*                             {% for body in form.body %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(body) }}*/
/*                                         {{ form_label(body) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 4 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.relationshipStatus) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for relationshipStatus in form.relationshipStatus %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(relationshipStatus) }}*/
/*                                         {{ form_label(relationshipStatus) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 4 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.type) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for type in form.type %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(type) }}*/
/*                                         {{ form_label(type) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.occupation) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             <div class="half">*/
/*                                 {% for occupation in form.occupation %}*/
/*                                 {% if loop.index == 17 %}*/
/*                             </div>*/
/*                             <div class="half">*/
/*                                 {% endif %}*/
/*                                     <div class="chkbox">*/
/*                                         <div class="ui checkbox">*/
/*                                             {{ form_widget(occupation) }}*/
/*                                             {{ form_label(occupation) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             <!-- end -->*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.education) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for education in form.education %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(education) }}*/
/*                                         {{ form_label(education) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 3 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.religion) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for religion in form.religion %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(religion) }}*/
/*                                         {{ form_label(religion) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 4 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.sexOrientation) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for sexOrientation in form.sexOrientation %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(sexOrientation) }}*/
/*                                         {{ form_label(sexOrientation) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 3 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.purposes) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for purposes in form.purposes %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(purposes) }}*/
/*                                         {{ form_label(purposes) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 4 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.smoking) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for smoking in form.smoking %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(smoking) }}*/
/*                                         {{ form_label(smoking) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 2 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.drinking) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for drinking in form.drinking %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(drinking) }}*/
/*                                         {{ form_label(drinking) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 2 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="rptbox">*/
/*                         <div class="labelbox">{{ form_label(form.children) }}</div>*/
/*                         <div class="leftcont clearfix">*/
/*                             {% for children in form.children %}*/
/*                                 <div class="chkbox">*/
/*                                     <div class="ui checkbox">*/
/*                                         {{ form_widget(children) }}*/
/*                                         {{ form_label(children) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if loop.index == 3 %}<div class="clr"></div>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- end -->*/
/* */
/*                     <div class="field padd">*/
/*                         <div class="ui checkbox">*/
/*                             {{ form_widget(form.withPhoto) }}*/
/*                             {{ form_label(form.withPhoto) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="clearfix">*/
/*                         {{ form_widget(form.filter) }}*/
/*                         <input type="button" value="חפשו" class="free" onclick="$(this).siblings('input[type=submit]').click();">*/
/*                         <input type="submit" class="hidden">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- midsec end -->*/
/*     </form>*/
/* */
/* */
/* {% endblock %}*/
