<?php session_start();
    include "../../path.php";
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
                <a href="<?php echo BASE_URL . "admin/users/create.php"; ?>" class="col-2 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/users/index.php"; ?>" class="col-3 btn btn-warning">Управление</a>
            </div>

            <div class="row title-table">
                <h2>Пользователи</h2>
                <div class="mb-12 col-12 col-mb-12 err">
                    <p><?=$_SESSION['error'];?></p>
                </div>
                <div class="id col-1">ID</div>
                <div class="title col-2">Логин</div>
                <div class="title col-3">Email</div>
                <div class="author col-2">Роль</div>
                <div class="red col-4">Управление</div>
                
            </div>
            <?php foreach($users as $key => $user): ?>
            <div class="row post">
                <div class="id col-1"><?=$user['id']; ?></div>
                <div class="title col-2"><?=$user['username']; ?></div>
                <div class="title col-3"><?=$user['email']; ?></div>
                <?php if($user['admin'] == 1): ?>
                    <div class="col-2">Admin</div>
                <?php else: ?>
                    <div class="col-2">User</div>
                <?php endif; ?>

                <div class="red col-2"><a href="edit.php?edit_id=<?=$user['id']; ?>">edit</a></div>
                <div class="dell col-2"><a href="index.php?delete_id=<?=$user['id']; ?>">delete</a></div>
            </div>
            <?php endforeach; ?>
            
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