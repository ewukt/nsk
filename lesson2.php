<?php
  //ソート
  $data = array(1,2,3,4,5,6,7,8,9,10);
  
  for($loop=0; $loop<count($data); $loop++){
	  $left=mt_rand(0,count($data)-1);
	  $right=mt_rand(0,count($data)-1);
	  
	  $swap=$data[$left];
	  $data[$left]=$data[$right];
	  $data[$right]=$swap;
  }
  	//現在の状態表示
  	echo "--現在の並び--<br/>";
  	for($i=0;$i<count($data);$i++) echo $data[$i]," ";
  	echo "<br/><br/>";
  	
  //逐次決定法によるソート
  for($i=0; $i<count($data)-1; $i++){
  	$min=$i;
  	for($j=$i+1;$j<count($data);$j++){
  		if($data[$min]>$data[$j]) $min=$j;
  	}
  	$temp=$data[$i];
  	$data[$i]=$data[$min];
  	$data[$min]=$temp;
  }
  
  	echo "--ソート後の並び--<br/>";
  	for($i=0;$i<count($data);$i++) echo $data[$i]," ";
  	echo "<br/>";
?>