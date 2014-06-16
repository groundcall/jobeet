<?php

/* IbwJobeetBundle:Job:show.html.twig */
class __TwigTemplate_fd5153c9439aa2ffeac2a17a9b5fcc70689ac95cc71459c393fcaca098292126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "token"), "method")) {
            // line 14
            echo "        ";
            $this->env->loadTemplate("IbwJobeetBundle:Job:admin.html.twig")->display(array_merge($context, array("job" => (isset($context["entity"]) ? $context["entity"] : null))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    <div id=\"job\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
        echo "</h1>
        <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location"), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
        echo "
            <small> - ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type"), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 25
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo")) {
            // line 26
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo"), "html", null, true);
            echo "\"
                         alt=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 33
        echo "
        <div class=\"description\">
            ";
        // line 35
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description"), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply"), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdat"), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

        ";
        // line 51
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  96 => 27,  81 => 21,  65 => 15,  277 => 114,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  184 => 72,  172 => 66,  124 => 45,  104 => 29,  77 => 22,  213 => 72,  210 => 71,  206 => 14,  188 => 73,  185 => 5,  167 => 81,  152 => 58,  148 => 69,  113 => 58,  37 => 7,  23 => 4,  161 => 54,  150 => 49,  139 => 66,  129 => 43,  126 => 39,  120 => 44,  83 => 24,  76 => 19,  74 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 56,  140 => 52,  132 => 64,  128 => 49,  111 => 33,  107 => 36,  61 => 13,  273 => 96,  269 => 109,  254 => 92,  246 => 90,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 53,  143 => 45,  135 => 51,  131 => 49,  119 => 42,  108 => 38,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 13,  47 => 10,  98 => 31,  93 => 26,  88 => 50,  78 => 21,  40 => 8,  38 => 6,  43 => 9,  28 => 3,  201 => 92,  196 => 11,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  123 => 40,  121 => 46,  117 => 59,  115 => 35,  105 => 40,  91 => 25,  69 => 20,  62 => 14,  49 => 19,  101 => 32,  94 => 28,  89 => 28,  85 => 22,  79 => 24,  75 => 17,  68 => 16,  56 => 12,  50 => 9,  24 => 3,  32 => 5,  87 => 25,  72 => 18,  66 => 18,  55 => 15,  46 => 7,  41 => 5,  44 => 12,  35 => 6,  27 => 3,  25 => 5,  21 => 2,  31 => 8,  29 => 5,  26 => 6,  22 => 1,  19 => 2,  209 => 82,  203 => 13,  199 => 67,  193 => 10,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 79,  154 => 73,  149 => 51,  147 => 56,  144 => 49,  141 => 48,  133 => 41,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 34,  103 => 33,  99 => 35,  95 => 52,  92 => 51,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 29,  60 => 12,  57 => 13,  54 => 9,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
