<header class="container-fluid"> <!-- контейнер на всю ширину ПК -->
    <div class="container">
        <div class="row">
            <div class="col-4"> <!--Ширина колонок-->
                <h1>
                    <a href="<?php echo BASE_URL ?>">ВИНТАЖ</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li>
                    <a href="#">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['login']; ?>
                        </a>
                    </li>   
                    <li>
                        <a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a> 
                    </li>                      
                </ul>
            </nav>
        </div>
    </div>
</header>

          