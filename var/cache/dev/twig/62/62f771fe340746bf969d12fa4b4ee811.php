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

/* vinyl/homepage.html.twig */
class __TwigTemplate_4bc1b83aafa0045518b37b2ff1567c99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vinyl/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vinyl/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vinyl/homepage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Create a new Record | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container\">
    <h1 class=\"d-inline me-3\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h1> <i class=\"fas fa-edit\"></i>
    <div class=\"row mt-5\">
        <div class=\"col-12 col-md-4\">
            ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "mix/_recordSvg.html.twig");
        yield "
        </div>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 12, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 13
            yield "            <div class=\"song-list\" ";
            yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("song-controls", ["infoUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_songs_get_one", ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 14
$context["loop"], "index", [], "any", false, false, false, 14)])]);
            // line 15
            yield ">
                <div class=\"d-flex mb-3\">
                    <a href=\"#\" ";
            // line 17
            yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("song-controls", "play");
            yield ">
                        <i class=\"fas fa-play me-3\"></i>
                    </a>
                    <span class=\"song-details\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "song", [], "any", false, false, false, 20), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "artist", [], "any", false, false, false, 20), "html", null, true);
            yield "</span>
                    <a href=\"#\">
                        <i class=\"fas fa-bars mx-3\"></i>
                    </a>
                    <a href=\"#\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </div>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Add a song</button>
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
        return "vinyl/homepage.html.twig";
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
        return array (  162 => 30,  136 => 20,  130 => 17,  126 => 15,  124 => 14,  122 => 13,  105 => 12,  100 => 10,  94 => 7,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create a new Record | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"d-inline me-3\">{{ title }}</h1> <i class=\"fas fa-edit\"></i>
    <div class=\"row mt-5\">
        <div class=\"col-12 col-md-4\">
            {{ include('mix/_recordSvg.html.twig') }}
        </div>
            {% for track in tracks %}
            <div class=\"song-list\" {{ stimulus_controller('song-controls', {
                infoUrl: path('api_songs_get_one', { id: loop.index })
            }) }}>
                <div class=\"d-flex mb-3\">
                    <a href=\"#\" {{ stimulus_action('song-controls', 'play') }}>
                        <i class=\"fas fa-play me-3\"></i>
                    </a>
                    <span class=\"song-details\">{{ track.song }} - {{ track.artist }}</span>
                    <a href=\"#\">
                        <i class=\"fas fa-bars mx-3\"></i>
                    </a>
                    <a href=\"#\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </div>
            </div>
            {% endfor %}
            <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Add a song</button>
        </div>
    </div>
</div>
{% endblock %}", "vinyl/homepage.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\templates\\vinyl\\homepage.html.twig");
    }
}
