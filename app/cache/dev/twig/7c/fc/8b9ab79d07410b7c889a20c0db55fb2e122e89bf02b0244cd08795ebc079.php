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
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
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
        return array (  153 => 62,  124 => 52,  53 => 24,  76 => 24,  58 => 14,  277 => 109,  263 => 103,  257 => 101,  253 => 100,  237 => 93,  232 => 91,  225 => 87,  216 => 84,  205 => 79,  200 => 77,  184 => 70,  161 => 59,  129 => 45,  65 => 26,  160 => 55,  134 => 41,  127 => 42,  113 => 38,  104 => 35,  100 => 41,  84 => 23,  70 => 20,  34 => 18,  289 => 75,  286 => 74,  280 => 16,  275 => 15,  272 => 14,  266 => 12,  261 => 102,  251 => 6,  248 => 98,  233 => 97,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 88,  190 => 84,  185 => 82,  175 => 74,  155 => 51,  152 => 56,  118 => 55,  97 => 39,  90 => 28,  81 => 38,  23 => 3,  150 => 57,  126 => 40,  110 => 46,  77 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 114,  283 => 88,  278 => 86,  268 => 106,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 66,  169 => 69,  140 => 44,  132 => 43,  128 => 47,  107 => 33,  61 => 27,  273 => 108,  269 => 94,  254 => 7,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 86,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 68,  143 => 63,  135 => 55,  119 => 37,  102 => 42,  71 => 29,  67 => 31,  63 => 18,  59 => 17,  93 => 28,  88 => 24,  78 => 31,  38 => 19,  28 => 5,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 68,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 49,  136 => 49,  121 => 51,  117 => 50,  105 => 40,  91 => 38,  62 => 25,  49 => 10,  94 => 39,  89 => 37,  85 => 24,  75 => 30,  68 => 20,  56 => 10,  24 => 13,  87 => 25,  46 => 9,  44 => 21,  27 => 3,  25 => 5,  21 => 2,  31 => 4,  26 => 14,  19 => 11,  79 => 18,  72 => 21,  69 => 32,  47 => 21,  40 => 9,  37 => 5,  22 => 12,  246 => 90,  157 => 64,  145 => 59,  139 => 57,  131 => 58,  123 => 39,  120 => 42,  115 => 35,  111 => 34,  108 => 52,  101 => 35,  98 => 28,  96 => 28,  83 => 23,  74 => 19,  66 => 17,  55 => 25,  52 => 15,  50 => 22,  43 => 8,  41 => 20,  35 => 6,  32 => 5,  29 => 15,  209 => 80,  203 => 78,  199 => 67,  193 => 73,  189 => 72,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 63,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 52,  144 => 51,  141 => 51,  133 => 49,  130 => 40,  125 => 46,  122 => 45,  116 => 44,  112 => 47,  109 => 37,  106 => 44,  103 => 32,  99 => 28,  95 => 27,  92 => 38,  86 => 36,  82 => 33,  80 => 22,  73 => 19,  64 => 16,  60 => 24,  57 => 23,  54 => 9,  51 => 11,  48 => 10,  45 => 6,  42 => 10,  39 => 7,  36 => 19,  33 => 4,  30 => 15,);
    }
}
