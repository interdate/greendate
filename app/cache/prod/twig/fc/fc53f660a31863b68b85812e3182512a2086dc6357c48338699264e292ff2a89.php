<?php

/* :backend/users:advanced_search.html.twig */
class __TwigTemplate_6021d4bd5c4e1249a269737cfe73873d7b9bd4ae6b67fb1e22a1d3eeeec19d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/users:advanced_search.html.twig", 1);
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
        echo twig_include($this->env, $context, "backend/header.html.twig", array("header" => "ניהול משתמשים", "icon" => "users"));
        echo "

    <div class=\"page_content\">

        <div class=\"ui segment left advanced_search\">

            <h2 class=\"ui header\">
                <i class=\"search icon\"></i>
                <div class=\"content\">
                    חיפוש מתקדם
                </div>
            </h2>


            <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_users", array("filter" => "search"));
        echo "\" method=\"post\" id=\"advanced_search_form\">

                <div class=\"ui form\">

                    <a class=\"ui orange big ribbon label\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 26
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'widget');
            echo "
                                ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageFrom", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageFrom", array()), 'widget');
        echo "</div>
                        <div class=\"right pair\"> עד-</div>
                        <div class=\"right pair\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageTo", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">גובה</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "heightFrom", array()), 'widget');
        echo "</div>
                        <div class=\"right pair\"> עד-</div>
                        <div class=\"right pair\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "heightTo", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["body"]) {
            // line 52
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["body"], 'widget');
            echo "
                                ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["body"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </div>


                    <a class=\"ui orange big ribbon label\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relationshipStatus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["relationshipStatus"]) {
            // line 63
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["relationshipStatus"], 'widget');
            echo "
                                ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["relationshipStatus"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relationshipStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 73
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'widget');
            echo "
                                ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "occupation", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["occupation"]) {
            // line 83
            echo "                            <div class=\"ui checkbox two\">
                                ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["occupation"], 'widget');
            echo "
                                ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["occupation"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occupation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "education", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
            // line 93
            echo "                            <div class=\"ui checkbox three\">
                                ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["education"], 'widget');
            echo "
                                ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["education"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "religion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["religion"]) {
            // line 103
            echo "                            <div class=\"ui checkbox three\">
                                ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["religion"], 'widget');
            echo "
                                ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["religion"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['religion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexOrientation", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sexOrientation"]) {
            // line 113
            echo "                            <div class=\"ui checkbox three\">
                                ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sexOrientation"], 'widget');
            echo "
                                ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sexOrientation"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sexOrientation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purposes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["purpose"]) {
            // line 123
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purpose"], 'widget');
            echo "
                                ";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["purpose"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purpose'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "veggieReasons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["veggieReason"]) {
            // line 133
            echo "                            <div class=\"ui checkbox three\">
                                ";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["veggieReason"], 'widget');
            echo "
                                ";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["veggieReason"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['veggieReason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 143
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 144
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["interest"], 'widget');
            echo "
                                ";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["interest"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["smoking"]) {
            // line 153
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 154
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["smoking"], 'widget');
            echo "
                                ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["smoking"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smoking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "drinking", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["drinking"]) {
            // line 163
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 164
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["drinking"], 'widget');
            echo "
                                ";
            // line 165
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["drinking"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drinking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
            // line 173
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 174
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["children"], 'widget');
            echo "
                                ";
            // line 175
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["children"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zodiac", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zodiac", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["zodiac"]) {
            // line 183
            echo "                            <div class=\"ui checkbox four\">
                                ";
            // line 184
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["zodiac"], 'widget');
            echo "
                                ";
            // line 185
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["zodiac"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zodiac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "loginFrom", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "loginFrom", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["loginFrom"]) {
            // line 193
            echo "                            <div class=\"ui checkbox three\">
                                ";
            // line 194
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["loginFrom"], 'widget');
            echo "
                                ";
            // line 195
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["loginFrom"], 'label');
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginFrom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "                    </div>


                    <a class=\"ui orange big ribbon label\">";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isFrozen", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isFrozen", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isPaying", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isPaying", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hasPoints", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hasPoints", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isPhoto", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isPhoto", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isPhone", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isPhone", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>





                    <a class=\"ui orange big ribbon label\">";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "startSubscriptionFrom", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair calendar date_from\">";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "startSubscriptionFrom", array()), 'widget');
        echo "</div>
                        <div class=\"right pair\"> עד-</div>
                        <div class=\"right pair calendar date_to\">";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "startSubscriptionTo", array()), 'widget');
        echo "</div>
                        <div class=\"left pair period\">
                            ";
        // line 247
        echo twig_include($this->env, $context, "backend/users/select_period.html.twig");
        echo "
                        </div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endSubscriptionFrom", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair calendar date_from\">";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endSubscriptionFrom", array()), 'widget');
        echo "</div>
                        <div class=\"right pair\"> עד-</div>
                        <div class=\"right pair calendar date_to\">";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endSubscriptionTo", array()), 'widget');
        echo "</div>
                        <div class=\"left pair period\">
                            ";
        // line 258
        echo twig_include($this->env, $context, "backend/users/select_period.html.twig");
        echo "
                        </div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "signUpFrom", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair calendar date_from\">";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "signUpFrom", array()), 'widget');
        echo "</div>
                        <div class=\"right pair\"> עד-</div>
                        <div class=\"right pair calendar date_to\">";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "signUpTo", array()), 'widget');
        echo "</div><div class=\"left pair period\">
                            ";
        // line 268
        echo twig_include($this->env, $context, "backend/users/select_period.html.twig");
        echo "
                        </div>

                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastVisitedFrom", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair calendar date_from\">";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastVisitedFrom", array()), 'widget');
        echo "</div>
                        <div class=\"right pair\"> עד-</div>
                        <div class=\"right pair calendar date_to\">";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastVisitedTo", array()), 'widget');
        echo "</div>
                        <div class=\"left pair period\">
                            ";
        // line 280
        echo twig_include($this->env, $context, "backend/users/select_period.html.twig");
        echo "
                        </div>
                        <div class=\"clear\"></div>
                    </div>

                    <a class=\"ui orange big ribbon label\">";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ip", array()), 'label');
        echo "</a>
                    <div class=\"block\">
                        <div class=\"right pair\">";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ip", array()), 'widget');
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>





                </div>

                <div class=\"buttonCont\">
                    <div class=\"ui one column centered grid\">
                        ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filter", array()), 'widget');
        echo "
                        <button class=\"ui red huge button\" onclick=\"\$(this).siblings('input[type=submit]').click();\">חפשו</button>
                        <input type=\"submit\" class=\"hidden\">
                    </div>
                </div>





            </form>




        </div>


    </div>




