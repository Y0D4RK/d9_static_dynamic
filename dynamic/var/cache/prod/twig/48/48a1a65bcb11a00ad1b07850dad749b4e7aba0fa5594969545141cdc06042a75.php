<?php

/* default/index.html.twig */
class __TwigTemplate_cf934f467f6c2c44b595b6a15c77a3f569d60227a445f6eed6c757aeb2cf7908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\" id=\"home\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div id=\"welcome\">
                    <h1><span>Welcome to</span> Symfony ";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
                    <div id=\"status\">
                        <p>
                            Your application is now ready. You can start working on it at:
                            <code>";
        // line 12
        echo twig_escape_filter($this->env, ($context["base_dir"] ?? null), "html", null, true);
        echo "</code>
                        </p>
                    </div>
                    <h2> Link page list :</h2>
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Login</a></li>
                        <li><a href=\"#\">Register</a></li>
                        <li><a href=\"#\">Logout</a></li>
                        <li>... other link page if u want ! </li>
                    </ul>
                    <h2>Consigne projet symfony :</h2>
                    <ul>
                        <li>2 services <span class=\"fa fa-check\"></span></li>
                        <li>3 entitées <span class=\"fa fa-check\"></span></li>
                        <li>4 actions controleur <span class=\"fa fa-check\"></span></li>
                        <li>3 forms <span class=\"fa fa-check\"></span></li>
                        <li>fixtures </li>
                        <li>interface administrateur </li>
                        <li>test - phpunit </li>
                    </ul>
                    <h2>Consigne projet annuel..</h2>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/home/web/prod/dynamic/app/Resources/views/default/index.html.twig");
    }
}
