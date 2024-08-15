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

/* game/game_info.html.twig */
class __TwigTemplate_3c7207cbfcca5b9ccee43e8113c4bca3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game_info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game_info.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/game_info.html.twig", 1);
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

        yield "21";
        
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
        yield "
<div class=\"container\">
    <h1>Tjugoett</h1>
    <p>Tjugoett, även känt som Blackjack eller 21, är ett populärt kortspelet som spelas med en eller flera kortlekar.
    Målet med spelet är att få en hand med ett högre totalvärde än dealerns hand, utan att överstiga 21.</p></br>
    
    <h2>Kortens värde</h2>
        <p>Korten 2-10 har samma värde som deras siffror, knektar,
        damer och kungar är värda 10 poäng och ess kan räknas som 1 eller 11,
        beroende på vad som är mest fördelaktigt för handen.</p></br>

    <h2>Förberedelser</h2>
        <p>En eller flera kortlekar blandas och alla spelare, inklusive dealern, får två kort var.
        Spelarna får sina kort med framsidan uppåt,
        medan dealern får ett kort med framsidan uppåt och det andra med framsidan nedåt (kallad ”hålkort”).</p></br>

    <h2>Spelarens tur</h2>
        <p>Spelarna måste bestämma om de vill ”ta ett kort” (hit) eller ”stå” (stand).
        Om en spelare väljer att ta ett kort och handens totala värde överstiger 21,
        blir de ”tjocka” och förlorar sin insats direkt.</p></br>

    <h2>Dealerns tur</h2>
        <p> När alla spelare har agerat, avslöjar dealern sitt hålkort.
        Om dealerns hand har ett totalvärde på 17 eller högre,
        måste de stå. Om dealerns hand har ett totalvärde på 16 eller lägre,
        måste de ta kort tills de har minst 17 eller blir tjocka.</p></br>

    <h2>Utfall</h2>
        <p>Om dealern blir tjock, vinner alla spelare som inte blev tjocka under sin tur. 
        Om dealern inte blir tjock, jämförs totalvärdet på spelarnas och dealerns händer. 
        Om en spelares hand är högre än dealerns, vinner spelaren. Om en spelares hand är lägre än dealerns, 
        förlorar spelaren. Om en spelares hand har samma värde som dealerns, blir det oavgjort (”push”), 
        och spelaren får tillbaka sin insats.</p></br>

    <h2>Blackjack</h2>
        <p>Om en spelare får ett ess och ett kort med värdet 10 som sina första två kort, 
        har de en ”blackjack”. En blackjack vinner automatiskt, 
        såvida inte dealern också har en blackjack. 
        I sådana fall blir det oavgjort och spelaren får tillbaka sin insats.</p>

    
   
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
        return "game/game_info.html.twig";
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
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}21{% endblock %}

{% block body %}

<div class=\"container\">
    <h1>Tjugoett</h1>
    <p>Tjugoett, även känt som Blackjack eller 21, är ett populärt kortspelet som spelas med en eller flera kortlekar.
    Målet med spelet är att få en hand med ett högre totalvärde än dealerns hand, utan att överstiga 21.</p></br>
    
    <h2>Kortens värde</h2>
        <p>Korten 2-10 har samma värde som deras siffror, knektar,
        damer och kungar är värda 10 poäng och ess kan räknas som 1 eller 11,
        beroende på vad som är mest fördelaktigt för handen.</p></br>

    <h2>Förberedelser</h2>
        <p>En eller flera kortlekar blandas och alla spelare, inklusive dealern, får två kort var.
        Spelarna får sina kort med framsidan uppåt,
        medan dealern får ett kort med framsidan uppåt och det andra med framsidan nedåt (kallad ”hålkort”).</p></br>

    <h2>Spelarens tur</h2>
        <p>Spelarna måste bestämma om de vill ”ta ett kort” (hit) eller ”stå” (stand).
        Om en spelare väljer att ta ett kort och handens totala värde överstiger 21,
        blir de ”tjocka” och förlorar sin insats direkt.</p></br>

    <h2>Dealerns tur</h2>
        <p> När alla spelare har agerat, avslöjar dealern sitt hålkort.
        Om dealerns hand har ett totalvärde på 17 eller högre,
        måste de stå. Om dealerns hand har ett totalvärde på 16 eller lägre,
        måste de ta kort tills de har minst 17 eller blir tjocka.</p></br>

    <h2>Utfall</h2>
        <p>Om dealern blir tjock, vinner alla spelare som inte blev tjocka under sin tur. 
        Om dealern inte blir tjock, jämförs totalvärdet på spelarnas och dealerns händer. 
        Om en spelares hand är högre än dealerns, vinner spelaren. Om en spelares hand är lägre än dealerns, 
        förlorar spelaren. Om en spelares hand har samma värde som dealerns, blir det oavgjort (”push”), 
        och spelaren får tillbaka sin insats.</p></br>

    <h2>Blackjack</h2>
        <p>Om en spelare får ett ess och ett kort med värdet 10 som sina första två kort, 
        har de en ”blackjack”. En blackjack vinner automatiskt, 
        såvida inte dealern också har en blackjack. 
        I sådana fall blir det oavgjort och spelaren får tillbaka sin insats.</p>

    
   
</div>




{% endblock %}", "game/game_info.html.twig", "/home/alexander/dbwebb-kurser/mvc/me/report/templates/game/game_info.html.twig");
    }
}
