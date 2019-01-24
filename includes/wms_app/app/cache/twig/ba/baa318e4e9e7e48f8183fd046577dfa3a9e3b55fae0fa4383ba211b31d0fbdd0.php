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
    public function block_content($context, array $blocks = array())
    {
        // line 3
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
            <a class=\"menu-item\" href=\"index.html\"><i class=\"far fa-file icon\"></i></a>
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-file-invoice-dollar icon\"></i></a>
            <a class=\"menu-item\" href=\"#\"><i class=\"fas fa-money-bill icon\"></i></a>
        </div>
    </div>


    <main class=\"main-body\">

        <div class=\"container-row\">
            <h1 class=\"big-title\">Sales Orders</h1>
            <a class=\"button-small shadow\" href=\"newSO.html\">
                <i class=\"fas fa-plus plus\"></i>
                <span class=\"btn-text\">New SO</span>
            </a>
        </div>

        <div class=\"shadow\" id=\"so-table\">

            <div class=\"scroll-container\">

                <input class=\"input-search search\" type=\"text\" name=\"search\" placeholder=\"Search\">

                <table>

                    <tr class=\"table-titles\">
                        <th class=\"button-sort sort\" data-sort=\"customerName\">Customer Name<i
                                    class=\"arrow fas fa-angle-up\"></i></th>
                        <th class=\"button-sort sort\" data-sort=\"SONumber\">SO Number<i class=\"arrow fas fa-angle-up\"></i>
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
                    <tr id=\"SideModalBtn\">
                        <td class=\"customerName\">Allan Smith</td>
                        <td class=\"SONumber\">S0-00001</td>
                        <td class=\"SODate\">12/12/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£500</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">David Jobs</td>
                        <td class=\"SONumber\">S0-00002</td>
                        <td class=\"SODate\">10/09/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£399</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Mark Trevor</td>
                        <td class=\"SONumber\">S0-00003</td>
                        <td class=\"SODate\">01/11/2017</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£476</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Lucas Dwin</td>
                        <td class=\"SONumber\">S0-00004</td>
                        <td class=\"SODate\">02/01/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£899</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Anna Herman</td>
                        <td class=\"SONumber\">S0-00005</td>
                        <td class=\"SODate\">15/08/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£124</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Emma Beluchi</td>
                        <td class=\"SONumber\">S0-00006</td>
                        <td class=\"SODate\">23/06/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£539</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>

                    <tr>
                        <td class=\"customerName\">Christian Willis</td>
                        <td class=\"SONumber\">S0-00007</td>
                        <td class=\"SODate\">13/02/2018</td>
                        <td class=\"packed text-center\">
                            <div class=\"indicator green\"></div>
                        </td>
                        <td class=\" shipped text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"invoiced text-center\">
                            <div class=\"indicator\"></div>
                        </td>
                        <td class=\"amount text-center\">£999</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </main>


    <div id=\"SideModal\" class=\"side-modal\">

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
        return array (  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salesorders.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/salesorders.html.twig");
    }
}
