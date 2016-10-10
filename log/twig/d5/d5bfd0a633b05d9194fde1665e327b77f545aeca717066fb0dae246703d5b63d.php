<?php

/* center.php */
class __TwigTemplate_9a1c98a6010e7e93bf5064eff702c344885e42ed434645cde8d0ef4643703777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.php", "center.php", 1);
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
        echo "
<table>
    <tr>
        <td width=\"30%\">
            <label>头像：</label>
        </td>
        <td>
            <img class=\"normalFace\" id=\"img\" width=\"50%\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "img", array()), "html", null, true);
        echo "\" onclick=\"fileSelect();\">
            <input type=\"file\"  accept=\"image/*\" name=\"img\" id=\"fileToUpload\" onchange=\"fileSelected();\" style=\"display:none;\">
            <p id=\"loading\"></p>
        </td>
    </tr>
    <tr>
        <td>
            <label>昵称:</label>
        </td>
        <td>
            <span id=\"nickname\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "nickname", array()), "html", null, true);
        echo "</span>
        </td>
    </tr>
    <tr>
        <td>
            <label >个性签名:</label>
        </td>
        <td>
            <span id=\"personality\" >";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "personality", array()), "html", null, true);
        echo "</span>
        </td>
    </tr>
    <tr>
        <td>
            <label>性别：</label>
        </td>
        <td>
            <p>";
        // line 36
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "gender", array()) == "1")) {
            echo "男";
        } else {
            echo "女";
        }
        echo "</p>
        </td>
    </tr>
    <tr>
        <td>
            <label>手机号:</label>
        </td>
        <td>
            <span id=\"phone\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "phone", array()), "html", null, true);
        echo "</span>
        </td>
    </tr>
</table>
<script type=\"text/javascript\">
    function fileSelect() {
        document.getElementById(\"fileToUpload\").click();
    }
    function fileSelected() {
        var fileObj = document.getElementById(\"fileToUpload\").files[0];
        if(fileObj.type!='image/jpeg') {
            alert(\"请上传一张图片\")
        }
        var form = new FormData();
        form.append(\"file\", fileObj);
        \$.ajax({
            url: '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/upload',
            type: 'POST',
            cache: false,
            data: form,
            dataType: \"json\",
            processData: false,
            contentType: false,
            beforeSend:function(){
                \$(\"#loading\").html(\"加载中.....\");
            },
            success:function (date) {
                if(date.status) {
                  var str = date.file.replace('\\.\\/','";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "')
                    \$(\"#img\").attr('src',str);
                } else {
                    alert(date.error)
                }
            },
            complete: function() {
                \$(\"#loading\").empty();
            }
        })
    }

    \$(document).on('click','span',function(){
        old_id = \$(this).attr('id');
        old_val=\$(this).html();
        \$(this).parent().html(\"<input type=\\'text\\' class='dian'  name=\"+old_id+\" value=\"+old_val+\">\");
        \$('input').focus();
    })

    \$(document).on('blur','.dian',function(){
        var obj=\$(this);
        var id=\$(this).attr('name'); //获取要修改内容的id
        var val=\$(this).val(); //获取修改后的值
        \$.ajax({
            type:'post',
            url:\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/upd\",
            data:{
                id:id,
                val:val
            },
            success:function(msg){
                if(msg == 1){
                    obj.parent().html(\"<span id=\"+id+\">\"+val+\"</span>\")
                }else{
                    obj.parent().html(\"<span id=\"+id+\">\"+old_val+\"</span>\")
                }

            }
        })
    })
</script>
";
    }

    public function getTemplateName()
    {
        return "center.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 97,  124 => 72,  109 => 60,  90 => 44,  75 => 36,  64 => 28,  53 => 20,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.php\" %}
{% block content %}

<table>
    <tr>
        <td width=\"30%\">
            <label>头像：</label>
        </td>
        <td>
            <img class=\"normalFace\" id=\"img\" width=\"50%\" src=\"{{info.img}}\" onclick=\"fileSelect();\">
            <input type=\"file\"  accept=\"image/*\" name=\"img\" id=\"fileToUpload\" onchange=\"fileSelected();\" style=\"display:none;\">
            <p id=\"loading\"></p>
        </td>
    </tr>
    <tr>
        <td>
            <label>昵称:</label>
        </td>
        <td>
            <span id=\"nickname\">{{info.nickname}}</span>
        </td>
    </tr>
    <tr>
        <td>
            <label >个性签名:</label>
        </td>
        <td>
            <span id=\"personality\" >{{info.personality}}</span>
        </td>
    </tr>
    <tr>
        <td>
            <label>性别：</label>
        </td>
        <td>
            <p>{% if info.gender == '1'  %}男{% else %}女{% endif %}</p>
        </td>
    </tr>
    <tr>
        <td>
            <label>手机号:</label>
        </td>
        <td>
            <span id=\"phone\">{{info.phone}}</span>
        </td>
    </tr>
</table>
<script type=\"text/javascript\">
    function fileSelect() {
        document.getElementById(\"fileToUpload\").click();
    }
    function fileSelected() {
        var fileObj = document.getElementById(\"fileToUpload\").files[0];
        if(fileObj.type!='image/jpeg') {
            alert(\"请上传一张图片\")
        }
        var form = new FormData();
        form.append(\"file\", fileObj);
        \$.ajax({
            url: '{{host}}index/upload',
            type: 'POST',
            cache: false,
            data: form,
            dataType: \"json\",
            processData: false,
            contentType: false,
            beforeSend:function(){
                \$(\"#loading\").html(\"加载中.....\");
            },
            success:function (date) {
                if(date.status) {
                  var str = date.file.replace('\\.\\/','{{host}}')
                    \$(\"#img\").attr('src',str);
                } else {
                    alert(date.error)
                }
            },
            complete: function() {
                \$(\"#loading\").empty();
            }
        })
    }

    \$(document).on('click','span',function(){
        old_id = \$(this).attr('id');
        old_val=\$(this).html();
        \$(this).parent().html(\"<input type=\\'text\\' class='dian'  name=\"+old_id+\" value=\"+old_val+\">\");
        \$('input').focus();
    })

    \$(document).on('blur','.dian',function(){
        var obj=\$(this);
        var id=\$(this).attr('name'); //获取要修改内容的id
        var val=\$(this).val(); //获取修改后的值
        \$.ajax({
            type:'post',
            url:\"{{host}}index/upd\",
            data:{
                id:id,
                val:val
            },
            success:function(msg){
                if(msg == 1){
                    obj.parent().html(\"<span id=\"+id+\">\"+val+\"</span>\")
                }else{
                    obj.parent().html(\"<span id=\"+id+\">\"+old_val+\"</span>\")
                }

            }
        })
    })
</script>
{% endblock %}";
    }
}
