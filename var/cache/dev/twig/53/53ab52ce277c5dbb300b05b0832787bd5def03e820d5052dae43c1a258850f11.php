<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2b32fb2470aa36eeca13b7973b839ce80e6a8ab91ccde9778996446fddbff1d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_058b7cddb0c97de32af568884e0339d81701b12f87474bc61e6bb9f3d19d59ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058b7cddb0c97de32af568884e0339d81701b12f87474bc61e6bb9f3d19d59ba->enter($__internal_058b7cddb0c97de32af568884e0339d81701b12f87474bc61e6bb9f3d19d59ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_058b7cddb0c97de32af568884e0339d81701b12f87474bc61e6bb9f3d19d59ba->leave($__internal_058b7cddb0c97de32af568884e0339d81701b12f87474bc61e6bb9f3d19d59ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cce62f1ebed3970091da9de0fb21666c568a9cf96949502f26726e65ad66c0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce62f1ebed3970091da9de0fb21666c568a9cf96949502f26726e65ad66c0b3->enter($__internal_cce62f1ebed3970091da9de0fb21666c568a9cf96949502f26726e65ad66c0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cce62f1ebed3970091da9de0fb21666c568a9cf96949502f26726e65ad66c0b3->leave($__internal_cce62f1ebed3970091da9de0fb21666c568a9cf96949502f26726e65ad66c0b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b105ea54a83482b797a186136120ac706c84bfadbb4085deb4c08e5fde14fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b105ea54a83482b797a186136120ac706c84bfadbb4085deb4c08e5fde14fa1->enter($__internal_9b105ea54a83482b797a186136120ac706c84bfadbb4085deb4c08e5fde14fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b105ea54a83482b797a186136120ac706c84bfadbb4085deb4c08e5fde14fa1->leave($__internal_9b105ea54a83482b797a186136120ac706c84bfadbb4085deb4c08e5fde14fa1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fafb8cd9327dd18fa526f1a940414070ac0ad55438b8f7c138bb3455c9346339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafb8cd9327dd18fa526f1a940414070ac0ad55438b8f7c138bb3455c9346339->enter($__internal_fafb8cd9327dd18fa526f1a940414070ac0ad55438b8f7c138bb3455c9346339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fafb8cd9327dd18fa526f1a940414070ac0ad55438b8f7c138bb3455c9346339->leave($__internal_fafb8cd9327dd18fa526f1a940414070ac0ad55438b8f7c138bb3455c9346339_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
