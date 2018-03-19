<?php

/* HTLImmobilierBundle:Admin:liste_bien.html.twig */
class __TwigTemplate_152b467233427b224aceb56668fa98c873e2e27de424c08aabe3c80c6ea68b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Admin:liste_bien.html.twig", 1);
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
        $__internal_22147d5616bc6acfea369b27f2e1cf32cf3cc3e612bad80cae9ad1bbe1fea01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22147d5616bc6acfea369b27f2e1cf32cf3cc3e612bad80cae9ad1bbe1fea01b->enter($__internal_22147d5616bc6acfea369b27f2e1cf32cf3cc3e612bad80cae9ad1bbe1fea01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_bien.html.twig"));

        $__internal_c8a66c4201928c880a5f6e0d0175f764324bb2307c00d88868e50d224cee4fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a66c4201928c880a5f6e0d0175f764324bb2307c00d88868e50d224cee4fd1->enter($__internal_c8a66c4201928c880a5f6e0d0175f764324bb2307c00d88868e50d224cee4fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22147d5616bc6acfea369b27f2e1cf32cf3cc3e612bad80cae9ad1bbe1fea01b->leave($__internal_22147d5616bc6acfea369b27f2e1cf32cf3cc3e612bad80cae9ad1bbe1fea01b_prof);

        
        $__internal_c8a66c4201928c880a5f6e0d0175f764324bb2307c00d88868e50d224cee4fd1->leave($__internal_c8a66c4201928c880a5f6e0d0175f764324bb2307c00d88868e50d224cee4fd1_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_030cd3cf9eca7f8b8ab5e90b26e33afbd0967014202b6dcd69e3b9bf1ee7d168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030cd3cf9eca7f8b8ab5e90b26e33afbd0967014202b6dcd69e3b9bf1ee7d168->enter($__internal_030cd3cf9eca7f8b8ab5e90b26e33afbd0967014202b6dcd69e3b9bf1ee7d168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f63b91988997362d907ea53f5ba6079b6ac554e3ec187466187b508e9bd11ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63b91988997362d907ea53f5ba6079b6ac554e3ec187466187b508e9bd11ba7->enter($__internal_f63b91988997362d907ea53f5ba6079b6ac554e3ec187466187b508e9bd11ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo " <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addbien");
        echo "\" id=\"ajouterbien\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">
<thead>
    <tr>
        <th>nombien</th>
        <th>localite</th>
        <th>typebien</th>
        <th>prixlocation</th>
        <th>image</th>
        <th>Actions</th>
    </tr>
</thead> <tbody>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 16
            echo " 
    <tr class=\"gradeA\">
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\" ></td>
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
            // line 33
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " </tbody></table>
";
        
        $__internal_f63b91988997362d907ea53f5ba6079b6ac554e3ec187466187b508e9bd11ba7->leave($__internal_f63b91988997362d907ea53f5ba6079b6ac554e3ec187466187b508e9bd11ba7_prof);

        
        $__internal_030cd3cf9eca7f8b8ab5e90b26e33afbd0967014202b6dcd69e3b9bf1ee7d168->leave($__internal_030cd3cf9eca7f8b8ab5e90b26e33afbd0967014202b6dcd69e3b9bf1ee7d168_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:liste_bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  107 => 33,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 16,  65 => 15,  49 => 3,  40 => 2,  11 => 1,);
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
 <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"{{path('addbien')}}\" id=\"ajouterbien\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">
<thead>
    <tr>
        <th>nombien</th>
        <th>localite</th>
        <th>typebien</th>
        <th>prixlocation</th>
        <th>image</th>
        <th>Actions</th>
    </tr>
</thead> <tbody>
  {% for bien in biens %}
 
    <tr class=\"gradeA\">
        <td>{{bien.nombien}}</td>
        <td>{{bien.libellelocalite}}</td>
        <td>{{bien.typebien}}</td>
        <td>{{bien.prixlocation}}</td>
        <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.images[0]}}\" alt=\"Card image cap\" width=\"50px\" ></td>
         <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
    
</tr>
   
{% else %}
<h1>ce bien n'existe pas</h1>
  {% endfor %} </tbody></table>
{% endblock %}







", "HTLImmobilierBundle:Admin:liste_bien.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Admin/liste_bien.html.twig");
    }
}
