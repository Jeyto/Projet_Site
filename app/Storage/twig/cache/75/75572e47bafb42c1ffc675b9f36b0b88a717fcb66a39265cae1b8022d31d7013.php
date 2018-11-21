<?php

/* backoffice/login.html.twig */
class __TwigTemplate_c7671041cffdbf3f0d6bd0250b40009a1f6cf08fb6e2343e5bf28129ce7491b5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "backoffice/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'additional_css' => array($this, 'block_additional_css'),
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
        echo "login";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
  <section class=\"login-block\">
    <div class=\"container\">
      <div class=\"row \">
        <div class=\"col login-sec\">
          <h2 class=\"text-center\">Identifiez vous</h2>
          <form class=\"login-form\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/login")), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"form-group\">
              <label for=\"name\" class=\"text-uppercase\">Nom :</label>
              <input name=\"name\" id=\"name\" type=\"text\" class=\"form-control\" value=\"mpagnol\">
            </div>
            <div class=\"form-group\">
              <label for=\"password\" class=\"text-uppercase\">Mot de passe : </label>
              <input name=\"password\" id=\"password\" type=\"password\" class=\"form-control\" value=\"mpagnol\">
            </div>
            <div class=\"form-check\">
              <button type=\"submit\" class=\"btn btn-login float-right\">Vérifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
";
    }

    // line 32
    public function block_additional_css($context, array $blocks = array())
    {
        // line 33
        echo "<style>
.login-block{
  float:left;
  width:100%;
  padding : 50px 0;
}

.container{background:#14446d; border-radius: 10px; width: 50%; height: 40%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #0069c0;}
.login-sec h2:after{content:\" \"; width:100px; height:5px; background:#6ec6ff; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #0069c0; color:#fff; font-weight:600;}
</style>
";
    }

    public function getTemplateName()
    {
        return "backoffice/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  74 => 32,  51 => 12,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}login{% endblock %}

{% block content %}
<div class=\"container\">
  <section class=\"login-block\">
    <div class=\"container\">
      <div class=\"row \">
        <div class=\"col login-sec\">
          <h2 class=\"text-center\">Identifiez vous</h2>
          <form class=\"login-form\" action=\"{{ url( '/login' )  }}\" method=\"post\">
            <div class=\"form-group\">
              <label for=\"name\" class=\"text-uppercase\">Nom :</label>
              <input name=\"name\" id=\"name\" type=\"text\" class=\"form-control\" value=\"mpagnol\">
            </div>
            <div class=\"form-group\">
              <label for=\"password\" class=\"text-uppercase\">Mot de passe : </label>
              <input name=\"password\" id=\"password\" type=\"password\" class=\"form-control\" value=\"mpagnol\">
            </div>
            <div class=\"form-check\">
              <button type=\"submit\" class=\"btn btn-login float-right\">Vérifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
{% endblock %}

{% block additional_css %}
<style>
.login-block{
  float:left;
  width:100%;
  padding : 50px 0;
}

.container{background:#14446d; border-radius: 10px; width: 50%; height: 40%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #0069c0;}
.login-sec h2:after{content:\" \"; width:100px; height:5px; background:#6ec6ff; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #0069c0; color:#fff; font-weight:600;}
</style>
{% endblock %}", "backoffice/login.html.twig", "D:\\UwAmp-www\\mmi\\s3.devweb\\projet\\2018\\app\\Views\\backoffice\\login.html.twig");
    }
}
