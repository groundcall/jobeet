<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_718d0e319255f0a2aa4eaffc8b3befe9b584bfc79b964c191800007fab9827b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        echo " cms-container";
        if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "hasParent", array(), "method"))) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class"), "html", null, true);
        }
    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        echo "container";
    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "pre");
        }
        // line 23
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "children"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "post");
        }
    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : null)));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 74,  210 => 73,  202 => 68,  167 => 48,  137 => 37,  12 => 34,  114 => 44,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  324 => 82,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  320 => 115,  307 => 82,  301 => 80,  296 => 77,  281 => 75,  255 => 71,  206 => 71,  195 => 54,  192 => 64,  186 => 38,  180 => 56,  174 => 47,  148 => 35,  20 => 11,  170 => 55,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 83,  323 => 116,  321 => 91,  318 => 80,  316 => 89,  308 => 88,  288 => 81,  271 => 59,  244 => 65,  194 => 53,  188 => 49,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 153,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 104,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 115,  330 => 105,  327 => 118,  317 => 86,  310 => 80,  304 => 81,  300 => 78,  297 => 77,  291 => 75,  284 => 67,  279 => 65,  274 => 77,  270 => 4,  260 => 70,  256 => 61,  250 => 60,  242 => 59,  228 => 52,  198 => 66,  181 => 29,  178 => 45,  172 => 51,  165 => 47,  146 => 47,  153 => 49,  139 => 51,  124 => 49,  96 => 40,  53 => 23,  76 => 33,  58 => 25,  277 => 109,  263 => 55,  257 => 101,  253 => 1,  237 => 64,  232 => 91,  225 => 58,  216 => 42,  205 => 56,  200 => 55,  184 => 47,  161 => 59,  145 => 56,  129 => 59,  120 => 36,  83 => 36,  65 => 83,  74 => 24,  160 => 44,  157 => 58,  134 => 41,  127 => 54,  113 => 31,  104 => 43,  100 => 23,  84 => 16,  70 => 23,  52 => 20,  34 => 15,  289 => 74,  286 => 80,  280 => 16,  275 => 73,  272 => 14,  266 => 74,  261 => 102,  251 => 67,  248 => 98,  233 => 81,  222 => 94,  218 => 43,  211 => 91,  207 => 90,  197 => 54,  190 => 84,  185 => 59,  175 => 53,  155 => 38,  152 => 63,  118 => 49,  97 => 47,  90 => 20,  81 => 15,  23 => 12,  150 => 58,  126 => 48,  110 => 45,  77 => 27,  37 => 19,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 114,  283 => 79,  278 => 74,  268 => 3,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 94,  229 => 61,  220 => 57,  214 => 69,  177 => 54,  169 => 49,  140 => 53,  132 => 57,  128 => 47,  111 => 30,  107 => 52,  61 => 27,  273 => 108,  269 => 75,  254 => 7,  246 => 51,  243 => 83,  240 => 50,  238 => 57,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 79,  219 => 76,  217 => 75,  208 => 72,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  131 => 48,  119 => 44,  108 => 28,  102 => 43,  71 => 31,  67 => 25,  63 => 17,  59 => 27,  47 => 43,  98 => 24,  93 => 21,  88 => 37,  78 => 32,  40 => 20,  38 => 18,  43 => 20,  28 => 14,  201 => 56,  196 => 65,  183 => 37,  171 => 72,  166 => 71,  163 => 45,  158 => 67,  156 => 41,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 52,  121 => 51,  117 => 34,  115 => 33,  105 => 51,  91 => 28,  69 => 9,  62 => 82,  49 => 17,  101 => 25,  94 => 40,  89 => 43,  85 => 36,  79 => 37,  75 => 21,  68 => 30,  56 => 23,  50 => 44,  24 => 13,  32 => 14,  87 => 35,  72 => 10,  66 => 29,  55 => 79,  46 => 19,  41 => 18,  44 => 19,  35 => 15,  27 => 8,  25 => 12,  21 => 11,  31 => 14,  29 => 15,  26 => 13,  22 => 12,  19 => 11,  209 => 80,  203 => 39,  199 => 67,  193 => 33,  189 => 61,  187 => 60,  182 => 57,  176 => 64,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 40,  149 => 62,  147 => 52,  144 => 33,  141 => 51,  133 => 51,  130 => 57,  125 => 46,  122 => 45,  116 => 47,  112 => 109,  109 => 53,  106 => 44,  103 => 50,  99 => 41,  95 => 22,  92 => 32,  86 => 17,  82 => 39,  80 => 25,  73 => 32,  64 => 28,  60 => 23,  57 => 80,  54 => 25,  51 => 22,  48 => 21,  45 => 28,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 9,);
    }
}
