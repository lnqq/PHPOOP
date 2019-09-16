<?php 
include_once'./controller/loaisanphamcontroller.php';
include_once'./controller/sanphamcontroller.php';
include_once'./controller/usercontroller.php';
if (!isset($_POST['?danhsach_sanpham'])&&!isset($_GET['?danhsach_sanpham'])&&!isset($_GET['danhsach_loaisanpham'])&&!isset($_GET['create_sanpham'])&&!isset($_GET['dangnhap'])&&!isset($_GET['createuser'])&&!isset($_GET['create_loaisanpham'])&&!isset($_GET['chitiet_sanpham'])&&!isset($_POST['username'])&&!isset($_GET['chitiet_loaisanpham'])&&!isset($_GET['danhsach_sanpham'])&&!isset($_GET['chitietsanpham'])) {
	$sanpham_controller = new sanphamcontroller();
	$data = $sanpham_controller->danhsach_sanpham();
	include './view/sanpham/home.php';
}
if (isset($_GET['createuser'])) {
	include './view/user/create.php';
}
	if (isset($_GET['dangnhap'])&& !isset($_POST['username'])) {
		//khoi tao controller va goi ham xu ly san san
		include './view/login/login.php';
		}
	if (isset($_POST['login'])) {
		
		//khoi tao controller va goi ham xu ly san san
		$loaisanpham_controller = new usercontroller();
		$loaisanpham_controller->check_login();
	}
if (isset($_POST['taotaikhoan'])) {
	echo "string";
	//khoi tao controller va goi ham xu ly san san
	$loaisanpham_controller = new usercontroller();
	$loaisanpham_controller->luu_tt_user();
}
//kt truogn hop action -- nhan nut luu_loaisanpham
if (isset($_GET['create_loaisanpham'])) {
	include './view/loaisanpham/create.php';
}
if (isset($_POST['luu_loaisanpham'])) {
	//khoi tao controller va goi ham xu ly san san
	$loaisanpham_controller = new loaisanphamcontroller();
	$loaisanpham_controller->luu_tt_loaisanpham();
}

if (isset($_GET['danhsach_loaisanpham'])) {
	$loaisanpham_controller = new loaisanphamcontroller();
	$data = $loaisanpham_controller->danhsach_loaisanpham();
	include './view/loaisanpham/index.php';
}
if (isset($_GET['chitiet_loaisanpham'])) {
	$chitiet_loaisanpham = new loaisanphamcontroller();
	$ketqua = $chitiet_loaisanpham->loaisanphamdetail();
	include './view/loaisanpham/edit.php';
}

if (isset($_POST['update_loaisanpham'])) {
	$loaisanpham_controller = new loaisanphamcontroller();
	$loaisanpham_controller->edit_loaisanpham();
}
if (isset($_GET['xoa_loaisanpham'])) {
	$xoa_loaisanpham = new loaisanphamcontroller();
	$kq_xoa = $xoa_loaisanpham->xoa_loaisanpham();
	return $kq_xoa;
}

//---- san pham ---//

if (isset($_GET['create_sanpham'])) {
	$loaisanpham_controller = new loaisanphamcontroller();
	$data = $loaisanpham_controller->danhsach_loaisanpham();
	include './view/sanpham/create.php';
}
if (isset($_POST['luu_sanpham'])) {
	$sanpham_controller = new sanphamcontroller();
	$sanpham_controller->luu_tt_sanpham();
}
if (isset($_GET['danhsach_sanpham'])) {
	$sanpham_controller = new sanphamcontroller();
	$data = $sanpham_controller->danhsach_sanpham();
	include './view/sanpham/index.php';
}
if (isset($_GET['chitiet_sanpham'])) {
	$chitiet_sanpham = new sanphamcontroller();
	$loaisanpham_controller = new loaisanphamcontroller();
	$data = $loaisanpham_controller->danhsach_loaisanpham();
	$ketqua = $chitiet_sanpham->sanphamdetail();
	include './view/sanpham/edit.php';
}
if (isset($_GET['chitietsanpham'])) {
	$chitiet_sanpham = new sanphamcontroller();
	$ketqua = $chitiet_sanpham->sanphamdetail1();
	include './view/sanpham/detail.php';
}
if(isset($_POST['update_sanpham'])){
	$sanpham_controller = new sanphamcontroller();
	$data = $sanpham_controller->danhsach_sanpham();
	$sanpham_controller->edit_sanpham();
	//include './view/sanpham/index.php';
}
if (isset($_GET['xoa_sanpham'])) {
		$xoa_sanpham = new sanphamcontroller();
		$kq_xoa = $xoa_sanpham->xoa_sanpham();
		return $kq_xoa;
	}

?>