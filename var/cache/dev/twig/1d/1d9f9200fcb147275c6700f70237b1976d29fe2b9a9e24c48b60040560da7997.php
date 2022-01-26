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

/* shop/detail.html.twig */
class __TwigTemplate_b9485425fcebcb5347e3ad9e6db23a282d6f0c369ac1048976063c73b43caafc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/detail.html.twig", 1);
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

\t<!-- breadcrumb -->
\t<div class=\"container\">
\t\t<div class=\"bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg\">
\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website");
        echo "\" class=\"stext-109 cl8 hov-cl1 trans-04\">
\t\t\t\tHome
\t\t\t\t<i class=\"fa fa-angle-right m-l-9 m-r-10\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\" class=\"stext-109 cl8 hov-cl1 trans-04\">
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "categorie", [], "any", false, false, false, 17), "html", null, true);
        echo "
\t\t\t\t<i class=\"fa fa-angle-right m-l-9 m-r-10\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<span class=\"stext-109 cl4\">
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "
\t\t\t</span>
\t\t</div>
\t</div>


\t<!-- Product Detail -->
\t<section class=\"sec-product-detail bg0 p-t-65 p-b-60\">
\t\t<div class=\"container\">


\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">


\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">

\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t\t<div class=\"wrap-slick3-dots\"></div>
\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 45, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 47, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 49, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 55, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 57, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 65, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 67, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 69, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6 col-lg-5 p-b-30\">
\t\t\t\t\t<div class=\"p-r-50 p-t-5 p-lr-0-lg\">
\t\t\t\t\t\t";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">
\t\t\t\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
        echo "
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<span class=\"mtext-106 cl2\">
\t\t\t\t\t\t\tdt";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 90, $this->source); })()), "prix", [], "any", false, false, false, 90), "html", null, true);
        echo "
\t\t\t\t\t\t</span>

\t\t\t\t\t\t";
        // line 96
        echo "
\t\t\t\t\t\t<!--  -->


\t\t\t\t\t\t";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "quantite", [], "any", false, false, false, 100), 'row');
        echo "
\t\t\t\t\t\t<div class=\" how-pos4-parent\"></div>

\t\t\t\t\t\t";
        // line 108
        echo "\t\t\t\t\t\t<br>


\t\t\t\t\t\t<button href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
        echo "\" type=\"submit\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail\">

\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t</button>


\t\t\t\t\t\t";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>


\t\t\t\t\t<!--  -->
\t\t\t\t\t<div class=\"flex-w flex-m p-l-100 p-t-40 respon7\">

\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Facebook\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"https://www.twitter.com/\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Twitter\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"https://accounts.google.com/\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Google Plus\">
\t\t\t\t\t\t\t<i class=\"fab fa-google-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t</div>
\t</div>

</div>

<div
\tclass=\"bor10 m-t-50 p-t-43 p-b-40\">
\t<!-- Tab01 -->
\t<div
\t\tclass=\"tab01\">
\t\t<!-- Nav tabs -->
\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#description\" role=\"tab\">Description</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#information\" role=\"tab\">Additional information</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\">Reviews
\t\t\t\t\t";
        // line 163
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 163, $this->source); })()), "comment", [], "any", false, false, false, 163)), "html", null, true);
        echo "</a>
\t\t\t</li>
\t\t</ul>

\t\t<!-- Tab panes -->
\t\t<div
\t\t\tclass=\"tab-content p-t-43\">
\t\t\t<!-- - -->
\t\t\t<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">
\t\t\t\t<div class=\"how-pos2 p-lr-15-md\">
\t\t\t\t\t<p class=\"stext-102 cl6\">
\t\t\t\t\t\tAenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- - -->
\t\t\t<div class=\"tab-pane fade\" id=\"information\" role=\"tabpanel\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t<ul class=\"p-lr-28 p-lr-15-sm\">
\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\tWeight
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t0.79 kg
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\tDimensions
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t110 x 33 x 100 cm
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\tMaterials
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t60% cotton
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\tRed , White , Black , Bleu
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\tSize
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\tS,M,L,XL
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t</li>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- - -->
\t<div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t<div
\t\t\t\t\tclass=\"p-b-30 m-lr-15-sm\">
\t\t\t\t\t<!-- Review -->
\t\t\t\t\t<div class=\"flex-w flex-t p-b-68\">


