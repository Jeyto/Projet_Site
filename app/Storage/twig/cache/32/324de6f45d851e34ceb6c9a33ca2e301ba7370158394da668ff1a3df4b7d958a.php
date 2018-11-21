<?php

/* backoffice/template.html.twig */
class __TwigTemplate_9da51e54af7fcd4640ff5a01563d6d056d8eab3a50ea7f43ef114d8dcd4ce48d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'specific_css' => array($this, 'block_specific_css'),
            'content' => array($this, 'block_content'),
            'specific_js' => array($this, 'block_specific_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"robots\" content=\"all,follow\">

  <title>Galerie - ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- Favicon-->
  <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/img/favicon.ico")), "html", null, true);
        echo "\">

  <!-- @@@ CSS -->
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\" rel=\"stylesheet\">
  <link href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/app-bo.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        // line 21
        $this->displayBlock('specific_css', $context, $blocks);
        // line 22
        echo "</head>

<body>

<div class=\"wrapper\">
  <!-- Sidebar  -->
  <nav id=\"sidebar\">
    <div class=\"sidebar-header text-center\">
        <h3>AlphaCorps <span class=\"text-black-50\">BackOffice</span></h3>
    </div>
    <ul class=\"list-unstyled components\">
      <p>Rôle: ????</p>
      <li>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice")), "html", null, true);
        echo "\">
          <i class=\"fas fa-home\"></i>
          Accueil
        </a>
      </li>

      <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/admins")), "html", null, true);
        echo "\">
          <i class=\"fas fa-users-cog\"></i>
          Les admin
        </a>
      </li>

      <li>
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges")), "html", null, true);
        echo "\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
      </li>
    </ul>

  </nav>

  <!-- Page Content  -->
  <div id=\"content\">

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
      <div class=\"container-fluid\">

        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
            <i class=\"fas fa-bars\"></i>
        </button>
        <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fas fa-align-justify\"></i>
        </button>


      </div>
    </nav>

    <div class=\"content-wrapper\">
      ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "    </div>

  </div>
    
  <!-- Dark Overlay element -->
  <div class=\"overlay\"></div>

</div>

  <!-- @@@ JS @@@ -->
  <script
    src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
    integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
    crossorigin=\"anonymous\"></script>
  <script 
    src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
    integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>
  <script 
    src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
    integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
    crossorigin=\"anonymous\"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js\"></script>
  <!-- Main File-->
  <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/app-bo.js")), "html", null, true);
        echo "\"></script>
  ";
        // line 104
        $this->displayBlock('specific_js', $context, $blocks);
        // line 105
        echo "</body>

</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
    }

    // line 21
    public function block_specific_css($context, array $blocks = array())
    {
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
    }

    // line 104
    public function block_specific_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "backoffice/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 104,  177 => 76,  172 => 21,  167 => 11,  161 => 105,  159 => 104,  155 => 103,  127 => 77,  125 => 76,  95 => 49,  85 => 42,  75 => 35,  60 => 22,  58 => 21,  54 => 20,  44 => 13,  39 => 11,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"robots\" content=\"all,follow\">

  <title>Galerie - {% block title %}{% endblock %}</title>
  <!-- Favicon-->
  <link rel=\"shortcut icon\" href=\"{{ url( '/assets/img/favicon.ico' ) }}\">

  <!-- @@@ CSS -->
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\" rel=\"stylesheet\">
  <link href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css\" rel=\"stylesheet\">
  <link href=\"{{ url( '/assets/css/app-bo.css' ) }}\" rel=\"stylesheet\">
  {% block specific_css %}{% endblock %}
</head>

<body>

<div class=\"wrapper\">
  <!-- Sidebar  -->
  <nav id=\"sidebar\">
    <div class=\"sidebar-header text-center\">
        <h3>AlphaCorps <span class=\"text-black-50\">BackOffice</span></h3>
    </div>
    <ul class=\"list-unstyled components\">
      <p>Rôle: ????</p>
      <li>
        <a href=\"{{ url( '/backoffice' ) }}\">
          <i class=\"fas fa-home\"></i>
          Accueil
        </a>
      </li>

      <li>
        <a href=\"{{ url( '/backoffice/admins' ) }}\">
          <i class=\"fas fa-users-cog\"></i>
          Les admin
        </a>
      </li>

      <li>
        <a href=\"{{ url( '/backoffice/challenges' ) }}\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
      </li>
    </ul>

  </nav>

  <!-- Page Content  -->
  <div id=\"content\">

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
      <div class=\"container-fluid\">

        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
            <i class=\"fas fa-bars\"></i>
        </button>
        <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fas fa-align-justify\"></i>
        </button>


      </div>
    </nav>

    <div class=\"content-wrapper\">
      {% block content %}{% endblock %}
    </div>

  </div>
    
  <!-- Dark Overlay element -->
  <div class=\"overlay\"></div>

</div>

  <!-- @@@ JS @@@ -->
  <script
    src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
    integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
    crossorigin=\"anonymous\"></script>
  <script 
    src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
    integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>
  <script 
    src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
    integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
    crossorigin=\"anonymous\"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js\"></script>
  <!-- Main File-->
  <script src=\"{{ url( '/assets/js/app-bo.js' ) }}\"></script>
  {% block specific_js %}{% endblock %}
</body>

</html>", "backoffice/template.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018-version-etudiant\\app\\Views\\backoffice\\template.html.twig");
    }
}
