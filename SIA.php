<?php 
  if (isset($_POST['publish'])) {
    echo '<p>'.$_POST['title'].'</p>';
    if(isset($_POST['img_src'])){
    	if($_POST['img_src'] != ""){
			echo '<img src='.$_POST['img_src'].'>';
		}
    }
    echo '<p>'.$_POST['ad_copy'].'</p>'; 
  }
  elseif (isset($_POST['save'])) {
  	$content->type = "SIA";
  	$content->title = $_POST['title'];
  	$content->ad_copy = $_POST['ad_copy'];
    $content->camp_obj = $_POST['camp_obj'];
  	if(isset($_POST['img_src'])){
  		$content->img_src = $_POST['img_src'];
  	}
  	else{
  		$content->img_src = null;
  	}
  
  	$jsonContent = json_encode($content);
  	echo '<p>'.$jsonContent.'</p>';
  }
?> 