<?php

/* backend/layout.html.twig */
class __TwigTemplate_6e32a7d4cecfacd41c7bf3e43c12b7aba49eba61567fcafd7298977eed8163ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Greendate - Control Panel";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "\t
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/semantic/dist/semantic.rtl.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/perfect-scrollbar/css/perfect-scrollbar.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery-modal/jquery.modal.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery-ui/css/cupertino/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" />
";
    }

    // line 14
    public function block_js($context, array $blocks = array())
    {
        echo "\t
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>\t
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/semantic/dist/semantic.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery-modal/jquery.modal.min.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.cloudinary.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/perfect-scrollbar/js/min/perfect-scrollbar-with-mousewheel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
\t
";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "
\t";
        // line 34
        $context["routeArr"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"), "_");
        // line 35
        echo "\t";
        $context["parentPageName"] = $this->getAttribute((isset($context["routeArr"]) ? $context["routeArr"] : null), 1, array(), "array");
        // line 36
        echo "
\t
\t<div id=\"wrapper\">
\t\t<div id=\"main_menu\">
\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("admin_users");
        echo "\">
\t\t\t\t<div class=\"item green ";
        // line 41
        if ((((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "users") || ((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "search"))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t<i class=\"users icon\"></i>
\t\t\t\t\tמשתמשים
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_messenger");
        echo "\">
\t\t\t\t<div class=\"item violet ";
        // line 47
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "messenger")) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t<i class=\"chat icon\"></i>
\t\t\t\t\tהודעות
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_content");
        echo "\">
\t\t\t\t<div class=\"item orange ";
        // line 53
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "content")) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t<i class=\"text file icon\"></i>
\t\t\t\t\tתוכן
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_magazine");
        echo "\">
\t\t\t\t<div class=\"item pink ";
        // line 59
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "magazine")) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t<i class=\"newspaper icon\"></i>
\t\t\t\t\tמגזין
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("admin_settings");
        echo "\">
\t\t\t\t<div class=\"item red ";
        // line 65
        if (((isset($context["parentPageName"]) ? $context["parentPageName"] : null) == "settings")) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t<i class=\"settings icon\"></i>
\t\t\t\t\tהגדרות
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>

\t\t<div id=\"main_container\">
\t\t\t";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "\t\t</div>




\t\t<div id=\"main_sidebar\">
\t\t\t<a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("user_homepage");
        echo "\" target=\"_blank\"><div id=\"logo\" class=\"ui orange column\"
\t\t\t\tdata-position=\"bottom center\"
\t\t\t\tdata-content=\"לאתר\"></div>
\t\t\t</a>

\t\t\t<div class=\"scroll\">


\t\t\t\t";
        // line 88
        $context["sidebarForm"] = $this->env->getExtension('app_extension')->getAdminQuickSearchSidebarFormFunction();
        // line 89
        echo "
\t\t\t\t<div class=\"sidebarCont\">




\t\t\t\t\t<div class=\"ui horizontal divider\">
\t\t\t\t\t\tחיפוש
\t\t\t\t\t\tלפי שדות
\t\t\t\t\t</div>






\t\t\t\t\t<div class=\"ui form\">

\t\t\t\t\t\t<form action=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("admin_users", array("filter" => "search"));
        echo "\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"field\">

\t\t\t\t\t\t\t\t<div class=\"ui action input\">
\t\t\t\t\t\t\t\t\t";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "id", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t<button class=\"ui green labeled icon button\"
\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$(this).siblings('input[type=submit]').click();\">
\t\t\t\t\t\t\t\t\t\t<i class=\"search icon\"></i>
\t\t\t\t\t\t\t\t\t\tחפשו
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"hidden\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<form action=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("admin_users", array("filter" => "search"));
        echo "\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<div class=\"ui action input\">
\t\t\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "email", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t<button class=\"ui red labeled icon button\"
\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$(this).siblings('input[type=submit]').click();\">
\t\t\t\t\t\t\t\t\t\t<i class=\"search icon\"></i>
\t\t\t\t\t\t\t\t\t\tחפשו
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"hidden\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<form action=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("admin_users", array("filter" => "search"));
        echo "\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<div class=\"ui action input\">
