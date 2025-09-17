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
    <title>زفة.</title>
</head>
<body dir="rtl">

<header class="header">
        <a href="#" class="logo">زفّـــــة<span>.</span></a>
        <nav class="navbar">
            <a href="index.php#home" class="act">الصفحة الرئيسية</a>
            <a href="index.php#about">تعرف عنا</a>
            <a href="index.php#service">الخدمات</a>
            <a href="index.php#gallery">الصور</a>
            <a href="index.php#price">عروضنا</a>
            <a href="index.php#review">تقييماتنا</a>
            <a href="index.php#contact">تواصل معنا</a>
        </nav>
        <div id="menu-bars" class="fas fa-bars"></div>
    </header>


    <div class="formbold-main-wrapper">
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
                    $main_dishes = explode(',', $row['main_dishes']);
                    $side_dishes = explode(',', $row['side_dishes']);
                    $salads = explode(',', $row['salads']);
                    $drinks = explode(',', $row['drinks']);
                    $desserts = explode(',', $row['desserts']);

                    $total_dishes = count($main_dishes) + count($side_dishes) + count($salads) + count($drinks) + count($desserts);

                    if ($total_dishes >= 1 && $total_dishes <= 4) {
                        $base_price = 80000;
                    } elseif ($total_dishes >= 4 && $total_dishes <= 6) {
                        $base_price = 90000;
                    } else {
                        $base_price = 100000;
                    }

                    $total_price = $base_price + ($invitees_count * 100);

                    echo "<br><h1>السعر الإجمالي: " . htmlspecialchars(number_format($total_price, 0)) . " دج</h1>";
                }
            } else {
                echo "0 results";
            }

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