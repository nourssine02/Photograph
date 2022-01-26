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

/* website/index.html.twig */
class __TwigTemplate_beef86b4f8119bc03024f4ad8a36b71786f787f5c758dea6edda177c431be966 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "website/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "website/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "website/index.html.twig", 1);
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
\t<!-- Slider -->
\t<section class=\"section-slide\">
\t\t<div class=\"wrap-slick1\">
\t\t\t<div class=\"slick1\">
\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(uploads/images/products/banner7.jpg);\">

\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"fadeInDown\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tWomen Collection 2021
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"fadeInUp\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tNEW SEASON
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 26
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 27
            echo "\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("securite_login");
            echo "\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 39
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(uploads/images/products/banner10.jpg);\">

\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rollIn\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tNew-Season
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"lightSpeedIn\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tNew arrivals
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 60
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 61
            echo "\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("securite_login");
            echo "\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(uploads/images/products/banner2.jpg);\">

\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateInDownLeft\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tMen Collection 2022
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateInUpRight\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tNEW SEASON
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 93
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 94
            echo "\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 100
            echo "\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("securite_login");
            echo "\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Cart -->
\t";
        // line 114
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114)) {
            // line 115
            echo "\t\t<div class=\"wrap-header-cart js-panel-cart\">
\t\t\t<div class=\"s-full js-hide-cart\"></div>

\t\t\t<div class=\"header-cart flex-col-l p-l-65 p-r-25\">

\t\t\t\t<div class=\"header-cart-title flex-w flex-sb-m p-b-8\">
\t\t\t\t\t<span class=\"mtext-103 cl2\">
\t\t\t\t\t\tYour Cart
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-close\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"header-cart-content flex-w js-pscroll\">

\t\t\t\t\t<ul class=\"header-cart-wrapitem w-full\">
\t\t\t\t\t\t";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 134, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 135
                echo "\t\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), twig_get_attribute($this->env, $this->source, $context["item"], "userId", [], "any", false, false, false, 135)))) {
                    // line 136
                    echo "
\t\t\t\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"uploads/images/products/";
                    // line 139
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageArticle", [], "any", false, false, false, 139), "html", null, true);
                    echo "\" alt=\"IMG\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 143)]), "html", null, true);
                    echo "\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 144
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "articleName", [], "any", false, false, false, 144), "html", null, true);
                    echo "

\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 150), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\tX";
                    // line 151
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prixArticle", [], "any", false, false, false, 151), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\$
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t<div class=\"header-cart-total w-full p-tb-40\">
\t\t\t\t\t\t\t";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 163
                echo "\t\t\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "id", [], "any", false, false, false, 163), twig_get_attribute($this->env, $this->source, $context["item"], "userId", [], "any", false, false, false, 163)))) {
                    // line 164
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 165
                    $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 165, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["item"], "prixArticle", [], "any", false, false, false, 165) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 165)));
                    // line 166
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "\t\t\t\t\t\t\tTotal: \$";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 168, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-cart-buttons flex-w w-full\">
\t\t\t\t\t\t\t<a href=\"";
            // line 172
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
            echo "\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10\">
\t\t\t\t\t\t\t\tView Cart
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"";
            // line 176
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_check");
            echo "\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10\">

\t\t\t\t\t\t\t\tCheck Out
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>


\t\t\t</div>

\t\t</div>


\t";
        }
        // line 192
        echo "

\t<!--Fin cart -->
\t<!-- Banner -->
\t<div class=\"sec-banner bg0 p-t-80 p-b-50\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"images/banner-01.jpg\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tWomen
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\tSpring 2022
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"images/banner-02.jpg\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tMen
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\tSpring 2022
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"images/banner-03.jpg\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"";
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tAccessories
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\tNew Trend
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- Product -->
\t<section class=\"bg0 p-t-23 p-b-140\">
\t\t<div class=\"container\">
\t\t\t<div class=\"p-b-10\">
\t\t\t\t<h3 class=\"ltext-103 cl5\">
\t\t\t\t\tProduct Overview
\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<div class=\"flex-w flex-sb-m p-b-52\">
\t\t\t\t<div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\">
\t\t\t\t\t\tAll Products
\t\t\t\t\t</button>
\t\t\t\t\t";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 295, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 296
            echo "
\t\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 297), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 298), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "
\t\t\t\t</div>


\t\t\t\t<!-- Search product -->
\t\t\t\t";
        // line 306
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), 'form');
        echo "
\t\t\t\t</div>


\t\t\t\t<div class=\"row isotope-grid\">
\t\t\t\t\t";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 311, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 312
            echo "\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 313), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<!-- Block2 -->

\t\t\t\t\t\t\t<div class=\"block2\">

