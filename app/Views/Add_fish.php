<?php 
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
	
	<script >
		setTimeout(function() {
			$("#hidetag").hide();
		}, 5)
	</script>
	<h3>
		<a href="<?php echo base_url()?>/signup">Đăng kí</a>
	</h3>
	<div class="container">
		<div class="row">
	        <div class="col-6 offset-md-3">
	            <form method="post" class="bg-light p-4 my-3" enctype="multipart/form-data">


					<?php if($page_session->getTempdata('success')): ?>
						<div class="alert alert-success" id = "hidetag"><?= $page_session->getTempdata('success') ?></div>
					<?php endif ?>
					<?php if($page_session->getTempdata('error')): ?>
						<div class="alert alert-danger" id = "hidetag"><?= $page_session->getTempdata('error') ?></div>
					<?php endif ?>
	                <div class="form-group">
	                    <label for="">Tên cá</label>
	                    <input type="text" name = "name" class="form-control" value="<?php echo set_value('name')?>">
	                    <div class="text-danger">
	                    	<?= loadError($validation, 'name') ?>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="">Màu sắc cá</label>
	                    <input type="text" name = "color" class="form-control" value="<?php echo set_value('color') ?>">
	               		<div class="text-danger">
	                    	<?= loadError($validation, 'color') ?>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="">Nơi sinh sống</label>
	                    <input type="text" name = "local" class="form-control" value="<?php echo set_value('local') ?>">
	                	<div class="text-danger">
	                    	<?= loadError($validation, 'local') ?>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="">Thông tin ngắn</label>
	                    <textarea rows = "8" cols = "100" name = "info" class="form-control"><?php echo set_value('info')?></textarea>
	                	<div class="text-danger">
	                    	<?= loadError($validation, 'info') ?>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="">Giá</label>
	                    <input type="number" name = "price" class="form-control">
	                	<div class="text-danger">
	                    	<?= loadError($validation, 'price') ?>
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