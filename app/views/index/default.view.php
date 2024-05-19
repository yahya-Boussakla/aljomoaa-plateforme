
<!DOCTYPE html>
<html lang="en">
<head>
    <title>الجمعة</title>
    <link rel="stylesheet" href="assets/css/styl.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="relative">
        <div id="authent" class="absolute flex flex-row justify-center items-center top-5 mr-1 z-10 w-2/12 h-4-12 right-0 font-semibold gap-x-5 text-white">
            <a class="login text-center no-underline rounded-md w-4/12" href="">ابدأ هنا</a>
            <a href="" class="text-center no-underline rounded-md w-5/12 ">تسجيل الدخول</a>
        </div>
        <img src="assets/imgs/bg-.png" alt="" class="bg" />
        <h1>الجمعة</h1>
        <img src="assets/imgs/الجمعة-modified.png" alt="" class="logo"/>
        
        <div id="bg"></div>
    </header>
    <nav id="navBar">
        <li>
            <i class="fa-solid fa-house"></i>
            الرئيسية
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
    <nav id="links" class="flex flex-row justify-between">
        <div calss="flex flex-row w-auto justify-center gap-3 items-center">
            <span class="px-4 py-1.5 rounded-lg">الرئيسية</span>
            <p class="px-2 py-2">></p>
        </div>
        <button class="rounded px-4 py-2 text-white">
        أكتب مقالتك
        <i class="fa-solid fa-plus"></i>
        </button>
    </nav>
    <main class="overflow-auto">
        <aside class="flex flex-col justify-center items-center aside">
            <div class="flex flex-row gap-2 justify-center w-11/12">
                <img src="assets/imgs/الجمعة-modified.png" alt="" />
                <h1>الجمعة</h1>
            </div>
            <li class="w-11/12">في السياسة</li>
            <li class="w-11/12">في الصحة</li>
            <li class="w-11/12">في التاريخ</li>
            <li class="w-11/12">في الحياة</li>
            <li class="w-11/12">في الاقتصاد</li>
        </aside>
        <article>
            <div class="blog flex flex-col gap-4">
                <div class="flex flex-row justify-between w-11/12 items-center">
                    <div class="caregory">في الصحة</div>
                    <div class="flex flex-row justify-center items-center gap-1.5">
                        <span>سعيد الكملي</span>
                        <img src="assets/imgs/kamli.jpg" class="rounded-full w-9 h-9" alt="">
                    </div>
                </div>
                <hr>
                <section class="flex flex-col gap-4">
                    <div class="flex flex-row justify-between w-full items-baseline">
                        <h1>التبرع بالدم</h1>
                        <span>منذ 2 ساعات</span>
                    </div>
                    <p class="w-full">
                    موضوع حو التبرع بالدم هو موضوع مهم يجب أن يتم تسليط الضوء عليه  فيمجتمعاتنا العربية. فالتبرع بالدم هو عمل إنساني يساهم في إنقاذ  حياةالآخرين، ويعتبر من أعظم الأعمال الخيرية التي يمكن للإنسان أن  يقومبها. التبرع بالدم هو عملية يقوم بها الأشخاص بتقديم كمية من الدمالخاص  بهم للمستشفيات أو المراكز الطبية ليتم إستخدامها في  الذين  يحتاجون لنقل الدم. ويمكن للدم الذي يتم التبرع به أنينقذ حياة الكثير من  الأشخاص الذين يعانون من فقر الدم أو الأمراضالمزمنة أو الحوادث الطارئة.  في....
                    </p>
                    <div class="flex flex-row justify-between w-full items-center">
                        <div class="flex flex-row justify-between items-center w-1/3">
                        <i class="fa-regular fa-bookmark"></i>
                        <div class="flex flex-row justify-between items-center w-auto gap-1">
                            <p>12k.2</p>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <div class="flex flex-row justify-between items-center w-auto gap-1">
                            <p>2000</p>
                            <i class="fa-regular fa-comment"></i>
                        </div>
                        </div>
                        <button class="rounded-tr-2xl rounded-bl-2xl px-6 py-1.5">اقرأ المزيد</button>
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
