`	<?php 
	$page_session = \CodeIgniter\Config\Services::session();
 ?>
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
		<a href="<?php echo base_url()?>/register">Đăng kí</a>
	</h3>
	<div class="container">
		<div class="row">
	        <div class="col-6 offset-md-3">
	            <form method="post" class="bg-light p-4 my-3" enctype="multipart/form-data">

	                <div class="form-group">
	                    <label for="">Tên bánh</label>
	                    <input type="text" name = "nameproduct" class="form-control" value="<?php echo set_value('nameproduct')?>">
	                    <div class="text-danger">
	                    	<?= loadError($validation, 'name') ?>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="">Số lượng</label>
	                    <input type="number" name = "amuont" class="form-control" value="<?php echo set_value('amuont')?>">
	                	<div class="text-danger">
	                    	<?= loadError($validation, 'amuont') ?>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="">Thông tin ngắn</label>
	                    <textarea rows = "8" cols = "100" name = "info" class="form-control"><?php echo set_value('info')?></textarea>
	                	<div class="text-danger">
	                    	<?= loadError($validation, 'info') ?>
	                    </div>
	                </div>
	                <div class = "form-group col-md-4">
		                <label for = "inputState">State</label>
		                <select id = "inputState" class = "form-control" name="type">
		                    <option selected disabled>Select State</option>
		                    <option value = 'Bread'>Bread</option>
		                    <option value = 'Candy'>Candy</option>
		                    <option value = 'Cake'>Cake</option>
		                  </select>
             		</div>
	                <div class="form-group">
	                    <label for="">Giá</label>
	                    <input type="number" name = "price" class="form-control"value="<?php echo set_value('price')?>" >
	                	<div class="text-danger">
	                    	<?= loadError($validation, 'price') ?>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="">Giảm giá</label>
	                    <input type="number" name = "discount" class="form-control" value="<?php echo set_value('discount')?>">
	                	<div class="text-danger">
	                    	<?= loadError($validation, 'discount') ?>
	                    </div>
	                </div>
					<div class="input-group mb-3">
					  	<input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name = "file">
					  	<div class="text-danger">
	                    	<?= loadError($validation, 'file') ?>
	                    </div>
					</div>
	                <input type="submit" value = "Gửi">
	            </form>
        	</div>
    	</div>
	</div>
	<br>
</body>
</html>