<?php

/* home/showJob.html.twig */
class __TwigTemplate_27ade52330c307f897becc77b1459a1e56cdfaa4085dfc0e889f679146c570f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/showJob.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/showJob.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/showJob.html.twig"));

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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <article class=\"ecart\">
        <form class=\"form-inline mt-2 mt-md-0\" method=\"get\" action=\"\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"\" aria-label=\"Search\">
            <button type=\"submit\" class=\"loupe\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/search.svg"), "html", null, true);
        echo "\"> </button>
        </form>
        ";
        // line 10
        if ($this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "image", array())) {
            // line 11
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/job/" . $this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "image", array()))), "html", null, true);
            echo "\" class=\"arronjob\">
        ";
        } else {
            // line 13
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/peru.jpg"), "html", null, true);
            echo "\" class=\"arronjob\">
        ";
        }
        // line 15
        echo "    <div class=\"padding\">
        <p class=\"pays\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "pays", array()), "html", null, true);
        echo "</p>
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "titre", array()), "html", null, true);
        echo "</h1>
        <span class=\"info\">
            <span class=\"col-2\">
               <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "nombre", array()), "html", null, true);
        echo " voyageurs maximum</p>
            </span>
        ";
        // line 22
        if (($this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "type", array()) == "Argent")) {
            // line 23
            echo "            <span class=\"col-2\">
                <p>Rémunération incluse</p>
            <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/argent-picto.png"), "html", null, true);
            echo "\" class=\"picto\">
            </span>

        ";
        }
        // line 29
        echo "        ";
        if (($this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "type", array()) == "Hébergement")) {
            // line 30
            echo "            <span class=\"col-2\">
            <p>Hébergement inclus</p>
            <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/lit-picto.png"), "html", null, true);
            echo "\" class=\"picto\">
            </span>
        ";
        }
        // line 35
        echo "        </span>
        <span class=\"info\">
            ";
        // line 37
        if (($this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "wifi", array()) == "oui")) {
            // line 38
            echo "                <span class=\"col-2\">
                <p>Wifi inclus</p>
            </span>
            ";
        }
        // line 42
        echo "            <span class=\"col-2 langue\">
               <p>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "Langue", array()), "html", null, true);
        echo "</p>
            </span>
        </span>
        <p class=\"descript\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["job"] ?? $this->getContext($context, "job")), "description", array()), "html", null, true);
        echo "</p>

        <p>Me contacter: ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>

    </div>
    </article>
    <footer>
        <span class=\"reseaux\">
            <a href=\"https://twitter.com/shareandgoFR\"><img src=\" ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-twitter.svg"), "html", null, true);
        echo "\"></a>
            <a href=\"https://www.instagram.com/shareandgoFR/\"><img src=\" ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/picto-insta.svg"), "html", null, true);
        echo "\"></a>
            <a href=\"https://www.facebook.com/shareandgoFR/\"><img src=\" ";
        // line 56
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
        return "home/showJob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 56,  175 => 55,  171 => 54,  162 => 48,  157 => 46,  151 => 43,  148 => 42,  142 => 38,  140 => 37,  136 => 35,  130 => 32,  126 => 30,  123 => 29,  116 => 25,  112 => 23,  110 => 22,  105 => 20,  99 => 17,  95 => 16,  92 => 15,  86 => 13,  80 => 11,  78 => 10,  73 => 8,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
    <article class=\"ecart\">
        <form class=\"form-inline mt-2 mt-md-0\" method=\"get\" action=\"\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"\" aria-label=\"Search\">
            <button type=\"submit\" class=\"loupe\"><img src=\"{{ asset('image/search.svg') }}\"> </button>
        </form>
        {% if job.image %}
        <img src=\"{{ asset('uploads/job/' ~ job.image) }}\" class=\"arronjob\">
        {% else %}
            <img src=\"{{ asset('image/peru.jpg' ) }}\" class=\"arronjob\">
        {% endif %}
    <div class=\"padding\">
        <p class=\"pays\">{{ job.pays }}</p>
        <h1>{{ job.titre }}</h1>
        <span class=\"info\">
            <span class=\"col-2\">
               <p>{{ job.nombre }} voyageurs maximum</p>
            </span>
        {%  if job.type == 'Argent' %}
            <span class=\"col-2\">
                <p>Rémunération incluse</p>
            <img src=\"{{ asset('image/argent-picto.png') }}\" class=\"picto\">
            </span>

        {%  endif %}
        {%  if job.type == 'Hébergement' %}
            <span class=\"col-2\">
            <p>Hébergement inclus</p>
            <img src=\"{{ asset('image/lit-picto.png') }}\" class=\"picto\">
            </span>
        {%  endif %}
        </span>
        <span class=\"info\">
            {%  if job.wifi == 'oui' %}
                <span class=\"col-2\">
                <p>Wifi inclus</p>
            </span>
            {%  endif %}
            <span class=\"col-2 langue\">
               <p>{{ job.Langue }}</p>
            </span>
        </span>
        <p class=\"descript\">{{ job.description }}</p>

        <p>Me contacter: {{ user.username }}</p>

    </div>
    </article>
    <footer>
        <span class=\"reseaux\">
            <a href=\"https://twitter.com/shareandgoFR\"><img src=\" {{ asset('image/picto-twitter.svg') }}\"></a>
            <a href=\"https://www.instagram.com/shareandgoFR/\"><img src=\" {{ asset('image/picto-insta.svg') }}\"></a>
            <a href=\"https://www.facebook.com/shareandgoFR/\"><img src=\" {{ asset('image/picto-fb.svg') }}\"></a>
        </span>

    </footer>
{% endblock %}

", "home/showJob.html.twig", "C:\\wamp\\www\\Site\\app\\Resources\\views\\home\\showJob.html.twig");
    }
}
