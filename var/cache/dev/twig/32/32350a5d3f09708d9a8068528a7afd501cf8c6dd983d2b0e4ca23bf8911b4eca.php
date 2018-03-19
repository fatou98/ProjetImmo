<?php

/* HTLImmobilierBundle:Reservation:proposition.html.twig */
class __TwigTemplate_4e4c96b2f3ad2f0d33331b9f1fdcc9c01ce12db5986dfc3bd361a758c216f81c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "HTLImmobilierBundle:Reservation:proposition.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e56d930dc4824593b6e6201ad802c030d9a36fd5aa993f5a8612a46df94148c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e56d930dc4824593b6e6201ad802c030d9a36fd5aa993f5a8612a46df94148c->enter($__internal_2e56d930dc4824593b6e6201ad802c030d9a36fd5aa993f5a8612a46df94148c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:proposition.html.twig"));

        $__internal_c4c2779b127711236ce97769661a43b2d0d63685929c3f59513c5c684a4257d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c2779b127711236ce97769661a43b2d0d63685929c3f59513c5c684a4257d6->enter($__internal_c4c2779b127711236ce97769661a43b2d0d63685929c3f59513c5c684a4257d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:proposition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e56d930dc4824593b6e6201ad802c030d9a36fd5aa993f5a8612a46df94148c->leave($__internal_2e56d930dc4824593b6e6201ad802c030d9a36fd5aa993f5a8612a46df94148c_prof);

        
        $__internal_c4c2779b127711236ce97769661a43b2d0d63685929c3f59513c5c684a4257d6->leave($__internal_c4c2779b127711236ce97769661a43b2d0d63685929c3f59513c5c684a4257d6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_80b88f886e87618db55ddaeba03904e8cdee49c8e31aeb78eaccf2a06b45f433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b88f886e87618db55ddaeba03904e8cdee49c8e31aeb78eaccf2a06b45f433->enter($__internal_80b88f886e87618db55ddaeba03904e8cdee49c8e31aeb78eaccf2a06b45f433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09a0948015caabeabf97641cce9c22e19adad3509cbc0c9cbf6fb430cb646a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a0948015caabeabf97641cce9c22e19adad3509cbc0c9cbf6fb430cb646a0e->enter($__internal_09a0948015caabeabf97641cce9c22e19adad3509cbc0c9cbf6fb430cb646a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  \t<style type=\"text/css\">
  \t\tbody{
  \t\t\tfont-family: Times New Roman;
  \t\t}
  \t\t.panel-heading{
text-align: center;  \t\t}.panel{height: 300px;
  \t\t}
  \t\t.panel3{height: 400px;
  \t\t}
  \t\t
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["propositions"] ?? $this->getContext($context, "propositions")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
            // line 16
            echo "  \t</style>
  \t<div class=\"container\">
  \t\t<header class=\"row\"></header>
  \t\t<section class=\"row\">
  \t\t\t<div class=\"col-sm-6\">
  \t\t\t <div class=\"panel panel-primary\">
      <div class=\"panel-heading\"><h2>Proprietaire</h2></div>
      <div class=\"panel-body\">
      \t<h4><b>Prenoms et nom:</b>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "nomComplet", array()), "html", null, true);
            echo "</h4>
      \t<h4><b>Numero CNI:</b>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "numPiece", array()), "html", null, true);
            echo "</h4>
      \t<h4><b>TEL:</b>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "tel", array()), "html", null, true);
            echo "</h4>
      \t<h4><b>Email:</b>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "email", array()), "html", null, true);
            echo "</h4>
      \t<h4><b>Adresse:</b>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "adresse", array()), "html", null, true);
            echo "</h4>
      \t<h4><b>Code Banque:</b>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "codeBanque", array()), "html", null, true);
            echo "</h4>
      </div>
    </div>
  \t\t\t</div>  \t\t
  \t\t\t<div class=\"col-sm-6\">
  \t\t\t <div class=\"panel panel-primary\">
      <div class=\"panel-heading\"><h2>Bien</h2></div>
      <div class=\"panel-body\">
      \t<h4><b>Typebien:</b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</h4>
      \t<h4><b>Localite:";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</b></h4>
      \t<h4><b>Prix:</b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</h4>
      \t<h4><b>Etat:</b>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "etat", array()), "html", null, true);
            echo "</h4>
      \t<h4><b>Description:</b>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "description", array()), "html", null, true);
            echo "</h4>
      </div>
    </div>
  \t\t\t</div>
  <div class=\"col-sm-6\">
      <div class=\"panel panel3 panel-primary\">
        <div class=\"panel-heading\"><h2>Contrat</h2></div>
        <div class=\"panel-body\">
        \t <div class=\"form-group\">
  <label for=\"comment\">Terme du contrat:</label>
  ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["terme"] ?? $this->getContext($context, "terme")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
                // line 52
                echo "
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\" value=\"\">";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["contrat"], "termecontrat", array()), "html", null, true);
                echo "</textarea>
