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

/* game/game_start.html.twig */
class __TwigTemplate_c5b5d4b9d4a6ab7fb6d200e9fcc384d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game_start.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game_start.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/game_start.html.twig", 1);
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

        yield "21 (Blackjack) Game";
        
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
        yield "    <div class=\"game-container\">
        <h1>21 (Blackjack) Game</h1>
            <div class=\"player-hand\">
                <h2>Player's Hand</h2>
                <ul>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["player_hand"]) || array_key_exists("player_hand", $context) ? $context["player_hand"] : (function () { throw new RuntimeError('Variable "player_hand" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 12
            yield "                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "suit", [], "any", false, false, false, 12), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 12), "html", null, true);
            yield "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "                </ul>
                <p>Player's Score: ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["player_score"]) || array_key_exists("player_score", $context) ? $context["player_score"] : (function () { throw new RuntimeError('Variable "player_score" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</p>
            </div>

            <div class=\"dealer-hand\">
                <h2>Dealer's Hand</h2>
                <ul>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dealer_hand"]) || array_key_exists("dealer_hand", $context) ? $context["dealer_hand"] : (function () { throw new RuntimeError('Variable "dealer_hand" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 22
            yield "                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "suit", [], "any", false, false, false, 22), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 22), "html", null, true);
            yield "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "                </ul>
                <p>Dealer's Score: ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dealer_score"]) || array_key_exists("dealer_score", $context) ? $context["dealer_score"] : (function () { throw new RuntimeError('Variable "dealer_score" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</p>
            </div>

            <div class=\"actions\">
                <h2>Actions</h2>
                <form action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_card");
        yield "\" method=\"post\">
                    <button type=\"submit\">Draw Card</button>
                </form>
                <form action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stand");
        yield "\" method=\"post\">
                    <button type=\"submit\">Stand</button>
                </form>
                ";
        // line 36
        if ((isset($context["game_result"]) || array_key_exists("game_result", $context) ? $context["game_result"] : (function () { throw new RuntimeError('Variable "game_result" does not exist.', 36, $this->source); })())) {
            // line 37
            yield "                    <h2>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["game_result"]) || array_key_exists("game_result", $context) ? $context["game_result"] : (function () { throw new RuntimeError('Variable "game_result" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "</h2>
                    <form action=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_game");
            yield "\" method=\"post\">
                        <button type=\"submit\">Start New Game</button>
                    </form>
                ";
        }
        // line 42
        yield "            </div>
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
        return "game/game_start.html.twig";
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
        return array (  176 => 42,  169 => 38,  164 => 37,  162 => 36,  156 => 33,  150 => 30,  142 => 25,  139 => 24,  128 => 22,  124 => 21,  115 => 15,  112 => 14,  101 => 12,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}21 (Blackjack) Game{% endblock %}

{% block body %}
    <div class=\"game-container\">
        <h1>21 (Blackjack) Game</h1>
            <div class=\"player-hand\">
                <h2>Player's Hand</h2>
                <ul>
                    {% for card in player_hand %}
                        <li>{{ card.suit }} {{ card.value }}</li>
                    {% endfor %}
                </ul>
                <p>Player's Score: {{ player_score }}</p>
            </div>

            <div class=\"dealer-hand\">
                <h2>Dealer's Hand</h2>
                <ul>
                    {% for card in dealer_hand %}
                        <li>{{ card.suit }} {{ card.value }}</li>
                    {% endfor %}
                </ul>
                <p>Dealer's Score: {{ dealer_score }}</p>
            </div>

            <div class=\"actions\">
                <h2>Actions</h2>
                <form action=\"{{ path('draw_card') }}\" method=\"post\">
                    <button type=\"submit\">Draw Card</button>
                </form>
                <form action=\"{{ path('stand') }}\" method=\"post\">
                    <button type=\"submit\">Stand</button>
                </form>
                {% if game_result %}
                    <h2>{{ game_result }}</h2>
                    <form action=\"{{ path('new_game') }}\" method=\"post\">
                        <button type=\"submit\">Start New Game</button>
                    </form>
                {% endif %}
            </div>
    </div>
{% endblock %}
", "game/game_start.html.twig", "/home/alexander/dbwebb-kurser/mvc/me/report/templates/game/game_start.html.twig");
    }
}
