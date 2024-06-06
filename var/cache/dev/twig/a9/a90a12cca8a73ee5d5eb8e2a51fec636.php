<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_a3fad58b28899d5c4b933cfb0fe90010 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <meta name=\"description\" content=\"Portal - Bootstrap 5 Admin Dashboard Template For Developers\">
    <meta name=\"author\" content=\"Xiaoying Riley at 3rd Wave Media\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <!-- FontAwesome JS-->
    <script defer src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/fontawesome/js/all.min.js"), "html", null, true);
        yield "\"></script>

    <!-- App CSS -->
    <link id=\"theme-style\" rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/portal.css"), "html", null, true);
        yield "\">

</head>

<body class=\"app\">
<header class=\"app-header fixed-top\">
    <div class=\"app-header-inner\">
        <div class=\"container-fluid py-2\">
            <div class=\"app-header-content\">
                <div class=\"row justify-content-between align-items-center\">

                    <div class=\"col-auto\">
                        <a id=\"sidepanel-toggler\" class=\"sidepanel-toggler d-inline-block d-xl-none\" href=\"#\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\"
                                 role=\"img\"><title>Menu</title>
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-miterlimit=\"10\"
                                      stroke-width=\"2\" d=\"M4 7h22M4 15h22M4 23h22\"></path>
                            </svg>
                        </a>
                    </div><!--//col-->
                    <div class=\"search-mobile-trigger d-sm-none col\">
                        <i class=\"search-mobile-trigger-icon fa-solid fa-magnifying-glass\"></i>
                    </div><!--//col-->
                    <div class=\"app-search-box col\">
                        <form class=\"app-search-form\">
                            <input type=\"text\" placeholder=\"Search...\" name=\"search\" class=\"form-control search-input\">
                            <button type=\"submit\" class=\"btn search-btn btn-primary\" value=\"Search\"><i
                                        class=\"fa-solid fa-magnifying-glass\"></i></button>
                        </form>
                    </div><!--//app-search-box-->

                    <div class=\"app-utilities col-auto\">
                        <div class=\"app-utility-item app-notifications-dropdown dropdown\">
                            <a class=\"dropdown-toggle no-toggle-arrow\" id=\"notifications-dropdown-toggle\"
                               data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\"
                               title=\"Notifications\">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-bell icon\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z\"/>
                                    <path fill-rule=\"evenodd\"
                                          d=\"M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z\"/>
                                </svg>
                                <span class=\"icon-badge\">3</span>
                            </a><!--//dropdown-toggle-->

                            <div class=\"dropdown-menu p-0\" aria-labelledby=\"notifications-dropdown-toggle\">
                                <div class=\"dropdown-menu-header p-3\">
                                    <h5 class=\"dropdown-menu-title mb-0\">Notifications</h5>
                                </div><!--//dropdown-menu-title-->
                                <div class=\"dropdown-menu-content\">
                                    <div class=\"item p-3\">
                                        <div class=\"row gx-2 justify-content-between align-items-center\">
                                            <div class=\"col-auto\">
                                                <img class=\"profile-image\" src=\"assets/images/profiles/profile-1.png\"
                                                     alt=\"\">
                                            </div><!--//col-->
                                            <div class=\"col\">
                                                <div class=\"info\">
                                                    <div class=\"desc\">Amy shared a file with you. Lorem ipsum dolor sit
                                                        amet, consectetur adipiscing elit.
                                                    </div>
                                                    <div class=\"meta\"> 2 hrs ago</div>
                                                </div>
                                            </div><!--//col-->
                                        </div><!--//row-->
                                        <a class=\"link-mask\" href=\"notifications.html\"></a>
                                    </div><!--//item-->
                                    <div class=\"item p-3\">
                                        <div class=\"row gx-2 justify-content-between align-items-center\">
                                            <div class=\"col-auto\">
                                                <div class=\"app-icon-holder\">
                                                    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"
                                                         class=\"bi bi-receipt\" fill=\"currentColor\"
                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path fill-rule=\"evenodd\"
                                                              d=\"M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z\"/>
                                                        <path fill-rule=\"evenodd\"
                                                              d=\"M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z\"/>
                                                    </svg>
                                                </div>
                                            </div><!--//col-->
                                            <div class=\"col\">
                                                <div class=\"info\">
                                                    <div class=\"desc\">You have a new invoice. Proin venenatis interdum
                                                        est.
                                                    </div>
                                                    <div class=\"meta\"> 1 day ago</div>
                                                </div>
                                            </div><!--//col-->
                                        </div><!--//row-->
                                        <a class=\"link-mask\" href=\"notifications.html\"></a>
                                    </div><!--//item-->
                                    <div class=\"item p-3\">
                                        <div class=\"row gx-2 justify-content-between align-items-center\">
                                            <div class=\"col-auto\">
                                                <div class=\"app-icon-holder icon-holder-mono\">
                                                    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"
                                                         class=\"bi bi-bar-chart-line\" fill=\"currentColor\"
                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path fill-rule=\"evenodd\"
                                                              d=\"M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z\"/>
                                                    </svg>
                                                </div>
                                            </div><!--//col-->
                                            <div class=\"col\">
                                                <div class=\"info\">
                                                    <div class=\"desc\">Your report is ready. Proin venenatis interdum
                                                        est.
                                                    </div>
                                                    <div class=\"meta\"> 3 days ago</div>
                                                </div>
                                            </div><!--//col-->
                                        </div><!--//row-->
                                        <a class=\"link-mask\" href=\"notifications.html\"></a>
                                    </div><!--//item-->
                                    <div class=\"item p-3\">
                                        <div class=\"row gx-2 justify-content-between align-items-center\">
                                            <div class=\"col-auto\">
                                                <img class=\"profile-image\" src=\"assets/images/profiles/profile-2.png\"
                                                     alt=\"\">
                                            </div><!--//col-->
                                            <div class=\"col\">
                                                <div class=\"info\">
                                                    <div class=\"desc\">James sent you a new message.</div>
                                                    <div class=\"meta\"> 7 days ago</div>
                                                </div>
                                            </div><!--//col-->
                                        </div><!--//row-->
                                        <a class=\"link-mask\" href=\"notifications.html\"></a>
                                    </div><!--//item-->
                                </div><!--//dropdown-menu-content-->

                                <div class=\"dropdown-menu-footer p-2 text-center\">
                                    <a href=\"notifications.html\">View all</a>
                                </div>

                            </div><!--//dropdown-menu-->
                        </div><!--//app-utility-item-->
                        <div class=\"app-utility-item\">
                            <a href=\"settings.html\" title=\"Settings\">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-gear icon\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\"
                                          d=\"M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z\"/>
                                    <path fill-rule=\"evenodd\"
                                          d=\"M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z\"/>
                                </svg>
                            </a>
                        </div><!--//app-utility-item-->

                        <div class=\"app-utility-item app-user-dropdown dropdown\">
                            <a class=\"dropdown-toggle\" id=\"user-dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\"
                               role=\"button\" aria-expanded=\"false\"><img src=\"assets/images/user.png\" alt=\"user profile\"></a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"user-dropdown-toggle\">
                                <li><a class=\"dropdown-item\" href=\"account.html\">Account</a></li>
                                <li><a class=\"dropdown-item\" href=\"settings.html\">Settings</a></li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
                                <li><a class=\"dropdown-item\" href=\"login.html\">Log Out</a></li>
                            </ul>
                        </div><!--//app-user-dropdown-->
                    </div><!--//app-utilities-->
                </div><!--//row-->
            </div><!--//app-header-content-->
        </div><!--//container-fluid-->
    </div><!--//app-header-inner-->
    <div id=\"app-sidepanel\" class=\"app-sidepanel\">
        <div id=\"sidepanel-drop\" class=\"sidepanel-drop\"></div>
        <div class=\"sidepanel-inner d-flex flex-column\">
            <a href=\"#\" id=\"sidepanel-close\" class=\"sidepanel-close d-xl-none\">&times;</a>
            <div class=\"app-branding\">
                <a class=\"app-logo\" href=\"index.html\"><img class=\"logo-icon me-2\" src=\"assets/images/app-logo.svg\"
                                                           alt=\"logo\"><span class=\"logo-text\">PORTAL</span></a>

            </div><!--//app-branding-->

            <nav id=\"app-nav-main\" class=\"app-nav app-nav-main flex-grow-1\">
                <ul class=\"app-menu list-unstyled accordion\" id=\"menu-accordion\">
                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link active\" href=\"index.html\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-house-door\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t  <path fill-rule=\"evenodd\"
                d=\"M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z\"/>
