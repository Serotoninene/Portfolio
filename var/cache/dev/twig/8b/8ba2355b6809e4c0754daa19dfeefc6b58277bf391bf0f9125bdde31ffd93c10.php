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

/* /projects.html.twig */
class __TwigTemplate_ef909c0896e61e02f603f0ad808a22e9683261557cb2644bd5d5294d16803de3 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/projects.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/projects.html.twig", 1);
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
                        <p> Serotoninene is my illustrator alter ego, by day I work as a developer and y night I fight crimes by drawing crazy illustrations. I have conceived a website to present and sell my illustrations to the world. </p>
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
                        <p> Project created hands in hands with Tristan Bochu, my entrepreneur friend :  a social network based on true and humane relations.</p>
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
                        <p> \"Salut.\" was my main project during my bootcamp, it's a fictional collective of 3 artists - illustrators and photographs -  willing to showcase and sell their pieces.</p>
                    </div>
                </div>
                <div class=\"video\">
                    <video width=\"100%\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/video/salut.mov"), "html", null, true);
        echo "\" autoplay loop preload muted
                    ></video>
                </div>
            </div>
        </section>

        ";
        // line 66
        $this->displayBlock('scripts', $context, $blocks);
        // line 70
        echo "    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 67
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/projects.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 68,  177 => 67,  170 => 66,  161 => 70,  159 => 66,  150 => 60,  131 => 44,  110 => 26,  92 => 10,  85 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                        <p> Serotoninene is my illustrator alter ego, by day I work as a developer and y night I fight crimes by drawing crazy illustrations. I have conceived a website to present and sell my illustrations to the world. </p>
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
                        <p> Project created hands in hands with Tristan Bochu, my entrepreneur friend :  a social network based on true and humane relations.</p>
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
                        <p> \"Salut.\" was my main project during my bootcamp, it's a fictional collective of 3 artists - illustrators and photographs -  willing to showcase and sell their pieces.</p>
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

{% endblock body %}", "/projects.html.twig", "/home/alexamp/www/templates/projects.html.twig");
    }
}
