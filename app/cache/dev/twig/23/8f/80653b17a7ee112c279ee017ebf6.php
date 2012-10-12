<?php

/* AcmeTweetBundle:Default:index.html.twig */
class __TwigTemplate_238f80653b17a7ee112c279ee017ebf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Tweet Search ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<style type=\"text/css\">
td { vertical-align: top; padding: 2px 2px;}
</style>

<h1>Tweet Search</h1>

<form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeTweetBundle_homepage"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">

    ";
        // line 15
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

    ";
        // line 17
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "search_word"));
        echo "

    ";
        // line 19
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

    <input type=\"submit\" value=\"Search\" />

</form>
<br />

";
        // line 26
        if ($this->getContext($context, "tweets")) {
            // line 27
            echo "<h2>Search results of \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "value"), "SearchWord"), "html", null, true);
            echo "\": </h2><br /><br />

<table>
";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tweets"));
            foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
                // line 31
                echo "\t<tr><td><img src='";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tweet"), "profile_image_url"), "html", null, true);
                echo "'></td><td> <a href=\"https://twitter.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tweet"), "from_user"), "html", null, true);
                echo "\">@";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tweet"), "from_user"), "html", null, true);
                echo " </a></td><td> \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tweet"), "text"), "html", null, true);
                echo "\" </td></tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "</table>

";
        }
        // line 36
        echo "<script type=\"text/javascript\" src=\"Acme/TweetBundle{/Resources/public/js/jquery-1.8.2.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetweet/js/original-scripts.js"), "html", null, true);
        echo "\"></script>

";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da8c7ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da8c7ee_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/da8c7ee_jquery-1.8.2.min_1.js");
            echo "    ";
        } else {
            // asset "da8c7ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da8c7ee") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/da8c7ee.js");
            echo "    ";
        }
        unset($context["asset_url"]);
        // line 41
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e8e0c7f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8e0c7f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e8e0c7f_original-scripts_1.js");
            echo "    ";
        } else {
            // asset "e8e0c7f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8e0c7f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e8e0c7f.js");
            echo "    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "AcmeTweetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  124 => 40,  121 => 39,  116 => 43,  114 => 39,  109 => 37,  106 => 36,  101 => 33,  86 => 31,  82 => 30,  75 => 27,  73 => 26,  63 => 19,  58 => 17,  53 => 15,  46 => 13,  37 => 6,  34 => 5,  28 => 3,);
    }
}
