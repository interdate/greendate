<?php

/* :frontend/security/sign_up:photos.html.twig */
class __TwigTemplate_de0ed6b3aff395b501b05b848d69ebf083cb007eba6313609db9a9643782596b extends Twig_Template
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
        echo "<div class=\"hmaformsec five\">
    <h3>הוספת תמונה</h3>


    <input type=\"hidden\" id=\"save_photo_data_url\" value=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("user_photo_data");
        echo "\">
    <input type=\"hidden\" id=\"photos_url\" value=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("sign_up_photos");
        echo "\">
    <input type=\"hidden\" id=\"mainPhotoAlreadyExists\" value=\"1\">



    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 12
            echo "        <input type=\"hidden\" class=\"photoName\" value=\"";
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
        // line 14
        echo "
    <div class=\"photos\"></div>



    <div class=\"ui small basic modal\">
        <div class=\"ui icon header\">
            <i class=\"trash icon\"></i>
            למחוק תמונה?
        </div>
        <div class=\"content\"><p></p></div>
        <div class=\"ui center aligned grid\">
            <div class=\"actions\">
                <div class=\"ui red basic cancel inverted button\">
                    <i class=\"remove icon\"></i>
                    לא
                </div>
                <div class=\"ui green ok inverted button\">
                    <i class=\"checkmark icon\"></i>
                    כן
                </div>
            </div>
        </div>
    </div>


    <div class=\"harsm4 harsm5\">
        <div class=\"browseupload clearfix\">

            <div class=\"cloudinaryForm hidden\">
                ";
        // line 44
        echo (isset($context["renderedCloudForm"]) ? $context["renderedCloudForm"] : null);
        echo "
            </div>

            <input type=\"button\" class=\"browsebutt\" value=\"עיון\" onclick=\"\$('.cloudinaryForm input[type=file]').click();\">
            <input type=\"text\" class=\"browseinput\" value=\"\" onclick=\"\$('.cloudinaryForm input[type=file]').click();\">
        </div>

        <div class=\"clr\"></div>

        <div class=\"ui indicating progress uploadPhotoProgress\">
            <div class=\"bar\" id=\"upload_photo_progress\"></div>
            <div class=\"label\" id=\"upload_photo_label\">העלאה: <span>0</span>%</div>
        </div>


        <div class=\"descp\">
            ";
        // line 63
        echo "            <br/> אם נתקלת בבעיה בהעלאת תמונה לאתר, באפשרותך לשלוח תמונה לכתובת: <br/>
            <a href=\"mailto:webmaster@GreenDate.co.il\">webmaster@greendate.co.il</a><br/> במייל יש לציין את כתובת הדואל עמה נרשמת לאתר, וסיסמה.
        </div>

        <h5>הקריטריונים לאישור התמונה</h5>

        <ul>
            <li>התמונה חייבת להיות תמונה שלך</li>
            <li>יש להעלות תמונה איכותית וברורה, הכוללת פנים</li>
            <li>אין להעלות תמונות בעירום חלקי או מלא</li>
            <li>אין להעלות תמונות עם ילדים</li>
        </ul>
    </div>

    <div class=\"field padd\">
        <input type=\"button\"  class=\"nextstage skipstep\" value=\"לחשבון שלי\" onclick=\"window.location.href='";
        // line 78
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "'\">
        ";
        // line 80
        echo "    </div>

</div>
<!-- hmaformsec end -->


<div id=\"photo_template\" class=\"hidden\">
    <div class=\"harsm5 clearfix photo\" id=\"[PHOTO_NAME]\">
        <div class=\"imgbox\"></div>
        <div class=\"leftdesc\">
            <ul class=\"ultitle clearfix\">
                <li class=\"col1\">תמונה ראשית</li>
                <li class=\"col3\">סטטוס</li>
                <li class=\"col4\"></li>
            </ul>

            <ul class=\"ulrow clearfix\">
                <li class=\"col1\">
                    <div class=\"ui toggle checkbox mainPhoto\">
                        <input type=\"radio\" name=\"radio\" value=\"[PHOTO_ID]\" [MAIN]>
                        <label></label>
                    </div>
                </li>
                <li class=\"col3\">[STATUS]</li>
                <li class=\"col4\"><a href=\"#\" class=\"removePhoto\" id=\"[PHOTO_ID]\">מחק/י</a></li>
            </ul>
        </div>
    </div>
</div>





