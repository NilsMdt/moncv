<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45fa43756138e6f4c2dde48b72f049deeb727118af3830a3b4998f545985f994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fa43756138e6f4c2dde48b72f049deeb727118af3830a3b4998f545985f994->enter($__internal_45fa43756138e6f4c2dde48b72f049deeb727118af3830a3b4998f545985f994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fea8137c88773e50b427211442bd88c5a9d1e907df1b43917e90aa5b9c4415ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea8137c88773e50b427211442bd88c5a9d1e907df1b43917e90aa5b9c4415ea->enter($__internal_fea8137c88773e50b427211442bd88c5a9d1e907df1b43917e90aa5b9c4415ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- favicon -->
        <link href=\"favicon.png\" rel=icon>

        <!-- web-fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700\" rel=\"stylesheet\">

        <!-- font-awesome -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Bootstrap -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- owl carousal -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Style CSS -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>";
        
        $__internal_45fa43756138e6f4c2dde48b72f049deeb727118af3830a3b4998f545985f994->leave($__internal_45fa43756138e6f4c2dde48b72f049deeb727118af3830a3b4998f545985f994_prof);

        
        $__internal_fea8137c88773e50b427211442bd88c5a9d1e907df1b43917e90aa5b9c4415ea->leave($__internal_fea8137c88773e50b427211442bd88c5a9d1e907df1b43917e90aa5b9c4415ea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29533622b15d86e806c827ad63c1aa60369c2c55b19fbdace4cf703a8b2c7a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29533622b15d86e806c827ad63c1aa60369c2c55b19fbdace4cf703a8b2c7a7b->enter($__internal_29533622b15d86e806c827ad63c1aa60369c2c55b19fbdace4cf703a8b2c7a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c20b77679c208b3ea004bc2293359176d8513a3e75817e6e5317f8aefa5f920b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20b77679c208b3ea004bc2293359176d8513a3e75817e6e5317f8aefa5f920b->enter($__internal_c20b77679c208b3ea004bc2293359176d8513a3e75817e6e5317f8aefa5f920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c20b77679c208b3ea004bc2293359176d8513a3e75817e6e5317f8aefa5f920b->leave($__internal_c20b77679c208b3ea004bc2293359176d8513a3e75817e6e5317f8aefa5f920b_prof);

        
        $__internal_29533622b15d86e806c827ad63c1aa60369c2c55b19fbdace4cf703a8b2c7a7b->leave($__internal_29533622b15d86e806c827ad63c1aa60369c2c55b19fbdace4cf703a8b2c7a7b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9efab813a420df86ba9d80ba296efd949885d7e84524aa6a8da9c4204776e32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efab813a420df86ba9d80ba296efd949885d7e84524aa6a8da9c4204776e32e->enter($__internal_9efab813a420df86ba9d80ba296efd949885d7e84524aa6a8da9c4204776e32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6ac4098f697a3eb099ad09959997c41e719d477d91571ba9fb559eab8340b308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac4098f697a3eb099ad09959997c41e719d477d91571ba9fb559eab8340b308->enter($__internal_6ac4098f697a3eb099ad09959997c41e719d477d91571ba9fb559eab8340b308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ac4098f697a3eb099ad09959997c41e719d477d91571ba9fb559eab8340b308->leave($__internal_6ac4098f697a3eb099ad09959997c41e719d477d91571ba9fb559eab8340b308_prof);

        
        $__internal_9efab813a420df86ba9d80ba296efd949885d7e84524aa6a8da9c4204776e32e->leave($__internal_9efab813a420df86ba9d80ba296efd949885d7e84524aa6a8da9c4204776e32e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b7cabd261d4bc547a6cf9f93dfcf0fe13e7476a5627c129507658ae60d5363c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7cabd261d4bc547a6cf9f93dfcf0fe13e7476a5627c129507658ae60d5363c->enter($__internal_3b7cabd261d4bc547a6cf9f93dfcf0fe13e7476a5627c129507658ae60d5363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d4bd718662b073da83aff6d5314007e5ef39a5d495cb23baa539e9051d74537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4bd718662b073da83aff6d5314007e5ef39a5d495cb23baa539e9051d74537->enter($__internal_2d4bd718662b073da83aff6d5314007e5ef39a5d495cb23baa539e9051d74537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d4bd718662b073da83aff6d5314007e5ef39a5d495cb23baa539e9051d74537->leave($__internal_2d4bd718662b073da83aff6d5314007e5ef39a5d495cb23baa539e9051d74537_prof);

        
        $__internal_3b7cabd261d4bc547a6cf9f93dfcf0fe13e7476a5627c129507658ae60d5363c->leave($__internal_3b7cabd261d4bc547a6cf9f93dfcf0fe13e7476a5627c129507658ae60d5363c_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21b2cec86ef40cc0ec09faebd56ba6275a05d0be4ad70704b7e041e44cc1322d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b2cec86ef40cc0ec09faebd56ba6275a05d0be4ad70704b7e041e44cc1322d->enter($__internal_21b2cec86ef40cc0ec09faebd56ba6275a05d0be4ad70704b7e041e44cc1322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ad8f5660cc3a90c5a9177ef723d21968a9678d2daa4f1f493fb80bf29cd44264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8f5660cc3a90c5a9177ef723d21968a9678d2daa4f1f493fb80bf29cd44264->enter($__internal_ad8f5660cc3a90c5a9177ef723d21968a9678d2daa4f1f493fb80bf29cd44264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "            <!-- jquery -->
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap -->
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!--owl carousal-->
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <!--theme script-->
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ad8f5660cc3a90c5a9177ef723d21968a9678d2daa4f1f493fb80bf29cd44264->leave($__internal_ad8f5660cc3a90c5a9177ef723d21968a9678d2daa4f1f493fb80bf29cd44264_prof);

        
        $__internal_21b2cec86ef40cc0ec09faebd56ba6275a05d0be4ad70704b7e041e44cc1322d->leave($__internal_21b2cec86ef40cc0ec09faebd56ba6275a05d0be4ad70704b7e041e44cc1322d_prof);

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
        return array (  173 => 37,  168 => 35,  163 => 33,  158 => 31,  155 => 30,  146 => 29,  129 => 28,  112 => 6,  94 => 5,  83 => 39,  80 => 29,  78 => 28,  72 => 25,  66 => 22,  60 => 19,  54 => 16,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <!-- favicon -->
        <link href=\"favicon.png\" rel=icon>

        <!-- web-fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700\" rel=\"stylesheet\">

        <!-- font-awesome -->
        <link href=\"{{ asset('template/css/font-awesome.min.css') }}\" rel=\"stylesheet\">

        <!-- Bootstrap -->
        <link href=\"{{ asset('template/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- owl carousal -->
        <link href=\"{{ asset('template/css/owl.carousel.css') }}\" rel=\"stylesheet\">

        <!-- Style CSS -->
        <link href=\"{{ asset('template/css/style.css') }}\" rel=\"stylesheet\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <!-- jquery -->
            <script src=\"{{ asset('template/js/jquery-2.1.4.min.js') }}\"></script>
            <!-- Bootstrap -->
            <script src=\"{{ asset('template/js/bootstrap.min.js') }}\"></script>
            <!--owl carousal-->
            <script src=\"{{ asset('template/js/owl.carousel.min.js') }}\"></script>
            <!--theme script-->
            <script src=\"{{ asset('template/js/scripts.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
