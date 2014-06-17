<?php

/* IbwJobeetBundle:Affiliate:email.txt.twig */
class __TwigTemplate_a694bd1732d5c6aed9be746bbac06e511249b3249c97472daf774ed898735d71 extends Twig_Template
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
        echo "Your affiliate account has been activated.
Your secret token is ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["affiliate"]) ? $context["affiliate"] : null), "html", null, true);
        echo ".
You can see the jobs list at the following addresses:
http://jobeet.local/app_dev.php/api/";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["affiliate"]) ? $context["affiliate"] : null), "html", null, true);
        echo "/jobs.xml
or http://jobeet.local/app_dev.php/api/";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["affiliate"]) ? $context["affiliate"] : null), "html", null, true);
        echo "/jobs.json
or http://jobeet.local/app_dev.php/api/";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["affiliate"]) ? $context["affiliate"] : null), "html", null, true);
        echo "/jobs.yaml";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Affiliate:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 11,  185 => 90,  180 => 88,  172 => 83,  167 => 81,  157 => 73,  153 => 71,  137 => 66,  134 => 65,  118 => 60,  96 => 52,  58 => 23,  23 => 1,  148 => 57,  124 => 45,  120 => 44,  104 => 37,  83 => 24,  77 => 22,  37 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 13,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 74,  221 => 73,  219 => 76,  217 => 14,  208 => 68,  204 => 10,  179 => 69,  159 => 75,  143 => 56,  135 => 53,  131 => 49,  119 => 42,  108 => 38,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 14,  47 => 10,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  40 => 15,  38 => 6,  43 => 9,  28 => 3,  201 => 92,  196 => 5,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  123 => 47,  121 => 46,  117 => 44,  115 => 42,  105 => 40,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  101 => 32,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 30,  56 => 12,  50 => 10,  24 => 3,  32 => 5,  87 => 25,  72 => 16,  66 => 18,  55 => 15,  46 => 7,  41 => 5,  44 => 12,  35 => 6,  27 => 4,  25 => 5,  21 => 2,  31 => 5,  29 => 5,  26 => 6,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 6,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 68,  141 => 67,  133 => 55,  130 => 41,  125 => 62,  122 => 61,  116 => 41,  112 => 56,  109 => 34,  106 => 33,  103 => 32,  99 => 53,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 22,  51 => 14,  48 => 13,  45 => 16,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}