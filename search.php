<?php 
    include "path.php"; 
    include "app/database/db.php";
  
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-term'])){
        $posts =searchInTitleAndContent($_POST['search-term'], 'posts', 'users');
    }
  
  
?>  <!--Путь к адресам (путь) -->


<!doctype html>
<html lang="ru">
  <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Розовый фарфор, миниатюры, коллекция</title>
  
  </head>
  <body>

    <!-- HEADER -->
      <?php include("app/include/header.php"); ?>

    <!-- HEADER END -->

    <!-- блок main -->
    <div class="container">
      <div class="content row">
        <!-- main-content -->
        <div class="main-content col-12">
          <h2>Результаты поиска</h2>
          <?php foreach ($posts as $post): ?>

            <div class="post row">
              <div class="img col-12 col-md-4"> <!-- формат для динамики картинок при сужении экрана -->
                <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title'] ?>" class="img-thumbnail">
                <a href="<?=BASE_URL . 'single.php?=post=' . $post['id']; ?>"><?=substr($post['title'], 0, 120) . ' ...' ?></a>
              </div>
              <div class="post_text col-12 col-md-8"> <!-- формат для динамики текста при сужении экрана -->
                <h3>
                  <a href="<?=BASE_URL . 'single.php?=post=' . $post['id']; ?>"><?=substr($post['title'], 0, 80) . ' ...' ?></a>                             
                </h3>
                <i class="far fa-user"> <?=$post['username']; ?></i>
                <i class="far fa-calendar"> <?=$post['created_date']; ?></i>
                <p class="preview-text">
                  <?=mb_substr($post['content'], 0, 55, 'UTF-8') . ' ...' ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
        
    <!-- блок main END-->

<!-- FOOTER -->
    <?php include("app/include/footer.php"); ?>

<!-- FOOTER END -->
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>
</html>