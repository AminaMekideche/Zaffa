<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500&family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">     
    <link rel="stylesheet" href="css/form.css">
    <title>زفّة.| طلب السعر مجا</title>
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
          <form action="config.php" method="POST">
              <div class="formbold-steps">
                  <ul>
                      <li class="formbold-step-menu1 active">
                          <span>1</span>
                          مناسبتك
                      </li>
                      <li class="formbold-step-menu2">
                          <span>2</span>
                          أطباقك
                      </li>
                      <li class="formbold-step-menu3">
                          <span>3</span>
                          احتياجاتك
                      </li>
                      <li class="formbold-step-menu4">
                          <span>4</span>
                          بياناتك الشخصية
                      </li>
                  </ul>
              </div>
              <div class="formbold-form-step-1 active">
                <div class="formbold-input-flex">
                  <div>
                      <label for="invitees_count" class="formbold-form-label"> عدد المدعوين </label>
                      <div class="formbold-form-input">
                        <button id="decrement" type="button" class="counter-btn">-</button>
                        <span id="count">20</span>
                        <input type="hidden" id="invitees_count" name="invitees_count" value="20">
                        <button id="increment" type="button" class="counter-btn">+</button>
                      </div>
                  </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                      <label for="start_date" class="formbold-form-label"> تاريخ بدأ المناسبة </label>
                      <input
                        type="date"
                        name="start_date"
                        id="start_date"
                        class="formbold-form-input"
                      />
                    </div>
                    <div>
                      <label for="start_time" class="formbold-form-label"> توقيت البدأ </label>
                      <input
                        class="formbold-form-input"
                        type="time"
                        name="start_time"
                        id="start_time"
                      />
                    </div>
                </div>
                <div class="formbold-input-flex">
                  <div>
                    <label for="end_date" class="formbold-form-label"> تاريخ انتهاء المناسبة </label>
                    <input
                      type="date"
                      name="end_date"
                      id="end_date"
                      class="formbold-form-input"
                    />
                  </div>
                  <div>
                    <label for="end_time" class="formbold-form-label"> توقيت الانتهاء </label>
                    <input
                      class="formbold-form-input"
                      type="time"
                      name="end_time"
                    />
                  </div>
              </div>
          </div>
          <div class="formbold-form-step-2">
            <div class="food-selection">
                <label class="formbold-form-label">اختر الأطباق التي ترغب في تقديمها في مناسبتك</label>
        
                <div class="food-category">
                    <h3 class="food-category-title">الأطباق الرئيسية</h3>
                    <div class="food-items">
                        <label class="food-item">
                            <input type="checkbox" name="main_dish[]" value="كسكس">
                            <div class="food-item-content">
                                <img src="img/image1.jpg" alt="Main Dish 1">
                                <span>كسكس</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="main_dish[]" value="رشتة">
                            <div class="food-item-content">
                                <img src="img/image2.jpg" alt="Main Dish 2">
                                <span>رشتة</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="main_dish[]" value="شخشوخة">
                            <div class="food-item-content">
                                <img src="img/image3.jpg" alt="Main Dish 3">
                                <span>شخشوخة</span>
                            </div>
                        </label>
                    </div>
                </div>
        
                <!-- قسم الأطباق الثانوية -->
                <div class="food-category">
                    <h3 class="food-category-title">الأطباق الثانوية</h3>
                    <div class="food-items">
                        <label class="food-item">
                            <input type="checkbox" name="side_dish[]" value="شربة فريك">
                            <div class="food-item-content">
                                <img src="img/image4.jpg" alt="Side Dish 1">
                                <span>شربة فريك</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="side_dish[]" value="طاجين زيتون">
                            <div class="food-item-content">
                                <img src="img/image5.jpg" alt="Side Dish 2">
                                <span>طاجين زيتون</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="side_dish[]" value="مثوم">
                            <div class="food-item-content">
                                <img src="img/image6.jpg" alt="Side Dish 3">
                                <span>مثوم </span>
                            </div>
                        </label>                    
                    </div>
                </div>
        
                <!-- قسم السلطات -->
                <div class="food-category">
                    <h3 class="food-category-title">السلطات</h3>
                    <div class="food-items">
                        <label class="food-item">
                            <input type="checkbox" name="salad[]" value="سلطة الفتوش">
                            <div class="food-item-content">
                                <img src="img/image10.jpg" alt="Salad 1">
                                <span>سلطة الفتوش</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="salad[]" value="سلطة سيزار">
                            <div class="food-item-content">
                                <img src="img/image11.jpg" alt="Salad 2">
                                <span>سلطة سيزار</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="salad[]" value="سلطة ماسيدوان">
                            <div class="food-item-content">
                                <img src="img/image12.jpeg" alt="Salad 3">
                                <span>سلطة ماسيدوان</span>
                            </div>
                        </label>
                    </div>
                </div>
        
                <div class="food-category">
                    <h3 class="food-category-title">المشروبات</h3>
                    <div class="food-items">
                        <label class="food-item">
                            <input type="checkbox" name="drink[]" value="مشروبات غازية">
                            <div class="food-item-content">
                                <img src="img/image7.jpg" alt="Drink 1">
                                <span>مشروبات غازية</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="drink[]" value="مشروبات طبيعية">
                            <div class="food-item-content">
                                <img src="img/image8.jpg" alt="Drink 2">
                                <span>مشروبات طبيعية</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="drink[]" value="تاي">
                            <div class="food-item-content">
                                <img src="img/image9.jpg" alt="Drink 3">
                                <span>تاي</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="food-category">
                    <h3 class="food-category-title">التحلية</h3>
                    <div class="food-items">
                        <label class="food-item">
                            <input type="checkbox" name="dessert[]" value="Tiramisu">
                            <div class="food-item-content">
                                <img src="img/image15.jpg" alt="Dessert 1">
                                <span>Tiramisu</span> 
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="dessert[]" value="Mini tartelette">
                            <div class="food-item-content">
                                <img src="img/image16.jpg" alt="Dessert 2">
                                <span>Mini tartelette</span>
                            </div>
                        </label>
                        <label class="food-item">
                            <input type="checkbox" name="dessert[]" value="Mini cheesecake">
                            <div class="food-item-content">
                                <img src="img/image18.jpeg" alt="Dessert 3">
                                <span>Mini cheesecake</span>
                            </div>
                        </label>                    
                    </div>
                </div>

                <div class="food-category">
                    <h3 class="food-category-title">أخرى</h3>
                    <div class="food-items">
                        <label class="food-item">
                            <input type="checkbox" name="other[]" value="فواكه موسمية">
                            <div class="food-item-content">
                                <img src="img/image19.jpg" alt="Other 1">
                                <span>فواكه موسمية</span> 
                            </div>
                        </label>           
                    </div>
                </div>
            </div>
        </div>

        <div class="formbold-form-step-3">
                    <label class="formbold-form-label">اختر احتياجاتك</label>
                    <br>
                    <div class="formbold-input-flex">
                        <div>
                            <input type="checkbox" name="needs[]" value="DJ" id="dj">
                            <label for="dj">DJ</label>
                        </div>
                        <br>
                        <div>
                            <input type="checkbox" name="needs[]" value="Photographer" id="photographer">
                            <label for="photographer">Photographer</label>
                        </div>
                        <br>
                        <div>
                            <input type="checkbox" name="needs[]" value="فريق منع التصوير" id="no_photography_team">
                            <label for="no_photography_team">فريق منع التصوير</label>
                        </div>
                        <br>
                        <div>
                            <input type="checkbox" name="needs[]" value="منظمين" id="organizers">
                            <label for="organizers">منظمين</label>
                        </div>
                        <div id="organizer-gender-options" style="display: none;">
                            <input type="radio" name="organizer_gender" value="رجال" id="male_organizers">
                            <label for="male_organizers">رجال</label>
                            <br>
                            <input type="radio" name="organizer_gender" value="نساء" id="female_organizers">
                            <label for="female_organizers">نساء</label>
                        </div>
                    </div>
                </div>

    <div class="formbold-form-step-4">
    <div class="formbold-input-flex">
        <div>
            <label for="arabic_firstname" class="formbold-form-label">الاسم (بالعربية)</label>
            <input type="text" name="arabic_firstname" id="arabic_firstname" class="formbold-form-input">
        </div>
        <div>
            <label for="arabic_lastname" class="formbold-form-label">اللقب (بالعربية)</label>
            <input type="text" name="arabic_lastname" id="arabic_lastname" class="formbold-form-input">
        </div>
    </div>
    <div class="formbold-input-flex">
        <div>
            <label for="phone" class="formbold-form-label">رقم الهاتف (213+)</label>
            <input type="tel" name="phone" id="phone" class="formbold-form-input">
        </div>
        <div>
            <label for="email" class="formbold-form-label">البريد الإلكتروني</label>
            <input type="email" name="email" id="email" class="formbold-form-input">
        </div>
    </div>
    <div class="formbold-form-confirm">
        <p>
            <input type="checkbox" name="terms" id="terms_checkbox">
            <label for="terms_checkbox">أوافق على الشروط العامة لاستخدام زفّة.</label>
        </p>
        <div class="terms-message" style="display: none;">
            *يخضع إلغاء الحجوزات لشروط محددة، وقد تطبق رسوم إلغاء محددة.
            <br>
            *يحترم الموقع خصوصية مستخدميه ويحمي بياناتهم الشخصية.
            <br>
            *يعتبر استخدام الموقع موافقة مسبقة على جميع الشروط والأحكام الواردة هنا.
        </div>
    </div>
