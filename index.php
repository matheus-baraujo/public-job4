<?php

    session_start();

    $pagina = 'home';

    if(isset($_GET['i'])) {
        $pagina = addslashes($_GET['i']);
    }

    include 'stringManipulation.php';

    include 'connection.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<?php
    include './components/directives.php';
?>

<body>

<?php

    include './components/menu.php';

    switch ($pagina) {
        case 'home':
            include './views/home.php';
            break;

        case 'foryou':
            include './views/foryou.php';
            break;

        case 'about':
            include './views/about.php';
            break;    

        case 'services':
            include './views/servicos.php';
            break;    

        case 'blog':
            include './views/blog.php';
            break;

        case 'blog-completo':
            include './views/blog-completo.php';
            break;

        case 'article':
            include './views/article.php';
            break;     

        case 'contact':
            include './views/contato.php';
            break; 

        case 'admin':
            include './views/admin.php';
            break; 

        case 'logged_admin':
            if (isset($_SESSION['login'])) {
                include './views/logged_admin.php';
                break; 
            }else {
                header("location: index.php?i=admin");
            }

        case 'form_admin':
            if (isset($_SESSION['login'])) {
                include './views/form_admin.php';
                break; 
            }else {
                header("location: index.php?i=admin");
            }
            
        default:
            include './views/home.php';
            break;
    }

    include './components/footer.php';

    include './components/scripts.php';

?>

</body>

</html>