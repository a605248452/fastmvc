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
<div data-role="page"  data-close-btn="right" data-overlay-theme="b" id="pagetwo" data-theme="b">
    <div data-role="header">
        <h1>添加信息</h1>
    </div>

    <div data-role="main" class="ui-content">
        <form action="{{host}}index/save" method="post" >
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
    </div>

</div>