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

/* cliente/index.html.twig */
class __TwigTemplate_18e4f255fcfbc268d3f2c5939afa76a3e8708b84653e0a76771034571a6a400e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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

        echo "CRUD Symfony - Clientes";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <div class=\"alert alert-success mt-4 mb-b\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header bg-dark text-white\">
                        <div class=\"d-flex justify-content-between w-100\">
                            <h5>Listagem de Clientes</h5>   <!-- criar uma tela -->
                            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente_create");
        echo "\" class=\"btn-primary btn-sm\"> <!-- caminho do arquivo para esta tela, rota em web.php -> CargoController.php -> create; Laravel -->
                                <i class=\"fa fa-plus\"></i> Novo Cliente  <!-- criar um botão -->
                            </a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF/CNPJ</th>
                                    <th>Telefone</th>
                                    <th colspan=\"4\" class=\"text-center\">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista"]) || array_key_exists("lista", $context) ? $context["lista"] : (function () { throw new RuntimeError('Variable "lista" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clientes"]) {
            echo "<!-- vem da function index no Controller -->
                                <tr>
                                    <th scope=\"row\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clientes"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</th>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clientes"], "nome", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clientes"], "cpfCnpj", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clientes"], "telefone", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                                    <td class=\"text-center p-0 align-middle\" width=\"70\">
                                        <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["clientes"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Editar</a>
                                    </td>
                                    <td class=\"text-center p-0 align-middle\" width=\"70\">
                                        <a class=\"btn btn-danger btn-sm\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["clientes"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Excluir</a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clientes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center align-items-center\">
            <div class=\"container\">
                <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\" class=\"btn btn-outline-info btn-lg btn-block\">Voltar</a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 58,  174 => 49,  164 => 45,  158 => 42,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  134 => 35,  114 => 18,  105 => 11,  96 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CRUD Symfony - Clientes{% endblock %}

{% block body %}
    {% for message in app.flashes('notice') %}
        <div class=\"alert alert-success mt-4 mb-b\">
            {{ message }}
        </div>
    {% endfor %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header bg-dark text-white\">
                        <div class=\"d-flex justify-content-between w-100\">
                            <h5>Listagem de Clientes</h5>   <!-- criar uma tela -->
                            <a href=\"{{ url('cliente_create') }}\" class=\"btn-primary btn-sm\"> <!-- caminho do arquivo para esta tela, rota em web.php -> CargoController.php -> create; Laravel -->
                                <i class=\"fa fa-plus\"></i> Novo Cliente  <!-- criar um botão -->
                            </a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF/CNPJ</th>
                                    <th>Telefone</th>
                                    <th colspan=\"4\" class=\"text-center\">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for clientes in lista %}<!-- vem da function index no Controller -->
                                <tr>
                                    <th scope=\"row\">{{ clientes.id }}</th>
                                    <td>{{ clientes.nome }}</td>
                                    <td>{{ clientes.cpfCnpj }}</td>
                                    <td>{{ clientes.telefone }} </td>
                                    <td class=\"text-center p-0 align-middle\" width=\"70\">
                                        <a class=\"btn btn-primary btn-sm\" href=\"{{ path('cliente_edit', {'id': clientes.id }) }}\">Editar</a>
                                    </td>
                                    <td class=\"text-center p-0 align-middle\" width=\"70\">
                                        <a class=\"btn btn-danger btn-sm\" href=\"{{ path('cliente_delete', {'id':clientes.id }) }}\">Excluir</a>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center align-items-center\">
            <div class=\"container\">
                <a href=\"{{ url('home') }}\" class=\"btn btn-outline-info btn-lg btn-block\">Voltar</a>
            </div>
        </div>
    </div>
{% endblock %}
", "cliente/index.html.twig", "C:\\wamp64\\www\\crudSymfony\\templates\\cliente\\index.html.twig");
    }
}
