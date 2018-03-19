<?php

/* HTLImmobilierBundle:Admin:log.html.twig */
class __TwigTemplate_09563298a4c9920f66d544406b44c0c2278535ab16c150d8329dc2405461bdaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Admin:log.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::adminpage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee21beb8b2972d846cb259b8aef4ada80d98d26fafa17dc3c3ffdf31992b135d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee21beb8b2972d846cb259b8aef4ada80d98d26fafa17dc3c3ffdf31992b135d->enter($__internal_ee21beb8b2972d846cb259b8aef4ada80d98d26fafa17dc3c3ffdf31992b135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:log.html.twig"));

        $__internal_cf66aa6ac2f14fe3f9a9e30165e03d24a024ec98da0be2de91c84475e82f9817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf66aa6ac2f14fe3f9a9e30165e03d24a024ec98da0be2de91c84475e82f9817->enter($__internal_cf66aa6ac2f14fe3f9a9e30165e03d24a024ec98da0be2de91c84475e82f9817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:log.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee21beb8b2972d846cb259b8aef4ada80d98d26fafa17dc3c3ffdf31992b135d->leave($__internal_ee21beb8b2972d846cb259b8aef4ada80d98d26fafa17dc3c3ffdf31992b135d_prof);

        
        $__internal_cf66aa6ac2f14fe3f9a9e30165e03d24a024ec98da0be2de91c84475e82f9817->leave($__internal_cf66aa6ac2f14fe3f9a9e30165e03d24a024ec98da0be2de91c84475e82f9817_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::adminpage.html.twig\" %}

", "HTLImmobilierBundle:Admin:log.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Admin/log.html.twig");
    }
}
