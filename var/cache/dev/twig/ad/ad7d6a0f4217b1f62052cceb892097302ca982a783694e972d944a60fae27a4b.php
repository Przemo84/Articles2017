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
        $__internal_a98b88c2b2cef3e1cc464a0722cad5b631075177d41f004ca9621379438afe1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98b88c2b2cef3e1cc464a0722cad5b631075177d41f004ca9621379438afe1f->enter($__internal_a98b88c2b2cef3e1cc464a0722cad5b631075177d41f004ca9621379438afe1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7427eb0f911c019ae19e452b27c5847c7fa76f181862c32a060140d028772a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7427eb0f911c019ae19e452b27c5847c7fa76f181862c32a060140d028772a92->enter($__internal_7427eb0f911c019ae19e452b27c5847c7fa76f181862c32a060140d028772a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98b88c2b2cef3e1cc464a0722cad5b631075177d41f004ca9621379438afe1f->leave($__internal_a98b88c2b2cef3e1cc464a0722cad5b631075177d41f004ca9621379438afe1f_prof);

        
        $__internal_7427eb0f911c019ae19e452b27c5847c7fa76f181862c32a060140d028772a92->leave($__internal_7427eb0f911c019ae19e452b27c5847c7fa76f181862c32a060140d028772a92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d00b20f30c207cf7ee4976edf5563b7408437075a54400a0fc9d6f389055dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d00b20f30c207cf7ee4976edf5563b7408437075a54400a0fc9d6f389055dd6->enter($__internal_5d00b20f30c207cf7ee4976edf5563b7408437075a54400a0fc9d6f389055dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66719e321757cd21728b1057a0a08ebf6e68f3500404cf35013c373d7848ab75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66719e321757cd21728b1057a0a08ebf6e68f3500404cf35013c373d7848ab75->enter($__internal_66719e321757cd21728b1057a0a08ebf6e68f3500404cf35013c373d7848ab75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_66719e321757cd21728b1057a0a08ebf6e68f3500404cf35013c373d7848ab75->leave($__internal_66719e321757cd21728b1057a0a08ebf6e68f3500404cf35013c373d7848ab75_prof);

        
        $__internal_5d00b20f30c207cf7ee4976edf5563b7408437075a54400a0fc9d6f389055dd6->leave($__internal_5d00b20f30c207cf7ee4976edf5563b7408437075a54400a0fc9d6f389055dd6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a3c537b74e617d6dd88b23c1aa9b138472b724114c2cf61e2de7a0e794676a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3c537b74e617d6dd88b23c1aa9b138472b724114c2cf61e2de7a0e794676a8->enter($__internal_0a3c537b74e617d6dd88b23c1aa9b138472b724114c2cf61e2de7a0e794676a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec7b7406a28360f9c26e2a0872a055a0af9988419e95a2f16fd425f1bc0fb1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7b7406a28360f9c26e2a0872a055a0af9988419e95a2f16fd425f1bc0fb1b5->enter($__internal_ec7b7406a28360f9c26e2a0872a055a0af9988419e95a2f16fd425f1bc0fb1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ec7b7406a28360f9c26e2a0872a055a0af9988419e95a2f16fd425f1bc0fb1b5->leave($__internal_ec7b7406a28360f9c26e2a0872a055a0af9988419e95a2f16fd425f1bc0fb1b5_prof);

        
        $__internal_0a3c537b74e617d6dd88b23c1aa9b138472b724114c2cf61e2de7a0e794676a8->leave($__internal_0a3c537b74e617d6dd88b23c1aa9b138472b724114c2cf61e2de7a0e794676a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0fe60c38d1b6d2e968ca63e00fc9cf26cf33678fb89959574db10b35682557a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fe60c38d1b6d2e968ca63e00fc9cf26cf33678fb89959574db10b35682557a->enter($__internal_d0fe60c38d1b6d2e968ca63e00fc9cf26cf33678fb89959574db10b35682557a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_67e53912cfa56970f3457cfab90711cdfcd2e5123c53b04033dd771c5b85e9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e53912cfa56970f3457cfab90711cdfcd2e5123c53b04033dd771c5b85e9ad->enter($__internal_67e53912cfa56970f3457cfab90711cdfcd2e5123c53b04033dd771c5b85e9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_67e53912cfa56970f3457cfab90711cdfcd2e5123c53b04033dd771c5b85e9ad->leave($__internal_67e53912cfa56970f3457cfab90711cdfcd2e5123c53b04033dd771c5b85e9ad_prof);

        
        $__internal_d0fe60c38d1b6d2e968ca63e00fc9cf26cf33678fb89959574db10b35682557a->leave($__internal_d0fe60c38d1b6d2e968ca63e00fc9cf26cf33678fb89959574db10b35682557a_prof);

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
