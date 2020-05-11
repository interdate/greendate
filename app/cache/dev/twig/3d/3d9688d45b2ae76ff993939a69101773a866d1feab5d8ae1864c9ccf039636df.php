<?php

/* :backend/content:slide.html.twig */
class __TwigTemplate_225a7e7c2ac04c31d82c4ebb1c95fda57c8d1203cd30677fa05a4c3b4053a747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.cloudinary.js"), "html", null, true);
        echo "\"></script>
    
    <script>
        
        \$(document).ready(function(){

            \$.cloudinary.config({ cloud_name: 'greendate', api_key: '333193447586872'});
            \$('.ui.progress').hide();

            if(\$('#slide_imageName').val().length > 0){
                var url = \$.cloudinary.url(\$('#slide_imageName').val(), { width: 610, radius: 3, crop: 'fill' });
                \$('.slide_image').find('img').attr('src',url);
            }

            \$('.cloudinary-fileupload').bind('fileuploadstart', function(e, data) {
                \$('.ui.progress').show();
                \$('.upload_photo button').addClass(\"loading\");
            });

            \$('.cloudinary-fileupload').bind('fileuploadprogress', function(e, data) {
                var value = Math.round((data.loaded * 100.0) / data.total);
                \$('.ui.progress').progress({
                    percent: value,
                });
                \$('#upload_photo_label span').text(value);
            });

            \$('.cloudinary-fileupload').bind('cloudinarydone', function(e, data) {
                //console.log(JSON.stringify(data));
                \$('.upload_photo button').removeClass(\"loading\");
                \$('.ui.progress').hide();
                \$('#slide_imageName').val(data.result.public_id);
                var url = \$.cloudinary.url(data.result.public_id, { width: 610, radius: 5, crop: 'fill' });
                \$('.slide_image').find('img').attr('src',url);
                return true;
            });
        });
        
    </script>
    

    <h1 class=\"ui grey header right\">
        <i class=\"photo icon\"></i>
        <div class=\"content\">
            <span class=\"username\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "name", array()), "html", null, true);
        echo "</span>
            <div class=\"sub header\">עריכת תמונה</div>
        </div>
    </h1>


    <div class=\"left close\">
        <i class=\"icon remove circle olive big \" onclick=\"\$.kfModal.close();\"></i>
    </div>

    <div class=\"clear\"></div>


    <div class=\"ui segment\">

        <div class=\"cloudinaryForm hidden\">
            ";
        // line 67
        echo (isset($context["renderedCloudForm"]) ? $context["renderedCloudForm"] : null);
        echo "
        </div>

        <div class=\"mar_top\"></div>

        <form class=\"ui form\" id=\"slide_form\" method=\"post\">

            <div class=\"field\">


                <div class=\"ui one column centered grid slide_image\">
                    <img alt=\"\" src=\"\">
                </div>

                <br><br><br>

                <div class=\"ui one column centered grid upload_photo\" onclick=\"\$('.cloudinaryForm input[type=file]').click();\">
                    <button type=\"button\" class=\"ui labeled icon green button\">
                        <i class=\"photo icon\"></i>
                        בחרו תמונה
                    </button>
                </div>

                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imageName", array()), 'widget');
        echo "
            </div>

            <br><br>

            <div class=\"ui indicating progress\">
                <div class=\"bar\" id=\"upload_photo_progress\"></div>
                <div class=\"label\" id=\"upload_photo_label\">העלאה: <span>0</span>%</div>
            </div>


            <h3 class=\"ui horizontal divider header\">
                <i class=\"attach olive icon\"></i>
                טקסט
            </h3>

            <div class=\"ui grey large horizontal label\">";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</div>
            <div class=\"field\">
                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
            </div>

            <div class=\"ui grey large horizontal label\">";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "headerType", array()), 'label');
        echo "</div>
            <div class=\"field\">
                ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "headerType", array()), 'widget');
        echo "
            </div>

            <div class=\"ui grey large horizontal label\">";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label');
        echo "</div>
            <div class=\"field\">
                ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget');
        echo "
            </div>


            <h3 class=\"ui horizontal divider header\">
                <i class=\"settings olive icon\"></i>
                הגדרות
            </h3>

            <div class=\"field\">
                <div class=\"ui grey large horizontal label\">
                    ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'label');
        echo "
                </div>
                <div class=\"ui compact segment\">
                    <div class=\"ui slider fitted checkbox\">
                        ";
        // line 133
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
                <button type=\"button\" class=\"ui labeled icon green approve large button right\" onclick=\"saveSlide(";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "id", array()), "html", null, true);
        echo ", \$('#slide_form'));\">
                    <i class=\"save icon\"></i>
                    לשמור
                </button>
            </div>

            ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        </form>





        <br>
        <br>


        <div class=\"clear\"></div>


    </div>



