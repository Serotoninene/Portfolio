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

/* en/base.html.twig */
class __TwigTemplate_19c2b2a934ef6595d7d0295096fc658edfb3693e551322594173931f43783140 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en/base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title></title>


    <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logos/shuriIcon.svg"), "html", null, true);
        echo "\" type=\"image/icon type\">
    <link rel=\"stylesheet\" href= \"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 14
        $this->displayBlock('styles', $context, $blocks);
        // line 15
        echo "
    <style>
        @font-face {
            font-family: \"futura\";
            src: url('";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/Futura_Medium.ttf"), "html", null, true);
        echo "');
            font-weight: 400;
        }

        @font-face {
            font-family: \"futura\";
            src: url('";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/Futura_Heavy.ttf"), "html", null, true);
        echo "');
            font-weight: bold;
        }

        @font-face {
            font-family: \"morison\";
            src: url('";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/Morison-Light.otf"), "html", null, true);
        echo "');
            font-weight: 400;
        }
    </style>

</head>


";
        // line 40
        echo "
<navbar class=\"flex container\">
    <div class = \"logoSite\">
        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logos/shuriIcon.svg"), "html", null, true);
        echo "\" alt=\"Logo du Site\" class=\"resp\"> </a>
    </div>


    <ul class=\"flex\">
        <li> <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects");
        echo "\">PROJECTS</a> </li>
        <li> <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume");
        echo "\">RESUME</a> </li>
        <li> <a href=\"mailto:pujol.alexandre@hotmail.fr\">CONTACT</a></li>
    </ul>


    <p><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">En</a> - <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage_fr");
        echo "\">Fr</a></p>
</navbar>


        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
    <footer>

        <ul class=\"flex\" data-aos=\"fade-up\">
            <li>
                <a href=\"https://github.com/Serotoninene\">GITHUB</a>
            </li>   <li>
                <a href=\"https://www.instagram.com/serotoninene/\">INSTAGRAM</a>
            </li>   <li>
                <a href=\"https://www.linkedin.com/in/alexandre-pujol-333172b3/\">LINKEDIN</a>
            </li>   <li>
                <a href=\"#\">BEHANCE</a>
            </li>
        </ul>

    </footer>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('scripts', $context, $blocks);
        // line 61
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "en/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 60,  188 => 61,  186 => 60,  183 => 59,  176 => 58,  163 => 14,  139 => 62,  137 => 58,  128 => 54,  120 => 49,  116 => 48,  106 => 43,  101 => 40,  90 => 31,  81 => 25,  72 => 19,  66 => 15,  64 => 14,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title></title>


    <link rel=\"icon\" href=\"{{ asset('assets/logos/shuriIcon.svg') }}\" type=\"image/icon type\">
    <link rel=\"stylesheet\" href= \"{{ asset( 'css/style.css' ) }}\">
    {% block styles %} {% endblock styles %}

    <style>
        @font-face {
            font-family: \"futura\";
            src: url('{{asset('assets/fonts/Futura_Medium.ttf')}}');
            font-weight: 400;
        }

        @font-face {
            font-family: \"futura\";
            src: url('{{asset('assets/fonts/Futura_Heavy.ttf')}}');
            font-weight: bold;
        }

        @font-face {
            font-family: \"morison\";
            src: url('{{asset('assets/fonts/Morison-Light.otf')}}');
            font-weight: 400;
        }
    </style>

</head>


{#NAVBAR#}

<navbar class=\"flex container\">
    <div class = \"logoSite\">
        <a href=\"{{ path('homepage') }}\"> <img src=\"{{ asset('assets/logos/shuriIcon.svg') }}\" alt=\"Logo du Site\" class=\"resp\"> </a>
    </div>


    <ul class=\"flex\">
        <li> <a href=\"{{ path('projects') }}\">PROJECTS</a> </li>
        <li> <a href=\"{{ path('resume') }}\">RESUME</a> </li>
        <li> <a href=\"mailto:pujol.alexandre@hotmail.fr\">CONTACT</a></li>
    </ul>


    <p><a href=\"{{ path('homepage') }}\">En</a> - <a href=\"{{ path('homepage_fr') }}\">Fr</a></p>
</navbar>


        {% block body %}

        {% block scripts %} {% endblock scripts %}
        {% endblock %}

    <footer>

        <ul class=\"flex\" data-aos=\"fade-up\">
            <li>
                <a href=\"https://github.com/Serotoninene\">GITHUB</a>
            </li>   <li>
                <a href=\"https://www.instagram.com/serotoninene/\">INSTAGRAM</a>
            </li>   <li>
                <a href=\"https://www.linkedin.com/in/alexandre-pujol-333172b3/\">LINKEDIN</a>
            </li>   <li>
                <a href=\"#\">BEHANCE</a>
            </li>
        </ul>

    </footer>
</html>
", "en/base.html.twig", "/home/alexamp/www/templates/en/base.html.twig");
    }
}
