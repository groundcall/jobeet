<?php

/* IbwJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_03e631d941bd0e13b9e34629b6d7705258a8a0cf107019bc9c73157a74508cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Job edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ibw_job");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  81 => 21,  53 => 11,  186 => 62,  127 => 63,  90 => 24,  23 => 1,  161 => 6,  150 => 49,  129 => 40,  126 => 43,  76 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 11,  140 => 71,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 53,  143 => 45,  135 => 69,  119 => 39,  102 => 53,  71 => 17,  67 => 15,  63 => 17,  59 => 13,  93 => 50,  88 => 6,  78 => 23,  38 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 10,  163 => 62,  158 => 5,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 59,  117 => 44,  105 => 31,  91 => 27,  62 => 14,  49 => 14,  94 => 29,  89 => 28,  85 => 25,  75 => 22,  68 => 19,  56 => 12,  24 => 3,  87 => 27,  46 => 9,  44 => 4,  27 => 4,  25 => 5,  21 => 2,  31 => 4,  26 => 6,  19 => 1,  79 => 24,  72 => 16,  69 => 20,  47 => 9,  40 => 15,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 44,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 37,  108 => 36,  101 => 29,  98 => 31,  96 => 31,  83 => 22,  74 => 22,  66 => 15,  55 => 15,  52 => 21,  50 => 9,  43 => 8,  41 => 5,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 51,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 41,  130 => 41,  125 => 61,  122 => 43,  116 => 41,  112 => 56,  109 => 55,  106 => 34,  103 => 33,  99 => 32,  95 => 28,  92 => 21,  86 => 23,  82 => 22,  80 => 41,  73 => 21,  64 => 29,  60 => 16,  57 => 13,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 10,  39 => 3,  36 => 5,  33 => 4,  30 => 3,);
    }
}
