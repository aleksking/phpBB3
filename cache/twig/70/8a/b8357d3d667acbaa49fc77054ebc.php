<?php

/* navbar_footer.html */
class __TwigTemplate_708ab8357d3d667acbaa49fc77054ebc extends Twig_Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer\" class=\"linklist bulletin\" role=\"menubar\">
\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 6
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 7
        echo "\t\t\t";
        // line 8
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 9
        // line 10
        echo "\t\t</li>
\t\t";
        // line 11
        if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            echo "<li class=\"small-icon icon-";
            if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
            echo "\" title=\"";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if ((!(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null))) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
            echo "\" data-toggle-url=\"";
            echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
            echo "\">";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "</a></li>";
        }
        // line 12
        echo "
\t\t";
        // line 13
        // line 14
        echo "\t\t<li class=\"rightside\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t";
        // line 15
        // line 16
        echo "\t\t";
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 17
            echo "\t\t\t<li class=\"small-icon icon-delete-cookies rightside\"><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t\t";
            // line 18
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        // line 21
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 22
        echo "\t\t";
        // line 23
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 24
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  108 => 21,  103 => 19,  82 => 15,  76 => 13,  36 => 8,  176 => 47,  172 => 45,  154 => 43,  139 => 42,  124 => 40,  120 => 39,  116 => 37,  78 => 18,  65 => 15,  59 => 14,  57 => 13,  52 => 12,  47 => 11,  46 => 10,  30 => 7,  25 => 4,  21 => 2,  137 => 26,  131 => 25,  114 => 23,  111 => 22,  93 => 18,  83 => 16,  71 => 13,  66 => 11,  34 => 7,  24 => 3,  416 => 111,  406 => 109,  401 => 107,  400 => 106,  397 => 105,  389 => 103,  375 => 101,  373 => 100,  369 => 99,  360 => 98,  348 => 96,  345 => 95,  343 => 94,  340 => 93,  335 => 90,  330 => 88,  322 => 86,  320 => 85,  311 => 84,  308 => 83,  304 => 81,  292 => 80,  276 => 77,  266 => 74,  263 => 73,  261 => 72,  258 => 71,  257 => 70,  246 => 66,  220 => 58,  217 => 57,  209 => 56,  192 => 50,  185 => 49,  183 => 48,  180 => 47,  169 => 44,  157 => 44,  142 => 43,  141 => 42,  135 => 38,  134 => 37,  127 => 34,  118 => 33,  110 => 32,  107 => 21,  105 => 30,  102 => 29,  81 => 24,  74 => 16,  69 => 12,  61 => 19,  58 => 18,  50 => 16,  45 => 14,  43 => 9,  40 => 12,  39 => 11,  26 => 6,  395 => 104,  392 => 117,  382 => 113,  378 => 111,  371 => 107,  370 => 106,  366 => 104,  353 => 103,  352 => 102,  347 => 99,  339 => 94,  331 => 93,  325 => 92,  317 => 91,  312 => 89,  309 => 88,  306 => 87,  305 => 86,  299 => 83,  295 => 82,  291 => 81,  275 => 80,  265 => 72,  255 => 69,  250 => 66,  245 => 64,  242 => 64,  241 => 63,  233 => 59,  229 => 57,  221 => 59,  219 => 54,  208 => 51,  199 => 48,  195 => 50,  190 => 48,  173 => 46,  171 => 30,  161 => 22,  150 => 18,  132 => 41,  95 => 27,  84 => 12,  73 => 12,  62 => 10,  60 => 9,  35 => 7,  22 => 2,  954 => 272,  951 => 271,  937 => 268,  933 => 267,  930 => 266,  928 => 265,  925 => 264,  919 => 261,  907 => 260,  904 => 259,  902 => 258,  899 => 257,  887 => 256,  884 => 255,  879 => 252,  873 => 250,  870 => 249,  857 => 248,  855 => 247,  850 => 246,  842 => 245,  838 => 243,  834 => 241,  833 => 240,  829 => 238,  823 => 237,  807 => 236,  804 => 235,  803 => 234,  800 => 233,  798 => 232,  795 => 231,  793 => 230,  790 => 229,  784 => 225,  779 => 223,  775 => 222,  769 => 221,  761 => 220,  759 => 219,  753 => 217,  751 => 216,  748 => 215,  737 => 210,  733 => 208,  730 => 207,  724 => 205,  718 => 201,  716 => 200,  698 => 195,  690 => 194,  684 => 193,  678 => 192,  674 => 190,  673 => 189,  669 => 187,  659 => 186,  650 => 185,  644 => 184,  639 => 183,  635 => 181,  630 => 178,  624 => 177,  614 => 175,  608 => 173,  600 => 172,  597 => 171,  593 => 170,  589 => 168,  587 => 167,  584 => 166,  581 => 165,  572 => 164,  569 => 163,  557 => 162,  543 => 161,  540 => 160,  538 => 159,  526 => 157,  517 => 156,  509 => 155,  494 => 154,  493 => 153,  490 => 152,  484 => 151,  473 => 150,  469 => 149,  449 => 148,  446 => 147,  437 => 141,  433 => 140,  429 => 139,  415 => 138,  404 => 108,  402 => 132,  399 => 131,  393 => 127,  391 => 126,  388 => 102,  383 => 124,  380 => 123,  376 => 110,  363 => 111,  358 => 97,  350 => 105,  344 => 104,  338 => 102,  332 => 89,  327 => 98,  310 => 94,  301 => 88,  298 => 87,  296 => 86,  289 => 82,  284 => 79,  282 => 78,  279 => 78,  273 => 73,  267 => 71,  264 => 71,  251 => 67,  249 => 68,  244 => 67,  236 => 66,  232 => 61,  224 => 60,  216 => 53,  210 => 57,  206 => 50,  201 => 54,  198 => 53,  196 => 51,  193 => 51,  189 => 49,  188 => 48,  184 => 46,  178 => 45,  162 => 44,  159 => 43,  158 => 45,  155 => 20,  153 => 19,  149 => 38,  147 => 37,  144 => 31,  130 => 35,  122 => 31,  119 => 23,  117 => 22,  115 => 28,  112 => 36,  106 => 20,  101 => 17,  96 => 20,  88 => 25,  86 => 17,  77 => 14,  75 => 13,  72 => 12,  68 => 10,  54 => 9,  48 => 15,  44 => 10,  42 => 8,  41 => 4,  32 => 7,  31 => 6,  19 => 1,);
    }
}
