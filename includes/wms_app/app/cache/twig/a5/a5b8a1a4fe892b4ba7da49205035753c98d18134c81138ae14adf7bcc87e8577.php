<?php

/* dashboard.html.twig */
class __TwigTemplate_4028d3780b0a8c092f4d693d28850fba7be206e71754539171c5678f5e55d76e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard.html.twig", 1);
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
        echo "Dashboard";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <main class=\"main-body\">

        <div class=\"container-row\">
            <h1 class=\"big-title\">Dashboard</h1>
        </div>

        <div class=\"row-col-inputs\">

            <div class=\"shadow shell indicator-box pointer\" onclick=\"window.location='/wms/index.php/editsalesorder/";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["order"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["ID"] ?? null) : null), "html", null, true);
        echo "';\">
                <div>
                    <h2 class=\"large-no\">0</h2>
                    <h3>To be Packed</h3>
                </div>
            </div>

            <div class=\"shadow shell indicator-box pointer\">
                <div>
                    <h2 class=\"large-no\">0</h2>
                    <h3>To be Shipped</h3>
                </div>
            </div>

            <div class=\"shadow shell indicator-box pointer\">
                <div>
                    <h2 class=\"large-no\">0</h2>
                    <h3>To be Invoiced</h3>
                </div>
            </div>

            <div class=\"shadow shell indicator-box pointer\">
                <div>
                    <h2 class=\"large-no\">0</h2>
                    <h3>To be packed</h3>
                </div>
            </div>

        </div>

        <div class=\"row-col-inputs\">

            <div class=\"col-inputs shadow shell\">

                <div class=\"scroll-container\">

                    <div class=\"input-search\"></div>

                    <table>

                        <tr class=\"table-titles\">
                            <th class=\"button-sort sort\" data-sort=\"customerName\">Customer Name<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"button-sort sort\" data-sort=\"SONumber\">SO Number<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"button-sort sort\" data-sort=\"SODate\">SO Date<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"text-center button-sort sort\" data-sort=\"amount\">Amount<i class=\"arrow fas fa-angle-up\"></i></th>
                        </tr>

                        <tbody class=\"list\">

                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_salesorders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 65
            echo "
                            <tr onclick=\"window.location='/wms/index.php/editsalesorder/";
            // line 66
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["order"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["ID"] ?? null) : null), "html", null, true);
            echo "';\">
                                <td class=\"customerName\"> ";
            // line 67
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["order"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["customer_name"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"SONumber\"> ";
            // line 68
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["order"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["so_number"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"SODate\"> ";
            // line 69
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["order"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["so_date"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"amount text-center\"> £";
            // line 70
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["order"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["amount"] ?? null) : null), "html", null, true);
            echo " </td>
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
                        </tbody>

                    </table>

                </div>
            </div>
        </div>

    </main>

";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 74,  128 => 70,  124 => 69,  120 => 68,  116 => 67,  112 => 66,  109 => 65,  105 => 64,  53 => 15,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/dashboard.html.twig");
    }
}
