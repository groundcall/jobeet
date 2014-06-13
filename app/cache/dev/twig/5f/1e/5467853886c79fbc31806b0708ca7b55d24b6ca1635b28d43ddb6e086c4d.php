<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_5f1e5467853886c79fbc31806b0708ca7b55d24b6ca1635b28d43ddb6e086c4d extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  367 => 339,  353 => 328,  350 => 327,  308 => 287,  306 => 286,  58 => 18,  70 => 26,  84 => 27,  100 => 28,  81 => 21,  65 => 11,  277 => 114,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  104 => 37,  77 => 22,  53 => 15,  186 => 62,  127 => 63,  90 => 37,  23 => 1,  161 => 6,  150 => 49,  129 => 43,  126 => 39,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 11,  140 => 52,  132 => 51,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 109,  254 => 92,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 53,  143 => 45,  135 => 51,  119 => 42,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 22,  93 => 38,  88 => 6,  78 => 18,  38 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 10,  163 => 63,  158 => 5,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  121 => 59,  117 => 44,  105 => 54,  91 => 35,  62 => 24,  49 => 10,  94 => 28,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 12,  24 => 3,  87 => 32,  46 => 12,  44 => 11,  27 => 7,  25 => 5,  21 => 2,  31 => 8,  26 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 10,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 44,  131 => 49,  123 => 40,  120 => 44,  115 => 42,  111 => 33,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 22,  66 => 25,  55 => 15,  52 => 15,  50 => 15,  43 => 9,  41 => 5,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 13,  173 => 65,  168 => 65,  164 => 59,  162 => 57,  154 => 51,  149 => 51,  147 => 56,  144 => 49,  141 => 48,  133 => 41,  130 => 41,  125 => 61,  122 => 43,  116 => 41,  112 => 56,  109 => 55,  106 => 34,  103 => 33,  99 => 35,  95 => 39,  92 => 28,  86 => 48,  82 => 22,  80 => 29,  73 => 19,  64 => 24,  60 => 6,  57 => 39,  54 => 19,  51 => 37,  48 => 16,  45 => 8,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
