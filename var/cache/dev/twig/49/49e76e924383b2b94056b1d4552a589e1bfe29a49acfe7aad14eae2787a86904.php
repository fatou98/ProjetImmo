<?php

/* HTLImmobilierBundle:Admin:liste_typebien.html.twig */
class __TwigTemplate_e38c2f7b08e577ced80f77b72737a2bb7408d249244098104b3d251638cf1ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Admin:liste_typebien.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::adminpage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72b26bfc75f78aa5a3abb920063c0942c8f99ee5733868fc00a5d7f6e3f2ab87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b26bfc75f78aa5a3abb920063c0942c8f99ee5733868fc00a5d7f6e3f2ab87->enter($__internal_72b26bfc75f78aa5a3abb920063c0942c8f99ee5733868fc00a5d7f6e3f2ab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_typebien.html.twig"));

        $__internal_65c8e854cf0c47fe1a06d8c01c39bf98af171813c23e9788bd19104aed1f22d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c8e854cf0c47fe1a06d8c01c39bf98af171813c23e9788bd19104aed1f22d6->enter($__internal_65c8e854cf0c47fe1a06d8c01c39bf98af171813c23e9788bd19104aed1f22d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_typebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b26bfc75f78aa5a3abb920063c0942c8f99ee5733868fc00a5d7f6e3f2ab87->leave($__internal_72b26bfc75f78aa5a3abb920063c0942c8f99ee5733868fc00a5d7f6e3f2ab87_prof);

        
        $__internal_65c8e854cf0c47fe1a06d8c01c39bf98af171813c23e9788bd19104aed1f22d6->leave($__internal_65c8e854cf0c47fe1a06d8c01c39bf98af171813c23e9788bd19104aed1f22d6_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d3a2f81c579a4c5423dda25e75dae400f00eae00968b45eeb9526fee3bba535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3a2f81c579a4c5423dda25e75dae400f00eae00968b45eeb9526fee3bba535->enter($__internal_0d3a2f81c579a4c5423dda25e75dae400f00eae00968b45eeb9526fee3bba535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_32222a43d6156c278660320864163e531b92f946c1a596b19c0f118283f9c0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32222a43d6156c278660320864163e531b92f946c1a596b19c0f118283f9c0e3->enter($__internal_32222a43d6156c278660320864163e531b92f946c1a596b19c0f118283f9c0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
                       <div class=\"card-header row\" style=\"display:flex;\">
    <strong class=\"card-title\">LISTE LOCALITE</strong></div>
    <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"#\" id=\"ajoutertype\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
                       <form class=\"input-group col-sm-7\" style=\"margin-left: 290px;\" method=\"post\" id=\"type\">
     <div class=\"input-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Type bien\" name=\"libelle\" >
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\" name=\"typebien\">
        <i class=\"fa fa-save\"></i>
      </button>
    </div>
</form></div>
                        <div class=\"card-body\" >
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">
<thead>
    <tr>
        <th>#</th>
        <th>Libelle type</th>
        <th>Actions</th>
    </tr>
</thead>  <tbody>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["libelletypes"] ?? $this->getContext($context, "libelletypes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["libelletype"]) {
            // line 26
            echo "
    <tr>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["libelletype"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["libelletype"], "libelletype", array()), "html", null, true);
            echo "</td>
        <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
</tr>
   
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libelletype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </tbody></table>  </div>
";
        
        $__internal_32222a43d6156c278660320864163e531b92f946c1a596b19c0f118283f9c0e3->leave($__internal_32222a43d6156c278660320864163e531b92f946c1a596b19c0f118283f9c0e3_prof);

        
        $__internal_0d3a2f81c579a4c5423dda25e75dae400f00eae00968b45eeb9526fee3bba535->leave($__internal_0d3a2f81c579a4c5423dda25e75dae400f00eae00968b45eeb9526fee3bba535_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:liste_typebien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 39,  86 => 29,  82 => 28,  78 => 26,  73 => 25,  49 => 3,  40 => 2,  11 => 1,);
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
{% block content %}

                       <div class=\"card-header row\" style=\"display:flex;\">
    <strong class=\"card-title\">LISTE LOCALITE</strong></div>
    <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"#\" id=\"ajoutertype\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
                       <form class=\"input-group col-sm-7\" style=\"margin-left: 290px;\" method=\"post\" id=\"type\">
     <div class=\"input-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Type bien\" name=\"libelle\" >
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\" name=\"typebien\">
        <i class=\"fa fa-save\"></i>
      </button>
    </div>
</form></div>
                        <div class=\"card-body\" >
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">
<thead>
    <tr>
        <th>#</th>
        <th>Libelle type</th>
        <th>Actions</th>
    </tr>
</thead>  <tbody>
  {% for libelletype in libelletypes %}

    <tr>
        <td>{{libelletype.id}}</td>
        <td>{{libelletype.libelletype}}</td>
        <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
</tr>
   
{% else %}
<h1>ce bien n'existe pas</h1>
  {% endfor %}  </tbody></table>  </div>
{% endblock %}", "HTLImmobilierBundle:Admin:liste_typebien.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Admin/liste_typebien.html.twig");
    }
}
