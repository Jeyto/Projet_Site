<?php

/* défi1.html.twig */
class __TwigTemplate_9b389f5c1ffaa85f0aba3deddbd3363eff8b85d47895782600b0e1dc7aa36faf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "défi1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'additional_js' => array($this, 'block_additional_js'),
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
        echo "Défi 1";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
  <div class=\"container\">
    <h1>Alphacorp > défi 1</h1>
    <p>Il faut, à coté de chaque photo, indiquer la lettre qui est représentée.</p>
    <table class=\"table\">
      <tbody>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "        <tr>
          <td>
            <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/abécédaire/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", array())))), "html", null, true);
            echo "\" class=\"img-fluid\">
            
          </td>
          <td>
            <input type=\"text\" class=\"form-control response\" >
            <button class=\"btn btn-outline-info check\" data-answer=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "letter", array()), "html", null, true);
            echo "\">vérifier</button>
          </td>
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </tbody>
    </table>
  </div>
";
    }

    // line 29
    public function block_additional_js($context, array $blocks = array())
    {
        // line 30
        echo "<script>
\$( function() {
  \$( '.check' ).click( function () {
    var \$this = \$(this);
    if ( \$this.data( 'answer' ) == \$this.parent().find( '.response').val() ) {
      console.log( 'bonne réponse.');
    } else {
      console.log( 'recommencer.');
    }
  })

})
</script>
";
    }

    public function getTemplateName()
    {
        return "défi1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  84 => 29,  77 => 24,  67 => 20,  59 => 15,  55 => 13,  51 => 12,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}Défi 1{% endblock %}

{% block content %}

  <div class=\"container\">
    <h1>Alphacorp > défi 1</h1>
    <p>Il faut, à coté de chaque photo, indiquer la lettre qui est représentée.</p>
    <table class=\"table\">
      <tbody>
{% for image in challenge.images %}
        <tr>
          <td>
            <img src=\"{{ url( '/assets/img/abécédaire/' ~ image.image ) }}\" class=\"img-fluid\">
            
          </td>
          <td>
            <input type=\"text\" class=\"form-control response\" >
            <button class=\"btn btn-outline-info check\" data-answer=\"{{ image.letter }}\">vérifier</button>
          </td>
        </tr>
{% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}

{% block additional_js %}
<script>
\$( function() {
  \$( '.check' ).click( function () {
    var \$this = \$(this);
    if ( \$this.data( 'answer' ) == \$this.parent().find( '.response').val() ) {
      console.log( 'bonne réponse.');
    } else {
      console.log( 'recommencer.');
    }
  })

})
</script>
{% endblock %}
", "défi1.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\défi1.html.twig");
    }
}
