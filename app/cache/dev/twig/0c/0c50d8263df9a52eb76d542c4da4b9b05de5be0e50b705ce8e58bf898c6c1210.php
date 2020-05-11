<?php

/* frontend/user/index.html.twig */
class __TwigTemplate_4466d094d319ae2a287aa37fd50f5af4b68abbed13a23f0272f6dbea050fbfe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", "frontend/user/index.html.twig", 1);
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
        $__internal_e14c0c8d9f90ac92a3ae8c9a92aac92c7edd18c8697f92d5d684e65e5149470c = $this->env->getExtension("native_profiler");
        $__internal_e14c0c8d9f90ac92a3ae8c9a92aac92c7edd18c8697f92d5d684e65e5149470c->enter($__internal_e14c0c8d9f90ac92a3ae8c9a92aac92c7edd18c8697f92d5d684e65e5149470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14c0c8d9f90ac92a3ae8c9a92aac92c7edd18c8697f92d5d684e65e5149470c->leave($__internal_e14c0c8d9f90ac92a3ae8c9a92aac92c7edd18c8697f92d5d684e65e5149470c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_76fe73bf54ce79d2c555fd68c13976a938d481db9ac3c3ea0a1c6198c9281b2d = $this->env->getExtension("native_profiler");
        $__internal_76fe73bf54ce79d2c555fd68c13976a938d481db9ac3c3ea0a1c6198c9281b2d->enter($__internal_76fe73bf54ce79d2c555fd68c13976a938d481db9ac3c3ea0a1c6198c9281b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageFrom", array()), 'label');
        echo "</h5>
                                    <div class=\"select\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageFrom", array()), 'widget');
        echo "</div>
                                    <div class=\"smlabel\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageTo", array()), 'label');
        echo "</div>
                                    <div class=\"select\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageTo", array()), 'widget');
        echo "</div>
                                </div>

                                <div class=\"rghtcont\">
                                    <h5>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()), 'label');
        echo "</h5>

                                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "</h5>

                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filter", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "</div>
                                <div class=\"inputdiv\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
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
        echo twig_include($this->env, $context, "frontend/user/users_list.html.twig", array("users" => (isset($context["newUsers"]) ? $context["newUsers"] : $this->getContext($context, "newUsers"))));
        echo "

\t\t\t\t</div><!-- midsec end -->

";
        
        $__internal_76fe73bf54ce79d2c555fd68c13976a938d481db9ac3c3ea0a1c6198c9281b2d->leave($__internal_76fe73bf54ce79d2c555fd68c13976a938d481db9ac3c3ea0a1c6198c9281b2d_prof);

    }

    public function getTemplateName()
    {
        return "frontend/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 73,  165 => 62,  156 => 56,  152 => 55,  147 => 53,  133 => 42,  130 => 41,  121 => 38,  117 => 37,  114 => 36,  110 => 35,  105 => 33,  98 => 28,  89 => 25,  85 => 24,  82 => 23,  78 => 22,  73 => 20,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
