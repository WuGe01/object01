<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">最新消息資料</p>
<form method="post" target="back" action="api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="86%">動態文字廣告</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
            </tr>
            <?php
                $db=new DB($do);
                $rows=$db->all();
                foreach($rows as $row){
                    $isChk=($row['see'] == 1 )?'checked':'';  


            ?>
            <tr>      
                <td width="86%"><textarea style="width:90%;height:80px" name="text[]"><?=$row['text'];?></textarea></td>
                <td width="7%"><input type="checkbox" name="see[]" value="<?=$row['id'];?>" <?=$isChk;?>></td>
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
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;back/view_news.php?title=<?=$do;?>&#39;)"
                        value="新增最新消息資料"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>