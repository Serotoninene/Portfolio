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

/* /fr/index_fr.html.twig */
class __TwigTemplate_e6a92caf0e77a469722e07b8ab29619f5fd01028ffdb22424f9d8d52f457533c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/fr/index_fr.html.twig"));

        $this->parent = $this->loadTemplate("fr/base_fr.html.twig", "/fr/index_fr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
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
        echo "<body id=\"home\">
    <header>

        ";
        // line 14
        echo "        <div class=\"cercleContainer absolute\" data-aos=\"fade-up\">
            <div class=\"cercle resp\"></div>
        </div>

        ";
        // line 19
        echo "        <h1 >
            Bonjour ! Je suis <br class=\"br\">
            <span class=\"relative\">
                Alex.
                <a class=\"linkedinLogo absolute\" target=\"_blank\" href=\"https://www.linkedin.com/in/alexandre-pujol-333172b3/\">
                    <div></div>
                </a>
            </span> <br> Un jeune <br> fullstack développeur

        </h1>

    </header>


    <main class=\"container \">

        ";
        // line 36
        echo "
        <section class=\"description relative\">

            <div class=\"absolute photoRando\">
                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/photos/photoRando.png"), "html", null, true);
        echo "\" alt=\"Alex en randonnée\" class=\"resp\">
            </div>
            <div class=\"photoToulouse absolute none\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/photos/photoToulouse.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"resp\">
            </div>
            <h2 > Je suis un jeune développeur<br> de  <span class=\"toulouse\">Toulouse</span> passionné et motivé</h2>
            <div class=\"miniText flex\">
                <p> Me voici prêt à conquérir les sommets des mondes du développement et du design web,  à mes heures perdues, je dessines également des <a target=\"_blank\" href=\"https://www.instagram.com/serotoninene/\">illustrations</a> :) </p>

            </div>

        </section>

        ";
        // line 54
        echo "        <section class=\"skills\">
            <br> <br> <br> <br>
            <h2>COMPÉTENCES</h2>

            ";
        // line 59
        echo "            <div class=\"flex row\" data-aos=\"fade-up\">

                <div class=\"flex\">

                    <h3>Design</h3>
                    <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/design_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>Adobe Suite(Photoshop,Illustrator, XD), Figma, Procreate</p>

                </div>

                <div class=\"flex\">

                    <h3>Front-end</h3>
                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/front-end_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>HTML, CSS, SCSS, Javascript, <br>ReactJS, GSAP</p>

                </div>
            </div>

            ";
        // line 79
        echo "            <div class=\"flex row\" data-aos=\"fade-up\">
                <div class=\"flex\">
                    <h3>Back-end</h3>
                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/back-end_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>PHP, MySQL, Apache, <br> Nodejs, Symfony</p>
                </div>
                <div class=\"flex\">
                    <h3>Autre</h3>
                    <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/others_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>Trilingual (French, English, Spanish), master in marketing and management</p>
                </div>
            </div>

        </section>

    </main>

    ";
        // line 96
        $this->displayBlock('scripts', $context, $blocks);
        // line 101
        echo "
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 97
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/changingLetters.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/fr/index_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 99,  227 => 98,  222 => 97,  215 => 96,  206 => 101,  204 => 96,  192 => 87,  184 => 82,  179 => 79,  170 => 72,  159 => 64,  152 => 59,  146 => 54,  133 => 43,  127 => 40,  121 => 36,  103 => 19,  97 => 14,  92 => 10,  85 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'fr/base_fr.html.twig' %}

{% block title %} Accueil {% endblock title %}

{% block styles %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">
{% endblock styles %}

{% block body %}
<body id=\"home\">
    <header>

        {# ABSOLUTE POSITIONNED DIV : CIRCLE #}
        <div class=\"cercleContainer absolute\" data-aos=\"fade-up\">
            <div class=\"cercle resp\"></div>
        </div>

        {# -------------- JUMBOTRON -------------- #}
        <h1 >
            Bonjour ! Je suis <br class=\"br\">
            <span class=\"relative\">
                Alex.
                <a class=\"linkedinLogo absolute\" target=\"_blank\" href=\"https://www.linkedin.com/in/alexandre-pujol-333172b3/\">
                    <div></div>
                </a>
            </span> <br> Un jeune <br> fullstack développeur

        </h1>

    </header>


    <main class=\"container \">

        {# -------------- DESCRIPTION --------------  #}

        <section class=\"description relative\">

            <div class=\"absolute photoRando\">
                <img src=\"{{ asset('assets/photos/photoRando.png') }}\" alt=\"Alex en randonnée\" class=\"resp\">
            </div>
            <div class=\"photoToulouse absolute none\">
                <img src=\"{{ asset('assets/photos/photoToulouse.jpg') }}\" alt=\"\" class=\"resp\">
            </div>
            <h2 > Je suis un jeune développeur<br> de  <span class=\"toulouse\">Toulouse</span> passionné et motivé</h2>
            <div class=\"miniText flex\">
                <p> Me voici prêt à conquérir les sommets des mondes du développement et du design web,  à mes heures perdues, je dessines également des <a target=\"_blank\" href=\"https://www.instagram.com/serotoninene/\">illustrations</a> :) </p>

            </div>

        </section>

        {# -------------- SKILLS --------------  #}
        <section class=\"skills\">
            <br> <br> <br> <br>
            <h2>COMPÉTENCES</h2>

            {# FIRST LINE #}
            <div class=\"flex row\" data-aos=\"fade-up\">

                <div class=\"flex\">

                    <h3>Design</h3>
                    <img src=\"{{ asset('assets/icons/design_icon.svg') }}\" alt=\"Design Icon\">
                    <p>Adobe Suite(Photoshop,Illustrator, XD), Figma, Procreate</p>

                </div>

                <div class=\"flex\">

                    <h3>Front-end</h3>
                    <img src=\"{{ asset('assets/icons/front-end_icon.svg') }}\" alt=\"Design Icon\">
                    <p>HTML, CSS, SCSS, Javascript, <br>ReactJS, GSAP</p>

                </div>
            </div>

            {# SECOND LINE #}
            <div class=\"flex row\" data-aos=\"fade-up\">
                <div class=\"flex\">
                    <h3>Back-end</h3>
                    <img src=\"{{ asset('assets/icons/back-end_icon.svg') }}\" alt=\"Design Icon\">
                    <p>PHP, MySQL, Apache, <br> Nodejs, Symfony</p>
                </div>
                <div class=\"flex\">
                    <h3>Autre</h3>
                    <img src=\"{{ asset('assets/icons/others_icon.svg') }}\" alt=\"Design Icon\">
                    <p>Trilingual (French, English, Spanish), master in marketing and management</p>
                </div>
            </div>

        </section>

    </main>

    {% block scripts %}
        <script src=\"{{ asset('js/changingLetters.js') }}\"></script>
        <script src=\"{{ asset('js/aos.js') }}\"></script>
        <script src=\"{{ asset('js/index.js') }}\"></script>
    {% endblock scripts %}

</body>
{% endblock body %}
", "/fr/index_fr.html.twig", "/home/alexamp/www/templates/fr/index_fr.html.twig");
    }
}
