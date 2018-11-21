<?php

/* backoffice/collection/list.html.twig */
class __TwigTemplate_ce3f7c4c7b4e6bf77553a9d2ea0b1dddd52e0babaf48ba0b264cede40c1baca1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/collection/list.html.twig", 1);
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
<h1>Les abécédaires</h1>
<p>Voici la liste des <b>abécédaires</b> déjà mis en place dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter un nouvel abécédaire</a>
<table class=\"table w-30 mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 18
            echo "    <tr>
      <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "name", array()), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/collections/edit/" . twig_get_attribute($this->env, $this->source, $context["collection"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/collections/delete/" . twig_get_attribute($this->env, $this->source, $context["collection"], "id", array())))), "html", null, true);
            echo "\">supprimer</a>
      </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "backoffice/collection/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  80 => 23,  76 => 22,  71 => 20,  67 => 19,  64 => 18,  60 => 17,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les abécédaires{% endblock %}
{% block content %}

<h1>Les abécédaires</h1>
<p>Voici la liste des <b>abécédaires</b> déjà mis en place dans l'application.</p>
<a href=\"{{ url( '/backoffice/collections/add' )}}\" class=\"btn btn-primary\">Ajouter un nouvel abécédaire</a>
<table class=\"table w-30 mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for collection in collections %}
    <tr>
      <th scope=\"row\">{{ collection.id }}</th>
      <td>{{ collection.name }}</td>
      <td>
        <a href=\"{{ url( '/backoffice/collections/edit/' ~ collection.id )}}\">éditer</a>
        <a href=\"{{ url( '/backoffice/collections/delete/' ~  collection.id )}}\">supprimer</a>
      </td>
    </tr>
{% endfor %}

{% endblock %}", "backoffice/collection/list.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\collection\\list.html.twig");
    }
}