\t\t  <path fill-rule=\"evenodd\" d=\"M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
\t\t</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Overview</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link\" href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dahiras_index");
        yield "\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-folder\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z\"/>
  <path fill-rule=\"evenodd\"
        d=\"M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z\"/>
</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Dahiras</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link\" href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_index");
        yield "\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-card-list\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\"
        d=\"M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z\"/>
  <path fill-rule=\"evenodd\"
        d=\"M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z\"/>
  <circle cx=\"3.5\" cy=\"5.5\" r=\".5\"/>
  <circle cx=\"3.5\" cy=\"8\" r=\".5\"/>
  <circle cx=\"3.5\" cy=\"10.5\" r=\".5\"/>
</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Membres</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class=\"nav-item has-submenu\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\"
                           data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-files\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z\"/>
\t  <path d=\"M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z\"/>
\t</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Pages</span>
                            <span class=\"submenu-arrow\">
\t\t                             <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-down\"
                                          fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z\"/>
\t</svg>
\t                             </span><!--//submenu-arrow-->
                        </a><!--//nav-link-->
                        <div id=\"submenu-1\" class=\"collapse submenu submenu-1\" data-bs-parent=\"#menu-accordion\">
                            <ul class=\"submenu-list list-unstyled\">
                                <li class=\"submenu-item\"><a class=\"submenu-link\"
                                                            href=\"notifications.html\">Notifications</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"account.html\">Account</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"settings.html\">Settings</a></li>
                            </ul>
                        </div>
                    </li><!--//nav-item-->
                    <li class=\"nav-item has-submenu\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\"
                           data-bs-target=\"#submenu-2\" aria-expanded=\"false\" aria-controls=\"submenu-2\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-columns-gap\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z\"/>
\t</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">External</span>
                            <span class=\"submenu-arrow\">
\t\t                             <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-down\"
                                          fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z\"/>
\t</svg>
\t                             </span><!--//submenu-arrow-->
                        </a><!--//nav-link-->
                        <div id=\"submenu-2\" class=\"collapse submenu submenu-2\" data-bs-parent=\"#menu-accordion\">
                            <ul class=\"submenu-list list-unstyled\">
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"login.html\">Login</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"signup.html\">Signup</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"reset-password.html\">Reset
                                        password</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"404.html\">404 page</a></li>
                            </ul>
                        </div>
                    </li><!--//nav-item-->


                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link\" href=\"charts.html\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-bar-chart-line\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z\"/>
\t</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Charts</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->

                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link\" href=\"help.html\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-question-circle\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  <path d=\"M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z\"/>
</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Help</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                </ul><!--//app-menu-->
            </nav><!--//app-nav-->
            <div class=\"app-sidepanel-footer\">
                <nav class=\"app-nav app-nav-footer\">
                    <ul class=\"app-menu footer-menu list-unstyled\">
                        <li class=\"nav-item\">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class=\"nav-link\" href=\"settings.html\">
\t\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-gear\"
                                             fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z\"/>
\t  <path fill-rule=\"evenodd\"
            d=\"M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z\"/>
\t</svg>
\t\t\t\t\t\t\t        </span>
                                <span class=\"nav-link-text\">Settings</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                        <li class=\"nav-item\">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class=\"nav-link\"
                               href=\"https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/\">
\t\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-download\"
                                             fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z\"/>
\t  <path fill-rule=\"evenodd\"
            d=\"M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z\"/>
\t</svg>
\t\t\t\t\t\t\t        </span>
                                <span class=\"nav-link-text\">Download</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                        <li class=\"nav-item\">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class=\"nav-link\"
                               href=\"https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/\">
\t\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-file-person\"
                                             fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z\"/>
\t  <path fill-rule=\"evenodd\" d=\"M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
\t</svg>
\t\t\t\t\t\t\t        </span>
                                <span class=\"nav-link-text\">License</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                    </ul><!--//footer-menu-->
                </nav>
            </div><!--//app-sidepanel-footer-->

        </div><!--//sidepanel-inner-->
    </div><!--//app-sidepanel-->
</header><!--//app-header-->

