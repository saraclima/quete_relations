<?php

/* @WCSCoav/Default/index.html.twig */
class __TwigTemplate_9360c5697d2c1dfd8c5f90059bb664ca589fae18e356fedf801d9bb831e7045e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_625c0945ee3925e088c9ac6e8b0c4eed5fd7e573a0c717a400c80f72ca616f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625c0945ee3925e088c9ac6e8b0c4eed5fd7e573a0c717a400c80f72ca616f6d->enter($__internal_625c0945ee3925e088c9ac6e8b0c4eed5fd7e573a0c717a400c80f72ca616f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WCSCoav/Default/index.html.twig"));

        $__internal_023821413bc985e7165dade4b510b25005ce8f4b2fd239fb196f77499ed28031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023821413bc985e7165dade4b510b25005ce8f4b2fd239fb196f77499ed28031->enter($__internal_023821413bc985e7165dade4b510b25005ce8f4b2fd239fb196f77499ed28031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WCSCoav/Default/index.html.twig"));

        // line 1
        echo "<h1>Routes disponibles :</h1>
<ul>
    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Voir les avions</a>
    </li>
    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Voir les reservations</a>
    </li>
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Voir les vols</a>
    </li>
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_index");
        echo "\">Voir les terrains</a>
    </li>
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Voir tous les avis utilisateurs</a>
    </li>
</ul>";
        
        $__internal_625c0945ee3925e088c9ac6e8b0c4eed5fd7e573a0c717a400c80f72ca616f6d->leave($__internal_625c0945ee3925e088c9ac6e8b0c4eed5fd7e573a0c717a400c80f72ca616f6d_prof);

        
        $__internal_023821413bc985e7165dade4b510b25005ce8f4b2fd239fb196f77499ed28031->leave($__internal_023821413bc985e7165dade4b510b25005ce8f4b2fd239fb196f77499ed28031_prof);

    }

    public function getTemplateName()
    {
        return "@WCSCoav/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 13,  42 => 10,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Routes disponibles :</h1>
<ul>
    <li>
        <a href=\"{{ path('planemodel_index') }}\">Voir les avions</a>
    </li>
    <li>
        <a href=\"{{ path('reservation_index') }}\">Voir les reservations</a>
    </li>
    <li>
        <a href=\"{{ path('flight_index') }}\">Voir les vols</a>
    </li>
    <li>
        <a href=\"{{ path('terrain_index') }}\">Voir les terrains</a>
    </li>
    <li>
        <a href=\"{{ path('review_index') }}\">Voir tous les avis utilisateurs</a>
    </li>
</ul>", "@WCSCoav/Default/index.html.twig", "/Applications/MAMP/htdocs/quete_relations/src/WCS/CoavBundle/Resources/views/Default/index.html.twig");
    }
}