";
    }

    public function getTemplateName()
    {
        return ":frontend/security/sign_up:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 80,  124 => 78,  107 => 63,  88 => 44,  56 => 14,  41 => 12,  37 => 11,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="hmaformsec five">*/
/*     <h3>הוספת תמונה</h3>*/
/* */
/* */
/*     <input type="hidden" id="save_photo_data_url" value="{{ path('user_photo_data') }}">*/
/*     <input type="hidden" id="photos_url" value="{{ path('sign_up_photos') }}">*/
/*     <input type="hidden" id="mainPhotoAlreadyExists" value="1">*/
/* */
/* */
/* */
/*     {% for photo in app.user.photos %}*/
/*         <input type="hidden" class="photoName" value="{{ photo.name }}__{{ photo.id }}__{{ photo.isMain }}__{{ photo.isValid }}">*/
/*     {% endfor %}*/
/* */
/*     <div class="photos"></div>*/
/* */
/* */
/* */
/*     <div class="ui small basic modal">*/
/*         <div class="ui icon header">*/
/*             <i class="trash icon"></i>*/
/*             למחוק תמונה?*/
/*         </div>*/
/*         <div class="content"><p></p></div>*/
/*         <div class="ui center aligned grid">*/
/*             <div class="actions">*/
/*                 <div class="ui red basic cancel inverted button">*/
/*                     <i class="remove icon"></i>*/
/*                     לא*/
/*                 </div>*/
/*                 <div class="ui green ok inverted button">*/
/*                     <i class="checkmark icon"></i>*/
/*                     כן*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="harsm4 harsm5">*/
/*         <div class="browseupload clearfix">*/
/* */
/*             <div class="cloudinaryForm hidden">*/
/*                 {{ renderedCloudForm|raw }}*/
/*             </div>*/
/* */
/*             <input type="button" class="browsebutt" value="עיון" onclick="$('.cloudinaryForm input[type=file]').click();">*/
/*             <input type="text" class="browseinput" value="" onclick="$('.cloudinaryForm input[type=file]').click();">*/
/*         </div>*/
/* */
/*         <div class="clr"></div>*/
/* */
/*         <div class="ui indicating progress uploadPhotoProgress">*/
/*             <div class="bar" id="upload_photo_progress"></div>*/
/*             <div class="label" id="upload_photo_label">העלאה: <span>0</span>%</div>*/
/*         </div>*/
/* */
/* */
/*         <div class="descp">*/
/*             {#*/
/*             יש באפשרותך להעלות עד 4 תמונות. אפשר להעלות תמונות מסוג JPG בלבד.*/
/*             #}*/
/*             <br/> אם נתקלת בבעיה בהעלאת תמונה לאתר, באפשרותך לשלוח תמונה לכתובת: <br/>*/
/*             <a href="mailto:webmaster@GreenDate.co.il">webmaster@greendate.co.il</a><br/> במייל יש לציין את כתובת הדואל עמה נרשמת לאתר, וסיסמה.*/
/*         </div>*/
/* */
/*         <h5>הקריטריונים לאישור התמונה</h5>*/
/* */
/*         <ul>*/
/*             <li>התמונה חייבת להיות תמונה שלך</li>*/
/*             <li>יש להעלות תמונה איכותית וברורה, הכוללת פנים</li>*/
/*             <li>אין להעלות תמונות בעירום חלקי או מלא</li>*/
/*             <li>אין להעלות תמונות עם ילדים</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="field padd">*/
/*         <input type="button"  class="nextstage skipstep" value="לחשבון שלי" onclick="window.location.href='{{ path('homepage') }}'">*/
/*         {#<input type="button"  class="return" value="חזרה">#}*/
/*     </div>*/
/* */
/* </div>*/
/* <!-- hmaformsec end -->*/
/* */
/* */
/* <div id="photo_template" class="hidden">*/
/*     <div class="harsm5 clearfix photo" id="[PHOTO_NAME]">*/
/*         <div class="imgbox"></div>*/
/*         <div class="leftdesc">*/
/*             <ul class="ultitle clearfix">*/
/*                 <li class="col1">תמונה ראשית</li>*/
/*                 <li class="col3">סטטוס</li>*/
/*                 <li class="col4"></li>*/
/*             </ul>*/
/* */
/*             <ul class="ulrow clearfix">*/
/*                 <li class="col1">*/
/*                     <div class="ui toggle checkbox mainPhoto">*/
/*                         <input type="radio" name="radio" value="[PHOTO_ID]" [MAIN]>*/
/*                         <label></label>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li class="col3">[STATUS]</li>*/
/*                 <li class="col4"><a href="#" class="removePhoto" id="[PHOTO_ID]">מחק/י</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
