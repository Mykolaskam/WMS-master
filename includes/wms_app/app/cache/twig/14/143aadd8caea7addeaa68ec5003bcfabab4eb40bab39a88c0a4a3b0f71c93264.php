<?php

/* newvendor.html.twig */
class __TwigTemplate_32372e9c2e394dccdc3447227a201ca24a05b12d0e3381ed17a08dc8935d8dd3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "newvendor.html.twig", 1);
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
        echo "New Vendor";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <main class=\"main-body\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_create_vendor"] ?? null), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"container-row\">
                <h1 class=\"big-title\">Add New Vendor</h1>
                <!--       <a id=\"addItem\" class=\"button-small shadow addItem\">
                           <i class=\"fas fa-plus plus\"></i>
                           <span class=\"btn-text\">Add Customer</span>
                       </a> -->
            </div>

            <div class=\"row-col-inputs\">
                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Vendor Information</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Salutation</label>
                        <input value=\"\" type=\"text\" name=\"salutation\" autofocus>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">First Name</label>
                        <input value=\"\" type=\"text\" name=\"first_name\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Last Name</label>
                        <input value=\"\" type=\"text\" name=\"last_name\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Email</label>
                        <input value=\"\" type=\"text\" name=\"email\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Alt. Email</label>
                        <input value=\"\" type=\"text\" name=\"alt_email\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Phone Number</label>
                        <input value=\"\" type=\"text\" name=\"phone_number\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Alt. Phone Number</label>
                        <input value=\"\" type=\"text\" name=\"alt_phone_number\">
                    </div>

                </div>


                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Vendor Information</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Company Name</label>
                        <input value=\"\" type=\"text\" name=\"company_name\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Website</label>
                        <input value=\"\" type=\"text\" name=\"website\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Pref. Curreency</label>
                        <input value=\"\" type=\"text\" name=\"pref_currency\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Billing Address</label>
                        <textarea name=\"billing_address\" rows=\"7\" cols=\"20\"></textarea>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Notes</label>
                        <textarea name=\"notes\" rows=\"7\" cols=\"20\"></textarea>
                    </div>

                </div>

            </div>
            
            <div class=\"row-col-inputs\">
                <div class=\"col-inputs\">
                    <button type=\"submit\">Create Vendor</button>
                </div>
            </div>

        </form>

    </main>

";
    }

    public function getTemplateName()
    {
        return "newvendor.html.twig";
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
        return new Twig_Source("", "newvendor.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/newvendor.html.twig");
    }
}
