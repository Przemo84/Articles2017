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
        $__internal_a426bba579343e85a3b979648feb8eff2f129f0f5265e2e61244ee16450d2cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a426bba579343e85a3b979648feb8eff2f129f0f5265e2e61244ee16450d2cd1->enter($__internal_a426bba579343e85a3b979648feb8eff2f129f0f5265e2e61244ee16450d2cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fe87d9ab6f3063c6bb51a7a2f71983ce3d80f9ca88e58e34e41c2ed4d3204699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe87d9ab6f3063c6bb51a7a2f71983ce3d80f9ca88e58e34e41c2ed4d3204699->enter($__internal_fe87d9ab6f3063c6bb51a7a2f71983ce3d80f9ca88e58e34e41c2ed4d3204699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a426bba579343e85a3b979648feb8eff2f129f0f5265e2e61244ee16450d2cd1->leave($__internal_a426bba579343e85a3b979648feb8eff2f129f0f5265e2e61244ee16450d2cd1_prof);

        
        $__internal_fe87d9ab6f3063c6bb51a7a2f71983ce3d80f9ca88e58e34e41c2ed4d3204699->leave($__internal_fe87d9ab6f3063c6bb51a7a2f71983ce3d80f9ca88e58e34e41c2ed4d3204699_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7368da3c35a978be4e2fd140ea4b4de88ce9875aeab7a787bee724aabd626921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7368da3c35a978be4e2fd140ea4b4de88ce9875aeab7a787bee724aabd626921->enter($__internal_7368da3c35a978be4e2fd140ea4b4de88ce9875aeab7a787bee724aabd626921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_84b515c1da45a0a59e5da3ccd5841cd27cac6a87dde2ecd002d5f8a3140ed12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b515c1da45a0a59e5da3ccd5841cd27cac6a87dde2ecd002d5f8a3140ed12d->enter($__internal_84b515c1da45a0a59e5da3ccd5841cd27cac6a87dde2ecd002d5f8a3140ed12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_84b515c1da45a0a59e5da3ccd5841cd27cac6a87dde2ecd002d5f8a3140ed12d->leave($__internal_84b515c1da45a0a59e5da3ccd5841cd27cac6a87dde2ecd002d5f8a3140ed12d_prof);

        
        $__internal_7368da3c35a978be4e2fd140ea4b4de88ce9875aeab7a787bee724aabd626921->leave($__internal_7368da3c35a978be4e2fd140ea4b4de88ce9875aeab7a787bee724aabd626921_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_082e729064a85d802b2861ec541b9044c6d7f55e0d414a9688fe89f2a03da15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082e729064a85d802b2861ec541b9044c6d7f55e0d414a9688fe89f2a03da15e->enter($__internal_082e729064a85d802b2861ec541b9044c6d7f55e0d414a9688fe89f2a03da15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c3bf8b41d331a1d6eb809885a0d5212e7ab992f7f1bd2a620ed17231e9d5775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3bf8b41d331a1d6eb809885a0d5212e7ab992f7f1bd2a620ed17231e9d5775->enter($__internal_6c3bf8b41d331a1d6eb809885a0d5212e7ab992f7f1bd2a620ed17231e9d5775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c3bf8b41d331a1d6eb809885a0d5212e7ab992f7f1bd2a620ed17231e9d5775->leave($__internal_6c3bf8b41d331a1d6eb809885a0d5212e7ab992f7f1bd2a620ed17231e9d5775_prof);

        
        $__internal_082e729064a85d802b2861ec541b9044c6d7f55e0d414a9688fe89f2a03da15e->leave($__internal_082e729064a85d802b2861ec541b9044c6d7f55e0d414a9688fe89f2a03da15e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb56909187c1588a0ba48480c727d6f8a8f1fd6542cce7e06d50695dfc9302a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb56909187c1588a0ba48480c727d6f8a8f1fd6542cce7e06d50695dfc9302a3->enter($__internal_fb56909187c1588a0ba48480c727d6f8a8f1fd6542cce7e06d50695dfc9302a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9876a00ae0907b5a3ae22fbc026d38e121472a3ab04b176ffa1f346265216b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9876a00ae0907b5a3ae22fbc026d38e121472a3ab04b176ffa1f346265216b3->enter($__internal_d9876a00ae0907b5a3ae22fbc026d38e121472a3ab04b176ffa1f346265216b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d9876a00ae0907b5a3ae22fbc026d38e121472a3ab04b176ffa1f346265216b3->leave($__internal_d9876a00ae0907b5a3ae22fbc026d38e121472a3ab04b176ffa1f346265216b3_prof);

        
        $__internal_fb56909187c1588a0ba48480c727d6f8a8f1fd6542cce7e06d50695dfc9302a3->leave($__internal_fb56909187c1588a0ba48480c727d6f8a8f1fd6542cce7e06d50695dfc9302a3_prof);

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
