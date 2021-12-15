@auth
    <script>
        window.location = "/home";
    </script>
@endauth
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پی پولر </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->


    <link rel="stylesheet" href="./vendor/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/style-fa.css">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper pt-0">

        <div class="header landing_page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 position-relative">
                        <nav class="navbar navbar-expand-lg navbar-light px-0">
                            <a class="navbar-brand" href="landing.html"><img src="./images/paypooler-landing.png" alt="">
                                </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" data-scroll-nav="0">صفحه اصلی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-scroll-nav="1"> فروشگاه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-scroll-nav="2">عضویت</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-scroll-nav="3">نظر کاربران</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-scroll-nav="4">ارتباط با ما</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dashboard_log">
                                <div class="d-flex align-items-center">
                                    <div class="header_auth">
                                        <a href="{{route('login')}}" class="btn btn-primary">ورود</a>
                                        <a href="./signup.html" class="btn btn-outline-primary">ثبت نام</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro section-padding position-relative" id="intro" data-scroll-index="0">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-md-6">
                        <div class="intro-content">
                            <h2> مبادله ارز<br> پی پولر</h2>
                            <p>راهی سریع و مطمئن برای مبادله ارز </p>
                            <div class="mt-4">
                                <a href="#" class="btn my-1 waves-effect">
                                    <img src="./images/android.svg" alt="">
                                </a>
                                <a href="#" class="btn my-1 waves-effect">
                                    <img src="./images/apple.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 py-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="buy-sell-widget px-2">
                                    <form method="post" name="myform" class="currency_validate">
                                        <div class="mb-3">
                                            <label class="me-sm-2">واحد پول</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-usd"></i></label>
                                                </div>
                                                <select name='currency' class="form-control">
                                                    <option value="">انتخاب کنید</option>
                                                    <option value="bitcoin">ریال</option>
                                                    <option value="litecoin">دلار</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="me-sm-2">روش پرداخت</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-bank"></i></label>
                                                </div>
                                                <select class="form-control" name="method">
                                                    <option value="">انتخاب کنید</option>
                                                    <option value="bank">بانک آمریکا ********45845</option>
                                                    <option value="master">مستر کارت ***********5458</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="me-sm-2">مبلغ خود را وارد کنید</label>
                                            <div class="input-group">
                                                <input type="text" name="currency_amount" class="form-control"
                                                    placeholder="0.0214 BTC">
                                                <input type="text" name="usd_amount" class="form-control"
                                                    placeholder="125.00 USD">
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="mb-0">فیلتر ماهانه</p>
                                                <h6 class="mb-0">$49750 باقیمانده</h6>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success w-100">همین حالا
                                            مبادله کنید</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="market section-padding page-section" data-scroll-index="1">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section_heading">
                            <span>کاوش کنید</span>
                            <h3>پیشروترین صرافی ارزی جهان</h3>
                            <p>دلار، یورو و صدها ارز پی پولر دیگر را در چند دقیقه معامله کنید.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-responsive-sm">
                                            <tbody>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="la la-close"></i></span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-danger">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc BTC"></i> BTC
                                                    </td>
                                                    <td>
                                                        Using - Bank *******5264
                                                    </td>
                                                    <td class="text-danger">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success">Buy</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc LTC"></i> LTC
                                                    </td>
                                                    <td>
                                                        Using - Card *******8475
                                                    </td>
                                                    <td class="text-success">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="la la-close"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc XRP"></i> XRP
                                                    </td>
                                                    <td>
                                                        Using - Card *******8475
                                                    </td>
                                                    <td class="text-danger">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success">Buy</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc DASH"></i> DASH
                                                    </td>
                                                    <td>
                                                        Using - Card *******2321
                                                    </td>
                                                    <td class="text-success">-0.000242 EUR</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="la la-close"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc BTC"></i> EUR
                                                    </td>
                                                    <td>
                                                        Using - Card *******2321
                                                    </td>
                                                    <td class="text-danger">-0.000242 EUR</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features section-padding">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section_heading">
                            <span>امکانات</span>
                            <h3>قابل اعتمادترین پلت فرم ارز پی پولر</h3>
                            <p>در اینجا چند دلیل وجود دارد که چرا باید پی پولر را انتخاب کنید</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="features-content">
                            <span><i class="fa fa-shield"></i></span>
                            <h4>ذخیره سازی امن</h4>
                            <p>ما اکثریت قریب به اتفاق دارایی های دیجیتال را در فضای ذخیره سازی آفلاین ایمن ذخیره می
                                کنیم.</p>
                            <a href="#">بیشتر بدانید <i class="la la-angle-left"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-content">
                            <span><i class="fa fa-cubes"></i></span>
                            <h4>توسط بیمه محافظت می شود</h4>
                            <p>ارز پی پولر ذخیره شده در سرورهای ما تحت پوشش بیمه نامه ما است.</p>
                            <a href="#">بیشتر بدانید <i class="la la-angle-left"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-content">
                            <span><i class="fa fa-life-ring"></i></span>
                            <h4>بهترین شیوه های صنعت</h4>
                            <p>پی پولر از انواع رایج ترین ارزهای دیجیتال پشتیبانی می کند.</p>
                            <a href="#">بیشتر بدانید <i class="la la-angle-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-form section-padding" data-scroll-index="4">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section_heading">
                            <span>سوالات شما</span>
                            <h3>اجازه دهید مستقیماً از شما بشنویم!</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-4">
                        <div class="info-list">
                            <h4 class="mb-3">آدرس</h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> California, USA</li>
                                <li><i class="fa fa-phone"></i> (+880) 1243 665566</li>
                                <li><i class="fa fa-envelope"></i> hello@example.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8 col-sm-8">
                        <form method="post" name="myform" class="contact_validate">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="contactName">
                                            نام و نام خانوادگی
                                        </label>
                                        <input type="text" class="form-control" id="contactName"
                                            placeholder="نام و نام خانوادگی" name="firstname">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="contactEmail">
                                            ایمیل
                                        </label>
                                        <input type="email" class="form-control" name="ایمیل"
                                            placeholder="hello@domain.com">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <textarea class="form-control p-3" name="message" rows="5"
                                            placeholder="به ما بگویید با چه چیزی می توانیم به شما کمک کنیم!"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary px-4">
                                ارسال پیام
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer landing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="footer-link text-left">
                            <a href="#" class="m_logo"><img src="./images/logo.png" alt=""></a>
                            <a href="about.html">درباره ما</a>
                            <a href="privacy-policy.html">سیاست حفظ حریم خصوصی</a>
                            <a href="term-condition.html">سابقه و خدمات</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 text-lg-right text-center">
                        <div class="social">
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-12 text-center text-lg-right">
                        <div class="copy_right text-center text-lg-center">
                            تمامی حقوق سایت ©
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script> محفوظ است.
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="cookie_alert">

        <div class="alert alert-light fade show">
            <p>
                با استفاده از پی پولر، شما با <a href="#">شرایط استفاده</a> و <a href="#">سیاست حفظ حریم خصوصی</a>
                موافقت می کنید.
            </p>
            <button class="btn btn-success w-100" data-dismiss="alert">می پذیرم</button>
        </div>
    </div>






    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="./vendor/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="./js/plugins/owl-carousel-init.js"></script>
    <script src="./vendor/scrollit/scrollIt.js"></script>
    <script src="./js/plugins/scrollit-init.js"></script>

    <!-- Chart sparkline plugin files -->
    <script src="./vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="./js/plugins/sparkline-init.js"></script>

    <script src="./vendor/validator/jquery.validate.js"></script>
    <script src="./vendor/validator/validator-init.js"></script>
    <script src="./js/scripts.js"></script>




</body>

</html>
