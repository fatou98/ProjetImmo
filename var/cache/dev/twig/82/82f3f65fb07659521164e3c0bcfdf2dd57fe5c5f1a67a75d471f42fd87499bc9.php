<?php

/* HTLImmobilierBundle:Admin:liste_localite.html.twig */
class __TwigTemplate_8ca648bca6d4b417a1d0112c66f38b5d4b02da22673f751021c3a533b6715192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Admin:liste_localite.html.twig", 1);
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
        $__internal_b6db0148d2d006c5818f6c3167e1e7f70eaed698d5d0cc841d431bb422ff92f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6db0148d2d006c5818f6c3167e1e7f70eaed698d5d0cc841d431bb422ff92f1->enter($__internal_b6db0148d2d006c5818f6c3167e1e7f70eaed698d5d0cc841d431bb422ff92f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_localite.html.twig"));

        $__internal_8d58a84a23793a822d61e680924a0dac779679277f472de35b94b641db8d4671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d58a84a23793a822d61e680924a0dac779679277f472de35b94b641db8d4671->enter($__internal_8d58a84a23793a822d61e680924a0dac779679277f472de35b94b641db8d4671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_localite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6db0148d2d006c5818f6c3167e1e7f70eaed698d5d0cc841d431bb422ff92f1->leave($__internal_b6db0148d2d006c5818f6c3167e1e7f70eaed698d5d0cc841d431bb422ff92f1_prof);

        
        $__internal_8d58a84a23793a822d61e680924a0dac779679277f472de35b94b641db8d4671->leave($__internal_8d58a84a23793a822d61e680924a0dac779679277f472de35b94b641db8d4671_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_81f1b82197776ec73396caeff8b1ebe17e10b55585af03c5c2ed44ec012306c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f1b82197776ec73396caeff8b1ebe17e10b55585af03c5c2ed44ec012306c6->enter($__internal_81f1b82197776ec73396caeff8b1ebe17e10b55585af03c5c2ed44ec012306c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ce5af924ef862a67e80937b7ff278cca1a993cf82ce94bc117fed33dc6331bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5af924ef862a67e80937b7ff278cca1a993cf82ce94bc117fed33dc6331bd6->enter($__internal_ce5af924ef862a67e80937b7ff278cca1a993cf82ce94bc117fed33dc6331bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<div class=\"card-header row\" style=\"display:flex;\">
    <strong class=\"card-title\">LISTE LOCALITE</strong></div>
     <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"#\" id=\"ajouterlocalite\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
                       <form class=\"input-group col-sm-7\" style=\"margin-left: 290px;\" method=\"post\" id=\"localiteform\">
     <div class=\"input-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Localite\" name=\"libelle\" >
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\" name=\"typebien\">
        <i class=\"fa fa-save\"></i>
      </button>
    </div>
</form>
                         </div>
                        <div class=\"card-body\" >
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">

<thead>
    <tr>
        <th>#</th>
        <th>Libelle Localite</th>
        <th>Actions</th>
    </tr>
</thead><tbody>
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Localites"] ?? $this->getContext($context, "Localites")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Localite"]) {
            // line 28
            echo "
    <tr>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Localite"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Localite"], "libellelocalite", array()), "html", null, true);
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
            // line 41
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </tbody></table>  </div>
";
        
        $__internal_ce5af924ef862a67e80937b7ff278cca1a993cf82ce94bc117fed33dc6331bd6->leave($__internal_ce5af924ef862a67e80937b7ff278cca1a993cf82ce94bc117fed33dc6331bd6_prof);

        
        $__internal_81f1b82197776ec73396caeff8b1ebe17e10b55585af03c5c2ed44ec012306c6->leave($__internal_81f1b82197776ec73396caeff8b1ebe17e10b55585af03c5c2ed44ec012306c6_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:liste_localite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  103 => 41,  88 => 31,  84 => 30,  80 => 28,  75 => 27,  49 => 3,  40 => 2,  11 => 1,);
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
     <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"#\" id=\"ajouterlocalite\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
                       <form class=\"input-group col-sm-7\" style=\"margin-left: 290px;\" method=\"post\" id=\"localiteform\">
     <div class=\"input-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Localite\" name=\"libelle\" >
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\" name=\"typebien\">
        <i class=\"fa fa-save\"></i>
      </button>
    </div>
</form>
                         </div>
                        <div class=\"card-body\" >
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">

<thead>
    <tr>
        <th>#</th>
        <th>Libelle Localite</th>
        <th>Actions</th>
    </tr>
</thead><tbody>
  {% for Localite in Localites %}

    <tr>
        <td>{{Localite.id}}</td>
        <td>{{Localite.libellelocalite}}</td>
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
{% endblock %}", "HTLImmobilierBundle:Admin:liste_localite.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Admin/liste_localite.html.twig");
    }
}
