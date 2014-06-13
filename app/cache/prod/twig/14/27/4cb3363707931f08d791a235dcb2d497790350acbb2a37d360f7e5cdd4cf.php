<?php

/* IbwJobeetBundle:Job:index.html.twig */
class __TwigTemplate_14274cb3363707931f08d791a235dcb2d497790350acbb2a37d360f7e5cdd4cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <div class=\"category_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "html", null, true);
            echo "\">
                <div class=\"category\">
                    <div class=\"feed\">
                        <a href=\"\">Feed</a>
                    </div>
                    <h1><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</a></h1>
                </div>

               ";
            // line 19
            echo twig_include($this->env, $context, "IbwJobeetBundle:Job:list.html.twig", array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs")));
            echo "
                
                ";
            // line 21
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "morejobs")) {
                // line 22
                echo "                    <div class=\"more_jobs\">
                        and <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "morejobs"), "html", null, true);
                echo "</a>
                        more...
                    </div>
                ";
            }
            // line 27
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  84 => 27,  52 => 15,  100 => 28,  96 => 29,  81 => 21,  65 => 19,  277 => 114,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  104 => 29,  77 => 22,  53 => 11,  186 => 62,  127 => 63,  90 => 49,  37 => 5,  23 => 1,  161 => 6,  150 => 49,  139 => 44,  129 => 43,  126 => 39,  120 => 44,  83 => 24,  76 => 23,  74 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 11,  140 => 52,  132 => 51,  128 => 49,  111 => 33,  107 => 36,  61 => 17,  273 => 96,  269 => 109,  254 => 92,  246 => 90,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 53,  143 => 45,  135 => 51,  131 => 49,  119 => 42,  108 => 38,  102 => 53,  71 => 21,  67 => 15,  63 => 17,  59 => 16,  47 => 10,  98 => 31,  93 => 31,  88 => 6,  78 => 21,  40 => 8,  38 => 6,  43 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 10,  163 => 63,  158 => 5,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  123 => 40,  121 => 59,  117 => 44,  115 => 35,  105 => 54,  91 => 25,  69 => 20,  62 => 16,  49 => 10,  101 => 32,  94 => 28,  89 => 27,  85 => 22,  79 => 24,  75 => 21,  68 => 16,  56 => 12,  50 => 14,  24 => 4,  32 => 4,  87 => 28,  72 => 18,  66 => 18,  55 => 15,  46 => 9,  41 => 5,  44 => 4,  35 => 6,  27 => 3,  25 => 5,  21 => 2,  31 => 6,  29 => 3,  26 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 13,  173 => 65,  168 => 65,  164 => 59,  162 => 59,  154 => 51,  149 => 51,  147 => 56,  144 => 49,  141 => 48,  133 => 41,  130 => 41,  125 => 61,  122 => 43,  116 => 41,  112 => 56,  109 => 55,  106 => 34,  103 => 33,  99 => 35,  95 => 28,  92 => 21,  86 => 48,  82 => 22,  80 => 23,  73 => 19,  64 => 29,  60 => 13,  57 => 13,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 3,);
    }
}
