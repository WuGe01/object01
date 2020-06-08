<h3 class="cent">校園映象資料圖片</h3>
<hr>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
<table style="width:70%;margin:auto">
    <tr>
        <td style="text-align:right">校園映象資料圖片:</td>
        <td><input type="file" name="img"></td>
    </tr>

</table>
<div class="cent">
    <input type="hidden" name="type" value="image">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="submit" value="新增">
    <input type="reset" value="重設">  
</div>
</form>