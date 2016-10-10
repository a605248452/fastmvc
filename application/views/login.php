<style>
    .ui-dialog-contain {
        width: 92.5%;
        max-width: 500px;
        margin: 10% auto 15px auto;
        padding: 0;
        position: relative;
        top: -15px;
    }
</style>
<div data-role="page" data-rel="dialog"  data-close-btn="right" data-overlay-theme="b" id="login" data-theme="b">
    <div data-role="header">
        <h1>请先登录</h1>
    </div>

    <div data-role="main" class="ui-content">
    <form method="post"  data-ajax="false" action="{{host}}index/login_do">
        <div>
            <h3>登录信息</h3>
            <label for="user" class="ui-hidden-accessible">用户名:</label>
            <input type="text" name="user" id="user" placeholder="用户名">
            <label for="pwd" class="ui-hidden-accessible">密码:</label>
            <input type="password" name="pwd" id="pwd" placeholder="密码">
            <label for="log">保存登录</label>
            <input type="checkbox" name="login" id="log" value="1" data-mini="true">
            <input type="submit" data-inline="true" value="登录">
        </div>
    </form>
        </div>

</div>