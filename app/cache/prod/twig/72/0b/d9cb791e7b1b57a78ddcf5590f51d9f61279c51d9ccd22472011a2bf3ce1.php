<?php

/* IbwJobeetBundle:Category:show.html.twig */
class __TwigTemplate_720bd9cb791e7b1b57a78ddcf5590f51d9f61279c51d9ccd22472011a2bf3ce1 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Jobs in the %category% category", array("%category%" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name")), "messages");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "_format" => "atom")), "html", null, true);
        echo "\">Feed</a>
        </div>   
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 20
        $this->env->loadTemplate("IbwJobeetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs"))));
        // line 21
        echo "
    ";
        // line 22
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 23
            echo "        <div class=\"pagination\">
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => 1)), "html", null, true);
            echo "\">
                <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
            </a>

            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
            </a>

            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "                ";
                if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["current_page"]) ? $context["current_page"] : null))) {
                    // line 34
                    echo "                    ";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "
                ";
                } else {
                    // line 36
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["page"]) ? $context["page"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a>
                ";
                }
                // line 38
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["next_page"]) ? $context["next_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
            </a>

            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["last_page"]) ? $context["last_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    ";
        }
        // line 49
        echo "
    <div class=\"pagination_desc\">
        ";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("{0} No job in this category|{1} One job in this category|]1,Inf] %count% jobs in this category", (isset($context["total_jobs"]) ? $context["total_jobs"] : null), array("%count%" => (("<strong>" . (isset($context["total_jobs"]) ? $context["total_jobs"] : null)) . "</strong>")), "messages");
        // line 54
        echo "        ";
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 55
            echo "            - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : null), "html", null, true);
            echo "</strong>
        ";
        }
        // line 57
        echo "    </div>        
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 55,  157 => 54,  134 => 41,  127 => 39,  113 => 36,  104 => 33,  100 => 32,  84 => 25,  70 => 20,  52 => 12,  34 => 5,  289 => 75,  286 => 74,  280 => 16,  275 => 15,  272 => 14,  266 => 12,  261 => 11,  251 => 6,  248 => 5,  233 => 97,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 88,  190 => 84,  185 => 82,  175 => 74,  155 => 51,  152 => 66,  118 => 55,  97 => 44,  90 => 28,  81 => 38,  23 => 2,  150 => 57,  126 => 45,  110 => 38,  77 => 23,  37 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 76,  169 => 60,  140 => 44,  132 => 51,  128 => 49,  111 => 53,  107 => 34,  61 => 13,  273 => 96,  269 => 94,  254 => 7,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 63,  135 => 53,  131 => 58,  119 => 42,  108 => 52,  102 => 32,  71 => 19,  67 => 32,  63 => 17,  59 => 15,  47 => 10,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  40 => 18,  38 => 7,  43 => 10,  28 => 3,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 49,  142 => 52,  138 => 51,  136 => 61,  123 => 47,  121 => 38,  117 => 42,  115 => 54,  105 => 40,  91 => 27,  69 => 25,  62 => 30,  49 => 8,  101 => 35,  94 => 29,  89 => 20,  85 => 39,  79 => 18,  75 => 22,  68 => 14,  56 => 10,  50 => 24,  24 => 3,  32 => 4,  87 => 25,  72 => 21,  66 => 18,  55 => 13,  46 => 9,  41 => 8,  44 => 12,  35 => 7,  27 => 4,  25 => 5,  21 => 2,  31 => 4,  29 => 5,  26 => 6,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 57,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 45,  141 => 48,  133 => 49,  130 => 40,  125 => 44,  122 => 44,  116 => 41,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 43,  92 => 21,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 25,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
