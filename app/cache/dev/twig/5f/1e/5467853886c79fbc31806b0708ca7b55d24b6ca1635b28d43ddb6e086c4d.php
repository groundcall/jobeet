<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_5f1e5467853886c79fbc31806b0708ca7b55d24b6ca1635b28d43ddb6e086c4d extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 328,  222 => 81,  215 => 78,  191 => 69,  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 255,  366 => 210,  361 => 208,  331 => 187,  272 => 158,  267 => 156,  537 => 178,  531 => 312,  520 => 170,  516 => 169,  496 => 161,  479 => 153,  475 => 152,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  375 => 106,  372 => 105,  348 => 100,  325 => 93,  313 => 90,  306 => 286,  303 => 140,  292 => 81,  280 => 131,  347 => 134,  338 => 130,  319 => 92,  262 => 105,  257 => 149,  239 => 97,  213 => 126,  134 => 45,  253 => 95,  212 => 74,  210 => 75,  202 => 77,  185 => 68,  167 => 48,  137 => 59,  12 => 34,  114 => 71,  160 => 58,  127 => 56,  389 => 103,  383 => 224,  377 => 99,  354 => 102,  349 => 90,  342 => 97,  335 => 188,  332 => 85,  324 => 82,  315 => 123,  302 => 84,  299 => 112,  293 => 109,  287 => 68,  282 => 66,  276 => 64,  263 => 125,  234 => 48,  231 => 47,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  545 => 169,  541 => 180,  529 => 164,  524 => 162,  517 => 161,  511 => 167,  492 => 295,  481 => 290,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 260,  424 => 254,  418 => 113,  415 => 247,  401 => 86,  396 => 234,  394 => 136,  388 => 112,  382 => 127,  351 => 135,  334 => 120,  320 => 115,  307 => 82,  301 => 117,  296 => 82,  281 => 105,  275 => 103,  255 => 74,  237 => 86,  218 => 43,  206 => 71,  192 => 88,  186 => 83,  174 => 64,  155 => 53,  148 => 64,  20 => 1,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 184,  536 => 166,  530 => 168,  527 => 167,  525 => 172,  522 => 165,  513 => 168,  507 => 157,  502 => 164,  499 => 163,  495 => 138,  489 => 157,  483 => 154,  477 => 127,  464 => 147,  462 => 146,  459 => 145,  450 => 141,  422 => 250,  420 => 249,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 113,  385 => 116,  358 => 139,  346 => 196,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 185,  323 => 125,  321 => 123,  318 => 122,  316 => 121,  308 => 287,  288 => 107,  286 => 133,  271 => 108,  251 => 101,  244 => 65,  233 => 81,  225 => 87,  197 => 70,  194 => 88,  175 => 77,  118 => 49,  84 => 27,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 355,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 186,  550 => 326,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 307,  514 => 306,  509 => 304,  506 => 166,  504 => 302,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 139,  443 => 261,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 116,  392 => 104,  386 => 111,  378 => 117,  371 => 113,  367 => 339,  357 => 125,  352 => 91,  350 => 327,  343 => 132,  330 => 105,  327 => 126,  317 => 86,  310 => 89,  304 => 174,  300 => 139,  297 => 77,  291 => 169,  289 => 112,  284 => 106,  279 => 104,  274 => 129,  270 => 4,  266 => 74,  256 => 96,  250 => 93,  242 => 140,  228 => 83,  205 => 56,  198 => 66,  181 => 80,  178 => 45,  146 => 49,  153 => 56,  110 => 40,  34 => 16,  53 => 15,  70 => 26,  100 => 36,  81 => 25,  65 => 11,  277 => 78,  265 => 99,  260 => 98,  248 => 116,  236 => 109,  232 => 84,  216 => 100,  211 => 81,  200 => 55,  195 => 54,  188 => 49,  184 => 64,  172 => 51,  152 => 92,  124 => 31,  104 => 67,  77 => 27,  190 => 74,  180 => 62,  170 => 74,  165 => 59,  113 => 41,  97 => 63,  90 => 37,  58 => 18,  23 => 12,  161 => 71,  150 => 55,  129 => 57,  126 => 42,  76 => 28,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 166,  413 => 100,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 108,  379 => 126,  374 => 98,  368 => 103,  365 => 141,  362 => 94,  360 => 122,  355 => 329,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 83,  285 => 111,  283 => 166,  278 => 74,  268 => 127,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 80,  214 => 99,  177 => 61,  169 => 74,  140 => 53,  132 => 58,  128 => 58,  107 => 52,  61 => 23,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 50,  238 => 139,  235 => 63,  230 => 106,  227 => 134,  224 => 103,  221 => 67,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  119 => 43,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 22,  93 => 38,  88 => 60,  78 => 18,  38 => 6,  28 => 3,  201 => 72,  196 => 65,  183 => 37,  171 => 63,  166 => 100,  163 => 45,  158 => 75,  156 => 57,  151 => 36,  142 => 61,  138 => 50,  136 => 60,  121 => 53,  117 => 51,  105 => 47,  91 => 35,  62 => 24,  49 => 20,  94 => 39,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 24,  24 => 3,  87 => 32,  46 => 12,  44 => 11,  27 => 7,  25 => 12,  21 => 2,  31 => 8,  26 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 21,  40 => 8,  37 => 6,  22 => 2,  246 => 99,  157 => 58,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 56,  115 => 50,  111 => 30,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 34,  66 => 25,  55 => 15,  52 => 21,  50 => 15,  43 => 20,  41 => 18,  35 => 9,  32 => 4,  29 => 3,  209 => 96,  203 => 122,  199 => 67,  193 => 33,  189 => 71,  187 => 87,  182 => 80,  176 => 65,  173 => 42,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 67,  133 => 51,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 69,  106 => 44,  103 => 46,  99 => 26,  95 => 39,  92 => 28,  86 => 64,  82 => 33,  80 => 29,  73 => 29,  64 => 24,  60 => 22,  57 => 39,  54 => 19,  51 => 37,  48 => 16,  45 => 19,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
