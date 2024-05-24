<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/blog.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <title>كتابة مقال</title>
</head>

<body>
  <i id="arrow" class="fa-solid fa-arrow-left" onclick="history.back()"></i>
  <header>
    <nav class="">
      <div class=" flex flex-wrap items-center w-full justify-between ">
    <a href="http://localhost/jomoaa/" class="flex items-center h-12 space-x-3 rtl:space-x-reverse">
      <img src="assets/imgs/الجمعة-modified.png" class="w-12" alt="">
    </a>
    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" style="background-color: #ffb860; direction: rtl;" class="flex items-center text-sm pe-1 pl-4 pr-4 py-4 font-medium text-gray-900 rounded-xl hover:text-black-600 dark:hover:text-black md:me-0 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
      <span class="sr-only">Open user menu</span>
      <img class="w-8 h-8 me-2 rounded-full" src="public/assets/imgs/bg.png" alt="user photo">
      حسابي
      <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
      </button>

      <!-- Dropdown menu -->
      <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
          <div class="px-4 py-3 text-sm text-gray-900 ">
            <div class="font-medium "></div>
            <div class="truncate"></div>
          </div>
          <ul class="py-2 text-sm text-right text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-right text-gray-800">حسابي</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-right text-gray-800">الوسخ</a>
            </li>
            
          </ul>
          <div class="py-2">
            <form action="" method="post">
              <input type="submit" name="logout" value="تسجيل الخروج" class="w-full text-right block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-gray-800" >
            </form>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <article class="flex flex-row mt-32 justify-evenly">
    <section class="flex flex-col w-2/12 gap-10 text-right">
      <button style="background-color: #ffb860;" onclick="test()" class="text-white font-semibold py-2 px-8 rounded">
        نشر  
      </button>
      <button class="text-center text-gray-800 font-semibold border border-black rounded inline-flex items-center">
      <span id="private" class="h-full px-4 py-2 border-r border-black">
        <i class="fa-regular fa-eye"></i>
      </span>
      <span class="px-16 text-center">
        الخصوصية
      </span>
      </button>
      <button class="bg-transparent font-semibold py-2 px-4 border border-black rounded">    
        حفظ في المسودة
      </button>
      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">كيف أكتب مقال ؟</a>
    </section>
    <section  class="w-7/12 rounded-xl">
      <div class=" text-right w-full flex flex-row gap-10">
        <select class="bg-transparent rounded text-gray-800 font-semibold w-4/12 border-b border-orange-300 text-center px-4" name="" id="">
          <option value="">
          الصنف
          </option>
        </select>
        <input type="text" class="bg-transparent text-gray-800 font-semibold w-8/12 border-x-0 border-b border-t-0 border-orange-300 text-right px-4" placeholder="العنوان">
      </div>
      <div id="toolbar" class=" text-left mt-10"></div>
      <div id="editor" class="min-h-96 text-right">
      أكتب هنا
      </div>
    </section>
  </article>
  <form method="post" action="" id="myForm">
    <input type="hidden" name="blogContent" id="test">
  </form>      
  <script src="assets/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  
</body>
</html>