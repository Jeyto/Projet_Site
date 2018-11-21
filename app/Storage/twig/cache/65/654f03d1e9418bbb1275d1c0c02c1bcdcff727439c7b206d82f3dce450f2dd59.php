<?php

/* backoffice/children/add.html.twig */
class __TwigTemplate_355eaa7672d1d8d7663fcdb6809c82269a13523c20816ae55bcb0f384c8c17e5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/children/add.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "BackOffice | les enfants";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Ajouter un enfant</h1>

<p>Indiquer les données pour cet enfant.</p>
<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/childrens/save")), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", array()) == "ens")) {
            // line 12
            echo "  <input type=\"hidden\" name=\"classroom_id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "id", array()), "html", null, true);
            echo "\">
";
        } else {
            // line 14
            echo "  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Spécifier sa classe :</label>
    <div class=\"col-sm-4\">
      <select name=\"classroom_id\" class=\"form-control\">

";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 20
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "teachername", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "description", array()), 20), "html", null, true);
                echo " </option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </select>
    </div>
  </div>
";
        }
        // line 26
        echo "  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Pseudo :</label>
    <div class=\"col-sm-2\">
      <input name=\"pseudo\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Avatar :</label>
    <div class=\"col-sm-5\">
        <div class=\"custom-file\">
          <input type=\"file\" name=\"avatar\" class=\"custom-file-input\">
          <label class=\"custom-file-label\">image</label>
        </div>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer le nouvel enfant</button>
      <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/childrens")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>


</form>


";
    }

    // line 56
    public function block_specific_js($context, array $blocks = array())
    {
        // line 57
        echo "<script>
\$(function () {
  \$('#code-generate').click(function() {

})
</script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/children/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  126 => 56,  113 => 46,  91 => 26,  85 => 22,  72 => 20,  68 => 19,  61 => 14,  55 => 12,  53 => 11,  49 => 10,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}

{% block title %}BackOffice | les enfants{% endblock %}

{% block content %}

<h1>Ajouter un enfant</h1>

<p>Indiquer les données pour cet enfant.</p>
<form action=\"{{ url( '/backoffice/childrens/save' )}}\" method=\"post\" enctype=\"multipart/form-data\">
{% if session.role == 'ens' %}
  <input type=\"hidden\" name=\"classroom_id\" value=\"{{ session.classroom.id}}\">
{% else %}
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Spécifier sa classe :</label>
    <div class=\"col-sm-4\">
      <select name=\"classroom_id\" class=\"form-control\">

{% for classroom in classrooms %}
        <option value=\"{{ classroom.id }}\">{{ classroom.teachername }} - {{  classroom.description|truncate(20)  }} </option>
{% endfor %}
      </select>
    </div>
  </div>
{% endif %}
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Pseudo :</label>
    <div class=\"col-sm-2\">
      <input name=\"pseudo\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Avatar :</label>
    <div class=\"col-sm-5\">
        <div class=\"custom-file\">
          <input type=\"file\" name=\"avatar\" class=\"custom-file-input\">
          <label class=\"custom-file-label\">image</label>
        </div>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer le nouvel enfant</button>
      <a href=\"{{ url( '/backoffice/childrens' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>


</form>


{% endblock %}

{% block specific_js %}
<script>
\$(function () {
  \$('#code-generate').click(function() {

})
</script>
{% endblock %}", "backoffice/children/add.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\children\\add.html.twig");
    }
}
