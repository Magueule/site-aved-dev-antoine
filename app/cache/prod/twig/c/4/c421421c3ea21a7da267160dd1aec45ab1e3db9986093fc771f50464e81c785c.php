<?php

/* base.html.twig */
class __TwigTemplate_c421421c3ea21a7da267160dd1aec45ab1e3db9986093fc771f50464e81c785c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06e9cffc0e88dfab4f5744d0cc60cbfa7276c09332ec65ef6108d004dba43eeb = $this->env->getExtension("native_profiler");
        $__internal_06e9cffc0e88dfab4f5744d0cc60cbfa7276c09332ec65ef6108d004dba43eeb->enter($__internal_06e9cffc0e88dfab4f5744d0cc60cbfa7276c09332ec65ef6108d004dba43eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta charset=\"UTF-8\" />
        <!--[if IE]>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <![endif]-->
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!--[if lt IE 9]>
            <script src=\"js/vendor/html5shiv.min.js\"></script>
            <script src=\"js/vendor/respond.min.js\"></script>
        <![endif]-->
        
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("example/logo_small.png"), "html", null, true);
        echo "\" />
    </head>

    <body>
        ";
        // line 28
        $this->displayBlock('navbar', $context, $blocks);
        // line 100
        echo "
        ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "
        <section id=\"pages\" class=\"light_section bottom_section\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"teaser teaser_icon to_animate\" data-animation=\"fadeInDown\">
                            <i class=\"rt-icon-diamond2\"></i>
                            <h4>
                                <a href=\"#\">
                                    <strong>A propos</strong>
                                    de nous
                                </a>
                            </h4>
                            <p>Contactez notre équipe et informez-vous</p>
                            <p class=\"teaser_button\">
                                <a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("avedblog_contactpage");
        echo "\" class=\"theme_button\">Contact</a>
                            </p>
                        </div>

                    </div>

                    <div class=\"col-sm-4\">
                        <div class=\"teaser teaser_icon to_animate\" data-animation=\"fadeInDown\">
                            <i class=\"rt-icon-camera2\"></i>
                            <h4>
                                <a href=\"#\">
                                    <strong>Notre</strong>
                                    Galerie
                                </a>
                            </h4>
                            <p>Venez voir nos photos</p>
                            <p class=\"teaser_button\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("avedblog_galeriepage");
        echo "\" class=\"theme_button\">Galerie</a>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-sm-4\">
                        <div class=\"teaser teaser_icon to_animate\" data-animation=\"fadeInDown\">
                            <i class=\"rt-icon-tag2\"></i>
                            <h4>
                                <a href=\"#\">
                                    <strong>Page</strong>
                                    Facebook
                                </a>
                            </h4>
                            <p>Visitez notre page</p>
                            <p class=\"teaser_button\">
                                <a href=\"https://www.facebook.com/AVEDescartes?fref=ts\" class=\"theme_button\">Facebook</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </br></br>
        <section id=\"copyright\" class=\"grey_section bg_image\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 text-center to_animate\">
                        <a href=\"#\" class=\"logo bottom_logo\">
                            <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("example/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            <strong>AVED</strong>
                        </a>
                        <p>
                            AVED &copy; 2013 - Association de la vie étudiante à Descartes
                        </p>
                    </div>
                </div>
            </div>
        </section>

        ";
        // line 175
        $this->displayBlock('javascripts', $context, $blocks);
        // line 211
        echo "    </body>
</html>
";
        
        $__internal_06e9cffc0e88dfab4f5744d0cc60cbfa7276c09332ec65ef6108d004dba43eeb->leave($__internal_06e9cffc0e88dfab4f5744d0cc60cbfa7276c09332ec65ef6108d004dba43eeb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_adb66c9b66bb0ad49690ac657402145998f65cb04f318e1be38f37b4c2088128 = $this->env->getExtension("native_profiler");
        $__internal_adb66c9b66bb0ad49690ac657402145998f65cb04f318e1be38f37b4c2088128->enter($__internal_adb66c9b66bb0ad49690ac657402145998f65cb04f318e1be38f37b4c2088128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AVED - Association pour la vie étudiante à Descartes";
        
        $__internal_adb66c9b66bb0ad49690ac657402145998f65cb04f318e1be38f37b4c2088128->leave($__internal_adb66c9b66bb0ad49690ac657402145998f65cb04f318e1be38f37b4c2088128_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84baed2dd45a01fa1856d631da0d4255e4bd9c4b0c09b3b66a33713a0240dc54 = $this->env->getExtension("native_profiler");
        $__internal_84baed2dd45a01fa1856d631da0d4255e4bd9c4b0c09b3b66a33713a0240dc54->enter($__internal_84baed2dd45a01fa1856d631da0d4255e4bd9c4b0c09b3b66a33713a0240dc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" id=\"color-switcher-link\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animations.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fonts.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_84baed2dd45a01fa1856d631da0d4255e4bd9c4b0c09b3b66a33713a0240dc54->leave($__internal_84baed2dd45a01fa1856d631da0d4255e4bd9c4b0c09b3b66a33713a0240dc54_prof);

    }

    // line 28
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_66f234d198b030d61913140356233af6093ce2184c07038e636cc8206a687eed = $this->env->getExtension("native_profiler");
        $__internal_66f234d198b030d61913140356233af6093ce2184c07038e636cc8206a687eed->enter($__internal_66f234d198b030d61913140356233af6093ce2184c07038e636cc8206a687eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 29
        echo "        <section id=\"topline\" class=\"table_section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("avedblog_homepage");
        echo "\" class=\"logo top_logo\">
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("example/logo.png"), "html", null, true);
        echo "\" alt=\"\"> <strong>AVED</strong>
                        </a>
                    </div>

                    <div class=\"col-sm-6\">
                        <p id=\"social\" class=\"text-sm-right\">
                            <a class=\"socialico-facebook\" href=\"#\" title=\"Facebook\">#</a>
                        </p>

                    </div>

                </div>
            </div>
        </section>

        <header id=\"header\" class=\"gradient\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <nav id=\"mainmenu_wrapper\">
                            <ul id=\"mainmenu\" class=\"nav sf-menu\">
                                <li>
                                    <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("avedblog_homepage");
        echo "\">Accueil</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("avedblog_campuspage");
        echo "\">Le Campus Descartes</a>
                                    <ul>
                                        <li>
                                            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("avedblog_mappage");
        echo "\">Map</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("avedblog_ecolespage");
        echo "\">Les écoles</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("avedblog_associationspage");
        echo "\">Les Associations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("avedblog_eventpage");
        echo "\">Evénements</a>
                                    <ul>
                                        <li>
                                            <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("avedblog_tropheedtpage");
        echo "\">Trophée Descartes 2013</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("avedblog_tropheedqpage");
        echo "\">Trophée Descartes 2014</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("avedblog_pimpmdpage");
        echo "\">Pimp My Descartes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("avedblog_galeriepage");
        echo "\">Galerie</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("avedblog_contactpage");
        echo "\">Contact</a>
                                </li>
                            </ul>  
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <span id=\"toggle_menu\"><span></span></span>
        ";
        
        $__internal_66f234d198b030d61913140356233af6093ce2184c07038e636cc8206a687eed->leave($__internal_66f234d198b030d61913140356233af6093ce2184c07038e636cc8206a687eed_prof);

    }

    // line 101
    public function block_body($context, array $blocks = array())
    {
        $__internal_f13fd683dc5b359f083ea41c53966e3a5b3ad117121c558d294b1398e9c779fe = $this->env->getExtension("native_profiler");
        $__internal_f13fd683dc5b359f083ea41c53966e3a5b3ad117121c558d294b1398e9c779fe->enter($__internal_f13fd683dc5b359f083ea41c53966e3a5b3ad117121c558d294b1398e9c779fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 102
        echo "        ";
        
        $__internal_f13fd683dc5b359f083ea41c53966e3a5b3ad117121c558d294b1398e9c779fe->leave($__internal_f13fd683dc5b359f083ea41c53966e3a5b3ad117121c558d294b1398e9c779fe_prof);

    }

    // line 175
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8437b0d6be8f6cb8e5fc49746463e49ea776537135b330e2dad2a92387244e0 = $this->env->getExtension("native_profiler");
        $__internal_e8437b0d6be8f6cb8e5fc49746463e49ea776537135b330e2dad2a92387244e0->enter($__internal_e8437b0d6be8f6cb8e5fc49746463e49ea776537135b330e2dad2a92387244e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 176
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
            <!-- libraries -->
            <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.appear.js"), "html", null, true);
        echo "\"></script>

            <!-- superfish menu  -->
            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.hoverIntent.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/superfish.js"), "html", null, true);
        echo "\"></script>
            
            <!-- page scrolling -->
            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.localscroll-min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.scrollTo-min.js"), "html", null, true);
        echo "\"></script>
            <script src='";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "'></script>

            <!-- widgets -->
            <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script><!-- pie charts -->
            <script src='";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.countTo.js"), "html", null, true);
        echo "'></script><!-- digits counting -->
            <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script><!-- lightbox photos -->
            <script src='";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.plugin.min.js"), "html", null, true);
        echo "'></script><!-- plugin creator for comingsoon counter -->
            <script src='";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.countdown.js"), "html", null, true);
        echo "'></script><!-- coming soon counter -->        
            <script src='";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jflickrfeed.min.js"), "html", null, true);
        echo "'></script><!-- flickr -->
            <script src='";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("twitter/jquery.tweet.min.js"), "html", null, true);
        echo "'></script><!-- twitter -->

            <!-- sliders, filters, carousels -->
            <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
            <script src='";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/owl.carousel.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.flexslider-min.js"), "html", null, true);
        echo "'></script>

            <!-- custom scripts -->
            <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e8437b0d6be8f6cb8e5fc49746463e49ea776537135b330e2dad2a92387244e0->leave($__internal_e8437b0d6be8f6cb8e5fc49746463e49ea776537135b330e2dad2a92387244e0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 209,  438 => 208,  432 => 205,  428 => 204,  424 => 203,  418 => 200,  414 => 199,  410 => 198,  406 => 197,  402 => 196,  398 => 195,  394 => 194,  388 => 191,  384 => 190,  380 => 189,  376 => 188,  372 => 187,  366 => 184,  362 => 183,  356 => 180,  352 => 179,  348 => 178,  342 => 176,  336 => 175,  329 => 102,  323 => 101,  306 => 90,  300 => 87,  292 => 82,  286 => 79,  280 => 76,  274 => 73,  266 => 68,  260 => 65,  254 => 62,  248 => 59,  242 => 56,  217 => 34,  213 => 33,  207 => 29,  201 => 28,  192 => 21,  188 => 20,  184 => 19,  179 => 18,  173 => 17,  161 => 4,  152 => 211,  150 => 175,  136 => 164,  104 => 135,  84 => 118,  67 => 103,  65 => 101,  62 => 100,  60 => 28,  53 => 24,  50 => 23,  48 => 17,  32 => 4,  27 => 1,);
    }
}
