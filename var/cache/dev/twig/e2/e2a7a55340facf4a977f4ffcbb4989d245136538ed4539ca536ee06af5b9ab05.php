<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_73754aa4462a1f4c9aa448d4fce2efdc3dd9211c8c7dbc8e11ee43021a36e282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d5aab35d456f69d61fc0d949240b990302b0e126ec3bf62d7cf33de64c7c355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5aab35d456f69d61fc0d949240b990302b0e126ec3bf62d7cf33de64c7c355->enter($__internal_0d5aab35d456f69d61fc0d949240b990302b0e126ec3bf62d7cf33de64c7c355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6976bb5f828d37d10e45245045e929a556ea0561f55fab0a9d47d065d8967335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6976bb5f828d37d10e45245045e929a556ea0561f55fab0a9d47d065d8967335->enter($__internal_6976bb5f828d37d10e45245045e929a556ea0561f55fab0a9d47d065d8967335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0d5aab35d456f69d61fc0d949240b990302b0e126ec3bf62d7cf33de64c7c355->leave($__internal_0d5aab35d456f69d61fc0d949240b990302b0e126ec3bf62d7cf33de64c7c355_prof);

        
        $__internal_6976bb5f828d37d10e45245045e929a556ea0561f55fab0a9d47d065d8967335->leave($__internal_6976bb5f828d37d10e45245045e929a556ea0561f55fab0a9d47d065d8967335_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63250c7aa909fd471e43ae42abdb7ad1e14b5cfcad4dea1112caa96dbec44e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63250c7aa909fd471e43ae42abdb7ad1e14b5cfcad4dea1112caa96dbec44e34->enter($__internal_63250c7aa909fd471e43ae42abdb7ad1e14b5cfcad4dea1112caa96dbec44e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9ce71f95f29e69a7acaf8b42a295aa5e1489de20171786298ab9a3b578c414f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ce71f95f29e69a7acaf8b42a295aa5e1489de20171786298ab9a3b578c414f->enter($__internal_c9ce71f95f29e69a7acaf8b42a295aa5e1489de20171786298ab9a3b578c414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c9ce71f95f29e69a7acaf8b42a295aa5e1489de20171786298ab9a3b578c414f->leave($__internal_c9ce71f95f29e69a7acaf8b42a295aa5e1489de20171786298ab9a3b578c414f_prof);

        
        $__internal_63250c7aa909fd471e43ae42abdb7ad1e14b5cfcad4dea1112caa96dbec44e34->leave($__internal_63250c7aa909fd471e43ae42abdb7ad1e14b5cfcad4dea1112caa96dbec44e34_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_77b0b0997d7a701e009f82abf855c45c2d69187193071b1738b9dca2cb827feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b0b0997d7a701e009f82abf855c45c2d69187193071b1738b9dca2cb827feb->enter($__internal_77b0b0997d7a701e009f82abf855c45c2d69187193071b1738b9dca2cb827feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f9ac0ac8273fa51151e82498b4528b9a480297620466195a76006dbeb370466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9ac0ac8273fa51151e82498b4528b9a480297620466195a76006dbeb370466->enter($__internal_1f9ac0ac8273fa51151e82498b4528b9a480297620466195a76006dbeb370466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1f9ac0ac8273fa51151e82498b4528b9a480297620466195a76006dbeb370466->leave($__internal_1f9ac0ac8273fa51151e82498b4528b9a480297620466195a76006dbeb370466_prof);

        
        $__internal_77b0b0997d7a701e009f82abf855c45c2d69187193071b1738b9dca2cb827feb->leave($__internal_77b0b0997d7a701e009f82abf855c45c2d69187193071b1738b9dca2cb827feb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f1e1096c9e5fff704fb064febb1ba827acea5259c0e4d0c23d4d861c5b87aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1e1096c9e5fff704fb064febb1ba827acea5259c0e4d0c23d4d861c5b87aca->enter($__internal_3f1e1096c9e5fff704fb064febb1ba827acea5259c0e4d0c23d4d861c5b87aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be9d7019f897bfb307d441aaeb5bc2198e5425ea6c6652ce02e10cf028bb175e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9d7019f897bfb307d441aaeb5bc2198e5425ea6c6652ce02e10cf028bb175e->enter($__internal_be9d7019f897bfb307d441aaeb5bc2198e5425ea6c6652ce02e10cf028bb175e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be9d7019f897bfb307d441aaeb5bc2198e5425ea6c6652ce02e10cf028bb175e->leave($__internal_be9d7019f897bfb307d441aaeb5bc2198e5425ea6c6652ce02e10cf028bb175e_prof);

        
        $__internal_3f1e1096c9e5fff704fb064febb1ba827acea5259c0e4d0c23d4d861c5b87aca->leave($__internal_3f1e1096c9e5fff704fb064febb1ba827acea5259c0e4d0c23d4d861c5b87aca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/templateadmin/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
