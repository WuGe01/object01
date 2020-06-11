<h3 class="cent">管理者帳號</h3>
<hr>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
<table style="width:70%;margin:auto">
    <tr>
        <td style="text-align:right">管理者帳號:</td>
        <td><input type="text" name="acc"></td>
    </tr>
    <tr>
        <td style="text-align:right">管理者密碼:</td>
        <td><input type="text" name="pw"></td>
    </tr>
    <tr>
        <td style="text-align:right">密碼再確認:</td>
        <td><input type="text" name="pw2"></td>
    </tr>

</table>
<div class="cent">
    <input type="hidden" name="type" value="<?=$_GET['title'];?>">
    <input type="submit" value="新增">
    <input type="reset" value="重設">  
</div>
</form>