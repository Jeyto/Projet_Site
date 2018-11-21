<?php

/* backoffice/challenge/select.html.twig */
class __TwigTemplate_01497da1644bfcedc9b9b776e8980815510a4b7b953951b1f14ce5a7f4a4aa5e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/challenge/select.html.twig", 1);
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

<p>Selectionner les défis que vous allez présenter aux enfants de votre classe.</p>
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/challenges/select/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())))), "html", null, true);
        echo "\" method=\"post\" >
  <input type=\"hidden\" name=\"classroom_id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "id", array()), "html", null, true);
        echo "\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 11
            echo "  <div class=\"form-check ml-5\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array()), "html", null, true);
            echo "\" name=\"defi[]\" ";
            if (twig_get_attribute($this->env, $this->source, $context["challenge"], "checked", array())) {
                echo "checked";
            }
            echo " >

    <label class=\"form-check-label\">
      <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "code", array()), "html", null, true);
            echo "</b> :: 
      ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "description", array()), "html", null, true);
            echo "
    </label>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
<button class=\"btn btn-secondary\">Enregistrer</button>
      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
</form>
";
    }

    public function getTemplateName()
    {
        return "backoffice/challenge/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 20,  77 => 16,  73 => 15,  63 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les défis{% endblock %}
{% block content %}

<h1>Les défis</h1>

<p>Selectionner les défis que vous allez présenter aux enfants de votre classe.</p>
<form action=\"{{ url( '/backoffice/challenges/select/' ~ session.classroom.code )}}\" method=\"post\" >
  <input type=\"hidden\" name=\"classroom_id\" value=\"{{ session.classroom.id }}\">
{% for challenge in challenges %}
  <div class=\"form-check ml-5\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"{{ challenge.id }}\" name=\"defi[]\" {% if challenge.checked %}checked{% endif %} >

    <label class=\"form-check-label\">
      <b>{{ challenge.code }}</b> :: 
      {{ challenge.description }}
    </label>
  </div>
{% endfor %}
</ul>
<button class=\"btn btn-secondary\">Enregistrer</button>
      <a href=\"{{ url( '/backoffice' )}}\" class=\"btn btn-link\">annuler</a>
</form>
{% endblock %}", "backoffice/challenge/select.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\challenge\\select.html.twig");
    }
}
