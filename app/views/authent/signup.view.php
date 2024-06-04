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
               
            </form>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>