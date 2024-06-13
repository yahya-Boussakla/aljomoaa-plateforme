<?php
if (!(isset($_SESSION['ID_BLOG']))) {
  header("Location: http://localhost/jomoaa/authent/login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/styl.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.core.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include APP_PATH ."/views/includes/header.php";
    ?>
    <div class="container relative flex flex-row w-full mt-6 px-6">
      <section class=" w-9/12 rounded-xl flex flex-col px-4 relative">
        <div class="bar bg-white self-center flex flex-row px-5 py-3 gap-1.5 w-10/12 items-center justify-between sticky top-0">
          <div class="flex flex-row justify-center items-center gap-1.5">
            <span><?= $this->blog['NOM'] .' '. $this->blog['PRENOM']?></span>
            <img src="<?= $this->blog['IMG'] ?>" class="rounded-full w-9 h-9" alt="">
          </div>
          <div class="like flex flex-row justify-between items-center w-auto gap-1">
                            <p class="likes"><?= $this->likes($this->blog['ID_BLOG']) ?></p>
                            <?php
                            if (isset($_SESSION['USER']) && $this->isLiked($this->blog['ID_BLOG'],$_SESSION['USER']) !== true ) {  
                            ?>
                             <i data-is_liked='true' class="fa-solid fa-heart" style="color: red;" id-blog="<?= $this->blog['ID_BLOG'] ?>"></i>
                            <?php
                            }
                            else {
                            ?>
                            <i data-is_liked='false' class="fa-regular fa-heart" id-blog="<?= $this->blog['ID_BLOG'] ?>"></i>
                            <?php    
                            }
                            ?>
          </div>
          <div class="flex flex-row justify-between items-center w-auto gap-1">
            <p>2000</p>
            <i class="fa-regular fa-comment"></i>
          </div>
          <div class="flex flex-row justify-between items-center w-auto gap-1">
            <p><?= $this->views($this->blog['ID_BLOG']) ?></p>
            <i class="fa-regular fa-eye"></i>
          </div>
          <i <?php if (isset($_SESSION['USER']) && $this->isSaved($this->blog['ID_BLOG'], $_SESSION['USER']) !== true) { ?>
                           style="color: #ffb860;" is_saved="true" class="save fa-solid 
                        <?php }else{
                        ?>
                          is_saved="false" class="save fa-regular
                        <?php
                        }?>
                        fa-bookmark" id-blog="<?= $this->blog['ID_BLOG'] ?>"></i>
          <span style="color: #7690D2;"><?= $this->passedTime($this->blog['BLOG_DATE']) ?></span>
        </div>
        <div id="editor" class="min-h-96 text-right ql-snow self-center">
          <div class="ql-editor" contenteditable="false" style="text-align: right;">
            <?= $this->blog['CONTENT'] ?>
          </div>
        </div>
        <article class="w-10/12 self-start m-0 mt-10">
          <h1 class="text-right text-5xl px-4">مقالات أخرى</h1>
          <?php foreach ($this->others as $value) : ?>
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
                  <input type="submit" name="read" class="more rounded-tr-2xl rounded-bl-2xl px-6 py-1.5" value="اقرأ المزيد">
                <input type="hidden" class="blogId" name="ID_BLOG" value="<?= $value['ID_BLOG'] ?>">
              </form>
            </div>
          </section>
        </div>
      <?php endforeach; ?>
    </article>
    </section>
      <section class="flex sticky top-0 flex-col w-3/12 gap-10 text-right rounded-xl border h-screen justify-center items-center">
        اشهارات
      </section>
    </div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="../assets/js/like.js"></script>
</body>
</html>