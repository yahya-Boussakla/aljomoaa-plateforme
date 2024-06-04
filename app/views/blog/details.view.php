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
      <section class="flex flex-col w-2/12 gap-10 text-right">
        
      </section>
      <section  class="w-7/12 rounded-xl">   
        <div id="editor" class="min-h-96 text-right ql-snow">
          <div class="ql-editor" contenteditable="false" style="text-align: right;">
          <?php
            echo $this->blog['CONTENT'];  
          ?>
          </div>
        </div>
      </section>
<!-- <section style="width: 70%; height: 80vh;">
</section> -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>