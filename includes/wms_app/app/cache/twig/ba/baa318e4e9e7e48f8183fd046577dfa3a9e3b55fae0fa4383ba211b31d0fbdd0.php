<?php

/* salesorders.html.twig */
class __TwigTemplate_f3fb72cdfe58bd9d37f78566e8645186263c424e56881d17d809538e5df8bc41 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "salesorders.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Sales Orders";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <main class=\"main-body\">

        <div class=\"container-row\">
            <h1 class=\"big-title\">Sales Orders</h1>
            <a class=\"button-small shadow\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["action_new_so"] ?? null), "html", null, true);
        echo "\">
                <i class=\"fas fa-plus plus\"></i>
                <span class=\"btn-text\">New SO</span>
            </a>
        </div>


        <div class=\"row-col-inputs\">

            <div class=\"col-inputs shadow shell\" id=\"so-table\">

                <div class=\"scroll-container\">

                    <input class=\"input-search search\" type=\"text\" name=\"search\" placeholder=\"Search\">

                    <table>

                        <tr class=\"table-titles\">
                            <th class=\"button-sort sort\" data-sort=\"customerName\">Customer Name<i
                                        class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"button-sort sort\" data-sort=\"SONumber\">SO Number<i
                                        class=\"arrow fas fa-angle-up\"></i>
                            </th>
                            <th class=\"button-sort sort\" data-sort=\"SODate\">SO Date<i class=\"arrow fas fa-angle-up\"></i>
                            </th>
                            <th class=\"text-center\">Packed</th>
                            <th class=\"text-center\">Shipped</th>
                            <th class=\"text-center\">Invoiced</th>
                            <th class=\"text-center button-sort sort\" data-sort=\"amount\">Amount<i
                                        class=\"arrow fas fa-angle-up\"></i></th>
                        </tr>

                        <tbody class=\"list\">

                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_salesorders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 46
            echo "                            <tr>
                                <td class=\"customerName\"> ";
            // line 47
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["order"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["first_name"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["order"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["last_name"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"SONumber\"> ";
            // line 48
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["order"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["so_number"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"SODate\"> ";
            // line 49
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["order"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["so_date"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"packed text-center\">
                                    <div class=\"indicator ";
            // line 51
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["order"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["packed"] ?? null) : null), "html", null, true);
            echo "\"></div>
                                </td>
                                <td class=\" shipped text-center\">
                                    <div class=\"indicator ";
            // line 54
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["order"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["shipped"] ?? null) : null), "html", null, true);
            echo "\"></div>
                                </td>
                                <td class=\"invoiced text-center\">
                                    <div class=\"indicator ";
            // line 57
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["order"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["invoiced"] ?? null) : null), "html", null, true);
            echo "\"></div>
                                </td>
                                <td class=\"amount text-center\"> ";
            // line 59
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["order"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["amount"] ?? null) : null), "html", null, true);
            echo " </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </main>


    <div class=\"Modal\">

        <div class=\"side-modal-content shadow\">

            <div class=\"side-modal-container-row-top shadow\">
                <h2>S-00001</h2>
                <a class=\"button-small shadow\" href=\"\">
                    <i class=\"fas fa-edit edit-icon\"></i>
                    <span class=\"btn-text\">Edit</span>
                </a>

                <!--    <span class=\"close-side-modal\">&times;</span> -->
            </div>

            <div class=\"side-modal-container\">

                <div class=\"side-modal-container-row\">
                    <h3>Allan Smith</h3>
                    <span>12/12/2018</span>
                </div>

                <div class=\"side-modal-container-row\">
                    <span>Packed</span>
                    <label class=\"switch\">
                        <input type=\"checkbox\">
                        <span class=\"slider round\"></span>
                    </label>
                </div>

                <div class=\"side-modal-container-row\">
                    <span>Shipped</span>
                    <label class=\"switch\">
                        <input type=\"checkbox\">
                        <span class=\"slider round\"></span>
                    </label>
                </div>

                <div class=\"side-modal-container-row\">
                    <span>Invoiced</span>
                    <label class=\"switch\">
                        <input type=\"checkbox\">
                        <span class=\"slider round\"></span>
                    </label>
                </div>

            </div>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "salesorders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 62,  125 => 59,  120 => 57,  114 => 54,  108 => 51,  103 => 49,  99 => 48,  93 => 47,  90 => 46,  86 => 45,  49 => 11,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salesorders.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/salesorders.html.twig");
    }
}
