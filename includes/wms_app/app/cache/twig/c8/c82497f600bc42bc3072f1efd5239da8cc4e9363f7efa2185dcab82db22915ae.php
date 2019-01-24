<?php

/* login.html.twig */
class __TwigTemplate_90c21bfb95e61d15248aaa1ad9d78307e29db1d7a4144d396c71f5c8988a2d71 extends Twig_Template
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
<div class=\"container\">

    <h1>EE M2M</h1>

    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["action_login"] ?? null), "html", null, true);
        echo "\" method=\"post\">

        <h2>Sign In</h2>

        <div class=\"text-wrapper\">
            <input class=\"input\" type=\"text\" name=\"username\" />
            <label>Username</label>
        </div>

        <div class=\"text-wrapper\">
            <input class=\"input\" type=\"password\" name=\"password\" />
            <label>Password</label>
        </div>

        <button type=\"submit\" class=\"btn-blue\" name=\"login\">Login</button>

        <h4 class=\"error-msg\">";
        // line 25
        echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
        echo "</h4>
    </form>

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
        return array (  68 => 25,  49 => 9,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "/Applications/MAMP/htdocs/wms-master/includes/wms_app/app/templates/login.html.twig");
    }
}
