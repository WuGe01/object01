<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">頁尾版權資料</p>
<form method="post" target="back" action="api/edit_bottom.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
            <?php
                $bottom=new DB('bottom');
                $tbo=$bottom->find(1);
                ?>
                <td width="50%">頁尾版權資料:</td>
                <td width="50%"><input type="text" name="bottom" value='<?=$tbo['bottom'];?>'></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>