<?php

/* newSO.html.twig */
class __TwigTemplate_3b387a507693444d24ead6f625313ed69f827ba2a0d444465541246583f54822 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "newSO.html.twig", 1);
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
        echo "New Saler Order";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

    <div class=\"top-bar\">
        <!--  <a id=\"menu\" class=\"menu-button\"><i class=\"fas fa-bars\"></i></a> -->
    </div>

    <div id=\"side-menu\" class=\"shadow side-menu\">
        <h2 class=\"logo\">WMS</h2>

        <h4 class=\"menu-header\">Manage</h4>
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"#\">Dashboard</a>
            <a class=\"menu-item\" href=\"#\">Items</a>
            <a class=\"menu-item\" href=\"#\">Customers</a>
            <a class=\"menu-item\" href=\"#\">Vendors</a>
            <a class=\"menu-item\" href=\"#\">Purchase Orders</a>
            <a class=\"menu-item\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["sales_orders"] ?? null), "html", null, true);
        echo "\">Sales Orders</a>
            <a class=\"menu-item\" href=\"#\">Invoices</a>
            <a class=\"menu-item\" href=\"#\">Bills</a>
        </div>

        <h4 class=\"menu-header\">Account</h4>
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["action_logout"] ?? null), "html", null, true);
        echo "\">Profile</a>
        </div>
    </div>


    <main class=\"main-body\">

        <div class=\"container-row\">
            <h1 class=\"big-title\">Add New SO</h1>
            <a id=\"addItem\" class=\"button-small shadow\">
                <i class=\"fas fa-plus plus\"></i>
                <span class=\"btn-text\">Add Item</span>
            </a>
        </div>

        <div class=\"row-col-inputs\">

            <div class=\"col-inputs shadow shell\">

                <div class=\"input-container\">
                    <label for=\"\"> Customer</label>
                    <select>
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 50
            echo "
                            <option value=\"";
            // line 51
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["customer"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["item_name"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["customer"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["last_name"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["customer"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["first_name"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["customer"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["last_name"] ?? null) : null), "html", null, true);
            echo "</option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </select>
                    <span class=\"input-info\"><i
                                class=\"question-mark far fa-question-circle\"></i>Please select a customer</span>
                </div>

                <div class=\"input-container\">
                    <label for=\"\"> Sales Order Number</label>
                    <input type=\"text\">
                </div>

                <div class=\"input-container\">
                    <label for=\"\"> Date</label>
                    <input type=\"date\">
                    <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select SO
                    date</span>
                </div>

            </div>


            <div class=\"col-inputs shadow shell\">

                <div class=\"scroll-container\">

                    <table>

                        <tr class=\"table-titles\">
                            <th class=\"button-sort sort\" data-sort=\"\">Name<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"button-sort sort\" data-sort=\"\">SKU<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"button-sort sort\" data-sort=\"\">Purchase Price<i
                                        class=\"arrow fas fa-angle-up\"></i>
                            </th>
                            <th class=\"text-center\">Quantity</th>
                            <th class=\"text-center\">Amount</th>
                            <th class=\"text-center\"></th>
                        </tr>

                        <tbody class=\"list\">

                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["real_items_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 94
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["item"]);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 95
                echo "                                <tr>
                                    <td class=\"\">";
                // line 96
                echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["i"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["item_name"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td class=\"\">";
                // line 97
                echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["i"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["sku"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td class=\"\">";
                // line 98
                echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["i"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["purchase_price"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td class=\"text-center\">";
                // line 99
                echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["i"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["quantity"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td class=\"text-center\">";
                // line 100
                echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["i"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["amount"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td class=\"text-center\">
                                        <div id=\"removeItem\" class=\"remove-item\"><i class=\"far fa-trash-alt\"></i></div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
                        </tbody>

                    </table>

                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["real_items_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 113
            echo "                        <h1>";
            echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = $context["item"]) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["item_name"] ?? null) : null), "html", null, true);
            echo "</h1>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                </div>

            </div>

        </div>

        <div class=\"row-col-inputs\">
            <div class=\"col-inputs shadow shell\">
                </br></br></br></br></br></br>
            </div>
        </div>


    </main>



    <!-- The Modal -->
    <div id=\"myModal\" class=\"modal\">
        <!-- Modal content -->
        <div class=\"modal-content shell shadow\">
            <!--     <span class=\"close\">&times;</span> -->
            <div class=\"input-container\">
                <h1 class=\"big-title\">Add Item</h1>
            </div>

            <form action=\"";
        // line 142
        echo twig_escape_filter($this->env, ($context["action_add_item_to_list"] ?? null), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"input-container\">
                    <label for=\"\">Item</label>
                    <select name=\"item\">
                        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 147
            echo "
                            <option value=\"";
            // line 148
            echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = $context["item"]) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["ID"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = $context["item"]) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["item_name"] ?? null) : null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = $context["item"]) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["sku"] ?? null) : null), "html", null, true);
            echo "
                                (";
            // line 149
            echo twig_escape_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = $context["item"]) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["stock"] ?? null) : null), "html", null, true);
            echo ")
                            </option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
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
                    <button type=\"submit\"><i class=\"fas fa-plus plus\"></i>Add Item</button>
                </div>


            </form>

        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "newSO.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 153,  275 => 149,  267 => 148,  264 => 147,  260 => 146,  253 => 142,  224 => 115,  215 => 113,  211 => 112,  204 => 107,  198 => 106,  186 => 100,  182 => 99,  178 => 98,  174 => 97,  170 => 96,  167 => 95,  162 => 94,  158 => 93,  117 => 54,  102 => 51,  99 => 50,  95 => 49,  70 => 27,  60 => 20,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newSO.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/newSO.html.twig");
    }
}
