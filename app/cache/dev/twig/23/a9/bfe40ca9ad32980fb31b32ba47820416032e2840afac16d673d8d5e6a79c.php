<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_23a9bfe40ca9ad32980fb31b32ba47820416032e2840afac16d673d8d5e6a79c extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  24 => 13,  22 => 12,  19 => 11,  123 => 52,  117 => 49,  113 => 48,  107 => 46,  105 => 45,  100 => 43,  94 => 40,  88 => 37,  84 => 36,  79 => 34,  75 => 32,  72 => 31,  69 => 30,  63 => 28,  61 => 27,  56 => 25,  53 => 24,  50 => 23,  44 => 21,  39 => 18,  36 => 17,  34 => 16,  31 => 15,  28 => 14,);
    }
}
