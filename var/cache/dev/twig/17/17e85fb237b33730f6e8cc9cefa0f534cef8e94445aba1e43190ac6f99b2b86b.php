<?php

/* @App/loisir/edit.html.twig */
class __TwigTemplate_8dec700923f18b17408e6921ff25d56ff5fda9f00505c5e50a50cefb4f7206b2 extends Twig_Template
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
        $__internal_06e2687713ce2eb7591bf8af81df0dc5da684a2b1c21ee61d880abb3929164a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e2687713ce2eb7591bf8af81df0dc5da684a2b1c21ee61d880abb3929164a3->enter($__internal_06e2687713ce2eb7591bf8af81df0dc5da684a2b1c21ee61d880abb3929164a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisir/edit.html.twig"));

        $__internal_10856e91049b0f6c408deae930e7478258d8057e00073c6486fbb9bee8875a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10856e91049b0f6c408deae930e7478258d8057e00073c6486fbb9bee8875a14->enter($__internal_10856e91049b0f6c408deae930e7478258d8057e00073c6486fbb9bee8875a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisir/edit.html.twig"));

        // line 1
        echo "<html>
    <body>
        <h3>Edition du loisir ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getName", array(), "method"), "html", null, true);
        echo "</h3>
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_edit_loisir", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getId", array(), "method")))));
        echo "
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>";
        
        $__internal_06e2687713ce2eb7591bf8af81df0dc5da684a2b1c21ee61d880abb3929164a3->leave($__internal_06e2687713ce2eb7591bf8af81df0dc5da684a2b1c21ee61d880abb3929164a3_prof);

        
        $__internal_10856e91049b0f6c408deae930e7478258d8057e00073c6486fbb9bee8875a14->leave($__internal_10856e91049b0f6c408deae930e7478258d8057e00073c6486fbb9bee8875a14_prof);

    }

    public function getTemplateName()
    {
        return "@App/loisir/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
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
        <h3>Edition du loisir {{ entity.getName() }}</h3>
        {{ form_start(form, {'action': path('validate_edit_loisir', {'id': entity.getId()}) }) }}
        {{ form(form) }}
    </body>
</html>", "@App/loisir/edit.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/loisir/edit.html.twig");
    }
}
