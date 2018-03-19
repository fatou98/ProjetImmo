<?php

/* HTLImmobilierBundle:Front:formsearch.html.twig */
class __TwigTemplate_ff7f3b4f9a6a89dcae559b99a1195c1dcaaa8fcc1c9de1534902d05695040e65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "HTLImmobilierBundle:Front:formsearch.html.twig", 1);
        $this->blocks = array(
            'image' => array($this, 'block_image'),
            'image1' => array($this, 'block_image1'),
            'description' => array($this, 'block_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2058dc47226f0d6e55e799c9e39daa6f568b79d4e827831a8a7cf40739d99216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2058dc47226f0d6e55e799c9e39daa6f568b79d4e827831a8a7cf40739d99216->enter($__internal_2058dc47226f0d6e55e799c9e39daa6f568b79d4e827831a8a7cf40739d99216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $__internal_76bd05968d0a3e07523efaee784236e87c35404fc2b3a0ae967040bf20074e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bd05968d0a3e07523efaee784236e87c35404fc2b3a0ae967040bf20074e1e->enter($__internal_76bd05968d0a3e07523efaee784236e87c35404fc2b3a0ae967040bf20074e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2058dc47226f0d6e55e799c9e39daa6f568b79d4e827831a8a7cf40739d99216->leave($__internal_2058dc47226f0d6e55e799c9e39daa6f568b79d4e827831a8a7cf40739d99216_prof);

        
        $__internal_76bd05968d0a3e07523efaee784236e87c35404fc2b3a0ae967040bf20074e1e->leave($__internal_76bd05968d0a3e07523efaee784236e87c35404fc2b3a0ae967040bf20074e1e_prof);

    }

    // line 2
    public function block_image($context, array $blocks = array())
    {
        $__internal_7806627c46299718e88f8a80bfb4fb5d0dc74cc9e48482a05cac00ee0dac74f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7806627c46299718e88f8a80bfb4fb5d0dc74cc9e48482a05cac00ee0dac74f8->enter($__internal_7806627c46299718e88f8a80bfb4fb5d0dc74cc9e48482a05cac00ee0dac74f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        $__internal_2b227c9c0507984b14a89ae8f2e7029511185b0f9406766ec48333079509ec05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b227c9c0507984b14a89ae8f2e7029511185b0f9406766ec48333079509ec05->enter($__internal_2b227c9c0507984b14a89ae8f2e7029511185b0f9406766ec48333079509ec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 4
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "<li style=\"\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\" alt=\"\" data-image=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\"  height=\"110px\"></li>       
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 7
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo " ";
        
        $__internal_2b227c9c0507984b14a89ae8f2e7029511185b0f9406766ec48333079509ec05->leave($__internal_2b227c9c0507984b14a89ae8f2e7029511185b0f9406766ec48333079509ec05_prof);

        
        $__internal_7806627c46299718e88f8a80bfb4fb5d0dc74cc9e48482a05cac00ee0dac74f8->leave($__internal_7806627c46299718e88f8a80bfb4fb5d0dc74cc9e48482a05cac00ee0dac74f8_prof);

    }

    // line 11
    public function block_image1($context, array $blocks = array())
    {
        $__internal_0c3fbf8be3243dd7817e1a1e90cf5055cf54057f7e86769d1219fd97b7f3cf4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3fbf8be3243dd7817e1a1e90cf5055cf54057f7e86769d1219fd97b7f3cf4c->enter($__internal_0c3fbf8be3243dd7817e1a1e90cf5055cf54057f7e86769d1219fd97b7f3cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image1"));

        $__internal_123b8ec4f6ea649c9e8abc1aaff7b2c44fb88d781d1dab415b0595b607c4cf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123b8ec4f6ea649c9e8abc1aaff7b2c44fb88d781d1dab415b0595b607c4cf6e->enter($__internal_123b8ec4f6ea649c9e8abc1aaff7b2c44fb88d781d1dab415b0595b607c4cf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image1"));

        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 13
            echo "<div class=\"single_product_image_background\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "')\"></div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " ";
        
        $__internal_123b8ec4f6ea649c9e8abc1aaff7b2c44fb88d781d1dab415b0595b607c4cf6e->leave($__internal_123b8ec4f6ea649c9e8abc1aaff7b2c44fb88d781d1dab415b0595b607c4cf6e_prof);

        
        $__internal_0c3fbf8be3243dd7817e1a1e90cf5055cf54057f7e86769d1219fd97b7f3cf4c->leave($__internal_0c3fbf8be3243dd7817e1a1e90cf5055cf54057f7e86769d1219fd97b7f3cf4c_prof);

    }

    // line 17
    public function block_description($context, array $blocks = array())
    {
        $__internal_fde8c6afc960f20316583ccce49d4772adfb6ce0ee196ed9be358adcfe304d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde8c6afc960f20316583ccce49d4772adfb6ce0ee196ed9be358adcfe304d24->enter($__internal_fde8c6afc960f20316583ccce49d4772adfb6ce0ee196ed9be358adcfe304d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_21ea43145e2d70315f871742cbda265782bd8758d6d1434cf9740aa5bdc01052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ea43145e2d70315f871742cbda265782bd8758d6d1434cf9740aa5bdc01052->enter($__internal_21ea43145e2d70315f871742cbda265782bd8758d6d1434cf9740aa5bdc01052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 19
            echo " <div class=\"col-lg-5\">
  <div class=\"product_details\">
   ";
            // line 21
            if (array_key_exists("saved", $context)) {
                // line 22
                echo "                        <div class=\"alert alert-success\" role=\"alert\">
                            Reservation enregistré avec succès.
                        </div>
";
            }
            // line 26
            echo "          <div class=\"product_details_title\">
            <h2>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</h2>
    <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</p>
  </div>
  <div class=\"free_delivery d-flex flex-row align-items-center justify-content-center\">
  <span class=\"ti-truck\"></span><span> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</span>
          </div>
          <div class=\"\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</div>
        </div>
      </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " ";
        
        $__internal_21ea43145e2d70315f871742cbda265782bd8758d6d1434cf9740aa5bdc01052->leave($__internal_21ea43145e2d70315f871742cbda265782bd8758d6d1434cf9740aa5bdc01052_prof);

        
        $__internal_fde8c6afc960f20316583ccce49d4772adfb6ce0ee196ed9be358adcfe304d24->leave($__internal_fde8c6afc960f20316583ccce49d4772adfb6ce0ee196ed9be358adcfe304d24_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:formsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 38,  191 => 37,  182 => 33,  177 => 31,  171 => 28,  167 => 27,  164 => 26,  158 => 22,  156 => 21,  152 => 19,  147 => 18,  138 => 17,  128 => 16,  122 => 15,  113 => 13,  108 => 12,  99 => 11,  89 => 10,  83 => 9,  74 => 7,  62 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
{% block image %}
{% for bien in biens %}
               {% for image in  bien.images %}
<li style=\"\"><img src=\"{{ asset('image/') }}{{image.image}}\" alt=\"\" data-image=\"{{ asset('image/') }}{{image.image}}\"  height=\"110px\"></li>       
{% else %}
               {% endfor %}
{% else %}
  {% endfor %}
 {% endblock %}
 {% block image1 %}
{% for bien in biens %}
<div class=\"single_product_image_background\" style=\"background-image:url('{{ asset('image/') }}{{bien.images[0]}}')\"></div>
{% else %}
  {% endfor %}
 {% endblock %}
  {% block description %}
{% for bien in biens %}
 <div class=\"col-lg-5\">
  <div class=\"product_details\">
   {% if saved is defined %}
                        <div class=\"alert alert-success\" role=\"alert\">
                            Reservation enregistré avec succès.
                        </div>
{% endif %}
          <div class=\"product_details_title\">
            <h2>{{bien.nombien}}</h2>
    <p>{{bien.description}}</p>
  </div>
  <div class=\"free_delivery d-flex flex-row align-items-center justify-content-center\">
  <span class=\"ti-truck\"></span><span> {{bien.libellelocalite}}</span>
          </div>
          <div class=\"\">{{bien.prixlocation}}</div>
        </div>
      </div>
      {% else %}
  {% endfor %}
 {% endblock %}", "HTLImmobilierBundle:Front:formsearch.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Front/formsearch.html.twig");
    }
}
