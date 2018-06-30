<?php

/* home/article.html.twig */
class __TwigTemplate_2f98ffdeeeec9b709ef0398c8556ee0245adb16c5d774a8b76f1ab0cf2a06fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Share&Go";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!--- Comment appelle-t-on un Pakistanais qui voyage avec un sac à dos ?
 Un Packpacker -->


<div class=\"example-wrapper\" style=\"padding-top: 10vh\">
    <form class=\"form-inline mt-2 mt-md-0\" method=\"get\" action=\"\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"\" aria-label=\"Search\">
        <button type=\"submit\" class=\"loupe\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/search.svg"), "html", null, true);
        echo "\"> </button>
    </form>
    <div class=\"blanc1\">
        <div class=\"padding\">
        <h2>Explorez le monde autrement</h2>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "                <div class=\"proposition col-2\">
                    <a href=\"/articles/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochure/" . $this->getAttribute($context["article"], "image", array()))), "html", null, true);
            echo "\">
                    <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "categorie", array()), "html", null, true);
            echo "</p>
                    ";
            // line 24
            if (($this->getAttribute($context["article"], "categorie", array()) == "A voir absolument ")) {
                // line 25
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-oeil.png"), "html", null, true);
                echo "\" class=\"picto\">
                    ";
            }
            // line 27
            echo "            </a>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
    <div class=\"vertearti\"  style=\"background-image: url(";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fondarticle.png"), "html", null, true);
        echo ");\">
        <h2>Trouvez votre destination</h2>
        <a href=\"#\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/peru.jpg"), "html", null, true);
        echo "\">
            <p>Pérou</p>

        </a>

    </div>
    <div class=\"blanc1\">
        <div class=\"padding\">
            <h2>Explorez les chroniques les plus appréciées</h2>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 46
            echo "
                <div class=\"proposition col-2\">
                    <a href=\"/articles/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochure/" . $this->getAttribute($context["article"], "image", array()))), "html", null, true);
            echo "\">
                    <p>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "categorie", array()), "html", null, true);
            echo "</p>
                    ";
            // line 52
            if (($this->getAttribute($context["article"], "categorie", array()) == "A voir absolument ")) {
                // line 53
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-oeil.png"), "html", null, true);
                echo "\" class=\"picto\">
                    ";
            }
            // line 55
            echo "                    </a>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        </div>

    <footer>
        <span class=\"reseaux\">
            <a href=\"https://twitter.com/shareandgoFR\"><img src=\" ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-twitter.svg"), "html", null, true);
        echo "\"></a>
            <a href=\"https://www.instagram.com/shareandgoFR/\"><img src=\" ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-insta.svg"), "html", null, true);
        echo "\"></a>
            <a href=\"https://www.facebook.com/shareandgoFR/\"><img src=\" ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-fb.svg"), "html", null, true);
        echo "\"></a>
        </span>

    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 66,  199 => 65,  195 => 64,  188 => 59,  179 => 55,  173 => 53,  171 => 52,  167 => 51,  163 => 50,  159 => 49,  155 => 48,  151 => 46,  147 => 45,  135 => 36,  129 => 33,  125 => 31,  116 => 27,  110 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  89 => 19,  85 => 18,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Share&Go{% endblock %}

{% block body %}
    <!--- Comment appelle-t-on un Pakistanais qui voyage avec un sac à dos ?
 Un Packpacker -->


<div class=\"example-wrapper\" style=\"padding-top: 10vh\">
    <form class=\"form-inline mt-2 mt-md-0\" method=\"get\" action=\"\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"\" aria-label=\"Search\">
        <button type=\"submit\" class=\"loupe\"><img src=\"{{ asset('image/search.svg') }}\"> </button>
    </form>
    <div class=\"blanc1\">
        <div class=\"padding\">
        <h2>Explorez le monde autrement</h2>
            {% for article in articles %}
                <div class=\"proposition col-2\">
                    <a href=\"/articles/{{ article.id }}\">
                    <img src=\"{{ asset('uploads/brochure/' ~ article.image) }}\">
                    <p>{{  article.title}}</p>
                    <p>{{ article.categorie }}</p>
                    {% if article.categorie == \"A voir absolument \"  %}
                        <img src=\"{{ asset('image/picto-oeil.png') }}\" class=\"picto\">
                    {% endif %}
            </a>
                </div>

            {% endfor %}
        </div>
    </div>
    <div class=\"vertearti\"  style=\"background-image: url({{ asset('image/fondarticle.png') }});\">
        <h2>Trouvez votre destination</h2>
        <a href=\"#\">
            <img src=\"{{ asset('image/peru.jpg') }}\">
            <p>Pérou</p>

        </a>

    </div>
    <div class=\"blanc1\">
        <div class=\"padding\">
            <h2>Explorez les chroniques les plus appréciées</h2>
            {% for article in articles %}

                <div class=\"proposition col-2\">
                    <a href=\"/articles/{{ article.id }}\">
                    <img src=\"{{ asset('uploads/brochure/' ~ article.image) }}\">
                    <p>{{  article.title}}</p>
                    <p>{{ article.categorie }}</p>
                    {% if article.categorie == \"A voir absolument \"  %}
                        <img src=\"{{ asset('image/picto-oeil.png') }}\" class=\"picto\">
                    {% endif %}
                    </a>
                </div>

            {% endfor %}

        </div>

    <footer>
        <span class=\"reseaux\">
            <a href=\"https://twitter.com/shareandgoFR\"><img src=\" {{ asset('image/picto-twitter.svg') }}\"></a>
            <a href=\"https://www.instagram.com/shareandgoFR/\"><img src=\" {{ asset('image/picto-insta.svg') }}\"></a>
            <a href=\"https://www.facebook.com/shareandgoFR/\"><img src=\" {{ asset('image/picto-fb.svg') }}\"></a>
        </span>

    </footer>
{% endblock %}

", "home/article.html.twig", "C:\\wamp\\www\\Site\\app\\Resources\\views\\home\\article.html.twig");
    }
}
