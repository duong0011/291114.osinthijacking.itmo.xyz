<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src = " <?php echo base_url();?> 1."></script> 
    <title>Shop Bán Cá</title>
</head>
<body>
	<div class="container">
		<h2 class = "text-xs-center">Đăng kí người dùng</h2>
	</div>
	<div class="container">
		<div class="col-sm-8 push-sm-2">
			<form action="shop/insertData" method="POST" class="bg-light p-4 my-3" enctype="multidata/form-data">
				<div class="form-group">
					<label for="username" >Tên đăng nhập</label>
					<input type="text" name="username">
				</div>
				<div class="form-group">
					<label for="password" class="form-group">Mật khẩu</label>
					<input type="password" name="password">
				</div>
				<div class="form-group">
					<label for="phone" class="form-group">Số điện thoại</label>
					<input type="phone" name="phone">
				</div>
				<input type="submit" value = "Đăng kí">
			</form>
		</div>
	</div>
</body>
</html>