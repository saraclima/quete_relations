<?php

/* review/edit.html.twig */
class __TwigTemplate_8da89fcdf9a1507c4396e37dd459b20a503fd793cd67f6eaed21030bdf556616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30405f34fe3478cef2e1a14f3f62ca2391f15b82805da67f8f3da7a52cb9b22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30405f34fe3478cef2e1a14f3f62ca2391f15b82805da67f8f3da7a52cb9b22c->enter($__internal_30405f34fe3478cef2e1a14f3f62ca2391f15b82805da67f8f3da7a52cb9b22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/edit.html.twig"));

        $__internal_e1c0e25284d8495d53125faf72c9a4c38a2f814b408fd6ffde3f6873beae79fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c0e25284d8495d53125faf72c9a4c38a2f814b408fd6ffde3f6873beae79fc->enter($__internal_e1c0e25284d8495d53125faf72c9a4c38a2f814b408fd6ffde3f6873beae79fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30405f34fe3478cef2e1a14f3f62ca2391f15b82805da67f8f3da7a52cb9b22c->leave($__internal_30405f34fe3478cef2e1a14f3f62ca2391f15b82805da67f8f3da7a52cb9b22c_prof);

        
        $__internal_e1c0e25284d8495d53125faf72c9a4c38a2f814b408fd6ffde3f6873beae79fc->leave($__internal_e1c0e25284d8495d53125faf72c9a4c38a2f814b408fd6ffde3f6873beae79fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_394dcd4c59d37bdba3cb6be84d831798472a951a7c5f5ee7ac4448d7fae32ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394dcd4c59d37bdba3cb6be84d831798472a951a7c5f5ee7ac4448d7fae32ff5->enter($__internal_394dcd4c59d37bdba3cb6be84d831798472a951a7c5f5ee7ac4448d7fae32ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a93d1b683f4e00677fa5bd7d4e5bf3cdff1a8ab3c84523eb70628de77735214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a93d1b683f4e00677fa5bd7d4e5bf3cdff1a8ab3c84523eb70628de77735214->enter($__internal_8a93d1b683f4e00677fa5bd7d4e5bf3cdff1a8ab3c84523eb70628de77735214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>REdit Review</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "


    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 12, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 13, $this->getSourceContext()); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"Delete\" />
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 15, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        // line 26
        echo "    </ul>
";
        
        $__internal_8a93d1b683f4e00677fa5bd7d4e5bf3cdff1a8ab3c84523eb70628de77735214->leave($__internal_8a93d1b683f4e00677fa5bd7d4e5bf3cdff1a8ab3c84523eb70628de77735214_prof);

        
        $__internal_394dcd4c59d37bdba3cb6be84d831798472a951a7c5f5ee7ac4448d7fae32ff5->leave($__internal_394dcd4c59d37bdba3cb6be84d831798472a951a7c5f5ee7ac4448d7fae32ff5_prof);

    }

    public function getTemplateName()
    {
        return "review/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  95 => 25,  93 => 24,  91 => 23,  89 => 22,  84 => 19,  77 => 15,  72 => 13,  68 => 12,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>REdit Review</h1>

    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}


    {{ form_start(delete_form) }}
    {{ form_widget(delete_form) }}
    <input type=\"submit\" value=\"Delete\" />
    {{ form_end(delete_form) }}

    <ul>
        <li>
            <a href=\"{{ path('review_index') }}\">Back to the list</a>
        </li>
        {#<li>#}
        {#{{ form_start(delete_form) }}#}
        {#<input type=\"submit\" value=\"Delete\">#}
        {#{{ form_end(delete_form) }}#}
        {#</li>#}
    </ul>
{% endblock %}", "review/edit.html.twig", "/Applications/MAMP/htdocs/quete_relations/app/Resources/views/review/edit.html.twig");
    }
}
