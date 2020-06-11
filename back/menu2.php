<h3 class="cent">編輯次選單</h3>
<hr>
<form action="./api/mv-edit.php" method="post" enctype="multipart/form-data">
<table style="width:70%;margin:auto" id="sub">
    <tr>
        <td>主選單名稱</td>
        <td>選單連結網址</td>
        <td>刪除</td>
    </tr>
            <?php
                include_once "../plugins/try.php";
                $db=new DB("menu");
                $rows=$db->all(["parent"=>$_GET['parent']]);
                foreach($rows as $row){
                     
            ?>
            <tr>
                <td ><input  type="text" name="name[]" value="<?=$row['name'];?>"></td>
                <td ><input  type="text" name="herf[]" value="<?=$row['herf'];?>"></td>     
                <td ><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            </tr>
            <?php
            }
            ?>
</table>
<div class="cent">
    <input type="hidden" name="type" value="menu">
    <input type="hidden" name="parent" value="<?=$_GET['parent'];?>">
    <input type="submit" value="修改確認">
    <input type="reset" value="重設">  
    <input type="button" value="更多次選單" onclick="more()">  
</div>
</form>
<script>
function more(){
    let row =`
    <tr>
    <td><input  type="text" name="nameAdd[]" ></td>
    <td><input  type="text" name="herfAdd[]" ></td>     
    <td></td>  
    </tr>   
    `
    $("#sub").append(row);
}
</script>