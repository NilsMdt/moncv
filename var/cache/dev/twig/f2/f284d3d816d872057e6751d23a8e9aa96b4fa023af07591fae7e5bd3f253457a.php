<?php

/* @App/default/index.html.twig */
class __TwigTemplate_5bd696753cd2a18421ad55344976fc15262bb3490b710fe47f6049b3c8580b90 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"main-wrapper\">
    <!-- Page Preloader -->
    <div id=\"preloader\">
        <div id=\"status\">
            <div class=\"status-mes\"></div>
        </div>
    </div>

    <header class=\"header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"profile-img\">
                        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/img/img-profile.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <!-- Profile Image -->
                </div>
                <div class=\"col-md-9\">
                    <div class=\"name-wrapper\">
                        <h1 class=\"name\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new Twig_Error_Runtime('Variable "firstname" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</h1>
                        <span>Freelance Web Designer</span>
                    </div>
                    <p>
                        Credibly embrace visionary internal or \"organic\" sources and business benefits. Collaboratively
                        integrate efficient portals rather than customized customer service. Assertively deliver
                        frictionless services via leveraged interfaces. Conveniently evisculate accurate sources and
                        process-centric expertise.Energistically fabricate customized imperatives through cooperative
                        catalysts for change.
                    </p>


                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"personal-details\">
                                <strong>OCTOBER 17, 1996</strong>
                                <small>BIRTH</small>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"personal-details\">
                                <strong>UNITED KINGDOM</strong>
                                <small>NATIONALITY</small>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"personal-details\">
                                <strong>ENGLISH <span>(NATIVE)</span>, FRENCH <span>(INTERMEDIATE)</span></strong>
                                <small>LANGUAGE</small>
                            </div>
                        </div>
                    </div>

                    <ul class=\"social-icon\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-slack\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- .header-->

    <section class=\"section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>My Activity</h2>
                    </div>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">100%</div>
                                <div class=\"item-stats-name\">Jobs Success</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">96%</div>
                                <div class=\"item-stats-name\">On Budget</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">99%</div>
                                <div class=\"item-stats-name\">On Time</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">89%</div>
                                <div class=\"item-stats-name\">Repeat Hire Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .activity-wrapper -->

    <section class=\"work-history-wrapper section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Work History</h2>
                    </div>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">15096</div>
                                <div class=\"item-stats-name\">hours worked</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">687</div>
                                <div class=\"item-stats-name\">Work Done</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">30</div>
                                <div class=\"item-stats-name\">Hours weekly Available</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">24</div>
                                <div class=\"item-stats-name\">Hour Response Time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .work-history-wrapper -->

    <section class=\"expertise-wrapper section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>My Specialities</h2>
                    </div>
                </div>

                
                        <div class=\"col-md-6\">
                            <div class=\"expertise-item\">
                                <h3>Joomla Template Development </h3>

                                <p>
                                    Quickly repurpose reliable customer service with orthogonal ideas. Competently.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"expertise-item\">
                                <h3>Drupal Template Development</h3>

                                <p>
                                    Interactively myocardinate high standards in initiatives rather than next-generation.
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"expertise-item\">
                                <h3>Shopify Theme Design</h3>

                                <p>
                                    Dynamically initiate client-based convergence vis-a-vis performance based. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- .row -->


        </div>
    </section>
    <!-- .expertise-wrapper -->

    <section class=\"section-wrapper skills-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Skills</h2>
                    </div>
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"progress-wrapper\">

                                <h3>CODING SKILLS</h3>

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">HTML5</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"62\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 62%\"><span
                                                class=\"progress-percent\"> 62%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <!-- .skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">CSS3</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 90%\"><span
                                                class=\"progress-percent\"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">PHP</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 75%;\"><span
                                                class=\"progress-percent\"> 75%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">JavaScript</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"55\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 55%;\"><span
                                                class=\"progress-percent\"> 55%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->


                            </div>
                            <!-- /.progress-wrapper -->
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"progress-wrapper\">
                                <h3>DESIGN TOOLS</h3>

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">Photoshop</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"62\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 90%\"><span
                                                class=\"progress-percent\"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <!-- .skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">Illustrator</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 70%\"><span
                                                class=\"progress-percent\"> 50%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">Sketch</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 75%;\"><span
                                                class=\"progress-percent\"> 75%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">MACAW</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"55\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 55%;\"><span
                                                class=\"progress-percent\"> 55%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                            </div>
                            <!-- /.progress-wrapper -->
                        </div>
                    </div>
                    <!--.row -->
                </div>
            </div>

        </div>
        <!-- .container-fluid -->
    </section>
    <!-- .skills-wrapper -->

    <section class=\"section-wrapper section-experience\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\"><h2>Experiences</h2></div>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"content-item\">
                                <small>2015 - Present</small>
                                <h3>Senior Developer</h3>
                                <h4>Computer & Motor Ltd.</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            
                         
                            
                            <!-- .experience-item -->

                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"content-item\">
                                <small>2012 - 2015</small>
                                <h3>Webdesigner</h3>
                                <h4>BizzNiss</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            <!-- .experience-item -->
                        </div>
                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-6\">
                            <div class=\"content-item\">
                                <small>2012 - 2015</small>
                                <h3>Web Developer</h3>
                                <h4>Unique Soft</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            <!-- .experience-item -->
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"content-item\">
                                <small>2010 - 2012</small>
                                <h3>Front-end Developer</h3>
                                <h4>Somsom LLC</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            <!-- .experience-item -->
                        </div>
                    </div>
                </div>
                <!--.row-->
            </div>
        </div>
        <!-- .container -->
    </section>
    <!-- .section-experience -->

    <section class=\"section-education section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\"><h2>Formations</h2></div>
                </div>

                 <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Formations"]) || array_key_exists("Formations", $context) ? $context["Formations"] : (function () { throw new Twig_Error_Runtime('Variable "Formations" does not exist.', 416, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 417
            echo "                                <div class=\"content-item\">
                                    <small>";
            // line 418
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getDateDebut", array(), "method"), "Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getDateFin", array(), "method"), "Y"), "html", null, true);
            echo "</small>
                                    <h3>";
            // line 419
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getName", array(), "method"), "html", null, true);
            echo "</h3>
                                    <h4>";
            // line 420
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getLieu", array(), "method"), "html", null, true);
            echo "</h4>
                                    

                                    <p></p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "                            <!-- .experience-item -->
                           
                            <!-- .experience-item -->
                        </div>
                    </div>
                    <!--.row-->
                </div>

            </div>
            <!--.row-->
        </div>
        <!-- .container -->
    </section>
    <!-- .section-education -->

    <section class=\"section-profile section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\"><h2>Loisirs</h2></div>
                    <a href=\"";
        // line 446
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_loisir");
        echo "\">Ajouter un loisir</a>
                    
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                             ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Loisirs"]) || array_key_exists("Loisirs", $context) ? $context["Loisirs"] : (function () { throw new Twig_Error_Runtime('Variable "Loisirs" does not exist.', 453, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["loisir"]) {
            // line 454
            echo "                            <div class=\"profile-item\">
                                <div class=\"media\">
                                    <a href=\"";
            // line 456
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_loisir", array("id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> |
                                    <a href=\"";
            // line 457
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_loisir", array("id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                            <img class=\"media-object\" src=\"";
            // line 460
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/img/m-logo-studio.png"), "html", null, true);
            echo "\" alt=\"...\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h3>";
            // line 464
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loisir"], "getName", array(), "method"), "html", null, true);
            echo "</h3>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        echo "                        </div>
                    </div>
                    <!--.row-->
                </div>

            </div>
            <!--.row-->
        </div>
        <!-- .container -->
    </section>
    <!-- .section-profile -->

    <section class=\"section-wrapper portfolio-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Portfolio</h2>
                    </div>
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/img/portfolio-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Creative concepts</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/img/portfolio-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Customer focused</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/img/portfolio-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Management methodology</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/img/portfolio-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Market research</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/img/portfolio-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Market research</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/img/portfolio-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Market research</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- .portfolio -->

    <section class=\"section-contact section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Contact</h2>
                    </div>
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Adresse</strong><br>
                                1355 Market Street, Suite 900<br>
                                San Francisco, CA 94103

                            </address>
                        </div>
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Téléphone</strong><br>
                                +61 3 8376 6284
                            </address>
                        </div>

                        <div class=\"col-md-3\">
                            <address>
                                <strong>Email</strong><br>
                                <a href=\"mailto:#\">nmarandet@gmail.com</a>
                            </address>
                        </div>

                    </div>
                    <!--.row-->

                    <div class=\"feedback-form\">
                        <h3>Contactez moi</h3>

                        <form id=\"contactForm\" action=\"sendemail.php\" method=\"POST\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" required=\"\" class=\"form-control\" id=\"InputName\"
                                       placeholder=\"Nom\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" required=\"\" class=\"form-control\" id=\"InputEmail\"
                                       placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"subject\" class=\"form-control\" id=\"InputSubject\"
                                       placeholder=\"Objet\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" rows=\"4\" required=\"\" name=\"message\" id=\"message-text\"
                                          placeholder=\"Ecrivez un message\"></textarea>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                        </form>
                    </div>
                    <!-- .feedback-form -->

                </div>
            </div>
            <!--.row-->

        </div>
        <!--.container-fluid-->
    </section>
    <!--.section-contact-->

    <footer class=\"footer\">
        <div class=\"copyright-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"copytext\">&copy; MyProfile, All rights reserved | Design By: <a
                                href=\"https://themehippo.com\">themehippo</a></div>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!-- .container-fluid -->
        </div>
        <!-- .copyright-section -->
    </footer>
    <!-- .footer -->

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 565,  668 => 551,  651 => 537,  634 => 523,  617 => 509,  600 => 495,  572 => 469,  561 => 464,  554 => 460,  548 => 457,  544 => 456,  540 => 454,  536 => 453,  526 => 446,  504 => 426,  492 => 420,  488 => 419,  482 => 418,  479 => 417,  475 => 416,  77 => 23,  68 => 17,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div id=\"main-wrapper\">
    <!-- Page Preloader -->
    <div id=\"preloader\">
        <div id=\"status\">
            <div class=\"status-mes\"></div>
        </div>
    </div>

    <header class=\"header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"profile-img\">
                        <img src=\"{{ asset('template/img/img-profile.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <!-- Profile Image -->
                </div>
                <div class=\"col-md-9\">
                    <div class=\"name-wrapper\">
                        <h1 class=\"name\">{{firstname }} {{name}}</h1>
                        <span>Freelance Web Designer</span>
                    </div>
                    <p>
                        Credibly embrace visionary internal or \"organic\" sources and business benefits. Collaboratively
                        integrate efficient portals rather than customized customer service. Assertively deliver
                        frictionless services via leveraged interfaces. Conveniently evisculate accurate sources and
                        process-centric expertise.Energistically fabricate customized imperatives through cooperative
                        catalysts for change.
                    </p>


                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"personal-details\">
                                <strong>OCTOBER 17, 1996</strong>
                                <small>BIRTH</small>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"personal-details\">
                                <strong>UNITED KINGDOM</strong>
                                <small>NATIONALITY</small>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"personal-details\">
                                <strong>ENGLISH <span>(NATIVE)</span>, FRENCH <span>(INTERMEDIATE)</span></strong>
                                <small>LANGUAGE</small>
                            </div>
                        </div>
                    </div>

                    <ul class=\"social-icon\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-slack\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- .header-->

    <section class=\"section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>My Activity</h2>
                    </div>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">100%</div>
                                <div class=\"item-stats-name\">Jobs Success</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">96%</div>
                                <div class=\"item-stats-name\">On Budget</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">99%</div>
                                <div class=\"item-stats-name\">On Time</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">89%</div>
                                <div class=\"item-stats-name\">Repeat Hire Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .activity-wrapper -->

    <section class=\"work-history-wrapper section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Work History</h2>
                    </div>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">15096</div>
                                <div class=\"item-stats-name\">hours worked</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">687</div>
                                <div class=\"item-stats-name\">Work Done</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">30</div>
                                <div class=\"item-stats-name\">Hours weekly Available</div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"item-stats\">
                                <div class=\"item-stats-value\">24</div>
                                <div class=\"item-stats-name\">Hour Response Time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .work-history-wrapper -->

    <section class=\"expertise-wrapper section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>My Specialities</h2>
                    </div>
                </div>

                
                        <div class=\"col-md-6\">
                            <div class=\"expertise-item\">
                                <h3>Joomla Template Development </h3>

                                <p>
                                    Quickly repurpose reliable customer service with orthogonal ideas. Competently.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"expertise-item\">
                                <h3>Drupal Template Development</h3>

                                <p>
                                    Interactively myocardinate high standards in initiatives rather than next-generation.
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"expertise-item\">
                                <h3>Shopify Theme Design</h3>

                                <p>
                                    Dynamically initiate client-based convergence vis-a-vis performance based. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- .row -->


        </div>
    </section>
    <!-- .expertise-wrapper -->

    <section class=\"section-wrapper skills-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Skills</h2>
                    </div>
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"progress-wrapper\">

                                <h3>CODING SKILLS</h3>

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">HTML5</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"62\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 62%\"><span
                                                class=\"progress-percent\"> 62%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <!-- .skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">CSS3</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 90%\"><span
                                                class=\"progress-percent\"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">PHP</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 75%;\"><span
                                                class=\"progress-percent\"> 75%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">JavaScript</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"55\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 55%;\"><span
                                                class=\"progress-percent\"> 55%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->


                            </div>
                            <!-- /.progress-wrapper -->
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"progress-wrapper\">
                                <h3>DESIGN TOOLS</h3>

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">Photoshop</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"62\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 90%\"><span
                                                class=\"progress-percent\"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <!-- .skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">Illustrator</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 70%\"><span
                                                class=\"progress-percent\"> 50%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">Sketch</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 75%;\"><span
                                                class=\"progress-percent\"> 75%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class=\"progress-item\">
                                    <span class=\"progress-title\">MACAW</span>

                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"55\" aria-valuemin=\"0\"
                                             aria-valuemax=\"100\" style=\"width: 55%;\"><span
                                                class=\"progress-percent\"> 55%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                            </div>
                            <!-- /.progress-wrapper -->
                        </div>
                    </div>
                    <!--.row -->
                </div>
            </div>

        </div>
        <!-- .container-fluid -->
    </section>
    <!-- .skills-wrapper -->

    <section class=\"section-wrapper section-experience\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\"><h2>Experiences</h2></div>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"content-item\">
                                <small>2015 - Present</small>
                                <h3>Senior Developer</h3>
                                <h4>Computer & Motor Ltd.</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            
                         
                            
                            <!-- .experience-item -->

                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"content-item\">
                                <small>2012 - 2015</small>
                                <h3>Webdesigner</h3>
                                <h4>BizzNiss</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            <!-- .experience-item -->
                        </div>
                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-6\">
                            <div class=\"content-item\">
                                <small>2012 - 2015</small>
                                <h3>Web Developer</h3>
                                <h4>Unique Soft</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            <!-- .experience-item -->
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"content-item\">
                                <small>2010 - 2012</small>
                                <h3>Front-end Developer</h3>
                                <h4>Somsom LLC</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            <!-- .experience-item -->
                        </div>
                    </div>
                </div>
                <!--.row-->
            </div>
        </div>
        <!-- .container -->
    </section>
    <!-- .section-experience -->

    <section class=\"section-education section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\"><h2>Formations</h2></div>
                </div>

                 <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            {% for formation in Formations %}
                                <div class=\"content-item\">
                                    <small>{{ formation.getDateDebut()|date(\"Y\") }} - {{ formation.getDateFin()|date(\"Y\") }}</small>
                                    <h3>{{ formation.getName() }}</h3>
                                    <h4>{{ formation.getLieu() }}</h4>
                                    

                                    <p></p>
                                </div>
                            {% endfor %}
                            <!-- .experience-item -->
                           
                            <!-- .experience-item -->
                        </div>
                    </div>
                    <!--.row-->
                </div>

            </div>
            <!--.row-->
        </div>
        <!-- .container -->
    </section>
    <!-- .section-education -->

    <section class=\"section-profile section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\"><h2>Loisirs</h2></div>
                    <a href=\"{{path('create_loisir')}}\">Ajouter un loisir</a>
                    
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                             {% for loisir in Loisirs %}
                            <div class=\"profile-item\">
                                <div class=\"media\">
                                    <a href=\"{{path('edit_loisir', {'id': loisir.id })}}\">Modifier</a> |
                                    <a href=\"{{path('remove_loisir', {'id': loisir.id })}}\">Supprimer</a>
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                            <img class=\"media-object\" src=\"{{ asset('template/img/m-logo-studio.png') }}\" alt=\"...\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h3>{{ loisir.getName() }}</h3>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                    <!--.row-->
                </div>

            </div>
            <!--.row-->
        </div>
        <!-- .container -->
    </section>
    <!-- .section-profile -->

    <section class=\"section-wrapper portfolio-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Portfolio</h2>
                    </div>
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"{{ asset('template/img/portfolio-1.jpg') }}\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Creative concepts</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"{{ asset('template/img/portfolio-2.jpg') }}\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Customer focused</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"{{ asset('template/img/portfolio-3.jpg') }}\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Management methodology</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"{{ asset('template/img/portfolio-4.jpg') }}\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Market research</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"{{ asset('template/img/portfolio-5.jpg') }}\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Market research</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <a class=\"portfolio-item\" href=\"#\">
                                <div class=\"portfolio-thumb\">
                                    <img src=\"{{ asset('template/img/portfolio-6.jpg') }}\" alt=\"\">
                                </div>

                                <div class=\"portfolio-info\">
                                    <h3>Market research</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- .portfolio -->

    <section class=\"section-contact section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Contact</h2>
                    </div>
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Adresse</strong><br>
                                1355 Market Street, Suite 900<br>
                                San Francisco, CA 94103

                            </address>
                        </div>
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Téléphone</strong><br>
                                +61 3 8376 6284
                            </address>
                        </div>

                        <div class=\"col-md-3\">
                            <address>
                                <strong>Email</strong><br>
                                <a href=\"mailto:#\">nmarandet@gmail.com</a>
                            </address>
                        </div>

                    </div>
                    <!--.row-->

                    <div class=\"feedback-form\">
                        <h3>Contactez moi</h3>

                        <form id=\"contactForm\" action=\"sendemail.php\" method=\"POST\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" required=\"\" class=\"form-control\" id=\"InputName\"
                                       placeholder=\"Nom\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" required=\"\" class=\"form-control\" id=\"InputEmail\"
                                       placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"subject\" class=\"form-control\" id=\"InputSubject\"
                                       placeholder=\"Objet\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" rows=\"4\" required=\"\" name=\"message\" id=\"message-text\"
                                          placeholder=\"Ecrivez un message\"></textarea>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                        </form>
                    </div>
                    <!-- .feedback-form -->

                </div>
            </div>
            <!--.row-->

        </div>
        <!--.container-fluid-->
    </section>
    <!--.section-contact-->

    <footer class=\"footer\">
        <div class=\"copyright-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"copytext\">&copy; MyProfile, All rights reserved | Design By: <a
                                href=\"https://themehippo.com\">themehippo</a></div>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!-- .container-fluid -->
        </div>
        <!-- .copyright-section -->
    </footer>
    <!-- .footer -->

    </div>
{% endblock %}", "@App/default/index.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
