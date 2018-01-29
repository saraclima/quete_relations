<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a2d997c77c54b7b47aabe37c3717e91322954f858ebae0f9f99d33f678e3891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2d997c77c54b7b47aabe37c3717e91322954f858ebae0f9f99d33f678e3891->enter($__internal_0a2d997c77c54b7b47aabe37c3717e91322954f858ebae0f9f99d33f678e3891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8dd1c6529e34a8db9e7fe2638e31deab68b543efab504b1a07e29db0da4df189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd1c6529e34a8db9e7fe2638e31deab68b543efab504b1a07e29db0da4df189->enter($__internal_8dd1c6529e34a8db9e7fe2638e31deab68b543efab504b1a07e29db0da4df189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a2d997c77c54b7b47aabe37c3717e91322954f858ebae0f9f99d33f678e3891->leave($__internal_0a2d997c77c54b7b47aabe37c3717e91322954f858ebae0f9f99d33f678e3891_prof);

        
        $__internal_8dd1c6529e34a8db9e7fe2638e31deab68b543efab504b1a07e29db0da4df189->leave($__internal_8dd1c6529e34a8db9e7fe2638e31deab68b543efab504b1a07e29db0da4df189_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_357d33f0007f77aaa7382ff7c7a5650c6d46ba028bc34f03beb7349f7e481b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357d33f0007f77aaa7382ff7c7a5650c6d46ba028bc34f03beb7349f7e481b93->enter($__internal_357d33f0007f77aaa7382ff7c7a5650c6d46ba028bc34f03beb7349f7e481b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b52d93190dce63ed7593eac61d1a1caa3298ddd54d40f2b5964a338df22240b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52d93190dce63ed7593eac61d1a1caa3298ddd54d40f2b5964a338df22240b7->enter($__internal_b52d93190dce63ed7593eac61d1a1caa3298ddd54d40f2b5964a338df22240b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b52d93190dce63ed7593eac61d1a1caa3298ddd54d40f2b5964a338df22240b7->leave($__internal_b52d93190dce63ed7593eac61d1a1caa3298ddd54d40f2b5964a338df22240b7_prof);

        
        $__internal_357d33f0007f77aaa7382ff7c7a5650c6d46ba028bc34f03beb7349f7e481b93->leave($__internal_357d33f0007f77aaa7382ff7c7a5650c6d46ba028bc34f03beb7349f7e481b93_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d17f6e81f76570b93b4edea035622913fed9b29a4b7faa9d3e5113fad25eab1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17f6e81f76570b93b4edea035622913fed9b29a4b7faa9d3e5113fad25eab1f->enter($__internal_d17f6e81f76570b93b4edea035622913fed9b29a4b7faa9d3e5113fad25eab1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e53c8f2b7cd9a9d539a13d386adb97781df30c300058b11fa9b6c9315f02a10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53c8f2b7cd9a9d539a13d386adb97781df30c300058b11fa9b6c9315f02a10b->enter($__internal_e53c8f2b7cd9a9d539a13d386adb97781df30c300058b11fa9b6c9315f02a10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e53c8f2b7cd9a9d539a13d386adb97781df30c300058b11fa9b6c9315f02a10b->leave($__internal_e53c8f2b7cd9a9d539a13d386adb97781df30c300058b11fa9b6c9315f02a10b_prof);

        
        $__internal_d17f6e81f76570b93b4edea035622913fed9b29a4b7faa9d3e5113fad25eab1f->leave($__internal_d17f6e81f76570b93b4edea035622913fed9b29a4b7faa9d3e5113fad25eab1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4de509e64ff908406a0ab48a34f9977cfc0918fd2b1be212b78b3086b89d202a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de509e64ff908406a0ab48a34f9977cfc0918fd2b1be212b78b3086b89d202a->enter($__internal_4de509e64ff908406a0ab48a34f9977cfc0918fd2b1be212b78b3086b89d202a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d1eb4422a67c30a2da6e6e32295665c349500f0300e8ec00bbc0eff515162b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1eb4422a67c30a2da6e6e32295665c349500f0300e8ec00bbc0eff515162b7->enter($__internal_6d1eb4422a67c30a2da6e6e32295665c349500f0300e8ec00bbc0eff515162b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6d1eb4422a67c30a2da6e6e32295665c349500f0300e8ec00bbc0eff515162b7->leave($__internal_6d1eb4422a67c30a2da6e6e32295665c349500f0300e8ec00bbc0eff515162b7_prof);

        
        $__internal_4de509e64ff908406a0ab48a34f9977cfc0918fd2b1be212b78b3086b89d202a->leave($__internal_4de509e64ff908406a0ab48a34f9977cfc0918fd2b1be212b78b3086b89d202a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/quete_relations/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