<div class=\"app-wrapper\">
    <div class=\"app-content pt-3 p-md-3 p-lg-4\">
        <div class=\"container-xl\">

        ";
        // line 400
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 401
        yield "    ";
        // line 402
        yield "    ";
        // line 403
        yield "
    ";
        // line 405
        yield "
    ";
        // line 407
        yield "    ";
        // line 408
        yield "    ";
        // line 409
        yield "    ";
        // line 410
        yield "    ";
        // line 411
        yield "    ";
        // line 412
        yield "
    ";
        // line 414
        yield "    ";
        // line 415
        yield "    ";
        // line 416
        yield "    ";
        // line 417
        yield "    ";
        // line 418
        yield "    ";
        // line 419
        yield "    ";
        // line 420
        yield "    ";
        // line 421
        yield "    ";
        // line 422
        yield "    ";
        // line 423
        yield "    ";
        // line 424
        yield "    ";
        // line 425
        yield "
    ";
        // line 427
        yield "    ";
        // line 428
        yield "
    ";
        // line 430
        yield "    ";
        // line 431
        yield "    ";
        // line 432
        yield "    ";
        // line 433
        yield "    ";
        // line 434
        yield "    ";
        // line 435
        yield "    ";
        // line 436
        yield "    ";
        // line 437
        yield "    ";
        // line 438
        yield "    ";
        // line 439
        yield "    ";
        // line 440
        yield "    ";
        // line 441
        yield "    ";
        // line 442
        yield "    ";
        // line 443
        yield "
    ";
        // line 445
        yield "    ";
        // line 446
        yield "    ";
        // line 447
        yield "    ";
        // line 448
        yield "    ";
        // line 449
        yield "    ";
        // line 450
        yield "    ";
        // line 451
        yield "    ";
        // line 452
        yield "    ";
        // line 453
        yield "    ";
        // line 454
        yield "    ";
        // line 455
        yield "    ";
        // line 456
        yield "    ";
        // line 457
        yield "    ";
        // line 458
        yield "    ";
        // line 459
        yield "    ";
        // line 460
        yield "    ";
        // line 461
        yield "    ";
        // line 462
        yield "    ";
        // line 463
        yield "    ";
        // line 464
        yield "    ";
        // line 465
        yield "    ";
        // line 466
        yield "    ";
        // line 467
        yield "    ";
        // line 468
        yield "    ";
        // line 469
        yield "    ";
        // line 470
        yield "    ";
        // line 471
        yield "    ";
        // line 472
        yield "    ";
        // line 473
        yield "    ";
        // line 474
        yield "    ";
        // line 475
        yield "    ";
        // line 476
        yield "    ";
        // line 477
        yield "    ";
        // line 478
        yield "    ";
        // line 479
        yield "    ";
        // line 480
        yield "    ";
        // line 481
        yield "    ";
        // line 482
        yield "    ";
        // line 483
        yield "    ";
        // line 484
        yield "    ";
        // line 485
        yield "    ";
        // line 486
        yield "    ";
        // line 487
        yield "    ";
        // line 488
        yield "    ";
        // line 489
        yield "    ";
        // line 490
        yield "    ";
        // line 491
        yield "    ";
        // line 492
        yield "    ";
        // line 493
        yield "    ";
        // line 494
        yield "    ";
        // line 495
        yield "    ";
        // line 496
        yield "    ";
        // line 497
        yield "    ";
        // line 498
        yield "    ";
        // line 499
        yield "    ";
        // line 500
        yield "    ";
        // line 501
        yield "    ";
        // line 502
        yield "    ";
        // line 503
        yield "    ";
        // line 504
        yield "    ";
        // line 505
        yield "    ";
        // line 506
        yield "    ";
        // line 507
        yield "    ";
        // line 508
        yield "    ";
        // line 509
        yield "    ";
        // line 510
        yield "    ";
        // line 511
        yield "    ";
        // line 512
        yield "    ";
        // line 513
        yield "    ";
        // line 514
        yield "    ";
        // line 515
        yield "    ";
        // line 516
        yield "    ";
        // line 517
        yield "    ";
        // line 518
        yield "    ";
        // line 519
        yield "    ";
        // line 520
        yield "    ";
        // line 521
        yield "    ";
        // line 522
        yield "    ";
        // line 523
        yield "    ";
        // line 524
        yield "    ";
        // line 525
        yield "    ";
        // line 526
        yield "    ";
        // line 527
        yield "    ";
        // line 528
        yield "    ";
        // line 529
        yield "    ";
        // line 530
        yield "    ";
        // line 531
        yield "    ";
        // line 532
        yield "    ";
        // line 533
        yield "    ";
        // line 534
        yield "    ";
        // line 535
        yield "    ";
        // line 536
        yield "    ";
        // line 537
        yield "    ";
        // line 538
        yield "
    ";
        // line 540
        yield "    ";
        // line 541
        yield "    ";
        // line 542
        yield "    ";
        // line 543
        yield "    ";
        // line 544
        yield "    ";
        // line 545
        yield "    ";
        // line 546
        yield "    ";
        // line 547
        yield "    ";
        // line 548
        yield "    ";
        // line 549
        yield "    ";
        // line 550
        yield "    ";
        // line 551
        yield "    ";
        // line 552
        yield "    ";
        // line 553
        yield "    ";
        // line 554
        yield "    ";
        // line 555
        yield "    ";
        // line 556
        yield "    ";
        // line 557
        yield "    ";
        // line 558
        yield "    ";
        // line 559
        yield "    ";
        // line 560
        yield "    ";
        // line 561
        yield "    ";
        // line 562
        yield "    ";
        // line 563
        yield "    ";
        // line 564
        yield "    ";
        // line 565
        yield "    ";
        // line 566
        yield "    ";
        // line 567
        yield "    ";
        // line 568
        yield "    ";
        // line 569
        yield "    ";
        // line 570
        yield "    ";
        // line 571
        yield "    ";
        // line 572
        yield "

    ";
        // line 575
        yield "    ";
        // line 576
        yield "    ";
        // line 577
        yield "    ";
        // line 578
        yield "    ";
        // line 579
        yield "    ";
        // line 580
        yield "    ";
        // line 581
        yield "    ";
        // line 582
        yield "    ";
        // line 583
        yield "    ";
        // line 584
        yield "    ";
        // line 585
        yield "    ";
        // line 586
        yield "    ";
        // line 587
        yield "    ";
        // line 588
        yield "    ";
        // line 589
        yield "    ";
        // line 590
        yield "
    ";
        // line 592
        yield "    ";
        // line 593
        yield "    ";
        // line 594
        yield "    ";
        // line 595
        yield "    ";
        // line 596
        yield "    ";
        // line 597
        yield "    ";
        // line 598
        yield "    ";
        // line 599
        yield "    ";
        // line 600
        yield "    ";
        // line 601
        yield "    ";
        // line 602
        yield "    ";
        // line 603
        yield "    ";
        // line 604
        yield "    ";
        // line 605
        yield "    ";
        // line 606
        yield "    ";
        // line 607
        yield "
    ";
        // line 609
        yield "    ";
        // line 610
        yield "    ";
        // line 611
        yield "    ";
        // line 612
        yield "    ";
        // line 613
        yield "    ";
        // line 614
        yield "    ";
        // line 615
        yield "    ";
        // line 616
        yield "    ";
        // line 617
        yield "    ";
        // line 618
        yield "    ";
        // line 619
        yield "    ";
        // line 620
        yield "    ";
        // line 621
        yield "    ";
        // line 622
        yield "    ";
        // line 623
        yield "    ";
        // line 624
        yield "
    ";
        // line 626
        yield "    ";
        // line 627
        yield "    ";
        // line 628
        yield "    ";
        // line 629
        yield "    ";
        // line 630
        yield "    ";
        // line 631
        yield "    ";
        // line 632
        yield "    ";
        // line 633
        yield "    ";
        // line 634
        yield "    ";
        // line 635
        yield "    ";
        // line 636
        yield "    ";
        // line 637
        yield "    ";
        // line 638
        yield "    ";
        // line 639
        yield "    ";
        // line 640
        yield "    ";
        // line 641
        yield "    ";
        // line 642
        yield "    ";
        // line 643
        yield "    ";
        // line 644
        yield "    ";
        // line 645
        yield "    ";
        // line 646
        yield "    ";
        // line 647
        yield "    ";
        // line 648
        yield "    ";
        // line 649
        yield "    ";
        // line 650
        yield "    ";
        // line 651
        yield "    ";
        // line 652
        yield "    ";
        // line 653
        yield "    ";
        // line 654
        yield "    ";
        // line 655
        yield "    ";
        // line 656
        yield "    ";
        // line 657
        yield "    ";
        // line 658
        yield "    ";
        // line 659
        yield "    ";
        // line 660
        yield "    ";
        // line 661
        yield "    ";
        // line 662
        yield "    ";
        // line 663
        yield "    ";
        // line 664
        yield "    ";
        // line 665
        yield "    ";
        // line 666
        yield "    ";
        // line 667
        yield "    ";
        // line 668
        yield "    ";
        // line 669
        yield "    ";
        // line 670
        yield "    ";
        // line 671
        yield "    ";
        // line 672
        yield "    ";
        // line 673
        yield "    ";
        // line 674
        yield "    ";
        // line 675
        yield "    ";
        // line 676
        yield "    ";
        // line 677
        yield "    ";
        // line 678
        yield "    ";
        // line 679
        yield "    ";
        // line 680
        yield "    ";
        // line 681
        yield "    ";
        // line 682
        yield "    ";
        // line 683
        yield "    ";
        // line 684
        yield "    ";
        // line 685
        yield "    ";
        // line 686
        yield "    ";
        // line 687
        yield "    ";
        // line 688
        yield "    ";
        // line 689
        yield "    ";
        // line 690
        yield "    ";
        // line 691
        yield "    ";
        // line 692
        yield "    ";
        // line 693
        yield "    ";
        // line 694
        yield "    ";
        // line 695
        yield "    ";
        // line 696
        yield "    ";
        // line 697
        yield "    ";
        // line 698
        yield "    ";
        // line 699
        yield "    ";
        // line 700
        yield "    ";
        // line 701
        yield "    ";
        // line 702
        yield "    ";
        // line 703
        yield "    ";
        // line 704
        yield "    ";
        // line 705
        yield "    ";
        // line 706
        yield "    ";
        // line 707
        yield "
    ";
        // line 709
        yield "    ";
        // line 710
        yield "    ";
        // line 711
        yield "    ";
        // line 712
        yield "    ";
        // line 713
        yield "    ";
        // line 714
        yield "    ";
        // line 715
        yield "
    ";
        // line 717
        yield "    ";
        // line 718
        yield "    ";
        // line 719
        yield "    ";
        // line 720
        yield "    ";
        // line 721
        yield "    ";
        // line 722
        yield "    ";
        // line 723
        yield "    ";
        // line 724
        yield "    ";
        // line 725
        yield "    ";
        // line 726
        yield "    ";
        // line 727
        yield "    ";
        // line 728
        yield "    ";
        // line 729
        yield "    ";
        // line 730
        yield "    ";
        // line 731
        yield "    ";
        // line 732
        yield "    ";
        // line 733
        yield "    ";
        // line 734
        yield "
    ";
        // line 736
        yield "    ";
        // line 737
        yield "    ";
        // line 738
        yield "    ";
        // line 739
        yield "    ";
        // line 740
        yield "    ";
        // line 741
        yield "    ";
        // line 742
        yield "
    ";
        // line 744
        yield "    ";
        // line 745
        yield "    ";
        // line 746
        yield "    ";
        // line 747
        yield "    ";
        // line 748
        yield "    ";
        // line 749
        yield "    ";
        // line 750
        yield "    ";
        // line 751
        yield "    ";
        // line 752
        yield "    ";
        // line 753
        yield "    ";
        // line 754
        yield "    ";
        // line 755
        yield "    ";
        // line 756
        yield "    ";
        // line 757
        yield "    ";
        // line 758
        yield "    ";
        // line 759
        yield "    ";
        // line 760
        yield "    ";
        // line 761
        yield "
    ";
        // line 763
        yield "    ";
        // line 764
        yield "    ";
        // line 765
        yield "    ";
        // line 766
        yield "    ";
        // line 767
        yield "    ";
        // line 768
        yield "    ";
        // line 769
        yield "
    ";
        // line 771
        yield "    ";
        // line 772
        yield "    ";
        // line 773
        yield "    ";
        // line 774
        yield "    ";
        // line 775
        yield "    ";
        // line 776
        yield "    ";
        // line 777
        yield "    ";
        // line 778
        yield "
            </div><!--//container-fluid-->
        </div><!--//app-content-->

    <footer class=\"app-footer\">
        <div class=\"container text-center py-3\">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class=\"copyright\">Designed with <span class=\"sr-only\">love</span><i class=\"fas fa-heart\"
                                                                                       style=\"color: #fb866a;\"></i> by
                <a class=\"app-link\" href=\"http://themes.3rdwavemedia.com\" target=\"_blank\">Xiaoying Riley</a> for
                developers</small>

        </div>
    </footer><!--//app-footer-->

