<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vinyl/browse.html.twig */
class __TwigTemplate_00994f3729639e0479ec4e4d4f6ac8d9 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "<div class=\"container\">
    <h1>Browse ";
        // line 5
        (((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 5, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 5, $this->source); })()), "html", null, true))) : (print ("All Genres")));
        echo "</h1>

    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "pop"]);
        // line 12
        echo "\">Pop</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "rock"]);
        // line 17
        echo "\">Rock</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "all-accordion"]);
        // line 22
        echo "\">All Accordion</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Mixes</h2>
        <div class=\"row\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mixes"]) || array_key_exists("mixes", $context) ? $context["mixes"] : (function () { throw new RuntimeError('Variable "mixes" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mix"]) {
            // line 30
            echo "            <div class=\"col col-md-4\">
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mix_show", ["id" => twig_get_attribute($this->env, $this->source,             // line 32
$context["mix"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            // line 33
            echo "\" class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "getImageUrl", [300], "method", false, false, false, 34), "html", null, true);
            echo "\" alt=\"Mix album cover\">
                    <p class=\"mt-2\"><strong>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</strong></p>
                    <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "trackCount", [], "any", false, false, false, 36), "html", null, true);
            echo " Tracks</span>
                    |
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "genre", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
                    |
                    <span>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "createdAt", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
                    <br>
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "votesString", [], "any", false, false, false, 42), "html", null, true);
            echo " votes
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  150 => 46,  140 => 42,  135 => 40,  130 => 38,  125 => 36,  121 => 35,  117 => 34,  114 => 33,  112 => 32,  111 => 31,  108 => 30,  104 => 29,  95 => 22,  93 => 20,  88 => 17,  86 => 15,  81 => 12,  79 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
            {% for mix in mixes %}
            <div class=\"col col-md-4\">
                <a href=\"{{ path('app_mix_show', {
                    id: mix.id
                }) }}\" class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"{{ mix.getImageUrl(300) }}\" alt=\"Mix album cover\">
                    <p class=\"mt-2\"><strong>{{ mix.title }}</strong></p>
                    <span>{{ mix.trackCount }} Tracks</span>
                    |
                    <span>{{ mix.genre }}</span>
                    |
                    <span>{{ mix.createdAt  }}</span>
                    <br>
                    {{ mix.votesString }} votes
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "vinyl/browse.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\templates\\vinyl\\browse.html.twig");
    }
}
