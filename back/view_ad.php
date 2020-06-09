<h3 class="cent">動態文字</h3>
<hr>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
<table style="width:70%;margin:auto">
    <tr>
        <td style="text-align:right">動態文字廣告:</td>
        <td><input type="text" name="text"></td>
    </tr>

</table>
<div class="cent">
    <input type="hidden" name="type" value="ad">
    <input type="submit" value="新增">
    <input type="reset" value="重設">  
</div>
</form>