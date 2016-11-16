<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1864b2e7326c779552f07875d2a30b507e062dbb272096d03d5b47e3a6d2a174 extends Twig_Template
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
        $__internal_4b67f5f4046405d0715b59fd8b673ca64f4c4bc3747313bc9a18d6d68f3b870f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b67f5f4046405d0715b59fd8b673ca64f4c4bc3747313bc9a18d6d68f3b870f->enter($__internal_4b67f5f4046405d0715b59fd8b673ca64f4c4bc3747313bc9a18d6d68f3b870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4b67f5f4046405d0715b59fd8b673ca64f4c4bc3747313bc9a18d6d68f3b870f->leave($__internal_4b67f5f4046405d0715b59fd8b673ca64f4c4bc3747313bc9a18d6d68f3b870f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
