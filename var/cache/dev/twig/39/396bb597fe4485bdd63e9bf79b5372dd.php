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

/* report.html.twig */
class __TwigTemplate_83f8b5cbb018132d83da2962e7319eb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
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

        yield "Report";
        
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
        yield "    <h1>Report</h1>
    <h3 id=\"kmom01\">Kursmoment 1: Installation av Symfony och Skapande av Sidor</h3>
    <p>I det första kursmomentet, fokuserade jag på att installera Symfony och skapa grundläggande webbsidor.</p>
    <p>Genom att använda Symfony's routing och controller-funktioner tillsammans med Twig som templatemotor, skapade jag de efterfrågade sidorna enligt projektets krav.</p>
    <p>Detta inkluderade att definiera olika routar för att hantera olika sidor, samt att skapa en användarvänlig struktur för webbsidorna med hjälp av Twig-mallar.</p>
    <p>För att utforska Symfony's funktionalitet och möjligheter, testade jag också olika komponenter och funktioner som erbjuds av ramverket.</p>
    <p>Den tekniska dokumentationen och gemenskapens stöd hjälpte mig att förstå och implementera de grundläggande koncepten i Symfony.</p></br>


    <h3 id=\"kmom02\">Kursmoment 2: Objektorientering</h3>
    <p>I PHP är objektorientering en central del av programmeringsparadigmet,
    och det inkluderar flera viktiga konstruktioner som arv,
    komposition, interface och trait.
    Arv innebär att en klass kan ärva egenskaper och metoder från en annan klass,
    vilket främjar återanvändning av kod. I PHP används arv genom att en klass deklareras med ordet <code>extends</code> följt av namnet på den klass som ska ärvas. 
    Komposition, å andra sidan, handlar om att bygga komplexa objekt genom att kombinera mindre, 
    självständiga objekt, vilket i PHP ofta innebär att man inkluderar objekt som medlemsvariabler inom andra objekt.</p>

    <p>Interface är en annan viktig konstruktion, 
    som i PHP används för att definiera en uppsättning metoder som en klass måste implementera. 
    Detta främjar enhetlighet och möjliggör polymorfism. 
    Ett interface deklareras med nyckelordet <code>interface</code> och implementeras av klasser med nyckelordet <code>implements</code>. 
    Trait är en särskild konstruktion i PHP som gör det möjligt att återanvända metoder över flera klasser utan att använda arv. 
    Traits skapas med nyckelordet <code>trait</code> och inkluderas i en klass med <code>use</code>.</p>

    <p>När det gäller min implementation från uppgiften, 
    valde jag att strukturera koden enligt de bästa objektorienterade principerna. 
    Jag använde arv för att skapa en basmodell som andra modeller kunde utgå från, 
    och jag använde komposition för att hantera beroenden mellan olika objekt. 
    Jag är ganska nöjd med lösningen, 
    men jag ser en förbättringspotential när det gäller att minska komplexiteten i vissa av klasserna och göra koden mer modulär. 
    Detta skulle kunna uppnås genom att använda fler interfaces och traits för att dela upp funktionaliteten.</p>

    <p>Att arbeta med Symfony och följa MVC-mönstret har varit en intressant och lärorik upplevelse. 
    Jag uppskattar tydligheten och strukturen som MVC medför, men jag har också stött på utmaningar, 
    särskilt när det gäller att hålla kontrollern smal och enkel. 
    Det krävs disciplin och noggrann planering för att undvika att kontrollern blir överbelastad med logik som egentligen hör hemma i modeller eller services.</p>

    <p>Min \"Today I Learned\" (TIL) för detta kursmoment är vikten av att använda designmönster som factory och dependency injection i Symfony. 
    Dessa mönster hjälper inte bara till att hålla koden ren och underhållbar, 
    utan de underlättar också testning och gör det lättare att utöka applikationen med nya funktioner i framtiden.</p>

    <h3 id=\"kmom03\">Kursmoment 3: Applikationen</h3>
    <p> Att modellera ett kortspel med hjälp av flödesdiagram och pseudokod var en intressant och givande process. 
        Det gav mig en tydlig överblick över hur spelets logik skulle fungera och hjälpte mig att identifiera viktiga steg i utvecklingen innan jag ens började skriva kod. 
        Genom att bryta ner spelet i mindre delar och visualisera flödet kunde jag enklare förstå de olika komponenterna och hur de interagerar med varandra. 
        Jag tror att denna metod verkligen stödjer min problemlösning och gör det lättare att strukturera koden på ett logiskt och effektivt sätt. 
        Det gav mig också en bra grund att stå på när jag skulle börja implementera spelet i kod.
    </p>

    <p>
        När det gäller min implementation av uppgiften, 
        så började jag med att definiera de grundläggande klasserna och deras ansvarsområden. 
        Jag fokuserade på att skapa en tydlig och enkel struktur där varje klass hade ett specifikt ansvar, 
        vilket gjorde koden mer lättförståelig och underhållbar. 
        Jag är delvis nöjd med resultatet, 
        då spelet fungerar som förväntat och koden är hyfsat strukturerad. Men jag ser också förbättringspotential, 
        särskilt när det gäller att refaktorera vissa delar för att göra dem mer modulära och återanvändbara. 
        Några av klasserna kan vara för tätt sammanlänkade, och det skulle vara bra att separera vissa ansvarsområden ytterligare. 
        Som helhet är applikationen funktionell, 
        men med lite mer tid och reflektion skulle jag kunna göra den mer elegant och lätt att utöka.
    </p>

    <p>
        Att arbeta i ett ramverk som Symfony har varit både utmanande och lärorikt. 
        Symfony erbjuder en kraftfull struktur och många verktyg som hjälper till att bygga robusta och skalbara applikationer. 
        Samtidigt har det krävt en hel del anpassning för att förstå och använda alla funktioner effektivt. 
        Jag har dock börjat känna mig mer bekväm med ramverket, 
        och jag ser verkligen potentialen i att använda det för att utveckla större och mer komplexa applikationer. 
        Det har också varit nyttigt att lära sig följa de bästa praxis som Symfony uppmuntrar, 
        såsom att använda dependency injection och följa MVC-mönstret strikt.
    </p>

    <p>
        Min \"Today I Learned\" (TIL) för detta kursmoment handlar om vikten av att planera innan man börjar koda. 
        Att lägga tid på att modellera och planera applikationen i förväg, 
        genom flödesdiagram och pseudokod, kan spara mycket tid och frustration senare i utvecklingsprocessen. 
        Det är något jag definitivt kommer att fortsätta göra i framtida projekt.
    </p>

    <h3 id=\"kmom04\"> Kursmoment 4: Enhtetstester </h3>
    <p>
        Att skriva kod som testar annan kod med PHPUnit har varit en intressant och lärorik upplevelse. 
        Jag uppskattar hur PHPUnit erbjuder ett kraftfullt verktyg för att säkerställa att min kod fungerar som förväntat, och det ger mig också förtroende att mina förändringar inte bryter befintlig funktionalitet. 
        Rent allmänt tycker jag att PHPUnit är ett välstrukturerat och användarvänligt verktyg, även om det kan vara lite överväldigande att sätta upp och använda alla funktioner fullt ut i början. 
        Men när man väl kommer in i det, blir det en ovärderlig del av utvecklingsprocessen.
    </p>

    <p>
        När det gäller kodtäckningen lyckades jag nå över 90% täckning för min kod, vilket jag är ganska nöjd med. 
        Jag fokuserade på att täcka alla kritiska delar av koden, inklusive olika grenar i logiken och möjliga undantag. 
        Det fanns dock några delar av koden som var svårare att testa, särskilt de som var mer beroende av externa faktorer eller komplexa beroenden.
    </p>

    <p>
        Jag upplever att min egen kod är ganska testbar, men det finns definitivt utrymme för förbättringar. 
        Vissa delar av koden var svårare att testa, och i vissa fall handlade det om att logiken var för tätt sammanlänkad eller att beroenden inte var tillräckligt tydliga. 
        För att förbättra testbarheten valde jag att refaktorera delar av koden, särskilt genom att bryta ut vissa funktioner och göra dem mer modulära. 
        Detta gjorde det lättare att isolera och testa specifika delar av koden utan att behöva hantera hela systemet.
    </p>

    <p>
        När jag tänker på testbar kod och dess relation till \"snygg och ren kod\", inser jag att det finns ett starkt samband. 
        Testbar kod är ofta också kod som är välstrukturerad, modulär och lätt att förstå. 
        Om koden är svår att testa kan det vara ett tecken på att den är för komplex eller för sammankopplad, vilket ofta också betyder att den inte är så ren som den skulle kunna vara. 
        Att skriva testbar kod tvingar mig att tänka på design och struktur på ett sätt som gör koden både bättre och lättare att underhålla.
    </p>

    <p>
        Min \"Today I Learned\" (TIL) för detta kursmoment handlar om vikten av att tänka på testbarhet från början av utvecklingsprocessen. 
        Genom att designa kod med testbarhet i åtanke blir det mycket enklare att skriva enhetstester, och det leder ofta till bättre kodstruktur och design i allmänhet. 
        Detta är något jag kommer att bära med mig och tillämpa i framtida projekt.
    </p>




    
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
        return "report.html.twig";
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

