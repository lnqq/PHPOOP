<!DOCTYPE html>
<html>
<head>
	<title>Create loai san pham</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="margin-left: 19%">
  <div class="card mt-2 col-10">
    <div class="card-header">
      <h5 style="text-align: center">Đăng kí</h5>
    </div>
    <div class="card-body">
      <form class=" mt-5 mr-6" method="post">
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Tên đăng nhâp:</label>
          <div class="col-sm-10">
            <input type="text" name="username" class="form-control" >
          </div>

        </div>
         <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Mật khẩu:</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" >
          </div>

        </div>
           <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
            <input type="text" name="email" class="form-control" >
          </div>

        </div>
        <form method="GET">
          <div class="form-group row" style="margin-left: 15.5%">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-danger" name="taotaikhoan">Lưu Thông Tin</button>
            <a href="?dangnhap" class="btn btn-outline-danger">Đăng nhập</a>
          </div>
        </div>
        </form>
        
      </form>
    </div>
  </div>
</div>
</body>
</html>