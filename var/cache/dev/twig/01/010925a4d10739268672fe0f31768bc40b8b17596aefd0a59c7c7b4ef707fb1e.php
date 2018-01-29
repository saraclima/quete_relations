<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af21fb0a56f44dd36631a61c7cdf5ecf55966068980654190e595a95fabf6a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af21fb0a56f44dd36631a61c7cdf5ecf55966068980654190e595a95fabf6a97->enter($__internal_af21fb0a56f44dd36631a61c7cdf5ecf55966068980654190e595a95fabf6a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ac168395924a6fec7965e42e21884a40c13d1c268fc869d287bf3687d5bcff8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac168395924a6fec7965e42e21884a40c13d1c268fc869d287bf3687d5bcff8f->enter($__internal_ac168395924a6fec7965e42e21884a40c13d1c268fc869d287bf3687d5bcff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af21fb0a56f44dd36631a61c7cdf5ecf55966068980654190e595a95fabf6a97->leave($__internal_af21fb0a56f44dd36631a61c7cdf5ecf55966068980654190e595a95fabf6a97_prof);

        
        $__internal_ac168395924a6fec7965e42e21884a40c13d1c268fc869d287bf3687d5bcff8f->leave($__internal_ac168395924a6fec7965e42e21884a40c13d1c268fc869d287bf3687d5bcff8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d5f7c0d400972f829259f0585b74117f467bbf36636b37b9fb4425c8d871a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5f7c0d400972f829259f0585b74117f467bbf36636b37b9fb4425c8d871a7a->enter($__internal_5d5f7c0d400972f829259f0585b74117f467bbf36636b37b9fb4425c8d871a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9b64db8dd7cb0df0d6c533ba5a8d99ce07d56b8016aba7c47f93e3f44d98bbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b64db8dd7cb0df0d6c533ba5a8d99ce07d56b8016aba7c47f93e3f44d98bbbe->enter($__internal_9b64db8dd7cb0df0d6c533ba5a8d99ce07d56b8016aba7c47f93e3f44d98bbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9b64db8dd7cb0df0d6c533ba5a8d99ce07d56b8016aba7c47f93e3f44d98bbbe->leave($__internal_9b64db8dd7cb0df0d6c533ba5a8d99ce07d56b8016aba7c47f93e3f44d98bbbe_prof);

        
        $__internal_5d5f7c0d400972f829259f0585b74117f467bbf36636b37b9fb4425c8d871a7a->leave($__internal_5d5f7c0d400972f829259f0585b74117f467bbf36636b37b9fb4425c8d871a7a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/quete_relations/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
