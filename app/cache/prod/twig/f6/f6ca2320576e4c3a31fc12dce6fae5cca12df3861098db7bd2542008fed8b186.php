<?php

/* :backend/users:waiting_photos.html.twig */
class __TwigTemplate_ae2c4f151c73a29f76693ce406b8c950f3e8bb84041270de22e61eb4312be30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/users:waiting_photos.html.twig", 1);
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



    <div class=\"page_content waiting_photos_content\">

        <table class=\"ui single line table waiting_photos\">
            <thead>
            <tr>
                <th>
                    <h3 class=\"ui grey header right\">
                        <i class=\"photo circular icon\"></i>
                        אישור תמונות

                    </h3>
                </th>
            </tr>
            <tr class=\"actions\">
                <th>
                    ";
        // line 24
        echo twig_include($this->env, $context, "backend/users/waiting_photos_actions.html.twig");
        echo "
                </th>
            </tr>

            </thead>
            <tbody>

            <tr>
                <td>


                    <div class=\"ui four stackable cards\">

                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 38
            echo "
                            <div class=\"card\">
                                <div class=\"content\">

                                    <input type=\"hidden\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["photo"], "user", array()), "id", array()), "html", null, true);
            echo "\" class=\"userId\">

                                    <i class=\"photo icon grey large right floated link manage_photos\"
                                       data-position=\"top center\" data-content=\"עריכת תמונות\"></i>

                                    <i class=\"edit icon grey large right floated link manage_user\"
                                       data-position=\"top center\" data-content=\"עריכת פרופיל\"></i>


                                    <div class=\"header\">
                                        <span class=\"username\" data-position=\"top center\" data-content=\"לפרופיל המלא\">
                                            ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["photo"], "user", array()), "username", array()), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                    <div class=\"meta\">
                                        ";
            // line 57
            if ($this->getAttribute($this->getAttribute($context["photo"], "user", array()), "isPaying", array())) {
                // line 58
                echo "                                            <i class=\"star green icon\" data-position=\"top center\" data-content=\"מנוי\"></i>
                                        ";
            }
            // line 60
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["photo"], "user", array()), "age", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["photo"], "user", array()), "city", array()), "name", array()), "html", null, true);
            echo "
                                    </div>
                                    ";
            // line 67
            echo "                                </div>
                                <div class=\"image photo\">
                                    <img>
                                    <input type=\"hidden\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "name", array()), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"extra content\">


                                    <div class=\"ui equal width grid\">
                                        <div class=\"column\">

                                            <button class=\"ui green icon button approve\" data-position=\"top center\" data-content=\"לאשר תמונה\">
                                                <i class=\"thumbs up icon\"></i>
                                            </button>

                                        </div>
                                        <div class=\"column sel_item\">

                                            <div class=\"ui slider checkbox\">
                                                <input type=\"checkbox\">
                                                <label></label>
                                            </div>
                                            <input type=\"hidden\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "id", array()), "html", null, true);
            echo "\">

                                        </div>
                                        <div class=\"column\">

                                            <button class=\"ui red left icon button delete\"  data-position=\"top center\" data-content=\"להסיר תמונה\">
                                                <i class=\"thumbs down icon\"></i>
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
                    </div>




                </td>
            </tr>








            </tbody>
            <tfoot>
            <tr class=\"actions\">
                <th>
                    ";
        // line 125
        echo twig_include($this->env, $context, "backend/users/waiting_photos_actions.html.twig");
        echo "
                </th>
            </tr>
            </tfoot>
        </table>



    </div>








";
    }

    public function getTemplateName()
    {
        return ":backend/users:waiting_photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 125,  166 => 105,  144 => 89,  122 => 70,  117 => 67,  109 => 60,  105 => 58,  103 => 57,  96 => 53,  82 => 42,  76 => 38,  72 => 37,  56 => 24,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'ניהול משתמשים', 'icon': 'users' }) }}*/
/* */
/* */
/* */
/*     <div class="page_content waiting_photos_content">*/
/* */
/*         <table class="ui single line table waiting_photos">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                     <h3 class="ui grey header right">*/
/*                         <i class="photo circular icon"></i>*/
/*                         אישור תמונות*/
/* */
/*                     </h3>*/
/*                 </th>*/
/*             </tr>*/
/*             <tr class="actions">*/
/*                 <th>*/
/*                     {{ include('backend/users/waiting_photos_actions.html.twig') }}*/
/*                 </th>*/
/*             </tr>*/
/* */
/*             </thead>*/
/*             <tbody>*/
/* */
/*             <tr>*/
/*                 <td>*/
/* */
/* */
/*                     <div class="ui four stackable cards">*/
/* */
/*                         {% for photo in photos %}*/
/* */
/*                             <div class="card">*/
/*                                 <div class="content">*/
/* */
/*                                     <input type="hidden" value="{{ photo.user.id }}" class="userId">*/
/* */
/*                                     <i class="photo icon grey large right floated link manage_photos"*/
/*                                        data-position="top center" data-content="עריכת תמונות"></i>*/
/* */
/*                                     <i class="edit icon grey large right floated link manage_user"*/
/*                                        data-position="top center" data-content="עריכת פרופיל"></i>*/
/* */
/* */
/*                                     <div class="header">*/
/*                                         <span class="username" data-position="top center" data-content="לפרופיל המלא">*/
/*                                             {{ photo.user.username }}*/
/*                                         </span>*/
/*                                     </div>*/
/*                                     <div class="meta">*/
/*                                         {% if photo.user.isPaying %}*/
/*                                             <i class="star green icon" data-position="top center" data-content="מנוי"></i>*/
/*                                         {% endif %}*/
/*                                         {{ photo.user.age }}, {{ photo.user.city.name }}*/
/*                                     </div>*/
/*                                     {#*/
/*                                     <div class="description">*/
/*                                         {{ photo.user.about|length > 50 ? photo.user.about|slice(0, 50) ~ '...' : photo.user.about  }}*/
/*                                     </div>*/
/*                                     #}*/
/*                                 </div>*/
/*                                 <div class="image photo">*/
/*                                     <img>*/
/*                                     <input type="hidden" value="{{ photo.name }}">*/
/*                                 </div>*/
/*                                 <div class="extra content">*/
/* */
/* */
/*                                     <div class="ui equal width grid">*/
/*                                         <div class="column">*/
/* */
/*                                             <button class="ui green icon button approve" data-position="top center" data-content="לאשר תמונה">*/
/*                                                 <i class="thumbs up icon"></i>*/
/*                                             </button>*/
/* */
/*                                         </div>*/
/*                                         <div class="column sel_item">*/
/* */
/*                                             <div class="ui slider checkbox">*/
/*                                                 <input type="checkbox">*/
/*                                                 <label></label>*/
/*                                             </div>*/
/*                                             <input type="hidden" value="{{ photo.id }}">*/
/* */
/*                                         </div>*/
/*                                         <div class="column">*/
/* */
/*                                             <button class="ui red left icon button delete"  data-position="top center" data-content="להסיר תמונה">*/
/*                                                 <i class="thumbs down icon"></i>*/
/*                                             </button>*/
/* */
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         {% endfor %}*/
/* */
/*                     </div>*/
/* */
/* */
/* */
/* */
/*                 </td>*/
/*             </tr>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             </tbody>*/
/*             <tfoot>*/
/*             <tr class="actions">*/
/*                 <th>*/
/*                     {{ include('backend/users/waiting_photos_actions.html.twig') }}*/
/*                 </th>*/
/*             </tr>*/
/*             </tfoot>*/
/*         </table>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
