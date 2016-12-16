<?php
  //3がつく値または3の倍数を出力
  for($num=1; $num<=100; $num++){

    if(preg_match("/3/",$num) || $num%3 == 0){
      print($num."<br/>");
    }
  }
?>