<?php

/* HTLImmobilierBundle:Front:afficher.html.twig */
class __TwigTemplate_88481a2bc7cec6194577c953c81db5cfb66cca2e70dc7097105bf3143cf674ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e234805c4242d575bab10ec82741429e515f74bdd598d4a8f5c284b56314d848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e234805c4242d575bab10ec82741429e515f74bdd598d4a8f5c284b56314d848->enter($__internal_e234805c4242d575bab10ec82741429e515f74bdd598d4a8f5c284b56314d848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:afficher.html.twig"));

        $__internal_42be9ab5b5abc54eff53a41a9ec7e57618e2503fbc271117339d5845658bc898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42be9ab5b5abc54eff53a41a9ec7e57618e2503fbc271117339d5845658bc898->enter($__internal_42be9ab5b5abc54eff53a41a9ec7e57618e2503fbc271117339d5845658bc898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:afficher.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["infos"] ?? $this->getContext($context, "infos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 6
            echo "
  <title>contrat ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "proprietaire", array()), "nomComplet", array()), "html", null, true);
            echo "</title>
  <meta charset=\"utf-8\">

</head>
<body>
<style type=\"text/css\">
  body{
    font-size: 18px;
    font-family: Lucida Calligraphy;
    margin-left: 50px;
    margin-right: 50px;
  }
  #titre{
     font-size: 26px;
     font-weight: bold;
     text-decoration: underline;
  }
  #header{
         font-weight: bold;

  }
</style>
<header id=\"header\">
  Province de:<br>
Ville de:<br>
Commune de:<br>
Territoire de:<br>
Cité de:<br>
</header>
<section>
<center id=\"titre\">CONTRAT DE LOCATION MODELE UNIQUE</center><br>

                         <center>  N° ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array()), "html", null, true);
            echo "/2018</center>  <br>
Entre les soussignés:<br>
-         Hortala Immobilier d'une part;<br>
et<br>
-Monsieur , Madame, Mademoiselle <b>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "proprietaire", array()), "nomComplet", array()), "html", null, true);
            echo "</b> résidant à ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "proprietaire", array()), "adresse", array()), "html", null, true);
            echo "
dénommé (e) \" Locataire\" d'autre part.
Il est conclu ce qui suit :<br>
I. Description du bien.<br>
Article 1 er :<br>
Le Bailleur donne en location au Locataire qui accepte, son bien immobilier
situé       au     n°résidant à <b>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo " </b>
Ce bien immobilier se decrit comme suit :
<b>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "bien", array()), "description", array()), "html", null, true);
            echo "</b><br>
II. Usage.
<br>
Article 2 :<br>
Le présent contrat s'applique au bien immobilier décrit-dessus mis en location pour usage:…………………………………………………………………………..(à présiser)
III. Loyer.<br>
Article 3 :<br>
Le loyer est mensuel. Il est fixé en monnaie nationale.
Il est de <b>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</b>
 Le taux de loyer ne peut être modifié qu'en cas de :<br>
- plus-value du bien loué;<br>
- réévaluation ou  dévaluation officielle de la monnaie nationale.
Cette modification doit faire l'objet d'un avenant au contrat contresigné par les deux parties et visé par l'Officier du Service Communal chargé de l'Habitat.
IV. Modalités de paiement.<br>
Article 4 :<br>
Le paiement du loyer peut s'effectuer en espèces, par chèque certifié ou par virement bancaire anticipativement ou à terme échu (à préciser par les deux parties) 
................................................................................................................................................................................................................................. 
................................................................................................................................................................................................................................. 
V. Garantie.<br>
Article 5 :<br>
La garantie locative est fixée à :<br>
- trois mois de loyer, pour un bien immobilier à usage résidentiel ;<br>
- six mois de loyer, pour un bien immobilier à usage commercial ;<br>
- douze mois de loyer, pour un bien immobilier à usage industriel ou mixte.<br>
Article 6 :<br>
A l'échéance du contrat de location, la garantie locative est remboursée au locataire après déduction, le cas échéant, des sommes dues au Bailleur.<br>
. .
Au cours du bail, la garantie locative n'est pas réajustable et n'est pas productive d'intérêts quelconques. Elle ne peut servir aucunement au paiement des loyers au cours du bail, sauf accord exprès des deux Parties.<br>

VI. Durée.<br>

Article 7 :<br>
Pour garantir la stabilité du bail, le contrat est conclu pour une durée minimum d'un an prenant cours le............ (date de réception par l'Officier du Service de l'Habitat). Il peut être renouvelé par tacite reconduction ou avec l'accord exprès des deux parties.
 <br>
VII. Obligations du Bailleur.<br>

Article 8 :<br>

