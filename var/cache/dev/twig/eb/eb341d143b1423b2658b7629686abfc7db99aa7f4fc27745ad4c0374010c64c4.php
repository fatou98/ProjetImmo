<?php

/* ::prop.html.twig */
class __TwigTemplate_1db12af4f513a7b43ec0c73f1b1ce69e21bc66d346d7432b9e88477b8a61b9e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9f922b5b3df0c3e3ebc8d8321995aa6b275b30828aea82df80ef21e699dadc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f922b5b3df0c3e3ebc8d8321995aa6b275b30828aea82df80ef21e699dadc3->enter($__internal_d9f922b5b3df0c3e3ebc8d8321995aa6b275b30828aea82df80ef21e699dadc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::prop.html.twig"));

        $__internal_ce69b4b5d7ee49bd278e95df1ff49be4f9ef004c46a0c7468e29f9d701700371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce69b4b5d7ee49bd278e95df1ff49be4f9ef004c46a0c7468e29f9d701700371->enter($__internal_ce69b4b5d7ee49bd278e95df1ff49be4f9ef004c46a0c7468e29f9d701700371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::prop.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/contact_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/contact_responsive.css"), "html", null, true);
        echo "\">
  <!-- Dropzone css -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

</head>
<body>
<style type=\"text/css\">
  
.reservations a{
    color:black;
}
.reservations a:hover ,.reservations a:focus , .reservations a:visited{
    color:black;
}
.pagination > li > a,
.pagination > li > span{
    color: black;

}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus{
    background-color: #246200;
    color:white;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus{
    background-color:#246200;
    color: white;
    border: 1px solid #dddddd;
}
</style>
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
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
               
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
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
                
      </ul>
    </div>
  </div>
<br><br><br><br><br><br><br>
<div class=\"container\">

 ";
        // line 142
        $this->displayBlock('form', $context, $blocks);
        // line 144
        echo "</div>
</div>

<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact_custom.js"), "html", null, true);
        echo "\"></script>
   <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_d9f922b5b3df0c3e3ebc8d8321995aa6b275b30828aea82df80ef21e699dadc3->leave($__internal_d9f922b5b3df0c3e3ebc8d8321995aa6b275b30828aea82df80ef21e699dadc3_prof);

        
        $__internal_ce69b4b5d7ee49bd278e95df1ff49be4f9ef004c46a0c7468e29f9d701700371->leave($__internal_ce69b4b5d7ee49bd278e95df1ff49be4f9ef004c46a0c7468e29f9d701700371_prof);

    }

    // line 142
    public function block_form($context, array $blocks = array())
    {
        $__internal_c2b0edd1e7eb19f4f8a33fa951f586dfbb6b57b1addedfa4cd5047c1694a2134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b0edd1e7eb19f4f8a33fa951f586dfbb6b57b1addedfa4cd5047c1694a2134->enter($__internal_c2b0edd1e7eb19f4f8a33fa951f586dfbb6b57b1addedfa4cd5047c1694a2134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6d5933d5b11cde3c534a83769bd1b20023279476ede2950129eebd98a9f1a56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5933d5b11cde3c534a83769bd1b20023279476ede2950129eebd98a9f1a56c->enter($__internal_6d5933d5b11cde3c534a83769bd1b20023279476ede2950129eebd98a9f1a56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 143
        echo " ";
        
        $__internal_6d5933d5b11cde3c534a83769bd1b20023279476ede2950129eebd98a9f1a56c->leave($__internal_6d5933d5b11cde3c534a83769bd1b20023279476ede2950129eebd98a9f1a56c_prof);

        
        $__internal_c2b0edd1e7eb19f4f8a33fa951f586dfbb6b57b1addedfa4cd5047c1694a2134->leave($__internal_c2b0edd1e7eb19f4f8a33fa951f586dfbb6b57b1addedfa4cd5047c1694a2134_prof);

    }

    public function getTemplateName()
    {
        return "::prop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 143,  278 => 142,  263 => 159,  258 => 157,  254 => 156,  249 => 154,  245 => 153,  241 => 152,  237 => 151,  233 => 150,  229 => 149,  225 => 148,  221 => 147,  216 => 144,  214 => 142,  203 => 134,  169 => 103,  85 => 22,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  26 => 1,);
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
<link href=\"{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/main_styles.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/responsive.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('plugins/themify-icons/themify-icons.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/contact_styles.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/contact_responsive.css')}}\">
  <!-- Dropzone css -->
        <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

</head>
<body>
<style type=\"text/css\">
  
.reservations a{
    color:black;
}
.reservations a:hover ,.reservations a:focus , .reservations a:visited{
    color:black;
}
.pagination > li > a,
.pagination > li > span{
    color: black;

}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus{
    background-color: #246200;
    color:white;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus{
    background-color:#246200;
    color: white;
    border: 1px solid #dddddd;
}
</style>
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
                
      </ul>
    </div>
  </div>
<br><br><br><br><br><br><br>
<div class=\"container\">

 {% block form %}
 {% endblock %}
</div>
</div>

<script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
<script src=\"{{asset('styles/bootstrap4/popper.js')}}\"></script>
<script src=\"{{asset('styles/bootstrap4/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('plugins/Isotope/isotope.pkgd.min.js')}}\"></script>
<script src=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}\"></script>
<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
<script src=\"{{asset('js/custom.js')}}\"></script>
<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}\"></script>
<script src=\"{{asset('js/contact_custom.js')}}\"></script>
   <!-- Page Specific JS Libraries -->
        <script src=\"{{asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>

</body>

</html>", "::prop.html.twig", "/var/www/html/templateadmin/app/Resources/views/prop.html.twig");
    }
}
