<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//จัดการบัญชีผู้ใช้
	public function signinORup()
	{
		$this->load->view('SignUporSignIn');
	}
	public function checkemail()
	{
		$this->load->view('checkemail');
	}
	function form_Signin()
	{
		$data["heading"] = "ลงชื่อเข้าใช้";
		//$this->output('v_form_Signin', $data);
		$this->load->view('SignUporSignIn', $data);
		//เปลี่ยนให้มันเป็น id SignIn
	}
	function form_doSignin()
	{
		$data["heading"] = "ตรวจสอบการลงชื่อเข้าใช้";
		$this->load->view('doSignin', $data);
	}
	function SignUp_insert()
	{
		print "<pre>";
		print_r($this->input->post());
		print "</pre>";
		$this->load->model('manage_hotel');
		$this->manage_hotel->firstname = $this->input->post("firstname");
		$this->manage_hotel->lastname = $this->input->post("lastname");
		$this->manage_hotel->password = $this->input->post("password");
		$this->manage_hotel->email = $this->input->post("email");
		$this->manage_hotel->status = $this->input->post("status");
		$this->manage_hotel->phone = $this->input->post("phone");
		$this->manage_hotel->address = $this->input->post("address");
		$this->manage_hotel->insert_SignUp();
		$this->load->helper('url');
		redirect("welcome/signinORup");	
	}
	function profile()
	{
		$data["heading"] = "บัญชีผู้ใช้";
		$this->load->view('profile', $data);
	}
	function profileStaff()
	{
		$data["heading"] = "บัญชีผู้ใช้";
		$this->load->view('profileStaff', $data);
	}
	function profileManager()
	{
		$data["heading"] = "บัญชีผู้ใช้";
		$this->load->view('profileManager', $data);
	}
	public function signout()
	{
		$this->load->view('SignOut');
	}
	
	//จัดการบัญชีผู้ใช้


	//หน้าที่ยังไม่เข้าสู่ระบบ
	public function index()
	{
		$data["heading"] = "หน้าแรก";
		$this->load->view('index', $data);
	}
	public function index2()
	{
		$data["heading"] = "หน้าแรกเข้ารหัสแล้ว";
		$this->load->view('index2', $data);
	}
	public function about()
	{
		$this->load->view('about1');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function detail11()
	{
		$this->load->view('detail11');
	}
	public function detail21()
	{
		$this->load->view('detail21');
	}
	public function detail31()
	{
		$this->load->view('detail31');
	}
	public function detail41()
	{
		$this->load->view('detail41');
	}
	//หน้าที่ยังไม่เข้าสู่ระบบ


	//หน้าที่่เข้าสู่ระบบ
	public function booking2()
	{
		$data["heading"] = "กรอกแบบฟอร์ม";
		$this->load->view('booking2');
	}
	public function about2()
	{
		$this->load->view('about2');
	}
	public function contact2()
	{
		$this->load->view('contact2');
	}
	public function comment2()
	{
		$this->load->view('comment2');
	}
	public function comment()
	{
		$this->load->view('comment');
	}
	public function detail12()
	{
		$this->load->view('detail12');
	}
	public function detail22()
	{
		$this->load->view('detail22');
	}
	public function detail32()
	{
		$this->load->view('detail32');
	}
	public function detail42()
	{
		$this->load->view('detail42');
	}
	function Book_saveform()
	{
		$data["heading"] = "ส่งค่าจากแบบฟอร์มไปเก็บเซคชั่นไว้ก่อน";
		$this->load->view('dosaveform', $data);
		/*$_SESSION['byuser']=$this->input->post("byuser") ;
		$_SESSION['checkin']=$this->input->post("checkin") ;
		$_SESSION['checkout']=$this->input->post("checkout");
		$_SESSION['people']=$this->input->post("people");
		redirect("welcome/form_searchRoom2");	*/
	}
	function form_searchRoom2()
	{
		//ลิ้งไปหน้าที่login แล้ว
		$data["heading"] = "เลือกจำนวนห้องพัก";
		$this->load->view('searchRoom2', $data);
	}
	/*function form_day(){
		$this->load->view('WeekendDate');
	}*/
	function searchprice2()
	{
		$this->load->view('searchPrice2');
	}
	function paymoney()
	{
		//หน้าลิ้งจาก ajax
		$this->load->view('paymoney');
	}
	/*function saveBooking(){
		//หน้าลิ้งจาก ajax ไม่ได้ใช้
		$this->load->view('saveBooking');
	}
	function paysbuy()
	{
		//หน้าลิ้งจาก ajax
		$this->load->view('paysbuy');
	}*/
	function Book_insert()
	{
		print "<pre>";
		print_r($this->input->post());
		print "</pre>";
		$this->load->model('manage_hotel');
		//$this->manage_hotel->id_book = $last_id;
		$this->manage_hotel->checkin = $_SESSION['checkin'];
		$this->manage_hotel->checkout = $_SESSION['checkout'];
		$this->manage_hotel->people = $_SESSION['people'];
		$this->manage_hotel->byuser = $_SESSION['email'];
		$this->manage_hotel->name_room1 = $_SESSION['name_room1'];
		$this->manage_hotel->name_room2 = $_SESSION['name_room2'];
		$this->manage_hotel->name_room3 = $_SESSION['name_room3'];
		$this->manage_hotel->name_room4 = $_SESSION['name_room4'];
		$this->manage_hotel->room1 =$_SESSION['room1'];
		$this->manage_hotel->room2 =$_SESSION['room2'];
		$this->manage_hotel->room3 =$_SESSION['room3'];
		$this->manage_hotel->room4 =$_SESSION['room4'];
		$this->manage_hotel->pay_room1 =$_SESSION['pay_room1'];
		$this->manage_hotel->pay_room2 =$_SESSION['pay_room2'];
		$this->manage_hotel->pay_room3 =$_SESSION['pay_room3'];
		$this->manage_hotel->pay_room4 =$_SESSION['pay_room4'];
		// 	$s1 = "";$s2 = "";$s3 = "";$s4 = "";
		// 	$room1=$_SESSION['room1'];$room2=$_SESSION['room2'];
		// 	$room3=$_SESSION['room3'];$room4=$_SESSION['room4'];
		// 	//Superior ห้องละ 3500 บาท  2 ห้อง  2 คืน  ราคารวม  14400 บาท
		// 	if($room1!="0"){
		// 		$s1 = "<BR>".$_SESSION['name_room1']." ".$_SESSION['room1']." ห้อง "
		// 				.$day." คืน ราคา ".$_SESSION['pay_room1']." บาท"."<BR>";
		// 	}
		// 	if($room2!="0"){
		// 		$s2 = "<BR>".$_SESSION['name_room2']." ".$_SESSION['room2']." ห้อง "
		// 				.$day." คืน ราคา ".$_SESSION['pay_room2']." บาท"."<BR>";
		// 	}
		// 	if($room3!="0"){
		// 		$s3 = "<BR>".$_SESSION['name_room3']." ".$_SESSION['room3']." ห้อง "
		// 			    .$day." คืน ราคา ".$_SESSION['pay_room3']." บาท"."<BR>";
		// 	}
		// 	if($room4!="0"){
		// 		$s4 = "<BR>".$_SESSION['name_room4']." ".$_SESSION['room4']." ห้อง "
		// 				.$day." คืน ราคา ".$_SESSION['pay_room4']." บาท"."<BR>";
		// 	}
		// 	$s = $s1.$s2.$s3.$s4;
		// $this->manage_hotel->book_room =$s;
		$this->manage_hotel->paymoney =$_SESSION['paymoney'];
		$this->manage_hotel->datetime = date("Y-m-d")."/".date("H:i:s");
		$this->manage_hotel->day = $_SESSION['day'];
		$this->manage_hotel->status = 'ค้างชำระ';
		$this->manage_hotel->insert_book();
		$this->load->helper('url');
		redirect("welcome/paysbuy");	
	}
	function paysbuy(){
		$data["heading"] = "ส่งไปล็อกอินpaysbuy";
		$this->load->view('paysbuy', $data);
	}
	function paysbuy2(){
		$data["heading"] = "ส่งไปล็อกอินpaysbuy2";
		$this->load->view('paysbuy2', $data);
	}
	function thankyou()
	{
		$data["heading"] = "ขอบคุณที่ชำระเงิน";
		$this->load->view('thankyou', $data);
	}
	function file_order_list2()
	{
		$data["heading"] = "รายการไฟล์ใบจอง";
		$this->load->view('file_order_list', $data);
	}
	function file_order2()
	{
		$data["heading"] = "ไฟล์ใบจอง";
		$this->load->view('file_order2', $data);
	}
	function Payment_insert()
	{
		print "<pre>";
		print_r($this->input->post());
		print "</pre>";
		$this->load->model('manage_hotel');
		/*$this->manage_hotel->email = $_SESSION['email'];
		$this->manage_hotel->paymoney = $_SESSION['paymoney'];		
		$this->manage_hotel->datetime = $_SESSION['datetime'];
		$this->manage_hotel->checkin = $_SESSION['checkin'];
		$this->manage_hotel->checkout = $_SESSION['checkout'];	*/
		$this->manage_hotel->email = $_SESSION['byuser'];
		$this->manage_hotel->paymoney = $_SESSION['paymoney'];
		$this->manage_hotel->datetime = date("Y-m-d")."/".date("H:i:s");
		$this->manage_hotel->checkin = $_SESSION['checkin'];
		$this->manage_hotel->checkout = $_SESSION['checkout'];	
		$this->manage_hotel->id_book = $_SESSION['id_book'];
		$this->manage_hotel->status = 'ชำระเงินแล้ว';
		// $this->manage_hotel->status = 'ชำระเงินแล้ว';
		$this->manage_hotel->insert_Payment();
		$this->load->helper('url');
		//redirect("welcome/form_searchRoom2");	
		redirect("welcome/thankyou");
	}
	// function Payment_insert2()
	// {
	// 	print "<pre>";
	// 	print_r($this->input->post());
	// 	print "</pre>";
	// 	$this->load->model('manage_hotel');
	// 	/*$this->manage_hotel->email = $_SESSION['email'];
	// 	$this->manage_hotel->paymoney = $_SESSION['paymoney'];		
	// 	$this->manage_hotel->datetime = $_SESSION['datetime'];
	// 	$this->manage_hotel->checkin = $_SESSION['checkin'];
	// 	$this->manage_hotel->checkout = $_SESSION['checkout'];	*/
	// 	$this->manage_hotel->email = $_SESSION['byuser'];
	// 	$this->manage_hotel->paymoney = $_SESSION['paymoney'];
	// 	$this->manage_hotel->datetime = date("Y-m-d")."/".date("H:i:s");
	// 	$this->manage_hotel->checkin = $_SESSION['checkin'];
	// 	$this->manage_hotel->checkout = $_SESSION['checkout'];	
	// 	$this->manage_hotel->id_book = $_SESSION['id_book'];
	// 	$this->manage_hotel->status = 'ชำระเงินแล้ว';
	// 	// $this->manage_hotel->status = 'ชำระเงินแล้ว';
	// 	$this->manage_hotel->insert_Payment();
	// 	$this->load->helper('url');
	// 	//redirect("welcome/form_searchRoom2");	
	// 	redirect("welcome/thankyou");
	// }
	function hacker()
	{
		$data["heading"] = "หลอกดูใบจอง";
		$this->load->view('hacker', $data);
	}
	// function Payment_update()
	// {
	// 	$this->manage_hotel->id_book = $_SESSION['id_book'];
	// 	$this->manage_hotel->status = 'ชำระเงินแล้ว';
	// 	$this->manage_hotel->update_Payment();
	// 	redirect("welcome/thankyou");
	// }
	function comment_insert()
	{
		print "<pre>";
		print_r($this->input->post());
		print "</pre>";
		$this->load->model('manage_hotel');
		$this->manage_hotel->name = $this->input->post("name");
		$this->manage_hotel->email = $_SESSION['email'];
		$this->manage_hotel->subject = $this->input->post("subject");		
		$this->manage_hotel->message = $this->input->post("message");
		$this->manage_hotel->datetime = date("Y-m-d")."/".date("H:i:s");
		$this->manage_hotel->insert_comment();
		$this->load->helper('url');
		redirect("welcome/contact2");	
	}

	//หน้าที่่เข้าสู่ระบบ


	//หน้าสำหรับพนักงาน
	public function viewPrice()
	{
		$this->load->view('viewPrice');
	}
	public function form_updatePrice1()
	{
		$this->load->view('updatePrice1');
	}
	public function form_updatePrice2()
	{
		$this->load->view('updatePrice2');
	}
	public function form_updatePrice3()
	{
		$this->load->view('updatePrice3');
	}
	public function form_updatePrice4()
	{
		$this->load->view('updatePrice4');
	}
	public function ok_book()
	{
		print "<pre>";
		print_r($this->input->get());
		print "</pre>";
		$this->load->model('manage_hotel');
		$this->manage_hotel->id_book = $_GET['id'];
		$this->manage_hotel->status = "เข้าพักแล้ว";
		$this->manage_hotel->update_book2();
		redirect("welcome/checkBooking");	
	}
	public function cancel_book()
	{
		$this->load->model('manage_hotel');
		$this->manage_hotel->id_book = $_GET['id'];
		$this->manage_hotel->status = "ไม่เข้าพัก";
		$this->manage_hotel->update_book2();
		redirect("welcome/checkBooking");	
	}
	public function cancel_money()
	{
		print "<pre>";
		print_r($this->input->get());
		print "</pre>";
		$this->load->model('manage_hotel');
		$this->manage_hotel->id_book = $_GET['id'];
		$this->manage_hotel->status = "ยกเลิก";
		$this->manage_hotel->update_book2();
		redirect("welcome/checkmoney");	
	}
	function Price_update()
	{	
		$price_formal=0;
		//alert("dddd");
		print "<pre>";
		print_r($this->input->post());
		print "</pre>";
		$this->load->model('manage_hotel');
		$this->manage_hotel->name = $this->input->post("name");
		$this->manage_hotel->price = $this->input->post("price");
		$price_formal = (($this->input->post("per")+100)*$this->input->post("price"))/100;
		$price_weekend = (($this->input->post("per")+100)*$price_formal)/100;
		$price_holiday = (($this->input->post("per")+100)*$price_weekend)/100;
		/*echo $price_formal;
		echo $price_weekend;
		echo $price_holiday;*/
		$this->manage_hotel->price_formal  = $price_formal;
		$this->manage_hotel->price_weekend = $price_weekend;
		$this->manage_hotel->price_holiday = $price_holiday;
		$this->manage_hotel->percent = $this->input->post("per");
		$this->manage_hotel->update_price();
		redirect("welcome/viewPrice");	
	}
	function checkBooking()
	{
		$data["heading"] = "เช็คสถานะการเข้าพัก";
		$this->load->view('checkBooking', $data);
	}
	function checkmoney()
	{
		$data["heading"] = "ยกเลิกการจอง";
		$this->load->view('checkmoney', $data);
	}
	/*function update_booking()
	{
		$price_formal=0;
		//alert("dddd");
		print "<pre>";
		print_r($this->input->post());
		print "</pre>";
		$this->load->model('manage_hotel');

		$this->manage_hotel->id_book = $this->input->post("id_book");
		$this->manage_hotel->checkin = $this->input->post("checkin");
		$this->manage_hotel->checkout = $this->input->post("checkout");
		$this->manage_hotel->datetime = $this->input->post("datetime");
		$this->manage_hotel->status = $this->input->post("status");
		$this->manage_hotel->byuser = $this->input->post("byuser");
		
		$this->manage_hotel->update_book();
		redirect("welcome/checkBooking");
	}
	function delete_booking()
	{
		$this->load->model('manage_hotel');

		$this->manage_hotel->id_book = $this->input->post("id_book");
		$this->manage_hotel->checkin = $this->input->post("checkin");
		$this->manage_hotel->checkout = $this->input->post("checkout");
		$this->manage_hotel->datetime = $this->input->post("datetime");
		$this->manage_hotel->status = $this->input->post("status");
		$this->manage_hotel->byuser = $this->input->post("byuser");
		$this->manage_hotel->delete_book();
		redirect("welcome/checkBooking");
	}*/
	function Updategallery()
	{
		$data["heading"] = "เปลี่ยนแปลงรูปภาพโรงแรม";
		$this->load->view('Updategallery', $data);
	}
	function dogallery()
	{
		$data["heading"] = "เปลี่ยนแปลงรูปภาพโรงแรม";
		$this->load->view('dogallery', $data);
	}
	//หน้าสำหรับพนักงาน


	//หน้าสำหรับผู้บริหาร
	function account()
	{
		$data["heading"] = "แสดงงบกำไรขาดทุน";
		$this->load->view('Account', $data);
	}
	function detailaccount()
	{
		$data["heading"] = "แสดงงบกำไรขาดทุน";
		$this->load->view('detailaccount', $data);
	}
	function detailsell()
	{
		$data["heading"] = "แสดงยอดขายเป็นตาราง";
		$this->load->view('detailsell', $data);
	}
	function sell1()
	{
		$data["heading"] = "แสดงยอดขายเป็นตาราง";
		$this->load->view('sell1', $data);
	}
	function sell2()
	{
		$data["heading"] = "แสดงยอดขาย";
		$this->load->view('sell2', $data);
	}
	//หน้าสำหรับผู้บริหาร



}
