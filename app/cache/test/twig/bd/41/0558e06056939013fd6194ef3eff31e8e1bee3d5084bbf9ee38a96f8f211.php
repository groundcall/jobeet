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
        if ((!$this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated"))) {
            // line 7
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
            echo "\">Edit</a></li>
            <li>
                <form action=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : $this->getContext($context, "publish_form")), 'widget');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                <button type=\"submit\" onclick=\"if (!confirm('Are you sure?')) {
                            return false;
                        }\">Delete</button>
            </form>
        </li>
        ";
        // line 23
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated")) {
            // line 24
            echo "            <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 25
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isExpired")) {
                // line 26
                echo "                    Expired
                ";
            } else {
                // line 28
                echo "                    Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
                ";
            }
            // line 30
            echo "
                ";
            // line 31
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon")) {
                // line 32
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_extend", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
                echo "\" method=\"post\">
                        ";
                // line 33
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["extend_form"]) ? $context["extend_form"] : $this->getContext($context, "extend_form")), 'widget');
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug"))), "html", null, true);
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
        return array (  112 => 43,  106 => 40,  103 => 39,  99 => 37,  92 => 33,  87 => 32,  85 => 31,  82 => 30,  76 => 28,  72 => 26,  70 => 25,  63 => 24,  61 => 23,  52 => 17,  48 => 16,  45 => 15,  37 => 10,  33 => 9,  27 => 7,  25 => 6,  19 => 2,);
    }
}
