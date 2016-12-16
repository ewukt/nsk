<?php
class Person {

	private $name;	 //名前
	private $address;  //住所
	private $age;         //年齢
	private $telephone;//電話番号

	/**
	 * 情報設定コントラスタ
	 *
	 * @param name 名前
	 * @param address 住所
	 * @param age 年齢
	 * @param telephone 電話番号
	 */
	public function __construct($name,$address,$age,$telephone){
		
		$this->name=$name;
		$this->address=$address;
		$this->age=$age;
		$this->telephone=$telephone;
	}

	 /**
	  * 名前読み出しメソッド
	  * @return String 名前
	  */
	public function get_name(){
		return $this->name;
	}

	 /**
	  * 名前書き込みメソッド
	  * @param name 名前
	  */
	public function set_name($name){
		$this->name=$name;
	}

	 /**
	  * 名前表示メソッド
	  */
	public function show_name(){
		echo "氏名:",$this->name,"<br/>";
	}

	/**
	 * 住所読み出しメソッド
	 * @return String 住所
	 */
	public function get_address(){
		return $this->address;
	}

	 /**
	  * 住所書き込みメソッド
	  * @param address 住所
	  */
	public function set_address($address){
		$this->address=$address;
	}

	 /**
	  *住所表示メソッド
	  */
	public function show_address(){
		echo "住所:",$this->address,"<br/>";
	}

	/**
	 * 年齢読み出しメソッド
	 * @return int 年齢
	 */
	public function get_age(){
		return $this->age;
	}

	 /**
	  * 年齢書き込みメソッド
	  * @param age 年齢
	  */
	public function set_age($age){
		$this->age=$age;
	}

	 /**
	  * 年齢表示メソッド
	  */
	public function show_age(){
		echo "年齢:",$this->age,"<br/>";
	}

	/**
	 * 電話番号読み出しメソッド
	 * @return String 電話番号
	 */
	public function get_telephone(){
		return $this->telephone;
	}

	 /**
	  * 電話番号書き込みメソッド
	  * @param telephone 電話番号
	  */
	public function set_telephone($telephone){
		$this->telephone=$telephone;
	}

	 /**
	  * 電話番号表示メソッド
	  */
	public function show_telephone(){
		echo "電話番号:",$this->telephone,"<br/>";
	}

	/**
	 * 情報表示メソッド
	 */
	public function allprint(){
		$this->show_name();
		$this->show_address();
		$this->show_age();
		$this->show_telephone();
	}
}
?>