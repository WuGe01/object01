
<div class="di"
	style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<?php
	include_once "marquee.php";
	?>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
    <span class="t botli">最新消息區
    </span>
        <!--正中央-->
        <?php

        $news=new DB("news");
        $total=$news->nums(['see'=>1]);
        $num=5;
        $pages=ceil($total/$num);
        $now=(!empty($_GET['p']))?$_GET['p']:1;
        $start=($now-1)*$num;
        $ns=$news->all(['see'=>1]," limit $start,$num");
        ?>
        <ol class="ssaa" start="<?=$start+1;?>">
        <?php
        foreach($ns as $n){
        ?>
        <li><?=mb_substr($n['text'],0,20,'utf8');?>...
        <div class='all' style="display:none"><?=$n['text'];?></div>
        </li> 
        <?php
        }
        ?>
        </ul>
                        
        <div style="text-align:center;">
            <?php
            if(($now-1)>0){
            ?>
                <a class="bl" style="font-size:30px;" href="?do=news&p=<?=($now-1);?>">&lt;&nbsp;</a>
            <?php
            }
            ?>

            <?php
            for($i=1;$i<=$pages;$i++){
                $fontsize=($i==$now)?'30px':'24px';
            ?>
            <a class="bl" style="font-size:<?=$fontsize;?>;" href="?do=news&p=<?=$i;?>"><?=$i;?></a>
            <?php
            }
            ?>
                                <?php
            if(($now+1)<=$pages){
            ?>
            <a class="bl" style="font-size:30px;" href="?do=news&p=<?=($now+1);?>">&nbsp;&gt;</a>
            <?php
            }
            ?>
</div>
</div>
<div id="alt"
	style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
	$(".ssaa li").hover(
		function () {
			$("#alt").html("" + $(this).children(".all").html() + "").css({ "top": $(this).offset().top - 50 })
			$("#alt").show()
		}
	)
	$(".ssaa li").mouseout(
		function () {
			$("#alt").hide()
		}
	)
</script>
