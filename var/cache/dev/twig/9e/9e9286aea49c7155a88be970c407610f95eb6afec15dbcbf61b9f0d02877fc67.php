<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a9277ea77800a654fca39ac0bbc64651a53a1a9c0035798065f29de96749fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_44b92b568c764bc9656c426ed7c493550728e17849fdf365c4c950340875eca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b92b568c764bc9656c426ed7c493550728e17849fdf365c4c950340875eca4->enter($__internal_44b92b568c764bc9656c426ed7c493550728e17849fdf365c4c950340875eca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a09536fd3bd005762e322621821b19c1e79dc35302ba82cc2cbf84f82c279e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09536fd3bd005762e322621821b19c1e79dc35302ba82cc2cbf84f82c279e66->enter($__internal_a09536fd3bd005762e322621821b19c1e79dc35302ba82cc2cbf84f82c279e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44b92b568c764bc9656c426ed7c493550728e17849fdf365c4c950340875eca4->leave($__internal_44b92b568c764bc9656c426ed7c493550728e17849fdf365c4c950340875eca4_prof);

        
        $__internal_a09536fd3bd005762e322621821b19c1e79dc35302ba82cc2cbf84f82c279e66->leave($__internal_a09536fd3bd005762e322621821b19c1e79dc35302ba82cc2cbf84f82c279e66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ddb91d819db82fccb2e82493d61e36bfeec0f79147218b09afd80875f9ec68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ddb91d819db82fccb2e82493d61e36bfeec0f79147218b09afd80875f9ec68a->enter($__internal_3ddb91d819db82fccb2e82493d61e36bfeec0f79147218b09afd80875f9ec68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c600971a2e9e5ae85b0902405731582743f5e7441bbf007d440ad9de951cf471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c600971a2e9e5ae85b0902405731582743f5e7441bbf007d440ad9de951cf471->enter($__internal_c600971a2e9e5ae85b0902405731582743f5e7441bbf007d440ad9de951cf471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c600971a2e9e5ae85b0902405731582743f5e7441bbf007d440ad9de951cf471->leave($__internal_c600971a2e9e5ae85b0902405731582743f5e7441bbf007d440ad9de951cf471_prof);

        
        $__internal_3ddb91d819db82fccb2e82493d61e36bfeec0f79147218b09afd80875f9ec68a->leave($__internal_3ddb91d819db82fccb2e82493d61e36bfeec0f79147218b09afd80875f9ec68a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1aa1a51c8314f7476b0d9e2ab8030c08ef1e864b03d851fca69438b8f8883c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa1a51c8314f7476b0d9e2ab8030c08ef1e864b03d851fca69438b8f8883c2b->enter($__internal_1aa1a51c8314f7476b0d9e2ab8030c08ef1e864b03d851fca69438b8f8883c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_16867510ccd0f81b7b4b2ccb44e5d5c721069fbb3c0c6b67e949209e39c5be3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16867510ccd0f81b7b4b2ccb44e5d5c721069fbb3c0c6b67e949209e39c5be3c->enter($__internal_16867510ccd0f81b7b4b2ccb44e5d5c721069fbb3c0c6b67e949209e39c5be3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_16867510ccd0f81b7b4b2ccb44e5d5c721069fbb3c0c6b67e949209e39c5be3c->leave($__internal_16867510ccd0f81b7b4b2ccb44e5d5c721069fbb3c0c6b67e949209e39c5be3c_prof);

        
        $__internal_1aa1a51c8314f7476b0d9e2ab8030c08ef1e864b03d851fca69438b8f8883c2b->leave($__internal_1aa1a51c8314f7476b0d9e2ab8030c08ef1e864b03d851fca69438b8f8883c2b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42600fbdb0455c6a9bc6eddd7daff56c2411566e1e7fb6dc92bbbe6a19b5c7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42600fbdb0455c6a9bc6eddd7daff56c2411566e1e7fb6dc92bbbe6a19b5c7f4->enter($__internal_42600fbdb0455c6a9bc6eddd7daff56c2411566e1e7fb6dc92bbbe6a19b5c7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe85ebb38225fbcb1261ed3b4df3fd2b4a0b68ecf93cb8243fc3240b1a58c9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe85ebb38225fbcb1261ed3b4df3fd2b4a0b68ecf93cb8243fc3240b1a58c9ef->enter($__internal_fe85ebb38225fbcb1261ed3b4df3fd2b4a0b68ecf93cb8243fc3240b1a58c9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fe85ebb38225fbcb1261ed3b4df3fd2b4a0b68ecf93cb8243fc3240b1a58c9ef->leave($__internal_fe85ebb38225fbcb1261ed3b4df3fd2b4a0b68ecf93cb8243fc3240b1a58c9ef_prof);

        
        $__internal_42600fbdb0455c6a9bc6eddd7daff56c2411566e1e7fb6dc92bbbe6a19b5c7f4->leave($__internal_42600fbdb0455c6a9bc6eddd7daff56c2411566e1e7fb6dc92bbbe6a19b5c7f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\articles\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
