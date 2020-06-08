<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">動態文字廣告</p>
<form method="post" target="back" action="api/edit_ad.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="86%">動態文字廣告</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
            </tr>
            <?php
                $b_ad=new DB('b_ad');
                $rows=$b_ad->all();
                foreach($rows as $row){
                    $isChk=($row['see'] == 1 )?'checked':'';  


            ?>
            <tr>      
                <td width="86%"><input style="width:86%" type="text" name="text[]" value="<?=$row['text'];?>"></td>
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
            <tr>
                <td width="200px"><input type="button"
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;back/view_ad.php&#39;)"
                        value="新增動態文字廣告"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>