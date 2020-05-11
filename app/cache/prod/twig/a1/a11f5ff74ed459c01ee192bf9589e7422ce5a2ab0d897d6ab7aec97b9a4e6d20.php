<?php

/* :frontend/user:freeze.html.twig */
class __TwigTemplate_7bcc7114b9f2a936f58b53d66196fcc6dbab10f7c824581b5b79ed196de3cb41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/layout.html.twig", ":frontend/user:freeze.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<script type=\"text/javascript\">
\t\tfunction freeze_confirm(){
\t\t\tif(confirm(\"האם אתה בטוח?\\r\\nבלחיצה על 'אישור' החשבון יוקפא.\\r\\nכדי לבטל יש ללחוץ על 'ביטול'.\\r\\nניתן להפעיל מחדש חשבון מוקפא בכל שלב באמצעות כניסה לחשבון.\")){ \$('#save_data').click(); }
\t\t}
\t</script>
\t
    <div class=\"midsec\">

        <h1>הקפאת חשבון</h1>

        <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array()), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"harsama-midsec\">
                <div class=\"freeze_cont\">
                    <br>


                    לידיעתכם: הקפאת חשבון אינה מבטלת את המנוי בתשלום במידה ויש לכם כזה.  כדי לבטל את המנוי בתשלום טרם ההקפאה יש לשלוח לנו מייל דרך עמוד צור קשר, ובו בקשה לביטול המנוי בתשלום.

                    <br>

                    <textarea id=\"freeze_account_reason\" name=\"freeze_account_reason\" placeholder=\"סיבת הקפאה\"></textarea>
                </div>
            </div>

            <div class=\"clearfix\">
                <input type=\"button\" value=\"הקפאה\" class=\"free\" onclick=\"freeze_confirm();\">
                <input type=\"submit\" id=\"save_data\" class=\"hidden\">
            </div>

        </form>



    </div><!-- midsec end -->

";
    }

    public function getTemplateName()
    {
        return ":frontend/user:freeze.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontend/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<script type="text/javascript">*/
/* 		function freeze_confirm(){*/
/* 			if(confirm("האם אתה בטוח?\r\nבלחיצה על 'אישור' החשבון יוקפא.\r\nכדי לבטל יש ללחוץ על 'ביטול'.\r\nניתן להפעיל מחדש חשבון מוקפא בכל שלב באמצעות כניסה לחשבון.")){ $('#save_data').click(); }*/
/* 		}*/
/* 	</script>*/
/* 	*/
/*     <div class="midsec">*/
/* */
/*         <h1>הקפאת חשבון</h1>*/
/* */
/*         <form action="{{ app.request.requesturi }}" method="post">*/
/*             <div class="harsama-midsec">*/
/*                 <div class="freeze_cont">*/
/*                     <br>*/
/* */
/* */
/*                     לידיעתכם: הקפאת חשבון אינה מבטלת את המנוי בתשלום במידה ויש לכם כזה.  כדי לבטל את המנוי בתשלום טרם ההקפאה יש לשלוח לנו מייל דרך עמוד צור קשר, ובו בקשה לביטול המנוי בתשלום.*/
/* */
/*                     <br>*/
/* */
/*                     <textarea id="freeze_account_reason" name="freeze_account_reason" placeholder="סיבת הקפאה"></textarea>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="clearfix">*/
/*                 <input type="button" value="הקפאה" class="free" onclick="freeze_confirm();">*/
/*                 <input type="submit" id="save_data" class="hidden">*/
/*             </div>*/
/* */
/*         </form>*/
/* */
/* */
/* */
/*     </div><!-- midsec end -->*/
/* */
/* {% endblock %}*/