Le Bailleur est tenu aux obligations suivantes:<br>
- mettre à la disposition du locataire le bien loué dans l'état approprié à sa destination;<br>
- accorder une jouissance paisible du bien loué;<br>
- s'acquitter de toutes les taxes légales en vigueur;<br>
- payer sa quote-part des factures d'eau, d'électricité, du téléphone et/ou autres, pour autant qu'il en fasse usage.<br>
VIII.    Obligations du Locataire.<br>
Article 9 :<br>
Le Locataire est 'tenu aux obligations. ci-après :<br>
- payer régulièrement son loyer aux termes convenus;<br>
- user du bien loué en bon père de famille;<br>
- répondre des dégradations du bien loué qui surviendraient pendant le bail et pour lesquelles il serait responsable;<br>
- payer régulièrement sa facture ou quote-part de facture de consommation d'eau, d'électricité, du téléphone etc.<br>
- ne pas apporter des modifications quelconques au bien loué sans l'accord écrit du Bailleur.<br>

IX. Sous-location ou cession.<br>

Article 10 :<br>
Il est interdit au locataire de sous-louer tout partie du bien loué comme de céder tout ou partie de son droit de bail.<br>

X. Conditions de résiliation.<br>

Article 11 :<br>
Le contrat de location prend fin, soit:<br>
1° à l'expiration du terme convenu et/ ou non renouvelé;<br>
2° sur accord des deux parties;<br>
3° à l'initiative de l'une des parties suite à l'inexécution par l'autre de ses obligations;<br>
4° par la perte du bien loué dû à un désastre naturel.<br>
Article 12 :<br>
En cas d'aliénation de l'immeuble, le Bailleur doit en informer le locataire et lui accorder un préavis légal.<br>
Article 13 :<br>
En cas de décès d'une des parties, le contrat prend fin à l'échéance convenue à l'article 7 et ne peut être renouvelé par tacite reconduction.<br>
Article 14 :<br>
Le préavis légal correspond au nombre des mois de garanties locatives.<br>


XI. Instance d'arbitrage.<br>


Article 15 :<br>
A défaut de règlement à l'amiable, tout conflit éventuel est soumis au Service local de l'Habitat à priori.<br>

XII. Sanction.<br>
Article 16 :<br>
La non-légalisation de contrat de location dans un délai de 72 heures après sa signature, entraîne le paiement par les parties d'une amende équivalent à un mois de loyer.
Fait à Kinshasa, le<br>
LE BAILLEUR          <br>                                                                                             <br>LE LOCATAIRE<br>
(Nom et Signature)                                                                                                 (Nom et Signature)<br>
LE SERVICE DE L'HABITAT                                  L'AUTORITE ADMINISTRATIVE LOCALE
 
DONT COUT
FC ………………………
<br>

TIMBRES FISCAUX
</section>
</body>
</html>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 148
            echo "    <h1>aucun bien de ces criteres</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo " 
   ";
        
        $__internal_e234805c4242d575bab10ec82741429e515f74bdd598d4a8f5c284b56314d848->leave($__internal_e234805c4242d575bab10ec82741429e515f74bdd598d4a8f5c284b56314d848_prof);

        
        $__internal_42be9ab5b5abc54eff53a41a9ec7e57618e2503fbc271117339d5845658bc898->leave($__internal_42be9ab5b5abc54eff53a41a9ec7e57618e2503fbc271117339d5845658bc898_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 149,  202 => 148,  108 => 59,  97 => 51,  92 => 49,  81 => 43,  74 => 39,  39 => 7,  36 => 6,  31 => 5,  25 => 1,);
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
<!DOCTYPE html>
<html>
<head>
    {% for info in infos %}

  <title>contrat {{info.proprietaire.nomComplet}}</title>
  <meta charset=\"utf-8\">

</head>
<body>
<style type=\"text/css\">
  body{
    font-size: 18px;
    font-family: Lucida Calligraphy;
    margin-left: 50px;
    margin-right: 50px;
  }
  #titre{
     font-size: 26px;
     font-weight: bold;
     text-decoration: underline;
  }
  #header{
         font-weight: bold;

  }
</style>
<header id=\"header\">
  Province de:<br>
Ville de:<br>
Commune de:<br>
Territoire de:<br>
Cité de:<br>
</header>
<section>
<center id=\"titre\">CONTRAT DE LOCATION MODELE UNIQUE</center><br>

                         <center>  N° {{info.id}}/2018</center>  <br>
Entre les soussignés:<br>
-         Hortala Immobilier d'une part;<br>
et<br>
-Monsieur , Madame, Mademoiselle <b>{{info.proprietaire.nomComplet}}</b> résidant à {{info.proprietaire.adresse}}
dénommé (e) \" Locataire\" d'autre part.
Il est conclu ce qui suit :<br>
I. Description du bien.<br>
Article 1 er :<br>
Le Bailleur donne en location au Locataire qui accepte, son bien immobilier
situé       au     n°résidant à <b>{{info.bien.libellelocalite}} </b>
Ce bien immobilier se decrit comme suit :
<b>{{info.bien.description}}</b><br>
II. Usage.
<br>
Article 2 :<br>
Le présent contrat s'applique au bien immobilier décrit-dessus mis en location pour usage:…………………………………………………………………………..(à présiser)
III. Loyer.<br>
Article 3 :<br>
Le loyer est mensuel. Il est fixé en monnaie nationale.
Il est de <b>{{info.bien.prixlocation}}</b>
 Le taux de loyer ne peut être modifié qu'en cas de :<br>
