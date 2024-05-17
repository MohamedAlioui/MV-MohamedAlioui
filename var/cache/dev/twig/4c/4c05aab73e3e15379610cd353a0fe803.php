<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mix/show.html.twig */
class __TwigTemplate_349c9f2590013deb1d198df060b65fdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mix/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mix/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mix/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        yield " Mix";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container\">
        <h1 class=\"d-inline me-3\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1>
        <div class=\"row mt-5\">
            <div class=\"col-12 col-md-4\">
                ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "mix/_recordSvg.html.twig");
        yield "
            </div>
            <div class=\"col-12 col-md-8 ps-5\">
                <h2 class=\"mb-4\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 11, $this->source); })()), "trackCount", [], "any", false, false, false, 11), "html", null, true);
        yield " songs <small>(genre: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 11, $this->source); })()), "genre", [], "any", false, false, false, 11), "html", null, true);
        yield ")</small></h2>
                <p>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
                ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 13, $this->source); })()), "votesString", [], "any", false, false, false, 13), "html", null, true);
        yield " votes
                <form action=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mix_vote", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" method=\"POST\">
                    <button
                        type=\"submit\"
                        class=\"btn btn-outline-primary\"
                        name=\"direction\"
                        value=\"up\"
                    ><span class=\"fa fa-thumbs-up\"></span></button>
                    <button
                        type=\"submit\"
                        class=\"btn btn-outline-primary\"
                        name=\"direction\"
                        value=\"down\"
                    ><span class=\"fa fa-thumbs-down\"></span></button>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mix/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  120 => 14,  116 => 13,  112 => 12,  106 => 11,  100 => 8,  94 => 5,  91 => 4,  81 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ mix.title }} Mix{% endblock %}
{% block body %}
    <div class=\"container\">
        <h1 class=\"d-inline me-3\">{{ mix.title }}</h1>
        <div class=\"row mt-5\">
            <div class=\"col-12 col-md-4\">
                {{ include('mix/_recordSvg.html.twig') }}
            </div>
            <div class=\"col-12 col-md-8 ps-5\">
                <h2 class=\"mb-4\">{{ mix.trackCount }} songs <small>(genre: {{ mix.genre }})</small></h2>
                <p>{{ mix.description }}</p>
                {{ mix.votesString }} votes
                <form action=\"{{ path('app_mix_vote', {id: mix.id }) }}\" method=\"POST\">
                    <button
                        type=\"submit\"
                        class=\"btn btn-outline-primary\"
                        name=\"direction\"
                        value=\"up\"
                    ><span class=\"fa fa-thumbs-up\"></span></button>
                    <button
                        type=\"submit\"
                        class=\"btn btn-outline-primary\"
                        name=\"direction\"
                        value=\"down\"
                    ><span class=\"fa fa-thumbs-down\"></span></button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "mix/show.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\templates\\mix\\show.html.twig");
    }
}
