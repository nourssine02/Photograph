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

/* base.html.twig */
class __TwigTemplate_3894c9befe28215cbfc8db6495d7fc3a14e7899d84c0c3ba6d08e60192a56c8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('javascripts', $context, $blocks);
        // line 5
        echo "

<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<title>COZA STORE</title>
\t\t<meta charset=\"UTF-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/favicon.png"), "html", null, true);
        echo "\"/>
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/linearicons-v1.0.0/icon-font.min.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/animate/animate.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/slick/slick.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/MagnificPopup/magnific-popup.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\">
\t\t<!--===============================================================================================-->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/util.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>


\t<!--===============================================================================================-->
\t</head>
\t<body
\t\tclass=\"animsition\">

\t\t<!-- Header -->
\t\t<header
\t\t\tclass=\"header-v4\">
\t\t\t<!-- Header desktop -->
\t\t\t<div
\t\t\t\tclass=\"container-menu-desktop\">
\t\t\t\t<!-- Topbar -->
\t\t\t\t<div class=\"top-bar\">
\t\t\t\t\t<div class=\"content-topbar flex-sb-m h-full container\">
\t\t\t\t\t\t<div class=\"left-top-bar\">
\t\t\t\t\t\t\tFree shipping for standard order over \$100
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"right-top-bar flex-w h-full\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\tHelp & FAQs
\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\tEN
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
        // line 92
        if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 93
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("securite_login");
            echo "\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        } else {
            // line 97
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("securite_logout");
            echo "\" class=\"flex-c-m trans-04 p-lr-25\">

\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "username", [], "any", false, false, false, 100), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 101
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\t\t\t\tadmin dashboard
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 106
            echo "
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
        }
        // line 110
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"wrap-menu-desktop how-shadow1\">
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"limiter-menu-desktop container\">
\t\t\t\t\t\t<!-- Logo desktop -->
\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/logo-01.png"), "html", null, true);
        echo "\" alt=\"IMG-LOGO\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t\t<div class=\"menu-desktop\">
\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t<li class=\"active-menu\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Home</a>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Icon header -->
\t\t\t\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m\">
\t\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#\" class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 \">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Header Mobile -->
\t\t\t<div
\t\t\t\tclass=\"wrap-header-mobile\">
\t\t\t\t<!-- Logo moblie -->
\t\t\t\t<div class=\"logo-mobile\">
\t\t\t\t\t<a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/logo-01.png"), "html", null, true);
        echo "\" alt=\"IMG-LOGO\"></a>
\t\t\t\t</div>

\t\t\t\t<!-- Icon header -->
\t\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m m-r-15\">
\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 js-show-cart\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"#\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Button show menu -->
\t\t\t\t<div class=\"btn-show-menu-mobile hamburger hamburger--squeeze\">
\t\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- Menu Mobile -->
\t\t\t<div class=\"menu-mobile\">
\t\t\t\t<ul class=\"topbar-mobile\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"left-top-bar\">
\t\t\t\t\t\t\tFree shipping for standard order over \$100
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"right-top-bar flex-w h-full\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\t\tHelp & FAQs
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\t\tEN
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"main-menu-m\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website");
        echo "\">Home</a>

\t\t\t\t\t\t<span class=\"arrow-main-menu-m\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 244
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 248
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<!-- Modal Search -->
\t\t\t<div class=\"modal-search-header flex-c-m trans-04 js-hide-modal-search\">
\t\t\t\t<div class=\"container-search-header\">
\t\t\t\t\t<button class=\"flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search\">
\t\t\t\t\t\t<img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-close2.png"), "html", null, true);
        echo "\" alt=\"CLOSE\">
\t\t\t\t\t</button>

\t\t\t\t\t<form class=\"wrap-search-header flex-w p-l-15\">
\t\t\t\t\t\t<button class=\"flex-c-m trans-04\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<input class=\"plh3\" type=\"text\" name=\"search\" placeholder=\"Search...\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>


\t\t";
        // line 275
        $this->displayBlock('body', $context, $blocks);
        // line 276
        echo "\t\t<!-- Footer -->
