<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_b02f50ae3686e37868bf87e9e3d56f5c23f21c2677e1cecc23a99a208b4ad3a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:logger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["logger"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"16\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 16 28\" enable-background=\"new 0 0 16 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 6h-1V5c0-0.5-0.5-1-1-1H2C1.4 4 1 4.4 1 5v2v13c0 1.6 1.3 3 3 3h11c0.5 0 1-0.5 1-1V7 C16 6.5 15.5 6 15 6z M6 15h3v3H6V15z M6 13V7h3v6H6z M15 21c0 0.6-0.4 1-1 1H5c-0.9 0-1.7-0.4-2.2-1H13c0.6 0 1-0.4 1-1V7 c0.5 0 1 0.5 1 1V21z\"/></g></svg>
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array())) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : null), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : null), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array())) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array())) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "WebProfilerBundle:Collector:logger.html.twig", 37)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"26\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 32\" enable-background=\"new 0 0 26 32\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M23.6 3.4h-1.7V1.7c0-0.9-0.8-1.7-1.7-1.7H1.7C0.8 0 0 0.8 0 1.7v3.4v21.9C0 29.7 2.3 32 5.1 32h18.5 c0.9 0 1.7-0.8 1.7-1.7V5.1C25.3 4.1 24.5 3.4 23.6 3.4z M8.4 18.5h5.1v5.1H8.4V18.5z M8.4 15.2V5.1h5.1v10.1H8.4z M23.6 28.6 c0 0.9-0.8 1.7-1.7 1.7H6.7c-1.5 0-2.8-0.7-3.7-1.7h17.2c0.9 0 1.7-0.8 1.7-1.7V5.1c0.9 0 1.7 0.8 1.7 1.7V28.6z\"/></svg></span>
    <strong>Logs</strong>
    ";
        // line 45
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()))) {
            // line 46
            echo "        ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : null), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query", array()), "get", array(0 => "priority", 1 => 0), "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "priorities", array()));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (( !(isset($context["priority"]) ? $context["priority"] : null) && ($context["value"] > 100))) {
                // line 70
                echo "                                ";
                $context["priority"] = $context["value"];
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo ((($context["value"] == (isset($context["priority"]) ? $context["priority"] : null))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "count", array()), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) {
            // line 75
            echo "                            ";
            if ( !(isset($context["priority"]) ? $context["priority"] : null)) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            echo ((("-100" == (isset($context["priority"]) ? $context["priority"] : null))) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array()), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs", array())) {
            // line 90
            echo "        <ul class=\"alt\">
            ";
            // line 91
            $context["log_loop_index"] = 0;
            // line 92
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs", array()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 93
                echo "                ";
                $context["is_deprecation"] = (($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "level", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "type", array(), "any", true, true)) && ((twig_constant("E_DEPRECATED") == $this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array())) || (twig_constant("E_USER_DEPRECATED") == $this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array()))));
                // line 94
                echo "                ";
                if (((((isset($context["priority"]) ? $context["priority"] : null) == "-100")) ? ((isset($context["is_deprecation"]) ? $context["is_deprecation"] : null)) : (($this->getAttribute($context["log"], "priority", array()) >= (isset($context["priority"]) ? $context["priority"] : null))))) {
                    // line 95
                    echo "                    ";
                    $context["log_loop_index"] = ((isset($context["log_loop_index"]) ? $context["log_loop_index"] : null) + 1);
                    // line 96
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["log_loop_index"]) ? $context["log_loop_index"] : null)), "html", null, true);
                    if ($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "scream", array(), "any", true, true)) {
                        echo " scream";
                    } elseif (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                        echo " error";
                    } elseif ((($this->getAttribute($context["log"], "priority", array()) >= 300) || (isset($context["is_deprecation"]) ? $context["is_deprecation"] : null))) {
                        echo " warning";
                    }
                    echo "\">
                        ";
                    // line 97
                    echo $context["logger"]->getdisplay_message($this->getAttribute($context["loop"], "index", array()), $context["log"], (isset($context["is_deprecation"]) ? $context["is_deprecation"] : null));
                    echo "
                    </li>
                ";
                }
                // line 100
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 101
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        </ul>
    ";
        } else {
            // line 105
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 112
    public function getdisplay_message($__log_index__ = null, $__log__ = null, $__is_deprecation__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "    ";
            echo twig_escape_filter($this->env, (((isset($context["is_deprecation"]) ? $context["is_deprecation"] : null)) ? ("DEPRECATED") : ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priorityName", array()))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message", array()), "html", null, true);
            echo "

    ";
            // line 115
            if ((isset($context["is_deprecation"]) ? $context["is_deprecation"] : null)) {
                // line 116
                echo "        ";
                $context["stack"] = (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array()), array())) : (array()));
                // line 117
                echo "        ";
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : null));
                // line 118
                echo "
        ";
                // line 119
                if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "errorCount", array(), "any", true, true)) {
                    // line 120
                    echo "        (";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array()), "errorCount", array()), "html", null, true);
                    echo "x)
        ";
                }
                // line 122
                echo "
        ";
                // line 123
                if ((isset($context["stack"]) ? $context["stack"] : null)) {
                    // line 124
                    echo "            <a href=\"#\" onclick=\"Sfjs.toggle('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "', document.getElementById('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-on'), document.getElementById('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-off')); return false;\">
                <img class=\"toggle\" id=\"";
                    // line 125
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
                <img class=\"toggle\" id=\"";
                    // line 126
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
            </a>
        ";
                }
                // line 129
                echo "
        ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 131
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 132
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 134
                        echo "            ";
                        if ($this->getAttribute($context["call"], "class", array(), "any", true, true)) {
                            // line 135
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($context["call"], "class", array())) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array())));
                            // line 136
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", array(), "any", true, true)) {
                            // line 137
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array()));
                            // line 138
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", array(), "any", true, true)) {
                            // line 139
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", array());
                            // line 140
                            echo "            ";
                        } else {
                            // line 141
                            echo "                ";
                            $context["from"] = "-";
                            // line 142
                            echo "            ";
                        }
                        // line 143
                        echo "
            <li>Called from ";
                        // line 144
                        echo ((($this->getAttribute($context["call"], "file", array(), "any", true, true) && $this->getAttribute($context["call"], "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($context["call"], "file", array()), $this->getAttribute($context["call"], "line", array()), (isset($context["from"]) ? $context["from"] : null))) : ((isset($context["from"]) ? $context["from"] : null)));
                        echo "</li>

            ";
                        // line 146
                        if (($context["index"] == (twig_length_filter($this->env, (isset($context["stack"]) ? $context["stack"] : null)) - 1))) {
                            // line 147
                            echo "                </ul>
            ";
                        }
                        // line 149
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "    ";
            } else {
                // line 151
                echo "        ";
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array())))) {
                    // line 152
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 154
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array()), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 157
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 157,  458 => 154,  454 => 152,  451 => 151,  448 => 150,  441 => 149,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  424 => 142,  421 => 141,  418 => 140,  415 => 139,  412 => 138,  409 => 137,  406 => 136,  403 => 135,  400 => 134,  394 => 132,  391 => 131,  386 => 130,  383 => 129,  377 => 126,  373 => 125,  364 => 124,  362 => 123,  359 => 122,  353 => 120,  351 => 119,  348 => 118,  345 => 117,  342 => 116,  340 => 115,  332 => 113,  318 => 112,  310 => 105,  306 => 103,  299 => 101,  286 => 100,  280 => 97,  268 => 96,  265 => 95,  262 => 94,  259 => 93,  240 => 92,  238 => 91,  235 => 90,  233 => 89,  222 => 80,  214 => 78,  211 => 77,  208 => 76,  205 => 75,  202 => 74,  187 => 72,  184 => 71,  181 => 70,  178 => 69,  173 => 68,  162 => 58,  160 => 57,  156 => 55,  153 => 54,  148 => 51,  142 => 48,  139 => 47,  136 => 46,  134 => 45,  129 => 42,  126 => 41,  121 => 38,  118 => 37,  115 => 36,  109 => 33,  105 => 31,  102 => 30,  96 => 27,  92 => 25,  89 => 24,  83 => 21,  79 => 19,  76 => 18,  73 => 17,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% import _self as logger %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}*/
/*         {% set icon %}*/
/*             <svg width="16" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 16 28" enable-background="new 0 0 16 28" xml:space="preserve"><g><path fill="#3F3F3F" d="M15 6h-1V5c0-0.5-0.5-1-1-1H2C1.4 4 1 4.4 1 5v2v13c0 1.6 1.3 3 3 3h11c0.5 0 1-0.5 1-1V7 C16 6.5 15.5 6 15 6z M6 15h3v3H6V15z M6 13V7h3v6H6z M15 21c0 0.6-0.4 1-1 1H5c-0.9 0-1.7-0.4-2.2-1H13c0.6 0 1-0.4 1-1V7 c0.5 0 1 0.5 1 1V21z"/></g></svg>*/
/*             {% if collector.counterrors %}*/
/*                 {% set status_color = "red" %}*/
/*             {% elseif collector.countdeprecations %}*/
/*                 {% set status_color = "yellow" %}*/
/*             {% endif %}*/
/*             {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}*/
/*             <span class="sf-toolbar-status{% if status_color is defined %} sf-toolbar-status-{{ status_color }}{% endif %}">{{ error_count }}</span>*/
/*         {% endset %}*/
/*         {% set text %}*/
/*             {% if collector.counterrors %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Errors</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-red">{{ collector.counterrors }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if collector.countdeprecations %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Deprecated Calls</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-yellow">{{ collector.countdeprecations }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if collector.countscreams %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Silenced Errors</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status">{{ collector.countscreams }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endset %}*/
/*         {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><svg width="26" height="32" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 26 32" enable-background="new 0 0 26 32" xml:space="preserve"><path fill="#3F3F3F" d="M23.6 3.4h-1.7V1.7c0-0.9-0.8-1.7-1.7-1.7H1.7C0.8 0 0 0.8 0 1.7v3.4v21.9C0 29.7 2.3 32 5.1 32h18.5 c0.9 0 1.7-0.8 1.7-1.7V5.1C25.3 4.1 24.5 3.4 23.6 3.4z M8.4 18.5h5.1v5.1H8.4V18.5z M8.4 15.2V5.1h5.1v10.1H8.4z M23.6 28.6 c0 0.9-0.8 1.7-1.7 1.7H6.7c-1.5 0-2.8-0.7-3.7-1.7h17.2c0.9 0 1.7-0.8 1.7-1.7V5.1c0.9 0 1.7 0.8 1.7 1.7V28.6z"/></svg></span>*/
/*     <strong>Logs</strong>*/
/*     {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}*/
/*         {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}*/
/*         <span class="count">*/
/*             <span>{{ error_count }}</span>*/
/*         </span>*/
/*     {% endif %}*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Logs</h2>*/
/* */
/*     {% set priority = request.query.get('priority', 0) %}*/
/* */
/*     <table>*/
/*         <tr>*/
/*             <th>Filter</th>*/
/*             <td>*/
/*                 <form id="priority-form" action="" method="get" style="display: inline">*/
/*                     <input type="hidden" name="panel" value="logger">*/
/*                     <label for="priority">Min. Priority</label>*/
/*                     <select id="priority" name="priority" onchange="document.getElementById('priority-form').submit(); ">*/
/*                         {# values < 0 are custom levels #}*/
/*                         {% for value, level in collector.priorities %}*/
/*                             {% if not priority and value > 100 %}*/
/*                                 {% set priority = value %}*/
/*                             {% endif %}*/
/*                             <option value="{{ value }}"{{ value == priority ? ' selected' : '' }}>{{ level.name }} ({{ level.count }})</option>*/
/*                         {% endfor %}*/
/*                         {% if collector.countdeprecations %}*/
/*                             {% if not priority %}*/
/*                                 {% set priority = "-100" %}*/
/*                             {% endif %}*/
/*                             <option value="-100"{{ "-100" == priority ? ' selected' : '' }}>DEPRECATION only ({{ collector.countdeprecations }})</option>*/
/*                         {% endif %}*/
/*                     </select>*/
/*                     <noscript>*/
/*                         <input type="submit" value="refresh">*/
/*                     </noscript>*/
/*                 </form>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* */
/*     {% if collector.logs %}*/
/*         <ul class="alt">*/
/*             {% set log_loop_index = 0 %}*/
/*             {% for log in collector.logs %}*/
/*                 {% set is_deprecation = log.context.level is defined and log.context.type is defined and (constant('E_DEPRECATED') == log.context.type or constant('E_USER_DEPRECATED') == log.context.type) %}*/
/*                 {% if priority == '-100' ? is_deprecation : log.priority >= priority %}*/
/*                     {% set log_loop_index = log_loop_index + 1 %}*/
/*                     <li class="{{ cycle(['odd', 'even'], log_loop_index) }}{% if log.context.scream is defined %} scream{% elseif log.priority >= 400 %} error{% elseif log.priority >= 300 or is_deprecation %} warning{% endif %}">*/
/*                         {{ logger.display_message(loop.index, log, is_deprecation) }}*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 <li><em>No logs available for this priority.</em></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No logs available.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* {% macro display_message(log_index, log, is_deprecation) %}*/
/*     {{ is_deprecation ? 'DEPRECATED' : log.priorityName }} - {{ log.message }}*/
/* */
/*     {% if is_deprecation %}*/
/*         {% set stack = log.context.stack|default([]) %}*/
/*         {% set id = 'sf-call-stack-' ~ log_index %}*/
/* */
/*         {% if log.context.errorCount is defined %}*/
/*         ({{ log.context.errorCount }}x)*/
/*         {% endif %}*/
/* */
/*         {% if stack %}*/
/*             <a href="#" onclick="Sfjs.toggle('{{ id }}', document.getElementById('{{ id }}-on'), document.getElementById('{{ id }}-off')); return false;">*/
/*                 <img class="toggle" id="{{ id }}-off" alt="-" src="data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=" style="display:none">*/
/*                 <img class="toggle" id="{{ id }}-on" alt="+" src="data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7" style="display:inline">*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% for index, call in stack if index > 1 %}*/
/*             {% if index == 2 %}*/
/*                 <ul class="sf-call-stack" id="{{ id }}" style="display: none">*/
/*             {% endif %}*/
/*             {% if call.class is defined %}*/
/*                 {% set from = call.class|abbr_class ~ '::' ~ call.function|abbr_method() %}*/
/*             {% elseif call.function is defined %}*/
/*                 {% set from = call.function|abbr_method %}*/
/*             {% elseif call.file is defined %}*/
/*                 {% set from = call.file %}*/
/*             {% else %}*/
/*                 {% set from = '-' %}*/
/*             {% endif %}*/
/* */
/*             <li>Called from {{ call.file is defined and call.line is defined ? call.file|format_file(call.line, from) : from|raw }}</li>*/
/* */
/*             {% if index == stack|length - 1 %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% if log.context is defined and log.context is not empty %}*/
/*             <br />*/
/*             <small>*/
/*                 <strong>Context</strong>: {{ log.context|json_encode(64 b-or 256) }}*/
/*             </small>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
