<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9cc4152da91962bbca8e0776604f16aab39a14516c9b8945345a5241255bf0da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_440d1f6c94b0e3d737fb8cc3d397cbae84ea0b9fdf8e99bb6df7ddd1c2fa47a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440d1f6c94b0e3d737fb8cc3d397cbae84ea0b9fdf8e99bb6df7ddd1c2fa47a4->enter($__internal_440d1f6c94b0e3d737fb8cc3d397cbae84ea0b9fdf8e99bb6df7ddd1c2fa47a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b7dccd09ff4a2c7036783086c0dc6b37fe437966b9e8d6b0979790b538623d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dccd09ff4a2c7036783086c0dc6b37fe437966b9e8d6b0979790b538623d4c->enter($__internal_b7dccd09ff4a2c7036783086c0dc6b37fe437966b9e8d6b0979790b538623d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_440d1f6c94b0e3d737fb8cc3d397cbae84ea0b9fdf8e99bb6df7ddd1c2fa47a4->leave($__internal_440d1f6c94b0e3d737fb8cc3d397cbae84ea0b9fdf8e99bb6df7ddd1c2fa47a4_prof);

        
        $__internal_b7dccd09ff4a2c7036783086c0dc6b37fe437966b9e8d6b0979790b538623d4c->leave($__internal_b7dccd09ff4a2c7036783086c0dc6b37fe437966b9e8d6b0979790b538623d4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84787213aa74887c1adae33394ce8d51ac5a6f044d14087a9151a875d998d9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84787213aa74887c1adae33394ce8d51ac5a6f044d14087a9151a875d998d9be->enter($__internal_84787213aa74887c1adae33394ce8d51ac5a6f044d14087a9151a875d998d9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eddfa796cb760f9c53dd1c3371d407d9a6b34ba86d827c14c74bb7cbdcc56f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddfa796cb760f9c53dd1c3371d407d9a6b34ba86d827c14c74bb7cbdcc56f40->enter($__internal_eddfa796cb760f9c53dd1c3371d407d9a6b34ba86d827c14c74bb7cbdcc56f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_eddfa796cb760f9c53dd1c3371d407d9a6b34ba86d827c14c74bb7cbdcc56f40->leave($__internal_eddfa796cb760f9c53dd1c3371d407d9a6b34ba86d827c14c74bb7cbdcc56f40_prof);

        
        $__internal_84787213aa74887c1adae33394ce8d51ac5a6f044d14087a9151a875d998d9be->leave($__internal_84787213aa74887c1adae33394ce8d51ac5a6f044d14087a9151a875d998d9be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/templateadmin/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
