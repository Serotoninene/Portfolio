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

/* /en/index.html.twig */
class __TwigTemplate_3ccfd1444319fe80bf2acc69ee93fa39b3183b09b08d5d8379a8516330eaa47c extends Template
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
        return "en/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/en/index.html.twig"));

        $this->parent = $this->loadTemplate("en/base.html.twig", "/en/index.html.twig", 1);
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
    <div class=\"loader\">
        <h2 class = \"loader-percentage\"></h2>
    </div>

    <header>

        ";
        // line 18
        echo "        <div class=\"cercleContainer absolute\" data-aos=\"fade-up\">
            <div class=\"cercle resp\"></div>
        </div>

        ";
        // line 23
        echo "        <h1 >
            Hello, my name is <br id = \"br\" class=\"br\">
            <span class=\"relative\">
                Alex.
                <a class=\"linkedinLogo absolute\" target=\"_blank\" href=\"https://www.linkedin.com/in/alexandre-pujol-333172b3/\">
                    <div></div>
                </a>
            </span> <br> I'm a <br class=\"br\">
            <span class=\"textwrapper relative\">
                <span class = \"text\"> </span>
            </span>
            <br>full stack developer
        </h1>
        

    </header>


    <main class=\"container \">

        ";
        // line 44
        echo "
        <section class=\"description relative\">

            <div class=\"absolute photoRando\">
                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/photos/photoRando.png"), "html", null, true);
        echo "\" id=\"rando\" alt=\"Alex en randonnée\" class=\"resp\">
            </div>
            <div class=\"photoToulouse absolute none\">
                <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/photos/photoToulouse.jpg"), "html", null, true);
        echo "\" alt=\"Toulouse\" id=\"toulouse\" class=\"resp\">
            </div>
            <h2 > I am a young developer <br> from <span class=\"toulouse\">Toulouse</span>, France, passionate about web development and eager to learn </h2>
            <div class=\"miniText flex\">
                <p> This is me. Okay not in my work outfit but in the same mood for discoveries, sometimes I draw <a target=\"_blank\" href=\"https://www.instagram.com/serotoninene/\">illustrations</a> and I'm a terrible cook.  </p>
            </div>

        </section>

        ";
        // line 61
        echo "        <section class=\"skills\">

            <h2>SKILLS</h2>

            ";
        // line 66
        echo "            <div class=\"flex row\" data-aos=\"fade-up\">

                <div class=\"flex\">

                    <h3>Design</h3>
                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/design_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>Adobe Suite(Photoshop,Illustrator, XD), Figma, Procreate</p>

                </div>

                <div class=\"flex\">

                    <h3>Front-end</h3>
                    <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/front-end_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>HTML, CSS, SCSS, Javascript, <br>ReactJS, GSAP</p>

                </div>
            </div>

            ";
        // line 86
        echo "            <div class=\"flex row\" data-aos=\"fade-up\">
                <div class=\"flex\">
                    <h3>Back-end</h3>
                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/back-end_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>PHP, MySQL, Apache, <br> Nodejs, Symfony</p>
                </div>
                <div class=\"flex\">
                    <h3>Others</h3>
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/others_icon.svg"), "html", null, true);
        echo "\" alt=\"Design Icon\">
                    <p>Trilingual (French, English, Spanish), master in marketing and management</p>
                </div>
            </div>

        </section>

    </main>

    ";
        // line 103
        $this->displayBlock('scripts', $context, $blocks);
        // line 109
        echo "
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 104
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/changingLetters.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/loader.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/en/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 107,  238 => 106,  234 => 105,  229 => 104,  222 => 103,  213 => 109,  211 => 103,  199 => 94,  191 => 89,  186 => 86,  177 => 79,  166 => 71,  159 => 66,  153 => 61,  141 => 51,  135 => 48,  129 => 44,  107 => 23,  101 => 18,  92 => 10,  85 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'en/base.html.twig' %}

{% block title %} Homepage {% endblock title %}

{% block styles %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">
{% endblock styles %}

{% block body %}
<body id=\"home\">
    <div class=\"loader\">
        <h2 class = \"loader-percentage\"></h2>
    </div>

    <header>

        {# ABSOLUTE POSITIONNED DIV : CIRCLE #}
        <div class=\"cercleContainer absolute\" data-aos=\"fade-up\">
            <div class=\"cercle resp\"></div>
        </div>

        {# -------------- JUMBOTRON -------------- #}
        <h1 >
            Hello, my name is <br id = \"br\" class=\"br\">
            <span class=\"relative\">
                Alex.
                <a class=\"linkedinLogo absolute\" target=\"_blank\" href=\"https://www.linkedin.com/in/alexandre-pujol-333172b3/\">
                    <div></div>
                </a>
            </span> <br> I'm a <br class=\"br\">
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
                <img src=\"{{ asset('assets/photos/photoRando.png') }}\" id=\"rando\" alt=\"Alex en randonnée\" class=\"resp\">
            </div>
            <div class=\"photoToulouse absolute none\">
                <img src=\"{{ asset('assets/photos/photoToulouse.jpg') }}\" alt=\"Toulouse\" id=\"toulouse\" class=\"resp\">
            </div>
            <h2 > I am a young developer <br> from <span class=\"toulouse\">Toulouse</span>, France, passionate about web development and eager to learn </h2>
            <div class=\"miniText flex\">
                <p> This is me. Okay not in my work outfit but in the same mood for discoveries, sometimes I draw <a target=\"_blank\" href=\"https://www.instagram.com/serotoninene/\">illustrations</a> and I'm a terrible cook.  </p>
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
        <script src=\"{{ asset('js/loader.js') }}\"></script>
    {% endblock scripts %}

</body>
{% endblock body %}
", "/en/index.html.twig", "/Applications/MAMP/htdocs/Portfolio/templates/en/index.html.twig");
    }
}
