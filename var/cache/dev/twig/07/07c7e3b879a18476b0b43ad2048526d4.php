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
class __TwigTemplate_4eafcf5731220fc5b7d895f5540616da extends Template
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
        (((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 5, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 5, $this->source); })()), "html", null, true))) : (print ("All Genre")));
        echo "</h1>

    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "pop"]);
        echo "\">Pop</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "rock"]);
        echo "\">Rock</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "heavy-metal"]);
        echo "\">Heavy Metal</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Mixes</h2>
        <div class=\"row\">
            <div class=\"col col-md-4\">
                <div class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"https://via.placeholder.com/300\" data-src=\"https://via.placeholder.com/300\" alt=\"Square placeholder img\">
                    <p class=\"mt-2\"><strong>PB & Jams</strong></p>
                    <span>14 Tracks</span> | <span>Rock</span>
                </div>
            </div>
            <div class=\"col col-md-4\">
                <div class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"https://via.placeholder.com/300\" data-src=\"https://via.placeholder.com/300\" alt=\"Square placeholder img\">
                    <p class=\"mt-2\"><strong>Put a Hex on your Ex</strong></p>
                    <span>8 Tracks</span> | <span>Heavy Metal</span>
                </div>
            </div>
            <div class=\"col col-md-4\">
                <div class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"https://via.placeholder.com/300\" data-src=\"https://via.placeholder.com/300\" alt=\"Square placeholder img\">
                    <p class=\"mt-2\"><strong>Spice Grills - Summer Tunes</strong></p>
                    <span>10 Tracks</span> | <span>Pop</span>
                </div>
            </div>
        </div>
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
        return array (  91 => 16,  85 => 13,  79 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <h1>Browse {{ genre ? genre : 'All Genre' }}</h1>

    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {slug: 'pop'}) }}\">Pop</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {slug: 'rock'}) }}\">Rock</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {slug: 'heavy-metal'}) }}\">Heavy Metal</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Mixes</h2>
        <div class=\"row\">
            <div class=\"col col-md-4\">
                <div class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"https://via.placeholder.com/300\" data-src=\"https://via.placeholder.com/300\" alt=\"Square placeholder img\">
                    <p class=\"mt-2\"><strong>PB & Jams</strong></p>
                    <span>14 Tracks</span> | <span>Rock</span>
                </div>
            </div>
            <div class=\"col col-md-4\">
                <div class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"https://via.placeholder.com/300\" data-src=\"https://via.placeholder.com/300\" alt=\"Square placeholder img\">
                    <p class=\"mt-2\"><strong>Put a Hex on your Ex</strong></p>
                    <span>8 Tracks</span> | <span>Heavy Metal</span>
                </div>
            </div>
            <div class=\"col col-md-4\">
                <div class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"https://via.placeholder.com/300\" data-src=\"https://via.placeholder.com/300\" alt=\"Square placeholder img\">
                    <p class=\"mt-2\"><strong>Spice Grills - Summer Tunes</strong></p>
                    <span>10 Tracks</span> | <span>Pop</span>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "vinyl/browse.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\templates\\vinyl\\browse.html.twig");
    }
}
