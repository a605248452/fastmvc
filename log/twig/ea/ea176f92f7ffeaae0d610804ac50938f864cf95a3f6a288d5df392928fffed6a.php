<?php

/* index.php */
class __TwigTemplate_bada1b87eac7a57747b3f6b8bfbcf83d6bde235c5863b39bcca8fc248df9a9a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.php", "index.php", 1);
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
        echo "<h2 align=\"center\">列表页</h2>
<ul data-role=\"listview\" data-inset=\"true\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "    <li>
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
            echo "index/info/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">
            <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</h2>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "creattime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
        </a>
        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
            echo "index/del/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\" class=\"ui-icon-delete\" >删除</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  61 => 12,  56 => 10,  52 => 9,  48 => 8,  42 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.php\" %}
{% block content %}
<h2 align=\"center\">列表页</h2>
<ul data-role=\"listview\" data-inset=\"true\">
    {% for val in data %}
    <li>
        <a href=\"{{host}}index/info/id/{{val.id}}\">
            <h2>{{ val.title }}</h2>
            <p>{{ val.content }}</p>
            <p>{{ val.creattime|date('Y-m-d H:i:s') }}</p>
        </a>
        <a href=\"{{host}}index/del/id/{{val.id}}\" class=\"ui-icon-delete\" >删除</a>
    </li>
    {% endfor %}
</ul>
{% endblock %}";
    }
}
