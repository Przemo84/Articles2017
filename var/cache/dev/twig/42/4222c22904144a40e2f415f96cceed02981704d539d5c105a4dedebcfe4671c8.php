<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a6999a65b53a554e9db01e25b8c24efc2d032e6207fa652477a42c3f1f07e4f1 extends Twig_Template
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
        $__internal_4acde5086b1f7723f86cceb8840a8b836a701466a7438c273c2c7392c3b3d3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4acde5086b1f7723f86cceb8840a8b836a701466a7438c273c2c7392c3b3d3ba->enter($__internal_4acde5086b1f7723f86cceb8840a8b836a701466a7438c273c2c7392c3b3d3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1e475639be923db4836ab890fe3781b2e50d568ca0fad4a878e5e465dc6241c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e475639be923db4836ab890fe3781b2e50d568ca0fad4a878e5e465dc6241c6->enter($__internal_1e475639be923db4836ab890fe3781b2e50d568ca0fad4a878e5e465dc6241c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4acde5086b1f7723f86cceb8840a8b836a701466a7438c273c2c7392c3b3d3ba->leave($__internal_4acde5086b1f7723f86cceb8840a8b836a701466a7438c273c2c7392c3b3d3ba_prof);

        
        $__internal_1e475639be923db4836ab890fe3781b2e50d568ca0fad4a878e5e465dc6241c6->leave($__internal_1e475639be923db4836ab890fe3781b2e50d568ca0fad4a878e5e465dc6241c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e9f7576d287a4d78be30951b30e52cdf2a632f87648df3bf18166aaf8570af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9f7576d287a4d78be30951b30e52cdf2a632f87648df3bf18166aaf8570af8->enter($__internal_6e9f7576d287a4d78be30951b30e52cdf2a632f87648df3bf18166aaf8570af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8229f5c15e477a1e3d8ba68ff8f73abea89c672076567f41c90d221cefd02c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8229f5c15e477a1e3d8ba68ff8f73abea89c672076567f41c90d221cefd02c1d->enter($__internal_8229f5c15e477a1e3d8ba68ff8f73abea89c672076567f41c90d221cefd02c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8229f5c15e477a1e3d8ba68ff8f73abea89c672076567f41c90d221cefd02c1d->leave($__internal_8229f5c15e477a1e3d8ba68ff8f73abea89c672076567f41c90d221cefd02c1d_prof);

        
        $__internal_6e9f7576d287a4d78be30951b30e52cdf2a632f87648df3bf18166aaf8570af8->leave($__internal_6e9f7576d287a4d78be30951b30e52cdf2a632f87648df3bf18166aaf8570af8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_19e3d472a8de999cfa75089d4c77be07601307d6b111412a62b0634e67dad8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e3d472a8de999cfa75089d4c77be07601307d6b111412a62b0634e67dad8e3->enter($__internal_19e3d472a8de999cfa75089d4c77be07601307d6b111412a62b0634e67dad8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f5c6285343f00b58dc00370f9f13ee6519d0e6033bdaa477cddcaefbe0b0f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5c6285343f00b58dc00370f9f13ee6519d0e6033bdaa477cddcaefbe0b0f3e->enter($__internal_1f5c6285343f00b58dc00370f9f13ee6519d0e6033bdaa477cddcaefbe0b0f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1f5c6285343f00b58dc00370f9f13ee6519d0e6033bdaa477cddcaefbe0b0f3e->leave($__internal_1f5c6285343f00b58dc00370f9f13ee6519d0e6033bdaa477cddcaefbe0b0f3e_prof);

        
        $__internal_19e3d472a8de999cfa75089d4c77be07601307d6b111412a62b0634e67dad8e3->leave($__internal_19e3d472a8de999cfa75089d4c77be07601307d6b111412a62b0634e67dad8e3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd49634f836363b31abbc968f84881ec746c973bf2bacf13dd0dc0e2c3976e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd49634f836363b31abbc968f84881ec746c973bf2bacf13dd0dc0e2c3976e42->enter($__internal_bd49634f836363b31abbc968f84881ec746c973bf2bacf13dd0dc0e2c3976e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73e6b89ad1921a57f9e7fdad686ef03f629885e757fa8551ddccc4b2b2a97e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e6b89ad1921a57f9e7fdad686ef03f629885e757fa8551ddccc4b2b2a97e6a->enter($__internal_73e6b89ad1921a57f9e7fdad686ef03f629885e757fa8551ddccc4b2b2a97e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_73e6b89ad1921a57f9e7fdad686ef03f629885e757fa8551ddccc4b2b2a97e6a->leave($__internal_73e6b89ad1921a57f9e7fdad686ef03f629885e757fa8551ddccc4b2b2a97e6a_prof);

        
        $__internal_bd49634f836363b31abbc968f84881ec746c973bf2bacf13dd0dc0e2c3976e42->leave($__internal_bd49634f836363b31abbc968f84881ec746c973bf2bacf13dd0dc0e2c3976e42_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\articles\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
