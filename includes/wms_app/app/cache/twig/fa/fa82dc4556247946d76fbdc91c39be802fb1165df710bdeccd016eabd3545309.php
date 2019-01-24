<?php

/* salesorders.html.twig */
class __TwigTemplate_d98637dde5273adb87640b498f6d26bf9d7d7269189f7f5470e913c095f40e69 extends Twig_Template
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
<div class=\"main-container\">


        <div class=\"side-panel\">

            <div class=\"user-profile-container\">
                <h3 class=\"ee\">EE M2M</h3>
            </div>

        <div class=\"menu-options-container\">
            <a class=\"menu-option\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["register"] ?? null), "html", null, true);
        echo "\"><i class=\"fas fa-user-plus\"></i>Add User</a>
        </div>

            <div class=\"logout-container\">
                <a class=\"logout\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["logout"] ?? null), "html", null, true);
        echo "\">Log Out</a>
            </div>

        </div>


        <main>


            <h1>Messages</h1>

            <div class=\"line\"></div>

            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 32
            echo "                <div class=\"message-box\">

                    <div class=\"date-time\">

                        <h5 class=\"date\">";
            // line 36
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["messages"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["time"] ?? null) : null), "html", null, true);
            echo "</h5>

                    </div>

                    <div class=\"message-container\">
                        <h2 class=\"message-name\">";
            // line 41
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["messages"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["group_id"] ?? null) : null), "html", null, true);
            echo "</h2>
                        <h3 class=\"message-phone-number\">";
            // line 42
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["messages"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["source"] ?? null) : null), "html", null, true);
            echo "</h3>
                    </div>

                    <div class=\"line2\"></div>

                    <div class=\"message-boxes\">
                        <div class=\"col\">
                            <h4>Switch 1</h4>
                            <p class=\"message-status\">";
            // line 50
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["messages"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["switch_1"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Switch 2</h4>
                            <p class=\"message-status\">";
            // line 55
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["messages"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["switch_2"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Switch 3</h4>
                            <p class=\"message-status\">";
            // line 60
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["messages"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["switch_3"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Switch 4</h4>
                            <p class=\"message-status\">";
            // line 65
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["messages"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["switch_4"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>
                    </div>

                    <div class=\"line2\"></div>

                    <div class=\"message-boxes\">
                        <div class=\"col\">
                            <h4>Temperature</h4>
                            <p class=\"message-status\">";
            // line 74
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["messages"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["temperature"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Fan</h4>
                            <p class=\"message-status\">";
            // line 79
            echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["messages"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["fan"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Last Number</h4>
                            <p class=\"message-status\">";
            // line 84
            echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = $context["messages"]) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["last_key"] ?? null) : null), "html", null, true);
            echo "</p>
                        </div>
                    </div>




                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
    </div>



    </main>


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
        return array (  171 => 93,  156 => 84,  148 => 79,  140 => 74,  128 => 65,  120 => 60,  112 => 55,  104 => 50,  93 => 42,  89 => 41,  81 => 36,  75 => 32,  71 => 31,  55 => 18,  48 => 14,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "salesorders.html.twig", "/Applications/MAMP/htdocs/wms-master/includes/wms_app/app/templates/salesorders.html.twig");
    }
}
