<?php

/* ::layout.html.twig */
class __TwigTemplate_cfea1c00a93361cb2ae669cb7249c99af22ec600c0bde8f0c29327c754a2f603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'image' => array($this, 'block_image'),
            'image1' => array($this, 'block_image1'),
            'description' => array($this, 'block_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23778e4ce14e3eebf9ad7261766a125f5f21c0f05efac1307fb812c6842a0810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23778e4ce14e3eebf9ad7261766a125f5f21c0f05efac1307fb812c6842a0810->enter($__internal_23778e4ce14e3eebf9ad7261766a125f5f21c0f05efac1307fb812c6842a0810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_c0a0c0c7da64335708372f5d2962d384462b0dd23eadddc419cacaced792649a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a0c0c7da64335708372f5d2962d384462b0dd23eadddc419cacaced792649a->enter($__internal_c0a0c0c7da64335708372f5d2962d384462b0dd23eadddc419cacaced792649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>HORTALA IMMOBILIER| VOTRE AGENCE DE PROXIMITE </title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Colo Shop Template\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/single_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/single_responsive.css"), "html", null, true);
        echo "\">
</head>

<body>

<div class=\"super_container\">

  <!-- Header -->

  <header class=\"header trans_300\">

     <!-- Top Navigation -->

    <div class=\"top_nav\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"top_nav_left\">77 000 000 00 | 77 777 77 77 </div>
          </div>
          <div class=\"col-md-6 text-right\">
            <div class=\"top_nav_right\">
              <ul class=\"top_nav_menu\">
                <li class=\"account\">
                  <a href=\"#\">
                    My Account
                    <i class=\"fa fa-angle-down\"></i>
                  </a>
                  <ul class=\"account_selection\">
                    <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Sign In</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Register</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation -->

    <div class=\"main_nav_container\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-right\">
            <div class=\"logo_container\">
              <a href=\"#\">Hortala <span>Immobilier</span></a>
            </div>
            <nav class=\"navbar\">
              <ul class=\"navbar_menu\">
                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueiladmin");
        echo "\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
              </ul>
              
              <div class=\"hamburger_container\">
                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class=\"fs_menu_overlay\"></div>
  <div class=\"hamburger_menu\">
    <div class=\"hamburger_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
    <div class=\"hamburger_menu_content text-right\">
      <ul class=\"menu_top_nav\">
      
        <li class=\"menu_item has-children\">
          <a href=\"#\">
            My Account
            <i class=\"fa fa-angle-down\"></i>
          </a>
          <ul class=\"menu_selection\">
            <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Sign In</a></li>
            <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Register</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueiladmin");
        echo "\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
      </ul>
    </div>
  </div>


  </header>

  <div class=\"fs_menu_overlay\"></div>

  
  <div class=\"container single_product_container\">
    <div class=\"row\">
      <div class=\"col\">

        <!-- Breadcrumbs -->

      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-7\">
        <div class=\"single_product_pics\">
          <div class=\"row\">
            <div class=\"col-lg-3 thumbnails_col order-lg-1 order-2\">
              <div class=\"single_product_thumbnails\">
                <ul>
                  

                  ";
        // line 132
        $this->displayBlock('image', $context, $blocks);
        // line 134
        echo "
                </ul>
              </div>
            </div>
            <div class=\"col-lg-9 image_col order-lg-2 order-1\">
              <div class=\"single_product_image\">

                  ";
        // line 141
        $this->displayBlock('image1', $context, $blocks);
        // line 143
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 149
        $this->displayBlock('description', $context, $blocks);
        // line 151
        echo "    </div>

  </div>
  <div class=\"tabs_section_container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"tabs_container\">
            <ul class=\"tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center\">
              <li class=\"tab active\" data-active-tab=\"tab_1\"><span>Connexion</span></li>
              <li class=\"tab\" data-active-tab=\"tab_2\"><span>Inscription</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">

          <!-- Tab Description -->

          <div id=\"tab_1\" class=\"tab_container active\">
            <div class=\"row\">
              <div class=\"col-lg-5 desc_col\">
                <div class=\"tab_title\">
                  <h4>CONNEXION</h4>
                </div>
                <form id=\"connexion\" method=\"post\">
                  <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"connexion\">
    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\">

  <div class=\"form-group\">
    <label for=\"formGroupExampleInput\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"example@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"enter your password\"></div>

           <button type=\"submit\" class=\"btn btn-primary\" name=\"connexion\">Submit</button>
       

</form>

       
              </div>
            </div>
          </div>

          <!-- Tab Additional Info -->

          <div id=\"tab_2\" class=\"tab_container\">
            <div class=\"row\">
              <div class=\"col additional_info_col\">
                <div class=\"tab_title additional_info_title\">
                  <h4>Inscription</h4>
                </div>
               <form id=\"inscription\" method=\"post\">
            <div class=\"row\">
  <div class=\"form-group col-md-6\">
          <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"inscription\">

    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\">

      <label for=\"formGroupExampleInput2\">Numpiece</label>
    <input type=\"number\" class=\"form-control\" name=\"numpiece\" placeholder=\"enter your cni\" value=\"\">
  </div> <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Nom</label>
    <input type=\"text\" class=\"form-control\" name=\"nomComplet\" placeholder=\"entrez votre nom\" value=\"\">
  </div>
                </div>
  <div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">TEL</label>
    <input type=\"number\" class=\"form-control\" name=\"tel\" placeholder=\"enrter votre numero \" value=\"\">
                   </div><div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">Adresse</label>
    <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"entrer votre addresse\" value=\"\">
                   </div>
    <br><div class=\"form-group\">   <label for=\"formGroupExampleInput2\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"entrer votre email\" value=\"\">
                   </div>
           <br>
       <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"entrer votre password\" value=\"\"></div>

           <button type=\"submit\" class=\"btn btn-primary\" name=\"inscription\">Submit</button>
        
</form>

              </div>
            </div>
          </div>

         

</div>

<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/single_custom.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_23778e4ce14e3eebf9ad7261766a125f5f21c0f05efac1307fb812c6842a0810->leave($__internal_23778e4ce14e3eebf9ad7261766a125f5f21c0f05efac1307fb812c6842a0810_prof);

        
        $__internal_c0a0c0c7da64335708372f5d2962d384462b0dd23eadddc419cacaced792649a->leave($__internal_c0a0c0c7da64335708372f5d2962d384462b0dd23eadddc419cacaced792649a_prof);

    }

    // line 132
    public function block_image($context, array $blocks = array())
    {
        $__internal_a0f1bd421c26944e7f7c501df42487053706a8e890ab48cfd504838dc475fb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f1bd421c26944e7f7c501df42487053706a8e890ab48cfd504838dc475fb66->enter($__internal_a0f1bd421c26944e7f7c501df42487053706a8e890ab48cfd504838dc475fb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        $__internal_e3e6307d55fd0ae1558710933440d458b5df046a18d783b4eb6576bbb9e29a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e6307d55fd0ae1558710933440d458b5df046a18d783b4eb6576bbb9e29a41->enter($__internal_e3e6307d55fd0ae1558710933440d458b5df046a18d783b4eb6576bbb9e29a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        
        $__internal_e3e6307d55fd0ae1558710933440d458b5df046a18d783b4eb6576bbb9e29a41->leave($__internal_e3e6307d55fd0ae1558710933440d458b5df046a18d783b4eb6576bbb9e29a41_prof);

        
        $__internal_a0f1bd421c26944e7f7c501df42487053706a8e890ab48cfd504838dc475fb66->leave($__internal_a0f1bd421c26944e7f7c501df42487053706a8e890ab48cfd504838dc475fb66_prof);

    }

    // line 141
    public function block_image1($context, array $blocks = array())
    {
        $__internal_cfe65a7c56c4a724c27ab60044236e46933ac5f1b92a1079642352b0651658cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe65a7c56c4a724c27ab60044236e46933ac5f1b92a1079642352b0651658cc->enter($__internal_cfe65a7c56c4a724c27ab60044236e46933ac5f1b92a1079642352b0651658cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image1"));

        $__internal_a7b891d2272d3ca4877c5ca004758e61bacdc23c94e277a36456dc92c6440e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b891d2272d3ca4877c5ca004758e61bacdc23c94e277a36456dc92c6440e3f->enter($__internal_a7b891d2272d3ca4877c5ca004758e61bacdc23c94e277a36456dc92c6440e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image1"));

        
        $__internal_a7b891d2272d3ca4877c5ca004758e61bacdc23c94e277a36456dc92c6440e3f->leave($__internal_a7b891d2272d3ca4877c5ca004758e61bacdc23c94e277a36456dc92c6440e3f_prof);

        
        $__internal_cfe65a7c56c4a724c27ab60044236e46933ac5f1b92a1079642352b0651658cc->leave($__internal_cfe65a7c56c4a724c27ab60044236e46933ac5f1b92a1079642352b0651658cc_prof);

    }

    // line 149
    public function block_description($context, array $blocks = array())
    {
        $__internal_c99d70cdd49e1b157ba4dca0dd6189263aba73a97fd5e71aa062dd866b7d91e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99d70cdd49e1b157ba4dca0dd6189263aba73a97fd5e71aa062dd866b7d91e2->enter($__internal_c99d70cdd49e1b157ba4dca0dd6189263aba73a97fd5e71aa062dd866b7d91e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_52786cf42445c1e786ca09f7070b500aed56127f40e5ee8e3b816355dfaa338b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52786cf42445c1e786ca09f7070b500aed56127f40e5ee8e3b816355dfaa338b->enter($__internal_52786cf42445c1e786ca09f7070b500aed56127f40e5ee8e3b816355dfaa338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_52786cf42445c1e786ca09f7070b500aed56127f40e5ee8e3b816355dfaa338b->leave($__internal_52786cf42445c1e786ca09f7070b500aed56127f40e5ee8e3b816355dfaa338b_prof);

        
        $__internal_c99d70cdd49e1b157ba4dca0dd6189263aba73a97fd5e71aa062dd866b7d91e2->leave($__internal_c99d70cdd49e1b157ba4dca0dd6189263aba73a97fd5e71aa062dd866b7d91e2_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 149,  387 => 141,  370 => 132,  356 => 255,  352 => 254,  348 => 253,  344 => 252,  340 => 251,  336 => 250,  332 => 249,  328 => 248,  289 => 212,  253 => 179,  223 => 151,  221 => 149,  213 => 143,  211 => 141,  202 => 134,  200 => 132,  166 => 101,  162 => 100,  127 => 68,  123 => 67,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>HORTALA IMMOBILIER| VOTRE AGENCE DE PROXIMITE </title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Colo Shop Template\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/bootstrap4/bootstrap.min.css')}}\">
<link href=\"{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('plugins/themify-icons/themify-icons.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/single_styles.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/single_responsive.css')}}\">
</head>

<body>

<div class=\"super_container\">

  <!-- Header -->

  <header class=\"header trans_300\">

     <!-- Top Navigation -->

    <div class=\"top_nav\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"top_nav_left\">77 000 000 00 | 77 777 77 77 </div>
          </div>
          <div class=\"col-md-6 text-right\">
            <div class=\"top_nav_right\">
              <ul class=\"top_nav_menu\">
                <li class=\"account\">
                  <a href=\"#\">
                    My Account
                    <i class=\"fa fa-angle-down\"></i>
                  </a>
                  <ul class=\"account_selection\">
                    <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Sign In</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Register</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation -->

    <div class=\"main_nav_container\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-right\">
            <div class=\"logo_container\">
              <a href=\"#\">Hortala <span>Immobilier</span></a>
            </div>
            <nav class=\"navbar\">
              <ul class=\"navbar_menu\">
                <li><a href=\"{{path('searchprix')}}\">Accueil</a></li>
                <li><a href=\"{{path('accueiladmin')}}\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
              </ul>
              
              <div class=\"hamburger_container\">
                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class=\"fs_menu_overlay\"></div>
  <div class=\"hamburger_menu\">
    <div class=\"hamburger_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
    <div class=\"hamburger_menu_content text-right\">
      <ul class=\"menu_top_nav\">
      
        <li class=\"menu_item has-children\">
          <a href=\"#\">
            My Account
            <i class=\"fa fa-angle-down\"></i>
          </a>
          <ul class=\"menu_selection\">
            <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Sign In</a></li>
            <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Register</a></li>
          </ul>
        </li>
        <li><a href=\"{{path('searchprix')}}\">Accueil</a></li>
                <li><a href=\"{{path('accueiladmin')}}\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
      </ul>
    </div>
  </div>


  </header>

  <div class=\"fs_menu_overlay\"></div>

  
  <div class=\"container single_product_container\">
    <div class=\"row\">
      <div class=\"col\">

        <!-- Breadcrumbs -->

      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-7\">
        <div class=\"single_product_pics\">
          <div class=\"row\">
            <div class=\"col-lg-3 thumbnails_col order-lg-1 order-2\">
              <div class=\"single_product_thumbnails\">
                <ul>
                  

                  {% block image %}
{% endblock %}

                </ul>
              </div>
            </div>
            <div class=\"col-lg-9 image_col order-lg-2 order-1\">
              <div class=\"single_product_image\">

                  {% block image1 %}
{% endblock %}

              </div>
            </div>
          </div>
        </div>
      </div>
      {% block description %}
{% endblock %}
    </div>

  </div>
  <div class=\"tabs_section_container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"tabs_container\">
            <ul class=\"tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center\">
              <li class=\"tab active\" data-active-tab=\"tab_1\"><span>Connexion</span></li>
              <li class=\"tab\" data-active-tab=\"tab_2\"><span>Inscription</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">

          <!-- Tab Description -->

          <div id=\"tab_1\" class=\"tab_container active\">
            <div class=\"row\">
              <div class=\"col-lg-5 desc_col\">
                <div class=\"tab_title\">
                  <h4>CONNEXION</h4>
                </div>
                <form id=\"connexion\" method=\"post\">
                  <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"connexion\">
    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"{{ biens[0].id }}\">

  <div class=\"form-group\">
    <label for=\"formGroupExampleInput\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"example@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"enter your password\"></div>

           <button type=\"submit\" class=\"btn btn-primary\" name=\"connexion\">Submit</button>
       

</form>

       
              </div>
            </div>
          </div>

          <!-- Tab Additional Info -->

          <div id=\"tab_2\" class=\"tab_container\">
            <div class=\"row\">
              <div class=\"col additional_info_col\">
                <div class=\"tab_title additional_info_title\">
                  <h4>Inscription</h4>
                </div>
               <form id=\"inscription\" method=\"post\">
            <div class=\"row\">
  <div class=\"form-group col-md-6\">
          <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"inscription\">

    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"{{ biens[0].id }}\">

      <label for=\"formGroupExampleInput2\">Numpiece</label>
    <input type=\"number\" class=\"form-control\" name=\"numpiece\" placeholder=\"enter your cni\" value=\"\">
  </div> <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Nom</label>
    <input type=\"text\" class=\"form-control\" name=\"nomComplet\" placeholder=\"entrez votre nom\" value=\"\">
  </div>
                </div>
  <div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">TEL</label>
    <input type=\"number\" class=\"form-control\" name=\"tel\" placeholder=\"enrter votre numero \" value=\"\">
                   </div><div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">Adresse</label>
    <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"entrer votre addresse\" value=\"\">
                   </div>
    <br><div class=\"form-group\">   <label for=\"formGroupExampleInput2\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"entrer votre email\" value=\"\">
                   </div>
           <br>
       <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"entrer votre password\" value=\"\"></div>

           <button type=\"submit\" class=\"btn btn-primary\" name=\"inscription\">Submit</button>
        
</form>

              </div>
            </div>
          </div>

         

</div>

<script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
<script src=\"{{asset('styles/bootstrap4/popper.js')}}\"></script>
<script src=\"{{asset('styles/bootstrap4/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('plugins/Isotope/isotope.pkgd.min.js')}}\"></script>
<script src=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}\"></script>
<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
<script src=\"{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}\"></script>
<script src=\"{{asset('js/single_custom.js')}}\"></script>
</body>

</html>", "::layout.html.twig", "/var/www/html/templateadmin/app/Resources/views/layout.html.twig");
    }
}