\t\t\t\t\t\t<div class=\"size-207\">
\t\t\t\t\t\t\t";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 253, $this->source); })()), "comment", [], "any", false, false, false, 253));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 254
            echo "
\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-b-17\">


\t\t\t\t\t\t\t\t\t<span class=\" p-r-20 stext-102 cl6\">
\t\t\t\t\t\t\t\t\t\t";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "name", [], "any", false, false, false, 259), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>


\t\t\t\t\t\t\t\t\t<span class=\"mtext-107 cl2 p-r-20\">
\t\t\t\t\t\t\t\t\t\t";
            // line 264
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "createdAt", [], "any", false, false, false, 264), "m/d/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<p class=\"mtext-107 cl2\">
\t\t\t\t\t\t\t\t\t";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "contenu", [], "any", false, false, false, 270), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Add review -->
\t\t\t\t\t<Section>
\t\t\t\t\t\t<div class=\"container\">


\t\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 txt-center p-b-30\">
\t\t\t\t\t\t\t\tCreate a Comment
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t";
        // line 283
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "user", [], "any", false, false, false, 283)) {
            // line 284
            echo "\t\t\t\t\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 284, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t\t\t";
            // line 285
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 285, $this->source); })()), "name", [], "any", false, false, false, 285), 'row');
            echo "
\t\t\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\"></div>
\t\t\t\t\t\t\t\t";
            // line 287
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 287, $this->source); })()), "contenu", [], "any", false, false, false, 287), 'row');
            echo "
\t\t\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\"></div>

\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
            // line 293
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 293, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 295
            echo "\t\t\t\t\t\t\t\t<p>You must be connected before commenting</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 296
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("securite_login");
            echo "\">Connexion</a>

\t\t\t\t\t\t\t";
        }
        // line 299
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>


\t\t</div>
\t</div>
</div></div></div></div><div class=\"bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15\"><span class=\"stext-107 cl6 p-lr-25\">Categories:";
        // line 308
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 308, $this->source); })()), "name", [], "any", false, false, false, 308), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 308, $this->source); })()), "categorie", [], "any", false, false, false, 308), "html", null, true);
        echo "</span></div></section><!-- Related Products --><section class=\"sec-relate-product bg0 p-t-45 p-b-105\"><div class=\"container\"><div class=\"p-b-45\"><h3 class=\"ltext-106 cl5 txt-center\">
Related Products</h3></div><!-- Slide2 --><div class=\"wrap-slick2\"><div class=\"slick2\">
";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 310, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 311
            echo "\t<div
\t\tclass=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t<!-- Block2 -->
\t\t<div class=\"block2\">


\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t<img src=\"";
            // line 318
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 318), "html", null, true);
            echo "\">

\t\t\t\t<a href=\"";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 320)]), "html", null, true);
            echo "\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\tQuick View
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t<a href=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 327)]), "html", null, true);
            echo "\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 328), "html", null, true);
            echo "
\t\t\t\t\t</a>

\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\$
\t\t\t\t\t\t";
            // line 333
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 333), "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=";
            // line 339
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-heart-01.png"), "html", null, true);
            echo " alt=\"ICON\">
\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=";
            // line 340
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-heart-02.png"), "html", null, true);
            echo " alt=\"ICON\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>


\t\t</div>

