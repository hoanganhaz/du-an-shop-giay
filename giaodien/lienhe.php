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
                            <p><a href="#">Home</a><span class="separator"> – </span><span class="last">Liên hệ</span>
                            </p>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="boxphai">
                        <div class="title_gioithieu">
                            <h1>
                                Để lại lời nhắn cho chúng tôi
                        </div>
                        <div class="form_lienhe formtaikhoan">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="mb col-md-4">
                                        họ và tên<br>
                                        <input type="text" name="name" id=""><br>
                                    </div>
                                    <div class="mb col-md-4">
                                        email<br>
                                        <input type="text" name="email" id=""><br>
                                    </div>
                                    <div class="mb col-md-4">
                                        điện thoại<br>
                                        <input type="text" name="hotline" id=""><br>
                                    </div>
                                </div>
                                <div class=" mb">
                                    hình thức<br>
                                    <input type="text" name="hotline" id="" style="width: 100%; height: 30px;"><br>
                                </div>
                                <div class=" mb">
                                    nội dung<br>
                                    <input type="text" name="hotline" id="" style="width: 100%; height: 100px;"><br>
                                </div>
                                <div class=" mb">
                                    <input type="submit" value="gửi cho tdh stores"><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="boxphai">
                        <div class="item_lienhe">
                            <h3><i class="bi bi-geo-alt-fill"></i>địa chỉ</h3>
                            <p>trịnh văn bô , phương canh , bắc từ liêm , hà nội</p>
                        </div>
                        <div class="item_lienhe">
                            <h3><i class="bi bi-envelope-fill"></i>email</h3>
                            <p>
                                tdhstore@gmail.com
                            </p>
                        </div>
                        <div class="item_lienhe">
                            <h3><i class="bi bi-telephone-fill"></i>hotline</h3>
                            <p>
                                0987654321
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.84090702503!2d105.74057277484928!3d21.03905078742586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454962c0b6523%3A0x5c76c67564d9d1b9!2zUC4gVHLhu4tuaCBWxINuIELDtCwgUGjGsMahbmcgQ2FuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1700539915073!5m2!1svi!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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