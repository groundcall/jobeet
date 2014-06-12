<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d93015a6ae2be4be6fdd87ea8cf86cb164611c34ac26ab95159b650c7da80a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 136,  401 => 135,  394 => 134,  391 => 133,  382 => 131,  377 => 129,  359 => 123,  356 => 122,  347 => 119,  338 => 116,  333 => 115,  324 => 112,  313 => 110,  262 => 93,  249 => 92,  237 => 91,  234 => 90,  207 => 76,  180 => 70,  114 => 36,  104 => 31,  389 => 160,  386 => 159,  380 => 158,  378 => 157,  371 => 127,  363 => 153,  361 => 152,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 113,  326 => 138,  321 => 135,  315 => 111,  307 => 128,  302 => 125,  296 => 121,  293 => 107,  290 => 119,  288 => 118,  281 => 98,  276 => 111,  274 => 96,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  248 => 97,  232 => 89,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  197 => 69,  194 => 68,  191 => 67,  184 => 63,  178 => 59,  175 => 58,  172 => 68,  155 => 55,  152 => 54,  134 => 39,  34 => 5,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  202 => 94,  188 => 90,  170 => 56,  165 => 83,  153 => 77,  65 => 11,  20 => 1,  367 => 155,  353 => 121,  350 => 120,  308 => 109,  306 => 286,  70 => 15,  110 => 22,  84 => 40,  97 => 41,  58 => 14,  113 => 36,  81 => 21,  53 => 15,  186 => 72,  127 => 35,  90 => 20,  23 => 1,  161 => 58,  150 => 49,  129 => 40,  126 => 43,  76 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 91,  294 => 90,  285 => 100,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 70,  214 => 69,  177 => 69,  169 => 11,  140 => 71,  132 => 51,  128 => 42,  107 => 36,  61 => 15,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 14,  159 => 57,  143 => 45,  135 => 46,  119 => 39,  102 => 24,  71 => 13,  67 => 14,  63 => 21,  59 => 16,  93 => 38,  88 => 24,  78 => 19,  38 => 7,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 61,  166 => 54,  163 => 53,  158 => 80,  156 => 66,  151 => 63,  142 => 59,  138 => 47,  136 => 71,  121 => 59,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  94 => 21,  89 => 30,  85 => 23,  75 => 18,  68 => 30,  56 => 11,  24 => 3,  87 => 41,  46 => 13,  44 => 9,  27 => 3,  25 => 35,  21 => 2,  31 => 4,  26 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 26,  47 => 8,  40 => 8,  37 => 6,  22 => 2,  246 => 96,  157 => 56,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 38,  115 => 43,  111 => 37,  108 => 33,  101 => 30,  98 => 45,  96 => 30,  83 => 35,  74 => 27,  66 => 25,  55 => 13,  52 => 12,  50 => 22,  43 => 11,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 72,  164 => 59,  162 => 57,  154 => 51,  149 => 51,  147 => 51,  144 => 42,  141 => 48,  133 => 45,  130 => 41,  125 => 41,  122 => 43,  116 => 57,  112 => 56,  109 => 27,  106 => 51,  103 => 33,  99 => 23,  95 => 27,  92 => 43,  86 => 23,  82 => 21,  80 => 29,  73 => 16,  64 => 24,  60 => 16,  57 => 39,  54 => 19,  51 => 13,  48 => 16,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
