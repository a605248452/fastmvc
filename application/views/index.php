<h1>练习</h1>
<table>
    <tr>
        <td>ID</td>
        <td>content</td>
        <td>title</td>
    </tr>
    <?php foreach($list as $v){ ?>
        <tr>
            <td><?php echo $v['art_id']?></td>
            <td><?php echo $v['content']?></td>
            <td><?php echo $v['title']?></td>
        </tr>
    <?php } ?>
</table>

    

