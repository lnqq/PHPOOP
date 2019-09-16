<?php 
	include_once'databasemodel.php';
	/**
	 * 
	 */
	class usermodel extends databasemodel
	{
		private $id_user;
		private $username;
		private $passwod;
		private $email;
		function __construct()
		{
			$this->dbConnect = new databasemodel();
			if ($this->dbConnect->checkDBConnection()) {
				return true;
			} else {
				return false;
			}
		}
 		//viet ham insert
		public function insert_datauser($username,$passwod,$email)
		{
			//gan gia tri dau vao cho vung mien
			//de lay ten theo thuoc tinh
			$this->username = $username;
			$this->passwod = $passwod;
			$this->email = $email;
			//xac dinh cau lenh sql
			$user_sql_insert = "INSERT INTO user(username,passwork,email) values('$this->username','$this->passwod','$this->email')";
			//kiem tra
			echo "vung mien sql insert".$user_sql_insert;
			//thuc hien goi lenh insert vao db
			$ketqua = $this->dbConnect->insertQuery2($user_sql_insert);
			return $ketqua;
		}	
		public function login($username,$password)
		{
			$this->username = $username;
			$this->password = $password;
			//SELECT username, password FROM member WHERE username='$username'"
			//$sql="SELECT * FROM user WHERE username='$username' ";

			// echo  $sql;
			$connection = mysqli_connect("localhost", "root", "");
			$db = mysqli_select_db($connection, "shopgioithieu");
			//$result=mysqli_query($connection,$sql);
			$query = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' ");
			 //$rows = mysqli_num_rows($query);
			if (!$_POST['username']  || !$_POST['password'] ) {
		          echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
		          exit;
		        
		       }
			 if ( $rows = mysqli_num_rows($query)==0) {
			 	 echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        			exit;
			 }
			 $row = mysqli_fetch_array($query);
			 if ($password != $row['passwork']) {
			        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
			        exit;
			    }
			     $_SESSION['username'] = $username;
			     $_POST['username']=$username;
			     //echo  $_POST['username'];
			    //echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
			    include './view/admin/index.php';
			    
			// if($count==1){
 
			// // // Lúc này nó sẽ tự động gửi đến trang thông báo đăng nhập thành công
			// // 	session_register("username");
			// // 	session_register("password");
			// // 	header("location:login_success.php");
			// }
			// else {
			// echo "Sai tên đăng nhập hoặc mật khẩu";
			// }
					}
	}
 ?>