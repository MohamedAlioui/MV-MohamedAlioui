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

/* @Pagerfanta/default.html.twig */
class __TwigTemplate_595a8506d3480061ecb56972a8498538 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pager_widget' => [$this, 'block_pager_widget'],
            'pager' => [$this, 'block_pager'],
            'page_link' => [$this, 'block_page_link'],
            'current_page_link' => [$this, 'block_current_page_link'],
            'previous_page_link' => [$this, 'block_previous_page_link'],
            'previous_page_link_disabled' => [$this, 'block_previous_page_link_disabled'],
            'previous_page_message' => [$this, 'block_previous_page_message'],
            'next_page_link' => [$this, 'block_next_page_link'],
            'next_page_link_disabled' => [$this, 'block_next_page_link_disabled'],
            'next_page_message' => [$this, 'block_next_page_message'],
            'ellipsis' => [$this, 'block_ellipsis'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pagerfanta/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pagerfanta/default.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('pager_widget', $context, $blocks);
        // line 7
        yield from $this->unwrap()->yieldBlock('pager', $context, $blocks);
        // line 75
        yield from $this->unwrap()->yieldBlock('page_link', $context, $blocks);
        // line 79
        yield from $this->unwrap()->yieldBlock('current_page_link', $context, $blocks);
        // line 83
        yield from $this->unwrap()->yieldBlock('previous_page_link', $context, $blocks);
        // line 87
        yield from $this->unwrap()->yieldBlock('previous_page_link_disabled', $context, $blocks);
        // line 91
        yield from $this->unwrap()->yieldBlock('previous_page_message', $context, $blocks);
        // line 99
        yield from $this->unwrap()->yieldBlock('next_page_link', $context, $blocks);
        // line 103
        yield from $this->unwrap()->yieldBlock('next_page_link_disabled', $context, $blocks);
        // line 107
        yield from $this->unwrap()->yieldBlock('next_page_message', $context, $blocks);
        // line 115
        yield from $this->unwrap()->yieldBlock('ellipsis', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 1
    public function block_pager_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_widget"));

        // line 2
        yield "<nav class=\"pagination\">";
        // line 3
        yield from         $this->unwrap()->yieldBlock("pager", $context, $blocks);
        // line 4
        yield "</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_pager($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager"));

        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 9, $this->source); })()), "hasPreviousPage", [], "method", false, false, false, 9)) {
            // line 10
            $context["path"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 10, $this->source); })()), "route", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 10, $this->source); })()), "getPreviousPage", [], "method", false, false, false, 10)], "method", false, false, false, 10);
            // line 11
            $context["page"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 11, $this->source); })()), "getPreviousPage", [], "method", false, false, false, 11);
            // line 12
            yield from             $this->unwrap()->yieldBlock("previous_page_link", $context, $blocks);
        } else {
            // line 14
            yield from             $this->unwrap()->yieldBlock("previous_page_link_disabled", $context, $blocks);
        }
        // line 18
        if (((isset($context["start_page"]) || array_key_exists("start_page", $context) ? $context["start_page"] : (function () { throw new RuntimeError('Variable "start_page" does not exist.', 18, $this->source); })()) > 1)) {
            // line 19
            $context["page"] = 1;
            // line 20
            $context["path"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 20, $this->source); })()), "route", [(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })())], "method", false, false, false, 20);
            // line 21
            yield from             $this->unwrap()->yieldBlock("page_link", $context, $blocks);
        }
        // line 25
        if (((isset($context["start_page"]) || array_key_exists("start_page", $context) ? $context["start_page"] : (function () { throw new RuntimeError('Variable "start_page" does not exist.', 25, $this->source); })()) == 3)) {
            // line 26
            $context["page"] = 2;
            // line 27
            $context["path"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 27, $this->source); })()), "route", [(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 27, $this->source); })())], "method", false, false, false, 27);
            // line 28
            yield from             $this->unwrap()->yieldBlock("page_link", $context, $blocks);
        }
        // line 32
        if (((isset($context["start_page"]) || array_key_exists("start_page", $context) ? $context["start_page"] : (function () { throw new RuntimeError('Variable "start_page" does not exist.', 32, $this->source); })()) > 3)) {
            // line 33
            yield from             $this->unwrap()->yieldBlock("ellipsis", $context, $blocks);
        }
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["start_page"]) || array_key_exists("start_page", $context) ? $context["start_page"] : (function () { throw new RuntimeError('Variable "start_page" does not exist.', 37, $this->source); })()), (isset($context["end_page"]) || array_key_exists("end_page", $context) ? $context["end_page"] : (function () { throw new RuntimeError('Variable "end_page" does not exist.', 37, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            $context["path"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 38, $this->source); })()), "route", [$context["page"]], "method", false, false, false, 38);
            // line 39
            if (($context["page"] == (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 39, $this->source); })()))) {
                // line 40
                yield from                 $this->unwrap()->yieldBlock("current_page_link", $context, $blocks);
            } else {
                // line 42
                yield from                 $this->unwrap()->yieldBlock("page_link", $context, $blocks);
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        if (((isset($context["end_page"]) || array_key_exists("end_page", $context) ? $context["end_page"] : (function () { throw new RuntimeError('Variable "end_page" does not exist.', 47, $this->source); })()) < ((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 47, $this->source); })()) - 2))) {
            // line 48
            yield from             $this->unwrap()->yieldBlock("ellipsis", $context, $blocks);
        }
        // line 52
        if (((isset($context["end_page"]) || array_key_exists("end_page", $context) ? $context["end_page"] : (function () { throw new RuntimeError('Variable "end_page" does not exist.', 52, $this->source); })()) == ((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 52, $this->source); })()) - 2))) {
            // line 53
            $context["page"] = ((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 53, $this->source); })()) - 1);
            // line 54
            $context["path"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 54, $this->source); })()), "route", [(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })())], "method", false, false, false, 54);
            // line 55
            yield from             $this->unwrap()->yieldBlock("page_link", $context, $blocks);
        }
        // line 59
        if (((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 59, $this->source); })()) > (isset($context["end_page"]) || array_key_exists("end_page", $context) ? $context["end_page"] : (function () { throw new RuntimeError('Variable "end_page" does not exist.', 59, $this->source); })()))) {
            // line 60
            $context["page"] = (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 60, $this->source); })());
            // line 61
            $context["path"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 61, $this->source); })()), "route", [(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 61, $this->source); })())], "method", false, false, false, 61);
            // line 62
            yield from             $this->unwrap()->yieldBlock("page_link", $context, $blocks);
        }
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 66, $this->source); })()), "hasNextPage", [], "method", false, false, false, 66)) {
            // line 67
            $context["path"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 67, $this->source); })()), "route", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 67, $this->source); })()), "getNextPage", [], "method", false, false, false, 67)], "method", false, false, false, 67);
            // line 68
            $context["page"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 68, $this->source); })()), "getNextPage", [], "method", false, false, false, 68);
            // line 69
            yield from             $this->unwrap()->yieldBlock("next_page_link", $context, $blocks);
        } else {
            // line 71
            yield from             $this->unwrap()->yieldBlock("next_page_link_disabled", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 75
    public function block_page_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_link"));

        // line 76
        yield "<a class=\"pagination__item\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 79
    public function block_current_page_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "current_page_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "current_page_link"));

        // line 80
        yield "<span class=\"pagination__item pagination__item--current-page\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 83
    public function block_previous_page_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_link"));

        // line 84
        yield "<a class=\"pagination__item pagination__item--previous-page\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "\" rel=\"prev\">";
        yield from         $this->unwrap()->yieldBlock("previous_page_message", $context, $blocks);
        yield "</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 87
    public function block_previous_page_link_disabled($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_link_disabled"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_link_disabled"));

        // line 88
        yield "<span class=\"pagination__item pagination__item--previous-page pagination__item--disabled\">";
        yield from         $this->unwrap()->yieldBlock("previous_page_message", $context, $blocks);
        yield "</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 91
    public function block_previous_page_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_message"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_message"));

        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "prev_message", [], "array", true, true, false, 92)) {
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 93, $this->source); })()), "prev_message", [], "array", false, false, false, 93), "html", null, true);
        } else {
            // line 95
            yield "Previous";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 99
    public function block_next_page_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_link"));

        // line 100
        yield "<a class=\"pagination__item pagination__item--next-page\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "\" rel=\"next\">";
        yield from         $this->unwrap()->yieldBlock("next_page_message", $context, $blocks);
        yield "</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 103
    public function block_next_page_link_disabled($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_link_disabled"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_link_disabled"));

        // line 104
        yield "<span class=\"pagination__item pagination__item--next-page pagination__item--disabled\">";
        yield from         $this->unwrap()->yieldBlock("next_page_message", $context, $blocks);
        yield "</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 107
    public function block_next_page_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_message"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_message"));

        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "next_message", [], "array", true, true, false, 108)) {
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 109, $this->source); })()), "next_message", [], "array", false, false, false, 109), "html", null, true);
        } else {
            // line 111
            yield "Next";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 115
    public function block_ellipsis($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ellipsis"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ellipsis"));

        // line 116
        yield "<span class=\"pagination__item pagination__item--separator\">&hellip;</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Pagerfanta/default.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  447 => 116,  437 => 115,  425 => 111,  422 => 109,  420 => 108,  410 => 107,  397 => 104,  387 => 103,  372 => 100,  362 => 99,  350 => 95,  347 => 93,  345 => 92,  335 => 91,  322 => 88,  312 => 87,  297 => 84,  287 => 83,  274 => 80,  264 => 79,  249 => 76,  239 => 75,  227 => 71,  224 => 69,  222 => 68,  220 => 67,  218 => 66,  215 => 62,  213 => 61,  211 => 60,  209 => 59,  206 => 55,  204 => 54,  202 => 53,  200 => 52,  197 => 48,  195 => 47,  180 => 42,  177 => 40,  175 => 39,  173 => 38,  156 => 37,  153 => 33,  151 => 32,  148 => 28,  146 => 27,  144 => 26,  142 => 25,  139 => 21,  137 => 20,  135 => 19,  133 => 18,  130 => 14,  127 => 12,  125 => 11,  123 => 10,  121 => 9,  111 => 7,  100 => 4,  98 => 3,  96 => 2,  86 => 1,  75 => 115,  73 => 107,  71 => 103,  69 => 99,  67 => 91,  65 => 87,  63 => 83,  61 => 79,  59 => 75,  57 => 7,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block pager_widget -%}
    <nav class=\"pagination\">
        {{- block('pager') -}}
    </nav>
{%- endblock pager_widget -%}

