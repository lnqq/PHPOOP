<?php 
include_once './model/loaisanphammodel.php';
class loaisanphamcontroller
{
 private $id_loaisp;
 private $tenloaisanpham;
    //model
 private $loaisp_model;
 function __construct()
 {
  $this->loaisp_model = new loaisanphammodel();
}
public function luu_tt_loaisanpham()
{
      //Lay du lieu tu view (form)
 if (isset($_POST['tenloaisanpham'])) {
  $this->tenloaisanpham = $_POST['tenloaisanpham'];
          //Goi ham luu data cua Model loai san pham
  $kq = $this->loaisp_model->insert_dataloaisanpham($this->tenloaisanpham);
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

    //danh sach loai san pham tu model
      public function danhsach_loaisanpham()
      {
      //goi function model tuong ung de goi date tuong ung
        $loaisanpham_data = $this->loaisp_model->danhsach_loaisanpham();
        return $loaisanpham_data;
      }

    //do du lieu cua 1 record ra view
      public function loaisanphamdetail()
      {
        $id = $_GET['chitiet_loaisanpham'];
      //goi ham moddel de xu li
        $ketqua = $this->loaisp_model->OneRecordData1($id);
        return $ketqua;
      }

    //update date theo id
      public function edit_loaisanpham()
      {
        if (isset($_POST['tenloaisanpham'])) {
          $id = $_POST['id'];   
          $this->tenloaisanpham = $_POST['tenloaisanpham'];
            //Goi ham luu data cua Model loai san pham
          $kq = $this->loaisp_model->update_loaisanpham(
            $id,$this->tenloaisanpham);
          echo var_dump($kq);
            if ($kq) {//Thanh cong
              echo 'Thanh cong ...Update du lieu  
              --- loaisanphamcontroller';

            }else {//loi
              echo 'Fall ...Update du lieu that bai --- loaisanphamcontroller';
            }
        }else { // khong co
          echo 'Ban chua nhap du lieu -- loaisanphamcontroller';
        }    
        
      }
      public function xoa_loaisanpham()
      {
        $id = $_GET['xoa_loaisanpham'];
        $ketqua = $this->loaisp_model->delete_loaisanpham($id);
        return $ketqua;
      }

    }
    ?>