\t\t\t\t\t\t\t\t\t";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "username", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t<button class=\"ui orange labeled icon button\"
\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$(this).siblings('input[type=submit]').click();\">
\t\t\t\t\t\t\t\t\t\t<i class=\"search icon\"></i>
\t\t\t\t\t\t\t\t\t\tחפשו
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"hidden\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"ui horizontal divider\">
\t\t\t\t\t\tאו
\t\t\t\t\t</div>




\t\t\t\t\t<form action=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("admin_users", array("filter" => "search"));
        echo "\" method=\"post\">


\t\t\t\t\t\t<div class=\"ui form small\">

\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<div class=\"ui black horizontal label\">";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "ageFrom", array()), 'label');
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div><br>
\t\t\t\t\t\t\t\t<div class=\"age right\">
\t\t\t\t\t\t\t\t\t";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "ageFrom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"age left\">
\t\t\t\t\t\t\t\t\t";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "ageTo", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"clear\"></div>

\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<div class=\"ui black horizontal label\">";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "region", array()), 'label');
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "region", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 190
            echo "\t\t\t\t\t\t\t\t\t<div class=\"two col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui checkbox\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 192
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 193
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["region"], 'label');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<div class=\"ui black horizontal label\">";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "type", array()), 'label');
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebarForm"]) ? $context["sidebarForm"] : null), "type", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 210
            echo "\t\t\t\t\t\t\t\t\t<div class=\"two col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ui checkbox type\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 212
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 213
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'label');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<br>



\t\t\t\t\t\t\t<button class=\"ui green big button left\" onclick=\"\$(this).siblings('input[type=submit]').click();\">חפשו</button>
\t\t\t\t\t\t\t<input type=\"submit\" class=\"hidden\">

\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t</div>

\t\t\t\t\t</form>


\t\t\t\t\t<div class=\"ui horizontal divider\">
\t\t\t\t\t\tאו
\t\t\t\t\t</div>

\t\t\t\t\t<br>

\t\t\t\t\t<div class=\"ui one column centered grid\">
\t\t\t\t\t\t<a href=\"";
        // line 242
        echo $this->env->getExtension('routing')->getPath("admin_search_advanced");
        echo "\"><button class=\"ui red tiny button\">חיפוש מתקדם</button></a>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>



\t\t<div class=\"clear\"></div>
\t</div>




\t<div class=\"ui small basic modal delete_user\">
\t\t<div class=\"ui icon header\">
\t\t\t<i class=\"trash icon\"></i>
\t\t\tלהסיר?
\t\t</div>
\t\t<div class=\"content\"><p></p></div>
\t\t<div class=\"ui center aligned grid\">
\t\t\t<div class=\"actions\">
\t\t\t\t<div class=\"ui red basic cancel inverted button\">
\t\t\t\t\t<i class=\"remove icon\"></i>
\t\t\t\t\tלא
\t\t\t\t</div>
\t\t\t\t<div class=\"ui green ok inverted button\">
\t\t\t\t\t<i class=\"checkmark icon\"></i>
\t\t\t\t\tכן
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"ui small modal ban_users_reason light_green\">
\t\t<div class=\"ui icon small header\">
\t\t\t<i class=\"pencil icon\"></i>
\t\t\tהערות
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<div class=\"ui form\">
\t\t\t\t<textarea></textarea>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"actions\">
\t\t\t";
        // line 292
        echo "\t\t\t<button class=\"ui labeled icon green approve large button right\">
\t\t\t\t<i class=\"save icon\"></i>
\t\t\t\tלשמור
\t\t\t</button>
\t\t\t<button class=\"ui labeled icon large cancel button right\">
\t\t\t\t<i class=\"remove icon\"></i>
\t\t\t\tלדלג
\t\t\t</button>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</div>

\t<div class=\"ui small modal create_report light_green\">
\t\t<div class=\"ui icon small header\">
\t\t\t<i class=\"bar chart circular icon\"></i>
\t\t\tיצירת דוח
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<form class=\"ui form\">
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>שם הדוח</label>
\t\t\t\t\t<input type=\"text\" name=\"name\">
\t\t\t\t</div>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<div class=\"ui slider checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"flagged\" value=\"1\">
\t\t\t\t\t\t<label>מופיע בעמוד הראשי</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"actions\">
\t\t\t";
        // line 325
        echo "\t\t\t<button class=\"ui labeled icon green approve large button right\">
