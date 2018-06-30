<?php

/* home/job.html.twig */
class __TwigTemplate_f8340a8e21f1fb321aa87e0701c01f13ecd8ac30dd918ede8a1eee43c0381298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/job.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/job.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/job.html.twig"));

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
    <div class=\"blanc1 job\">
        <div class=\"padding\">
        <h2>Découvrez des expériences authentiques</h2>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 19
            echo "                <div class=\"proposition col-2\">
                    <a href=\"/jobs/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 21
            if ($this->getAttribute($context["job"], "image", array())) {
                // line 22
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/job/" . $this->getAttribute($context["job"], "image", array()))), "html", null, true);
                echo "\" class=\"arronjob\">
                        ";
            } else {
                // line 24
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/peru.jpg"), "html", null, true);
                echo "\" class=\"arronjob\">
                        ";
            }
            // line 26
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "titre", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true);
            echo "</p>
                    ";
            // line 28
            if (($this->getAttribute($context["job"], "type", array()) == "Argent")) {
                // line 29
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/argent-picto.png"), "html", null, true);
                echo "\" class=\"picto\">
                    ";
            }
            // line 31
            echo "                    </a>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
    <div class=\"vertearti\"  style=\"background-image: url(";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fondarticle.png"), "html", null, true);
        echo ");\">
        <h2>Trouvez votre destination</h2>
        <a href=\"#\">
            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/peru.jpg"), "html", null, true);
        echo "\">
            <p>Pérou</p>
        </a>

    </div>
    <div class=\"blanc1 job\">
        <div class=\"padding\">
            <h2>Explorez les chroniques les plus appréciées</h2>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 49
            echo "                <div class=\"proposition col-2\">
                    <a href=\"/jobs/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 51
            if ($this->getAttribute($context["job"], "image", array())) {
                // line 52
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/job/" . $this->getAttribute($context["job"], "image", array()))), "html", null, true);
                echo "\" class=\"arronjob\">
                        ";
            } else {
                // line 54
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/peru.jpg"), "html", null, true);
                echo "\" class=\"arronjob\">
                        ";
            }
            // line 56
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "titre", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true);
            echo "</p>
                    ";
            // line 58
            if (($this->getAttribute($context["job"], "type", array()) == "Argent")) {
                // line 59
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/argent-picto.png"), "html", null, true);
                echo "\" class=\"picto\">
                    ";
            }
            // line 61
            echo "                    ";
            if (($this->getAttribute($context["job"], "type", array()) == "Hébergement")) {
                // line 62
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/lit-picto.png"), "html", null, true);
                echo "\" class=\"picto\">
                    ";
            }
            // line 64
            echo "                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>

    <footer>
        <span class=\"reseaux\">
            <a href=\"https://twitter.com/shareandgoFR\"><img src=\" ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-twitter.svg"), "html", null, true);
        echo "\"></a>
            <a href=\"https://www.instagram.com/shareandgoFR/\"><img src=\" ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-insta.svg"), "html", null, true);
        echo "\"></a>
            <a href=\"https://www.facebook.com/shareandgoFR/\"><img src=\" ";
        // line 73
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
        return "home/job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 73,  226 => 72,  222 => 71,  216 => 67,  208 => 64,  202 => 62,  199 => 61,  193 => 59,  191 => 58,  187 => 57,  182 => 56,  176 => 54,  170 => 52,  168 => 51,  164 => 50,  161 => 49,  157 => 48,  146 => 40,  140 => 37,  136 => 35,  127 => 31,  121 => 29,  119 => 28,  115 => 27,  110 => 26,  104 => 24,  98 => 22,  96 => 21,  92 => 20,  89 => 19,  85 => 18,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <div class=\"blanc1 job\">
        <div class=\"padding\">
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
                    {% if job.type == \"Argent\"  %}
                        <img src=\"{{ asset('image/argent-picto.png') }}\" class=\"picto\">
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
    <div class=\"blanc1 job\">
        <div class=\"padding\">
            <h2>Explorez les chroniques les plus appréciées</h2>
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
                    {% if job.type == \"Argent\"  %}
                        <img src=\"{{ asset('image/argent-picto.png') }}\" class=\"picto\">
                    {% endif %}
                    {% if job.type == \"Hébergement\"  %}
                        <img src=\"{{ asset('image/lit-picto.png') }}\" class=\"picto\">
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

", "home/job.html.twig", "C:\\wamp\\www\\Site\\app\\Resources\\views\\home\\job.html.twig");
    }
}
