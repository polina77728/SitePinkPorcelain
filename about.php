<?php 
  include "path.php"; 
    //include "app/database/db.php";
  include "app/controllers/topics.php";
  
  
  // Пагинация
  $page = isset($_GET['page']) ? $_GET['page']: 1;
  $limit = 5;
  $offset = $limit * ($page - 1);
  $total_pages = round(countRow('posts') / $limit, 0);  //сколько получаем страниц

  $posts = selectAllFromPostsWithUsersOnIndex('posts', 'users', $limit, $offset);
  $topTopic = selectTopTopicFromPostsOnIndex('posts');
  
  //tt($total_pages);

?>  <!--Путь к адресам (путь) -->

<!doctype html>
<html lang="en">
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
                    <div class="main-content col-md-9 col-12">
                        <h2> Винтажная посуда в сердце навсегда </h2>

                        <div class="single_post row">
                            <div class="img col-12"> <!-- формат для динамики картинок при сужении экрана -->
                                <img src="assets/images/незабудки.jpeg" alt="" class="img-thumbnail">
                            </div>
                            <div class="info">
                                <i class="far fa-user">Название мануфактуры</i>
                                <i class="far fa-calendar">Mar 11, 2019</i>
                            </div>
                            <div class="single_post_text col-12"> <!-- формат для динамики текста при сужении экрана -->
                                
                                <p>
                                    Добро пожаловать на наш сайт, посвященный винтажному фарфору! 
                                </p>
                                <p>
                                    Здесь вы сможете насладиться красотой и изящностью этого уникального искусства. 
                                    Мы создали этот ресурс, чтобы поделиться этой красотой с максимальным числом людей и, 
                                    возможно, вдохновить их начать свою собственную коллекцию.
                                </p>
                                <p>
                                    Наши страницы наполнены прекрасными фотографиями и описаниями винтажного фарфора, 
                                    которые помогут вам погрузиться в его удивительный мир. 
                                </p>
                                <p>    
                                    Мы также предлагаем помощь в поиске и приобретении винтажных предметов для вашей коллекции.
                                    Не упустите возможность окунуться в мир роскоши и элегантности, 
                                    который предлагает винтажный фарфор. 
                                    Присоединяйтесь к нам и давайте вместе откроем двери в эту удивительную сферу искусства.
 
                                </p>
                            </div>
                        </div>        
                    </div>
                
                <!-- sidebar content -->
                <div class="sidebar col-md-3 col-12">
                    <div class="section search">
                        <h3>Поиск</h3>  <!-- Строка поиска -->
                        <form action="index.html" method="post">  <!-- Экшен должен кудатовести вместо / чтото типа-> index.html -->
                            <input type="text" name="search-term" class="text-input" placeholder="Введите...">
                        </form>
                    </div>

                    <div class="section topics">
                        <h3>Категории</h3>
                        <ul>
                            <?php foreach ($topics as $key => $topic): ?>
                                <li>
                                    <a href="<?=BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?=$topic['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
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