\t\t<footer class=\"bg3 p-t-75 p-b-32\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tWomen
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tMen
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tShoes
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tWatches
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\t\tHelp
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tTrack Order
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tReturns
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tShipping
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tFAQs
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\t\tGET IN TOUCH
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<p class=\"stext-107 cl7 size-201\">
\t\t\t\t\t\t\tAny questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"p-t-27\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-p\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\t\tNewsletter
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"wrap-input1 w-full p-b-4\">
\t\t\t\t\t\t\t\t<input class=\"input1 bg-none plh1 stext-107 cl7\" type=\"text\" name=\"email\" placeholder=\"email@example.com\">
\t\t\t\t\t\t\t\t<div class=\"focus-input1 trans-04\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"p-t-18\">
\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"p-t-40\">
\t\t\t\t\t<div class=\"flex-c-m flex-w p-b-18\">
\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-pay-01.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-pay-02.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-pay-03.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-pay-04.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-pay-05.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<p
\t\t\t\t\t\tclass=\"stext-107 cl6 txt-center\">
\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t\t</script>
\t\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\tby
\t\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>. 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDownloaded from
\t\t\t\t\t\t<a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>


\t\t<!-- Back to top -->
\t\t<div class=\"btn-back-to-top\" id=\"myBtn\">
\t\t\t<span class=\"symbol-btn-back-to-top\">
\t\t\t\t<i class=\"zmdi zmdi-chevron-up\"></i>
\t\t\t</span>
\t\t</div>


\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t\$(\".js-select2\").each(function () {
\$(this).select2({minimumResultsForSearch: 20, dropdownParent: \$(this).next('.dropDownSelect2')});
})
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick-custom.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/parallax100/parallax100.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t\$('.parallax100').parallax100();
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/MagnificPopup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t\$('.gallery-lb').each(function () { // the containers for all your galleries
\$(this).magnificPopup({
delegate: 'a', // the selector for gallery item
type: 'image',
gallery: {
enabled: true
},
mainClass: 'mfp-fade'
});
});
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t\$('.js-addwish-b2, .js-addwish-detail').on('click', function (e) {
e.preventDefault();
});

\$('.js-addwish-b2').each(function () {
var nameProduct = \$(this).parent().parent().find('.js-name-b2').html();
\$(this).on('click', function () {
swal(nameProduct, \"is added to wishlist !\", \"success\");

\$(this).addClass('js-addedwish-b2');
\$(this).off('click');
});
});

\$('.js-addwish-detail').each(function () {
var nameProduct = \$(this).parent().parent().parent().find('.js-name-detail').html();

\$(this).on('click', function () {
swal(nameProduct, \"is added to wishlist !\", \"success\");

\$(this).addClass('js-addedwish-detail');
\$(this).off('click');
});
});

/*---------------------------------------------*/

\$('.js-addcart-detail').each(function () {
var nameProduct = \$(this).parent().parent().parent().parent().find('.js-name-detail').html();
\$(this).on('click', function () {
swal(nameProduct, \"is added to cart !\", \"success\");
});
});
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t\$('.js-pscroll').each(function () {
\$(this).css('position', 'relative');
\$(this).css('overflow', 'hidden');
var ps = new PerfectScrollbar(this, {
wheelSpeed: 1,
scrollingThreshold: 1000,
wheelPropagation: false
});

\$(window).on('resize', function () {
ps.update();
})
});
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>


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

\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
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

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 275
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  862 => 275,  844 => 4,  826 => 3,  808 => 1,  755 => 535,  735 => 518,  695 => 481,  690 => 479,  673 => 465,  665 => 460,  660 => 458,  656 => 457,  651 => 455,  647 => 454,  637 => 447,  632 => 445,  628 => 444,  623 => 442,  618 => 440,  582 => 407,  575 => 403,  568 => 399,  561 => 395,  554 => 391,  437 => 276,  435 => 275,  418 => 261,  406 => 252,  399 => 248,  392 => 244,  385 => 240,  374 => 232,  310 => 173,  279 => 145,  272 => 141,  265 => 137,  258 => 133,  250 => 128,  240 => 121,  227 => 110,  221 => 106,  213 => 102,  211 => 101,  207 => 100,  200 => 97,  192 => 93,  190 => 92,  150 => 55,  146 => 54,  141 => 52,  135 => 49,  129 => 46,  123 => 43,  117 => 40,  111 => 37,  105 => 34,  99 => 31,  93 => 28,  87 => 25,  81 => 22,  75 => 19,  69 => 16,  56 => 5,  54 => 4,  52 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}{% endblock %}

{% block stylesheets %}{% endblock %}
{% block javascripts %}{% endblock %}


<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<title>COZA STORE</title>
\t\t<meta charset=\"UTF-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"icon\" type=\"image/png\" href=\"{{ asset('images/icons/favicon.png') }}\"/>
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"fonts/iconic/css/material-design-iconic-font.min.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"fonts/linearicons-v1.0.0/icon-font.min.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"vendor/animate/animate.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"vendor/css-hamburgers/hamburgers.min.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"vendor/animsition/css/animsition.min.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"vendor/select2/select2.min.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"vendor/daterangepicker/daterangepicker.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"vendor/slick/slick.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"vendor/MagnificPopup/magnific-popup.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"vendor/perfect-scrollbar/perfect-scrollbar.css\")}}\">
\t\t<!--===============================================================================================-->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"css/util.css\")}}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"css/main.css\")}}\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>


\t<!--===============================================================================================-->
\t</head>
\t<body
\t\tclass=\"animsition\">

\t\t<!-- Header -->
\t\t<header
\t\t\tclass=\"header-v4\">
\t\t\t<!-- Header desktop -->
\t\t\t<div
\t\t\t\tclass=\"container-menu-desktop\">
\t\t\t\t<!-- Topbar -->
\t\t\t\t<div class=\"top-bar\">
\t\t\t\t\t<div class=\"content-topbar flex-sb-m h-full container\">
\t\t\t\t\t\t<div class=\"left-top-bar\">
\t\t\t\t\t\t\tFree shipping for standard order over \$100
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"right-top-bar flex-w h-full\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\tHelp & FAQs
\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\tEN
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{% if not is_granted('ROLE_USER') and not is_granted('ROLE_ADMIN')%}
\t\t\t\t\t\t\t\t<a href=\"{{ path('securite_login')}}\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('securite_logout')}}\" class=\"flex-c-m trans-04 p-lr-25\">

\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t{{app.user.username}}
\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('admin') }}\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\t\t\t\t\tadmin dashboard
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"wrap-menu-desktop how-shadow1\">
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"limiter-menu-desktop container\">
\t\t\t\t\t\t<!-- Logo desktop -->
\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"images/icons/logo-01.png\")}}\" alt=\"IMG-LOGO\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t\t<div class=\"menu-desktop\">
\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t<li class=\"active-menu\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop')}}\">Home</a>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop')}}\">Shop</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('blog')}}\">Blog</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('about')}}\">About</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('contact')}}\">Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Icon header -->
\t\t\t\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m\">
\t\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#\" class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 \">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Header Mobile -->
\t\t\t<div
\t\t\t\tclass=\"wrap-header-mobile\">
\t\t\t\t<!-- Logo moblie -->
\t\t\t\t<div class=\"logo-mobile\">
\t\t\t\t\t<a href=\"{{ path('shop')}}\"><img src=\"{{ asset(\"images/icons/logo-01.png\") }}\" alt=\"IMG-LOGO\"></a>
\t\t\t\t</div>

