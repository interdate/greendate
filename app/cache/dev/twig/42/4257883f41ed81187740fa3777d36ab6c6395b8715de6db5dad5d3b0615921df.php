<?php

/* :backend/users:photos.html.twig */
class __TwigTemplate_3a304058d64b7894a34a33202c5597427dd6716c0e8fbdb70219d043391573b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("libs/cloudinary/jquery.cloudinary.js"), "html", null, true);
        echo "\"></script>

<script>

    \$(document).ready(function(){

        /******************** User Photos And Cloudinary *********************************************/

        \$.cloudinary.config({ cloud_name: 'greendate', api_key: '333193447586872'});
        \$('.ui.progress').hide();

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
            savePhotoData(data, ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo ");
            return true;
        });


        if(\$('.photo_name').size()){
            \$('.photo_name').each(function(index){
                var template = \$('#photo_template').html();
                var idArr = \$(this).val().split(\"__\");
                var photoName = idArr[0];
                var photoId = idArr[1];
                var main = idArr[2] == 1 ? 'checked=\"checked\"' : '';
                var valid = idArr[3] == 1 ? 'checked=\"checked\"' : '';
                var node = template.replace(/\\[PHOTO_NAME\\]/, photoName);
                node = node.replace(/\\[PHOTO_ID\\]/g, photoId);
                node = node.replace(/\\[main\\]/, main);
                node = node.replace(/\\[valid\\]/, valid);

                \$('.photos').append(node);
                \$('#' + photoName).find('.photo_cont').html(
                    \$.cloudinary.image(photoName + '.jpg',{
                        crop: 'fill',
                        width: 210,
                        height: 260
                    })
                );
            });

            \$('#user_photos_dimmer').addClass(\"disabled\").find('.loader').addClass(\"disabled\");

        }

        /********************************************************************************************/


        /*
        \$('.photos .valid_photo').click(function(){

            var value = (\$(this).is(\":checked\")) ? 1 : 0;
            setPhotoProperty('isValid', value, \$(this).parents('tr').find('.photoId').val());
        });
        */

        \$('.photos .ui.checkbox.toggle.main_photo').checkbox({
            onChecked: function(){
                setPhotoProperty('isMain', 1, \$(this).parents('tr').find('.photoId').val());
            }/*,
            onUnchecked: function(){
                setPhotoProperty('isMain', 0, \$(this).parents('tr').find('.photoId').val());
            },*/
        });

        \$('.photos .ui.checkbox.toggle.valid_photo').checkbox({
            onChecked: function(){
                setPhotoProperty('isValid', 1, \$(this).parents('tr').find('.photoId').val());
            },
            onUnchecked: function(){
                setPhotoProperty('isValid', 0, \$(this).parents('tr').find('.photoId').val());
            },
        });



        \$('.photos .delete').click(function(){
            if(confirm('להסיר תמונה?')){
                deletePhoto(
                    \$(this).siblings('.photoId').val(),
                    \$(this).parents('table')
                );
            }
        });


    });

</script>


<h1 class=\"ui grey header right\">
    <i class=\"photo circular icon\"></i>
    <div class=\"content\">
        <span class=\"username\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</span>
        <div class=\"sub header\">עריכת תמונות</div>
    </div>
</h1>


<div class=\"left close\">
    <i class=\"icon remove circle olive big \" onclick=\"\$.kfModal.close();\"></i>
</div>

<div class=\"clear\"></div>

<div class=\"ui divider\"></div>

<br>

<div class=\"ui one column centered grid upload_photo\">
    <button class=\"ui labeled icon green huge button\" onclick=\"\$('.cloudinaryForm input[type=file]').click();\">
        <i class=\"cloud upload icon\"></i>
        העלאת תמונה לענן
    </button>
</div>

<br><br>

<div class=\"ui indicating progress uploadPhotoProgress\">
    <div class=\"bar\" id=\"upload_photo_progress\"></div>
    <div class=\"label\" id=\"upload_photo_label\">העלאה: <span>0</span>%</div>
</div>

<br>





<input type=\"hidden\" id=\"save_photo_data_url\" value=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("user_photo_data");
        echo "\">
<input type=\"hidden\" id=\"photos_url\" value=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("user_profile", array("tab" => 4));
        echo "\">
<input type=\"hidden\" id=\"mainPhotoAlreadyExists\" value=\"";
        // line 151
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "photos", array()))) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\">

<div class=\"cloudinaryForm hidden\">
    ";
        // line 154
        echo (isset($context["renderedCloudForm"]) ? $context["renderedCloudForm"] : null);
        echo "
