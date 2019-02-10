<?php

/* customers.html.twig */
class __TwigTemplate_9cab8eed88cfa4c66b1fd2f5396333574cf0b52c5d967285293792bda84824e2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "customers.html.twig", 1);
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
        echo "Customers";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <main class=\"main-body\">

        <div class=\"container-row\">
            <h1 class=\"big-title\">Customers</h1>
            <a class=\"button-small shadow\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["action_new_customer"] ?? null), "html", null, true);
        echo "\">
                <i class=\"fas fa-plus plus\"></i>
                <span class=\"btn-text\">New Customer</span>
            </a>
        </div>


        <div class=\"row-col-inputs\">

            <div class=\"col-inputs shadow shell\" id=\"customers-table\">

                <div class=\"scroll-container\">

                    <input class=\"input-search search\" type=\"text\" name=\"search\" placeholder=\"Search\">

                    <table>

                        <tr class=\"table-titles\">
                            <th class=\"button-sort sort\" data-sort=\"salutation\">Salutation<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"button-sort sort\" data-sort=\"name\">Name<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"button-sort sort\" data-sort=\"companyName\">Company Name<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"text-center button-sort sort\" data-sort=\"email\">Email<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"text-center button-sort sort\" data-sort=\"phoneNumber\">Phone Number<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"text-center button-sort sort\" data-sort=\"website\">Website<i class=\"arrow fas fa-angle-up\"></i></th>
                            <th class=\"text-center button-sort sort\" data-sort=\"billingAddres\">Billing Address<i class=\"arrow fas fa-angle-up\"></i></th>
                        </tr>

                        <tbody class=\"list\">

                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_customers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 41
            echo "
                            <tr>
                                <td class=\"salutation\"> ";
            // line 43
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["customer"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["salutation"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"name\"> ";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["customer"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["first_name"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["customer"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["last_name"] ?? null) : null), "html", null, true);
            echo "</td>
                                <td class=\"companyName\"> ";
            // line 45
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["customer"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["company_name"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"email\"> ";
            // line 46
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["customer"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["email"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"phoneNumber\"> ";
            // line 47
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["customer"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["phone_number"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"website\"> ";
            // line 48
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["customer"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["website"] ?? null) : null), "html", null, true);
            echo " </td>
                                <td class=\"billingAddress\"> ";
            // line 49
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["customer"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["billing_address"] ?? null) : null), "html", null, true);
            echo " </td>
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 53,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  93 => 44,  89 => 43,  85 => 41,  81 => 40,  49 => 11,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "customers.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/customers.html.twig");
    }
}
