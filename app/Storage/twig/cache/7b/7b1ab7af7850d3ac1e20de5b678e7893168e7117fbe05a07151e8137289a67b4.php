<?php

/* backoffice/classroom/list.html.twig */
class __TwigTemplate_e760d905dc5a7fb4a05aa5541b319197ed406523c50a42329a86b199d32fbb53 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/list.html.twig", 1);
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
        echo "BackOffice | les classes";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Les classes</h1>
<p>Voici la liste des <b>classes</b> déjà mises en place dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classrooms/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter une nouvelle classe</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Enseignant</th>
      <th scope=\"col\">Code</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 21
            echo "    <tr>
      <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "description", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "teachername", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "code", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "created_at", array()), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/classrooms/edit/" . twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/classrooms/delete/" . twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array())))), "html", null, true);
            echo "\">supprimer</a>
      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "backoffice/classroom/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  95 => 29,  91 => 28,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  67 => 21,  63 => 20,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les classes{% endblock %}
{% block content %}

<h1>Les classes</h1>
<p>Voici la liste des <b>classes</b> déjà mises en place dans l'application.</p>
<a href=\"{{ url( '/backoffice/classrooms/add' )}}\" class=\"btn btn-primary\">Ajouter une nouvelle classe</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Enseignant</th>
      <th scope=\"col\">Code</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for classroom in classrooms %}
    <tr>
      <th scope=\"row\">{{ classroom.id }}</th>
      <td>{{ classroom.description }}</td>
      <td>{{ classroom.teachername }}</td>
      <td>{{ classroom.code  }}</td>
      <td>{{ classroom.created_at }}</td>
      <td>
        <a href=\"{{ url( '/backoffice/classrooms/edit/' ~ classroom.id  )}}\">éditer</a>
        <a href=\"{{ url( '/backoffice/classrooms/delete/' ~ classroom.id )}}\">supprimer</a>
      </td>
    </tr>
  {% endfor %}

{% endblock %}", "backoffice/classroom/list.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\classroom\\list.html.twig");
    }
}
