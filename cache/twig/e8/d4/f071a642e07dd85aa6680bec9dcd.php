<?php

/* acp_search.html */
class __TwigTemplate_e8d4f071a642e07dd85aa6680bec9dcd extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_SETTINGS"]) ? $context["S_SETTINGS"] : null)) {
            // line 6
            echo "\t<h1>";
            echo $this->env->getExtension('phpbb')->lang("ACP_SEARCH_SETTINGS");
            echo "</h1>

\t<p>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("ACP_SEARCH_SETTINGS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_search\" method=\"post\" action=\"";
            // line 10
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("GENERAL_SEARCH_SETTINGS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"load_search\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("YES_SEARCH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("YES_SEARCH_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"load_search\" name=\"config[load_search]\" value=\"1\"";
            // line 16
            if ((isset($context["S_YES_SEARCH"]) ? $context["S_YES_SEARCH"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"config[load_search]\" value=\"0\"";
            // line 17
            if ((!(isset($context["S_YES_SEARCH"]) ? $context["S_YES_SEARCH"] : null))) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_interval\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("SEARCH_INTERVAL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_INTERVAL_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"search_interval\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"config[search_interval]\" value=\"";
            // line 21
            echo (isset($context["SEARCH_INTERVAL"]) ? $context["SEARCH_INTERVAL"] : null);
            echo "\" /> ";
            echo $this->env->getExtension('phpbb')->lang("SECONDS");
            echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_anonymous_interval\">";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("SEARCH_GUEST_INTERVAL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_GUEST_INTERVAL_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"search_anonymous_interval\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"config[search_anonymous_interval]\" value=\"";
            // line 25
            echo (isset($context["SEARCH_GUEST_INTERVAL"]) ? $context["SEARCH_GUEST_INTERVAL"] : null);
            echo "\" /> ";
            echo $this->env->getExtension('phpbb')->lang("SECONDS");
            echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"limit_search_load\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("LIMIT_SEARCH_LOAD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIMIT_SEARCH_LOAD_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"limit_search_load\" type=\"text\" size=\"4\" maxlength=\"4\" name=\"config[limit_search_load]\" value=\"";
            // line 29
            echo (isset($context["LIMIT_SEARCH_LOAD"]) ? $context["LIMIT_SEARCH_LOAD"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"min_search_author_chars\">";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("MIN_SEARCH_AUTHOR_CHARS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("MIN_SEARCH_AUTHOR_CHARS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"min_search_author_chars\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"config[min_search_author_chars]\" value=\"";
            // line 33
            echo (isset($context["MIN_SEARCH_AUTHOR_CHARS"]) ? $context["MIN_SEARCH_AUTHOR_CHARS"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"max_num_search_keywords\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("MAX_NUM_SEARCH_KEYWORDS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("MAX_NUM_SEARCH_KEYWORDS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"max_num_search_keywords\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"config[max_num_search_keywords]\" value=\"";
            // line 37
            echo (isset($context["MAX_NUM_SEARCH_KEYWORDS"]) ? $context["MAX_NUM_SEARCH_KEYWORDS"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_store_results\">";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("SEARCH_STORE_RESULTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_STORE_RESULTS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"search_store_results\" type=\"number\" size=\"4\" maxlength=\"6\" min=\"0\" max=\"999999\" name=\"config[search_store_results]\" value=\"";
            // line 41
            echo (isset($context["SEARCH_STORE_RESULTS"]) ? $context["SEARCH_STORE_RESULTS"] : null);
            echo "\" /> ";
            echo $this->env->getExtension('phpbb')->lang("SECONDS");
            echo "</dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TYPE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"search_type\">";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TYPE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"search_type\" name=\"config[search_type]\" data-togglable-settings=\"true\">";
            // line 49
            echo (isset($context["S_SEARCH_TYPES"]) ? $context["S_SEARCH_TYPES"] : null);
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "backend"));
            foreach ($context['_seq'] as $context["_key"] => $context["backend"]) {
                // line 54
                echo "
\t\t<fieldset id=\"search_";
                // line 55
                echo $this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "IDENTIFIER");
                echo "_settings\">
\t\t\t<legend>";
                // line 56
                echo $this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "NAME");
                echo "</legend>
\t\t";
                // line 57
                echo $this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "SETTINGS");
                echo "
\t\t</fieldset>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 66
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif ((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null)) {
            // line 71
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Popup search progress bar
\t\t*/
\t\tfunction popup_progress_bar(progress_type)
\t\t{
\t\t\tclose_waitscreen = 0;
\t\t\t// no scrollbars
\t\t\tpopup('";
            // line 81
            echo (isset($context["UA_PROGRESS_BAR"]) ? $context["UA_PROGRESS_BAR"] : null);
            echo "&amp;type=' + progress_type, 400, 240, '_index');
\t\t}
\t// ]]>
\t</script>

\t<h1>";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("ACP_SEARCH_INDEX");
            echo "</h1>

\t";
            // line 88
            if ((isset($context["S_CONTINUE_INDEXING"]) ? $context["S_CONTINUE_INDEXING"] : null)) {
                // line 89
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("CONTINUE_EXPLAIN");
                echo "</p>

\t\t<form id=\"acp_search_continue\" method=\"post\" action=\"";
                // line 91
                echo (isset($context["U_CONTINUE_INDEXING"]) ? $context["U_CONTINUE_INDEXING"] : null);
                echo "\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<legend>";
                // line 93
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</legend>
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"continue\" name=\"continue\" value=\"";
                // line 94
                echo $this->env->getExtension('phpbb')->lang("CONTINUE");
                echo "\" onclick=\"popup_progress_bar('";
                echo (isset($context["S_CONTINUE_INDEXING"]) ? $context["S_CONTINUE_INDEXING"] : null);
                echo "');\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"submit\" id=\"cancel\" name=\"cancel\" value=\"";
                // line 95
                echo $this->env->getExtension('phpbb')->lang("CANCEL");
                echo "\" />
\t\t\t\t";
                // line 96
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t</fieldset>
\t\t</form>
\t";
            } else {
                // line 100
                echo "
\t\t<p>";
                // line 101
                echo $this->env->getExtension('phpbb')->lang("ACP_SEARCH_INDEX_EXPLAIN");
                echo "</p>

\t\t";
                // line 103
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "backend"));
                foreach ($context['_seq'] as $context["_key"] => $context["backend"]) {
                    // line 104
                    echo "
\t\t\t";
                    // line 105
                    if ($this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "S_STATS")) {
                        // line 106
                        echo "
\t\t\t<form id=\"acp_search_index_";
                        // line 107
                        echo $this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "NAME");
                        echo "\" method=\"post\" action=\"";
                        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                        echo "\">

\t\t\t\t<fieldset class=\"tabulated\">

\t\t\t\t";
                        // line 111
                        echo $this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "S_HIDDEN_FIELDS");
                        echo "

\t\t\t\t<legend>";
                        // line 113
                        echo $this->env->getExtension('phpbb')->lang("INDEX_STATS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "L_NAME");
                        echo " ";
                        if ($this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "S_ACTIVE")) {
                            echo "(";
                            echo $this->env->getExtension('phpbb')->lang("ACTIVE");
                            echo ") ";
                        }
                        echo "</legend>

\t\t\t\t<table class=\"table1\">
\t\t\t\t\t<caption>";
                        // line 116
                        echo $this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "L_NAME");
                        echo " ";
                        if ($this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "S_ACTIVE")) {
                            echo "(";
                            echo $this->env->getExtension('phpbb')->lang("ACTIVE");
                            echo ") ";
                        }
                        echo "</caption>
\t\t\t\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col1\" /><col class=\"col2\" />
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                        // line 120
                        echo $this->env->getExtension('phpbb')->lang("STATISTIC");
                        echo "</th>
\t\t\t\t\t<th>";
                        // line 121
                        echo $this->env->getExtension('phpbb')->lang("VALUE");
                        echo "</th>
\t\t\t\t\t<th>";
                        // line 122
                        echo $this->env->getExtension('phpbb')->lang("STATISTIC");
                        echo "</th>
\t\t\t\t\t<th>";
                        // line 123
                        echo $this->env->getExtension('phpbb')->lang("VALUE");
                        echo "</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
                        // line 127
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "data"));
                        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                            // line 128
                            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                            // line 129
                            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "STATISTIC_1");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "</td>
\t\t\t\t\t\t<td>";
                            // line 130
                            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "VALUE_1");
                            echo "</td>
\t\t\t\t\t\t<td>";
                            // line 131
                            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "STATISTIC_2");
                            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "STATISTIC_2")) {
                                echo $this->env->getExtension('phpbb')->lang("COLON");
                            }
                            echo "</td>
\t\t\t\t\t\t<td>";
                            // line 132
                            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "VALUE_2");
                            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t";
                    }
                    // line 139
                    echo "
\t\t\t<p class=\"quick\">
\t\t\t";
                    // line 141
                    if ($this->getAttribute((isset($context["backend"]) ? $context["backend"] : null), "S_INDEXED")) {
                        // line 142
                        echo "\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"delete\" />
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                        // line 143
                        echo $this->env->getExtension('phpbb')->lang("DELETE_INDEX");
                        echo "\" onclick=\"popup_progress_bar('delete');\" />
\t\t\t";
                    } else {
                        // line 145
                        echo "\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"create\" />
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                        // line 146
                        echo $this->env->getExtension('phpbb')->lang("CREATE_INDEX");
                        echo "\" onclick=\"popup_progress_bar('create');\" />
\t\t\t";
                    }
                    // line 148
                    echo "\t\t\t</p>
\t\t\t";
                    // line 149
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t</fieldset>

\t\t\t</form>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backend'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "
\t";
            }
            // line 156
            echo "
";
        }
        // line 158
        echo "