\t\t\t\t<i class=\"save icon\"></i>
\t\t\t\tלצור
\t\t\t</button>
\t\t\t<button class=\"ui labeled icon large cancel button right\">
\t\t\t\t<i class=\"remove icon\"></i>
\t\t\t\tלבטל
\t\t\t</button>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</div>

\t<div class=\"ui small modal export light_green\">
\t\t<div class=\"ui icon small header\">
\t\t\t<i class=\"table circular olive icon\"></i>
\t\t\tיצוא ל- CSV
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<form class=\"ui form\">
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>שם הקובץ</label>
\t\t\t\t\t<input type=\"text\" name=\"name\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"actions\">
\t\t\t";
        // line 352
        echo "\t\t\t<button class=\"ui labeled icon green approve large button right\">
\t\t\t\t<i class=\"download icon\"></i>
\t\t\t\tיצוא
\t\t\t</button>
\t\t\t<button class=\"ui labeled icon large cancel button right\">
\t\t\t\t<i class=\"remove icon\"></i>
\t\t\t\tביטול
\t\t\t</button>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</div>

\t<div class=\"ui small modal give_point light_green\">
\t\t<div class=\"ui icon small header\">
\t\t\t<i class=\"selected radio large grey icon\"></i>
\t\t\tלתת נקודה
\t\t</div>
\t\t<div class=\"content\"></div>
\t\t<div class=\"actions\">
\t\t\t<button class=\"ui labeled icon green approve large button right give_to_all\">
\t\t\t\t<i class=\"add user icon\"></i>
\t\t\t\tלכל משתמש במערכת
\t\t\t</button>


\t\t\t<button class=\"ui labeled icon orange cancel large button left\">
\t\t\t\t<i class=\"add user icon\"></i>
\t\t\t\tלמי שאין נקודות
\t\t\t</button>

\t\t\t<div class=\"clear\"></div>


\t\t</div>

\t</div>


";
        // line 409
        echo "


\t<div class=\"hidden\" id=\"edited_user_modal\">

\t\t<div class=\"content\" id=\"edited_user_data\">



\t\t</div>

\t</div>

\t<div class=\"hidden\" id=\"viewed_user_modal\">

\t\t<div class=\"content\" id=\"viewed_user_data\">



\t\t</div>

\t</div>

\t<div class=\"hidden\" id=\"user_photos_modal\">

\t\t<div class=\"content\" id=\"user_photos\">

\t\t\t<div class=\"ui active dimmer inverted\" id=\"user_photos_dimmer\">
\t\t\t\t<div class=\"ui text large loader\">טעינה</div>
\t\t\t</div>

\t\t\t<div class=\"photos\">

\t\t\t</div>

\t\t</div>

\t</div>

\t<div class=\"hidden\" id=\"subscr_modal\">

\t\t<div class=\"content\" id=\"subscr\">



\t\t</div>

\t</div>


\t<div class=\"ui small basic modal delete_photo\">
\t\t<div class=\"ui icon header\">
\t\t\t<i class=\"trash icon\"></i>
\t\t\tלהסיר תמונה?
\t\t</div>
\t\t<div class=\"content\"><p></p></div>
\t\t<div class=\"ui center aligned grid\">
\t\t\t<div class=\"actions\">
\t\t\t\t<div class=\"ui red basic cancel inverted button\">
\t\t\t\t\t<i class=\"remove icon\"></i>
\t\t\t\t\tלא
\t\t\t\t</div>
\t\t\t\t<div class=\"ui green ok inverted button\">
\t\t\t\t\t<i class=\"checkmark icon\"></i>
\t\t\t\t\tכן
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"hidden\" id=\"slide_modal\">

\t\t<div class=\"content\" id=\"slide\">



\t\t</div>

\t</div>

\t<div class=\"hidden\" id=\"faq_cat_modal\">

\t\t<div class=\"content\" id=\"faq_cat\">



\t\t</div>

\t</div>

\t<div class=\"hidden\" id=\"faq_modal\">

\t\t<div class=\"content\" id=\"faq\">



\t\t</div>

\t</div>

\t<div class=\"ui active disabled dimmer\" id=\"global_dimmer\">
\t\t<div class=\"ui text large loader disabled\">טעינה</div>
\t</div>

