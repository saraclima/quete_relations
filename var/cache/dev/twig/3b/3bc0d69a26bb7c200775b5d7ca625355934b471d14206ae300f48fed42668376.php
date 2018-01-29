<?php

/* flight/index.html.twig */
class __TwigTemplate_d6f4e5d9695350a374c71a3398ba9e043ad877ac576d7092c1aa7a42d2a0c455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "flight/index.html.twig", 1);
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
        $__internal_3e47e23e6690c833e84df3a8dddb901ad1f03f6d79cd143b4c14b48fed5255c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e47e23e6690c833e84df3a8dddb901ad1f03f6d79cd143b4c14b48fed5255c6->enter($__internal_3e47e23e6690c833e84df3a8dddb901ad1f03f6d79cd143b4c14b48fed5255c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/index.html.twig"));

        $__internal_bd0f51d3a87959e022798194b68f343b2207b61193b77d986e46861d66a29748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0f51d3a87959e022798194b68f343b2207b61193b77d986e46861d66a29748->enter($__internal_bd0f51d3a87959e022798194b68f343b2207b61193b77d986e46861d66a29748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e47e23e6690c833e84df3a8dddb901ad1f03f6d79cd143b4c14b48fed5255c6->leave($__internal_3e47e23e6690c833e84df3a8dddb901ad1f03f6d79cd143b4c14b48fed5255c6_prof);

        
        $__internal_bd0f51d3a87959e022798194b68f343b2207b61193b77d986e46861d66a29748->leave($__internal_bd0f51d3a87959e022798194b68f343b2207b61193b77d986e46861d66a29748_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b194d265b3f6c6f953696ad85da0d315e57817966c5d74f5cc86ba9a24ba9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b194d265b3f6c6f953696ad85da0d315e57817966c5d74f5cc86ba9a24ba9da->enter($__internal_5b194d265b3f6c6f953696ad85da0d315e57817966c5d74f5cc86ba9a24ba9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba846678275b8bafcd665ae462d13e252de8dadd72706d747f81e7a8e11ba22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba846678275b8bafcd665ae462d13e252de8dadd72706d747f81e7a8e11ba22b->enter($__internal_ba846678275b8bafcd665ae462d13e252de8dadd72706d747f81e7a8e11ba22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Nbfreeseats</th>
                <th>Seatprice</th>
                <th>Takeofftime</th>
                <th>Publicationdate</th>
                <th>Description</th>
                <th>Pilot</th>
                <th>Plane</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flights"]) || array_key_exists("flights", $context) ? $context["flights"] : (function () { throw new Twig_Error_Runtime('Variable "flights" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "departure", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "arrival", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "nbFreeSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "seatPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "takeOffTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "takeOffTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "pilot", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "plane", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "wasDone", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_new");
        echo "\">Create a new flight</a>
        </li>
    </ul>
";
        
        $__internal_ba846678275b8bafcd665ae462d13e252de8dadd72706d747f81e7a8e11ba22b->leave($__internal_ba846678275b8bafcd665ae462d13e252de8dadd72706d747f81e7a8e11ba22b_prof);

        
        $__internal_5b194d265b3f6c6f953696ad85da0d315e57817966c5d74f5cc86ba9a24ba9da->leave($__internal_5b194d265b3f6c6f953696ad85da0d315e57817966c5d74f5cc86ba9a24ba9da_prof);

    }

    public function getTemplateName()
    {
        return "flight/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  153 => 49,  141 => 43,  135 => 40,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  106 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Nbfreeseats</th>
                <th>Seatprice</th>
                <th>Takeofftime</th>
                <th>Publicationdate</th>
                <th>Description</th>
                <th>Pilot</th>
                <th>Plane</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for flight in flights %}
            <tr>
                <td><a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">{{ flight.id }}</a></td>
                <td>{{ flight.departure }}</td>
                <td>{{ flight.arrival }}</td>
                <td>{{ flight.nbFreeSeats }}</td>
                <td>{{ flight.seatPrice }}</td>
                <td>{% if flight.takeOffTime %}{{ flight.takeOffTime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if flight.publicationDate %}{{ flight.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ flight.description }}</td>
                <td>{{ flight.pilot }}</td>
                <td>{{ flight.plane }}</td>
                <td>{% if flight.wasDone %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_new') }}\">Create a new flight</a>
        </li>
    </ul>
{% endblock %}
", "flight/index.html.twig", "/Applications/MAMP/htdocs/quete_relations/app/Resources/views/flight/index.html.twig");
    }
}
