<?php

/* review/index.html.twig */
class __TwigTemplate_6a298f241b761f0ffa94d67474a6f89a031ecda805fbd638687e07417feb3e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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
        $__internal_735d9911b15491904856aecddc42101e6a1d87d0a510ef1c0d685bb6b0263fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735d9911b15491904856aecddc42101e6a1d87d0a510ef1c0d685bb6b0263fd1->enter($__internal_735d9911b15491904856aecddc42101e6a1d87d0a510ef1c0d685bb6b0263fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_9ae2c7f9e52d39e1a54b6b2c45445668c3f10b435fac7069ec782692ac5c09f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae2c7f9e52d39e1a54b6b2c45445668c3f10b435fac7069ec782692ac5c09f3->enter($__internal_9ae2c7f9e52d39e1a54b6b2c45445668c3f10b435fac7069ec782692ac5c09f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735d9911b15491904856aecddc42101e6a1d87d0a510ef1c0d685bb6b0263fd1->leave($__internal_735d9911b15491904856aecddc42101e6a1d87d0a510ef1c0d685bb6b0263fd1_prof);

        
        $__internal_9ae2c7f9e52d39e1a54b6b2c45445668c3f10b435fac7069ec782692ac5c09f3->leave($__internal_9ae2c7f9e52d39e1a54b6b2c45445668c3f10b435fac7069ec782692ac5c09f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c2236f29780dee50c67ac3c4f1e529330226468a4faaf24d908e4ca071d4d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2236f29780dee50c67ac3c4f1e529330226468a4faaf24d908e4ca071d4d2c->enter($__internal_6c2236f29780dee50c67ac3c4f1e529330226468a4faaf24d908e4ca071d4d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec0b234dffd4f3810b5ed6b0b398438a50e9ae5b1919526b7d8f2b284be7b827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0b234dffd4f3810b5ed6b0b398438a50e9ae5b1919526b7d8f2b284be7b827->enter($__internal_ec0b234dffd4f3810b5ed6b0b398438a50e9ae5b1919526b7d8f2b284be7b827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WCSCoavBundle:Review:index";
        
        $__internal_ec0b234dffd4f3810b5ed6b0b398438a50e9ae5b1919526b7d8f2b284be7b827->leave($__internal_ec0b234dffd4f3810b5ed6b0b398438a50e9ae5b1919526b7d8f2b284be7b827_prof);

        
        $__internal_6c2236f29780dee50c67ac3c4f1e529330226468a4faaf24d908e4ca071d4d2c->leave($__internal_6c2236f29780dee50c67ac3c4f1e529330226468a4faaf24d908e4ca071d4d2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cdffbb537896c83819bb81ba08be2a6a855aaa0310f436b698c021ea8137e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdffbb537896c83819bb81ba08be2a6a855aaa0310f436b698c021ea8137e02->enter($__internal_6cdffbb537896c83819bb81ba08be2a6a855aaa0310f436b698c021ea8137e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49dd6d586c66e66090c6b5fc98a3726ac471a65e93b45e3e8894dec73cd5c84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49dd6d586c66e66090c6b5fc98a3726ac471a65e93b45e3e8894dec73cd5c84f->enter($__internal_49dd6d586c66e66090c6b5fc98a3726ac471a65e93b45e3e8894dec73cd5c84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Welcome to the Review:index page</h1>

    <table>
    <thead>
    <tr>
        <th>Id</th>
        <th>User_rated_id</th>
        <th>Review_author_id</th>
        <th>text</th>
        <th>PublicationDate</th>
        <th>Note</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 22
            echo "        <tr>
            <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "userRated", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "reviewAuthor", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "text", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "note", array()), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>

                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </tbody>
    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_new");
        echo "\"> Create a new review </a>
        </li>
    </ul>
";
        
        $__internal_49dd6d586c66e66090c6b5fc98a3726ac471a65e93b45e3e8894dec73cd5c84f->leave($__internal_49dd6d586c66e66090c6b5fc98a3726ac471a65e93b45e3e8894dec73cd5c84f_prof);

        
        $__internal_6cdffbb537896c83819bb81ba08be2a6a855aaa0310f436b698c021ea8137e02->leave($__internal_6cdffbb537896c83819bb81ba08be2a6a855aaa0310f436b698c021ea8137e02_prof);

    }

    public function getTemplateName()
    {
        return "review/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  142 => 42,  129 => 35,  123 => 32,  116 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  92 => 23,  89 => 22,  85 => 21,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}WCSCoavBundle:Review:index{% endblock %}

{% block body %}

    <h1>Welcome to the Review:index page</h1>

    <table>
    <thead>
    <tr>
        <th>Id</th>
        <th>User_rated_id</th>
        <th>Review_author_id</th>
        <th>text</th>
        <th>PublicationDate</th>
        <th>Note</th>
    </tr>
    </thead>
    <tbody>
    {% for review in reviews %}
        <tr>
            <td><a href=\"{{ path('review_show', { 'id': review.id }) }}\">{{ review.id }}</a></td>
            <td>{{ review.userRated }}</td>
            <td>{{ review.reviewAuthor }}</td>
            <td>{{ review.text }}</td>
            <td>{% if review.publicationDate %}{{ review.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            <td>{{ review.note }}</td>
            <td>
                <ul>
                    <li>
                        <a href=\"{{ path('review_show', { 'id': review.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('review_edit', { 'id': review.id }) }}\">edit</a>
                    </li>

                </ul>
            </td>
        </tr>
    {% endfor %}
    </tbody>
    <ul>
        <li>
            <a href=\"{{ path('review_new') }}\"> Create a new review </a>
        </li>
    </ul>
{% endblock %}", "review/index.html.twig", "/Applications/MAMP/htdocs/quete_relations/app/Resources/views/review/index.html.twig");
    }
}
