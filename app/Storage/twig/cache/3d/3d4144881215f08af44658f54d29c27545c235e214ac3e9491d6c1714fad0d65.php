<?php

/* backoffice/collection/add.html.twig */
class __TwigTemplate_1f7771155b6ae9b6b36561cd9666f0dc8a9569bd211bef8dc9c9015470673873 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/collection/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "BackOffice | les abécédaires";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Ajouter un abédaire</h1>
<p>Indiquer les données pour cet abécédaire.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections/save")), "html", null, true);
        echo "\" method=\"post\">
  <div class=\"form-group\">
    <label>Nom :</label>
    <input name=\"name\" type=\"text\" class=\"form-control\" aria-describedby=\"emailHelp\">
  </div>
  <button class=\"btn btn-secondary\">Enregistrer le nouvel abécédaire</button>
  <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
</form>

";
    }

    public function getTemplateName()
    {
        return "backoffice/collection/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les abécédaires{% endblock %}
{% block content %}

<h1>Ajouter un abédaire</h1>
<p>Indiquer les données pour cet abécédaire.</p>
<form action=\"{{ url( '/backoffice/collections/save' )}}\" method=\"post\">
  <div class=\"form-group\">
    <label>Nom :</label>
    <input name=\"name\" type=\"text\" class=\"form-control\" aria-describedby=\"emailHelp\">
  </div>
  <button class=\"btn btn-secondary\">Enregistrer le nouvel abécédaire</button>
  <a href=\"{{ url( '/backoffice/collections' )}}\" class=\"btn btn-link\">annuler</a>
</form>

{% endblock %}
", "backoffice/collection/add.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\collection\\add.html.twig");
    }
}