{% block title %}Report{% endblock %}

{% block body %}
    <h1>Report</h1>
    <h3 id=\"kmom01\">Kursmoment 1: Installation av Symfony och Skapande av Sidor</h3>
    <p>I det första kursmomentet, fokuserade jag på att installera Symfony och skapa grundläggande webbsidor.</p>
    <p>Genom att använda Symfony's routing och controller-funktioner tillsammans med Twig som templatemotor, skapade jag de efterfrågade sidorna enligt projektets krav.</p>
    <p>Detta inkluderade att definiera olika routar för att hantera olika sidor, samt att skapa en användarvänlig struktur för webbsidorna med hjälp av Twig-mallar.</p>
    <p>För att utforska Symfony's funktionalitet och möjligheter, testade jag också olika komponenter och funktioner som erbjuds av ramverket.</p>
    <p>Den tekniska dokumentationen och gemenskapens stöd hjälpte mig att förstå och implementera de grundläggande koncepten i Symfony.</p></br>


    <h3 id=\"kmom02\">Kursmoment 2: Objektorientering</h3>
    <p>I PHP är objektorientering en central del av programmeringsparadigmet,
    och det inkluderar flera viktiga konstruktioner som arv,
    komposition, interface och trait.
    Arv innebär att en klass kan ärva egenskaper och metoder från en annan klass,
    vilket främjar återanvändning av kod. I PHP används arv genom att en klass deklareras med ordet <code>extends</code> följt av namnet på den klass som ska ärvas. 
    Komposition, å andra sidan, handlar om att bygga komplexa objekt genom att kombinera mindre, 
    självständiga objekt, vilket i PHP ofta innebär att man inkluderar objekt som medlemsvariabler inom andra objekt.</p>

    <p>Interface är en annan viktig konstruktion, 
    som i PHP används för att definiera en uppsättning metoder som en klass måste implementera. 
    Detta främjar enhetlighet och möjliggör polymorfism. 
    Ett interface deklareras med nyckelordet <code>interface</code> och implementeras av klasser med nyckelordet <code>implements</code>. 
    Trait är en särskild konstruktion i PHP som gör det möjligt att återanvända metoder över flera klasser utan att använda arv. 
    Traits skapas med nyckelordet <code>trait</code> och inkluderas i en klass med <code>use</code>.</p>

    <p>När det gäller min implementation från uppgiften, 
    valde jag att strukturera koden enligt de bästa objektorienterade principerna. 
    Jag använde arv för att skapa en basmodell som andra modeller kunde utgå från, 
    och jag använde komposition för att hantera beroenden mellan olika objekt. 
    Jag är ganska nöjd med lösningen, 
    men jag ser en förbättringspotential när det gäller att minska komplexiteten i vissa av klasserna och göra koden mer modulär. 
    Detta skulle kunna uppnås genom att använda fler interfaces och traits för att dela upp funktionaliteten.</p>

    <p>Att arbeta med Symfony och följa MVC-mönstret har varit en intressant och lärorik upplevelse. 
    Jag uppskattar tydligheten och strukturen som MVC medför, men jag har också stött på utmaningar, 
    särskilt när det gäller att hålla kontrollern smal och enkel. 
    Det krävs disciplin och noggrann planering för att undvika att kontrollern blir överbelastad med logik som egentligen hör hemma i modeller eller services.</p>

    <p>Min \"Today I Learned\" (TIL) för detta kursmoment är vikten av att använda designmönster som factory och dependency injection i Symfony. 
    Dessa mönster hjälper inte bara till att hålla koden ren och underhållbar, 
    utan de underlättar också testning och gör det lättare att utöka applikationen med nya funktioner i framtiden.</p>

    <h3 id=\"kmom03\">Kursmoment 3: Applikationen</h3>
    <p> Att modellera ett kortspel med hjälp av flödesdiagram och pseudokod var en intressant och givande process. 
        Det gav mig en tydlig överblick över hur spelets logik skulle fungera och hjälpte mig att identifiera viktiga steg i utvecklingen innan jag ens började skriva kod. 
        Genom att bryta ner spelet i mindre delar och visualisera flödet kunde jag enklare förstå de olika komponenterna och hur de interagerar med varandra. 
        Jag tror att denna metod verkligen stödjer min problemlösning och gör det lättare att strukturera koden på ett logiskt och effektivt sätt. 
        Det gav mig också en bra grund att stå på när jag skulle börja implementera spelet i kod.
    </p>

    <p>
        När det gäller min implementation av uppgiften, 
        så började jag med att definiera de grundläggande klasserna och deras ansvarsområden. 
        Jag fokuserade på att skapa en tydlig och enkel struktur där varje klass hade ett specifikt ansvar, 
        vilket gjorde koden mer lättförståelig och underhållbar. 
        Jag är delvis nöjd med resultatet, 
        då spelet fungerar som förväntat och koden är hyfsat strukturerad. Men jag ser också förbättringspotential, 
        särskilt när det gäller att refaktorera vissa delar för att göra dem mer modulära och återanvändbara. 
        Några av klasserna kan vara för tätt sammanlänkade, och det skulle vara bra att separera vissa ansvarsområden ytterligare. 
        Som helhet är applikationen funktionell, 
        men med lite mer tid och reflektion skulle jag kunna göra den mer elegant och lätt att utöka.
    </p>

    <p>
        Att arbeta i ett ramverk som Symfony har varit både utmanande och lärorikt. 
        Symfony erbjuder en kraftfull struktur och många verktyg som hjälper till att bygga robusta och skalbara applikationer. 
        Samtidigt har det krävt en hel del anpassning för att förstå och använda alla funktioner effektivt. 
        Jag har dock börjat känna mig mer bekväm med ramverket, 
        och jag ser verkligen potentialen i att använda det för att utveckla större och mer komplexa applikationer. 
        Det har också varit nyttigt att lära sig följa de bästa praxis som Symfony uppmuntrar, 
        såsom att använda dependency injection och följa MVC-mönstret strikt.
    </p>

    <p>
        Min \"Today I Learned\" (TIL) för detta kursmoment handlar om vikten av att planera innan man börjar koda. 
        Att lägga tid på att modellera och planera applikationen i förväg, 
        genom flödesdiagram och pseudokod, kan spara mycket tid och frustration senare i utvecklingsprocessen. 
        Det är något jag definitivt kommer att fortsätta göra i framtida projekt.
    </p>

    <h3 id=\"kmom04\"> Kursmoment 4: Enhtetstester </h3>
    <p>
        Att skriva kod som testar annan kod med PHPUnit har varit en intressant och lärorik upplevelse. 
        Jag uppskattar hur PHPUnit erbjuder ett kraftfullt verktyg för att säkerställa att min kod fungerar som förväntat, och det ger mig också förtroende att mina förändringar inte bryter befintlig funktionalitet. 
        Rent allmänt tycker jag att PHPUnit är ett välstrukturerat och användarvänligt verktyg, även om det kan vara lite överväldigande att sätta upp och använda alla funktioner fullt ut i början. 
        Men när man väl kommer in i det, blir det en ovärderlig del av utvecklingsprocessen.
    </p>

    <p>
        När det gäller kodtäckningen lyckades jag nå över 90% täckning för min kod, vilket jag är ganska nöjd med. 
        Jag fokuserade på att täcka alla kritiska delar av koden, inklusive olika grenar i logiken och möjliga undantag. 
        Det fanns dock några delar av koden som var svårare att testa, särskilt de som var mer beroende av externa faktorer eller komplexa beroenden.
    </p>

    <p>
        Jag upplever att min egen kod är ganska testbar, men det finns definitivt utrymme för förbättringar. 
        Vissa delar av koden var svårare att testa, och i vissa fall handlade det om att logiken var för tätt sammanlänkad eller att beroenden inte var tillräckligt tydliga. 
        För att förbättra testbarheten valde jag att refaktorera delar av koden, särskilt genom att bryta ut vissa funktioner och göra dem mer modulära. 
        Detta gjorde det lättare att isolera och testa specifika delar av koden utan att behöva hantera hela systemet.
    </p>

    <p>
        När jag tänker på testbar kod och dess relation till \"snygg och ren kod\", inser jag att det finns ett starkt samband. 
        Testbar kod är ofta också kod som är välstrukturerad, modulär och lätt att förstå. 
        Om koden är svår att testa kan det vara ett tecken på att den är för komplex eller för sammankopplad, vilket ofta också betyder att den inte är så ren som den skulle kunna vara. 
        Att skriva testbar kod tvingar mig att tänka på design och struktur på ett sätt som gör koden både bättre och lättare att underhålla.
    </p>

    <p>
        Min \"Today I Learned\" (TIL) för detta kursmoment handlar om vikten av att tänka på testbarhet från början av utvecklingsprocessen. 
        Genom att designa kod med testbarhet i åtanke blir det mycket enklare att skriva enhetstester, och det leder ofta till bättre kodstruktur och design i allmänhet. 
        Detta är något jag kommer att bära med mig och tillämpa i framtida projekt.
    </p>




    
{% endblock %}
", "report.html.twig", "/home/alexander/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
