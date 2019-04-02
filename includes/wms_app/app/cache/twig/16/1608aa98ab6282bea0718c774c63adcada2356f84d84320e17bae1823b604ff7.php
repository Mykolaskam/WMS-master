<?php

/* editvendor.html.twig */
class __TwigTemplate_780e038896ea743cbeebb37cdfa1a65484bee8a1c3e12dc3358f7577201514a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "editvendor.html.twig", 1);
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
        echo "Edit Vendor";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <main class=\"main-body\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_update_vendor"] ?? null), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"container-row\">
                <h1 class=\"big-title\">Edit Vendor</h1>
                <!--       <a id=\"addItem\" class=\"button-small shadow addItem\">
                           <i class=\"fas fa-plus plus\"></i>
                           <span class=\"btn-text\">Add Customer</span>
                       </a> -->
            </div>

            <div class=\"row-col-inputs\">
                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Vendor Information (1/2)</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["the_vendor"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
            // line 25
            echo "
                    <div class=\"input-container\">
                        <label for=\"\">Salutation</label>
                        <input value=\"";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["vendor"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["salutation"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"salutation\" autofocus>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">First Name (required)</label>
                        <input autocomplete=\"off\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["vendor"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["first_name"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"first_name\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Last Name (required)</label>
                        <input autocomplete=\"off\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["vendor"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["last_name"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"last_name\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Email (required)</label>
                        <input autocomplete=\"off\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["vendor"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["email"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"email\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Alt. Email</label>
                        <input autocomplete=\"off\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["vendor"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["alt_email"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"alt_email\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Phone Number</label>
                        <input autocomplete=\"off\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["vendor"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["phone_number"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"phone_number\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Alt. Phone Number</label>
                        <input autocomplete=\"off\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["vendor"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["alt_phone_number"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"alt_phone_number\">
                    </div>

                </div>


                <div class=\"col-inputs shadow shell\">

                    <div class=\"input-container\">
                        <h2 class=\"col-title\">Vendor Information (2/2)</h2>
                        <div class=\"line-blue\"></div>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Company Name (required)</label>
                        <input autocomplete=\"off\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["vendor"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["company_name"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"company_name\" required>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Website</label>
                        <input autocomplete=\"off\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["vendor"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["website"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"website\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Pref. Curreency</label>
                        <input autocomplete=\"off\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = $context["vendor"]) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["pref_currency"] ?? null) : null), "html", null, true);
            echo "\" type=\"text\" name=\"pref_currency\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Billing Address</label>
                        <textarea autocomplete=\"off\" name=\"billing_address\" rows=\"4\" cols=\"20\">";
            // line 88
            echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = $context["vendor"]) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["billing_address"] ?? null) : null), "html", null, true);
            echo "</textarea>
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\">Notes</label>
                        <textarea autocomplete=\"off\" name=\"notes\" rows=\"4\" cols=\"20\">";
            // line 93
            echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = $context["vendor"]) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["notes"] ?? null) : null), "html", null, true);
            echo "</textarea>
                    </div>


                    <div class=\"input-container\">
                        <button type=\"submit\">Update Vendor</button>
                        <a class=\"button button-red\" onclick=\"window.location='/wms/index.php/deletevendor';\">Delete </a>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                </div>

            </div>


        </form>

    </main>

";
    }

    public function getTemplateName()
    {
        return "editvendor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 103,  173 => 93,  165 => 88,  157 => 83,  149 => 78,  141 => 73,  123 => 58,  115 => 53,  107 => 48,  99 => 43,  91 => 38,  83 => 33,  75 => 28,  70 => 25,  66 => 24,  46 => 7,  42 => 5,  39 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "editvendor.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/editvendor.html.twig");
    }
}
