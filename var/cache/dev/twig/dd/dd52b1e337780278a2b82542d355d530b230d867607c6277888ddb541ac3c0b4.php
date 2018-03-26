<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2193832111273073972c86997f41e30271d850aac8de47be5da5b33c368f1fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2193832111273073972c86997f41e30271d850aac8de47be5da5b33c368f1fbc->enter($__internal_2193832111273073972c86997f41e30271d850aac8de47be5da5b33c368f1fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2fd52c1f91730afff7ea837f42ed3ad55772c4ede75ccf44375457291ec0601c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd52c1f91730afff7ea837f42ed3ad55772c4ede75ccf44375457291ec0601c->enter($__internal_2fd52c1f91730afff7ea837f42ed3ad55772c4ede75ccf44375457291ec0601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2193832111273073972c86997f41e30271d850aac8de47be5da5b33c368f1fbc->leave($__internal_2193832111273073972c86997f41e30271d850aac8de47be5da5b33c368f1fbc_prof);

        
        $__internal_2fd52c1f91730afff7ea837f42ed3ad55772c4ede75ccf44375457291ec0601c->leave($__internal_2fd52c1f91730afff7ea837f42ed3ad55772c4ede75ccf44375457291ec0601c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8db0359122fcf6dd17728edb2a8ca51e94c56864818b7fddfb35c6a9c7af907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8db0359122fcf6dd17728edb2a8ca51e94c56864818b7fddfb35c6a9c7af907->enter($__internal_c8db0359122fcf6dd17728edb2a8ca51e94c56864818b7fddfb35c6a9c7af907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f08546edb9696575fa7b0ee6d542d5288206ab847b35005ba532da8bfb592eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f08546edb9696575fa7b0ee6d542d5288206ab847b35005ba532da8bfb592eb->enter($__internal_0f08546edb9696575fa7b0ee6d542d5288206ab847b35005ba532da8bfb592eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0f08546edb9696575fa7b0ee6d542d5288206ab847b35005ba532da8bfb592eb->leave($__internal_0f08546edb9696575fa7b0ee6d542d5288206ab847b35005ba532da8bfb592eb_prof);

        
        $__internal_c8db0359122fcf6dd17728edb2a8ca51e94c56864818b7fddfb35c6a9c7af907->leave($__internal_c8db0359122fcf6dd17728edb2a8ca51e94c56864818b7fddfb35c6a9c7af907_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dc2f64c45cc95873194e7492f48930c262c91894b06ae0acfe7344ad528f67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc2f64c45cc95873194e7492f48930c262c91894b06ae0acfe7344ad528f67b->enter($__internal_8dc2f64c45cc95873194e7492f48930c262c91894b06ae0acfe7344ad528f67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0726842507121e66c35ece8f258c9239ba4f4e19d175f52d39d06f7cffa41df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0726842507121e66c35ece8f258c9239ba4f4e19d175f52d39d06f7cffa41df5->enter($__internal_0726842507121e66c35ece8f258c9239ba4f4e19d175f52d39d06f7cffa41df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0726842507121e66c35ece8f258c9239ba4f4e19d175f52d39d06f7cffa41df5->leave($__internal_0726842507121e66c35ece8f258c9239ba4f4e19d175f52d39d06f7cffa41df5_prof);

        
        $__internal_8dc2f64c45cc95873194e7492f48930c262c91894b06ae0acfe7344ad528f67b->leave($__internal_8dc2f64c45cc95873194e7492f48930c262c91894b06ae0acfe7344ad528f67b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a25ba740c850f1351c9c6c1f65e417e2bb1ff85608151c791adae8ea9fc160c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25ba740c850f1351c9c6c1f65e417e2bb1ff85608151c791adae8ea9fc160c8->enter($__internal_a25ba740c850f1351c9c6c1f65e417e2bb1ff85608151c791adae8ea9fc160c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_943a1a4cbfb5f8eb61130a6e6a5c1b8499601e1dc3b0f36746577d2df8bbc26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943a1a4cbfb5f8eb61130a6e6a5c1b8499601e1dc3b0f36746577d2df8bbc26a->enter($__internal_943a1a4cbfb5f8eb61130a6e6a5c1b8499601e1dc3b0f36746577d2df8bbc26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_943a1a4cbfb5f8eb61130a6e6a5c1b8499601e1dc3b0f36746577d2df8bbc26a->leave($__internal_943a1a4cbfb5f8eb61130a6e6a5c1b8499601e1dc3b0f36746577d2df8bbc26a_prof);

        
        $__internal_a25ba740c850f1351c9c6c1f65e417e2bb1ff85608151c791adae8ea9fc160c8->leave($__internal_a25ba740c850f1351c9c6c1f65e417e2bb1ff85608151c791adae8ea9fc160c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
