<?php

/* :backend/users:reports.html.twig */
class __TwigTemplate_9cb6137176d70269f9136f1abd0950b21a4108dff64454c3e898c358de961a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/users:reports.html.twig", 1);
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

    <div class=\"page_content reports_content\">

        <div class=\"ui segment compact\">

            <h2 class=\"ui header\">
                <i class=\"bar chart icon\"></i>
                <div class=\"content\">
                    דוחות
                </div>
            </h2>

            <table class=\"ui basic collapsing celled table reports\">
                <thead>
                    <tr>
                        <th>שם</th>
                        <th>מופיע בעמוד הראשי</th>
                        <th>להסיר</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 28
            echo "                        <tr>
                            <td>
                                <a href=\"#\" class=\"report_name\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "name", array()), "html", null, true);
            echo "</a>
                                <form action=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("admin_users", array("filter" => "report"));
            echo "\" method=\"post\">
                                    <input type=\"hidden\" name=\"reportId\" class=\"report_id\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "\">
                                </form>
                            </td>

                            <td>
                                <div class=\"ui checkbox toggle small\">
                                    <input type=\"checkbox\" ";
            // line 38
            if ($this->getAttribute($context["report"], "isFlagged", array())) {
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>

        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return ":backend/users:reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  84 => 38,  75 => 32,  71 => 31,  67 => 30,  63 => 28,  59 => 27,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'ניהול משתמשים', 'icon': 'users' }) }}*/
/* */
/*     <div class="page_content reports_content">*/
/* */
/*         <div class="ui segment compact">*/
/* */
/*             <h2 class="ui header">*/
/*                 <i class="bar chart icon"></i>*/
/*                 <div class="content">*/
/*                     דוחות*/
/*                 </div>*/
/*             </h2>*/
/* */
/*             <table class="ui basic collapsing celled table reports">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>שם</th>*/
/*                         <th>מופיע בעמוד הראשי</th>*/
/*                         <th>להסיר</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for report in reports %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <a href="#" class="report_name">{{ report.name }}</a>*/
/*                                 <form action="{{ path('admin_users', {'filter': 'report'}) }}" method="post">*/
/*                                     <input type="hidden" name="reportId" class="report_id" value="{{ report.id }}">*/
/*                                 </form>*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <div class="ui checkbox toggle small">*/
/*                                     <input type="checkbox" {% if report.isFlagged %}checked="checked"{% endif %}>*/
/*                                     <label></label>*/
/*                                 </div>*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <i class="trash outline big link black icon circular delete"></i>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
