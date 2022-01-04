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

/* /fr/projects_fr.html.twig */
class __TwigTemplate_d38c1f3784cd921771d4a9ef6e668f057533a91378f6dbad7a2faf5b01a3d849 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "fr/base_fr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/fr/projects_fr.html.twig"));

        $this->parent = $this->loadTemplate("fr/base_fr.html.twig", "/fr/projects_fr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " My Projects ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <body id=\"projects\">

        <section class=\"container\">
            <hr>
            <div class=\"row\">
                <div class = \"description flex\">
                    <h1> SEROTONINENE</h1>

                    <div>
                        <h2> DESCRIPTION</h2>
                        <p> Serotoninene est mon alter ego illustrateur, la journée je travaille en tant que développeur web et la nuit, je combats le crime en dessinant des illustrations. J'ai conçu ce site web pour présenter et vendre certaines de mes oeuvres. </p>
                    </div>
                </div>

                <div class=\"video\">
                    <video width=\"100%\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/video/serotoninene.mp4"), "html", null, true);
        echo "\" autoplay loop preload muted
                    ></video>
                </div>
            </div>
        </section>
        <section class=\"container\">
            <hr>
            <div class=\"row\">
                <div class = \"description flex\">
                    <h1> 150 </h1>

                    <div>
                        <h2> DESCRIPTION</h2>
                        <p> Projet créé main dans la main avec mon ami entrepreneur Tristan Bochu : un réseau social mettant en avant les relations sincères et humaines.</p>
                    </div>
                </div>

                <div class=\"video flex\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/photos/150_presentation2.png"), "html", null, true);
        echo "\" alt=\"150 Project\" class=\"resp\">
                </div>
            </div>
        </section>
        <section class=\"container\">
            <hr>
            <div class=\"row\">
                <div class = \"description flex\">
                    <h1> SALUT.</h1>

                    <div>
                        <h2> DESCRIPTION</h2>
                        <p> Mon projet fil rouge durant mon bootcamp, \"Salut.\" est un collectif fictionnel de 3 artistes - illustrateurs et photographes - désirant un portfolio pour présenter et vendre leurs oeuvres. </p>

                    </div>
                </div>
                <div class=\"video\">
                    <video width=\"100%\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/video/salut.mov"), "html", null, true);
        echo "\" autoplay loop preload muted
                    ></video>
                </div>
            </div>
        </section>

        ";
        // line 67
        $this->displayBlock('scripts', $context, $blocks);
        // line 71
        echo "    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 67
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 68
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/projects.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/fr/projects_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 69,  178 => 68,  171 => 67,  162 => 71,  160 => 67,  151 => 61,  131 => 44,  110 => 26,  92 => 10,  85 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'fr/base_fr.html.twig' %}

{% block title %} My Projects {% endblock title %}

{% block styles %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">
{% endblock styles %}

{% block body %}

    <body id=\"projects\">

        <section class=\"container\">
            <hr>
            <div class=\"row\">
                <div class = \"description flex\">
                    <h1> SEROTONINENE</h1>

                    <div>
                        <h2> DESCRIPTION</h2>
                        <p> Serotoninene est mon alter ego illustrateur, la journée je travaille en tant que développeur web et la nuit, je combats le crime en dessinant des illustrations. J'ai conçu ce site web pour présenter et vendre certaines de mes oeuvres. </p>
                    </div>
                </div>

                <div class=\"video\">
                    <video width=\"100%\" src=\"{{ asset('assets/video/serotoninene.mp4') }}\" autoplay loop preload muted
                    ></video>
                </div>
            </div>
        </section>
        <section class=\"container\">
            <hr>
            <div class=\"row\">
                <div class = \"description flex\">
                    <h1> 150 </h1>

                    <div>
                        <h2> DESCRIPTION</h2>
                        <p> Projet créé main dans la main avec mon ami entrepreneur Tristan Bochu : un réseau social mettant en avant les relations sincères et humaines.</p>
                    </div>
                </div>

                <div class=\"video flex\">
                    <img src=\"{{ asset('assets/photos/150_presentation2.png') }}\" alt=\"150 Project\" class=\"resp\">
                </div>
            </div>
        </section>
        <section class=\"container\">
            <hr>
            <div class=\"row\">
                <div class = \"description flex\">
                    <h1> SALUT.</h1>

                    <div>
                        <h2> DESCRIPTION</h2>
                        <p> Mon projet fil rouge durant mon bootcamp, \"Salut.\" est un collectif fictionnel de 3 artistes - illustrateurs et photographes - désirant un portfolio pour présenter et vendre leurs oeuvres. </p>

                    </div>
                </div>
                <div class=\"video\">
                    <video width=\"100%\" src=\"{{ asset('assets/video/salut.mov') }}\" autoplay loop preload muted
                    ></video>
                </div>
            </div>
        </section>

        {% block scripts %}
            <script src=\"{{ asset('js/aos.js') }}\"></script>
            <script src=\"{{ asset('js/projects.js') }}\"></script>
        {% endblock scripts %}
    </body>

{% endblock body %}", "/fr/projects_fr.html.twig", "/home/alexamp/www/templates/fr/projects_fr.html.twig");
    }
}