{%- block pager -%}
    {# Previous Page Link #}
    {%- if pagerfanta.hasPreviousPage() -%}
        {%- set path = route_generator.route(pagerfanta.getPreviousPage()) -%}
        {%- set page = pagerfanta.getPreviousPage() -%}
        {{- block('previous_page_link') -}}
    {%- else -%}
        {{- block('previous_page_link_disabled') -}}
    {%- endif -%}

    {# First Page Link #}
    {%- if start_page > 1 -%}
        {%- set page = 1 -%}
        {%- set path = route_generator.route(page) -%}
        {{- block('page_link') -}}
    {%- endif -%}

    {# Second Page Link, displays if we are on page 3 #}
    {%- if start_page == 3 -%}
        {%- set page = 2 -%}
        {%- set path = route_generator.route(page) -%}
        {{- block('page_link') -}}
    {%- endif -%}

    {# Separator, creates a \"...\" separator to limit the number of items if we are starting beyond page 3 #}
    {%- if start_page > 3 -%}
        {{- block('ellipsis') -}}
    {%- endif -%}

    {# Page Links #}
    {%- for page in range(start_page, end_page) -%}
        {%- set path = route_generator.route(page) -%}
        {%- if page == current_page -%}
            {{- block('current_page_link') -}}
        {%- else -%}
            {{- block('page_link') -}}
        {%- endif -%}
    {%- endfor -%}

    {# Separator, creates a \"...\" separator to limit the number of items if we are over 3 pages away from the last page #}
    {%- if end_page < (nb_pages - 2) -%}
        {{- block('ellipsis') -}}
    {%- endif -%}

    {# Second to Last Page Link, displays if we are on the third from last page #}
    {%- if end_page == (nb_pages - 2) -%}
        {%- set page = (nb_pages - 1) -%}
        {%- set path = route_generator.route(page) -%}
        {{- block('page_link') -}}
    {%- endif -%}

    {# Last Page Link #}
    {%- if nb_pages > end_page -%}
        {%- set page = nb_pages -%}
        {%- set path = route_generator.route(page) -%}
        {{- block('page_link') -}}
    {%- endif -%}

    {# Next Page Link #}
    {%- if pagerfanta.hasNextPage() -%}
        {%- set path = route_generator.route(pagerfanta.getNextPage()) -%}
        {%- set page = pagerfanta.getNextPage() -%}
        {{- block('next_page_link') -}}
    {%- else -%}
        {{- block('next_page_link_disabled') -}}
    {%- endif -%}
{%- endblock pager -%}

{%- block page_link -%}
    <a class=\"pagination__item\" href=\"{{- path -}}\">{{- page -}}</a>
{%- endblock page_link -%}

{%- block current_page_link -%}
    <span class=\"pagination__item pagination__item--current-page\" aria-current=\"page\">{{- page -}}</span>
{%- endblock current_page_link -%}

{%- block previous_page_link -%}
    <a class=\"pagination__item pagination__item--previous-page\" href=\"{{- path -}}\" rel=\"prev\">{{- block('previous_page_message') -}}</a>
{%- endblock previous_page_link -%}

{%- block previous_page_link_disabled -%}
    <span class=\"pagination__item pagination__item--previous-page pagination__item--disabled\">{{- block('previous_page_message') -}}</span>
{%- endblock previous_page_link_disabled -%}

{%- block previous_page_message -%}
    {%- if options['prev_message'] is defined -%}
        {{- options['prev_message'] -}}
    {%- else -%}
        Previous
    {%- endif -%}
{%- endblock previous_page_message -%}

{%- block next_page_link -%}
    <a class=\"pagination__item pagination__item--next-page\" href=\"{{- path -}}\" rel=\"next\">{{- block('next_page_message') -}}</a>
{%- endblock next_page_link -%}

{%- block next_page_link_disabled -%}
    <span class=\"pagination__item pagination__item--next-page pagination__item--disabled\">{{- block('next_page_message') -}}</span>
{%- endblock next_page_link_disabled -%}

{%- block next_page_message -%}
    {%- if options['next_message'] is defined -%}
        {{- options['next_message'] -}}
    {%- else -%}
        Next
    {%- endif -%}
{%- endblock next_page_message -%}

{%- block ellipsis -%}
    <span class=\"pagination__item pagination__item--separator\">&hellip;</span>
{%- endblock ellipsis -%}
", "@Pagerfanta/default.html.twig", "C:\\Users\\user\\Desktop\\MV-Mohamed Alioui\\MV - Mohamed Alioui\\vendor\\pagerfanta\\twig\\templates\\default.html.twig");
    }
}
