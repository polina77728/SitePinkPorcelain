<?php 
    //include "../../path.php";
    include "../../app/controllers/users.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <title>Розовый фарфор, миниатюры, коллекция</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--Путь к стилям-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <!--Ссылки на шрифты гугл-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  
  </head>
  <body>

<!-- HEADER -->
<?php include("../../app/include/header-admin.php"); ?>

<!-- HEADER END -->

<div class="container">
    <!-- Меню слева SIDEBAR -->   
<?php include("../../app/include/sidebar-admin.php"); ?>
        
        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/users/create.php";?>" class="col-2 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/users/index.php";?>" class="col-3 btn btn-warning">Управление</a>
            </div>
            <div class="row title-table">
                <h2>Создание пользователя</h2>
                                
            </div>
            <div class="row add-post">
            <div class="mb-12 col-12 col-mb-12 err">
                <!-- Вывод массива с ошибками -->
                    <?php include "../../app/helps/errorInfo.php"; ?>
                </div>
                <form action="edit.php" method="post">
                    <input name="id" value="<?=$id?>" type="hidden">
                    
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Логин</label>
                        <input name="login" value="<?=$username?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин...">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="mail" value="<?=$email?>" type="email" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите ваш email...">
                        
                    </div>
                    
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Сбросить пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
                    </div>


                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="повторите ваш пароль...">
                    </div>
                        <input name="admin" class="form-check-input" value="1" type="checkbox" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Admin
                            </label>
                        <div class="col">
                            <button name="update-user" class="btn btn-primary" type="submit">Обновить</button>
                        </div>
                </form>
                
            </div>

        </div>

    </div>
</div>    


   

<!-- FOOTER -->
    <?php include("../../app/include/footer.php"); ?>

<!-- FOOTER END -->
    

<!-- Option 1: Bootstrap Bundle wich Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>