<?php

/* hello.phtml */
class __TwigTemplate_2e1b4623c5e29504bfb3388c2e139fc340e1796a4d1e96e44a77d9ff660642b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        if (isset($context["blog_title"])) { $_blog_title_ = $context["blog_title"]; } else { $_blog_title_ = null; }
        echo twig_escape_filter($this->env, $_blog_title_, "html", null, true);
        echo "</title>
    <style type=\"text/css\">
        @import url(http://fonts.googleapis.com/css?family=Lobster);
        body {
            font-size   : 12pt;
            color       : #666;
            line-height : 28px;
        }
        a, a:visited {
            color : #2972A2;
        }
        a:hover {
            color : #6ed347;
        }
        h1{
          font-family: 'Lobster', cursive;
          font-weight: bold;
        }
        h2{
          color: #2972A2;
        }
        footer{
          font-size   : 10pt;
        }
   \t</style>
</head>
<body>
  <header>
      <h1>";
        // line 33
        if (isset($context["blog_title"])) { $_blog_title_ = $context["blog_title"]; } else { $_blog_title_ = null; }
        echo twig_escape_filter($this->env, $_blog_title_, "html", null, true);
        echo "</h1>
  </header>
  <hr/>
  <h2>";
        // line 36
        if (isset($context["blog_content"])) { $_blog_content_ = $context["blog_content"]; } else { $_blog_content_ = null; }
        echo twig_escape_filter($this->env, $_blog_content_, "html", null, true);
        echo "</h2>
  <hr/>
  <footer>
        <p>
          <strong>";
        // line 40
        if (isset($context["blog_footer"])) { $_blog_footer_ = $context["blog_footer"]; } else { $_blog_footer_ = null; }
        echo twig_escape_filter($this->env, $_blog_footer_, "html", null, true);
        echo "</strong>
          <br />
          Now that you're up and running, it's time to start creating!
          Here are some links to help you get started:
        </p>

        <ul class=\"out-links\">
          <li><a href=\"http://pimf-framework.de\">Official Website</a></li>
          <li><a href=\"https://github.com/gjerokrsteski/pimf-framework/wiki\">Learning PIMF</a></li>
        </ul>
  </footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "hello.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 40,  64 => 36,  57 => 33,  25 => 5,  19 => 1,);
    }
}
