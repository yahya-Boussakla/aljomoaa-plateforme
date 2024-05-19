<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6e2f9a7b88.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styl.css">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Nastaliq+Urdu:wght@400..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap');
* {
  box-sizing: border-box;
  margin: 0%;
  padding: 0%;
}
body {
    font-family: "Cairo", sans-serif;
    font-optical-sizing: auto;
    /* font-weight: <weight>; */
    font-style: normal;
    font-variation-settings:
      "slnt" 0;
  scroll-behavior: smooth;
  direction: rtl;
}
header {
  position: relative;
  height: 80vh;
  
}
header span {
  color: white;
}
#authent{
    position: absolute;
    width: 15%;
    height: 10%;
    z-index: 4;
    top: 3%;
    gap: 20px;
    right: 0%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    font-weight: 600;
}
#authent a{
    border-radius: 7px;
    text-align: center;
    text-decoration: none;
    color: white;
}
.login{
    background-color: #ffb860;
    padding: 4% 7%;
}

#bg {
  background-color: rgba(33, 32, 32, 0.5);
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
}
.bg {
  width: 100vw;
  height: 100%;
}
.logo {
  position: absolute;
  top: 35%;
  left: 30%;
  z-index: 2;
  width: 15%;
}
header h1 {
  position: absolute;
  top: 34%;
  left: 50%;
  font-size: 900%;
  z-index: 2;
  color: white;
  font-family: "Noto Nastaliq Urdu", serif;
  font-optical-sizing: auto;
  font-style: normal;
}
nav li {
  display: inline-block;
  font-weight: 600;
  font-size: 120%;
}
nav {
  display: flex;
  flex-direction: row;
}
#navBar {
  justify-content: center;
  align-items: center;
  gap: 37px;
  height: 10vh;
  background-color: #ffb860;
}

.search-bar {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  input {
    transition: 200ms all ease;
  }
  .open {
    width: 10rem;
    border: 1px;
    padding: 0.2rem;
    border-radius: 8px;
  }
  .closed {
    width: 0px;
    border: 0;
  }
}

#links {
  padding: 0.5rem 2rem;
  gap: 10px;
  height: 8%;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(7.8px);
  -webkit-backdrop-filter: blur(7.8px);
}
#links div{
  width: auto;
  display: flex;
  flex-direction: row;
  gap: 10px;
}
#links button{
  background-color: #7690D2;
}
nav span {
  padding: 0.2% 0.5%;
  background-color: lightblue;
  font-weight: 700;
  text-align: center;
  min-width: 8%;
}
    </style>
<header>
        <div id="authent">
            <a class="login" href="">ابدأ هنا</a>
            <a href="" class="signup">تسجيل الدخول</a>
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

    <h1>من نحن ؟</h1>

</body>
</html>