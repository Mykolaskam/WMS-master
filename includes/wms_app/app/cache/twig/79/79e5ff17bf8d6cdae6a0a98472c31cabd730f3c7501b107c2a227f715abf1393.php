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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["CSS_FOLDER_PATH"] ?? null), "html", null, true);
        echo "\" />

</head>

<body>


";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["JS_FOLDER_PATH"] ?? null), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
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

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"top-bar\" id=\"top-bar\">
         <a id=\"menu\" class=\"menu-button\"><i class=\"fas fa-bars\"></i></a>
    </div>

    <div id=\"side-menu\" class=\"shadow side-menu closed open\">
        <h2 class=\"logo\">WMS</h2>
        <h2 class=\"logo2\">Lite</h2>

        <h4 class=\"menu-header\">Manage</h4>
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("dashboard"), "html", null, true);
        echo "\">Dashboard</a>
            <a class=\"menu-item\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("customers"), "html", null, true);
        echo "\">Customers</a>
            <a class=\"menu-item\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("vendors"), "html", null, true);
        echo "\">Vendors</a>
            <a class=\"menu-item\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("items"), "html", null, true);
        echo "\">Items</a>
            <a class=\"menu-item\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("salesorders"), "html", null, true);
        echo "\">Sales Orders</a>
          <!--  <a class=\"menu-item\" href=\"\">Invoices</a> -->
            <a class=\"menu-item\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("purchaseorders"), "html", null, true);
        echo "\">Purchase Orders</a>
          <!--  <a class=\"menu-item\" href=\"\">Bills</a> -->
        </div>

        <h4 class=\"menu-header\">Account</h4>
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("logout"), "html", null, true);
        echo "\">Log Out</a>
            <a class=\"menu-item\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("register"), "html", null, true);
        echo "\">Add User</a>
        </div>
    </div>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
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
        return array (  149 => 50,  146 => 49,  138 => 44,  134 => 43,  125 => 37,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  92 => 21,  89 => 20,  84 => 6,  74 => 58,  70 => 57,  63 => 52,  61 => 49,  58 => 48,  56 => 20,  46 => 13,  42 => 12,  33 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/layout.html.twig");
    }
}
