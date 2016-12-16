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
  	
  
  	//隣接交換法によるソート
  	for($i=count($data)-1;$i>0;$i--){
  		for($j=0;$j<$i;$j++){
  			if($data[$j]>$data[$j+1]){
  
  				echo $data[$j],"と",$data[$j+1],"を入れ替え<br/>";
  				$temp=$data[$j];
  
  				$data[$j]=$data[$j+1];
  
  				$data[$j+1]=$temp;
   			}
  		}
  	}

        //現在の状態表示
  	echo "--ソート後の並び--<br/>";
  	for($i=0;$i<count($data);$i++) echo $data[$i]," ";
  	echo "<br/>";
?>