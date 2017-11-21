<?php

/* AvedBlogBundle:Default:index.html.twig */
class __TwigTemplate_a786b52c66e64c7a3efd1c0915fed1f4e864e5df32d1d8096675617f43d2c778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AvedBlogBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e1d674ebaf11d12bf0a89474b641e0a6475271b21447e484b5b36d1c3529554 = $this->env->getExtension("native_profiler");
        $__internal_3e1d674ebaf11d12bf0a89474b641e0a6475271b21447e484b5b36d1c3529554->enter($__internal_3e1d674ebaf11d12bf0a89474b641e0a6475271b21447e484b5b36d1c3529554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvedBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e1d674ebaf11d12bf0a89474b641e0a6475271b21447e484b5b36d1c3529554->leave($__internal_3e1d674ebaf11d12bf0a89474b641e0a6475271b21447e484b5b36d1c3529554_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1bafb0ada974d337ecf3b22eeffb1b83214c9143141ed324986842187eb9b0a = $this->env->getExtension("native_profiler");
        $__internal_f1bafb0ada974d337ecf3b22eeffb1b83214c9143141ed324986842187eb9b0a->enter($__internal_f1bafb0ada974d337ecf3b22eeffb1b83214c9143141ed324986842187eb9b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section id=\"breadcrumbs\" class=\"grey_section bg_image\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <h1><strong>Accueil</strong>
                </h1>
                <ol class=\"breadcrumb\">
                    <li>
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("avedblog_homepage");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"active\">Présentation</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class=\"light_section\">
    <div class=\"container\" style=\"padding-top:70px\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <p>
                    <div style=\"padding:35px 35px 0 0\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("example/gallery/15.png"), "html", null, true);
        echo "\" alt=\"\"></p></br>
                    </div>
                <p>
                    <h2> <strong>Association</strong>
                        de la
                        <strong>vie étudiante</strong>
                        à
                        <strong>Descartes</strong>
                    </h2>
                </p>
                <ul class=\"list1\">
                    <li>Un Campus</li>
                    <li>Des Associations</li>
                    <li>Des Ecoles</li>
                </ul>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"panel-group\" id=\"accordion\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\">Qu'est-ce que l'AVED ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor!
                                </p>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident pariatur, veritatis, ducimus quidem doloribus distinctio officia dignissimos repellendus itaque, est id adipisci earum perspiciatis. Officia aut eum voluptatibus pariatur sequi!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\" class=\"collapsed\">Qui sommes nous ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse2\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere doloremque ut dolores laudantium nihil at, repudiandae est numquam fuga tempora totam sequi quidem saepe officiis sint beatae, magni fugit.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate expedita quasi ducimus at quia repudiandae, nihil aperiam odio repellat omnis dolor, dolore quis modi, ullam a. Fugit laudantium iure consectetur.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\" class=\"collapsed\">Pourquoi le faisons nous ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse3\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum temporibus tempora, eaque repudiandae inventore, molestiae ipsa debitis rerum, nam doloribus excepturi consectetur quidem ipsam dicta esse officia aperiam autem omnis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_f1bafb0ada974d337ecf3b22eeffb1b83214c9143141ed324986842187eb9b0a->leave($__internal_f1bafb0ada974d337ecf3b22eeffb1b83214c9143141ed324986842187eb9b0a_prof);

    }

    public function getTemplateName()
    {
        return "AvedBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
