
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
            <?php foreach ($this->blogs as $value) : ?>
            <div class="blog flex flex-col gap-4">
                <div class="flex flex-row justify-between w-11/12 items-center">
                    <div class="caregory"><?= $value['CATEGORY'] ?></div>
                    <div class="flex flex-row justify-center items-center gap-1.5">
                        <span><?= $this->findOne($value['ID_USER'])['NOM'] . " " . $this->findOne($value['ID_USER'])['PRENOM']?></span>
                        <img src="<?= $this->findOne($value['ID_USER'])['IMG'] ?>" class="rounded-full w-9 h-9" alt="">
                    </div>
                </div>
                <hr>
                <section class="flex flex-col gap-4 w-full">
                    <div class="flex flex-row justify-between w-full items-baseline">
                        <h1 class="titre"><?= $value['TITRE'] ?></h1>
                        <span class="date"><?= $this->passedTime($value['BLOG_DATE']) ?></span>
                    </div>
                    <p class="w-full">
                        <?= $this->getMignature($value['CONTENT']) ?>
                    </p>
                    <div class="reaction flex flex-row justify-between w-full items-center">
                        <div class="flex flex-row justify-between items-center w-1/3">
                        <i <?php if (isset($_SESSION['USER']) && $this->isSaved($value['ID_BLOG'], $_SESSION['USER']) !== true) { ?>
                           style="color: #ffb860;" is_saved="true" class="save fa-solid 
                        <?php }else{
                        ?>
                          is_saved="false" class="save fa-regular
                        <?php
                        }?>
                        fa-bookmark" id-blog="<?= $value['ID_BLOG'] ?>"></i>
                        <div class="like flex flex-row justify-between items-center w-auto gap-1">
                            <p class="likes"><?= $this->likes($value['ID_BLOG']) ?></p>
                            <?php
                            if (isset($_SESSION['USER']) && $this->isLiked($value['ID_BLOG'],$_SESSION['USER']) !== true ) {  
                            ?>
                             <i data-is_liked='true' class="fa-solid fa-heart" style="color: red;" id-blog="<?= $value['ID_BLOG'] ?>"></i>
                            <?php
                            }
                            else {
                            ?>
                            <i data-is_liked='false' class="fa-regular fa-heart" id-blog="<?= $value['ID_BLOG'] ?>"></i>
                            <?php    
                            }
                            ?>
                        </div>
                        <div class="flex flex-row justify-between items-center w-auto gap-1">
                            <p>2000</p>
                            <i class="fa-regular fa-comment"></i>
                        </div>
                        </div>
                        <form action="" method="post">
                            <input type="submit" name="read" class="rounded-tr-2xl rounded-bl-2xl px-6 py-1.5" value="اقرأ المزيد">
                            <input type="hidden" class="blogId" name="ID_BLOG" value="<?= $value['ID_BLOG'] ?>">
                        </form>
                    </div>
                </section>
            </div>
            <?php endforeach; ?>
        </article>
    </main>
    <footer>
        <a href="/login/login.html">admin</a>
    </footer>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/like.js"></script>
    <!-- <script src="script.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>