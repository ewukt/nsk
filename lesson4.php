<?php
require 'Person.php';
/**
 * メインメソッド
 */
	//インスタンス生成と情報登録
	$person1=new Person("佐藤太郎","東京都",20,"030123456");
	$person2=new Person("山田花子","青森県",80,"107123456");
	$person3=new Person("木村　次郎","京都府",38,"0750123456");

	//登録情報の表示
	$person1->allprint();
	echo "<br/>";

	$person2->allprint();
	echo "<br/>";

	$person3->allprint();
	echo "<br/>";




?>