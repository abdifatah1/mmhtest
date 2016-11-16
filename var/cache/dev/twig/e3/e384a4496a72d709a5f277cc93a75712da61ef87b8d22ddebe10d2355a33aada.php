<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7a50d73bb631d6e7e296090fd3f2f668298069e2a069ac9982820dbbb76fec99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20502c5c585fc07b9bce7213138f1dc96997e5c7b96031d7b628c131ef2787d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20502c5c585fc07b9bce7213138f1dc96997e5c7b96031d7b628c131ef2787d7->enter($__internal_20502c5c585fc07b9bce7213138f1dc96997e5c7b96031d7b628c131ef2787d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_20502c5c585fc07b9bce7213138f1dc96997e5c7b96031d7b628c131ef2787d7->leave($__internal_20502c5c585fc07b9bce7213138f1dc96997e5c7b96031d7b628c131ef2787d7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2ebf9cc8859ae5da77c79ace55830a19d58cb9231f802805d6ed7e8762febb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ebf9cc8859ae5da77c79ace55830a19d58cb9231f802805d6ed7e8762febb5->enter($__internal_a2ebf9cc8859ae5da77c79ace55830a19d58cb9231f802805d6ed7e8762febb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_a2ebf9cc8859ae5da77c79ace55830a19d58cb9231f802805d6ed7e8762febb5->leave($__internal_a2ebf9cc8859ae5da77c79ace55830a19d58cb9231f802805d6ed7e8762febb5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
