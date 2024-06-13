<!DOCTYPE html>
<html lang="en">
<head>
    <title>الجمعة</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/jomoaa/public/assets/css/styl.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="relative">
  <div id="authent" class="absolute flex flex-row justify-center items-center top-5 mr-1 z-10 w-2/12 h-4-12 right-0 font-semibold gap-x-5 text-white">
    <?php
    
    if (isset($_SESSION['USER'])) {
    ?>
      <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" style="background-color: #ffb860;" class="flex items-center text-sm pe-1 pl-4 pr-4 py-4 font-medium text-gray-900 rounded-xl hover:text-black-600 dark:hover:text-black md:me-0 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
      <span class="sr-only">Open user menu</span>
      <img class="w-8 h-8 me-2 rounded-full" src="<?php echo $this->data['IMG'] ;?>" alt="user photo">
      حسابي
      <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
      </button>

      <!-- Dropdown menu -->
      <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
          <div class="px-4 py-3 text-sm text-gray-900 ">
            <div class="font-medium text-center"><?php echo $this->data['NOM'] . " " . $this->data['PRENOM'];  ?></div>
            <div class="truncate text-center"><?php echo  $this->data['EMAIL']; ?></div>
          </div>
          <form action="" method="post">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
            <li>
              <input type="submit" name="acount" value="حسابي" class="w-full cursor-pointer text-right block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-gray-800" >
            </li>
            <li>
              <input type="submit" name="brouillan" value="المسودة" class="w-full cursor-pointer text-right block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-gray-800" >
            </li>
             <li>
              <input type="submit" name="saves" value="تم حفظها" class="w-full cursor-pointer text-right block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-gray-800" >
            </li>
            
          </ul>
          <div class="py-2">
              <input type="submit" name="logout" value="تسجيل الخروج" class="w-full cursor-pointer text-right block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-gray-800" >
            </form>
          </div>
    <?php
    }
    else {
    ?>
      <a class="login text-center no-underline rounded-md w-4/12" href="http://localhost/jomoaa/authent/signup">ابدأ هنا</a>
      <a href="http://localhost/jomoaa/authent/login" class="text-center no-underline rounded-md w-5/12 ">تسجيل الدخول</a>
    <?php
    }
    ?>
  </div>


        </div>
        <img src="/jomoaa/public/assets/imgs/bg-.png" alt="" class="bg" />
        <h1>الجمعة</h1>
        <img src="/jomoaa/public/assets/imgs/الجمعة-modified.png" alt="" class="logo"/>
        
        <div id="bg"></div>
    </header>
    <nav id="navBar">
        <li>
           <a href="http://localhost/jomoaa/">
             <i class="fa-solid fa-house"></i>
           </a> 
            الرئيسية
        </li>
        <li>
            <a href="http://localhost/jomoaa/index/aboutus">
              <i class="fa-solid fa-address-card"></i>
            </a>
            تعرف علينا
        </li>
       
        <li>
          <a href="http://localhost/jomoaa/index/callus">
            <i class="fa-solid fa-phone"></i>
          </a>
            اتصل بنا
        </li>
        <li class="search-bar">
          <form action="" method="post">

            <div class="fa-solid fa-magnifying-glass search-icon"></div>
          <input name="searchValue" class="closed" type="text" placeholder="ابحث..." />
          <input type="submit" value="ابحث" name="search"/>
        </form>
      </li>
    </nav>
    <nav id="links" class="flex flex-row justify-between">
        <div calss="flex flex-row w-auto justify-center gap-3 items-center">
          <?php foreach($this->navItems as $item){ ?>
            <span class="px-4 py-1.5 rounded-lg"><?= $item ?></span>
            <p class="px-2 py-2">></p>
            <?php
          }
          ?>
        </div>
        <button class="rounded px-4 py-2 text-white">
          <a href="http://localhost/jomoaa/blog">
            أكتب مقالتك
          </a>
        <i class="fa-solid fa-plus"></i>
        </button>
    </nav>
    <main class="flex flex-col px-24">
      <h1 class="text-5xl my-5">من نحن ؟ </h1>
      <div class="flex flex-row gap-24">
        <div class="flex flex-col w-7/12">
          <p>اللّغة  العربيّة من اللّغات العالميّة الأكثر انتشاراً في العالم، وتعتبرُ من  إحدى اللّغات المُعتمدة في الأمم المُتّحدة، كما إنها تشكّلُ اللّغة الأولى  في مناطق بلاد الشّام، وشبه الجزيرة العربيّة، وشمال أفريقيا، وساهم هذا  الانتشار الواسعُ للّغة العربيّة في تصنيفه
            ا كواحدةٍ من اللّغاتِ التي يسعى  العديدُ من الطُلّاب إلى دراستها، وخصوصاً غير الناطقيّن بها؛ من أجل  التعرّفِ على جمال كلماتها. كما أنّها من اللّغات التي ظلّت مُحافظةً على  قواعدها اللغويّة حتّى هذا الوقت؛ لأنّها لغة الإسلام والمسلميّن والقرآنِ  الكريم، كما أنّ الثّقافة العربيّة غنيّةٌ جدّاً بالعديد من المُؤلّفات،  سواءً الأدبيّة، أو العلميّة، أو غيرها، والتي كُتِبتْ بِلُغَةٍ عربيّة  فصيحة، ويصلُ العدد الإجماليُّ لحُروفِ اللّغة العربيّة إلى ثمانيّة وعشرين  حرفاً.[١] </p>
          <form action="" method="post" class="self-end">
              <input type="submit" name="read" class="more rounded-tr-2xl rounded-bl-2xl px-6 py-1.5" value="اقرأ المزيد">
                                  <input type="hidden" class="blogId" name="ID_BLOG" value="<?= $value['ID_BLOG'] ?>">
                              </form>
        </div>
        <div class="flex flex-col w-5/12">
          <img src="/jomoaa/public/assets/imgs/bg-.png" alt="" style="height: 35vh;" class="w-5/12 absolute left-10 rounded-xl">
          <img src="/jomoaa/public/assets/imgs/الجمعة-modified.png" alt="" class="relative top-20 right-40 z-30 w-20">
          <h1 class="jomoaa text-6xl text-white relative z-30 right-64">الجمعة</h1>
        </div>
      </div>
      <h1 class="text-5xl mb-12 self-end mt-20">أهدافنا ؟</h1>
      <div class="flex flex-row justify-between">
        <div class="flex flex-col w-5/12">
          <img src="/jomoaa/public/assets/imgs/images.png" alt="" style="height: 35vh;" class="w-5/12 absolute right-46 rounded-xl">
          
        </div>
        <div class="flex flex-col w-5/12">
          <p>اللّغة  العربيّة من اللّغات العالميّة الأكثر انتشاراً في العالم، وتعتبرُ من  إحدى اللّغات المُعتمدة في الأمم المُتّحدة، كما إنها تشكّلُ اللّغة الأولى  في مناطق بلاد الشّام، وشبه الجزيرة العربيّة، وشمال أفريقيا، وساهم هذا  الانتشار الواسعُ للّغة العربيّة في تصنيفه
            ا كواحدةٍ من اللّغاتِ التي يسعى  العديدُ من الطُلّاب إلى دراستها، وخصوصاً غير الناطقيّن بها؛ من أجل  التعرّفِ على جمال كلماتها. كما أنّها من اللّغات التي ظلّت مُحافظةً على  قواعدها اللغويّة حتّى هذا الوقت؛ لأنّها لغة الإسلام والمسلميّن والقرآنِ  الكريم، كما أنّ الثّقافة العربيّة غنيّةٌ جدّاً بالعديد من المُؤلّفات،  سواءً الأدبيّة، أو العلميّة، أو غيرها، والتي كُتِبتْ بِلُغَةٍ عربيّة  فصيحة، ويصلُ العدد الإجماليُّ لحُروفِ اللّغة العربيّة إلى ثمانيّة وعشرين  حرفاً.[١] </p>
          <form action="" method="post" class="self-end">
              <input type="submit" name="read" class="more rounded-tr-2xl rounded-bl-2xl px-6 py-1.5" value="اقرأ المزيد">
                                  <input type="hidden" class="blogId" name="ID_BLOG" value="<?= $value['ID_BLOG'] ?>">
                              </form>
        </div>
      </div>
      <h1 class="text-5xl my-5">كيف أكتب مقال ؟</h1>
      <div class="flex flex-row gap-24">
        <div class="flex flex-col w-7/12">
          <p>اللّغة  العربيّة من اللّغات العالميّة الأكثر انتشاراً في العالم، وتعتبرُ من  إحدى اللّغات المُعتمدة في الأمم المُتّحدة، كما إنها تشكّلُ اللّغة الأولى  في مناطق بلاد الشّام، وشبه الجزيرة العربيّة، وشمال أفريقيا، وساهم هذا  الانتشار الواسعُ للّغة العربيّة في تصنيفه
            ا كواحدةٍ من اللّغاتِ التي يسعى  العديدُ من الطُلّاب إلى دراستها، وخصوصاً غير الناطقيّن بها؛ من أجل  التعرّفِ على جمال كلماتها. كما أنّها من اللّغات التي ظلّت مُحافظةً على  قواعدها اللغويّة حتّى هذا الوقت؛ لأنّها لغة الإسلام والمسلميّن والقرآنِ  الكريم، كما أنّ الثّقافة العربيّة غنيّةٌ جدّاً بالعديد من المُؤلّفات،  سواءً الأدبيّة، أو العلميّة، أو غيرها، والتي كُتِبتْ بِلُغَةٍ عربيّة  فصيحة، ويصلُ العدد الإجماليُّ لحُروفِ اللّغة العربيّة إلى ثمانيّة وعشرين  حرفاً.[١] </p>
          <form action="" method="post" class="self-end">
              <input type="submit" name="read" class="more rounded-tr-2xl rounded-bl-2xl px-6 py-1.5" value="اقرأ المزيد">
                                  <input type="hidden" class="blogId" name="ID_BLOG" value="<?= $value['ID_BLOG'] ?>">
                              </form>
        </div>
        <div class="flex flex-col w-5/12">
          <img src="/jomoaa/public/assets/imgs/blog.png" alt="" style="height: 35vh;" class="w-5/12 absolute left-10 rounded-xl">
          
        </div>
      </div>
    </main>



    <script src="assets/js/authent.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/like.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>