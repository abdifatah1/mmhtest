<?php

/* MMHSiteBundle:Default:index.html.twig */
class __TwigTemplate_6108403daa665a27d2d27de9d7c88df698e994f457984719649d60d403fe640a extends Twig_Template
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
        $__internal_bc9b1aa0bbc7b40fe555ea0664a588e8772dc26544797fedd75feed3904212f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9b1aa0bbc7b40fe555ea0664a588e8772dc26544797fedd75feed3904212f8->enter($__internal_bc9b1aa0bbc7b40fe555ea0664a588e8772dc26544797fedd75feed3904212f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_bc9b1aa0bbc7b40fe555ea0664a588e8772dc26544797fedd75feed3904212f8->leave($__internal_bc9b1aa0bbc7b40fe555ea0664a588e8772dc26544797fedd75feed3904212f8_prof);

    }

    public function getTemplateName()
    {
        return "MMHSiteBundle:Default:index.html.twig";
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
", "MMHSiteBundle:Default:index.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/SiteBundle/Resources/views/Default/index.html.twig");
    }
}
