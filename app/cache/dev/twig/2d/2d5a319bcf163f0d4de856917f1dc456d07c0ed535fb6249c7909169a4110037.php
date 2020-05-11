<?php

/* backend/header.html.twig */
class __TwigTemplate_df8c5ea45a72534bd590977e85d89f47fafa3180a7198039006984bc84bfef01 extends Twig_Template
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
        $__internal_34e5190c51afa680fa2c85e4cc92e910287a0a2ca629b3a6fc1dcca8b3e19909 = $this->env->getExtension("native_profiler");
        $__internal_34e5190c51afa680fa2c85e4cc92e910287a0a2ca629b3a6fc1dcca8b3e19909->enter($__internal_34e5190c51afa680fa2c85e4cc92e910287a0a2ca629b3a6fc1dcca8b3e19909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"right\" id=\"header_wrapper\">
        <h1 class=\"ui header\">
            <i class=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo " icon\"></i>
            <div class=\"content\">
                ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")), "html", null, true);
        echo "
                ";
        // line 7
        if (array_key_exists("sub_header", $context)) {
            echo "<div class=\"sub header\">";
            echo twig_escape_filter($this->env, (isset($context["sub_header"]) ? $context["sub_header"] : $this->getContext($context, "sub_header")), "html", null, true);
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
        
        $__internal_34e5190c51afa680fa2c85e4cc92e910287a0a2ca629b3a6fc1dcca8b3e19909->leave($__internal_34e5190c51afa680fa2c85e4cc92e910287a0a2ca629b3a6fc1dcca8b3e19909_prof);

    }

    public function getTemplateName()
    {
        return "backend/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  55 => 19,  42 => 8,  36 => 7,  32 => 6,  27 => 4,  22 => 1,);
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
