<h3 class="cent">最新消息資料</h3>
<hr>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
<table style="width:70%;margin:auto">
    <tr>
        <td style="text-align:right">最新消息資料:</td>
        <td><textarea style="width:300px;height:100px" name="text"></textarea></td>
    </tr>

</table>
<div class="cent">
<input type="hidden" name="type" value="news">
    <input type="submit" value="新增">
    <input type="reset" value="重設">  
</div>
</form>