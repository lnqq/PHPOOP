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
      <h5 style="text-align: center">Sửa loại sản phẩm</h5>
    </div>
    <div class="card-body">
      <form class=" mt-5 mr-6" method="POST">
        <div class="form-group row">
          <div class="col-sm-10">
            <input type="hidden" name="id" value="<?php echo $ketqua[0]; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-3 col-form-label">Tên loại sản phẩm:</label>
          <div class="col-sm-8">
            <input type="text" name="tenloaisanpham" class="form-control" value="<?php echo $ketqua[1]; ?>">
          </div>

        <div class="form-group">
          <label  class="col-sm-6 col-form-label"></label>
          <div class="col-sm-12" style="margin-left: 108%">
            <button type="submit" class="btn btn-outline-danger" name="update_loaisanpham">Cập Nhập Thông Tin</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>