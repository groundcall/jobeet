<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_7cfc8b9ab79d07410b7c889a20c0db55fb2e122e89bf02b0244cd08795ebc079 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  139 => 57,  97 => 39,  34 => 18,  53 => 24,  70 => 25,  100 => 41,  81 => 21,  76 => 28,  277 => 114,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  152 => 58,  110 => 46,  84 => 23,  65 => 26,  52 => 17,  113 => 35,  74 => 20,  146 => 45,  129 => 43,  207 => 11,  185 => 90,  180 => 88,  172 => 66,  167 => 81,  157 => 64,  153 => 62,  137 => 66,  134 => 65,  118 => 60,  96 => 27,  58 => 23,  23 => 3,  148 => 57,  124 => 52,  120 => 44,  104 => 37,  83 => 24,  77 => 22,  37 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 13,  177 => 65,  169 => 69,  140 => 52,  132 => 40,  128 => 47,  111 => 33,  107 => 36,  61 => 27,  273 => 96,  269 => 109,  254 => 92,  246 => 90,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 74,  221 => 73,  219 => 76,  217 => 14,  208 => 68,  204 => 80,  179 => 72,  159 => 75,  143 => 56,  135 => 55,  131 => 49,  119 => 37,  108 => 38,  102 => 42,  71 => 29,  67 => 31,  63 => 17,  59 => 13,  47 => 21,  98 => 28,  93 => 26,  88 => 6,  78 => 31,  40 => 8,  38 => 19,  43 => 9,  28 => 5,  201 => 92,  196 => 5,  183 => 82,  171 => 61,  166 => 71,  163 => 68,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 49,  136 => 51,  123 => 40,  121 => 51,  117 => 50,  115 => 42,  105 => 40,  91 => 38,  69 => 32,  62 => 25,  49 => 10,  101 => 32,  94 => 39,  89 => 37,  85 => 31,  79 => 23,  75 => 30,  68 => 16,  56 => 12,  50 => 22,  24 => 13,  32 => 5,  87 => 32,  72 => 26,  66 => 18,  55 => 25,  46 => 9,  41 => 20,  44 => 21,  35 => 6,  27 => 3,  25 => 6,  21 => 2,  31 => 4,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 6,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 54,  162 => 53,  154 => 58,  149 => 51,  147 => 52,  144 => 51,  141 => 67,  133 => 55,  130 => 41,  125 => 46,  122 => 45,  116 => 44,  112 => 47,  109 => 34,  106 => 44,  103 => 39,  99 => 35,  95 => 27,  92 => 38,  86 => 36,  82 => 33,  80 => 23,  73 => 19,  64 => 17,  60 => 24,  57 => 23,  54 => 9,  51 => 14,  48 => 16,  45 => 15,  42 => 7,  39 => 9,  36 => 19,  33 => 9,  30 => 15,);
    }
}
