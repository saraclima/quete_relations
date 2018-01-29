<?php

/* review/show.html.twig */
class __TwigTemplate_515a40446f383028faec0ba2fb19a130ce45f2382c0ae856c819a4523a9431c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/show.html.twig", 1);
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
        $__internal_4439fd0c807c97e60db3e2b19b2f80698aa5bb62e3e4d1dc3e9f4404cb623903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4439fd0c807c97e60db3e2b19b2f80698aa5bb62e3e4d1dc3e9f4404cb623903->enter($__internal_4439fd0c807c97e60db3e2b19b2f80698aa5bb62e3e4d1dc3e9f4404cb623903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/show.html.twig"));

        $__internal_3783d70fcccc82f2a77fdbe3ce5f21bb01ca2778c78b276abdd04a2a8d6185e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3783d70fcccc82f2a77fdbe3ce5f21bb01ca2778c78b276abdd04a2a8d6185e8->enter($__internal_3783d70fcccc82f2a77fdbe3ce5f21bb01ca2778c78b276abdd04a2a8d6185e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4439fd0c807c97e60db3e2b19b2f80698aa5bb62e3e4d1dc3e9f4404cb623903->leave($__internal_4439fd0c807c97e60db3e2b19b2f80698aa5bb62e3e4d1dc3e9f4404cb623903_prof);

        
        $__internal_3783d70fcccc82f2a77fdbe3ce5f21bb01ca2778c78b276abdd04a2a8d6185e8->leave($__internal_3783d70fcccc82f2a77fdbe3ce5f21bb01ca2778c78b276abdd04a2a8d6185e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16a3693568631042cc8e6edf987883c97a63f1c569e8c7fdca00f077fedba18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a3693568631042cc8e6edf987883c97a63f1c569e8c7fdca00f077fedba18e->enter($__internal_16a3693568631042cc8e6edf987883c97a63f1c569e8c7fdca00f077fedba18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f0ebc0f06c7541302c357474fe4c5c911b0edc675886e8ff495c402790ac283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0ebc0f06c7541302c357474fe4c5c911b0edc675886e8ff495c402790ac283->enter($__internal_2f0ebc0f06c7541302c357474fe4c5c911b0edc675886e8ff495c402790ac283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WCSCoavBundle:Review:show";
        
        $__internal_2f0ebc0f06c7541302c357474fe4c5c911b0edc675886e8ff495c402790ac283->leave($__internal_2f0ebc0f06c7541302c357474fe4c5c911b0edc675886e8ff495c402790ac283_prof);

        
        $__internal_16a3693568631042cc8e6edf987883c97a63f1c569e8c7fdca00f077fedba18e->leave($__internal_16a3693568631042cc8e6edf987883c97a63f1c569e8c7fdca00f077fedba18e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c10c2599f8cdb0992146cfcbf7951148b0d1b01168251f0008c847868b07f3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10c2599f8cdb0992146cfcbf7951148b0d1b01168251f0008c847868b07f3c1->enter($__internal_c10c2599f8cdb0992146cfcbf7951148b0d1b01168251f0008c847868b07f3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26f7c5438fd51437957d7c59e2be429b622e1b908764354097bbe5ef1070f76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f7c5438fd51437957d7c59e2be429b622e1b908764354097bbe5ef1070f76c->enter($__internal_26f7c5438fd51437957d7c59e2be429b622e1b908764354097bbe5ef1070f76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>User Reviews</h1>
    <table class=\"table_body\">
        <tbody>
        <tr><th><Id </th> </tr>
        <td>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 9, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
        <tr><th>text</th></tr>
        <tr><td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 11, $this->getSourceContext()); })()), "text", array()), "html", null, true);
        echo "</td></tr>
        <tr> <th>publicationDate</th></tr>
        <tr> <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 13, $this->getSourceContext()); })()), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td></tr>
        <tr> <th>note</th></tr>
        <tr><td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 15, $this->getSourceContext()); })()), "note", array()), "html", null, true);
        echo "</td></tr>
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Back to review</a>
        </li>
        ";
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        // line 25
        echo "    </ul>

";
        
        $__internal_26f7c5438fd51437957d7c59e2be429b622e1b908764354097bbe5ef1070f76c->leave($__internal_26f7c5438fd51437957d7c59e2be429b622e1b908764354097bbe5ef1070f76c_prof);

        
        $__internal_c10c2599f8cdb0992146cfcbf7951148b0d1b01168251f0008c847868b07f3c1->leave($__internal_c10c2599f8cdb0992146cfcbf7951148b0d1b01168251f0008c847868b07f3c1_prof);

    }

    public function getTemplateName()
    {
        return "review/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  104 => 24,  102 => 23,  97 => 20,  89 => 15,  84 => 13,  79 => 11,  74 => 9,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}WCSCoavBundle:Review:show{% endblock %}
{% block body %}
    <h1>User Reviews</h1>
    <table class=\"table_body\">
        <tbody>
        <tr><th><Id </th> </tr>
        <td>{{ review.id }}</td>
        <tr><th>text</th></tr>
        <tr><td>{{ review.text }}</td></tr>
        <tr> <th>publicationDate</th></tr>
        <tr> <td>{{ review.publicationDate|date('Y-m-d H:i:s') }}</td></tr>
        <tr> <th>note</th></tr>
        <tr><td>{{ review.note }}</td></tr>
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('review_index') }}\">Back to review</a>
        </li>
        {#<li>#}
        {#<a href=\"{{ path('review_edit', { 'id': reservation.id }) }}\">Edit</a>#}
        {#</li>#}
    </ul>

{% endblock %}", "review/show.html.twig", "/Applications/MAMP/htdocs/quete_relations/app/Resources/views/review/show.html.twig");
    }
}
