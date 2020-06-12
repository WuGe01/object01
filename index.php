
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>卓越科技大學校園資訊系統</title>
	<link href="./plugins/css.css" rel="stylesheet" type="text/css">
	<!-- <link href="./plugins/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
	<script src="./plugins/jquery-3.4.1.js"></script>
	<script src="./plugins/js.js"></script>
</head>

<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
				onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<!-- <iframe style="display:none;" name="back" id="back"></iframe> -->
	<div id="main">
	<?php
	include_once "./plugins/try.php";
	$title=new DB('main');
	$ti=$title->find(['see'=>1]);
	?>
		<a title="<?=$ti['text']?>" href="index.php">
			<div class="ti" style="background:url('img/<?=$ti['img'];?>'); background-size:cover;"></div>
			<!--標題-->
		</a>
		
		<div id="ms">
			<div id="lf" style="float:left;">
				<div id="menuput" class="dbor">
					<!--主選單放此-->
					<span class="t botli">主選單區</span>
					<?php
						$mume=new DB("menu");
						$mains=$mume->all(["parent"=>"0",'see'=>1]);
						foreach($mains as $main){
						?>	
						
						<div class="mainmu" >	
						<a href="<?=$main['herf'];?>"><?=$main['name'];?></a>
						
						<div class="mw" >
						<?php

						$chhsub=$mume->nums(["parent"=>$main['id']]);
						if($chhsub>0){
							$subs=$mume->all(["parent"=>$main['id']]);
							foreach($subs as $sub){
								echo "<div class='mainmu2'><a href='".$sub['herf']."'>".$sub['name']."</a></div>";
							}
						}
						?>
						</div>
						</div>
					<?php

						}
					?>
				</div>
				<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
					<span class="t">進站總人數 :
					<?php 
					$total=new DB('total');
					$tt=$total->find(1);
					echo $tt['total'];
					?>
					</span>
				</div>
			</div>
			<!-- 中間 -->
			<?php 
			
			$do=(!empty($_GET['do']))?$_GET['do']:'main';
			$file="from/".$do.".php";
			if(file_exists($file)){
				include $file;
			}else{
				include "from/main.php";
			}
			
			
			?>
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
			<div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
				<!--右邊-->
				<?php

				if(empty($_SESSION['login'])){

				
				?>
				<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
					onclick="lo(&#39;?do=login&#39;)">管理登入</button>
				<?php
				}else{
				?>
				<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
					onclick="lo(&#39;backend.php&#39;)">返回管理</button>
				<?php
				}
				?>
				<div style="width:89%; height:480px;" class="dbor">
					<span class="t botli">校園映象區</span>
					<div style="text-align:center;margin:10px"><img src="./icon/up.jpg" onclick="pp(1)"></div>
					<?php
						$image=new DB('image');
						$imgs=$image->all(['see'=>'1']);
						$tt=0;
						foreach($imgs as $img){
							echo "<div class='im' style='text-align:center;margin:10px' id='ssaa".$tt."'>";
							echo "<img src='./img3/".$img['img']."' style='width:150px;height:103px'>";
							echo "</div>";
							$tt++;
						}
					?>
					<div style="text-align:center;margin:10px"><img src="./icon/dn.jpg" onclick="pp(2)"></div>
					<script>

						var nowpage = 0, num = <?=$image->nums(['see'=>'1']);?>;
						function pp(x) {
							var s, t;
							if (x == 1 && nowpage - 1 >= 0) { nowpage--; }
							if (x == 2 && (nowpage + 1)  <= num - 3) { nowpage++; }
							$(".im").hide()
							for (s = 0; s <= 2; s++) {
								t = s * 1 + nowpage * 1;
								$("#ssaa" + t).show()
							}
						}
						pp(1)
					</script>
				</div>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div
			style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
			<span class="t" style="line-height:123px;">
			<?php 
			$bottom=new DB('bottom');
			$tbo=$bottom->find(1);
			echo $tbo['bottom'];
			?>
			</span>
		</div>
	</div>

</body>

</html>