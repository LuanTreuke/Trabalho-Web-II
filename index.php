<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do site">
    <meta name="keywords" content="Palavra chave 1, 2, 3, etc...">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/style.css">
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <!-- Icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Projeto 1</title>
</head>

<body>
    
<?php
        //Obtendo a url se existir ou home
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
    

    <header>
        <div class="center">
            <div class="logo left">Logomarca</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="bars-mobile fa-solid fa-bars"></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>

    <?php
        //Se $url existe
        if(file_exists('pages/'.$url.'.php')) {
            include('pages/'.$url.'.php');
        } else {
            if($url != 'depoimentos' && $url != 'servicos') {
                $is404 = true;
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
            
        }
    ?>

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

    <?php if($url == 'home' || $url == '' || $url == 'depoimentos' || $url == 'servicos' ){?>
        <script src="<?php echo INCLUDE_PATH;?>assets/js/slider.js"></script>  
    <?php } ?>
    
</body>

</html>