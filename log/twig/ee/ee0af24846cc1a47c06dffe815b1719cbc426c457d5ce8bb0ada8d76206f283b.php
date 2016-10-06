<?php

/* layout.html */
class __TwigTemplate_0e4dde5e76ccd35d3491d80b24f85a3a96f9dbd40d43f0601e3492057066a5a1 extends Twig_Template
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
        <a href=\"/\">所有留言</a>
        <a href=\"/index/add\">添加留言</a>
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
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  48 => 16,  39 => 18,  37 => 16,  20 => 1,);
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
        <a href=\"/\">所有留言</a>
        <a href=\"/index/add\">添加留言</a>
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
