<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
<?php
$ad=new DB('ad');
$ads=$ad->all(['see'=>'1']);
foreach($ads as $a){
    echo $a['text'];
    for($i=0;$i<20;$i++){
        echo "&nbsp;";
    }
}
?>
</marquee>