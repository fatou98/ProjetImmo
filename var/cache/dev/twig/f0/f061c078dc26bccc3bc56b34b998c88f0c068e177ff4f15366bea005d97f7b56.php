<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e35ce097ac5e74f1401a97a8d68570f83e6aa62928d584b4b2414d4ae8284daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_13c434336168718b2e27a3e10dac36be52571d50c108506f9794161845363895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c434336168718b2e27a3e10dac36be52571d50c108506f9794161845363895->enter($__internal_13c434336168718b2e27a3e10dac36be52571d50c108506f9794161845363895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_25b5e3aab607649e109940fb74b68012f74a982f980055851f6e5872bc656f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b5e3aab607649e109940fb74b68012f74a982f980055851f6e5872bc656f84->enter($__internal_25b5e3aab607649e109940fb74b68012f74a982f980055851f6e5872bc656f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13c434336168718b2e27a3e10dac36be52571d50c108506f9794161845363895->leave($__internal_13c434336168718b2e27a3e10dac36be52571d50c108506f9794161845363895_prof);

        
        $__internal_25b5e3aab607649e109940fb74b68012f74a982f980055851f6e5872bc656f84->leave($__internal_25b5e3aab607649e109940fb74b68012f74a982f980055851f6e5872bc656f84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53ef7b84842111da5dcbd78403c53a44aac7a8cc56866a26e31d21906fdf0c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ef7b84842111da5dcbd78403c53a44aac7a8cc56866a26e31d21906fdf0c1d->enter($__internal_53ef7b84842111da5dcbd78403c53a44aac7a8cc56866a26e31d21906fdf0c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd95cb839ccef696334cb6177be2e3d56c1fcb240a7cf35993a39054066712c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd95cb839ccef696334cb6177be2e3d56c1fcb240a7cf35993a39054066712c9->enter($__internal_dd95cb839ccef696334cb6177be2e3d56c1fcb240a7cf35993a39054066712c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dd95cb839ccef696334cb6177be2e3d56c1fcb240a7cf35993a39054066712c9->leave($__internal_dd95cb839ccef696334cb6177be2e3d56c1fcb240a7cf35993a39054066712c9_prof);

        
        $__internal_53ef7b84842111da5dcbd78403c53a44aac7a8cc56866a26e31d21906fdf0c1d->leave($__internal_53ef7b84842111da5dcbd78403c53a44aac7a8cc56866a26e31d21906fdf0c1d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f051b9b6eaa2d8ee8b7f147ff42b249c60bbf6cb68e14949e57feb0992aac92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f051b9b6eaa2d8ee8b7f147ff42b249c60bbf6cb68e14949e57feb0992aac92->enter($__internal_3f051b9b6eaa2d8ee8b7f147ff42b249c60bbf6cb68e14949e57feb0992aac92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d74df71bd3e078e67c3bb96b65638055947ab812654b765fd03b82c0c245c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d74df71bd3e078e67c3bb96b65638055947ab812654b765fd03b82c0c245c35->enter($__internal_6d74df71bd3e078e67c3bb96b65638055947ab812654b765fd03b82c0c245c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6d74df71bd3e078e67c3bb96b65638055947ab812654b765fd03b82c0c245c35->leave($__internal_6d74df71bd3e078e67c3bb96b65638055947ab812654b765fd03b82c0c245c35_prof);

        
        $__internal_3f051b9b6eaa2d8ee8b7f147ff42b249c60bbf6cb68e14949e57feb0992aac92->leave($__internal_3f051b9b6eaa2d8ee8b7f147ff42b249c60bbf6cb68e14949e57feb0992aac92_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4643fd4a9522d68ea796ac251151b4864d89b890063a8963be0a75d373518ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4643fd4a9522d68ea796ac251151b4864d89b890063a8963be0a75d373518ced->enter($__internal_4643fd4a9522d68ea796ac251151b4864d89b890063a8963be0a75d373518ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_887edd04ac09be1d67bd6f5f98d5f133558e8e83bfe1b9cbf0b91a2d1b9349d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887edd04ac09be1d67bd6f5f98d5f133558e8e83bfe1b9cbf0b91a2d1b9349d9->enter($__internal_887edd04ac09be1d67bd6f5f98d5f133558e8e83bfe1b9cbf0b91a2d1b9349d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_887edd04ac09be1d67bd6f5f98d5f133558e8e83bfe1b9cbf0b91a2d1b9349d9->leave($__internal_887edd04ac09be1d67bd6f5f98d5f133558e8e83bfe1b9cbf0b91a2d1b9349d9_prof);

        
        $__internal_4643fd4a9522d68ea796ac251151b4864d89b890063a8963be0a75d373518ced->leave($__internal_4643fd4a9522d68ea796ac251151b4864d89b890063a8963be0a75d373518ced_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/templateadmin/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
