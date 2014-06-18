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
        // line 1
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 4
        if ((!$this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated"))) {
            // line 5
            echo "            <ul>
                <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            echo "</a></li>
                <li>
                    <form action=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\" method=\"post\">
                        ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : null), 'widget');
            echo "
                        <button type=\"submit\">";
            // line 10
            echo $this->env->getExtension('translator')->getTranslator()->trans("Publish", array(), "messages");
            echo "</button>
                    </form>
                </li>
            </ul>
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
                <button type=\"submit\" onclick=\"if (!confirm('";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Are you sure?", array(), "messages");
        echo "')) {
                            return false;
                        }\">";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "messages");
        echo "</button>
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
                echo "                    ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Expired", array(), "messages");
                // line 27
                echo "                ";
            } else {
                // line 28
                echo "                    ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Expires in %count% days", array("%count%" => (("<strong>" . $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "getDaysBeforeExpires")) . "</strong>")), "messages");
                // line 29
                echo "                ";
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
                        <button type=\"submit\" value=\"Extend\">";
                // line 34
                echo $this->env->getExtension('translator')->getTranslator()->trans("Extend", array(), "messages");
                echo "</button> ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("for another 30 days", array(), "messages");
                // line 35
                echo "                    </form>
                ";
            }
            // line 37
            echo "            </li>
        ";
        } else {
            // line 39
            echo "            <li>
                [";
            // line 40
            echo $this->env->getExtension('translator')->getTranslator()->trans("Bookmark this %url% to manage this job in the future", array("%url%" => (("<a href=\"" . $this->env->getExtension('routing')->getUrl("ibw_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "positionslug")))) . "\">URL</a>")), "messages");
            echo ".]
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
        return array (  76 => 24,  58 => 14,  277 => 109,  263 => 103,  257 => 101,  253 => 100,  237 => 93,  232 => 91,  225 => 87,  216 => 84,  205 => 79,  200 => 77,  184 => 70,  161 => 59,  145 => 52,  129 => 45,  120 => 42,  83 => 25,  65 => 16,  74 => 23,  160 => 55,  157 => 58,  134 => 41,  127 => 42,  113 => 38,  104 => 35,  100 => 31,  84 => 23,  70 => 20,  52 => 15,  34 => 5,  289 => 75,  286 => 74,  280 => 16,  275 => 15,  272 => 14,  266 => 12,  261 => 102,  251 => 6,  248 => 98,  233 => 97,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 88,  190 => 84,  185 => 82,  175 => 74,  155 => 51,  152 => 56,  118 => 55,  97 => 30,  90 => 28,  81 => 38,  23 => 4,  150 => 57,  126 => 40,  110 => 34,  77 => 21,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 114,  283 => 88,  278 => 86,  268 => 106,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 66,  169 => 60,  140 => 44,  132 => 43,  128 => 49,  111 => 34,  107 => 33,  61 => 15,  273 => 108,  269 => 94,  254 => 7,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 86,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 63,  135 => 53,  131 => 58,  119 => 37,  108 => 52,  102 => 32,  71 => 18,  67 => 17,  63 => 18,  59 => 17,  47 => 12,  98 => 28,  93 => 28,  88 => 27,  78 => 21,  40 => 9,  38 => 7,  43 => 8,  28 => 5,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 49,  142 => 52,  138 => 51,  136 => 49,  123 => 39,  121 => 39,  117 => 42,  115 => 35,  105 => 40,  91 => 28,  69 => 18,  62 => 30,  49 => 10,  101 => 35,  94 => 29,  89 => 25,  85 => 26,  79 => 18,  75 => 20,  68 => 20,  56 => 10,  50 => 8,  24 => 4,  32 => 5,  87 => 25,  72 => 21,  66 => 17,  55 => 16,  46 => 9,  41 => 8,  44 => 10,  35 => 6,  27 => 3,  25 => 5,  21 => 2,  31 => 4,  29 => 6,  26 => 5,  22 => 2,  19 => 1,  209 => 80,  203 => 78,  199 => 67,  193 => 73,  189 => 72,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 45,  141 => 51,  133 => 49,  130 => 40,  125 => 44,  122 => 44,  116 => 37,  112 => 42,  109 => 37,  106 => 32,  103 => 32,  99 => 28,  95 => 27,  92 => 26,  86 => 24,  82 => 22,  80 => 21,  73 => 19,  64 => 16,  60 => 12,  57 => 12,  54 => 9,  51 => 11,  48 => 10,  45 => 6,  42 => 10,  39 => 7,  36 => 8,  33 => 4,  30 => 3,);
    }
}
