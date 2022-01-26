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

/* contact/index.html.twig */
class __TwigTemplate_c54472a3d7cb6219b01c5b382ac382262c8f6e298a1eb72b9e934cd010d6b039 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        echo "\t<!-- Title page -->
<section class=\"bg-img1 txt-center p-lr-15 p-tb-92\" style=\"background-image: url('uploads/images/products/banner1.jpg');\">

\t\t<h2 class=\"ltext-105 cl0 txt-center\">
\t\t\tContact
\t\t</h2>
\t</section>\t


\t<!-- Content page -->
\t<section class=\"bg0 p-t-104 p-b-116\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex-w flex-tr\">
\t\t\t\t<div class=\"size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 txt-center p-b-30\">
\t\t\t\t\t\t\tSend Us A Message
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\">
\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-l-62 p-r-30\" type=\"text\" name=\"email\" placeholder=\"Your Email Address\">
\t\t\t\t\t\t\t<img class=\"how-pos4 pointer-none\" src=\"images/icons/icon-email.png\" alt=\"ICON\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"bor8 m-b-30\">
\t\t\t\t\t\t\t<textarea class=\"stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25\" name=\"msg\" placeholder=\"How Can We Help?\"></textarea>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer\">
\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<div class=\"size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md\">
\t\t\t\t\t<div class=\"flex-w w-full p-b-42\">
\t\t\t\t\t\t<span class=\"fs-18 cl5 txt-center size-211\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-map-marker\"></span>
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<div class=\"size-212 p-t-2\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\tAddress
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<p class=\"stext-115 cl6 size-213 p-t-18\">
\t\t\t\t\t\t\t\tCoza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-w w-full p-b-42\">
\t\t\t\t\t\t<span class=\"fs-18 cl5 txt-center size-211\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-phone-handset\"></span>
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<div class=\"size-212 p-t-2\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\tLets Talk
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<p class=\"stext-115 cl1 size-213 p-t-18\">
\t\t\t\t\t\t\t\t+1 800 1236879
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-w w-full\">
\t\t\t\t\t\t<span class=\"fs-18 cl5 txt-center size-211\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-envelope\"></span>
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<div class=\"size-212 p-t-2\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\tSale Support
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<p class=\"stext-115 cl1 size-213 p-t-18\">
\t\t\t\t\t\t\t\tcontact@example.com
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t
\t
\t<!-- Map -->
\t";
        // line 98
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 98,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
\t<!-- Title page -->
<section class=\"bg-img1 txt-center p-lr-15 p-tb-92\" style=\"background-image: url('uploads/images/products/banner1.jpg');\">

\t\t<h2 class=\"ltext-105 cl0 txt-center\">
\t\t\tContact
\t\t</h2>
\t</section>\t


\t<!-- Content page -->
\t<section class=\"bg0 p-t-104 p-b-116\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex-w flex-tr\">
\t\t\t\t<div class=\"size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 txt-center p-b-30\">
\t\t\t\t\t\t\tSend Us A Message
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\">
\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-l-62 p-r-30\" type=\"text\" name=\"email\" placeholder=\"Your Email Address\">
\t\t\t\t\t\t\t<img class=\"how-pos4 pointer-none\" src=\"images/icons/icon-email.png\" alt=\"ICON\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"bor8 m-b-30\">
\t\t\t\t\t\t\t<textarea class=\"stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25\" name=\"msg\" placeholder=\"How Can We Help?\"></textarea>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer\">
\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<div class=\"size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md\">
\t\t\t\t\t<div class=\"flex-w w-full p-b-42\">
\t\t\t\t\t\t<span class=\"fs-18 cl5 txt-center size-211\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-map-marker\"></span>
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<div class=\"size-212 p-t-2\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\tAddress
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<p class=\"stext-115 cl6 size-213 p-t-18\">
\t\t\t\t\t\t\t\tCoza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-w w-full p-b-42\">
\t\t\t\t\t\t<span class=\"fs-18 cl5 txt-center size-211\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-phone-handset\"></span>
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<div class=\"size-212 p-t-2\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\tLets Talk
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<p class=\"stext-115 cl1 size-213 p-t-18\">
\t\t\t\t\t\t\t\t+1 800 1236879
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-w w-full\">
\t\t\t\t\t\t<span class=\"fs-18 cl5 txt-center size-211\">
\t\t\t\t\t\t\t<span class=\"lnr lnr-envelope\"></span>
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<div class=\"size-212 p-t-2\">
\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\tSale Support
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<p class=\"stext-115 cl1 size-213 p-t-18\">
\t\t\t\t\t\t\t\tcontact@example.com
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t
\t
\t<!-- Map -->
\t{# <div class=\"map\">
\t\t<div class=\"size-303\" id=\"google_map\" data-map-x=\"40.691446\" data-map-y=\"-73.886787\" data-pin=\"images/icons/pin.png\" data-scrollwhell=\"0\" data-draggable=\"1\" data-zoom=\"11\"></div>
\t</div> #}


{% endblock %}
", "contact/index.html.twig", "/home/hp/Symfony/E-Commerce/templates/contact/index.html.twig");
    }
}
