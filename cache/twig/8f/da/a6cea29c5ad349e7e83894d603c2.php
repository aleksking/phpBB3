<?php

/* overall_footer.html */
class __TwigTemplate_8fdaa6cea29c5ad349e7e83894d603c2 extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
<div id=\"page-footer\" role=\"contentinfo\">
\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("navbar_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        // line 11
        echo "\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t";
        // line 12
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 15
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<br /><strong><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>";
        }
        // line 16
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 36
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 37
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 39
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 40
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write(unescape('%3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));</script>";
        }
        // line 41
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 42
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 43
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 44
        echo "
";
        // line 45
        // line 46
        echo "
";
        // line 47
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("plupload.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 48
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS");
        echo "

";
        // line 50
        // line 51
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 47,  172 => 45,  154 => 43,  139 => 42,  124 => 40,  120 => 39,  116 => 37,  78 => 18,  65 => 15,  59 => 14,  57 => 13,  52 => 12,  47 => 11,  46 => 10,  30 => 7,  25 => 4,  21 => 2,  137 => 26,  131 => 25,  114 => 23,  111 => 22,  93 => 22,  83 => 15,  71 => 13,  66 => 11,  34 => 5,  24 => 3,  416 => 111,  406 => 109,  401 => 107,  400 => 106,  397 => 105,  389 => 103,  375 => 101,  373 => 100,  369 => 99,  360 => 98,  348 => 96,  345 => 95,  343 => 94,  340 => 93,  335 => 90,  330 => 88,  322 => 86,  320 => 85,  311 => 84,  308 => 83,  304 => 81,  292 => 80,  276 => 77,  266 => 74,  263 => 73,  261 => 72,  258 => 71,  257 => 70,  246 => 66,  220 => 58,  217 => 57,  209 => 56,  192 => 50,  185 => 49,  183 => 48,  180 => 47,  169 => 44,  157 => 44,  142 => 43,  141 => 42,  135 => 38,  134 => 37,  127 => 34,  118 => 33,  110 => 32,  107 => 21,  105 => 30,  102 => 29,  81 => 24,  74 => 16,  69 => 12,  61 => 19,  58 => 18,  50 => 16,  45 => 14,  43 => 13,  40 => 12,  39 => 11,  26 => 5,  395 => 104,  392 => 117,  382 => 113,  378 => 111,  371 => 107,  370 => 106,  366 => 104,  353 => 103,  352 => 102,  347 => 99,  339 => 94,  331 => 93,  325 => 92,  317 => 91,  312 => 89,  309 => 88,  306 => 87,  305 => 86,  299 => 83,  295 => 82,  291 => 81,  275 => 80,  265 => 72,  255 => 69,  250 => 66,  245 => 64,  242 => 64,  241 => 63,  233 => 59,  229 => 57,  221 => 59,  219 => 54,  208 => 51,  199 => 48,  195 => 50,  190 => 48,  173 => 46,  171 => 30,  161 => 22,  150 => 18,  132 => 41,  95 => 27,  84 => 12,  73 => 11,  62 => 10,  60 => 9,  35 => 7,  22 => 2,  954 => 272,  951 => 271,  937 => 268,  933 => 267,  930 => 266,  928 => 265,  925 => 264,  919 => 261,  907 => 260,  904 => 259,  902 => 258,  899 => 257,  887 => 256,  884 => 255,  879 => 252,  873 => 250,  870 => 249,  857 => 248,  855 => 247,  850 => 246,  842 => 245,  838 => 243,  834 => 241,  833 => 240,  829 => 238,  823 => 237,  807 => 236,  804 => 235,  803 => 234,  800 => 233,  798 => 232,  795 => 231,  793 => 230,  790 => 229,  784 => 225,  779 => 223,  775 => 222,  769 => 221,  761 => 220,  759 => 219,  753 => 217,  751 => 216,  748 => 215,  737 => 210,  733 => 208,  730 => 207,  724 => 205,  718 => 201,  716 => 200,  698 => 195,  690 => 194,  684 => 193,  678 => 192,  674 => 190,  673 => 189,  669 => 187,  659 => 186,  650 => 185,  644 => 184,  639 => 183,  635 => 181,  630 => 178,  624 => 177,  614 => 175,  608 => 173,  600 => 172,  597 => 171,  593 => 170,  589 => 168,  587 => 167,  584 => 166,  581 => 165,  572 => 164,  569 => 163,  557 => 162,  543 => 161,  540 => 160,  538 => 159,  526 => 157,  517 => 156,  509 => 155,  494 => 154,  493 => 153,  490 => 152,  484 => 151,  473 => 150,  469 => 149,  449 => 148,  446 => 147,  437 => 141,  433 => 140,  429 => 139,  415 => 138,  404 => 108,  402 => 132,  399 => 131,  393 => 127,  391 => 126,  388 => 102,  383 => 124,  380 => 123,  376 => 110,  363 => 111,  358 => 97,  350 => 105,  344 => 104,  338 => 102,  332 => 89,  327 => 98,  310 => 94,  301 => 88,  298 => 87,  296 => 86,  289 => 82,  284 => 79,  282 => 78,  279 => 78,  273 => 73,  267 => 71,  264 => 71,  251 => 67,  249 => 68,  244 => 67,  236 => 66,  232 => 61,  224 => 60,  216 => 53,  210 => 57,  206 => 50,  201 => 54,  198 => 53,  196 => 51,  193 => 51,  189 => 49,  188 => 48,  184 => 46,  178 => 45,  162 => 44,  159 => 43,  158 => 45,  155 => 20,  153 => 19,  149 => 38,  147 => 37,  144 => 31,  130 => 35,  122 => 31,  119 => 30,  117 => 15,  115 => 28,  112 => 36,  106 => 14,  101 => 17,  96 => 20,  88 => 25,  86 => 17,  77 => 14,  75 => 13,  72 => 12,  68 => 10,  54 => 9,  48 => 15,  44 => 7,  42 => 8,  41 => 4,  32 => 7,  31 => 6,  19 => 1,);
    }
}
