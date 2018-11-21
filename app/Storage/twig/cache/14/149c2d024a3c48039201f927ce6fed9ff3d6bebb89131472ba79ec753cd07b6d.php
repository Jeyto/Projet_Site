<?php

/* backoffice/index.html.twig */
class __TwigTemplate_8742ae96b60cd3d229df8901ca2c65b7b17ea7fdbba3364c0980ad9520f1caea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/index.html.twig", 1);
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
        echo "BackOffice";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", array()) == "ens")) {
            // line 6
            echo "  <h2>Information sur votre classe</h2>
  <ul class=\"list-group\">
    <li class=\"list-group-item\">
      <small class=\"text-black-50 float-right\">le compte a été crée le ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "createdAt", array()), "html", null, true);
            echo "</small>
      <p>Votre compte se nomme : <span class=\"font-weight-bold\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "teachername", array()), "html", null, true);
            echo "</span></p>
    </li>
    <li class=\"list-group-item\">
      <p>Votre code de classe est  : <span class=\"font-weight-bold\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array()), "html", null, true);
            echo "</span> </p>
    </li>
    <li class=\"list-group-item\">
      <p>
        Voici le <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())) . "/defi"))), "html", null, true);
            echo "\" target=\"blank\">lien</a> pour travailler avec les enfants dans la classe.
      </p>
    </li>

  </ul>
";
        }
        // line 23
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "backoffice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  69 => 17,  62 => 13,  56 => 10,  52 => 9,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice{% endblock %}
{% block content %}
<div class=\"container\">
{% if session.role == 'ens' %}
  <h2>Information sur votre classe</h2>
  <ul class=\"list-group\">
    <li class=\"list-group-item\">
      <small class=\"text-black-50 float-right\">le compte a été crée le {{ classroom.createdAt }}</small>
      <p>Votre compte se nomme : <span class=\"font-weight-bold\">{{ classroom.teachername }}</span></p>
    </li>
    <li class=\"list-group-item\">
      <p>Votre code de classe est  : <span class=\"font-weight-bold\">{{ classroom.code }}</span> </p>
    </li>
    <li class=\"list-group-item\">
      <p>
        Voici le <a href=\"{{ url( '/classe/' ~  session.classroom.code ~ '/defi' ) }}\" target=\"blank\">lien</a> pour travailler avec les enfants dans la classe.
      </p>
    </li>

  </ul>
{% endif %}

</div>
{% endblock %}", "backoffice/index.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018-version-etudiant\\app\\Views\\backoffice\\index.html.twig");
    }
}
