<?php
    include "../../path.php";
    include "../../app/controllers/posts.php";


?>


<!doctype html>
<html lang="ru">
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
                <a href="<?php echo BASE_URL . "admin/posts/create.php"; ?>" class="col-2 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/posts/index.php"; ?>" class="col-3 btn btn-warning">Управлять</a>
            </div>
            <div class="row title-table">
                <h2>Добавление записи</h2>                 
            </div>
            <div class="row add-post">
                <div class="mb-12 col-12 col-mb-12 err">
                <!-- Вывод массива с ошибками -->
                    <?php include "../../app/helps/errorInfo.php"; ?>
                </div>
                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div class="col mb-4">
                        <input value="<?=$title; ?>" name="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержимое записи</label>
                        <textarea name="content" id="editor" class="form-control" rows="6"><?=$content; ?></textarea>
                    </div>
                    
                    <div class="input-group col mb-4 mt-4">
                        <input name="img" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    

                    <select name="topic" class="form-select mb-4" aria-label="Default select example">
                        <option selected>Категория поста:</option>
                        <?php foreach ($topics as $key => $topic): ?>
                            <option value="<?=$topic['id']; ?>"><?=$topic['name'];?></option>


                        <?php endforeach; ?>     
                    </select>
                    <div class="form-check">
                        <input name="publish" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Publish
                        </label>
                    <div class="col col-6">
                        <button name="add_post" class="btn btn-primary" type="submit">Добавить запись</button>
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
  <!-- Добавление визуального редактора к текстовому полю админки-->
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>

    <script src="../../assets/js/scripts.js"></script>

</body>
</html>