\t\t\t\t<!-- Icon header -->
\t\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m m-r-15\">
\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 js-show-cart\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"#\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Button show menu -->
\t\t\t\t<div class=\"btn-show-menu-mobile hamburger hamburger--squeeze\">
\t\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- Menu Mobile -->
\t\t\t<div class=\"menu-mobile\">
\t\t\t\t<ul class=\"topbar-mobile\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"left-top-bar\">
\t\t\t\t\t\t\tFree shipping for standard order over \$100
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"right-top-bar flex-w h-full\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\t\tHelp & FAQs
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\t\tEN
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"main-menu-m\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('website')}}\">Home</a>

\t\t\t\t\t\t<span class=\"arrow-main-menu-m\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('shop')}}\">Shop</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('blog')}}\">Blog</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('about')}}\">About</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('contact')}}\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<!-- Modal Search -->
\t\t\t<div class=\"modal-search-header flex-c-m trans-04 js-hide-modal-search\">
\t\t\t\t<div class=\"container-search-header\">
\t\t\t\t\t<button class=\"flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search\">
\t\t\t\t\t\t<img src=\"{{ asset(\"images/icons/icon-close2.png\") }}\" alt=\"CLOSE\">
\t\t\t\t\t</button>

\t\t\t\t\t<form class=\"wrap-search-header flex-w p-l-15\">
\t\t\t\t\t\t<button class=\"flex-c-m trans-04\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<input class=\"plh3\" type=\"text\" name=\"search\" placeholder=\"Search...\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>


