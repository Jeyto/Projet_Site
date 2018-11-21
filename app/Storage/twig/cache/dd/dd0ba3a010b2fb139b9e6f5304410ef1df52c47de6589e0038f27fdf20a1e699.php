<?php

/* backoffice/challenge/list.html.twig */
class __TwigTemplate_4482e787cbed705ec1c7b6391e94e0ebc2e1bfdadbec53b4376c4311ce1aa5af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/challenge/list.html.twig", 1);
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
        echo "BackOffice | les défis";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Les défis</h1>
<p>Voici la liste des <b>défis</b> déjà existants dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter un autre défi</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Code</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 20
            echo "    <tr>
      <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "description", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "code", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "created_at", array()), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/challenges/edit/" . twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/challenges/delete/" . twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array())))), "html", null, true);
            echo "\">supprimer</a>
      </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "backoffice/challenge/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  90 => 27,  86 => 26,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  66 => 20,  62 => 19,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les défis{% endblock %}
{% block content %}

<h1>Les défis</h1>
<p>Voici la liste des <b>défis</b> déjà existants dans l'application.</p>
<a href=\"{{ url( '/backoffice/challenges/add' )}}\" class=\"btn btn-primary\">Ajouter un autre défi</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Code</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for challenge in challenges %}
    <tr>
      <th scope=\"row\">{{ challenge.id }}</th>
      <td>{{ challenge.description }}</td>
      <td>{{ challenge.code }}</td>
      <td>{{ challenge.created_at }}</td>
      <td>
        <a href=\"{{ url( '/backoffice/challenges/edit/' ~ challenge.id )}}\">éditer</a>
        <a href=\"{{ url( '/backoffice/challenges/delete/' ~ challenge.id )}}\">supprimer</a>
      </td>
    </tr>
{% endfor %}

{% endblock %}", "backoffice/challenge/list.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\challenge\\list.html.twig");
    }
}
