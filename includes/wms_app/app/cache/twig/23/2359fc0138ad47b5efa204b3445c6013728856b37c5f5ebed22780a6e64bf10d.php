<?php

/* edititem.html.twig */
class __TwigTemplate_ed7a53099990a51eddf0c0e780181132d4bd67150cab2bd4219959a90517b231 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "edititem.html.twig", 1);
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
        echo "Edit Item";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <main class=\"main-body\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_update_item"] ?? null), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"container-row\">
                <h1 class=\"big-title\">Edit Item</h1>
            </div>

            <div class=\"row-col-inputs\">
                <div class=\"col-inputs shadow shell\">


                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Item Information (1/2)</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["the_item"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "
                    <div class=\"input-container\">
                        <label for=\"\">SKU (required)</label>
                        <input value=\"";
            // line 25
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["item"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["sku"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"sku\" autofocus required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Selling Price (required)</label>
                        <input value=\"";
            // line 30
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["item"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["selling_price"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"selling_price\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Purchase Price (required)</label>
                        <input value=\"";
            // line 35
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["item"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["purchase_price"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"purchase_price\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Barcode Code</label>
                        <input value=\"";
            // line 40
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["item"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["barcode_code"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"barcode_code\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Warehouse Location</label>
                        <input value=\"";
            // line 45
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["item"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["warehouse_location"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"warehouse_location\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">On-hand Stock (required)</label>
                        <input value=\"";
            // line 50
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["item"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["stock"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"stock\" required>
                    </div>


                </div>


                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Item Information (2/2)</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Item Name (required)</label>
                        <input value=\"";
            // line 66
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["item"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["item_name"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"item_name\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Manufacturer</label>
                        <input value=\"";
            // line 71
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["item"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["manufacturer"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"manufacturer\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Part Number</label>
                        <input value=\"";
            // line 76
            echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["item"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["part_number"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"part_number\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Serial Number</label>
                        <input value=\"";
            // line 81
            echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = $context["item"]) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["serial_number"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"serial_number\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Description</label>
                        <textarea name=\"description\" rows=\"3\" cols=\"20\">";
            // line 86
            echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = $context["item"]) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["description"] ?? null) : null), "html", null, true);
            echo "</textarea>
                    </div>


                    <div class=\"input-container\">
                        <button type=\"submit\">Update Item</button>

                        <a class=\"button button-red\" onclick=\"window.location='/wms/index.php/deleteitem';\">Delete </a>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                </div>

            </div>

        </form>

    </main>

";
    }

    public function getTemplateName()
    {
        return "edititem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 97,  163 => 86,  155 => 81,  147 => 76,  139 => 71,  131 => 66,  112 => 50,  104 => 45,  96 => 40,  88 => 35,  80 => 30,  72 => 25,  67 => 22,  63 => 21,  46 => 7,  42 => 5,  39 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "edititem.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/edititem.html.twig");
    }
}
