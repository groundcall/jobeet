<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_2ee9ce3d81f02e133c0d594ab41578faa1832af261621d45850113def0714a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 103,  383 => 101,  377 => 99,  354 => 92,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  324 => 82,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  320 => 115,  307 => 82,  301 => 80,  296 => 77,  281 => 75,  255 => 71,  206 => 58,  195 => 54,  192 => 53,  186 => 38,  180 => 36,  174 => 47,  148 => 35,  20 => 11,  170 => 55,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 83,  323 => 116,  321 => 91,  318 => 80,  316 => 89,  308 => 88,  288 => 81,  271 => 59,  244 => 65,  194 => 53,  188 => 49,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 153,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 104,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 115,  330 => 105,  327 => 118,  317 => 86,  310 => 80,  304 => 81,  300 => 78,  297 => 77,  291 => 75,  284 => 67,  279 => 65,  274 => 77,  270 => 67,  260 => 70,  256 => 61,  250 => 60,  242 => 59,  228 => 52,  198 => 55,  181 => 29,  178 => 45,  172 => 46,  165 => 52,  146 => 47,  153 => 49,  124 => 49,  53 => 24,  76 => 29,  58 => 22,  277 => 109,  263 => 55,  257 => 101,  253 => 100,  237 => 64,  232 => 91,  225 => 58,  216 => 42,  205 => 56,  200 => 55,  184 => 47,  161 => 59,  129 => 45,  65 => 29,  160 => 59,  134 => 41,  127 => 54,  113 => 46,  104 => 42,  100 => 70,  84 => 29,  70 => 29,  34 => 16,  289 => 74,  286 => 80,  280 => 16,  275 => 73,  272 => 14,  266 => 74,  261 => 102,  251 => 67,  248 => 98,  233 => 62,  222 => 94,  218 => 43,  211 => 91,  207 => 90,  197 => 54,  190 => 84,  185 => 82,  175 => 33,  155 => 38,  152 => 63,  118 => 46,  97 => 69,  90 => 41,  81 => 34,  23 => 11,  150 => 58,  126 => 25,  110 => 41,  77 => 13,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 114,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 94,  229 => 61,  220 => 57,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 47,  107 => 40,  61 => 23,  273 => 108,  269 => 75,  254 => 7,  243 => 88,  240 => 50,  238 => 57,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 86,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  119 => 44,  102 => 39,  71 => 28,  67 => 28,  63 => 16,  59 => 26,  93 => 58,  88 => 36,  78 => 21,  38 => 14,  28 => 14,  201 => 56,  196 => 90,  183 => 37,  171 => 72,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  121 => 29,  117 => 50,  105 => 26,  91 => 39,  62 => 14,  49 => 28,  94 => 43,  89 => 17,  85 => 35,  75 => 31,  68 => 30,  56 => 25,  24 => 13,  87 => 38,  46 => 8,  44 => 19,  27 => 14,  25 => 12,  21 => 11,  31 => 15,  26 => 12,  19 => 11,  79 => 30,  72 => 19,  69 => 31,  47 => 19,  40 => 24,  37 => 18,  22 => 11,  246 => 51,  157 => 58,  145 => 56,  139 => 51,  131 => 48,  123 => 48,  120 => 48,  115 => 45,  111 => 30,  108 => 42,  101 => 45,  98 => 44,  96 => 90,  83 => 15,  74 => 29,  66 => 17,  55 => 21,  52 => 24,  50 => 23,  43 => 25,  41 => 19,  35 => 17,  32 => 15,  29 => 15,  209 => 80,  203 => 39,  199 => 67,  193 => 33,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 103,  149 => 62,  147 => 52,  144 => 33,  141 => 51,  133 => 51,  130 => 57,  125 => 46,  122 => 45,  116 => 47,  112 => 109,  109 => 45,  106 => 44,  103 => 46,  99 => 23,  95 => 40,  92 => 28,  86 => 25,  82 => 23,  80 => 14,  73 => 27,  64 => 24,  60 => 15,  57 => 14,  54 => 22,  51 => 29,  48 => 10,  45 => 26,  42 => 19,  39 => 18,  36 => 17,  33 => 15,  30 => 2,);
    }
}
