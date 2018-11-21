<?php

/* backoffice/admin/admin.html.twig */
class __TwigTemplate_7c3cbb4d995efc034a63a147497a341005ac6741fcc998737fbc77d97dd1859d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/admin/admin.html.twig", 1);
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
        echo "BackOffice | les administrateurs";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Les administrateurs</h1>
<p>Voici la liste des administrateurs de l'application.</p>
<table class=\"table\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Mot de passe (crypté)</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            echo " 
    <tr>
      <th scope=\"row\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "name", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "password", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "backoffice/admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  71 => 20,  67 => 19,  63 => 18,  56 => 16,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les administrateurs{% endblock %}
{% block content %}

<h1>Les administrateurs</h1>
<p>Voici la liste des administrateurs de l'application.</p>
<table class=\"table\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Mot de passe (crypté)</th>
    </tr>
  </thead>
  <tbody>
  {% for admin in admins %} 
    <tr>
      <th scope=\"row\">{{ admin.id  }}</th>
      <td>{{ admin.name  }}</td>
      <td>{{ admin.password }}</td>
    </tr>
  {% endfor %}

{% endblock %}", "backoffice/admin/admin.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\admin\\admin.html.twig");
    }
}
