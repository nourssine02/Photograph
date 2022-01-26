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

/* shop/index.html.twig */
class __TwigTemplate_053bee9d57a2d0c8d5f3e72a11e8592500737c05352980d9f43b9510f0bc0b50 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/index.html.twig", 1);
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
\t<!-- Product -->
\t<div class=\"bg0 m-t-23 p-b-140\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex-w flex-sb-m p-b-52\">
\t\t\t\t";
        // line 23
        echo "

\t\t\t\t<!-- Search product -->
\t\t\t\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form');
        echo "


\t\t\t\t</div>

\t\t\t\t<div class=\"row isotope-grid\">
\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 34), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<!-- Block2 -->

\t\t\t\t\t\t\t<div class=\"block2\">

\t\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t\t<img src=\"uploads/images/products/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 40), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ";
            echo "\">
\t\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\tdt
\t\t\t\t\t\t\t\t\t\t\t";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 55), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"js-favori\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_favoris", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">


\t\t\t\t\t\t\t\t\t\t\t";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)], "method", false, false, false, 63))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"js-heart fas fa-heart\"></i>

\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"js-heart far fa-heart\"></i>

\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo "
\t\t\t\t\t\t\t\t\t\t\t<span class=\"js-favoris\">";
            // line 71
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "favoris", [], "any", false, false, false, 71)), "html", null, true);
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
        // line 84
        echo "
\t\t\t\t</div>


\t\t\t\t<!-- Cart -->

\t\t\t\t<div class=\"wrap-header-cart js-panel-cart\">
\t\t\t\t\t<div class=\"s-full js-hide-cart\"></div>

\t\t\t\t\t<div class=\"header-cart flex-col-l p-l-65 p-r-25\">

\t\t\t\t\t\t<div class=\"header-cart-title flex-w flex-sb-m p-b-8\">
\t\t\t\t\t\t\t<span class=\"mtext-103 cl2\">
\t\t\t\t\t\t\t\tYour Cart
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<div class=\"fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-close\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"header-cart-content flex-w js-pscroll\">

\t\t\t\t\t\t\t<ul class=\"header-cart-wrapitem w-full\">
\t\t\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t";
            // line 111
            echo "

\t\t\t\t\t\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"uploads/images/products/";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageArticle", [], "any", false, false, false, 115), "html", null, true);
            echo "\" alt=\"IMG\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "articleName", [], "any", false, false, false, 120), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">

\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 126), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\tX";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prixArticle", [], "any", false, false, false, 127), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\tdt
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            // line 133
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<div class=\"header-cart-total w-full p-tb-40\">
\t\t\t\t\t\t\t\t\t";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 139
            echo "\t\t\t\t\t\t\t\t\t\t";
            // line 140
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 141
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 141, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["item"], "prixArticle", [], "any", false, false, false, 141) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 141)));
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t";
            // line 143
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t\t\t\t\t\t\tTotal: dt";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"header-cart-buttons flex-w w-full\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo "\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10\">
\t\t\t\t\t\t\t\t\t\tView Cart
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_check");
        echo "\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10\">

\t\t\t\t\t\t\t\t\t\tCheck Out
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t</div>


\t\t\t\t<!--Fin cart -->

