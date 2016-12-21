<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class manage_hotel extends CI_Model {
	public $id;
	public $firstname;
	public $email;
	public $password;
	//public $repassword;

	function __construct() {
    parent::__construct();
	}

	function insert_SignUp() {
		$sql = "INSERT INTO `SignUp_Hotel`( `firstname`,`lastname`, `email`, `password`,`status`,`phone`,`address`) VALUES(?,?,?,?,?,?,?)";
		$this->db->query($sql, array($this->firstname,$this->lastname,$this->email,$this->password,$this->status,$this->phone,$this->address));
	}
	function insert_Payment() {
		$sql = "INSERT INTO `Payment_Hotel`(`id_book`, `email`,`paymoney`, `datetime`, `checkin`,`checkout`) VALUES(?,?,?,?,?,?)";
		$this->db->query($sql, array($this->id_book,$this->email,$this->paymoney,$this->datetime,$this->checkin,$this->checkout));
		$sql = "UPDATE Book_Hotel SET status= ?  WHERE id_book = ?";
		$this->db->query($sql, array($this->status,$this->id_book));
	}
	function update_Payment(){
		$sql = "UPDATE Book_Hotel SET status= ?  WHERE id_book = ?";
		$this->db->query($sql, array($this->status,$this->id_book));
	}
	function insert_book() {
		 $sql = "INSERT INTO `Book_Hotel`( `checkin`,`checkout`, `byuser`, `people`, `name_room1`, `name_room2`, `name_room3`, `name_room4`, `pay_room1`, `pay_room2`, `pay_room3`, `pay_room4`,`room1`, `room2`, `room3`, `room4`, `paymoney`,`datetime`,`day`,`status`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($sql, array($this->checkin,$this->checkout,$this->byuser,$this->people,$this->name_room1,
			$this->name_room2,$this->name_room3,$this->name_room4 ,$this->pay_room1,
			$this->pay_room2,$this->pay_room3,$this->pay_room4,$this->room1,$this->room2,$this->room3,$this->room4,$this->paymoney,$this->datetime,$this->day,$this->status));
		$_SESSION['checkin']=$this->checkin;	
		$_SESSION['checkout']=$this->checkout;	
		$_SESSION['byuser']=$this->byuser;
		$_SESSION['people']=$this->people;
		$_SESSION['name_room1']=$this->name_room1;
		$_SESSION['name_room2']=$this->name_room2;
		$_SESSION['name_room3']=$this->name_room3;
		$_SESSION['name_room4']=$this->name_room4;
		$_SESSION['room1']=$this->room1;
		$_SESSION['room2']=$this->room2;
		$_SESSION['room3']=$this->room3;
		$_SESSION['room4']=$this->room4;
		$_SESSION['pay_room1']=$this->pay_room1;
		$_SESSION['pay_room2']=$this->pay_room2;
		$_SESSION['pay_room3']=$this->pay_room3;
		$_SESSION['pay_room4']=$this->pay_room4;
		$_SESSION['paymoney']=$this->paymoney;
		$_SESSION['datetime']=$this->datetime;
		$_SESSION['day']=$this->day;
	}

	// function insert_book() {
	// 	 $sql = "INSERT INTO `Book_Hotel`( `checkin`,`checkout`, `byuser`, `people`, `paymoney`,`datetime`,`day`,`status`,`book_room`) VALUES(?,?,?,?,?,?,?,?,?)";
	// 	$this->db->query($sql, array($this->checkin,$this->checkout,$this->byuser,$this->people,$this->paymoney,$this->datetime,$this->day,$this->status,$this->book_room));
	// 	$_SESSION['checkin']=$this->checkin;	
	// 	$_SESSION['checkout']=$this->checkout;	
	// 	$_SESSION['byuser']=$this->byuser;
	// 	$_SESSION['people']=$this->people;
	// 	$_SESSION['paymoney']=$this->paymoney;
	// 	$_SESSION['datetime']=$this->datetime;
	// 	$_SESSION['day']=$this->day;
	// 	$_SESSION['book_room']=$this->book_room;
	// }
	function insert_comment() {
		$sql = "INSERT INTO `Comment_Hotel`( `name`,`email`, `subject`, `message`,`datetime`) VALUES(?,?,?,?,?)";
		$this->db->query($sql, array($this->name,$this->email,$this->subject,$this->message,$this->datetime));
	}
	/*function update_book() {
		$sql = "UPDATE Book_Hotel SET checkin=?,checkout=?,byuser=?,people=?,name_room1=?,
		name_room2=?,name_room3=?,name_room4=?,room1=?,room2=?,room3=?,room4=?
		WHERE id_book= '$this->id'";
		$this->db->query($sql, array($this->checkin,$this->checkout,$this->byuser
			,$this->people,$this->name_room1,$this->name_room2,$this->name_room3,$this->name_room4
			,$this->room1,$this->room2,$this->room3,$this->room4));
		$_SESSION['firstname'] = $this->firstname;
		$_SESSION['lastname'] = $this->lastname;
		$_SESSION['password'] = $this->password;
		$_SESSION['email'] = $this->email;
		//echo $firstname;
	}*/
	function update_price() {
		$sql = "UPDATE Room_Hotel SET price=?,price_formal=?,price_weekend=?,price_holiday=?,percent=? 
				WHERE name= '$this->name'";
		$this->db->query($sql, array($this->price,$this->price_formal,$this->price_weekend,$this->price_holiday,$this->percent,$this->name));
		/*
		$this->manage_hotel->price_formal  = $price_formal;
		$this->manage_hotel->price_weekend = $price_weekend;
		$this->manage_hotel->price_holiday = $price_holiday;
		*/
	}
	function update_book() {
		$sql = "UPDATE Book_Hotel SET checkin=? , checkout=? , datetime=? , status=? , byuser=? WHERE id_book = ?";
		$this->db->query($sql, array($this->checkin , $this->checkout , $this->datetime , $this->status , $this->byuser , $this->id_book));
	}
	function update_book2(){
		$sql = "UPDATE Book_Hotel SET status=?  WHERE id_book = ?";
		$this->db->query($sql, array($this->status,$this->id_book));
	}

	function get_by_id($id_book){
		$sql = "SELECT * FROM Book_Hotel 
				WHERE id_book = ?";
		$query = $this->db->query($sql, array($this->status,$id_book));
		return $query;

	}
	/*function update_SignUp() {
		$sql = "UPDATE SignUp_Hotel SET firstname=?,lastname=?,password=?
		WHERE email= '$this->email'";
		$this->db->query($sql, array($this->firstname,$this->lastname,$this->password));
		$_SESSION['firstname'] = $this->firstname;
		$_SESSION['lastname'] = $this->lastname;
		$_SESSION['password'] = $this->password;
		$_SESSION['email'] = $this->email;
		//echo $firstname;
	}
	function delete_SignUp() {
		//$sql = "DELETE FROM SignUp_Hotel  WHERE username = '$_SESSION['username']' ";
	}

	function insert_AddList() {
		$sql = "INSERT INTO `AddList`(`list`, `color`,`date`,`byuser`) VALUES(?,?,?,?)";
		$this->db->query($sql, array($this->list,$this->color,$this->date,$this->byuser));
	}

	function get_by_key($id) {
		$sql = "SELECT * FROM SignUp_Hotel WHERE id = ? ";
		$query = $this->db->query($sql, array($this->username,$this->email,$this->password)) ;
		return $query;
	}

	function last_insert_id(){
		return $this->db->insert_id();
	}*/

}
?>
