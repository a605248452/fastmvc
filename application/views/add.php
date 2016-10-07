{% extends "layout.php" %}
{% block content %}
<form action="{{host}}index/save" method="post">
    <fieldset>
        <legend>添加留言</legend>
        <div>
            <input type="text" name="title" placeholder="请输入标题" id="">
        </div>
        <div>
            <textarea name="content" id="" cols="30" rows="10" placeholder="请输入内容"></textarea>
        </div>
        <p><button type="submit">提交</button></p>
    </fieldset>
</form>
{% endblock %}