\t\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0 \">
\t\t\t\t\t\t\t\t\t<img src=\" uploads/images/products/";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 319), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 319), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 321)]), "html", null, true);
            echo "\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 \">
\t\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14 \">
\t\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 328)]), "html", null, true);
            echo "\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 329), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\t\$
\t\t\t\t\t\t\t\t\t\t\t";
            // line 334
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 334), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"js-favori\" href=\"";
            // line 340
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_favoris", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 340)]), "html", null, true);
            echo "\">


\t\t\t\t\t\t\t\t\t\t\t";
            // line 343
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "user", [], "any", false, false, false, 343) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "user", [], "any", false, false, false, 343)], "method", false, false, false, 343))) {
                // line 344
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"js-heart fas fa-heart\"></i>

\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 347
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"js-heart far fa-heart\"></i>

\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 350
            echo "
\t\t\t\t\t\t\t\t\t\t\t<span class=\"js-favoris\">";
            // line 351
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "favoris", [], "any", false, false, false, 351)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "
\t\t\t\t</div>


\t\t\t\t<!-- Load more -->
\t\t\t\t<div class=\"flex-c-m flex-w w-full p-t-45\">
\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\tLoad More
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 380
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 381
        echo "\t\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t\t<script>
\t\t\tfunction onClickBtnFavoris(event) {
event.preventDefault();

const url = this.href;
const spanCount = this.querySelector('span.js-favoris');
const icone = this.querySelector('i.js-heart');


axios.get(url).then(function (response) {
const favoriss = response.data.favoris;
spanCount.textContent = favoriss;


if (icone.classList.contains('fas')) {

icone.classList.replace('fas', 'far');
} else {
icone.classList.replace('far', 'fas');
}


}).catch(function (error) {
if (error.response.status === 403) {
window.alert(\"You should connect first !!\");
}
});

}
document.querySelectorAll('a.js-favori').forEach(function (link) {


link.addEventListener('click', onClickBtnFavoris);
})
\t\t</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "website/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 381,  640 => 380,  616 => 365,  596 => 351,  593 => 350,  588 => 347,  583 => 344,  581 => 343,  575 => 340,  566 => 334,  558 => 329,  554 => 328,  544 => 321,  537 => 319,  528 => 313,  525 => 312,  521 => 311,  513 => 306,  506 => 301,  497 => 298,  493 => 297,  490 => 296,  486 => 295,  445 => 257,  416 => 231,  387 => 205,  372 => 192,  353 => 176,  346 => 172,  338 => 168,  332 => 167,  329 => 166,  327 => 165,  324 => 164,  321 => 163,  317 => 162,  311 => 158,  305 => 157,  296 => 151,  292 => 150,  283 => 144,  279 => 143,  272 => 139,  267 => 136,  264 => 135,  260 => 134,  239 => 115,  237 => 114,  227 => 106,  219 => 101,  216 => 100,  208 => 95,  205 => 94,  203 => 93,  181 => 73,  173 => 68,  170 => 67,  162 => 62,  159 => 61,  157 => 60,  134 => 39,  126 => 34,  123 => 33,  115 => 28,  112 => 27,  110 => 26,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

\t<!-- Slider -->
\t<section class=\"section-slide\">
\t\t<div class=\"wrap-slick1\">
\t\t\t<div class=\"slick1\">
\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(uploads/images/products/banner7.jpg);\">

\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"fadeInDown\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tWomen Collection 2021
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"fadeInUp\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tNEW SEASON
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if  is_granted('ROLE_USER') and  is_granted('ROLE_ADMIN')%}
\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop') }}\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('securite_login') }}\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(uploads/images/products/banner10.jpg);\">

\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rollIn\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tNew-Season
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"lightSpeedIn\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tNew arrivals
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% if  is_granted('ROLE_USER') and  is_granted('ROLE_ADMIN')%}
\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop') }}\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('securite_login') }}\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(uploads/images/products/banner2.jpg);\">

\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateInDownLeft\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tMen Collection 2022
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateInUpRight\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tNEW SEASON
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% if  is_granted('ROLE_USER') and  is_granted('ROLE_ADMIN')%}
\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop') }}\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('securite_login') }}\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Cart -->
\t{% if app.user %}
\t\t<div class=\"wrap-header-cart js-panel-cart\">
\t\t\t<div class=\"s-full js-hide-cart\"></div>

\t\t\t<div class=\"header-cart flex-col-l p-l-65 p-r-25\">

\t\t\t\t<div class=\"header-cart-title flex-w flex-sb-m p-b-8\">
\t\t\t\t\t<span class=\"mtext-103 cl2\">
\t\t\t\t\t\tYour Cart
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-close\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"header-cart-content flex-w js-pscroll\">

