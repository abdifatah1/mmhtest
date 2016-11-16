<?php

/* MMHAdminBundle:Default:index.html.twig */
class __TwigTemplate_fcf8fff197ec4ae6872a90adac50a727868aa140fc82434493115c3629428260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e2921f089738fc8025b79923dedeacba24c1d97c04e850b36bac34d93fff740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2921f089738fc8025b79923dedeacba24c1d97c04e850b36bac34d93fff740->enter($__internal_4e2921f089738fc8025b79923dedeacba24c1d97c04e850b36bac34d93fff740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4e2921f089738fc8025b79923dedeacba24c1d97c04e850b36bac34d93fff740->leave($__internal_4e2921f089738fc8025b79923dedeacba24c1d97c04e850b36bac34d93fff740_prof);

    }

    public function getTemplateName()
    {
        return "MMHAdminBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "MMHAdminBundle:Default:index.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
