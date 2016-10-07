<?php

/* layout.php */
class __TwigTemplate_84c26e6e912f49e13ea5b0ce4f9969d0cce56e536c2c41519e426c7ef8783a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>首页</title>
</head>
<body>
<header>
    <h1>超简单留言板</h1>
    <div>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "\">所有留言</a>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/add\">添加留言</a>
    </div>
</header>
<div>
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "</div>
<footer>
    <p>&copy 2016 超简单留言板</p>
</footer>
</body>
</html>";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  54 => 16,  45 => 18,  43 => 16,  36 => 12,  32 => 11,  20 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>首页</title>
</head>
<body>
<header>
    <h1>超简单留言板</h1>
    <div>
        <a href=\"{{host}}\">所有留言</a>
        <a href=\"{{host}}index/add\">添加留言</a>
    </div>
</header>
<div>
    {% block content %}
    {% endblock %}
</div>
<footer>
    <p>&copy 2016 超简单留言板</p>
</footer>
</body>
</html>";
    }
}
