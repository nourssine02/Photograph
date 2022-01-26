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

/* blog/index.html.twig */
class __TwigTemplate_2277ccb3342b969bccbd085e520611bb0f4cc0edf384b0a8d7cc402343c1acae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
\t<!-- Title page -->
\t<section class=\"bg-img1 txt-center p-lr-15 p-tb-92\" style=\"background-image: url('images/bg-02.jpg');\">
\t\t<h2 class=\"ltext-105 cl0 txt-center\">
\t\t\tBlog
\t\t</h2>
\t</section>\t


\t<!-- Content page -->
\t<section class=\"bg0 p-t-62 p-b-60\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-lg-9 p-b-80\">
\t\t\t\t\t<div class=\"p-r-45 p-r-0-lg\">
\t\t\t\t\t\t<!-- item blog -->
\t\t\t\t\t\t<div class=\"p-b-63\">
\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"hov-img0 how-pos5-parent\">
\t\t\t\t\t\t\t\t<img src=\"images/blog-04.jpg\" alt=\"IMG-BLOG\">

\t\t\t\t\t\t\t\t<div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t\t22
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"p-t-32\">
\t\t\t\t\t\t\t\t<h4 class=\"p-b-15\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"ltext-108 cl2 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t8 Inspiring Ways to Wear Dresses in the Winter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p class=\"stext-117 cl6\">
\t\t\t\t\t\t\t\t\tClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-t-18\">
\t\t\t\t\t\t\t\t\t<span class=\"flex-w flex-m stext-111 cl2 p-r-30 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl4\">By</span> Admin  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tStreetStyle, Fashion, Couple  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t8 Comments
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"stext-101 cl2 hov-cl1 trans-04 m-tb-10\">
\t\t\t\t\t\t\t\t\t\tContinue Reading

\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-9\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- item blog -->
\t\t\t\t\t\t<div class=\"p-b-63\">
\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"hov-img0 how-pos5-parent\">
\t\t\t\t\t\t\t\t<img src=\"images/blog-05.jpg\" alt=\"IMG-BLOG\">

\t\t\t\t\t\t\t\t<div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t\t18
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"p-t-32\">
\t\t\t\t\t\t\t\t<h4 class=\"p-b-15\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"ltext-108 cl2 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\tThe Great Big List of Men’s Gifts for the Holidays 
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p class=\"stext-117 cl6\">
\t\t\t\t\t\t\t\t\tClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-t-18\">
\t\t\t\t\t\t\t\t\t<span class=\"flex-w flex-m stext-111 cl2 p-r-30 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl4\">By</span> Admin  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tStreetStyle, Fashion, Couple  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t8 Comments
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"stext-101 cl2 hov-cl1 trans-04 m-tb-10\">
\t\t\t\t\t\t\t\t\t\tContinue Reading

\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-9\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- item blog -->
\t\t\t\t\t\t<div class=\"p-b-63\">
\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"hov-img0 how-pos5-parent\">
\t\t\t\t\t\t\t\t<img src=\"images/blog-06.jpg\" alt=\"IMG-BLOG\">

\t\t\t\t\t\t\t\t<div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t\t16
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"p-t-32\">
\t\t\t\t\t\t\t\t<h4 class=\"p-b-15\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"ltext-108 cl2 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t5 Winter-to-Spring Fashion Trends to Try Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p class=\"stext-117 cl6\">
\t\t\t\t\t\t\t\t\tClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-t-18\">
\t\t\t\t\t\t\t\t\t<span class=\"flex-w flex-m stext-111 cl2 p-r-30 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl4\">By</span> Admin  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tStreetStyle, Fashion, Couple  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t8 Comments
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"stext-101 cl2 hov-cl1 trans-04 m-tb-10\">
\t\t\t\t\t\t\t\t\t\tContinue Reading

\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-9\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 col-lg-3 p-b-80\">
\t\t\t\t\t<div class=\"side-menu\">
\t\t\t\t\t\t<div class=\"bor17 of-hidden pos-relative\">
\t\t\t\t\t\t\t<input class=\"stext-103 cl2 plh4 size-116 p-l-28 p-r-55\" type=\"text\" name=\"search\" placeholder=\"Search\">

\t\t\t\t\t\t\t<button class=\"flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-55\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-33\">
\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tFashion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tBeauty
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tStreet Style
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tLife Style
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tDIY & Crafts
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-65\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-33\">
\t\t\t\t\t\t\t\tFeatured Products
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-01.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tWhite Shirt With Pleat Detail Back
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$19.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-02.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tConverse All Star Hi Black Canvas
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$39.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-03.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tNixon Porter Leather Watch In Tan
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$17.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-55\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-20\">
\t\t\t\t\t\t\t\tArchive
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tJuly 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(9)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tJune 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(39)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMay 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(29)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tApril  2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(35)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMarch 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(22)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tFebruary 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(32)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tJanuary 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(21)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tDecember 2017
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(26)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-50\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-27\">
\t\t\t\t\t\t\t\tTags
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<div class=\"flex-w m-r--5\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tFashion
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tLifestyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tDenim
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tStreetstyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tCrafts
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

