<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f7f0750bfbb4c151de10325316f9659a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 56,  157 => 55,  130 => 48,  66 => 20,  271 => 124,  262 => 121,  258 => 120,  255 => 119,  250 => 118,  248 => 117,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 91,  164 => 63,  154 => 54,  151 => 53,  143 => 49,  140 => 52,  119 => 47,  106 => 35,  83 => 26,  68 => 19,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 44,  127 => 46,  109 => 36,  93 => 33,  54 => 13,  112 => 38,  105 => 36,  100 => 39,  45 => 9,  76 => 27,  65 => 18,  56 => 14,  136 => 40,  123 => 44,  114 => 30,  90 => 36,  85 => 43,  61 => 23,  21 => 1,  36 => 5,  133 => 49,  124 => 41,  111 => 37,  80 => 25,  60 => 16,  52 => 15,  97 => 38,  95 => 30,  88 => 29,  78 => 25,  71 => 20,  25 => 4,  72 => 26,  64 => 24,  53 => 13,  34 => 5,  92 => 37,  86 => 27,  79 => 28,  19 => 2,  42 => 8,  40 => 7,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 21,  47 => 13,  32 => 6,  24 => 3,  22 => 3,  23 => 29,  17 => 1,  69 => 21,  63 => 18,  58 => 9,  49 => 12,  43 => 12,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 41,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 22,  75 => 24,  57 => 15,  50 => 14,  46 => 13,  44 => 8,  39 => 10,  33 => 5,  30 => 4,  27 => 5,  135 => 50,  129 => 43,  122 => 46,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 6,  94 => 33,  89 => 28,  87 => 44,  84 => 29,  81 => 28,  73 => 23,  70 => 27,  67 => 19,  62 => 22,  59 => 21,  55 => 20,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
