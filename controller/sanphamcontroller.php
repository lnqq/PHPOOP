<?php 
include_once './model/sanphammodel.php';
	class sanphamcontroller
	{
		private $id;
		private $tensanpham;
		private $img;
		private $id_loaisp;
		private $mota;
		private $baohanh;
		private $gia;
		//model
		private $sanpham_model;
		//khoi tao
		function __construct()
		{
			$this->sanpham_model = new sanphammodel();
		}
		//ham lay du lieu tu form va dua vao model
		public function luu_tt_sanpham()
		{
			//lay du lieu tu view 
			if (isset($_POST['tensanpham'])&& isset($_POST['tenloaisanpham'])&& isset($_POST['img'])&& isset($_POST['mota'])&& isset($_POST['baohanh'])&& isset($_POST['gia'])){
				//goi ham luu data cua model san pham
				$this->tensanpham = $_POST['tensanpham'];
				$this->id_loaisp = $_POST['tenloaisanpham'];
				$this->img = $_POST['img'];
				$this->mota = $_POST['mota'];
				$this->baohanh = $_POST['baohanh'];
				$this->gia = $_POST['gia'];
				//goi ham luu data cua model sanpham
				$kq = $this->sanpham_model->insert_sanpham($this->tensanpham,$this->id_loaisp,$this->img,$this->mota,$this->baohanh,$this->gia);
				if ($kq) {
					echo 'luu du lieu thanh cong -- sanphamcontroller';
				} else {
					echo'luu du lieu that bai -- sanphamcontroller';
				}
				
			} else {
				echo 'ban chua nhap du lieu -- sanphamcontroller';
			}			
		}//ket thuc insert

		public function danhsach_sanpham()
		{
			$sanpham_data = $this->sanpham_model->danhsach_sanpham();
			return $sanpham_data;
		}

		//do du lieu cua 1 record ra view
		public function sanphamdetail()
		{
			$id = $_GET['chitiet_sanpham'];
			//goi ham model de xu li
			$ketqua = $this->sanpham_model->OneRecordData1($id);
			return $ketqua;
		}
		public function sanphamdetail1()
		{
			$id = $_GET['chitietsanpham'];
			//goi ham model de xu li
			$ketqua = $this->sanpham_model->OneRecordData1($id);
			return $ketqua;
		}
		//update date theo id
		public function edit_sanpham()
		{
			if (isset($_POST['tensanpham'])&& isset($_POST['img'])&& isset($_POST['mota'])&& isset($_POST['baohanh'])&& isset($_POST['gia'])){
				$id = $_POST['id'];
				$this->tensanpham = $_POST['tensanpham'];
				//$this->tenloaisanpham = $_POST['tenloaisanpham'];
				$this->img = $_POST['img'];
				$this->mota = $_POST['mota'];
				$this->baohanh = $_POST['baohanh'];
				$this->gia = $_POST['gia'];
				//goi ham luu data cua model san pham
				$kq = $this->sanpham_model->update_sanpham($id,$this->tensanpham,$this->img,$this->mota,$this->baohanh,$this->gia);
				if ($kq) {
					echo 'thanh cong ... update du lieu - sanphamcontroller';
				} else {
					echo 'fail... update du lieu that bai -- sanphamcontroller';
				}				
			} else {
				echo 'ban chua nhap du lieu -- sanphamcontroller';
			}
			
		}
		
		public function xoa_sanpham()
		{
			$id_sp = $_GET['xoa_sanpham'];
			$ketqua = $this->sanpham_model->delete_sanpham($id_sp);
			return $ketqua;
		}
	}

 ?>