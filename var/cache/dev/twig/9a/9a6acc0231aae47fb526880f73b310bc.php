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
class __TwigTemplate_589d1e858efe4d47c19509577cdf7afd extends Template
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

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <h1>Browse ";
        // line 4
        (((isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 4, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 4, $this->source); })()), "html", null, true))) : (print ("All Genre")));
        echo "</h1>
    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "pop"]);
        echo "\">Pop</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "rock"]);
        echo "\">Rock</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "heavy-metal"]);
        echo "\">Heavy Metal</a>
        </li>
    </ul>
    <div>
        <h2 class=\"mt-5\">Mixes</h2>
        <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mixes"]) || array_key_exists("mixes", $context) ? $context["mixes"] : (function () { throw new RuntimeError('Variable "mixes" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mix"]) {
            // line 21
            echo "            <div class=\"col col-md-4\">
                <div class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "getImageUrl", [300], "method", false, false, false, 23), "html", null, true);
            echo "\" data-src=\"https://via.placeholder.com/300\" alt=\"Square placeholder img\">
                    <p class=\"mt-2\">
    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mix_show", ["id" => twig_get_attribute($this->env, $this->source, $context["mix"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"mixed-vinyl-container p-3 text-center\">
        <strong>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</strong>
    </a>
</p>
                    <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "trackCount", [], "any", false, false, false, 29), "html", null, true);
            echo " Tracks</span>
                    |
                    <span>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "genre", [], "any", false, false, false, 31), "html", null, true);
            echo "</span>
                    |
                    <span>";
            // line 33
            echo $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(twig_get_attribute($this->env, $this->source, $context["mix"], "createdAt", [], "any", false, false, false, 33));
            echo "</span>
                    <br>
                    ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mix"], "votesString", [], "any", false, false, false, 35), "html", null, true);
            echo " votes
                </div>
            </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            
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
        return array (  147 => 39,  137 => 35,  132 => 33,  127 => 31,  122 => 29,  116 => 26,  112 => 25,  107 => 23,  103 => 21,  99 => 20,  90 => 14,  84 => 11,  78 => 8,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
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
            {% for mix in mixes %}
            <div class=\"col col-md-4\">
                <div class=\"mixed-vinyl-container p-3 text-center\">
                    <img src=\"{{ mix.getImageUrl(300) }}\" data-src=\"https://via.placeholder.com/300\" alt=\"Square placeholder img\">
                    <p class=\"mt-2\">
    <a href=\"{{ path('app_mix_show', { id: mix.id }) }}\" class=\"mixed-vinyl-container p-3 text-center\">
        <strong>{{ mix.title }}</strong>
    </a>
</p>
                    <span>{{ mix.trackCount }} Tracks</span>
                    |
                    <span>{{ mix.genre }}</span>
                    |
                    <span>{{ mix.createdAt|ago }}</span>
                    <br>
                    {{ mix.votesString }} votes
                </div>
            </div>
         {% endfor %}
            
        </div>
    </div>
</div>
{% endblock %}", "vinyl/browse.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\templates\\vinyl\\browse.html.twig");
    }
}
