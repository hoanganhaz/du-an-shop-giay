<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDH Stores</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="boxcenter">
            <div class="logo">
                <div class="row">
                    <div class="col-md-4">
                        <div class="seach-home">
                            <div class="input-group rounded">
                                <input type="search" class="form-control rounded" placeholder="Search"
                                    aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="bi bi-search"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <img src="./img/logo.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <ul class="login-header">
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="bi bi-cart"></i>
                                    </span>
                                    giỏ hàng
                                </a>
                            </li>
                            <li>
                                <a href="#" id="taikhoan">
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
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li>
                        <a href="#">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="#">Thiết kế website</a></li>
                            <li><a href="#">Dịch vụ SEO</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Hỏi đáp</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="boxcenter">
            <div class="zek_page_banner zek_position">
                <div class="zek_background wow fadeIn animated animated" data-wow-delay="500ms"
                    data-wow-duration="600ms"
                    style="background-image: url(./img/ADIDAS-BANNER.webp); visibility: visible; animation-duration: 600ms; animation-delay: 500ms; animation-name: fadeIn;">
                </div>
                <div class="zek_overlay"></div>
                <div class="inner text-center wow fadeIn animated animated" data-wow-delay="500ms"
                    data-wow-duration="600ms"
                    style="visibility: visible; animation-duration: 600ms; animation-delay: 500ms; animation-name: fadeIn;">
                    <h1 class="title wow fadeInDown animated animated" data-wow-delay="1000ms" data-wow-duration="600ms"
                        style="visibility: visible; animation-duration: 600ms; animation-delay: 1000ms; animation-name: fadeInDown;">
                        Liên hệ</h1>
                    <div class="zek_breadcrumbs wow fadeInUp animated animated" data-wow-delay="700ms"
                        data-wow-duration="600ms"
                        style="visibility: visible; animation-duration: 600ms; animation-delay: 700ms; animation-name: fadeInUp;">
                        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
                            <p><a href="#">Home</a><span class="separator"> – </span><span class="last">Giỏ hàng</span>
                            </p>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container pb-5 mb-2 mt-4">
                <!-- Alert-->
                <div class="alert alert-info alert-dismissible fade show text-center mb-30"><span class="alert-close"
                        data-dismiss="alert"></span><i class="fe-icon-award"></i>&nbsp;&nbsp;Với giao dịch mua này, bạn
                    sẽ kiếm <strong>2,549</strong> điểm thưởng.</div>
                <!-- Cart Item-->
                <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i
                            class="fa fa-times"></i></span>
                    <div class="px-3 my-3">
                        <a class="cart-item-product" href="#">
                            <div class="cart-item-product-thumb"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Product"></div>
                            <div class="cart-item-product-info">
                                <h4 class="cart-item-product-title">Giày bóng rổ Nike</h4><span><strong>Hãng:</strong>
                                    Nike</span><span><strong>Màu sắc:</strong> Đen</span>
                            </div>
                        </a>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Số Lượng</div>
                        <div class="count-input">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Tổng Tiền</div><span class="text-xl font-weight-medium">2.200.000
                            vnđ</span>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Giảm Giá</div><span class="text-xl font-weight-medium">650.000
                            vnđ</span>
                    </div>
                </div>
                <!-- Cart Item-->
                <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i
                            class="fa fa-times"></i></span>
                    <div class="px-3 my-3">
                        <a class="cart-item-product" href="#">
                            <div class="cart-item-product-thumb"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Product"></div>
                            <div class="cart-item-product-info">
                                <h4 class="cart-item-product-title">Giày bóng rổ Nike</h4><span><strong>Hãng:</strong>
                                    Nike</span><span><strong>Màu sắc:</strong> Đen</span>
                            </div>
                        </a>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Số Lượng</div>
                        <div class="count-input">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Tổng Tiền</div><span class="text-xl font-weight-medium">2.200.000
                            vnđ</span>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Giảm Giá</div><span class="text-xl font-weight-medium">650.000
                            vnđ</span>
                    </div>
                </div>
                <!-- Cart Item-->
                <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i
                            class="fa fa-times"></i></span>
                    <div class="px-3 my-3">
                        <a class="cart-item-product" href="#">
                            <div class="cart-item-product-thumb"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Product"></div>
                            <div class="cart-item-product-info">
                                <h4 class="cart-item-product-title">Giày bóng rổ Nike</h4><span><strong>Hãng:</strong>
                                    Nike</span><span><strong>Màu sắc:</strong> Đen</span>
                            </div>
                        </a>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Số Lượng</div>
                        <div class="count-input">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Tổng Tiền</div><span class="text-xl font-weight-medium">2.200.000
                            vnđ</span>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Giảm Giá</div><span class="text-xl font-weight-medium">650.000
                            vnđ</span>
                    </div>
                </div>
                <!-- Coupon + Tổng Tiền-->
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="py-2 d-flex flex-row-reverse"><span
                                class="fw-bold align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">Thành
                                Tiền: 5.000.000 đ</span></div>
                    </div>
                </div>
                <!-- Buttons-->
                <hr class="my-2">
                <div class="row pt-3 pb-5 mb-2">
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-secondary">Quay Lại</button>
                    </div>
                    <div class="col-lg-6 d-flex flex-row-reverse">
                        <button type="button" class="btn btn-primary mx-2">Tiếp Tục Thanh Toán</button>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>