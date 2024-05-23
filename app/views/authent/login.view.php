<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/login.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
  <title>تسجيل الدخول</title>
</head>

<body>
  <nav class='rounded-br-3xl rounded-bl-3xl'>
    <img src="../assets/imgs/الجمعة-modified.png" alt="">
  </nav>
  <section>
  <i class="fa-solid fa-arrow-left" onclick="history.back()"></i>
    <form action="" method='post'>
      <h1>تسجيل الدخول</h1>
      <input type="text" name="EMAIL" placeholder="اسم المستخدم" require><br>
      <input type="password" name="PASSWORD" placeholder="كلمة السر" require><br>
      <input type="submit" name="login" value="تسجيل الدخول">
      <p>   ليس لديك حساب ؟<a href="http://localhost/jomoaa/authent/signup"> انشاء حساب</a></p>
    </form>
  </section>
</body>

</html>