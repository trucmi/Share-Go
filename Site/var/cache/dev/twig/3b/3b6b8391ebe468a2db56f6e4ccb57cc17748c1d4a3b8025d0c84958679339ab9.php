<?php

/* home/index.html.twig */
class __TwigTemplate_e1542754a16e849055e6821f9578d39b5e9a0ab3b28d46c037ef918dee12b3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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


<div class=\"example-wrapper\">
    <!--début de la div vidéo -->
    <div class=\"video\">
        <video autoplay loop poster=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/Capture.PNG"), "html", null, true);
        echo "\" id=\"bgvid\">
            <source src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/image/Backgroundmobil.webm"), "html", null, true);
        echo "\" type=\"video/webm\">
            <source src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/image/Backgroundmobil.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
        </video>
        <h1 class=\" col-4\">Vivez des expériences uniques à travers la culture locale</h1>
        <form class=\"form-inline mt-2 mt-md-0\" method=\"get\" action=\"\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"\" aria-label=\"Search\">
            <button type=\"submit\" class=\"loupe\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/search.svg"), "html", null, true);
        echo "\"> </button>
        </form>

    </div>
    <!--fin de la div vidéo-->
    <!-- début de la partie blanche -->
        <div class=\"blanc\">
            <h2>Découvrez des expériences authentiques</h2>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 29
            echo "                <div class=\"proposition col-2\">
                    <a href=\"/jobs/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 31
            if ($this->getAttribute($context["job"], "image", array())) {
                // line 32
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/job/" . $this->getAttribute($context["job"], "image", array()))), "html", null, true);
                echo "\" class=\"arronjob\">
                        ";
            } else {
                // line 34
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/peru.jpg"), "html", null, true);
                echo "\" class=\"arronjob\">
                        ";
            }
            // line 36
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "titre", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true);
            echo "</p>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
    <!-- fin de la partie blanche -->
    <!-- début de la partie verte -->
    <div class=\"verte\" style=\"background-image: url(";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/partieverte.png"), "html", null, true);
        echo ");\">
        <div class=\"padding\">
        <h2>Explorez le monde autrement</h2>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 48
            echo "
                <div class=\"proposition col-2\">
                    <a href=\"/articles/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochure/" . $this->getAttribute($context["article"], "image", array()))), "html", null, true);
            echo "\">
                    <p>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "categorie", array()), "html", null, true);
            echo "</p>
                    </a>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </div>
    </div>
    <!-- fin de la partie verte -->
    <!-- début inscrit -->
    ";
        // line 62
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 63
            echo "    <div class=\"inscrit\">
        <h2>S'inscrire</h2>
        <p>Le bonheur n’est réel que lorsqu’il est partagé.</p>
        <p>Partagez votre culture au delà de vos terres.</p>
            <p>Je rejoins l’aventure :</p>
<div class=\"marge\">
        <div class=\"arrondi\">
            <a href=\"/add_backpacker\"><p>En tant que voyageur</p></a>
        </div>
        <div class=\"arrondi\">
            <a href=\"/add_host\"><p>En tant qu’hôte</p></a>
        </div>
</div>
        ";
        }
        // line 77
        echo "        <script type=\"text/javascript\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.fr"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fr"), "html", null, true);
        echo "\"></script>
    <!-- fin de la partie verte -->
</div>
</div>
    <footer>
        <span class=\"reseaux\">
            <a href=\"https://twitter.com/shareandgoFR\"><img src=\" ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-twitter.svg"), "html", null, true);
        echo "\"></a>
            <a href=\"https://www.instagram.com/shareandgoFR/\"><img src=\" ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-insta.svg"), "html", null, true);
        echo "\"></a>
            <a href=\"https://www.facebook.com/shareandgoFR/\"><img src=\" ";
        // line 86
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 86,  228 => 85,  224 => 84,  215 => 78,  210 => 77,  194 => 63,  192 => 62,  186 => 58,  175 => 53,  171 => 52,  167 => 51,  163 => 50,  159 => 48,  155 => 47,  149 => 44,  144 => 41,  134 => 37,  129 => 36,  123 => 34,  117 => 32,  115 => 31,  111 => 30,  108 => 29,  104 => 28,  93 => 20,  85 => 15,  81 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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


