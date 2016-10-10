<?php

/* login.php */
class __TwigTemplate_c991ce5521e191be624fbdc71c843d8b588bfa8c9025c50cf57acbc81d0fbe9c extends Twig_Template
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
        echo "<style>
    .ui-dialog-contain {
        width: 92.5%;
        max-width: 500px;
        margin: 10% auto 15px auto;
        padding: 0;
        position: relative;
        top: -15px;
    }
</style>
<div data-role=\"page\" data-rel=\"dialog\"  data-close-btn=\"right\" data-overlay-theme=\"b\" id=\"login\" data-theme=\"b\">
    <div data-role=\"header\">
        <h1>请先登录</h1>
    </div>

    <div data-role=\"main\" class=\"ui-content\">
    <form method=\"post\"  data-ajax=\"false\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/login_do\">
        <div>
            <h3>登录信息</h3>
            <label for=\"user\" class=\"ui-hidden-accessible\">用户名:</label>
            <input type=\"text\" name=\"user\" id=\"user\" placeholder=\"用户名\">
            <label for=\"pwd\" class=\"ui-hidden-accessible\">密码:</label>
            <input type=\"password\" name=\"pwd\" id=\"pwd\" placeholder=\"密码\">
            <label for=\"log\">保存登录</label>
            <input type=\"checkbox\" name=\"login\" id=\"log\" value=\"1\" data-mini=\"true\">
            <input type=\"submit\" data-inline=\"true\" value=\"登录\">
        </div>
    </form>
        </div>

</div>";
    }

    public function getTemplateName()
    {
        return "login.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  19 => 1,);
    }

    public function getSource()
    {
        return "<style>
    .ui-dialog-contain {
        width: 92.5%;
        max-width: 500px;
        margin: 10% auto 15px auto;
        padding: 0;
        position: relative;
        top: -15px;
    }
</style>
<div data-role=\"page\" data-rel=\"dialog\"  data-close-btn=\"right\" data-overlay-theme=\"b\" id=\"login\" data-theme=\"b\">
    <div data-role=\"header\">
        <h1>请先登录</h1>
    </div>

    <div data-role=\"main\" class=\"ui-content\">
    <form method=\"post\"  data-ajax=\"false\" action=\"{{host}}index/login_do\">
        <div>
            <h3>登录信息</h3>
            <label for=\"user\" class=\"ui-hidden-accessible\">用户名:</label>
            <input type=\"text\" name=\"user\" id=\"user\" placeholder=\"用户名\">
            <label for=\"pwd\" class=\"ui-hidden-accessible\">密码:</label>
            <input type=\"password\" name=\"pwd\" id=\"pwd\" placeholder=\"密码\">
            <label for=\"log\">保存登录</label>
            <input type=\"checkbox\" name=\"login\" id=\"log\" value=\"1\" data-mini=\"true\">
            <input type=\"submit\" data-inline=\"true\" value=\"登录\">
        </div>
    </form>
        </div>

</div>";
    }
}