- plus-value du bien loué;<br>
- réévaluation ou  dévaluation officielle de la monnaie nationale.
Cette modification doit faire l'objet d'un avenant au contrat contresigné par les deux parties et visé par l'Officier du Service Communal chargé de l'Habitat.
IV. Modalités de paiement.<br>
Article 4 :<br>
Le paiement du loyer peut s'effectuer en espèces, par chèque certifié ou par virement bancaire anticipativement ou à terme échu (à préciser par les deux parties) 
................................................................................................................................................................................................................................. 
................................................................................................................................................................................................................................. 
V. Garantie.<br>
Article 5 :<br>
La garantie locative est fixée à :<br>
- trois mois de loyer, pour un bien immobilier à usage résidentiel ;<br>
- six mois de loyer, pour un bien immobilier à usage commercial ;<br>
- douze mois de loyer, pour un bien immobilier à usage industriel ou mixte.<br>
Article 6 :<br>
A l'échéance du contrat de location, la garantie locative est remboursée au locataire après déduction, le cas échéant, des sommes dues au Bailleur.<br>
. .
Au cours du bail, la garantie locative n'est pas réajustable et n'est pas productive d'intérêts quelconques. Elle ne peut servir aucunement au paiement des loyers au cours du bail, sauf accord exprès des deux Parties.<br>

VI. Durée.<br>

Article 7 :<br>
Pour garantir la stabilité du bail, le contrat est conclu pour une durée minimum d'un an prenant cours le............ (date de réception par l'Officier du Service de l'Habitat). Il peut être renouvelé par tacite reconduction ou avec l'accord exprès des deux parties.
 <br>
VII. Obligations du Bailleur.<br>

Article 8 :<br>

Le Bailleur est tenu aux obligations suivantes:<br>
- mettre à la disposition du locataire le bien loué dans l'état approprié à sa destination;<br>
- accorder une jouissance paisible du bien loué;<br>
- s'acquitter de toutes les taxes légales en vigueur;<br>
- payer sa quote-part des factures d'eau, d'électricité, du téléphone et/ou autres, pour autant qu'il en fasse usage.<br>
VIII.    Obligations du Locataire.<br>
Article 9 :<br>
Le Locataire est 'tenu aux obligations. ci-après :<br>
- payer régulièrement son loyer aux termes convenus;<br>
- user du bien loué en bon père de famille;<br>
- répondre des dégradations du bien loué qui surviendraient pendant le bail et pour lesquelles il serait responsable;<br>
- payer régulièrement sa facture ou quote-part de facture de consommation d'eau, d'électricité, du téléphone etc.<br>
- ne pas apporter des modifications quelconques au bien loué sans l'accord écrit du Bailleur.<br>

IX. Sous-location ou cession.<br>

Article 10 :<br>
Il est interdit au locataire de sous-louer tout partie du bien loué comme de céder tout ou partie de son droit de bail.<br>

X. Conditions de résiliation.<br>

Article 11 :<br>
Le contrat de location prend fin, soit:<br>
1° à l'expiration du terme convenu et/ ou non renouvelé;<br>
2° sur accord des deux parties;<br>
3° à l'initiative de l'une des parties suite à l'inexécution par l'autre de ses obligations;<br>
4° par la perte du bien loué dû à un désastre naturel.<br>
Article 12 :<br>
En cas d'aliénation de l'immeuble, le Bailleur doit en informer le locataire et lui accorder un préavis légal.<br>
Article 13 :<br>
En cas de décès d'une des parties, le contrat prend fin à l'échéance convenue à l'article 7 et ne peut être renouvelé par tacite reconduction.<br>
Article 14 :<br>
Le préavis légal correspond au nombre des mois de garanties locatives.<br>


XI. Instance d'arbitrage.<br>


Article 15 :<br>
A défaut de règlement à l'amiable, tout conflit éventuel est soumis au Service local de l'Habitat à priori.<br>

XII. Sanction.<br>
Article 16 :<br>
La non-légalisation de contrat de location dans un délai de 72 heures après sa signature, entraîne le paiement par les parties d'une amende équivalent à un mois de loyer.
Fait à Kinshasa, le<br>
LE BAILLEUR          <br>                                                                                             <br>LE LOCATAIRE<br>
(Nom et Signature)                                                                                                 (Nom et Signature)<br>
LE SERVICE DE L'HABITAT                                  L'AUTORITE ADMINISTRATIVE LOCALE
 
DONT COUT
FC ………………………
<br>

TIMBRES FISCAUX
</section>
</body>
</html>
        </div>
    {% else %}
    <h1>aucun bien de ces criteres</h1>
  {% endfor %} 
   ", "HTLImmobilierBundle:Front:afficher.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Front/afficher.html.twig");
    }
}
