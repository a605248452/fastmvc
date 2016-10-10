{% extends "layout.php" %}
{% block content %}
<div style="padding: 5%;margin: 5%;">
    <h2 align="center">{{info.title}}</h2>
    <p>{{info.content}}</p>
    <p>{{ val.creattime|date('Y-m-d H:i:s') }}</p>
</div>

{% endblock %}