\t\t{% block body %}{% endblock %}
\t\t<!-- Footer -->
\t\t<footer class=\"bg3 p-t-75 p-b-32\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tWomen
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tMen
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tShoes
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tWatches
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\t\tHelp
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tTrack Order
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tReturns
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tShipping
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\tFAQs
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\t\tGET IN TOUCH
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<p class=\"stext-107 cl7 size-201\">
\t\t\t\t\t\t\tAny questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"p-t-27\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-p\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\t\tNewsletter
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"wrap-input1 w-full p-b-4\">
\t\t\t\t\t\t\t\t<input class=\"input1 bg-none plh1 stext-107 cl7\" type=\"text\" name=\"email\" placeholder=\"email@example.com\">
\t\t\t\t\t\t\t\t<div class=\"focus-input1 trans-04\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"p-t-18\">
\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"p-t-40\">
\t\t\t\t\t<div class=\"flex-c-m flex-w p-b-18\">
\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"images/icons/icon-pay-01.png\")}}\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"images/icons/icon-pay-02.png\")}}\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"images/icons/icon-pay-03.png\")}}\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"images/icons/icon-pay-04.png\")}}\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"images/icons/icon-pay-05.png\")}}\" alt=\"ICON-PAY\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<p
\t\t\t\t\t\tclass=\"stext-107 cl6 txt-center\">
\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t\t</script>
\t\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\tby
\t\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>. 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDownloaded from
\t\t\t\t\t\t<a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>


\t\t<!-- Back to top -->
\t\t<div class=\"btn-back-to-top\" id=\"myBtn\">
\t\t\t<span class=\"symbol-btn-back-to-top\">
\t\t\t\t<i class=\"zmdi zmdi-chevron-up\"></i>
\t\t\t</span>
\t\t</div>


\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset('vendor/animsition/js/animsition.min.js') }}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset('vendor/bootstrap/js/popper.js')}}\"></script>
\t\t<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"vendor/select2/select2.min.js\")}}\"></script>
\t\t<script>
\t\t\t\$(\".js-select2\").each(function () {
\$(this).select2({minimumResultsForSearch: 20, dropdownParent: \$(this).next('.dropDownSelect2')});
})
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"vendor/daterangepicker/moment.min.js\")}}\"></script>
\t\t<script src=\"{{ asset(\"vendor/daterangepicker/daterangepicker.js\")}}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"vendor/slick/slick.min.js\")}}\"></script>
\t\t<script src=\"{{ asset(\"js/slick-custom.js\")}}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"vendor/parallax100/parallax100.js\")}}\"></script>
\t\t<script>
\t\t\t\$('.parallax100').parallax100();
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"vendor/MagnificPopup/jquery.magnific-popup.min.js\")}}\"></script>
\t\t<script>
\t\t\t\$('.gallery-lb').each(function () { // the containers for all your galleries
\$(this).magnificPopup({
delegate: 'a', // the selector for gallery item
type: 'image',
gallery: {
enabled: true
},
mainClass: 'mfp-fade'
});
});
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"vendor/isotope/isotope.pkgd.min.js\")}}\"></script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"vendor/sweetalert/sweetalert.min.js\")}}\"></script>
\t\t<script>
\t\t\t\$('.js-addwish-b2, .js-addwish-detail').on('click', function (e) {
e.preventDefault();
});

\$('.js-addwish-b2').each(function () {
var nameProduct = \$(this).parent().parent().find('.js-name-b2').html();
\$(this).on('click', function () {
swal(nameProduct, \"is added to wishlist !\", \"success\");

\$(this).addClass('js-addedwish-b2');
\$(this).off('click');
});
});

\$('.js-addwish-detail').each(function () {
var nameProduct = \$(this).parent().parent().parent().find('.js-name-detail').html();

\$(this).on('click', function () {
swal(nameProduct, \"is added to wishlist !\", \"success\");

\$(this).addClass('js-addedwish-detail');
\$(this).off('click');
});
});

/*---------------------------------------------*/

\$('.js-addcart-detail').each(function () {
var nameProduct = \$(this).parent().parent().parent().parent().find('.js-name-detail').html();
\$(this).on('click', function () {
swal(nameProduct, \"is added to cart !\", \"success\");
});
});
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"vendor/perfect-scrollbar/perfect-scrollbar.min.js\")}}\"></script>
\t\t<script>
\t\t\t\$('.js-pscroll').each(function () {
\$(this).css('position', 'relative');
\$(this).css('overflow', 'hidden');
var ps = new PerfectScrollbar(this, {
wheelSpeed: 1,
scrollingThreshold: 1000,
wheelPropagation: false
});

\$(window).on('resize', function () {
ps.update();
})
});
\t\t</script>
\t\t<!--===============================================================================================-->
\t\t<script src=\"{{ asset(\"js/main.js\")}}\"></script>


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

\t</body>
</html>
", "base.html.twig", "/home/hp/Symfony/myProject/templates/base.html.twig");
    }
}
