<?php

/* IbwJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_bd410558e06056939013fd6194ef3eff31e8e1bee3d5084bbf9ee38a96f8f211 extends Twig_Template
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
        // line 2
        echo "
<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 6
        if ((!$this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated"))) {
            // line 7
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\">Edit</a></li>
            <li>
                <form action=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : null), 'widget');
            echo "
                    <button type=\"submit\">Publish</button>
                </form>
            </li>
        ";
        }
        // line 15
        echo "        <li>
            <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button type=\"submit\" onclick=\"if (!confirm('Are you sure?')) {
                            return false;
                        }\">Delete</button>
            </form>
        </li>
        ";
        // line 23
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated")) {
            // line 24
            echo "            <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 25
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isExpired")) {
                // line 26
                echo "                    Expired
                ";
            } else {
                // line 28
                echo "                    Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
                ";
            }
            // line 30
            echo "
                ";
            // line 31
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "expiresSoon")) {
                // line 32
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_extend", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
                echo "\" method=\"post\">
                        ";
                // line 33
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["extend_form"]) ? $context["extend_form"] : null), 'widget');
                echo "
                        <button type=\"submit\">Extend</button> for another 30 days
                    </form>
                ";
            }
            // line 37
            echo "            </li>
        ";
        } else {
            // line 39
            echo "            <li>
                [Bookmark this <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "positionslug"))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
            </li>
        ";
        }
        // line 43
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  52 => 17,  100 => 28,  96 => 27,  81 => 21,  65 => 15,  277 => 114,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  184 => 72,  172 => 66,  124 => 45,  104 => 29,  77 => 22,  213 => 72,  210 => 71,  206 => 14,  188 => 73,  185 => 5,  167 => 81,  152 => 58,  148 => 69,  113 => 58,  37 => 10,  23 => 4,  161 => 54,  150 => 49,  139 => 66,  129 => 43,  126 => 39,  120 => 44,  83 => 24,  76 => 28,  74 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 56,  140 => 52,  132 => 64,  128 => 49,  111 => 33,  107 => 36,  61 => 23,  273 => 96,  269 => 109,  254 => 92,  246 => 90,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 53,  143 => 45,  135 => 51,  131 => 49,  119 => 42,  108 => 38,  102 => 32,  71 => 19,  67 => 15,  63 => 24,  59 => 13,  47 => 10,  98 => 31,  93 => 26,  88 => 50,  78 => 21,  40 => 8,  38 => 6,  43 => 9,  28 => 3,  201 => 92,  196 => 11,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  123 => 40,  121 => 46,  117 => 59,  115 => 35,  105 => 40,  91 => 25,  69 => 20,  62 => 14,  49 => 19,  101 => 32,  94 => 28,  89 => 28,  85 => 31,  79 => 24,  75 => 17,  68 => 16,  56 => 12,  50 => 9,  24 => 3,  32 => 5,  87 => 32,  72 => 26,  66 => 18,  55 => 15,  46 => 7,  41 => 5,  44 => 12,  35 => 6,  27 => 7,  25 => 6,  21 => 2,  31 => 8,  29 => 5,  26 => 6,  22 => 1,  19 => 2,  209 => 82,  203 => 13,  199 => 67,  193 => 10,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 79,  154 => 73,  149 => 51,  147 => 56,  144 => 49,  141 => 48,  133 => 41,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 43,  109 => 34,  106 => 40,  103 => 39,  99 => 37,  95 => 52,  92 => 33,  86 => 28,  82 => 30,  80 => 23,  73 => 19,  64 => 29,  60 => 12,  57 => 13,  54 => 9,  51 => 14,  48 => 16,  45 => 15,  42 => 7,  39 => 9,  36 => 5,  33 => 9,  30 => 3,);
    }
}
