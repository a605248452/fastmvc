<?php

/* add.php */
class __TwigTemplate_b13538ca4d5a65d0d12d675101771c55906c555d9e7f26886ffef3cadf0e118a extends Twig_Template
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
<div data-role=\"page\"  data-close-btn=\"right\" data-overlay-theme=\"b\" id=\"pagetwo\" data-theme=\"b\">
    <div data-role=\"header\">
        <h1>添加信息</h1>
    </div>

    <div data-role=\"main\" class=\"ui-content\">
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/save\" method=\"post\" >
            <fieldset>
                <legend>添加留言</legend>
                <div>
                    <input type=\"text\" name=\"title\" placeholder=\"请输入标题\" id=\"\">
                </div>
                <div>
                    <textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\" placeholder=\"请输入内容\"></textarea>
                </div>
                <p><button type=\"submit\">提交</button></p>
            </fieldset>
        </form>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "add.php";
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
<div data-role=\"page\"  data-close-btn=\"right\" data-overlay-theme=\"b\" id=\"pagetwo\" data-theme=\"b\">
    <div data-role=\"header\">
        <h1>添加信息</h1>
    </div>

    <div data-role=\"main\" class=\"ui-content\">
        <form action=\"{{host}}index/save\" method=\"post\" >
            <fieldset>
                <legend>添加留言</legend>
                <div>
                    <input type=\"text\" name=\"title\" placeholder=\"请输入标题\" id=\"\">
                </div>
                <div>
                    <textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\" placeholder=\"请输入内容\"></textarea>
                </div>
                <p><button type=\"submit\">提交</button></p>
            </fieldset>
        </form>
    </div>

</div>";
    }
}
