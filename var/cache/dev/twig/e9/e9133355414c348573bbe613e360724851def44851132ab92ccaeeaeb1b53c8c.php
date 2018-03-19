<?php

/* ::base1.html.twig */
class __TwigTemplate_6a4479034e6b622edc99762846d3f4747d874b811c03cc9e8b0755e81abecd4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'table' => array($this, 'block_table'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66d0a0884821e1a846e18bffd8d759109847a7d4fc3476c284dae8020ada500a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d0a0884821e1a846e18bffd8d759109847a7d4fc3476c284dae8020ada500a->enter($__internal_66d0a0884821e1a846e18bffd8d759109847a7d4fc3476c284dae8020ada500a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        $__internal_d4361f87f763c3182178b74aad5d72d2446de5fa189ecbb57b84159bb8963fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4361f87f763c3182178b74aad5d72d2446de5fa189ecbb57b84159bb8963fe7->enter($__internal_d4361f87f763c3182178b74aad5d72d2446de5fa189ecbb57b84159bb8963fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
  <title>HORTALA IMMOBILIER| VOTRE AGENCE DE PROXIMITE </title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
                <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
    </head>

    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        echo "  
        ";
        // line 24
        $this->displayBlock('table', $context, $blocks);
        // line 25
        echo "
     ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_66d0a0884821e1a846e18bffd8d759109847a7d4fc3476c284dae8020ada500a->leave($__internal_66d0a0884821e1a846e18bffd8d759109847a7d4fc3476c284dae8020ada500a_prof);

        
        $__internal_d4361f87f763c3182178b74aad5d72d2446de5fa189ecbb57b84159bb8963fe7->leave($__internal_d4361f87f763c3182178b74aad5d72d2446de5fa189ecbb57b84159bb8963fe7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a6cef91a399c56d1c1b7ff204598d5f5f925a81592fce6df310e9f4703e05fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6cef91a399c56d1c1b7ff204598d5f5f925a81592fce6df310e9f4703e05fd->enter($__internal_7a6cef91a399c56d1c1b7ff204598d5f5f925a81592fce6df310e9f4703e05fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_94ca19a4d9c11c66de3a2bb9c9290ad8c12a56b946c47bd884fa518baeda1c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ca19a4d9c11c66de3a2bb9c9290ad8c12a56b946c47bd884fa518baeda1c5b->enter($__internal_94ca19a4d9c11c66de3a2bb9c9290ad8c12a56b946c47bd884fa518baeda1c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
          <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/proprio.css"), "html", null, true);
        echo "\">

  
";
        
        $__internal_94ca19a4d9c11c66de3a2bb9c9290ad8c12a56b946c47bd884fa518baeda1c5b->leave($__internal_94ca19a4d9c11c66de3a2bb9c9290ad8c12a56b946c47bd884fa518baeda1c5b_prof);

        
        $__internal_7a6cef91a399c56d1c1b7ff204598d5f5f925a81592fce6df310e9f4703e05fd->leave($__internal_7a6cef91a399c56d1c1b7ff204598d5f5f925a81592fce6df310e9f4703e05fd_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba8ffeaea0ac6cc864083424a6c4d87c34e092b7b1063ce7f2714494ab026ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba8ffeaea0ac6cc864083424a6c4d87c34e092b7b1063ce7f2714494ab026ff->enter($__internal_3ba8ffeaea0ac6cc864083424a6c4d87c34e092b7b1063ce7f2714494ab026ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae8a110eae06c7146de67942d1b987a511bc66d06ae1029b99e314bcea340793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8a110eae06c7146de67942d1b987a511bc66d06ae1029b99e314bcea340793->enter($__internal_ae8a110eae06c7146de67942d1b987a511bc66d06ae1029b99e314bcea340793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae8a110eae06c7146de67942d1b987a511bc66d06ae1029b99e314bcea340793->leave($__internal_ae8a110eae06c7146de67942d1b987a511bc66d06ae1029b99e314bcea340793_prof);

        
        $__internal_3ba8ffeaea0ac6cc864083424a6c4d87c34e092b7b1063ce7f2714494ab026ff->leave($__internal_3ba8ffeaea0ac6cc864083424a6c4d87c34e092b7b1063ce7f2714494ab026ff_prof);

    }

    // line 24
    public function block_table($context, array $blocks = array())
    {
        $__internal_dabb9fdc8904151e49a3f00171c3f63109eb4b2e1a872e66bd1c6cb0b49fed7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabb9fdc8904151e49a3f00171c3f63109eb4b2e1a872e66bd1c6cb0b49fed7d->enter($__internal_dabb9fdc8904151e49a3f00171c3f63109eb4b2e1a872e66bd1c6cb0b49fed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_516cbd99191841dc41b91eec9d13a7898a2c99e83d4142aaefcc90029a78e1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516cbd99191841dc41b91eec9d13a7898a2c99e83d4142aaefcc90029a78e1bc->enter($__internal_516cbd99191841dc41b91eec9d13a7898a2c99e83d4142aaefcc90029a78e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_516cbd99191841dc41b91eec9d13a7898a2c99e83d4142aaefcc90029a78e1bc->leave($__internal_516cbd99191841dc41b91eec9d13a7898a2c99e83d4142aaefcc90029a78e1bc_prof);

        
        $__internal_dabb9fdc8904151e49a3f00171c3f63109eb4b2e1a872e66bd1c6cb0b49fed7d->leave($__internal_dabb9fdc8904151e49a3f00171c3f63109eb4b2e1a872e66bd1c6cb0b49fed7d_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0fa6eab6d065907b54e68cf433d8d8715075b72e4d5ef6caf513b3073072171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0fa6eab6d065907b54e68cf433d8d8715075b72e4d5ef6caf513b3073072171->enter($__internal_e0fa6eab6d065907b54e68cf433d8d8715075b72e4d5ef6caf513b3073072171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f8528264a824ad0787703928da78928bac113df536dd7d5c990966c0d89a27c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8528264a824ad0787703928da78928bac113df536dd7d5c990966c0d89a27c6->enter($__internal_f8528264a824ad0787703928da78928bac113df536dd7d5c990966c0d89a27c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ajout.js"), "html", null, true);
        echo "\"></script>

         ";
        
        $__internal_f8528264a824ad0787703928da78928bac113df536dd7d5c990966c0d89a27c6->leave($__internal_f8528264a824ad0787703928da78928bac113df536dd7d5c990966c0d89a27c6_prof);

        
        $__internal_e0fa6eab6d065907b54e68cf433d8d8715075b72e4d5ef6caf513b3073072171->leave($__internal_e0fa6eab6d065907b54e68cf433d8d8715075b72e4d5ef6caf513b3073072171_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 30,  165 => 29,  161 => 28,  158 => 27,  149 => 26,  132 => 24,  115 => 23,  101 => 14,  93 => 9,  89 => 8,  86 => 7,  77 => 6,  65 => 33,  63 => 26,  60 => 25,  58 => 24,  54 => 23,  47 => 19,  43 => 18,  38 => 17,  36 => 6,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
  <title>HORTALA IMMOBILIER| VOTRE AGENCE DE PROXIMITE </title>
{% block stylesheets %}

          <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
      <link rel=\"stylesheet\" href=\"{{ asset('css/proprio.css') }}\">

  
{% endblock %}        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
                <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/datatables.js' )}}\"></script>
    </head>

    <body>
        {% block body %}{% endblock %}  
        {% block table %}{% endblock %}

     {% block javascripts %}

        <script src=\"{{ asset('js/script.js') }}\"> </script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/ajout.js') }}\"></script>

         {% endblock %}
    </body>
</html>
", "::base1.html.twig", "/var/www/html/templateadmin/app/Resources/views/base1.html.twig");
    }
}
