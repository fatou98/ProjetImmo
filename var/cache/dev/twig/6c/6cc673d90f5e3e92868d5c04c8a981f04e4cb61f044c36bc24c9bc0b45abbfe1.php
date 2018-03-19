<?php

/* ::base.html.twig */
class __TwigTemplate_0c060c254e8b8c812eb215cba8aef14061c975ec72a071b89eedb6639c4c86da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liste' => array($this, 'block_liste'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3061aff8d3d4f9c27545abc4c45be0a0a2f8e8f4e483553ee91ab714e65b30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3061aff8d3d4f9c27545abc4c45be0a0a2f8e8f4e483553ee91ab714e65b30d->enter($__internal_e3061aff8d3d4f9c27545abc4c45be0a0a2f8e8f4e483553ee91ab714e65b30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_abac97625b2ca6cb7f7c8ef5221a3f9597cea05e03a6b8068b85b1e7574e985b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abac97625b2ca6cb7f7c8ef5221a3f9597cea05e03a6b8068b85b1e7574e985b->enter($__internal_abac97625b2ca6cb7f7c8ef5221a3f9597cea05e03a6b8068b85b1e7574e985b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Hortala Immobilier</title>
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
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueiladmin");
        echo "\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
      </ul>
    </div>
  </div>
  <!-- Slider -->
  <div class=\"main_slider\" style=\"background-image:url('";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/slide3.jpg"), "html", null, true);
        echo "')\">
    <div class=\"container fill_height\">
      <div class=\"row align-items-center fill_height\">
        <div class=\"col\">
      <div class=\"main_slider_content\" style=\"width: 350px;background-color: white;padding: 30px; \">
      <h3 style=\"\">Rechercher le bien qui vous ressemble</h3>
      <form class=\"form-group\" method=\"post\">
              <div class=\"form-group\">
      <label for=\"usr\">Type:</label>
      <select name=\"libelletype\" class=\"form-control\"><option value=\"\" selected=\"true\">Choisir un type</option>
      ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typebiens"] ?? $this->getContext($context, "typebiens")));
        foreach ($context['_seq'] as $context["_key"] => $context["typebien"]) {
            // line 152
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typebien"], "libelletype", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typebien"], "libelletype", array()), "html", null, true);
            echo "</option>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typebien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "             </select></div>              <div class=\"form-group\">

      <label for=\"localite\">Localite:</label>
      <select name=\"libellelocalite\" class=\"form-control\"><option value=\"\" selected=\"true\">Choisir une localite</option>

      ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 160
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libellelocalite", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libellelocalite", array()), "html", null, true);
            echo "</option>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                        </select></div> <div class=\"form-group\">

      <label for=\"budget\">Budget:</label>
      <input type=\"number\" class=\"form-control\" name=\"prixlocation\" min=\"30000\">  </div>  
      <div class=\"form-group\"><label for=\"description\">Description:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"description\"></div>
          <button type=\"submit\" class=\"btn btn-danger mb-2\">Submit</button>
          
                                            </form></div>
        
        </div>
      </div>
    </div>
  </div>


