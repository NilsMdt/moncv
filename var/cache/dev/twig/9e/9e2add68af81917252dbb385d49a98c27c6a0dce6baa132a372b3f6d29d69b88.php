<?php

/* @App/loisir/create.html.twig */
class __TwigTemplate_1d17ace1a169e6bb8b424ae994d88ef82f164f546e0aadaca0df570ab230f544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fccbfa4136e55af88c7a23baaddc34565f93e96b7088ccd5fd102744131b08cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccbfa4136e55af88c7a23baaddc34565f93e96b7088ccd5fd102744131b08cb->enter($__internal_fccbfa4136e55af88c7a23baaddc34565f93e96b7088ccd5fd102744131b08cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisir/create.html.twig"));

        $__internal_a4d8562f3d2e5586dbc5ef959f39d4df5413d2043f7910022eb77afa8d904e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d8562f3d2e5586dbc5ef959f39d4df5413d2043f7910022eb77afa8d904e0e->enter($__internal_a4d8562f3d2e5586dbc5ef959f39d4df5413d2043f7910022eb77afa8d904e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisir/create.html.twig"));

        // line 1
        echo "<html>
    <body>
        <h3>Création d'un nouveau loisir</h3>
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_create_loisir")));
        echo "
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>";
        
        $__internal_fccbfa4136e55af88c7a23baaddc34565f93e96b7088ccd5fd102744131b08cb->leave($__internal_fccbfa4136e55af88c7a23baaddc34565f93e96b7088ccd5fd102744131b08cb_prof);

        
        $__internal_a4d8562f3d2e5586dbc5ef959f39d4df5413d2043f7910022eb77afa8d904e0e->leave($__internal_a4d8562f3d2e5586dbc5ef959f39d4df5413d2043f7910022eb77afa8d904e0e_prof);

    }

    public function getTemplateName()
    {
        return "@App/loisir/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        <h3>Création d'un nouveau loisir</h3>
        {{ form_start(form, {'action': path('validate_create_loisir') }) }}
        {{ form(form) }}
    </body>
</html>", "@App/loisir/create.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/loisir/create.html.twig");
    }
}