</div>

        
        <div class="formbold-form-btn-wrapper">
            <button class="formbold-back-btn">
              تراجع
            </button>
            <button class="formbold-btn">
                التالي
            </button>
          </div>
        </form>
      </div>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const countElement = document.getElementById('count');
        const incrementButton = document.getElementById('increment');
        const decrementButton = document.getElementById('decrement');
        const inviteesCountInput = document.getElementById('invitees_count');

        let count = 0;

        const updateCount = () => {
            countElement.textContent = count;
            inviteesCountInput.value = count;
        };

        incrementButton.addEventListener('click', () => {
            count += 10;
            updateCount();
        });

        decrementButton.addEventListener('click', () => {
            if (count > 0) {
                count -= 10;
                updateCount();
            }
        });

        updateCount();

        const stepMenuOne = document.querySelector('.formbold-step-menu1');
        const stepMenuTwo = document.querySelector('.formbold-step-menu2');
        const stepMenuThree = document.querySelector('.formbold-step-menu3');
        const stepMenuFour = document.querySelector('.formbold-step-menu4');

        const stepOne = document.querySelector('.formbold-form-step-1');
        const stepTwo = document.querySelector('.formbold-form-step-2');
        const stepThree = document.querySelector('.formbold-form-step-3');
        const stepFour = document.querySelector('.formbold-form-step-4');

        const formSubmitBtn = document.querySelector('.formbold-btn');
        const formBackBtn = document.querySelector('.formbold-back-btn');

        formSubmitBtn.addEventListener('click', function(event) {
            event.preventDefault();
            if (stepMenuOne.classList.contains('active')) {
                stepMenuOne.classList.remove('active');
                stepMenuTwo.classList.add('active');

                stepOne.classList.remove('active');
                stepTwo.classList.add('active');

                formBackBtn.classList.add('active');
            } else if (stepMenuTwo.classList.contains('active')) {
                stepMenuTwo.classList.remove('active');
                stepMenuThree.classList.add('active');

                stepTwo.classList.remove('active');
                stepThree.classList.add('active');

                formBackBtn.classList.add('active');
            } else if (stepMenuThree.classList.contains('active')) {
                stepMenuThree.classList.remove('active');
                stepMenuFour.classList.add('active');

                stepThree.classList.remove('active');
                stepFour.classList.add('active');

                formBackBtn.classList.remove('active');
                formSubmitBtn.textContent = 'ارسال';
            } else if (stepMenuFour.classList.contains('active')) {
                document.querySelector('form').submit();
            }
        });

        formBackBtn.addEventListener('click', function(event) {
            event.preventDefault();
            if (stepMenuTwo.classList.contains('active')) {
                stepMenuOne.classList.add('active');
                stepMenuTwo.classList.remove('active');

                stepOne.classList.add('active');
                stepTwo.classList.remove('active');

                formBackBtn.classList.remove('active');
            } else if (stepMenuThree.classList.contains('active')) {
                stepMenuTwo.classList.add('active');
                stepMenuThree.classList.remove('active');

                stepTwo.classList.add('active');
                stepThree.classList.remove('active');

                formBackBtn.classList.add('active');
                formSubmitBtn.textContent = 'التالي';
            } else if (stepMenuFour.classList.contains('active')) {
                stepMenuThree.classList.add('active');
                stepMenuFour.classList.remove('active');

                stepThree.classList.add('active');
                stepFour.classList.remove('active');

                formSubmitBtn.textContent = 'التالي';
            }
        });

        const organizersCheckbox = document.getElementById('organizers');
        const organizerGenderOptions = document.getElementById('organizer-gender-options');

        organizersCheckbox.addEventListener('change', function() {
            if (this.checked) {
                organizerGenderOptions.style.display = 'block';
            } else {
                organizerGenderOptions.style.display = 'none';
            }
        });

        formSubmitBtn.addEventListener('click', function(event) {
            event.preventDefault();
            if (stepMenuOne.classList.contains('active')) {
                // Code for step 1
            } else if (stepMenuTwo.classList.contains('active')) {
                // Code for step 2
            } else if (stepMenuThree.classList.contains('active')) {
                // Code for step 3
            } else if (stepMenuFour.classList.contains('active')) {
                if (document.getElementById('terms_checkbox').checked) {
                    document.querySelector('form').submit();
                } else {
                    document.querySelector('.terms-message').style.display = 'block';
                }
            }
        });
    });

    
</script>

</body>
</html>
