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

/* securite/login.html.twig */
class __TwigTemplate_95d4ad46b3e440d427603bbeaa886f036f9a6c69bf887e2ab424324c02673bd5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "securite/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "securite/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "securite/login.html.twig", 1);
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
\t<Section style=\"margin: 100px 300px 100px 320px ;\">

\t\t<div class=\"container\">


\t\t\t<form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("securite_login");
        echo "\" method=\"post\">

\t\t\t\t<h4 class=\"mtext-105 cl2 txt-center p-b-30\">
\t\t\t\t\tConnexion
\t\t\t\t</h4>
\t\t\t\t<h6 class=\"mtext-60 cl2 txt-center p-b-30\">
\t\t\t\t\tif you don't have an account !<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("securite_register");
        echo "\">Create an account</a>
\t\t\t\t\t<h6>
\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\">

\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-l-62 p-r-30\" type=\"text\" name=\"_username\" required placeholder=\"Your Email Address\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\">

\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-l-62 p-r-30\" type=\"password\" name=\"_password\" placeholder=\"Your Password \">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer\">
\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>


\t\t\t\t</div>
\t\t\t</section>


\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "securite/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 18,  95 => 12,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

\t<Section style=\"margin: 100px 300px 100px 320px ;\">

\t\t<div class=\"container\">


\t\t\t<form action=\"{{ path('securite_login')}}\" method=\"post\">

\t\t\t\t<h4 class=\"mtext-105 cl2 txt-center p-b-30\">
\t\t\t\t\tConnexion
\t\t\t\t</h4>
\t\t\t\t<h6 class=\"mtext-60 cl2 txt-center p-b-30\">
\t\t\t\t\tif you don't have an account !<a href=\"{{ path('securite_register')}}\">Create an account</a>
\t\t\t\t\t<h6>
\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\">

\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-l-62 p-r-30\" type=\"text\" name=\"_username\" required placeholder=\"Your Email Address\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\">

\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-l-62 p-r-30\" type=\"password\" name=\"_password\" placeholder=\"Your Password \">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer\">
\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>


\t\t\t\t</div>
\t\t\t</section>


\t\t{% endblock %}
", "securite/login.html.twig", "/home/hp/Symfony/E-Commerce/templates/securite/login.html.twig");
    }
}