";
        // line 159
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 159,  461 => 158,  457 => 156,  453 => 154,  442 => 149,  439 => 148,  434 => 146,  431 => 145,  426 => 143,  423 => 142,  421 => 141,  417 => 139,  411 => 135,  402 => 132,  395 => 131,  391 => 130,  386 => 129,  383 => 128,  379 => 127,  372 => 123,  368 => 122,  364 => 121,  360 => 120,  347 => 116,  332 => 113,  327 => 111,  318 => 107,  315 => 106,  313 => 105,  310 => 104,  306 => 103,  301 => 101,  298 => 100,  291 => 96,  287 => 95,  281 => 94,  277 => 93,  272 => 91,  266 => 89,  264 => 88,  259 => 86,  251 => 81,  239 => 71,  231 => 66,  227 => 65,  223 => 64,  219 => 63,  215 => 61,  205 => 57,  201 => 56,  197 => 55,  194 => 54,  190 => 53,  183 => 49,  176 => 48,  171 => 46,  161 => 41,  154 => 40,  148 => 37,  141 => 36,  135 => 33,  128 => 32,  122 => 29,  115 => 28,  107 => 25,  100 => 24,  92 => 21,  85 => 20,  75 => 17,  67 => 16,  60 => 15,  55 => 13,  49 => 10,  44 => 8,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
