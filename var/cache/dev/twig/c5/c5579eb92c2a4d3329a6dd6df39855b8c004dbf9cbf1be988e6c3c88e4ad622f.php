<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_385f274dcd25f30d6f95bb095f8eefbcc156f5655f0d127861c2a1d03f12a821 extends Twig_Template
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
        $__internal_18cdc2a0640fdefe965e5f1b154f578bf66176f0667d4118c5ff7c8b209f5e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cdc2a0640fdefe965e5f1b154f578bf66176f0667d4118c5ff7c8b209f5e6d->enter($__internal_18cdc2a0640fdefe965e5f1b154f578bf66176f0667d4118c5ff7c8b209f5e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_18cdc2a0640fdefe965e5f1b154f578bf66176f0667d4118c5ff7c8b209f5e6d->leave($__internal_18cdc2a0640fdefe965e5f1b154f578bf66176f0667d4118c5ff7c8b209f5e6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
