<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e0f43f69c5d7006e06bdde8a0b10a441fdd8754558345a8cb867783eb198db11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad81573ac452fa241cb0dcb0c54a0ee9d7608a82f52a4a2c8b6631a07dec6e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad81573ac452fa241cb0dcb0c54a0ee9d7608a82f52a4a2c8b6631a07dec6e08->enter($__internal_ad81573ac452fa241cb0dcb0c54a0ee9d7608a82f52a4a2c8b6631a07dec6e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2630d46aaa02ec45978f94d202187d6c08fdb51dff7546092a63fa154b5de8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2630d46aaa02ec45978f94d202187d6c08fdb51dff7546092a63fa154b5de8d7->enter($__internal_2630d46aaa02ec45978f94d202187d6c08fdb51dff7546092a63fa154b5de8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad81573ac452fa241cb0dcb0c54a0ee9d7608a82f52a4a2c8b6631a07dec6e08->leave($__internal_ad81573ac452fa241cb0dcb0c54a0ee9d7608a82f52a4a2c8b6631a07dec6e08_prof);

        
        $__internal_2630d46aaa02ec45978f94d202187d6c08fdb51dff7546092a63fa154b5de8d7->leave($__internal_2630d46aaa02ec45978f94d202187d6c08fdb51dff7546092a63fa154b5de8d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a260400a18186fb4a089c8fad66608f9a13386aec0d1706b6a8f6de5e6efe16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a260400a18186fb4a089c8fad66608f9a13386aec0d1706b6a8f6de5e6efe16->enter($__internal_2a260400a18186fb4a089c8fad66608f9a13386aec0d1706b6a8f6de5e6efe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_42e674f9949899c80f3d993c2d351cc26218de9cf512eefbdef661603d4b697d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e674f9949899c80f3d993c2d351cc26218de9cf512eefbdef661603d4b697d->enter($__internal_42e674f9949899c80f3d993c2d351cc26218de9cf512eefbdef661603d4b697d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_42e674f9949899c80f3d993c2d351cc26218de9cf512eefbdef661603d4b697d->leave($__internal_42e674f9949899c80f3d993c2d351cc26218de9cf512eefbdef661603d4b697d_prof);

        
        $__internal_2a260400a18186fb4a089c8fad66608f9a13386aec0d1706b6a8f6de5e6efe16->leave($__internal_2a260400a18186fb4a089c8fad66608f9a13386aec0d1706b6a8f6de5e6efe16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\articles\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
