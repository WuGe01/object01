<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">選單管理</p>
<form method="post" target="back" action="api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="35%">主選單名稱</td>
                <td width="35%">選單連結網址</td>
                <td width="7%">次選單數</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td width="7%"></td>
            
            </tr>
            <?php
                $db=new DB($do);
                $rows=$db->all();
                foreach($rows as $row){
                    $isCheck=($row['see']==1)?"checked":"";
                     
            ?>
            <tr>      
                <td width="35%"><input style="width:86%" type="text" name="name[]" value="<?=$row['name'];?>"></td>
                <td width="35%"><input style="width:86%" type="text" name="herf[]" value="<?=$row['herf'];?>"></td>
                <td width="7%"><input type="text" value="編輯次選單" onclick="op('#cover','#cvr','back/menu2.php?parent=<?=$row['parent'];?>')"></td>
                <td width="7%"><input type="checkbox" name="see[]" value="<?=$row['id'];?>" <?=$isCheck;?>></td>
                <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
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
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;back/menu.php?title=<?=$do;?>&#39;)"
                        value="新增主選單"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>