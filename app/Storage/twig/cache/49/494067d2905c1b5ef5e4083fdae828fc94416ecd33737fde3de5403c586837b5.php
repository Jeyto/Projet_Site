<?php

/* backoffice/index.html.twig */
class __TwigTemplate_75ae3098698192edc24251231d2a92716de2a6d83e26e37c689ded9ab0729e14 extends Twig_Template
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
        // line 6
        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["session"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["role"] ?? null) : null) == "ens")) {
            // line 7
            echo "  <h2>Information sur votre classe</h2>
  <ul class=\"list-group\">
    <li class=\"list-group-item\">
      <small class=\"text-black-50 float-right\">le compte a été crée le ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "createdAt", array()), "html", null, true);
            echo "</small>
      <p>Votre compte se nomme : <span class=\"font-weight-bold\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "teachername", array()), "html", null, true);
            echo "</span></p>
    </li>
    <li class=\"list-group-item\">
      <p>Votre code de classe est  : <span class=\"font-weight-bold\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array()), "html", null, true);
            echo "</span> </p>
    </li>
    <li class=\"list-group-item\">
      <p>
        Voici le <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/")), "html", null, true);
            echo "\" target=\"blank\">lien</a> pour travailler avec les enfants dans la classe.
      </p>
    </li>

  </ul>
";
        }
        // line 24
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
        return array (  78 => 24,  69 => 18,  62 => 14,  56 => 11,  52 => 10,  47 => 7,  45 => 6,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice{% endblock %}
{% block content %}
<div class=\"container\">
{#     {{ dump( session )}}  #}
{% if session[ 'role' ] == 'ens' %}
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
        Voici le <a href=\"{{ url( '/' ) }}\" target=\"blank\">lien</a> pour travailler avec les enfants dans la classe.
      </p>
    </li>

  </ul>
{% endif %}

</div>
{% endblock %}", "backoffice/index.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\index.html.twig");
    }
}
