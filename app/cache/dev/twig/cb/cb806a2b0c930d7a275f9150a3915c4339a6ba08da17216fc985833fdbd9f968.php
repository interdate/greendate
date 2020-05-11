<?php

/* :backend/magazine:article.html.twig */
class __TwigTemplate_f64d4ed71fd5b6fe2b36bf9802054605d8342f48dda851a6ca9adabf63fb9645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", ":backend/magazine:article.html.twig", 1);
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
        echo twig_include($this->env, $context, "backend/header.html.twig", array("header" => "מגזין", "icon" => "newspaper"));
        echo "

    <div class=\"page_content\">

        ";
        // line 9
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()) > 0)) {
            // line 10
            echo "
        <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("admin_magazine");
            echo "\" class=\"link\" style=\"margin-right: 30px;\">
            רשימת מאמרים
        </a>

        /

        ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array()), "html", null, true);
            echo "

        ";
        }
        // line 20
        echo "

        <div class=\"ui segment article\">

            <h2 class=\"ui header right\">
                <i class=\"write icon\"></i>
                <div class=\"content\">
                    ";
        // line 27
        $context["title"] = ((($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()) > 0)) ? ("עריכת המאמר") : ("הוספת מאמר"));
        // line 28
        echo "                    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
                </div>
            </h2>


            <div class=\"clear\"></div>



            <div class=\"cloudinaryForm hidden\">
                ";
        // line 38
        echo (isset($context["renderedCloudForm"]) ? $context["renderedCloudForm"] : null);
        echo "
            </div>


            <form class=\"ui form\" id=\"article_form\" method=\"post\">

                <div class=\"ui big ribbon label\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "headerType", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "headerType", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "brief", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "brief", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget');
        echo "
                </div>

                <br><br>



                <h3 class=\"ui horizontal divider header\">
                    <i class=\"picture pink icon\"></i>
                    תמונה
                </h3>

                <br><br>


                <div class=\"field\">

                    <div class=\"ui one column centered grid article_image\">
                        <img alt=\"\" src=\"\">
                    </div>

                    <br><br>

                    <div class=\"ui one column centered grid upload_photo\" onclick=\"\$('.cloudinaryForm input[type=file]').click();\">
                        <button type=\"button\" class=\"ui labeled icon pink button\">
                            <i class=\"picture icon\"></i>
                            בחרו תמונה
                        </button>
                    </div>

                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imageName", array()), 'widget');
        echo "

                </div>

                <br><br>


                <div class=\"ui indicating progress\">
                    <div class=\"bar\" id=\"upload_photo_progress\"></div>
                    <div class=\"label\" id=\"upload_photo_label\">העלאה: <span>0</span>%</div>
                </div>

                <div class=\"ui big ribbon label\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imageAlt", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imageAlt", array()), 'widget');
        echo "
                </div>

                <br>
                <br>


                <h3 class=\"ui horizontal divider header\">
                    <i class=\"chart line pink icon\"></i>
                    SEO
                </h3>


                <div class=\"ui big ribbon label\">";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uri", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uri", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "
                </div>

                <div class=\"ui big ribbon label\">";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label');
        echo "</div>
                <div class=\"field\">
                    ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "
                </div>

                <br>

                <h3 class=\"ui horizontal divider header\">
                    <i class=\"settings pink icon\"></i>
                    הגדרות
                </h3>


                <div class=\"field\">
                    <div class=\"ui big ribbon label\">
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isOnHomepage", array()), 'label');
        echo "
                    </div>
                    <div class=\"ui compact segment\">
                        <div class=\"ui slider fitted checkbox\">
                            ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isOnHomepage", array()), 'widget');
        echo "
                            <label></label>
                        </div>
                    </div>
                </div>

                <div class=\"field\">
                    <div class=\"ui big ribbon label\">
                        ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'label');
        echo "
                    </div>
                    <div class=\"ui compact segment\">
                        <div class=\"ui slider fitted checkbox\">
                            ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'widget');
        echo "
                            <label></label>
                        </div>
                    </div>
                </div>


                <div class=\"ui divider\"></div>
                <br>
                <br>

                <div class=\"ui one column centered grid\">
                    <button class=\"ui labeled icon pink approve big button right\">
                        <i class=\"save icon\"></i>
                        לשמור
                    </button>
                </div>

                ";
        // line 177
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

            selector:'#article_content',

            theme: \"modern\",

            menubar : false,

            plugins: [

                \"directionality advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker\",

                \"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking\",

                \"save table contextmenu directionality emoticons template paste textcolor\"

            ],

            //content_css: \"css/content.css\",

            toolbar: \"ltr rtl | insertfile undo redo | bold italic underline | styleselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | preview media fullpage | forecolor backcolor emoticons | link unlink image | code \",

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
        return ":backend/magazine:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 177,  270 => 159,  263 => 155,  252 => 147,  245 => 143,  229 => 130,  224 => 128,  218 => 125,  213 => 123,  207 => 120,  202 => 118,  186 => 105,  181 => 103,  166 => 91,  133 => 61,  128 => 59,  122 => 56,  117 => 54,  111 => 51,  106 => 49,  100 => 46,  95 => 44,  86 => 38,  72 => 28,  70 => 27,  61 => 20,  55 => 17,  46 => 11,  43 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "backend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ include('backend/header.html.twig', { 'header': 'מגזין', 'icon': 'newspaper' }) }}*/
