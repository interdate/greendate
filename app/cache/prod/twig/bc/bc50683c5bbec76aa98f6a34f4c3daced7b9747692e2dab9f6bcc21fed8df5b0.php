<?php

/* :frontend/security/sign_up:index.html.twig */
class __TwigTemplate_a45abb4ec239db408840624a386af586e1d80a235b9359da8dcd4ae04ae0ecc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/main_layout.html.twig", ":frontend/security/sign_up:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend/main_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"main-container\">

        <div class=\"headerinn\">
            <div class=\"topbar\">
                <ul class=\"wrap clearfix\">
                    <li><span class=\"uimg\"><img src=\"/images/inner-head-user.png\" alt=\"\"></span> <span class=\"uname\">שלום אורח/ת</span></li>
                </ul>
            </div>

            <div class=\"logo-menu\">
                <div class=\"wrap clearfix\">
                    <div class=\"innlogo\"><a href=\"/\"><img src=\"/images/logo.png\" alt=\"\"></a></div>
                </div>
            </div>
        </div>
        <!-- headerinn end -->

        ";
        // line 22
        $context["step"] = ((array_key_exists("flow", $context)) ? ($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getCurrentStepNumber", array(), "method")) : (4));
        // line 23
        echo "
        <div class=\"innercont\">
            <div class=\"wrap clearfix\">
                <div class=\"harsama-main\">
                    <div class=\"harsama-midsec\">
                        <ul class=\"stepssec clearfix\">
                            <li ";
        // line 29
        if (((isset($context["step"]) ? $context["step"] : null) >= 1)) {
            echo "class=\"completed\"";
        }
        echo "><span class=\"nos\">1</span><span class=\"label\">הרשמה</span></li>
                            <li ";
        // line 30
        if (((isset($context["step"]) ? $context["step"] : null) >= 2)) {
            echo "class=\"completed\"";
        }
        echo "><span class=\"nos\">2</span><span class=\"label\">יצירת פרופיל</span></li>
                            <li ";
        // line 31
        if (((isset($context["step"]) ? $context["step"] : null) >= 3)) {
            echo "class=\"completed\"";
        }
        echo "><span class=\"nos\">3</span><span class=\"label\">קצת עליי</span></li>
                            <li ";
        // line 32
        if (((isset($context["step"]) ? $context["step"] : null) >= 4)) {
            echo "class=\"completed\"";
        }
        echo "><span class=\"nos\">4</span><span class=\"label\">הוספת תמונה</span></li>
                        </ul>
                        <!-- stepssec end -->

                        <form action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("sign_up");
        echo "\" method=\"post\" id=\"sign_up_form\" novalidate>

                            <div class=\"errors hidden empty_fields\">
                                <div class=\"ui orange message\">
                                    <div class=\"content\">
                                        <div class=\"header\">
                                            יש להשלים את השדות המסומנים
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 48
        if (((isset($context["step"]) ? $context["step"] : null) < 4)) {
            // line 49
            echo "                                ";
            echo twig_include($this->env, $context, (("frontend/security/sign_up/" . (isset($context["step"]) ? $context["step"] : null)) . ".html.twig"), array("form" => (isset($context["form"]) ? $context["form"] : null)));
            echo "
                            ";
        } else {
            // line 51
            echo "                                ";
            if (array_key_exists("photos", $context)) {
                // line 52
                echo "                                    ";
                echo twig_include($this->env, $context, "frontend/security/sign_up/photos.html.twig", array("renderedCloudForm" => (isset($context["renderedCloudForm"]) ? $context["renderedCloudForm"] : null)));
                echo "
                                ";
            } else {
                // line 54
                echo "                                    ";
                echo twig_include($this->env, $context, "frontend/security/sign_up/photo.html.twig", array("renderedCloudForm" => (isset($context["renderedCloudForm"]) ? $context["renderedCloudForm"] : null)));
                echo "
                                ";
            }
            // line 56
            echo "                            ";
        }
        // line 57
        echo "
                            ";
        // line 58
        if (array_key_exists("form", $context)) {
            // line 59
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
                            ";
        }
        // line 61
        echo "
                        </form>

                        </div>
                    </div>
                </div>
                <!-- harsama-main end -->
            </div>
        </div>
        <!-- innercont -->

    </div>
    <!-- Main Container -->

";
    }

    public function getTemplateName()
    {
        return ":frontend/security/sign_up:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 61,  134 => 59,  132 => 58,  129 => 57,  126 => 56,  120 => 54,  114 => 52,  111 => 51,  105 => 49,  103 => 48,  88 => 36,  79 => 32,  73 => 31,  67 => 30,  61 => 29,  53 => 23,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/main_layout.html.twig" %}*/
/* */
/* {% block container %}*/
/* */
/*     <div class="main-container">*/
/* */
/*         <div class="headerinn">*/
/*             <div class="topbar">*/
/*                 <ul class="wrap clearfix">*/
/*                     <li><span class="uimg"><img src="/images/inner-head-user.png" alt=""></span> <span class="uname">שלום אורח/ת</span></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="logo-menu">*/
/*                 <div class="wrap clearfix">*/
/*                     <div class="innlogo"><a href="/"><img src="/images/logo.png" alt=""></a></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- headerinn end -->*/
/* */
/*         {% set step = flow is defined ? flow.getCurrentStepNumber() : 4 %}*/
/* */
/*         <div class="innercont">*/
/*             <div class="wrap clearfix">*/
/*                 <div class="harsama-main">*/
/*                     <div class="harsama-midsec">*/
/*                         <ul class="stepssec clearfix">*/
/*                             <li {% if step >= 1 %}class="completed"{% endif %}><span class="nos">1</span><span class="label">הרשמה</span></li>*/
/*                             <li {% if step >= 2 %}class="completed"{% endif %}><span class="nos">2</span><span class="label">יצירת פרופיל</span></li>*/
/*                             <li {% if step >= 3 %}class="completed"{% endif %}><span class="nos">3</span><span class="label">קצת עליי</span></li>*/
/*                             <li {% if step >= 4 %}class="completed"{% endif %}><span class="nos">4</span><span class="label">הוספת תמונה</span></li>*/
/*                         </ul>*/
/*                         <!-- stepssec end -->*/
/* */
/*                         <form action="{{ path('sign_up') }}" method="post" id="sign_up_form" novalidate>*/
/* */
/*                             <div class="errors hidden empty_fields">*/
/*                                 <div class="ui orange message">*/
/*                                     <div class="content">*/
/*                                         <div class="header">*/
/*                                             יש להשלים את השדות המסומנים*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             {% if step < 4 %}*/
/*                                 {{ include ('frontend/security/sign_up/' ~ step ~ '.html.twig', {'form': form}) }}*/
/*                             {% else %}*/
/*                                 {% if photos is defined %}*/
/*                                     {{ include ('frontend/security/sign_up/photos.html.twig', {'renderedCloudForm': renderedCloudForm}) }}*/
/*                                 {% else %}*/
/*                                     {{ include ('frontend/security/sign_up/photo.html.twig', {'renderedCloudForm': renderedCloudForm}) }}*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/* */
/*                             {% if form is defined %}*/
/*                                 {{ form_rest(form) }}*/
/*                             {% endif %}*/
/* */
/*                         </form>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- harsama-main end -->*/
/*             </div>*/
/*         </div>*/
/*         <!-- innercont -->*/
/* */
/*     </div>*/
/*     <!-- Main Container -->*/
/* */
/* {% endblock %}*/
