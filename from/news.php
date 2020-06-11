
<div class="di"
	style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<?php
	include_once "marquee.php";
	?>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
    <span class="t botli">最新消息區
        <?php
            $new=new DB('news');
            $total=$new->nums(['see'=>'1']);
            $num=5;
            $page=ceil($total/$num);
            $now=(!empty($_GET['p']))?$_GET['p']:1;
            $start=($now-1)*$num;
            $ns=$new->all(['see'=>'1'], " limit $start,$num");
        ?>
    </span>
    <ul class="ssaa" start="<?=$start+1;?>">
        <?php           
            $news=$new->all(['see'=>'1'],' limit 5');
            foreach($news as $n){
                echo "<li>";
                echo mb_substr($n['text'],0,20,'utf8');
                echo "...";
                echo "<div class='all' style='display:none'>";
                echo $n['text'];
                echo "</div>";
                echo "</>";
            }
        ?>
    </ul>
	<div style="text-align:center;">
        <a class="bl" style="font-size:30px;" href="?do=news&p=0">&lt;&nbsp;</a>
        <?php
        for($i;$i<=$page;$i++){
       
        echo "<a class='bl' style='font-size:30px;' href='?do=news&p=".$i."'>".$i."</a>";

        }
        ?>
		<a class="bl" style="font-size:30px;" href="?do=news&p=0">&nbsp;&gt;</a>
	</div>
</div>
<div id="alt"
	style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
	$(".sswww").hover(
		function () {
			$("#alt").html("" + $(this).children(".all").html() + "").css({ "top": $(this).offset().top - 50 })
			$("#alt").show()
		}
	)
	$(".sswww").mouseout(
		function () {
			$("#alt").hide()
		}
	)
</script>
