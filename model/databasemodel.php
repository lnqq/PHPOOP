<?php 
	/**
	 * 
	 */
	class databasemodel
	{
		//cac thuoc tinh cua class
		private $host_name = "localhost";
		private $user_name = "root";
		private $password = "";
		private $db_name = "shopgioithieu";
		
	    //Chuoi sql abstract
	    private $sql = '';

		//bien kiem tra trang thai ket noi
		private $ketnoi = false;

		//cac phuong thuc
		//1. kiem tra let noi CSDL
		public function checkDBConnection()
		{
			$this->ketnoi = mysqli_connect($this->host_name,$this->user_name,$this->password,$this->db_name);
			if ($this->ketnoi) {
				return true;
			} else {
				return false;
			}			
		}
		//thuc hien insert kieu 2
		public function insertQuery2($sql_string)
		{
			//thuc hien ket nooi
			$ketqua_ketnoi = mysqli_query($this->ketnoi,$sql_string);
			if ($this->ketnoi) {
				echo 'insert to datebase succes - insertQuery';
				return true;
			} else {
				echo 'insert to database fail - insertQuery';
				return false;
			}
		}

		//Ham thuc hien Select query 2 - Lay du lieu
	    public function selectQuery2($sql_select)
	    {
	        $ketqua_select = array();
	        //Lay du lieu kieu utf8 ra de hien thi
	        mysqli_query($this->ketnoi,"SET character_set_results=utf8");
	        $ketqua_ketnoi = mysqli_query($this->ketnoi,$sql_select);
	       if ($ketqua_ketnoi) {
	            while ($data_row = mysqli_fetch_assoc($ketqua_ketnoi)) {
	                $ketqua_select[] = $data_row;
	            }
	            //tra ve ket qua cho ham
	            return $ketqua_select;
	       }else {
	            echo 'Select bi loi .... DB model';
	            return false;
	            //SQL select bi loi -- error
	        }
	    }
	    //Ham set chuoi SQL moi
	    public function setSQL($chuoi_sql)
	    {
	        $this->sql = $chuoi_sql;
	    }

	    //Ham lay chuoi SQL da set

	    public function getSQL()
	    {
	        return $this->sql;
	    }
	        //Ham thuc hien SQL - Truy van
	    public function SQLQuery()
	    {
	        //Thiet lap du lieu utf8 de luu vao Database
	        mysqli_query($this->ketnoi."SET character_set_client=utf8");
	        mysqli_query($this->ketnoi."SET character_set_connection=utf8");

	        $ketqua_truyvan = mysqli_query($this->ketnoi,$this->sql);
	        return $ketqua_truyvan; // True-False 
	    }

	    //Ham thuc hien Select query - Lay du lieu
	    public function SelectQuery()
	    {
	        $ketqua_truyvan = array();
	        //Lay du lieu kieu utf8 ra de hien thi
	        mysqli_query($this->ketnoi,"SET character_set_results=utf8");

	        if ($trangthai_truyvan = $this->SQLQuery()) { //Cau lenh SQL select la ok
	            //Tra ve du lieu theo SQL da xac dinh --> lay tung Row du lieu
	            while ($row = mysqli_fetch_assoc($trangthai_truyvan)) {
	                $ketqua_select[] = $row;
	                
	            }
	            //tra ve ket qua cho ham
	            return $ketqua_select;
	        }else {
	            return false;
	            //SQL select bi loi -- error
	        }
	    }
	       // Ham Inser du lieu
	    public function insertQuery()
	    {
	        if ($this->SQLQuery()) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    //Ham update du lieu
	    public function updateQuery()
	    {
	        if ($this->SQLQuery()) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    //Ham delete du lieu
	    // public function deleteQuery()
	    // {
	    //     if ($this->SQLQuery()) {
	    //         return true;
	    //     }else{
	    //         return false;
	    //     }
	    // }
	public function deleteQuery($sql_delete)
		{
			//Thuc hien ket noi
			$ketqua_ketnoi = mysqli_query($this->ketnoi, $sql_delete);
			if($ketqua_ketnoi){
				$message = "xóa thành công !!!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				return true;
			} else {
				$message = "Không thể xóa kết quả này vì nó đang được sữ dụng ở bảng khác !!!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				return false;
			}

		}
	    //Ham lay 1 RECORD du lieu trong DB
	    public function selectOneRecord()
	    {
	        mysql_query($this->ketnoi,"SET character_set_results=utf8");
	        if ($trangthai_truyvan = $this->SQLQuery()) {
	            $row = mysqli_fetch_row($trangthai_truyvan);
	            return $row;
	        }else {
	            return false;
	        }
	    }
	    public function update2($sql_select)
	    {
	         //Thuc hien ket noi
	        $ketqua_ketnoi = mysqli_query($this->ketnoi,$sql_select);
	        if ($ketqua_ketnoi) {
	            //echo 'Insert to Database SUCCESS - Insert Query';
	            return true;
	        }else {
	            echo 'Insert to Database  FAIL - Insert Query';
	            return false;
	        }
	        
	    }

	    //Ham lay 1 RECORD du lieu trong DB
	    public function OneRecord1($select_one)
	    {
	        $ketqua_ketnoi = mysqli_query($this->ketnoi,$select_one);

	        if ($ketqua_ketnoi) {
	            $data_row = mysqli_fetch_row($ketqua_ketnoi);
	            return $data_row;
	        }else {
	            return false;
	        }
	    }

	}
?>