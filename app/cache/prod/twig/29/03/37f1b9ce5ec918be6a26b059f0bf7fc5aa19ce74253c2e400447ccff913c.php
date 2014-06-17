<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_290337f1b9ce5ec918be6a26b059f0bf7fc5aa19ce74253c2e400447ccff913c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 134,  338 => 130,  319 => 124,  262 => 105,  257 => 103,  239 => 97,  213 => 82,  253 => 1,  212 => 74,  210 => 73,  202 => 77,  12 => 34,  114 => 44,  160 => 44,  127 => 54,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  324 => 82,  315 => 123,  302 => 73,  299 => 116,  293 => 113,  287 => 68,  282 => 66,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  320 => 115,  307 => 82,  301 => 117,  296 => 77,  281 => 110,  275 => 73,  255 => 71,  237 => 64,  218 => 43,  206 => 71,  192 => 64,  186 => 38,  174 => 67,  155 => 38,  20 => 11,  170 => 55,  126 => 48,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 139,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 83,  323 => 125,  321 => 91,  318 => 80,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  271 => 108,  251 => 101,  244 => 65,  233 => 81,  225 => 87,  197 => 74,  194 => 53,  175 => 53,  90 => 20,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 153,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 104,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 132,  330 => 105,  327 => 126,  317 => 86,  310 => 80,  304 => 81,  300 => 78,  297 => 77,  291 => 75,  289 => 112,  284 => 67,  279 => 65,  274 => 77,  270 => 4,  266 => 74,  256 => 61,  250 => 60,  242 => 59,  228 => 88,  205 => 56,  198 => 66,  181 => 29,  178 => 45,  165 => 64,  150 => 58,  145 => 56,  139 => 51,  97 => 47,  34 => 4,  53 => 10,  70 => 23,  100 => 23,  81 => 15,  76 => 33,  277 => 109,  265 => 106,  260 => 104,  248 => 100,  236 => 94,  232 => 93,  216 => 42,  211 => 81,  200 => 55,  195 => 54,  188 => 49,  184 => 47,  152 => 63,  110 => 45,  84 => 16,  65 => 83,  52 => 43,  113 => 44,  74 => 23,  146 => 47,  129 => 59,  207 => 11,  185 => 59,  180 => 56,  172 => 51,  167 => 48,  157 => 58,  153 => 49,  137 => 37,  134 => 56,  118 => 49,  96 => 40,  58 => 25,  23 => 12,  148 => 60,  124 => 49,  120 => 36,  104 => 43,  83 => 36,  77 => 27,  37 => 19,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 98,  368 => 96,  365 => 141,  362 => 94,  360 => 122,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 120,  305 => 119,  298 => 91,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 107,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 13,  177 => 54,  169 => 66,  140 => 53,  132 => 57,  128 => 47,  111 => 30,  107 => 52,  61 => 27,  273 => 96,  269 => 75,  254 => 102,  246 => 99,  243 => 98,  240 => 50,  238 => 57,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 79,  219 => 84,  217 => 14,  208 => 72,  204 => 78,  179 => 72,  159 => 39,  143 => 59,  135 => 45,  131 => 55,  119 => 44,  108 => 28,  102 => 43,  71 => 31,  67 => 19,  63 => 17,  59 => 23,  47 => 43,  98 => 37,  93 => 21,  88 => 37,  78 => 32,  40 => 20,  38 => 17,  43 => 20,  28 => 13,  201 => 56,  196 => 65,  183 => 37,  171 => 61,  166 => 71,  163 => 45,  158 => 62,  156 => 41,  151 => 36,  142 => 58,  138 => 57,  136 => 155,  123 => 52,  121 => 51,  117 => 34,  115 => 33,  105 => 39,  91 => 34,  69 => 9,  62 => 24,  49 => 9,  101 => 25,  94 => 35,  89 => 43,  85 => 30,  79 => 37,  75 => 21,  68 => 30,  56 => 23,  50 => 44,  24 => 13,  32 => 12,  87 => 35,  72 => 10,  66 => 29,  55 => 22,  46 => 19,  41 => 18,  44 => 19,  35 => 15,  27 => 13,  25 => 12,  21 => 11,  31 => 14,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  209 => 82,  203 => 39,  199 => 6,  193 => 33,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 42,  168 => 44,  164 => 54,  162 => 40,  154 => 40,  149 => 62,  147 => 52,  144 => 33,  141 => 67,  133 => 51,  130 => 57,  125 => 46,  122 => 45,  116 => 45,  112 => 109,  109 => 53,  106 => 44,  103 => 50,  99 => 41,  95 => 22,  92 => 32,  86 => 17,  82 => 28,  80 => 25,  73 => 32,  64 => 28,  60 => 15,  57 => 80,  54 => 25,  51 => 22,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 9,);
    }
}