</div><!--//app-wrapper-->


<!-- Javascript -->
<script src=\"";
        // line 797
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/popper.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

<!-- Charts JS -->
<script src=\"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/index-charts.js"), "html", null, true);
        yield "\"></script>

<!-- Page Specific JS -->
<script src=\"";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 400
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1254 => 400,  1237 => 805,  1231 => 802,  1227 => 801,  1221 => 798,  1217 => 797,  1196 => 778,  1194 => 777,  1192 => 776,  1190 => 775,  1188 => 774,  1186 => 773,  1184 => 772,  1182 => 771,  1179 => 769,  1177 => 768,  1175 => 767,  1173 => 766,  1171 => 765,  1169 => 764,  1167 => 763,  1164 => 761,  1162 => 760,  1160 => 759,  1158 => 758,  1156 => 757,  1154 => 756,  1152 => 755,  1150 => 754,  1148 => 753,  1146 => 752,  1144 => 751,  1142 => 750,  1140 => 749,  1138 => 748,  1136 => 747,  1134 => 746,  1132 => 745,  1130 => 744,  1127 => 742,  1125 => 741,  1123 => 740,  1121 => 739,  1119 => 738,  1117 => 737,  1115 => 736,  1112 => 734,  1110 => 733,  1108 => 732,  1106 => 731,  1104 => 730,  1102 => 729,  1100 => 728,  1098 => 727,  1096 => 726,  1094 => 725,  1092 => 724,  1090 => 723,  1088 => 722,  1086 => 721,  1084 => 720,  1082 => 719,  1080 => 718,  1078 => 717,  1075 => 715,  1073 => 714,  1071 => 713,  1069 => 712,  1067 => 711,  1065 => 710,  1063 => 709,  1060 => 707,  1058 => 706,  1056 => 705,  1054 => 704,  1052 => 703,  1050 => 702,  1048 => 701,  1046 => 700,  1044 => 699,  1042 => 698,  1040 => 697,  1038 => 696,  1036 => 695,  1034 => 694,  1032 => 693,  1030 => 692,  1028 => 691,  1026 => 690,  1024 => 689,  1022 => 688,  1020 => 687,  1018 => 686,  1016 => 685,  1014 => 684,  1012 => 683,  1010 => 682,  1008 => 681,  1006 => 680,  1004 => 679,  1002 => 678,  1000 => 677,  998 => 676,  996 => 675,  994 => 674,  992 => 673,  990 => 672,  988 => 671,  986 => 670,  984 => 669,  982 => 668,  980 => 667,  978 => 666,  976 => 665,  974 => 664,  972 => 663,  970 => 662,  968 => 661,  966 => 660,  964 => 659,  962 => 658,  960 => 657,  958 => 656,  956 => 655,  954 => 654,  952 => 653,  950 => 652,  948 => 651,  946 => 650,  944 => 649,  942 => 648,  940 => 647,  938 => 646,  936 => 645,  934 => 644,  932 => 643,  930 => 642,  928 => 641,  926 => 640,  924 => 639,  922 => 638,  920 => 637,  918 => 636,  916 => 635,  914 => 634,  912 => 633,  910 => 632,  908 => 631,  906 => 630,  904 => 629,  902 => 628,  900 => 627,  898 => 626,  895 => 624,  893 => 623,  891 => 622,  889 => 621,  887 => 620,  885 => 619,  883 => 618,  881 => 617,  879 => 616,  877 => 615,  875 => 614,  873 => 613,  871 => 612,  869 => 611,  867 => 610,  865 => 609,  862 => 607,  860 => 606,  858 => 605,  856 => 604,  854 => 603,  852 => 602,  850 => 601,  848 => 600,  846 => 599,  844 => 598,  842 => 597,  840 => 596,  838 => 595,  836 => 594,  834 => 593,  832 => 592,  829 => 590,  827 => 589,  825 => 588,  823 => 587,  821 => 586,  819 => 585,  817 => 584,  815 => 583,  813 => 582,  811 => 581,  809 => 580,  807 => 579,  805 => 578,  803 => 577,  801 => 576,  799 => 575,  795 => 572,  793 => 571,  791 => 570,  789 => 569,  787 => 568,  785 => 567,  783 => 566,  781 => 565,  779 => 564,  777 => 563,  775 => 562,  773 => 561,  771 => 560,  769 => 559,  767 => 558,  765 => 557,  763 => 556,  761 => 555,  759 => 554,  757 => 553,  755 => 552,  753 => 551,  751 => 550,  749 => 549,  747 => 548,  745 => 547,  743 => 546,  741 => 545,  739 => 544,  737 => 543,  735 => 542,  733 => 541,  731 => 540,  728 => 538,  726 => 537,  724 => 536,  722 => 535,  720 => 534,  718 => 533,  716 => 532,  714 => 531,  712 => 530,  710 => 529,  708 => 528,  706 => 527,  704 => 526,  702 => 525,  700 => 524,  698 => 523,  696 => 522,  694 => 521,  692 => 520,  690 => 519,  688 => 518,  686 => 517,  684 => 516,  682 => 515,  680 => 514,  678 => 513,  676 => 512,  674 => 511,  672 => 510,  670 => 509,  668 => 508,  666 => 507,  664 => 506,  662 => 505,  660 => 504,  658 => 503,  656 => 502,  654 => 501,  652 => 500,  650 => 499,  648 => 498,  646 => 497,  644 => 496,  642 => 495,  640 => 494,  638 => 493,  636 => 492,  634 => 491,  632 => 490,  630 => 489,  628 => 488,  626 => 487,  624 => 486,  622 => 485,  620 => 484,  618 => 483,  616 => 482,  614 => 481,  612 => 480,  610 => 479,  608 => 478,  606 => 477,  604 => 476,  602 => 475,  600 => 474,  598 => 473,  596 => 472,  594 => 471,  592 => 470,  590 => 469,  588 => 468,  586 => 467,  584 => 466,  582 => 465,  580 => 464,  578 => 463,  576 => 462,  574 => 461,  572 => 460,  570 => 459,  568 => 458,  566 => 457,  564 => 456,  562 => 455,  560 => 454,  558 => 453,  556 => 452,  554 => 451,  552 => 450,  550 => 449,  548 => 448,  546 => 447,  544 => 446,  542 => 445,  539 => 443,  537 => 442,  535 => 441,  533 => 440,  531 => 439,  529 => 438,  527 => 437,  525 => 436,  523 => 435,  521 => 434,  519 => 433,  517 => 432,  515 => 431,  513 => 430,  510 => 428,  508 => 427,  505 => 425,  503 => 424,  501 => 423,  499 => 422,  497 => 421,  495 => 420,  493 => 419,  491 => 418,  489 => 417,  487 => 416,  485 => 415,  483 => 414,  480 => 412,  478 => 411,  476 => 410,  474 => 409,  472 => 408,  470 => 407,  467 => 405,  464 => 403,  462 => 402,  460 => 401,  458 => 400,  285 => 230,  268 => 216,  68 => 19,  62 => 16,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <meta name=\"description\" content=\"Portal - Bootstrap 5 Admin Dashboard Template For Developers\">
    <meta name=\"author\" content=\"Xiaoying Riley at 3rd Wave Media\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <!-- FontAwesome JS-->
    <script defer src=\"{{ asset('assets/plugins/fontawesome/js/all.min.js') }}\"></script>

    <!-- App CSS -->
    <link id=\"theme-style\" rel=\"stylesheet\" href=\"{{ asset('assets/css/portal.css') }}\">