";
    }

    public function getTemplateName()
    {
        return ":backend/content:slide.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  227 => 151,  218 => 145,  203 => 133,  196 => 129,  182 => 118,  177 => 116,  171 => 113,  166 => 111,  160 => 108,  155 => 106,  136 => 90,  110 => 67,  91 => 51,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  29 => 3,  23 => 2,  20 => 1,);
    }
}
/* */
/* {% block content %}*/
/* */
/*     <script src="{{ asset('libs/cloudinary/jquery.ui.widget.js') }}"></script>*/
/*     <script src="{{ asset('libs/cloudinary/jquery.iframe-transport.js') }}"></script>*/
/*     <script src="{{ asset('libs/cloudinary/jquery.fileupload.js') }}"></script>*/
/*     <script src="{{ asset('libs/cloudinary/jquery.cloudinary.js') }}"></script>*/
/*     */
/*     <script>*/
/*         */
/*         $(document).ready(function(){*/
/* */
/*             $.cloudinary.config({ cloud_name: 'greendate', api_key: '333193447586872'});*/
/*             $('.ui.progress').hide();*/
/* */
/*             if($('#slide_imageName').val().length > 0){*/
/*                 var url = $.cloudinary.url($('#slide_imageName').val(), { width: 610, radius: 3, crop: 'fill' });*/
/*                 $('.slide_image').find('img').attr('src',url);*/
/*             }*/
/* */
/*             $('.cloudinary-fileupload').bind('fileuploadstart', function(e, data) {*/
/*                 $('.ui.progress').show();*/
/*                 $('.upload_photo button').addClass("loading");*/
/*             });*/
/* */
/*             $('.cloudinary-fileupload').bind('fileuploadprogress', function(e, data) {*/
/*                 var value = Math.round((data.loaded * 100.0) / data.total);*/
/*                 $('.ui.progress').progress({*/
/*                     percent: value,*/
/*                 });*/
/*                 $('#upload_photo_label span').text(value);*/
/*             });*/
/* */
/*             $('.cloudinary-fileupload').bind('cloudinarydone', function(e, data) {*/
/*                 //console.log(JSON.stringify(data));*/
/*                 $('.upload_photo button').removeClass("loading");*/
/*                 $('.ui.progress').hide();*/
/*                 $('#slide_imageName').val(data.result.public_id);*/
/*                 var url = $.cloudinary.url(data.result.public_id, { width: 610, radius: 5, crop: 'fill' });*/
/*                 $('.slide_image').find('img').attr('src',url);*/
/*                 return true;*/
/*             });*/
/*         });*/
/*         */
/*     </script>*/
/*     */
/* */
/*     <h1 class="ui grey header right">*/
/*         <i class="photo icon"></i>*/
/*         <div class="content">*/
/*             <span class="username">{{ slide.name }}</span>*/
/*             <div class="sub header">עריכת תמונה</div>*/
/*         </div>*/
/*     </h1>*/
/* */
/* */
/*     <div class="left close">*/
/*         <i class="icon remove circle olive big " onclick="$.kfModal.close();"></i>*/
/*     </div>*/
/* */
/*     <div class="clear"></div>*/
/* */
/* */
/*     <div class="ui segment">*/
/* */
/*         <div class="cloudinaryForm hidden">*/
/*             {{ renderedCloudForm|raw }}*/
/*         </div>*/
/* */
/*         <div class="mar_top"></div>*/
/* */
/*         <form class="ui form" id="slide_form" method="post">*/
/* */
/*             <div class="field">*/
/* */
/* */
/*                 <div class="ui one column centered grid slide_image">*/
/*                     <img alt="" src="">*/
/*                 </div>*/
/* */
/*                 <br><br><br>*/
/* */
/*                 <div class="ui one column centered grid upload_photo" onclick="$('.cloudinaryForm input[type=file]').click();">*/
/*                     <button type="button" class="ui labeled icon green button">*/
/*                         <i class="photo icon"></i>*/
/*                         בחרו תמונה*/
/*                     </button>*/
/*                 </div>*/
/* */
/*                 {{ form_widget(form.imageName) }}*/
/*             </div>*/
/* */
/*             <br><br>*/
/* */
/*             <div class="ui indicating progress">*/
/*                 <div class="bar" id="upload_photo_progress"></div>*/
/*                 <div class="label" id="upload_photo_label">העלאה: <span>0</span>%</div>*/
/*             </div>*/
/* */
/* */
/*             <h3 class="ui horizontal divider header">*/
/*                 <i class="attach olive icon"></i>*/
/*                 טקסט*/
/*             </h3>*/
/* */
/*             <div class="ui grey large horizontal label">{{ form_label(form.name) }}</div>*/
/*             <div class="field">*/
/*                 {{ form_widget(form.name) }}*/
/*             </div>*/
/* */
/*             <div class="ui grey large horizontal label">{{ form_label(form.headerType) }}</div>*/
/*             <div class="field">*/
/*                 {{ form_widget(form.headerType) }}*/
/*             </div>*/
/* */
/*             <div class="ui grey large horizontal label">{{ form_label(form.content) }}</div>*/
/*             <div class="field">*/
/*                 {{ form_widget(form.content) }}*/
/*             </div>*/
/* */
/* */
/*             <h3 class="ui horizontal divider header">*/
/*                 <i class="settings olive icon"></i>*/
/*                 הגדרות*/
/*             </h3>*/
/* */
/*             <div class="field">*/
/*                 <div class="ui grey large horizontal label">*/
/*                     {{ form_label(form.isActive) }}*/
/*                 </div>*/
/*                 <div class="ui compact segment">*/
/*                     <div class="ui slider fitted checkbox">*/
/*                         {{ form_widget(form.isActive) }}*/
/*                         <label></label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="ui divider"></div>*/
/*             <br>*/
/*             <br>*/
/* */
/*             <div class="ui one column centered grid">*/
/*                 <button type="button" class="ui labeled icon green approve large button right" onclick="saveSlide({{ slide.id }}, $('#slide_form'));">*/
/*                     <i class="save icon"></i>*/
/*                     לשמור*/
/*                 </button>*/
/*             </div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*         </form>*/
/* */
/* */
/* */
/* */
/* */
/*         <br>*/
/*         <br>*/
/* */
/* */
/*         <div class="clear"></div>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
