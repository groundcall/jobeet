<?php

/* IbwJobeetBundle:Category:show.atom.twig */
class __TwigTemplate_866f6a5e11c580b9b865336b95c8543bfceb680d8909ebf1aceb2c6c99735c98 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>Jobeet (";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo ")</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
    <updated>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : null), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : null), "html", null, true);
        echo "</id>

    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "        <entry>
            <title>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location"), "html", null, true);
            echo ")</title>
            <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "company" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "positionslug"))), "html", null, true);
            echo "\" />
            <id>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</id>
            <updated>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
            // line 18
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo")) {
                // line 19
                echo "                        <div>
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
                echo "\">
                                <img src=\"http://";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "host"), "html", null, true);
                echo "/uploads/jobs/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
                echo " logo\" />
                            </a>
                        </div>
                    ";
            }
            // line 25
            echo "                    <div>
                        ";
            // line 26
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description"), "html", null, true));
            echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply"), "html", null, true);
            echo "</p>
                </div>
            </summary>
            <author><name>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
            echo "</name></author>
        </entry>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Category:show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  160 => 55,  157 => 54,  134 => 41,  127 => 39,  113 => 35,  104 => 32,  100 => 32,  84 => 25,  70 => 20,  52 => 12,  34 => 5,  289 => 75,  286 => 74,  280 => 16,  275 => 15,  272 => 14,  266 => 12,  261 => 11,  251 => 6,  248 => 5,  233 => 97,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 88,  190 => 84,  185 => 82,  175 => 74,  155 => 51,  152 => 66,  118 => 55,  97 => 44,  90 => 28,  81 => 38,  23 => 3,  150 => 57,  126 => 45,  110 => 38,  77 => 23,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 76,  169 => 60,  140 => 44,  132 => 51,  128 => 49,  111 => 53,  107 => 34,  61 => 13,  273 => 96,  269 => 94,  254 => 7,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 63,  135 => 53,  131 => 58,  119 => 42,  108 => 52,  102 => 32,  71 => 19,  67 => 32,  63 => 15,  59 => 14,  47 => 10,  98 => 29,  93 => 28,  88 => 6,  78 => 21,  40 => 18,  38 => 7,  43 => 10,  28 => 5,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 49,  142 => 52,  138 => 51,  136 => 61,  123 => 47,  121 => 38,  117 => 42,  115 => 54,  105 => 40,  91 => 27,  69 => 18,  62 => 30,  49 => 12,  101 => 35,  94 => 29,  89 => 25,  85 => 39,  79 => 18,  75 => 22,  68 => 14,  56 => 10,  50 => 24,  24 => 3,  32 => 6,  87 => 25,  72 => 21,  66 => 18,  55 => 13,  46 => 11,  41 => 8,  44 => 12,  35 => 7,  27 => 4,  25 => 5,  21 => 2,  31 => 4,  29 => 5,  26 => 6,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 57,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 45,  141 => 48,  133 => 49,  130 => 40,  125 => 44,  122 => 44,  116 => 41,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 43,  92 => 26,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 25,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
