<?php

/* :backend/messenger:index.html.twig */
class __TwigTemplate_5b3190b65a1b6f6bcfd7751b9c745d0e6c7a3560227447623d942774203fe462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/messenger:index.html.twig", 1);
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
        echo twig_include($this->env, $context, "backend/header.html.twig", array("header" => "הודעות", "icon" => "chat"));
        echo "

    <div class=\"page_content messages_content\">



        <div class=\"ui segment\">



            <h2 class=\"ui header right\">
                <i class=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo " icon\"></i>
                <div class=\"content\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
                </div>
            </h2>

            <div class=\"left\">
                <button class=\"ui labeled icon black approve large button right\" id=\"removeSelectedMessages\">
                    <i class=\"trash icon\"></i>
                    להסיר הודעות מסומנות
                </button>
            </div>





            <div class=\"clear\"></div>


            <table class=\"ui basic celled table messages\">
                <thead>
                <tr>
                    <th>
                        <div class=\"ui checkbox\" id=\"sel_all\">
                            <input type=\"checkbox\">
                            <label></label>
                        </div>
                    </th>
                    <th>שולח</th>
                    <th>מקבל</th>
                    <th>הודעה</th>
                    <th>תאריך</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "                    <tr class=\"row\">
                        <td class=\"sel_item\">
                            <div class=\"ui checkbox\">
                                <input type=\"checkbox\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "messageId", array()), "html", null, true);
            echo "\" >
                                <label></label>
                            </div>
                        </td>

                        <td>
                            <button class=\"ui icon button profile\">
                                <i class=\"icon user\"></i>
                            </button>
                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_messenger_user", array("userId" => $this->getAttribute($context["item"], "fromUser", array()), "page" => 1)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fromUsername", array()), "html", null, true);
            echo "</a>
                            <input type=\"hidden\" class=\"userId\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fromUser", array()), "html", null, true);
            echo "\">
                        </td>
                        <td>
                            <button class=\"ui icon button profile\">
                                <i class=\"icon user\"></i>
                            </button>
                            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_messenger_user", array("userId" => $this->getAttribute($context["item"], "toUser", array()), "page" => 1)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "toUsername", array()), "html", null, true);
            echo "</a>
                            <input type=\"hidden\" class=\"userId\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "toUser", array()), "html", null, true);
            echo "\">
                        </td>

                        <td class=\"text\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "message", array()), "html", null, true);
            echo "</td>
                        <td class=\"date\">";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </tbody>

                <tfoot>
                <tr>
                    <th colspan=\"5\">
                        ";
        // line 86
        echo twig_include($this->env, $context, "backend/messenger/pagination.html.twig");
        echo "
                    </th>
                </tr>
                </tfoot>
            </table>


        </div>






    </div>


";
    }

    public function getTemplateName()
    {
        return ":backend/messenger:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 86,  152 => 81,  143 => 78,  139 => 77,  133 => 74,  127 => 73,  118 => 67,  112 => 66,  100 => 57,  95 => 54,  91 => 53,  53 => 18,  48 => 16,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'הודעות', 'icon': 'chat' }) }}*/
/* */
/*     <div class="page_content messages_content">*/
/* */
/* */
/* */
/*         <div class="ui segment">*/
/* */
/* */
/* */
/*             <h2 class="ui header right">*/
/*                 <i class="{{ icon }} icon"></i>*/
/*                 <div class="content">*/
/*                     {{ title }}*/
/*                 </div>*/
/*             </h2>*/
/* */
/*             <div class="left">*/
/*                 <button class="ui labeled icon black approve large button right" id="removeSelectedMessages">*/
/*                     <i class="trash icon"></i>*/
/*                     להסיר הודעות מסומנות*/
/*                 </button>*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/*             <div class="clear"></div>*/
/* */
/* */
/*             <table class="ui basic celled table messages">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>*/
/*                         <div class="ui checkbox" id="sel_all">*/
/*                             <input type="checkbox">*/
/*                             <label></label>*/
/*                         </div>*/
/*                     </th>*/
/*                     <th>שולח</th>*/
/*                     <th>מקבל</th>*/
/*                     <th>הודעה</th>*/
/*                     <th>תאריך</th>*/
/*                 </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                 {% for item in messages %}*/
/*                     <tr class="row">*/
/*                         <td class="sel_item">*/
/*                             <div class="ui checkbox">*/
/*                                 <input type="checkbox" value="{{ item.messageId }}" >*/
/*                                 <label></label>*/
/*                             </div>*/
/*                         </td>*/
/* */
/*                         <td>*/
/*                             <button class="ui icon button profile">*/
/*                                 <i class="icon user"></i>*/
/*                             </button>*/
/*                             <a href="{{ path('admin_messenger_user', {'userId': item.fromUser, 'page': 1 }) }}">{{ item.fromUsername }}</a>*/
/*                             <input type="hidden" class="userId" value="{{ item.fromUser }}">*/
/*                         </td>*/
/*                         <td>*/
/*                             <button class="ui icon button profile">*/
/*                                 <i class="icon user"></i>*/
/*                             </button>*/
/*                             <a href="{{ path('admin_messenger_user', {'userId': item.toUser, 'page': 1 }) }}">{{ item.toUsername }}</a>*/
/*                             <input type="hidden" class="userId" value="{{ item.toUser }}">*/
/*                         </td>*/
/* */
/*                         <td class="text">{{ item.message }}</td>*/
/*                         <td class="date">{{ item.date|date('d/m/Y H:i:s') }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/* */
/*                 <tfoot>*/
/*                 <tr>*/
/*                     <th colspan="5">*/
/*                         {{ include ('backend/messenger/pagination.html.twig') }}*/
/*                     </th>*/
/*                 </tr>*/
/*                 </tfoot>*/
/*             </table>*/
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
