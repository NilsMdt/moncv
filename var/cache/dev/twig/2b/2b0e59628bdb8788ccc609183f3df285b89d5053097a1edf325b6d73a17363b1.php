<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fbab31feab27e50cb010bf0e188f4b6068b7be456ec88bc94bfa2f0a054ba41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fbab31feab27e50cb010bf0e188f4b6068b7be456ec88bc94bfa2f0a054ba41->enter($__internal_2fbab31feab27e50cb010bf0e188f4b6068b7be456ec88bc94bfa2f0a054ba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f460b8951c8398c5bc783755c365a991159cd3dee88467792c181fd27a591d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f460b8951c8398c5bc783755c365a991159cd3dee88467792c181fd27a591d59->enter($__internal_f460b8951c8398c5bc783755c365a991159cd3dee88467792c181fd27a591d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fbab31feab27e50cb010bf0e188f4b6068b7be456ec88bc94bfa2f0a054ba41->leave($__internal_2fbab31feab27e50cb010bf0e188f4b6068b7be456ec88bc94bfa2f0a054ba41_prof);

        
        $__internal_f460b8951c8398c5bc783755c365a991159cd3dee88467792c181fd27a591d59->leave($__internal_f460b8951c8398c5bc783755c365a991159cd3dee88467792c181fd27a591d59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be78196d364fdfaa3965e73d6843e692eccc0d5a5268b3a55765710e4e7630ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be78196d364fdfaa3965e73d6843e692eccc0d5a5268b3a55765710e4e7630ce->enter($__internal_be78196d364fdfaa3965e73d6843e692eccc0d5a5268b3a55765710e4e7630ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99b2438462089f7f6bde82d1cbdac84afa4df69c7ed079aeecd9f216c38fae3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b2438462089f7f6bde82d1cbdac84afa4df69c7ed079aeecd9f216c38fae3a->enter($__internal_99b2438462089f7f6bde82d1cbdac84afa4df69c7ed079aeecd9f216c38fae3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_99b2438462089f7f6bde82d1cbdac84afa4df69c7ed079aeecd9f216c38fae3a->leave($__internal_99b2438462089f7f6bde82d1cbdac84afa4df69c7ed079aeecd9f216c38fae3a_prof);

        
        $__internal_be78196d364fdfaa3965e73d6843e692eccc0d5a5268b3a55765710e4e7630ce->leave($__internal_be78196d364fdfaa3965e73d6843e692eccc0d5a5268b3a55765710e4e7630ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_52d6362505383265a2e353f76ee44723a432d79f398491a474c152d3792118b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d6362505383265a2e353f76ee44723a432d79f398491a474c152d3792118b0->enter($__internal_52d6362505383265a2e353f76ee44723a432d79f398491a474c152d3792118b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba1997386dbed69296e9001029335ba80a626f48c293333f70352fedade727a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1997386dbed69296e9001029335ba80a626f48c293333f70352fedade727a0->enter($__internal_ba1997386dbed69296e9001029335ba80a626f48c293333f70352fedade727a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ba1997386dbed69296e9001029335ba80a626f48c293333f70352fedade727a0->leave($__internal_ba1997386dbed69296e9001029335ba80a626f48c293333f70352fedade727a0_prof);

        
        $__internal_52d6362505383265a2e353f76ee44723a432d79f398491a474c152d3792118b0->leave($__internal_52d6362505383265a2e353f76ee44723a432d79f398491a474c152d3792118b0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d36add7c30d00b4cc9c6f17f17d5cada55473935a8a6a6ac7fbcf5aa7e394d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36add7c30d00b4cc9c6f17f17d5cada55473935a8a6a6ac7fbcf5aa7e394d5f->enter($__internal_d36add7c30d00b4cc9c6f17f17d5cada55473935a8a6a6ac7fbcf5aa7e394d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e907656b91cc1d096e1f2630629feba7c4a2a211d64690b8cbff9d8682f1130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e907656b91cc1d096e1f2630629feba7c4a2a211d64690b8cbff9d8682f1130->enter($__internal_4e907656b91cc1d096e1f2630629feba7c4a2a211d64690b8cbff9d8682f1130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4e907656b91cc1d096e1f2630629feba7c4a2a211d64690b8cbff9d8682f1130->leave($__internal_4e907656b91cc1d096e1f2630629feba7c4a2a211d64690b8cbff9d8682f1130_prof);

        
        $__internal_d36add7c30d00b4cc9c6f17f17d5cada55473935a8a6a6ac7fbcf5aa7e394d5f->leave($__internal_d36add7c30d00b4cc9c6f17f17d5cada55473935a8a6a6ac7fbcf5aa7e394d5f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
