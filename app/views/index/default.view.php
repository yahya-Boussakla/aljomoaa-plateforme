
<!DOCTYPE html>
<html lang="en">
<head>
    <title>الجمعة</title>
    <link rel="stylesheet" href="assets/css/styl.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div id="authent">
            <a class="login" href="">ابدأ هنا</a>
            <a href="" class="signup">تسجيل الدخول</a>
        </div>
        <img src="assets/imgs/bg-.png" alt="" class="bg" />
        <h1>الجمعة</h1>
        <img src="assets/imgs/الجمعة-modified.png" alt="" class="logo"/>
        
        <div id="bg"></div>
    </header>
    <nav id="navBar">
        <li>
            <i class="fa-solid fa-house"></i>
            الرثيسية
        </li>
        <li>
            <i class="fa-solid fa-address-card"></i>
            تعرف علينا
        </li>
       
        <li>
            <i class="fa-solid fa-phone"></i>
            اتصل بنا
        </li>
        <li class="search-bar">
            <div class="fa-solid fa-magnifying-glass search-icon"></div>
            <input class="closed" type="text" placeholder="ابحث..." onkeyup="search()" id="search" />

            ابحث
        </li>
    </nav>
    <nav id="links">
        <span class="rounded-pill">الرثيسية</span>
        <p class="m-0 p-0">></p>
    </nav>
    <main class="overflow-auto">
        <aside>
            <div>
                <img src="imgs/الجمعة-modified.png" alt="" />
                <h1>AL JOMOAA</h1>
            </div>
            <li>في السياسة</li>
            <li>في الصحة</li>
            <li>في التاريخ</li>
            <li>في الحياة</li>
            <li>في الاقتصاد</li>
        </aside>
        <article>
            <div class="blog">
                <div class="flex flex-row justify-center">
                    <div>في الصحة</div>
                    <div class="flex flex-row justify-center">
                        <img src="" alt="">
                        <span>سعيد الكملي</span>
                    </div>
                </div>
                <hr>
                <section>
                    <div class="flex flex-row justify-center">
                        <h1>التبرع بالدم</h1>
                        <span>منذ 2 ساعات</span>
                    </div>
                    <p>
                    موضوع حول التبرع بالدم هو موضوع مهم يجب أن يتم تسليط الضوء عليه  فيمجتمعاتنا العربية. فالتبرع بالدم هو عمل إنساني يساهم في إنقاذ  حياةالآخرين، ويعتبر من أعظم الأعمال الخيرية التي يمكن للإنسان أن  يقومبها. التبرع بالدم هو عملية يقوم بها الأشخاص بتقديم كمية من الدمالخاص  بهم للمستشفيات أو المراكز الطبية ليتم إستخدامها في  الذين  يحتاجون لنقل الدم. ويمكن للدم الذي يتم التبرع به أنينقذ حياة الكثير من  الأشخاص الذين يعانون من فقر الدم أو الأمراضالمزمنة أو الحوادث الطارئة.  في....
                    </p>
                    <div class="flex flex-row justify-center">
                        <div class="flex flex-row justify-center">
                        <i class="fa-solid fa-bookmark"></i>
                        <div></div>
                        </div>
                        <button>اقرأ المزيد</button>
                    </div>
                </section>
            </div>
        </article>
    </main>
    <footer>
        <a href="/login/login.html">admin</a>
    </footer>        
    <script src="script.js"></script>
</body>
</html>
