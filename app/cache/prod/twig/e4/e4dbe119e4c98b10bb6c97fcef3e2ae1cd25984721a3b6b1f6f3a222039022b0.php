<?php

/* :backend/content:page.html.twig */
class __TwigTemplate_5f7b9f96ec3f15ed03c3d31b4f4719e31ca2c9170aedf5471979fbcc66af1d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/content:page.html.twig", 1);
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

        ";
        // line 9
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()) > 0)) {
            // line 10
            echo "
        <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("admin_content");
            echo "\" class=\"link\" style=\"margin-right: 30px;\">
            תוכן
        </a>
        /
        עמוד -
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
            echo "

        ";
        }
        // line 19
        echo "
         <div class=\"ui segment page\">

            <h2 class=\"ui header right\">
                <i class=\"write icon\"></i>
                <div class=\"content\">
                    ";
        // line 25
        $context["title"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()) > 0)) ? ("עריכת העמוד") : ("הוספת העמוד"));
        // line 26
        echo "                    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
                </div>
            </h2>

            <div class=\"clear\"></div>

            <form class=\"ui form\" id=\"page_form\" method=\"post\">

                <div class=\"ui big ribbon label\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "headerType", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "headerType", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget');
        echo "
                </div>

                <br><br>

                <h3 class=\"ui horizontal divider header\">
                    <i class=\"line chart orange icon\"></i>
                    SEO
                </h3>


                <div class=\"ui big ribbon label\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uri", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uri", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "
                </div>

                <br>

                <h3 class=\"ui horizontal divider header\">
                    <i class=\"settings orange icon\"></i>
                    הגדרות
                </h3>

                <div class=\"field\">
                    <div class=\"ui big ribbon label\">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'label');
        echo "
                    </div>
                    <div class=\"ui compact segment\">
                        <div class=\"ui slider fitted checkbox\">
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'widget');
        echo "
                            <label></label>
                        </div>
                    </div>
                </div>


                <div class=\"ui big ribbon label\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "footerHeader", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "footerHeader", array()), 'widget');
        echo "
                </div>



                <br>
                <br>

                <div class=\"ui one column centered grid\">
                    <button class=\"ui labeled icon orange approve big button right\">
                        <i class=\"save icon\"></i>
                        לשמור
                    </button>
                </div>

                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

            </form>





            <br>
            <br>


            <div class=\"clear\"></div>


        </div>

    </div>



    <script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
    <script>

        tinymce.init({

            selector:'#page_content',

            theme: \"modern\",

            menubar : false,

            plugins: [

                \"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker\",

                \"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking\",

                \"save table contextmenu directionality emoticons template paste textcolor\"

            ],

            //content_css: \"css/content.css\",

            toolbar: \"insertfile undo redo | bold italic underline | styleselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | preview media fullpage | forecolor backcolor emoticons | link image | code \",

            style_formats: [

                {title: \"Headers\", items: [

                    {title: \"Header 3\", format: \"h3\"},

                    {title: \"Header 4\", format: \"h4\"},

                    {title: \"Header 5\", format: \"h5\"},

                    {title: \"Header 6\", format: \"h6\"}

                ]},

                {title: \"Inline\", items: [

                    {title: \"Bold\", icon: \"bold\", format: \"bold\"},

                    {title: \"Italic\", icon: \"italic\", format: \"italic\"},

                    {title: \"Underline\", icon: \"underline\", format: \"underline\"},

                    {title: \"Strikethrough\", icon: \"strikethrough\", format: \"strikethrough\"},

                    {title: \"Superscript\", icon: \"superscript\", format: \"superscript\"},

                    {title: \"Subscript\", icon: \"subscript\", format: \"subscript\"},

                ]},

                {title: \"Alignment\", items: [

                    {title: \"Left\", icon: \"alignleft\", format: \"alignleft\"},

                    {title: \"Center\", icon: \"aligncenter\", format: \"aligncenter\"},

                    {title: \"Right\", icon: \"alignright\", format: \"alignright\"},

                    {title: \"Justify\", icon: \"alignjustify\", format: \"alignjustify\"}

                ]}

            ],

            cleanup : false,

            verify_html : false,

        });


    </script>


";
    }

    public function getTemplateName()
    {
        return ":backend/content:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 109,  187 => 94,  182 => 92,  172 => 85,  165 => 81,  150 => 69,  145 => 67,  139 => 64,  134 => 62,  128 => 59,  123 => 57,  109 => 46,  104 => 44,  98 => 41,  93 => 39,  87 => 36,  82 => 34,  70 => 26,  68 => 25,  60 => 19,  54 => 16,  46 => 11,  43 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'תוכן', 'icon': 'text file' }) }}*/
/* */
/*     <div class="page_content">*/
/* */
/*         {% if page.id > 0 %}*/
/* */
/*         <a href="{{ path('admin_content') }}" class="link" style="margin-right: 30px;">*/
/*             תוכן*/
/*         </a>*/
/*         /*/
/*         עמוד -*/
/*         {{ page.name }}*/
/* */
/*         {% endif %}*/
/* */
/*          <div class="ui segment page">*/
/* */
/*             <h2 class="ui header right">*/
/*                 <i class="write icon"></i>*/
/*                 <div class="content">*/
/*                     {% set title = page.id > 0 ? 'עריכת העמוד' : 'הוספת העמוד' %}*/
/*                     {{ title }}*/
/*                 </div>*/
/*             </h2>*/
/* */
/*             <div class="clear"></div>*/
/* */
/*             <form class="ui form" id="page_form" method="post">*/
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.name) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.name) }}*/
/*                 </div>*/
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.headerType) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.headerType) }}*/
/*                 </div>*/
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.content) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.content) }}*/
/*                 </div>*/
/* */
/*                 <br><br>*/
/* */
/*                 <h3 class="ui horizontal divider header">*/
/*                     <i class="line chart orange icon"></i>*/
/*                     SEO*/
/*                 </h3>*/
/* */
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.uri) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.uri) }}*/
/*                 </div>*/
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.title) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.title) }}*/
/*                 </div>*/
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.description) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.description) }}*/
/*                 </div>*/
/* */
/*                 <br>*/
/* */
/*                 <h3 class="ui horizontal divider header">*/
/*                     <i class="settings orange icon"></i>*/
/*                     הגדרות*/
/*                 </h3>*/
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">*/
/*                         {{ form_label(form.isActive) }}*/
/*                     </div>*/
/*                     <div class="ui compact segment">*/
/*                         <div class="ui slider fitted checkbox">*/
/*                             {{ form_widget(form.isActive) }}*/
/*                             <label></label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.footerHeader) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.footerHeader) }}*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <br>*/
/*                 <br>*/
/* */
/*                 <div class="ui one column centered grid">*/
/*                     <button class="ui labeled icon orange approve big button right">*/
/*                         <i class="save icon"></i>*/
/*                         לשמור*/
/*                     </button>*/
/*                 </div>*/
/* */
/*                 {{ form_rest(form) }}*/
/* */
/*             </form>*/
/* */
/* */
/* */
/* */
/* */
/*             <br>*/
/*             <br>*/
/* */
/* */
/*             <div class="clear"></div>*/
/* */
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/*     <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>*/
/*     <script>*/
/* */
/*         tinymce.init({*/
/* */
/*             selector:'#page_content',*/
/* */
/*             theme: "modern",*/
/* */
/*             menubar : false,*/
/* */
/*             plugins: [*/
/* */
/*                 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",*/
/* */
/*                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",*/
/* */
/*                 "save table contextmenu directionality emoticons template paste textcolor"*/
/* */
/*             ],*/
/* */
/*             //content_css: "css/content.css",*/
/* */
/*             toolbar: "insertfile undo redo | bold italic underline | styleselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | preview media fullpage | forecolor backcolor emoticons | link image | code ",*/
/* */
/*             style_formats: [*/
/* */
/*                 {title: "Headers", items: [*/
/* */
/*                     {title: "Header 3", format: "h3"},*/
/* */
/*                     {title: "Header 4", format: "h4"},*/
/* */
/*                     {title: "Header 5", format: "h5"},*/
/* */
/*                     {title: "Header 6", format: "h6"}*/
/* */
/*                 ]},*/
/* */
/*                 {title: "Inline", items: [*/
/* */
/*                     {title: "Bold", icon: "bold", format: "bold"},*/
/* */
/*                     {title: "Italic", icon: "italic", format: "italic"},*/
/* */
/*                     {title: "Underline", icon: "underline", format: "underline"},*/
/* */
/*                     {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},*/
/* */
/*                     {title: "Superscript", icon: "superscript", format: "superscript"},*/
/* */
/*                     {title: "Subscript", icon: "subscript", format: "subscript"},*/
/* */
/*                 ]},*/
/* */
/*                 {title: "Alignment", items: [*/
/* */
/*                     {title: "Left", icon: "alignleft", format: "alignleft"},*/
/* */
/*                     {title: "Center", icon: "aligncenter", format: "aligncenter"},*/
/* */
/*                     {title: "Right", icon: "alignright", format: "alignright"},*/
/* */
/*                     {title: "Justify", icon: "alignjustify", format: "alignjustify"}*/
/* */
/*                 ]}*/
/* */
/*             ],*/
/* */
/*             cleanup : false,*/
/* */
/*             verify_html : false,*/
/* */
/*         });*/
/* */
/* */
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
