{% extends "layout.php" %}
{% block content %}

<table>
    <tr>
        <td width="30%">
            <label>头像：</label>
        </td>
        <td>
            <img class="normalFace" id="img" width="50%" src="{{info.img}}" onclick="fileSelect();">
            <input type="file"  accept="image/*" name="img" id="fileToUpload" onchange="fileSelected();" style="display:none;">
            <p id="loading"></p>
        </td>
    </tr>
    <tr>
        <td>
            <label>昵称:</label>
        </td>
        <td>
            <span id="nickname">{{info.nickname}}</span>
        </td>
    </tr>
    <tr>
        <td>
            <label >个性签名:</label>
        </td>
        <td>
            <span id="personality" >{{info.personality}}</span>
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
            <span id="phone">{{info.phone}}</span>
        </td>
    </tr>
</table>
<script type="text/javascript">
    function fileSelect() {
        document.getElementById("fileToUpload").click();
    }
    function fileSelected() {
        var fileObj = document.getElementById("fileToUpload").files[0];
        if(fileObj.type!='image/jpeg') {
            alert("请上传一张图片")
        }
        var form = new FormData();
        form.append("file", fileObj);
        $.ajax({
            url: '{{host}}index/upload',
            type: 'POST',
            cache: false,
            data: form,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend:function(){
                $("#loading").html("加载中.....");
            },
            success:function (date) {
                if(date.status) {
                  var str = date.file.replace('\.\/','{{host}}')
                    $("#img").attr('src',str);
                } else {
                    alert(date.error)
                }
            },
            complete: function() {
                $("#loading").empty();
            }
        })
    }

    $(document).on('click','span',function(){
        old_id = $(this).attr('id');
        old_val=$(this).html();
        $(this).parent().html("<input type=\'text\' class='dian'  name="+old_id+" value="+old_val+">");
        $('input').focus();
    })

    $(document).on('blur','.dian',function(){
        var obj=$(this);
        var id=$(this).attr('name'); //获取要修改内容的id
        var val=$(this).val(); //获取修改后的值
        $.ajax({
            type:'post',
            url:"{{host}}index/upd",
            data:{
                id:id,
                val:val
            },
            success:function(msg){
                if(msg == 1){
                    obj.parent().html("<span id="+id+">"+val+"</span>")
                }else{
                    obj.parent().html("<span id="+id+">"+old_val+"</span>")
                }

            }
        })
    })
</script>
{% endblock %}