\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "</div></div></div></section>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 349,  549 => 340,  545 => 339,  536 => 333,  528 => 328,  524 => 327,  514 => 320,  507 => 318,  498 => 311,  494 => 310,  487 => 308,  476 => 299,  470 => 296,  467 => 295,  462 => 293,  453 => 287,  448 => 285,  443 => 284,  441 => 283,  428 => 272,  420 => 270,  411 => 264,  403 => 259,  396 => 254,  392 => 253,  299 => 163,  250 => 117,  241 => 111,  236 => 108,  230 => 100,  224 => 96,  218 => 90,  211 => 86,  206 => 84,  188 => 69,  183 => 67,  178 => 65,  169 => 59,  164 => 57,  159 => 55,  150 => 49,  145 => 47,  140 => 45,  114 => 22,  106 => 17,  102 => 16,  94 => 11,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}


\t<!-- breadcrumb -->
\t<div class=\"container\">
\t\t<div class=\"bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg\">
\t\t\t<a href=\"{{ path('website') }}\" class=\"stext-109 cl8 hov-cl1 trans-04\">
\t\t\t\tHome
\t\t\t\t<i class=\"fa fa-angle-right m-l-9 m-r-10\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<a href=\"{{path('shop')}}\" class=\"stext-109 cl8 hov-cl1 trans-04\">
\t\t\t\t{{article.categorie}}
\t\t\t\t<i class=\"fa fa-angle-right m-l-9 m-r-10\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<span class=\"stext-109 cl4\">
\t\t\t\t{{article.name}}
\t\t\t</span>
\t\t</div>
\t</div>


\t<!-- Product Detail -->
\t<section class=\"sec-product-detail bg0 p-t-65 p-b-60\">
\t\t<div class=\"container\">


\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">


\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">

\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t\t<div class=\"wrap-slick3-dots\"></div>
\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"{{ vich_uploader_asset(article ,'imageFile')}}\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(article ,'imageFile')}}\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"{{ vich_uploader_asset(article ,'imageFile')}}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"{{ vich_uploader_asset(article ,'imageFile')}}\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(article ,'imageFile')}}\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"{{ vich_uploader_asset(article ,'imageFile')}}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"{{ vich_uploader_asset(article ,'imageFile')}}\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(article ,'imageFile')}}\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"{{ vich_uploader_asset(article ,'imageFile')}}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6 col-lg-5 p-b-30\">
\t\t\t\t\t<div class=\"p-r-50 p-t-5 p-lr-0-lg\">
\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">
\t\t\t\t\t\t\t{{article.name}}
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<span class=\"mtext-106 cl2\">
\t\t\t\t\t\t\tdt{{article.prix}}
\t\t\t\t\t\t</span>

