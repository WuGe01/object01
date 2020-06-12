<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">校園映象資料</p>
<form method="post" target="back" action="api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="68%">校園映象圖片</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td></td>
            </tr>
            <?php
                $db=new DB($do);
                $total=$db->nums('');
                $num=3;
                $pages=ceil($total/$num);
                $now=(!empty($_GET['p']))?$_GET['p']:1;
                $start=($now-1)*$num;
                $rows=$db->all(""," limit $start,$num");
                foreach($rows as $row){
                    $isChk=($row['see'] == 1 )?'checked':'';  
            ?>
            <tr>
                <td width="68%" class="cent"><img src='img3/<?=$row['img'];?>'style="width:100px;height:68px;margin:auto"></td>
                <td width="7%"><input type="checkbox" name="see[]" value="<?=$row['id'];?>" <?=$isChk;?>></td>
                <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                <td><input type="button" value="更換圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;back/view_image.php?id=<?=$row['id'];?>&title=<?=$do;?>&#39;)"></td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <div style="text-align:center;">
        <?php
        if(($now-1)>0){
        ?>
            <a class="bl" style="font-size:30px;" href="?do=<?=$do;?>&p=<?=($now-1);?>">&lt;&nbsp;</a>
        <?php
        }
        ?>

        <?php
        for($i=1;$i<=$pages;$i++){
            $fontsize=($i==$now)?'30px':'24px';
        ?>
        <a class="bl" style="font-size:<?=$fontsize;?>;" href="?do=<?=$do;?>&p=<?=$i;?>"><?=$i;?></a>
        <?php
        }
        ?>
        <?php
        if(($now+1)<=$pages){
        ?>
        <a class="bl" style="font-size:30px;" href="?do=<?=$do;?>&p=<?=($now+1);?>">&nbsp;&gt;</a>
        <?php
        }
        ?>
        </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr><input type="hidden" name="type" value="<?=$do;?>">
                <td width="200px"><input type="button"
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;back/image.php?title=<?=$do;?>&#39;)"
                        value="新增校園映象圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>