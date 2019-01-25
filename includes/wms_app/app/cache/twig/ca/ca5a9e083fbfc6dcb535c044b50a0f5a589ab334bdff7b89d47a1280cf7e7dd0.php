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

    <div class=\"top-bar shadow\">
        <!--  <a id=\"menu\" class=\"menu-button\"><i class=\"fas fa-bars\"></i></a> -->
        <h2 class=\"logo\">WMS</h2>
        <div class=\"user-container\">
            <i class=\"fas fa-user user-icon\"></i>
            <a class=\"username\" href=\"\">Mykolas</a>
        </div>
    </div>

    <div id=\"side-menu\" class=\"shadow side-menu\">
        <div class=\"menu-items\">
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-home icon\"></i></a>
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-boxes icon\"></i></a>
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-users icon\"></i></a>
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-shopping-cart icon\"></i></a>
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-file icon\"></i></a>
            <a class=\"menu-item\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["sales_orders"] ?? null), "html", null, true);
        echo "\"><i class=\"far fa-file icon\"></i></a>
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-file-invoice-dollar icon\"></i></a>
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-money-bill icon\"></i></a>
        </div>
    </div>


    <main class=\"main-body\">

        <div class=\"container-row\">
            <h1 class=\"big-title\">Add New SO</h1>
        </div>



        <div class=\"col-inputs shadow shell\">

            <div class=\"input-container\">
                <label for=\"\"> Customer</label>
                <input type=\"text\">
                <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select a
                    Customer</span>
            </div>

            <div class=\"input-container\">
                <label for=\"\"> Sales Order Number</label>
                <input type=\"text\">
                <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select a
                    Customer</span>
            </div>

            <div class=\"input-container\">
                <label for=\"\"> Date</label>
                <input type=\"text\">
                <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select a
                    Customer</span>
            </div>

        </div>


        <div class=\"table shadow shell\" id=\"new-so-table\">

            <div class=\"scroll-container\">

                <table>

                    <tr class=\"table-titles\">
                        <th class=\"button-sort sort\" data-sort=\"\">Name<i class=\"arrow fas fa-angle-up\"></i></th>
                        <th class=\"button-sort sort\" data-sort=\"\">SKU<i class=\"arrow fas fa-angle-up\"></i></th>
                        <th class=\"button-sort sort\" data-sort=\"\">Purchase Price<i class=\"arrow fas fa-angle-up\"></i></th>
                        <th class=\"text-center\">Quantity</th>
                        <th class=\"text-center\">Amount</th>
                        <th class=\"text-center\"></th>
                    </tr>

                    <tbody class=\"list\">

                    <tr>
                        <td class=\"\">iPhone 7</td>
                        <td class=\"\">iph7bl64gb</td>
                        <td class=\"\">£400</td>
                        <td class=\"text-center\">2</td>
                        <td class=\"text-center\">£800</td>
                        <td class=\"text-center\">
                            <div id=\"removeItem\" class=\"remove-item\"><i class=\"far fa-trash-alt\"></i></div>
                        </td>
                    </tr>

                    </tbody>

                </table>

            </div>

        </div>


        <div id=\"addItem\" class=\"add-item\"><i class=\"fas fa-plus-circle add-icon\"></i> <a>Add Item</a></div>


    </main>



    <!-- The Modal -->
    <div id=\"myModal\" class=\"modal\">
        <!-- Modal content -->
        <div class=\"modal-content shell shadow\">
            <span class=\"close\">&times;</span>


            <div class=\"input-container\">
                <label for=\"\"> Customer</label>
                <input type=\"text\">
                <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select a
                        Customer</span>
            </div>

            <div class=\"input-container\">
                <label for=\"\"> Sales Order Number</label>
                <input type=\"text\">
                <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select a
                        Customer</span>
            </div>

            <div class=\"input-container\">
                <label for=\"\"> Date</label>
                <input type=\"text\">
                <span class=\"input-info\"><i class=\"question-mark far fa-question-circle\"></i>Please Select a
                        Customer</span>
            </div>

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
        return array (  62 => 22,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newSO.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/newSO.html.twig");
    }
}
