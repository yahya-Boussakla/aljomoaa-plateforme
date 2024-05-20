
<!DOCTYPE html>
<html lang="en">
<head>
    <title>الجمعة</title>
    <link rel="stylesheet" href="assets/css/styl.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include APP_PATH ."/views/includes/header.php";
    ?>
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
