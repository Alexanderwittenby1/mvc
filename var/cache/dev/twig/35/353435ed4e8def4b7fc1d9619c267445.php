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

/* IndexTwig.twig */
class __TwigTemplate_96734bce98cd54e4b9a1d943447d06e5 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "IndexTwig.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "IndexTwig.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "IndexTwig.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "OM";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <h1>Om mig</h1>
    <div class=\"about-me\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hemsidabild.jpg"), "html", null, true);
        yield "\"> 
            <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hemsidabild.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"picture-about\">
        </a>
    </div>
    <div>
        <p>Hej, mitt namn är Alexander, och jag är 27 år gammal.
        Ursprungligen kommer jag från den vackra staden Karlskrona.
        För närvarande befinner jag mig i en spännande fas av mitt liv då jag studerar webbprogrammering vid BTH, Blekinge Tekniska Högskola, här i Karlskrona.
        </p>
        <h3>Mina intressen</h3>
        <p> När jag inte fördjupar mig i koden eller utforskar nya programmeringsspråk,
        spenderar jag gärna tid med mina två älskade: min underbara hund Majken och min fantastiska sambo Malou.
        Majken är inte bara en fyrbent vän utan också en livlig följeslagare som älskar långa promenader och äventyr utomhus.
        Att strosa runt i naturen med henne är en av mina favoritsysselsättningar på fritiden.
        Förutom att vara ute med Majken, ägnar jag också en del av min tid åt att styrketräning. Att hålla mig aktiv och stark är något som jag värdesätter högt för både kropp och sinne.
        Utöver utomhusaktiviteter och styrketräning, finner jag även avkoppling i att spela spel.
        Oavsett om det är att dyka in i en spännande spelvärld ensam eller att utmana vänner i flerspelarlägen, är spel en rolig och underhållande del av mitt liv.</p>
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
        return "IndexTwig.twig";
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
        return array (  98 => 11,  94 => 10,  90 => 8,  80 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/lucky_number.html.twig #}

{% extends \"base.html.twig\" %}

{% block title %}OM{% endblock %}

{% block body %}
    <h1>Om mig</h1>
    <div class=\"about-me\">
        <a href=\"{{ asset('img/hemsidabild.jpg') }}\"> 
            <img src=\"{{ asset('img/hemsidabild.jpg') }}\" alt=\"\" class=\"picture-about\">
        </a>
    </div>
    <div>
        <p>Hej, mitt namn är Alexander, och jag är 27 år gammal.
        Ursprungligen kommer jag från den vackra staden Karlskrona.
        För närvarande befinner jag mig i en spännande fas av mitt liv då jag studerar webbprogrammering vid BTH, Blekinge Tekniska Högskola, här i Karlskrona.
        </p>
        <h3>Mina intressen</h3>
        <p> När jag inte fördjupar mig i koden eller utforskar nya programmeringsspråk,
        spenderar jag gärna tid med mina två älskade: min underbara hund Majken och min fantastiska sambo Malou.
        Majken är inte bara en fyrbent vän utan också en livlig följeslagare som älskar långa promenader och äventyr utomhus.
        Att strosa runt i naturen med henne är en av mina favoritsysselsättningar på fritiden.
        Förutom att vara ute med Majken, ägnar jag också en del av min tid åt att styrketräning. Att hålla mig aktiv och stark är något som jag värdesätter högt för både kropp och sinne.
        Utöver utomhusaktiviteter och styrketräning, finner jag även avkoppling i att spela spel.
        Oavsett om det är att dyka in i en spännande spelvärld ensam eller att utmana vänner i flerspelarlägen, är spel en rolig och underhållande del av mitt liv.</p>
    </div>
{% endblock %}", "IndexTwig.twig", "/home/alexander/dbwebb-kurser/mvc/me/report/templates/IndexTwig.twig");
    }
}
