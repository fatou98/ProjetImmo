<?php

/* HTLImmobilierBundle:Reservation:listeproposition.html.twig */
class __TwigTemplate_7a8b8ab6d93b2630aca9c70f14ac2a8cf77bd32d17d2783fffe4a76fa3846267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Reservation:listeproposition.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::adminpage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_473f63c5175d15a06a8a69458bd674bd56d4d833a09597610f7a6092e5e55a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473f63c5175d15a06a8a69458bd674bd56d4d833a09597610f7a6092e5e55a9f->enter($__internal_473f63c5175d15a06a8a69458bd674bd56d4d833a09597610f7a6092e5e55a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:listeproposition.html.twig"));

        $__internal_25f31eea92a5ef485ef04ca29cff665e4625bdfd47bdce950b2d09394253bab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f31eea92a5ef485ef04ca29cff665e4625bdfd47bdce950b2d09394253bab3->enter($__internal_25f31eea92a5ef485ef04ca29cff665e4625bdfd47bdce950b2d09394253bab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:listeproposition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_473f63c5175d15a06a8a69458bd674bd56d4d833a09597610f7a6092e5e55a9f->leave($__internal_473f63c5175d15a06a8a69458bd674bd56d4d833a09597610f7a6092e5e55a9f_prof);

        
        $__internal_25f31eea92a5ef485ef04ca29cff665e4625bdfd47bdce950b2d09394253bab3->leave($__internal_25f31eea92a5ef485ef04ca29cff665e4625bdfd47bdce950b2d09394253bab3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e268612ba9262599daab765d839a0c4691ddd9f632735bcee3a1dd187c91655d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e268612ba9262599daab765d839a0c4691ddd9f632735bcee3a1dd187c91655d->enter($__internal_e268612ba9262599daab765d839a0c4691ddd9f632735bcee3a1dd187c91655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_723ecc07ccaecb844ab1b0f4fa49d8860b6e62514819328c3d2f2b26730dc8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723ecc07ccaecb844ab1b0f4fa49d8860b6e62514819328c3d2f2b26730dc8e1->enter($__internal_723ecc07ccaecb844ab1b0f4fa49d8860b6e62514819328c3d2f2b26730dc8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"container divtable\" style=\"margin-left:30px;\">
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom Proprietaire</th>
        <th>adresse proprietaire</th>
        <th>type bien</th>
        <th>prix</th>
        <th>Localite</th>
        <th>details</th>
    </tr>
</thead>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 20
            echo "  <tbody>
    <tr>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "proprietaire", array()), "numpiece", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "proprietaire", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "proprietaire", array()), "adresse", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</td>
    
         <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validerproposition", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\" id=\"reservationid\">DETAILS</a></td>


    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</table>
        <div class=\"text-center\">";
        // line 39
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["reservations"] ?? $this->getContext($context, "reservations")));
        echo "</div>

</div>
";
        
        $__internal_723ecc07ccaecb844ab1b0f4fa49d8860b6e62514819328c3d2f2b26730dc8e1->leave($__internal_723ecc07ccaecb844ab1b0f4fa49d8860b6e62514819328c3d2f2b26730dc8e1_prof);

        
        $__internal_e268612ba9262599daab765d839a0c4691ddd9f632735bcee3a1dd187c91655d->leave($__internal_e268612ba9262599daab765d839a0c4691ddd9f632735bcee3a1dd187c91655d_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9a4f0ab7864c7b0091f620c7e467bb032ca18b1beb4a76127cde03622c514e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4f0ab7864c7b0091f620c7e467bb032ca18b1beb4a76127cde03622c514e2e->enter($__internal_9a4f0ab7864c7b0091f620c7e467bb032ca18b1beb4a76127cde03622c514e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_4fb64ec45962aacec69fea2594ef4635a37f50d58df765dd02584a962976e47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb64ec45962aacec69fea2594ef4635a37f50d58df765dd02584a962976e47a->enter($__internal_4fb64ec45962aacec69fea2594ef4635a37f50d58df765dd02584a962976e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "
";
        
        $__internal_4fb64ec45962aacec69fea2594ef4635a37f50d58df765dd02584a962976e47a->leave($__internal_4fb64ec45962aacec69fea2594ef4635a37f50d58df765dd02584a962976e47a_prof);

        
        $__internal_9a4f0ab7864c7b0091f620c7e467bb032ca18b1beb4a76127cde03622c514e2e->leave($__internal_9a4f0ab7864c7b0091f620c7e467bb032ca18b1beb4a76127cde03622c514e2e_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Reservation:listeproposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 50,  135 => 49,  121 => 39,  118 => 38,  111 => 36,  99 => 29,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 20,  65 => 19,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::adminpage.html.twig\" %}


    {% block content %}

<div class=\"container divtable\" style=\"margin-left:30px;\">
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom Proprietaire</th>
        <th>adresse proprietaire</th>
        <th>type bien</th>
        <th>prix</th>
        <th>Localite</th>
        <th>details</th>
    </tr>
</thead>
  {% for reservation in reservations %}
  <tbody>
    <tr>
        <td>{{reservation.proprietaire.numpiece}}</td>
        <td>{{reservation.proprietaire.nomComplet}}</td>
        <td>{{reservation.proprietaire.adresse}}</td>
        <td>{{reservation.bien.typebien}}</td>
        <td>{{reservation.bien.prixlocation}}</td>
        <td>{{reservation.bien.libellelocalite}}</td>
    
         <td><a href=\"{{path('validerproposition',{id:reservation.id})}}\" class=\"btn btn-default bg-primary\" id=\"reservationid\">DETAILS</a></td>


    </tr>
    </tbody>

{% else %}

  {% endfor %}
</table>
        <div class=\"text-center\">{{ knp_pagination_render(reservations) }}</div>

</div>
{% endblock %}






{% block footer %}

{% endblock %}






", "HTLImmobilierBundle:Reservation:listeproposition.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Reservation/listeproposition.html.twig");
    }
}
