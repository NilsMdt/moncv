<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50f2b5861d502b383fdbaff3345e447eea925307e973776e9d26a7b8f811bc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f2b5861d502b383fdbaff3345e447eea925307e973776e9d26a7b8f811bc52->enter($__internal_50f2b5861d502b383fdbaff3345e447eea925307e973776e9d26a7b8f811bc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c0a765cce119bc3ce9ca36ec1824798de8cd383d9209d06bd1eb83b854820e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a765cce119bc3ce9ca36ec1824798de8cd383d9209d06bd1eb83b854820e6f->enter($__internal_c0a765cce119bc3ce9ca36ec1824798de8cd383d9209d06bd1eb83b854820e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f2b5861d502b383fdbaff3345e447eea925307e973776e9d26a7b8f811bc52->leave($__internal_50f2b5861d502b383fdbaff3345e447eea925307e973776e9d26a7b8f811bc52_prof);

        
        $__internal_c0a765cce119bc3ce9ca36ec1824798de8cd383d9209d06bd1eb83b854820e6f->leave($__internal_c0a765cce119bc3ce9ca36ec1824798de8cd383d9209d06bd1eb83b854820e6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_638a0c32cbf8880f32f8b8ef8f43a07f98cd872808528a1195eaca702b3f5888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638a0c32cbf8880f32f8b8ef8f43a07f98cd872808528a1195eaca702b3f5888->enter($__internal_638a0c32cbf8880f32f8b8ef8f43a07f98cd872808528a1195eaca702b3f5888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_47466598525fbca21466fd8358c980491a80edfd2d4f862f7250acdc51b6819d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47466598525fbca21466fd8358c980491a80edfd2d4f862f7250acdc51b6819d->enter($__internal_47466598525fbca21466fd8358c980491a80edfd2d4f862f7250acdc51b6819d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47466598525fbca21466fd8358c980491a80edfd2d4f862f7250acdc51b6819d->leave($__internal_47466598525fbca21466fd8358c980491a80edfd2d4f862f7250acdc51b6819d_prof);

        
        $__internal_638a0c32cbf8880f32f8b8ef8f43a07f98cd872808528a1195eaca702b3f5888->leave($__internal_638a0c32cbf8880f32f8b8ef8f43a07f98cd872808528a1195eaca702b3f5888_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d14687b9f37bab2bdfe997788ee1dd4a19cf53724fbd65afe4a6db7c34f6899b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14687b9f37bab2bdfe997788ee1dd4a19cf53724fbd65afe4a6db7c34f6899b->enter($__internal_d14687b9f37bab2bdfe997788ee1dd4a19cf53724fbd65afe4a6db7c34f6899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c0364f0f20c1a3502e8b0a44258dd251c0e39ac696149c1c798a06f96c8c1666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0364f0f20c1a3502e8b0a44258dd251c0e39ac696149c1c798a06f96c8c1666->enter($__internal_c0364f0f20c1a3502e8b0a44258dd251c0e39ac696149c1c798a06f96c8c1666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0364f0f20c1a3502e8b0a44258dd251c0e39ac696149c1c798a06f96c8c1666->leave($__internal_c0364f0f20c1a3502e8b0a44258dd251c0e39ac696149c1c798a06f96c8c1666_prof);

        
        $__internal_d14687b9f37bab2bdfe997788ee1dd4a19cf53724fbd65afe4a6db7c34f6899b->leave($__internal_d14687b9f37bab2bdfe997788ee1dd4a19cf53724fbd65afe4a6db7c34f6899b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c56e125ea226eb575c695764cf20ceb91655d1ddd5d3d181f9cfbfef60f88ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56e125ea226eb575c695764cf20ceb91655d1ddd5d3d181f9cfbfef60f88ab7->enter($__internal_c56e125ea226eb575c695764cf20ceb91655d1ddd5d3d181f9cfbfef60f88ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3de5f1059ec1df6c13235e53a0b0998f43aced105f42c6a8453611e4d3205c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de5f1059ec1df6c13235e53a0b0998f43aced105f42c6a8453611e4d3205c75->enter($__internal_3de5f1059ec1df6c13235e53a0b0998f43aced105f42c6a8453611e4d3205c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3de5f1059ec1df6c13235e53a0b0998f43aced105f42c6a8453611e4d3205c75->leave($__internal_3de5f1059ec1df6c13235e53a0b0998f43aced105f42c6a8453611e4d3205c75_prof);

        
        $__internal_c56e125ea226eb575c695764cf20ceb91655d1ddd5d3d181f9cfbfef60f88ab7->leave($__internal_c56e125ea226eb575c695764cf20ceb91655d1ddd5d3d181f9cfbfef60f88ab7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
