<?php

/* HTLImmobilierBundle:Admin:addbien.html.twig */
class __TwigTemplate_edde59ea8c1a2a3da36467471ac80e71486603a15d85cdbdf387ad4135d60694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Admin:addbien.html.twig", 1);
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
        $__internal_f69bcd90f53a63ecb3e90159d5216d6fb08926c3541073e73dd463ed00e66a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69bcd90f53a63ecb3e90159d5216d6fb08926c3541073e73dd463ed00e66a32->enter($__internal_f69bcd90f53a63ecb3e90159d5216d6fb08926c3541073e73dd463ed00e66a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:addbien.html.twig"));

        $__internal_ea82edfa1167561fc88e630bfa085d19f48ec47085eca2d153128683fd0ae4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea82edfa1167561fc88e630bfa085d19f48ec47085eca2d153128683fd0ae4c0->enter($__internal_ea82edfa1167561fc88e630bfa085d19f48ec47085eca2d153128683fd0ae4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:addbien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f69bcd90f53a63ecb3e90159d5216d6fb08926c3541073e73dd463ed00e66a32->leave($__internal_f69bcd90f53a63ecb3e90159d5216d6fb08926c3541073e73dd463ed00e66a32_prof);

        
        $__internal_ea82edfa1167561fc88e630bfa085d19f48ec47085eca2d153128683fd0ae4c0->leave($__internal_ea82edfa1167561fc88e630bfa085d19f48ec47085eca2d153128683fd0ae4c0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_17f8fb3bacef7540d46fdacf7a49a46b87f73b1647467912d138cc290f870e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f8fb3bacef7540d46fdacf7a49a46b87f73b1647467912d138cc290f870e44->enter($__internal_17f8fb3bacef7540d46fdacf7a49a46b87f73b1647467912d138cc290f870e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2abe1ae4483c99b0d9affcbbb664422508aea8800dc1ece9dacf869cac30ed3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abe1ae4483c99b0d9affcbbb664422508aea8800dc1ece9dacf869cac30ed3b->enter($__internal_2abe1ae4483c99b0d9affcbbb664422508aea8800dc1ece9dacf869cac30ed3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "

                                <div class=\"panel panel-default col-lg-8\" style=\"margin-left: 180px;\">
                                    <div class=\"panel-heading\"><h2 class=\"panel-title\">AJOUTER UN BIEN</h2></div>
                                    <div class=\"panel-body\">
                                        <div class=\"form\">
                                            <form class=\"cmxform form-horizontal tasi-form\" id=\"signupForm\" method=\"get\" action=\"#\" novalidate=\"novalidate\">
                                                <div class=\"form-group\" id=\"typebien\">
  <label for=\"usr\">Type bien:</label>
  <input type=\"text\" class=\"form-control\" id=\"typebien\">
</div>
<div class=\"form-group\" id=\"localite\">
  <label for=\"usr\">Localite:</label>
  <input type=\"text\" class=\"form-control\" id=\"localite\">
</div>
                                                <div class=\"form-group\">
                                                    <label for=\"firstname\" class=\"control-label col-lg-2\">Nom bien </label>
                                                        <input class=\"form-control\" id=\"nombien\" name=\"nombien\" type=\"text\">
                                                    
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"lastname\" class=\"control-label col-lg-2\">Prix Location  *</label>
                                                        <input class=\"form-control\" id=\"prixlocation\" >
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"username\" class=\"control-label col-lg-2\">Type bien *</label>
                                                          <select class=\"form-control\" id=\"typebien\" name=\"typebien\" >
                                                            <option value=\"\">choisir un type</option>
                                                            <option value=\"\" id=\"nouveau\">Nouveau</option>
                                                            <option value=\"\">dkar</option><option value=\"\">louga</option>
                                                        </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"password\" class=\"control-label col-lg-2\">Localite *</label>
                                                        <select class=\"form-control\" id=\"localite\" name=\"localite\" >
                                                            <option value=\"\">choisir une localite</option><option value=\"\">dkar</option><option value=\"\">louga</option>
                                                        </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"confirm_password\" class=\"control-label col-lg-2\">Parent bien</label>
                                                        <input class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" type=\"password\">
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"email\" class=\"control-label col-lg-2\">Etat*</label>
                                                        <input class=\"form-control\" id=\"email\" name=\"email\" type=\"number\">
                                                </div>
                                                <div class=\"form-group\">
  <label for=\"comment\">Description:</label>
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
</div> 
                                                 <label for=\"confirm_password\" class=\"control-label col-lg-2\">Image:</label>
                                             <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                                        <button class=\"btn btn-success waves-effect waves-light\" type=\"submit\">Save</button>
                                                        <button class=\"btn btn-default waves-effect\" type=\"button\">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->

                       
                        <!-- end row -->
</div>
      
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>   <script>
            var resizefunc = [];
        </script>
       
        <!-- END wrapper -->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\">
                    \$(document).ready(function(){
                        \$(\"#typebien\").hide();
                        \$(\"#localite\").hide();
});
        </script>
        <script>
            var resizefunc = [];
        </script>
       
";
        
        $__internal_2abe1ae4483c99b0d9affcbbb664422508aea8800dc1ece9dacf869cac30ed3b->leave($__internal_2abe1ae4483c99b0d9affcbbb664422508aea8800dc1ece9dacf869cac30ed3b_prof);

        
        $__internal_17f8fb3bacef7540d46fdacf7a49a46b87f73b1647467912d138cc290f870e44->leave($__internal_17f8fb3bacef7540d46fdacf7a49a46b87f73b1647467912d138cc290f870e44_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:addbien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 90,  49 => 3,  40 => 2,  11 => 1,);
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


                                <div class=\"panel panel-default col-lg-8\" style=\"margin-left: 180px;\">
                                    <div class=\"panel-heading\"><h2 class=\"panel-title\">AJOUTER UN BIEN</h2></div>
                                    <div class=\"panel-body\">
                                        <div class=\"form\">
                                            <form class=\"cmxform form-horizontal tasi-form\" id=\"signupForm\" method=\"get\" action=\"#\" novalidate=\"novalidate\">
                                                <div class=\"form-group\" id=\"typebien\">
  <label for=\"usr\">Type bien:</label>
  <input type=\"text\" class=\"form-control\" id=\"typebien\">
</div>
<div class=\"form-group\" id=\"localite\">
  <label for=\"usr\">Localite:</label>
  <input type=\"text\" class=\"form-control\" id=\"localite\">
</div>
                                                <div class=\"form-group\">
                                                    <label for=\"firstname\" class=\"control-label col-lg-2\">Nom bien </label>
                                                        <input class=\"form-control\" id=\"nombien\" name=\"nombien\" type=\"text\">
                                                    
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"lastname\" class=\"control-label col-lg-2\">Prix Location  *</label>
                                                        <input class=\"form-control\" id=\"prixlocation\" >
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"username\" class=\"control-label col-lg-2\">Type bien *</label>
                                                          <select class=\"form-control\" id=\"typebien\" name=\"typebien\" >
                                                            <option value=\"\">choisir un type</option>
                                                            <option value=\"\" id=\"nouveau\">Nouveau</option>
                                                            <option value=\"\">dkar</option><option value=\"\">louga</option>
                                                        </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"password\" class=\"control-label col-lg-2\">Localite *</label>
                                                        <select class=\"form-control\" id=\"localite\" name=\"localite\" >
                                                            <option value=\"\">choisir une localite</option><option value=\"\">dkar</option><option value=\"\">louga</option>
                                                        </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"confirm_password\" class=\"control-label col-lg-2\">Parent bien</label>
                                                        <input class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" type=\"password\">
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"email\" class=\"control-label col-lg-2\">Etat*</label>
                                                        <input class=\"form-control\" id=\"email\" name=\"email\" type=\"number\">
                                                </div>
                                                <div class=\"form-group\">
  <label for=\"comment\">Description:</label>
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
</div> 
                                                 <label for=\"confirm_password\" class=\"control-label col-lg-2\">Image:</label>
                                             <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                                        <button class=\"btn btn-success waves-effect waves-light\" type=\"submit\">Save</button>
                                                        <button class=\"btn btn-default waves-effect\" type=\"button\">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->

                       
                        <!-- end row -->
</div>
      
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>   <script>
            var resizefunc = [];
        </script>
       
        <!-- END wrapper -->
        <script src=\"{{asset('vendors/jquery/dist/jquery.min.js')}}\"></script>
 <script type=\"text/javascript\">
                    \$(document).ready(function(){
                        \$(\"#typebien\").hide();
                        \$(\"#localite\").hide();
});
        </script>
        <script>
            var resizefunc = [];
        </script>
       
{% endblock  %}", "HTLImmobilierBundle:Admin:addbien.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Admin/addbien.html.twig");
    }
}
