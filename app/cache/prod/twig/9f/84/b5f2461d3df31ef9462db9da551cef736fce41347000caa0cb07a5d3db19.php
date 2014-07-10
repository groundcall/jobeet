<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_9f84b5f2461d3df31ef9462db9da551cef736fce41347000caa0cb07a5d3db19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), array("_page" => 1, "_per_page" => (isset($context["per_page"]) ? $context["per_page"] : null))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : null), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 173,  536 => 170,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 155,  499 => 154,  495 => 133,  489 => 131,  483 => 129,  477 => 127,  464 => 147,  462 => 146,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  326 => 94,  323 => 92,  321 => 91,  318 => 90,  316 => 89,  308 => 88,  288 => 81,  271 => 76,  244 => 65,  194 => 53,  188 => 49,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 170,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 152,  509 => 158,  506 => 149,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 143,  482 => 142,  476 => 141,  473 => 140,  470 => 149,  467 => 137,  460 => 136,  451 => 134,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 126,  399 => 124,  392 => 120,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 104,  350 => 117,  343 => 115,  330 => 105,  327 => 104,  317 => 101,  310 => 80,  304 => 86,  300 => 78,  297 => 77,  291 => 75,  284 => 72,  279 => 78,  274 => 77,  270 => 67,  260 => 70,  256 => 61,  250 => 60,  242 => 59,  228 => 52,  198 => 35,  181 => 29,  178 => 45,  172 => 22,  165 => 281,  146 => 34,  153 => 62,  139 => 31,  124 => 52,  96 => 90,  53 => 20,  76 => 27,  58 => 19,  277 => 109,  263 => 103,  257 => 101,  253 => 100,  237 => 93,  232 => 91,  225 => 58,  216 => 84,  205 => 56,  200 => 55,  184 => 47,  161 => 59,  145 => 59,  129 => 45,  120 => 42,  83 => 23,  65 => 26,  74 => 26,  160 => 55,  157 => 41,  134 => 41,  127 => 42,  113 => 38,  104 => 18,  100 => 41,  84 => 16,  70 => 20,  52 => 17,  34 => 52,  289 => 74,  286 => 80,  280 => 16,  275 => 15,  272 => 14,  266 => 74,  261 => 102,  251 => 67,  248 => 98,  233 => 62,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 54,  190 => 84,  185 => 82,  175 => 43,  155 => 51,  152 => 38,  118 => 28,  97 => 39,  90 => 27,  81 => 26,  23 => 3,  150 => 101,  126 => 40,  110 => 25,  77 => 25,  37 => 53,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 132,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 115,  379 => 119,  374 => 114,  368 => 112,  365 => 179,  362 => 178,  360 => 126,  355 => 105,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 83,  285 => 114,  283 => 79,  278 => 86,  268 => 106,  264 => 84,  258 => 10,  252 => 80,  247 => 66,  241 => 94,  229 => 73,  220 => 57,  214 => 69,  177 => 66,  169 => 69,  140 => 97,  132 => 43,  128 => 47,  111 => 34,  107 => 24,  61 => 23,  273 => 108,  269 => 75,  254 => 7,  246 => 90,  243 => 88,  240 => 64,  238 => 57,  235 => 63,  230 => 61,  227 => 96,  224 => 51,  221 => 86,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 186,  143 => 98,  135 => 55,  131 => 58,  119 => 93,  108 => 52,  102 => 42,  71 => 55,  67 => 184,  63 => 22,  59 => 164,  47 => 18,  98 => 21,  93 => 89,  88 => 24,  78 => 31,  40 => 9,  38 => 7,  43 => 14,  28 => 5,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 188,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 49,  136 => 49,  123 => 30,  121 => 29,  117 => 50,  115 => 27,  105 => 40,  91 => 38,  69 => 24,  62 => 165,  49 => 111,  101 => 22,  94 => 16,  89 => 33,  85 => 31,  79 => 28,  75 => 30,  68 => 30,  56 => 21,  50 => 19,  24 => 11,  32 => 21,  87 => 17,  72 => 198,  66 => 23,  55 => 18,  46 => 9,  41 => 13,  44 => 17,  35 => 22,  27 => 16,  25 => 12,  21 => 2,  31 => 4,  29 => 11,  26 => 14,  22 => 11,  19 => 2,  209 => 80,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 84,  182 => 66,  176 => 64,  173 => 42,  168 => 63,  164 => 59,  162 => 69,  154 => 103,  149 => 36,  147 => 52,  144 => 33,  141 => 51,  133 => 49,  130 => 40,  125 => 46,  122 => 45,  116 => 92,  112 => 26,  109 => 19,  106 => 44,  103 => 32,  99 => 30,  95 => 20,  92 => 19,  86 => 36,  82 => 33,  80 => 84,  73 => 24,  64 => 183,  60 => 22,  57 => 154,  54 => 153,  51 => 18,  48 => 10,  45 => 15,  42 => 13,  39 => 12,  36 => 14,  33 => 13,  30 => 17,);
    }
}
