<?php
if (!(isset($_SESSION['USER']))) {
  header("Location: http://localhost/jomoaa/authent/login");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styl.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
    <title>حسابي</title>
</head>
<body>
    <?php
    include APP_PATH ."/views/includes/header.php";
    ?>
    <div class="container relative flex flex-row w-full mt-6 px-6 ">
      <section class=" w-9/12 rounded-xl flex flex-col px-16 relative gap-10">
        <button style="background-color: #FFB860;" class="w-52 h-11 text-center text-gray-800 font-semibold rounded flex justify-center items-center self-end ">
            <span class="text-center text-white ">
            الاشعارات
            </span>
            <i class="fa-regular fa-bell relative right-10 text-white"></i>
        </button>
        <div class="rounded-xl border flex flex-row px-8 py-8 justify-between">
            <div class="flex flex-col justify-center items-center gap-5">
                <img src="/jomoaa/public/assets/imgs/bg.png" alt="" class="rounded-full w-64 h-64">
                <h1 class="text-4xl font-bold"><?= $this->profileData['NOM'] . " " . $this->profileData['PRENOM'] ?></h1>
            </div>
            <div class="flex flex-col justify-center items-center gap-20 pt-36">
                <h1 class="text-2xl">عدد مقالاتي</h1>
                <h1 class="text-2xl">تاريخ آخر مقال</h1>
            </div>
            <div class="flex flex-col justify-center items-center gap-20 pt-36 text-2xl font-bold">
                <h1><?= $this->profileData['COUNT(ID_BLOG)'] ?></h1>
                <h1> <?= $this->profileData['last blog'] ?> </h1>
            </div>
        </div>
        <article class="w-10/12 self-start m-0 mt-10">
          <h1 class="text-right text-5xl px-4"><?= $this->profile ?></h1>
          <?php if ($this->myBlogs != null) {
            
            foreach ($this->myBlogs as $value) : ?>
            <div class="blog flex flex-col gap-4">
              <div class="flex flex-row justify-between w-11/12 items-center">
                <div class="caregory"><?= $value['CATEGORY'] ?></div>
              <div class="flex flex-row justify-center items-center gap-1.5">
                <span><?= $value['NOM'] . " " . $value['PRENOM'] ?></span>
              <img src="<?= $value['IMG'] ?>" class="rounded-full w-9 h-9" alt="user profile photo">
            </div>
          </div>
        <hr>
      <section class="section flex flex-col gap-4 w-full">
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
                             <i profileData-is_liked='true' class="fa-solid fa-heart" style="color: red;" id-blog="<?= $value['ID_BLOG'] ?>"></i>
                            <?php
                            }
                          else {
                            ?>
                            <i profileData-is_liked='false' class="fa-regular fa-heart" id-blog="<?= $value['ID_BLOG'] ?>"></i>
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
                  <input type="submit" name="read" class="more rounded-tr-2xl rounded-bl-2xl px-6 py-1.5" value="اقرأ المزيد">
                <input type="hidden" class="blogId" name="ID_BLOG" value="<?= $value['ID_BLOG'] ?>">
              </form>
            </div>
          </section>
        </div>
      <?php endforeach; 
    }
    elseif($this->myBlogs == null) {
      echo "<img src='/jomoaa/public/assets/imgs/not-found.png' alt=''>";
    }?>
    </article>
    </section>
      <section class="flex sticky top-0 flex-col w-3/12 gap-10 text-right rounded-xl border h-screen justify-center items-center">
        اشهارات
      </section>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/like.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>