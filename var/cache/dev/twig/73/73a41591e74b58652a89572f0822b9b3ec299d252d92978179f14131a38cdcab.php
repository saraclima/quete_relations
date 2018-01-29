<?php

/* base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_200d91c2f9fa5d63b17f9e61921de49cceac9b3f2c99581ee1ac843343621151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200d91c2f9fa5d63b17f9e61921de49cceac9b3f2c99581ee1ac843343621151->enter($__internal_200d91c2f9fa5d63b17f9e61921de49cceac9b3f2c99581ee1ac843343621151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e709321a8ab5c3c151b68685677ce67befe04adbf4d777208db8b78a9c198507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e709321a8ab5c3c151b68685677ce67befe04adbf4d777208db8b78a9c198507->enter($__internal_e709321a8ab5c3c151b68685677ce67befe04adbf4d777208db8b78a9c198507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "            <ul>
                <li>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wcs_coav_homepage");
        echo "\">Return to homepage</a>
                </li>
            </ul>
        </div>


        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_200d91c2f9fa5d63b17f9e61921de49cceac9b3f2c99581ee1ac843343621151->leave($__internal_200d91c2f9fa5d63b17f9e61921de49cceac9b3f2c99581ee1ac843343621151_prof);

        
        $__internal_e709321a8ab5c3c151b68685677ce67befe04adbf4d777208db8b78a9c198507->leave($__internal_e709321a8ab5c3c151b68685677ce67befe04adbf4d777208db8b78a9c198507_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bff7ddbff8b318c2d2ed91c2f0e09272f02b5347eac15fe8a7ca76b1b8ed7eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff7ddbff8b318c2d2ed91c2f0e09272f02b5347eac15fe8a7ca76b1b8ed7eff->enter($__internal_bff7ddbff8b318c2d2ed91c2f0e09272f02b5347eac15fe8a7ca76b1b8ed7eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9141cca323bbcbc1825a29a4fb6a036580fde47df13c97c913acbfedfe227143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9141cca323bbcbc1825a29a4fb6a036580fde47df13c97c913acbfedfe227143->enter($__internal_9141cca323bbcbc1825a29a4fb6a036580fde47df13c97c913acbfedfe227143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9141cca323bbcbc1825a29a4fb6a036580fde47df13c97c913acbfedfe227143->leave($__internal_9141cca323bbcbc1825a29a4fb6a036580fde47df13c97c913acbfedfe227143_prof);

        
        $__internal_bff7ddbff8b318c2d2ed91c2f0e09272f02b5347eac15fe8a7ca76b1b8ed7eff->leave($__internal_bff7ddbff8b318c2d2ed91c2f0e09272f02b5347eac15fe8a7ca76b1b8ed7eff_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2311aff6d887f2bb7ab4cdd604684e31576242f50f7b2f0a0e809f1383fbf05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2311aff6d887f2bb7ab4cdd604684e31576242f50f7b2f0a0e809f1383fbf05a->enter($__internal_2311aff6d887f2bb7ab4cdd604684e31576242f50f7b2f0a0e809f1383fbf05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8c5c4145466c2a61c507e286be1fb01902e3a27dc6d35d20c1a8caacae8fd010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5c4145466c2a61c507e286be1fb01902e3a27dc6d35d20c1a8caacae8fd010->enter($__internal_8c5c4145466c2a61c507e286be1fb01902e3a27dc6d35d20c1a8caacae8fd010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8c5c4145466c2a61c507e286be1fb01902e3a27dc6d35d20c1a8caacae8fd010->leave($__internal_8c5c4145466c2a61c507e286be1fb01902e3a27dc6d35d20c1a8caacae8fd010_prof);

        
        $__internal_2311aff6d887f2bb7ab4cdd604684e31576242f50f7b2f0a0e809f1383fbf05a->leave($__internal_2311aff6d887f2bb7ab4cdd604684e31576242f50f7b2f0a0e809f1383fbf05a_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a1776ab32c38c404aab877f9e0cfe76d0a3c9783db765cf4847568f9c2ca90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1776ab32c38c404aab877f9e0cfe76d0a3c9783db765cf4847568f9c2ca90f->enter($__internal_4a1776ab32c38c404aab877f9e0cfe76d0a3c9783db765cf4847568f9c2ca90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20dd288194fada0425027daabf8c3c74f469425d2b8e03f0bdb5a0c2a2f4db28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dd288194fada0425027daabf8c3c74f469425d2b8e03f0bdb5a0c2a2f4db28->enter($__internal_20dd288194fada0425027daabf8c3c74f469425d2b8e03f0bdb5a0c2a2f4db28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20dd288194fada0425027daabf8c3c74f469425d2b8e03f0bdb5a0c2a2f4db28->leave($__internal_20dd288194fada0425027daabf8c3c74f469425d2b8e03f0bdb5a0c2a2f4db28_prof);

        
        $__internal_4a1776ab32c38c404aab877f9e0cfe76d0a3c9783db765cf4847568f9c2ca90f->leave($__internal_4a1776ab32c38c404aab877f9e0cfe76d0a3c9783db765cf4847568f9c2ca90f_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c798f6a2e03631375084b2d4bd8b5a6c2383c674228832369bcfec5f700f824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c798f6a2e03631375084b2d4bd8b5a6c2383c674228832369bcfec5f700f824->enter($__internal_9c798f6a2e03631375084b2d4bd8b5a6c2383c674228832369bcfec5f700f824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ed147c1aecad66466e657b799a78a323e46c4b491027f2bb6a4221b4d9f287a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed147c1aecad66466e657b799a78a323e46c4b491027f2bb6a4221b4d9f287a->enter($__internal_8ed147c1aecad66466e657b799a78a323e46c4b491027f2bb6a4221b4d9f287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8ed147c1aecad66466e657b799a78a323e46c4b491027f2bb6a4221b4d9f287a->leave($__internal_8ed147c1aecad66466e657b799a78a323e46c4b491027f2bb6a4221b4d9f287a_prof);

        
        $__internal_9c798f6a2e03631375084b2d4bd8b5a6c2383c674228832369bcfec5f700f824->leave($__internal_9c798f6a2e03631375084b2d4bd8b5a6c2383c674228832369bcfec5f700f824_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 26,  120 => 14,  103 => 8,  85 => 5,  73 => 27,  71 => 26,  59 => 17,  55 => 15,  53 => 14,  46 => 10,  43 => 9,  41 => 8,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        {% block stylesheets %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            {% block body %}{% endblock %}
            <ul>
                <li>
                    <a href=\"{{ path('wcs_coav_homepage') }}\">Return to homepage</a>
                </li>
            </ul>
        </div>


        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/quete_relations/app/Resources/views/base.html.twig");
    }
}
