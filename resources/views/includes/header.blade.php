<header>
    <div class="header-area ">
        <div class="header-top_area d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <ul class="socail_links">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7">
                        <div class="header_right">
                            <ul>
                                <li><i class="far fa-envelope"></i> needhelp@gmail.com</li>
                                <li><i class="fas fa-phone-alt"></i> 666 7475 25252</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="cart_bar d-none d-lg-block">
                <div class="container">
                    <div
                        class="row justify-content-between align-items-center"
                    >
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div
                                class="cart_menu d-flex justify-content-end"
                            >
                                <div class="single_cart d-flex">
                                    <div class="icon">
                                        <i
                                            class="fab fa-opencart"
                                            style="font-size: 35px;"
                                        ></i>
                                        <span id="cart-count" class="badge badge-info">{{ Cart::count() > 0 ? Cart::count() : 0 }}</span>
                                    </div>
                                    <div class="cart_info">
                                        <h3><a href="/checkout">Cart</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</header>
