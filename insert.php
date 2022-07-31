<?php

session_start();

if(isset($_SESSION['login'])){

    include 'connection.php';


    $tipo = $_POST['type'];

    switch ($tipo) {
        
        case 'post':
            $title = $_POST['title'];
            $text = $_POST['texto'];
            $imagem = $_FILES['imagem'];
            $data = $_POST['data'];

            $ext = strtolower(substr($_FILES['imagem']['name'],-4)); //Pegando extensão do arquivo
            $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
            $dir = './post_images/'; //Diretório para uploads
        
            move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

            $query = 'INSERT INTO posts (title, imagem_post, texto, dia) VALUES ("'.$title.'","'.$dir.$new_name.'","'.$text.'","'.$data.'")';

            if ($success = mysqli_query($conn, $query)) {
                header('location: index.php?i=logged_admin');
            }
            break;
    
        default:
            header('location: index.php?i=logged_admin');
            break;
    }


}