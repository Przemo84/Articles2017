<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_050df7d591a5839789685bb48304ca8d9aad5e66b560f1feda51fa0a3f469cb6 extends Twig_Template
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
        $__internal_deb25b79b4f88c5cf5469684b816801cb531c1bbe379de427e8154e4148573d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb25b79b4f88c5cf5469684b816801cb531c1bbe379de427e8154e4148573d9->enter($__internal_deb25b79b4f88c5cf5469684b816801cb531c1bbe379de427e8154e4148573d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_aea52f1606aa6dad9912c376c49273b2a463d84fa1589634b37d080fac5369d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea52f1606aa6dad9912c376c49273b2a463d84fa1589634b37d080fac5369d4->enter($__internal_aea52f1606aa6dad9912c376c49273b2a463d84fa1589634b37d080fac5369d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb25b79b4f88c5cf5469684b816801cb531c1bbe379de427e8154e4148573d9->leave($__internal_deb25b79b4f88c5cf5469684b816801cb531c1bbe379de427e8154e4148573d9_prof);

        
        $__internal_aea52f1606aa6dad9912c376c49273b2a463d84fa1589634b37d080fac5369d4->leave($__internal_aea52f1606aa6dad9912c376c49273b2a463d84fa1589634b37d080fac5369d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae04db340bddb7f8591556bac89ed7429b475d1ecf5166737424b39a8a35f656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae04db340bddb7f8591556bac89ed7429b475d1ecf5166737424b39a8a35f656->enter($__internal_ae04db340bddb7f8591556bac89ed7429b475d1ecf5166737424b39a8a35f656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2779e43806b6e387f2e50747dab264849955f86c9f3b0f63918b0705da3af673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2779e43806b6e387f2e50747dab264849955f86c9f3b0f63918b0705da3af673->enter($__internal_2779e43806b6e387f2e50747dab264849955f86c9f3b0f63918b0705da3af673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2779e43806b6e387f2e50747dab264849955f86c9f3b0f63918b0705da3af673->leave($__internal_2779e43806b6e387f2e50747dab264849955f86c9f3b0f63918b0705da3af673_prof);

        
        $__internal_ae04db340bddb7f8591556bac89ed7429b475d1ecf5166737424b39a8a35f656->leave($__internal_ae04db340bddb7f8591556bac89ed7429b475d1ecf5166737424b39a8a35f656_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd7cca691288f531c6d5271d65866fe81ed2bc11286bcb34ccf8e4a4ec53cee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7cca691288f531c6d5271d65866fe81ed2bc11286bcb34ccf8e4a4ec53cee1->enter($__internal_dd7cca691288f531c6d5271d65866fe81ed2bc11286bcb34ccf8e4a4ec53cee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff0942fe5a4104d7236afe1d017328316a620a13e534e2be306ee1149165a4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0942fe5a4104d7236afe1d017328316a620a13e534e2be306ee1149165a4c4->enter($__internal_ff0942fe5a4104d7236afe1d017328316a620a13e534e2be306ee1149165a4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ff0942fe5a4104d7236afe1d017328316a620a13e534e2be306ee1149165a4c4->leave($__internal_ff0942fe5a4104d7236afe1d017328316a620a13e534e2be306ee1149165a4c4_prof);

        
        $__internal_dd7cca691288f531c6d5271d65866fe81ed2bc11286bcb34ccf8e4a4ec53cee1->leave($__internal_dd7cca691288f531c6d5271d65866fe81ed2bc11286bcb34ccf8e4a4ec53cee1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_636adb7e146ed438cd0988df445b1e7e4120d62598c25e6aa4df98b102162ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636adb7e146ed438cd0988df445b1e7e4120d62598c25e6aa4df98b102162ab0->enter($__internal_636adb7e146ed438cd0988df445b1e7e4120d62598c25e6aa4df98b102162ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0fd1b11e1e0486eb076130d7b0349460cfe48a24b4e4a0954224ed7f60a5f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fd1b11e1e0486eb076130d7b0349460cfe48a24b4e4a0954224ed7f60a5f24->enter($__internal_f0fd1b11e1e0486eb076130d7b0349460cfe48a24b4e4a0954224ed7f60a5f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f0fd1b11e1e0486eb076130d7b0349460cfe48a24b4e4a0954224ed7f60a5f24->leave($__internal_f0fd1b11e1e0486eb076130d7b0349460cfe48a24b4e4a0954224ed7f60a5f24_prof);

        
        $__internal_636adb7e146ed438cd0988df445b1e7e4120d62598c25e6aa4df98b102162ab0->leave($__internal_636adb7e146ed438cd0988df445b1e7e4120d62598c25e6aa4df98b102162ab0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\articles\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
