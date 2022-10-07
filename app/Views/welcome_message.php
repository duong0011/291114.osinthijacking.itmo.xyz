
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="icon" href="./assets/img/logo/shopee-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- main -->
    <div class="app">
        <!-- header -->
        <header class="header">
            <div class="grid wide">
                <!-- navbar -->
                <nav class="header__navbar hide-on-mobile-tablet">
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Welcome <?php if(session()->has('loged_user')) echo $user['fullname']; ?>!</li>
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate"><a href="<?= base_url().'/PushProduct' ?>" style="text-decoration: none; color: white;">Become seller</a></li>
                        <div class="header__qrcode">
                            <img src="./assets/img/qr/qr-code.png" class="header__qr">
                            <div class="header__apps">
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/app-store.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/gg-play.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/app-gallery.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/ltp-img.png" class="header__app-img">
                                </a>
                            </div>
                        </div>
                        <li class="header__nav-item">
                            Follow us on
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fa-brands fa-vk"></i>
                            </a>
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-telegram"></i>
                            </a>
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__show-note">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-bell"></i>
                                Notifications
                            </a>
                            <!-- thông báo -->
                            <div class="header__notifi">
                                <header class="header__notifi-header">
                                    <h3>New notification received</h3>
                                </header>
                                <ul class="header__notifi-list">
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/casio.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Casio fx 580 VN Plus
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Mua Casio 580 của LTP bao xịn, bao mượt, bao đẹp
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/iphone.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Điện Thoại iPhone 13 Pro 128GB - Hàng Nhập Khẩu
                                                </div>
                                                <div class="header__notifi-desc">
                                                    3 Camera: Ống kính góc rộng f/1.5 - Tele f/2.8 - Siêu rộng f/1.8
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/iphone2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Apple iPhone 12 Pro Max 128GB
                                                </div>
                                                <div class="header__notifi-desc">
                                                    iPhone 12 Pro Max. Màn hình Super Retina XDR 6.7 inch
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/laptop.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop HP 650 g1 siêu khỏe bền
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Laptop siêu bền, HP 650 g1 siêu khỏe bền ssd 120gb 15,6inh FULL HD
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/laptop2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop thinkpad x240 chất mỏng nhẹ i5 4300u Ram 4gb Ssd 128gb
                                                </div>
                                                <div class="header__notifi-desc">
                                                    HP 650 g1 chip M đời 4, cpu i5 4200M ram 4gb -8gb
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notifi-footer">
                                    <a href="#" class="header__notifi-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-question-circle"></i>
                                Help
                            </a>
                        </li>
                        
                       <?php if(!session()->has('loged_user')){ ?>
                            <li class="header__nav-item header__nav-item--bold header__nav-item--separate">
                                <a href="<?= base_url().'/register' ?>" class="header__nav-item-link">Sign Up</a>
                            </li>
                            <li class="header__nav-item header__nav-item--bold">
                                <a href="<?= base_url().'/login' ?>" class="header__nav-item-link">Sign In</a>
                            </li>
                        <?php }else{ ?>
                            <li class="header__nav-item header__nav-user">
                                <?php if(isset($user['avatar'])): ?>
                                    <img src="data:image/jpeg;base64,<?=$user['avatar']?>" class="header__nav-user-avt">
                                <?php else: ?>
                                    <img src="./assets/img/user.png" class="header__nav-user-avt">
                                <?php endif ?>
                                <a href="#" class="header__nav-item-link header__nav-item--bold"><?=  $user['fullname'];?></a>
                                <ul class="header__nav-user-menu">
                                    <li class="header__nav-user-item">
                                        <a href="#">Tài khoản của tôi</a>
                                    </li>
                                    <li class="header__nav-user-item">
                                        <a href="#">Đơn mua</a>
                                    </li>
                                    <li class="header__nav-user-item">
                                        <a href="<?= base_url().'/login/logout' ?>" >Logout</a>
                                    </li>
                                </ul>
                            </li> 
                        <?php }?>
                    </ul>
                </nav>
                <!-- search -->
                <div class="header__contain">
                    <label for="mobile-search" class="header__mobile-menu">
                        <i class="header__mobile-menu-icon fa-solid fa-bars"></i>
                        <!-- <i class="header__mobile-search-icon fas fa-search"></i> -->
                    </label>
                    
                    <div class="header__logo">
                        
                        <a href="<?php base_url().'/home' ?>" class="header__logo-link">
                            <img src="./assets/img/logo/logo.png" class="header__logo-img">
                        </a>
                    </div>
                    <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Enter to search for products:">
                            <div class="header__search-history">
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="#">Combo 30 điểm đại học khối A</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Combo 30 điểm đại học khối D</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Mỹ phẩm cho người yêu</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Bí kíp tán crush auto đổ</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Iphone 13 Pro Max giá rẻ</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Người yêu đẹp trai như LTP</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>
                    <!-- header__cart--no-cart --><!-- header__cart--has-cart -->
                    <div class="header__cart header__cart--has-cart">
                        <i class="header__cart-icon fas fa-shopping-cart"></i>
                        <div class="header__cart-count">4</div>
                        
                        <div class="header__cart-list no-cart">
                            <img src="./assets/img/sp/no-cart.png" class="header__no-cart-img">
                            <p class="header__no-cart-text">Chưa có sản phẩm</p>
                        </div>
                        
                        <div class="header__cart-list has-cart">
                            <h4 class="header__cart-heading">Sản phẩm đã chọn</h4>
                            <ul class="header__cart-list-item">
                                <li class="header__cart-item">
                                    <img src="./assets/img/buy/1.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Thanh Thanh 2000 1m57 46kg 88-62-89</h3>
                                            <p class="header__cart-item-price">2.000USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 2</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="./assets/img/buy/2.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Hồng Ánh 1998 1m62 48kg 89-64-91</h3>
                                            <p class="header__cart-item-price">2.500USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="./assets/img/buy/3.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Quỳnh Như 1999 1m65 49kg 90-62-89</h3>
                                            <p class="header__cart-item-price">2.800USD</p>
                                        </div>  
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="./assets/img/buy/4.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Kim Ngân 2001 1m55 45kg 86-60-87</h3>
                                            <p class="header__cart-item-price">3.200USD</p>
                                        </div>  
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 3</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="./assets/img/buy/5.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Thanh Thanh 2000 1m57 46kg 88-62-89</h3>
                                            <p class="header__cart-item-price">2.000USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 2</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="./assets/img/buy/6.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Hồng Ánh 1998 1m62 48kg 89-64-91</h3>
                                            <p class="header__cart-item-price">2.500USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="./assets/img/buy/7.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Quỳnh Như 1999 1m65 49kg 90-62-89</h3>
                                            <p class="header__cart-item-price">2.800USD</p>
                                        </div>  
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="./assets/img/buy/8.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Kim Ngân 2001 1m55 45kg 86-60-87</h3>
                                            <p class="header__cart-item-price">3.200USD</p>
                                        </div>  
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 3</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="header__cart-footer">
                                <a href="#" class="btn btn--primary header__cart-see-cart">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Liên quan</a>
                </li>
                <li class="header__sort-item header__sort-item--active">
                    <a href="#" class="header__sort-link">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Bán chạy</a>
                </li>
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Giá</a>
                </li>
            </ul> -->
        </header>
        <!-- container -->
        <div class="container">
            <div class="grid wide">
                <div class="row sm-gutter">
                    <div class="col c-12">
                        <!-- <div class="home__slide-img">
                            <img id="img" onclick = "changeImg()" src="./assets/img/slide home/1.png" alt="" class="img-feature">
                        </div> -->
                        <!--image slider start-->
                        <div class="slider">
                            <div class="slides">
                                <!--radio buttons start-->
                                <input type="radio" name="radio-btn" id="radio1">
                                <input type="radio" name="radio-btn" id="radio2">
                                <input type="radio" name="radio-btn" id="radio3"> 
                                <input type="radio" name="radio-btn" id="radio4">
                                <!--radio buttons end-->
                                <!--slide images start-->
                                <div class="slide first">
                                    <img src="./assets/img/slide home/1.jpg" alt="">
                                </div>
                                <div class="slide">
                                    <img src="./assets/img/slide home/1.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src="./assets/img/slide home/2.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src="./assets/img/slide home/3.png" alt="">
                                </div>
                                <!--slide images end-->
                                <!--automatic navigation start-->
                                <div class="navigation-auto">
                                    <div class="auto-btn1"></div>
                                    <div class="auto-btn2"></div>
                                    <div class="auto-btn3"></div>
                                    <div class="auto-btn4"></div>
                                </div>
                                <!--automatic navigation end-->
                                </div>
                                <!--manual navigation start-->
                                <div class="navigation-manual">
                                    <label for="radio1" class="manual-btn"></label>
                                    <label for="radio2" class="manual-btn"></label>
                                    <label for="radio3" class="manual-btn"></label>
                                    <label for="radio4" class="manual-btn"></label>
                                </div>
                            <!--manual navigation end-->
                            </div>
                        <!--image slider end-->

                        </div>
                    </div>
                <div class="row sm-gutter">
                    <div class="col l-2 m-0 c-0">
                        <!-- category -->
                        <nav class="category">
                            <h3 class="category-heading">
                                <i class="category-heading-icon fas fa-list-ul"></i>
                                Menu
                            </h3>
                            <form action="" method="get">
                                <div class="category-group">
                                <div class="category-group-title">Product categories</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check" name = "type[]" value = "Bread">
                                        Bread
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check" name = "type[]" value = "Candy">
                                        Candy
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check" name = "type[]" value = "Cake">
                                        Cake
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Place of sale</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Moscow
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Saint Peterburg
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Kazan
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="category-group">
                                <div class="category-group-title">Đơn Vị Vận Chuyển</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hoả tốc
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Nhanh
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Tiết kiệm
                                    </li>
                                </ul>
                            </div> -->
                            <!-- <div class="category-group">
                                <div class="category-group-title">Thương Hiệu</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Kingston
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Sandisk
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Seagate
                                    </li>
                                </ul>
                            </div> -->
                            <div class="category-group">
                                <div class="category-group-title">Price Range</div>
                                <div class="category-group-filter">
                                    <input type="number" placeholder="From" class="category-group-filter-input">
                                    <i class="fas fa-arrow-right"></i>
                                    <input type="number" placeholder="to" class="category-group-filter-input">
                                </div>
                                <button class="btn btn--brown category-group-filter-btn">APPLY</button>
                            </div>
                            </form>
                            <!-- <div class="category-group">
                                <div class="category-group-title">Loại Shop</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shoppee
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shoppee Mail
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shop yêu thích
                                    </li>
                                </ul>
                            </div> -->
                            <div class="category-group">
                                <div class="category-group-title">Time of delivery</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        During the day
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Up to 3 days
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Up to 7 days
                                    </li>
                                

                                </ul>
                            </div>
                            <!-- <div class="category-group">
                                <div class="category-group-title">Lựa Chọn Thanh Toán</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Thanh toán khi nhận hàng
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Chuyển khoản
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Trả góp 0%
                                    </li>
                                </ul>
                            </div> -->
                            <div class="category-group">
                                <div class="category-group-title">Đánh Giá</div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                            </div>
                            <!-- <div class="category-group">
                                <div class="category-group-title">Dịch Vụ & Khuyến Mãi</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Freeship Xtra
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hoàn xu Xtra
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Đang giảm giá
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Miễn phí vận chuyển
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Gì cũng rẻ
                                    </li> 
                                </ul>
                            </div> -->
                            <button class="btn btn--brown category-group-filter-btn category-group--margin">CLEAR ALL</button>
                        </nav>
                    </div>
                    <div class="col l-10 m-12 c-12">
                        <!-- home filter -->
                        <div class="home-filter hide-on-mobile-tablet">
                            <div class="home-filter-control">
                                <p class="home-filter-title">Sorted by:</p>
                                <button class="btn btn--brown home-filter-btn">Popular</button>
                                <button class="btn home-filter-btn">Latest</button>
                                <button class="btn home-filter-btn">bestseller</button>
                                <div class="btn home-filter-sort">
                                    <p class="home-filter-sort-btn">Price</p>
                                    <i class="fas fa-sort-amount-down-alt"></i>
                                    <ul class="home-filter-sort-list">
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                Price: Low to High
                                                <i class="fas fa-sort-amount-down-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                
                                                Price: Hight to Low
                                                <i class="fas fa-sort-amount-up-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="home-filter-page">
                                <div class="home-filter-page-number">
                                    <p class="home-filter-page-now">1</p>
                                    /14
                                </div>
                                <div class="home-filter-page-control">
                                    <a href="#" class="home-filter-page-btn home-filter-page-btn--disable">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                    <a href="#" class="home-filter-page-btn">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- home product -->
                        <div class="home-product">
                            <nav class="mobile-category">
                                <ul class="mobile-category-list">
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Thiết bị mạng</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Chuột và bàn phím</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">USB</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Link kiện máy tính</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Wifi</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Ổ cứng</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">CD/DVD</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Tai nghe</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Lót chuột</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Micro</a>
                                    </li>
                                </ul>
                            </nav>
                            <div id="list-product" class="row sm-gutter"></div>
                            <div id="list-product" class="row sm-gutter">
                                <?php foreach ($products as $product): ?>
                                    <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image:url('data:image/jpeg;base64,<?=$product['image']?>')"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name"><?= $product['nameproduct']; ?></h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old"><?= $product['price']?>USD</p>
                                                <p class="home-product-item__price-new"><?=$product['price']-$product['price']*$product['discount']/100?>USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled"><?= $product['sold']?></div>
                                            </div>
                                            <div class="home-product-item__origin"><?= $product['address']?></div>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach ?>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <!-- <div class="home-product-item__img" style="background-image: url(./assets/img/slide home/1.jpg);"></div> -->
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/2.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">300USD</p>
                                                <p class="home-product-item__price-new">250USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/3.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">150USD</p>
                                                <p class="home-product-item__price-new">180USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">30%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/4.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">350USD</p>
                                                <p class="home-product-item__price-new">400USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 2,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                            <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/5.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">270USD</p>
                                                <p class="home-product-item__price-new">300USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/6.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">160USD</p>
                                                <p class="home-product-item__price-new">220USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 2,3k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">25%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/7.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">195USD</p>
                                                <p class="home-product-item__price-new">250USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">15%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/8.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">360USD</p>
                                                <p class="home-product-item__price-new">420USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,9k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/9.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">130USD</p>
                                                <p class="home-product-item__price-new">170USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/10.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180USD</p>
                                                <p class="home-product-item__price-new">200USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/11.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180USD</p>
                                                <p class="home-product-item__price-new">200USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/12.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180USD</p>
                                                <p class="home-product-item__price-new">200USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/13.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180USD</p>
                                                <p class="home-product-item__price-new">200USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/14.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180USD</p>
                                                <p class="home-product-item__price-new">200USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/15.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180USD</p>
                                                <p class="home-product-item__price-new">200USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/16.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180USD</p>
                                                <p class="home-product-item__price-new">200USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/17.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Jack BNC lò xo cho dây tín hiệu đồng trục camera</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">170USD</p>
                                                <p class="home-product-item__price-new">210USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">30%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/18.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Pin TCbest AA và AAA cho chuột không dây và điều khiển giao ngẫu nhiên</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">50USD</p>
                                                <p class="home-product-item__price-new">70USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 5,6k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">10%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/19.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Màn Hình Máy Tính 24 inch/19inch AOC,Màn Hình 75HZ Full HD 1920*1080</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">2.100USD</p>
                                                <p class="home-product-item__price-new">3.000USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">36%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/20.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Webcam Máy Tính-Latop-Có Mic Full HD-Camera</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">350USD</p>
                                                <p class="home-product-item__price-new">400USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 2,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/21.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Loa máy tính để bàn,loa vi tính MC D - 221 SUPER BASS</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">270USD</p>
                                                <p class="home-product-item__price-new">300USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">25%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/22.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Loa SIÊU TRẦM (SUB BASS): 8W, cường độ âm thanh >80dB</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">160USD</p>
                                                <p class="home-product-item__price-new">185USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 2,3k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">23%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/23.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Bàn Phím Gaming Có Led 7 Màu-Bàn Phím G21 Kèm Chuột-Lót Chuột</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">195USD</p>
                                                <p class="home-product-item__price-new">230USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">15%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/24.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Bàn phím Gaming, Keyboard T-WOLF TF20 Led 7 màu USB</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">360USD</p>
                                                <p class="home-product-item__price-new">420USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 1,9k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/25.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">CHUỘT KHÔNG DÂY T- WOLF Q13 CHUỘT GAMING</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">135USD</p>
                                                <p class="home-product-item__price-new">170USD</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Sold 3,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Saint Peterburg</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- pagination -->
                        <ul class="pagination home-product-pagination">
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link pagination-item-link--disable">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="#" class="pagination-item-link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item-link pagination-item-link--disable">. . .</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">8</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <!-- main footer -->
            <div class="main-footer">
                <div class="grid wide">
                        <div class="row sm-gutter main-footer-info">
                            <div class="col l-2-4 m-4 c-6">
                                <h3 class="footer__heading">CUSTOMER SERVICE</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="#" class="footer-item-link">Help Center</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link">How to buy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link">Thanh Toán</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link">Shipping</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link">Return & Refund</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link">Contact Us</a>
                                    </li>
                                
                                </ul>
                            </div>
                            <div class="col l-2-4 m-4 c-6">
                                <h3 class="footer__heading">ABOUT SHOP</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="#" class="footer-item-link">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link">Shop Policies</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link">Privacy Policy</a>
                                    </li>
                                        <a href="#" class="footer-item-link">Media Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col l-2-4 m-4 c-12 pay-and-ship">
                                <div>
                                    <h3 class="footer__heading">PAY MENT</h3>
                                    <div class="footer-sale-ship">
                                        <img src="./assets/img/pay/1.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/pay/2.PNG" class="footer-item-sale-ship">
                                                                       
                                    </div>
                                </div>
                                <!-- <div>
                                    <h3 class="footer__heading">ĐƠN VỊ VẬN CHUYỂN</h3>
                                    <div class="footer-sale-ship">
                                        <img src="./assets/img/ship/1.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/ship/2.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/ship/3.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/ship/4.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/ship/5.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/ship/6.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/ship/7.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/ship/8.PNG" class="footer-item-sale-ship">
                                        <img src="./assets/img/ship/9.PNG" class="footer-item-sale-ship">
                                    </div>
                                </div> -->
                            </div>
                            <div class="col l-2-4 m-4 c-6">
                                <h3 class="footer__heading">FOLLOW US</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="#" class="footer-item-link footer-item-link-fb">
                                            <i class="footer-item-icon fa-brands fa-vk"></i>
                                            VKontakte
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link footer-item-link-is">
                                            <i class="footer-item-icon fab fa-instagram-square"></i>
                                            Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-item-link footer-item-link-li">
                                            <i class="footer-item-icon fab fa-telegram"></i>
                                            Telegram
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col l-2-4 m-8 c-6">
                                <h3 class="footer__heading">DOWNLOAD APP</h3>
                                <div class="footer-download">
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/qr-code.png" class="footer-download-qr">
                                    </a>
                                    <div class="footer-download-app">
                                        <a href="#" class="footer-download-link">
                                            <img src="./assets/img/qr/gg-play.png" class="footer-download-app-img">
                                        </a>
                                        <a href="#" class="footer-download-link">
                                            <img src="./assets/img/qr/app-store.png" class="footer-download-app-img">
                                        </a>
                                        <a href="#" class="footer-download-link">
                                            <img src="./assets/img/qr/app-gallery.png" class="footer-download-app-img">
                                        </a>
                                        <a href="#" class="footer-download-link">
                                            <img src="./assets/img/qr/ltp-img.png" class="footer-download-app-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- copyright -->
                    <div class="row">
                        <div class="grid">
                            <p class="copyright-title">
                                © 2021 Shopee copyright - Công ty TNHH CRF - Product by LTP
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- other footer -->
            <div class="other-footer">
                <div class="grid wide">
                    <div class="row other-footer-heading">
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                PRIVACY POLICY
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                TERM OF SERVICE
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                SHIPPING POLICY
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                VIOLATION
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="grid other-footer-info">
                            <p class="other-footer-title">About Shop</p>
                            <p class="other-footer-more">
                                Address: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai,
                                Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam.
                                Support call center: 19001221 - Email: cskh@hotro.shopee.vn
                            </p>
                            <p class="other-footer-more">
                                Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí -
                                Điện thoại liên hệ: 024 73081221 (ext 4678)
                            </p>
                            <p class="other-footer-more">
                                Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư
                                TP Hà Nội cấp lần đầu ngày 10/02/2015
                            </p>
                            <p class="other-footer-more">
                                Ngày sản xuất 2015 -
                                Bản quyền gốc thuộc về Công ty TNHH Shopee
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- modal -->
    <div class="modal">
        <div class="modal__body">
            <!-- authen signin-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <div class="auth-form__switch-btn">Đăng nhập</div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Nhập lại mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__policy">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, bạn đồng ý với Shoppee về 
                            <a href="#" class="auth-form__text-link">Điều khoản dịch vụ</a> & 
                            <a href="#" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>
                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Google
                        </p>
                    </a>
                </div>
            </div>
            
            <!-- authen login-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Nhập</h3>
                        <div class="auth-form__switch-btn">Đăng ký</div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__help">
                        <a href="#" class="auth-form__help-link auth-form__help-forgot">Quên Mật Khẩu</a>
                        <div class="auth-form__help--separate"></div>
                        <a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-sms">
                        <i class="auth-form__signin-icon fas fa-sms"></i>
                        <p class="auth-form__signin-text">
                            SMS
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Google
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- script js -->
    <!-- <script src="./assets/js/product.js"></script> -->
    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
    </script>
    
</body>
</html>