\t\t\t\t\t<ul class=\"header-cart-wrapitem w-full\">
\t\t\t\t\t\t{% for item in panier %}
\t\t\t\t\t\t\t{% if app.user.id == item.userId %}

\t\t\t\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"uploads/images/products/{{item.imageArticle}}\" alt=\"IMG\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop_detail',{'id': item.id})}}\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\t{{ item.articleName }}

\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">

\t\t\t\t\t\t\t\t\t\t\t{{item.quantite }}
\t\t\t\t\t\t\t\t\t\t\tX{{ item.prixArticle}}
\t\t\t\t\t\t\t\t\t\t\t\$
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t<div class=\"header-cart-total w-full p-tb-40\">
\t\t\t\t\t\t\t{% for item in panier %}
\t\t\t\t\t\t\t\t{% if app.user.id == item.userId %}

\t\t\t\t\t\t\t\t\t{% set total = total + (item.prixArticle * item.quantite) %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\tTotal: \${{total }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-cart-buttons flex-w w-full\">
\t\t\t\t\t\t\t<a href=\"{{ path('panier_index')}}\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10\">
\t\t\t\t\t\t\t\tView Cart
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"{{path('panier_check')}}\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10\">

\t\t\t\t\t\t\t\tCheck Out
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>


\t\t\t</div>

\t\t</div>


\t{% endif %}


\t<!--Fin cart -->
\t<!-- Banner -->
\t<div class=\"sec-banner bg0 p-t-80 p-b-50\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"images/banner-01.jpg\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"{{ path('shop') }}\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tWomen
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\tSpring 2022
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"images/banner-02.jpg\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"{{ path('shop') }}\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tMen
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\tSpring 2022
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"images/banner-03.jpg\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"{{ path('shop') }}\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tAccessories
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\tNew Trend
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- Product -->
\t<section class=\"bg0 p-t-23 p-b-140\">
\t\t<div class=\"container\">
\t\t\t<div class=\"p-b-10\">
\t\t\t\t<h3 class=\"ltext-103 cl5\">
\t\t\t\t\tProduct Overview
\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<div class=\"flex-w flex-sb-m p-b-52\">
\t\t\t\t<div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\">
\t\t\t\t\t\tAll Products
\t\t\t\t\t</button>
\t\t\t\t\t{% for categorie in categories %}

\t\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".{{categorie.name}}\">
\t\t\t\t\t\t\t{{categorie.name}}
\t\t\t\t\t\t</button>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>


\t\t\t\t<!-- Search product -->
\t\t\t\t{{form(form) }}
\t\t\t\t</div>


\t\t\t\t<div class=\"row isotope-grid\">
\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{article.categorie}} \">
\t\t\t\t\t\t\t<!-- Block2 -->

\t\t\t\t\t\t\t<div class=\"block2\">

\t\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0 \">
\t\t\t\t\t\t\t\t\t<img src=\" uploads/images/products/{{article.image}}\" alt=\"{{article.description}}\">

\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop_detail', {'id': article.id})}}\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 \">
\t\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14 \">
\t\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop_detail', {'id': article.id})}}\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\t\t{{article.name}}
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\t\$
\t\t\t\t\t\t\t\t\t\t\t{{article.prix}}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"js-favori\" href=\"{{path('shop_favoris' , {'id': article.id}) }}\">


\t\t\t\t\t\t\t\t\t\t\t{% if app.user and article.isLikedByUser(app.user) %}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"js-heart fas fa-heart\"></i>

\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"js-heart far fa-heart\"></i>

\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t<span class=\"js-favoris\">{{article.favoris | length}}</span>
\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>


\t\t\t\t<!-- Load more -->
\t\t\t\t<div class=\"flex-c-m flex-w w-full p-t-45\">
\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\tLoad More
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t{% endblock %}
\t{% block javascripts %}
\t\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t\t<script>
\t\t\tfunction onClickBtnFavoris(event) {
event.preventDefault();

const url = this.href;
const spanCount = this.querySelector('span.js-favoris');
const icone = this.querySelector('i.js-heart');


axios.get(url).then(function (response) {
const favoriss = response.data.favoris;
spanCount.textContent = favoriss;


if (icone.classList.contains('fas')) {

icone.classList.replace('fas', 'far');
} else {
icone.classList.replace('far', 'fas');
}


}).catch(function (error) {
if (error.response.status === 403) {
window.alert(\"You should connect first !!\");
}
});

}
document.querySelectorAll('a.js-favori').forEach(function (link) {


link.addEventListener('click', onClickBtnFavoris);
})
\t\t</script>
\t{% endblock %}
", "website/index.html.twig", "/home/hp/Symfony/E-Commerce/templates/website/index.html.twig");
    }
}
