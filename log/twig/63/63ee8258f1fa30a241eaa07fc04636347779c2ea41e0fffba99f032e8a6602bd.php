<?php

/* layout.php */
class __TwigTemplate_84c26e6e912f49e13ea5b0ce4f9969d0cce56e536c2c41519e426c7ef8783a8f extends Twig_Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>第一个手机页面</title>
    <link rel=\"stylesheet\" href=\"../jq/jquery.mobile-1.4.5.min.css\">
    <script src=\"../jq/jquery-1.11.1.min.js\"></script>
    <script src=\"../jq/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>
<div data-role=\"page\" id=\"pageone\" data-theme=\"b\">
    <div data-role=\"header\" data-position=\"fixed\">
        <a href=\"#\" class=\"ui-btn ui-corner-all ui-icon-back ui-btn-icon-notext\">按钮</a>
        <h1>09D测试</h1>
    </div>
    ​
    <div data-role=\"main\" class=\"ui-content\">
        <p>一些文本..</p>
        <a href=\"#\">标准文本链接</a>
        <a href=\"#\" class=\"ui-btn\">链接按钮</a>
        <p>列表:</p>
        <ul data-role=\"listview\" data-autodividers=\"true\" data-inset=\"true\">
            <li><a href=\"#\">Adele</a></li>
            <li><a href=\"#\">Billy</a></li>
        </ul>
        <label for=\"fullname\">输入框:</label>
        <input type=\"text\" name=\"fullname\" id=\"fullname\" placeholder=\"名字..\">
        <label for=\"switch\">切换开关:</label>
        <select name=\"switch\" id=\"switch\" data-role=\"slider\">
            <option value=\"on\">On</option>
            <option value=\"off\" selected>Off</option>
        </select>
    </div>
    ​
    <div data-role=\"footer\" data-position=\"fixed\">
        <div data-role=\"navbar\">
            <ul>
                <li><a href=\"#\" data-icon=\"plus\">列表</a></li>
                <li><a href=\"#\" data-icon=\"minus\">待开发</a></li>
                <li><a href=\"#\" data-icon=\"delete\">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "layout.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>第一个手机页面</title>
    <link rel=\"stylesheet\" href=\"../jq/jquery.mobile-1.4.5.min.css\">
    <script src=\"../jq/jquery-1.11.1.min.js\"></script>
    <script src=\"../jq/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>
<div data-role=\"page\" id=\"pageone\" data-theme=\"b\">
    <div data-role=\"header\" data-position=\"fixed\">
        <a href=\"#\" class=\"ui-btn ui-corner-all ui-icon-back ui-btn-icon-notext\">按钮</a>
        <h1>09D测试</h1>
    </div>
    ​
    <div data-role=\"main\" class=\"ui-content\">
        <p>一些文本..</p>
        <a href=\"#\">标准文本链接</a>
        <a href=\"#\" class=\"ui-btn\">链接按钮</a>
        <p>列表:</p>
        <ul data-role=\"listview\" data-autodividers=\"true\" data-inset=\"true\">
            <li><a href=\"#\">Adele</a></li>
            <li><a href=\"#\">Billy</a></li>
        </ul>
        <label for=\"fullname\">输入框:</label>
        <input type=\"text\" name=\"fullname\" id=\"fullname\" placeholder=\"名字..\">
        <label for=\"switch\">切换开关:</label>
        <select name=\"switch\" id=\"switch\" data-role=\"slider\">
            <option value=\"on\">On</option>
            <option value=\"off\" selected>Off</option>
        </select>
    </div>
    ​
    <div data-role=\"footer\" data-position=\"fixed\">
        <div data-role=\"navbar\">
            <ul>
                <li><a href=\"#\" data-icon=\"plus\">列表</a></li>
                <li><a href=\"#\" data-icon=\"minus\">待开发</a></li>
                <li><a href=\"#\" data-icon=\"delete\">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

";
    }
}
