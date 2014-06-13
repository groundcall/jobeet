<?php

/* IbwJobeetBundle::layout.html.twig */
class __TwigTemplate_6acee911d052301700fee1285bd6a05ac41d95b5b19fcf402501d15a15a5a865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ibw_jobeet_homepage");
        echo "\">
                            <img alt=\"Jobeet Job Board\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/logo.jpg"), "html", null, true);
        echo "\" />
                        </a></h1>

                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ibw_job_new");
        echo "\">Post a Job</a>
                            </div>
                        </div>

                        <div class=\"search\">
                            <h2>Ask for a job</h2>
                            <form action=\"\" method=\"get\">
                                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <div class=\"help\">
                                    Enter some keywords (city, country, position, ...)
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"content\">
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "                    <div class=\"flash_notice\">
                        ";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "                    <div class=\"flash_error\">
                        ";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                <div class=\"content\">
                    ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "                </div>
            </div>

            <div id=\"footer\">
                <div class=\"content\">
                    <span class=\"symfony\">
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                        powered by <a href=\"http://www.symfony.com/\">
                            <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                        </a>
                    </span>
                    <ul>
                        <li><a href=\"\">About Jobeet</a></li>
                        <li class=\"feed\"><a href=\"\">Full feed</a></li>
                        <li><a href=\"\">Jobeet API</a></li>
                        <li class=\"last\"><a href=\"\">Affiliates</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                Jobeet - Your best job board
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 62,  183 => 61,  176 => 13,  169 => 11,  166 => 10,  161 => 6,  158 => 5,  135 => 69,  127 => 63,  125 => 61,  121 => 59,  112 => 56,  109 => 55,  105 => 54,  102 => 53,  93 => 50,  90 => 49,  86 => 48,  64 => 29,  54 => 22,  50 => 21,  31 => 8,  29 => 5,  23 => 1,  277 => 114,  269 => 109,  265 => 108,  260 => 106,  252 => 101,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  220 => 87,  216 => 86,  211 => 84,  204 => 80,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  179 => 14,  172 => 66,  168 => 65,  163 => 63,  156 => 59,  152 => 58,  147 => 56,  140 => 71,  136 => 51,  131 => 49,  124 => 45,  120 => 44,  115 => 42,  108 => 38,  104 => 37,  99 => 35,  83 => 24,  80 => 23,  77 => 22,  71 => 19,  66 => 18,  63 => 17,  56 => 12,  47 => 10,  43 => 9,  40 => 15,  37 => 13,  35 => 10,  32 => 5,  27 => 3,);
    }
}
