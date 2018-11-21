<?php

/* layout.html.twig */
class __TwigTemplate_2f71e332467235455e1a7c1f7681f63e3864118599c38bb38edd5fb0f79d6cbd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'additional_css' => array($this, 'block_additional_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
            'additional_js' => array($this, 'block_additional_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Human corp - : ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- Favicon-->
  <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/img/favicon.ico")), "html", null, true);
        echo "\">
  ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 16
        echo "</head>
<body>

";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
  ";
        // line 21
        $this->displayBlock('js', $context, $blocks);
        // line 29
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        // line 10
        echo "  <!-- @@@ CSS -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
   <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
  ";
        // line 13
        $this->displayBlock('additional_css', $context, $blocks);
        // line 14
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/app.css")), "html", null, true);
        echo "\">
  ";
    }

    // line 13
    public function block_additional_css($context, array $blocks = array())
    {
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    // line 21
    public function block_js($context, array $blocks = array())
    {
        // line 22
        echo "  <!-- @@@ JS -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
  ";
        // line 26
        $this->displayBlock('additional_js', $context, $blocks);
        // line 27
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/app.js")), "html", null, true);
        echo "\"></script>
  ";
    }

    // line 26
    public function block_additional_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  107 => 27,  105 => 26,  99 => 22,  96 => 21,  91 => 19,  86 => 13,  79 => 14,  77 => 13,  72 => 10,  69 => 9,  64 => 6,  59 => 29,  57 => 21,  54 => 20,  52 => 19,  47 => 16,  45 => 9,  41 => 8,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Human corp - : {% block title %}{% endblock %}</title>
  <!-- Favicon-->
  <link rel=\"shortcut icon\" href=\"{{ url( '/assets/img/favicon.ico' ) }}\">
  {% block css %}
  <!-- @@@ CSS -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
   <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
  {% block additional_css %}{% endblock %}
  <link rel=\"stylesheet\" href=\"{{ url( '/assets/css/app.css' )  }}\">
  {% endblock %}
</head>
<body>

{% block content %}{% endblock %}

  {% block js %}
  <!-- @@@ JS -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
  {% block additional_js %}{% endblock %}
  <script src=\"{{ url( '/assets/js/app.js' )  }}\"></script>
  {% endblock %}
</body>
</html>", "layout.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018-version-etudiant\\app\\Views\\layout.html.twig");
    }
}
