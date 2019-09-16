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
        <a class="navbar-brand text-white" href="#">CHILDREN'S WEAR</a>
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
    <div class="container">
       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/test1.jpg" alt="First slide" height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/test4.jpg" alt="Second slide" height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/test5.jpg" alt="Third slide" height="500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
 
<div class="container" style="float: left;margin-left: 19%;margin-top: 5%">
  

      <?php 
      $i=1;
        foreach ($data as $value) {
      ?>
      <a href="?chitietsanpham=<?php echo $value['id']; ?>">
      <div class="card" style="width: 20rem;float: left;margin: 5px 5px 5px">
        <img class="card-img-top" src="img/<?php echo $value['img']; ?>" alt="Card image cap" height="200px">
        <div class="card-body">
        
          <p class="card-text">Tên sản phẩm:<?php echo $value['tensanpham']; ?></p>
          <p class="card-text">Bảo hành:<?php echo $value['baohanh']; ?></p>
          <p class="card-text">Giá:<?php echo $value['gia']; ?></p>
        </div>
        
     
      </div>
        </a>
      <?php
      $i++;
        }
      ?>

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
