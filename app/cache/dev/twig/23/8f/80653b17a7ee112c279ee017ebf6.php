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
        echo "
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetweet/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetweet/js/original-scripts.js"), "html", null, true);
        echo "\"></script>

";
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
        return array (  112 => 38,  108 => 37,  105 => 36,  100 => 33,  85 => 31,  81 => 30,  74 => 27,  72 => 26,  62 => 19,  57 => 17,  52 => 15,  45 => 13,  36 => 6,  33 => 5,  27 => 3,);
    }
}
