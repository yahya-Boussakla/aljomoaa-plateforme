<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="assets/css/styl.css"> -->
  <link rel="stylesheet" href="assets/css/blog.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
  <title>كتابة مقال</title>
</head>

<body>
  <nav class='rounded-br-3xl rounded-bl-3xl'>
    <img src="assets/imgs/الجمعة-modified.png" alt="">
    <div id="authent" class="absolute flex flex-row justify-center items-center top-5 mr-1 z-10 w-2/12 h-4-12 right-0 font-semibold gap-x-5 text-white">
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
  </nav>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>