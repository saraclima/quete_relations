<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2dd97f27ac5f89f865cd89a67f3139f287d1870106b58a513127a69dba998323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_572e262c8a45cfaf4a3cc6e7f0713d8a45e343a004fb18a16d7abb4adffe0f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572e262c8a45cfaf4a3cc6e7f0713d8a45e343a004fb18a16d7abb4adffe0f82->enter($__internal_572e262c8a45cfaf4a3cc6e7f0713d8a45e343a004fb18a16d7abb4adffe0f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a0cfa05d9ecea7d6a65c1a2bbf2efa5b35e0654011e07e24abee605859894e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cfa05d9ecea7d6a65c1a2bbf2efa5b35e0654011e07e24abee605859894e5d->enter($__internal_a0cfa05d9ecea7d6a65c1a2bbf2efa5b35e0654011e07e24abee605859894e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_572e262c8a45cfaf4a3cc6e7f0713d8a45e343a004fb18a16d7abb4adffe0f82->leave($__internal_572e262c8a45cfaf4a3cc6e7f0713d8a45e343a004fb18a16d7abb4adffe0f82_prof);

        
        $__internal_a0cfa05d9ecea7d6a65c1a2bbf2efa5b35e0654011e07e24abee605859894e5d->leave($__internal_a0cfa05d9ecea7d6a65c1a2bbf2efa5b35e0654011e07e24abee605859894e5d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4902c00e4511902f1b79a627c20ca5acb5d65f9d13c80e9605dd7c57bdfd8a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4902c00e4511902f1b79a627c20ca5acb5d65f9d13c80e9605dd7c57bdfd8a0d->enter($__internal_4902c00e4511902f1b79a627c20ca5acb5d65f9d13c80e9605dd7c57bdfd8a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99e86d49159706665a7e57b7cbadb19c073f5ffb16952c40d1faa1cb5859a462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e86d49159706665a7e57b7cbadb19c073f5ffb16952c40d1faa1cb5859a462->enter($__internal_99e86d49159706665a7e57b7cbadb19c073f5ffb16952c40d1faa1cb5859a462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_99e86d49159706665a7e57b7cbadb19c073f5ffb16952c40d1faa1cb5859a462->leave($__internal_99e86d49159706665a7e57b7cbadb19c073f5ffb16952c40d1faa1cb5859a462_prof);

        
        $__internal_4902c00e4511902f1b79a627c20ca5acb5d65f9d13c80e9605dd7c57bdfd8a0d->leave($__internal_4902c00e4511902f1b79a627c20ca5acb5d65f9d13c80e9605dd7c57bdfd8a0d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_65fd451d28ec817e8d2dc83327e0d1b679d72faa303cec9181907b46429eb652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fd451d28ec817e8d2dc83327e0d1b679d72faa303cec9181907b46429eb652->enter($__internal_65fd451d28ec817e8d2dc83327e0d1b679d72faa303cec9181907b46429eb652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1abff08c94eb84be1655bf4a8a6abb081ce2cf5768c95b4ed1bf67e13e8406aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abff08c94eb84be1655bf4a8a6abb081ce2cf5768c95b4ed1bf67e13e8406aa->enter($__internal_1abff08c94eb84be1655bf4a8a6abb081ce2cf5768c95b4ed1bf67e13e8406aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1abff08c94eb84be1655bf4a8a6abb081ce2cf5768c95b4ed1bf67e13e8406aa->leave($__internal_1abff08c94eb84be1655bf4a8a6abb081ce2cf5768c95b4ed1bf67e13e8406aa_prof);

        
        $__internal_65fd451d28ec817e8d2dc83327e0d1b679d72faa303cec9181907b46429eb652->leave($__internal_65fd451d28ec817e8d2dc83327e0d1b679d72faa303cec9181907b46429eb652_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4f688d567004c03b4222bc56da8fbed84af8d90bb58417a72e96502ffdfc929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f688d567004c03b4222bc56da8fbed84af8d90bb58417a72e96502ffdfc929->enter($__internal_a4f688d567004c03b4222bc56da8fbed84af8d90bb58417a72e96502ffdfc929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc8247294e37cdb687e8d286053a52ef6498cb4c2be5b4ad3d6a0db0b5a46cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8247294e37cdb687e8d286053a52ef6498cb4c2be5b4ad3d6a0db0b5a46cff->enter($__internal_fc8247294e37cdb687e8d286053a52ef6498cb4c2be5b4ad3d6a0db0b5a46cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc8247294e37cdb687e8d286053a52ef6498cb4c2be5b4ad3d6a0db0b5a46cff->leave($__internal_fc8247294e37cdb687e8d286053a52ef6498cb4c2be5b4ad3d6a0db0b5a46cff_prof);

        
        $__internal_a4f688d567004c03b4222bc56da8fbed84af8d90bb58417a72e96502ffdfc929->leave($__internal_a4f688d567004c03b4222bc56da8fbed84af8d90bb58417a72e96502ffdfc929_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/quete_relations/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
