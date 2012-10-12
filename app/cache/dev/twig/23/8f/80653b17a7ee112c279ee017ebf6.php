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
        return array (  112 => 38,  105 => 36,  100 => 33,  45 => 13,  76 => 27,  65 => 22,  56 => 17,  136 => 40,  123 => 30,  114 => 30,  90 => 45,  85 => 31,  61 => 20,  21 => 1,  36 => 6,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 16,  52 => 15,  97 => 22,  95 => 47,  88 => 29,  78 => 17,  71 => 14,  25 => 4,  72 => 26,  64 => 24,  53 => 13,  34 => 5,  92 => 20,  86 => 28,  79 => 39,  19 => 2,  42 => 10,  40 => 7,  29 => 3,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 13,  32 => 11,  24 => 9,  22 => 3,  23 => 29,  17 => 1,  69 => 20,  63 => 17,  58 => 9,  49 => 11,  43 => 8,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 18,  77 => 25,  75 => 37,  57 => 17,  50 => 14,  46 => 9,  44 => 8,  39 => 10,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 43,  108 => 37,  104 => 24,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 31,  81 => 30,  73 => 28,  70 => 24,  67 => 12,  62 => 19,  59 => 19,  55 => 12,  51 => 11,  48 => 10,  41 => 11,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
