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
        // line 17
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("ibw_job", array("_format" => "atom"));
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ibw_jobeet_homepage");
        echo "\">
                            <img alt=\"Jobeet Job Board\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/logo.jpg"), "html", null, true);
        echo "\" />
                        </a></h1>

                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ibw_job_new");
        echo "\">Post a Job</a>
                            </div>
                        </div>

                        <div class=\"search\">
                            <h2>Ask for a job</h2>
                            <form action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ibw_job_search");
        echo "\" method=\"get\">
                                <input type=\"text\" name=\"query\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <img id=\"loader\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/loader.gif"), "html", null, true);
        echo "\" style=\"vertical-align: middle; display: none\" />
                                <div class=\"help\">
                                    Enter some keywords (city, country, position, ...)
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"job_history\">
                Recent viewed jobs:
                <ul>
                    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 55
            echo "                        <li>
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_show", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company"), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </ul>
            </div>

            <div id=\"content\">
                ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 64
            echo "                    <div class=\"flash_notice\">
                        ";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 70
            echo "                    <div class=\"flash_error\">
                        ";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
                <div class=\"content\">
                    ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "                </div>
            </div>

            <div id=\"footer\">
                <div class=\"content\">
                    <span class=\"symfony\">
                        <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                        powered by <a href=\"http://www.symfony.com/\">
                            <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                        </a>
                    </span>
                    <ul>
                        <li><a href=\"\">About Jobeet</a></li>
                        <li class=\"feed\"><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("ibw_job", array("_format" => "atom"));
        echo "\">Full feed</a></li>
                        <li><a href=\"\">Jobeet API</a></li>
                        <li class=\"last\"><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("ibw_affiliate_new");
        echo "\">Become an affiliate</a></li>
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
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/search.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
        // line 77
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
        return array (  241 => 77,  238 => 76,  232 => 15,  227 => 14,  224 => 13,  217 => 11,  214 => 10,  209 => 6,  206 => 5,  195 => 93,  190 => 91,  182 => 86,  177 => 84,  169 => 78,  167 => 76,  163 => 74,  154 => 71,  151 => 70,  147 => 69,  144 => 68,  135 => 65,  132 => 64,  128 => 63,  122 => 59,  109 => 56,  106 => 55,  102 => 54,  86 => 41,  81 => 39,  77 => 38,  68 => 32,  58 => 25,  54 => 24,  45 => 18,  40 => 17,  37 => 13,  35 => 10,  31 => 8,  29 => 5,  23 => 1,);
    }
}