</div>

";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 158
            echo "    <input type=\"hidden\" class=\"photo_name\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "name", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "id", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "isMain", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "isValid", array()), "html", null, true);
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "

<div id=\"photo_template\" class=\"hidden\">

    <table class=\"ui celled table olive photo\" id=\"[PHOTO_NAME]\">
        <thead>
        <tr>
            <th>תמונה</th>
            <th>ראשית</th>
            <th>מאושר</th>
            <th>להסיר</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class=\"photo_cont\"></td>
                <td>
                    <div class=\"ui toggle checkbox main_photo\">
                        <input type=\"radio\" name=\"radio\" value=\"[PHOTO_ID]\" [MAIN]>
                        <label></label>
                    </div>
                </td>
                <td>
                    <div class=\"ui toggle checkbox valid_photo\">
                        <input type=\"checkbox\" value=\"[PHOTO_ID]\" [valid]>
                        <label></label>
                    </div>
                </td>
                <td>
                    <i class=\"trash outline huge link olive icon circular delete\"></i>
                    <input type=\"hidden\" class=\"photoId\" value=\"[PHOTO_ID]\">
                </td>
            </tr>
        </tbody>
    </table>

</div>




";
    }

    public function getTemplateName()
    {
        return ":backend/users:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 160,  214 => 158,  210 => 157,  204 => 154,  194 => 151,  190 => 150,  186 => 149,  147 => 113,  63 => 32,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <script src="{{ asset('libs/cloudinary/jquery.ui.widget.js') }}"></script>*/
/* <script src="{{ asset('libs/cloudinary/jquery.iframe-transport.js') }}"></script>*/
/* <script src="{{ asset('libs/cloudinary/jquery.fileupload.js') }}"></script>*/
/* <script src="{{ asset('libs/cloudinary/jquery.cloudinary.js') }}"></script>*/
/* */
/* <script>*/
/* */
/*     $(document).ready(function(){*/
/* */
/*         /******************** User Photos And Cloudinary *********************************************//* */
/* */
/*         $.cloudinary.config({ cloud_name: 'greendate', api_key: '333193447586872'});*/
/*         $('.ui.progress').hide();*/
/* */
/*         $('.cloudinary-fileupload').bind('fileuploadstart', function(e, data) {*/
/*             $('.ui.progress').show();*/
/*             $('.upload_photo button').addClass("loading");*/
/*         });*/
/* */
/*         $('.cloudinary-fileupload').bind('fileuploadprogress', function(e, data) {*/
/*             var value = Math.round((data.loaded * 100.0) / data.total);*/
/*             $('.ui.progress').progress({*/
/*                 percent: value,*/
/*             });*/
/*             $('#upload_photo_label span').text(value);*/
/*         });*/
/* */
/*         $('.cloudinary-fileupload').bind('cloudinarydone', function(e, data) {*/
/*             //console.log(JSON.stringify(data));*/
/*             $('.upload_photo button').removeClass("loading");*/
/*             $('.ui.progress').hide();*/
/*             savePhotoData(data, {{ user.id }});*/
/*             return true;*/
/*         });*/
/* */
/* */
/*         if($('.photo_name').size()){*/
/*             $('.photo_name').each(function(index){*/
/*                 var template = $('#photo_template').html();*/
/*                 var idArr = $(this).val().split("__");*/
/*                 var photoName = idArr[0];*/
/*                 var photoId = idArr[1];*/
/*                 var main = idArr[2] == 1 ? 'checked="checked"' : '';*/
/*                 var valid = idArr[3] == 1 ? 'checked="checked"' : '';*/
/*                 var node = template.replace(/\[PHOTO_NAME\]/, photoName);*/
/*                 node = node.replace(/\[PHOTO_ID\]/g, photoId);*/
/*                 node = node.replace(/\[main\]/, main);*/
/*                 node = node.replace(/\[valid\]/, valid);*/
/* */
/*                 $('.photos').append(node);*/
/*                 $('#' + photoName).find('.photo_cont').html(*/
/*                     $.cloudinary.image(photoName + '.jpg',{*/
/*                         crop: 'fill',*/
/*                         width: 210,*/
/*                         height: 260*/
/*                     })*/
/*                 );*/
/*             });*/
/* */
/*             $('#user_photos_dimmer').addClass("disabled").find('.loader').addClass("disabled");*/
/* */
/*         }*/
/* */
/*         /********************************************************************************************//* */
/* */
/* */
/*         /**/
/*         $('.photos .valid_photo').click(function(){*/
/* */
/*             var value = ($(this).is(":checked")) ? 1 : 0;*/
/*             setPhotoProperty('isValid', value, $(this).parents('tr').find('.photoId').val());*/
/*         });*/
/*         *//* */
/* */
/*         $('.photos .ui.checkbox.toggle.main_photo').checkbox({*/
/*             onChecked: function(){*/
/*                 setPhotoProperty('isMain', 1, $(this).parents('tr').find('.photoId').val());*/
/*             }/*,*/
/*             onUnchecked: function(){*/
/*                 setPhotoProperty('isMain', 0, $(this).parents('tr').find('.photoId').val());*/
/*             },*//* */
/*         });*/
/* */
/*         $('.photos .ui.checkbox.toggle.valid_photo').checkbox({*/
/*             onChecked: function(){*/
/*                 setPhotoProperty('isValid', 1, $(this).parents('tr').find('.photoId').val());*/
/*             },*/
/*             onUnchecked: function(){*/
/*                 setPhotoProperty('isValid', 0, $(this).parents('tr').find('.photoId').val());*/
/*             },*/
/*         });*/
/* */
/* */
/* */
/*         $('.photos .delete').click(function(){*/
/*             if(confirm('להסיר תמונה?')){*/
/*                 deletePhoto(*/
/*                     $(this).siblings('.photoId').val(),*/
/*                     $(this).parents('table')*/
/*                 );*/
/*             }*/
/*         });*/
/* */
/* */
/*     });*/
/* */
/* </script>*/
/* */
/* */
/* <h1 class="ui grey header right">*/
/*     <i class="photo circular icon"></i>*/
/*     <div class="content">*/
/*         <span class="username">{{ user.username }}</span>*/
/*         <div class="sub header">עריכת תמונות</div>*/
/*     </div>*/
/* </h1>*/
/* */
/* */
/* <div class="left close">*/
/*     <i class="icon remove circle olive big " onclick="$.kfModal.close();"></i>*/
/* </div>*/
/* */
/* <div class="clear"></div>*/
/* */
/* <div class="ui divider"></div>*/
/* */
/* <br>*/
/* */
/* <div class="ui one column centered grid upload_photo">*/
/*     <button class="ui labeled icon green huge button" onclick="$('.cloudinaryForm input[type=file]').click();">*/
/*         <i class="cloud upload icon"></i>*/
/*         העלאת תמונה לענן*/
/*     </button>*/
/* </div>*/
/* */
/* <br><br>*/
/* */
/* <div class="ui indicating progress uploadPhotoProgress">*/
/*     <div class="bar" id="upload_photo_progress"></div>*/
/*     <div class="label" id="upload_photo_label">העלאה: <span>0</span>%</div>*/
/* </div>*/
/* */
/* <br>*/
/* */
/* */
/* */
/* */
/* */
/* <input type="hidden" id="save_photo_data_url" value="{{ path('user_photo_data') }}">*/
/* <input type="hidden" id="photos_url" value="{{ path('user_profile', {'tab': 4}) }}">*/
/* <input type="hidden" id="mainPhotoAlreadyExists" value="{% if user.photos|length %}1{% else %}0{% endif %}">*/
/* */
/* <div class="cloudinaryForm hidden">*/
/*     {{ renderedCloudForm|raw }}*/
/* </div>*/
/* */
/* {% for photo in user.photos %}*/
/*     <input type="hidden" class="photo_name" value="{{ photo.name }}__{{ photo.id }}__{{ photo.isMain }}__{{ photo.isValid }}">*/
/* {% endfor %}*/
/* */
/* */
/* <div id="photo_template" class="hidden">*/
/* */
/*     <table class="ui celled table olive photo" id="[PHOTO_NAME]">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>תמונה</th>*/
/*             <th>ראשית</th>*/
/*             <th>מאושר</th>*/
/*             <th>להסיר</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td class="photo_cont"></td>*/
/*                 <td>*/
/*                     <div class="ui toggle checkbox main_photo">*/
/*                         <input type="radio" name="radio" value="[PHOTO_ID]" [MAIN]>*/
/*                         <label></label>*/
/*                     </div>*/
/*                 </td>*/
/*                 <td>*/
/*                     <div class="ui toggle checkbox valid_photo">*/
/*                         <input type="checkbox" value="[PHOTO_ID]" [valid]>*/
/*                         <label></label>*/
/*                     </div>*/
/*                 </td>*/
/*                 <td>*/
/*                     <i class="trash outline huge link olive icon circular delete"></i>*/
/*                     <input type="hidden" class="photoId" value="[PHOTO_ID]">*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
