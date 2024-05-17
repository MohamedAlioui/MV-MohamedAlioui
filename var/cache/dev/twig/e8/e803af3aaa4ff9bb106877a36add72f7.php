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
class __TwigTemplate_cd7f80ad0ed469b8871ffb7c01c5573b extends Template
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
    <!-- Header Section -->
    <h1>Browse ";
        // line 6
        (((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 6, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 6, $this->source); })()), "html", null, true)) : (yield "All Genres"));
        yield "</h1>

    <!-- Genre Filter Section -->
    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        ";
        // line 11
        $context["genres"] = ["pop", "rock", "all-accordion"];
        // line 12
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 13
            yield "            <li class=\"d-inline\">
                <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => $context["genre"]]), "html", null, true);
            yield "\">
                    ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["genre"]), "html", null, true);
            yield "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "    </ul>

    <!-- Mixes Section -->
    <div>
        <h2 class=\"mt-5\">Mixes</h2>
        <div class=\"row\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mixes"]) || array_key_exists("mixes", $context) ? $context["mixes"] : (function () { throw new RuntimeError('Variable "mixes" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mix"]) {
            // line 26
            yield "                ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "slug", [], "any", false, false, false, 26))) {
                // line 27
                yield "                    <div class=\"col col-md-4\">
                        <a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mix_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "slug", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" class=\"mixed-vinyl-container p-3 text-center\">
                            <img src=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "getImageUrl", [300], "method", false, false, false, 29), "html", null, true);
                yield "\" alt=\"Mix album cover\">
                            <p class=\"mt-2\"><strong>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "title", [], "any", false, false, false, 30), "html", null, true);
                yield "</strong></p>
                            <span>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "trackCount", [], "any", false, false, false, 31), "html", null, true);
                yield " Tracks</span> |
                            <span>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "genre", [], "any", false, false, false, 32), "html", null, true);
                yield "</span> |
                            <span>";
                // line 33
                yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "createdAt", [], "any", false, false, false, 33));
                yield "</span>
                            <br>
                            ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "votesString", [], "any", false, false, false, 35), "html", null, true);
                yield " votes
                        </a>
                    </div>
                ";
            } else {
                // line 39
                yield "                    <div class=\"col col-md-4\">
                        <div class=\"mixed-vinyl-container p-3 text-center\">
                            <img src=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "getImageUrl", [300], "method", false, false, false, 41), "html", null, true);
                yield "\" alt=\"Mix album cover\">
                            <p class=\"mt-2\"><strong>";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "title", [], "any", false, false, false, 42), "html", null, true);
                yield "</strong></p>
                            <span>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "trackCount", [], "any", false, false, false, 43), "html", null, true);
                yield " Tracks</span> |
                            <span>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "genre", [], "any", false, false, false, 44), "html", null, true);
                yield "</span> |
                            <span>";
                // line 45
                yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "createdAt", [], "any", false, false, false, 45));
                yield "</span>
                            <br>
                            ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mix"], "votesString", [], "any", false, false, false, 47), "html", null, true);
                yield " votes
                        </div>
                    </div>
                ";
            }
            // line 51
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </div>
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
        return array (  193 => 52,  187 => 51,  180 => 47,  175 => 45,  171 => 44,  167 => 43,  163 => 42,  159 => 41,  155 => 39,  148 => 35,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  120 => 27,  117 => 26,  113 => 25,  105 => 19,  95 => 15,  91 => 14,  88 => 13,  83 => 12,  81 => 11,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <!-- Header Section -->
    <h1>Browse {{ genre ? genre : 'All Genres' }}</h1>

    <!-- Genre Filter Section -->
    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        {% set genres = ['pop', 'rock', 'all-accordion'] %}
        {% for genre in genres %}
            <li class=\"d-inline\">
                <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', { slug: genre }) }}\">
                    {{ genre | capitalize }}
                </a>
            </li>
        {% endfor %}
    </ul>

    <!-- Mixes Section -->
    <div>
        <h2 class=\"mt-5\">Mixes</h2>
        <div class=\"row\">
            {% for mix in mixes %}
                {% if mix.slug is not empty %}
                    <div class=\"col col-md-4\">
                        <a href=\"{{ path('app_mix_show', { slug: mix.slug }) }}\" class=\"mixed-vinyl-container p-3 text-center\">
                            <img src=\"{{ mix.getImageUrl(300) }}\" alt=\"Mix album cover\">
                            <p class=\"mt-2\"><strong>{{ mix.title }}</strong></p>
                            <span>{{ mix.trackCount }} Tracks</span> |
                            <span>{{ mix.genre }}</span> |
                            <span>{{ mix.createdAt|ago }}</span>
                            <br>
                            {{ mix.votesString }} votes
                        </a>
                    </div>
                {% else %}
                    <div class=\"col col-md-4\">
                        <div class=\"mixed-vinyl-container p-3 text-center\">
                            <img src=\"{{ mix.getImageUrl(300) }}\" alt=\"Mix album cover\">
                            <p class=\"mt-2\"><strong>{{ mix.title }}</strong></p>
                            <span>{{ mix.trackCount }} Tracks</span> |
                            <span>{{ mix.genre }}</span> |
                            <span>{{ mix.createdAt|ago }}</span>
                            <br>
                            {{ mix.votesString }} votes
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "vinyl/browse.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\templates\\vinyl\\browse.html.twig");
    }
}