\t<input type=\"hidden\" id=\"no_photo_male_url\" value=\"/images/no_photo_1.jpg\">
\t<input type=\"hidden\" id=\"no_photo_female_url\" value=\"/images/no_photo_2.jpg\">


";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "backend/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 73,  606 => 409,  566 => 352,  538 => 325,  504 => 292,  452 => 242,  425 => 217,  415 => 213,  411 => 212,  407 => 210,  403 => 209,  396 => 205,  387 => 198,  376 => 193,  372 => 192,  368 => 190,  364 => 189,  357 => 185,  345 => 176,  339 => 173,  333 => 170,  324 => 164,  300 => 143,  294 => 140,  278 => 127,  272 => 124,  256 => 111,  249 => 107,  229 => 89,  227 => 88,  216 => 80,  208 => 74,  206 => 73,  193 => 65,  189 => 64,  179 => 59,  175 => 58,  165 => 53,  161 => 52,  151 => 47,  147 => 46,  137 => 41,  133 => 40,  127 => 36,  124 => 35,  122 => 34,  119 => 33,  116 => 32,  109 => 27,  104 => 25,  100 => 24,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  78 => 17,  74 => 16,  70 => 15,  65 => 14,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Greendate - Control Panel{% endblock %}*/
/* */
/* {% block stylesheets %}	*/
/* 	<link rel="stylesheet" href="{{ asset('libs/semantic/dist/semantic.rtl.min.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('libs/perfect-scrollbar/css/perfect-scrollbar.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('libs/jquery-modal/jquery.modal.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('libs/jquery-ui/css/cupertino/jquery-ui-1.10.4.custom.min.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block js %}	*/
/* 	<script src="{{ asset('libs/jquery/jquery-2.1.4.min.js') }}"></script>	*/
/* 	<script src="{{ asset('libs/semantic/dist/semantic.min.js') }}"></script>*/
/* 	<script src="{{ asset('libs/jquery-modal/jquery.modal.min.js') }}"></script>*/
/* */
/* 	<script src="{{ asset('libs/cloudinary/jquery.ui.widget.js') }}"></script>*/
/* 	<script src="{{ asset('libs/cloudinary/jquery.iframe-transport.js') }}"></script>*/
/* 	<script src="{{ asset('libs/cloudinary/jquery.fileupload.js') }}"></script>*/
/* 	<script src="{{ asset('libs/cloudinary/jquery.cloudinary.js') }}"></script>*/
/* */
/* 	<script src="{{ asset('libs/perfect-scrollbar/js/min/perfect-scrollbar-with-mousewheel.min.js') }}"></script>*/
/* 	<script src="{{ asset('libs/jquery-ui/js/jquery-ui-1.10.4.custom.min.js') }}"></script>*/
/* */
/* 	<script src="{{ asset('js/admin.js') }}"></script>*/
/* 	*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* 	{% set routeArr = app.request.get('_route')|split('_') %}*/
/* 	{% set parentPageName = routeArr[1] %}*/
/* */
/* 	*/
/* 	<div id="wrapper">*/
/* 		<div id="main_menu">*/
/* 			<a href="{{ path('admin_users') }}">*/
/* 				<div class="item green {% if parentPageName == 'users' or parentPageName == 'search' %}active{% endif %}">*/
/* 					<i class="users icon"></i>*/
/* 					משתמשים*/
/* 				</div>*/
/* 			</a>*/
/* 			<a href="{{ path('admin_messenger') }}">*/
/* 				<div class="item violet {% if parentPageName == 'messenger'%}active{% endif %}">*/
/* 					<i class="chat icon"></i>*/
/* 					הודעות*/
/* 				</div>*/
/* 			</a>*/
/* 			<a href="{{ path('admin_content') }}">*/
/* 				<div class="item orange {% if parentPageName == 'content'%}active{% endif %}">*/
/* 					<i class="text file icon"></i>*/
/* 					תוכן*/
/* 				</div>*/
/* 			</a>*/
/* 			<a href="{{ path('admin_magazine') }}">*/
/* 				<div class="item pink {% if parentPageName == 'magazine'%}active{% endif %}">*/
/* 					<i class="newspaper icon"></i>*/
/* 					מגזין*/
/* 				</div>*/
/* 			</a>*/
/* 			<a href="{{ path('admin_settings') }}">*/
/* 				<div class="item red {% if parentPageName == 'settings'%}active{% endif %}">*/
/* 					<i class="settings icon"></i>*/
/* 					הגדרות*/
/* 				</div>*/
/* 			</a>*/
/* 		</div>*/
/* */
/* 		<div id="main_container">*/
/* 			{% block content %}{% endblock %}*/
/* 		</div>*/
/* */
/* */
/* */
/* */
/* 		<div id="main_sidebar">*/
/* 			<a href="{{ path('user_homepage') }}" target="_blank"><div id="logo" class="ui orange column"*/
/* 				data-position="bottom center"*/
/* 				data-content="לאתר"></div>*/
/* 			</a>*/
/* */
/* 			<div class="scroll">*/
/* */
/* */
/* 				{% set sidebarForm = getAdminQuickSearchSidebarForm() %}*/
/* */
/* 				<div class="sidebarCont">*/
/* */
/* */
/* */
/* */
/* 					<div class="ui horizontal divider">*/
/* 						חיפוש*/
/* 						לפי שדות*/
/* 					</div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* 					<div class="ui form">*/
/* */
/* 						<form action="{{ path('admin_users', {'filter':'search'}) }}" method="post">*/
/* 							<div class="field">*/
/* */
/* 								<div class="ui action input">*/
/* 									{{ form_widget(sidebarForm.id) }}*/
/* 									<button class="ui green labeled icon button"*/
/* 											onclick="$(this).siblings('input[type=submit]').click();">*/
/* 										<i class="search icon"></i>*/
/* 										חפשו*/
/* 									</button>*/
/* 									<input type="submit" class="hidden">*/
/* 								</div>*/
/* 							</div>*/
/* 						</form>*/
/* */
/* 						<br>*/
/* */
/* 						<form action="{{ path('admin_users', {'filter':'search'}) }}" method="post">*/
/* 							<div class="field">*/
/* 								<div class="ui action input">*/
/* 									{{ form_widget(sidebarForm.email) }}*/
/* 									<button class="ui red labeled icon button"*/
/* 											onclick="$(this).siblings('input[type=submit]').click();">*/
/* 										<i class="search icon"></i>*/
/* 										חפשו*/
/* 									</button>*/
/* 									<input type="submit" class="hidden">*/
/* 								</div>*/
/* 							</div>*/
/* 						</form>*/
/* */
/* 						<br>*/
/* */
/* 						<form action="{{ path('admin_users', {'filter':'search'}) }}" method="post">*/
/* 							<div class="field">*/
/* 								<div class="ui action input">*/
/* 									{{ form_widget(sidebarForm.username) }}*/
/* 									<button class="ui orange labeled icon button"*/
/* 											onclick="$(this).siblings('input[type=submit]').click();">*/
/* 										<i class="search icon"></i>*/
/* 										חפשו*/
/* 									</button>*/
/* 									<input type="submit" class="hidden">*/
/* 								</div>*/
/* 							</div>*/
/* 						</form>*/
/* */
/* 					</div>*/
/* */
/* */
/* 					<div class="ui horizontal divider">*/
/* 						או*/
/* 					</div>*/
/* */
/* */
/* */
/* */
/* 					<form action="{{ path('admin_users', {'filter':'search'}) }}" method="post">*/
/* */
/* */
/* 						<div class="ui form small">*/
/* */
/* 							<div class="field">*/
/* 								<div class="ui black horizontal label">{{ form_label(sidebarForm.ageFrom) }}</div>*/
/* 								<div class="clear"></div><br>*/
/* 								<div class="age right">*/
/* 									{{ form_widget(sidebarForm.ageFrom) }}*/
/* 								</div>*/
/* 								<div class="age left">*/
/* 									{{ form_widget(sidebarForm.ageTo) }}*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="clear"></div>*/
/* */
/* 							<br>*/
/* */
/* 							<div class="field">*/
/* 								<div class="ui black horizontal label">{{ form_label(sidebarForm.region) }}</div>*/
/* 								<div class="clear"></div>*/
/* 								<br>*/
/* */
/* 								{% for region in sidebarForm.region %}*/
/* 									<div class="two col">*/
/* 										<div class="ui checkbox">*/
/* 											{{ form_widget(region) }}*/
/* 											{{ form_label(region) }}*/
/* 										</div>*/
/* 										<br>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* */
/* 							</div>*/
/* */
/* 							<div class="clear"></div>*/
/* 							<br>*/
/* */
/* 							<div class="field">*/
/* 								<div class="ui black horizontal label">{{ form_label(sidebarForm.type) }}</div>*/
/* 								<div class="clear"></div>*/
/* 								<br>*/
/* */
/* 								{% for type in sidebarForm.type %}*/
/* 									<div class="two col">*/
/* 										<div class="ui checkbox type">*/
/* 											{{ form_widget(type) }}*/
/* 											{{ form_label(type) }}*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* */
/* 							</div>*/
/* 							<div class="clear"></div>*/
/* 							<br>*/
/* */
/* */
/* */
/* 							<button class="ui green big button left" onclick="$(this).siblings('input[type=submit]').click();">חפשו</button>*/
/* 							<input type="submit" class="hidden">*/
/* */
/* 							<div class="clear"></div>*/
/* 							<br>*/
/* */
/* 						</div>*/
/* */
/* 					</form>*/
/* */
/* */
/* 					<div class="ui horizontal divider">*/
/* 						או*/
/* 					</div>*/
/* */
/* 					<br>*/
/* */
/* 					<div class="ui one column centered grid">*/
/* 						<a href="{{ path('admin_search_advanced') }}"><button class="ui red tiny button">חיפוש מתקדם</button></a>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* */
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* */
/* */
/* 		<div class="clear"></div>*/
/* 	</div>*/
/* */
/* */
/* */
/* */
/* 	<div class="ui small basic modal delete_user">*/
/* 		<div class="ui icon header">*/
/* 			<i class="trash icon"></i>*/
/* 			להסיר?*/
/* 		</div>*/
/* 		<div class="content"><p></p></div>*/
/* 		<div class="ui center aligned grid">*/
/* 			<div class="actions">*/
/* 				<div class="ui red basic cancel inverted button">*/
/* 					<i class="remove icon"></i>*/
/* 					לא*/
/* 				</div>*/
/* 				<div class="ui green ok inverted button">*/
/* 					<i class="checkmark icon"></i>*/
/* 					כן*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* 	<div class="ui small modal ban_users_reason light_green">*/
/* 		<div class="ui icon small header">*/
/* 			<i class="pencil icon"></i>*/
/* 			הערות*/
/* 		</div>*/
/* 		<div class="content">*/
/* 			<div class="ui form">*/
/* 				<textarea></textarea>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="actions">*/
/* 			{#<button class="ui green big button right" onclick="$(this).siblings('input[type=submit]').click();">חפשו</button>#}*/
/* 			<button class="ui labeled icon green approve large button right">*/
/* 				<i class="save icon"></i>*/
/* 				לשמור*/
/* 			</button>*/
/* 			<button class="ui labeled icon large cancel button right">*/
/* 				<i class="remove icon"></i>*/
/* 				לדלג*/
/* 			</button>*/
/* 			<div class="clear"></div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="ui small modal create_report light_green">*/
/* 		<div class="ui icon small header">*/
/* 			<i class="bar chart circular icon"></i>*/
/* 			יצירת דוח*/
/* 		</div>*/
/* 		<div class="content">*/
/* 			<form class="ui form">*/
/* 				<div class="field">*/
/* 					<label>שם הדוח</label>*/
/* 					<input type="text" name="name">*/
/* 				</div>*/
/* 				<div class="field">*/
/* 					<div class="ui slider checkbox">*/
/* 						<input type="checkbox" name="flagged" value="1">*/
/* 						<label>מופיע בעמוד הראשי</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 		<div class="actions">*/
/* 			{#<button class="ui green big button right" onclick="$(this).siblings('input[type=submit]').click();">חפשו</button>#}*/
/* 			<button class="ui labeled icon green approve large button right">*/
/* 				<i class="save icon"></i>*/
/* 				לצור*/
/* 			</button>*/
/* 			<button class="ui labeled icon large cancel button right">*/
/* 				<i class="remove icon"></i>*/
/* 				לבטל*/
/* 			</button>*/
/* 			<div class="clear"></div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="ui small modal export light_green">*/
/* 		<div class="ui icon small header">*/
/* 			<i class="table circular olive icon"></i>*/
/* 			יצוא ל- CSV*/
/* 		</div>*/
/* 		<div class="content">*/
/* 			<form class="ui form">*/
/* 				<div class="field">*/
/* 					<label>שם הקובץ</label>*/
/* 					<input type="text" name="name">*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 		<div class="actions">*/
/* 			{#<button class="ui green big button right" onclick="$(this).siblings('input[type=submit]').click();">חפשו</button>#}*/
/* 			<button class="ui labeled icon green approve large button right">*/
/* 				<i class="download icon"></i>*/
/* 				יצוא*/
/* 			</button>*/
/* 			<button class="ui labeled icon large cancel button right">*/
/* 				<i class="remove icon"></i>*/
/* 				ביטול*/
/* 			</button>*/
/* 			<div class="clear"></div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="ui small modal give_point light_green">*/
/* 		<div class="ui icon small header">*/
/* 			<i class="selected radio large grey icon"></i>*/
/* 			לתת נקודה*/
/* 		</div>*/
/* 		<div class="content"></div>*/
/* 		<div class="actions">*/
/* 			<button class="ui labeled icon green approve large button right give_to_all">*/
/* 				<i class="add user icon"></i>*/
/* 				לכל משתמש במערכת*/
/* 			</button>*/
/* */
/* */
/* 			<button class="ui labeled icon orange cancel large button left">*/
/* 				<i class="add user icon"></i>*/
/* 				למי שאין נקודות*/
/* 			</button>*/
/* */
/* 			<div class="clear"></div>*/
/* */
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* */
/* {#*/
/* 	<div class="ui long small modal edit_user scrolling" id="edited_user_modal">*/
/* 		<i class="close icon"></i>*/
/* 		<h1 class="ui grey header">*/
/* 			<i class="edit icon"></i>*/
/* 			<div class="content">*/
/* 				<span class="username"></span>*/
/* 				<div class="sub header">עריכת פרופיל</div>*/
/* 			</div>*/
/* 		</h1>*/
/* */
/* 		<div class="content" id="edited_user_data">*/
/* */
/* */
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* #}*/
/* */
/* */
/* */
/* 	<div class="hidden" id="edited_user_modal">*/
/* */
/* 		<div class="content" id="edited_user_data">*/
/* */
/* */
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="hidden" id="viewed_user_modal">*/
/* */
/* 		<div class="content" id="viewed_user_data">*/
/* */
/* */
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="hidden" id="user_photos_modal">*/
/* */
/* 		<div class="content" id="user_photos">*/
/* */
/* 			<div class="ui active dimmer inverted" id="user_photos_dimmer">*/
/* 				<div class="ui text large loader">טעינה</div>*/
/* 			</div>*/
/* */
/* 			<div class="photos">*/
/* */
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="hidden" id="subscr_modal">*/
/* */
/* 		<div class="content" id="subscr">*/
/* */
/* */
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* */
/* 	<div class="ui small basic modal delete_photo">*/
/* 		<div class="ui icon header">*/
/* 			<i class="trash icon"></i>*/
/* 			להסיר תמונה?*/
/* 		</div>*/
/* 		<div class="content"><p></p></div>*/
/* 		<div class="ui center aligned grid">*/
/* 			<div class="actions">*/
/* 				<div class="ui red basic cancel inverted button">*/
/* 					<i class="remove icon"></i>*/
/* 					לא*/
/* 				</div>*/
/* 				<div class="ui green ok inverted button">*/
/* 					<i class="checkmark icon"></i>*/
/* 					כן*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* 	<div class="hidden" id="slide_modal">*/
/* */
/* 		<div class="content" id="slide">*/
/* */
/* */
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="hidden" id="faq_cat_modal">*/
/* */
/* 		<div class="content" id="faq_cat">*/
/* */
/* */
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="hidden" id="faq_modal">*/
/* */
/* 		<div class="content" id="faq">*/
/* */
/* */
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="ui active disabled dimmer" id="global_dimmer">*/
/* 		<div class="ui text large loader disabled">טעינה</div>*/
/* 	</div>*/
/* */
/* 	<input type="hidden" id="no_photo_male_url" value="/images/no_photo_1.jpg">*/
/* 	<input type="hidden" id="no_photo_female_url" value="/images/no_photo_2.jpg">*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
