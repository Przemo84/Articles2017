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
        $__internal_c4bd0242df4c53e03b39c02f910efbcbda8154f167770683233bca468592f1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bd0242df4c53e03b39c02f910efbcbda8154f167770683233bca468592f1f5->enter($__internal_c4bd0242df4c53e03b39c02f910efbcbda8154f167770683233bca468592f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f3bbf21800c4178d191d865d7302aaab97c78e43b1f19e0cfd8483f3dfa2fee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bbf21800c4178d191d865d7302aaab97c78e43b1f19e0cfd8483f3dfa2fee2->enter($__internal_f3bbf21800c4178d191d865d7302aaab97c78e43b1f19e0cfd8483f3dfa2fee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4bd0242df4c53e03b39c02f910efbcbda8154f167770683233bca468592f1f5->leave($__internal_c4bd0242df4c53e03b39c02f910efbcbda8154f167770683233bca468592f1f5_prof);

        
        $__internal_f3bbf21800c4178d191d865d7302aaab97c78e43b1f19e0cfd8483f3dfa2fee2->leave($__internal_f3bbf21800c4178d191d865d7302aaab97c78e43b1f19e0cfd8483f3dfa2fee2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee1ed0489a8b6e17581cea05e8f9aeea4e314388aa8daf915de44ee42c4209ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1ed0489a8b6e17581cea05e8f9aeea4e314388aa8daf915de44ee42c4209ee->enter($__internal_ee1ed0489a8b6e17581cea05e8f9aeea4e314388aa8daf915de44ee42c4209ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6fea5e1aa408e3244879f2dfaddb7d794afcec72b875e5bc21e631722c40f9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fea5e1aa408e3244879f2dfaddb7d794afcec72b875e5bc21e631722c40f9f3->enter($__internal_6fea5e1aa408e3244879f2dfaddb7d794afcec72b875e5bc21e631722c40f9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6fea5e1aa408e3244879f2dfaddb7d794afcec72b875e5bc21e631722c40f9f3->leave($__internal_6fea5e1aa408e3244879f2dfaddb7d794afcec72b875e5bc21e631722c40f9f3_prof);

        
        $__internal_ee1ed0489a8b6e17581cea05e8f9aeea4e314388aa8daf915de44ee42c4209ee->leave($__internal_ee1ed0489a8b6e17581cea05e8f9aeea4e314388aa8daf915de44ee42c4209ee_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c07f719867df5abbd96c130dc791650204c02c3915f77038260ca01c7a49835d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07f719867df5abbd96c130dc791650204c02c3915f77038260ca01c7a49835d->enter($__internal_c07f719867df5abbd96c130dc791650204c02c3915f77038260ca01c7a49835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_455b6502a22e91c21c819450e9acc8b0d1625a19bc2692e0e07ead3db9a3b65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455b6502a22e91c21c819450e9acc8b0d1625a19bc2692e0e07ead3db9a3b65b->enter($__internal_455b6502a22e91c21c819450e9acc8b0d1625a19bc2692e0e07ead3db9a3b65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_455b6502a22e91c21c819450e9acc8b0d1625a19bc2692e0e07ead3db9a3b65b->leave($__internal_455b6502a22e91c21c819450e9acc8b0d1625a19bc2692e0e07ead3db9a3b65b_prof);

        
        $__internal_c07f719867df5abbd96c130dc791650204c02c3915f77038260ca01c7a49835d->leave($__internal_c07f719867df5abbd96c130dc791650204c02c3915f77038260ca01c7a49835d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd5fe548c7a50b24744aa9afbbd9ed80f214cfb39c1136399bb79324d9c78292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5fe548c7a50b24744aa9afbbd9ed80f214cfb39c1136399bb79324d9c78292->enter($__internal_bd5fe548c7a50b24744aa9afbbd9ed80f214cfb39c1136399bb79324d9c78292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d398dd95fae7ad7b72f9882f5d5288d282e48ec390b9677db864bc4d45b8106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d398dd95fae7ad7b72f9882f5d5288d282e48ec390b9677db864bc4d45b8106->enter($__internal_4d398dd95fae7ad7b72f9882f5d5288d282e48ec390b9677db864bc4d45b8106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4d398dd95fae7ad7b72f9882f5d5288d282e48ec390b9677db864bc4d45b8106->leave($__internal_4d398dd95fae7ad7b72f9882f5d5288d282e48ec390b9677db864bc4d45b8106_prof);

        
        $__internal_bd5fe548c7a50b24744aa9afbbd9ed80f214cfb39c1136399bb79324d9c78292->leave($__internal_bd5fe548c7a50b24744aa9afbbd9ed80f214cfb39c1136399bb79324d9c78292_prof);

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
