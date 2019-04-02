<?php

/* newitem.html.twig */
class __TwigTemplate_bb063a9441fe61fe2db467298a2ab1cdbf343085e107fa829c30840055fcecc3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "newitem.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "New Item";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <main class=\"main-body\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_create_item"] ?? null), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"container-row\">
                <h1 class=\"big-title\">Add New Item</h1>
            </div>

            <div class=\"row-col-inputs\">
                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Item Information (1/2)</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">SKU (required)</label>
                        <input value=\"\" type=\"text\" name=\"sku\" autofocus required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Selling Price (required)</label>
                        <input value=\"\" type=\"text\" name=\"selling_price\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Purchase Price (required)</label>
                        <input value=\"\" type=\"text\" name=\"purchase_price\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Barcode Code</label>
                        <input value=\"\" type=\"text\" name=\"barcode_code\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Warehouse Location</label>
                        <input value=\"\" type=\"text\" name=\"warehouse_location\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">On-hand Stock (required)</label>
                        <input value=\"\" type=\"text\" name=\"stock\" required>
                    </div>

                </div>


                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Item Information (2/2)</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Item Name (required)</label>
                        <input value=\"\" type=\"text\" name=\"item_name\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Manufacturer</label>
                        <input value=\"\" type=\"text\" name=\"manufacturer\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Part Number</label>
                        <input value=\"\" type=\"text\" name=\"part_number\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Serial Number</label>
                        <input value=\"\" type=\"text\" name=\"serial_number\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Description</label>
                        <textarea name=\"description\" rows=\"3\" cols=\"20\"></textarea>
                    </div>

                    <div class=\"input-container\">
                        <button type=\"submit\">Create Item</button>
                    </div>

                </div>

            </div>

        </form>
        
    </main>

";
    }

    public function getTemplateName()
    {
        return "newitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  42 => 5,  39 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newitem.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/newitem.html.twig");
    }
}
