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

/* vinyl/browse.html.twig */
class __TwigTemplate_634b4dbc8ed329dcbeb9860ee59e6fc9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vinyl/browse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vinyl/browse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vinyl/browse.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "<div class=\"container\">
    <h1>Browse ";
        // line 5
        (((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 5, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 5, $this->source); })()), "html", null, true)) : (yield "All Genres"));
        yield "</h1>

    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "pop"]);
        // line 12
        yield "\">Pop</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "rock"]);
        // line 17
        yield "\">Rock</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "all-accordion"]);
        // line 22
        yield "\">All Accordion</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Mixes</h2>
        <div class=\"row\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mix"]) {
            // line 30
            yield "            <div class=\"col col-md-4\">
                <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mix_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source,             // line 32
$context["mix"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
            // line 33
            yield "\" class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "getImageUrl", [300], "method", false, false, false, 34), "html", null, true);
            yield "\" alt=\"Mix album cover\">
                    <p class=\"mt-2\"><strong>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "title", [], "any", false, false, false, 35), "html", null, true);
            yield "</strong></p>
                    <span>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "trackCount", [], "any", false, false, false, 36), "html", null, true);
            yield " Tracks</span>
                    |
                    <span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "genre", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>
                    |
                    <span>";
            // line 40
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "createdAt", [], "any", false, false, false, 40));
            yield "</span>
                    <br>
                    ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "votesString", [], "any", false, false, false, 42), "html", null, true);
            yield " votes
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Pagerfanta\Twig\Extension\PagerfantaRuntime')->renderPagerfanta((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 47, $this->source); })()));
        yield "
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
        return "vinyl/browse.html.twig";
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
        return array (  154 => 47,  151 => 46,  141 => 42,  136 => 40,  131 => 38,  126 => 36,  122 => 35,  118 => 34,  115 => 33,  113 => 32,  112 => 31,  109 => 30,  105 => 29,  96 => 22,  94 => 20,  89 => 17,  87 => 15,  82 => 12,  80 => 10,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <h1>Browse {{ genre ? genre : 'All Genres' }}</h1>

    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {
                slug: 'pop'
            }) }}\">Pop</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {
                slug: 'rock'
            }) }}\">Rock</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {
                slug: 'all-accordion'
            }) }}\">All Accordion</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Mixes</h2>
        <div class=\"row\">
            {% for mix in pager %}
            <div class=\"col col-md-4\">
                <a href=\"{{ path('app_mix_show', {
                    slug: mix.slug
                }) }}\" class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"{{ mix.getImageUrl(300) }}\" alt=\"Mix album cover\">
                    <p class=\"mt-2\"><strong>{{ mix.title }}</strong></p>
                    <span>{{ mix.trackCount }} Tracks</span>
                    |
                    <span>{{ mix.genre }}</span>
                    |
                    <span>{{ mix.createdAt|ago }}</span>
                    <br>
                    {{ mix.votesString }} votes
                </a>
            </div>
            {% endfor %}

            {{ pagerfanta(pager) }}
        </div>
    </div>
</div>
{% endblock %}", "vinyl/browse.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\templates\\vinyl\\browse.html.twig");
    }
}
