<h3 class="cent">新增標題區圖片</h3>
<hr>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="type" value="<?=$_POST['type'];?>">
<table style="width:70%;margin:auto">
    <tr>
        <td style="text-align:right">標題區圖片:</td>
        <td><input type="file" name="img"></td>
    </tr>
    <tr>
        <input type="hidden" name="type" value="<?=$_GET['title'];?>">
        <td style="text-align:right">標題區替代文字:</td>
        <td><input type="text" name="text"></td>
    </tr>

</table>
<div class="cent">
    <input type="submit" value="新增"><input type="reset" value="重設">  
</div>
</form>