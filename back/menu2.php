<h3 class="cent">新增主選單</h3>
<hr>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
<table style="width:70%;margin:auto">
    <tr>
        <td style="text-align:right">主選單名稱:</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td style="text-align:right">選單連結網址:</td>
        <td><input type="text" name="herf"></td>
    </tr>


</table>
<div class="cent">
    <input type="hidden" name="type" value="<?=$_GET['title'];?>">
    <input type="submit" value="新增">
    <input type="reset" value="重設">  
</div>
</form>