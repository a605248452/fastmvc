<?php

/* add.php */
class __TwigTemplate_d7c8d06faa72f0bb7449541b5399eb0fbd0171c2762edb66c713cd276a084974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.php", "add.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form action=\"";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/save\" method=\"post\">
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
        return "add.php";
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
        return "{% extends \"layout.php\" %}
{% block content %}
<form action=\"{{host}}index/save\" method=\"post\">
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
