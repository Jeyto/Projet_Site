<?php

/* backoffice/classroom/add.html.twig */
class __TwigTemplate_22698ee21725afa37f8218e62da17b1bc8a963e9cbd8d0750a83c61302c0c708 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/add.html.twig", 1);
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
<h1>Ajouter une  classe</h1>
<p>Indiquer les données pour cette nouvelle classe.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classrooms/save")), "html", null, true);
        echo "\" method=\"post\">
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Nom de l'enseignant :</label>
    <div class=\"col-sm-4\">
      <input name=\"teachername\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Description :</label>
    <div class=\"col-sm-7\">
      <textarea name=\"description\"  class=\"form-control\" rows=\"2\"></textarea>
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code de classe :</label>
    <div class=\"col-sm-7\">
      <input name=\"code\" type=\"text\">
      <button class=\"btn btn-dark btn-sm\" id=\"code-generate\" type=\"button\">générer</button>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer la nouvelle classe</button>
      <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classrooms")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>

";
    }

    // line 41
    public function block_specific_js($context, array $blocks = array())
    {
        // line 42
        echo "<script>
\$(function () {
  \$('#code-generate').click(function() {
    // demander au serveur de fournir un code de classe aléatoire et unique
    \$.getJSON(
      '";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/ajax/codeClassroomGenerate")), "html", null, true);
        echo "',
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
        return "backoffice/classroom/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 47,  91 => 42,  88 => 41,  77 => 33,  48 => 7,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les classes{% endblock %}
{% block content %}

<h1>Ajouter une  classe</h1>
<p>Indiquer les données pour cette nouvelle classe.</p>
<form action=\"{{ url( '/backoffice/classrooms/save' )}}\" method=\"post\">
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Nom de l'enseignant :</label>
    <div class=\"col-sm-4\">
      <input name=\"teachername\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Description :</label>
    <div class=\"col-sm-7\">
      <textarea name=\"description\"  class=\"form-control\" rows=\"2\"></textarea>
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code de classe :</label>
    <div class=\"col-sm-7\">
      <input name=\"code\" type=\"text\">
      <button class=\"btn btn-dark btn-sm\" id=\"code-generate\" type=\"button\">générer</button>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer la nouvelle classe</button>
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
      '{{ url( '/ajax/codeClassroomGenerate' )}}',
      function ( server ) {
        \$('[name=\"code\"]').val(server.code);
      }
    );
  })
})
</script>
{% endblock %}", "backoffice/classroom/add.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\classroom\\add.html.twig");
    }
}
