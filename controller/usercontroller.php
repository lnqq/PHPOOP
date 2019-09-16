<?php 
include_once './model/user.php';
session_start();
class usercontroller
{
	private $id;
	private $username;
  private $password;
  private $email;

	function __construct()
	{
		$this->user_model = new usermodel();
	}
	public function luu_tt_user()
	{
		//Lay du lieu tu view (form)
       if (isset($_POST['username'])!=null&&isset($_POST['password'])!=null&&isset($_POST['email'])!=null) {
          $this->username = $_POST['username'];
          $this->password = $_POST['password'];
          $this->email = $_POST['email'];
    		//Goi ham luu data cua Model Vung mien
          $kq = $this->user_model->insert_datauser($this->username,$this->password,$this->email);
    		if ($kq) {//Thanh cong
    			echo 'Thanh cong ...Luu du lieu  
               --- Vung mien Controller';
    		}else {//loi
    			echo 'Fall ...Luu du lieu that bai --- Vung mien Controller';
    		}
    	}else { // khong co
    		echo 'Ban chua nhap du lieu -- Vung mien Controller';
    	} 
	}
 public function check_login()

  {
     $this->username = $_POST['username'] ;
     $this->password = $_POST['password'] ;
     // if (!$_POST['username']  || !$_POST['password'] ) {
     //      echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        
     //   }
       $kq = $this->user_model->login($this->username,$this->password);

       
  }
}

 ?>