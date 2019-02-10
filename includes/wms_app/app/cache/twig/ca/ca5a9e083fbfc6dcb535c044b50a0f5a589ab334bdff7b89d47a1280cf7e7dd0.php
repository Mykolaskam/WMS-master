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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <main class=\"main-body\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_create_so"] ?? null), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"container-row\">
                <h1 class=\"big-title\">Add New SO</h1>

            </div>

            <div class=\"row-col-inputs\">
                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">General Information</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <div class=\"input-field \">
                            <label>Customer</label>
                            <select name=\"customer\">
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 26
            echo "
                                    <option value=\"";
            // line 27
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["customer"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["ID"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["customer"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["first_name"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["customer"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["last_name"] ?? null) : null), "html", null, true);
            echo "
                                        - \"";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["customer"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["company_name"] ?? null) : null), "html", null, true);
            echo "\"
                                    </option>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </select>

                        </div>

                        <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please select a customer</span>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\"> Sales Order ID</label>
                        <input value=\"SO-";
        // line 41
        echo twig_escape_filter($this->env, ($context["order_id"] ?? null), "html", null, true);
        echo "\" type=\"text\" name=\"orderID\" readonly>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\"> Date</label>
                        <input type=\"date\" name=\"date\">
                        <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select SOdate</span>
                    </div>

                </div>


                <div class=\"col-inputs shadow shell\" id=\"so-items\">

                    <div class=\"input-container\">

                        <div class=\"row\">
                            <h2 class=\"col-title\">Selected Items</h2>
                            <a id=\"addItem\" class=\"button-small addItem\">
                                <i class=\"fas fa-plus plus\"></i>
                                <span class=\"btn-text\">Add Item</span>
                            </a>
                        </div>

                        <div class=\"line-blue\"></div>


                    </div>


                    <div class=\"input-container\">

                        <div class=\"scroll-container\">

                            <table>

                                <tr class=\"table-titles\">
                                    <th class=\"button-sort sort name\" data-sort=\"name\">Name<i
                                                class=\"arrow fas fa-angle-up\"></i>
                                    </th>
                                    <th class=\"button-sort sort sku\" data-sort=\"sku\">SKU<i
                                                class=\"arrow fas fa-angle-up\"></i>
                                    </th>
                                    <th class=\"button-sort sort purchasePrice\" data-sort=\"purchasePrice\">Purchase Price<i
                                                class=\"arrow fas fa-angle-up\"></i>
                                    </th>
                                    <th class=\"text-center quantity\" data-sort=\"quantity\">Quantity</th>
                                    <th class=\"text-center amount\" data-sort=\"amount\">Amount</th>
                                    <th class=\"text-center\"></th>
                                </tr>

                                <tbody class=\"list\">

                                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["real_items_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 95
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["item"]);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 96
                echo "                                        <tr>
                                            <td class=\"\">";
                // line 97
                echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["i"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["item_name"] ?? null) : null), "html", null, true);
                echo "</td>
                                            <td class=\"\">";
                // line 98
                echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["i"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["sku"] ?? null) : null), "html", null, true);
                echo "</td>
                                            <td class=\"\">";
                // line 99
                echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["i"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["purchase_price"] ?? null) : null), "html", null, true);
                echo "</td>
                                            <td class=\"text-center\">";
                // line 100
                echo twig_escape_filter($this->env, ($context["qty"] ?? null), "html", null, true);
                echo "</td>
                                            <td class=\"text-center\">";
                // line 101
                echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["i"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["selling_price"] ?? null) : null), "html", null, true);
                echo "</td>
                                            <td class=\"text-center\">
                                                <div id=\"removeItem\" class=\"remove-item\"><i class=\"far fa-trash-alt\"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>


            <div class=\"row-col-inputs\">
                <button type=\"submit\">Create SO</button>
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
        // line 143
        echo twig_escape_filter($this->env, ($context["action_add_item_to_list"] ?? null), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"input-container\">
                    <label for=\"\">Item</label>
                    <select name=\"item\">
                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 148
            echo "
                            <option value=\"";
            // line 149
            echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["item"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["ID"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = $context["item"]) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["item_name"] ?? null) : null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = $context["item"]) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["sku"] ?? null) : null), "html", null, true);
            echo "
                                (";
            // line 150
            echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = $context["item"]) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["stock"] ?? null) : null), "html", null, true);
            echo ")
                            </option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
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
        return array (  274 => 154,  264 => 150,  256 => 149,  253 => 148,  249 => 147,  242 => 143,  206 => 109,  200 => 108,  187 => 101,  183 => 100,  179 => 99,  175 => 98,  171 => 97,  168 => 96,  163 => 95,  159 => 94,  103 => 41,  92 => 32,  82 => 28,  74 => 27,  71 => 26,  67 => 25,  46 => 7,  42 => 5,  39 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newSO.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/newSO.html.twig");
    }
}
