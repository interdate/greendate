<?php

/* :backend:header.html.twig */
class __TwigTemplate_ba0a9c2af7fc7ee597a4707bba97bda8f2f38789aa9be76dd2000cb26a6d7c7a extends Twig_Template
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
        echo "<div id=\"header\">
    <div class=\"right\" id=\"header_wrapper\">
        <h1 class=\"ui header\">
            <i class=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo " icon\"></i>
            <div class=\"content\">
                ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "
                ";
        // line 7
        if (array_key_exists("sub_header", $context)) {
            echo "<div class=\"sub header\">";
            echo twig_escape_filter($this->env, (isset($context["sub_header"]) ? $context["sub_header"] : null), "html", null, true);
            echo "</div>";
        }
        // line 8
        echo "            </div>
        </h1>
    </div>

    <div class=\"left\" id=\"search\">
        <button class=\"ui icon button massive\">
            <i class=\"icon sidebar\"></i>
        </button>
    </div>

    <div class=\"left\" id=\"homepage\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("user_homepage");
        echo "\" target=\"_blank\">
            <button class=\"ui icon button massive\">
                <i class=\"icon home\"></i>
            </button>
        </a>
    </div>

    <div class=\"left\" id=\"logout\">
        <button class=\"ui icon button massive\" onclick=\"window.location.href='";
        // line 27
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "'\">
            <i class=\"icon power\"></i>
        </button>
    </div>

</div>

<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return ":backend:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  52 => 19,  39 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="right" id="header_wrapper">*/
/*         <h1 class="ui header">*/
/*             <i class="{{ icon }} icon"></i>*/
/*             <div class="content">*/
/*                 {{ header }}*/
/*                 {% if sub_header is defined %}<div class="sub header">{{ sub_header }}</div>{% endif %}*/
/*             </div>*/
/*         </h1>*/
/*     </div>*/
/* */
/*     <div class="left" id="search">*/
/*         <button class="ui icon button massive">*/
/*             <i class="icon sidebar"></i>*/
/*         </button>*/
/*     </div>*/
/* */
/*     <div class="left" id="homepage">*/
/*         <a href="{{ path('user_homepage') }}" target="_blank">*/
/*             <button class="ui icon button massive">*/
/*                 <i class="icon home"></i>*/
/*             </button>*/
/*         </a>*/
/*     </div>*/
/* */
/*     <div class="left" id="logout">*/
/*         <button class="ui icon button massive" onclick="window.location.href='{{ path('logout') }}'">*/
/*             <i class="icon power"></i>*/
/*         </button>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <div class="clear"></div>*/
