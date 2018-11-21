<?php

/* backoffice/children/list.html.twig */
class __TwigTemplate_7f1a916b0b12ad95fd5d5889f636753f58fe3e5bae3d0a4eb4eb7c12e8c4fb1d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/children/list.html.twig", 1);
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
        echo "BackOffice | les enfants";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Les enfants</h1>
<p>Voici la liste des <b>enfants</b> existants dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/childrens/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter un autre enfant</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Pseudo</th>
      <th scope=\"col\">Avatar</th>
      <th scope=\"col\">Enseignant</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childrens"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
            // line 21
            echo "    <tr>
      <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["children"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["children"], "pseudo", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["children"], "avatar", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["children"], "avatar", array())))), "html", null, true);
                echo "\" />";
            }
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["children"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["teachername"] ?? null) : null), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["children"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["created_at"] ?? null) : null), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/childrens/edit/" . twig_get_attribute($this->env, $this->source, $context["children"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/childrens/delete/" . twig_get_attribute($this->env, $this->source, $context["children"], "id", array())))), "html", null, true);
            echo "\">supprimer</a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "backoffice/children/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  99 => 29,  95 => 28,  90 => 26,  86 => 25,  78 => 24,  74 => 23,  70 => 22,  67 => 21,  63 => 20,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les enfants{% endblock %}
{% block content %}

<h1>Les enfants</h1>
<p>Voici la liste des <b>enfants</b> existants dans l'application.</p>
<a href=\"{{ url( '/backoffice/childrens/add' )}}\" class=\"btn btn-primary\">Ajouter un autre enfant</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Pseudo</th>
      <th scope=\"col\">Avatar</th>
      <th scope=\"col\">Enseignant</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
    {% for children in childrens %}
    <tr>
      <th scope=\"row\">{{ children.id  }}</th>
      <td>{{ children.pseudo }}</td>
      <td>{% if children.avatar %}<img src=\"{{ url( '/assets/img/avatar/' ~ children.avatar ) }}\" />{% endif %}</td>
      <td>{{ children[ 'teachername' ] }}</td>
      <td>{{ children[ 'created_at' ] }}</td>
      <td>
        <a href=\"{{ url( '/backoffice/childrens/edit/' ~ children.id  )}}\">éditer</a>
        <a href=\"{{ url( '/backoffice/childrens/delete/' ~ children.id  )}}\">supprimer</a>
      </td>
    </tr>
    {% endfor %}

{% endblock %}", "backoffice/children/list.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\children\\list.html.twig");
    }
}
