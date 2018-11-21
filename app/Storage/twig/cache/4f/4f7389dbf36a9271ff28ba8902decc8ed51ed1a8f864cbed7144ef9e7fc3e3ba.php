<?php

/* test.html.twig */
class __TwigTemplate_52dadfa55759eed889cc8d06c1d4dc9135121c145d025e1d3794c7f33cf3359d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "test.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'additional_css' => array($this, 'block_additional_css'),
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
        echo "page de test";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"wrapper\">
      <!-- Sidebar  -->
      <nav id=\"sidebar\">
        <div class=\"sidebar-header\">
            <h3>BackOffice</h3>
        </div>
        <ul class=\"list-unstyled components\">
          <p>Rôle: admin</p>
          <li>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice")), "html", null, true);
        echo "\">
              <i class=\"fas fa-home\"></i>
              Accueil
            </a>
          </li>
          <li>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/admins")), "html", null, true);
        echo "\">
              <i class=\"fas fa-users-cog\"></i>
              Les admin
            </a>
          </li>
          <li>
            <a href=\"";
        // line 28
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
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classrooms")), "html", null, true);
        echo "\">lister</a></li>
              <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classrooms/add")), "html", null, true);
        echo "\">ajouter</a></li>
              <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/childrens")), "html", null, true);
        echo "\">les enfants</a></li>
            </ul>
          </li>
          <li>
            <a href=\"";
        // line 45
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
                      <!--  <span>Toggle Sidebar</span>   -->
                  </button>
                  <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                      <i class=\"fas fa-align-justify\"></i>
                  </button>

                  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                      <ul class=\"nav navbar-nav ml-auto\">
                        <li class=\"nav-item\"><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/delog")), "html", null, true);
        echo "\" class=\"nav-link logout\">se déconnecter<i class=\"fa fa-sign-out\"></i></a>
                        </li>
                        <!-- 
                          <li class=\"nav-item active\">
                              <a class=\"nav-link\" href=\"#\">Page</a>
                          </li>
                          <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"#\">Page</a>
                          </li>
                          <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"#\">Page</a>
                          </li>
                          <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"#\">Page</a>
                          </li>
                        -->
                      </ul>
                  </div>
              </div>
          </nav>
          <div class=\"content-wrapper\">
            <h2>Collapsible Sidebar Using Bootstrap 4</h2>
            <p>
              source: <a href=\"https://bootstrapious.com/p/bootstrap-sidebar\">
              bootstrapious.com/p/bootstrap-sidebar</a>
            </p>
          </div>
    </div>
    
    <!-- Dark Overlay element -->
    <div class=\"overlay\"></div>

</div>
";
    }

    // line 105
    public function block_additional_css($context, array $blocks = array())
    {
        // line 106
        echo "  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css\">
<style>
/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
}

#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    color: white;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
    text-decoration: none
}

#sidebar ul li.active>a,
a[aria-expanded=\"true\"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle=\"collapse\"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: calc(100% - 250px);
    padding: 0px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}

#content.active {
    width: 100%;
}

#content .content-wrapper {
  margin: 1em;
}
</style>
";
    }

    // line 220
    public function block_additional_js($context, array $blocks = array())
    {
        // line 221
        echo "  <!-- jQuery Custom Scroller CDN -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\">
\$( function () {

  \$(\"#sidebar\").mCustomScrollbar({
    theme: \"minimal\"
  });

  \$('#sidebarCollapse').on('click', function () {
    \$(this).find( 'i' )
      .toggleClass('fa-times')
      .toggleClass('fa-bars');
    \$('#sidebar, #content').toggleClass('active');
    \$('.collapse.in').toggleClass('in');
    \$('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 221,  288 => 220,  172 => 106,  169 => 105,  131 => 70,  103 => 45,  96 => 41,  92 => 40,  88 => 39,  74 => 28,  65 => 22,  56 => 16,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}page de test{% endblock %}

{% block content %}

    <div class=\"wrapper\">
      <!-- Sidebar  -->
      <nav id=\"sidebar\">
        <div class=\"sidebar-header\">
            <h3>BackOffice</h3>
        </div>
        <ul class=\"list-unstyled components\">
          <p>Rôle: admin</p>
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
                      <!--  <span>Toggle Sidebar</span>   -->
                  </button>
                  <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                      <i class=\"fas fa-align-justify\"></i>
                  </button>

                  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                      <ul class=\"nav navbar-nav ml-auto\">
                        <li class=\"nav-item\"><a href=\"{{ url( '/delog' ) }}\" class=\"nav-link logout\">se déconnecter<i class=\"fa fa-sign-out\"></i></a>
                        </li>
                        <!-- 
                          <li class=\"nav-item active\">
                              <a class=\"nav-link\" href=\"#\">Page</a>
                          </li>
                          <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"#\">Page</a>
                          </li>
                          <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"#\">Page</a>
                          </li>
                          <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"#\">Page</a>
                          </li>
                        -->
                      </ul>
                  </div>
              </div>
          </nav>
          <div class=\"content-wrapper\">
            <h2>Collapsible Sidebar Using Bootstrap 4</h2>
            <p>
              source: <a href=\"https://bootstrapious.com/p/bootstrap-sidebar\">
              bootstrapious.com/p/bootstrap-sidebar</a>
            </p>
          </div>
    </div>
    
    <!-- Dark Overlay element -->
    <div class=\"overlay\"></div>

</div>
{% endblock %}

{% block additional_css %}
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css\">
<style>
/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
}

#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    color: white;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
    text-decoration: none
}

#sidebar ul li.active>a,
a[aria-expanded=\"true\"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle=\"collapse\"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: calc(100% - 250px);
    padding: 0px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}

#content.active {
    width: 100%;
}

#content .content-wrapper {
  margin: 1em;
}
</style>
{% endblock %}

{% block additional_js %}
  <!-- jQuery Custom Scroller CDN -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js\"></script>
<script type=\"text/javascript\">
\$( function () {

  \$(\"#sidebar\").mCustomScrollbar({
    theme: \"minimal\"
  });

  \$('#sidebarCollapse').on('click', function () {
    \$(this).find( 'i' )
      .toggleClass('fa-times')
      .toggleClass('fa-bars');
    \$('#sidebar, #content').toggleClass('active');
    \$('.collapse.in').toggleClass('in');
    \$('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });

});
</script>
{% endblock %}", "test.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\test.html.twig");
    }
}
