<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_7cb46ede914275fd9a93eabfdc8d59bf08d8ee7a860a3ad48429ea5f56441464 extends Twig_Template
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
        $__internal_00dd9f9f5b7d0d8d9b152f33c71901c7b63795fc64d4cd525e94eefc79e1cd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00dd9f9f5b7d0d8d9b152f33c71901c7b63795fc64d4cd525e94eefc79e1cd9a->enter($__internal_00dd9f9f5b7d0d8d9b152f33c71901c7b63795fc64d4cd525e94eefc79e1cd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e002ba4de141d10d2ab2a534e7cb2b694c59eb92c729e4a92c1dd55c6a974b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e002ba4de141d10d2ab2a534e7cb2b694c59eb92c729e4a92c1dd55c6a974b69->enter($__internal_e002ba4de141d10d2ab2a534e7cb2b694c59eb92c729e4a92c1dd55c6a974b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_00dd9f9f5b7d0d8d9b152f33c71901c7b63795fc64d4cd525e94eefc79e1cd9a->leave($__internal_00dd9f9f5b7d0d8d9b152f33c71901c7b63795fc64d4cd525e94eefc79e1cd9a_prof);

        
        $__internal_e002ba4de141d10d2ab2a534e7cb2b694c59eb92c729e4a92c1dd55c6a974b69->leave($__internal_e002ba4de141d10d2ab2a534e7cb2b694c59eb92c729e4a92c1dd55c6a974b69_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\articles\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
