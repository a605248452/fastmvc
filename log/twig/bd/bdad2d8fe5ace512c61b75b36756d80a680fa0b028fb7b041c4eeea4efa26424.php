<?php

/* info.php */
class __TwigTemplate_2b0f45b790839c3f0c5dba37c261991137dc1900562e4317c007f88335571119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.php", "info.php", 1);
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
        echo "<div style=\"padding: 5%;margin: 5%;\">
    <h2 align=\"center\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "content", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "creattime", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "info.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.php\" %}
{% block content %}
<div style=\"padding: 5%;margin: 5%;\">
    <h2 align=\"center\">{{info.title}}</h2>
    <p>{{info.content}}</p>
    <p>{{ val.creattime|date('Y-m-d H:i:s') }}</p>
</div>

{% endblock %}";
    }
}
