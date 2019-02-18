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
                <a id=\"addItem\" class=\"button-small shadow addItem\">
                    <i class=\"fas fa-plus plus\"></i>
                    <span class=\"btn-text\">Add Item</span>
                </a>
            </div>

            <div class=\"row-col-inputs\">
                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Item Information</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">SKU</label>
                        <input value=\"\" type=\"text\" name=\"sku\" autofocus>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Selling Price</label>
                        <input value=\"\" type=\"text\" name=\"selling_price\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Purchase Price</label>
                        <input value=\"\" type=\"text\" name=\"purchase_price\">
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
                        <label for=\"\">On-hand Stock</label>
                        <input value=\"\" type=\"text\" name=\"stock\">
                    </div>

                </div>


                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Technical Information</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Item Name</label>
                        <input value=\"\" type=\"text\" name=\"item_name\">
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
                        <textarea name=\"description\" rows=\"7\" cols=\"20\"></textarea>
                    </div>

                </div>

            </div>


            <div class=\"row-col-inputs\">
                <div class=\"col-inputs\">
                    <button type=\"submit\">Create Item</button>
                </div>
            </div>

        </form>


    </main>



    <!-- The Modal -->
    <div id=\"Modal\" class=\"Modal\">
        <!-- Modal content -->
        <div class=\"modal-content shell shadow\">
            <!--     <span class=\"close\">&times;</span> -->
            <div class=\"input-container\">
                <h1 class=\"big-title\">Add Item</h1>
            </div>

            <form action=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["action_add_item_to_list"] ?? null), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"input-container\">
                    <label for=\"\">Item</label>
                    <select name=\"item\">
                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 121
            echo "
                            <option value=\"";
            // line 122
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["item"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["ID"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["item"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["item_name"] ?? null) : null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["item"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["sku"] ?? null) : null), "html", null, true);
            echo "
                                (";
            // line 123
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["item"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["stock"] ?? null) : null), "html", null, true);
            echo ")
                            </option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                    </select>
                    <span class=\"input-info\"><i
                                class=\"question-mark far fa-question-circle\"></i>Please select an item</span>
                </div>

                <div class=\"input-container\">
                    <label for=\"\"> Quantity</label>
                    <input type=\"text\" name=\"quantity\">
                    <span class=\"input-info\"><i
                                class=\"question-mark far fa-question-circle\"></i>Please enter quantity</span>
                </div>

                <div class=\"input-container\">
                    <button type=\"submit\"><i class=\"fas fa-plus plus\"></i>Create Item</button>
                </div>


            </form>

        </div>
    </div>



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
        return array (  190 => 127,  180 => 123,  172 => 122,  169 => 121,  165 => 120,  158 => 116,  46 => 7,  42 => 5,  39 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newitem.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/newitem.html.twig");
    }
}
