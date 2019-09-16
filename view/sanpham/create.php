<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  h1.page-header {
    margin-top: -5px;
  }

  .sidebar {
    padding-left: 0;
  }

  .main-container { 
    background: #FFF;
    padding-top: 15px;
    margin-top: -20px;
  }

  .footer {
    width: 100%;
  }  

  :focus {
    outline: none;
  }

  .side-menu {
    position: relative;
    width: 100%;
    height: 100%;
    background-color: #f8f8f8;
    border-right: 1px solid #e7e7e7;
  }
  .side-menu .navbar {
    border: none;
  }
  .side-menu .navbar-header {
    width: 100%;
    border-bottom: 1px solid #e7e7e7;
  }
  .side-menu .navbar-nav .active a {
    background-color: transparent;
    margin-right: -1px;
    border-right: 5px solid #e7e7e7;
  }
  .side-menu .navbar-nav li {
    display: block;
    width: 100%;
    border-bottom: 1px solid #e7e7e7;
  }
  .side-menu .navbar-nav li a {
    padding: 15px;
  }
  .side-menu .navbar-nav li a .glyphicon {
    padding-right: 10px;
  }
  .side-menu #dropdown {
    border: 0;
    margin-bottom: 0;
    border-radius: 0;
    background-color: transparent;
    box-shadow: none;
  }
  .side-menu #dropdown .caret {
    float: right;
    margin: 9px 5px 0;
  }
  .side-menu #dropdown .indicator {
    float: right;
  }
  .side-menu #dropdown > a {
    border-bottom: 1px solid #e7e7e7;
  }
  .side-menu #dropdown .panel-body {
    padding: 0;
    background-color: #f3f3f3;
  }
  .side-menu #dropdown .panel-body .navbar-nav {
    width: 100%;
  }
  .side-menu #dropdown .panel-body .navbar-nav li {
    padding-left: 15px;
    border-bottom: 1px solid #e7e7e7;
  }
  .side-menu #dropdown .panel-body .navbar-nav li:last-child {
    border-bottom: none;
  }
  .side-menu #dropdown .panel-body .panel > a {
    margin-left: -20px;
    padding-left: 35px;
  }
  .side-menu #dropdown .panel-body .panel-body {
    margin-left: -15px;
  }
  .side-menu #dropdown .panel-body .panel-body li {
    padding-left: 30px;
  }
  .side-menu #dropdown .panel-body .panel-body li:last-child {
    border-bottom: 1px solid #e7e7e7;
  }
  .side-menu #search-trigger {
    background-color: #f3f3f3;
    border: 0;
    border-radius: 0;
    position: absolute;
    top: 0;
    right: 0;
    padding: 15px 18px;
  }
  .side-menu .brand-name-wrapper {
    min-height: 50px;
  }
  .side-menu .brand-name-wrapper .navbar-brand {
    display: block;
  }
  .side-menu #search {
    position: relative;
    z-index: 1000;
  }
  .side-menu #search .panel-body {
    padding: 0;
  }
  .side-menu #search .panel-body .navbar-form {
    padding: 0;
    padding-right: 50px;
    width: 100%;
    margin: 0;
    position: relative;
    border-top: 1px solid #e7e7e7;
  }
  .side-menu #search .panel-body .navbar-form .form-group {
    width: 100%;
    position: relative;
  }
  .side-menu #search .panel-body .navbar-form input {
    border: 0;
    border-radius: 0;
    box-shadow: none;
    width: 100%;
    height: 50px;
  }
  .side-menu #search .panel-body .navbar-form .btn {
    position: absolute;
    right: 0;
    top: 0;
    border: 0;
    border-radius: 0;
    background-color: #f3f3f3;
    padding: 15px 18px;
  }
  /* Main body section */
  .side-body {
    margin-left: 310px;
  }
  /* small screen */
  @media (max-width: 768px) {
    .side-menu {
      position: relative;
      width: 100%;
      height: 0;
      border-right: 0;
    }

    .side-menu .navbar {
      z-index: 999;
      position: relative;
      height: 0;
      min-height: 0;
      background-color:none !important;
      border-color: none !important;
    }
    .side-menu .brand-name-wrapper .navbar-brand {
      display: inline-block;
    }
    /* Slide in animation */
    @-moz-keyframes slidein {
      0% {
        left: -300px;
      }
      100% {
        left: 10px;
      }
    }
    @-webkit-keyframes slidein {
      0% {
        left: -300px;
      }
      100% {
        left: 10px;
      }
    }
    @keyframes slidein {
      0% {
        left: -300px;
      }
      100% {
        left: 10px;
      }
    }
    @-moz-keyframes slideout {
      0% {
        left: 0;
      }
      100% {
        left: -300px;
      }
    }
    @-webkit-keyframes slideout {
      0% {
        left: 0;
      }
      100% {
        left: -300px;
      }
    }
    @keyframes slideout {
      0% {
        left: 0;
      }
      100% {
        left: -300px;
      }
    }
    /* Slide side menu*/
    /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
    .side-menu-container > .navbar-nav.slide-in {
      -moz-animation: slidein 300ms forwards;
      -o-animation: slidein 300ms forwards;
      -webkit-animation: slidein 300ms forwards;
      animation: slidein 300ms forwards;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }
    .side-menu-container > .navbar-nav {
      /* Add position:absolute for scrollable menu -> see top comment */
      position: fixed;
      left: -300px;
      width: 300px;
      top: 43px;
      height: 100%;
      border-right: 1px solid #e7e7e7;
      background-color: #f8f8f8;
      overflow: auto;
      -moz-animation: slideout 300ms forwards;
      -o-animation: slideout 300ms forwards;
      -webkit-animation: slideout 300ms forwards;
      animation: slideout 300ms forwards;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }
    @-moz-keyframes bodyslidein {
      0% {
        left: 0;
      }
      100% {
        left: 300px;
      }
    }
    @-webkit-keyframes bodyslidein {
      0% {
        left: 0;
      }
      100% {
        left: 300px;
      }
    }
    @keyframes bodyslidein {
      0% {
        left: 0;
      }
      100% {
        left: 300px;
      }
    }
    @-moz-keyframes bodyslideout {
      0% {
        left: 300px;
      }
      100% {
        left: 0;
      }
    }
    @-webkit-keyframes bodyslideout {
      0% {
        left: 300px;
      }
      100% {
        left: 0;
      }
    }
    @keyframes bodyslideout {
      0% {
        left: 300px;
      }
      100% {
        left: 0;
      }
    }
    /* Slide side body*/
    .side-body {
      margin-left: 5px;
      margin-top: 70px;
      position: relative;
      -moz-animation: bodyslideout 300ms forwards;
      -o-animation: bodyslideout 300ms forwards;
      -webkit-animation: bodyslideout 300ms forwards;
      animation: bodyslideout 300ms forwards;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }
    .body-slide-in {
      -moz-animation: bodyslidein 300ms forwards;
      -o-animation: bodyslidein 300ms forwards;
      -webkit-animation: bodyslidein 300ms forwards;
      animation: bodyslidein 300ms forwards;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }
    /* Hamburger */
    .navbar-toggle-sidebar {
      border: 0;
      float: left;
      padding: 18px;
      margin: 0;
      border-radius: 0;
      background-color: #f3f3f3;
    }
    /* Search */
    #search .panel-body .navbar-form {
      border-bottom: 0;
    }
    #search .panel-body .navbar-form .form-group {
      margin: 0;
    }
    .side-menu .navbar-header {
      /* this is probably redundant */
      position: fixed;
      z-index: 3;
      background-color: #f8f8f8;
    }
    /* Dropdown tweek */
    #dropdown .panel-body .navbar-nav {
      margin: 0;
    }
  }