/* */
/*     <div class="page_content">*/
/* */
/*         {% if article.id > 0 %}*/
/* */
/*         <a href="{{ path('admin_magazine') }}" class="link" style="margin-right: 30px;">*/
/*             רשימת מאמרים*/
/*         </a>*/
/* */
/*         /*/
/* */
/*         {{ article.name }}*/
/* */
/*         {% endif %}*/
/* */
/* */
/*         <div class="ui segment article">*/
/* */
/*             <h2 class="ui header right">*/
/*                 <i class="write icon"></i>*/
/*                 <div class="content">*/
/*                     {% set title = article.id > 0 ? 'עריכת המאמר' : 'הוספת מאמר' %}*/
/*                     {{ title }}*/
/*                 </div>*/
/*             </h2>*/
/* */
/* */
/*             <div class="clear"></div>*/
/* */
/* */
/* */
/*             <div class="cloudinaryForm hidden">*/
/*                 {{ renderedCloudForm|raw }}*/
/*             </div>*/
/* */
/* */
/*             <form class="ui form" id="article_form" method="post">*/
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
/*                 <div class="ui big ribbon label">{{ form_label(form.brief) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.brief) }}*/
/*                 </div>*/
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.content) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.content) }}*/
/*                 </div>*/
/* */
/*                 <br><br>*/
/* */
/* */
/* */
/*                 <h3 class="ui horizontal divider header">*/
/*                     <i class="picture pink icon"></i>*/
/*                     תמונה*/
/*                 </h3>*/
/* */
/*                 <br><br>*/
/* */
/* */
/*                 <div class="field">*/
/* */
/*                     <div class="ui one column centered grid article_image">*/
/*                         <img alt="" src="">*/
/*                     </div>*/
/* */
/*                     <br><br>*/
/* */
/*                     <div class="ui one column centered grid upload_photo" onclick="$('.cloudinaryForm input[type=file]').click();">*/
/*                         <button type="button" class="ui labeled icon pink button">*/
/*                             <i class="picture icon"></i>*/
/*                             בחרו תמונה*/
/*                         </button>*/
/*                     </div>*/
/* */
/*                     {{ form_widget(form.imageName) }}*/
/* */
/*                 </div>*/
/* */
/*                 <br><br>*/
/* */
/* */
/*                 <div class="ui indicating progress">*/
/*                     <div class="bar" id="upload_photo_progress"></div>*/
/*                     <div class="label" id="upload_photo_label">העלאה: <span>0</span>%</div>*/
/*                 </div>*/
/* */
/*                 <div class="ui big ribbon label">{{ form_label(form.imageAlt) }}</div>*/
/*                 <div class="field">*/
/*                     {{ form_widget(form.imageAlt) }}*/
/*                 </div>*/
/* */
/*                 <br>*/
/*                 <br>*/
/* */
/* */
/*                 <h3 class="ui horizontal divider header">*/
/*                     <i class="chart line pink icon"></i>*/
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
/*                     <i class="settings pink icon"></i>*/
/*                     הגדרות*/
/*                 </h3>*/
/* */
/* */
/*                 <div class="field">*/
/*                     <div class="ui big ribbon label">*/
/*                         {{ form_label(form.isOnHomepage) }}*/
/*                     </div>*/
/*                     <div class="ui compact segment">*/
/*                         <div class="ui slider fitted checkbox">*/
/*                             {{ form_widget(form.isOnHomepage) }}*/
/*                             <label></label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
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
/*                 <div class="ui divider"></div>*/
/*                 <br>*/
/*                 <br>*/
/* */
/*                 <div class="ui one column centered grid">*/
/*                     <button class="ui labeled icon pink approve big button right">*/
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
/*             selector:'#article_content',*/
/* */
/*             theme: "modern",*/
/* */
/*             menubar : false,*/
/* */
/*             plugins: [*/
/* */
/*                 "directionality advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",*/
/* */
/*                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",*/
/* */
/*                 "save table contextmenu directionality emoticons template paste textcolor"*/
/* */
/*             ],*/
/* */
/*             //content_css: "css/content.css",*/
/* */
/*             toolbar: "ltr rtl | insertfile undo redo | bold italic underline | styleselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | preview media fullpage | forecolor backcolor emoticons | link unlink image | code ",*/
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
