<?php

/* backoffice/challenge/add.html.twig */
class __TwigTemplate_ad793773161620f5436a69bdf453a69f58a67adba56b1f07aa629c1cc85e5772 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/challenge/add.html.twig", 1);
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
<h1>Ajouter un défi</h1>
<p>Indiquer les données pour ce défi.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges/save")), "html", null, true);
        echo "\" method=\"post\">

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code :</label>
    <div class=\"col-sm-2\">
      <input name=\"code\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Description :</label>
    <div class=\"col-sm-8\">
      <textarea name=\"description\" rows=\"3\" class=\"form-control\"></textarea>
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Collection associée :</label>
    <div class=\"col-sm-4\">
      <select name=\"collection_id\" class=\"form-control\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 28
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "name", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </select>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer le nouveau défi</button>
      <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "backoffice/challenge/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  85 => 30,  74 => 28,  70 => 27,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les défis{% endblock %}
{% block content %}

<h1>Ajouter un défi</h1>
<p>Indiquer les données pour ce défi.</p>
<form action=\"{{ url( '/backoffice/challenges/save' )}}\" method=\"post\">

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code :</label>
    <div class=\"col-sm-2\">
      <input name=\"code\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Description :</label>
    <div class=\"col-sm-8\">
      <textarea name=\"description\" rows=\"3\" class=\"form-control\"></textarea>
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Collection associée :</label>
    <div class=\"col-sm-4\">
      <select name=\"collection_id\" class=\"form-control\">
        {% for collection in collections %}
          <option value=\"{{ collection.id }}\">{{ collection.name }}</option>
        {% endfor %}
      </select>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer le nouveau défi</button>
      <a href=\"{{ url( '/backoffice/challenges' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
{% endblock %}", "backoffice/challenge/add.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\challenge\\add.html.twig");
    }
}
