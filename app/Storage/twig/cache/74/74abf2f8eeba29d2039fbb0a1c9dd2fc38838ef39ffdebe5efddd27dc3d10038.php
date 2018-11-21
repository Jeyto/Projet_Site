<?php

/* backoffice/template.html.twig */
class __TwigTemplate_a3a3188ef8ae133781e298c124a30096cbb8adf1a393da789e6b7a93da9c522f extends Twig_Template
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
      <p>Rôle: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", array()), "html", null, true);
        echo "</p>
      <li>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice")), "html", null, true);
        echo "\">
          <i class=\"fas fa-home\"></i>
          Accueil
        </a>
      </li>
";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", array()) == "admin")) {
            // line 41
            echo "      <li>
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
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections")), "html", null, true);
            echo "\">
          <i class=\"fas fa-th-list\"></i>
          Les collections
        </a>
      </li>
      <li class=\"active\">
        <a href=\"#classroomdropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\" class=\"dropdown-toggle\">
          <i class=\"far fa-address-book\"></i>
          Les classes
        </a>
        <ul id=\"classroomdropdownDropdown\" class=\"collapse list-unstyled \">
          <li><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classrooms")), "html", null, true);
            echo "\">lister</a></li>
          <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classrooms/add")), "html", null, true);
            echo "\">ajouter</a></li>
          <li><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/childrens")), "html", null, true);
            echo "\">les enfants</a></li>
        </ul>
      </li>
";
        }
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", array()) == "ens")) {
            // line 67
            echo "      <li>
        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/childrens/select")), "html", null, true);
            echo "\">
          <i class=\"fas fa-address-book\"></i>
          Les enfants
        </a>
      </li>
";
        }
        // line 74
        echo "      <li>
";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", array()) == "admin")) {
            // line 76
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges")), "html", null, true);
            echo "\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
";
        } else {
            // line 81
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/challenges/select/" . twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array())))), "html", null, true);
            echo "\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
";
        }
        // line 86
        echo "      </li>
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

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"nav navbar-nav ml-auto\">
              <li class=\"nav-item\"><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/delog")), "html", null, true);
        echo "\" class=\"nav-link logout\">se déconnecter<i class=\"fa fa-sign-out\"></i></a>
              </li>
            </ul>
        </div>
      </div>
    </nav>

    <div class=\"content-wrapper\">
      ";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 115
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
  <!--
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/
    wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>

  <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/vendor/jquery-validation/jquery.validate.min.js")), "html", null, true);
        echo "\"></script>
  <!--
  <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js")), "html", null, true);
        echo "\"></script> -->
  <!-- jQuery Custom Scroller CDN -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js\"></script>
  <!-- Main File-->
  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/app-bo.js")), "html", null, true);
        echo "\"></script>
  ";
        // line 148
        $this->displayBlock('specific_js', $context, $blocks);
        // line 149
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

    // line 114
    public function block_content($context, array $blocks = array())
    {
    }

    // line 148
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
        return array (  269 => 148,  264 => 114,  259 => 21,  254 => 11,  248 => 149,  246 => 148,  242 => 147,  235 => 143,  230 => 141,  202 => 115,  200 => 114,  189 => 106,  167 => 86,  158 => 81,  149 => 76,  147 => 75,  144 => 74,  135 => 68,  132 => 67,  130 => 66,  123 => 62,  119 => 61,  115 => 60,  101 => 49,  91 => 42,  88 => 41,  86 => 40,  78 => 35,  73 => 33,  60 => 22,  58 => 21,  54 => 20,  44 => 13,  39 => 11,  27 => 1,);
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
      <p>Rôle: {{ session.role }}</p>
      <li>
        <a href=\"{{ url( '/backoffice' ) }}\">
          <i class=\"fas fa-home\"></i>
          Accueil
        </a>
      </li>
{% if session.role == 'admin' %}
      <li>
        <a href=\"{{ url( '/backoffice/admins' ) }}\">
          <i class=\"fas fa-users-cog\"></i>
          Les admin
        </a>
      </li>

      <li>
        <a href=\"{{ url( '/backoffice/collections' ) }}\">
          <i class=\"fas fa-th-list\"></i>
          Les collections
        </a>
      </li>
      <li class=\"active\">
        <a href=\"#classroomdropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\" class=\"dropdown-toggle\">
          <i class=\"far fa-address-book\"></i>
          Les classes
        </a>
        <ul id=\"classroomdropdownDropdown\" class=\"collapse list-unstyled \">
          <li><a href=\"{{ url( '/backoffice/classrooms' ) }}\">lister</a></li>
          <li><a href=\"{{ url( '/backoffice/classrooms/add' ) }}\">ajouter</a></li>
          <li><a href=\"{{ url( '/backoffice/childrens' ) }}\">les enfants</a></li>
        </ul>
      </li>
{% endif %}
{% if session.role == 'ens' %}
      <li>
        <a href=\"{{ url( '/backoffice/childrens/select' ) }}\">
          <i class=\"fas fa-address-book\"></i>
          Les enfants
        </a>
      </li>
{% endif %}
      <li>
{% if session.role == 'admin' %}
        <a href=\"{{ url( '/backoffice/challenges' ) }}\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
{% else %}
        <a href=\"{{ url( '/backoffice/challenges/select/' ~ classroom.code ) }}\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
{% endif %}
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

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"nav navbar-nav ml-auto\">
              <li class=\"nav-item\"><a href=\"{{ url( '/delog' ) }}\" class=\"nav-link logout\">se déconnecter<i class=\"fa fa-sign-out\"></i></a>
              </li>
            </ul>
        </div>
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
  <!--
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/
    wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>

  <script src=\"{{ url( '/assets/js/vendor/jquery-validation/jquery.validate.min.js' ) }}\"></script>
  <!--
  <script src=\"{{ url( '/assets/js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js' ) }}\"></script> -->
  <!-- jQuery Custom Scroller CDN -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js\"></script>
  <!-- Main File-->
  <script src=\"{{ url( '/assets/js/app-bo.js' ) }}\"></script>
  {% block specific_js %}{% endblock %}
</body>

</html>", "backoffice/template.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\template.html.twig");
    }
}
