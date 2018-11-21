<?php

/* backoffice/children/edit.html.twig */
class __TwigTemplate_466f1b8f0bdaa83148122900aa09e2a020e697857b331f08599e16094f2bef8f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/children/edit.html.twig", 1);
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
<h1>Éditer les informations d'une  classe</h1>
<p>Consulter/corriger les données pour cet enfant.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/childrens/edit/" . twig_get_attribute($this->env, $this->source, ($context["children"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\"  enctype=\"multipart/form-data\">
  <input type=\"hidden\" name=\"classroom_id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["children"] ?? null), "classroom_id", array()), "html", null, true);
        echo "\">
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Pseudo :</label>
    <div class=\"col-sm-4\">
      <input name=\"pseudo\" type=\"text\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["children"] ?? null), "pseudo", array()), "html", null, true);
        echo "\">
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
      <button class=\"btn btn-secondary\">Mettre à jour les données de l'enfant</button>
      <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/childrens")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "backoffice/children/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  58 => 12,  51 => 8,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les classes{% endblock %}
{% block content %}

<h1>Éditer les informations d'une  classe</h1>
<p>Consulter/corriger les données pour cet enfant.</p>
<form action=\"{{ url( '/backoffice/childrens/edit/' ~ children.id )}}\" method=\"post\"  enctype=\"multipart/form-data\">
  <input type=\"hidden\" name=\"classroom_id\" value=\"{{ children.classroom_id }}\">
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Pseudo :</label>
    <div class=\"col-sm-4\">
      <input name=\"pseudo\" type=\"text\" class=\"form-control\" value=\"{{ children.pseudo }}\">
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
      <button class=\"btn btn-secondary\">Mettre à jour les données de l'enfant</button>
      <a href=\"{{ url( '/backoffice/childrens' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>

{% endblock %}", "backoffice/children/edit.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\children\\edit.html.twig");
    }
}
