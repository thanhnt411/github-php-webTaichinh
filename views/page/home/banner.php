<!--START Banner-->
<div class="banner swiper JS-banner">
    <div class="swiper-wrapper">
        <?php foreach ($result as $rows): ?>
            <div class="swiper-slide">
                <div class="banner__background--first" style="background-image: url('<?= $rows['image'] ?>');">
                    <div class="banner__container container">
                        <div class="banner__box">
                            <div class="banner__text">
                                <h1 class="banner__heading">
                                    Chuyên gia tư vấn các dịch vụ về kế toán, thuế
                                </h1>
                                <p class="banner__sub-heading">
                                    Nec sit non quam ut velit congue tincidunt. Enim orci sem
                                    euismod turpis tortor vel, adipiscing in purus.
                                </p>
                                <div class="banner__contact">
                                    <a href="" class="banner__contact-text">LIÊN HỆ NGAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="banner__background--second">
                    <div class="banner__container container">
                        <div class="banner__box">
                            <div class="banner__text">
                                <h1 class="banner__heading">
                                    Chuyên gia tư vấn các dịch vụ về kế toán, thuế
                                </h1>
                                <p class="banner__sub-heading">
                                    Nec sit non quam ut velit congue tincidunt. Enim orci sem
                                    euismod turpis tortor vel, adipiscing in purus.
                                </p>
                                <div class="banner__contact">
                                    <a href="" class="banner__contact-text">LIÊN HỆ NGAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="banner__background--third">
                    <div class="banner__container container">
                        <div class="banner__box--third">
                            <div class="banner__text">
                                <h1 class="banner__heading--top">
                                    Công ty Tư vấn quản lý tài Chính SAB
                                </h1>
                                <h2 class="banner__heading--bottom">
                                    Kết sức mạnh, nối thành công
                                </h2>
                                <p class="banner__sub-heading">
                                    Nec sit non quam ut velit congue tincidunt. Enim orci sem
                                    euismod turpis tortor vel, adipiscing in purus.
                                    Scelerisque sit mi eget sodales proin mi pellentesque eu.
                                </p>
                                <div class="banner__contact--third">
                                    <a href="" class="banner__contact-text">LIÊN HỆ NGAY</a>
                                    <i class="fas fa-arrow-right banner__contact-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination swiper-pagination1"></div>
</div>
<!--END Banner-->