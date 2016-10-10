<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>第一个手机页面</title>
    <link rel="stylesheet" href="{{host}}jq/jquery.mobile-1.4.5.min.css">
    <script src="{{host}}jq/jquery-1.11.1.min.js"></script>
    <script src="{{host}}jq/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page" id="pageone" data-theme="b">
<div data-role="header" data-tap-toggle="false" data-position="fixed">
    <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-icon-back ui-btn-icon-notext">按钮</a>
    <h1>09D测试</h1>
    <a href="{{host}}index/add" data-role="button" data-inline="true" data-rel="dialog" data-transition="slidedown"   data-position-to="window"  class="ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext">添加</a>
    
</div>

    <div data-role="main" class="ui-content">
        {% block content %}
        {% endblock %}
    </div>

<div data-role="footer"  data-tap-toggle="false" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <li><a href="{{host}}" data-ajax="false" data-icon="bars">列表</a></li>
            <li><a href="#" data-icon="alert">待开发</a></li>
            <li><a href="javascript:void (0)" rel="external" id="center" data-icon="home">个人中心</a></li>
        </ul>
    </div>
</div>
</div>
<div style="display: none">
    <a href="{{host}}index/login" id="login" data-role="button" data-inline="true" data-rel="dialog" data-transition="slidedown"   data-position-to="window"  class="ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext">登陆</a>
    <a href="{{host}}index/center" id="ucenter" data-role="button"    class="ui-btn ui-corner-all ui-icon-plus ui-btn-icon-notext">登陆</a>
</div>
</body>
<script>
    $(function () {
        $(document).on('click','#center',function () {
            $.get("{{host}}index/checklog",{},function (date) {
                if(date == '0')
                {
                    $("#login").trigger("click");
                }
                else
                {
                    $("#ucenter").trigger("click");
                }
            })
        })
    })
    
</script>
</html>