\t\t\t\t<!-- Load more -->
\t\t\t\t<div class=\"flex-c-m flex-w w-full p-t-45\">
\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\tLoad More
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "\t\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t\t<script>
\t\t\tfunction onClickBtnFavoris(event) {

event.preventDefault();

const url = this.href;
const spanCount = this.querySelector('span.js-favori');


axios.get(url).then(function (response) {
const favoriss = response.data.favoris;
spanCount.textContent = favoriss;


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
        return "shop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 179,  356 => 178,  320 => 152,  313 => 148,  305 => 144,  299 => 143,  297 => 142,  295 => 141,  292 => 140,  290 => 139,  286 => 138,  280 => 134,  274 => 133,  266 => 127,  262 => 126,  253 => 120,  249 => 119,  242 => 115,  236 => 111,  234 => 110,  230 => 109,  203 => 84,  184 => 71,  181 => 70,  176 => 67,  171 => 64,  169 => 63,  163 => 60,  155 => 55,  147 => 50,  143 => 49,  132 => 42,  125 => 40,  116 => 34,  113 => 33,  109 => 32,  100 => 26,  95 => 23,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

\t<!-- Product -->
\t<div class=\"bg0 m-t-23 p-b-140\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex-w flex-sb-m p-b-52\">
\t\t\t\t{# <div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\">
\t\t\t\t\t\tAll Products
\t\t\t\t\t</button>
\t\t\t\t\t{% for categorie in categories %}

\t\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".{{categorie.name}}\">
\t\t\t\t\t\t\t{{categorie.name}}
\t\t\t\t\t\t</button>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div> #}


\t\t\t\t<!-- Search product -->
\t\t\t\t{{form(form) }}


\t\t\t\t</div>

\t\t\t\t<div class=\"row isotope-grid\">
\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{article.categorie}} \">
\t\t\t\t\t\t\t<!-- Block2 -->

\t\t\t\t\t\t\t<div class=\"block2\">

\t\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t\t<img src=\"uploads/images/products/{{article.image}}\" alt=\"{{article.description}}\">

\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop_detail',{'id': article.id})}}\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 {#js-show-modal1#}\">
\t\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop_detail', {'id': article.id})}}\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\t\t{{article.name}}
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\tdt
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


\t\t\t\t<!-- Cart -->

\t\t\t\t<div class=\"wrap-header-cart js-panel-cart\">
\t\t\t\t\t<div class=\"s-full js-hide-cart\"></div>

\t\t\t\t\t<div class=\"header-cart flex-col-l p-l-65 p-r-25\">

\t\t\t\t\t\t<div class=\"header-cart-title flex-w flex-sb-m p-b-8\">
\t\t\t\t\t\t\t<span class=\"mtext-103 cl2\">
\t\t\t\t\t\t\t\tYour Cart
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<div class=\"fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-close\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"header-cart-content flex-w js-pscroll\">

\t\t\t\t\t\t\t<ul class=\"header-cart-wrapitem w-full\">
\t\t\t\t\t\t\t\t{% for item in panier %}
\t\t\t\t\t\t\t\t\t{# {% if app.user.id == item.userId %} #}


\t\t\t\t\t\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"uploads/images/products/{{item.imageArticle}}\" alt=\"IMG\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('shop_detail',{'id': item.id})}}\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ item.articleName }}

\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">

\t\t\t\t\t\t\t\t\t\t\t\t\t{{item.quantite }}
\t\t\t\t\t\t\t\t\t\t\t\t\tX{{ item.prixArticle}}
\t\t\t\t\t\t\t\t\t\t\t\t\tdt
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{# {% endif %} #}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<div class=\"header-cart-total w-full p-tb-40\">
\t\t\t\t\t\t\t\t\t{% for item in panier %}
\t\t\t\t\t\t\t\t\t\t{# {% if app.user.id == item.userId %} #}

\t\t\t\t\t\t\t\t\t\t\t{% set total = total + (item.prixArticle * item.quantite) %}
\t\t\t\t\t\t\t\t\t\t{# {% endif %} #}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\tTotal: dt{{total }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"header-cart-buttons flex-w w-full\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('panier_index')}}\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10\">
\t\t\t\t\t\t\t\t\t\tView Cart
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<a href=\"{{path('panier_check')}}\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10\">

\t\t\t\t\t\t\t\t\t\tCheck Out
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t</div>


\t\t\t\t<!--Fin cart -->

\t\t\t\t<!-- Load more -->
\t\t\t\t<div class=\"flex-c-m flex-w w-full p-t-45\">
\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\tLoad More
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock %}
\t{% block javascripts %}
\t\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t\t<script>
\t\t\tfunction onClickBtnFavoris(event) {

event.preventDefault();

const url = this.href;
const spanCount = this.querySelector('span.js-favori');


axios.get(url).then(function (response) {
const favoriss = response.data.favoris;
spanCount.textContent = favoriss;


});

}
document.querySelectorAll('a.js-favori').forEach(function (link) {


link.addEventListener('click', onClickBtnFavoris);
})
\t\t</script>
\t{% endblock %}
", "shop/index.html.twig", "/home/hp/Symfony/myProject/templates/shop/index.html.twig");
    }
}
