<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Nhập hàng</title>
</head>
<body>
    <h3>
        <a href="http://localhost/add_fish">Đến trang thêm hàng</a>
    </h3>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <form action="" method="post" class="bg-light p-4 my-3" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên cá</label>
                        <input type="text" name = "fishName" class="form-control" value = "<?php echo $dta['name'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Màu sắc cá</label>
                        <input type="text" name = "color" class="form-control" value = "<?php echo $dta['color'];?>" >
                    </div>
                    <div class="form-group">
                        <label for="">Nơi sinh sống</label>
                        <input type="text" name = "local" class="form-control" value = "<?php echo $dta['local'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Thông tin ngắn</label>
                        <textarea rows = "8" cols = "100" name = "info" class="form-control"><?php echo $dta['info'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Giá</label >
                        <input type="number" name = "price" class="form-control" value = "<?php echo $dta['price'];?>">
                    </div>
                    <div >
                        <label for="img">Chọn ảnh cho cá</label>
                        <input type="file" name="img" class ="form-control">
                    </div>
                    <input type="submit" value = "Gửi">
                </form>
            </div>
        </div>
    </div>
    <br>
    <h3><?php echo $smg ?></h3>
    
</body>
</html>