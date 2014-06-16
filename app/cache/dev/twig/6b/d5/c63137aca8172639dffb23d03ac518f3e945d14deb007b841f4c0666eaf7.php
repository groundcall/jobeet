<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_6bd5c63137aca8172639dffb23d03ac518f3e945d14deb007b841f4c0666eaf7 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-user\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  110 => 46,  34 => 18,  53 => 24,  70 => 19,  100 => 41,  81 => 21,  65 => 26,  277 => 114,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 52,  104 => 37,  77 => 22,  190 => 74,  180 => 13,  170 => 10,  165 => 6,  113 => 67,  97 => 39,  90 => 60,  58 => 34,  23 => 3,  161 => 54,  150 => 49,  129 => 43,  126 => 39,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 69,  140 => 52,  132 => 51,  128 => 47,  107 => 36,  61 => 27,  273 => 96,  269 => 109,  254 => 92,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 72,  159 => 53,  143 => 45,  135 => 55,  119 => 42,  102 => 42,  71 => 29,  67 => 31,  63 => 17,  59 => 13,  93 => 26,  88 => 6,  78 => 31,  38 => 19,  28 => 3,  201 => 92,  196 => 90,  183 => 14,  171 => 61,  166 => 71,  163 => 68,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 49,  136 => 51,  121 => 51,  117 => 50,  105 => 40,  91 => 38,  62 => 25,  49 => 10,  94 => 39,  89 => 37,  85 => 31,  75 => 30,  68 => 16,  56 => 12,  24 => 13,  87 => 32,  46 => 9,  44 => 21,  27 => 3,  25 => 6,  21 => 2,  31 => 8,  26 => 14,  19 => 11,  79 => 24,  72 => 26,  69 => 32,  47 => 21,  40 => 8,  37 => 7,  22 => 12,  246 => 90,  157 => 64,  145 => 59,  139 => 57,  131 => 49,  123 => 40,  120 => 44,  115 => 42,  111 => 33,  108 => 38,  101 => 32,  98 => 31,  96 => 29,  83 => 24,  74 => 22,  66 => 18,  55 => 25,  52 => 17,  50 => 22,  43 => 9,  41 => 20,  35 => 6,  32 => 5,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 73,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 5,  154 => 51,  149 => 51,  147 => 52,  144 => 51,  141 => 48,  133 => 41,  130 => 41,  125 => 46,  122 => 45,  116 => 44,  112 => 47,  109 => 66,  106 => 44,  103 => 39,  99 => 35,  95 => 28,  92 => 38,  86 => 36,  82 => 33,  80 => 23,  73 => 19,  64 => 17,  60 => 24,  57 => 23,  54 => 9,  51 => 14,  48 => 16,  45 => 15,  42 => 7,  39 => 9,  36 => 19,  33 => 9,  30 => 15,);
    }
}
