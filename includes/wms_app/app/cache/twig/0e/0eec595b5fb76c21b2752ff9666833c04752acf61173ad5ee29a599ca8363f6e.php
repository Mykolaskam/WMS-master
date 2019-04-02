<?php

/* newcustomer.html.twig */
class __TwigTemplate_df28ccef5a8e701709d603dc058b16417f46a9f5e496037e467a8edfa0a46b65 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "newcustomer.html.twig", 1);
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
        echo "New Customer";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <main class=\"main-body\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_create_customer"] ?? null), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"container-row\">
                <h1 class=\"big-title\">Add New Customer</h1>
                <!--       <a id=\"addItem\" class=\"button-small shadow addItem\">
                           <i class=\"fas fa-plus plus\"></i>
                           <span class=\"btn-text\">Add Customer</span>
                       </a> -->
            </div>

            <div class=\"row-col-inputs\">
                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Customer Information (1/2)</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Salutation</label>
                        <input value=\"\" type=\"text\" name=\"salutation\" autofocus>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">First Name (required)</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"first_name\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Last Name (required)</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"last_name\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Email (required)</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"email\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Alt. Email</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"alt_email\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Phone Number</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"phone_number\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Alt. Phone Number</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"alt_phone_number\">
                    </div>

                </div>


                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Customer Information (2/2)</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Company Name (required)</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"company_name\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Website</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"website\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Pref. Curreency</label>
                        <input autocomplete=\"off\" value=\"\" type=\"text\" name=\"pref_currency\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Billing Address</label>
                        <textarea autocomplete=\"off\" name=\"billing_address\" rows=\"4\" cols=\"20\"></textarea>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Notes</label>
                        <textarea autocomplete=\"off\" name=\"notes\" rows=\"4\" cols=\"20\"></textarea>
                    </div>

                    <div class=\"input-container\">
                        <button type=\"submit\">Create Customer</button>
                    </div>

                </div>

            </div>


        </form>

    </main>





";
    }

    public function getTemplateName()
    {
        return "newcustomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  42 => 5,  39 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newcustomer.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/newcustomer.html.twig");
    }
}
