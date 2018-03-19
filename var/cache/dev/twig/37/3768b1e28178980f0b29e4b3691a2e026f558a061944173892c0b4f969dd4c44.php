<?php

/* HTLImmobilierBundle:Reservation:accueil.html.twig */
class __TwigTemplate_456740ac7bb3063f8ccabd1cccc9071f425daf9315cbc69cb4c0a22c250fcfc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::prop.html.twig", "HTLImmobilierBundle:Reservation:accueil.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::prop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9474665b1d3670e513fd58db69dafea705eb54a892b2f1358da661e97a3cf9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9474665b1d3670e513fd58db69dafea705eb54a892b2f1358da661e97a3cf9d3->enter($__internal_9474665b1d3670e513fd58db69dafea705eb54a892b2f1358da661e97a3cf9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        $__internal_63465cd4863cb0b2f25ba0913157a4540f3595e506cf4801075af6d48dce6d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63465cd4863cb0b2f25ba0913157a4540f3595e506cf4801075af6d48dce6d61->enter($__internal_63465cd4863cb0b2f25ba0913157a4540f3595e506cf4801075af6d48dce6d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9474665b1d3670e513fd58db69dafea705eb54a892b2f1358da661e97a3cf9d3->leave($__internal_9474665b1d3670e513fd58db69dafea705eb54a892b2f1358da661e97a3cf9d3_prof);

        
        $__internal_63465cd4863cb0b2f25ba0913157a4540f3595e506cf4801075af6d48dce6d61->leave($__internal_63465cd4863cb0b2f25ba0913157a4540f3595e506cf4801075af6d48dce6d61_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_f7f6a04f0967ea4cd927514cf4b20413ffb0cd96379c69f90488051c78aead7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f6a04f0967ea4cd927514cf4b20413ffb0cd96379c69f90488051c78aead7b->enter($__internal_f7f6a04f0967ea4cd927514cf4b20413ffb0cd96379c69f90488051c78aead7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_ab8f54f4ae89c31113335942a68417bab7cb0e41189fe641b4a59d42648994bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8f54f4ae89c31113335942a68417bab7cb0e41189fe641b4a59d42648994bd->enter($__internal_ab8f54f4ae89c31113335942a68417bab7cb0e41189fe641b4a59d42648994bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title\">
            <h2>PROPOSER UN BIEN</h2>
             ";
        // line 7
        if (array_key_exists("saved", $context)) {
            // line 8
            echo "                        <div class=\"alert alert-success\" role=\"alert\">
                            Reservation enregistré avec succès.
                        </div>
";
        }
        // line 12
        echo "          </div>
        </div>
      </div>
            
 <form  method=\"post\" class=\"cmxform form-horizontal tasi-form register-form row\" id=\"signupForm\"  novalidate=\"novalidate\">              
 <div class=\"col-md-6 register-sec\">
                <h2 class=\"text-center\">PROPRIETAIRE</h2>      <div class=\"form-group\">
                        <label for=\"name\" class=\"text-uppercase\">Nom Complet</label>
                        <input type=\"name\" name=\"nomcomplet\" class=\"form-control\" placeholder=\"nom\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Address\" class=\"text-uppercase\">Adresse</label>
                        <input type=\"address\" name=\"adresse\" class=\"form-control\" placeholder=\"adresse\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail\" class=\"text-uppercase\">Email</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"numpiece\" class=\"text-uppercase\">Numero Piece</label>
                        <input type=\"number\" name=\"numpiece\" class=\"form-control\" placeholder=\"numero piece\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"tel\" class=\"text-uppercase\">TEL</label>
                        <input type=\"number\" name=\"tel\" class=\"form-control\" placeholder=\"tel\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"codebank\" class=\"text-uppercase\">Code Banque</label>
                        <input type=\"number\" name=\"codebanque\" class=\"form-control\" placeholder=\"code banque\">
                    </div>
                                           <div class=\"form-group\">
  <label for=\"comment\">Description Bien:</label>
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
</div> 
        
</div>

                       <div class=\"col-md-6 register-sec\">                <h2 class=\"text-center\">BIEN</h2>
                            
                                                <div class=\"form-group\">
                                                    <label for=\"firstname\" class=\"control-label \">Nom bien </label>
                                                        <input class=\"form-control\" id=\"nombien\" name=\"nombien\" type=\"text\">
                                                    
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"lastname\" class=\"control-label \">Prix Location  *</label>
                                                        <input class=\"form-control\" name=\"prixlocation\" >
                                                </div>
                                                <div class=\"form-group\" id=\"typebien\">
  <label for=\"usr\">Type bien:</label>
  <input type=\"text\" class=\"form-control\" name=\"libelletype\">
</div>
<div class=\"form-group\" id=\"localite\">
  <label for=\"usr\">Localite:</label>
  <input type=\"text\" class=\"form-control\" name=\"lieu\">
</div>
                                             
                                                <div class=\"form-group\">
                                                    <label for=\"email\" class=\"control-label\">Etat*</label>
                                                        <input class=\"form-control\" id=\"email\" name=\"etat\" type=\"number\">
                                                </div>
                                              <label for=\"confirm_password\" class=\"control-label col-lg-2\">Image:</label>
                                             <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                    <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"imagebien\" type=\"file\" >
                                      </div>
                                    </div>
                                </div>
                         
                       <br><br>
                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                                        <input class=\"btn btn-danger waves-effect waves-light\" type=\"submit\" name=\"save\" value=\"Enregistrer\">
                                                       
                                                  </div>
                                                </div>
                                              </div></div>
                                            </form>

</div>


             ";
        
        $__internal_ab8f54f4ae89c31113335942a68417bab7cb0e41189fe641b4a59d42648994bd->leave($__internal_ab8f54f4ae89c31113335942a68417bab7cb0e41189fe641b4a59d42648994bd_prof);

        
        $__internal_f7f6a04f0967ea4cd927514cf4b20413ffb0cd96379c69f90488051c78aead7b->leave($__internal_f7f6a04f0967ea4cd927514cf4b20413ffb0cd96379c69f90488051c78aead7b_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Reservation:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  57 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::prop.html.twig\" %}
 {% block form %}
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title\">
            <h2>PROPOSER UN BIEN</h2>
             {% if saved is defined %}
                        <div class=\"alert alert-success\" role=\"alert\">
                            Reservation enregistré avec succès.
                        </div>
{% endif %}
          </div>
        </div>
      </div>
            
 <form  method=\"post\" class=\"cmxform form-horizontal tasi-form register-form row\" id=\"signupForm\"  novalidate=\"novalidate\">              
 <div class=\"col-md-6 register-sec\">
                <h2 class=\"text-center\">PROPRIETAIRE</h2>      <div class=\"form-group\">
                        <label for=\"name\" class=\"text-uppercase\">Nom Complet</label>
                        <input type=\"name\" name=\"nomcomplet\" class=\"form-control\" placeholder=\"nom\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Address\" class=\"text-uppercase\">Adresse</label>
                        <input type=\"address\" name=\"adresse\" class=\"form-control\" placeholder=\"adresse\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail\" class=\"text-uppercase\">Email</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"numpiece\" class=\"text-uppercase\">Numero Piece</label>
                        <input type=\"number\" name=\"numpiece\" class=\"form-control\" placeholder=\"numero piece\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"tel\" class=\"text-uppercase\">TEL</label>
                        <input type=\"number\" name=\"tel\" class=\"form-control\" placeholder=\"tel\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"codebank\" class=\"text-uppercase\">Code Banque</label>
                        <input type=\"number\" name=\"codebanque\" class=\"form-control\" placeholder=\"code banque\">
                    </div>
                                           <div class=\"form-group\">
  <label for=\"comment\">Description Bien:</label>
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
</div> 
        
</div>

                       <div class=\"col-md-6 register-sec\">                <h2 class=\"text-center\">BIEN</h2>
                            
                                                <div class=\"form-group\">
                                                    <label for=\"firstname\" class=\"control-label \">Nom bien </label>
                                                        <input class=\"form-control\" id=\"nombien\" name=\"nombien\" type=\"text\">
                                                    
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"lastname\" class=\"control-label \">Prix Location  *</label>
                                                        <input class=\"form-control\" name=\"prixlocation\" >
                                                </div>
                                                <div class=\"form-group\" id=\"typebien\">
  <label for=\"usr\">Type bien:</label>
  <input type=\"text\" class=\"form-control\" name=\"libelletype\">
</div>
<div class=\"form-group\" id=\"localite\">
  <label for=\"usr\">Localite:</label>
  <input type=\"text\" class=\"form-control\" name=\"lieu\">
</div>
                                             
                                                <div class=\"form-group\">
                                                    <label for=\"email\" class=\"control-label\">Etat*</label>
                                                        <input class=\"form-control\" id=\"email\" name=\"etat\" type=\"number\">
                                                </div>
                                              <label for=\"confirm_password\" class=\"control-label col-lg-2\">Image:</label>
                                             <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                    <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"imagebien\" type=\"file\" >
                                      </div>
                                    </div>
                                </div>
                         
                       <br><br>
                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                                        <input class=\"btn btn-danger waves-effect waves-light\" type=\"submit\" name=\"save\" value=\"Enregistrer\">
                                                       
                                                  </div>
                                                </div>
                                              </div></div>
                                            </form>

</div>


             {% endblock %}", "HTLImmobilierBundle:Reservation:accueil.html.twig", "/var/www/html/templateadmin/src/HTL/ImmobilierBundle/Resources/views/Reservation/accueil.html.twig");
    }
}