<!-- Blogs -->

  <div class=\"blogs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title\">
            <h2>Liste des Biens</h2>
          </div>
        </div>
      </div>
      
       ";
        // line 190
        $this->displayBlock('liste', $context, $blocks);
        // line 191
        echo "

    </div>
  </div>

  <!-- New Arrivals -->
  

  <!-- Map Container -->

    <div class=\"row\">
  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.736884088203!2d-17.433130150003883!3d14.670867789707463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173b33f1b0f81%3A0xf0757775897d6587!2sCTIC+Dakar!5e0!3m2!1sfr!2ssn!4v1521402842789\" width=\"1300\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    </div>

    <!-- Contact Us -->

    <div class=\"row\">

  
        <!-- Follow Us -->

      <div class=\"col-lg-6 get_in_touch_col\">
        <div class=\"get_in_touch_contents\">
          <h1>CONTACTEZ-NOUS!</h1>
          <form action=\"post\">
            <div>
              <input id=\"input_name\" class=\"form_input input_name input_ph\" type=\"text\" name=\"name\" placeholder=\"Name\" required=\"required\" data-error=\"Name is required.\">
              <input id=\"input_email\" class=\"form_input input_email input_ph\" type=\"email\" name=\"email\" placeholder=\"Email\" required=\"required\" data-error=\"Valid email is required.\">
              <input id=\"input_website\" class=\"form_input input_website input_ph\" type=\"url\" name=\"name\" placeholder=\"Website\" required=\"required\" data-error=\"Name is required.\">
              <textarea id=\"input_message\" class=\"input_ph input_message\" name=\"message\"  placeholder=\"Message\" rows=\"3\" required data-error=\"Please, write us a message.\"></textarea>
            </div>
            <div>
              <button id=\"review_submit\" type=\"submit\" class=\"red_button message_submit_btn trans_300\" value=\"Submit\">send message</button>
            </div>
          </form>
        </div>
      </div>
    <div class=\"col-lg-6 contact_col\">
       
        <div class=\"follow_us_contents\">
          <h1>Nous rejoindre sur</h1>
          <ul class=\"social d-flex flex-row\">
            <li><a href=\"#\" style=\"background-color: #3a61c9\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #41a1f6\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #fb4343\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #8f6247\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
          </ul>
        </div>
        </div>

    </div>
  </div>

  
</div>

