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

/* mix/_recordSvg.html.twig */
class __TwigTemplate_1d12366fad0caf1d9a31694bd65affd8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mix/_recordSvg.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mix/_recordSvg.html.twig"));

        // line 1
        echo "<svg width=\"100%\" height=\"100%\" viewBox=\"0 0 496 496\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <defs>
        <linearGradient x1=\"50%\" y1=\"0%\" x2=\"50%\" y2=\"100%\" id=\"linearGradient-1\">
            <stop stop-color=\"#C380F3\" offset=\"0%\"></stop>
            <stop stop-color=\"#4A90E2\" offset=\"100%\"></stop>
        </linearGradient>
    </defs>
    <g id=\"Mixed-Vinyl\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"Group\">
            <g id=\"record-vinyl\" fill=\"#000000\" fill-rule=\"nonzero\">
                <path d=\"M248,144 C190.562386,144 144,190.562386 144,248 C144,305.437614 190.562386,352 248,352 C305.437614,352 352,305.437614 352,248 C352,190.562386 305.437614,144 248,144 L248,144 Z M248,272 C234.745166,272 224,261.254834 224,248 C224,234.745166 234.745166,224 248,224 C261.254834,224 272,234.745166 272,248 C272,261.254834 261.254834,272 248,272 Z M248,0 C111,0 0,111 0,248 C0,385 111,496 248,496 C385,496 496,385 496,248 C496,111 385,0 248,0 Z M248,376 C177.307552,376 120,318.692448 120,248 C120,177.307552 177.307552,120 248,120 C318.692448,120 376,177.307552 376,248 C376,281.947711 362.514324,314.505012 338.509668,338.509668 C314.505012,362.514324 281.947711,376 248,376 Z\" id=\"Shape\"></path>
            </g>
            <g id=\"record-vinyl\" transform=\"translate(144.000000, 144.000000)\" fill=\"url(#linearGradient-1)\" fill-rule=\"nonzero\">
                <path d=\"M104,0 C46.562386,0 0,46.562386 0,104 C0,161.437614 46.562386,208 104,208 C161.437614,208 208,161.437614 208,104 C208,46.562386 161.437614,0 104,0 L104,0 Z M104,128 C90.745166,128 80,117.254834 80,104 C80,90.745166 90.745166,80 104,80 C117.254834,80 128,90.745166 128,104 C128,117.254834 117.254834,128 104,128 Z\" id=\"Shape\"></path>
            </g>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"235\"></circle>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"215\"></circle>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"195\"></circle>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"175\"></circle>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"155\"></circle>
        </g>
    </g>
</svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mix/_recordSvg.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg width=\"100%\" height=\"100%\" viewBox=\"0 0 496 496\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <defs>
        <linearGradient x1=\"50%\" y1=\"0%\" x2=\"50%\" y2=\"100%\" id=\"linearGradient-1\">
            <stop stop-color=\"#C380F3\" offset=\"0%\"></stop>
            <stop stop-color=\"#4A90E2\" offset=\"100%\"></stop>
        </linearGradient>
    </defs>
    <g id=\"Mixed-Vinyl\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"Group\">
            <g id=\"record-vinyl\" fill=\"#000000\" fill-rule=\"nonzero\">
                <path d=\"M248,144 C190.562386,144 144,190.562386 144,248 C144,305.437614 190.562386,352 248,352 C305.437614,352 352,305.437614 352,248 C352,190.562386 305.437614,144 248,144 L248,144 Z M248,272 C234.745166,272 224,261.254834 224,248 C224,234.745166 234.745166,224 248,224 C261.254834,224 272,234.745166 272,248 C272,261.254834 261.254834,272 248,272 Z M248,0 C111,0 0,111 0,248 C0,385 111,496 248,496 C385,496 496,385 496,248 C496,111 385,0 248,0 Z M248,376 C177.307552,376 120,318.692448 120,248 C120,177.307552 177.307552,120 248,120 C318.692448,120 376,177.307552 376,248 C376,281.947711 362.514324,314.505012 338.509668,338.509668 C314.505012,362.514324 281.947711,376 248,376 Z\" id=\"Shape\"></path>
            </g>
            <g id=\"record-vinyl\" transform=\"translate(144.000000, 144.000000)\" fill=\"url(#linearGradient-1)\" fill-rule=\"nonzero\">
                <path d=\"M104,0 C46.562386,0 0,46.562386 0,104 C0,161.437614 46.562386,208 104,208 C161.437614,208 208,161.437614 208,104 C208,46.562386 161.437614,0 104,0 L104,0 Z M104,128 C90.745166,128 80,117.254834 80,104 C80,90.745166 90.745166,80 104,80 C117.254834,80 128,90.745166 128,104 C128,117.254834 117.254834,128 104,128 Z\" id=\"Shape\"></path>
            </g>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"235\"></circle>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"215\"></circle>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"195\"></circle>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"175\"></circle>
            <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"155\"></circle>
        </g>
    </g>
</svg>", "mix/_recordSvg.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\templates\\mix\\_recordSvg.html.twig");
    }
}
