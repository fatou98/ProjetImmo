<?php

/* ::adminpage.html.twig */
class __TwigTemplate_f613ebd1d8b0fa526284b89f53b898159eda613ec5fc358a759683587b4b9fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cdea041dcfdcf4f7fa18eb110b3ddfaf691bc42539de9204a4cefc83b11a445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdea041dcfdcf4f7fa18eb110b3ddfaf691bc42539de9204a4cefc83b11a445->enter($__internal_3cdea041dcfdcf4f7fa18eb110b3ddfaf691bc42539de9204a4cefc83b11a445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::adminpage.html.twig"));

        $__internal_b4269f8f7c9e2c11a973ec998b45181c3fc74447f13924433e88c04ad89e8853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4269f8f7c9e2c11a973ec998b45181c3fc74447f13924433e88c04ad89e8853->enter($__internal_b4269f8f7c9e2c11a973ec998b45181c3fc74447f13924433e88c04ad89e8853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::adminpage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

  <title>HORTALA IMMOBILIER| VOTRE AGENCE DE PROXIMITE </title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Dropzone css -->
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


    
    <!-- Custom Theme Style -->
  </head>

  <body class=\"nav-md\" >
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\" style=\"background-color: green;\">
          <div class=\"left_col scroll-view\" >
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>HORTALA!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/photoni.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>Fatou Mbathie</h2>
              </div>
            </div>
         

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <ul class=\"nav side-menu\">
                  <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listebienadmin");
        echo "\" id=\"bien\"><i class=\"fa fa-home\"></i> Bien <span class=\"fa fa-chevron-down\"></span></a>
                    
                  </li>
                  <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addtypebien");
        echo "\" id=\"typebien\"><i class=\"fa fa-edit\"></i> Type bien <span class=\"fa fa-chevron-down\"></span></a>
                  
                  </li>
                  <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addlocalite");
        echo "\" id=\"localite\"><i class=\"fa fa-desktop\"></i>Localite<span class=\"fa fa-chevron-down\"></span></a>
                    
                  </li>
                  <li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listereservation");
        echo "\" id=\"Reservation\"><i class=\"fa fa-table\"></i> Reservation <span class=\"fa fa-chevron-down\"></span></a>

                  </li>
                  <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeproposition");
        echo "\" id=\"Proposition\"><i class=\"fa fa-bar-chart-o\"></i>Proposition de bien <span class=\"fa fa-chevron-down\"></span></a>
                    
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"e_commerce.html\">E-commerce</a></li>
                      <li><a href=\"projects.html\">Projects</a></li>
                      <li><a href=\"project_detail.html\">Project Detail</a></li>
                      <li><a href=\"contacts.html\">Contacts</a></li>
                      <li><a href=\"profile.html\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"page_403.html\">403 Error</a></li>
                      <li><a href=\"page_404.html\">404 Error</a></li>
                      <li><a href=\"page_500.html\">500 Error</a></li>
                      <li><a href=\"plain_page.html\">Plain Page</a></li>
                      <li><a href=\"login.html\">Login Page</a></li>
                      <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/photoni.jpg"), "html", null, true);
        echo "\" alt=\"\">Fatou Mbathie
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Profile</a></li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href=\"javascript:;\">Help</a></li>
                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\" id=\"content\">
          <!-- top tiles -->
                
                      ";
        // line 268
        $this->displayBlock('content', $context, $blocks);
        // line 270
        echo "
                                       
        
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
 <!-- iCheck -->
<!-- jQuery -->
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
        <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Datatables -->
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>


        <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>

        <!--form validation-->
        <script type=\"text/javascript\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

        <!--form validation init-->
        <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/form-validation-init.js"), "html", null, true);
        echo "\"></script>

    
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    
         
<script type=\"text/javascript\">
                    \$(document).ready(function(){
                      
              //\$(\"#content\").load(\"";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listebienadmin");
        echo "\");

            \$(\"#type\").hide();\$(\"#localiteform\").hide();
           /* \$(\"#ajoutertype\").on(\"click\",function(){
              \$(\"#type\").show();
            });*/
             \$(\"#ajouterlocalite\").on(\"click\",function(){
              \$(\"#localiteform\").show();
            })
              \$(\"#bien\").on(\"click\",function(){
                            \$(\"#content\").load(\"";
        // line 384
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listebienadmin");
        echo "\");

            })
/*            \$(\"#type\").hide();\$(\"#localiteform\").hide();
            \$(\"#localite\").on(\"click\",function(){
                            \$(\"#content\").load(\"";
        // line 389
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addlocalite");
        echo "\");

            })
           
            \$(\"#typebien\").on(\"click\",function(){
                            \$(\"#content\").load(\"";
        // line 394
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addtypebien");
        echo "\");

            })*/
        })
           </script>
  </body>
</html>";
        
        $__internal_3cdea041dcfdcf4f7fa18eb110b3ddfaf691bc42539de9204a4cefc83b11a445->leave($__internal_3cdea041dcfdcf4f7fa18eb110b3ddfaf691bc42539de9204a4cefc83b11a445_prof);

        
        $__internal_b4269f8f7c9e2c11a973ec998b45181c3fc74447f13924433e88c04ad89e8853->leave($__internal_b4269f8f7c9e2c11a973ec998b45181c3fc74447f13924433e88c04ad89e8853_prof);

    }

    // line 268
    public function block_content($context, array $blocks = array())
    {
        $__internal_828ecf94d9a8701ee4d167b14e7eda462dd3de5f2044856dc9f8c30261c59a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828ecf94d9a8701ee4d167b14e7eda462dd3de5f2044856dc9f8c30261c59a13->enter($__internal_828ecf94d9a8701ee4d167b14e7eda462dd3de5f2044856dc9f8c30261c59a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_70c6126fe366da8eec9198eb30f2ecb96b3585d1cceb989a225ae727a874138e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c6126fe366da8eec9198eb30f2ecb96b3585d1cceb989a225ae727a874138e->enter($__internal_70c6126fe366da8eec9198eb30f2ecb96b3585d1cceb989a225ae727a874138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_70c6126fe366da8eec9198eb30f2ecb96b3585d1cceb989a225ae727a874138e->leave($__internal_70c6126fe366da8eec9198eb30f2ecb96b3585d1cceb989a225ae727a874138e_prof);

        
        $__internal_828ecf94d9a8701ee4d167b14e7eda462dd3de5f2044856dc9f8c30261c59a13->leave($__internal_828ecf94d9a8701ee4d167b14e7eda462dd3de5f2044856dc9f8c30261c59a13_prof);

    }

    public function getTemplateName()
    {
        return "::adminpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 268,  669 => 394,  661 => 389,  653 => 384,  640 => 374,  631 => 368,  624 => 364,  618 => 361,  612 => 358,  605 => 354,  601 => 353,  597 => 352,  593 => 351,  589 => 350,  585 => 349,  581 => 348,  577 => 347,  571 => 344,  567 => 343,  562 => 341,  558 => 340,  554 => 339,  549 => 337,  544 => 335,  540 => 334,  536 => 333,  531 => 331,  527 => 330,  523 => 329,  519 => 328,  515 => 327,  510 => 325,  504 => 322,  500 => 321,  496 => 320,  492 => 319,  488 => 318,  484 => 317,  480 => 316,  476 => 315,  472 => 314,  468 => 313,  464 => 312,  460 => 311,  456 => 310,  452 => 309,  448 => 308,  443 => 306,  438 => 304,  433 => 302,  428 => 300,  423 => 298,  418 => 296,  413 => 294,  408 => 292,  403 => 290,  398 => 288,  378 => 270,  376 => 268,  283 => 178,  193 => 91,  187 => 88,  181 => 85,  175 => 82,  169 => 79,  153 => 66,  129 => 45,  125 => 44,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  104 => 38,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  78 => 30,  72 => 27,  67 => 25,  62 => 23,  56 => 20,  51 => 18,  46 => 16,  41 => 14,  26 => 1,);
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
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

  <title>HORTALA IMMOBILIER| VOTRE AGENCE DE PROXIMITE </title>

    <!-- Bootstrap -->
    <link href=\"{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{asset('vendors/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"{{asset('vendors/nprogress/nprogress.css')}}\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"{{asset('vendors/iCheck/skins/flat/green.css')}}\" rel=\"stylesheet\">
    
    <!-- bootstrap-progressbar -->
    <link href=\"{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}\" rel=\"stylesheet\"/>
    <!-- bootstrap-daterangepicker -->
    <link href=\"{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"{{asset('build/css/custom.min.css')}}\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\">
    <!-- Dropzone css -->
        <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        
        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">


    
    <!-- Custom Theme Style -->
  </head>

  <body class=\"nav-md\" >
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\" style=\"background-color: green;\">
          <div class=\"left_col scroll-view\" >
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>HORTALA!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"{{asset('image/photoni.jpg')}}\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>Fatou Mbathie</h2>
              </div>
            </div>
         

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <ul class=\"nav side-menu\">
                  <li><a href=\"{{path('listebienadmin')}}\" id=\"bien\"><i class=\"fa fa-home\"></i> Bien <span class=\"fa fa-chevron-down\"></span></a>
                    
                  </li>
                  <li><a href=\"{{path('addtypebien')}}\" id=\"typebien\"><i class=\"fa fa-edit\"></i> Type bien <span class=\"fa fa-chevron-down\"></span></a>
                  
                  </li>
                  <li><a href=\"{{path('addlocalite')}}\" id=\"localite\"><i class=\"fa fa-desktop\"></i>Localite<span class=\"fa fa-chevron-down\"></span></a>
                    
                  </li>
                  <li><a href=\"{{path('listereservation')}}\" id=\"Reservation\"><i class=\"fa fa-table\"></i> Reservation <span class=\"fa fa-chevron-down\"></span></a>

                  </li>
                  <li><a href=\"{{path('listeproposition')}}\" id=\"Proposition\"><i class=\"fa fa-bar-chart-o\"></i>Proposition de bien <span class=\"fa fa-chevron-down\"></span></a>
                    
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"e_commerce.html\">E-commerce</a></li>
                      <li><a href=\"projects.html\">Projects</a></li>
                      <li><a href=\"project_detail.html\">Project Detail</a></li>
                      <li><a href=\"contacts.html\">Contacts</a></li>
                      <li><a href=\"profile.html\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"page_403.html\">403 Error</a></li>
                      <li><a href=\"page_404.html\">404 Error</a></li>
                      <li><a href=\"page_500.html\">500 Error</a></li>
                      <li><a href=\"plain_page.html\">Plain Page</a></li>
                      <li><a href=\"login.html\">Login Page</a></li>
                      <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"{{asset('image/photoni.jpg')}}\" alt=\"\">Fatou Mbathie
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Profile</a></li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href=\"javascript:;\">Help</a></li>
                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\" id=\"content\">
          <!-- top tiles -->
                
                      {% block content %}
{% endblock  %}

                                       
        
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
 <!-- iCheck -->
<!-- jQuery -->
    <script src=\"{{asset('vendors/jquery/dist/jquery.min.js')}}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
    <!-- FastClick -->
    <script src=\"{{asset('vendors/fastclick/lib/fastclick.js')}}\"></script>
    <!-- NProgress -->
    <script src=\"{{asset('vendors/nprogress/nprogress.js')}}\"></script>
    <!-- Chart.js -->
    <script src=\"{{asset('vendors/Chart.js/dist/Chart.min.js')}}\"></script>
    <!-- gauge.js -->
    <script src=\"{{asset('vendors/gauge.js/dist/gauge.min.js')}}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}\"></script>
    <!-- iCheck -->
    <script src=\"{{asset('vendors/iCheck/icheck.min.js')}}\"></script>
    <!-- Skycons -->
    <script src=\"{{asset('vendors/skycons/skycons.js')}}\"></script>
    <!-- Flot -->
        <script src=\"{{asset('vendors/iCheck/icheck.min.js')}}\"></script>
    <!-- Datatables -->
    <script src=\"{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}\"></script>
    <script src=\"{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}\"></script>
    <script src=\"{{asset('vendors/jszip/dist/jszip.min.js')}}\"></script>
    <script src=\"{{asset('vendors/pdfmake/build/pdfmake.min.js')}}\"></script>
    <script src=\"{{asset('vendors/pdfmake/build/vfs_fonts.js')}}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{asset('build/js/custom.min.js')}}\"></script>
    
    <script src=\"{{asset('vendors/Flot/jquery.flot.js')}}\"></script>
    <script src=\"{{asset('vendors/Flot/jquery.flot.pie.js')}}\"></script>
    <script src=\"{{asset('vendors/Flot/jquery.flot.time.js')}}\"></script>
    <script src=\"{{asset('vendors/Flot/jquery.flot.stack.js')}}\"></script>
    <script src=\"{{asset('vendors/Flot/jquery.flot.resize.js')}}\"></script>
    <!-- Flot plugins -->
    <script src=\"{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}\"></script>
    <script src=\"{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}\"></script>
    <script src=\"{{asset('vendors/flot.curvedlines/curvedLines.js')}}\"></script>
    <!-- DateJS -->
    <script src=\"{{asset('vendors/DateJS/build/date.js')}}\"></script>
    <!-- JQVMap -->
    <script src=\"{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}\"></script>
    <script src=\"{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}\"></script>
    <script src=\"{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{asset('vendors/moment/min/moment.min.js')}}\"></script>
    <script src=\"{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('assets/js/detect.js')}}\"></script>
        <script src=\"{{asset('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('assets/js/waves.js')}}\"></script>
        <script src=\"{{asset('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.scrollTo.min.js')}}\"></script>


        <!-- Page Specific JS Libraries -->
        <script src=\"{{asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>

        <!--form validation-->
        <script type=\"text/javascript\" src=\"{{asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}\"></script>

        <!--form validation init-->
        <script src=\"{{asset('assets/pages/form-validation-init.js')}}\"></script>

    
    <!-- Custom Theme Scripts -->
    <script src=\"{{asset('build/js/custom.min.js')}}\"></script>
    
         
<script type=\"text/javascript\">
                    \$(document).ready(function(){
                      
              //\$(\"#content\").load(\"{{path('listebienadmin')}}\");

            \$(\"#type\").hide();\$(\"#localiteform\").hide();
           /* \$(\"#ajoutertype\").on(\"click\",function(){
              \$(\"#type\").show();
            });*/
             \$(\"#ajouterlocalite\").on(\"click\",function(){
              \$(\"#localiteform\").show();
            })
              \$(\"#bien\").on(\"click\",function(){
                            \$(\"#content\").load(\"{{path('listebienadmin')}}\");

            })
/*            \$(\"#type\").hide();\$(\"#localiteform\").hide();
            \$(\"#localite\").on(\"click\",function(){
                            \$(\"#content\").load(\"{{path('addlocalite')}}\");

            })
           
            \$(\"#typebien\").on(\"click\",function(){
                            \$(\"#content\").load(\"{{path('addtypebien')}}\");

            })*/
        })
           </script>
  </body>
</html>", "::adminpage.html.twig", "/var/www/html/templateadmin/app/Resources/views/adminpage.html.twig");
    }
}
