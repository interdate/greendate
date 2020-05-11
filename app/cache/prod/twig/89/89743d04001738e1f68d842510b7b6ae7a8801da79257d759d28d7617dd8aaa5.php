<?php

/* :frontend/security/sign_up:photo.html.twig */
class __TwigTemplate_3b22483d56410278c725e364a3ab1e1108ba1fa3c22db8d685f44188a5d571e5 extends Twig_Template
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
        echo "<div class=\"hmaformsec three\">
    <h3>הוספת תמונה</h3>

    <input type=\"hidden\" id=\"save_photo_data_url\" value=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("user_photo_data");
        echo "\">
    <input type=\"hidden\" id=\"photos_url\" value=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("sign_up_photos");
        echo "\">
    <input type=\"hidden\" id=\"mainPhotoAlreadyExists\" value=\"0\">


    <div class=\"harsm4 clearfix\">

        <div class=\"rightinfo\">
            <div class=\"browseupload\">

                <div class=\"cloudinaryForm hidden\">
                    ";
        // line 15
        echo (isset($context["renderedCloudForm"]) ? $context["renderedCloudForm"] : null);
        echo "
                </div>

                <input type=\"button\" class=\"browsebutt\" value=\"עיון\" onclick=\"\$('.cloudinaryForm input[type=file]').click();\">
                <input type=\"text\" class=\"browseinput\" value=\"\" onclick=\"\$('.cloudinaryForm input[type=file]').click();\">
                ";
        // line 21
        echo "
                <div class=\"clr\"></div>
                <div class=\"ui indicating progress uploadPhotoProgress\">
                    <div class=\"bar\" id=\"upload_photo_progress\"></div>
                    <div class=\"label\" id=\"upload_photo_label\">העלאה: <span>0</span>%</div>
                </div>

            </div>

            <div class=\"descp\">

                אם נתקלת בבעיה בהעלאת תמונה לאתר, באפשרותך לשלוח תמונה לכתובת:תמונה לכתובת: 
                <br/>
                <a href=\"mailto:webmaster@GreenDate.co.il\">webmaster@greendate.co.il</a><br/> במייל יש לציין את כתובת הדואל עמה נרשמת לאתר, וסיסמה. </div>

            <h5>הקריטריונים לאישור התמונה</h5>

            <ul>
                <li>התמונה חייבת להיות תמונה שלך</li>
                <li>יש להעלות תמונה איכותית וברורה, הכוללת פנים</li>
                <li>אין להעלות תמונות בעירום חלקי או מלא</li>
                <li>אין להעלות תמונות עם ילדים</li>
            </ul>
        </div>
        <div class=\"leftproimage\"><img src=\"/images/harshama-profile-pic.jpg\" alt=\"\"/></div>
    </div>

    <div class=\"clr padd\"></div>

    <div class=\"field padd\">
        <input type=\"button\"  class=\"nextstage skipstep\" value=\"דלג/י על השלב\" onclick=\"window.location.href='";
        // line 51
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "'\">
        ";
        // line 53
        echo "    </div>
</div>
<!-- hmaformsec end -->";
    }

    public function getTemplateName()
    {
        return ":frontend/security/sign_up:photo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 53,  81 => 51,  49 => 21,  41 => 15,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="hmaformsec three">*/
/*     <h3>הוספת תמונה</h3>*/
/* */
/*     <input type="hidden" id="save_photo_data_url" value="{{ path('user_photo_data') }}">*/
/*     <input type="hidden" id="photos_url" value="{{ path('sign_up_photos') }}">*/
/*     <input type="hidden" id="mainPhotoAlreadyExists" value="0">*/
/* */
/* */
/*     <div class="harsm4 clearfix">*/
/* */
/*         <div class="rightinfo">*/
/*             <div class="browseupload">*/
/* */
/*                 <div class="cloudinaryForm hidden">*/
/*                     {{ renderedCloudForm|raw }}*/
/*                 </div>*/
/* */
/*                 <input type="button" class="browsebutt" value="עיון" onclick="$('.cloudinaryForm input[type=file]').click();">*/
/*                 <input type="text" class="browseinput" value="" onclick="$('.cloudinaryForm input[type=file]').click();">*/
/*                 {#<input type="button" class="uploadphoto" value="העלאת תמונה" onclick="$('#upload_photo').click();"> #}*/
/* */
/*                 <div class="clr"></div>*/
/*                 <div class="ui indicating progress uploadPhotoProgress">*/
/*                     <div class="bar" id="upload_photo_progress"></div>*/
/*                     <div class="label" id="upload_photo_label">העלאה: <span>0</span>%</div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="descp">*/
/* */
/*                 אם נתקלת בבעיה בהעלאת תמונה לאתר, באפשרותך לשלוח תמונה לכתובת:תמונה לכתובת: */
/*                 <br/>*/
/*                 <a href="mailto:webmaster@GreenDate.co.il">webmaster@greendate.co.il</a><br/> במייל יש לציין את כתובת הדואל עמה נרשמת לאתר, וסיסמה. </div>*/
/* */
/*             <h5>הקריטריונים לאישור התמונה</h5>*/
/* */
/*             <ul>*/
/*                 <li>התמונה חייבת להיות תמונה שלך</li>*/
/*                 <li>יש להעלות תמונה איכותית וברורה, הכוללת פנים</li>*/
/*                 <li>אין להעלות תמונות בעירום חלקי או מלא</li>*/
/*                 <li>אין להעלות תמונות עם ילדים</li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="leftproimage"><img src="/images/harshama-profile-pic.jpg" alt=""/></div>*/
/*     </div>*/
/* */
/*     <div class="clr padd"></div>*/
/* */
/*     <div class="field padd">*/
/*         <input type="button"  class="nextstage skipstep" value="דלג/י על השלב" onclick="window.location.href='{{ path('homepage') }}'">*/
/*         {#<input type="button"  class="return" value="חזרה">#}*/
/*     </div>*/
/* </div>*/
/* <!-- hmaformsec end -->*/
