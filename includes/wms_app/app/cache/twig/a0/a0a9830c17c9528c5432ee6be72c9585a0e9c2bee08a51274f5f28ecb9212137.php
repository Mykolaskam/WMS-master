<?php

/* editSO.html.twig */
class __TwigTemplate_5bd9dc6871e29dfd47c0d861c8161fde1d143da4b2152522e32a3c554a939535 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "editSO.html.twig", 1);
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
        echo "Edit Sales Order";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <main class=\"main-body\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_update_so"] ?? null), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return checkForm(this);\">
            <div class=\"container-row\">
                <h1 class=\"big-title\">Edit Sales Order</h1>

            </div>


            <div class=\"row-col-inputs\">

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
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["real_items_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "
                                    <tr>
                                        <td class=\"\">";
            // line 61
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["item"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["item_name"] ?? null) : null), "html", null, true);
            echo "</td>
                                        <td class=\"\">";
            // line 62
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["item"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[0] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["sku"] ?? null) : null), "html", null, true);
            echo "</td>
                                        <td class=\"\">";
            // line 63
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["item"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[0] ?? null) : null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["purchase_price"] ?? null) : null), "html", null, true);
            echo "</td>
                                        <td class=\"text-center\">";
            // line 64
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["item"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[0] ?? null) : null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["quantity"] ?? null) : null), "html", null, true);
            echo "</td>
                                        <td class=\"text-center\">£";
            // line 65
            echo twig_escape_filter($this->env, ((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = $context["item"]) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[0] ?? null) : null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["selling_price"] ?? null) : null) * (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = $context["item"]) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[0] ?? null) : null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["quantity"] ?? null) : null)), "html", null, true);
            echo "</td>
                                        <td class=\"text-center\">
                                            <a onclick=\"window.location='/wms/index.php/removeorderitem/";
            // line 67
            echo twig_escape_filter($this->env, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = $context["item"]) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[0] ?? null) : null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["ID"] ?? null) : null), "html", null, true);
            echo "';\">
                                                <div id=\"removeItem\" class=\"remove-item\"><i class=\"far fa-trash-alt\"></i>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
                                <tr></tr>
                                <tr></tr>


                                <tr class=\"no-hover\">
                                    <td class=\"\"><h3>Total Items</h3></td>
                                    <td class=\"\"></td>
                                    <td class=\"\"></td>
                                    <td class=\"text-center\"></td>
                                    <td class=\"text-center blue\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["total_quantity"] ?? null), "html", null, true);
        echo "</td>
                                    <td class=\"text-center\"></td>
                                </tr>

                                <tr class=\"no-hover\">
                                    <td class=\"\"><h2>Total Amount</h2></td>
                                    <td class=\"\"></td>
                                    <td class=\"\"></td>
                                    <td class=\"text-center\"></td>
                                    <td class=\"text-center blue\"><h2 class=\"blue\">£";
        // line 94
        echo twig_escape_filter($this->env, ($context["total_amount"] ?? null), "html", null, true);
        echo "</h2></td>
                                    <td class=\"text-center\"></td>
                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>


                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">General Information</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <div class=\"input-field \">
                            <label>Customer</label>

                            <select class=\"\" name=\"customer\">

                                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["the_order"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 123
            echo "
                                    <option value=\"";
            // line 124
            echo twig_escape_filter($this->env, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = $context["o"]) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["customer_id"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = $context["o"]) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["customer_name"] ?? null) : null), "html", null, true);
            echo "
                                    </option>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 129
            echo "
                                    <option value=\"";
            // line 130
            echo twig_escape_filter($this->env, (($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = $context["customer"]) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7["ID"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = $context["customer"]) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c["first_name"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = $context["customer"]) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40["last_name"] ?? null) : null), "html", null, true);
            echo "
                                        - \"";
            // line 131
            echo twig_escape_filter($this->env, (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = $context["customer"]) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79["company_name"] ?? null) : null), "html", null, true);
            echo "\"
                                    </option>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                            </select>

                        </div>

                        <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please select a customer</span>
                    </div>

                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["the_order"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 143
            echo "                        <div class=\"input-container\">
                            <label for=\"\"> Sales Order ID</label>
                            <input class=\"\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, (($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = $context["o"]) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1["so_number"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"orderID\" readonly>
                        </div>

                        <div class=\"input-container\">
                            <label for=\"\"> Date</label>
                            <input class=\"\" type=\"date\" name=\"date\" value=\"";
            // line 150
            echo twig_escape_filter($this->env, (($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = $context["o"]) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d["so_date"] ?? null) : null), "html", null, true);
            echo "\">
                            <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select SOdate</span>
                        </div>

                        <div class=\"input-container\">
                            <button type=\"submit\">Update</button>

                            <a class=\"button button-red\" onclick=\"window.location='/wms/index.php/deletesalesorder/";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["real_items_array"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo " ";
                echo twig_escape_filter($this->env, (($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = $context["item"]) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c[0] ?? null) : null)) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0["ID"] ?? null) : null), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "';\">
                                Delete </a>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
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
        // line 182
        echo twig_escape_filter($this->env, ($context["action_add_item_to_list"] ?? null), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"input-container\">
                    <label for=\"\">Item</label>
                    <select name=\"item\">
                        ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 187
            echo "
                            <option value=\"";
            // line 188
            echo twig_escape_filter($this->env, (($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = $context["item"]) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69["ID"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = $context["item"]) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849["item_name"] ?? null) : null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e = $context["item"]) && is_array($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e) || $__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e instanceof ArrayAccess ? ($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e["sku"] ?? null) : null), "html", null, true);
            echo "
                                (";
            // line 189
            echo twig_escape_filter($this->env, (($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe = $context["item"]) && is_array($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe) || $__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe instanceof ArrayAccess ? ($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe["stock"] ?? null) : null), "html", null, true);
            echo ")
                            </option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
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
        return "editSO.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 193,  342 => 189,  334 => 188,  331 => 187,  327 => 186,  320 => 182,  298 => 162,  278 => 157,  268 => 150,  260 => 145,  256 => 143,  252 => 142,  243 => 135,  233 => 131,  225 => 130,  222 => 129,  217 => 128,  205 => 124,  202 => 123,  198 => 122,  167 => 94,  155 => 85,  143 => 75,  129 => 67,  124 => 65,  120 => 64,  116 => 63,  112 => 62,  108 => 61,  104 => 59,  100 => 58,  46 => 7,  42 => 5,  39 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "editSO.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/editSO.html.twig");
    }
}
