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
        $__internal_822389ffe4f66ef7bdfb732511924e45b2e343306266cc3712b61ce5b068d11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822389ffe4f66ef7bdfb732511924e45b2e343306266cc3712b61ce5b068d11f->enter($__internal_822389ffe4f66ef7bdfb732511924e45b2e343306266cc3712b61ce5b068d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c5aaeb7cd298b1b8fa2968a13a4d8dc434f42a0ee646eac63ff86c3e96c76ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5aaeb7cd298b1b8fa2968a13a4d8dc434f42a0ee646eac63ff86c3e96c76ec3->enter($__internal_c5aaeb7cd298b1b8fa2968a13a4d8dc434f42a0ee646eac63ff86c3e96c76ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822389ffe4f66ef7bdfb732511924e45b2e343306266cc3712b61ce5b068d11f->leave($__internal_822389ffe4f66ef7bdfb732511924e45b2e343306266cc3712b61ce5b068d11f_prof);

        
        $__internal_c5aaeb7cd298b1b8fa2968a13a4d8dc434f42a0ee646eac63ff86c3e96c76ec3->leave($__internal_c5aaeb7cd298b1b8fa2968a13a4d8dc434f42a0ee646eac63ff86c3e96c76ec3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c66eb82cdfefc43e6024c7b64ed557d1e8e2f95035b5807098adf8a837f360f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66eb82cdfefc43e6024c7b64ed557d1e8e2f95035b5807098adf8a837f360f0->enter($__internal_c66eb82cdfefc43e6024c7b64ed557d1e8e2f95035b5807098adf8a837f360f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b30641369f4c841e5ea60d9f2447937727b55ead656569b0c712cfac410c824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b30641369f4c841e5ea60d9f2447937727b55ead656569b0c712cfac410c824->enter($__internal_4b30641369f4c841e5ea60d9f2447937727b55ead656569b0c712cfac410c824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4b30641369f4c841e5ea60d9f2447937727b55ead656569b0c712cfac410c824->leave($__internal_4b30641369f4c841e5ea60d9f2447937727b55ead656569b0c712cfac410c824_prof);

        
        $__internal_c66eb82cdfefc43e6024c7b64ed557d1e8e2f95035b5807098adf8a837f360f0->leave($__internal_c66eb82cdfefc43e6024c7b64ed557d1e8e2f95035b5807098adf8a837f360f0_prof);

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
