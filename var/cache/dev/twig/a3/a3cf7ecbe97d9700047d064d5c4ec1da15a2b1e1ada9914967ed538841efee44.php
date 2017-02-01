<?php

/* SymfoProjectGitCinemaBundle:Film:layout.html.twig */
class __TwigTemplate_5fc018ef7b0cfee5d4770ba529eb601204cdec13534fabce5e2d24265afcd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21eb640233c7df930e9c6aa829fe2c94fb65d2bddf30cdc99d07db65248ce3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21eb640233c7df930e9c6aa829fe2c94fb65d2bddf30cdc99d07db65248ce3bf->enter($__internal_21eb640233c7df930e9c6aa829fe2c94fb65d2bddf30cdc99d07db65248ce3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:layout.html.twig"));

        $__internal_f6017869c279b603bceec203c0024fdfa8156f5dde3c4d7a5d084f3444105370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6017869c279b603bceec203c0024fdfa8156f5dde3c4d7a5d084f3444105370->enter($__internal_f6017869c279b603bceec203c0024fdfa8156f5dde3c4d7a5d084f3444105370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/shop-item.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_accueil");
        echo "\">IIM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\">Cinéma</a>
                    </li>
                    <li>
                        <a href=\"\">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
        <div class=\"container\">
         ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "         </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; IIM Steve 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_21eb640233c7df930e9c6aa829fe2c94fb65d2bddf30cdc99d07db65248ce3bf->leave($__internal_21eb640233c7df930e9c6aa829fe2c94fb65d2bddf30cdc99d07db65248ce3bf_prof);

        
        $__internal_f6017869c279b603bceec203c0024fdfa8156f5dde3c4d7a5d084f3444105370->leave($__internal_f6017869c279b603bceec203c0024fdfa8156f5dde3c4d7a5d084f3444105370_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_74f764fa1369533f9355ebd898c1ed65780221e918d832fb17013f49e8501e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f764fa1369533f9355ebd898c1ed65780221e918d832fb17013f49e8501e89->enter($__internal_74f764fa1369533f9355ebd898c1ed65780221e918d832fb17013f49e8501e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a91e4fc524f1e37d4ca7dfa14615f7fcebcd221eb457e5027af166e9a28b20f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91e4fc524f1e37d4ca7dfa14615f7fcebcd221eb457e5027af166e9a28b20f1->enter($__internal_a91e4fc524f1e37d4ca7dfa14615f7fcebcd221eb457e5027af166e9a28b20f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a91e4fc524f1e37d4ca7dfa14615f7fcebcd221eb457e5027af166e9a28b20f1->leave($__internal_a91e4fc524f1e37d4ca7dfa14615f7fcebcd221eb457e5027af166e9a28b20f1_prof);

        
        $__internal_74f764fa1369533f9355ebd898c1ed65780221e918d832fb17013f49e8501e89->leave($__internal_74f764fa1369533f9355ebd898c1ed65780221e918d832fb17013f49e8501e89_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_d90e9079e5be33779a7f0c375cd929429ced621339e081d17a9912420f5ff5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90e9079e5be33779a7f0c375cd929429ced621339e081d17a9912420f5ff5a2->enter($__internal_d90e9079e5be33779a7f0c375cd929429ced621339e081d17a9912420f5ff5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cc1fb0adf70df92d5c13ffa98774ee7866ea9d70085e9bdd6c8b5ca364f9981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc1fb0adf70df92d5c13ffa98774ee7866ea9d70085e9bdd6c8b5ca364f9981->enter($__internal_9cc1fb0adf70df92d5c13ffa98774ee7866ea9d70085e9bdd6c8b5ca364f9981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9cc1fb0adf70df92d5c13ffa98774ee7866ea9d70085e9bdd6c8b5ca364f9981->leave($__internal_9cc1fb0adf70df92d5c13ffa98774ee7866ea9d70085e9bdd6c8b5ca364f9981_prof);

        
        $__internal_d90e9079e5be33779a7f0c375cd929429ced621339e081d17a9912420f5ff5a2->leave($__internal_d90e9079e5be33779a7f0c375cd929429ced621339e081d17a9912420f5ff5a2_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Film:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  150 => 12,  135 => 86,  129 => 83,  107 => 63,  105 => 62,  88 => 48,  79 => 42,  52 => 18,  46 => 15,  42 => 13,  40 => 12,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    {% block title %}{% endblock %}

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ asset('css/shop-item.css') }}\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('page_accueil') }}\">IIM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"{{ path('page_films') }}\">Cinéma</a>
                    </li>
                    <li>
                        <a href=\"\">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
        <div class=\"container\">
         {% block body %}{% endblock %}
         </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; IIM Steve 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"{{ asset('js/jquery.js') }}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

</body>

</html>", "SymfoProjectGitCinemaBundle:Film:layout.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/layout.html.twig");
    }
}
