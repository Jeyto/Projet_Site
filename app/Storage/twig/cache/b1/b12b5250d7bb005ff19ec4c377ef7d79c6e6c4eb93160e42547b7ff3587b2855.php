<?php

/* backoffice/classroom/edit.html.twig */
class __TwigTemplate_08d8b9db819d74162090e5101ebf0105a85bea02237f8d0f08ba0bff16fb8651 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'specific_js' => array($this, 'block_specific_js'),
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
<h1>Éditer les informations d'une  classe</h1>
<p>Consulter les données pour cette classe.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, "/backoffice/classrooms/edit/", "classroom", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Nom de l'enseignant :</label>
    <div class=\"col-sm-4\">
      <input name=\"teachername\" type=\"text\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "teachername", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Description :</label>
    <div class=\"col-sm-7\">
      <textarea name=\"description\"  class=\"form-control\" rows=\"2\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code de classe :</label>
    <div class=\"col-sm-7\">
      <input name=\"code\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array()), "html", null, true);
        echo "\">
      <button class=\"btn btn-dark btn-sm\" id=\"code-generate\" type=\"button\">générer</button>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Mettre à jour les données de la  classe</button>
      <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classrooms")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>


</form>


";
    }

    // line 43
    public function block_specific_js($context, array $blocks = array())
    {
        // line 44
        echo "<script>
\$(function () {
  \$('#code-generate').click(function() {
    // demander au serveur de fournir un code de classe aléatoire et unique
    \$.getJSON(
      '/s3.projet/ajax/codeClassroomGenerate',
      function ( server ) {
        \$('[name=\"code\"]').val(server.code);
      }
    );
  })
})
</script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/classroom/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 44,  99 => 43,  86 => 33,  75 => 25,  65 => 18,  55 => 11,  48 => 7,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les classes{% endblock %}
{% block content %}

<h1>Éditer les informations d'une  classe</h1>
<p>Consulter les données pour cette classe.</p>
<form action=\"{{ url( '/backoffice/classrooms/edit/' . classroom.id  )}}\" method=\"post\">
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Nom de l'enseignant :</label>
    <div class=\"col-sm-4\">
      <input name=\"teachername\" type=\"text\" class=\"form-control\" value=\"{{ classroom.teachername }}\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Description :</label>
    <div class=\"col-sm-7\">
      <textarea name=\"description\"  class=\"form-control\" rows=\"2\">{{ classroom.description }}</textarea>
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code de classe :</label>
    <div class=\"col-sm-7\">
      <input name=\"code\" type=\"text\" value=\"{{ classroom.code }}\">
      <button class=\"btn btn-dark btn-sm\" id=\"code-generate\" type=\"button\">générer</button>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Mettre à jour les données de la  classe</button>
      <a href=\"{{ url( '/backoffice/classrooms' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>


</form>


{% endblock %}

{% block specific_js %}
<script>
\$(function () {
  \$('#code-generate').click(function() {
    // demander au serveur de fournir un code de classe aléatoire et unique
    \$.getJSON(
      '/s3.projet/ajax/codeClassroomGenerate',
      function ( server ) {
        \$('[name=\"code\"]').val(server.code);
      }
    );
  })
})
</script>
{% endblock %}", "backoffice/classroom/edit.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\classroom\\edit.html.twig");
    }
}
