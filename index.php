<?php 
  include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  </head>
  <body>
    <div class="main">
      <!--START Header-->
      <div class="header">
        <div class="header__top-wrapper">
          <div class="header__container container">
            <div class="header__top">
              <div class="header__ham" id="toggle">
                <i class="fas fa-bars icon-open" id="isOpen"></i>
                <i class="fa-solid fa-xmark icon-close" id="isClose"></i>
              </div>
              <a href="" class="header__logo">
                <img src="./assets/img/SAB LOGO-01 1.png" alt="LOGO" />
              </a>
              <form action="">
                <div class="header__search">
                  <div class="header__search-border">
                    <div class="header__input-box">
                      <div class="header__menu-input">
                        <input
                          id=""
                          type="text"
                          placeholder="Nhập từ khóa tìm kiếm"
                          class="header__input"
                        />
                        <div class="header__menu-search-icon">
                          <i class="fa-solid fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <div class="header__search-box">
                      <div class="header__search-icon">
                        <i class="fa-solid fa-search"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="header__contact">
                <div class="header__contact--left">
                  <img
                    src="./assets/img/mail.png"
                    class="header__contact-icon"
                  />
                  <div class="header__contact-text">
                    <span class="header__contact-title">E-MAIL</span>
                    <a
                      class="header__contact-link"
                      href="mailto:thanhtien412006@gmail.com"
                      >contact@sabfa.com.vn</a
                    >
                  </div>
                </div>

                <div class="header__contact--right">
                  <img
                    src="./assets/img/Group.png"
                    class="header__contact-icon"
                  />
                  <div class="header__contact-text">
                    <span class="header__contact-title">LIÊN HỆ</span>
                    <a class="header__contact-link" href="tel:0868679028"
                      >0963561906</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="header__menu-wrapper">
          <div class="header__menu container">
            <ul class="header__list">
              <div class="header__menu-logo">
                <img src="./assets/img/SAB LOGO-01.png" alt="" />
              </div>
              <li><a href="./index.html">TRANG CHỦ</a></li>
              <li><a href="./gioithieu.html">GIỚI THIỆu</a></li>
              <li>
                <a href="./dichvu.html">DỊCH VỤ</a>
                <ul class="dichvu">
                  <li><a href="">Dịch vụ soát xét tuân thủ thuế</a></li>
                  <li><a href="">Dịch vụ kế toán thuế trọn gói</a></li>
                  <li><a href="">Dịch vụ hỗ trợ thanh kiểm tra thuế</a></li>
                  <li><a href="">Dịch vụ hoàn thuế</a></li>
                  <li><a href="">Dịch vụ QTT TNCN</a></li>
                </ul>
              </li>
              <li><a href="./daotao.html">ĐÀO TẠO</a></li>
              <li><a href="">SẢN PHẨM</a></li>
              <li><a href="">TIN TỨC</a></li>
              <li><a href="">LIÊN HỆ</a></li>
              <div class="header__traslate">
                <div class="header__translate-viet">
                  <a href=""><img src="./assets/img/Mask Group.png" /></a>
                  <span class="header__translate-name">Tiếng Việt</span>
                </div>

                <div class="header__translate-mi">
                  <a href=""><img src="./assets/img/Mask Group (1).png" /></a>
                  <span class="header__translate-name">English</span>
                </div>
              </div>
            </ul>
            <div class="header__menu-traslate">
              <a href=""><img src="./assets/img/Mask Group.png" alt="" /></a>
              <a href=""
                ><img src="./assets/img/Mask Group (1).png" alt=""
              /></a>
            </div>
          </div>
        </div>
      </div>
      <!--END Header-->
    
        <?php $app->run();?>

      <!--START Footer-->
      <div class="footer">
        <div class="footer-body">
          <div class="container footer__container">
            <div class="footer__background">
              <div class="footer__company-info">
                <div class="company-info__logo">
                  <img src="./assets/img/SAB LOGO-01.png" alt="" />
                </div>
                <p class="company-info__text">
                  Molestie nec, molestie libero in auctor <br />
                  vels. Quis dictumst nulla risus curabitur <br />
                  non dolor, pulvinar. Orci, pretium pretium <br />
                  velit scelerisqueultrices.
                </p>
                <div class="company-info__sticker">
                  <img src="./assets/img/image 33.png" alt="" />
                </div>
              </div>
              <div class="footer__company-contact">
                <div class="company-contact__name">
                  Công ty TNHH Tư vấn Quản lý Tài chính SAB
                </div>
                <div class="company-contact__box">
                  <p class="company-contact__address">
                    Địa chỉ: DV05-LK289, Khu đất dịch vụ Đào Đất Hàng Bè, -
                    Phường Kiến Hưng - Quận Hà Đông - Hà Nội
                  </p>
                  <a href="tel:0868679028" class="company-contact__tel"
                    >Số điện thoại: 0963561906</a
                  >
                  <a
                    href="mailto:thanhtien4112006@gmail.com"
                    class="company-contact__email"
                    >Email: contact@sabfa.com.vn</a
                  >
                </div>
              </div>
              <div class="footer__company-support">
                <div class="company-support__title">
                  <div class="company-support__heading">Hỗ trợ khách hàng</div>
                  <ul class="company-support__sub-heading">
                    <li>
                      <img
                        class="company-support__icon"
                        src="./assets/img/Polygon 4.png"
                        alt=""
                      />
                      <a href="">Tư vấn trực tuyến</a>
                    </li>
                    <li>
                      <img
                        class="company-support__icon"
                        src="./assets/img/Polygon 4.png"
                        alt=""
                      />
                      <a href="">Hỏi đáp</a>
                    </li>
                    <li>
                      <img
                        class="company-support__icon"
                        src="./assets/img/Polygon 4.png"
                        alt=""
                      />
                      <a href="">Liên hệ</a>
                    </li>
                  </ul>
                </div>
                <div class="company-support__following">
                  <div class="company-support__following-title">
                    Theo dõi chúng tôi qua
                  </div>
                  <ul class="company-support__following-app">
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="footer__company-link">
                <div class="company-link__title">Link nhanh</div>
                <ul class="company-link__item">
                  <li>
                    <img
                      class="company-support__icon"
                      src="./assets/img/Polygon 4.png"
                      alt=""
                    /><a href="">Giới thiệu</a>
                  </li>
                  <li>
                    <img
                      class="company-support__icon"
                      src="./assets/img/Polygon 4.png"
                      alt=""
                    /><a href="">Dịch vụ</a>
                  </li>
                  <li>
                    <img
                      class="company-support__icon"
                      src="./assets/img/Polygon 4.png"
                      alt=""
                    /><a href="">Đào tạo</a>
                  </li>
                  <li>
                    <img
                      class="company-support__icon"
                      src="./assets/img/Polygon 4.png"
                      alt=""
                    /><a href="">Sản phẩm</a>
                  </li>
                  <li>
                    <img
                      class="company-support__icon"
                      src="./assets/img/Polygon 4.png"
                      alt=""
                    /><a href="">Tin tức</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-end">
          <div class="container">
            <div class="footer-end__wrap">
              <div class="footer-end__copy">
                &copy;2021 SAB. All Right Reserved
              </div>
              <div class="footer-end__title">Chính sách bảo mật thông tin</div>
            </div>
          </div>
        </div>

        <!--START Chat-->
        <div class="chat">
          <div class="chat__box-1">
            <a href="tel:0868679028"
              ><i class="fa-solid fa-phone-volume chat__icon phone"></i
            ></a>
          </div>
          <div class="chat__box-2">
            <a href=""
              ><i class="fa-brands fa-facebook-messenger chat__icon mess"></i
            ></a>
          </div>

          <a href=""
            ><img
              class="chat__icon-zalo"
              src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg"
            />
          </a>

          <div class="chat__box-3" id="backToTop">
            <i class="fa-solid fa-arrow-up chat__icon"></i>
          </div>
        </div>
        <!--END Chat-->
      </div>
      <!--END Footer-->
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./assets/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</html>