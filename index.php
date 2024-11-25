<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site não oficial do Pokémon">
    <meta name="keywords" content="Pokédex, Pokémon">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/style.css">
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <!-- Icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH;?>favicon.ico" type="image/x-icon">
    
    <title>Site Pokémon</title>
</head>

<body>
    
<?php
        //Obtendo a url se existir, senão, home
        $url = isset($_GET['url']) ? $_GET['url'] : 'home'; //equivalente a lógica de if(exists(get('url'))) {url = get(url)} else {url = 'home'}

        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos"/>';
                break;
            
            case 'servicos':
                echo '<target target="servicos"/>';
                break;
        }
    ?>
    

    <header class="header-index">
            <a href="<?php echo INCLUDE_PATH;?>">
                <img src="<?php echo INCLUDE_PATH;?>home icon.png" alt="LOGO POKEBOLA" id="home-button">
            </a>
        <nav class="nav-bar">
            <div class="nav-list">
                <ul>
                    <li class="nav-li"><a href="<?php echo INCLUDE_PATH;?>pokedex">Pokédex</a></li>
                    <li class="nav-li"><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                    <li class="nav-li"><a href="<?php echo INCLUDE_PATH;?>autor">Autor</a></li>
                </ul>
            </div>
        </nav>
        <nav class="mobile">
            <div class="barras">
                <div class="bars-mobile fa-solid fa-bars"></div>
            </div>
            <ul>
                <li ><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>pokedex">Pokédex</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>autor">Autor</a></li>
            </ul>
        </nav>

    </header>

    <?php
        if(file_exists('pages/'.$url.'.php')) {
            include('pages/'.$url.'.php');
        } else {
            if($url != 'pokedex' && $url != 'contato' && $url != 'autor') {
                $is404 = true;
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
            
        }
    ?>

    <a href="https://wa.me/5542999999999" class="btnWhatsapp" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class = "fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados!</p>
        </div>
    </footer>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?php echo INCLUDE_PATH;?>assets/js/scripts.js"></script>    

    <?php if($url == 'home' || $url == '' || $url == 'autor' || $url == 'contato' || $url == 'pokedex'){?>
        <script src="<?php echo INCLUDE_PATH;?>assets/js/slider.js"></script>
        <script src="<?php echo INCLUDE_PATH;?>assets/js/especialidades.js"></script>
        <script src="<?php echo INCLUDE_PATH;?>assets/js/atualizacoes.js"></script>
    <?php } ?>
    
    

</body>

</html>