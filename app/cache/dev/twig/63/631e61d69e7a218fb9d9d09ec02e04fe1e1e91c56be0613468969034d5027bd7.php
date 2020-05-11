<?php

/* frontend/user/user.html.twig */
class __TwigTemplate_2d4824c948ba7dcfd9e5c6ca9b587bcccb2093967808b226666bd1efaf64bfb4 extends Twig_Template
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
        $__internal_d8b4774ea8acba69f1cbbdca351a03537315c8bef622a11468b390aa7b250b11 = $this->env->getExtension("native_profiler");
        $__internal_d8b4774ea8acba69f1cbbdca351a03537315c8bef622a11468b390aa7b250b11->enter($__internal_d8b4774ea8acba69f1cbbdca351a03537315c8bef622a11468b390aa7b250b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/user/user.html.twig"));

        // line 1
        echo "
<script>

    width = \$('.galpreview div').width();
    height = \$('.galpreview div').height();

    mainWidth = \$('.galpic').width();
    mainHeight = \$('.galpic').height();

    \$(document).ready(function(){

        \$('.galpreview div[data-pic]:last-child').addClass('lastdiv');

        \$('.galpreview input[type=\"hidden\"]').each(function(){
            //photosName.push(\$(this).val());
            var previewPhotoUrl = \$.cloudinary.url(\$(this).val(), { width: width, height: height, crop: 'fill' })
            var bigPhotoUrl = \$.cloudinary.url(\$(this).val(), { width: mainWidth, height: mainHeight, crop: 'fill' });
            \$(this).siblings('img').attr('src', previewPhotoUrl).parent().attr('data-pic', bigPhotoUrl);
        });

        //\$('.galpreview div').eq(0).addClass('active');
        if(\$('.galpreview div.active').size()){
            \$('.galpic img').show().attr('src', \$('.galpreview div.active').attr('data-pic'));
        }

        \$('.galpreview div').on({
            'click':function(){
                

                var curElem = \$(this);
                var curElemAttr = curElem.attr('data-pic');
                \$('.galpreview div').removeClass('active');
                curElem.addClass('active');
                \$('.galpic img').attr('src', curElemAttr);


            }
        });


        \$('#save_note').click(function(){
            var memberId = \$(this).siblings('.memberId').val()
            var text = \$(this).siblings('textarea').val();
            saveNote(memberId, text);
        });

        \$('.report_abuse').click(function(e){
        \t\$('#user_data').animate({scrollTop: 100 }, 800);
            e.preventDefault();
            \$('.report-success').hide();
            \$('.report-cont').slideDown('slow');

            if(\$(this).hasClass('bottom')){
                //\$('#user_data').scrollTo(0, \$('.popuplogo').offset().top + 100);
               // \$('#user_data').animate({scrollTop: \$('.popuplogo').offset().top + 100 }, 800);
            }

        });

        \$('#report').click(function(){
            var memberId = \$(this).parents('.report-cont').find('.memberId').val()
            var text = \$(this).parents('.report-cont').find('textarea').val();
            reportAbuse(memberId, text);
        });




        favAndBlackListActionsInit();
        
        if(\$(window).width() <= 640){
\t\t\t\$('.popbox .ttl.tog_click').click(function(){
\t\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\t\$(this).next().hide();
\t\t\t\t}else{
\t\t\t\t\t\$(this).next().show();
\t\t\t\t}
\t\t\t\t\$(this).toggleClass('open');
\t\t\t\t/*\$(this).next().slideToggle( \"slow\", function() {
\t\t\t\t    \$(this).prev().toggleClass('open');
\t\t\t\t});
\t\t\t\t*/
\t\t\t});
\t\t}

    });


    function reportAbuse(memberId, text){

        if(text.length == ''){
            return;
        }

        \$.ajax({
            url: '/user/report/abuse/' + memberId,
            type: 'Post',
            data: 'text=' + text,
            error: function(response){
                console.log(\"Error:\" + JSON.stringify(response));
            },
            success: function(response){
                console.log(\"Success:\" + JSON.stringify(response));
                \$('.report-cont').slideUp('slow');
                \$('.report-success').slideDown('slow');
                //alert('תודה! הודעה נשלחה לצוות גרינדייט.');
            }
        });
    }



    function saveNote(memberId, text){
        \$.ajax({
            url: '/user/notes/' + memberId,
            type: 'Post',
            data: 'text=' + text,
            error: function(response){
                console.log(\"Error:\" + JSON.stringify(response));
            },
            success: function(response){
                console.log(\"Success:\" + JSON.stringify(response));
                alert('הערות נשמרו');
            }
        });
    }

    function sendInstantMessage(contactId, textarea){

        var message = textarea.val();

        if(message.length == 0){
            return false;
        }

        textarea.val('');
        console.log('START SENDING');

        \$.ajax({
            url: '/messenger/message/send/userId:";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "/contactId:' + contactId,
            headers: { 'apiKey': Messenger.apiKey }, 
            timeout:80000,
            dataType: 'json',
            type: 'Post',
            data: 'message='+encodeURIComponent(message),
            context: this,
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            error: function(response){
                console.log(JSON.stringify(response));
            },
            success: function(response, status){
                if(response.success){
                    console.log('MESSAGE:' + JSON.stringify(response.message));
                    console.log('END SENDING');
                    alert('הודעה נשלחה בהצלחה');
                }
                else{
                    console.log(JSON.stringify(response));

                    if(response.contactIsFrozen){
                        alert('הודעה זו לא נשלחה כיוון שמשתמש זה הקפיא את חשבונו.');
                        return;
                    }

                    if(response.chatIsForbidden){
                        alert(\"הודעה זו לא נשלחה כיוון שמשתמש זה נמצא ברשימת החסומים שלך או שאת/ה נמצא ברשימת החסומים שלו. אם את/ה מעוניין להסיר משתמש זה מרשימת החסומים שלך יש לגשת לניהול חשבון ולבחור בניהול רשימת חסומים.\");
                        return;
                    }

                    if(response.isLimit){
                        alert(\"הגעת לכמות המקסימלית של שליחת הודעות\");
                        return;
                    }

                }
            }
        });

    }


</script>
<div class=\"popup-head clearfix\">
";
        // line 184
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 185
            echo "
    
        <div class=\"popuplogo\"><a href=\"index.html\"><img src=\"/images/logo2.png\" alt=\"\"></a></div>
        <div class=\"popupmenu boxcont\">
            <input type=\"hidden\" class=\"userId\" value=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\">
            <ul>
                <li><a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messenger_dialog_open", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "contactId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\"><span><img src=\"/images/popup-menu-icon7.png\" alt=\"\"></span> שלח לי הודעה</a></li>
                ";
            // line 193
            echo "                ";
            // line 194
            echo "                ";
            // line 195
            echo "                <li><a href=\"#\" class=\"add_to_fav\"><span><img src=\"/images/popup-menu-icon3.png\" alt=\"\"></span> הוספה למועדפים</a></li>
                <li><a href=\"#\" class=\"add_to_back_list\"><span><img src=\"/images/popup-menu-icon2.png\" alt=\"\"></span> חסימה</a></li>
                <li><a href=\"#\" class=\"report_abuse\"><span><img src=\"/images/popup-menu-icon1.png\" alt=\"\"></span> דווח למערכת על <br> כרטיס לא תקין </a></li>
            </ul>
        </div>
    
    <!-- end -->

";
        }
        // line 204
        echo "</div>

<div class=\"report-cont hidden\">
    <textarea placeholder=\"הערות\"></textarea>
    <input type=\"hidden\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" class=\"memberId\">
    <div class=\"btn-wrapper\">
        <button class=\"btn\" id=\"report\">שלח/י</button>
    </div>
</div>


<div class=\"report-success hidden\">תודה! הודעה נשלחה לצוות גרינדייט.</div>
\t<div class=\"popbox clearfix title_profile\">
        <h3 class=\"ttl clearfix\">
            <span>";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
            ";
        // line 219
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isNew", array())) {
            echo "<img src=\"/images/main-pg-subtitle-icon.png\" alt=\"\" class=\"smimg\"/>";
        }
        // line 220
        echo "            ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isPaying", array())) {
            echo "<img src=\"/images/main-pg-queen-icon.png\" alt=\"\" />";
        }
        // line 221
        echo "        </h3>
        <div class=\"desp\">";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "age", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city", array()), "name", array()), "html", null, true);
        echo "</div>
   </div>
<div class=\"popup-midsec clearfix\">

    <div class=\"popleft\">
        <div class=\"sgallery\">
            <div class=\"galcont\">
                <div class=\"galpic ";
        // line 229
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()), "id", array()) == 1)) {
            echo "male";
        } else {
            echo "female";
        }
        echo "\">

                    <div class=\"ui active disabled dimmer inverted\" id=\"main_photo_dimmer\">
                        <div class=\"ui text large loader disabled\">טעינה</div>
                    </div>

                    <div><img src=\"\" style=\"display: none;\"></div>
                </div>
            </div>
            <div class=\"galpreview\">

                ";
        // line 240
        $context["mainIsExists"] = false;
        // line 241
        echo "
                ";
        // line 242
        $context["mainPhoto"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getMainPhoto", array());
        // line 243
        echo "
                ";
        // line 244
        $context["isActive"] = false;
        // line 245
        echo "
                ";
        // line 246
        if ( !(null === (isset($context["mainPhoto"]) ? $context["mainPhoto"] : $this->getContext($context, "mainPhoto")))) {
            // line 247
            echo "
                    ";
            // line 248
            $context["mainIsExists"] = true;
            // line 249
            echo "
                    <div data-pic=\"\" class=\"active\">
                        <img src=\"\">
                        <input type=\"hidden\" value=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mainPhoto"]) ? $context["mainPhoto"] : $this->getContext($context, "mainPhoto")), "name", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        // line 255
        echo "
                ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 257
            echo "                    ";
            if (($this->getAttribute($context["photo"], "isValid", array()) &&  !$this->getAttribute($context["photo"], "isMain", array()))) {
                // line 258
                echo "                        <div data-pic=\"\" ";
                if (( !(isset($context["mainIsExists"]) ? $context["mainIsExists"] : $this->getContext($context, "mainIsExists")) &&  !(isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")))) {
                    $context["isActive"] = true;
                    echo "class=\"active\"";
                }
                echo ">
                            <img src=\"\">
                            <input type=\"hidden\" value=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "name", array()), "html", null, true);
                echo "\">
                        </div>
                    ";
            }
            // line 263
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "
                ";
        // line 279
        echo "
            </div>
        </div>
        <!-- end -->

    </div>
    <!-- popleft -->



    ";
        // line 289
        echo twig_include($this->env, $context, "frontend/user/user_data.html.twig");
        echo "


</div>
<!-- end -->

";
        // line 295
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 296
            echo "    <!-- BTM -->
    <div class=\"popupbtm clearfix\">
        <div class=\"popupmenu clearfix boxcont\">
            <input type=\"hidden\" class=\"userId\" value=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\">
            <ul>
                <li><a href=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messenger_dialog_open", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "contactId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\"><span><img src=\"/images/popup-menu-icon7.png\" alt=\"\"></span> שלח לי הודעה</a></li>
                ";
            // line 303
            echo "                ";
            // line 304
            echo "                ";
            // line 305
            echo "                <li><a href=\"#\" class=\"add_to_fav\"><span><img src=\"/images/popup-menu-icon3.png\" alt=\"\"></span> הוספה למועדפים</a></li>
                <li><a href=\"#\" class=\"add_to_back_list\"><span><img src=\"/images/popup-menu-icon2.png\" alt=\"\"></span> חסימה</a></li>
                <li><a href=\"#\" class=\"report_abuse bottom\"><span><img src=\"/images/popup-menu-icon1.png\" alt=\"\"></span> דווח למערכת על <br> כרטיס לא תקין </a></li>
            </ul>
        </div>
    </div>
    <!-- BTM -->
";
        }
        
        $__internal_d8b4774ea8acba69f1cbbdca351a03537315c8bef622a11468b390aa7b250b11->leave($__internal_d8b4774ea8acba69f1cbbdca351a03537315c8bef622a11468b390aa7b250b11_prof);

    }

    public function getTemplateName()
    {
        return "frontend/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 305,  413 => 304,  411 => 303,  407 => 301,  402 => 299,  397 => 296,  395 => 295,  386 => 289,  374 => 279,  371 => 264,  365 => 263,  359 => 260,  350 => 258,  347 => 257,  343 => 256,  340 => 255,  334 => 252,  329 => 249,  327 => 248,  324 => 247,  322 => 246,  319 => 245,  317 => 244,  314 => 243,  312 => 242,  309 => 241,  307 => 240,  289 => 229,  277 => 222,  274 => 221,  269 => 220,  265 => 219,  261 => 218,  248 => 208,  242 => 204,  231 => 195,  229 => 194,  227 => 193,  223 => 191,  218 => 189,  212 => 185,  210 => 184,  163 => 140,  22 => 1,);
    }
}
/* */
/* <script>*/
/* */
/*     width = $('.galpreview div').width();*/
/*     height = $('.galpreview div').height();*/
/* */
/*     mainWidth = $('.galpic').width();*/
/*     mainHeight = $('.galpic').height();*/
/* */
/*     $(document).ready(function(){*/
/* */
/*         $('.galpreview div[data-pic]:last-child').addClass('lastdiv');*/
/* */
/*         $('.galpreview input[type="hidden"]').each(function(){*/
/*             //photosName.push($(this).val());*/
/*             var previewPhotoUrl = $.cloudinary.url($(this).val(), { width: width, height: height, crop: 'fill' })*/
/*             var bigPhotoUrl = $.cloudinary.url($(this).val(), { width: mainWidth, height: mainHeight, crop: 'fill' });*/
/*             $(this).siblings('img').attr('src', previewPhotoUrl).parent().attr('data-pic', bigPhotoUrl);*/
/*         });*/
/* */
/*         //$('.galpreview div').eq(0).addClass('active');*/
/*         if($('.galpreview div.active').size()){*/
/*             $('.galpic img').show().attr('src', $('.galpreview div.active').attr('data-pic'));*/
/*         }*/
/* */
/*         $('.galpreview div').on({*/
/*             'click':function(){*/
/*                 */
/* */
/*                 var curElem = $(this);*/
/*                 var curElemAttr = curElem.attr('data-pic');*/
/*                 $('.galpreview div').removeClass('active');*/
/*                 curElem.addClass('active');*/
/*                 $('.galpic img').attr('src', curElemAttr);*/
/* */
/* */
/*             }*/
/*         });*/
/* */
/* */
/*         $('#save_note').click(function(){*/
/*             var memberId = $(this).siblings('.memberId').val()*/
/*             var text = $(this).siblings('textarea').val();*/
/*             saveNote(memberId, text);*/
/*         });*/
/* */
/*         $('.report_abuse').click(function(e){*/
/*         	$('#user_data').animate({scrollTop: 100 }, 800);*/
/*             e.preventDefault();*/
/*             $('.report-success').hide();*/
/*             $('.report-cont').slideDown('slow');*/
/* */
/*             if($(this).hasClass('bottom')){*/
/*                 //$('#user_data').scrollTo(0, $('.popuplogo').offset().top + 100);*/
/*                // $('#user_data').animate({scrollTop: $('.popuplogo').offset().top + 100 }, 800);*/
/*             }*/
/* */
/*         });*/
/* */
/*         $('#report').click(function(){*/
/*             var memberId = $(this).parents('.report-cont').find('.memberId').val()*/
/*             var text = $(this).parents('.report-cont').find('textarea').val();*/
/*             reportAbuse(memberId, text);*/
/*         });*/
/* */
/* */
/* */
/* */
/*         favAndBlackListActionsInit();*/
/*         */
/*         if($(window).width() <= 640){*/
/* 			$('.popbox .ttl.tog_click').click(function(){*/
/* 				if($(this).hasClass('open')){*/
/* 					$(this).next().hide();*/
/* 				}else{*/
/* 					$(this).next().show();*/
/* 				}*/
/* 				$(this).toggleClass('open');*/
/* 				/*$(this).next().slideToggle( "slow", function() {*/
/* 				    $(this).prev().toggleClass('open');*/
/* 				});*/
/* 				*//* */
/* 			});*/
/* 		}*/
/* */
/*     });*/
/* */
/* */
/*     function reportAbuse(memberId, text){*/
/* */
/*         if(text.length == ''){*/
/*             return;*/
/*         }*/
/* */
/*         $.ajax({*/
/*             url: '/user/report/abuse/' + memberId,*/
/*             type: 'Post',*/
/*             data: 'text=' + text,*/
/*             error: function(response){*/
/*                 console.log("Error:" + JSON.stringify(response));*/
/*             },*/
/*             success: function(response){*/
/*                 console.log("Success:" + JSON.stringify(response));*/
/*                 $('.report-cont').slideUp('slow');*/
/*                 $('.report-success').slideDown('slow');*/
/*                 //alert('תודה! הודעה נשלחה לצוות גרינדייט.');*/
/*             }*/
/*         });*/
/*     }*/
/* */
/* */
/* */
/*     function saveNote(memberId, text){*/
/*         $.ajax({*/
/*             url: '/user/notes/' + memberId,*/
/*             type: 'Post',*/
/*             data: 'text=' + text,*/
/*             error: function(response){*/
/*                 console.log("Error:" + JSON.stringify(response));*/
/*             },*/
/*             success: function(response){*/
/*                 console.log("Success:" + JSON.stringify(response));*/
/*                 alert('הערות נשמרו');*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     function sendInstantMessage(contactId, textarea){*/
/* */
/*         var message = textarea.val();*/
/* */
/*         if(message.length == 0){*/
/*             return false;*/
/*         }*/
/* */
/*         textarea.val('');*/
/*         console.log('START SENDING');*/
/* */
/*         $.ajax({*/
/*             url: '/messenger/message/send/userId:{{ app.user.id }}/contactId:' + contactId,*/
/*             headers: { 'apiKey': Messenger.apiKey }, */
/*             timeout:80000,*/
/*             dataType: 'json',*/
/*             type: 'Post',*/
/*             data: 'message='+encodeURIComponent(message),*/
/*             context: this,*/
/*             contentType: 'application/x-www-form-urlencoded; charset=UTF-8',*/
/*             error: function(response){*/
/*                 console.log(JSON.stringify(response));*/
/*             },*/
/*             success: function(response, status){*/
/*                 if(response.success){*/
/*                     console.log('MESSAGE:' + JSON.stringify(response.message));*/
/*                     console.log('END SENDING');*/
/*                     alert('הודעה נשלחה בהצלחה');*/
/*                 }*/
/*                 else{*/
/*                     console.log(JSON.stringify(response));*/
/* */
/*                     if(response.contactIsFrozen){*/
/*                         alert('הודעה זו לא נשלחה כיוון שמשתמש זה הקפיא את חשבונו.');*/
/*                         return;*/
/*                     }*/
/* */
/*                     if(response.chatIsForbidden){*/
/*                         alert("הודעה זו לא נשלחה כיוון שמשתמש זה נמצא ברשימת החסומים שלך או שאת/ה נמצא ברשימת החסומים שלו. אם את/ה מעוניין להסיר משתמש זה מרשימת החסומים שלך יש לגשת לניהול חשבון ולבחור בניהול רשימת חסומים.");*/
/*                         return;*/
/*                     }*/
/* */
/*                     if(response.isLimit){*/
/*                         alert("הגעת לכמות המקסימלית של שליחת הודעות");*/
/*                         return;*/
/*                     }*/
/* */
/*                 }*/
/*             }*/
/*         });*/
/* */
/*     }*/
/* */
/* */
/* </script>*/
/* <div class="popup-head clearfix">*/
/* {% if app.user.id != user.id %}*/
/* */
/*     */
/*         <div class="popuplogo"><a href="index.html"><img src="/images/logo2.png" alt=""></a></div>*/
/*         <div class="popupmenu boxcont">*/
/*             <input type="hidden" class="userId" value="{{ user.id }}">*/
/*             <ul>*/
/*                 <li><a href="{{ path('messenger_dialog_open',{'userId': app.user.id, 'contactId': user.id}) }}"><span><img src="/images/popup-menu-icon7.png" alt=""></span> שלח לי הודעה</a></li>*/
/*                 {#<li><a href="#"><span><img src="/images/popup-menu-icon6.png" alt=""></span>צ’אט</a></li>#}*/
/*                 {#<li><a href="#"><span><img src="/images/popup-menu-icon5.png" alt=""></span>Like</a></li>#}*/
/*                 {#<li><a href="#"><span><img src="/images/popup-menu-icon4.png" alt=""></span>שלח קריצה</a></li>#}*/
/*                 <li><a href="#" class="add_to_fav"><span><img src="/images/popup-menu-icon3.png" alt=""></span> הוספה למועדפים</a></li>*/
/*                 <li><a href="#" class="add_to_back_list"><span><img src="/images/popup-menu-icon2.png" alt=""></span> חסימה</a></li>*/
/*                 <li><a href="#" class="report_abuse"><span><img src="/images/popup-menu-icon1.png" alt=""></span> דווח למערכת על <br> כרטיס לא תקין </a></li>*/
/*             </ul>*/
/*         </div>*/
/*     */
/*     <!-- end -->*/
/* */
/* {% endif %}*/
/* </div>*/
/* */
/* <div class="report-cont hidden">*/
/*     <textarea placeholder="הערות"></textarea>*/
/*     <input type="hidden" value="{{ user.id }}" class="memberId">*/
/*     <div class="btn-wrapper">*/
/*         <button class="btn" id="report">שלח/י</button>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="report-success hidden">תודה! הודעה נשלחה לצוות גרינדייט.</div>*/
/* 	<div class="popbox clearfix title_profile">*/
/*         <h3 class="ttl clearfix">*/
/*             <span>{{ user.username }}</span>*/
/*             {% if user.isNew %}<img src="/images/main-pg-subtitle-icon.png" alt="" class="smimg"/>{% endif %}*/
/*             {% if user.isPaying %}<img src="/images/main-pg-queen-icon.png" alt="" />{% endif %}*/
/*         </h3>*/
/*         <div class="desp">{{ user.age }}, {{ user.city.name }}</div>*/
/*    </div>*/
/* <div class="popup-midsec clearfix">*/
/* */
/*     <div class="popleft">*/
/*         <div class="sgallery">*/
/*             <div class="galcont">*/
/*                 <div class="galpic {% if user.gender.id == 1 %}male{% else %}female{% endif %}">*/
/* */
/*                     <div class="ui active disabled dimmer inverted" id="main_photo_dimmer">*/
/*                         <div class="ui text large loader disabled">טעינה</div>*/
/*                     </div>*/
/* */
/*                     <div><img src="" style="display: none;"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="galpreview">*/
/* */
/*                 {% set mainIsExists = false %}*/
/* */
/*                 {% set mainPhoto = user.getMainPhoto %}*/
/* */
/*                 {% set isActive = false %}*/
/* */
/*                 {% if mainPhoto is not null %}*/
/* */
/*                     {% set mainIsExists = true %}*/
/* */
/*                     <div data-pic="" class="active">*/
/*                         <img src="">*/
/*                         <input type="hidden" value="{{ mainPhoto.name }}">*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% for photo in user.photos %}*/
/*                     {% if photo.isValid and not photo.isMain%}*/
/*                         <div data-pic="" {% if not mainIsExists and not isActive %}{% set isActive = true %}class="active"{% endif %}>*/
/*                             <img src="">*/
/*                             <input type="hidden" value="{{ photo.name }}">*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/* */
/*                 {#*/
/*                 <div data-pic="/images/hp-article-img3.jpg">*/
/*                     <img src="/images/hp-article-img3.jpg">*/
/*                 </div>*/
/*                 <div data-pic="/images/hp-article-img1.jpg">*/
/*                     <img src="/images/hp-article-img1.jpg">*/
/*                 </div>*/
/*                 <div data-pic="/images/hp-article-img2.jpg">*/
/*                     <img src="/images/hp-article-img2.jpg">*/
/*                 </div>*/
/*                 <div data-pic="/images/hodaot-girl-img.jpg" class="lastdiv">*/
/*                     <img src="/images/hodaot-girl-img.jpg">*/
/*                 </div>*/
/*                 #}*/
/* */
/*             </div>*/
/*         </div>*/
/*         <!-- end -->*/
/* */
/*     </div>*/
/*     <!-- popleft -->*/
/* */
/* */
/* */
/*     {{ include ('frontend/user/user_data.html.twig') }}*/
/* */
/* */
/* </div>*/
/* <!-- end -->*/
/* */
/* {% if app.user.id != user.id %}*/
/*     <!-- BTM -->*/
/*     <div class="popupbtm clearfix">*/
/*         <div class="popupmenu clearfix boxcont">*/
/*             <input type="hidden" class="userId" value="{{ user.id }}">*/
/*             <ul>*/
/*                 <li><a href="{{ path('messenger_dialog_open',{'userId': app.user.id, 'contactId': user.id}) }}"><span><img src="/images/popup-menu-icon7.png" alt=""></span> שלח לי הודעה</a></li>*/
/*                 {#<li><a href="#"><span><img src="/images/popup-menu-icon6.png" alt=""></span>צ’אט</a></li>#}*/
/*                 {#<li><a href="#"><span><img src="/images/popup-menu-icon5.png" alt=""></span>Like</a></li>#}*/
/*                 {#<li><a href="#"><span><img src="/images/popup-menu-icon4.png" alt=""></span>שלח קריצה</a></li>#}*/
/*                 <li><a href="#" class="add_to_fav"><span><img src="/images/popup-menu-icon3.png" alt=""></span> הוספה למועדפים</a></li>*/
/*                 <li><a href="#" class="add_to_back_list"><span><img src="/images/popup-menu-icon2.png" alt=""></span> חסימה</a></li>*/
/*                 <li><a href="#" class="report_abuse bottom"><span><img src="/images/popup-menu-icon1.png" alt=""></span> דווח למערכת על <br> כרטיס לא תקין </a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <!-- BTM -->*/
/* {% endif %}*/
/* */
