 <!--Путь к адресам (путь) -->
<?php   include("path.php");
        include "app/controllers/users.php";
?>
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

<!-- FORM-->
        <div class="container reg_form">
            <form class="row justify-content-md-center" method="post" action="log.php">
                <h2 class="col-12">Авторизация</h2>
                <div class="mb-12 col-12 col-mb-4 err">
                <!-- Вывод массива с ошибками -->
                    <?php include "app/helps/errorInfo.php"; ?>
                </div>
                <div class="w1-100"></div> <!-- переход столбца на новую строку-->

                <div class="mb-3 col-12 col-md-4">
                    <label for="formGroupExampleInput" class="form-label">Ваша почта (при регистрации)</label>
                    <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="w1-100"></div> <!-- переход столбца на новую строку-->
                
                <div class="mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input name="password" type="password" class="form-control" id="formGroupExampleInput" placeholder="Введите Ваш пароль">
                </div>
                
                <div class="w1-100"></div> <!-- переход столбца на новую строку-->
                <div class="mb-3 col-12 col-md-4">
                    <button type="submit" name="button-log" class="btn btn-danger">Войти</button>
                    <a href="aut.html">Зарегистрироваться</a>
                </div> 
            </form>  
        </div>          


<!-- ENDFORM-->

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