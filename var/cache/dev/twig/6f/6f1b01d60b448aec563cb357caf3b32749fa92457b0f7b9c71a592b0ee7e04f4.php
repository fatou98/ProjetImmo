<?php

/* HTLImmobilierBundle:Front:listereservation.html.twig */
class __TwigTemplate_6403de0662159364dab735615a11625b1fef593fec5a662e3ec2453453da7dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Front:listereservation.html.twig", 2);
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
        $__internal_e5141ebaa890bad7daf81617405cc506c28394f0e73b34d6e1406d0100c9f76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5141ebaa890bad7daf81617405cc506c28394f0e73b34d6e1406d0100c9f76b->enter($__internal_e5141ebaa890bad7daf81617405cc506c28394f0e73b34d6e1406d0100c9f76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $__internal_c9912fe7d8d74ec356be65f1666387371db620debc6584cdcaa7dbd190bcb897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9912fe7d8d74ec356be65f1666387371db620debc6584cdcaa7dbd190bcb897->enter($__internal_c9912fe7d8d74ec356be65f1666387371db620debc6584cdcaa7dbd190bcb897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5141ebaa890bad7daf81617405cc506c28394f0e73b34d6e1406d0100c9f76b->leave($__internal_e5141ebaa890bad7daf81617405cc506c28394f0e73b34d6e1406d0100c9f76b_prof);

        
        $__internal_c9912fe7d8d74ec356be65f1666387371db620debc6584cdcaa7dbd190bcb897->leave($__internal_c9912fe7d8d74ec356be65f1666387371db620debc6584cdcaa7dbd190bcb897_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad509a34b0a14148037e49b8e53f82209a9897282e90f43c82fc4de977093737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad509a34b0a14148037e49b8e53f82209a9897282e90f43c82fc4de977093737->enter($__internal_ad509a34b0a14148037e49b8e53f82209a9897282e90f43c82fc4de977093737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c73edb81a3e3435afc03ccfd2fe509ebcf3e4e6894160bbd30f13fcb949711f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73edb81a3e3435afc03ccfd2fe509ebcf3e4e6894160bbd30f13fcb949711f0->enter($__internal_c73edb81a3e3435afc03ccfd2fe509ebcf3e4e6894160bbd30f13fcb949711f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
<div class=\"container divtable\" style=\"margin-left:30px;\">
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom client</th>
        <th>adresse bien</th>
        <th>type bien</th>
                <th>prix</th>
        <th>image</th>

        <th>details</th>
    </tr>
</thead>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 23
            echo "  <tbody>
    <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\" id=\"reservationid\">DETAILS</a></td>


    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>
        <div class=\"text-center\">";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["reservations"] ?? $this->getContext($context, "reservations")));
        echo "</div>

</div>
";
        
        $__internal_c73edb81a3e3435afc03ccfd2fe509ebcf3e4e6894160bbd30f13fcb949711f0->leave($__internal_c73edb81a3e3435afc03ccfd2fe509ebcf3e4e6894160bbd30f13fcb949711f0_prof);

        
        $__internal_ad509a34b0a14148037e49b8e53f82209a9897282e90f43c82fc4de977093737->leave($__internal_ad509a34b0a14148037e49b8e53f82209a9897282e90f43c82fc4de977093737_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8adbc7a7a0c4def842433285a9cb8c7322f8a3749830bd07a5a78464a6ff2297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adbc7a7a0c4def842433285a9cb8c7322f8a3749830bd07a5a78464a6ff2297->enter($__internal_8adbc7a7a0c4def842433285a9cb8c7322f8a3749830bd07a5a78464a6ff2297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ace6acde7efb718c27a82cd1c9b085fc61fab8b3ae98244cafb7fb06778cf461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace6acde7efb718c27a82cd1c9b085fc61fab8b3ae98244cafb7fb06778cf461->enter($__internal_ace6acde7efb718c27a82cd1c9b085fc61fab8b3ae98244cafb7fb06778cf461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "
";
        
        $__internal_ace6acde7efb718c27a82cd1c9b085fc61fab8b3ae98244cafb7fb06778cf461->leave($__internal_ace6acde7efb718c27a82cd1c9b085fc61fab8b3ae98244cafb7fb06778cf461_prof);

        
        $__internal_8adbc7a7a0c4def842433285a9cb8c7322f8a3749830bd07a5a78464a6ff2297->leave($__internal_8adbc7a7a0c4def842433285a9cb8c7322f8a3749830bd07a5a78464a6ff2297_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:listereservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  133 => 51,  119 => 41,  116 => 40,  109 => 38,  97 => 31,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 23,  66 => 22,  50 => 8,  41 => 7,  11 => 2,);
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
        <th>nom client</th>
        <th>adresse bien</th>
        <th>type bien</th>
                <th>prix</th>
        <th>image</th>

        <th>details</th>
    </tr>
</thead>
  {% for reservation in reservations %}
  <tbody>
    <tr>
        <td>{{reservation.client.nomComplet}}</td>
        <td>{{reservation.bien.libellelocalite}}</td>
        <td>{{reservation.bien.typebien}}</td>
        <td>{{reservation.bien.prixlocation}}</td>
        <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{reservation.bien.images[0]}}\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"{{path('details',{id:reservation.id})}}\" class=\"btn btn-default bg-primary\" id=\"reservationid\">DETAILS</a></td>


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






", "HTLImmobilierBundle:Front:listereservation.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Front/listereservation.html.twig");
    }
}
