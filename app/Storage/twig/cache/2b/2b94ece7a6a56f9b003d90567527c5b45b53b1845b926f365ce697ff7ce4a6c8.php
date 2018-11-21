<?php

/* defi.html.twig */
class __TwigTemplate_15e97212be0f0816bc033b35469bf070031e04207e352973bd3645cfa43c3150 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "defi.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div id=\"defi\" class=\"container\">
    <h1>Alphacorp > accueil</h1>
    <p class=\"description\">
      Démarre le jeu en utilisant ton pseudo et choisi ton défi.
    </p>
    <dl>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 13
            echo "      <dt>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "code", array()), "html", null, true);
            echo "</dt>
      <dd>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "description", array()), "html", null, true);
            echo "</dd>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </dl>
    <table class=\"table table-hover\">
      <thead>
      <tr>
        <th class=\"w-20\"></th>
        <th>pseudo</th>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 23
            echo "      <th class=\" text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "code", array()), "html", null, true);
            echo "</th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </tr>
      </thead>
      <tbody>
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childrens"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
            // line 29
            echo "      <tr>
      <td>
        ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["children"], "avatar", array())) {
                echo "<img class=\"img-fluid avatar\" src=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["children"], "avatar", array())))), "html", null, true);
                echo "\" />";
            }
            // line 32
            echo "      </td>
      <td class=\"align-middle\">
        ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["children"], "pseudo", array()), "html", null, true);
            echo "
      </td>
";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 37
                echo "      <td class=\" text-center align-middle\">
        <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(((("/jouer/" . twig_get_attribute($this->env, $this->source, $context["children"], "id", array())) . "/") . twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array())))), "html", null, true);
                echo "\" class=\"btn btn-outline-info jouer\">JOUER</a>
      </td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </tbody>
  </table>
  </div>
";
    }

    public function getTemplateName()
    {
        return "defi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 43,  132 => 41,  123 => 38,  120 => 37,  116 => 36,  111 => 34,  107 => 32,  101 => 31,  97 => 29,  93 => 28,  88 => 25,  79 => 23,  75 => 22,  67 => 16,  59 => 14,  54 => 13,  50 => 12,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}Home{% endblock %}

{% block content %}
  <div id=\"defi\" class=\"container\">
    <h1>Alphacorp > accueil</h1>
    <p class=\"description\">
      Démarre le jeu en utilisant ton pseudo et choisi ton défi.
    </p>
    <dl>
{% for challenge in challenges %}
      <dt>{{ challenge.code }}</dt>
      <dd>{{ challenge.description }}</dd>
{% endfor %}
    </dl>
    <table class=\"table table-hover\">
      <thead>
      <tr>
        <th class=\"w-20\"></th>
        <th>pseudo</th>
{% for challenge in challenges %}
      <th class=\" text-center\">{{ challenge.code }}</th>
{% endfor %}
      </tr>
      </thead>
      <tbody>
{% for children in childrens %}
      <tr>
      <td>
        {% if children.avatar %}<img class=\"img-fluid avatar\" src=\"{{ url( '/assets/img/avatar/' ~ children.avatar ) }}\" />{% endif %}
      </td>
      <td class=\"align-middle\">
        {{ children.pseudo }}
      </td>
{% for challenge in challenges %}
      <td class=\" text-center align-middle\">
        <a href=\"{{ url( '/jouer/' ~ children.id ~ '/' ~ challenge.id  )}}\" class=\"btn btn-outline-info jouer\">JOUER</a>
      </td>
{% endfor %}
      </tr>
{% endfor %}
      </tbody>
  </table>
  </div>
{% endblock %}", "defi.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\defi.html.twig");
    }
}
