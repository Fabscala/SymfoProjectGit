<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
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
        $__internal_5d1b16759beafca0e766731f25259d08566800fbc03501085cb546e7e2faa099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1b16759beafca0e766731f25259d08566800fbc03501085cb546e7e2faa099->enter($__internal_5d1b16759beafca0e766731f25259d08566800fbc03501085cb546e7e2faa099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_791db480f525770740d1303b886e059ac0ba12b4ee561ff70180f60ed56875cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791db480f525770740d1303b886e059ac0ba12b4ee561ff70180f60ed56875cd->enter($__internal_791db480f525770740d1303b886e059ac0ba12b4ee561ff70180f60ed56875cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d1b16759beafca0e766731f25259d08566800fbc03501085cb546e7e2faa099->leave($__internal_5d1b16759beafca0e766731f25259d08566800fbc03501085cb546e7e2faa099_prof);

        
        $__internal_791db480f525770740d1303b886e059ac0ba12b4ee561ff70180f60ed56875cd->leave($__internal_791db480f525770740d1303b886e059ac0ba12b4ee561ff70180f60ed56875cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a8efe726989cd192eab675b758b29fc5d9e3c512dcc56d90b76803ba0b66c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8efe726989cd192eab675b758b29fc5d9e3c512dcc56d90b76803ba0b66c49->enter($__internal_9a8efe726989cd192eab675b758b29fc5d9e3c512dcc56d90b76803ba0b66c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47c849f964612276046c1340008b737ac23c74e20b7b4113a2897399b4f8f327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c849f964612276046c1340008b737ac23c74e20b7b4113a2897399b4f8f327->enter($__internal_47c849f964612276046c1340008b737ac23c74e20b7b4113a2897399b4f8f327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_47c849f964612276046c1340008b737ac23c74e20b7b4113a2897399b4f8f327->leave($__internal_47c849f964612276046c1340008b737ac23c74e20b7b4113a2897399b4f8f327_prof);

        
        $__internal_9a8efe726989cd192eab675b758b29fc5d9e3c512dcc56d90b76803ba0b66c49->leave($__internal_9a8efe726989cd192eab675b758b29fc5d9e3c512dcc56d90b76803ba0b66c49_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2d3a31295b19fc621950a72d293ba0e1c5a7df4bd201eb4e0ca508c04ebb216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d3a31295b19fc621950a72d293ba0e1c5a7df4bd201eb4e0ca508c04ebb216->enter($__internal_c2d3a31295b19fc621950a72d293ba0e1c5a7df4bd201eb4e0ca508c04ebb216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b86875af7334cd467d15965ca84057e5cc098d37a4fbb0e2709f2aa31f0cd9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86875af7334cd467d15965ca84057e5cc098d37a4fbb0e2709f2aa31f0cd9a7->enter($__internal_b86875af7334cd467d15965ca84057e5cc098d37a4fbb0e2709f2aa31f0cd9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b86875af7334cd467d15965ca84057e5cc098d37a4fbb0e2709f2aa31f0cd9a7->leave($__internal_b86875af7334cd467d15965ca84057e5cc098d37a4fbb0e2709f2aa31f0cd9a7_prof);

        
        $__internal_c2d3a31295b19fc621950a72d293ba0e1c5a7df4bd201eb4e0ca508c04ebb216->leave($__internal_c2d3a31295b19fc621950a72d293ba0e1c5a7df4bd201eb4e0ca508c04ebb216_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bb0829148173c0618012f27bac31b4be347cf146e59e9e7acdd1c8fa31f9a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb0829148173c0618012f27bac31b4be347cf146e59e9e7acdd1c8fa31f9a07->enter($__internal_9bb0829148173c0618012f27bac31b4be347cf146e59e9e7acdd1c8fa31f9a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39e3a5897d495c66ddff97d0184ece8dec02b56abf1117d88d38a4a223b7b03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e3a5897d495c66ddff97d0184ece8dec02b56abf1117d88d38a4a223b7b03a->enter($__internal_39e3a5897d495c66ddff97d0184ece8dec02b56abf1117d88d38a4a223b7b03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_39e3a5897d495c66ddff97d0184ece8dec02b56abf1117d88d38a4a223b7b03a->leave($__internal_39e3a5897d495c66ddff97d0184ece8dec02b56abf1117d88d38a4a223b7b03a_prof);

        
        $__internal_9bb0829148173c0618012f27bac31b4be347cf146e59e9e7acdd1c8fa31f9a07->leave($__internal_9bb0829148173c0618012f27bac31b4be347cf146e59e9e7acdd1c8fa31f9a07_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