\t<!-- Title page -->
\t<section class=\"bg-img1 txt-center p-lr-15 p-tb-92\" style=\"background-image: url('images/bg-02.jpg');\">
\t\t<h2 class=\"ltext-105 cl0 txt-center\">
\t\t\tBlog
\t\t</h2>
\t</section>\t


\t<!-- Content page -->
\t<section class=\"bg0 p-t-62 p-b-60\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-lg-9 p-b-80\">
\t\t\t\t\t<div class=\"p-r-45 p-r-0-lg\">
\t\t\t\t\t\t<!-- item blog -->
\t\t\t\t\t\t<div class=\"p-b-63\">
\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"hov-img0 how-pos5-parent\">
\t\t\t\t\t\t\t\t<img src=\"images/blog-04.jpg\" alt=\"IMG-BLOG\">

\t\t\t\t\t\t\t\t<div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t\t22
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"p-t-32\">
\t\t\t\t\t\t\t\t<h4 class=\"p-b-15\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"ltext-108 cl2 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t8 Inspiring Ways to Wear Dresses in the Winter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p class=\"stext-117 cl6\">
\t\t\t\t\t\t\t\t\tClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-t-18\">
\t\t\t\t\t\t\t\t\t<span class=\"flex-w flex-m stext-111 cl2 p-r-30 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl4\">By</span> Admin  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tStreetStyle, Fashion, Couple  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t8 Comments
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"stext-101 cl2 hov-cl1 trans-04 m-tb-10\">
\t\t\t\t\t\t\t\t\t\tContinue Reading

\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-9\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- item blog -->
\t\t\t\t\t\t<div class=\"p-b-63\">
\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"hov-img0 how-pos5-parent\">
\t\t\t\t\t\t\t\t<img src=\"images/blog-05.jpg\" alt=\"IMG-BLOG\">

\t\t\t\t\t\t\t\t<div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t\t18
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"p-t-32\">
\t\t\t\t\t\t\t\t<h4 class=\"p-b-15\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"ltext-108 cl2 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\tThe Great Big List of Men’s Gifts for the Holidays 
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p class=\"stext-117 cl6\">
\t\t\t\t\t\t\t\t\tClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-t-18\">
\t\t\t\t\t\t\t\t\t<span class=\"flex-w flex-m stext-111 cl2 p-r-30 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl4\">By</span> Admin  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tStreetStyle, Fashion, Couple  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t8 Comments
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"stext-101 cl2 hov-cl1 trans-04 m-tb-10\">
\t\t\t\t\t\t\t\t\t\tContinue Reading

\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-9\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- item blog -->
\t\t\t\t\t\t<div class=\"p-b-63\">
\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"hov-img0 how-pos5-parent\">
\t\t\t\t\t\t\t\t<img src=\"images/blog-06.jpg\" alt=\"IMG-BLOG\">

\t\t\t\t\t\t\t\t<div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t\t16
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"p-t-32\">
\t\t\t\t\t\t\t\t<h4 class=\"p-b-15\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"ltext-108 cl2 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t5 Winter-to-Spring Fashion Trends to Try Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p class=\"stext-117 cl6\">
\t\t\t\t\t\t\t\t\tClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-t-18\">
\t\t\t\t\t\t\t\t\t<span class=\"flex-w flex-m stext-111 cl2 p-r-30 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl4\">By</span> Admin  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tStreetStyle, Fashion, Couple  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t8 Comments
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"stext-101 cl2 hov-cl1 trans-04 m-tb-10\">
\t\t\t\t\t\t\t\t\t\tContinue Reading

\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-9\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 col-lg-3 p-b-80\">
\t\t\t\t\t<div class=\"side-menu\">
\t\t\t\t\t\t<div class=\"bor17 of-hidden pos-relative\">
\t\t\t\t\t\t\t<input class=\"stext-103 cl2 plh4 size-116 p-l-28 p-r-55\" type=\"text\" name=\"search\" placeholder=\"Search\">

\t\t\t\t\t\t\t<button class=\"flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-55\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-33\">
\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tFashion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tBeauty
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tStreet Style
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tLife Style
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tDIY & Crafts
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-65\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-33\">
\t\t\t\t\t\t\t\tFeatured Products
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-01.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tWhite Shirt With Pleat Detail Back
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$19.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-02.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tConverse All Star Hi Black Canvas
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$39.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-03.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tNixon Porter Leather Watch In Tan
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$17.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-55\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-20\">
\t\t\t\t\t\t\t\tArchive
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tJuly 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(9)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tJune 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(39)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMay 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(29)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tApril  2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(35)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMarch 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(22)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tFebruary 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(32)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tJanuary 2018
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(21)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tDecember 2017
\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t(26)
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-50\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-27\">
\t\t\t\t\t\t\t\tTags
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<div class=\"flex-w m-r--5\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tFashion
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tLifestyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tDenim
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tStreetstyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tCrafts
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t
{% endblock %}
", "blog/index.html.twig", "/home/hp/Symfony/E-Commerce/templates/blog/index.html.twig");
    }
}