</head>

<body class=\"app\">
<header class=\"app-header fixed-top\">
    <div class=\"app-header-inner\">
        <div class=\"container-fluid py-2\">
            <div class=\"app-header-content\">
                <div class=\"row justify-content-between align-items-center\">

                    <div class=\"col-auto\">
                        <a id=\"sidepanel-toggler\" class=\"sidepanel-toggler d-inline-block d-xl-none\" href=\"#\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\"
                                 role=\"img\"><title>Menu</title>
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-miterlimit=\"10\"
                                      stroke-width=\"2\" d=\"M4 7h22M4 15h22M4 23h22\"></path>
                            </svg>
                        </a>
                    </div><!--//col-->
                    <div class=\"search-mobile-trigger d-sm-none col\">
                        <i class=\"search-mobile-trigger-icon fa-solid fa-magnifying-glass\"></i>
                    </div><!--//col-->
                    <div class=\"app-search-box col\">
                        <form class=\"app-search-form\">
                            <input type=\"text\" placeholder=\"Search...\" name=\"search\" class=\"form-control search-input\">
                            <button type=\"submit\" class=\"btn search-btn btn-primary\" value=\"Search\"><i
                                        class=\"fa-solid fa-magnifying-glass\"></i></button>
                        </form>
                    </div><!--//app-search-box-->

                    <div class=\"app-utilities col-auto\">
                        <div class=\"app-utility-item app-notifications-dropdown dropdown\">
                            <a class=\"dropdown-toggle no-toggle-arrow\" id=\"notifications-dropdown-toggle\"
                               data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\"
                               title=\"Notifications\">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-bell icon\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z\"/>
                                    <path fill-rule=\"evenodd\"
                                          d=\"M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z\"/>
                                </svg>
                                <span class=\"icon-badge\">3</span>
                            </a><!--//dropdown-toggle-->

                            <div class=\"dropdown-menu p-0\" aria-labelledby=\"notifications-dropdown-toggle\">
                                <div class=\"dropdown-menu-header p-3\">
                                    <h5 class=\"dropdown-menu-title mb-0\">Notifications</h5>
                                </div><!--//dropdown-menu-title-->
                                <div class=\"dropdown-menu-content\">
                                    <div class=\"item p-3\">
                                        <div class=\"row gx-2 justify-content-between align-items-center\">
                                            <div class=\"col-auto\">
                                                <img class=\"profile-image\" src=\"assets/images/profiles/profile-1.png\"
                                                     alt=\"\">
                                            </div><!--//col-->
                                            <div class=\"col\">
                                                <div class=\"info\">
                                                    <div class=\"desc\">Amy shared a file with you. Lorem ipsum dolor sit
                                                        amet, consectetur adipiscing elit.
                                                    </div>
                                                    <div class=\"meta\"> 2 hrs ago</div>
                                                </div>
                                            </div><!--//col-->
                                        </div><!--//row-->
                                        <a class=\"link-mask\" href=\"notifications.html\"></a>
                                    </div><!--//item-->
                                    <div class=\"item p-3\">
                                        <div class=\"row gx-2 justify-content-between align-items-center\">
                                            <div class=\"col-auto\">
                                                <div class=\"app-icon-holder\">
                                                    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"
                                                         class=\"bi bi-receipt\" fill=\"currentColor\"
                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path fill-rule=\"evenodd\"
                                                              d=\"M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z\"/>
                                                        <path fill-rule=\"evenodd\"
                                                              d=\"M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z\"/>
                                                    </svg>
                                                </div>
                                            </div><!--//col-->
                                            <div class=\"col\">
                                                <div class=\"info\">
                                                    <div class=\"desc\">You have a new invoice. Proin venenatis interdum
                                                        est.
                                                    </div>
                                                    <div class=\"meta\"> 1 day ago</div>
                                                </div>
                                            </div><!--//col-->
                                        </div><!--//row-->
                                        <a class=\"link-mask\" href=\"notifications.html\"></a>
                                    </div><!--//item-->
                                    <div class=\"item p-3\">
                                        <div class=\"row gx-2 justify-content-between align-items-center\">
                                            <div class=\"col-auto\">
                                                <div class=\"app-icon-holder icon-holder-mono\">
                                                    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"
                                                         class=\"bi bi-bar-chart-line\" fill=\"currentColor\"
                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path fill-rule=\"evenodd\"
                                                              d=\"M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z\"/>
                                                    </svg>
                                                </div>
                                            </div><!--//col-->
                                            <div class=\"col\">
                                                <div class=\"info\">
                                                    <div class=\"desc\">Your report is ready. Proin venenatis interdum
                                                        est.
                                                    </div>
                                                    <div class=\"meta\"> 3 days ago</div>
                                                </div>
                                            </div><!--//col-->
                                        </div><!--//row-->
                                        <a class=\"link-mask\" href=\"notifications.html\"></a>
                                    </div><!--//item-->
                                    <div class=\"item p-3\">
                                        <div class=\"row gx-2 justify-content-between align-items-center\">
                                            <div class=\"col-auto\">
                                                <img class=\"profile-image\" src=\"assets/images/profiles/profile-2.png\"
                                                     alt=\"\">
                                            </div><!--//col-->
                                            <div class=\"col\">
                                                <div class=\"info\">
                                                    <div class=\"desc\">James sent you a new message.</div>
                                                    <div class=\"meta\"> 7 days ago</div>
                                                </div>
                                            </div><!--//col-->
                                        </div><!--//row-->
                                        <a class=\"link-mask\" href=\"notifications.html\"></a>
                                    </div><!--//item-->
                                </div><!--//dropdown-menu-content-->

                                <div class=\"dropdown-menu-footer p-2 text-center\">
                                    <a href=\"notifications.html\">View all</a>
                                </div>

                            </div><!--//dropdown-menu-->
                        </div><!--//app-utility-item-->
                        <div class=\"app-utility-item\">
                            <a href=\"settings.html\" title=\"Settings\">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-gear icon\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\"
                                          d=\"M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z\"/>
                                    <path fill-rule=\"evenodd\"
                                          d=\"M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z\"/>
                                </svg>
                            </a>
                        </div><!--//app-utility-item-->

                        <div class=\"app-utility-item app-user-dropdown dropdown\">
                            <a class=\"dropdown-toggle\" id=\"user-dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\"
                               role=\"button\" aria-expanded=\"false\"><img src=\"assets/images/user.png\" alt=\"user profile\"></a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"user-dropdown-toggle\">
                                <li><a class=\"dropdown-item\" href=\"account.html\">Account</a></li>
                                <li><a class=\"dropdown-item\" href=\"settings.html\">Settings</a></li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
                                <li><a class=\"dropdown-item\" href=\"login.html\">Log Out</a></li>
                            </ul>
                        </div><!--//app-user-dropdown-->
                    </div><!--//app-utilities-->
                </div><!--//row-->
            </div><!--//app-header-content-->
        </div><!--//container-fluid-->
    </div><!--//app-header-inner-->
    <div id=\"app-sidepanel\" class=\"app-sidepanel\">
        <div id=\"sidepanel-drop\" class=\"sidepanel-drop\"></div>
        <div class=\"sidepanel-inner d-flex flex-column\">
            <a href=\"#\" id=\"sidepanel-close\" class=\"sidepanel-close d-xl-none\">&times;</a>
            <div class=\"app-branding\">
                <a class=\"app-logo\" href=\"index.html\"><img class=\"logo-icon me-2\" src=\"assets/images/app-logo.svg\"
                                                           alt=\"logo\"><span class=\"logo-text\">PORTAL</span></a>

            </div><!--//app-branding-->

            <nav id=\"app-nav-main\" class=\"app-nav app-nav-main flex-grow-1\">
                <ul class=\"app-menu list-unstyled accordion\" id=\"menu-accordion\">
                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link active\" href=\"index.html\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-house-door\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t  <path fill-rule=\"evenodd\"
                d=\"M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z\"/>
