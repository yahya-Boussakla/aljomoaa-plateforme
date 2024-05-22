<header class="relative">
  <div id="authent" class="absolute flex flex-row justify-center items-center top-5 mr-1 z-10 w-2/12 h-4-12 right-0 font-semibold gap-x-5 text-white">
    <?php
    // session_start();
    if (isset($_SESSION['USER'])) {
      // var_dump($data);
    ?>
      <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" style="background-color: #ffb860;" class="flex items-center text-sm pe-1 pl-4 pr-4 py-4 font-medium text-gray-900 rounded-xl hover:text-black-600 dark:hover:text-black md:me-0 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
      <span class="sr-only">Open user menu</span>
      <img class="w-8 h-8 me-2 rounded-full" src="public/assets/imgs/imgsmom.jpg" alt="user photo">
      Bonnie Green
      <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
      </button>

      <!-- Dropdown menu -->
      <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
          <div class="px-4 py-3 text-sm text-gray-900 ">
            <div class="font-medium ">حساب المستعمل</div>
            <div class="truncate">name@flowbite.com</div>
          </div>
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-gray-800">حسابي</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-gray-800">الوسخ</a>
            </li>
            
          </ul>
          <div class="py-2">
            <form action="" method="post">
              <input type="submit" name="logout" value="تسجيل الخروج" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-gray-800" >
            </form>
          </div>
    <?php
    }
    else {
    ?>
      <a class="login text-center no-underline rounded-md w-4/12" href="http://localhost/jomoaa/authent/login">ابدأ هنا</a>
      <a href="http://localhost/jomoaa/authent/signup" class="text-center no-underline rounded-md w-5/12 ">تسجيل الدخول</a>
    <?php
    }
    ?>
  </div>


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