<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://www.google.sn/maps/@14.6687089,-17.4324328,17z?hl=fr&hl=fr\"></script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact_custom.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_e3061aff8d3d4f9c27545abc4c45be0a0a2f8e8f4e483553ee91ab714e65b30d->leave($__internal_e3061aff8d3d4f9c27545abc4c45be0a0a2f8e8f4e483553ee91ab714e65b30d_prof);

        
        $__internal_abac97625b2ca6cb7f7c8ef5221a3f9597cea05e03a6b8068b85b1e7574e985b->leave($__internal_abac97625b2ca6cb7f7c8ef5221a3f9597cea05e03a6b8068b85b1e7574e985b_prof);

    }

    // line 190
    public function block_liste($context, array $blocks = array())
    {
        $__internal_e6d2be535031de1f2be41d71ea0bd262ea49ba4b9b550a069abc8f5806d34fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d2be535031de1f2be41d71ea0bd262ea49ba4b9b550a069abc8f5806d34fd6->enter($__internal_e6d2be535031de1f2be41d71ea0bd262ea49ba4b9b550a069abc8f5806d34fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        $__internal_493e76e392f8df261ad93a53cb51555f8aa4e551c21886e26ca074f894d24b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493e76e392f8df261ad93a53cb51555f8aa4e551c21886e26ca074f894d24b72->enter($__internal_493e76e392f8df261ad93a53cb51555f8aa4e551c21886e26ca074f894d24b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        
        $__internal_493e76e392f8df261ad93a53cb51555f8aa4e551c21886e26ca074f894d24b72->leave($__internal_493e76e392f8df261ad93a53cb51555f8aa4e551c21886e26ca074f894d24b72_prof);

        
        $__internal_e6d2be535031de1f2be41d71ea0bd262ea49ba4b9b550a069abc8f5806d34fd6->leave($__internal_e6d2be535031de1f2be41d71ea0bd262ea49ba4b9b550a069abc8f5806d34fd6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 190,  393 => 257,  389 => 256,  384 => 254,  380 => 253,  376 => 252,  372 => 251,  368 => 250,  364 => 249,  360 => 248,  356 => 247,  298 => 191,  296 => 190,  266 => 162,  255 => 160,  251 => 159,  244 => 154,  233 => 152,  229 => 151,  216 => 141,  206 => 134,  202 => 133,  167 => 101,  163 => 100,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  26 => 1,);
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
<title>Hortala Immobilier</title>
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
  <!-- Slider -->
  <div class=\"main_slider\" style=\"background-image:url('{{asset('image/slide3.jpg')}}')\">
    <div class=\"container fill_height\">
      <div class=\"row align-items-center fill_height\">
        <div class=\"col\">
      <div class=\"main_slider_content\" style=\"width: 350px;background-color: white;padding: 30px; \">
      <h3 style=\"\">Rechercher le bien qui vous ressemble</h3>
      <form class=\"form-group\" method=\"post\">
              <div class=\"form-group\">
      <label for=\"usr\">Type:</label>
      <select name=\"libelletype\" class=\"form-control\"><option value=\"\" selected=\"true\">Choisir un type</option>
      {% for typebien in typebiens %}
      <option value=\"{{typebien.libelletype}}\">{{typebien.libelletype}}</option>
           {% endfor %}
             </select></div>              <div class=\"form-group\">

      <label for=\"localite\">Localite:</label>
      <select name=\"libellelocalite\" class=\"form-control\"><option value=\"\" selected=\"true\">Choisir une localite</option>

      {% for localite in localites %}
      <option value=\"{{localite.libellelocalite}}\">{{localite.libellelocalite}}</option>
               {% endfor %}
                        </select></div> <div class=\"form-group\">

      <label for=\"budget\">Budget:</label>
      <input type=\"number\" class=\"form-control\" name=\"prixlocation\" min=\"30000\">  </div>  
      <div class=\"form-group\"><label for=\"description\">Description:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"description\"></div>
          <button type=\"submit\" class=\"btn btn-danger mb-2\">Submit</button>
          
                                            </form></div>
        
        </div>
      </div>
    </div>
  </div>


<!-- Blogs -->

  <div class=\"blogs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title\">
            <h2>Liste des Biens</h2>
          </div>
        </div>
      </div>
      
       {% block liste %}{% endblock %}


    </div>
  </div>

  <!-- New Arrivals -->
  

  <!-- Map Container -->

    <div class=\"row\">
  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.736884088203!2d-17.433130150003883!3d14.670867789707463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173b33f1b0f81%3A0xf0757775897d6587!2sCTIC+Dakar!5e0!3m2!1sfr!2ssn!4v1521402842789\" width=\"1300\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    </div>

    <!-- Contact Us -->

    <div class=\"row\">

  
        <!-- Follow Us -->

      <div class=\"col-lg-6 get_in_touch_col\">
        <div class=\"get_in_touch_contents\">
          <h1>CONTACTEZ-NOUS!</h1>
          <form action=\"post\">
            <div>
              <input id=\"input_name\" class=\"form_input input_name input_ph\" type=\"text\" name=\"name\" placeholder=\"Name\" required=\"required\" data-error=\"Name is required.\">
              <input id=\"input_email\" class=\"form_input input_email input_ph\" type=\"email\" name=\"email\" placeholder=\"Email\" required=\"required\" data-error=\"Valid email is required.\">
              <input id=\"input_website\" class=\"form_input input_website input_ph\" type=\"url\" name=\"name\" placeholder=\"Website\" required=\"required\" data-error=\"Name is required.\">
              <textarea id=\"input_message\" class=\"input_ph input_message\" name=\"message\"  placeholder=\"Message\" rows=\"3\" required data-error=\"Please, write us a message.\"></textarea>
            </div>
            <div>
              <button id=\"review_submit\" type=\"submit\" class=\"red_button message_submit_btn trans_300\" value=\"Submit\">send message</button>
            </div>
          </form>
        </div>
      </div>
    <div class=\"col-lg-6 contact_col\">
       
        <div class=\"follow_us_contents\">
          <h1>Nous rejoindre sur</h1>
          <ul class=\"social d-flex flex-row\">
            <li><a href=\"#\" style=\"background-color: #3a61c9\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #41a1f6\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #fb4343\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #8f6247\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
          </ul>
        </div>
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
<script src=\"{{asset('js/custom.js')}}\"></script>
<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
<script src=\"https://www.google.sn/maps/@14.6687089,-17.4324328,17z?hl=fr&hl=fr\"></script>
<script src=\"{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}\"></script>
<script src=\"{{asset('js/contact_custom.js')}}\"></script>
</body>

</html>", "::base.html.twig", "/var/www/html/templateadmin/app/Resources/views/base.html.twig");
    }
}
