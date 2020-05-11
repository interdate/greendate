<?php

/* :frontend/user:index.html.twig */
class __TwigTemplate_4b8428354812a36e1a40b6244b7e46fe13870cda7cf7e1f1b8731bdbf6bb883c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/user:index.html.twig", 1);
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
\t\t\t\t<div class=\"midsec\">
\t\t\t\t\t<div class=\"quicksrch mainQuickSearch\">
\t\t\t\t\t\t<h3 class=\"tgl_mqs\">חיפוש מהיר</h3>

                        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_search_results");
        echo "\" method=\"post\" class=\"qs hidden\">

                            <div class=\"topfrm clearfix\">
                                <div class=\"leftcont\">
                                    <h5>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageFrom", array()), 'label');
        echo "</h5>
                                    <div class=\"select\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageFrom", array()), 'widget');
        echo "</div>
                                    <div class=\"smlabel\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageTo", array()), 'label');
        echo "</div>
                                    <div class=\"select\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ageTo", array()), 'widget');
        echo "</div>
                                </div>

                                <div class=\"rghtcont\">
                                    <h5>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'label');
        echo "</h5>

                                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 23
            echo "                                        <div class=\"ui checkbox region\">
                                            ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'widget');
            echo "
                                            ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'label');
            echo "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                                </div>
                            </div>
                            <!-- topfrm end -->

                            <div class=\"qbtmfrm clearfix\">
                                <h5>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label');
        echo "</h5>

                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 36
            echo "                                    <div class=\"ui checkbox type\">
                                        ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'widget');
            echo "
                                        ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'label');
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filter", array()), 'widget');
        echo "

                                <a class=\"free\" href=\"#\">חפשו</a>
                                <input type=\"submit\" class=\"hidden\">
                            </div>
                            <!-- qbtmfrm end -->



                        </form>

                        <form action=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("user_search_results");
        echo "\" method=\"post\" class=\"qs hidden\">
                            <div class=\"btmform clearfix\">
                                <div class=\"lablediv\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label');
        echo "</div>
                                <div class=\"inputdiv\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "</div>
                                <input type=\"hidden\" id=\"quickSearch_filter\" name=\"quickSearch[filter]\" value=\"lastActivity\">
                                <a class=\"free\" href=\"#\">חפשו</a>
                                <input type=\"submit\" class=\"hidden\">
                            </div>

                            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("user_search_advanced");
        echo "\" class=\"adv-srch\">חיפוש מתקדם</a>

                        </form>



\t\t\t\t\t</div>
\t\t\t\t\t<!-- quicksrch end -->

\t\t\t\t\t<h1>חברים חדשים באתר</h1>

\t\t\t\t\t";
        // line 73
        echo twig_include($this->env, $context, "frontend/user/users_list.html.twig", array("users" => (isset($context["newUsers"]) ? $context["newUsers"] : null)));
        echo "

\t\t\t\t</div><!-- midsec end -->

";
    }

    public function getTemplateName()
    {
        return ":frontend/user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 73,  156 => 62,  147 => 56,  143 => 55,  138 => 53,  124 => 42,  121 => 41,  112 => 38,  108 => 37,  105 => 36,  101 => 35,  96 => 33,  89 => 28,  80 => 25,  76 => 24,  73 => 23,  69 => 22,  64 => 20,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* 				<div class="midsec">*/
/* 					<div class="quicksrch mainQuickSearch">*/
/* 						<h3 class="tgl_mqs">חיפוש מהיר</h3>*/
/* */
/*                         <form action="{{ path('user_search_results') }}" method="post" class="qs hidden">*/
/* */
/*                             <div class="topfrm clearfix">*/
/*                                 <div class="leftcont">*/
/*                                     <h5>{{ form_label(form.ageFrom) }}</h5>*/
/*                                     <div class="select">{{ form_widget(form.ageFrom) }}</div>*/
/*                                     <div class="smlabel">{{ form_label(form.ageTo) }}</div>*/
/*                                     <div class="select">{{ form_widget(form.ageTo) }}</div>*/
/*                                 </div>*/
/* */
/*                                 <div class="rghtcont">*/
/*                                     <h5>{{ form_label(form.region) }}</h5>*/
/* */
/*                                     {% for region in form.region %}*/
/*                                         <div class="ui checkbox region">*/
/*                                             {{ form_widget(region) }}*/
/*                                             {{ form_label(region) }}*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- topfrm end -->*/
/* */
/*                             <div class="qbtmfrm clearfix">*/
/*                                 <h5>{{ form_label(form.type) }}</h5>*/
/* */
/*                                 {% for type in form.type %}*/
/*                                     <div class="ui checkbox type">*/
/*                                         {{ form_widget(type) }}*/
/*                                         {{ form_label(type) }}*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/* */
/*                                 {{ form_widget(form.filter) }}*/
/* */
/*                                 <a class="free" href="#">חפשו</a>*/
/*                                 <input type="submit" class="hidden">*/
/*                             </div>*/
/*                             <!-- qbtmfrm end -->*/
/* */
/* */
/* */
/*                         </form>*/
/* */
/*                         <form action="{{ path('user_search_results') }}" method="post" class="qs hidden">*/
/*                             <div class="btmform clearfix">*/
/*                                 <div class="lablediv">{{ form_label(form.username) }}</div>*/
/*                                 <div class="inputdiv">{{ form_widget(form.username) }}</div>*/
/*                                 <input type="hidden" id="quickSearch_filter" name="quickSearch[filter]" value="lastActivity">*/
/*                                 <a class="free" href="#">חפשו</a>*/
/*                                 <input type="submit" class="hidden">*/
/*                             </div>*/
/* */
/*                             <a href="{{ path('user_search_advanced') }}" class="adv-srch">חיפוש מתקדם</a>*/
/* */
/*                         </form>*/
/* */
/* */
/* */
/* 					</div>*/
/* 					<!-- quicksrch end -->*/
/* */
/* 					<h1>חברים חדשים באתר</h1>*/
/* */
/* 					{{ include ('frontend/user/users_list.html.twig', {'users': newUsers}) }}*/
/* */
/* 				</div><!-- midsec end -->*/
/* */
/* {% endblock %}*/