\t\t  <path fill-rule=\"evenodd\" d=\"M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
\t\t</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Overview</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link\" href=\"{{ path('app_dahiras_index') }}\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-folder\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z\"/>
  <path fill-rule=\"evenodd\"
        d=\"M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z\"/>
</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Dahiras</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link\" href=\"{{ path('app_membres_index') }}\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-card-list\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\"
        d=\"M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z\"/>
  <path fill-rule=\"evenodd\"
        d=\"M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z\"/>
  <circle cx=\"3.5\" cy=\"5.5\" r=\".5\"/>
  <circle cx=\"3.5\" cy=\"8\" r=\".5\"/>
  <circle cx=\"3.5\" cy=\"10.5\" r=\".5\"/>
</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Membres</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class=\"nav-item has-submenu\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\"
                           data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-files\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z\"/>
\t  <path d=\"M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z\"/>
\t</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Pages</span>
                            <span class=\"submenu-arrow\">
\t\t                             <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-down\"
                                          fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z\"/>
\t</svg>
\t                             </span><!--//submenu-arrow-->
                        </a><!--//nav-link-->
                        <div id=\"submenu-1\" class=\"collapse submenu submenu-1\" data-bs-parent=\"#menu-accordion\">
                            <ul class=\"submenu-list list-unstyled\">
                                <li class=\"submenu-item\"><a class=\"submenu-link\"
                                                            href=\"notifications.html\">Notifications</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"account.html\">Account</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"settings.html\">Settings</a></li>
                            </ul>
                        </div>
                    </li><!--//nav-item-->
                    <li class=\"nav-item has-submenu\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\"
                           data-bs-target=\"#submenu-2\" aria-expanded=\"false\" aria-controls=\"submenu-2\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-columns-gap\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z\"/>
\t</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">External</span>
                            <span class=\"submenu-arrow\">
\t\t                             <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-down\"
                                          fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z\"/>
\t</svg>
\t                             </span><!--//submenu-arrow-->
                        </a><!--//nav-link-->
                        <div id=\"submenu-2\" class=\"collapse submenu submenu-2\" data-bs-parent=\"#menu-accordion\">
                            <ul class=\"submenu-list list-unstyled\">
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"login.html\">Login</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"signup.html\">Signup</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"reset-password.html\">Reset
                                        password</a></li>
                                <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"404.html\">404 page</a></li>
                            </ul>
                        </div>
                    </li><!--//nav-item-->


                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link\" href=\"charts.html\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-bar-chart-line\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z\"/>
\t</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Charts</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->

                    <li class=\"nav-item\">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class=\"nav-link\" href=\"help.html\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-question-circle\"
                                     fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  <path d=\"M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z\"/>
</svg>
\t\t\t\t\t\t         </span>
                            <span class=\"nav-link-text\">Help</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                </ul><!--//app-menu-->
            </nav><!--//app-nav-->
            <div class=\"app-sidepanel-footer\">
                <nav class=\"app-nav app-nav-footer\">
                    <ul class=\"app-menu footer-menu list-unstyled\">
                        <li class=\"nav-item\">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class=\"nav-link\" href=\"settings.html\">
\t\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-gear\"
                                             fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z\"/>
\t  <path fill-rule=\"evenodd\"
            d=\"M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z\"/>
\t</svg>
\t\t\t\t\t\t\t        </span>
                                <span class=\"nav-link-text\">Settings</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                        <li class=\"nav-item\">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class=\"nav-link\"
                               href=\"https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/\">
\t\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-download\"
                                             fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z\"/>
\t  <path fill-rule=\"evenodd\"
            d=\"M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z\"/>
\t</svg>
\t\t\t\t\t\t\t        </span>
                                <span class=\"nav-link-text\">Download</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                        <li class=\"nav-item\">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class=\"nav-link\"
                               href=\"https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/\">
\t\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-file-person\"
                                             fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\"
            d=\"M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z\"/>
\t  <path fill-rule=\"evenodd\" d=\"M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
\t</svg>
\t\t\t\t\t\t\t        </span>
                                <span class=\"nav-link-text\">License</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                    </ul><!--//footer-menu-->
                </nav>
            </div><!--//app-sidepanel-footer-->

        </div><!--//sidepanel-inner-->
    </div><!--//app-sidepanel-->
</header><!--//app-header-->

