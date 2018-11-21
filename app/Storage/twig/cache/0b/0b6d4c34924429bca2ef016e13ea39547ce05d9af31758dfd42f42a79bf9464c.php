<?php

/* backoffice/collection/edit.html.twig */
class __TwigTemplate_3572c2e8fc38ae33eba05e6040658bc3b424b74ad62bf3920975688782209aab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/collection/edit.html.twig", 1);
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
        echo "BackOffice | les abécédaires";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Éditer un abédaire</h1>
<p>Indiquer les données pour cet abécédaire.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/collections/edit/" . twig_get_attribute($this->env, $this->source, ($context["collection"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\">
  <div class=\"form-group\">
    <label>Nom :</label>
    <input name=\"name\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collection"] ?? null), "name", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
  </div>
  <button class=\"btn btn-secondary\">Mettre à jour l'abécédaire</button>
  <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
</form>
<p>Voici l'organisation  des lettres pour cet abécédaire.</p>

<div class=\"row\">

  <div class=\"col-3\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Ajouter une LETTRE</h5>
        <div class=\"card-text\">
          <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections/add-letter")), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"collection_id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collection"] ?? null), "id", array()), "html", null, true);
        echo "\">
            <div class=\"form-group\">
              <label>Lettre</label>
              <select name=\"letter\"  class=\"form-control w-50\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "                  <option>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('chr')->getCallable(), array($context["i"])), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              </select>
            </div>
            <div class=\"custom-file\">
              <input type=\"file\" name=\"image\" class=\"custom-file-input\">
              <label class=\"custom-file-label\">image</label>
            </div>
            <button class=\"btn btn-primary mt-2\">Ajouter</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class=\"col-9\">
    <div class=\"row\">
      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["letters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 48
            echo "    <div class=\"card col-2\">
      <img class=\"card-img-top\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/abécédaire/" . twig_get_attribute($this->env, $this->source, $context["letter"], "image", array())))), "html", null, true);
            echo "\">
      <div class=\"card-body text-center\">
        <h5 class=\"card-title\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["letter"], "letter", array()), "html", null, true);
            echo "</h5>
        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/collections/delete-image/" . twig_get_attribute($this->env, $this->source, $context["letter"], "id", array())))), "html", null, true);
            echo "\" class=\"btn btn-primary\">X</a>
      </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "backoffice/collection/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  130 => 52,  126 => 51,  121 => 49,  118 => 48,  114 => 47,  97 => 32,  88 => 30,  84 => 29,  77 => 25,  73 => 24,  59 => 13,  53 => 10,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les abécédaires{% endblock %}
{% block content %}

<h1>Éditer un abédaire</h1>
<p>Indiquer les données pour cet abécédaire.</p>
<form action=\"{{ url( '/backoffice/collections/edit/' ~ collection.id )}}\" method=\"post\">
  <div class=\"form-group\">
    <label>Nom :</label>
    <input name=\"name\" value=\"{{ collection.name }}\" type=\"text\" class=\"form-control\">
  </div>
  <button class=\"btn btn-secondary\">Mettre à jour l'abécédaire</button>
  <a href=\"{{ url( '/backoffice/collections' )}}\" class=\"btn btn-link\">annuler</a>
</form>
<p>Voici l'organisation  des lettres pour cet abécédaire.</p>

<div class=\"row\">

  <div class=\"col-3\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Ajouter une LETTRE</h5>
        <div class=\"card-text\">
          <form action=\"{{ url( '/backoffice/collections/add-letter' )}}\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"collection_id\" value=\"{{ collection.id }}\">
            <div class=\"form-group\">
              <label>Lettre</label>
              <select name=\"letter\"  class=\"form-control w-50\">
                {% for i in 1..26 %}
                  <option>{{ chr( i ) }}</option>
                {% endfor %}
              </select>
            </div>
            <div class=\"custom-file\">
              <input type=\"file\" name=\"image\" class=\"custom-file-input\">
              <label class=\"custom-file-label\">image</label>
            </div>
            <button class=\"btn btn-primary mt-2\">Ajouter</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class=\"col-9\">
    <div class=\"row\">
      {% for letter in letters %}
    <div class=\"card col-2\">
      <img class=\"card-img-top\" src=\"{{ url( '/assets/img/abécédaire/' ~ letter.image ) }}\">
      <div class=\"card-body text-center\">
        <h5 class=\"card-title\">{{ letter.letter }}</h5>
        <a href=\"{{ url( '/backoffice/collections/delete-image/' ~ letter.id )}}\" class=\"btn btn-primary\">X</a>
      </div>
    </div>
{% endfor %}
    </div>
  </div>
</div>
{% endblock %}", "backoffice/collection/edit.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\collection\\edit.html.twig");
    }
}
