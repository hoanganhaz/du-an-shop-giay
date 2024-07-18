<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDH Stores</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="boxcenter">
            <div class="logo">
                <div class="row">
                    <div class="col-md-2">
                        <a href="#">
                            <img src="./img/logo.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-6 ali_center">
                        <div class="seach-home">
                            <div class="input-group rounded">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="bi bi-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ali_center">
                        <ul class="login-header">
                            <li>
                                <a href="giohang.php">
                                    <span>
                                        <i class="bi bi-cart"></i>
                                    </span>
                                    giỏ hàng
                                </a>
                            </li>
                            <li>
                                <a href="dangnhap.php" id="taikhoan">
                                    <span><i class="bi bi-person-fill"></i></span>
                                    đăng nhập
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="gioithieu.php">Giới thiệu</a></li>
                    <li><a href="dmsp.php">Danh mục sản phẩm</a></li>
                    <li><a href="tintuc.php">Tin tức</a></li>
                    <li><a href="lienhe.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="menu_hanggiay">
                <div class="row">
                    <div class="col-md-2 ">
                        <div class="item_hanggiay">
                            <a href="./menu/adidas.php">
                                <img src="./img/adidas.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="item_hanggiay">
                            <a href="./menu/nike.php">
                                <img src="./img/nike.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="item_hanggiay">
                            <a href="./menu/puma.php">
                                <img src="./img/puma.jpg" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="col-md-2 ">
                        <div class="item_hanggiay">
                            <a href="./menu/vans.php">
                                <img src="./img/vans.jpg" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="col-md-2 ">
                        <div class="item_hanggiay">
                            <a href="./menu/balance.php">
                                <img src="./img/balance.jpg" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="col-md-2 ">
                        <div class="item_hanggiay">
                            <a href="menu/converse.php">
                                <img src="./img/converse.jpg" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="banner_main">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/bannerpuma.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/banner2nike.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="contac_1">
            <div class="boxcenter">
                <div class="title_home">
                    <h2>
                        <a href="#">
                            adidass
                        </a>
                    </h2>
                </div>
                <div class="item_home">
                    <div class="row">
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img adidas/sp1.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">ADIDAS</p>
                                <p class="gioi_thieu">Giày tennis adidas nam KANTANA IG9818</p>
                                <p class="gia">3.200,000₫</p>
                                <span>2.400.000đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img adidas/sp2.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">ADIDAS</p>
                                <p class="gioi_thieu">Giày running adidas nam ULTRABOUNCE ID2259</p>
                                <p class="gia">2.400.000₫</p>
                                <span>1.200.000</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img adidas/sp3.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">ADIDAS</p>
                                <p class="gioi_thieu">Giày running adidas nam PUREBOOST 23 IF2378</p>
                                <p class="gia">6.234.567đ </p>
                                <span>3.700.000₫</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img adidas/sp4.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">ADIDAS</p>
                                <p class="gioi_thieu">Giày running adidas nam PUREBOOST 23 IF2367</p>
                                <p class="gia">6.234.567đ </p>
                                <span>3.700.000₫</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xem_them">
                    <a href="#">
                        xem thêm sản phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="contac_1">
            <div class="boxcenter">
                <div class="title_home">
                    <h2>
                        <a href="#">
                            nike
                        </a>
                    </h2>
                </div>
                <div class="item_home">
                    <div class="row">
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img nike/sp1.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">Nike</p>
                                <p class="gioi_thieu">Giày Nike Air Max Infinity 2 Nam - Trắng</p>
                                <p class="gia">1.234.567đ </p>
                                <span>567.789đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img nike/sp2.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">Nike</p>
                                <p class="gioi_thieu">Giày Nike Air Max Axis Nam - Đen Trắng</p>
                                <p class="gia">1.234.567đ </p>
                                <span>567.789đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img nike/sp3.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">Nike</p>
                                <p class="gioi_thieu">Giày Nike Air Max Axis Nam - Trắng Đen<n/p>
                                <p class="gia">1.234.567đ </p>
                                <span>567.789đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img nike/sp4.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">Nike</p>
                                <p class="gioi_thieu">Giày Nike Air Max Axis Nam - Trắng Đen</p>
                                <p class="gia">1.234.567đ </p>
                                <span>567.789đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="#">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xem_them">
                    <a href="#">
                        xem thêm sản phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="contac_1">
            <div class="boxcenter">
                <div class="title_home">
                    <h2>
                        <a href="#">
                            Puma
                        </a>
                    </h2>
                </div>
                <div class="item_home">
                    <div class="row">
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img puma/sp1.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">Puma</p>
                                <p class="gioi_thieu"> Hãng Giày Thể Thao Nam SmasPuma [Chínhh L]</p>
                                <p class="gia">1.400.000đ </p>
                                <span>999.000đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img puma/sp2.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">Puma</p>
                                <p class="gioi_thieu">Puma - Giày Thể Thao Nam Suede Classic Xxi</p>
                                <p class="gia">1.234.567đ</p>
                                <span>567.789đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img puma/sp3.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">Puma</p>
                                <p class="gioi_thieu">Puma Giày Slip On Nam Bari Z Indogo Màu Xanh Trắng</p>
                                <p class="gia">1.234.567đ </p>
                                <span>567.789đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="./img puma/sp4.png" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang">Puma</p>
                                <p class="gioi_thieu">Puma [Chính Hãng 100%] Giày Men'S Redon Move</p>
                                <p class="gia">1.234.567đ </p>
                                <span>567.789đ</span>
                            </div>
                            <div class="item_contac">
                                <a href="ctsp.php">tùy chọn</a>
                            </div>
                            <div class="sale_item">
                                <span>25%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xem_them">
                    <a href="#">
                        xem thêm sản phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="contac_3">
            <div class="boxcenter">
                <div class="title_home">
                    <h2>
                        <a href="#">
                            Danh muc sản phẩm
                        </a>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-item">
                            <div class="img_box">
                                <img src="./img xt/balance.png" alt="">
                            </div>
                            <div class="text_box">
                                <h3>
                                    New Balance
                                </h3>
                                <a href="menu/balance.php">xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-item">
                            <div class="img_box">
                                <img src="./img xt/vans.png" alt="">
                            </div>
                            <div class="text_box">
                                <h3>
                                    Vans
                                </h3>
                                <a href="menu/vans.php">xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-item">
                            <div class="img_box">
                                <img src="./img xt/converse.png" alt="">
                            </div>
                            <div class="text_box">
                                <h3>
                                    Converse
                                </h3>
                                <a href="menu/converse.php">xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contac_2">
            <div class="title_home">
                <h2>
                    <a href="#">
                        tin tức
                    </a>
                </h2>
            </div>
            <div class="boxcenter">
                <div class="news_item">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="item_news">
                                <div class="img_news">
                                    <img src="./img/banner2.jpg" alt="">
                                </div>
                                <div class="text_news">
                                    <h3>SẢN XUẤT TẠI VIỆT NAM
                                    </h3>
                                    <p>
                                        Từ những nghệ nhân đóng giày dày dạn kinh nghiệm với mong muốn mang đến
                                        cho Quý Ông đôi giày mang Thương Hiệu Việt chất lượng tốt nhất.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="item_news">
                                <div class="img_news">
                                    <img src="./img/banner2.jpg" alt="">
                                </div>
                                <div class="text_news">
                                    <h3>SẢN XUẤT TẠI VIỆT NAM
                                    </h3>
                                    <p>
                                        Từ những nghệ nhân đóng giày dày dạn kinh nghiệm với mong muốn mang đến
                                        cho Quý Ông đôi giày mang Thương Hiệu Việt chất lượng tốt nhất.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="item_news">
                                <div class="img_news">
                                    <img src="./img/banner2.jpg" alt="">
                                </div>
                                <div class="text_news">
                                    <h3>SẢN XUẤT TẠI VIỆT NAM
                                    </h3>
                                    <p>
                                        Từ những nghệ nhân đóng giày dày dạn kinh nghiệm với mong muốn mang đến
                                        cho Quý Ông đôi giày mang Thương Hiệu Việt chất lượng tốt nhất.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="item_news">
                                <div class="img_news">
                                    <img src="./img/banner2.jpg" alt="">
                                </div>
                                <div class="text_news">
                                    <h3>SẢN XUẤT TẠI VIỆT NAM
                                    </h3>
                                    <p>
                                        Từ những nghệ nhân đóng giày dày dạn kinh nghiệm với mong muốn mang đến
                                        cho Quý Ông đôi giày mang Thương Hiệu Việt chất lượng tốt nhất.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer">
            <div class="boxcenter">
                <div class="row">
                    <div class="col-md-3">
                        <div class="img_footer">
                            <img src="./img/logo.jpg" alt="">
                        </div>
                        <div class="diachi">
                            <ul>
                                <li>
                                    <i class="bi bi-geo-alt-fill"></i> 120 trịnh văn bô , phương canh , ha noi
                                </li>
                                <li>
                                    <i class="bi bi-telephone-fill"></i> 012345678
                                </li>
                                <li>
                                    <i class="bi bi-youtube"></i>
                                </li>
                                <li>
                                    <i class="bi bi-instagram"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text_footer">
                            <h3>
                                hướng dẫn
                            </h3>
                            <ul>
                                <li>HƯỚNG DẪN MUA HÀNG</li>
                                <li>GIAO NHẬN VÀ THANH TOÁN</li>
                                <li>ĐỔI TRẢ VÀ BẢO HÀNH</li>
                                <li>ĐĂNG KÍ THÀNH VIÊN</li>
                                <li>TRA CỨU ĐƠN HÀNG</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text_footer">
                            <h3>
                                hướng dẫn
                            </h3>
                            <ul>
                                <li>HƯỚNG DẪN MUA HÀNG</li>
                                <li>GIAO NHẬN VÀ THANH TOÁN</li>
                                <li>ĐỔI TRẢ VÀ BẢO HÀNH</li>
                                <li>ĐĂNG KÍ THÀNH VIÊN</li>
                                <li>TRA CỨU ĐƠN HÀNG</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="taikhoan">
                            <div class="tex_footer">
                                <h3>
                                    đăng ký tài khoản
                                </h3>
                                <div class=" formtaikhoan">
                                    <form action="#" method="post">
                                        <div class=" mb">
                                            tên đăng nhập<br>
                                            <input type="text" name="user" id=""><br>
                                        </div>
                                        <div class=" mb">
                                            password<br>
                                            <input type="password" name="pass" id=""><br>
                                        </div>
                                        <div class=" mb">
                                            <input type="checkbox" name="" id="">ghi nhớ tài khoản<br>
                                        </div>
                                        <div class=" mb">
                                            <input type="submit" value="đăng nhập"><br>
                                        </div>
                                        <li><a href="#">quên mật khẩu</a></li>
                                        <li><a href="#">đăng ký thành viên</a></li>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>