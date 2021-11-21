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

/* home/index.html.twig */
class __TwigTemplate_2ef7985d69a8606c98f02b152bef509f4b429422f967694754c47c0b48a7ce20 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Crud Symfony - Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .btn-block {
            color: lightblue;
        }
    </style>

    <header>
        <div class=\"container bg-dark\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-md-12\">
                    <br><br>
                    <br><br>
                    <h1 class=\"text-center\" style=\"color: lightblue\">CRUD Symfony</h1>
                    </br>
                    </hr>
                </div>
            </div>
            <br></br>
        </div>    
    </header>
    
    <div class=\"container\" style=\"background-color: lightgrey;\">
        <br>
        <div class=\"row justify-content-center align-items-center\">
            <div class=\"col-md-12 text-center\">
                <h3>Bem-vindo! Escolha um dos CRUDs abaixo para interação:</h3>
            </div>
        </div>
        </br>
        </hr>
        <div class=\"row justify-content-center align-items-center\">
            <div class=\"col-md-12\" style=\"height: 10vh;\">
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente_index");
        echo "\" class=\"btn btn-dark btn-lg btn-block\">Clientes</a>
            </div>
            <div class=\"col-md-12\" style=\"height: 10vh;\">
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("produto_index");
        echo "\" class=\"btn btn-dark btn-lg btn-block\">Produtos</a>
            </div>
            <div class=\"col-md-12\" style=\"height: 10vh;\">
                <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vendedor_index");
        echo "\" class=\"btn btn-dark btn-lg btn-block\">Vendedores</a>
            </div>
        </div>
        </hr>
        <br>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  128 => 41,  122 => 38,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Crud Symfony - Home{% endblock %}

{% block body %}
    <style>
        .btn-block {
            color: lightblue;
        }
    </style>

    <header>
        <div class=\"container bg-dark\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-md-12\">
                    <br><br>
                    <br><br>
                    <h1 class=\"text-center\" style=\"color: lightblue\">CRUD Symfony</h1>
                    </br>
                    </hr>
                </div>
            </div>
            <br></br>
        </div>    
    </header>
    
    <div class=\"container\" style=\"background-color: lightgrey;\">
        <br>
        <div class=\"row justify-content-center align-items-center\">
            <div class=\"col-md-12 text-center\">
                <h3>Bem-vindo! Escolha um dos CRUDs abaixo para interação:</h3>
            </div>
        </div>
        </br>
        </hr>
        <div class=\"row justify-content-center align-items-center\">
            <div class=\"col-md-12\" style=\"height: 10vh;\">
                <a href=\"{{ url('cliente_index') }}\" class=\"btn btn-dark btn-lg btn-block\">Clientes</a>
            </div>
            <div class=\"col-md-12\" style=\"height: 10vh;\">
                <a href=\"{{ url('produto_index') }}\" class=\"btn btn-dark btn-lg btn-block\">Produtos</a>
            </div>
            <div class=\"col-md-12\" style=\"height: 10vh;\">
                <a href=\"{{ url('vendedor_index') }}\" class=\"btn btn-dark btn-lg btn-block\">Vendedores</a>
            </div>
        </div>
        </hr>
        <br>
    </div>
{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\crudSymfony\\templates\\home\\index.html.twig");
    }
}
