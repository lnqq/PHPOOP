<?php 
	include_once 'databasemodel.php';
	/**
	 * 
	 */
	class sanphammodel extends databasemodel
	{
		private $id;
		private $tensanpham;
		private $id_loaisp;
		private $img;
		private $mota;
		private $baohanh;
		private $gia;
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
 		//viet ham insert
		public function insert_sanpham($tensanpham,$id_loaisp,$img,$mota,$baohanh,$gia)
		{
			//gan gia tri dau vao cho san pham
			//de lay ten theo thuoc tinh
			$this->tensanpham = $tensanpham;
			$this->id_loaisp = $id_loaisp;
			$this->img = $img;
			$this->mota = $mota;
			$this->baohanh = $baohanh;
			$this->gia = $gia;
			//xac dinh cau lenh sql
			$sanpham_sql_insert = "INSERT INTO sanpham(tensanpham,id_loaisp,img,mota,baohanh,gia) values('$this->tensanpham','$this->id_loaisp','$this->img','$this->mota','$this->baohanh','$this->gia')";
			//kiem tra
			echo "san pham sql insert".$sanpham_sql_insert;
			//thuc hien goi lenh insert vao db
			$ketqua = $this->dbConnect->insertQuery2($sanpham_sql_insert);
			return $ketqua;
		}

		public function danhsach_sanpham()
		{
			$sql = "SELECT * From sanpham";
			$ketqua = $this->dbConnect->selectQuery2($sql);
			return $ketqua;
		}

		//lay mot record date theo sql select
		public function OneRecordData1($id_record)
		{
			$sql_oneRecord = "SELECT * 
							  From sanpham, loaisampham
							  where sanpham.id_loaisp = loaisampham.id_loaisp
							  and sanpham.id = $id_record";
			$ketqua = $this->dbConnect->OneRecord1($sql_oneRecord);
			return $ketqua;
		}

		//update date theo id chuyen vao
		public function update_sanpham($id,$tensanpham,$img,$mota,$baohanh,$gia)
		{
			$sql = "UPDATE sanpham
					SET tensanpham = '$tensanpham', img = '$img', mota = '$mota', baohanh = '$baohanh', gia = '$gia'
					where id = $id";
					echo $sql;
			$ketqua = $this->dbConnect->update2($sql);
			return $ketqua;
		}	

		//thiet lap cac gia tri thuoc tinh cho model
		public function thietlap_sanpham($ten,$loaisanpham,$img,$mota,$baohanh,$gia)
		{
			$this->tensanpham = $ten;
			$this->id_loaisp = $loaisanpham;
			$this->img = $img;
			$this->mota = $mota;
			$this->baohanh = $baohanh;
			$this->gia = $gia;
		}

		//xoa vung mien theo id
		public function delete_sanpham($id_sp)
		{
			$sql_delete = "DELETE FROM sanpham WHERE id = $id_sp";
			//echo "SQL SELECT ONE RECORD".$sql_delete;
			$ketqua = $this->dbConnect->deleteQuery($sql_delete);
			return $ketqua;
		}
	}
 ?>