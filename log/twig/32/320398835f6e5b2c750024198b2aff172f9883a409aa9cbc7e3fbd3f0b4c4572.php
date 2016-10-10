<?php

/* layout.php */
class __TwigTemplate_c48289c6d85be2a0474e377aafb218dc3e42680dddf3193283543ba5e90447ee extends Twig_Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>第一个手机页面</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "jq/jquery.mobile-1.4.5.min.css\">
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "jq/jquery-1.11.1.min.js\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "jq/jquery.mobile-1.4.5.min.js\"></script>
</head>

<body>
<div data-role=\"page\" id=\"pageone\" data-theme=\"b\">
<div data-role=\"header\" data-tap-toggle=\"false\" data-position=\"fixed\">
    <a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-corner-all ui-icon-back ui-btn-icon-notext\">按钮</a>
    <h1>09D测试</h1>
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/add\" data-role=\"button\" data-inline=\"true\" data-rel=\"dialog\" data-transition=\"slidedown\"   data-position-to=\"window\"  class=\"ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext\">添加</a>
    
</div>

    <div data-role=\"main\" class=\"ui-content\">
        ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "    </div>

<div data-role=\"footer\"  data-tap-toggle=\"false\" data-position=\"fixed\">
    <div data-role=\"navbar\">
        <ul>
            <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "\" data-ajax=\"false\" data-icon=\"bars\">列表</a></li>
            <li><a href=\"#\" data-icon=\"alert\">待开发</a></li>
            <li><a href=\"javascript:void (0)\" rel=\"external\" id=\"center\" data-icon=\"home\">个人中心</a></li>
        </ul>
    </div>
</div>
</div>
<div style=\"display: none\">
    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/login\" id=\"login\" data-role=\"button\" data-inline=\"true\" data-rel=\"dialog\" data-transition=\"slidedown\"   data-position-to=\"window\"  class=\"ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext\">登陆</a>
    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/center\" id=\"ucenter\" data-role=\"button\"    class=\"ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext\">登陆</a>
</div>
</body>
<script>
    \$(function () {
        \$(document).on('click','#center',function () {
            \$.get(\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/checklog\",{},function (date) {
                if(date == '0')
                {
                    \$(\"#login\").trigger(\"click\");
                }
                else
                {
                    \$(\"#ucenter\").trigger(\"click\");
                }
            })
        })
    })
    
</script>
</html>

";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "        ";
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
        return array (  111 => 22,  108 => 21,  87 => 43,  78 => 37,  74 => 36,  63 => 28,  56 => 23,  54 => 21,  46 => 16,  35 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>第一个手机页面</title>
    <link rel=\"stylesheet\" href=\"{{host}}jq/jquery.mobile-1.4.5.min.css\">
    <script src=\"{{host}}jq/jquery-1.11.1.min.js\"></script>
    <script src=\"{{host}}jq/jquery.mobile-1.4.5.min.js\"></script>
</head>

<body>
<div data-role=\"page\" id=\"pageone\" data-theme=\"b\">
<div data-role=\"header\" data-tap-toggle=\"false\" data-position=\"fixed\">
    <a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-corner-all ui-icon-back ui-btn-icon-notext\">按钮</a>
    <h1>09D测试</h1>
    <a href=\"{{host}}index/add\" data-role=\"button\" data-inline=\"true\" data-rel=\"dialog\" data-transition=\"slidedown\"   data-position-to=\"window\"  class=\"ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext\">添加</a>
    
</div>

    <div data-role=\"main\" class=\"ui-content\">
        {% block content %}
        {% endblock %}
    </div>

<div data-role=\"footer\"  data-tap-toggle=\"false\" data-position=\"fixed\">
    <div data-role=\"navbar\">
        <ul>
            <li><a href=\"{{host}}\" data-ajax=\"false\" data-icon=\"bars\">列表</a></li>
            <li><a href=\"#\" data-icon=\"alert\">待开发</a></li>
            <li><a href=\"javascript:void (0)\" rel=\"external\" id=\"center\" data-icon=\"home\">个人中心</a></li>
        </ul>
    </div>
</div>
</div>
<div style=\"display: none\">
    <a href=\"{{host}}index/login\" id=\"login\" data-role=\"button\" data-inline=\"true\" data-rel=\"dialog\" data-transition=\"slidedown\"   data-position-to=\"window\"  class=\"ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext\">登陆</a>
    <a href=\"{{host}}index/center\" id=\"ucenter\" data-role=\"button\"    class=\"ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext\">登陆</a>
</div>
</body>
<script>
    \$(function () {
        \$(document).on('click','#center',function () {
            \$.get(\"{{host}}index/checklog\",{},function (date) {
                if(date == '0')
                {
                    \$(\"#login\").trigger(\"click\");
                }
                else
                {
                    \$(\"#ucenter\").trigger(\"click\");
                }
            })
        })
    })
    
</script>
</html>

";
    }
}
