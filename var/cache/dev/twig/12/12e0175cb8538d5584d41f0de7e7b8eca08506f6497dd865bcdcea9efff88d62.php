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

/* index.html.twig */
class __TwigTemplate_f457fb6180a89cf2cf93d9badcc104521cb616f1d4dd1d4bcf2d2e314a7ac7cd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Homepage ";
        
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
            <div class=\"cercle\"></div>
        </div>

        ";
        // line 19
        echo "        <h1 >
            Hello, my name is
            <span class=\"relative\">
                Alex.
                <a class=\"linkedinLogo absolute\" href=\"https://www.linkedin.com/in/alexandre-pujol-333172b3/\">
                    <div></div>
                </a>
            </span> <br> I'm a
            <span class=\"textwrapper relative\">
                <span class = \"text\"> </span>
            </span>
            <br>full stack developer
        </h1>

    </header>


    <main class=\"container \">

        ";
        // line 39
        echo "
        <section class=\"description relative\">

            <div class=\"absolute photoRando\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/photos/photoRando.png"), "html", null, true);
        echo "\" alt=\"Alex en randonnée\" class=\"resp\">
            </div>
            <div class=\"photoToulouse absolute none\">
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/photos/photoToulouse.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"resp\">
            </div>
            <h2 > I am a young developer <br> from <span class=\"toulouse\">Toulouse</span>, France, passionate about web development, eager to learn </h2>
            <div class=\"miniText flex\">
                <p> and create. I also have skills in design and <a href=\"https://www.instagram.com/serotoninene/\">illustration</a>; thanks to my master in marketing and my professional  experiences I learned soft skills and how to work in a dynamic and team. </p>
            </div>

        </section>

        ";
        // line 56
        echo "        <section class=\"skills\">

            <h2>SKILLS</h2>

            ";
        // line 61
        echo "            <div class=\"flex row\" data-aos=\"fade-up\">

                <div class=\"flex\">

                    <h3>Design</h3>
                    <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/design_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>Adobe Suite(Photoshop,Illustrator, XD), Figma, Procreate</p>

                </div>

                <div class=\"flex\">

                    <h3>Front-end</h3>
                    <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/front-end_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>HTML, CSS, SCSS, Javascript, <br> Framework: React</p>

                </div>
            </div>

            ";
        // line 81
        echo "            <div class=\"flex row\" data-aos=\"fade-up\">
                <div class=\"flex\">
                    <h3>Back-end</h3>
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/back-end_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>PHP, MySQL, Apache, Nodejs, <br> Framework : Symfony</p>
                </div>
                <div class=\"flex\">
                    <h3>Others</h3>
                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/others_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>Trilingual (French, English, Spanish), master in marketing and management</p>
                </div>
            </div>

        </section>

    </main>

    ";
        // line 98
        $this->displayBlock('scripts', $context, $blocks);
        // line 103
        echo "
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 99
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/changingLetters.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 101,  229 => 100,  224 => 99,  217 => 98,  208 => 103,  206 => 98,  194 => 89,  186 => 84,  181 => 81,  172 => 74,  161 => 66,  154 => 61,  148 => 56,  136 => 46,  130 => 43,  124 => 39,  103 => 19,  97 => 14,  92 => 10,  85 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Homepage {% endblock title %}

{% block styles %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">
{% endblock styles %}

{% block body %}
<body id=\"home\">
    <header>

        {# ABSOLUTE POSITIONNED DIV : CIRCLE #}
        <div class=\"cercleContainer absolute\" data-aos=\"fade-up\">
            <div class=\"cercle\"></div>
        </div>

        {# -------------- JUMBOTRON -------------- #}
        <h1 >
            Hello, my name is
            <span class=\"relative\">
                Alex.
                <a class=\"linkedinLogo absolute\" href=\"https://www.linkedin.com/in/alexandre-pujol-333172b3/\">
                    <div></div>
                </a>
            </span> <br> I'm a
            <span class=\"textwrapper relative\">
                <span class = \"text\"> </span>
            </span>
            <br>full stack developer
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
            <h2 > I am a young developer <br> from <span class=\"toulouse\">Toulouse</span>, France, passionate about web development, eager to learn </h2>
            <div class=\"miniText flex\">
                <p> and create. I also have skills in design and <a href=\"https://www.instagram.com/serotoninene/\">illustration</a>; thanks to my master in marketing and my professional  experiences I learned soft skills and how to work in a dynamic and team. </p>
            </div>

        </section>

        {# -------------- SKILLS --------------  #}
        <section class=\"skills\">

            <h2>SKILLS</h2>

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
                    <p>HTML, CSS, SCSS, Javascript, <br> Framework: React</p>

                </div>
            </div>

            {# SECOND LINE #}
            <div class=\"flex row\" data-aos=\"fade-up\">
                <div class=\"flex\">
                    <h3>Back-end</h3>
                    <img src=\"{{ asset('assets/icons/back-end_icon.svg') }}\" alt=\"Design Icon\">
                    <p>PHP, MySQL, Apache, Nodejs, <br> Framework : Symfony</p>
                </div>
                <div class=\"flex\">
                    <h3>Others</h3>
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
", "index.html.twig", "/Applications/MAMP/htdocs/notion/templates/index.html.twig");
    }
}
