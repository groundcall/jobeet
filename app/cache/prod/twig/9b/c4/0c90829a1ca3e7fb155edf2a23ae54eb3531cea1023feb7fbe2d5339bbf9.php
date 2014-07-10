<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_9bc40c90829a1ca3e7fb155edf2a23ae54eb3531cea1023feb7fbe2d5339bbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : null)), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : null), "html", null, true);
        echo "\" class=\"input-large search-query\">
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : null)), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if ((array_key_exists("query", $context) && (!((isset($context["query"]) ? $context["query"] : null) === false)))) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row-fluid\">

            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : null))) {
                        // line 37
                        echo "                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if ((isset($context["display"]) ? $context["display"] : null)) {
                    // line 41
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if ((((isset($context["count"]) ? $context["count"] : null) % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row-fluid\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                        // line 47
                        echo "                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => (isset($context["query"]) ? $context["query"] : null), "admin_code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 173,  536 => 170,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 155,  499 => 154,  495 => 133,  489 => 131,  483 => 129,  477 => 127,  464 => 147,  462 => 146,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  326 => 94,  323 => 92,  321 => 91,  318 => 90,  316 => 89,  308 => 88,  288 => 81,  271 => 76,  244 => 65,  194 => 53,  188 => 49,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 170,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 152,  509 => 158,  506 => 149,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 143,  482 => 142,  476 => 141,  473 => 140,  470 => 149,  467 => 137,  460 => 136,  451 => 134,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 126,  399 => 124,  392 => 120,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 104,  350 => 117,  343 => 115,  330 => 105,  327 => 104,  317 => 101,  310 => 80,  304 => 86,  300 => 78,  297 => 77,  291 => 75,  284 => 72,  279 => 78,  274 => 77,  270 => 67,  260 => 70,  256 => 61,  250 => 60,  242 => 59,  228 => 52,  198 => 35,  181 => 29,  178 => 45,  172 => 22,  165 => 281,  146 => 34,  153 => 62,  139 => 59,  124 => 52,  96 => 90,  53 => 20,  76 => 27,  58 => 19,  277 => 109,  263 => 103,  257 => 101,  253 => 100,  237 => 93,  232 => 91,  225 => 58,  216 => 84,  205 => 56,  200 => 55,  184 => 47,  161 => 59,  145 => 60,  129 => 45,  120 => 47,  83 => 23,  65 => 26,  74 => 26,  160 => 55,  157 => 41,  134 => 41,  127 => 42,  113 => 38,  104 => 18,  100 => 41,  84 => 16,  70 => 20,  52 => 23,  34 => 15,  289 => 74,  286 => 80,  280 => 16,  275 => 15,  272 => 14,  266 => 74,  261 => 102,  251 => 67,  248 => 98,  233 => 62,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 54,  190 => 84,  185 => 82,  175 => 43,  155 => 51,  152 => 38,  118 => 46,  97 => 39,  90 => 34,  81 => 26,  23 => 13,  150 => 101,  126 => 55,  110 => 25,  77 => 25,  37 => 53,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 132,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 115,  379 => 119,  374 => 114,  368 => 112,  365 => 179,  362 => 178,  360 => 126,  355 => 105,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 83,  285 => 114,  283 => 79,  278 => 86,  268 => 106,  264 => 84,  258 => 10,  252 => 80,  247 => 66,  241 => 94,  229 => 73,  220 => 57,  214 => 69,  177 => 66,  169 => 69,  140 => 97,  132 => 43,  128 => 47,  111 => 43,  107 => 24,  61 => 28,  273 => 108,  269 => 75,  254 => 7,  246 => 90,  243 => 88,  240 => 64,  238 => 57,  235 => 63,  230 => 61,  227 => 96,  224 => 51,  221 => 86,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 186,  143 => 98,  135 => 55,  131 => 58,  119 => 93,  108 => 42,  102 => 42,  71 => 32,  67 => 184,  63 => 27,  59 => 164,  47 => 18,  98 => 39,  93 => 89,  88 => 37,  78 => 31,  40 => 9,  38 => 7,  43 => 14,  28 => 14,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 188,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 49,  136 => 58,  123 => 48,  121 => 29,  117 => 50,  115 => 45,  105 => 40,  91 => 38,  69 => 24,  62 => 165,  49 => 111,  101 => 40,  94 => 16,  89 => 33,  85 => 32,  79 => 35,  75 => 34,  68 => 31,  56 => 21,  50 => 19,  24 => 11,  32 => 21,  87 => 17,  72 => 198,  66 => 30,  55 => 25,  46 => 19,  41 => 13,  44 => 21,  35 => 22,  27 => 16,  25 => 12,  21 => 2,  31 => 17,  29 => 16,  26 => 14,  22 => 11,  19 => 11,  209 => 80,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 84,  182 => 66,  176 => 64,  173 => 42,  168 => 63,  164 => 59,  162 => 69,  154 => 103,  149 => 62,  147 => 52,  144 => 33,  141 => 51,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 92,  112 => 26,  109 => 19,  106 => 44,  103 => 41,  99 => 30,  95 => 20,  92 => 19,  86 => 36,  82 => 36,  80 => 84,  73 => 24,  64 => 183,  60 => 26,  57 => 154,  54 => 153,  51 => 21,  48 => 10,  45 => 15,  42 => 17,  39 => 16,  36 => 14,  33 => 13,  30 => 17,);
    }
}
