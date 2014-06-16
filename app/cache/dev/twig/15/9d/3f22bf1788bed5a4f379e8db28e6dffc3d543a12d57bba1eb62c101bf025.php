<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_159d3f22bf1788bed5a4f379e8db28e6dffc3d543a12d57bba1eb62c101bf025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li>
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "            <li>
                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        // line 29
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 178,  531 => 175,  520 => 170,  516 => 169,  496 => 161,  479 => 153,  475 => 152,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  375 => 106,  372 => 105,  348 => 100,  325 => 93,  313 => 90,  306 => 141,  303 => 140,  292 => 81,  280 => 131,  347 => 134,  338 => 130,  319 => 92,  262 => 105,  257 => 103,  239 => 97,  213 => 82,  134 => 45,  253 => 1,  212 => 74,  210 => 73,  202 => 77,  185 => 86,  167 => 48,  137 => 46,  12 => 34,  114 => 44,  160 => 70,  127 => 32,  389 => 103,  383 => 101,  377 => 99,  354 => 102,  349 => 90,  342 => 97,  335 => 86,  332 => 85,  324 => 82,  315 => 123,  302 => 84,  299 => 83,  293 => 113,  287 => 68,  282 => 66,  276 => 64,  263 => 125,  234 => 48,  231 => 47,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 180,  529 => 164,  524 => 162,  517 => 161,  511 => 167,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 128,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 112,  382 => 127,  351 => 135,  334 => 120,  320 => 115,  307 => 82,  301 => 117,  296 => 82,  281 => 110,  275 => 73,  255 => 74,  237 => 70,  218 => 43,  206 => 71,  192 => 88,  186 => 82,  174 => 60,  155 => 53,  148 => 60,  20 => 11,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 184,  536 => 166,  530 => 168,  527 => 167,  525 => 172,  522 => 165,  513 => 168,  507 => 157,  502 => 164,  499 => 163,  495 => 138,  489 => 157,  483 => 154,  477 => 127,  464 => 147,  462 => 146,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 113,  385 => 116,  358 => 139,  346 => 99,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 83,  323 => 125,  321 => 91,  318 => 145,  316 => 89,  308 => 88,  288 => 81,  286 => 133,  271 => 108,  251 => 101,  244 => 65,  233 => 81,  225 => 87,  197 => 90,  194 => 87,  175 => 53,  118 => 49,  84 => 39,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 186,  550 => 185,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 166,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 139,  443 => 137,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 116,  392 => 104,  386 => 111,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 132,  330 => 105,  327 => 126,  317 => 86,  310 => 89,  304 => 81,  300 => 139,  297 => 77,  291 => 75,  289 => 112,  284 => 67,  279 => 65,  274 => 129,  270 => 4,  266 => 74,  256 => 121,  250 => 60,  242 => 113,  228 => 68,  205 => 56,  198 => 66,  181 => 29,  178 => 45,  146 => 49,  153 => 72,  110 => 77,  34 => 16,  53 => 10,  70 => 33,  100 => 23,  81 => 30,  65 => 30,  277 => 78,  265 => 126,  260 => 77,  248 => 116,  236 => 109,  232 => 93,  216 => 100,  211 => 81,  200 => 55,  195 => 54,  188 => 49,  184 => 64,  172 => 51,  152 => 63,  124 => 41,  104 => 49,  77 => 27,  190 => 74,  180 => 62,  170 => 74,  165 => 72,  113 => 44,  97 => 47,  90 => 20,  58 => 23,  23 => 18,  161 => 54,  150 => 65,  129 => 57,  126 => 42,  76 => 57,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 134,  435 => 146,  430 => 130,  427 => 129,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 108,  379 => 126,  374 => 98,  368 => 103,  365 => 141,  362 => 94,  360 => 122,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 143,  309 => 120,  305 => 87,  298 => 91,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 127,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 99,  177 => 61,  169 => 57,  140 => 53,  132 => 44,  128 => 58,  107 => 52,  61 => 27,  273 => 96,  269 => 75,  254 => 102,  243 => 98,  240 => 50,  238 => 57,  235 => 63,  230 => 106,  227 => 46,  224 => 103,  221 => 67,  219 => 101,  217 => 75,  208 => 72,  204 => 66,  179 => 72,  159 => 39,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 31,  67 => 27,  63 => 24,  59 => 23,  93 => 34,  88 => 37,  78 => 29,  38 => 17,  28 => 14,  201 => 65,  196 => 65,  183 => 37,  171 => 61,  166 => 71,  163 => 45,  158 => 75,  156 => 68,  151 => 36,  142 => 58,  138 => 36,  136 => 60,  121 => 51,  117 => 51,  105 => 39,  91 => 34,  62 => 29,  49 => 20,  94 => 35,  89 => 40,  85 => 30,  75 => 28,  68 => 31,  56 => 23,  24 => 13,  87 => 33,  46 => 35,  44 => 19,  27 => 13,  25 => 12,  21 => 12,  31 => 15,  26 => 13,  19 => 11,  79 => 37,  72 => 56,  69 => 24,  47 => 19,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 58,  145 => 56,  139 => 60,  131 => 55,  123 => 54,  120 => 56,  115 => 33,  111 => 30,  108 => 48,  101 => 73,  98 => 37,  96 => 40,  83 => 36,  74 => 34,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 18,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 96,  203 => 93,  199 => 67,  193 => 33,  189 => 71,  187 => 87,  182 => 80,  176 => 77,  173 => 42,  168 => 44,  164 => 59,  162 => 55,  154 => 40,  149 => 50,  147 => 69,  144 => 62,  141 => 67,  133 => 51,  130 => 57,  125 => 46,  122 => 45,  116 => 45,  112 => 49,  109 => 40,  106 => 44,  103 => 46,  99 => 26,  95 => 43,  92 => 45,  86 => 64,  82 => 28,  80 => 41,  73 => 29,  64 => 26,  60 => 25,  57 => 22,  54 => 18,  51 => 24,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 15,);
    }
}