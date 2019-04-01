<?php

/* register.html.twig */
class __TwigTemplate_14c2658dfb60622950324c0efac842f94c36898c80b464b32fd24be83aa04420 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "register.html.twig", 1);
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
        echo "Register";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <main class=\"main-body\">

        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_register"] ?? null), "html", null, true);
        echo "\" method=\"post\">


            <div class=\"col-inputs shadow shell\">

                <h2 class=\"col-title\">Add New User</h2>

                <div class=\"input-container\">
                    <label>Username</label>
                    <input class=\"input\" type=\"text\" name=\"username\"/>
                </div>

                <div class=\"input-container\">
                    <label>Password</label>
                    <input class=\"input\" type=\"password\" name=\"password\"/>
                </div>

                <div class=\"input-container\">
                    <label>Name</label>
                    <input class=\"input\" type=\"text\" name=\"name\"/>
                </div>

                <div class=\"input-container\">
                    <label>Surname</label>
                    <input class=\"input\" type=\"text\" name=\"surname\"/>
                </div>

                <div class=\"input-container\">
                    <button type=\"submit\" class=\"btn-blue\" name=\"register\">Submit</button>
                </div>
            </div>
        </form>

        <h4 class=\"error-msg\">";
        // line 40
        echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
        echo "</h4>

    </main>

";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 40,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.html.twig", "/Applications/MAMP/htdocs/WMS-master/includes/wms_app/app/templates/register.html.twig");
    }
}