<div class=\"app-wrapper\">
    <div class=\"app-content pt-3 p-md-3 p-lg-4\">
        <div class=\"container-xl\">

        {% block body %} {% endblock %}
    {#    <div class=\"app-content pt-3 p-md-3 p-lg-4\">#}
    {#        <div class=\"container-xl\">#}

    {#            <h1 class=\"app-page-title\">Overview</h1>#}

    {#            <div class=\"app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration\" role=\"alert\">#}
    {#                <div class=\"inner\">#}
    {#                    <div class=\"app-card-body p-3 p-lg-4\">#}
    {#                        <h3 class=\"mb-3\">Welcome, developer!</h3>#}
    {#                        <div class=\"row gx-5 gy-3\">#}
    {#                            <div class=\"col-12 col-lg-9\">#}

    {#                                <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>#}
    {#                            </div><!--//col-->#}
    {#                            <div class=\"col-12 col-lg-3\">#}
    {#                                <a class=\"btn app-btn-primary\" href=\"https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/\"><svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-file-earmark-arrow-down me-2\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                        <path d=\"M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z\"/>#}
    {#                                        <path d=\"M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z\"/>#}
    {#                                        <path fill-rule=\"evenodd\" d=\"M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z\"/>#}
    {#                                    </svg>Free Download</a>#}
    {#                            </div><!--//col-->#}
    {#                        </div><!--//row-->#}
    {#                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>#}
    {#                    </div><!--//app-card-body-->#}

    {#                </div><!--//inner-->#}
    {#            </div><!--//app-card-->#}

    {#            <div class=\"row g-4 mb-4\">#}
    {#                <div class=\"col-6 col-lg-3\">#}
    {#                    <div class=\"app-card app-card-stat shadow-sm h-100\">#}
    {#                        <div class=\"app-card-body p-3 p-lg-4\">#}
    {#                            <h4 class=\"stats-type mb-1\">Total Sales</h4>#}
    {#                            <div class=\"stats-figure\">\$12,628</div>#}
    {#                            <div class=\"stats-meta text-success\">#}
    {#                                <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-up\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                    <path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z\"/>#}
    {#                                </svg> 20%</div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                        <a class=\"app-card-link-mask\" href=\"#\"></a>#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}

    {#                <div class=\"col-6 col-lg-3\">#}
    {#                    <div class=\"app-card app-card-stat shadow-sm h-100\">#}
    {#                        <div class=\"app-card-body p-3 p-lg-4\">#}
    {#                            <h4 class=\"stats-type mb-1\">Expenses</h4>#}
    {#                            <div class=\"stats-figure\">\$2,250</div>#}
    {#                            <div class=\"stats-meta text-success\">#}
    {#                                <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-down\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                    <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z\"/>#}
    {#                                </svg> 5% </div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                        <a class=\"app-card-link-mask\" href=\"#\"></a>#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#                <div class=\"col-6 col-lg-3\">#}
    {#                    <div class=\"app-card app-card-stat shadow-sm h-100\">#}
    {#                        <div class=\"app-card-body p-3 p-lg-4\">#}
    {#                            <h4 class=\"stats-type mb-1\">Projects</h4>#}
    {#                            <div class=\"stats-figure\">23</div>#}
    {#                            <div class=\"stats-meta\">#}
    {#                                Open</div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                        <a class=\"app-card-link-mask\" href=\"#\"></a>#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#                <div class=\"col-6 col-lg-3\">#}
    {#                    <div class=\"app-card app-card-stat shadow-sm h-100\">#}
    {#                        <div class=\"app-card-body p-3 p-lg-4\">#}
    {#                            <h4 class=\"stats-type mb-1\">Invoices</h4>#}
    {#                            <div class=\"stats-figure\">6</div>#}
    {#                            <div class=\"stats-meta\">New</div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                        <a class=\"app-card-link-mask\" href=\"#\"></a>#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#            </div><!--//row-->#}
    {#            <div class=\"row g-4 mb-4\">#}
    {#                <div class=\"col-12 col-lg-6\">#}
    {#                    <div class=\"app-card app-card-chart h-100 shadow-sm\">#}
    {#                        <div class=\"app-card-header p-3\">#}
    {#                            <div class=\"row justify-content-between align-items-center\">#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <h4 class=\"app-card-title\">Line Chart Example</h4>#}
    {#                                </div><!--//col-->#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <div class=\"card-header-action\">#}
    {#                                        <a href=\"charts.html\">More charts</a>#}
    {#                                    </div><!--//card-header-actions-->#}
    {#                                </div><!--//col-->#}
    {#                            </div><!--//row-->#}
    {#                        </div><!--//app-card-header-->#}
    {#                        <div class=\"app-card-body p-3 p-lg-4\">#}
    {#                            <div class=\"mb-3 d-flex\">#}
    {#                                <select class=\"form-select form-select-sm ms-auto d-inline-flex w-auto\">#}
    {#                                    <option value=\"1\" selected>This week</option>#}
    {#                                    <option value=\"2\">Today</option>#}
    {#                                    <option value=\"3\">This Month</option>#}
    {#                                    <option value=\"3\">This Year</option>#}
    {#                                </select>#}
    {#                            </div>#}
    {#                            <div class=\"chart-container\">#}
    {#                                <canvas id=\"canvas-linechart\" ></canvas>#}
    {#                            </div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#                <div class=\"col-12 col-lg-6\">#}
    {#                    <div class=\"app-card app-card-chart h-100 shadow-sm\">#}
    {#                        <div class=\"app-card-header p-3\">#}
    {#                            <div class=\"row justify-content-between align-items-center\">#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <h4 class=\"app-card-title\">Bar Chart Example</h4>#}
    {#                                </div><!--//col-->#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <div class=\"card-header-action\">#}
    {#                                        <a href=\"charts.html\">More charts</a>#}
    {#                                    </div><!--//card-header-actions-->#}
    {#                                </div><!--//col-->#}
    {#                            </div><!--//row-->#}
    {#                        </div><!--//app-card-header-->#}
    {#                        <div class=\"app-card-body p-3 p-lg-4\">#}
    {#                            <div class=\"mb-3 d-flex\">#}
    {#                                <select class=\"form-select form-select-sm ms-auto d-inline-flex w-auto\">#}
    {#                                    <option value=\"1\" selected>This week</option>#}
    {#                                    <option value=\"2\">Today</option>#}
    {#                                    <option value=\"3\">This Month</option>#}
    {#                                    <option value=\"3\">This Year</option>#}
    {#                                </select>#}
    {#                            </div>#}
    {#                            <div class=\"chart-container\">#}
    {#                                <canvas id=\"canvas-barchart\" ></canvas>#}
    {#                            </div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}

    {#            </div><!--//row-->#}
    {#            <div class=\"row g-4 mb-4\">#}
    {#                <div class=\"col-12 col-lg-6\">#}
    {#                    <div class=\"app-card app-card-progress-list h-100 shadow-sm\">#}
    {#                        <div class=\"app-card-header p-3\">#}
    {#                            <div class=\"row justify-content-between align-items-center\">#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <h4 class=\"app-card-title\">Progress</h4>#}
    {#                                </div><!--//col-->#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <div class=\"card-header-action\">#}
    {#                                        <a href=\"#\">All projects</a>#}
    {#                                    </div><!--//card-header-actions-->#}
    {#                                </div><!--//col-->#}
    {#                            </div><!--//row-->#}
    {#                        </div><!--//app-card-header-->#}
    {#                        <div class=\"app-card-body\">#}
    {#                            <div class=\"item p-3\">#}
    {#                                <div class=\"row align-items-center\">#}
    {#                                    <div class=\"col\">#}
    {#                                        <div class=\"title mb-1 \">Project lorem ipsum dolor sit amet</div>#}
    {#                                        <div class=\"progress\">#}
    {#                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>#}
    {#                                        </div>#}
    {#                                    </div><!--//col-->#}
    {#                                    <div class=\"col-auto\">#}
    {#                                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>#}
    {#                                        </svg>#}
    {#                                    </div><!--//col-->#}
    {#                                </div><!--//row-->#}
    {#                                <a class=\"item-link-mask\" href=\"#\"></a>#}
    {#                            </div><!--//item-->#}


    {#                            <div class=\"item p-3\">#}
    {#                                <div class=\"row align-items-center\">#}
    {#                                    <div class=\"col\">#}
    {#                                        <div class=\"title mb-1 \">Project duis aliquam et lacus quis ornare</div>#}
    {#                                        <div class=\"progress\">#}
    {#                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 34%;\" aria-valuenow=\"34\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>#}
    {#                                        </div>#}
    {#                                    </div><!--//col-->#}
    {#                                    <div class=\"col-auto\">#}
    {#                                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>#}
    {#                                        </svg>#}
    {#                                    </div><!--//col-->#}
    {#                                </div><!--//row-->#}
    {#                                <a class=\"item-link-mask\" href=\"#\"></a>#}
    {#                            </div><!--//item-->#}

    {#                            <div class=\"item p-3\">#}
    {#                                <div class=\"row align-items-center\">#}
    {#                                    <div class=\"col\">#}
    {#                                        <div class=\"title mb-1 \">Project sed tempus felis id lacus pulvinar</div>#}
    {#                                        <div class=\"progress\">#}
    {#                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 68%;\" aria-valuenow=\"68\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>#}
    {#                                        </div>#}
    {#                                    </div><!--//col-->#}
    {#                                    <div class=\"col-auto\">#}
    {#                                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>#}
    {#                                        </svg>#}
    {#                                    </div><!--//col-->#}
    {#                                </div><!--//row-->#}
    {#                                <a class=\"item-link-mask\" href=\"#\"></a>#}
    {#                            </div><!--//item-->#}

    {#                            <div class=\"item p-3\">#}
    {#                                <div class=\"row align-items-center\">#}
    {#                                    <div class=\"col\">#}
    {#                                        <div class=\"title mb-1 \">Project sed tempus felis id lacus pulvinar</div>#}
    {#                                        <div class=\"progress\">#}
    {#                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 52%;\" aria-valuenow=\"52\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>#}
    {#                                        </div>#}
    {#                                    </div><!--//col-->#}
    {#                                    <div class=\"col-auto\">#}
    {#                                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>#}
    {#                                        </svg>#}
    {#                                    </div><!--//col-->#}
    {#                                </div><!--//row-->#}
    {#                                <a class=\"item-link-mask\" href=\"#\"></a>#}
    {#                            </div><!--//item-->#}

    {#                        </div><!--//app-card-body-->#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#                <div class=\"col-12 col-lg-6\">#}
    {#                    <div class=\"app-card app-card-stats-table h-100 shadow-sm\">#}
    {#                        <div class=\"app-card-header p-3\">#}
    {#                            <div class=\"row justify-content-between align-items-center\">#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <h4 class=\"app-card-title\">Stats List</h4>#}
    {#                                </div><!--//col-->#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <div class=\"card-header-action\">#}
    {#                                        <a href=\"#\">View report</a>#}
    {#                                    </div><!--//card-header-actions-->#}
    {#                                </div><!--//col-->#}
    {#                            </div><!--//row-->#}
    {#                        </div><!--//app-card-header-->#}
    {#                        <div class=\"app-card-body p-3 p-lg-4\">#}
    {#                            <div class=\"table-responsive\">#}
    {#                                <table class=\"table table-borderless mb-0\">#}
    {#                                    <thead>#}
    {#                                    <tr>#}
    {#                                        <th class=\"meta\">Source</th>#}
    {#                                        <th class=\"meta stat-cell\">Views</th>#}
    {#                                        <th class=\"meta stat-cell\">Today</th>#}
    {#                                    </tr>#}
    {#                                    </thead>#}
    {#                                    <tbody>#}
    {#                                    <tr>#}
    {#                                        <td><a href=\"#\">google.com</a></td>#}
    {#                                        <td class=\"stat-cell\">110</td>#}
    {#                                        <td class=\"stat-cell\">#}
    {#                                            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-up text-success\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                                <path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z\"/>#}
    {#                                            </svg>#}
    {#                                            30%#}
    {#                                        </td>#}
    {#                                    </tr>#}
    {#                                    <tr>#}
    {#                                        <td><a href=\"#\">getbootstrap.com</a></td>#}
    {#                                        <td class=\"stat-cell\">67</td>#}
    {#                                        <td class=\"stat-cell\">23%</td>#}
    {#                                    </tr>#}
    {#                                    <tr>#}
    {#                                        <td><a href=\"#\">w3schools.com</a></td>#}
    {#                                        <td class=\"stat-cell\">56</td>#}
    {#                                        <td class=\"stat-cell\">#}
    {#                                            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-down text-danger\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                                <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z\"/>#}
    {#                                            </svg>#}
    {#                                            20%#}
    {#                                        </td>#}
    {#                                    </tr>#}
    {#                                    <tr>#}
    {#                                        <td><a href=\"#\">javascript.com </a></td>#}
    {#                                        <td class=\"stat-cell\">24</td>#}
    {#                                        <td class=\"stat-cell\">-</td>#}
    {#                                    </tr>#}
    {#                                    <tr>#}
    {#                                        <td><a href=\"#\">github.com </a></td>#}
    {#                                        <td class=\"stat-cell\">17</td>#}
    {#                                        <td class=\"stat-cell\">15%</td>#}
    {#                                    </tr>#}
    {#                                    </tbody>#}
    {#                                </table>#}
    {#                            </div><!--//table-responsive-->#}
    {#                        </div><!--//app-card-body-->#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#            </div><!--//row-->#}
    {#            <div class=\"row g-4 mb-4\">#}
    {#                <div class=\"col-12 col-lg-4\">#}
    {#                    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">#}
    {#                        <div class=\"app-card-header p-3 border-bottom-0\">#}
    {#                            <div class=\"row align-items-center gx-3\">#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <div class=\"app-icon-holder\">#}
    {#                                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-receipt\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z\"/>#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z\"/>#}
    {#                                        </svg>#}
    {#                                    </div><!--//icon-holder-->#}

    {#                                </div><!--//col-->#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <h4 class=\"app-card-title\">Invoices</h4>#}
    {#                                </div><!--//col-->#}
    {#                            </div><!--//row-->#}
    {#                        </div><!--//app-card-header-->#}
    {#                        <div class=\"app-card-body px-4\">#}

    {#                            <div class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet eros vel diam semper mollis.</div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                        <div class=\"app-card-footer p-4 mt-auto\">#}
    {#                            <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>#}
    {#                        </div><!--//app-card-footer-->#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#                <div class=\"col-12 col-lg-4\">#}
    {#                    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">#}
    {#                        <div class=\"app-card-header p-3 border-bottom-0\">#}
    {#                            <div class=\"row align-items-center gx-3\">#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <div class=\"app-icon-holder\">#}
    {#                                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-code-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z\"/>#}
    {#                                        </svg>#}
    {#                                    </div><!--//icon-holder-->#}

    {#                                </div><!--//col-->#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <h4 class=\"app-card-title\">Apps</h4>#}
    {#                                </div><!--//col-->#}
    {#                            </div><!--//row-->#}
    {#                        </div><!--//app-card-header-->#}
    {#                        <div class=\"app-card-body px-4\">#}

    {#                            <div class=\"intro\">Pellentesque varius, elit vel volutpat sollicitudin, lacus quam efficitur augue</div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                        <div class=\"app-card-footer p-4 mt-auto\">#}
    {#                            <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>#}
    {#                        </div><!--//app-card-footer-->#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#                <div class=\"col-12 col-lg-4\">#}
    {#                    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">#}
    {#                        <div class=\"app-card-header p-3 border-bottom-0\">#}
    {#                            <div class=\"row align-items-center gx-3\">#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <div class=\"app-icon-holder\">#}
    {#                                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-tools\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z\"/>#}
    {#                                            <path fill-rule=\"evenodd\" d=\"M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z\"/>#}
    {#                                        </svg>#}
    {#                                    </div><!--//icon-holder-->#}

    {#                                </div><!--//col-->#}
    {#                                <div class=\"col-auto\">#}
    {#                                    <h4 class=\"app-card-title\">Tools</h4>#}
    {#                                </div><!--//col-->#}
    {#                            </div><!--//row-->#}
    {#                        </div><!--//app-card-header-->#}
    {#                        <div class=\"app-card-body px-4\">#}

    {#                            <div class=\"intro\">Sed maximus, libero ac pharetra elementum, turpis nisi molestie neque, et tincidunt velit turpis non enim.</div>#}
    {#                        </div><!--//app-card-body-->#}
    {#                        <div class=\"app-card-footer p-4 mt-auto\">#}
    {#                            <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>#}
    {#                        </div><!--//app-card-footer-->#}
    {#                    </div><!--//app-card-->#}
    {#                </div><!--//col-->#}
    {#            </div><!--//row-->#}

            </div><!--//container-fluid-->
        </div><!--//app-content-->

    <footer class=\"app-footer\">
        <div class=\"container text-center py-3\">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class=\"copyright\">Designed with <span class=\"sr-only\">love</span><i class=\"fas fa-heart\"
                                                                                       style=\"color: #fb866a;\"></i> by
                <a class=\"app-link\" href=\"http://themes.3rdwavemedia.com\" target=\"_blank\">Xiaoying Riley</a> for
                developers</small>

        </div>
    </footer><!--//app-footer-->

</div><!--//app-wrapper-->


<!-- Javascript -->
<script src=\"{{ asset ('assets/plugins/popper.min.js') }}\"></script>
<script src=\"{{ asset ('assets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>

<!-- Charts JS -->
<script src=\"{{ asset ('assets/plugins/chart.js/chart.min.js') }}\"></script>
<script src=\"{{ asset ('assets/js/index-charts.js') }}\"></script>

<!-- Page Specific JS -->
<script src=\"{{ asset ('assets/js/app.js') }}\"></script>

</body>
</html>

", "base.html.twig", "C:\\wamp64\\www\\Ishaane\\templates\\base.html.twig");
    }
}