<div class=\"example-wrapper\">
    <!--début de la div vidéo -->
    <div class=\"video\">
        <video autoplay loop poster=\"{{ asset('image/Capture.PNG') }}\" id=\"bgvid\">
            <source src=\"{{ asset('../web/image/Backgroundmobil.webm') }}\" type=\"video/webm\">
            <source src=\"{{ asset('../web/image/Backgroundmobil.mp4') }}\" type=\"video/mp4\">
        </video>
        <h1 class=\" col-4\">Vivez des expériences uniques à travers la culture locale</h1>
        <form class=\"form-inline mt-2 mt-md-0\" method=\"get\" action=\"\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"\" aria-label=\"Search\">
            <button type=\"submit\" class=\"loupe\"><img src=\"{{ asset('image/search.svg') }}\"> </button>
        </form>

    </div>
    <!--fin de la div vidéo-->
    <!-- début de la partie blanche -->
        <div class=\"blanc\">
            <h2>Découvrez des expériences authentiques</h2>
            {% for job in jobs %}
                <div class=\"proposition col-2\">
                    <a href=\"/jobs/{{ job.id }}\">
                        {% if job.image %}
                            <img src=\"{{ asset('uploads/job/' ~ job.image) }}\" class=\"arronjob\">
                        {% else %}
                            <img src=\"{{ asset('image/peru.jpg' ) }}\" class=\"arronjob\">
                        {% endif %}
                    <p>{{  job.titre}}</p>
                    <p>{{ job.type }}</p>
                    </a>
                </div>
            {% endfor %}
            </div>
    <!-- fin de la partie blanche -->
    <!-- début de la partie verte -->
    <div class=\"verte\" style=\"background-image: url({{ asset('image/partieverte.png') }});\">
        <div class=\"padding\">
        <h2>Explorez le monde autrement</h2>
            {% for article in articles %}

                <div class=\"proposition col-2\">
                    <a href=\"/articles/{{ article.id }}\">
                    <img src=\"{{ asset('uploads/brochure/' ~ article.image) }}\">
                    <p>{{  article.title}}</p>
                    <p>{{ article.categorie }}</p>
                    </a>
                </div>

            {% endfor %}
        </div>
    </div>
    <!-- fin de la partie verte -->
    <!-- début inscrit -->
    {% if is_granted('ROLE_USER') == false %}
    <div class=\"inscrit\">
        <h2>S'inscrire</h2>
        <p>Le bonheur n’est réel que lorsqu’il est partagé.</p>
        <p>Partagez votre culture au delà de vos terres.</p>
            <p>Je rejoins l’aventure :</p>
<div class=\"marge\">
        <div class=\"arrondi\">
            <a href=\"/add_backpacker\"><p>En tant que voyageur</p></a>
        </div>
        <div class=\"arrondi\">
            <a href=\"/add_host\"><p>En tant qu’hôte</p></a>
        </div>
</div>
        {% endif %}
        <script type=\"text/javascript\" href=\"{{ asset('assets/js/app.fr') }}\"></script>
        <script type=\"text/javascript\" href=\"{{ asset('assets/js/jquery.fr') }}\"></script>
    <!-- fin de la partie verte -->
</div>
</div>
    <footer>
        <span class=\"reseaux\">
            <a href=\"https://twitter.com/shareandgoFR\"><img src=\" {{ asset('image/picto-twitter.svg') }}\"></a>
            <a href=\"https://www.instagram.com/shareandgoFR/\"><img src=\" {{ asset('image/picto-insta.svg') }}\"></a>
            <a href=\"https://www.facebook.com/shareandgoFR/\"><img src=\" {{ asset('image/picto-fb.svg') }}\"></a>
        </span>

    </footer>
{% endblock %}

", "home/index.html.twig", "C:\\wamp\\www\\Site\\app\\Resources\\views\\home\\index.html.twig");
    }
}
