<!DOCTYPE html>
<html>
<head>
  <title>List loai san pham</title>
 head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<header >
      <nav class="navbar navbar-light bg-danger fixed-top">
        <a class="navbar-brand text-white" href="http://localhost:8080/QuanAoShop/">CHILDREN'S WEAR</a>
        <ul class="nav  nav-pills justify-content-end ">
          <li class="nav-item">
            <a class="nav-link text-white " href="?createuser">Đăng kí</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?dangnhap">Đăng nhập</a>
          </li>
        </ul>
      </nav>
      
    </header>
  <body>
    
 
<!-- <div class="container" style="float: left;margin-left: 19%;margin-top: 5%"> -->
  <style type="text/css">
  	.full{
  background-color:#f2f2f2;
  height: 500px;
}
.col-md-6{
  float: left;
}
.col-md-6 h4{
  color:#006699;
  padding-top: 20%;
}
* {
  box-sizing: border-box;
}

img {
  padding: 50px;
  /*background-color: green;*/
  transition: transform .2s;
  width: 400px;
  height: 400px;
  margin: 0 auto;
}

img:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
  </style>
<div>
	<div class="container" style="margin-top: 3%">
		<div class="col-md-12 full">
			<div class="col-md-6" >			
				<img id="myimage" src="img/<?php echo $ketqua[3]; ?>" width="300" height="240">  						
			</div>
			<div class="col-md-6">
				<h4> <?php echo $ketqua[1]; ?></h4>
				<p>Giá : <?php echo $ketqua[6]; ?></p>
				<p>Bảo hành: <?php echo $ketqua[5]; ?></p>
				<p>Loại sản phẩm: <?php echo $ketqua[8]; ?></p>
				<p>Mô tả: <?php echo $ketqua[4]; ?></p>
			
			</div>
		</div>
	</div>
</div>

<div id="footer" class="color-div bg-light" style="margin-top: 5%;float: left;">
   
      <div class="row">
        <div class="col-sm-3">
          <div class="widget">
            <h4 class="widget-title">Instagram</h4>
            <div id="beta-instagram-feed"><div></div></div>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="widget">
            <h4 class="widget-title">Information</h4>
            <div>
              <ul>
                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web clother</a></li>
                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> fashion</a></li>
                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
         <div class="col-sm-10">
          <div class="widget">
            <h4 class="widget-title">Contact Us</h4>
            <div>
              <div class="contact-info">
                <i class="fa fa-map-marker"></i>
                <p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="widget">
            <h4 class="widget-title">Newsletter Subscribe</h4>
            <form action="#" method="post">
              <input type="email" name="your_email">
              <button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
            </form>
          </div>
        </div>
      </div> <!-- .row -->
    
</body>
</html>
