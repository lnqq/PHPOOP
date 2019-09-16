<?php 
	/**
	 * 
	 */
	include_once 'databasemodel.php';
	class loaisanphammodel extends databasemodel
	{
		private $id_loaisp;
		private $tenloaisanpham;
		private $dbConnect;
		function __construct()
		{
			$this->dbConnect = new databasemodel();
			if ($this->dbConnect->checkDBConnection()) {
				return true;
			} else {
			 	return false;
			}
		}
		//viet ham insert query 2
		public function insert_dataloaisanpham($tenloaisanpham)
		{
			//gan gia tri dau vao cho loai san pham
			//(de lay ten theo thuoc tinh)
			$this->tenloaisanpham = $tenloaisanpham;
			//xac dinh cau lenh sql
			$loaisanpham_sql_insert = "INSERT INTO loaisampham(tenloaisanpham) values ('$this->tenloaisanpham')";
			//kiemtra
			echo" loai san pham sql insert".$loaisanpham_sql_insert;
			//thuc hien goi lenh insert vao db;
			$ketqua = $this->dbConnect->insertQuery2($loaisanpham_sql_insert);
			return $ketqua;
		}

		//hien thi danh sach loai san pham
		public function danhsach_loaisanpham()
		{
			$sql = "SELECT * From loaisampham";
			//thuc hien insert va check ket qua
			$ketqua = $this->dbConnect->selectQuery2($sql);
			return $ketqua;
		}
		
		//lay mot record date theo sql select
		public function OneRecordData1($id_record)
		{
			$sql_oneRecord = "SELECT * From loaisampham where id_loaisp = $id_record";
			$ketqua = $this->dbConnect->OneRecord1($sql_oneRecord);
			return $ketqua;
		}

		//update date theo id chuyen vao
		public function update_loaisanpham($id,$tenloaisanpham)
		{
			//cau lenh truy van
			$sql = "UPDATE loaisampham
					SET tenloaisanpham = '$tenloaisanpham'
					where id_loaisp = $id";
			$ketqua = $this->dbConnect->update2($sql);
			echo var_dump($ketqua);
			return $ketqua;
		}

		//thiet lap cac gia tri thuoc tinh cho model
		public function thietlap_loaisanpham($id,$loaisampham)
		{
			$this->id_loaisp = $id;
			$this->loaisampham = $loaisampham;
		}

		//xoa vung mien theo id
		public function delete_loaisanpham($id)
		{
			$sql_delete = "DELETE FROM loaisampham WHERE id_loaisp = $id";
			//echo "SQL SELECT ONE RECORD".$sql_delete;
			$ketqua = $this->dbConnect->deleteQuery($sql_delete);
			return $ketqua;
		}
	}
 ?>