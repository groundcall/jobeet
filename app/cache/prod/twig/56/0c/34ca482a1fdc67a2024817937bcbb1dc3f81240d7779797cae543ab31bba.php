<?php

/* IbwJobeetBundle:AffiliateAdmin:list__action_activate.html.twig */
class __TwigTemplate_560c34ca482a1fdc67a2024817937bcbb1dc3f81240d7779797cae543ab31bba extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "activate"), "method"))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "activate", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\" class=\"btn edit_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_activate", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activate", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:AffiliateAdmin:list__action_activate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  70 => 25,  100 => 28,  81 => 21,  76 => 28,  277 => 114,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  152 => 58,  110 => 34,  84 => 23,  65 => 16,  52 => 17,  113 => 35,  74 => 20,  146 => 45,  129 => 43,  207 => 11,  185 => 90,  180 => 88,  172 => 66,  167 => 81,  157 => 51,  153 => 49,  137 => 66,  134 => 65,  118 => 60,  96 => 27,  58 => 23,  23 => 3,  148 => 57,  124 => 45,  120 => 44,  104 => 37,  83 => 24,  77 => 22,  37 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 13,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  111 => 33,  107 => 36,  61 => 23,  273 => 96,  269 => 109,  254 => 92,  246 => 90,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 74,  221 => 73,  219 => 76,  217 => 14,  208 => 68,  204 => 80,  179 => 70,  159 => 75,  143 => 56,  135 => 51,  131 => 49,  119 => 37,  108 => 38,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 13,  47 => 10,  98 => 28,  93 => 26,  88 => 6,  78 => 21,  40 => 8,  38 => 9,  43 => 9,  28 => 5,  201 => 92,  196 => 5,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 44,  138 => 54,  136 => 51,  123 => 40,  121 => 46,  117 => 44,  115 => 42,  105 => 40,  91 => 25,  69 => 17,  62 => 14,  49 => 10,  101 => 32,  94 => 28,  89 => 25,  85 => 31,  79 => 23,  75 => 20,  68 => 16,  56 => 12,  50 => 9,  24 => 3,  32 => 5,  87 => 32,  72 => 26,  66 => 18,  55 => 14,  46 => 9,  41 => 5,  44 => 12,  35 => 6,  27 => 3,  25 => 6,  21 => 2,  31 => 4,  29 => 4,  26 => 6,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 6,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 54,  162 => 53,  154 => 58,  149 => 51,  147 => 56,  144 => 68,  141 => 67,  133 => 55,  130 => 41,  125 => 38,  122 => 61,  116 => 41,  112 => 43,  109 => 34,  106 => 40,  103 => 39,  99 => 35,  95 => 27,  92 => 27,  86 => 25,  82 => 30,  80 => 23,  73 => 19,  64 => 17,  60 => 14,  57 => 13,  54 => 9,  51 => 14,  48 => 16,  45 => 15,  42 => 7,  39 => 9,  36 => 6,  33 => 9,  30 => 3,);
    }
}
