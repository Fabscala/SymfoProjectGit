<?php

/* SymfoProjectGitCinemaBundle:Film:list.html.twig */
class __TwigTemplate_572fc0aea43a5d421c6cc3a4aeff2be6e1f00e0699a6cdefe43693f6dd869c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Film:layout.html.twig", "SymfoProjectGitCinemaBundle:Film:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SymfoProjectGitCinemaBundle:Film:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3e0f9aab3934c859a9facd468d9451cfc5ead2ee74ec6589558b1e327d679d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e0f9aab3934c859a9facd468d9451cfc5ead2ee74ec6589558b1e327d679d8->enter($__internal_c3e0f9aab3934c859a9facd468d9451cfc5ead2ee74ec6589558b1e327d679d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $__internal_c461145d37d05110faa6b4996cbb04ee20389b042692ecfdd3c42bf21a3d7b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c461145d37d05110faa6b4996cbb04ee20389b042692ecfdd3c42bf21a3d7b0a->enter($__internal_c461145d37d05110faa6b4996cbb04ee20389b042692ecfdd3c42bf21a3d7b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3e0f9aab3934c859a9facd468d9451cfc5ead2ee74ec6589558b1e327d679d8->leave($__internal_c3e0f9aab3934c859a9facd468d9451cfc5ead2ee74ec6589558b1e327d679d8_prof);

        
        $__internal_c461145d37d05110faa6b4996cbb04ee20389b042692ecfdd3c42bf21a3d7b0a->leave($__internal_c461145d37d05110faa6b4996cbb04ee20389b042692ecfdd3c42bf21a3d7b0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c69c68211e17bddfc0337b66932c46251f1fe63c6ebee1d3c75e84c853d098d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c69c68211e17bddfc0337b66932c46251f1fe63c6ebee1d3c75e84c853d098d->enter($__internal_8c69c68211e17bddfc0337b66932c46251f1fe63c6ebee1d3c75e84c853d098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_141577231c4aa2f870cd092b7ea2456bc2f24f8277b9b953a3def4e12def43f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141577231c4aa2f870cd092b7ea2456bc2f24f8277b9b953a3def4e12def43f5->enter($__internal_141577231c4aa2f870cd092b7ea2456bc2f24f8277b9b953a3def4e12def43f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Films";
        
        $__internal_141577231c4aa2f870cd092b7ea2456bc2f24f8277b9b953a3def4e12def43f5->leave($__internal_141577231c4aa2f870cd092b7ea2456bc2f24f8277b9b953a3def4e12def43f5_prof);

        
        $__internal_8c69c68211e17bddfc0337b66932c46251f1fe63c6ebee1d3c75e84c853d098d->leave($__internal_8c69c68211e17bddfc0337b66932c46251f1fe63c6ebee1d3c75e84c853d098d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b36960d689c96a98bc9376613fcf1f3b177126376adc490f5472f81b5a3c2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b36960d689c96a98bc9376613fcf1f3b177126376adc490f5472f81b5a3c2b1->enter($__internal_6b36960d689c96a98bc9376613fcf1f3b177126376adc490f5472f81b5a3c2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd3ba4f81a3b9c0a5b5531bd12da2db7d9cebad2ad3c4559b636d8727076e012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3ba4f81a3b9c0a5b5531bd12da2db7d9cebad2ad3c4559b636d8727076e012->enter($__internal_cd3ba4f81a3b9c0a5b5531bd12da2db7d9cebad2ad3c4559b636d8727076e012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "'\" class=\"list-group-item active\">Films</a>
                        <a href=\"\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>
                    <h2>Liste des films</h2>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 17
            echo "        <div class=\"col-md-9\">
                    <br />
                    <div class=\"thumbnail\">
                        <div class=\"caption-full\">
                            <h4 class=\"pull-right\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h4>
                            <h4><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h4>
                            <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "synopsis", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ratings\">
                            <p>Date de sortie : <a href=\"\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getDate", array(), "method"), "html", null, true);
            echo "</a></p>
                            <p>Réalisé par : <a href=\"\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "realisateur", array()), "html", null, true);
            echo "</a></p>
                        </div>
                    </div>
                </div>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cd3ba4f81a3b9c0a5b5531bd12da2db7d9cebad2ad3c4559b636d8727076e012->leave($__internal_cd3ba4f81a3b9c0a5b5531bd12da2db7d9cebad2ad3c4559b636d8727076e012_prof);

        
        $__internal_6b36960d689c96a98bc9376613fcf1f3b177126376adc490f5472f81b5a3c2b1->leave($__internal_6b36960d689c96a98bc9376613fcf1f3b177126376adc490f5472f81b5a3c2b1_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  109 => 26,  103 => 23,  97 => 22,  93 => 21,  87 => 17,  83 => 16,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SymfoProjectGitCinemaBundle:Film:layout.html.twig' %}

    {% block title %}Liste des Films{% endblock %}

        {% block body %}

            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"{{ path('page_films')}}'\" class=\"list-group-item active\">Films</a>
                        <a href=\"\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>
                    <h2>Liste des films</h2>
    {% for film in films %}
        <div class=\"col-md-9\">
                    <br />
                    <div class=\"thumbnail\">
                        <div class=\"caption-full\">
                            <h4 class=\"pull-right\">{{ film.titre }}</h4>
                            <h4><a href=\"{{ path('page_films', {'id': film.id}) }}\">{{ film.titre }}</a></h4>
                            <p>{{ film.synopsis }}</p>
                        </div>
                        <div class=\"ratings\">
                            <p>Date de sortie : <a href=\"\">{{ film.getDate() }}</a></p>
                            <p>Réalisé par : <a href=\"\">{{ film.realisateur }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
    {% endfor %}
{% endblock %}", "SymfoProjectGitCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