";
    }

    public function getTemplateName()
    {
        return ":backend/users:advanced_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  743 => 299,  728 => 287,  723 => 285,  715 => 280,  710 => 278,  705 => 276,  700 => 274,  691 => 268,  687 => 267,  682 => 265,  677 => 263,  669 => 258,  664 => 256,  659 => 254,  654 => 252,  646 => 247,  641 => 245,  636 => 243,  631 => 241,  620 => 233,  615 => 231,  608 => 227,  603 => 225,  596 => 221,  591 => 219,  584 => 215,  579 => 213,  572 => 209,  567 => 207,  560 => 203,  555 => 201,  550 => 198,  541 => 195,  537 => 194,  534 => 193,  530 => 192,  525 => 190,  521 => 188,  512 => 185,  508 => 184,  505 => 183,  501 => 182,  496 => 180,  492 => 178,  483 => 175,  479 => 174,  476 => 173,  472 => 172,  467 => 170,  463 => 168,  454 => 165,  450 => 164,  447 => 163,  443 => 162,  438 => 160,  434 => 158,  425 => 155,  421 => 154,  418 => 153,  414 => 152,  409 => 150,  405 => 148,  396 => 145,  392 => 144,  389 => 143,  385 => 142,  380 => 140,  376 => 138,  367 => 135,  363 => 134,  360 => 133,  356 => 132,  351 => 130,  347 => 128,  338 => 125,  334 => 124,  331 => 123,  327 => 122,  322 => 120,  318 => 118,  309 => 115,  305 => 114,  302 => 113,  298 => 112,  293 => 110,  289 => 108,  280 => 105,  276 => 104,  273 => 103,  269 => 102,  264 => 100,  260 => 98,  251 => 95,  247 => 94,  244 => 93,  240 => 92,  235 => 90,  231 => 88,  222 => 85,  218 => 84,  215 => 83,  211 => 82,  206 => 80,  202 => 78,  193 => 75,  189 => 74,  186 => 73,  182 => 72,  177 => 70,  173 => 68,  164 => 65,  160 => 64,  157 => 63,  153 => 62,  148 => 60,  143 => 57,  134 => 54,  130 => 53,  127 => 52,  123 => 51,  118 => 49,  111 => 45,  106 => 43,  97 => 37,  92 => 35,  87 => 33,  83 => 31,  74 => 28,  70 => 27,  67 => 26,  63 => 25,  58 => 23,  51 => 19,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'ניהול משתמשים', 'icon': 'users' }) }}*/
/* */
/*     <div class="page_content">*/
/* */
/*         <div class="ui segment left advanced_search">*/
/* */
/*             <h2 class="ui header">*/
/*                 <i class="search icon"></i>*/
/*                 <div class="content">*/
/*                     חיפוש מתקדם*/
/*                 </div>*/
/*             </h2>*/
/* */
/* */
/*             <form action="{{ path('admin_users', {'filter':'search'}) }}" method="post" id="advanced_search_form">*/
/* */
/*                 <div class="ui form">*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.region) }}</a>*/
/*                     <div class="block">*/
/*                         {% for region in form.region %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(region) }}*/
/*                                 {{ form_label(region) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.ageFrom) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.ageFrom) }}</div>*/
/*                         <div class="right pair"> עד-</div>*/
/*                         <div class="right pair">{{ form_widget(form.ageTo) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">גובה</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.heightFrom) }}</div>*/
/*                         <div class="right pair"> עד-</div>*/
/*                         <div class="right pair">{{ form_widget(form.heightTo) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.body) }}</a>*/
/*                     <div class="block">*/
/*                         {% for body in form.body %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(body) }}*/
/*                                 {{ form_label(body) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.relationshipStatus) }}</a>*/
/*                     <div class="block">*/
/*                         {% for relationshipStatus in form.relationshipStatus %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(relationshipStatus) }}*/
/*                                 {{ form_label(relationshipStatus) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.type) }}</a>*/
/*                     <div class="block">*/
/*                         {% for type in form.type %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(type) }}*/
/*                                 {{ form_label(type) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.occupation) }}</a>*/
/*                     <div class="block">*/
/*                         {% for occupation in form.occupation %}*/
/*                             <div class="ui checkbox two">*/
/*                                 {{ form_widget(occupation) }}*/
/*                                 {{ form_label(occupation) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.education) }}</a>*/
/*                     <div class="block">*/
/*                         {% for education in form.education %}*/
/*                             <div class="ui checkbox three">*/
/*                                 {{ form_widget(education) }}*/
/*                                 {{ form_label(education) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.religion) }}</a>*/
/*                     <div class="block">*/
/*                         {% for religion in form.religion %}*/
/*                             <div class="ui checkbox three">*/
/*                                 {{ form_widget(religion) }}*/
/*                                 {{ form_label(religion) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.sexOrientation) }}</a>*/
/*                     <div class="block">*/
/*                         {% for sexOrientation in form.sexOrientation %}*/
/*                             <div class="ui checkbox three">*/
/*                                 {{ form_widget(sexOrientation) }}*/
/*                                 {{ form_label(sexOrientation) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.purposes) }}</a>*/
/*                     <div class="block">*/
/*                         {% for purpose in form.purposes %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(purpose) }}*/
/*                                 {{ form_label(purpose) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.veggieReasons) }}</a>*/
/*                     <div class="block">*/
/*                         {% for veggieReason in form.veggieReasons %}*/
/*                             <div class="ui checkbox three">*/
/*                                 {{ form_widget(veggieReason) }}*/
/*                                 {{ form_label(veggieReason) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.interests) }}</a>*/
/*                     <div class="block">*/
/*                         {% for interest in form.interests %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(interest) }}*/
/*                                 {{ form_label(interest) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.smoking) }}</a>*/
/*                     <div class="block">*/
/*                         {% for smoking in form.smoking %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(smoking) }}*/
/*                                 {{ form_label(smoking) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.drinking) }}</a>*/
/*                     <div class="block">*/
/*                         {% for drinking in form.drinking %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(drinking) }}*/
/*                                 {{ form_label(drinking) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.children) }}</a>*/
/*                     <div class="block">*/
/*                         {% for children in form.children %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(children) }}*/
/*                                 {{ form_label(children) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.zodiac) }}</a>*/
/*                     <div class="block">*/
/*                         {% for zodiac in form.zodiac %}*/
/*                             <div class="ui checkbox four">*/
/*                                 {{ form_widget(zodiac) }}*/
/*                                 {{ form_label(zodiac) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.loginFrom) }}</a>*/
/*                     <div class="block">*/
/*                         {% for loginFrom in form.loginFrom %}*/
/*                             <div class="ui checkbox three">*/
/*                                 {{ form_widget(loginFrom) }}*/
/*                                 {{ form_label(loginFrom) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.isActive) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.isActive) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.isFrozen) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.isFrozen) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.isPaying) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.isPaying) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.hasPoints) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.hasPoints) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.isPhoto) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.isPhoto) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.isPhone) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.isPhone) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.startSubscriptionFrom) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair calendar date_from">{{ form_widget(form.startSubscriptionFrom) }}</div>*/
/*                         <div class="right pair"> עד-</div>*/
/*                         <div class="right pair calendar date_to">{{ form_widget(form.startSubscriptionTo) }}</div>*/
/*                         <div class="left pair period">*/
/*                             {{ include('backend/users/select_period.html.twig') }}*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.endSubscriptionFrom) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair calendar date_from">{{ form_widget(form.endSubscriptionFrom) }}</div>*/
/*                         <div class="right pair"> עד-</div>*/
/*                         <div class="right pair calendar date_to">{{ form_widget(form.endSubscriptionTo) }}</div>*/
/*                         <div class="left pair period">*/
/*                             {{ include('backend/users/select_period.html.twig') }}*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.signUpFrom) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair calendar date_from">{{ form_widget(form.signUpFrom) }}</div>*/
/*                         <div class="right pair"> עד-</div>*/
/*                         <div class="right pair calendar date_to">{{ form_widget(form.signUpTo) }}</div><div class="left pair period">*/
/*                             {{ include('backend/users/select_period.html.twig') }}*/
/*                         </div>*/
/* */
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.lastVisitedFrom) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair calendar date_from">{{ form_widget(form.lastVisitedFrom) }}</div>*/
/*                         <div class="right pair"> עד-</div>*/
/*                         <div class="right pair calendar date_to">{{ form_widget(form.lastVisitedTo) }}</div>*/
/*                         <div class="left pair period">*/
/*                             {{ include('backend/users/select_period.html.twig') }}*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <a class="ui orange big ribbon label">{{ form_label(form.ip) }}</a>*/
/*                     <div class="block">*/
/*                         <div class="right pair">{{ form_widget(form.ip) }}</div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="buttonCont">*/
/*                     <div class="ui one column centered grid">*/
/*                         {{ form_widget(form.filter) }}*/
/*                         <button class="ui red huge button" onclick="$(this).siblings('input[type=submit]').click();">חפשו</button>*/
/*                         <input type="submit" class="hidden">*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/* */
/* */
/* */
/*             </form>*/
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
