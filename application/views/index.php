{% extends "layout.php" %}
{% block content %}
<h2 align="center">列表页</h2>
<ul data-role="listview" data-inset="true">
    {% for val in data %}
    <li>
        <a href="{{host}}index/info/id/{{val.id}}">
            <h2>{{ val.title }}</h2>
            <p>{{ val.content }}</p>
            <p>{{ val.creattime|date('Y-m-d H:i:s') }}</p>
        </a>
        <a href="{{host}}index/del/id/{{val.id}}" class="ui-icon-delete" >删除</a>
    </li>
    {% endfor %}
</ul>
{% endblock %}