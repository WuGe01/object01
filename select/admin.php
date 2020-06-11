<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">管理者帳號</p>
<form method="post" target="back" action="api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="35%">網站標題</td>
                <td width="35%">替代文字</td>
                <td width="14%">刪除</td>
                <td></td>
            </tr>
            <?php
                $db=new DB($do);
                $rows=$db->all();
                foreach($rows as $row){
                     
            ?>
            <tr>      
                <td width="35%"><input style="width:86%" type="text" name="acc[]" value="<?=$row['acc'];?>"></td>
                <td width="35%"><input style="width:86%" type="password" name="pw[]" value="<?=$row['pw'];?>"></td>
                <td width="14%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr><input type="hidden" name="type" value="<?=$do;?>">
                <td width="200px"><input type="button"
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;back/admin.php?title=<?=$do;?>&#39;)"
                        value="新增管理者帳號"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>