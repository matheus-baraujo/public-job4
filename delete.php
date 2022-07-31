<?php

session_start();

if(isset($_SESSION['login'])){

    include 'connection.php';


    $tipo = $_GET['type'];

    switch ($tipo) {
        
        case 'post':
            $id = $_GET['id'];

            $item = mysqli_query($conn, 'SELECT * FROM posts WHERE id_post= '.$id.'');
            $item2 = mysqli_fetch_array($item);
            unlink($item2['imagem_post']);

            $query = 'DELETE FROM posts WHERE id_post ='.$id.'';
            
            if (mysqli_query($conn, $query)) {
                header('location: index.php?i=logged_admin');
            }
            break;

        case 'suggestion':
            $id = $_GET['id'];

            $query = 'DELETE FROM suggestions WHERE id_suggestion ='.$id.'';
            
            if (mysqli_query($conn, $query)) {
                header('location: index.php?i=logged_admin');
            }
            break;
    
        default:
            header('location: index.php?i=logged_admin');
            break;
    }


}