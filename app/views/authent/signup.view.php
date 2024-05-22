<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/signup.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
    <title>Your Space</title>
</head>
<body>
<nav class='rounded-br-3xl rounded-bl-3xl'>
    <img src="../assets/imgs/الجمعة-modified.png" alt="">
    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
<span class="sr-only">Open user menu</span>
<img class="w-8 h-8 me-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
Bonnie Green
<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
      <div class="font-medium ">Pro User</div>
      <div class="truncate">name@flowbite.com</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
    </ul>
    <div class="py-2">
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
    </div>
    
  </nav>
  <section>
  <i class="fa-solid fa-arrow-left" onclick="history.back()"></i>
      <form method="post" action="" enctype = multipart/form-data>
              <div class="title">
                  <h1>انشاء حساب</h1>
                  <h3>لديك حساب بالفعل؟<a href="http://localhost/jomoaa/authent/login"> تسحيل الدخول</a></h3>
              </div>
              <hr>
              <div class="section flex flex-col justify-center items-center">
                  <div class="row">
                      <div class="column1 test">
                          <label for="">الاسم </label>
                          <input type="text" name="name" placeholder="الاسم" required>
                          <label for="">النسب</label>
                          <input type="text" name="lastName" placeholder="النسب" required>
                          <label for="">البريد الالكتروني</label>
                          <input type="email" name="email" placeholder="البريد الالكتروني" required>
                      </div>
                      <div class="column1">
                          <label for="">كلمة السر</label>
                          <input type="password" name="password" placeholder="كلمة السر" required>
                          <label for="">تأكيد كلمة السر</label>
                          <input type="password" name="comfirmationPassword" placeholder="كلمة السر" required>
                          <label for="">صورة للحساب</label>
                          <input type="file" name="file" id="file" accept="image/*">
                      </div>
                  </div>
                  <input type="submit" value="تسجيل الدخول" name="signup">
                <p class="error">  
                
                </p>
                <!-- </div>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded   relative w-3/4 right-1/4" role="alert">
                <strong class="font-bold">Holy smokes!</strong>
                <span class="block sm:inline">Something seriously bad happened.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
                </div> -->
            </form>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>