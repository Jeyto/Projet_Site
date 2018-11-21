<?php

/* backoffice/challenge/edit.html.twig */
class __TwigTemplate_b09766a469753e70c0eecc007c7e48da3afeeec457b0f8885ba0d573047ab0fd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/challenge/edit.html.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/challenges/edit/" . twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\">

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code :</label>
    <div class=\"col-sm-2\">
      <input name=\"code\" type=\"text\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "code", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Description :</label>
    <div class=\"col-sm-8\">
      <textarea name=\"description\" rows=\"3\" class=\"form-control\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Mettre à jour le  défi</button>
      <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "backoffice/challenge/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  65 => 19,  55 => 12,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les défis{% endblock %}
{% block content %}

<h1>Ajouter un défi</h1>
<p>Indiquer les données pour ce défi.</p>
<form action=\"{{ url( '/backoffice/challenges/edit/' ~ challenge.id )}}\" method=\"post\">

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code :</label>
    <div class=\"col-sm-2\">
      <input name=\"code\" type=\"text\" class=\"form-control\" value=\"{{ challenge.code }}\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Description :</label>
    <div class=\"col-sm-8\">
      <textarea name=\"description\" rows=\"3\" class=\"form-control\">{{ challenge.description }}</textarea>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Mettre à jour le  défi</button>
      <a href=\"{{ url( '/backoffice/challenges' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
{% endblock %}", "backoffice/challenge/edit.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\challenge\\edit.html.twig");
    }
}
