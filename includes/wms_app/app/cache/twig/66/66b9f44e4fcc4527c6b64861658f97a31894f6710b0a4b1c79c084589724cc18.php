<?php

/* login.html.twig */
class __TwigTemplate_630cc2934aa1f27fc93fbcc32a7c6235246ec8c41776dec17785e40d17e825d2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
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
        echo "Log In";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"login-container\">
        <div class=\"login-form\">
            <div class=\"login-form-contents\">
                <h1 class=\"logo-login\">WMS</h1>

                <div class=\"input-container\">
                    <h1>Log In</h1>
                </div>

                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["action_login"] ?? null), "html", null, true);
        echo "\" method=\"post\">
                    <div class=\"input-container\">
                        <label for=\"\"> Username</label>
                        <input class=\"text-input\" type=\"text\" name=\"username\">
                    </div>

                    <div class=\"input-container\">
                        <label for=\"\"> Password</label>
                        <input class=\"text-input\" type=\"password\" name=\"password\">
                    </div>

                    <div class=\"input-container\">
                        <button type=\"submit\">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/login.html.twig");
    }
}
