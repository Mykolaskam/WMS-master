<?php

/* menu.html.twig */
class __TwigTemplate_ede188c2811721ceaad124c77a87df7931f22ee2515aec9d9a6e80d95a1c87a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "menu.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"top-bar\">
        <!--     <a id=\"menu\" class=\"menu-button\"><i class=\"fas fa-bars\"></i></a> -->
    </div>

    <div id=\"side-menu\" class=\"shadow side-menu\">
        <h2 class=\"logo\">WMS</h2>

        <h4 class=\"menu-header\">Manage</h4>
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"#\">Dashboard</a>
            <a class=\"menu-item\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["page_items"] ?? null), "html", null, true);
        echo "\">Items</a>
            <a class=\"menu-item\" href=\"#\">Customers</a>
            <a class=\"menu-item\" href=\"#\">Vendors</a>
            <a class=\"menu-item\" href=\"#\">Purchase Orders</a>
            <a class=\"menu-item\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["sales_orders"] ?? null), "html", null, true);
        echo "\">Sales Orders</a>
            <a class=\"menu-item\" href=\"#\">Invoices</a>
            <a class=\"menu-item\" href=\"#\">Bills</a>
        </div>

        <h4 class=\"menu-header\">Account</h4>
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["action_logout"] ?? null), "html", null, true);
        echo "\">Profile</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  55 => 18,  48 => 14,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/menu.html.twig");
    }
}
