<?php

/* review/new.html.twig */
class __TwigTemplate_bf0223c88d93d341ac9470eea72938ecbeb48d06b1cf85ffcc28a3dd784c7018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eccc19d0780c98cbf6906b666ea2dbaa04d1704cde6a4df9b4e4b3e52155df11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccc19d0780c98cbf6906b666ea2dbaa04d1704cde6a4df9b4e4b3e52155df11->enter($__internal_eccc19d0780c98cbf6906b666ea2dbaa04d1704cde6a4df9b4e4b3e52155df11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $__internal_101b766fe9b3a0191ba87e88ee8a571946991656275fd34630915dac54dab882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101b766fe9b3a0191ba87e88ee8a571946991656275fd34630915dac54dab882->enter($__internal_101b766fe9b3a0191ba87e88ee8a571946991656275fd34630915dac54dab882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eccc19d0780c98cbf6906b666ea2dbaa04d1704cde6a4df9b4e4b3e52155df11->leave($__internal_eccc19d0780c98cbf6906b666ea2dbaa04d1704cde6a4df9b4e4b3e52155df11_prof);

        
        $__internal_101b766fe9b3a0191ba87e88ee8a571946991656275fd34630915dac54dab882->leave($__internal_101b766fe9b3a0191ba87e88ee8a571946991656275fd34630915dac54dab882_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b01d5a0778663bbb18838ffae732e65b8bf5b5053ef33b9677aa61fcbe28d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b01d5a0778663bbb18838ffae732e65b8bf5b5053ef33b9677aa61fcbe28d26->enter($__internal_7b01d5a0778663bbb18838ffae732e65b8bf5b5053ef33b9677aa61fcbe28d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7ab0917cef469a652c0d1297d86b8a074a2a84681dbeb6bcf7dfd3b48232a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ab0917cef469a652c0d1297d86b8a074a2a84681dbeb6bcf7dfd3b48232a59->enter($__internal_b7ab0917cef469a652c0d1297d86b8a074a2a84681dbeb6bcf7dfd3b48232a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WCSCoavBundle:Review:new";
        
        $__internal_b7ab0917cef469a652c0d1297d86b8a074a2a84681dbeb6bcf7dfd3b48232a59->leave($__internal_b7ab0917cef469a652c0d1297d86b8a074a2a84681dbeb6bcf7dfd3b48232a59_prof);

        
        $__internal_7b01d5a0778663bbb18838ffae732e65b8bf5b5053ef33b9677aa61fcbe28d26->leave($__internal_7b01d5a0778663bbb18838ffae732e65b8bf5b5053ef33b9677aa61fcbe28d26_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74feedbb350854813065170265e920f3cf3de8d8a44458f7ce8d1e4bbd7211a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74feedbb350854813065170265e920f3cf3de8d8a44458f7ce8d1e4bbd7211a8->enter($__internal_74feedbb350854813065170265e920f3cf3de8d8a44458f7ce8d1e4bbd7211a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1912dcaf996bcc737c1c16d7b5c2ebd71f447c55cc1f902bd3fe4d28ca80c9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1912dcaf996bcc737c1c16d7b5c2ebd71f447c55cc1f902bd3fe4d28ca80c9c8->enter($__internal_1912dcaf996bcc737c1c16d7b5c2ebd71f447c55cc1f902bd3fe4d28ca80c9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Review:new page</h1>


    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"Create\" />
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_1912dcaf996bcc737c1c16d7b5c2ebd71f447c55cc1f902bd3fe4d28ca80c9c8->leave($__internal_1912dcaf996bcc737c1c16d7b5c2ebd71f447c55cc1f902bd3fe4d28ca80c9c8_prof);

        
        $__internal_74feedbb350854813065170265e920f3cf3de8d8a44458f7ce8d1e4bbd7211a8->leave($__internal_74feedbb350854813065170265e920f3cf3de8d8a44458f7ce8d1e4bbd7211a8_prof);

    }

    public function getTemplateName()
    {
        return "review/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  77 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}WCSCoavBundle:Review:new{% endblock %}

{% block body %}
<h1>Welcome to the Review:new page</h1>


    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

{% endblock %}
", "review/new.html.twig", "/Applications/MAMP/htdocs/quete_relations/app/Resources/views/review/new.html.twig");
    }
}
