<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500&family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">     
    <title>زفّة. | الصفحة الرئيسية</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body dir="rtl">
    <header class="header">
        <a href="#" class="logo">زفّـــــة<span>.</span></a>
        <nav class="navbar">
            <a href="#home">الصفحة الرئيسية</a>
            <a href="#about">تعرف عنا</a>
            <a href="#service">خدماتنا</a>
            <a href="#gallery">معرضنا</a>
            <a href="#review">تقييماتنا</a>
            <a href="#review">احجز الآن</a>
        </nav>
        <div id="menu-bars" class="fas fa-bars"></div>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>زفّـــــة <span>جزء من أفراحكم</span></h3>
        </div>
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/img4.jpg" alt=""> </div>
                <div class="swiper-slide"><img src="img/img3.jpg" alt=""> </div>
                <div class="swiper-slide"><img src="img/img1.jpg" alt=""> </div>
                <div class="swiper-slide"><img src="img/img7.jpg" alt=""> </div>
                <div class="swiper-slide"><img src="img/img22.jpg" alt=""> </div>
                <div class="swiper-slide"><img src="img/img5.jpg" alt=""> </div>
                <div class="swiper-slide"><img src="img/img6.jpg" alt=""> </div>
                <div class="swiper-slide"><img src="img/img8.jpg" alt=""> </div>
            </div>
        </div>
    </section>


    <section class="about" id="about">
        <h1 class="heading">تعرف <span>عنا</span></h1>
        <div class="row" >
            <div class="image" ><img src="img/abouut.jpg" alt=""></div>
            <div class="content">
                <h3 >سنقدم لك احتفالًا خاصًا جدًا.</h3>
                <p>
                    اكتشف الجمال في كل لحظة مع موقعنا لتخطيط الأعراس! ابدأ اليوم بتحقيق حلمك لإنشاء حفل زفاف يترك انطباعًا يدوم للأبد.
                </p>
                <p>
                    اكتشف السحر في كل لحظة من لحظاتك الخاصة. مع موقعنا، نحن سنجعل يوم زفافك لا يُنسى بتصميمات رائعة وخدمات متميزة. ابدأ رحلتك نحو الفخامة والأناقة اليوم معنا.
                </p>

                <div class="info-boxes">
                    <div class="info-item">
                        <i class="fas fa-ruler-combined"></i>
                        <span>15000 م² مساحة</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-car"></i>
                        <span>موقف سيارات واسع</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-solid fa-lock"></i>
                        <span>خدمة الأمن والحراسة</span>
                    </div>
                </div>
                
                <div class="btns">
                    <a href="#!" class="btn" id="openVideo">شاهد فيديو القاعة</a>
                    <a href="form.php" class="btn">احجز الآن</a>
                </div>
            </div>
        </div>
    </section>

    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <video controls>
            <source src="img/zaffavideo.mp4" type="video/mp4">
            متصفحك لا يدعم تشغيل الفيديو
            </video>
        </div>
    </div>

    <section class="service" id="service"> 
        <h1 class="heading">خدمات<span>نا</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>الأكل و المشروبات</h3>
                <p>من الأطباق الرئيسية حتى التحلية</p>
            </div>
            <div class="box">
                <i class="fas fa-music"></i>
                <h3>الموسيقى (DJ)</h3>   
                <p>صوتيات عالية الجودة</p>
            </div>
            <div class="box">
                <i class="fas fa-photo-video"></i>
                <h3>التصوير (صور / فيديو)</h3>  
                <p>فريق تصوير محترف لتوثيق لحظاتك</p>     
            </div>
            <div class="box">
                <i class="fas fa-solid fa-couch"></i>
                <h3>الديكور</h3>    
                <p>تصاميم راقية تناسب ذوقك</p>  
            </div>
            <div class="box">
                <i class="fas fa-solid fa-handshake"></i>
                <h3>الفريق التنظيمي</h3>   
                <p>تنظيم شامل لحفلك من البداية حتى النهاية</p>     
            </div>
            <div class="box">
                <i class="fas fa-solid fa-shield"></i>                
                <h3>فريق منع التصوير</h3>   
                <p>لحماية خصوصية ضيوفك</p>
            </div>
        </div>
    </section>
   
    <section class="gallery" id="gallery">
        <h1 class="heading" >معرض<span>نا</span></h1>
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">الكل</button>
            <button class="filter-btn" data-filter="deco">الديكور</button>
            <button class="filter-btn" data-filter="food">الأطباق</button>
            <button class="filter-btn" data-filter="moments">اللحظات</button>
        </div>
        <div class="box-container">
            <div class="box all moments">
                <img src="img/gl1.jpg" alt="">
            </div>
            <div class="box all food">
                <img src="img/gl2.jpg" alt="">
            </div>
            <div class="box all deco">
                <img src="img/gl3.jpg" alt="">
            </div>
            <div class="box all moments">
                <img src="img/gl4.jpg" alt="">
            </div>
            <div class="box all food">
                <img src="img/gl5.jpg" alt="">
            </div>
            <div class="box all deco">
                <img src="img/gl6.jpg" alt="">
            </div>
            <div class="box all moments">
                <img src="img/gl7.jpg" alt="">
            </div>
            <div class="box all food">
                <img src="img/gl8.jpg" alt="">
            </div>
            <div class="box all deco">
                <img src="img/gl9.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="review" id="review">
        <div class="review-content">

            <div class="reviews">
                <h1 class="heading">آراء <span>عملائنا </span></h1>
                <div class="box-container">
                    <div class="box">
                        <div class="user">
                            <div class="user-info">
                            <h3>بورحلة إيمان</h3>
                            </div> 
                        </div>
                        <p>قاعة "زفّة" أبهرتنا بتنظيمها الراقي وخدماتها الممتازة، جعلت حفلنا مثاليا.</p>
                    </div>

                    <div class="box">
                        <div class="user">
                            <div class="user-info">
                            <h3>جعيجع أماني</h3>
                            </div>
                        </div>
                        <p>من الديكور إلى الضيافة، كل شيء في قاعة "زفّة" كان على أعلى مستوى.</p>
                    </div>

                    <div class="box">
                        <div class="user">
                            <div class="user-info">
                            <h3>مكيدش آمنة</h3>
                            </div>
                        </div>
                        <p>تجربة رائعة مع قاعة "زفّة"، اهتمام بالتفاصيل وجودة لا تضاهى.</p>
                    </div>
                </div>
            </div>

            <div class="review-form">
            <h1 class="heading">أضف <span>تقييمك </span></h1>
                <form action="">
                    <div class="inputbox">
                        <input type="text" placeholder="الاسم">
                        <input type="text" placeholder="البريد الالكتروني">
                    </div>

                    <textarea name="" placeholder="رسالتك" cols="30" rows="10"></textarea>
                    <input type="submit" value="أرسل" class="btn">
                </form>
            </div>
        </div>
    </section>


    <section class="footer">
        <div class="box-container">
            <div class="contact-box box">
                <h3>تواصل معنا</h3>
                <a href="#" class="f"><i class="fas fa-phone" ></i> 325-369-123+ </a>
                <a href="#" class="f"><i class="fas fa-envelope"></i> info@zaffa.com </a>
          
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>


            <div class="box map-box"> 
                <h3>موقعنا</h3> 
                <a href="#" class="f"><i class="fas fa-map-marker-alt"></i> الجزائر، شارع الحرية، رقم 25 </a>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12838.707!2d3.0506!3d36.7538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzY!5e0!3m2!1sar!2sdz!4v00000000000" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe> 
            </div>
        </div>
    </section>

    <div class="credit">
        . Copyright 2024 –
        <a href="https://github.com/AminaMekideche">amy.</a>
        All Rights Reserved © 
    </div>

    <div  class="theme-toggler"> 
        <div class="toggle-btn">
        </div>
    </div>


    <div class="floating-action-button">
        <a href="form.php" class="btn">احجز الآن</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/toggle.js"></script>
</body>
</html>