</style>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
        MENU
      </button>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        Administrator
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
      <form class="navbar-form navbar-left" method="GET" role="search">
        <div class="form-group">
          <input type="text" name="q" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.pingpong-labs.com" target="_blank">Visit Site</a></li>
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Account
            <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="dropdown-header">SETTINGS</li>
              <li class=""><a href="#">Other Link</a></li>
              <li class=""><a href="#">Other Link</a></li>
              <li class=""><a href="#">Other Link</a></li>
              <li class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>    <div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
      <div class="row">
        <!-- uncomment code for absolute positioning tweek see top comment in css -->
        <div class="absolute-wrapper"> </div>
        <!-- Menu -->
        <div class="side-menu">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Main Menu -->
            <div class="side-menu-container">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Trang chủ</a></li>
                <li><a href="?create_loaisanpham"><span class="glyphicon glyphicon-plane"></span>Tạo loại sản phẩm</a></li>
                <li><a href="?danhsach_loaisanpham"><span class="glyphicon glyphicon-cloud"></span>Danh sách loại sản phẩm</a></li>

                <!-- Dropdown-->
                <li><a href="?create_sanpham"><span class="glyphicon glyphicon-signal"></span>Sản phẩm</a></li>

                <li><a href="?danhsach_sanpham"><span class="glyphicon glyphicon-signal"></span>Danh sách sản phẩm</a></li>

              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>

        </div>
      </div>      </div>
      <div class="col-md-10 content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="text-center">Thêm thông tin sản phẩm</h3>

          </div>
          <div class="panel-body">
            <div class="container"  >
              <div class="card mt-2 col-10">
      <!-- <div class="card-header">
        <h5 style="text-align: center">Them thong tin san pham</h5>
      </div> -->
      <div class="card-body">
        <form class=" mt-5 mr-6" method="post">
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Tên sản phẩm:</label>
            <div class="col-sm-6">
              <input type="text" name="tensanpham" id="tensanpham" class="form-control" >
            </div>
          </div>

          <div class="form-group row"><!-- form-group Begin -->                       
            <label class="col-md-2 control-label">Hình ảnh:</label>                      
            <div class="col-md-6"><!-- col-md-6 Begin -->                          
              <input name="img" type="file" class="form-control" required>                         
            </div><!-- col-md-6 Finish -->                       
          </div><!-- form-group Finish -->

          <div class="form-group row">
            <label class="col-sm-2 control-label" method="post" >Danh mục sản phẩm:</label>
            <div class="dropdown col-md-6 ">
              <select name="tenloaisanpham" id="">

                <?php 
                foreach ($data as $value) {
                 ?>
                 <option value="<?php echo $value['id_loaisp'] ?>">
                   <?php echo $value['tenloaisanpham'] ?>
                 </option>
                 <?php
               }
               ?>
             </select>
           </div>
         </div>

         <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Mô Tả:</label>
          <div class="col-sm-6">
            <textarea class="form-control" name="mota" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

        </div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Bảo hành:</label>
          <div class="col-sm-6">
            <input type="text" name="baohanh" id="gia" class="form-control" >
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Giá:</label>
          <div class="col-sm-6">
            <input type="text" name="gia" id="gia" class="form-control" >
          </div>
        </div>
        <div class="form-group row" style="margin-left: 15.5%">
          <div class="col-sm-6">
            <button type="submit" class="btn btn-outline-danger" name="luu_sanpham">Lưu sản phẩm  </button>
            <a href="?danhsach_sanpham" class="btn btn-outline-danger">Danh sách sản phẩm</a>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
</div>
</div>
</div>
<footer class="pull-left footer">

</footer>
</div>