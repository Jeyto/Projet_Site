<?php

/* backoffice/children/select.html.twig */
class __TwigTemplate_55a4f343a201014ce3a2b9df8baab34a70cd9bedc434e2dcb719a0f5ed340401 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/children/select.html.twig", 1);
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
<p>Voici la liste des <b>enfants</b> associés à votre classe.</p>
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
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childrens"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
            // line 20
            echo "    <tr>
      <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["children"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["children"], "pseudo", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["children"], "avatar", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["children"], "avatar", array())))), "html", null, true);
                echo "\" />";
            }
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["children"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["created_at"] ?? null) : null), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/childrens/edit/" . twig_get_attribute($this->env, $this->source, $context["children"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/childrens/delete/" . twig_get_attribute($this->env, $this->source, $context["children"], "id", array())))), "html", null, true);
            echo "\">supprimer</a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "backoffice/children/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  94 => 27,  90 => 26,  85 => 24,  77 => 23,  73 => 22,  69 => 21,  66 => 20,  62 => 19,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les enfants{% endblock %}
{% block content %}

<h1>Les enfants</h1>
<p>Voici la liste des <b>enfants</b> associés à votre classe.</p>
<a href=\"{{ url( '/backoffice/childrens/add' )}}\" class=\"btn btn-primary\">Ajouter un autre enfant</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Pseudo</th>
      <th scope=\"col\">Avatar</th>
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
      <td>{{ children[ 'created_at' ] }}</td>
      <td>
        <a href=\"{{ url( '/backoffice/childrens/edit/' ~ children.id  )}}\">éditer</a>
        <a href=\"{{ url( '/backoffice/childrens/delete/' ~ children.id  )}}\">supprimer</a>
      </td>
    </tr>
    {% endfor %}

{% endblock %}", "backoffice/children/select.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\children\\select.html.twig");
    }
}
