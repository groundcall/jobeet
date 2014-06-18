<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_beb26f2ac59033971b83fcbe8089f6b842f71fc0fdbd5f06cf34a5bb8a5f1b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  848 => 548,  844 => 546,  838 => 544,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  800 => 523,  790 => 519,  770 => 507,  764 => 505,  754 => 499,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  676 => 467,  664 => 463,  646 => 451,  640 => 448,  636 => 446,  628 => 444,  616 => 440,  591 => 436,  578 => 432,  574 => 431,  559 => 427,  551 => 424,  546 => 423,  534 => 418,  449 => 198,  446 => 197,  441 => 196,  373 => 156,  226 => 84,  359 => 123,  356 => 122,  249 => 181,  380 => 160,  363 => 153,  345 => 147,  340 => 145,  328 => 113,  290 => 119,  259 => 103,  810 => 529,  792 => 488,  788 => 518,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  702 => 479,  690 => 469,  686 => 472,  682 => 470,  679 => 466,  634 => 456,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  549 => 411,  532 => 410,  353 => 121,  215 => 78,  191 => 77,  694 => 470,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 421,  538 => 319,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 188,  366 => 210,  361 => 146,  331 => 140,  267 => 101,  537 => 178,  531 => 312,  520 => 170,  516 => 169,  496 => 161,  479 => 153,  475 => 152,  421 => 126,  414 => 122,  408 => 176,  403 => 136,  375 => 106,  372 => 105,  348 => 140,  325 => 129,  313 => 110,  306 => 286,  303 => 122,  292 => 81,  236 => 109,  347 => 119,  338 => 135,  319 => 92,  265 => 105,  262 => 188,  239 => 97,  213 => 78,  212 => 74,  210 => 77,  202 => 94,  167 => 71,  137 => 59,  12 => 34,  114 => 36,  389 => 160,  383 => 224,  377 => 129,  354 => 102,  349 => 90,  342 => 137,  335 => 134,  332 => 85,  324 => 112,  315 => 125,  302 => 125,  299 => 112,  293 => 198,  287 => 68,  282 => 66,  276 => 193,  234 => 90,  231 => 47,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  573 => 179,  567 => 414,  558 => 172,  554 => 171,  545 => 169,  541 => 180,  529 => 409,  524 => 162,  517 => 404,  511 => 167,  492 => 295,  481 => 290,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 195,  424 => 254,  418 => 113,  415 => 180,  401 => 172,  396 => 234,  394 => 168,  388 => 112,  382 => 131,  351 => 141,  334 => 141,  320 => 127,  307 => 128,  301 => 117,  296 => 121,  281 => 98,  255 => 101,  206 => 71,  195 => 54,  192 => 88,  186 => 72,  180 => 70,  174 => 74,  148 => 64,  20 => 1,  170 => 56,  710 => 475,  699 => 208,  693 => 205,  683 => 204,  678 => 468,  666 => 200,  663 => 393,  660 => 464,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 434,  582 => 176,  565 => 430,  548 => 184,  536 => 419,  530 => 417,  527 => 416,  525 => 172,  522 => 406,  513 => 168,  507 => 157,  502 => 164,  499 => 163,  495 => 138,  489 => 157,  483 => 154,  477 => 127,  464 => 147,  462 => 202,  459 => 145,  450 => 141,  422 => 184,  420 => 249,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 133,  385 => 116,  358 => 151,  346 => 196,  344 => 101,  339 => 100,  336 => 99,  333 => 115,  329 => 131,  326 => 138,  323 => 128,  321 => 135,  318 => 122,  316 => 121,  308 => 109,  288 => 118,  271 => 190,  244 => 65,  194 => 70,  188 => 76,  857 => 274,  854 => 552,  849 => 268,  845 => 266,  839 => 263,  836 => 543,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 528,  805 => 252,  802 => 251,  796 => 521,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 513,  774 => 509,  772 => 240,  769 => 239,  766 => 238,  762 => 504,  757 => 218,  751 => 216,  748 => 215,  745 => 493,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 473,  704 => 210,  701 => 209,  698 => 477,  680 => 403,  677 => 465,  675 => 198,  671 => 465,  668 => 464,  665 => 194,  661 => 191,  658 => 391,  655 => 457,  651 => 280,  649 => 462,  644 => 270,  642 => 449,  638 => 237,  635 => 236,  629 => 454,  626 => 443,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 439,  599 => 355,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 429,  557 => 330,  553 => 425,  550 => 326,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 307,  514 => 415,  509 => 304,  506 => 166,  504 => 302,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 139,  443 => 261,  431 => 189,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 116,  392 => 104,  386 => 159,  378 => 157,  371 => 127,  367 => 155,  357 => 125,  352 => 91,  350 => 120,  343 => 146,  330 => 105,  327 => 126,  317 => 86,  310 => 89,  304 => 174,  300 => 121,  297 => 200,  291 => 169,  284 => 106,  279 => 104,  274 => 96,  270 => 102,  260 => 98,  256 => 96,  250 => 93,  242 => 140,  228 => 83,  198 => 66,  181 => 65,  178 => 64,  172 => 62,  165 => 60,  146 => 49,  153 => 69,  124 => 31,  53 => 17,  76 => 31,  58 => 15,  277 => 78,  263 => 125,  257 => 149,  253 => 100,  237 => 91,  232 => 89,  225 => 87,  216 => 79,  205 => 56,  200 => 72,  184 => 63,  161 => 58,  129 => 57,  65 => 22,  160 => 58,  134 => 54,  127 => 35,  113 => 40,  104 => 37,  100 => 36,  84 => 24,  70 => 19,  34 => 5,  289 => 196,  286 => 112,  280 => 194,  275 => 105,  272 => 158,  266 => 74,  261 => 102,  251 => 182,  248 => 94,  233 => 87,  222 => 83,  218 => 43,  211 => 81,  207 => 75,  197 => 71,  190 => 84,  185 => 75,  175 => 58,  155 => 55,  152 => 54,  118 => 49,  97 => 63,  90 => 26,  81 => 23,  23 => 12,  150 => 55,  126 => 42,  110 => 40,  77 => 25,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 199,  444 => 149,  440 => 131,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 166,  413 => 141,  409 => 98,  407 => 138,  402 => 130,  398 => 129,  393 => 114,  387 => 164,  384 => 130,  381 => 108,  379 => 126,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 122,  355 => 143,  341 => 117,  337 => 87,  322 => 101,  314 => 85,  312 => 124,  309 => 129,  305 => 108,  298 => 120,  294 => 83,  285 => 100,  283 => 115,  278 => 106,  268 => 127,  264 => 2,  258 => 187,  252 => 70,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 69,  169 => 74,  140 => 53,  132 => 58,  128 => 42,  107 => 52,  61 => 17,  273 => 108,  269 => 107,  254 => 102,  243 => 89,  240 => 50,  238 => 139,  235 => 89,  230 => 106,  227 => 86,  224 => 103,  221 => 80,  219 => 129,  217 => 79,  208 => 76,  204 => 78,  179 => 66,  159 => 57,  143 => 48,  135 => 46,  119 => 40,  102 => 41,  71 => 13,  67 => 24,  63 => 18,  59 => 11,  93 => 27,  88 => 32,  78 => 19,  38 => 5,  28 => 6,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 36,  142 => 61,  138 => 56,  136 => 71,  121 => 50,  117 => 37,  105 => 34,  91 => 29,  62 => 21,  49 => 14,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 30,  56 => 14,  24 => 3,  87 => 33,  46 => 10,  44 => 8,  27 => 3,  25 => 12,  21 => 2,  31 => 5,  26 => 3,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 58,  145 => 74,  139 => 60,  131 => 48,  123 => 42,  120 => 38,  115 => 50,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 35,  83 => 33,  74 => 34,  66 => 25,  55 => 16,  52 => 12,  50 => 16,  43 => 9,  41 => 8,  35 => 4,  32 => 5,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 33,  189 => 66,  187 => 87,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 67,  149 => 50,  147 => 54,  144 => 42,  141 => 51,  133 => 45,  130 => 46,  125 => 51,  122 => 44,  116 => 39,  112 => 49,  109 => 27,  106 => 51,  103 => 46,  99 => 31,  95 => 27,  92 => 43,  86 => 64,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 10,  45 => 14,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}
