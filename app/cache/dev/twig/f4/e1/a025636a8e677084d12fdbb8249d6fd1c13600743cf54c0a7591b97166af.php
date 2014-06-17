<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_f4e1a025636a8e677084d12fdbb8249d6fd1c13600743cf54c0a7591b97166af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1056 => 293,  1053 => 292,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  950 => 250,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  860 => 211,  846 => 205,  841 => 203,  833 => 199,  825 => 196,  817 => 192,  814 => 191,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  767 => 170,  756 => 165,  753 => 164,  739 => 156,  729 => 155,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  697 => 141,  695 => 139,  689 => 137,  662 => 125,  614 => 111,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  515 => 85,  512 => 84,  503 => 81,  493 => 78,  490 => 77,  433 => 60,  428 => 59,  426 => 58,  405 => 49,  390 => 43,  311 => 14,  245 => 335,  1077 => 305,  1073 => 656,  1069 => 654,  1064 => 298,  1055 => 648,  1051 => 291,  1048 => 290,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 266,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 257,  967 => 256,  963 => 604,  959 => 602,  955 => 252,  947 => 249,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 236,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 212,  848 => 548,  844 => 204,  838 => 544,  830 => 198,  828 => 197,  824 => 537,  815 => 531,  812 => 190,  800 => 523,  790 => 519,  770 => 507,  764 => 169,  754 => 499,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 154,  718 => 482,  705 => 480,  696 => 140,  692 => 474,  676 => 467,  664 => 463,  646 => 451,  640 => 119,  636 => 446,  628 => 444,  616 => 440,  591 => 436,  578 => 432,  574 => 431,  559 => 427,  551 => 424,  546 => 423,  534 => 418,  449 => 198,  446 => 197,  441 => 196,  373 => 156,  226 => 84,  359 => 123,  356 => 122,  249 => 181,  380 => 160,  363 => 32,  345 => 147,  340 => 145,  328 => 113,  290 => 5,  259 => 103,  810 => 529,  792 => 488,  788 => 518,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  702 => 479,  690 => 469,  686 => 472,  682 => 470,  679 => 466,  634 => 456,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  549 => 411,  532 => 410,  353 => 121,  222 => 297,  215 => 280,  191 => 246,  161 => 202,  694 => 138,  685 => 406,  654 => 123,  647 => 382,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 421,  538 => 319,  526 => 310,  486 => 292,  466 => 280,  456 => 68,  452 => 272,  445 => 267,  429 => 188,  366 => 33,  361 => 146,  331 => 140,  272 => 158,  267 => 101,  537 => 178,  531 => 312,  520 => 170,  516 => 169,  496 => 79,  479 => 153,  475 => 152,  421 => 126,  414 => 52,  408 => 50,  403 => 48,  375 => 106,  372 => 105,  348 => 140,  325 => 129,  313 => 15,  306 => 286,  303 => 122,  292 => 81,  280 => 194,  347 => 119,  338 => 135,  319 => 92,  262 => 188,  257 => 149,  239 => 97,  213 => 78,  253 => 342,  212 => 279,  210 => 270,  202 => 266,  12 => 34,  114 => 111,  160 => 58,  127 => 35,  389 => 160,  383 => 224,  377 => 37,  354 => 102,  349 => 90,  342 => 23,  335 => 21,  332 => 20,  324 => 112,  315 => 125,  302 => 125,  299 => 8,  293 => 6,  287 => 68,  282 => 66,  276 => 393,  263 => 365,  234 => 90,  231 => 47,  609 => 362,  598 => 107,  594 => 187,  586 => 184,  581 => 345,  573 => 179,  567 => 414,  558 => 172,  554 => 171,  545 => 169,  541 => 180,  529 => 92,  524 => 90,  517 => 404,  511 => 167,  492 => 295,  481 => 290,  478 => 74,  458 => 107,  447 => 102,  442 => 62,  439 => 195,  424 => 254,  418 => 113,  415 => 180,  401 => 172,  396 => 234,  394 => 168,  388 => 42,  382 => 131,  351 => 141,  334 => 141,  320 => 127,  307 => 128,  301 => 117,  296 => 121,  281 => 409,  275 => 105,  255 => 353,  237 => 91,  218 => 43,  206 => 71,  192 => 88,  186 => 239,  174 => 217,  155 => 55,  20 => 1,  170 => 56,  126 => 147,  710 => 149,  699 => 142,  693 => 205,  683 => 135,  678 => 133,  666 => 126,  663 => 393,  660 => 464,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 434,  582 => 176,  565 => 430,  548 => 184,  536 => 419,  530 => 417,  527 => 91,  525 => 172,  522 => 406,  513 => 168,  507 => 157,  502 => 164,  499 => 163,  495 => 138,  489 => 157,  483 => 154,  477 => 127,  464 => 71,  462 => 202,  459 => 69,  450 => 64,  422 => 184,  420 => 249,  406 => 123,  400 => 47,  397 => 119,  395 => 118,  391 => 133,  385 => 41,  358 => 151,  346 => 196,  344 => 24,  339 => 100,  336 => 99,  333 => 115,  329 => 131,  326 => 138,  323 => 128,  321 => 135,  318 => 122,  316 => 16,  308 => 13,  288 => 4,  286 => 112,  271 => 374,  251 => 182,  244 => 65,  233 => 304,  225 => 298,  197 => 249,  194 => 248,  175 => 58,  90 => 27,  857 => 210,  854 => 552,  849 => 206,  845 => 266,  839 => 263,  836 => 543,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 528,  805 => 252,  802 => 251,  796 => 183,  794 => 248,  791 => 247,  785 => 178,  783 => 177,  780 => 176,  774 => 509,  772 => 172,  769 => 171,  766 => 238,  762 => 504,  757 => 218,  751 => 163,  748 => 215,  745 => 493,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 473,  704 => 210,  701 => 209,  698 => 477,  680 => 134,  677 => 465,  675 => 132,  671 => 465,  668 => 464,  665 => 194,  661 => 191,  658 => 124,  655 => 457,  651 => 280,  649 => 122,  644 => 270,  642 => 449,  638 => 118,  635 => 117,  629 => 454,  626 => 443,  624 => 231,  619 => 113,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 439,  599 => 355,  596 => 106,  593 => 105,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 429,  557 => 96,  553 => 425,  550 => 94,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 307,  514 => 415,  509 => 83,  506 => 166,  504 => 302,  501 => 80,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 73,  467 => 72,  460 => 136,  451 => 103,  448 => 139,  443 => 261,  431 => 189,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 116,  392 => 104,  386 => 159,  378 => 157,  371 => 35,  367 => 155,  357 => 125,  352 => 91,  350 => 26,  343 => 146,  330 => 105,  327 => 126,  317 => 86,  310 => 89,  304 => 174,  300 => 121,  297 => 200,  291 => 169,  289 => 196,  284 => 106,  279 => 104,  274 => 96,  270 => 102,  266 => 366,  256 => 96,  250 => 341,  242 => 140,  228 => 83,  205 => 56,  198 => 66,  181 => 232,  178 => 64,  165 => 60,  150 => 55,  97 => 63,  34 => 5,  53 => 11,  70 => 19,  100 => 36,  81 => 40,  76 => 31,  277 => 78,  265 => 105,  260 => 363,  248 => 336,  236 => 109,  232 => 89,  216 => 79,  211 => 81,  200 => 72,  195 => 54,  188 => 76,  184 => 233,  152 => 54,  110 => 38,  84 => 41,  65 => 17,  113 => 40,  146 => 181,  129 => 148,  207 => 269,  185 => 75,  180 => 70,  172 => 62,  167 => 71,  153 => 69,  137 => 59,  134 => 161,  118 => 49,  58 => 14,  23 => 12,  148 => 64,  124 => 132,  104 => 90,  77 => 25,  480 => 75,  474 => 285,  469 => 158,  461 => 70,  457 => 135,  453 => 199,  444 => 149,  440 => 131,  437 => 61,  435 => 258,  430 => 130,  427 => 129,  423 => 57,  413 => 141,  409 => 98,  407 => 138,  402 => 130,  398 => 129,  393 => 114,  387 => 164,  384 => 130,  381 => 108,  379 => 126,  374 => 36,  368 => 34,  365 => 125,  362 => 124,  360 => 122,  355 => 27,  341 => 117,  337 => 22,  322 => 101,  314 => 85,  312 => 124,  309 => 129,  305 => 108,  298 => 120,  294 => 83,  285 => 3,  283 => 115,  278 => 408,  268 => 373,  264 => 2,  258 => 354,  252 => 70,  247 => 66,  241 => 90,  229 => 85,  220 => 290,  214 => 99,  177 => 69,  169 => 210,  140 => 53,  132 => 58,  128 => 42,  107 => 37,  61 => 2,  273 => 392,  269 => 107,  254 => 102,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 103,  221 => 80,  219 => 129,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 48,  135 => 46,  119 => 117,  102 => 30,  71 => 19,  67 => 18,  63 => 18,  59 => 13,  93 => 28,  88 => 30,  78 => 24,  38 => 7,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 216,  166 => 209,  163 => 53,  158 => 80,  156 => 195,  151 => 188,  142 => 61,  138 => 56,  136 => 168,  121 => 131,  117 => 37,  105 => 34,  91 => 56,  62 => 16,  49 => 12,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 30,  56 => 12,  24 => 3,  87 => 26,  46 => 10,  44 => 8,  27 => 3,  25 => 12,  21 => 2,  31 => 4,  26 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 13,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 58,  145 => 74,  139 => 169,  131 => 160,  123 => 42,  120 => 38,  115 => 40,  111 => 110,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 33,  74 => 22,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 5,  29 => 3,  209 => 96,  203 => 73,  199 => 265,  193 => 33,  189 => 240,  187 => 87,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 54,  144 => 176,  141 => 175,  133 => 45,  130 => 46,  125 => 51,  122 => 44,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 46,  99 => 68,  95 => 27,  92 => 31,  86 => 46,  82 => 26,  80 => 24,  73 => 23,  64 => 3,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 10,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
