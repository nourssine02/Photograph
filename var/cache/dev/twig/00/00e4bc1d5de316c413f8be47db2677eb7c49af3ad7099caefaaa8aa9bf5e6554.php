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

/* panier/index.html.twig */
class __TwigTemplate_3d73ce21b000cfd7e8d6506c080f9e077b32329ff6b0ee199a9259fa80858fce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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
        echo "

\t<!-- Shoping Cart -->
\t<form class=\"bg0 p-t-75 p-b-85\">
\t\t<div class=\"container\">


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-xl-7 m-lr-auto m-b-50\">

\t\t\t\t\t<div class=\"m-l-25 m-r--38 m-lr-0-xl\">
\t\t\t\t\t\t<div class=\"wrap-table-shopping-cart\">
\t\t\t\t\t\t\t<table class=\"table-shopping-cart\">
\t\t\t\t\t\t\t\t<tr class=\"table_head\">
\t\t\t\t\t\t\t\t\t<th class=\"column-1\">Product</th>
\t\t\t\t\t\t\t\t\t<th class=\"2\"></th>
\t\t\t\t\t\t\t\t\t<th class=\"-3\">Price</th>
\t\t\t\t\t\t\t\t\t<th class=\"4\">Quantity</th>
\t\t\t\t\t\t\t\t\t<th class=\"5\">Your Demande</th>

\t\t\t\t\t\t\t\t\t<th class=\"6\">Total</th>
\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, $context["item"], "userId", [], "any", false, false, false, 31)))) {
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t<tr class=\"table_row\">


\t\t\t\t\t\t\t\t\t\t\t<td class=\"column-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"how-itemcart1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"uploads/images/products/";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageArticle", [], "any", false, false, false, 37), "html", null, true);
                echo "\" alt=\"IMG\">

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "articleName", [], "any", false, false, false, 42), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">Delete</a>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prixArticle", [], "any", false, false, false, 50), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\tDT</td>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 54), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "demande", [], "any", false, false, false, 57), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t\t<td class=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 63
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "prixArticle", [], "any", false, false, false, 63) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 63)), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\tDT</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50\">
\t\t\t\t<div class=\"bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm\">
\t\t\t\t\t<h4 class=\"mtext-109 cl2 p-b-30\">
\t\t\t\t\t\tCart Totals
\t\t\t\t\t</h4>

\t\t\t\t\t<div class=\"flex-w flex-t bor12 p-b-13\">
\t\t\t\t\t\t<div class=\"size-208\">
\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\tSubtotal:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"size-209\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95), twig_get_attribute($this->env, $this->source, $context["item"], "userId", [], "any", false, false, false, 95)))) {
                // line 96
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 97
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 97, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["item"], "prixArticle", [], "any", false, false, false, 97) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 97)));
                // line 98
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
\t\t\t\t\t\t\t\t";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "DT
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-w flex-t bor12 p-t-15 p-b-30\">
\t\t\t\t\t\t<div class=\"size-208 w-full-ssm\">
\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\tShipping:
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"size-209\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t8DT
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-w flex-t p-t-27 p-b-33\">
\t\t\t\t\t\t<div class=\"size-208\">
\t\t\t\t\t\t\t<span class=\"mtext-101 cl2\">
\t\t\t\t\t\t\t\tTotal:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"size-209 p-t-1\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t";
        // line 131
        echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 131, $this->source); })()) + 10), "html", null, true);
        echo "DT
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_check");
        echo "\" class=\"flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer\">

\t\t\t\t\t\tProceed to Checkout
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

</form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 136,  269 => 131,  236 => 101,  233 => 100,  227 => 99,  224 => 98,  222 => 97,  219 => 96,  216 => 95,  212 => 94,  185 => 69,  179 => 68,  171 => 63,  162 => 57,  156 => 54,  149 => 50,  140 => 44,  135 => 42,  127 => 37,  120 => 32,  117 => 31,  113 => 30,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}


\t<!-- Shoping Cart -->
\t<form class=\"bg0 p-t-75 p-b-85\">
\t\t<div class=\"container\">


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-xl-7 m-lr-auto m-b-50\">

\t\t\t\t\t<div class=\"m-l-25 m-r--38 m-lr-0-xl\">
\t\t\t\t\t\t<div class=\"wrap-table-shopping-cart\">
\t\t\t\t\t\t\t<table class=\"table-shopping-cart\">
\t\t\t\t\t\t\t\t<tr class=\"table_head\">
\t\t\t\t\t\t\t\t\t<th class=\"column-1\">Product</th>
\t\t\t\t\t\t\t\t\t<th class=\"2\"></th>
\t\t\t\t\t\t\t\t\t<th class=\"-3\">Price</th>
\t\t\t\t\t\t\t\t\t<th class=\"4\">Quantity</th>
\t\t\t\t\t\t\t\t\t<th class=\"5\">Your Demande</th>

\t\t\t\t\t\t\t\t\t<th class=\"6\">Total</th>
\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t{% for item in panier %}
\t\t\t\t\t\t\t\t\t{% if app.user.id == item.userId %}
\t\t\t\t\t\t\t\t\t\t<tr class=\"table_row\">


\t\t\t\t\t\t\t\t\t\t\t<td class=\"column-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"how-itemcart1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"uploads/images/products/{{item.imageArticle}}\" alt=\"IMG\">

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.articleName }}
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('panier_remove' , {'id': item.id})}}\">Delete</a>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.prixArticle }}
\t\t\t\t\t\t\t\t\t\t\t\tDT</td>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.quantite }}
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.demande }}

\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t\t<td class=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.prixArticle *  item.quantite }}
\t\t\t\t\t\t\t\t\t\t\t\tDT</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50\">
\t\t\t\t<div class=\"bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm\">
\t\t\t\t\t<h4 class=\"mtext-109 cl2 p-b-30\">
\t\t\t\t\t\tCart Totals
\t\t\t\t\t</h4>

\t\t\t\t\t<div class=\"flex-w flex-t bor12 p-b-13\">
\t\t\t\t\t\t<div class=\"size-208\">
\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\tSubtotal:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"size-209\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t{% for item in panier %}
\t\t\t\t\t\t\t\t\t{% if app.user.id == item.userId %}

\t\t\t\t\t\t\t\t\t\t{% set total = total + (item.prixArticle * item.quantite) %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t{{total}}DT
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-w flex-t bor12 p-t-15 p-b-30\">
\t\t\t\t\t\t<div class=\"size-208 w-full-ssm\">
\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\tShipping:
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"size-209\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t8DT
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-w flex-t p-t-27 p-b-33\">
\t\t\t\t\t\t<div class=\"size-208\">
\t\t\t\t\t\t\t<span class=\"mtext-101 cl2\">
\t\t\t\t\t\t\t\tTotal:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"size-209 p-t-1\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t{{ total + 10}}DT
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"{{path('panier_check')}}\" class=\"flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer\">

\t\t\t\t\t\tProceed to Checkout
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

</form>{% endblock %}
", "panier/index.html.twig", "/home/hp/Symfony/myProject/templates/panier/index.html.twig");
    }
}