\t\t\t\t\t\t{# <p class=\"stext-102 cl3 p-t-23\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{article.description}}
\t\t\t\t\t\t\t\t\t\t\t\t</p> #}

\t\t\t\t\t\t<!--  -->


\t\t\t\t\t\t{{form_row(form.quantite)}}
\t\t\t\t\t\t<div class=\" how-pos4-parent\"></div>

\t\t\t\t\t\t{# {{form_row(form.taille)}}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" how-pos4-parent\"></div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{{form_row(form.couleur)}}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" how-pos4-parent\"></div>#}
\t\t\t\t\t\t<br>


\t\t\t\t\t\t<button href=\"{{ path('panier_add' , {'id':article.id } ) }}\" type=\"submit\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail\">

\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t</button>


\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t</div>


\t\t\t\t\t<!--  -->
\t\t\t\t\t<div class=\"flex-w flex-m p-l-100 p-t-40 respon7\">

\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Facebook\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"https://www.twitter.com/\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Twitter\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"https://accounts.google.com/\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Google Plus\">
\t\t\t\t\t\t\t<i class=\"fab fa-google-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t</div>
\t</div>

</div>

<div
\tclass=\"bor10 m-t-50 p-t-43 p-b-40\">
\t<!-- Tab01 -->
\t<div
\t\tclass=\"tab01\">
\t\t<!-- Nav tabs -->
\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#description\" role=\"tab\">Description</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#information\" role=\"tab\">Additional information</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\">Reviews
\t\t\t\t\t{{article.comment | length}}</a>
\t\t\t</li>
\t\t</ul>

\t\t<!-- Tab panes -->
\t\t<div
\t\t\tclass=\"tab-content p-t-43\">
\t\t\t<!-- - -->
\t\t\t<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">
\t\t\t\t<div class=\"how-pos2 p-lr-15-md\">
\t\t\t\t\t<p class=\"stext-102 cl6\">
\t\t\t\t\t\tAenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- - -->
\t\t\t<div class=\"tab-pane fade\" id=\"information\" role=\"tabpanel\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t<ul class=\"p-lr-28 p-lr-15-sm\">
\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\tWeight
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t0.79 kg
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\tDimensions
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t110 x 33 x 100 cm
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\tMaterials
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t60% cotton
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\tRed , White , Black , Bleu
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\tSize
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\tS,M,L,XL
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t</li>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- - -->
\t<div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t<div
\t\t\t\t\tclass=\"p-b-30 m-lr-15-sm\">
\t\t\t\t\t<!-- Review -->
\t\t\t\t\t<div class=\"flex-w flex-t p-b-68\">


\t\t\t\t\t\t<div class=\"size-207\">
\t\t\t\t\t\t\t{% for com in article.comment %}

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-b-17\">


\t\t\t\t\t\t\t\t\t<span class=\" p-r-20 stext-102 cl6\">
\t\t\t\t\t\t\t\t\t\t{{com.name}}
\t\t\t\t\t\t\t\t\t</span>


\t\t\t\t\t\t\t\t\t<span class=\"mtext-107 cl2 p-r-20\">
\t\t\t\t\t\t\t\t\t\t{{com.createdAt | date(\"m/d/Y\")}}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<p class=\"mtext-107 cl2\">
\t\t\t\t\t\t\t\t\t{{com.contenu}}</p>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Add review -->
\t\t\t\t\t<Section>
\t\t\t\t\t\t<div class=\"container\">


\t\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 txt-center p-b-30\">
\t\t\t\t\t\t\t\tCreate a Comment
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t{{ form_start(commentForm)}}
\t\t\t\t\t\t\t\t{{ form_row(commentForm.name )}}
\t\t\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\"></div>
\t\t\t\t\t\t\t\t{{ form_row(commentForm.contenu) }}
\t\t\t\t\t\t\t\t<div class=\"bor8 m-b-20 how-pos4-parent\"></div>

\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t{{ form_end(commentForm) }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p>You must be connected before commenting</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('securite_login')}}\">Connexion</a>

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>


\t\t</div>
\t</div>
</div></div></div></div><div class=\"bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15\"><span class=\"stext-107 cl6 p-lr-25\">Categories:{{article.name}},{{article.categorie}}</span></div></section><!-- Related Products --><section class=\"sec-relate-product bg0 p-t-45 p-b-105\"><div class=\"container\"><div class=\"p-b-45\"><h3 class=\"ltext-106 cl5 txt-center\">
Related Products</h3></div><!-- Slide2 --><div class=\"wrap-slick2\"><div class=\"slick2\">
{% for article in articles %}
\t<div
\t\tclass=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t<!-- Block2 -->
\t\t<div class=\"block2\">


\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t<img src=\"{{ vich_uploader_asset(article ,'imageFile')}}\" alt=\"{{article.description}}\">

\t\t\t\t<a href=\"{{ path('shop_detail',{'id': article.id})}}\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\tQuick View
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t<a href=\"{{ path('shop_detail', {'id': article.id})}}\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t{{article.name}}
\t\t\t\t\t</a>

\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\$
\t\t\t\t\t\t{{article.prix}}
\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src={{ asset(\"images/icons/icon-heart-01.png\") }} alt=\"ICON\">
\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src={{ asset(\"images/icons/icon-heart-02.png\" ) }} alt=\"ICON\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>


\t\t</div>

\t</div>
{% endfor %}</div></div></div></section>{% endblock %}
", "shop/detail.html.twig", "/home/hp/Symfony/myProject/templates/shop/detail.html.twig");
    }
}
