<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500&family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
   <title>زفّة. | احجز الآن</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body dir="rtl">

 <header class="header">
            <a href="#" class="logo">زفّـــــة<span>.</span></a>
            <nav class="navbar">
                <a href="index.php##home" class="nav-link">الصفحة الرئيسية</a>
                <a href="index.php#about" class="nav-link">تعرف عنا</a>
                <a href="index.php#service" class="nav-link">خدماتنا</a>
                <a href="index.php#gallery" class="nav-link">معرضنا</a>
                <a href="index.php#review" class="nav-link">تقييماتنا</a>
                <a href="form.php" class="btn-book">احجز الآن</a>
            </nav>
            <div id="menu-bars" class="fas fa-bars"></div>
    </header>


    <div class="formbold-main-wrapper wrapper">
        <div class="formbold-form-wrapper">
        <form action="index.php" method="POST">

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "zaffa";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $client_id = $_GET['id'] ?? '';

            $sql = "SELECT * FROM event_details WHERE id = '$client_id'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h2>ملخص طلبك</h2>";
                    echo "<br>";

                    echo "<h3>معلومات الحدث:</h3>";
                    echo "<p>عدد المدعوين: " . htmlspecialchars($row['invitees_count']) . "</p>";
                    echo "<p>تاريخ بدأ المناسبة: " . htmlspecialchars($row['start_date']) . "</p>";
                    echo "<p>توقيت البدأ: " . htmlspecialchars($row['start_time']) . "</p>";
                    echo "<p>تاريخ انتهاء المناسبة: " . htmlspecialchars($row['end_date']) . "</p>";
                    echo "<p>توقيت الانتهاء: " . htmlspecialchars($row['end_time']) . "</p>";
                    echo "<br>";

                    echo "<h3>قائمة الطعام:</h3>";
                    echo "<p>الأطباق الرئيسية: " . htmlspecialchars($row['main_dishes']) . "</p>";
                    echo "<p>الأطباق الثانوية: " . htmlspecialchars($row['side_dishes']) . "</p>";
                    echo "<p>السلطات : " . htmlspecialchars($row['salads']) . "</p>";
                    echo "<p>المشروبات : " . htmlspecialchars($row['drinks']) . "</p>";
                    echo "<p>التحلية : " . htmlspecialchars($row['desserts']) . "</p>";
                    echo "<br>";

                    echo "<h3>معلومات الاتصال:</h3>";
                    echo "<p>الاسم: " . htmlspecialchars($row['arabic_firstname']) . " " . htmlspecialchars($row['arabic_lastname']) . "</p>";
                    echo "<p>رقم الهاتف: " . htmlspecialchars($row['phone']) . "</p>";
                    echo "<p>البريد الإلكتروني: " . htmlspecialchars($row['email']) . "</p>";

                    $invitees_count = (int)$row['invitees_count'];

                    $main_dishes = array_filter(explode(',', $row['main_dishes']));
                    $side_dishes = array_filter(explode(',', $row['side_dishes']));
                    $salads = array_filter(explode(',', $row['salads']));
                    $drinks = array_filter(explode(',', $row['drinks']));
                    $desserts = array_filter(explode(',', $row['desserts']));

                    $total_dishes = count($main_dishes) + count($side_dishes) + count($salads) + count($drinks) + count($desserts);

                    $base_price = 80000;
                    $price_per_guest = 1000; 

                    $extra_price = 0;
                    $needs = !empty($row['needs']) ? explode(',', $row['needs']) : [];

                    if (in_array("DJ", $needs)) {
                        $extra_price += 20000;
                    }
                    if (in_array("Photographer", $needs)) {
                        $extra_price += 30000;
                    }
                    if (in_array("فريق منع التصوير", $needs)) {
                        $extra_price += 15000;
                    }
                    if (in_array("منظمين", $needs)) {
                        $extra_price += 10000;
                    }

                    if ($invitees_count > 0 && $total_dishes > 0) {
                        $total_price = $base_price + ($invitees_count * $price_per_guest) + $extra_price;

                        echo "<br><h1>السعر الإجمالي: " . htmlspecialchars(number_format($total_price, 0)) . " دج</h1>";
                    } else {
                        echo "<br><h3 style='color:red;'> يرجى إدخال عدد المدعوين واختيار الأطباق لحساب السعر.</h3>";
                    }

        }}
            $conn->close();
            ?>
        

            <div class="formbold-form-btn-wrapper">
                <button type="button" class="formbold-btn-am">
                    إلغاء
                </button>
                <button type="submit" class="formbold-btn-ami">
                    تأكيد
                </button>
            </div>
            </form>
    </div>
</div>


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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cancelButton = document.querySelector('.formbold-btn-am');
        const confirmButton = document.querySelector('.formbold-btn-ami');

        cancelButton.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = 'index.php';
        });

        confirmButton.addEventListener('click', function(event) {
            event.preventDefault();
            alert('سيتم مراجعة طلبك في أقرب الآجال وسيتم التواصل معك عبر الهاتف أو البريد الإلكتروني. نشكر ثقتكم بنا.');
            document.querySelector('form').submit();
        });
    });
</script>
</body>
</html>