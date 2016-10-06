<?php

/* add.html */
class __TwigTemplate_96623ad0ada6dfb427c51bbf0638066281f0128a4f2f2b0511c8a3e59b318ebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form action=\"/index/save\" method=\"post\">
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
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<form action=\"/index/save\" method=\"post\">
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
{% endblock %}";
    }
}
