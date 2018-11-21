<?php

/* home.html.twig */
class __TwigTemplate_c14992a4d3037eea747f987addadcdba19a5437f4549994303de39c041399904 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'additional_css' => array($this, 'block_additional_css'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"bg\"></div>
  <div class=\"container\">
    <h1>Alphacorp > accueil</h1>
    <p class=\"description\">
      Ce site se destine à tous les élèves ne connaissant pas l'alphabet ou qui ne sont pas à l'aise les lettres.<br />
      Ils pourront trouver quelques activités ludiques et ainsi travailler autour de l'alphabet.<br />

      Notamment, les élèves vont être mobilisés pour représenter chaque lettre avec leurs corps.<br /> C'est un exercice de groupe motivant mais pas toujours facile.<br />
    </p>
  </div>
";
    }

    // line 15
    public function block_additional_css($context, array $blocks = array())
    {
        // line 16
        echo "<style>
html {
  font-size: 22px
}
body {
  height: 100vh;
  width: 100vw;
}
.bg {
  width: 100%;
  position: absolute;
  background-image: url(\"assets/img/children-1.jpg\");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: 1;
  opacity: 0.4
}
.container {
  z-index: 10;
  text-align: center;
  background-color: white: ;
}
.description {
  text-align: justify;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  57 => 15,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block title %}Home{% endblock %}
{% block content %}
  <div class=\"bg\"></div>
  <div class=\"container\">
    <h1>Alphacorp > accueil</h1>
    <p class=\"description\">
      Ce site se destine à tous les élèves ne connaissant pas l'alphabet ou qui ne sont pas à l'aise les lettres.<br />
      Ils pourront trouver quelques activités ludiques et ainsi travailler autour de l'alphabet.<br />

      Notamment, les élèves vont être mobilisés pour représenter chaque lettre avec leurs corps.<br /> C'est un exercice de groupe motivant mais pas toujours facile.<br />
    </p>
  </div>
{% endblock %}
{% block additional_css %}
<style>
html {
  font-size: 22px
}
body {
  height: 100vh;
  width: 100vw;
}
.bg {
  width: 100%;
  position: absolute;
  background-image: url(\"assets/img/children-1.jpg\");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: 1;
  opacity: 0.4
}
.container {
  z-index: 10;
  text-align: center;
  background-color: white: ;
}
.description {
  text-align: justify;
}
</style>
{% endblock %}", "home.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\home.html.twig");
    }
}
