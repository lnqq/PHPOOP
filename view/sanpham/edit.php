<!DOCTYPE html>
<html>
<head>
  <title>Create san pham</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container" style="margin-left: 19%">
    <div class="card mt-2 col-10">
      <div class="card-header">
        <h5 style="text-align: center">Sửa thông tin sản phẩm</h5>
      </div>
      <div class="card-body">
        <form class=" mt-5 mr-6" method="post">
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="hidden" name="id" value="<?php echo $ketqua[0]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Tên sản phẩm:</label>
            <div class="col-sm-10">
              <input type="text" name="tensanpham" class="form-control" value="<?php echo $ketqua[1]; ?>">
            </div>
          </div>
          <div class="form-group row"><!-- form-group Begin -->                       
            <label class="col-md-2 control-label"> Hình ảnh: </label>                      
            <div class="col-md-6"><!-- col-md-6 Begin -->                          
              <input name="img" type="file"  value="<?php echo $Ketqua[3]; ?>"  required>                         
            </div><!-- col-md-6 Finish -->                       
          </div><!-- form-group Finish -->

          <div class="form-group row">
            <label class="col-sm-2 control-label" method="post" >Danh mục: </label>
            <div class="dropdown col-md-6 ">
              <select name="tenloaisanpham" id="">
                <option><?php echo $ketqua[8]; ?></option>
                <option>---chon loai sp---</option>
                <!--                 <option>---chon loai sp---</option> -->
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
           <div class="col-sm-10">
            <textarea class="form-control" name="mota" id="exampleFormControlTextarea1" rows="3">
              <?php echo $ketqua[4]; ?>
            </textarea>
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Bảo hành:</label>
          <div class="col-sm-10">
            <input type="text" name="baohanh" value="<?php echo $ketqua[5]; ?>" id="gia" class="form-control" >
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Giá</label>
          <div class="col-sm-10">
            <input type="text" name="gia" id="gia" class="form-control" value="<?php echo $ketqua[6]; ?>">
          </div>
        </div>
        <div class="form-group row" style="margin-left: 15.5%">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-danger" name="update_sanpham">Cập Nhập Thông Tin</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>