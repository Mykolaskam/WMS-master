<?php

/* layout.html.twig */
class __TwigTemplate_1c496cbd56d5b23803c71634fffcaf6af4e905c55bc2fa288e440d23740a81d6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\"
          integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\"/>
</head>

<body>


";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.js\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["js_path"] ?? null), "html", null, true);
        echo "\"></script>


</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"top-bar\">
        <!--     <a id=\"menu\" class=\"menu-button\"><i class=\"fas fa-bars\"></i></a> -->
    </div>

    <div id=\"side-menu\" class=\"shadow side-menu\">
        <h2 class=\"logo\">WMS</h2>

        <h4 class=\"menu-header\">Manage</h4>
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"\">Dashboard</a>
            <a class=\"menu-item\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("items"), "html", null, true);
        echo "\">Items</a>
            <a class=\"menu-item\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("customers"), "html", null, true);
        echo "\">Customers</a>
            <a class=\"menu-item\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("vendors"), "html", null, true);
        echo "\">Vendors</a>
            <a class=\"menu-item\" href=\"\">Purchase Orders</a>
            <a class=\"menu-item\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("salesorders"), "html", null, true);
        echo "\">Sales Orders</a>
            <a class=\"menu-item\" href=\"\">Invoices</a>
            <a class=\"menu-item\" href=\"\">Bills</a>
        </div>

        <h4 class=\"menu-header\">Account</h4>
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("logout"), "html", null, true);
        echo "\">Profile</a>
            <a class=\"menu-item\" href=\"#\">Help</a>
        </div>
    </div>
";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  125 => 45,  116 => 39,  106 => 32,  101 => 30,  97 => 29,  93 => 28,  81 => 18,  78 => 17,  73 => 6,  63 => 52,  57 => 48,  55 => 45,  52 => 44,  50 => 17,  41 => 11,  33 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/layout.html.twig");
    }
}