</div> <div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio\">Accepter</label>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\">Refuser</label>
  <form method=\"post\">
    <input type=\"hidden\" name=\"idpro\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "proprietaire", array()), "id", array()), "html", null, true);
                echo "\">
    <input type=\"hidden\" name=\"idbien\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposition"], "bien", array()), "id", array()), "html", null, true);
                echo "\">

</div></div><button type=\"submit\" class=\"btn btn-primary\" disabled=\"\" id=\"save\" name=\"save\">Valider</button>
      </div></div>  </form>
  </section>
  \t\t<footer class=\"row\"></footer>
  \t</div>
    <script type=\"text/javascript\">
      \$(document).ready(function(){

      \$('input[name=optradio]').on(\"change\",function(){
   if(\$(\" #optradio\").is(':checked') ){
    \$(\"#save\").removeAttr(\"disabled\");
} 
});});
    </script>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_09a0948015caabeabf97641cce9c22e19adad3509cbc0c9cbf6fb430cb646a0e->leave($__internal_09a0948015caabeabf97641cce9c22e19adad3509cbc0c9cbf6fb430cb646a0e_prof);

        
        $__internal_80b88f886e87618db55ddaeba03904e8cdee49c8e31aeb78eaccf2a06b45f433->leave($__internal_80b88f886e87618db55ddaeba03904e8cdee49c8e31aeb78eaccf2a06b45f433_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Reservation:proposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 61,  154 => 60,  144 => 53,  141 => 52,  136 => 51,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  66 => 16,  61 => 15,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}


    {% block body %}
  \t<style type=\"text/css\">
  \t\tbody{
  \t\t\tfont-family: Times New Roman;
  \t\t}
  \t\t.panel-heading{
text-align: center;  \t\t}.panel{height: 300px;
  \t\t}
  \t\t.panel3{height: 400px;
  \t\t}
  \t\t
{% for proposition in propositions %}
  \t</style>
  \t<div class=\"container\">
  \t\t<header class=\"row\"></header>
  \t\t<section class=\"row\">
  \t\t\t<div class=\"col-sm-6\">
  \t\t\t <div class=\"panel panel-primary\">
      <div class=\"panel-heading\"><h2>Proprietaire</h2></div>
      <div class=\"panel-body\">
      \t<h4><b>Prenoms et nom:</b>{{proposition.proprietaire.nomComplet}}</h4>
      \t<h4><b>Numero CNI:</b>{{proposition.proprietaire.numPiece}}</h4>
      \t<h4><b>TEL:</b>{{proposition.proprietaire.tel}}</h4>
      \t<h4><b>Email:</b>{{proposition.proprietaire.email}}</h4>
      \t<h4><b>Adresse:</b>{{proposition.proprietaire.adresse}}</h4>
      \t<h4><b>Code Banque:</b>{{proposition.proprietaire.codeBanque}}</h4>
      </div>
    </div>
  \t\t\t</div>  \t\t
  \t\t\t<div class=\"col-sm-6\">
  \t\t\t <div class=\"panel panel-primary\">
      <div class=\"panel-heading\"><h2>Bien</h2></div>
      <div class=\"panel-body\">
      \t<h4><b>Typebien:</b>{{proposition.bien.typebien}}</h4>
      \t<h4><b>Localite:{{proposition.bien.libellelocalite}}</b></h4>
      \t<h4><b>Prix:</b>{{proposition.bien.prixlocation}}</h4>
      \t<h4><b>Etat:</b>{{proposition.bien.etat}}</h4>
      \t<h4><b>Description:</b>{{proposition.bien.description}}</h4>
      </div>
    </div>
  \t\t\t</div>
  <div class=\"col-sm-6\">
      <div class=\"panel panel3 panel-primary\">
        <div class=\"panel-heading\"><h2>Contrat</h2></div>
        <div class=\"panel-body\">
        \t <div class=\"form-group\">
  <label for=\"comment\">Terme du contrat:</label>
  {% for contrat in terme %}

  <textarea class=\"form-control\" rows=\"5\" id=\"comment\" value=\"\">{{contrat.termecontrat}}</textarea>
</div> <div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio\">Accepter</label>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\">Refuser</label>
  <form method=\"post\">
    <input type=\"hidden\" name=\"idpro\" value=\"{{proposition.proprietaire.id}}\">
    <input type=\"hidden\" name=\"idbien\" value=\"{{proposition.bien.id}}\">

</div></div><button type=\"submit\" class=\"btn btn-primary\" disabled=\"\" id=\"save\" name=\"save\">Valider</button>
      </div></div>  </form>
  </section>
  \t\t<footer class=\"row\"></footer>
  \t</div>
    <script type=\"text/javascript\">
      \$(document).ready(function(){

      \$('input[name=optradio]').on(\"change\",function(){
   if(\$(\" #optradio\").is(':checked') ){
    \$(\"#save\").removeAttr(\"disabled\");
} 
});});
    </script>
{% else %}
{% endfor %}{% else %}
{% endfor %}
{% endblock %}
\t", "HTLImmobilierBundle:Reservation:proposition.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Reservation/proposition.html.twig");
    }
}
