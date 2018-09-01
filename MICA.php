<?php 
  if (isset($_POST['publish'])) {
    echo '<style>
  .carousel-wrapper {
    position: relative;
    .carousel-item {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 25px 50px;
      opacity: 0;
      transition: all 0.5s ease-in-out;
      border: 1px solid #aaa;
      .arrow {
      position: absolute;
      top: 0;
      display: block;
      width: 50px;
      height: 100%;
      -webkit-tap-highlight-color: rgba(0,0,0,0);
      background: url("http://haloxp.com/codepen/carousel-arrow-dark.png") 50% 50% / 20px no-repeat;
        &.arrow-prev {
          left: 0;
        }
        &.arrow-next {
          right: 0;
          -webkit-transform: rotate(180deg);
                  transform: rotate(180deg);
        }
      }
      &.light {
        color: white;
        .arrow {
          background: url("http://haloxp.com/codepen/carousel-arrow-light.png") 50% 50% / 20px no-repeat;
        }
      }
      @media (max-width: 480px) {
        .arrow, &.light .arrow {
          background-size: 10px;
          background-position: 10px 50%;
        }
      }
    }
    [id^="target-item"] {
      display: none;
    }
    .item-1 {
      z-index: 2;
      opacity: 1;
    }
    *:target ~ .item-1 {
      opacity: 0;
    }
    #target-item-1:target ~ .item-1 {
      opacity: 1;
    }
    #target-item-2:target ~ .item-2, #target-item-3:target ~ .item-3 {
      z-index: 3;
      opacity: 1;
    }
  }
  </style>'.'<div class="carousel-wrapper">
  <span id="target-item-1"></span>
  <span id="target-item-2"></span>
  <span id="target-item-3"></span>

  <div class="carousel-item item-1">
    <h2>'."XXXXXXXXXXXXX".'</h2>
    <p>Content goes here.</p>
    <a class="arrow arrow-prev" href="#target-item-3"></a>
    <a class="arrow arrow-next" href="#target-item-2"></a>
  </div>
  
  <div class="carousel-item item-2 light">
    <h2>'."XXXXXXXXXXXXX".'</h2>
    <p>Content goes here.</p>
    <a class="arrow arrow-prev" href="#target-item-1"></a>
    <a class="arrow arrow-next" href="#target-item-3"></a>
  </div>
  <div class="carousel-item item-3">
    <h2>'."XXXXXXXXXXXXX".'</h2>
    <p>Content goes here.</p>
    <a class="arrow arrow-prev" href="#target-item-2"></a>
    <a class="arrow arrow-next" href="#target-item-1"></a>
  </div>
</div>';
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