<header>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Alpha Engenharia</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Personal modifications -->
    <link rel="stylesheet" href="./css/general.css">

    <?php 
        switch ($pagina) {
            case 'home':
                echo '<link rel="stylesheet" href="./css/home.css">';
                break;
            case 'foryou':
                echo '<link rel="stylesheet" href="./css/foryou.css">';
                break;
            case 'about':
                echo '<link rel="stylesheet" href="./css/about.css">';
                break;    
            case 'services':
                echo '<link rel="stylesheet" href="./css/services.css">';
                break;    
            case 'blog':
                echo '<link rel="stylesheet" href="./css/blog.css">';
                break;
            case 'article':
                echo '<link rel="stylesheet" href="./css/blog.css">';
                break; 
            case 'blog-completo':
                echo '<link rel="stylesheet" href="./css/blog.css">';
                break;    
            case 'contact':
                echo '<link rel="stylesheet" href="./css/contact.css">';
                break; 
            case 'admin':
                echo '<link rel="stylesheet" href="./css/contact.css">';
                break; 
            case 'logged_admin':
                echo '<link rel="stylesheet" href="./css/contact.css">';
                break; 
            case 'form_admin':
                echo '<link rel="stylesheet" href="./css/contact.css">';
                break;
            default:
                echo '<link rel="stylesheet" href="./css/home.css">';
                break;
        }
    ?>

</header>