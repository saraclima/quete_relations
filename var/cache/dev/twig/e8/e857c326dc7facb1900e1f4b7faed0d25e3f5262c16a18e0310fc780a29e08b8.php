<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_00644601699b707f745ddfe357f04748da62f658271368b001c1c568cd2363ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00644601699b707f745ddfe357f04748da62f658271368b001c1c568cd2363ec->enter($__internal_00644601699b707f745ddfe357f04748da62f658271368b001c1c568cd2363ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e0a5f13fd71d8fe8d1a0ccca7be64c7a6c3084278a6113d71105a56cfc2d1ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a5f13fd71d8fe8d1a0ccca7be64c7a6c3084278a6113d71105a56cfc2d1ce8->enter($__internal_e0a5f13fd71d8fe8d1a0ccca7be64c7a6c3084278a6113d71105a56cfc2d1ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00644601699b707f745ddfe357f04748da62f658271368b001c1c568cd2363ec->leave($__internal_00644601699b707f745ddfe357f04748da62f658271368b001c1c568cd2363ec_prof);

        
        $__internal_e0a5f13fd71d8fe8d1a0ccca7be64c7a6c3084278a6113d71105a56cfc2d1ce8->leave($__internal_e0a5f13fd71d8fe8d1a0ccca7be64c7a6c3084278a6113d71105a56cfc2d1ce8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3be813c245d746714cdd7560356e15f382242681b0ba8b993fd0a81e9ee6b110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be813c245d746714cdd7560356e15f382242681b0ba8b993fd0a81e9ee6b110->enter($__internal_3be813c245d746714cdd7560356e15f382242681b0ba8b993fd0a81e9ee6b110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d8815a9a1c4ca71f39c2af2ca493167cb75dcbf448c3155c2db9e277fa7bdc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8815a9a1c4ca71f39c2af2ca493167cb75dcbf448c3155c2db9e277fa7bdc58->enter($__internal_d8815a9a1c4ca71f39c2af2ca493167cb75dcbf448c3155c2db9e277fa7bdc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d8815a9a1c4ca71f39c2af2ca493167cb75dcbf448c3155c2db9e277fa7bdc58->leave($__internal_d8815a9a1c4ca71f39c2af2ca493167cb75dcbf448c3155c2db9e277fa7bdc58_prof);

        
        $__internal_3be813c245d746714cdd7560356e15f382242681b0ba8b993fd0a81e9ee6b110->leave($__internal_3be813c245d746714cdd7560356e15f382242681b0ba8b993fd0a81e9ee6b110_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e419ff64036098e46536ecc3ded59c14d45e5165494433e2d114e8cf4abad53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e419ff64036098e46536ecc3ded59c14d45e5165494433e2d114e8cf4abad53e->enter($__internal_e419ff64036098e46536ecc3ded59c14d45e5165494433e2d114e8cf4abad53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_14c0ee5e9e6095a9ac5e7987abcc25d5e61d417b8061ba612bbfdec01047cb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c0ee5e9e6095a9ac5e7987abcc25d5e61d417b8061ba612bbfdec01047cb85->enter($__internal_14c0ee5e9e6095a9ac5e7987abcc25d5e61d417b8061ba612bbfdec01047cb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_14c0ee5e9e6095a9ac5e7987abcc25d5e61d417b8061ba612bbfdec01047cb85->leave($__internal_14c0ee5e9e6095a9ac5e7987abcc25d5e61d417b8061ba612bbfdec01047cb85_prof);

        
        $__internal_e419ff64036098e46536ecc3ded59c14d45e5165494433e2d114e8cf4abad53e->leave($__internal_e419ff64036098e46536ecc3ded59c14d45e5165494433e2d114e8cf4abad53e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_720724fe6692633b8dbb80fa07e3bda50113f0defd2ae1e3fe6b51158153c4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720724fe6692633b8dbb80fa07e3bda50113f0defd2ae1e3fe6b51158153c4ce->enter($__internal_720724fe6692633b8dbb80fa07e3bda50113f0defd2ae1e3fe6b51158153c4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86fceb2bde8d2b9a3964f29024bde9d2e868b8512a4ed2f673a8f71405ddaf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fceb2bde8d2b9a3964f29024bde9d2e868b8512a4ed2f673a8f71405ddaf47->enter($__internal_86fceb2bde8d2b9a3964f29024bde9d2e868b8512a4ed2f673a8f71405ddaf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_86fceb2bde8d2b9a3964f29024bde9d2e868b8512a4ed2f673a8f71405ddaf47->leave($__internal_86fceb2bde8d2b9a3964f29024bde9d2e868b8512a4ed2f673a8f71405ddaf47_prof);

        
        $__internal_720724fe6692633b8dbb80fa07e3bda50113f0defd2ae1e3fe6b51158153c4ce->leave($__internal_720724fe6692633b8dbb80fa07e3bda50113f0defd2ae1e3fe6b51158153c4ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/quete_relations/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
