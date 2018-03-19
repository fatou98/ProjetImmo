<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_917e3962218322367dece5d3fd5e1b1bd9996b6651fd5f0aeeac0829ff6cb341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2c6287cb7b2a54ac0b7550f84bb8ca79b8bf5e5b5de57304da2cbe0c82555d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c6287cb7b2a54ac0b7550f84bb8ca79b8bf5e5b5de57304da2cbe0c82555d8->enter($__internal_e2c6287cb7b2a54ac0b7550f84bb8ca79b8bf5e5b5de57304da2cbe0c82555d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d3f6beafb5c306b33c91a15677ff29244436fd6e8f3f6fe57a4bfe66a2910507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f6beafb5c306b33c91a15677ff29244436fd6e8f3f6fe57a4bfe66a2910507->enter($__internal_d3f6beafb5c306b33c91a15677ff29244436fd6e8f3f6fe57a4bfe66a2910507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c6287cb7b2a54ac0b7550f84bb8ca79b8bf5e5b5de57304da2cbe0c82555d8->leave($__internal_e2c6287cb7b2a54ac0b7550f84bb8ca79b8bf5e5b5de57304da2cbe0c82555d8_prof);

        
        $__internal_d3f6beafb5c306b33c91a15677ff29244436fd6e8f3f6fe57a4bfe66a2910507->leave($__internal_d3f6beafb5c306b33c91a15677ff29244436fd6e8f3f6fe57a4bfe66a2910507_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d55e6aa26bd1847c86d3b7b3056dafdbd761431ba56d70464e635f1f752c194f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55e6aa26bd1847c86d3b7b3056dafdbd761431ba56d70464e635f1f752c194f->enter($__internal_d55e6aa26bd1847c86d3b7b3056dafdbd761431ba56d70464e635f1f752c194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a4365bde8d70825684e1c34b375fe3fd57878a73ce213451291298e0f8adaa3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4365bde8d70825684e1c34b375fe3fd57878a73ce213451291298e0f8adaa3a->enter($__internal_a4365bde8d70825684e1c34b375fe3fd57878a73ce213451291298e0f8adaa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4365bde8d70825684e1c34b375fe3fd57878a73ce213451291298e0f8adaa3a->leave($__internal_a4365bde8d70825684e1c34b375fe3fd57878a73ce213451291298e0f8adaa3a_prof);

        
        $__internal_d55e6aa26bd1847c86d3b7b3056dafdbd761431ba56d70464e635f1f752c194f->leave($__internal_d55e6aa26bd1847c86d3b7b3056dafdbd761431ba56d70464e635f1f752c194f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e1f4ae8050a11c0c934cfa7cad4c7f7b024e19de7f311d73d87fa60a24c25c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1f4ae8050a11c0c934cfa7cad4c7f7b024e19de7f311d73d87fa60a24c25c1->enter($__internal_8e1f4ae8050a11c0c934cfa7cad4c7f7b024e19de7f311d73d87fa60a24c25c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7eae40dc8d7c9de0a35a0be40f36ad56d2542fd74d448bb952b4814a73250f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eae40dc8d7c9de0a35a0be40f36ad56d2542fd74d448bb952b4814a73250f2f->enter($__internal_7eae40dc8d7c9de0a35a0be40f36ad56d2542fd74d448bb952b4814a73250f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7eae40dc8d7c9de0a35a0be40f36ad56d2542fd74d448bb952b4814a73250f2f->leave($__internal_7eae40dc8d7c9de0a35a0be40f36ad56d2542fd74d448bb952b4814a73250f2f_prof);

        
        $__internal_8e1f4ae8050a11c0c934cfa7cad4c7f7b024e19de7f311d73d87fa60a24c25c1->leave($__internal_8e1f4ae8050a11c0c934cfa7cad4c7f7b024e19de7f311d73d87fa60a24c25c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e47522ea22c646d4eff870328d6a206d7ff06c29a1d0c6db53e48088efd3d0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47522ea22c646d4eff870328d6a206d7ff06c29a1d0c6db53e48088efd3d0df->enter($__internal_e47522ea22c646d4eff870328d6a206d7ff06c29a1d0c6db53e48088efd3d0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2b7af97ea2d513055a28267e77d5a63f57654574e5c55cbe8f83c9d840f5a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b7af97ea2d513055a28267e77d5a63f57654574e5c55cbe8f83c9d840f5a66->enter($__internal_e2b7af97ea2d513055a28267e77d5a63f57654574e5c55cbe8f83c9d840f5a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2b7af97ea2d513055a28267e77d5a63f57654574e5c55cbe8f83c9d840f5a66->leave($__internal_e2b7af97ea2d513055a28267e77d5a63f57654574e5c55cbe8f83c9d840f5a66_prof);

        
        $__internal_e47522ea22c646d4eff870328d6a206d7ff06c29a1d0c6db53e48088efd3d0df->leave($__internal_e47522ea22c646d4eff870328d6a206d7ff06c29a1d0c6db53e48088efd3d0df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/templateadmin/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
