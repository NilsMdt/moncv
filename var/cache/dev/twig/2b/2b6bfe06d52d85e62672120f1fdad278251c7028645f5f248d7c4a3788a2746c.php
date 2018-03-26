<?php

/* @App/default/index.html.twig */
class __TwigTemplate_f56c12a15cca07c883387bc525df80fdb0fb3c9a85945e63c1d0b4908ed229c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_715d9acf19ef8f8dcfa4e9f1c8bd47f5c999d6da12ade04f7672c3dc92bf90bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715d9acf19ef8f8dcfa4e9f1c8bd47f5c999d6da12ade04f7672c3dc92bf90bb->enter($__internal_715d9acf19ef8f8dcfa4e9f1c8bd47f5c999d6da12ade04f7672c3dc92bf90bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_41b7aa0a0e6e49f57f7629bbb1418ee2c598cc9d642c51c50523aba91f7bb84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b7aa0a0e6e49f57f7629bbb1418ee2c598cc9d642c51c50523aba91f7bb84d->enter($__internal_41b7aa0a0e6e49f57f7629bbb1418ee2c598cc9d642c51c50523aba91f7bb84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715d9acf19ef8f8dcfa4e9f1c8bd47f5c999d6da12ade04f7672c3dc92bf90bb->leave($__internal_715d9acf19ef8f8dcfa4e9f1c8bd47f5c999d6da12ade04f7672c3dc92bf90bb_prof);

        
        $__internal_41b7aa0a0e6e49f57f7629bbb1418ee2c598cc9d642c51c50523aba91f7bb84d->leave($__internal_41b7aa0a0e6e49f57f7629bbb1418ee2c598cc9d642c51c50523aba91f7bb84d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c54ce3f0eda2231217db9830bbcdb943536e7b304af239f6cca2c758af5f03c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54ce3f0eda2231217db9830bbcdb943536e7b304af239f6cca2c758af5f03c3->enter($__internal_c54ce3f0eda2231217db9830bbcdb943536e7b304af239f6cca2c758af5f03c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bb0bbb5c032832c715c2e784482495ab29b1a0f5d3656715eee443d7a9cfc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb0bbb5c032832c715c2e784482495ab29b1a0f5d3656715eee443d7a9cfc07->enter($__internal_6bb0bbb5c032832c715c2e784482495ab29b1a0f5d3656715eee443d7a9cfc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/img-profile.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <!-- Profile Image -->
                </div>
                <div class=\"col-md-9\">
                    <div class=\"name-wrapper\">
                        <h1 class=\"name\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["firstname"] ?? $this->getContext($context, "firstname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
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
                    <div class=\"section-title\"><h2>Work Experience</h2></div>
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
                    <div class=\"section-title\"><h2>Education</h2></div>
                </div>

                 <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Formations"] ?? $this->getContext($context, "Formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 417
            echo "                                <div class=\"content-item\">
                                    <small>";
            // line 418
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formation"], "getDateDebut", array(), "method"), "Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formation"], "getDateFin", array(), "method"), "Y"), "html", null, true);
            echo "</small>
                                    <h3>";
            // line 419
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getName", array(), "method"), "html", null, true);
            echo "</h3>
                                    <h4>";
            // line 420
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getLieu", array(), "method"), "html", null, true);
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
                            <div class=\"content-item\">
                                <small>2007 - 2010</small>
                                <h3>Business marketing course</h3>
                                <h4>Royal Academy of Business</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            <!-- .experience-item -->
                            <div class=\"content-item\">
                                <small>2002 - 2006</small>
                                <h3>BA (Hons) Design</h3>
                                <h4>University of Michigan</h4>

                                <p>United Kingdom, London</p>
                            </div>
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
        // line 460
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_loisir");
        echo "\">Ajouter un loisir</a>
                    
                </div>

                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                             ";
        // line 467
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Loisirs"] ?? $this->getContext($context, "Loisirs")));
        foreach ($context['_seq'] as $context["_key"] => $context["loisir"]) {
            // line 468
            echo "                            <div class=\"profile-item\">
                                <div class=\"media\">
                                    <a href=\"";
            // line 470
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_loisir", array("id" => $this->getAttribute($context["loisir"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                                    <a href=\"";
            // line 471
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_loisir", array("id" => $this->getAttribute($context["loisir"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                            <img class=\"media-object\" src=\"";
            // line 474
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/m-logo-studio.png"), "html", null, true);
            echo "\" alt=\"...\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h3>";
            // line 478
            echo twig_escape_filter($this->env, $this->getAttribute($context["loisir"], "getName", array(), "method"), "html", null, true);
            echo "</h3>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
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
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/portfolio-1.jpg"), "html", null, true);
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
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/portfolio-2.jpg"), "html", null, true);
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
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/portfolio-3.jpg"), "html", null, true);
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
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/portfolio-4.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/portfolio-5.jpg"), "html", null, true);
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
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/portfolio-6.jpg"), "html", null, true);
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

    <section class=\"review-section section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Recent Reviews</h2>
                    </div>
                </div>

                <div class=\"col-md-9\">
                    <div id=\"review\">
                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/img-testimonial-2.jpg"), "html", null, true);
        echo "\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Sofia Voigt</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"5.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-5\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>


                            <div class=\"review-text\">
                                Seamlessly leverage other's transparent resources after resource maximizing channels.
                                Continually grow economically sound collaboration and idea-sharing and compelling
                                technology. Collaboratively unleash.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/img-testimonial-1.jpg"), "html", null, true);
        echo "\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Matteo Müller</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"4.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-4\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>
                            <div class=\"review-text\">
                                Uniquely target empowered relationships after client-based e-commerce. Energistically morph
                                worldwide resources for future-proof content. Authoritatively transform granular users
                                whereas intermandated applications.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/img-testimonial-3.jpg"), "html", null, true);
        echo "\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Noel Schulze</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"3.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-3\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>
                            <div class=\"review-text\">
                                Enthusiastically mesh an expanded array of infrastructures through distinctive customer
                                service. Distinctively reintermediate e-business information vis-a-vis excellent networks.
                                Uniquely fabricate just.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/unknown.png"), "html", null, true);
        echo "\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Jason Lehmann</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"2.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-2\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>
                            <div class=\"review-text\">
                                Proactively network unique potentialities rather than one-to-one process improvements.
                                Dynamically leverage existing progressive methods of empowerment rather than efficient
                                functionalities. Continually.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/unknown.png"), "html", null, true);
        echo "\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Jason Lehmann</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"1.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-1\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>
                            <div class=\"review-text\">
                                Progressively leverage existing 24/7 paradigms through exceptional process improvements.
                                Completely revolutionize compelling architectures for team driven partnerships. Quickly
                                transform focused value.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--#review-->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- .review-section -->

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
                                <strong>Address</strong><br>
                                1355 Market Street, Suite 900<br>
                                San Francisco, CA 94103

                            </address>
                        </div>
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Phone Number</strong><br>
                                +61 3 8376 6284
                            </address>
                        </div>
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Mobile Number</strong><br>
                                987 654 321
                            </address>
                        </div>
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Email</strong><br>
                                <a href=\"mailto:#\">coffee@amelie.me</a>
                            </address>
                        </div>

                    </div>
                    <!--.row-->

                    <div class=\"feedback-form\">
                        <h3>GET IN TOUCH</h3>

                        <form id=\"contactForm\" action=\"sendemail.php\" method=\"POST\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" required=\"\" class=\"form-control\" id=\"InputName\"
                                       placeholder=\"Full Name\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" required=\"\" class=\"form-control\" id=\"InputEmail\"
                                       placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"subject\" class=\"form-control\" id=\"InputSubject\"
                                       placeholder=\"Subject\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" rows=\"4\" required=\"\" name=\"message\" id=\"message-text\"
                                          placeholder=\"Write message\"></textarea>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
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
        
        $__internal_6bb0bbb5c032832c715c2e784482495ab29b1a0f5d3656715eee443d7a9cfc07->leave($__internal_6bb0bbb5c032832c715c2e784482495ab29b1a0f5d3656715eee443d7a9cfc07_prof);

        
        $__internal_c54ce3f0eda2231217db9830bbcdb943536e7b304af239f6cca2c758af5f03c3->leave($__internal_c54ce3f0eda2231217db9830bbcdb943536e7b304af239f6cca2c758af5f03c3_prof);

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
        return array (  861 => 730,  829 => 701,  797 => 672,  765 => 643,  731 => 612,  695 => 579,  678 => 565,  661 => 551,  644 => 537,  627 => 523,  610 => 509,  582 => 483,  571 => 478,  564 => 474,  558 => 471,  554 => 470,  550 => 468,  546 => 467,  536 => 460,  500 => 426,  488 => 420,  484 => 419,  478 => 418,  475 => 417,  471 => 416,  73 => 23,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
                    <div class=\"section-title\"><h2>Work Experience</h2></div>
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
                    <div class=\"section-title\"><h2>Education</h2></div>
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
                            <div class=\"content-item\">
                                <small>2007 - 2010</small>
                                <h3>Business marketing course</h3>
                                <h4>Royal Academy of Business</h4>

                                <p>United Kingdom, London</p>
                            </div>
                            <!-- .experience-item -->
                            <div class=\"content-item\">
                                <small>2002 - 2006</small>
                                <h3>BA (Hons) Design</h3>
                                <h4>University of Michigan</h4>

                                <p>United Kingdom, London</p>
                            </div>
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
                                    <a href=\"{{path('edit_loisir', {'id': loisir.id })}}\">Modifier</a>
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

    <section class=\"review-section section-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"section-title\">
                        <h2>Recent Reviews</h2>
                    </div>
                </div>

                <div class=\"col-md-9\">
                    <div id=\"review\">
                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"{{ asset('template/img/img-testimonial-2.jpg') }}\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Sofia Voigt</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"5.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-5\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>


                            <div class=\"review-text\">
                                Seamlessly leverage other's transparent resources after resource maximizing channels.
                                Continually grow economically sound collaboration and idea-sharing and compelling
                                technology. Collaboratively unleash.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"{{ asset('template/img/img-testimonial-1.jpg') }}\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Matteo Müller</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"4.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-4\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>
                            <div class=\"review-text\">
                                Uniquely target empowered relationships after client-based e-commerce. Energistically morph
                                worldwide resources for future-proof content. Authoritatively transform granular users
                                whereas intermandated applications.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"{{ asset('template/img/img-testimonial-3.jpg') }}\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Noel Schulze</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"3.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-3\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>
                            <div class=\"review-text\">
                                Enthusiastically mesh an expanded array of infrastructures through distinctive customer
                                service. Distinctively reintermediate e-business information vis-a-vis excellent networks.
                                Uniquely fabricate just.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"{{ asset('template/img/unknown.png') }}\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Jason Lehmann</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"2.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-2\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>
                            <div class=\"review-text\">
                                Proactively network unique potentialities rather than one-to-one process improvements.
                                Dynamically leverage existing progressive methods of empowerment rather than efficient
                                functionalities. Continually.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                        <div class=\"item\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"{{ asset('template/img/unknown.png') }}\" alt=\"avatar\"/>
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"user-name\">Jason Lehmann</div>
                                    <!--.user-name-->

                                    <div class=\"rating\" data-star_rating=\"1.0\">
                                        <div class=\"rating-total\">
                                            <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                            <div class=\"rating-progress rate-1\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--.rating-->
                                </div>
                            </div>
                            <div class=\"review-text\">
                                Progressively leverage existing 24/7 paradigms through exceptional process improvements.
                                Completely revolutionize compelling architectures for team driven partnerships. Quickly
                                transform focused value.
                            </div>
                            <!--.review-text-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--#review-->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- .review-section -->

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
                                <strong>Address</strong><br>
                                1355 Market Street, Suite 900<br>
                                San Francisco, CA 94103

                            </address>
                        </div>
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Phone Number</strong><br>
                                +61 3 8376 6284
                            </address>
                        </div>
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Mobile Number</strong><br>
                                987 654 321
                            </address>
                        </div>
                        <div class=\"col-md-3\">
                            <address>
                                <strong>Email</strong><br>
                                <a href=\"mailto:#\">coffee@amelie.me</a>
                            </address>
                        </div>

                    </div>
                    <!--.row-->

                    <div class=\"feedback-form\">
                        <h3>GET IN TOUCH</h3>

                        <form id=\"contactForm\" action=\"sendemail.php\" method=\"POST\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" required=\"\" class=\"form-control\" id=\"InputName\"
                                       placeholder=\"Full Name\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" required=\"\" class=\"form-control\" id=\"InputEmail\"
                                       placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"subject\" class=\"form-control\" id=\"InputSubject\"
                                       placeholder=\"Subject\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" rows=\"4\" required=\"\" name=\"message\" id=\"message-text\"
                                          placeholder=\"Write message\"></textarea>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
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
