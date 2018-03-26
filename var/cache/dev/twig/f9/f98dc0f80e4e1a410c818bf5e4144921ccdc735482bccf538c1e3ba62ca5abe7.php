<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_548077bd28f7ac4ecd55fe991fdc25344d8bd709b1312f6960ed16540db9953a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548077bd28f7ac4ecd55fe991fdc25344d8bd709b1312f6960ed16540db9953a->enter($__internal_548077bd28f7ac4ecd55fe991fdc25344d8bd709b1312f6960ed16540db9953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1b3c05d0a0efca5183918e2215564d6db6da9b270eee0a410a49affe18b186f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3c05d0a0efca5183918e2215564d6db6da9b270eee0a410a49affe18b186f5->enter($__internal_1b3c05d0a0efca5183918e2215564d6db6da9b270eee0a410a49affe18b186f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548077bd28f7ac4ecd55fe991fdc25344d8bd709b1312f6960ed16540db9953a->leave($__internal_548077bd28f7ac4ecd55fe991fdc25344d8bd709b1312f6960ed16540db9953a_prof);

        
        $__internal_1b3c05d0a0efca5183918e2215564d6db6da9b270eee0a410a49affe18b186f5->leave($__internal_1b3c05d0a0efca5183918e2215564d6db6da9b270eee0a410a49affe18b186f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2fad9f3787fe4cda21a29554b396bc31e1f467461c0beae6676f4fa4f8181bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fad9f3787fe4cda21a29554b396bc31e1f467461c0beae6676f4fa4f8181bb->enter($__internal_d2fad9f3787fe4cda21a29554b396bc31e1f467461c0beae6676f4fa4f8181bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3976076ab8ffeb23ef044b9c38ac5f1babfa8b5759701cf9b43f24b7dc03de15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3976076ab8ffeb23ef044b9c38ac5f1babfa8b5759701cf9b43f24b7dc03de15->enter($__internal_3976076ab8ffeb23ef044b9c38ac5f1babfa8b5759701cf9b43f24b7dc03de15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3976076ab8ffeb23ef044b9c38ac5f1babfa8b5759701cf9b43f24b7dc03de15->leave($__internal_3976076ab8ffeb23ef044b9c38ac5f1babfa8b5759701cf9b43f24b7dc03de15_prof);

        
        $__internal_d2fad9f3787fe4cda21a29554b396bc31e1f467461c0beae6676f4fa4f8181bb->leave($__internal_d2fad9f3787fe4cda21a29554b396bc31e1f467461c0beae6676f4fa4f8181bb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9f05bf5bc27a93858ac4bdbe5ae0eed4a171fcda028b783302a677aa2ded7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f05bf5bc27a93858ac4bdbe5ae0eed4a171fcda028b783302a677aa2ded7cb->enter($__internal_f9f05bf5bc27a93858ac4bdbe5ae0eed4a171fcda028b783302a677aa2ded7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0499622c63287c034546633b9c3b325210f0e22c41cfa57e6e92864caacac1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0499622c63287c034546633b9c3b325210f0e22c41cfa57e6e92864caacac1c6->enter($__internal_0499622c63287c034546633b9c3b325210f0e22c41cfa57e6e92864caacac1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0499622c63287c034546633b9c3b325210f0e22c41cfa57e6e92864caacac1c6->leave($__internal_0499622c63287c034546633b9c3b325210f0e22c41cfa57e6e92864caacac1c6_prof);

        
        $__internal_f9f05bf5bc27a93858ac4bdbe5ae0eed4a171fcda028b783302a677aa2ded7cb->leave($__internal_f9f05bf5bc27a93858ac4bdbe5ae0eed4a171fcda028b783302a677aa2ded7cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a5844e82cc2ae40378c6ff3e1fd5df7cda6c40e1f9da099681c1739b7da9648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5844e82cc2ae40378c6ff3e1fd5df7cda6c40e1f9da099681c1739b7da9648->enter($__internal_7a5844e82cc2ae40378c6ff3e1fd5df7cda6c40e1f9da099681c1739b7da9648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa457d24866102032dc0b45c9e420ff0249d51c7255f665031f3ba2e432a901d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa457d24866102032dc0b45c9e420ff0249d51c7255f665031f3ba2e432a901d->enter($__internal_fa457d24866102032dc0b45c9e420ff0249d51c7255f665031f3ba2e432a901d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fa457d24866102032dc0b45c9e420ff0249d51c7255f665031f3ba2e432a901d->leave($__internal_fa457d24866102032dc0b45c9e420ff0249d51c7255f665031f3ba2e432a901d_prof);

        
        $__internal_7a5844e82cc2ae40378c6ff3e1fd5df7cda6c40e1f9da099681c1739b7da9648->leave($__internal_7a5844e82cc2ae40378c6ff3e1fd5df7cda6c40e1f9da099681c1739b7da9648_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
